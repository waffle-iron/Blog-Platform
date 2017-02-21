<?php

require __DIR__ . '/vendor/autoload.php';

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

$builder = new DI\ContainerBuilder;

$builder->addDefinitions(
    [
        'response' => DI\object(\Zend\Diactoros\Response::class), 

        'request' => function () {
            return Zend\Diactoros\ServerRequestFactory::fromGlobals(
                $_SERVER, $_GET, $_POST, $_COOKIE, $_FILES
            );
        },

        'emitter' => DI\object(\Zend\Diactoros\Response\SapiEmitter::class),

        \Doctrine\ORM\EntityManager::class => function() {
            return (new \Config\App)->getEntityManager();
        },

        \EntityInterface\TestInterface::class => DI\object(\EntityRepository\TestRepository::class),
    ]
);

$container = $builder->build();

