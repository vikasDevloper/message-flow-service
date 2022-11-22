<?php

namespace ContainerDvJeSRc;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMessagesControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\MessagesController' shared autowired service.
     *
     * @return \App\Controller\MessagesController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/MessagesController.php';

        $container->services['App\\Controller\\MessagesController'] = $instance = new \App\Controller\MessagesController(($container->privates['App\\Repository\\MessagesRepository'] ?? $container->load('getMessagesRepositoryService')));

        $instance->setContainer(($container->privates['.service_locator.0ghLsew'] ?? $container->load('get_ServiceLocator_0ghLsewService'))->withContext('App\\Controller\\MessagesController', $container));

        return $instance;
    }
}
