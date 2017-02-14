<?php

<<<<<<< HEAD
class Test {
    
    /**
     * @Inject
     * @var TestTwo
     */
    protected $test;
    
    public function show()
    {
        var_dump($this->test);
=======
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
>>>>>>> 31f756ab86e5327341a5964965f23a34f70c5a98
    }
}
