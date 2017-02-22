<?php

namespace App\Controllers;

use \App\EntityInterface\TestInterface;

class Test extends BaseController {

	protected $test;
	
	function __construct(TestInterface $test)
	{
		$this->test = $test;
	}

	public function show($request, $response, $args)
	{
        return $response->getBody()->write($this->getTemplateEngine()->render('index.html', array('name' => 'Ryan')));
	}
}
