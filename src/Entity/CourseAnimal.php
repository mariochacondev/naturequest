<?php

namespace App\Entity;

use App\Repository\CourseAnimalRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CourseAnimalRepository::class)
 */
class CourseAnimal
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
     * @ORM\OneToMany(targetEntity=ButtonAnimal::class, mappedBy="stepId")
     */
    private $buttonAnimals;

    /**
     * @ORM\OneToMany(targetEntity=ButtonAnimal::class, mappedBy="nextStepId")
     */
    private $buttonAnimalsNext;

    public function __construct()
    {
        $this->buttonAnimals = new ArrayCollection();
        $this->buttonAnimalsNext = new ArrayCollection();
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

    /**
     * @return Collection|ButtonAnimal[]
     */
    public function getButtonAnimals(): Collection
    {
        return $this->buttonAnimals;
    }

    public function addButtonAnimal(ButtonAnimal $buttonAnimal): self
    {
        if (!$this->buttonAnimals->contains($buttonAnimal)) {
            $this->buttonAnimals[] = $buttonAnimal;
            $buttonAnimal->setStepId($this);
        }

        return $this;
    }

    public function removeButtonAnimal(ButtonAnimal $buttonAnimal): self
    {
        if ($this->buttonAnimals->removeElement($buttonAnimal)) {
            // set the owning side to null (unless already changed)
            if ($buttonAnimal->getStepId() === $this) {
                $buttonAnimal->setStepId(null);
            }
        }

        return $this;
    }

    public function __toString() { 
        return $this->title; 
    }

    /**
     * @return Collection|ButtonAnimal[]
     */
    public function getButtonAnimalsNext(): Collection
    {
        return $this->buttonAnimalsNext;
    }

    public function addButtonAnimalsNext(ButtonAnimal $buttonAnimalsNext): self
    {
        if (!$this->buttonAnimalsNext->contains($buttonAnimalsNext)) {
            $this->buttonAnimalsNext[] = $buttonAnimalsNext;
            $buttonAnimalsNext->setNextStepId($this);
        }

        return $this;
    }

    public function removeButtonAnimalsNext(ButtonAnimal $buttonAnimalsNext): self
    {
        if ($this->buttonAnimalsNext->removeElement($buttonAnimalsNext)) {
            // set the owning side to null (unless already changed)
            if ($buttonAnimalsNext->getNextStepId() === $this) {
                $buttonAnimalsNext->setNextStepId(null);
            }
        }

        return $this;
    }


}
