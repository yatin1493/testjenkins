<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'Pimcore\Targeting\ActionHandler\CodeSnippet' shared autowired service.

return $this->services['Pimcore\Targeting\ActionHandler\CodeSnippet'] = new \Pimcore\Targeting\ActionHandler\CodeSnippet(${($_ = isset($this->services['Pimcore\Http\Response\CodeInjector']) ? $this->services['Pimcore\Http\Response\CodeInjector'] : $this->getCodeInjectorService()) && false ?: '_'});
