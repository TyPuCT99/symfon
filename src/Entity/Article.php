<?php

namespace App\Entity;

use App\Repository\ArticleRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ArticleRepository::class)
 */
class Article
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
    private $Title;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Des;

    /**
     * @ORM\OneToMany(targetEntity=Tabela::class, mappedBy="red")
     */
    private $Blue;

    public function __construct()
    {
        $this->Blue = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->Title;
    }

    public function setTitle(string $Title): self
    {
        $this->Title = $Title;

        return $this;
    }

    public function getDes(): ?string
    {
        return $this->Des;
    }

    public function setDes(string $Des): self
    {
        $this->Des = $Des;

        return $this;
    }

    /**
     * @return Collection<int, Tabela>
     */
    public function getBlue(): Collection
    {
        return $this->Blue;
    }

    public function addBlue(Tabela $blue): self
    {
        if (!$this->Blue->contains($blue)) {
            $this->Blue[] = $blue;
            $blue->setRed($this);
        }

        return $this;
    }

    public function removeBlue(Tabela $blue): self
    {
        if ($this->Blue->removeElement($blue)) {
            // set the owning side to null (unless already changed)
            if ($blue->getRed() === $this) {
                $blue->setRed(null);
            }
        }

        return $this;
    }
}
