<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'Pimcore\Targeting\DataProvider\Piwik' shared autowired service.

$a = ${($_ = isset($this->services['Pimcore\Analytics\Piwik\Config\Config']) ? $this->services['Pimcore\Analytics\Piwik\Config\Config'] : $this->load('getConfigService.php')) && false ?: '_'};

return $this->services['Pimcore\Targeting\DataProvider\Piwik'] = new \Pimcore\Targeting\DataProvider\Piwik($a, ${($_ = isset($this->services['Pimcore\Analytics\SiteId\SiteIdProvider']) ? $this->services['Pimcore\Analytics\SiteId\SiteIdProvider'] : $this->getSiteIdProviderService()) && false ?: '_'}, new \Pimcore\Analytics\Piwik\Api\VisitorClient(${($_ = isset($this->services['Pimcore\Analytics\Piwik\Api\ApiClient']) ? $this->services['Pimcore\Analytics\Piwik\Api\ApiClient'] : $this->load('getApiClientService.php')) && false ?: '_'}, $a), ${($_ = isset($this->services['logger']) ? $this->services['logger'] : $this->getLoggerService()) && false ?: '_'});
