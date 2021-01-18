<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'logger' shared service.

$this->services['logger'] = $instance = new \Symfony\Bridge\Monolog\Logger('app');

$instance->useMicrosecondTimestamps(true);
$instance->pushHandler(${($_ = isset($this->services['monolog.handler.server_log']) ? $this->services['monolog.handler.server_log'] : ($this->services['monolog.handler.server_log'] = new \Symfony\Bridge\Monolog\Handler\ServerLogHandler('127.0.0.1:9911', 100, true))) && false ?: '_'});
$instance->pushHandler(${($_ = isset($this->services['monolog.handler.console']) ? $this->services['monolog.handler.console'] : $this->getMonolog_Handler_ConsoleService()) && false ?: '_'});
$instance->pushHandler(${($_ = isset($this->services['monolog.handler.main']) ? $this->services['monolog.handler.main'] : $this->getMonolog_Handler_MainService()) && false ?: '_'});

return $instance;