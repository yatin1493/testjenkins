<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'Pimcore\Migrations\Configuration\ConfigurationFactory' shared autowired service.

return $this->services['Pimcore\Migrations\Configuration\ConfigurationFactory'] = new \Pimcore\Migrations\Configuration\ConfigurationFactory($this, array(0 => array('identifier' => 'app', 'name' => 'Migrations', 'namespace' => 'App\\Migrations', 'directory' => ($this->targetDirs[3].'/app/Resources/migrations'), 'connection' => NULL)));
