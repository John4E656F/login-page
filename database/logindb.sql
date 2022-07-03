CREATE DATABASE IF NOT EXISTS logindb;
USE logindb;

CREATE TABLE `student` (
	`uid` int NOT NULL AUTO_INCREMENT PRIMARY KEY,
	`username` varchar(255) NOT NULL,
	`email` varchar(255) NOT NULL,
	`password` varchar(255) NOT NULL,
	`first_name` varchar(255),
	`last_name` varchar(255),
	`avatar` MEDIUMBLOB,
	`created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP NOT NULL
);