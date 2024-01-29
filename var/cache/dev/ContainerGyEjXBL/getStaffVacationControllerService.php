<?php

namespace ContainerGyEjXBL;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getStaffVacationControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\StaffVacationController' shared autowired service.
     *
     * @return \App\Controller\StaffVacationController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/StaffVacationController.php';
        include_once \dirname(__DIR__, 4).'/src/Services/DaysBetweenDates.php';
        include_once \dirname(__DIR__, 4).'/src/Services/IsHoliday.php';
        include_once \dirname(__DIR__, 4).'/src/Services/DayOutsidePeriod.php';

        $a = new \App\Service\DaysBetweenDates(new \App\Service\IsHoliday());

        $container->services['App\\Controller\\StaffVacationController'] = $instance = new \App\Controller\StaffVacationController($a, new \App\Service\DaysOutsidePeriod($a));

        $instance->setContainer(($container->privates['.service_locator.jUv.zyj'] ?? $container->load('get_ServiceLocator_JUv_ZyjService'))->withContext('App\\Controller\\StaffVacationController', $container));

        return $instance;
    }
}
