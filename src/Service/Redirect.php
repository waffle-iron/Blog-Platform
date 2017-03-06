<?php

namespace App\Service;

class Redirect {
	
	public static function to($url)
	{
		header('Location: ' . $url);
		exit;
	}
}