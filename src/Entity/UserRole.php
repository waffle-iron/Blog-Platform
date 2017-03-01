<?php

namespace App\Entity;

/**
 * @Entity
 **/

class UserRole {

	/**
	 * @Id
	 * @Column(type="integer")
	 * @GeneratedValue(strategy="AUTO")
	 **/
	protected $id;

	/**
	 * @Column(type="string", unique=true, nullable=false)
	 */
	protected $name;
	
	public function getName()
	{
		return $this->name;
	}
}