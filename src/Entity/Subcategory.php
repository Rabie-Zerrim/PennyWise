<?php

namespace App\Entity;

use App\Repository\SubCategoryRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: SubCategoryRepository::class)]
class Subcategory
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $idsubcategory = null;


    #[ORM\Column(length: 15)]
    private $name;

    #[ORM\Column(type: 'float')]
    private $mtAssigné;

    #[ORM\Column(type: 'float')]
    private $mtDépensé;

    /*
    #[ORM\ManyToOne(targetEntity: Task::class, inversedBy: "idsubcategory")]
    #[ORM\JoinColumn(nullable: false, referencedColumnName: "idtask")]
    private $task;
    */

    // #[ORM\OneToMany(targetEntity: Task::class, mappedBy: "idtodo")]
    // private ?Collection $tasks = null;

    public function getIdsubcategory(): ?int
    {
        return $this->idsubcategory;
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

    public function getMtAssigné(): ?float
    {
        return $this->mtAssigné;
    }

    public function setMtAssigné(float $mtAssigné): self
    {
        $this->mtAssigné = $mtAssigné;

        return $this;
    }

    public function getMtDépensé(): ?float
    {
        return $this->mtDépensé;
    }

    public function setMtDépensé(float $mtDépensé): self
    {
        $this->mtDépensé = $mtDépensé;

        return $this;
    }

    /*
    public function getTask(): ?Task
    {
        return $this->task;
    }

    public function setTask(?Task $task): self
    {
        $this->task = $task;

        return $this;
    }
    */

    public function __toString(): string
    {
        return $this->name ?? '';
    }
}