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

	public function getPasswordByEmail($email)
	{
		$query = $this->getEntityManager()->createQueryBuilder();

		$user = $query
			->select('u.password')
			->from('\App\Entity\User', 'u')
			->where('u.email = :email')
			->setParameter('email', $email)
			->getQuery()
			->getSingleResult();

		return $user['password'];
	}
}