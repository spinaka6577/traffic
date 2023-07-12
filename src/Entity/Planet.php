<?php

namespace App\Entity;

use App\Repository\PlanetRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=PlanetRepository::class)
 */
class Planet
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
    private $rotationPeriod;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $orbitalPeriod;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $diameter;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $climate;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $gravity;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $terrain;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $surfaceWater;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $population;

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

    public function getRotationPeriod(): ?string
    {
        return $this->rotationPeriod;
    }

    public function setRotationPeriod(string $rotationPeriod): self
    {
        $this->rotationPeriod = $rotationPeriod;

        return $this;
    }

    public function getOrbitalPeriod(): ?string
    {
        return $this->orbitalPeriod;
    }

    public function setOrbitalPeriod(string $orbitalPeriod): self
    {
        $this->orbitalPeriod = $orbitalPeriod;

        return $this;
    }

    public function getDiameter(): ?string
    {
        return $this->diameter;
    }

    public function setDiameter(string $diameter): self
    {
        $this->diameter = $diameter;

        return $this;
    }

    public function getClimate(): ?string
    {
        return $this->climate;
    }

    public function setClimate(string $climate): self
    {
        $this->climate = $climate;

        return $this;
    }

    public function getGravity(): ?string
    {
        return $this->gravity;
    }

    public function setGravity(string $gravity): self
    {
        $this->gravity = $gravity;

        return $this;
    }

    public function getTerrain(): ?string
    {
        return $this->terrain;
    }

    public function setTerrain(string $terrain): self
    {
        $this->terrain = $terrain;

        return $this;
    }

    public function getSurfaceWater(): ?string
    {
        return $this->surfaceWater;
    }

    public function setSurfaceWater(string $surfaceWater): self
    {
        $this->surfaceWater = $surfaceWater;

        return $this;
    }

    public function getPopulation(): ?string
    {
        return $this->population;
    }

    public function setPopulation(string $population): self
    {
        $this->population = $population;

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
