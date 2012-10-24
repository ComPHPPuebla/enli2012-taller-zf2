<?php
namespace ComPHPPuebla\Model;

class Author
{
	/**
	 * @var string
	 */
	protected $lastName;
	
	/**
	 * @var string
	 */
	protected $firstName;
	
	/**
	 * @var string
	 */
	protected $biography;
	
	/**
	 * @param string $firstName
	 * @param string $lastName
	 */
	public function __construct($firstName, $lastName)
	{
		$this->setFirstName($firstName);
		$this->setLastName($lastName);
	}

	/**
	 * @return string
	 */
	public function getLastName()
	{
	    return $this->lastName;
	}

	/**
	 * @param string $lastName
	 */
	public function setLastName($lastName)
	{
	    $this->lastName = $lastName;
	}

	/**
	 * @return string
	 */
	public function getFirstName()
	{
	    return $this->firstName;
	}

	/**
	 * @param string $firstName
	 */
	public function setFirstName($firstName)
	{
	    $this->firstName = $firstName;
	}

	/**
	 * @return string
	 */
	public function getBiography()
	{
	    return $this->biography;
	}

	/**
	 * @param string $biography
	 */
	public function setBiography($biography)
	{
	    $this->biography = $biography;
	}
	
}