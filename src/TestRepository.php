<?php

use \Doctrine\ORM\EntityRepository;

class TestRepository implements TestInterface {

	public function getById($id)
	{
		return 'The ID is: ' . $id;
	}
}