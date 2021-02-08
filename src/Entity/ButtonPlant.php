<?php

namespace App\Entity;

use App\Repository\ButtonPlantRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\File;
use Vich\UploaderBundle\Mapping\Annotation as Vich;
use DateTime;

/**
 * @ORM\Entity(repositoryClass=ButtonPlantRepository::class)
 * @Vich\Uploadable
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
     * @Vich\UploadableField(mapping="buttonplant_images", fileNameProperty="image")
     * @var File
     */
    private $imageFile;

    /**
     * @ORM\ManyToOne(targetEntity=CoursePlant::class, inversedBy="buttonPlants")
     * @ORM\JoinColumn(nullable=false)
     */
    private $stepId;


    /**
     * @ORM\Column(type="datetime", nullable=true)
     * @var \DateTime
     */
    private $updatedAt;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @var string
     */
    private $image;

    /**
     * @ORM\ManyToOne(targetEntity=FinalSheet::class, inversedBy="buttonPlant")
     */
    private $finalSheet;

    /**
     * @ORM\ManyToOne(targetEntity=CoursePlant::class, inversedBy="buttonPlantsNext")
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


    public function setImageFile(File $image = null)
    {
        $this->imageFile = $image;

        // VERY IMPORTANT:
        // It is required that at least one field changes if you are using Doctrine,
        // otherwise the event listeners won't be called and the file is lost
        if ($image) {
            // if 'updatedAt' is not defined in your entity, use another property
            $this->updatedAt = new \DateTime('now');
        }
    }

    public function getImageFile()
    {
        return $this->imageFile;
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

    public function getUpdatedAt(): ?\DateTimeInterface
    {
        return $this->updatedAt;
    }

    public function setUpdatedAt(?\DateTimeInterface $updatedAt): self
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(?string $image): self
    {
        $this->image = $image;

        return $this;
    }

    public function getFinalSheet(): ?FinalSheet
    {
        return $this->finalSheet;
    }

    public function setFinalSheet(?FinalSheet $finalSheet): self
    {
        $this->finalSheet = $finalSheet;

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



}
