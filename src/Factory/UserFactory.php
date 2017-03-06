<?php

namespace App\Factory;

use Doctrine\ORM\EntityManager;
use App\FactoryInterface\UserFactoryInterface;
use App\Entity\User;

class UserFactory implements UserFactoryInterface {

	protected 
		$entityManager,
		$user;

	public function __construct(
		EntityManager $entityManager, 
		User $user
	) {
		$this->entityManager = $entityManager;
		$this->user = $user;
	}

	public function create(array $user) {
		try {
			$this->user->setEmail($user['email']);
			$this->user->setPassword($user['password']);
			$this->entityManager->flush();
		} catch(\Exception $e) {
			return $e->getMessage();
		}

		return $this->user;
	}
}