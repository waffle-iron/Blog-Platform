<?php

require_once 'vendor/autoload.php';


$app = new \Config\App;
$app->setContainer(new \DI\ContainerBuilder);