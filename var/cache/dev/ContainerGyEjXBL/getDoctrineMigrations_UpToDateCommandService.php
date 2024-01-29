<?php

namespace ContainerGyEjXBL;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDoctrineMigrations_UpToDateCommandService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'doctrine_migrations.up_to_date_command' shared service.
     *
     * @return \Doctrine\Migrations\Tools\Console\Command\UpToDateCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/migrations/lib/Doctrine/Migrations/Tools/Console/Command/DoctrineCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/migrations/lib/Doctrine/Migrations/Tools/Console/Command/UpToDateCommand.php';

        $container->privates['doctrine_migrations.up_to_date_command'] = $instance = new \Doctrine\Migrations\Tools\Console\Command\UpToDateCommand(($container->privates['doctrine.migrations.dependency_factory'] ?? $container->load('getDoctrine_Migrations_DependencyFactoryService')), 'doctrine:migrations:up-to-date');

        $instance->setName('doctrine:migrations:up-to-date');
        $instance->setDescription('Tells you if your schema is up-to-date.');

        return $instance;
    }
}
