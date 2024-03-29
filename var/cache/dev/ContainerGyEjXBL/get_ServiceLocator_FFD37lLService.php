<?php

namespace ContainerGyEjXBL;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_FFD37lLService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.fFD37lL' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.fFD37lL'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'companyRepository' => ['privates', 'App\\Repository\\CompanyRepository', 'getCompanyRepositoryService', true],
            'pdfGenerator' => ['privates', 'Knp\\Snappy\\Pdf', 'getPdfService', true],
            'security' => ['privates', 'security.helper', 'getSecurity_HelperService', true],
            'vacationRepository' => ['privates', 'App\\Repository\\VacationRepository', 'getVacationRepositoryService', true],
        ], [
            'companyRepository' => 'App\\Repository\\CompanyRepository',
            'pdfGenerator' => 'Knp\\Snappy\\Pdf',
            'security' => '?',
            'vacationRepository' => 'App\\Repository\\VacationRepository',
        ]);
    }
}
