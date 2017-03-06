<?php

namespace App\Service;

class Validator {

	public static function email($email)
	{
		return filter_var($email, FILTER_VALIDATE_EMAIL);
	}

	public static function minLength($string, $length = 7)
	{
		return (strlen($string) >= 7);
	}
}