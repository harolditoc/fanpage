<?php

namespace App\Twig\Components;

use App\Form\UsuarioType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\FormInterface;
use Symfony\UX\LiveComponent\Attribute\AsLiveComponent;
use Symfony\UX\LiveComponent\ComponentWithFormTrait;
use Symfony\UX\LiveComponent\DefaultActionTrait;

/**
 * Renders the registration form with automatic validation as you change fields.
 *
 * This is a LIVE component: try entering an invalid email address
 * or a short password, then focus away from the field.
 */
#[AsLiveComponent('login_form')]
class LoginFormComponent extends AbstractController
{
    use DefaultActionTrait;
    use ComponentWithFormTrait;

    protected function instantiateForm(): FormInterface
    {
        return $this->createForm(UsuarioType::class);
    }
}
