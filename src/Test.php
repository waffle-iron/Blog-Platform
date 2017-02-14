<?php


class Test  {
    private $two;

    function __construct(TestTwo $two)
    {
        $this->two = $two;
    }

    public function show()
    {
        return $this->two;
    }
}
