<?php

namespace App\Entity;

use App\Repository\ButtonAnimalRepository;
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
     * @ORM\Column(type="string", length=255)
     */
    private $text;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $picture;

    /**
     * @ORM\OneToOne(targetEntity=ParcoursAnimal::class, cascade={"persist", "remove"})
     */
    private $nextStepId;

    /**
     * @ORM\ManyToOne(targetEntity=ParcoursAnimal::class)
     */
    private $stepId;

    /**
     * @ORM\OneToOne(targetEntity=FinalSheet::class, cascade={"persist", "remove"})
     */
    private $finalSheetId;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getText(): ?string
    {
        return $this->text;
    }

    public function setText(string $text): self
    {
        $this->text = $text;

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

    public function getNextStepId(): ?ParcoursAnimal
    {
        return $this->nextStepId;
    }

    public function setNextStepId(?ParcoursAnimal $nextStepId): self
    {
        $this->nextStepId = $nextStepId;

        return $this;
    }

    public function getStepId(): ?ParcoursAnimal
    {
        return $this->stepId;
    }

    public function setStepId(?ParcoursAnimal $stepId): self
    {
        $this->stepId = $stepId;

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
}
