<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'Pimcore\Templating\Helper\PimcoreUrl' shared autowired service.

return $this->services['Pimcore\Templating\Helper\PimcoreUrl'] = new \Pimcore\Templating\Helper\PimcoreUrl(${($_ = isset($this->services['cmf_routing.router']) ? $this->services['cmf_routing.router'] : $this->getCmfRouting_RouterService()) && false ?: '_'}, ${($_ = isset($this->services['Pimcore\Http\RequestHelper']) ? $this->services['Pimcore\Http\RequestHelper'] : $this->getRequestHelperService()) && false ?: '_'});
