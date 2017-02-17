<?php

namespace Config;

use \Doctrine\ORM\Tools\Setup;
use \Doctrine\ORM\EntityManager;
use \Config\DB;

class App {

	public function getEntityManager()
	{
		$config  = Setup::createAnnotationMetadataConfiguration(array(__DIR__."/../src"), true);

		$conn = array(
		  'driver' => DB::getDriver(),
		  'host'   => DB::getHost(),
		  'dbname' => DB::getDatabase(),
		  'user'   => DB::getUsername(),
		  'password' => DB::getPassword()
		);

		return EntityManager::create($conn, $config);
	}
}