<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'hwi_oauth.authentication.provider.oauth.secured_area' shared service.

include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core\\Authentication\\Provider\\AuthenticationProviderInterface.php';
include_once $this->targetDirs[3].'\\vendor\\hwi\\oauth-bundle\\Security\\Core\\Authentication\\Provider\\OAuthProvider.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core\\User\\UserCheckerInterface.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core\\User\\UserChecker.php';

return $this->services['hwi_oauth.authentication.provider.oauth.secured_area'] = new \HWI\Bundle\OAuthBundle\Security\Core\Authentication\Provider\OAuthProvider(${($_ = isset($this->services['hwi_oauth.user.provider.entity.secured_area']) ? $this->services['hwi_oauth.user.provider.entity.secured_area'] : $this->load('getHwiOauth_User_Provider_Entity_SecuredAreaService.php')) && false ?: '_'}, ${($_ = isset($this->services['hwi_oauth.resource_ownermap.secured_area']) ? $this->services['hwi_oauth.resource_ownermap.secured_area'] : $this->getHwiOauth_ResourceOwnermap_SecuredAreaService()) && false ?: '_'}, ${($_ = isset($this->services['hwi_oauth.user_checker']) ? $this->services['hwi_oauth.user_checker'] : ($this->services['hwi_oauth.user_checker'] = new \Symfony\Component\Security\Core\User\UserChecker())) && false ?: '_'}, ${($_ = isset($this->services['security.token_storage']) ? $this->services['security.token_storage'] : ($this->services['security.token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage())) && false ?: '_'});
