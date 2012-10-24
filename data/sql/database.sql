-- Create database
DROP DATABASE IF EXISTS book_store;
CREATE DATABASE book_store 
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;

-- Create user
GRANT ALL PRIVILEGES on book_store.* TO bstore_user@localhost IDENTIFIED BY 'book_store_us3r';

-- Create tables
USE book_store;

CREATE TABLE IF NOT EXISTS `author` (
  `author_id` int(11) NOT NULL AUTO_INCREMENT,
  `firstName` varchar(200) NOT NULL,
  `lastName` varchar(200) NOT NULL,
  PRIMARY KEY (`author_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8;

-- Perform inserts
INSERT INTO `author` (`author_id`, `firstName`, `lastName`) VALUES
(1, 'Jason', 'Gilmore'),
(2, 'Luke', 'Welling'),
(3, 'Rasmus', 'Lerdorf'),
(4, 'Dagfinn', 'Reiersol'),
(5, 'George', 'Schlossnagle');
