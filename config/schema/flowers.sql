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


INSERT INTO `occasions`
(`name`,`description`)
VALUES
("Innamoramento","Quando ci si innamora servono dei fiori per divinare"),
("Studio","Quando si studia, servono fiori per pensare"),
("Matrimonio","Tipica usanza di ogni cultura umana, servono fiori per la nuova vita assieme"),
("Anniversario","Ci vuole un fiore per chiedere scusa per essersi dimenticati l'anniversario");


INSERT INTO `flowers`
(`name`,`occasion_id`,`price`,`qty`)
VALUES
("Margherita",1,2,10),
("Viola del pensiero",2,20,8),
("Rosa",4,20,12),
("Tulipano",4,35,3),
("Gerbera",1,3,10),
("Calla",3,8,20),
("Orchidea",3,30,5);



