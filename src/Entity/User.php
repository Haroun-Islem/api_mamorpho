<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use App\Repository\UserRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: UserRepository::class)]
#[ApiResource]
class User
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 100)]
    private ?string $first_name = null;

    #[ORM\Column(length: 100)]
    private ?string $name = null;

    #[ORM\Column(length: 255)]
    private ?string $email = null;

    #[ORM\Column(length: 255)]
    private ?string $password = null;

    #[ORM\Column]
    private ?int $roles = null;

    #[ORM\Column(length: 14, nullable: true)]
    private ?string $phone = null;

    #[ORM\Column]
    private ?bool $status = null;

    #[ORM\Column]
    private ?\DateTimeImmutable $created_at = null;

    #[ORM\Column]
    private ?\DateTimeImmutable $updated_at = null;

    #[ORM\Column(nullable: true)]
    private ?bool $monthly = null;

    #[ORM\Column]
    private ?bool $status_subscrition = null;

    #[ORM\Column(nullable: true)]
    private ?\DateTimeImmutable $started_at = null;

    #[ORM\Column(nullable: true)]
    private ?\DateTimeImmutable $ended_at = null;

    #[ORM\Column(nullable: true)]
    private ?int $age = null;

    #[ORM\Column(nullable: true)]
    private ?float $size = null;

    #[ORM\Column(nullable: true)]
    private ?int $weight = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $morphology = null;

    #[ORM\Column(length: 255)]
    private ?string $photo_profile = null;

    #[ORM\Column(length: 25)]
    private ?string $sexe = null;

    #[ORM\Column(nullable: true)]
    private ?float $circumference_pelvis = null;

    #[ORM\Column(nullable: true)]
    private ?float $circumference_chest = null;

    #[ORM\Column(nullable: true)]
    private ?float $circumference_waist = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $body_form = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFirstName(): ?string
    {
        return $this->first_name;
    }

    public function setFirstName(string $first_name): self
    {
        $this->first_name = $first_name;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    public function getRoles(): ?int
    {
        return $this->roles;
    }

    public function setRoles(int $roles): self
    {
        $this->roles = $roles;

        return $this;
    }

    public function getPhone(): ?string
    {
        return $this->phone;
    }

    public function setPhone(?string $phone): self
    {
        $this->phone = $phone;

        return $this;
    }

    public function isStatus(): ?bool
    {
        return $this->status;
    }

    public function setStatus(bool $status): self
    {
        $this->status = $status;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeImmutable
    {
        return $this->created_at;
    }

    public function setCreatedAt(\DateTimeImmutable $created_at): self
    {
        $this->created_at = $created_at;

        return $this;
    }

    public function getUpdatedAt(): ?\DateTimeImmutable
    {
        return $this->updated_at;
    }

    public function setUpdatedAt(\DateTimeImmutable $updated_at): self
    {
        $this->updated_at = $updated_at;

        return $this;
    }

    public function isMonthly(): ?bool
    {
        return $this->monthly;
    }

    public function setMonthly(?bool $monthly): self
    {
        $this->monthly = $monthly;

        return $this;
    }

    public function isStatusSubscrition(): ?bool
    {
        return $this->status_subscrition;
    }

    public function setStatusSubscrition(bool $status_subscrition): self
    {
        $this->status_subscrition = $status_subscrition;

        return $this;
    }

    public function getStartedAt(): ?\DateTimeImmutable
    {
        return $this->started_at;
    }

    public function setStartedAt(?\DateTimeImmutable $started_at): self
    {
        $this->started_at = $started_at;

        return $this;
    }

    public function getEndedAt(): ?\DateTimeImmutable
    {
        return $this->ended_at;
    }

    public function setEndedAt(?\DateTimeImmutable $ended_at): self
    {
        $this->ended_at = $ended_at;

        return $this;
    }

    public function getAge(): ?int
    {
        return $this->age;
    }

    public function setAge(?int $age): self
    {
        $this->age = $age;

        return $this;
    }

    public function getSize(): ?float
    {
        return $this->size;
    }

    public function setSize(?float $size): self
    {
        $this->size = $size;

        return $this;
    }

    public function getWeight(): ?int
    {
        return $this->weight;
    }

    public function setWeight(?int $weight): self
    {
        $this->weight = $weight;

        return $this;
    }

    public function getMorphology(): ?string
    {
        return $this->morphology;
    }

    public function setMorphology(?string $morphology): self
    {
        $this->morphology = $morphology;

        return $this;
    }

    public function getPhotoProfile(): ?string
    {
        return $this->photo_profile;
    }

    public function setPhotoProfile(string $photo_profile): self
    {
        $this->photo_profile = $photo_profile;

        return $this;
    }

    public function getSexe(): ?string
    {
        return $this->sexe;
    }

    public function setSexe(string $sexe): self
    {
        $this->sexe = $sexe;

        return $this;
    }

    public function getCircumferencePelvis(): ?float
    {
        return $this->circumference_pelvis;
    }

    public function setCircumferencePelvis(?float $circumference_pelvis): self
    {
        $this->circumference_pelvis = $circumference_pelvis;

        return $this;
    }

    public function getCircumferenceChest(): ?float
    {
        return $this->circumference_chest;
    }

    public function setCircumferenceChest(?float $circumference_chest): self
    {
        $this->circumference_chest = $circumference_chest;

        return $this;
    }

    public function getCircumferenceWaist(): ?float
    {
        return $this->circumference_waist;
    }

    public function setCircumferenceWaist(?float $circumference_waist): self
    {
        $this->circumference_waist = $circumference_waist;

        return $this;
    }

    public function getBodyForm(): ?string
    {
        return $this->body_form;
    }

    public function setBodyForm(?string $body_form): self
    {
        $this->body_form = $body_form;

        return $this;
    }
}
