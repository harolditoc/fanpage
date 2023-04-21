<?php

namespace App\Twig\Components;

use App\Entity\Contenido;
use App\Repository\ContenidoRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use Symfony\UX\LiveComponent\Attribute\AsLiveComponent;
use Symfony\UX\LiveComponent\Attribute\LiveAction;
use Symfony\UX\LiveComponent\Attribute\LiveProp;
use Symfony\UX\LiveComponent\Attribute\PostHydrate;
use Symfony\UX\LiveComponent\DefaultActionTrait;

#[AsLiveComponent('edit_banner')]
final class EditBannerComponent
{
    use DefaultActionTrait;
    
    #[LiveProp(writable: true, exposed: ['cTitulo', 'cContenido'])]
    public ?Contenido $contenido = null;

    private ContenidoRepository $contenidoRepository;

    public bool $isSaved = false;

    public function __construct(ContenidoRepository $contenidoRepository)
    {
        $this->contenidoRepository = $contenidoRepository;
    }

    #[PostHydrate]
    public function contenidoHydrate(): void
    {
       
    }
    #[LiveAction]
    public function save(EntityManagerInterface $entityManager)
    {
        $entityManager->flush();
        $this->isSaved = true;        
    }
    /**
     * @return Contenido[]
     */
    public function getAllContenido(): array
    {
        return $this->contenidoRepository->findAll();
    }
}