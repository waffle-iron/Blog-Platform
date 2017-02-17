<?php

require __DIR__ . '/vendor/autoload.php';

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use function DI\object;
use function DI\get;
use function DI\factory;

$builder = new DI\ContainerBuilder;

$builder->addDefinitions(
    [
        'response' => object(\Zend\Diactoros\Response::class), 

        'request' => function () {
            return Zend\Diactoros\ServerRequestFactory::fromGlobals(
                $_SERVER, $_GET, $_POST, $_COOKIE, $_FILES
            );
        },

        'emitter' => object(\Zend\Diactoros\Response\SapiEmitter::class),

        \Doctrine\ORM\EntityManager::class => function() {
            return (new \Config\App)->getEntityManager();
        },

        TestInterface::class => object(\TestRepository::class),
    ]
);

$container = $builder->build();

