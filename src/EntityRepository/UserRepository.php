<?php

namespace App\EntityRepository;

use Doctrine\ORM\EntityManager;
use App\EntityInterface\UserInterface;
use App\Entity\User;

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

	public function add(User $userObject)
	{
		$this->getEntityManager()->persist($userObject);
	}
}