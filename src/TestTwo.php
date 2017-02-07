<?php

use Config\App;

class TestTwo {
    
    function __construct()
    {
        var_dump($app->getContainer()->get('Test'));
    }
}