<?php

use Config\App;

class Test extends App  {

    public function show()
    {
        $posts = $this->getEntityManager()->find('Post', 2);
        var_dump($posts);
    }
}