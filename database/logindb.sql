CREATE DATABASE IF NOT EXISTS logindb;
USE logindb;

CREATE TABLE student (
	id int NOT NULL AUTO_INCREMENT,
	username varchar(255) NOT NULL,
	email varchar(255) NOT NULL,
	password varchar(255) NOT NULL,
	encrypted_password varchar(255) NOT NULL,
	first_name varchar(255),
	last_name varchar(255),
	linked varchar(255),
	github varchar(255),
	avatar MEDIUMBLOB,
	created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP NOT NULL,
	primary key (id),
);

