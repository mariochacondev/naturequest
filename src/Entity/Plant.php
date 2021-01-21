<?php

namespace App\Entity;

use App\Repository\PlantRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=PlantRepository::class)
 */
class Plant
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
     * @ORM\Column(type="text")
     */
    private $content;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $image1;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $image2;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $image3;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $image4;

    /**
     * @ORM\OneToMany(targetEntity=PlantCourse::class, mappedBy="plant")
     */
    private $plantCourses;

    public function __construct()
    {
        $this->plantCourses = new ArrayCollection();
    }

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

    public function getImage1(): ?string
    {
        return $this->image1;
    }

    public function setImage1(string $image1): self
    {
        $this->image1 = $image1;

        return $this;
    }

    public function getImage2(): ?string
    {
        return $this->image2;
    }

    public function setImage2(string $image2): self
    {
        $this->image2 = $image2;

        return $this;
    }

    public function getImage3(): ?string
    {
        return $this->image3;
    }

    public function setImage3(string $image3): self
    {
        $this->image3 = $image3;

        return $this;
    }

    public function getImage4(): ?string
    {
        return $this->image4;
    }

    public function setImage4(string $image4): self
    {
        $this->image4 = $image4;

        return $this;
    }

    public function __toString(): string
    {
        return $this->name;
    }

    /**
     * @return Collection|PlantCourse[]
     */
    public function getPlantCourses(): Collection
    {
        return $this->plantCourses;
    }

    public function addPlantCourse(PlantCourse $plantCourse): self
    {
        if (!$this->plantCourses->contains($plantCourse)) {
            $this->plantCourses[] = $plantCourse;
            $plantCourse->setPlant($this);
        }

        return $this;
    }

    public function removePlantCourse(PlantCourse $plantCourse): self
    {
        if ($this->plantCourses->removeElement($plantCourse)) {
            // set the owning side to null (unless already changed)
            if ($plantCourse->getPlant() === $this) {
                $plantCourse->setPlant(null);
            }
        }

        return $this;
    }
}
