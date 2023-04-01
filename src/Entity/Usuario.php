<?php

namespace App\Entity;

use App\Repository\UsuarioRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: UsuarioRepository::class)]
class Usuario
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $uId = null;

    #[ORM\Column(length: 192)]
    private ?string $uNombres = null;

    #[ORM\Column(length: 128, nullable: true)]
    private ?string $uApellidos = null;

    #[ORM\Column(length: 64, nullable: true)]
    private ?string $uNombreUsuario = null;

    #[ORM\Column(length: 256)]
    private ?string $uCorreo = null;

    #[ORM\Column(length: 256)]
    private ?string $uContraseña = null;



    public function getUId(): ?int
    {
        return $this->uId;
    }

    public function setUId(int $uId): self
    {
        $this->uId = $uId;

        return $this;
    }

    public function getUNombres(): ?string
    {
        return $this->uNombres;
    }

    public function setUNombres(string $uNombres): self
    {
        $this->uNombres = $uNombres;

        return $this;
    }

    public function getUApellidos(): ?string
    {
        return $this->uApellidos;
    }

    public function setUApellidos(?string $uApellidos): self
    {
        $this->uApellidos = $uApellidos;

        return $this;
    }

    public function getUNombreUsuario(): ?string
    {
        return $this->uNombreUsuario;
    }

    public function setUNombreUsuario(?string $uNombreUsuario): self
    {
        $this->uNombreUsuario = $uNombreUsuario;

        return $this;
    }

    public function getUCorreo(): ?string
    {
        return $this->uCorreo;
    }

    public function setUCorreo(string $uCorreo): self
    {
        $this->uCorreo = $uCorreo;

        return $this;
    }

    public function getUContraseña(): ?string
    {
        return $this->uContraseña;
    }

    public function setUContraseña(string $uContraseña): self
    {
        $this->uContraseña = $uContraseña;

        return $this;
    }
}
