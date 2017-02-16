<?php

use \Doctrine\ORM\EntityRepository;

class TestRepository extends EntityRepository implements TestInterface {

	public function getById($id)
	{
		var_dump($this->getEntityManager()->getRepository('Post'));
		return 'The ID is: ' . $id;
	}
}