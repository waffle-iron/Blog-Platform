<?php

namespace Controllers;

use \EntityInterface\TestInterface;

class Test {
	protected $test;
	
	function __construct(TestInterface $test)
	{
		$this->test = $test;
	}

	public function show($request, $response, $args)
	{
        $posts = $this->test->getById(1);

        return $response->getBody()->write($posts->getText());
	}
}
