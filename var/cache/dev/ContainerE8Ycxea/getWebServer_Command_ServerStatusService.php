<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'web_server.command.server_status' shared service.

include_once $this->targetDirs[3].'/vendor/symfony/console/Command/Command.php';
include_once $this->targetDirs[3].'/vendor/symfony/web-server-bundle/Command/ServerStatusCommand.php';

$this->privates['web_server.command.server_status'] = $instance = new \Symfony\Bundle\WebServerBundle\Command\ServerStatusCommand($this->targetDirs[3]);

$instance->setName('server:status');

return $instance;
