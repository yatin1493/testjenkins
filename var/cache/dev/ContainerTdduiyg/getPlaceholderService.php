<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'Pimcore\Templating\Helper\Placeholder' shared autowired service.

return $this->services['Pimcore\Templating\Helper\Placeholder'] = new \Pimcore\Templating\Helper\Placeholder(${($_ = isset($this->services['pimcore.templating.view_helper.placeholder.container_service']) ? $this->services['pimcore.templating.view_helper.placeholder.container_service'] : $this->getPimcore_Templating_ViewHelper_Placeholder_ContainerServiceService()) && false ?: '_'});
