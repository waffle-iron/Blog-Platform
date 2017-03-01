<?php

namespace App\Services;

class Input {

	public static function all()
	{
		return self::clean($_POST);
	}

	private static function clean(array $post)
	{
		return filter_var_array($post, FILTER_SANITIZE_STRING);
	}
}