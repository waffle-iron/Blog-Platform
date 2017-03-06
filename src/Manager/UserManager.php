<?php

namespace App\Manager;

use App\EntityInterface\UserInterface;
use App\FactoryInterface\UserFactoryInterface;

class UserManager {

	protected
		$userEntity,
		$userFactory;

	public function __construct(
		UserInterface $userEntity,
		UserFactoryInterface $userFactory
	) {
		$this->userEntity = $userEntity;
		$this->userFactory = $userFactory;
	}

	public function register(array $user)
	{
		$user = $this->userFactory->create($user);
		$this->userEntity->add($user);
		return $user;
	}
}