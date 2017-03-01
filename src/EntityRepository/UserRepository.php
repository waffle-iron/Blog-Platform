<?php

namespace App\EntityRepository;

use App\EntityInterface\UserInterface;
use App\Entity\User;
use \Doctrine\ORM\EntityManager;

class UserRepository implements UserInterface {

	protected $entityManager;

	public function __construct(EntityManager $em)
	{
		$this->entityManager = $em;
	}

	public function register(array $user)
	{
		try {
			$u = new User;

			$u->setEmail($user['email']);
			$u->setPassword($user['password']);
			$this->entityManager->persist($u);
			$this->entityManager->flush();

			return [
				'status'  => 'success',
				'message' => 'Your account has been created successfully.'
			];

		} catch(\Exception $e) {
			return [
				'status'  => 'error',
				'message' => 'Sorry, there was an error creating your account.'
			];
		}
	}
}