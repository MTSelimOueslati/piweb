<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'hwi_oauth.http_client' shared service.

include_once $this->targetDirs[3].'\\vendor\\php-http\\client-common\\src\\HttpMethodsClient.php';

return $this->services['hwi_oauth.http_client'] = new \Http\Client\Common\HttpMethodsClient(${($_ = isset($this->services['httplug.client.default']) ? $this->services['httplug.client.default'] : $this->load('getHttplug_Client_DefaultService.php')) && false ?: '_'}, ${($_ = isset($this->services['httplug.message_factory.default']) ? $this->services['httplug.message_factory.default'] : $this->load('getHttplug_MessageFactory_DefaultService.php')) && false ?: '_'});
