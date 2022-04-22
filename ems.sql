CREATE TABLE IF NOT EXISTS `customer` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
 `username` varchar(50) NOT NULL,
 `email` varchar(50) NOT NULL,
 `password` varchar(50) NOT NULL,
 PRIMARY KEY (`id`)
);
CREATE TABLE IF NOT EXISTS `event` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
 `etype` varchar(50) NOT NULL,
 `name` varchar(50) NOT NULL,
 `cid` REFERENCES `customer(id)` ON DELETE SET NULL
 PRIMARY KEY (`id`)
);
CREATE TABLE IF NOT EXISTS `guest` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
 `` varchar(50) NOT NULL,
 `name` varchar(50) NOT NULL,
 `cid` REFERENCES `customer(id)` ON DELETE SET NULL
 PRIMARY KEY (`id`)
);
