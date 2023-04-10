<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CasaController extends AbstractController
{
    #[Route('/casa', name: 'app_casa')]
    public function index(): Response
    {
         // get the login error if there is one
        return $this->render('casa/index.html.twig', [
            'controller_name' => 'CasaController'
        ]);
    }
    
    #[Route('/edit', name: 'app_casa_edit', methods:['GET', 'POST'])]
    public function edit()
    {
        return $this->render('casa/edit.html.twig');
    }
}
