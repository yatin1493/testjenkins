<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'security.firewall.map.context.admin' shared service.

$a = ${($_ = isset($this->services['security.token_storage']) ? $this->services['security.token_storage'] : $this->services['security.token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage()) && false ?: '_'};
$b = ${($_ = isset($this->services['security.http_utils']) ? $this->services['security.http_utils'] : $this->load('getSecurity_HttpUtilsService.php')) && false ?: '_'};

$c = new \Symfony\Component\Security\Http\Firewall\LogoutListener($a, $b, ${($_ = isset($this->services['pimcore_admin.security.logout_success_handler']) ? $this->services['pimcore_admin.security.logout_success_handler'] : $this->load('getPimcoreAdmin_Security_LogoutSuccessHandlerService.php')) && false ?: '_'}, array('csrf_parameter' => '_csrf_token', 'csrf_token_id' => 'logout', 'logout_path' => '/admin/logout'));
$c->addHandler(new \Symfony\Component\Security\Http\Logout\CsrfTokenClearingLogoutHandler(${($_ = isset($this->services['security.csrf.token_storage']) ? $this->services['security.csrf.token_storage'] : $this->load('getSecurity_Csrf_TokenStorageService.php')) && false ?: '_'}));

return $this->services['security.firewall.map.context.admin'] = new \Symfony\Bundle\SecurityBundle\Security\FirewallContext(new RewindableGenerator(function () {
    yield 0 => ${($_ = isset($this->services['security.channel_listener']) ? $this->services['security.channel_listener'] : $this->load('getSecurity_ChannelListenerService.php')) && false ?: '_'};
    yield 1 => ${($_ = isset($this->services['security.authentication.listener.guard.admin']) ? $this->services['security.authentication.listener.guard.admin'] : $this->load('getSecurity_Authentication_Listener_Guard_AdminService.php')) && false ?: '_'};
    yield 2 => ${($_ = isset($this->services['security.authentication.listener.anonymous.admin']) ? $this->services['security.authentication.listener.anonymous.admin'] : $this->load('getSecurity_Authentication_Listener_Anonymous_AdminService.php')) && false ?: '_'};
    yield 3 => ${($_ = isset($this->services['security.access_listener']) ? $this->services['security.access_listener'] : $this->load('getSecurity_AccessListenerService.php')) && false ?: '_'};
}, 4), new \Symfony\Component\Security\Http\Firewall\ExceptionListener($a, ${($_ = isset($this->services['security.authentication.trust_resolver']) ? $this->services['security.authentication.trust_resolver'] : $this->services['security.authentication.trust_resolver'] = new \Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver('Symfony\\Component\\Security\\Core\\Authentication\\Token\\AnonymousToken', 'Symfony\\Component\\Security\\Core\\Authentication\\Token\\RememberMeToken')) && false ?: '_'}, $b, 'admin', ${($_ = isset($this->services['pimcore_admin.security.admin_authenticator']) ? $this->services['pimcore_admin.security.admin_authenticator'] : $this->load('getPimcoreAdmin_Security_AdminAuthenticatorService.php')) && false ?: '_'}, NULL, NULL, ${($_ = isset($this->services['monolog.logger.security']) ? $this->services['monolog.logger.security'] : $this->getMonolog_Logger_SecurityService()) && false ?: '_'}, true), $c, new \Symfony\Bundle\SecurityBundle\Security\FirewallConfig('admin', 'security.user_checker', 'security.request_matcher.z8xqmvs', true, true, 'Pimcore\\Bundle\\AdminBundle\\Security\\User\\UserProvider', NULL, 'Pimcore\\Bundle\\AdminBundle\\Security\\Guard\\AdminAuthenticator', NULL, NULL, array(0 => 'guard', 1 => 'anonymous'), NULL));
