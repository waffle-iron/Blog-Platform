<?php

namespace App\EntityInterface;

interface UserInterface {
	public function getPasswordByEmail($email);
}