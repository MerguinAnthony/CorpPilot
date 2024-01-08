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
    private ?float $available = null;

    #[ORM\Column]
    private ?float $got = null;

    #[ORM\Column]
    private ?float $gotOutPeriod = null;

    #[ORM\OneToOne(cascade: ['persist', 'remove'])]
    #[ORM\JoinColumn(nullable: false)]
    private ?User $userDay = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getAvailable(): ?float
    {
        return $this->available;
    }

    public function setAvailable(float $available): static
    {
        $this->available = $available;

        return $this;
    }

    public function getGot(): ?float
    {
        return $this->got;
    }

    public function setGot(float $got): static
    {
        $this->got = $got;

        return $this;
    }

    public function getGotOutPeriod(): ?float
    {
        return $this->gotOutPeriod;
    }

    public function setGotOutPeriod(float $gotOutPeriod): static
    {
        $this->gotOutPeriod = $gotOutPeriod;

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
