<?php

namespace App\Entity;

use App\Repository\FinalSheetRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use DateTime;
use Symfony\Component\HttpFoundation\File\File;
use Vich\UploaderBundle\Mapping\Annotation as Vich;

/**
 * @ORM\Entity(repositoryClass=FinalSheetRepository::class)
 *  @Vich\Uploadable
 */
class FinalSheet
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
    private $title;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $subtitle;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $type;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @var string
     */
    private $image1;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @var string
     */
    private $image2;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @var string
     */
    private $image3;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @var string
     */
    private $image4;

    /**
     * @Vich\UploadableField(mapping="finalsheet_images", fileNameProperty="image1")
     * @var File
     */
    private $imageFile1;

    /**
     * @Vich\UploadableField(mapping="finalsheet_images", fileNameProperty="image2")
     * @var File
     */
    private $imageFile2;

    /**
     * @Vich\UploadableField(mapping="finalsheet_images", fileNameProperty="image3")
     * @var File
     */
    private $imageFile3;

    /**
     * @Vich\UploadableField(mapping="finalsheet_images", fileNameProperty="image4")
     * @var File
     */
    private $imageFile4;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     * @var \DateTime
     */
    private $updatedAt;

    /**
     * @ORM\OneToMany(targetEntity=ButtonPlant::class, mappedBy="finalSheet")
     */
    private $buttonPlant;

    /**
     * @ORM\OneToMany(targetEntity=ButtonAnimal::class, mappedBy="finalSheet")
     */
    private $buttonAnimal;

    public function __construct()
    {
        $this->buttonPlant = new ArrayCollection();
        $this->buttonAnimal = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getSubtitle(): ?string
    {
        return $this->subtitle;
    }

    public function setSubtitle(string $subtitle): self
    {
        $this->subtitle = $subtitle;

        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getImage1(): ?string
    {
        return $this->image1;
    }

    public function setImage1(?string $image1): self
    {
        $this->image1 = $image1;

        return $this;
    }

    public function getImage2(): ?string
    {
        return $this->image2;
    }

    public function setImage2(?string $image2): self
    {
        $this->image2 = $image2;

        return $this;
    }

    public function getImage3(): ?string
    {
        return $this->image3;
    }

    public function setImage3(?string $image3): self
    {
        $this->image3 = $image3;

        return $this;
    }

    public function getImage4(): ?string
    {
        return $this->image4;
    }

    public function setImage4(?string $image4): self
    {
        $this->image4 = $image4;

        return $this;
    }

    public function setImageFile1(File $image1 = null)
    {
        $this->imageFile1 = $image1;

        // VERY IMPORTANT:
        // It is required that at least one field changes if you are using Doctrine,
        // otherwise the event listeners won't be called and the file is lost
        if ($image1) {
            // if 'updatedAt' is not defined in your entity, use another property
            $this->updatedAt = new \DateTime('now');
        }
    }

    public function getImageFile1()
    {
        return $this->imageFile1;
    }

    public function setImageFile2(File $image2 = null)
    {
        $this->imageFile2 = $image2;

        // VERY IMPORTANT:
        // It is required that at least one field changes if you are using Doctrine,
        // otherwise the event listeners won't be called and the file is lost
        if ($image2) {
            // if 'updatedAt' is not defined in your entity, use another property
            $this->updatedAt = new \DateTime('now');
        }
    }

    public function getImageFile2()
    {
        return $this->imageFile2;
    }

    public function setImageFile3(File $image3 = null)
    {
        $this->imageFile3 = $image3;

        // VERY IMPORTANT:
        // It is required that at least one field changes if you are using Doctrine,
        // otherwise the event listeners won't be called and the file is lost
        if ($image3) {
            // if 'updatedAt' is not defined in your entity, use another property
            $this->updatedAt = new \DateTime('now');
        }
    }

    public function getImageFile3()
    {
        return $this->imageFile3;
    }

    public function setImageFile4(File $image4 = null)
    {
        $this->imageFile4 = $image4;

        // VERY IMPORTANT:
        // It is required that at least one field changes if you are using Doctrine,
        // otherwise the event listeners won't be called and the file is lost
        if ($image4) {
            // if 'updatedAt' is not defined in your entity, use another property
            $this->updatedAt = new \DateTime('now');
        }
    }

    public function getImageFile4()
    {
        return $this->imageFile4;
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

    public function __toString() { 
        return $this->title; 
    }

    /**
     * @return Collection|ButtonPlant[]
     */
    public function getButtonPlant(): Collection
    {
        return $this->buttonPlant;
    }

    public function addButtonPlant(ButtonPlant $buttonPlant): self
    {
        if (!$this->buttonPlant->contains($buttonPlant)) {
            $this->buttonPlant[] = $buttonPlant;
            $buttonPlant->setFinalSheet($this);
        }

        return $this;
    }

    public function removeButtonPlant(ButtonPlant $buttonPlant): self
    {
        if ($this->buttonPlant->removeElement($buttonPlant)) {
            // set the owning side to null (unless already changed)
            if ($buttonPlant->getFinalSheet() === $this) {
                $buttonPlant->setFinalSheet(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|ButtonAnimal[]
     */
    public function getButtonAnimal(): Collection
    {
        return $this->buttonAnimal;
    }

    public function addButtonAnimal(ButtonAnimal $buttonAnimal): self
    {
        if (!$this->buttonAnimal->contains($buttonAnimal)) {
            $this->buttonAnimal[] = $buttonAnimal;
            $buttonAnimal->setFinalSheet($this);
        }

        return $this;
    }

    public function removeButtonAnimal(ButtonAnimal $buttonAnimal): self
    {
        if ($this->buttonAnimal->removeElement($buttonAnimal)) {
            // set the owning side to null (unless already changed)
            if ($buttonAnimal->getFinalSheet() === $this) {
                $buttonAnimal->setFinalSheet(null);
            }
        }

        return $this;
    }

}
