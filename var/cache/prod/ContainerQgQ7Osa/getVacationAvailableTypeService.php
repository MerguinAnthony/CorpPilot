<?php

namespace ContainerQgQ7Osa;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getVacationAvailableTypeService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Form\VacationAvailableType' shared autowired service.
     *
     * @return \App\Form\VacationAvailableType
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Form\\VacationAvailableType'] = new \App\Form\VacationAvailableType();
    }
}
