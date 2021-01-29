<?php

namespace App\Entity;

use App\Repository\ButtonPlantRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
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
     * @ORM\ManyToOne(targetEntity=CoursePlant::class, inversedBy="buttonPlants")
     * @ORM\JoinColumn(nullable=false)
     */
    private $stepId;

    /**
     * @ORM\OneToOne(targetEntity=CoursePlant::class, cascade={"persist", "remove"})
     */
    private $nextStepId;


    public function getId(): ?int
    {
        return $this->id;
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

    public function getStepId(): ?CoursePlant
    {
        return $this->stepId;
    }

    public function setStepId(?CoursePlant $stepId): self
    {
        $this->stepId = $stepId;

        return $this;
    }

    public function getNextStepId(): ?CoursePlant
    {
        return $this->nextStepId;
    }

    public function setNextStepId(?CoursePlant $nextStepId): self
    {
        $this->nextStepId = $nextStepId;

        return $this;
    }

    // public function __toString() { 
    //     return $this->stepId; 
    // }


}
