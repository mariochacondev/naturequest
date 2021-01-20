<?php

namespace App\Entity;

use App\Repository\RoutePlantRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=RoutePlantRepository::class)
 */
class RoutePlant
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
     * @ORM\ManyToOne(targetEntity=Plant::class, inversedBy="routePlants")
     */
    private $idPlant;

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

    public function getIdPlant(): ?Plant
    {
        return $this->idPlant;
    }

    public function setIdPlant(?Plant $idPlant): self
    {
        $this->idPlant = $idPlant;

        return $this;
    }
}
