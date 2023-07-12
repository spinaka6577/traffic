<?php


namespace App\Service;

use App\Entity\Films;
use App\Entity\People;
use App\Entity\Planet;
use App\Entity\Species;
use App\Entity\Starship;
use App\Entity\Vehicle;
use App\Repository\PersonRepository;
use DateTime;
use Doctrine\ORM\EntityManagerInterface;
use GuzzleHttp\Client;
use Symfony\Component\Serializer\Normalizer\AbstractNormalizer;
use Symfony\Component\Serializer\SerializerInterface;

class HeroService
{
    private SerializerInterface $serializer;
    private EntityManagerInterface $em;
    private $url;
    private $cacert;
    public function __construct(SerializerInterface $serializer, EntityManagerInterface $em, $cacert, $swapi)
    {
        $this->serializer = $serializer;
        $this->em = $em;
        $this->url = $swapi;
        $this->cacert = $cacert;
    }

    public function get()
    {
        $counter = 0;
        for ($i = 1; $i <= 83; $i++) {
            try {
                $client = new Client([
                    'verify' => $this->cacert,
                    'base_uri' => $this->url,
                    'exceptions' => false
                ]);

                $response = $client->get('people/' . $i);
                $heroJson = $response->getBody();
                $json = (json_decode($heroJson->getContents(), true));
                $person = $this->em->getRepository(People::class)->findOneBy(['url' => $json['url']]);
                if (is_null($person)) {
                    $person = new People();
                };
                $person
                    ->setName($json['name'])
                    ->setHeight($json['height'])
                    ->setMass($json['mass'])
                    ->setHairColor($json['hair_color'])
                    ->setSkinColor($json['skin_color'])
                    ->setEyeColor($json['eye_color'])
                    ->setGender($json['gender'])
                    ->setBirthYear($json['birth_year'])
                    ->setUrl($json['url'])
                    ->setCreated(new \DateTimeImmutable($json['created']))
                    ->setEdited(new \DateTimeImmutable($json['edited']));


                $this->addRelation($person, $json['films'], Films::class);
                $this->addRelation($person, $json['starships'], Starship::class);
                $this->addRelation($person, $json['homeworld'], Planet::class);
                $this->addRelation($person, $json['vehicles'], Vehicle::class);
                $this->addRelation($person, $json['species'], Species::class);

                $this->em->persist($person);
                $counter++;
                echo 'Pobrano użytkownika ' . $i . PHP_EOL;
            } catch (\GuzzleHttp\Exception\ClientException $e) {
                echo 'Brak użytkownika o id ' . $i . PHP_EOL;
            }
            $this->em->flush();

        }
        return $counter;
    }

    private function addRelation(People $person, $relations, $class)
    {
        if (!is_array($relations)) {
            $relations = array($relations);
        }
        foreach ($relations as $relationUrl) {
            $client = new Client([
                'verify' => $this->cacert,
                'base_uri' => $this->url
            ]);

            $relation = $this->em->getRepository($class)->findOneBy(['url' => $relationUrl]);

            $url = str_replace($this->url, '', $relationUrl);
            $response = $client->get($url);
            $json = $response->getBody();


            $relation = $this->serializer->deserialize(
                $json->getContents(),
                $class,
                'json',
                [AbstractNormalizer::OBJECT_TO_POPULATE => $relation]);
            $this->em->persist($relation);

            switch ($class) {
                case Films::class:
                    $person->addFilm($relation);
                    break;
                case Starship::class:
                    $person->addStarship($relation);
                    break;
                case Planet::class:
                    $person->setHomeworld($relation);
                    break;
                case Vehicle::class:
                    $person->addVehicle($relation);
                    break;
                case Species::class:
                    $person->addSpecies($relation);
                    break;
            }

        }

        $this->em->flush();
    }

}