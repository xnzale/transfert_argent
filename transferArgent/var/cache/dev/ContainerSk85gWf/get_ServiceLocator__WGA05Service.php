<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator..WGA05_' shared service.

return $this->privates['.service_locator..WGA05_'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'App\\Controller\\UserController::register' => ['privates', '.service_locator.kYsoNUE', 'get_ServiceLocator_KYsoNUEService.php', true],
    'App\\Controller\\UserController:register' => ['privates', '.service_locator.kYsoNUE', 'get_ServiceLocator_KYsoNUEService.php', true],
], [
    'App\\Controller\\UserController::register' => '?',
    'App\\Controller\\UserController:register' => '?',
]);