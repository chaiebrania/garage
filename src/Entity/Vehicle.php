<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;


/**
 * @ORM\Entity(repositoryClass="App\Repository\VehicleRepository")
 */
class Vehicle
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\Length(
     *      min = 2,
     *      max = 10,
     *      minMessage = "la marque de voiture est invalide",
     *      maxMessage = "la marque de voiture est invalide"
     * )
     */
    private $Marque;

    /**
     * @ORM\Column(type="string", length=255)
     *  * @ORM\Column(type="string", length=255)
     * @Assert\Length(
     *      min = 2,
     *      max = 10,
     *      minMessage = "la modele de voiture est invalide",
     *      maxMessage = "la modele de voiture est invalide"
     * )
     */
    private $Model;

    /**
     * @ORM\Column(type="date")
     */
    private $annee;

    /**
     * @ORM\Column(type="string", length=255) * @ORM\Column(type="string", length=255)
     * @Assert\Length(
     *      min = 8,
     *      max = 8,
     *      minMessage = "la matricul de voiture est invalide",
     *      maxMessage = "la matricul de voiture est invalide"
     * )
     */
    private $Matricule;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\User", inversedBy="vehicles")
     */
    private $client;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Entretien", mappedBy="vehicle", orphanRemoval=true)
     */
    private $entretiens;

    public function __construct()
    {
        $this->entretiens = new ArrayCollection();
    }
    public function __toString() {
        return $this->Marque;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMarque(): ?string
    {
        return $this->Marque;
    }

    public function setMarque(string $Marque): self
    {
        $this->Marque = $Marque;

        return $this;
    }

    public function getModel(): ?string
    {
        return $this->Model;
    }

    public function setModel(string $Model): self
    {
        $this->Model = $Model;

        return $this;
    }

    public function getAnnee(): ?\DateTimeInterface
    {
        return $this->annee;
    }

    public function setAnnee(\DateTimeInterface $annee): self
    {
        $this->annee = $annee;

        return $this;
    }

    public function getMatricule(): ?string
    {
        return $this->Matricule;
    }

    public function setMatricule(string $Matricule): self
    {
        $this->Matricule = $Matricule;

        return $this;
    }

    public function getClient(): ?User
    {
        return $this->client;
    }

    public function setClient(?User $client): self
    {
        $this->client = $client;

        return $this;
    }

    /**
     * @return Collection|Entretien[]
     */
    public function getEntretiens(): Collection
    {
        return $this->entretiens;
    }

    public function addEntretien(Entretien $entretien): self
    {
        if (!$this->entretiens->contains($entretien)) {
            $this->entretiens[] = $entretien;
            $entretien->setVehicle($this);
        }

        return $this;
    }

    public function removeEntretien(Entretien $entretien): self
    {
        if ($this->entretiens->contains($entretien)) {
            $this->entretiens->removeElement($entretien);
            // set the owning side to null (unless already changed)
            if ($entretien->getVehicle() === $this) {
                $entretien->setVehicle(null);
            }
        }

        return $this;
    }
}
