<?php

namespace App\Controllers\Auth;

use App\Controllers\BaseController;
use App\Manager\UserManager;

class AuthController extends BaseController {

	protected $userManager;

	public function __construct(UserManager $userManager)
	{
		$this->userManager = $userManager;
	}

	public function showRegister() 
	{
		return $this->getTemplateEngine()->render('auth/register.html');
	}

	public function postRegister($request, $response) 
	{
		$input = $request->getParsedBody();

		$registered = $this->userManager->register($input);

		$message = [
			'status'  => 'success',
			'message' => 'Your account was created successfully.'
		];

		if(!$registered) {
			$message = [
				'status'  => 'error',
				'message' => 'Sorry, there was an error creating your account.'
			];
		}

		return $this->getTemplateEngine()->render('auth/register.html', array('message' => $message));
	}
}