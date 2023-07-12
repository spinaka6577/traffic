<?php

namespace App\Entity;

use App\Repository\PeopleRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=PeopleRepository::class)
 */
class People
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $height;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $mass;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $hairColor;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $skinColor;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $eyeColor;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $birthYear;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $gender;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $url;

    /**
     * @ORM\ManyToMany(targetEntity=Films::class)
     */
    private $Films;

    /**
     * @ORM\ManyToMany(targetEntity=Starship::class)
     */
    private $starships;

    /**
     * @ORM\ManyToOne(targetEntity=Planet::class)
     * @ORM\JoinColumn(nullable=false)
     */
    private $homeworld;

    /**
     * @ORM\ManyToMany(targetEntity=Vehicle::class)
     */
    private $vehicles;

    /**
     * @ORM\ManyToMany(targetEntity=Species::class)
     */
    private $species;

    /**
     * @ORM\Column(type="datetime_immutable", length=6)
     */
    private $created;

    /**
     * @ORM\Column(type="datetime_immutable", length=6)
     */
    private $edited;

    public function __construct()
    {
        $this->Films = new ArrayCollection();
        $this->starships = new ArrayCollection();
        $this->vehicles = new ArrayCollection();
        $this->species = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getHeight(): ?string
    {
        return $this->height;
    }

    public function setHeight(string $height): self
    {
        $this->height = $height;

        return $this;
    }

    public function getMass(): ?string
    {
        return $this->mass;
    }

    public function setMass(string $mass): self
    {
        $this->mass = $mass;

        return $this;
    }

    public function getHairColor(): ?string
    {
        return $this->hairColor;
    }

    public function setHairColor(string $hairColor): self
    {
        $this->hairColor = $hairColor;

        return $this;
    }

    public function getSkinColor(): ?string
    {
        return $this->skinColor;
    }

    public function setSkinColor(string $skinColor): self
    {
        $this->skinColor = $skinColor;

        return $this;
    }

    public function getEyeColor(): ?string
    {
        return $this->eyeColor;
    }

    public function setEyeColor(string $eyeColor): self
    {
        $this->eyeColor = $eyeColor;

        return $this;
    }

    public function getBirthYear(): ?string
    {
        return $this->birthYear;
    }

    public function setBirthYear(string $birthYear): self
    {
        $this->birthYear = $birthYear;

        return $this;
    }

    public function getGender(): ?string
    {
        return $this->gender;
    }

    public function setGender(string $gender): self
    {
        $this->gender = $gender;

        return $this;
    }

    public function getUrl(): ?string
    {
        return $this->url;
    }

    public function setUrl(string $url): self
    {
        $this->url = $url;

        return $this;
    }

    /**
     * @return Collection<int, Films>
     */
    public function getFilms(): Collection
    {
        return $this->Films;
    }

    public function addFilm(Films $film): self
    {

        if (!$this->Films->contains($film)) {
            $this->Films[] = $film;
        }

        return $this;
    }

    public function removeFilm(Films $film): self
    {
        $this->Films->removeElement($film);

        return $this;
    }

    /**
     * @return Collection<int, Starship>
     */
    public function getStarships(): Collection
    {
        return $this->starships;
    }

    public function addStarship(Starship $starship): self
    {
        if (!$this->starships->contains($starship)) {
            $this->starships[] = $starship;
        }

        return $this;
    }

    public function removeStarship(Starship $starship): self
    {
        $this->starships->removeElement($starship);

        return $this;
    }

    public function getHomeworld(): ?Planet
    {
        return $this->homeworld;
    }

    public function setHomeworld(?Planet $homeworld): self
    {
        $this->homeworld = $homeworld;

        return $this;
    }

    /**
     * @return Collection<int, Vehicle>
     */
    public function getVehicles(): Collection
    {
        return $this->vehicles;
    }

    public function addVehicle(Vehicle $vehicle): self
    {
        if (!$this->vehicles->contains($vehicle)) {
            $this->vehicles[] = $vehicle;
        }

        return $this;
    }

    public function removeVehicle(Vehicle $vehicle): self
    {
        $this->vehicles->removeElement($vehicle);

        return $this;
    }

    /**
     * @return Collection<int, Species>
     */
    public function getSpecies(): Collection
    {
        return $this->species;
    }

    public function addSpecies(Species $species): self
    {
        if (!$this->species->contains($species)) {
            $this->species[] = $species;
        }

        return $this;
    }

    public function removeSpecies(Species $species): self
    {
        $this->species->removeElement($species);

        return $this;
    }

    public function getCreated(): ?\DateTimeInterface
    {
        return $this->created;
    }

    public function setCreated(\DateTimeInterface $created): self
    {
        $this->created = $created;

        return $this;
    }

    public function getEdited(): ?\DateTimeInterface
    {
        return $this->edited;
    }

    public function setEdited(\DateTimeInterface $edited): self
    {
        $this->edited = $edited;

        return $this;
    }
}
