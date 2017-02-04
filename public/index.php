<?php

require_once '../bootstrap.php';

$posts = $entity_manager->getRepository('Post')->findAll();
var_dump($posts);
