<?php

class Test {
    
    /**
     * @Inject
     * @var TestTwo
     */
    protected $test;
    
    public function show()
    {
        var_dump($this->test);
    }
}
