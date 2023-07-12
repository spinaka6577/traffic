<?php

namespace App\Entity;

use App\Repository\StarshipRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=StarshipRepository::class)
 */
class Starship
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
    private $model;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $manufacturer;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $costInCredits;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $length;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $maxAtmospheringSpeed;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $crew;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $passengers;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $cargoCapacity;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $consumables;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $hyperdriveRating;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $MGLT;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $starshipClass;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $url;
    /**
     * @ORM\Column(type="datetime_immutable")
     */
    private $created;

    /**
     * @ORM\Column(type="datetime_immutable")
     */
    private $edited;

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

    public function getModel(): ?string
    {
        return $this->model;
    }

    public function setModel(string $model): self
    {
        $this->model = $model;

        return $this;
    }

    public function getManufacturer(): ?string
    {
        return $this->manufacturer;
    }

    public function setManufacturer(string $manufacturer): self
    {
        $this->manufacturer = $manufacturer;

        return $this;
    }

    public function getCostInCredits(): ?string
    {
        return $this->costInCredits;
    }

    public function setCostInCredits(string $costInCredits): self
    {
        $this->costInCredits = $costInCredits;

        return $this;
    }

    public function getLength(): ?string
    {
        return $this->length;
    }

    public function setLength(string $length): self
    {
        $this->length = $length;

        return $this;
    }

    public function getMaxAtmospheringSpeed(): ?string
    {
        return $this->maxAtmospheringSpeed;
    }

    public function setMaxAtmospheringSpeed(string $maxAtmospheringSpeed): self
    {
        $this->maxAtmospheringSpeed = $maxAtmospheringSpeed;

        return $this;
    }

    public function getCrew(): ?string
    {
        return $this->crew;
    }

    public function setCrew(string $crew): self
    {
        $this->crew = $crew;

        return $this;
    }

    public function getPassengers(): ?string
    {
        return $this->passengers;
    }

    public function setPassengers(string $passengers): self
    {
        $this->passengers = $passengers;

        return $this;
    }

    public function getCargoCapacity(): ?string
    {
        return $this->cargoCapacity;
    }

    public function setCargoCapacity(string $cargoCapacity): self
    {
        $this->cargoCapacity = $cargoCapacity;

        return $this;
    }

    public function getConsumables(): ?string
    {
        return $this->consumables;
    }

    public function setConsumables(string $consumables): self
    {
        $this->consumables = $consumables;

        return $this;
    }

    public function getHyperdriveRating(): ?string
    {
        return $this->hyperdriveRating;
    }

    public function setHyperdriveRating(string $hyperdriveRating): self
    {
        $this->hyperdriveRating = $hyperdriveRating;

        return $this;
    }

    public function getMGLT(): ?string
    {
        return $this->MGLT;
    }

    public function setMGLT(string $MGLT): self
    {
        $this->MGLT = $MGLT;

        return $this;
    }

    public function getStarshipClass(): ?string
    {
        return $this->starshipClass;
    }

    public function setStarshipClass(string $starshipClass): self
    {
        $this->starshipClass = $starshipClass;

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
