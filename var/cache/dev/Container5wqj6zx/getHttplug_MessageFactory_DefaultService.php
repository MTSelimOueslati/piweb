<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'httplug.message_factory.default' shared service.

include_once $this->targetDirs[3].'\\vendor\\php-http\\discovery\\src\\MessageFactoryDiscovery.php';

return $this->services['httplug.message_factory.default'] = \Http\Discovery\MessageFactoryDiscovery::find();
