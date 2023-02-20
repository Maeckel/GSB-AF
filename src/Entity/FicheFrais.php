<?php

namespace App\Entity;

use App\Repository\FicheFraisRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: FicheFraisRepository::class)]
class FicheFrais
{
    #[ORM\Id]
    #[ORM\Column]
    private ?string $id = null;

    #[ORM\Column(nullable: true)]
    private ?int $nbJustificatifs = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 12, scale: 2, nullable: true)]
    private ?string $montantValide = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $dateModif = null;

    #[ORM\ManyToOne(inversedBy: 'FicheFrais')]
    #[ORM\JoinColumn(nullable: true)]
    private ?Etat $Etat = null;

    #[ORM\OneToOne(mappedBy: 'FicheFrais', cascade: ['persist', 'remove'])]
    private ?LigneFraisHorsForfait $ligneFraisHorsForfait = null;

    #[ORM\OneToMany(mappedBy: 'Fichefrais', targetEntity: LigneFraisForfait::class)]
    private Collection $ligneFraisForfaits;

    #[ORM\ManyToOne(inversedBy: 'ficheFrais')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Visiteur $visiteur = null;

    public function __construct()
    {
        $this->ligneFraisForfaits = new ArrayCollection();
    }

    public function getId(): ?string
    {
        return $this->id;
    }

    public function getNbJustificatifs(): ?int
    {
        return $this->nbJustificatifs;
    }

    public function setNbJustificatifs(?int $nbJustificatifs): self
    {
        $this->nbJustificatifs = $nbJustificatifs;

        return $this;
    }

    public function getMontantValide(): ?string
    {
        return $this->montantValide;
    }

    public function setMontantValide(?string $montantValide): self
    {
        $this->montantValide = $montantValide;

        return $this;
    }

    public function getDateModif(): ?\DateTimeInterface
    {
        return $this->dateModif;
    }

    public function setDateModif(?\DateTimeInterface $dateModif): self
    {
        $this->dateModif = $dateModif;

        return $this;
    }

    public function getEtat(): ?Etat
    {
        return $this->Etat;
    }

    public function setEtat(?Etat $Etat): self
    {
        $this->Etat = $Etat;

        return $this;
    }

    public function getLigneFraisHorsForfait(): ?LigneFraisHorsForfait
    {
        return $this->ligneFraisHorsForfait;
    }

    public function setLigneFraisHorsForfait(?LigneFraisHorsForfait $ligneFraisHorsForfait): self
    {
        // unset the owning side of the relation if necessary
        if ($ligneFraisHorsForfait === null && $this->ligneFraisHorsForfait !== null) {
            $this->ligneFraisHorsForfait->setFicheFrais(null);
        }

        // set the owning side of the relation if necessary
        if ($ligneFraisHorsForfait !== null && $ligneFraisHorsForfait->getFicheFrais() !== $this) {
            $ligneFraisHorsForfait->setFicheFrais($this);
        }

        $this->ligneFraisHorsForfait = $ligneFraisHorsForfait;

        return $this;
    }

    /**
     * @return Collection<int, LigneFraisForfait>
     */
    public function getLigneFraisForfaits(): Collection
    {
        return $this->ligneFraisForfaits;
    }

    public function addLigneFraisForfait(LigneFraisForfait $ligneFraisForfait): self
    {
        if (!$this->ligneFraisForfaits->contains($ligneFraisForfait)) {
            $this->ligneFraisForfaits->add($ligneFraisForfait);
            $ligneFraisForfait->setFichefrais($this);
        }

        return $this;
    }

    public function removeLigneFraisForfait(LigneFraisForfait $ligneFraisForfait): self
    {
        if ($this->ligneFraisForfaits->removeElement($ligneFraisForfait)) {
            // set the owning side to null (unless already changed)
            if ($ligneFraisForfait->getFichefrais() === $this) {
                $ligneFraisForfait->setFichefrais(null);
            }
        }

        return $this;
    }

    public function getVisiteur(): ?Visiteur
    {
        return $this->visiteur;
    }

    public function setVisiteur(?Visiteur $visiteur): self
    {
        $this->visiteur = $visiteur;

        return $this;
    }

}
