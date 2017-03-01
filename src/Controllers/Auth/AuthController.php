<?php

namespace App\Controllers\Auth;

use App\Controllers\BaseController;
use App\EntityInterface\UserInterface;
use App\Services\Input;

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

	public function postRegister($request, $response, $args) 
	{
		$input = Input::all();

		$registered = $this->user->register($input);

		return $this->getTemplateEngine()->render('auth/register.html', array('message' => $registered));
	}
}