<?php

namespace App\Entity;

use App\Repository\ButtonRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ButtonRepository::class)
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
     * @ORM\OneToOne(targetEntity=CoursePlant::class, cascade={"persist", "remove"})
     */
    private $NextStepId;

    /**
     * @ORM\ManyToOne(targetEntity=CoursePlant::class, inversedBy="buttons")
     * @ORM\JoinColumn(nullable=false)
     */
    private $stepId;

    /**
     * @ORM\ManyToOne(targetEntity=CoursePlant::class, inversedBy="button")
     */
    private $coursePlant;

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


    public function getNextStepId(): ?CoursePlant
    {
        return $this->NextStepId;
    }

    public function setNextStepId(?CoursePlant $NextStepId): self
    {
        $this->NextStepId = $NextStepId;

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

    public function getCoursePlant(): ?CoursePlant
    {
        return $this->coursePlant;
    }

    public function setCoursePlant(?CoursePlant $coursePlant): self
    {
        $this->coursePlant = $coursePlant;

        return $this;
    }
}
