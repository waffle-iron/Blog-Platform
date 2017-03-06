<?php

namespace App\Manager;

use App\EntityInterface\UserInterface;
use App\FactoryInterface\UserFactoryInterface;
use App\Service\Validator;

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
		if(!Validator::email($user['email'])) {
			return [
				'status'  => 'error',
				'message' => 'This is not a valid email address.'
			];
		}

		if(!Validator::minLength($user['password'], 7)) {
			return [
				'status'  => 'error',
				'message' => 'Password is too short.'
			];
		}

		$user = $this->userFactory->create($user);

		return $user;
	}
}