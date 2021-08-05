# ************************************************************
# Sequel Pro SQL dump
# Version 5446
#
# https://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.7.34)
# Database: pokemon-cards
# Generation Time: 2021-08-03 12:15:21 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
SET NAMES utf8mb4;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table pokemon-card
# ------------------------------------------------------------

DROP TABLE IF EXISTS `pokemon-card`;

CREATE TABLE `pokemon-card` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `cost` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT '',
  `rarity` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `pokemon-card` WRITE;
/*!40000 ALTER TABLE `pokemon-card` DISABLE KEYS */;

INSERT INTO `pokemon-card` (`id`, `name`, `cost`, `image`, `rarity`)
VALUES
	(1,'Charizard','$300','https://product-images.tcgplayer.com/fit-in/400x558/42382.jpg','Holo Rare'),
	(2,'Zapdos','$25','https://product-images.tcgplayer.com/fit-in/400x558/42356.jpg','Holo Rare'),
	(3,'Ivysaur','$5','https://product-images.tcgplayer.com/fit-in/400x558/42372.jpg','Uncommon'),
	(4,'Pidgeotto','$6','https://product-images.tcgplayer.com/fit-in/400x558/42363.jpg','Rare');

/*!40000 ALTER TABLE `pokemon-card` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
