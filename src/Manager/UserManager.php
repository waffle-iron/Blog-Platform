<?php

namespace App\Manager;

use App\EntityInterface\UserInterface;
use App\FactoryInterface\UserFactoryInterface;
use App\Service\Validator;
use App\Service\Session;

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

	public function login(array $user)
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

		$password = $this->userEntityRepository->getPasswordByEmail($user['email']);

		$match = password_verify($user['password'], $password);

		if($match) {
			Session::login([
				'email' => $user['email']
			]);
		}

		return $match;
	}
}