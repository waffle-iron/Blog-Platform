<?php

require __DIR__ . '/vendor/autoload.php';

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

$container = new League\Container\Container;

$container->share('response', Zend\Diactoros\Response::class);
$container->share('request', function(){
	return Zend\Diactoros\ServerRequestFactory::fromGlobals(
		$_SERVER, $_GET, $_POST, $_COOKIE, $_FILES
	);
});

$container->delegate(
	new League\Container\ReflectionContainer
);

$container->add('TestInterface', 'TestRepository');

$container->share('emitter', Zend\Diactoros\Response\SapiEmitter::class);
