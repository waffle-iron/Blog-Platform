<?php

class Test {
	protected $test;
	
	function __construct(TestInterface $test)
	{
		$this->test = $test;
	}

	public function show($request, $response, $args)
	{
		var_dump($this->test->getById(1));
		return '1';
	}
}