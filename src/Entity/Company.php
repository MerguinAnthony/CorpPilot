<?php

namespace App\Entity;

use App\Entity\SignId;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use App\Repository\CompanyRepository;
use Doctrine\Common\Collections\Collection;
use Symfony\Component\HttpFoundation\File\File;
use Doctrine\Common\Collections\ArrayCollection;
use Vich\UploaderBundle\Mapping\Annotation as Vich;
use Symfony\Component\Validator\Constraints as Assert;

#[Vich\Uploadable]
#[ORM\Entity(repositoryClass: CompanyRepository::class)]
class Company
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[Assert\NotBlank]
    #[Assert\Length(min: 2)]
    #[ORM\Column(length: 255)]
    private ?string $companyName = null;

    #[ORM\Column(length: 50)]
    #[Assert\NotBlank]
    #[Assert\Length(min: 2)]
    private ?string $companyAbrev = null;

    #[ORM\Column]
    #[Assert\NotNull()]
    private ?int $companyPhone = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank]
    #[Assert\Length(min: 2)]
    private ?string $companyAddress = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank]
    #[Assert\Length(min: 2)]
    private ?string $companyCity = null;

    #[ORM\Column]
    #[Assert\NotNull()]
    #[Assert\Length(min: 5)]
    private ?int $companyZipcode = null;

    #[ORM\Column]
    private ?\DateTimeImmutable $createdAt = null;

    #[ORM\OneToMany(mappedBy: 'company', targetEntity: User::class)]
    private $users;

    #[ORM\Column(length: 180)]
    #[Assert\Email]
    private ?string $companyEmail = null;

    #[ORM\Column(type: Types::BIGINT)]
    #[Assert\NotNull()]
    #[Assert\Length(min: 14)]
    private ?string $companySiret = null;

    #[Vich\UploadableField(mapping: 'company_logo_image', fileNameProperty: 'companyLogoName')]
    private ?File $companyLogoFile = null;

    #[ORM\Column(nullable: true)]
    private ?string $companyLogoName = null;

    #[Vich\UploadableField(mapping: 'signature_image', fileNameProperty: 'signatureName')]
    private ?File $signatureFile = null;

    #[ORM\Column(nullable: true)]
    private ?string $signatureName = null;

    #[ORM\Column(nullable: true)]
    private ?\DateTimeImmutable $updatedAt = null;



    public function __construct()
    {
        $this->users = new ArrayCollection();
        $this->createdAt = new \DateTimeImmutable();
        $this->updatedAt = new \DateTimeImmutable();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCompanyName(): ?string
    {
        return $this->companyName;
    }

    public function setCompanyName(string $companyName): static
    {
        $this->companyName = $companyName;

        return $this;
    }

    public function getCompanyAbrev(): ?string
    {
        return $this->companyAbrev;
    }

    public function setCompanyAbrev(string $companyAbrev): static
    {
        $this->companyAbrev = $companyAbrev;

        return $this;
    }

    public function getCompanyPhone(): ?int
    {
        return $this->companyPhone;
    }

    public function setCompanyPhone(int $companyPhone): static
    {
        $this->companyPhone = $companyPhone;

        return $this;
    }

    public function getCompanyAddress(): ?string
    {
        return $this->companyAddress;
    }

    public function setCompanyAddress(string $companyAddress): static
    {
        $this->companyAddress = $companyAddress;

        return $this;
    }

    public function getCompanyCity(): ?string
    {
        return $this->companyCity;
    }

    public function setCompanyCity(string $companyCity): static
    {
        $this->companyCity = $companyCity;

        return $this;
    }

    public function getCompanyZipcode(): ?int
    {
        return $this->companyZipcode;
    }

    public function setCompanyZipcode(int $companyZipcode): static
    {
        $this->companyZipcode = $companyZipcode;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeImmutable
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTimeImmutable $createdAt): static
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * @return Collection<int, User>
     */
    public function getUsers(): Collection
    {
        return $this->users;
    }

    public function addUser(User $user): static
    {
        if (!$this->users->contains($user)) {
            $this->users->add($user);
            $user->setCompany($this);
        }

        return $this;
    }

    public function removeUser(User $user): static
    {
        if ($this->users->removeElement($user)) {
            // set the owning side to null (unless already changed)
            if ($user->getCompany() === $this) {
                $user->setCompany(null);
            }
        }

        return $this;
    }

    public function getCompanyEmail(): ?string
    {
        return $this->companyEmail;
    }

    public function setCompanyEmail(string $companyEmail): static
    {
        $this->companyEmail = $companyEmail;

        return $this;
    }

    public function getCompanySiret(): ?string
    {
        return $this->companySiret;
    }

    public function setCompanySiret(string $companySiret): static
    {
        $this->companySiret = $companySiret;

        return $this;
    }

    public function setCompanyLogoFile(?File $companyLogoFile = null): void
    {
        $this->companyLogoFile = $companyLogoFile;

        if (null !== $companyLogoFile) {
            // It is required that at least one field changes if you are using doctrine
            // otherwise the event listeners won't be called and the file is lost
            $this->updatedAt = new \DateTimeImmutable();
        }
    }

    public function getCompanyLogoFile(): ?File
    {
        return $this->companyLogoFile;
    }

    public function setCompanyLogoName(?string $companyLogoName): void
    {
        $this->companyLogoName = $companyLogoName;
    }

    public function getCompanyLogoName(): ?string
    {
        return $this->companyLogoName;
    }

    public function setSignatureFile(?File $signatureFile = null): void
    {
        $this->signatureFile = $signatureFile;

        if (null !== $signatureFile) {
            // It is required that at least one field changes if you are using doctrine
            // otherwise the event listeners won't be called and the file is lost
            $this->updatedAt = new \DateTimeImmutable();
        }
    }

    public function getSignatureFile(): ?File
    {
        return $this->signatureFile;
    }

    public function setSignatureName(?string $signatureName): void
    {
        $this->signatureName = $signatureName;
    }

    public function getSignatureName(): ?string
    {
        return $this->signatureName;
    }

    /**
     * Get the value of updatedAt
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * Set the value of updatedAt
     *
     * @return  self
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }
}
