DROP DATABASE IF EXISTS bdrestaut;

CREATE DATABASE bdrestaut CHARACTER SET 'utf8';


CREATE TABLE bdrestaut.smsClient(numCli INT(7) ZEROFILL AUTO_INCREMENT,
nomCli CHAR(40) NOT NULL, emailCli CHAR(30) NOT NULL, nbreCli CHAR(2) NOT NULL,  dateresvCli CHAR(16) NOT NULL, teleCli CHAR(16) NOT NULL, 
dateSms DATETIME, CONSTRAINT PRIMARY KEY(numCli))ENGINE = innoDB;