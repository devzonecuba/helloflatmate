<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.7XtPRBu' shared service.

return $this->privates['.service_locator.7XtPRBu'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'cama' => ['privates', '.errored..service_locator.7XtPRBu.App\\Entity\\Cama', NULL, 'Cannot autowire service ".service_locator.7XtPRBu": it references class "App\\Entity\\Cama" but no such service exists.'],
]);
