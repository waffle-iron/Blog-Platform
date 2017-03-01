<?php

namespace App\Controllers\Auth;

use App\Controllers\BaseController;

class AuthController extends BaseController {

	public function showLogin() {}

	public function postLogin() {}

	public function showRegister() 
	{
		return $this->getTemplateEngine()->render('auth/register.html');
	}

	public function postRegister() {}

	public function logout() {}
}