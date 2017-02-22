<?php

namespace App\Controllers;

class BaseController {

	public function getTemplateEngine()
	{
		$twig = new \Twig_Loader_Filesystem(__DIR__.'/../../views');
		$twig = new \Twig_Environment($twig, [
			'cache' => false
		]);
		
		return $twig;
	}
}