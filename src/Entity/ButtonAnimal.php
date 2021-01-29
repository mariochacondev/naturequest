<?php

namespace App\Entity;

use App\Repository\ButtonAnimalRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ButtonAnimalRepository::class)
 */
class ButtonAnimal
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $content;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $img;

    /**
     * @ORM\OneToOne(targetEntity=FinalSheet::class, cascade={"persist", "remove"})
     */
    private $finalSheetId;

    /**
     * @ORM\OneToOne(targetEntity=CourseAnimal::class, cascade={"persist", "remove"})
     */
    private $nextStepId;

    /**
     * @ORM\ManyToOne(targetEntity=CourseAnimal::class, inversedBy="buttonAnimals")
     * @ORM\JoinColumn(nullable=false)
     */
    private $stepId;

   

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getContent(): ?string
    {
        return $this->content;
    }

    public function setContent(?string $content): self
    {
        $this->content = $content;

        return $this;
    }

    public function getImg(): ?string
    {
        return $this->img;
    }

    public function setImg(string $img): self
    {
        $this->img = $img;

        return $this;
    }

    public function getFinalSheetId(): ?FinalSheet
    {
        return $this->finalSheetId;
    }

    public function setFinalSheetId(?FinalSheet $finalSheetId): self
    {
        $this->finalSheetId = $finalSheetId;

        return $this;
    }

    public function getNextStepId(): ?CourseAnimal
    {
        return $this->nextStepId;
    }

    public function setNextStepId(?CourseAnimal $nextStepId): self
    {
        $this->nextStepId = $nextStepId;

        return $this;
    }

    public function getStepId(): ?CourseAnimal
    {
        return $this->stepId;
    }

    public function setStepId(?CourseAnimal $stepId): self
    {
        $this->stepId = $stepId;

        return $this;
    }
}
