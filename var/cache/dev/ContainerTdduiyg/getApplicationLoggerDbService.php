<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'Pimcore\Log\Handler\ApplicationLoggerDb' shared autowired service.

$this->services['Pimcore\Log\Handler\ApplicationLoggerDb'] = $instance = new \Pimcore\Log\Handler\ApplicationLoggerDb(${($_ = isset($this->services['doctrine.dbal.default_connection']) ? $this->services['doctrine.dbal.default_connection'] : $this->getDoctrine_Dbal_DefaultConnectionService()) && false ?: '_'});

$instance->pushProcessor(${($_ = isset($this->services['monolog.processor.psr_log_message']) ? $this->services['monolog.processor.psr_log_message'] : $this->services['monolog.processor.psr_log_message'] = new \Monolog\Processor\PsrLogMessageProcessor()) && false ?: '_'});
$instance->pushProcessor(new \Pimcore\Log\Processor\ApplicationLoggerProcessor());
$instance->pushProcessor(new \Monolog\Processor\IntrospectionProcessor('DEBUG', array(0 => 'Pimcore\\Log\\ApplicationLogger')));

return $instance;