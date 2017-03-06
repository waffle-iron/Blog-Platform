<?php

namespace Config;

class DB {

	private static $connection = [
		'driver'   => 'pdo_mysql',
		'host'     => '127.0.0.1',
		'dbname'   => 'doctrine',
		'user'     => 'root',
		'password' => 'root'
	];

	public static function getDriver()
	{
		return self::$connection['driver'];
	}

	public static function getHost()
	{
		return self::$connection['host'];
	}

	public static function getDatabase()
	{
		return self::$connection['dbname'];
	}

	public static function getUsername()
	{
		return self::$connection['user'];
	}

	public static function getPassword()
	{
		return self::$connection['password'];
	}
}