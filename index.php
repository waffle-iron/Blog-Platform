<?php

require_once 'bootstrap.php';

$posts = $entity_manager->getRepository('Post')->findAll();
echo '<pre>';
var_dump($posts);
