<?php

namespace ContainerRDmh1JS;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_2sK16mXService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.2sK16mX' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.2sK16mX'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'req' => ['privates', '.errored..service_locator.2sK16mX.http\\Client\\Request', NULL, 'Cannot autowire service ".service_locator.2sK16mX": it references class "http\\Client\\Request" but no such service exists.'],
        ], [
            'req' => 'http\\Client\\Request',
        ]);
    }
}
