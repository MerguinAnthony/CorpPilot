<?php

namespace Proxies\__CG__\App\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Vacation extends \App\Entity\Vacation implements \Doctrine\ORM\Proxy\InternalProxy
{
    use \Symfony\Component\VarExporter\LazyGhostTrait {
        initializeLazyObject as __load;
        setLazyObjectAsInitialized as public __setInitialized;
        isLazyObjectInitialized as private;
        createLazyGhost as private;
        resetLazyObject as private;
    }

    private const LAZY_OBJECT_PROPERTY_SCOPES = [
        "\0".parent::class."\0".'approved' => [parent::class, 'approved', null],
        "\0".parent::class."\0".'endDate' => [parent::class, 'endDate', null],
        "\0".parent::class."\0".'hours' => [parent::class, 'hours', null],
        "\0".parent::class."\0".'id' => [parent::class, 'id', null],
        "\0".parent::class."\0".'startDate' => [parent::class, 'startDate', null],
        "\0".parent::class."\0".'user' => [parent::class, 'user', null],
        'approved' => [parent::class, 'approved', null],
        'endDate' => [parent::class, 'endDate', null],
        'hours' => [parent::class, 'hours', null],
        'id' => [parent::class, 'id', null],
        'startDate' => [parent::class, 'startDate', null],
        'user' => [parent::class, 'user', null],
    ];

    public function __isInitialized(): bool
    {
        return isset($this->lazyObjectState) && $this->isLazyObjectInitialized();
    }

    public function __serialize(): array
    {
        $properties = (array) $this;
        unset($properties["\0" . self::class . "\0lazyObjectState"]);

        return $properties;
    }
}
