<?php

use Config\App;

class Test extends App  {

    public function show($request, $response, $args)
    {
        $posts = $this->getEntityManager()->find('Post', $args['id']);
        var_dump($posts);
    }
}