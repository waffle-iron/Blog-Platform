<?php

use Config\App;

class Test extends App  {
    private $two;

    function __construct()
    {
        
    }

    public function show()
    {
        var_dump($this->getEntityManager());
    }
}
