<?php
namespace ComPHPPuebla\Model;

class Book
{
	/**
	 * @var string
	 */
	protected $title;

	/**
	 * @var string
	 */
	protected $description;

	/**
	 * @var string
	 */
	protected $isbn;

	/**
	 * @return string
	 */
	public function getTitle()
	{
	    return $this->title;
	}

	/**
	 * @param string $title
	 */
	public function setTitle($title)
	{
	    $this->title = $title;
	}

	/**
	 * @return string
	 */
	public function getDescription()
	{
	    return $this->description;
	}

	/**
	 * @param string $description
	 */
	public function setDescription($description)
	{
	    $this->description = $description;
	}

	/**
	 * @return string
	 */
	public function getIsbn()
	{
	    return $this->isbn;
	}

	/**
	 * @param string $isbn
	 */
	public function setIsbn($isbn)
	{
	    $this->isbn = $isbn;
	}

}