<?php
$autoloader = require 'vendor/autoload.php';
$autoloader->add('ComPHPPuebla', __DIR__ . '/library');

use \ComPHPPuebla\Mapper\AuthorMapper;
use \Zend\EventManager\Event;
use \Zend\Log\Writer\Stream as WriterStream;
use \Zend\Log\Logger;

$writer = new WriterStream(__DIR__ . '/logs/app-log.txt');
$logger = new Logger();
$logger->addWriter($writer);

$authorMapper = new AuthorMapper();
$authorMapper->setLogger($logger);
$authorMapper->getEventManager()->attach('findById.pre', function(Event $event) {
	$message = 'Trying to retrieve author with id: ' . $event->getParam('authorId');
	$event->getTarget()->getLogger()->info($message);
});
$authorMapper->getEventManager()->attach('findById.post', function(Event $event) {
	$message = 'Succesfully retrieved author with id: ' . $event->getParam('authorId');
	$event->getTarget()->getLogger()->info($message);
});
$authorMapper->findById(1234);