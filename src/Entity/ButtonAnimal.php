<?php

namespace App\Entity;

use App\Repository\ButtonAnimalRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
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
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $content;

    /**
     * @ORM\OneToOne(targetEntity=FinalSheet::class, cascade={"persist", "remove"})
     */
    private $finalSheetId;

   

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getContent(): ?string
    {
        return $this->content;
    }

    public function setContent(?string $content): self
    {
        $this->content = $content;

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
