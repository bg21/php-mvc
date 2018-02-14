/* Simple database schema for MySQL */

/* To create the database */
/*
CREATE DATABASE mvc CHARACTER SET utf8 COLLATE utf8_general_ci;
*/

/* To create the  */
/*
CREATE USER 'mvc'@'localhost' IDENTIFIED BY 'mvc';
GRANT ALL PRIVILEGES ON mvc . * TO 'mvc'@'localhost';
FLUSH PRIVILEGES;
*/

CREATE TABLE clients (
    id int NOT NULL AUTO_INCREMENT,
    name varchar(255) NOT NULL,
    email varchar(255),
    PRIMARY KEY (id)
);