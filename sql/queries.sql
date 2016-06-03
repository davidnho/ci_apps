create database ci_apps;

CREATE TABLE `ci_apps`.`todos` ( 
`id` INT(11) NOT NULL AUTO_INCREMENT , 
`title` VARCHAR(255) NOT NULL , 
`description` TEXT NOT NULL , 
`completed` INT(1) NOT NULL , 
PRIMARY KEY (`id`) 
);

