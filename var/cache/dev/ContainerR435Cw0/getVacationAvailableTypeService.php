<?php

namespace ContainerR435Cw0;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getVacationAvailableTypeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Form\VacationAvailableType' shared autowired service.
     *
     * @return \App\Form\VacationAvailableType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/src/Form/VacationAvailableType.php';

        return $container->privates['App\\Form\\VacationAvailableType'] = new \App\Form\VacationAvailableType();
    }
}
