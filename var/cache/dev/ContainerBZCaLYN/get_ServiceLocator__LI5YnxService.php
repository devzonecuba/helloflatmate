<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator..LI5Ynx' shared service.

return $this->privates['.service_locator..LI5Ynx'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'supermercado' => ['privates', '.errored..service_locator..LI5Ynx.App\\Entity\\Supermercado', NULL, 'Cannot autowire service ".service_locator..LI5Ynx": it references class "App\\Entity\\Supermercado" but no such service exists.'],
]);