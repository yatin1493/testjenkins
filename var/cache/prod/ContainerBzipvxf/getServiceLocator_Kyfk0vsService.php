<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'service_locator.kyfk0vs' shared service.

return $this->services['service_locator.kyfk0vs'] = new \Symfony\Component\DependencyInjection\ServiceLocator(array('assetsInstaller' => function () {
    $f = function (\Pimcore\Tool\AssetsInstaller $v = null) { return $v; }; return $f(${($_ = isset($this->services['Pimcore\Tool\AssetsInstaller']) ? $this->services['Pimcore\Tool\AssetsInstaller'] : $this->services['Pimcore\Tool\AssetsInstaller'] = new \Pimcore\Tool\AssetsInstaller()) && false ?: '_'});
}, 'cacheClearer' => function () {
    $f = function (\Pimcore\Cache\Symfony\CacheClearer $v = null) { return $v; }; return $f(${($_ = isset($this->services['Pimcore\Cache\Symfony\CacheClearer']) ? $this->services['Pimcore\Cache\Symfony\CacheClearer'] : $this->services['Pimcore\Cache\Symfony\CacheClearer'] = new \Pimcore\Cache\Symfony\CacheClearer()) && false ?: '_'});
}, 'kernel' => function () {
    return ${($_ = isset($this->services['kernel']) ? $this->services['kernel'] : $this->get('kernel', /* ContainerInterface::NULL_ON_INVALID_REFERENCE */ 2)) && false ?: '_'};
}));
