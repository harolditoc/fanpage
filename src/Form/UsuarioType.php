<?php

namespace App\Form;

use App\Entity\Usuario;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\NotBlank;

class UsuarioType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('username', TextType::class, [
                'label' => 'Usuario',
                'attr' => [
                    'autocomplete' => 'username',
                    'required' => true,
                    'autofocus' => true,       
                    'placeholder' => 'Escribir nombre' 
                ],
                'data' => $options['last_username'],
                'constraints' => [
                    new NotBlank([
                        'message' => 'Escribe un usuario'
                    ])
                ]
            ])
            ->add('password', PasswordType::class, [
                'label' => 'Contraseña',
                'always_empty' => false,
                'attr' => [
                    'autocomplete' => 'current-password',
                    'required' => true,      
                    'placeholder' => 'Escribir contraseña'          
                ],
                'constraints' => [
                    new NotBlank([
                        'message' => 'Escribe una contraseña'
                    ]),
                ]
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Usuario::class,
            'last_username' => null
        ]);
    }
}
