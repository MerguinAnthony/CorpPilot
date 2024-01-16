<?php

namespace ContainerE9Mj3fh;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getLeaveManagementControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\LeaveManagementController' shared autowired service.
     *
     * @return \App\Controller\LeaveManagementController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/LeaveManagementController.php';

        $container->services['App\\Controller\\LeaveManagementController'] = $instance = new \App\Controller\LeaveManagementController();

        $instance->setContainer(($container->privates['.service_locator.jUv.zyj'] ?? $container->load('get_ServiceLocator_JUv_ZyjService'))->withContext('App\\Controller\\LeaveManagementController', $container));

        return $instance;
    }
}
