<?php

namespace App\Entity;

use App\Repository\CoursePlantRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CoursePlantRepository::class)
 */
class CoursePlant
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
     * @ORM\OneToMany(targetEntity=ButtonPlant::class, mappedBy="coursePlant")
     */
    private $button;

    public function __construct()
    {
        $this->buttons = new ArrayCollection();
        $this->button = new ArrayCollection();
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
     * @return Collection|ButtonPlant[]
     */
    public function getButton(): Collection
    {
        return $this->button;
    }

    public function addButton(ButtonPlant $button): self
    {
        if (!$this->button->contains($button)) {
            $this->button[] = $button;
            $button->setCoursePlant($this);
        }

        return $this;
    }

    public function removeButton(ButtonPlant $button): self
    {
        if ($this->button->removeElement($button)) {
            // set the owning side to null (unless already changed)
            if ($button->getCoursePlant() === $this) {
                $button->setCoursePlant(null);
            }
        }

        return $this;
    }

}
