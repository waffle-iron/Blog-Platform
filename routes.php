<?php


$routes = new League\Route\RouteCollection($container);

$routes->get('/auth/register', 'App\Controllers\Auth\AuthController::showRegister');
$routes->post('/auth/register', 'App\Controllers\Auth\AuthController::postRegister');

$response = $routes->dispatch($container->get('request'), $container->get('response'));

$container->get('emitter')->emit($response);
