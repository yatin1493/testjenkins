<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'presta_sitemap.generator_default' shared service.

$this->services['presta_sitemap.generator_default'] = $instance = new \Presta\SitemapBundle\Service\Generator(${($_ = isset($this->services['debug.event_dispatcher']) ? $this->services['debug.event_dispatcher'] : $this->getDebug_EventDispatcherService()) && false ?: '_'}, ${($_ = isset($this->services['cmf_routing.router']) ? $this->services['cmf_routing.router'] : $this->getCmfRouting_RouterService()) && false ?: '_'}, NULL, '3600', 50000);

$instance->setDefaults($this->parameters['presta_sitemap.defaults']);

return $instance;
