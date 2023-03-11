<?php
require_once __DIR__.'/../vendor/autoload.php';

$appFactory = new ApplicationFactory();

$app = $appFactory->createApplication();

print $app->getGuiFactory()->createButton()->getName();

