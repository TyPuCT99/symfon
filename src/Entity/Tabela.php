<?php

namespace App\Entity;

use App\Repository\TabelaRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=TabelaRepository::class)
 */
class Tabela
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
    private $Name;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $description;

    /**
     * @ORM\ManyToOne(targetEntity=Article::class, inversedBy="Blue")
     * @ORM\JoinColumn(nullable=false)
     */
    private $red;

    public function getDescription(): ?int
    {
        return $this->description;
    }

    public function getName(): ?string
    {
        return $this->Name;
    }

    public function setName(string $Name): self
    {
        $this->Name = $Name;

        return $this;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getRed(): ?Article
    {
        return $this->red;
    }

    public function setRed(?Article $red): self
    {
        $this->red = $red;

        return $this;
    }
}
