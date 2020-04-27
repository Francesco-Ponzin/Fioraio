CREATE TABLE `occasions` (
    `id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `name` VARCHAR(32) NOT NULL,
    `description` TEXT,
    `created` datetime , 
    `modified` datetime
); 


CREATE TABLE `flowers` (
    `id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `name` VARCHAR(32) NOT NULL,
    `occasion_id` int,
    `price` float,
    `qty` int,
    `created` datetime, 
    `modified` datetime,
    FOREIGN KEY (`occasion_id`) REFERENCES `occasions` (`id`)  ON DELETE RESTRICT ON UPDATE CASCADE
);