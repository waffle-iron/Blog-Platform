<?php

namespace App\EntityRepository;

use \Doctrine\ORM\EntityManager;
use App\EntityInterface\UserInterface;
use App\Entity\User;

class UserRepository implements UserInterface {

	protected $entityManager;

	public function __construct(EntityManager $em)
	{
		$this->entityManager = $em;
	}

	public function getUserById($id)
	{
		$query = $this->entityManager->createQueryBuilder();

		return $query;
	}

	public function add(User $userObject)
	{
		$this->entityManager->persist($userObject);
	}
}