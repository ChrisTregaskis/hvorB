# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.7.29)
# Database: wbapp
# Generation Time: 2020-04-12 17:32:43 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table users_test_db_template
# ------------------------------------------------------------

DROP TABLE IF EXISTS `users_test_db_template`;

CREATE TABLE `users_test_db_template` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `fname` varchar(50) DEFAULT NULL,
  `sname` varchar(50) DEFAULT NULL,
  `fullName` varchar(100) DEFAULT NULL,
  `knownCompany` varchar(249) DEFAULT NULL,
  `knownEmail` varchar(249) DEFAULT NULL,
  `companyAPIResult` varchar(249) DEFAULT NULL,
  `matchPrevious` tinyint(1) DEFAULT '0',
  `matchCurrent` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `users_test_db_template` WRITE;
/*!40000 ALTER TABLE `users_test_db_template` DISABLE KEYS */;

INSERT INTO `users_test_db_template` (`id`, `fname`, `sname`, `fullName`, `knownCompany`, `knownEmail`, `companyAPIResult`, `matchPrevious`, `matchCurrent`)
VALUES
	(1,'Chris','Tregaskis','Chris Tregaskis','EEF','ctregaskis@eef.org',NULL,0,0),
	(2,'Sherry','Espineli','Sherry Espineli','Morgan Stanley',NULL,NULL,0,0);

/*!40000 ALTER TABLE `users_test_db_template` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
