<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.w9ceKNQ' shared service.

return $this->privates['.service_locator.w9ceKNQ'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'habitacione' => ['privates', '.errored..service_locator.w9ceKNQ.App\\Entity\\Habitaciones', NULL, 'Cannot autowire service ".service_locator.w9ceKNQ": it references class "App\\Entity\\Habitaciones" but no such service exists.'],
]);
