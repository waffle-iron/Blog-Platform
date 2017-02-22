<?php


$routes = new League\Route\RouteCollection($container);

$routes->get('/', 'App\Controllers\Test::show');

$response = $routes->dispatch($container->get('request'), $container->get('response'));

$container->get('emitter')->emit($response);
