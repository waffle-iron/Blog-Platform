<?php

namespace Config;

class App {
    protected $container;
    
    public function setContainer(\DI\ContainerBuilder $builder)
    {
        $this->container = $builder->build();
    }
    
    public function getContainer()
    {
        return $this->container;
    }
}
