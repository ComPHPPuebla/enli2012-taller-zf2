<?php
require "vendor/zendframework/zend-loader/Zend/Loader/ClassMapAutoloader.php";
$loader = new Zend\Loader\ClassMapAutoloader();
$loader->registerAutoloadMap(__DIR__ . '/library/autoload_classmap.php');
$loader->register();

use \ComPHPPuebla\Model\Author;
use \ComPHPPuebla\Model\Book;

$author = new Author();
$author->setLastName('Zandstra');
$author->setFirstName('Matt');

$book = new Book();
$book->setTitle('PHP Objects, Patterns and Practice');

var_dump($author);
var_dump($book);