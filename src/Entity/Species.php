<?php

namespace App\Entity;

use App\Repository\SpeciesRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=SpeciesRepository::class)
 */
class Species
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
    private $classification;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $averageHeight;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $skinColors;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $hairColors;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $eyeColors;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $averageLifespan;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $language;

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

    public function getClassification(): ?string
    {
        return $this->classification;
    }

    public function setClassification(string $classification): self
    {
        $this->classification = $classification;

        return $this;
    }

    public function getAverageHeight(): ?string
    {
        return $this->averageHeight;
    }

    public function setAverageHeight(string $averageHeight): self
    {
        $this->averageHeight = $averageHeight;

        return $this;
    }

    public function getSkinColors(): ?string
    {
        return $this->skinColors;
    }

    public function setSkinColors(string $skinColors): self
    {
        $this->skinColors = $skinColors;

        return $this;
    }

    public function getHairColors(): ?string
    {
        return $this->hairColors;
    }

    public function setHairColors(string $hairColors): self
    {
        $this->hairColors = $hairColors;

        return $this;
    }

    public function getEyeColors(): ?string
    {
        return $this->eyeColors;
    }

    public function setEyeColors(string $eyeColors): self
    {
        $this->eyeColors = $eyeColors;

        return $this;
    }

    public function getAverageLifespan(): ?string
    {
        return $this->averageLifespan;
    }

    public function setAverageLifespan(string $averageLifespan): self
    {
        $this->averageLifespan = $averageLifespan;

        return $this;
    }

    public function getLanguage(): ?string
    {
        return $this->language;
    }

    public function setLanguage(string $language): self
    {
        $this->language = $language;

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
