<?php

namespace App\EntityRepository;

use \Doctrine\ORM\EntityManager;
use \App\EntityInterface\TestInterface;

class TestRepository implements TestInterface {

    protected $entityManager;

    public function __construct(EntityManager $em)
    {
        $this->entityManager = $em;
    }

	public function getById($id)
	{
		return $this->entityManager->find('\App\Entity\Post', $id);
	}
}
