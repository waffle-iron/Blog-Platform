<?php

class Test {
	protected $test;
	
	function __construct(TestRepository $test)
	{
		$this->test = $test;
	}
	public function show($request, $response, $args)
	{
		return '1';
	}
}