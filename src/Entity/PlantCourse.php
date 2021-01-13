<?php

namespace App\Entity;

use App\Repository\PlantCourseRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=PlantCourseRepository::class)
 */
class PlantCourse
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
    private $button;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $icon;

    /**
     * @ORM\OneToOne(targetEntity=Plant::class, cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $plant;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getButton(): ?string
    {
        return $this->button;
    }

    public function setButton(string $button): self
    {
        $this->button = $button;

        return $this;
    }

    public function getIcon(): ?string
    {
        return $this->icon;
    }

    public function setIcon(string $icon): self
    {
        $this->icon = $icon;

        return $this;
    }

    public function getPlant(): ?Plant
    {
        return $this->plant;
    }

    public function setPlant(Plant $plant): self
    {
        $this->plant = $plant;

        return $this;
    }
}
