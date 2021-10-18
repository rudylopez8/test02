<?php

namespace App\Entity;

use App\Repository\UtilisateursRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=UtilisateursRepository::class)
 */
class Utilisateurs
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
    private $Noms;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Prénoms;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Photo;

    /**
     * @ORM\Column(type="date")
     */
    private $DateNaissance;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Login;

    /**
     * @ORM\Column(type="string", length=511)
     */
    private $Password;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Adresse;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Email;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Rôle;

    /**
     * @ORM\Column(type="boolean")
     */
    private $Locataires;

    /**
     * @ORM\Column(type="boolean")
     */
    private $Propriétaires;

    /**
     * @ORM\Column(type="boolean")
     */
    private $Gestionnaires;

    /**
     * @ORM\Column(type="boolean")
     */
    private $Administrateurs;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNoms(): ?string
    {
        return $this->Noms;
    }

    public function setNoms(string $Noms): self
    {
        $this->Noms = $Noms;

        return $this;
    }

    public function getPrénoms(): ?string
    {
        return $this->Prénoms;
    }

    public function setPrénoms(string $Prénoms): self
    {
        $this->Prénoms = $Prénoms;

        return $this;
    }

    public function getPhoto(): ?string
    {
        return $this->Photo;
    }

    public function setPhoto(string $Photo): self
    {
        $this->Photo = $Photo;

        return $this;
    }

    public function getDateNaissance(): ?\DateTimeInterface
    {
        return $this->DateNaissance;
    }

    public function setDateNaissance(\DateTimeInterface $DateNaissance): self
    {
        $this->DateNaissance = $DateNaissance;

        return $this;
    }

    public function getLogin(): ?string
    {
        return $this->Login;
    }

    public function setLogin(string $Login): self
    {
        $this->Login = $Login;

        return $this;
    }

    public function getPassword(): ?string
    {
        return $this->Password;
    }

    public function setPassword(string $Password): self
    {
        $this->Password = $Password;

        return $this;
    }

    public function getAdresse(): ?string
    {
        return $this->Adresse;
    }

    public function setAdresse(string $Adresse): self
    {
        $this->Adresse = $Adresse;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->Email;
    }

    public function setEmail(string $Email): self
    {
        $this->Email = $Email;

        return $this;
    }

    public function getRôle(): ?string
    {
        return $this->Rôle;
    }

    public function setRôle(string $Rôle): self
    {
        $this->Rôle = $Rôle;

        return $this;
    }

    public function getLocataires(): ?bool
    {
        return $this->Locataires;
    }

    public function setLocataires(bool $Locataires): self
    {
        $this->Locataires = $Locataires;

        return $this;
    }

    public function getPropriétaires(): ?bool
    {
        return $this->Propriétaires;
    }

    public function setPropriétaires(bool $Propriétaires): self
    {
        $this->Propriétaires = $Propriétaires;

        return $this;
    }

    public function getGestionnaires(): ?bool
    {
        return $this->Gestionnaires;
    }

    public function setGestionnaires(bool $Gestionnaires): self
    {
        $this->Gestionnaires = $Gestionnaires;

        return $this;
    }

    public function getAdministrateurs(): ?bool
    {
        return $this->Administrateurs;
    }

    public function setAdministrateurs(bool $Administrateurs): self
    {
        $this->Administrateurs = $Administrateurs;

        return $this;
    }
}
