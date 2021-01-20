<?php

namespace App\Entity;

use App\Repository\PlantRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=PlantRepository::class)
 */
class Plant
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
    private $content;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $picture;

    /**
     * @ORM\OneToMany(targetEntity=RoutePlant::class, mappedBy="idPlant")
     */
    private $routePlants;

    public function __construct()
    {
        $this->routePlants = new ArrayCollection();
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

    public function getContent(): ?string
    {
        return $this->content;
    }

    public function setContent(string $content): self
    {
        $this->content = $content;

        return $this;
    }

    public function getPicture(): ?string
    {
        return $this->picture;
    }

    public function setPicture(string $picture): self
    {
        $this->picture = $picture;

        return $this;
    }

    /**
     * @return Collection|RoutePlant[]
     */
    public function getRoutePlants(): Collection
    {
        return $this->routePlants;
    }

    public function addRoutePlant(RoutePlant $routePlant): self
    {
        if (!$this->routePlants->contains($routePlant)) {
            $this->routePlants[] = $routePlant;
            $routePlant->setIdPlant($this);
        }

        return $this;
    }

    public function removeRoutePlant(RoutePlant $routePlant): self
    {
        if ($this->routePlants->removeElement($routePlant)) {
            // set the owning side to null (unless already changed)
            if ($routePlant->getIdPlant() === $this) {
                $routePlant->setIdPlant(null);
            }
        }

        return $this;
    }
}
