<?php

namespace App\Entity;

use App\Repository\UsuarioRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;
use Symfony\Component\Security\Core\User\UserInterface;

#[ORM\Entity(repositoryClass: UsuarioRepository::class)]
class Usuario implements UserInterface, PasswordAuthenticatedUserInterface
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 180, unique: true)]
    private ?string $username = null;

    #[ORM\Column]
    private array $roles = [];

    /**
     * @var string The hashed password
     */
    #[ORM\Column]
    private ?string $password = null;

    #[ORM\OneToMany(mappedBy: 'dUsuario', targetEntity: Dibujo::class)]
    private Collection $dibujos;

    #[ORM\OneToMany(mappedBy: 'cUsuario', targetEntity: Contenido::class)]
    private Collection $contenidos;

    #[ORM\OneToMany(mappedBy: 'mUsuario', targetEntity: Mensaje::class)]
    private Collection $mensajes;

    public function __construct()
    {
        $this->dibujos = new ArrayCollection();
        $this->contenidos = new ArrayCollection();
        $this->mensajes = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUsername(): ?string
    {
        return $this->username;
    }

    public function setUsername(string $username): self
    {
        $this->username = $username;

        return $this;
    }

    /**
     * A visual identifier that represents this user.
     *
     * @see UserInterface
     */
    public function getUserIdentifier(): string
    {
        return (string) $this->username;
    }

    /**
     * @see UserInterface
     */
    public function getRoles(): array
    {
        $roles = $this->roles;
        // guarantee every user at least has ROLE_USER
        $roles[] = 'ROLE_USER';

        return array_unique($roles);
    }

    public function setRoles(array $roles): self
    {
        $this->roles = $roles;

        return $this;
    }

    /**
     * @see PasswordAuthenticatedUserInterface
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    /**
     * @see UserInterface
     */
    public function eraseCredentials()
    {
        // If you store any temporary, sensitive data on the user, clear it here
        // $this->plainPassword = null;
    }

    /**
     * @return Collection<int, Dibujo>
     */
    public function getDibujos(): Collection
    {
        return $this->dibujos;
    }

    public function addDibujo(Dibujo $dibujo): self
    {
        if (!$this->dibujos->contains($dibujo)) {
            $this->dibujos->add($dibujo);
            $dibujo->setDUsuario($this);
        }

        return $this;
    }

    public function removeDibujo(Dibujo $dibujo): self
    {
        if ($this->dibujos->removeElement($dibujo)) {
            // set the owning side to null (unless already changed)
            if ($dibujo->getDUsuario() === $this) {
                $dibujo->setDUsuario(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Contenido>
     */
    public function getContenidos(): Collection
    {
        return $this->contenidos;
    }

    public function addContenido(Contenido $contenido): self
    {
        if (!$this->contenidos->contains($contenido)) {
            $this->contenidos->add($contenido);
            $contenido->setCUsuario($this);
        }

        return $this;
    }

    public function removeContenido(Contenido $contenido): self
    {
        if ($this->contenidos->removeElement($contenido)) {
            // set the owning side to null (unless already changed)
            if ($contenido->getCUsuario() === $this) {
                $contenido->setCUsuario(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Mensaje>
     */
    public function getMensajes(): Collection
    {
        return $this->mensajes;
    }

    public function addMensaje(Mensaje $mensaje): self
    {
        if (!$this->mensajes->contains($mensaje)) {
            $this->mensajes->add($mensaje);
            $mensaje->setMUsuario($this);
        }

        return $this;
    }

    public function removeMensaje(Mensaje $mensaje): self
    {
        if ($this->mensajes->removeElement($mensaje)) {
            // set the owning side to null (unless already changed)
            if ($mensaje->getMUsuario() === $this) {
                $mensaje->setMUsuario(null);
            }
        }

        return $this;
    }
}
