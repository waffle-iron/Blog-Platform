<?php

use \Doctrine\ORM\EntityRepository;
use \Doctrine\ORM\EntityManager;

class TestRepository implements TestInterface {

    protected $entityManager;

    public function __construct(EntityManager $em)
    {
        $this->entityManager = $em;
    }

	public function getById($id)
	{
		return $this->entityManager->find('Post', $id);
	}
}
