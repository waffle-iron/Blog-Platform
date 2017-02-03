<?php

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

require_once 'vendor/autoload.php';

$is_dev_mode = true;
$config      = Setup::createAnnotationMetadataConfiguration(array(__DIR__ . '/src'), $is_dev_mode);

$db_connection = array(
  'driver' => 'pdo_mysql',
  'host'   => '127.0.0.1',
  'dbname' => 'doctrine',
  'user'   => 'root',
  'password' => 'root'
);

$entity_manager = EntityManager::create($db_connection, $config);
