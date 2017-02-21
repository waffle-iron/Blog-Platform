<?php

$routes = new League\Route\RouteCollection($container);

$routes->get('/', 'Controllers\Test::show');
$routes->get('/{id}', 'Test::show');

$response = $routes->dispatch($container->get('request'), $container->get('response'));

$container->get('emitter')->emit($response);
