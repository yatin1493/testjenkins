<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'Pimcore\Bundle\CoreBundle\EventListener\ControllerViewModelListener' shared autowired service.

return $this->services['Pimcore\Bundle\CoreBundle\EventListener\ControllerViewModelListener'] = new \Pimcore\Bundle\CoreBundle\EventListener\ControllerViewModelListener(${($_ = isset($this->services['Pimcore\Http\Request\Resolver\ViewModelResolver']) ? $this->services['Pimcore\Http\Request\Resolver\ViewModelResolver'] : $this->load('getViewModelResolverService.php')) && false ?: '_'});
