<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'console.command.form_debug' shared service.

$this->services['console.command.form_debug'] = $instance = new \Symfony\Component\Form\Command\DebugCommand(${($_ = isset($this->services['form.registry']) ? $this->services['form.registry'] : $this->getForm_RegistryService()) && false ?: '_'}, array(0 => 'Symfony\\Component\\Form\\Extension\\Core\\Type', 1 => 'Symfony\\Cmf\\Bundle\\RoutingBundle\\Form\\Type'), array(0 => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType', 1 => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType', 2 => 'Symfony\\Cmf\\Bundle\\RoutingBundle\\Form\\Type\\RouteTypeType'), array(0 => 'Symfony\\Component\\Form\\Extension\\HttpFoundation\\Type\\FormTypeHttpFoundationExtension', 1 => 'Symfony\\Component\\Form\\Extension\\Validator\\Type\\FormTypeValidatorExtension', 2 => 'Symfony\\Component\\Form\\Extension\\Validator\\Type\\RepeatedTypeValidatorExtension', 3 => 'Symfony\\Component\\Form\\Extension\\Validator\\Type\\SubmitTypeValidatorExtension', 4 => 'Symfony\\Component\\Form\\Extension\\Validator\\Type\\UploadValidatorExtension', 5 => 'Symfony\\Component\\Form\\Extension\\Csrf\\Type\\FormTypeCsrfExtension'), array(0 => 'Symfony\\Component\\Form\\Extension\\Validator\\ValidatorTypeGuesser'));

$instance->setName('debug:form');

return $instance;