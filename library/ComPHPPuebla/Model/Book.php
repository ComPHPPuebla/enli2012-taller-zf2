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
	 * string
	 */
	protected $isbn;
	
	/**
	 * @var ComPHPPuebla\Model\Author
	 */
	protected $author;
	
	/**
	 * @param ComPHPPuebla\Model\Author $author
	 */
	public function __construct(Author $author)
	{
		$this->setAuthor($author);
	}
	
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

	/**
	 * @return ComPHPPuebla\Model\Author
	 */
	public function getAuthor()
	{
	    return $this->author;
	}

	/**
	 * @param ComPHPPuebla\Model\Author $author
	 */
	public function setAuthor(Author $author)
	{
	    $this->author = $author;
	}
}