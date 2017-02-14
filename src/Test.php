<?php


class Test  {
    private $two;

    function __construct(TestTwo $two)
    {
        $this->two = $two;
    }
    
    public function show()
    {
        var_dump($this->two);
        return 'This is the show method';
    }
}
