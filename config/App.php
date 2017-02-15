<?php

namespace Config;

use \Doctrine\ORM\Tools\Setup;
use \Doctrine\ORM\EntityManager;

class App {

	public function getEntityManager()
	{
		$config  = Setup::createAnnotationMetadataConfiguration(array(__DIR__."/../src"), true);

		$conn = array(
		  'driver' => 'pdo_mysql',
		  'host'   => '127.0.0.1',
		  'dbname' => 'doctrine',
		  'user'   => 'root',
		  'password' => 'root'
		);

		return EntityManager::create($conn, $config);
	}
}