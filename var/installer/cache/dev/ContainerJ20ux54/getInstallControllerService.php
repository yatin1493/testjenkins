<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'Pimcore\Bundle\InstallBundle\Controller\InstallController' shared autowired service.

$this->services['Pimcore\Bundle\InstallBundle\Controller\InstallController'] = $instance = new \Pimcore\Bundle\InstallBundle\Controller\InstallController(${($_ = isset($this->services['logger']) ? $this->services['logger'] : $this->load('getLoggerService.php')) && false ?: '_'});

$instance->setContainer((new \Symfony\Component\DependencyInjection\ServiceLocator(array('http_kernel' => function () {
    return ${($_ = isset($this->services['http_kernel']) ? $this->services['http_kernel'] : $this->getHttpKernelService()) && false ?: '_'};
}, 'request_stack' => function () {
    return ${($_ = isset($this->services['request_stack']) ? $this->services['request_stack'] : $this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack()) && false ?: '_'};
}, 'router' => function () {
    return ${($_ = isset($this->services['router']) ? $this->services['router'] : $this->getRouterService()) && false ?: '_'};
}, 'templating' => function () {
    return ${($_ = isset($this->services['templating']) ? $this->services['templating'] : $this->load('getTemplatingService.php')) && false ?: '_'};
}, 'twig' => function () {
    return ${($_ = isset($this->services['twig']) ? $this->services['twig'] : $this->load('getTwigService.php')) && false ?: '_'};
})))->withContext('Pimcore\\Bundle\\InstallBundle\\Controller\\InstallController', $this));

return $instance;
