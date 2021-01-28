<?php

namespace App\Entity;

use App\Repository\ButtonPlantRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ButtonPlantRepository::class)
 */
class ButtonPlant
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
     * @ORM\OneToOne(targetEntity=FinalSheet::class, cascade={"persist", "remove"})
     */
    private $finalSheetId;

    /**
     * @ORM\ManyToOne(targetEntity=ParcoursPlant::class)
     * @ORM\JoinColumn(nullable=false)
     */
    private $stepId;

    /**
     * @ORM\OneToOne(targetEntity=ParcoursPlant::class, cascade={"persist", "remove"})
     */
    private $nextStepId;

    /**
     * @ORM\ManyToOne(targetEntity=ParcoursPlant::class, inversedBy="button")
     */
    private $parcoursPlant;

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

    public function getFinalSheetId(): ?FinalSheet
    {
        return $this->finalSheetId;
    }

    public function setFinalSheetId(?FinalSheet $finalSheetId): self
    {
        $this->finalSheetId = $finalSheetId;

        return $this;
    }

    public function getStepId(): ?ParcoursPlant
    {
        return $this->stepId;
    }

    public function setStepId(?ParcoursPlant $stepId): self
    {
        $this->stepId = $stepId;

        return $this;
    }

    public function getNextStepId(): ?ParcoursPlant
    {
        return $this->nextStepId;
    }

    public function setNextStepId(?ParcoursPlant $nextStepId): self
    {
        $this->nextStepId = $nextStepId;

        return $this;
    }

    public function getParcoursPlant(): ?ParcoursPlant
    {
        return $this->parcoursPlant;
    }

    public function setParcoursPlant(?ParcoursPlant $parcoursPlant): self
    {
        $this->parcoursPlant = $parcoursPlant;

        return $this;
    }

}
