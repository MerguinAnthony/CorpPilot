<?php

namespace ContainerLJgNHGB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_KaxaMdcService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.kaxaMdc' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.kaxaMdc'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'manager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'security' => ['privates', 'security.helper', 'getSecurity_HelperService', true],
            'userRepository' => ['privates', 'App\\Repository\\UserRepository', 'getUserRepositoryService', true],
            'vacation' => ['privates', '.errored..service_locator.kaxaMdc.App\\Entity\\Vacation', NULL, 'Cannot autowire service ".service_locator.kaxaMdc": it needs an instance of "App\\Entity\\Vacation" but this type has been excluded in "config/services.yaml".'],
        ], [
            'manager' => '?',
            'security' => '?',
            'userRepository' => 'App\\Repository\\UserRepository',
            'vacation' => 'App\\Entity\\Vacation',
        ]);
    }
}
