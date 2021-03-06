<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'hwi_oauth.resource_owner.facebook' shared service.

include_once $this->targetDirs[3].'\\vendor\\hwi\\oauth-bundle\\OAuth\\ResourceOwnerInterface.php';
include_once $this->targetDirs[3].'\\vendor\\hwi\\oauth-bundle\\OAuth\\ResourceOwner\\AbstractResourceOwner.php';
include_once $this->targetDirs[3].'\\vendor\\hwi\\oauth-bundle\\OAuth\\ResourceOwner\\GenericOAuth2ResourceOwner.php';
include_once $this->targetDirs[3].'\\vendor\\hwi\\oauth-bundle\\OAuth\\ResourceOwner\\FacebookResourceOwner.php';
include_once $this->targetDirs[3].'\\vendor\\hwi\\oauth-bundle\\OAuth\\RequestDataStorageInterface.php';
include_once $this->targetDirs[3].'\\vendor\\hwi\\oauth-bundle\\OAuth\\RequestDataStorage\\SessionStorage.php';

return $this->services['hwi_oauth.resource_owner.facebook'] = new \HWI\Bundle\OAuthBundle\OAuth\ResourceOwner\FacebookResourceOwner(${($_ = isset($this->services['hwi_oauth.http_client']) ? $this->services['hwi_oauth.http_client'] : $this->load('getHwiOauth_HttpClientService.php')) && false ?: '_'}, ${($_ = isset($this->services['security.http_utils']) ? $this->services['security.http_utils'] : $this->getSecurity_HttpUtilsService()) && false ?: '_'}, ['client_id' => 1654896674667347, 'client_secret' => '27804c48ab2159991982e49a70acbf68', 'scope' => 'email', 'paths' => [], 'options' => []], 'facebook', new \HWI\Bundle\OAuthBundle\OAuth\RequestDataStorage\SessionStorage(${($_ = isset($this->services['session']) ? $this->services['session'] : $this->load('getSessionService.php')) && false ?: '_'}));
