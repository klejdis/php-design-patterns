<?php
require_once __DIR__.'/../vendor/autoload.php';

$loggerManager = new LoggerManager(new Logger());

$loggerManager->error('Error message');
$loggerManager->info('Info message');
$loggerManager->warning('Warning message');