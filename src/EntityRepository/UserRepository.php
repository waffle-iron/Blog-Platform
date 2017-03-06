<?php

namespace App\EntityRepository;

use Doctrine\ORM\EntityManager;
use App\EntityInterface\UserInterface;

class UserRepository implements UserInterface {

	protected $entityManager;

	public function __construct(EntityManager $entityManager)
	{
		$this->entityManager = $entityManager;
	}

	public function getEntityManager()
	{
		return $this->entityManager;
	}

	public function getUserById($id)
	{
		return 'test';
	}

	public function add(User $userObject)
	{
		$this->getEntityManager()->persist($userObject);
	}
}