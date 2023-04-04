<?php

namespace App\Entity;

use App\Repository\ExperienceRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ExperienceRepository::class)]
class Experience
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $company_name = null;

    #[ORM\Column(length: 255)]
    private ?string $position = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $start_date = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $end_date = null;

    #[ORM\Column(length: 255)]
    private ?string $job_desc_1 = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $jobs_desc_2 = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $job_desc_3 = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCompanyName(): ?string
    {
        return $this->company_name;
    }

    public function setCompanyName(string $company_name): self
    {
        $this->company_name = $company_name;

        return $this;
    }

    public function getPosition(): ?string
    {
        return $this->position;
    }

    public function setPosition(string $position): self
    {
        $this->position = $position;

        return $this;
    }

    public function getStartDate(): ?\DateTimeInterface
    {
        return $this->start_date;
    }

    public function setStartDate(\DateTimeInterface $start_date): self
    {
        $this->start_date = $start_date;

        return $this;
    }

    public function getEndDate(): ?\DateTimeInterface
    {
        return $this->end_date;
    }

    public function setEndDate(?\DateTimeInterface $end_date): self
    {
        $this->end_date = $end_date;

        return $this;
    }

    public function getJobDesc1(): ?string
    {
        return $this->job_desc_1;
    }

    public function setJobDesc1(string $job_desc_1): self
    {
        $this->job_desc_1 = $job_desc_1;

        return $this;
    }

    public function getJobsDesc2(): ?string
    {
        return $this->jobs_desc_2;
    }

    public function setJobsDesc2(?string $jobs_desc_2): self
    {
        $this->jobs_desc_2 = $jobs_desc_2;

        return $this;
    }

    public function getJobDesc3(): ?string
    {
        return $this->job_desc_3;
    }

    public function setJobDesc3(?string $job_desc_3): self
    {
        $this->job_desc_3 = $job_desc_3;

        return $this;
    }
}
