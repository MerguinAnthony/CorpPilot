<?php

namespace ContainerGyEjXBL;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_9Z0XlHkService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.9Z0XlHk' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.9Z0XlHk'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'companyRepository' => ['privates', 'App\\Repository\\CompanyRepository', 'getCompanyRepositoryService', true],
            'manager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'passwordHasher' => ['privates', 'security.user_password_hasher', 'getSecurity_UserPasswordHasherService', true],
            'security' => ['privates', 'security.helper', 'getSecurity_HelperService', true],
        ], [
            'companyRepository' => 'App\\Repository\\CompanyRepository',
            'manager' => '?',
            'passwordHasher' => '?',
            'security' => '?',
        ]);
    }
}
