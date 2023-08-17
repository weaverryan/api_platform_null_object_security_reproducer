<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiProperty;
use ApiPlatform\Metadata\ApiResource;
use App\Repository\CakeRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CakeRepository::class)]
#[ApiResource]
class Cake
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    #[ApiProperty(security: 'is_granted("FLAVOR", object)')]
    private ?string $flavor = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFlavor(): ?string
    {
        return $this->flavor;
    }

    public function setFlavor(string $flavor): static
    {
        $this->flavor = $flavor;

        return $this;
    }
}
