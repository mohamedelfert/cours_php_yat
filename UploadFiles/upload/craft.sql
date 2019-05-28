# MySQL-Front 5.1  (Build 4.13)

/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE */;
/*!40101 SET SQL_MODE='' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES */;
/*!40103 SET SQL_NOTES='ON' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS */;
/*!40014 SET FOREIGN_KEY_CHECKS=0 */;


# Host: localhost    Database: crafmens
# ------------------------------------------------------
# Server version 5.5.16

#
# Source for table city_tbl
#

DROP TABLE IF EXISTS `city_tbl`;
CREATE TABLE `city_tbl` (
  `city_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL DEFAULT '',
  `adress` varchar(255) DEFAULT '',
  PRIMARY KEY (`city_id`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8;

#
# Dumping data for table city_tbl
#

LOCK TABLES `city_tbl` WRITE;
/*!40000 ALTER TABLE `city_tbl` DISABLE KEYS */;
INSERT INTO `city_tbl` VALUES (1,'alexandria','');
INSERT INTO `city_tbl` VALUES (2,'ismailia','');
INSERT INTO `city_tbl` VALUES (3,'aswan','');
INSERT INTO `city_tbl` VALUES (4,'اسيوط','');
INSERT INTO `city_tbl` VALUES (5,'al aqser','');
INSERT INTO `city_tbl` VALUES (6,'البحر الاحمر','');
INSERT INTO `city_tbl` VALUES (7,'بحيره','');
INSERT INTO `city_tbl` VALUES (8,'بنى سويف','');
INSERT INTO `city_tbl` VALUES (9,'بورسعيد ','');
INSERT INTO `city_tbl` VALUES (10,'جنوب سيناء','');
INSERT INTO `city_tbl` VALUES (11,'الجيزه','');
INSERT INTO `city_tbl` VALUES (12,'الدقهليه','');
INSERT INTO `city_tbl` VALUES (13,'دمياط','');
INSERT INTO `city_tbl` VALUES (14,'سوهاج','');
INSERT INTO `city_tbl` VALUES (15,'السويس','');
INSERT INTO `city_tbl` VALUES (16,'الشرقيه','');
INSERT INTO `city_tbl` VALUES (17,'شمال سيناء ','');
INSERT INTO `city_tbl` VALUES (18,'الغربيه','');
INSERT INTO `city_tbl` VALUES (19,'الفيوم ','');
INSERT INTO `city_tbl` VALUES (20,'القاهره','');
INSERT INTO `city_tbl` VALUES (21,'القليوبيه','');
INSERT INTO `city_tbl` VALUES (22,'قنا','');
INSERT INTO `city_tbl` VALUES (23,'كفر الشيخ','');
INSERT INTO `city_tbl` VALUES (24,'مطروح','');
INSERT INTO `city_tbl` VALUES (25,'منوفيه','');
INSERT INTO `city_tbl` VALUES (26,'منيا','');
INSERT INTO `city_tbl` VALUES (27,'الوادي الجديد','');
INSERT INTO `city_tbl` VALUES (28,'sharkia','');
INSERT INTO `city_tbl` VALUES (29,'ابت','');
INSERT INTO `city_tbl` VALUES (30,'alexa','');
INSERT INTO `city_tbl` VALUES (31,'طنطا','');
/*!40000 ALTER TABLE `city_tbl` ENABLE KEYS */;
UNLOCK TABLES;

#
# Source for table client_tbl
#

DROP TABLE IF EXISTS `client_tbl`;
CREATE TABLE `client_tbl` (
  `client_id` int(11) NOT NULL AUTO_INCREMENT,
  `city_id` int(11) NOT NULL DEFAULT '0',
  `name` varchar(150) NOT NULL DEFAULT '',
  `phone` varchar(11) NOT NULL DEFAULT '',
  `adress` varchar(255) NOT NULL DEFAULT '',
  `nid` int(14) NOT NULL DEFAULT '0',
  `problem` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`client_id`),
  KEY `city_id` (`city_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

#
# Dumping data for table client_tbl
#

LOCK TABLES `client_tbl` WRITE;
/*!40000 ALTER TABLE `client_tbl` DISABLE KEYS */;
/*!40000 ALTER TABLE `client_tbl` ENABLE KEYS */;
UNLOCK TABLES;

#
# Source for table craftmen_tbl
#

DROP TABLE IF EXISTS `craftmen_tbl`;
CREATE TABLE `craftmen_tbl` (
  `craft_id` int(11) NOT NULL AUTO_INCREMENT,
  `city_id` int(11) NOT NULL DEFAULT '0',
  `special_id` int(11) NOT NULL DEFAULT '0',
  `name` varchar(150) NOT NULL DEFAULT '',
  `phone` varchar(11) NOT NULL DEFAULT '',
  `adress` varchar(255) NOT NULL DEFAULT '',
  `nid` int(11) NOT NULL DEFAULT '0',
  `active` bit(1) DEFAULT NULL,
  `salary` float(6,2) NOT NULL DEFAULT '0.00',
  `gender` bit(1) DEFAULT NULL,
  `password` varchar(11) NOT NULL DEFAULT '',
  PRIMARY KEY (`craft_id`),
  KEY `special_id` (`special_id`),
  KEY `city_id` (`city_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

#
# Dumping data for table craftmen_tbl
#

LOCK TABLES `craftmen_tbl` WRITE;
/*!40000 ALTER TABLE `craftmen_tbl` DISABLE KEYS */;
/*!40000 ALTER TABLE `craftmen_tbl` ENABLE KEYS */;
UNLOCK TABLES;

#
# Source for table request_tbl
#

DROP TABLE IF EXISTS `request_tbl`;
CREATE TABLE `request_tbl` (
  `request_id` int(11) NOT NULL AUTO_INCREMENT,
  `client_id` int(11) NOT NULL DEFAULT '0',
  `craft_id` int(11) NOT NULL DEFAULT '0',
  `payment` float(6,2) NOT NULL DEFAULT '0.00',
  PRIMARY KEY (`request_id`),
  KEY `client_id` (`client_id`),
  KEY `craft_id` (`craft_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

#
# Dumping data for table request_tbl
#

LOCK TABLES `request_tbl` WRITE;
/*!40000 ALTER TABLE `request_tbl` DISABLE KEYS */;
/*!40000 ALTER TABLE `request_tbl` ENABLE KEYS */;
UNLOCK TABLES;

#
# Source for table special_tbl
#

DROP TABLE IF EXISTS `special_tbl`;
CREATE TABLE `special_tbl` (
  `special_id` int(11) NOT NULL AUTO_INCREMENT,
  `sname` varchar(30) NOT NULL DEFAULT '0',
  `active` bit(1) DEFAULT NULL,
  PRIMARY KEY (`special_id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

#
# Dumping data for table special_tbl
#

LOCK TABLES `special_tbl` WRITE;
/*!40000 ALTER TABLE `special_tbl` DISABLE KEYS */;
INSERT INTO `special_tbl` VALUES (1,'نجار ',b'1');
INSERT INTO `special_tbl` VALUES (2,'سباك ',b'1');
INSERT INTO `special_tbl` VALUES (3,'كهربائي',b'1');
INSERT INTO `special_tbl` VALUES (4,'مبلط ',b'0');
INSERT INTO `special_tbl` VALUES (5,'محار',b'1');
INSERT INTO `special_tbl` VALUES (6,'عامل',b'0');
INSERT INTO `special_tbl` VALUES (7,'سقف',b'1');
INSERT INTO `special_tbl` VALUES (12,'&#1606;&#1576;&#1604;',b'0');
/*!40000 ALTER TABLE `special_tbl` ENABLE KEYS */;
UNLOCK TABLES;

#
#  Foreign keys for table client_tbl
#

ALTER TABLE `client_tbl`
ADD CONSTRAINT `client_tbl_ibfk_1` FOREIGN KEY (`city_id`) REFERENCES `city_tbl` (`city_id`);

#
#  Foreign keys for table craftmen_tbl
#

ALTER TABLE `craftmen_tbl`
ADD CONSTRAINT `craftmen_tbl_ibfk_2` FOREIGN KEY (`special_id`) REFERENCES `special_tbl` (`special_id`),
ADD CONSTRAINT `craftmen_tbl_ibfk_3` FOREIGN KEY (`city_id`) REFERENCES `city_tbl` (`city_id`);

#
#  Foreign keys for table request_tbl
#

ALTER TABLE `request_tbl`
ADD CONSTRAINT `request_tbl_ibfk_1` FOREIGN KEY (`client_id`) REFERENCES `client_tbl` (`client_id`),
ADD CONSTRAINT `request_tbl_ibfk_2` FOREIGN KEY (`craft_id`) REFERENCES `craftmen_tbl` (`craft_id`);


/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
