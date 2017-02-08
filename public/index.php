<?php

$config = require __DIR__ . '/../bootstrap.php';

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

$container = new League\Container\Container;

$container->share('response', Zend\Diactoros\Response::class);
$container->share('request', function () {
    return Zend\Diactoros\ServerRequestFactory::fromGlobals(
        $_SERVER, $_GET, $_POST, $_COOKIE, $_FILES
    );
});

$container->share('emitter', Zend\Diactoros\Response\SapiEmitter::class);

$route = new League\Route\RouteCollection($container);

$route->map('GET', '/', function (ServerRequestInterface $request, ResponseInterface $response) use ($config) {
    $response->getBody()->write($config->get('Test')->show());

    return $response;
});

$route->map('GET', '/other', 'Test::show');

$response = $route->dispatch($container->get('request'), $container->get('response'));
$container->get('emitter')->emit($response);
