CREATE DATABASE IF NOT EXISTS `tutorial`;

USE `users`;

CREATE TABLE `users` (
  `Id` int PRIMARY KEY AUTO_INCREMENT,
  `Username` varchar(200),
  `Email` varchar(200),
  `Age` int,
  `Password` varchar(200),
  `genero` varchar(200),
  `fecha` date
);
