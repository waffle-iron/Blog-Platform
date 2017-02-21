<?php

class Test {
	protected $test;
	
	function __construct(TestInterface $test)
	{
		$this->test = $test;
	}

	public function show($request, $response, $args)
	{
        return $response->getBody()
            ->write($this->test->getById(1));
	}
}
