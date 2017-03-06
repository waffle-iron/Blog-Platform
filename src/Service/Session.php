<?php

namespace App\Service;

class Session {

	public static function login(array $user)
	{
		$_SESSION['user'] = $user;
	}
}