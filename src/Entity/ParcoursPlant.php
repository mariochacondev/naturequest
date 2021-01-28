<?php

namespace App\Entity;

use App\Repository\ParcoursPlantRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ParcoursPlantRepository::class)
 */
class ParcoursPlant
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
     * @ORM\OneToMany(targetEntity=ButtonPlant::class, mappedBy="parcoursPlant")
     */
    private $button;

    public function __construct()
    {
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
            $button->setParcoursPlant($this);
        }

        return $this;
    }

    public function removeButton(ButtonPlant $button): self
    {
        if ($this->button->removeElement($button)) {
            // set the owning side to null (unless already changed)
            if ($button->getParcoursPlant() === $this) {
                $button->setParcoursPlant(null);
            }
        }

        return $this;
    }
}
