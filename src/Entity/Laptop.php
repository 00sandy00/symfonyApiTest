<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\LaptopRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass=LaptopRepository::class)
 */
class Laptop
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * Company/Brand name
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
     * Model number
     * @ORM\Column(type="string", length=255)
     */
    private $model;

    /**
     * Year of production
     * @ORM\Column(type="string", length=50)
     */
    private $prodYear;

       
    /**
     * change stock availability
     *
     * @ORM\Column(type="boolean")
     */
    private $IsAvailable;

    public function getId(): ?int
    {
        return $this->id;
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
    public function getIsAvailable(): ?bool
    {
        return $this->IsAvailable;
    }

    public function setIsAvailable(bool $IsAvailable): self
    {
        $this->IsAvailable = $IsAvailable;

        return $this;
    }
    

    public function getModel(): ?string
    {
        return $this->model;
    }

    public function setModel(string $model): self
    {
        $this->model = $model;

        return $this;
    }

    public function getProdYear(): ?string
    {
        return $this->prodYear;
    }

    public function setProdYear(string $prodYear): self
    {
        $this->prodYear = $prodYear;

        return $this;
    }
}
