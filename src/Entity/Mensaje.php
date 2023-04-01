<?php

namespace App\Entity;

use App\Repository\MensajeRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: MensajeRepository::class)]
class Mensaje
{
  
    #[ORM\Id]
    #[ORM\Column(type: "integer")]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $mId = null;

    #[ORM\Column(length: 256)]
    private ?string $mNombreCompletoRemitente = null;

    #[ORM\Column(length: 12)]
    private ?string $mTelefonoRemitente = null;

    #[ORM\Column(length: 256)]
    private ?string $mCorreoRemitente = null;

    #[ORM\Column(length: 512)]
    private ?string $mMensajeRemitente = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $mFechaEnvio = null;

    #[ORM\ManyToOne(inversedBy: 'mensajes')]
    private ?Usuario $mUsuario = null;

    public function getMId(): ?int
    {
        return $this->mId;
    }

    public function setMId(int $mId): self
    {
        $this->mId = $mId;

        return $this;
    }

    public function getMNombreCompletoRemitente(): ?string
    {
        return $this->mNombreCompletoRemitente;
    }

    public function setMNombreCompletoRemitente(string $mNombreCompletoRemitente): self
    {
        $this->mNombreCompletoRemitente = $mNombreCompletoRemitente;

        return $this;
    }

    public function getMTelefonoRemitente(): ?string
    {
        return $this->mTelefonoRemitente;
    }

    public function setMTelefonoRemitente(string $mTelefonoRemitente): self
    {
        $this->mTelefonoRemitente = $mTelefonoRemitente;

        return $this;
    }

    public function getMCorreoRemitente(): ?string
    {
        return $this->mCorreoRemitente;
    }

    public function setMCorreoRemitente(string $mCorreoRemitente): self
    {
        $this->mCorreoRemitente = $mCorreoRemitente;

        return $this;
    }

    public function getMMensajeRemitente(): ?string
    {
        return $this->mMensajeRemitente;
    }

    public function setMMensajeRemitente(string $mMensajeRemitente): self
    {
        $this->mMensajeRemitente = $mMensajeRemitente;

        return $this;
    }

    public function getMFechaEnvio(): ?\DateTimeInterface
    {
        return $this->mFechaEnvio;
    }

    public function setMFechaEnvio(\DateTimeInterface $mFechaEnvio): self
    {
        $this->mFechaEnvio = $mFechaEnvio;

        return $this;
    }

    public function getMUsuario(): ?Usuario
    {
        return $this->mUsuario;
    }

    public function setMUsuario(?Usuario $mUsuario): self
    {
        $this->mUsuario = $mUsuario;

        return $this;
    }
}
