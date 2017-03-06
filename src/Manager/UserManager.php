<?php

namespace App\Manager;

use App\EntityInterface\UserInterface;
use App\FactoryInterface\UserFactoryInterface;

class UserManager {

	protected
		$userEntityRepository,
		$userFactory;

	public function __construct(
		UserInterface $userEntityRepository,
		UserFactoryInterface $userFactory
	) {
		$this->userEntityRepository = $userEntityRepository;
		$this->userFactory = $userFactory;
	}

	public function register(array $user)
	{
		$user = $this->userFactory->create($user);

		return $user;
	}
}