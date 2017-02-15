<?php

require_once 'vendor/autoload.php';

use Doctrine\ORM\Tools\Console\ConsoleRunner;
use Config\App;

$app = new App;

return ConsoleRunner::createHelperSet($app->getEntityManager());