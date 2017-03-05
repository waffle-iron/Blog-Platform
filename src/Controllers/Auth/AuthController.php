<?php

namespace App\Controllers\Auth;

use App\Controllers\BaseController;
use App\EntityInterface\UserInterface;

class AuthController extends BaseController {

	protected $user;

	public function __construct(UserInterface $user)
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

		$registered = $this->user->register($input);

		return $this->getTemplateEngine()->render('auth/register.html', array('message' => $registered));
	}
}