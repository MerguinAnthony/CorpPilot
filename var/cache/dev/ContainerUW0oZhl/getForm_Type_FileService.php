<?php

namespace ContainerUW0oZhl;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getForm_Type_FileService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'form.type.file' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\FileType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/Extension/Core/Type/FileType.php';

        return $container->privates['form.type.file'] = new \Symfony\Component\Form\Extension\Core\Type\FileType(($container->services['translator'] ?? self::getTranslatorService($container)));
    }
}
