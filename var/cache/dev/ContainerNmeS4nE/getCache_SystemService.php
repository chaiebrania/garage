<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'cache.system' shared service.

return $this->services['cache.system'] = \Symfony\Component\Cache\Adapter\AbstractAdapter::createSystemCache('G1YOGpAMPh', 0, $this->getParameter('container.build_id'), ($this->targetDirs[0].'/pools'), ($this->privates['logger'] ?? ($this->privates['logger'] = new \Symfony\Component\HttpKernel\Log\Logger())));