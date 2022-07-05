
/* 
	All rights reserved by Downtown Management
	AUTHOR: Francis Nzuki
  EMAIL: nzukifrancis20@gmail.com
    
*/

DROP DATABASE IF EXISTS `myproject`;
CREATE DATABASE `myproject`; 
USE `myproject`;

SET NAMES utf8 ;
SET character_set_client = utf8mb4 ;

CREATE TABLE `registration` (
  `id` int NOT NULL AUTO_INCREMENT,
  `firstname` varchar(15) NOT NULL,
  `lastname` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ;
INSERT INTO `registration` VALUES (1,'Francis','Nzuki','nzukifrancis@gmail.com','12345');

