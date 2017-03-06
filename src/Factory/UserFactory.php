<?php

namespace App\Factory;

use App\FactoryInterface\UserFactoryInterface;
use App\EntityInterface\UserInterface;
use App\Entity\User;

class UserFactory implements UserFactoryInterface {

	protected 
		$userInterface,
		$user;

	public function __construct(
		UserInterface $userInterface, 
		User $user
	) {
		$this->userInterface = $userInterface;
		$this->user = $user;
	}

	/**
	 * @ToDo:
	 * - Validate user input.
	 * - Check for errors
	 **/
	public function create(array $user)
	{
		$this->user->setEmail($user['email']);
		$this->user->setPassword($user['password']);

		$this->userInterface->add($this->user);
		
		$this->userInterface->getEntityManager()->flush();

		return true;
	}
}