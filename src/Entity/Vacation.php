<?php

namespace App\Entity;

use App\Repository\VacationRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: VacationRepository::class)]
class Vacation
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $startDate = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $endDate = null;

    #[ORM\Column(type: Types::INTEGER)]
    #[Assert\Choice(choices: [0, 1, 2])]
    #[Assert\NotNull]
    private $approved = 0;

    #[ORM\ManyToOne(inversedBy: 'vacations')]
    private ?User $user = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $startHours = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $endHours = null;

    #[ORM\Column]
    private ?int $account = null;

    #[ORM\Column]
    private ?int $nbDays = null;

    #[ORM\Column(nullable: true)]
    private ?float $nbHours = null;

    #[ORM\Column(nullable: true)]
    private ?int $nbDaysOutsidePeriod = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getStartDate(): ?\DateTimeInterface
    {
        return $this->startDate;
    }

    public function setStartDate(\DateTimeInterface $startDate): static
    {
        $this->startDate = $startDate;

        return $this;
    }

    public function getEndDate(): ?\DateTimeInterface
    {
        return $this->endDate;
    }

    public function setEndDate(\DateTimeInterface $endDate): static
    {
        $this->endDate = $endDate;

        return $this;
    }

    public function getApproved()
    {
        return $this->approved;
    }

    public function setApproved($approved): static
    {
        $this->approved = $approved;

        return $this;
    }

    public function getUser(): ?user
    {
        return $this->user;
    }

    public function setUser(?user $user): static
    {
        $this->user = $user;

        return $this;
    }

    public function getStartHours(): ?\DateTimeInterface
    {
        return $this->startHours;
    }

    public function setStartHours(?\DateTimeInterface $startHours): static
    {
        $this->startHours = $startHours;

        return $this;
    }

    public function getEndHours(): ?\DateTimeInterface
    {
        return $this->endHours;
    }

    public function setEndHours(?\DateTimeInterface $endHours): static
    {
        $this->endHours = $endHours;

        return $this;
    }

    public function getAccount(): ?int
    {
        return $this->account;
    }

    public function setAccount(int $account): static
    {
        $this->account = $account;

        return $this;
    }

    public function getNbDays(): ?int
    {
        return $this->nbDays;
    }

    public function setNbDays(int $nbDays): static
    {
        $this->nbDays = $nbDays;

        return $this;
    }

    public function getNbHours(): ?float
    {
        return $this->nbHours;
    }

    public function setNbHours(?float $nbHours): static
    {
        $this->nbHours = $nbHours;

        return $this;
    }

    public function getNbDaysOutsidePeriod(): ?int
    {
        return $this->nbDaysOutsidePeriod;
    }

    public function setNbDaysOutsidePeriod(?int $nbDaysOutsidePeriod): static
    {
        $this->nbDaysOutsidePeriod = $nbDaysOutsidePeriod;

        return $this;
    }
}
