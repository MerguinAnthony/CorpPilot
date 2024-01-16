<?php

namespace ContainerJKQxxex;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSetUserTypeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Form\SetUserType' shared autowired service.
     *
     * @return \App\Form\SetUserType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/src/Form/SetUserType.php';

        return $container->privates['App\\Form\\SetUserType'] = new \App\Form\SetUserType();
    }
}
