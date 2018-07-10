<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'security.authentication.listener.basic.admin_webdav' shared service.

return $this->services['security.authentication.listener.basic.admin_webdav'] = new \Symfony\Component\Security\Http\Firewall\BasicAuthenticationListener(${($_ = isset($this->services['security.token_storage']) ? $this->services['security.token_storage'] : $this->services['security.token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage()) && false ?: '_'}, ${($_ = isset($this->services['security.authentication.manager']) ? $this->services['security.authentication.manager'] : $this->getSecurity_Authentication_ManagerService()) && false ?: '_'}, 'admin_webdav', ${($_ = isset($this->services['security.authentication.basic_entry_point.admin_webdav']) ? $this->services['security.authentication.basic_entry_point.admin_webdav'] : $this->services['security.authentication.basic_entry_point.admin_webdav'] = new \Symfony\Component\Security\Http\EntryPoint\BasicAuthenticationEntryPoint('Secured Area')) && false ?: '_'}, ${($_ = isset($this->services['monolog.logger.security']) ? $this->services['monolog.logger.security'] : $this->getMonolog_Logger_SecurityService()) && false ?: '_'});