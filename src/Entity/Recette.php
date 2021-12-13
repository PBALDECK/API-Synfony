<?php

namespace App\Entity;

use App\Repository\RecetteRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=RecetteRepository::class)
 */
class Recette
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
     * @ORM\Column(type="text", nullable=true)
     */
    private $Accroche;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $Difficulté;

    /**
     * @ORM\Column(type="text")
     */
    private $Texte;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $Durée_de_préparation;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $Durée_de_cuisson;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $Image;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Ingrédients;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getAccroche(): ?string
    {
        return $this->Accroche;
    }

    public function setAccroche(?string $Accroche): self
    {
        $this->Accroche = $Accroche;

        return $this;
    }

    public function getDifficulté(): ?int
    {
        return $this->Difficulté;
    }

    public function setDifficulté(?int $Difficulté): self
    {
        $this->Difficulté = $Difficulté;

        return $this;
    }

    public function getTexte(): ?string
    {
        return $this->Texte;
    }

    public function setTexte(string $Texte): self
    {
        $this->Texte = $Texte;

        return $this;
    }

    public function getDuréeDePréparation(): ?int
    {
        return $this->Durée_de_préparation;
    }

    public function setDuréeDePréparation(?int $Durée_de_préparation): self
    {
        $this->Durée_de_préparation = $Durée_de_préparation;

        return $this;
    }

    public function getDuréeDeCuisson(): ?int
    {
        return $this->Durée_de_cuisson;
    }

    public function setDuréeDeCuisson(?int $Durée_de_cuisson): self
    {
        $this->Durée_de_cuisson = $Durée_de_cuisson;

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->Image;
    }

    public function setImage(?string $Image): self
    {
        $this->Image = $Image;

        return $this;
    }

    public function getIngrédients(): ?string
    {
        return $this->Ingrédients;
    }

    public function setIngrédients(string $Ingrédients): self
    {
        $this->Ingrédients = $Ingrédients;

        return $this;
    }
}
