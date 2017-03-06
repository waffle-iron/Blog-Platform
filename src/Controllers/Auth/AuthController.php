<?php

namespace App\Controllers\Auth;

use App\Controllers\BaseController;
use App\Manager\UserManager;

class AuthController extends BaseController {

	protected $user;

	public function __construct(UserManager $user)
	{
		$this->user = $user;
	}

	public function showRegister() 
	{
		return $this->getTemplateEngine()->render('auth/register.html');
	}

	public function postRegister($request, $response) 
	{
		$input = $request->getParsedBody();

		$t = $this->user->register($input);
		die(var_dump($t));
	}
}