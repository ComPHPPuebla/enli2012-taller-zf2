<?php
$autoloader = require 'vendor/autoload.php';
$autoloader->add('ComPHPPuebla', __DIR__ . '/library');

$definition = array(
	'ComPHPPuebla\Model\Author' => array(
		'parameters' => array(
			'firstName' => 'Matt',
			'lastName' => 'Zandstra',
		)
	),
	'ComPHPPuebla\Model\Book' => array(
		'parameters' => array(
			'author' => 'ComPHPPuebla\Model\Author'
		),
	),
);

use Zend\Di\Di;
use Zend\Di\Config;

$di = new Di();
$configuration = new Config(
	array(
		'instance' => $definition,
	)
);

$configuration->configure($di);
$book = $di->get('ComPHPPuebla\Model\Book');
$book->setTitle('PHP Objects, Patterns and Practice');

var_dump($book);