<?php

namespace App\Entity;

use App\Repository\FinalSheetRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=FinalSheetRepository::class)
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
    private $treePicture;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $leafPicture;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $barkPicture;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $seedPicture;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $type;

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

    public function getTreePicture(): ?string
    {
        return $this->treePicture;
    }

    public function setTreePicture(string $treePicture): self
    {
        $this->treePicture = $treePicture;

        return $this;
    }

    public function getLeafPicture(): ?string
    {
        return $this->leafPicture;
    }

    public function setLeafPicture(string $leafPicture): self
    {
        $this->leafPicture = $leafPicture;

        return $this;
    }

    public function getBarkPicture(): ?string
    {
        return $this->barkPicture;
    }

    public function setBarkPicture(string $barkPicture): self
    {
        $this->barkPicture = $barkPicture;

        return $this;
    }

    public function getSeedPicture(): ?string
    {
        return $this->seedPicture;
    }

    public function setSeedPicture(string $seedPicture): self
    {
        $this->seedPicture = $seedPicture;

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
}
