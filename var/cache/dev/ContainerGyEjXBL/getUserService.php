<?php

namespace ContainerGyEjXBL;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getUserService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.errored..service_locator.2koa9ic.App\Entity\User' shared service.
     *
     * @return \App\Entity\User
     */
    public static function do($container, $lazyLoad = true)
    {
        throw new RuntimeException('Cannot autowire service ".service_locator.2koa9ic": it needs an instance of "App\\Entity\\User" but this type has been excluded in "config/services.yaml".');
    }
}
