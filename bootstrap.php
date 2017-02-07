<?php

require __DIR__ . '/vendor/autoload.php';

use Config\App;

$app = new App;
$app->setContainer(new \DI\ContainerBuilder);

return $app->getContainer();