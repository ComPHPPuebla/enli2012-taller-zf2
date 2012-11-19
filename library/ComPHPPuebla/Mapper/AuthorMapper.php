<?php
namespace ComPHPPuebla\Mapper;

use \Zend\EventManager\EventManager;
use \Zend\Log\Logger;

class AuthorMapper
{
    /**
     * @var \Zend\EventManager\EventManager
     */
	protected $eventManager;

	/**
	 * @var \Zend\Log\Logger
	 */
	protected $logger;

	/**
	 * @return \Zend\EventManager\EventManager
	 */
	public function getEventManager()
	{
		if (!$this->eventManager) {
			$this->eventManager = new EventManager();
		}
		return $this->eventManager;
	}

	/**
	 * @return \Zend\Log\Logger
	 */
	public function getLogger()
	{
	    return $this->logger;
	}

	/**
	 * @param \Zend\Log\Logger $logger
	 */
	public function setLogger(Logger $logger)
	{
	    $this->logger = $logger;
	}

	public function findById($authorId)
	{
		$this->getEventManager()
		     ->trigger('findById.pre', $this, array('authorId' => $authorId));
		//Retrieve from database
		$this->getEventManager()
			 ->trigger('findById.post', $this, array('authorId' => $authorId));
	}

}