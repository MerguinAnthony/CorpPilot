<?php

namespace ContainerQgQ7Osa;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getStaffVacationControllerService extends App_KernelProdContainer
{
    /*
     * Gets the public 'App\Controller\StaffVacationController' shared autowired service.
     *
     * @return \App\Controller\StaffVacationController
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->services['App\\Controller\\StaffVacationController'] = $instance = new \App\Controller\StaffVacationController();

        $instance->setContainer(($container->privates['.service_locator.jUv.zyj'] ?? $container->load('get_ServiceLocator_JUv_ZyjService'))->withContext('App\\Controller\\StaffVacationController', $container));

        return $instance;
    }
}
