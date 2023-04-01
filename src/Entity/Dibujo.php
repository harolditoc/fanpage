<?php

namespace App\Entity;

use App\Repository\DibujoRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: DibujoRepository::class)]
class Dibujo
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $dId = null;

    #[ORM\Column(length: 45)]
    private ?string $dTitulo = null;

    #[ORM\Column(length: 256, nullable: true)]
    private ?string $dDescripcion = null;

    #[ORM\Column(length: 256)]
    private ?string $dImagen = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: 2, nullable: true)]
    private ?string $dPrecio = null;

    public function getDId(): ?int
    {
        return $this->dId;
    }

    public function setDId(int $dId): self
    {
        $this->dId = $dId;

        return $this;
    }

    public function getDTitulo(): ?string
    {
        return $this->dTitulo;
    }

    public function setDTitulo(string $dTitulo): self
    {
        $this->dTitulo = $dTitulo;

        return $this;
    }

    public function getDDescripcion(): ?string
    {
        return $this->dDescripcion;
    }

    public function setDDescripcion(?string $dDescripcion): self
    {
        $this->dDescripcion = $dDescripcion;

        return $this;
    }

    public function getDImagen(): ?string
    {
        return $this->dImagen;
    }

    public function setDImagen(string $dImagen): self
    {
        $this->dImagen = $dImagen;

        return $this;
    }

    public function getDPrecio(): ?string
    {
        return $this->dPrecio;
    }

    public function setDPrecio(?string $dPrecio): self
    {
        $this->dPrecio = $dPrecio;

        return $this;
    }
}
