<?php

namespace ContainerBhx4fS1;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getEditBannerComponentService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Twig\Components\EditBannerComponent' autowired service.
     *
     * @return \App\Twig\Components\EditBannerComponent
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'ux-live-component'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'DefaultActionTrait.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Twig'.\DIRECTORY_SEPARATOR.'Components'.\DIRECTORY_SEPARATOR.'EditBannerComponent.php';

        $container->factories['App\\Twig\\Components\\EditBannerComponent'] = function () use ($container) {
            return new \App\Twig\Components\EditBannerComponent(($container->privates['App\\Repository\\ContenidoRepository'] ?? $container->load('getContenidoRepositoryService')));
        };

        return $container->factories['App\\Twig\\Components\\EditBannerComponent']();
    }
}
