<?php

use Config\App;

class Test extends App  {

    public function show($request, $response, $args)
    {
        if(empty($args['id'])) {
        	$posts = $this->getEntityManager()->getRepository('Post')->findAll();
        } else {
        	$posts = $this->getEntityManager()->find('Post', $args['id']);
        }
        
        var_dump($posts);
    }
}