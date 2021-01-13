<?php

namespace App\Entity;

use App\Repository\AnimalCourseRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=AnimalCourseRepository::class)
 */
class AnimalCourse
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
}
