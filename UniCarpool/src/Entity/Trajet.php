<?php

namespace App\Entity;

use App\Repository\TrajetRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: TrajetRepository::class)]
class Trajet
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $carName = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $img = null;

    #[ORM\Column(length: 50)]
    private ?string $debutTrajet = null;

    #[ORM\Column(length: 50)]
    private ?string $finTrajet = null;

    #[ORM\Column]
    private ?float $price = null;

    #[ORM\Column]
    private ?int $seatsAvailable = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCarName(): ?string
    {
        return $this->carName;
    }

    public function setCarName(string $carName): static
    {
        $this->carName = $carName;

        return $this;
    }

    public function getImg(): ?string
    {
        return $this->img;
    }

    public function setImg(?string $img): static
    {
        $this->img = $img;

        return $this;
    }

    public function getDebutTrajet(): ?string
    {
        return $this->debutTrajet;
    }

    public function setDebutTrajet(string $debutTrajet): static
    {
        $this->debutTrajet = $debutTrajet;

        return $this;
    }

    public function getFinTrajet(): ?string
    {
        return $this->finTrajet;
    }

    public function setFinTrajet(string $finTrajet): static
    {
        $this->finTrajet = $finTrajet;

        return $this;
    }

    public function getPrice(): ?float
    {
        return $this->price;
    }

    public function setPrice(float $price): static
    {
        $this->price = $price;

        return $this;
    }

    public function getSeatsAvailable(): ?int
    {
        return $this->seatsAvailable;
    }

    public function setSeatsAvailable(int $seatsAvailable): static
    {
        $this->seatsAvailable = $seatsAvailable;

        return $this;
    }
}
