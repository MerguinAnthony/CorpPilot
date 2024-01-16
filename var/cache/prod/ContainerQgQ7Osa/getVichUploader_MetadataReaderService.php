<?php

namespace ContainerQgQ7Osa;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getVichUploader_MetadataReaderService extends App_KernelProdContainer
{
    /*
     * Gets the private 'vich_uploader.metadata_reader' shared service.
     *
     * @return \Vich\UploaderBundle\Metadata\MetadataReader
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = new \Metadata\Driver\FileLocator([]);

        $b = new \Metadata\MetadataFactory(new \Metadata\Driver\DriverChain([new \Vich\UploaderBundle\Metadata\Driver\XmlDriver($a), new \Vich\UploaderBundle\Metadata\Driver\AnnotationDriver(new \Vich\UploaderBundle\Metadata\Driver\AttributeReader(), [($container->services['doctrine'] ?? self::getDoctrineService($container))]), new \Vich\UploaderBundle\Metadata\Driver\YamlDriver($a), new \Vich\UploaderBundle\Metadata\Driver\YmlDriver($a)]), 'Metadata\\ClassHierarchyMetadata', false);
        $b->setCache(new \Metadata\Cache\FileCache(($container->targetDir.''.'/vich_uploader')));

        return $container->privates['vich_uploader.metadata_reader'] = new \Vich\UploaderBundle\Metadata\MetadataReader($b);
    }
}
