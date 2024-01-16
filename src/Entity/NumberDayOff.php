<?php

namespace App\Entity;

use App\Repository\NumberDayOffRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: NumberDayOffRepository::class)]
class NumberDayOff
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $available = null;

    #[ORM\Column]
    private ?int $cet = null;

    #[ORM\Column]
    private ?float $hoursAvailable = null;

    #[ORM\OneToOne(cascade: ['persist', 'remove'])]
    #[ORM\JoinColumn(nullable: false)]
    private ?User $userDay = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getAvailable(): ?int
    {
        return $this->available;
    }

    public function setAvailable(int $available): static
    {
        $this->available = $available;

        return $this;
    }

    public function getCet(): ?int
    {
        return $this->cet;
    }

    public function setCet(int $cet): static
    {
        $this->cet = $cet;

        return $this;
    }

    public function getHoursAvailable(): ?float
    {
        return $this->hoursAvailable;
    }

    public function setHoursAvailable(float $hoursAvailable): static
    {
        $this->hoursAvailable = $hoursAvailable;

        return $this;
    }

    public function getUserDay(): ?User
    {
        return $this->userDay;
    }

    public function setUserDay(User $userDay): static
    {
        $this->userDay = $userDay;

        return $this;
    }
}
