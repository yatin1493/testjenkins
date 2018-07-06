<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'Pimcore\Bundle\CoreBundle\EventListener\ResponseExceptionListener' shared autowired service.

$this->services['Pimcore\Bundle\CoreBundle\EventListener\ResponseExceptionListener'] = $instance = new \Pimcore\Bundle\CoreBundle\EventListener\ResponseExceptionListener(${($_ = isset($this->services['Pimcore\Document\Renderer\DocumentRenderer']) ? $this->services['Pimcore\Document\Renderer\DocumentRenderer'] : $this->load('getDocumentRendererService.php')) && false ?: '_'}, ${($_ = isset($this->services['doctrine.dbal.default_connection']) ? $this->services['doctrine.dbal.default_connection'] : $this->getDoctrine_Dbal_DefaultConnectionService()) && false ?: '_'});

$instance->setLogger(${($_ = isset($this->services['logger']) ? $this->services['logger'] : $this->getLoggerService()) && false ?: '_'});
$instance->setPimcoreContextResolver(${($_ = isset($this->services['Pimcore\Http\Request\Resolver\PimcoreContextResolver']) ? $this->services['Pimcore\Http\Request\Resolver\PimcoreContextResolver'] : $this->getPimcoreContextResolverService()) && false ?: '_'});

return $instance;
