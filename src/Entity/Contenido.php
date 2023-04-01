<?php

namespace App\Entity;

use App\Repository\ContenidoRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ContenidoRepository::class)]
class Contenido
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $cId = null;

    #[ORM\Column(length: 45)]
    private ?string $cTipoContenido = null;

    #[ORM\Column(length: 45)]
    private ?string $cTitulo = null;

    #[ORM\Column(length: 256)]
    private ?string $cContenido = null;

    #[ORM\Column]
    private ?int $Usuario_uId = null;


    public function getCId(): ?int
    {
        return $this->cId;
    }

    public function setCId(int $cId): self
    {
        $this->cId = $cId;

        return $this;
    }

    public function getCTipoContenido(): ?string
    {
        return $this->cTipoContenido;
    }

    public function setCTipoContenido(string $cTipoContenido): self
    {
        $this->cTipoContenido = $cTipoContenido;

        return $this;
    }

    public function getCTitulo(): ?string
    {
        return $this->cTitulo;
    }

    public function setCTitulo(string $cTitulo): self
    {
        $this->cTitulo = $cTitulo;

        return $this;
    }

    public function getCContenido(): ?string
    {
        return $this->cContenido;
    }

    public function setCContenido(string $cContenido): self
    {
        $this->cContenido = $cContenido;

        return $this;
    }

    public function getUsuarioUId(): ?int
    {
        return $this->Usuario_uId;
    }

    public function setUsuarioUId(int $Usuario_uId): self
    {
        $this->Usuario_uId = $Usuario_uId;

        return $this;
    }
}
