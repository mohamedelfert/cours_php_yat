# MySQL-Front 5.1  (Build 4.13)

/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE */;
/*!40101 SET SQL_MODE='' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES */;
/*!40103 SET SQL_NOTES='ON' */;


# Host: localhost    Database: hospital30_9
# ------------------------------------------------------
# Server version 5.5.16

#
# Source for table doctors
#

DROP TABLE IF EXISTS `doctors`;
CREATE TABLE `doctors` (
  `Did` bigint(11) NOT NULL AUTO_INCREMENT,
  `DFName` varchar(15) CHARACTER SET latin1 DEFAULT NULL,
  `DLName` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `Daddress` varchar(100) CHARACTER SET latin1 DEFAULT NULL,
  `DPhone` varchar(10) CHARACTER SET latin1 DEFAULT NULL,
  `Dmobile` varchar(11) CHARACTER SET latin1 DEFAULT NULL,
  `email` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `password` varchar(20) CHARACTER SET latin1 DEFAULT NULL,
  `gender` bit(1) DEFAULT NULL,
  `Sid` bigint(20) DEFAULT NULL,
  `Dactivation` bit(1) DEFAULT NULL,
  `Photo` varchar(20) CHARACTER SET latin1 DEFAULT NULL,
  `DateOfBirth` date DEFAULT NULL,
  `Mid` bigint(20) DEFAULT NULL,
  `Salary` float(6,2) DEFAULT NULL,
  `Approval` bit(1) DEFAULT b'0',
  `IsAdmin` bit(1) DEFAULT NULL,
  `NationalID` char(14) CHARACTER SET latin1 DEFAULT NULL,
  PRIMARY KEY (`Did`),
  KEY `Sid` (`Sid`),
  KEY `Mid` (`Mid`)
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=utf8;

#
# Dumping data for table doctors
#

INSERT INTO `doctors` VALUES (1,'Ali','mohamed','3 elbaher st            ',NULL,'01255555555','A@Yahoo.com','Aa1234',b'0',1,b'1','e.jpg','1990-01-01',NULL,2000,b'1',b'1',NULL);
INSERT INTO `doctors` VALUES (2,'eman','mohamed','6 elbaher st            ',NULL,'01258963147','E@Yahoo.com','1234',b'1',1,b'1','s.jpg','1970-02-02',1,2420,b'1',b'1',NULL);
INSERT INTO `doctors` VALUES (3,'emad','mohamed','6 elbaher st','040252222',NULL,'Em@Yahoo.com','1234',b'0',3,b'1','e.jpg','1981-11-02',1,1996.5,b'1',b'0',NULL);
INSERT INTO `doctors` VALUES (4,'emam','Ahmed','5 saed st','0406666665','01258963147','Emad@Yahoo.com','1234',b'0',3,b'1','s.jpg','1980-05-21',1,2063.05,b'1',b'1',NULL);
INSERT INTO `doctors` VALUES (5,'samar','Ahmed','6 elgalaa st','0401212121','01212121212','samar@Yahoo.com','1234',b'1',NULL,b'1','e.jpg','1990-05-21',2,1875.74,b'1',b'0',NULL);
INSERT INTO `doctors` VALUES (6,'alaa','mohamed','6 elgalaa st','0401212121','01212121212','samar@Yahoo.com','1234',b'0',6,NULL,'s.jpg','1990-05-21',NULL,1500,b'1',NULL,NULL);
INSERT INTO `doctors` VALUES (7,'sara','ahmed',' tanta   ','0405555555','01255555555','S@yahoo.com','1234',b'1',4,b'0','images.jpg','1963-01-01',4,2000,b'0',b'1',NULL);
INSERT INTO `doctors` VALUES (8,'hala','mohamed','          \r\n                   \r\n             tanta \r\n           \r\n          ','0406666666','0126666666','h@yahoo.com','1234',b'1',6,b'1',NULL,'1963-02-15',1,6050.6,b'1',b'1','27902161600081');
INSERT INTO `doctors` VALUES (9,'sara','ahmed',' tanta','0405555555','01255555555','m@yahoo.com','1234',b'1',3,b'0','s.jpg','1968-08-18',2,1000,b'1',NULL,NULL);
INSERT INTO `doctors` VALUES (10,'samar','aaa','55 st','0408529631',NULL,'Sa@yahoo.com','1234',b'1',4,b'1','203766_images.jpg','1966-04-16',NULL,2420,b'1',b'0',NULL);
INSERT INTO `doctors` VALUES (11,'mohamed','Osama','kafer Elzyat','0403333333','01033333333','mo@yahoo.com','1234',b'0',3,b'1','s.jpg','1980-08-18',2,2662.8,b'1',b'0',NULL);
INSERT INTO `doctors` VALUES (12,'gamal','mohamed','tanta','0405555555','01255555555','Ga@yahoo.com','1234',b'1',3,b'1','619355d.jpg','1980-10-10',5,1397.55,b'0',b'0',NULL);
INSERT INTO `doctors` VALUES (13,'ddd','ddd','ddd','0404444444','01044444444','dd@yahoo.com','1234',b'1',3,b'1','629792s.jpg','1955-08-15',5,0,b'1',b'0',NULL);
INSERT INTO `doctors` VALUES (14,'Ahmed','mohsen','3 st','0401111111','01285274198','a@yahoo.com','1234',b'0',1,b'1','203766_images.jpg','1980-10-10',NULL,1270.5,b'1',b'1',NULL);
INSERT INTO `doctors` VALUES (19,'a','b','xbhdfxhbdf','0408529631','01285296374','nmvmn@yahoo.com','1234',b'1',4,b'1','998444d.jpg','2005-11-15',13,2420,b'1',b'0',NULL);
INSERT INTO `doctors` VALUES (20,'hvfgn','nvggfv','cnfhg','0147852369','01234567894','fgjhnfgj@h.com','1234',b'0',4,b'1','203766_images.jpg','2005-11-18',1,1210,b'0',b'0',NULL);
INSERT INTO `doctors` VALUES (21,'Alaa','Mohamed','tanta','0401111111','01011111111','Alaa@yahoo.com','',b'0',4,b'0','353303q.gif','1990-02-20',10,1000,b'0',b'0',NULL);
INSERT INTO `doctors` VALUES (22,'AAAAA','BBBB','CCCC','0401111111','01011111111','AAA@yaho..com','1234',b'0',NULL,b'0','255768l.jpg','1990-02-13',4,1000,b'0',b'0',NULL);
INSERT INTO `doctors` VALUES (23,'Rowida','Mohamed','3 st','048','012','row@yahoo.com','1234',b'1',4,b'0',NULL,'1990-03-15',NULL,NULL,b'0',b'0','28527896541236');
INSERT INTO `doctors` VALUES (24,'Soha','ahmed','2 st','040','0122222222','So@yahoo.com','1234',b'1',4,b'0','203766_images.jpg','1999-03-22',NULL,NULL,b'0',b'0','22222222222222');
INSERT INTO `doctors` VALUES (25,'Ali','mohamed','3 el baher st','040000000',NULL,'Ali@yahoo.com','1234',b'0',3,b'1',NULL,'1980-05-02',NULL,1996.5,b'0',b'0','25896314789654');
INSERT INTO `doctors` VALUES (28,'Moaz','Ali','5 st',NULL,'01222222222',NULL,NULL,b'0',6,b'1','203766_images.jpg','1982-12-20',NULL,2420,b'1',b'0','25896314555236');
INSERT INTO `doctors` VALUES (29,'kholoud','Ahmed','2 st Alx','038529631',NULL,NULL,NULL,b'1',9,b'1',NULL,'1990-01-01',1,1100,b'0',b'0','25896321456987');
INSERT INTO `doctors` VALUES (31,'asmaa','mohamed','','0408888888','01288888888','aa@hotmail.com','1234',b'1',6,b'0','203766_images.jpg','1984-08-11',10,9999.99,b'0',b'0','28529632145888');
INSERT INTO `doctors` VALUES (32,'Ali','mohamed','','0408888888','01288888888','ali@yahoo.com','1234',b'0',6,NULL,NULL,'1982-08-16',NULL,NULL,b'0',NULL,'28529632145699');
INSERT INTO `doctors` VALUES (33,'khokha','mohamed','dghfthfyjy','0408888866','01288888866','khoo@yahoo.com','1234',b'1',6,NULL,'786500_Koala.jpg','1969-09-19',NULL,NULL,b'0',NULL,'28529632145866');
INSERT INTO `doctors` VALUES (34,'mostafa','tayil','55 st','040888888','01288888888',NULL,NULL,b'0',3,b'1',NULL,'1990-01-01',NULL,3000,b'0',b'1','25896314789654');
INSERT INTO `doctors` VALUES (35,'Ali','mohmed','5 st','0408559631',NULL,NULL,NULL,b'0',4,b'1',NULL,'1995-01-01',NULL,3000,b'0',b'1','25896300009654');
INSERT INTO `doctors` VALUES (36,'asmaa','Rady','bmbhm','','01288888888','asmaa@hotmail.com',NULL,b'1',6,b'0','NULL','1982-10-15',NULL,NULL,b'0',NULL,'25836974125890');
INSERT INTO `doctors` VALUES (37,'asmaa','Ali','gbdfgbf','','01288888881','K@yahoo.com',NULL,b'1',6,b'0','NULL','1953-09-16',NULL,NULL,b'0',NULL,'25836974125891');

#
# Source for table patient
#

DROP TABLE IF EXISTS `patient`;
CREATE TABLE `patient` (
  `Pid` bigint(11) NOT NULL AUTO_INCREMENT,
  `Pname` varchar(50) DEFAULT NULL,
  `Paddress` varchar(100) DEFAULT NULL,
  `Phone` varchar(10) DEFAULT NULL,
  `Mobile` varchar(11) DEFAULT NULL,
  `DateOfBirth` date DEFAULT NULL,
  `gender` bit(1) DEFAULT NULL,
  PRIMARY KEY (`Pid`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

#
# Dumping data for table patient
#

INSERT INTO `patient` VALUES (1,'sara','dffghf','040589632','012897856','1975-05-05',b'1');
INSERT INTO `patient` VALUES (2,'mona','dffghf','0408527412','01285296374','1995-05-05',b'1');

#
# Source for table reservation
#

DROP TABLE IF EXISTS `reservation`;
CREATE TABLE `reservation` (
  `Rid` bigint(11) NOT NULL AUTO_INCREMENT,
  `Rdate` date DEFAULT NULL,
  `Value` float(5,2) DEFAULT NULL,
  `Pid` bigint(20) DEFAULT NULL,
  `Did` bigint(20) DEFAULT NULL,
  `History` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `Done` bit(1) DEFAULT NULL,
  PRIMARY KEY (`Rid`),
  KEY `Did` (`Did`),
  KEY `Pid` (`Pid`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

#
# Dumping data for table reservation
#

INSERT INTO `reservation` VALUES (1,'2017-01-26',200,1,2,'jkhkkh;kki',b'1');
INSERT INTO `reservation` VALUES (4,'2018-02-01',100,2,1,'lkkllkl',b'0');
INSERT INTO `reservation` VALUES (5,'2018-01-01',50,1,NULL,'jkhkijh',b'0');
INSERT INTO `reservation` VALUES (6,'2018-01-01',50,NULL,1,'jlilok',b'1');

#
# Source for table special
#

DROP TABLE IF EXISTS `special`;
CREATE TABLE `special` (
  `Sid` bigint(11) NOT NULL AUTO_INCREMENT,
  `Sname` varchar(50) DEFAULT NULL,
  `Sactivation` bit(1) DEFAULT NULL,
  PRIMARY KEY (`Sid`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

#
# Dumping data for table special
#

INSERT INTO `special` VALUES (1,'Boon',b'0');
INSERT INTO `special` VALUES (3,'Hart',b'0');
INSERT INTO `special` VALUES (4,'Eye',b'1');
INSERT INTO `special` VALUES (6,'dentist',b'1');
INSERT INTO `special` VALUES (7,'k',b'0');
INSERT INTO `special` VALUES (8,'dentist',b'0');
INSERT INTO `special` VALUES (9,'Batna',b'1');
INSERT INTO `special` VALUES (10,'BATNA',b'0');
INSERT INTO `special` VALUES (11,'bn,mbn',b'0');
INSERT INTO `special` VALUES (12,'kides',b'1');
INSERT INTO `special` VALUES (13,'Eye',b'1');

#
# Source for view acount
#

DROP VIEW IF EXISTS `acount`;
CREATE ALGORITHM=UNDEFINED SQL SECURITY DEFINER VIEW `acount` AS select `doctors`.`Did` AS `did`,concat(`doctors`.`DFName`,' ',`doctors`.`DLName`) AS `fullName`,`doctors`.`Salary` AS `salary`,(`doctors`.`Salary` * 0.10) AS `rais`,(`doctors`.`Salary` * 1.10) AS `totalSalary`,((`doctors`.`Salary` * 1.10) * 0.02) AS `tax`,((`doctors`.`Salary` * 1.10) - ((`doctors`.`Salary` * 1.10) * 0.02)) AS `netSalary`,`doctors`.`Dactivation` AS `Dactivation` from `doctors`;

#
# Source for view doctor_special_view
#

DROP VIEW IF EXISTS `doctor_special_view`;
CREATE ALGORITHM=UNDEFINED SQL SECURITY DEFINER VIEW `doctor_special_view` AS select `doctors`.`Did` AS `Did`,`doctors`.`DFName` AS `DFName`,`doctors`.`DLName` AS `DLName`,`doctors`.`Daddress` AS `Daddress`,`doctors`.`DPhone` AS `DPhone`,`doctors`.`Dmobile` AS `Dmobile`,`doctors`.`email` AS `email`,`doctors`.`password` AS `password`,`doctors`.`gender` AS `gender`,`doctors`.`Sid` AS `Sid`,`doctors`.`Dactivation` AS `Dactivation`,`doctors`.`Photo` AS `Photo`,`doctors`.`DateOfBirth` AS `DateOfBirth`,`doctors`.`Mid` AS `Mid`,`doctors`.`Salary` AS `Salary`,`doctors`.`Approval` AS `Approval`,`doctors`.`IsAdmin` AS `IsAdmin`,`doctors`.`NationalID` AS `NationalID`,`special`.`Sname` AS `sname` from (`special` join `doctors`) where (`special`.`Sid` = `doctors`.`Sid`);

#
# Source for view doctorapproval
#

DROP VIEW IF EXISTS `doctorapproval`;
CREATE ALGORITHM=UNDEFINED SQL SECURITY DEFINER VIEW `doctorapproval` AS select `doctors`.`Did` AS `Did`,concat(`doctors`.`DFName`,' ',`doctors`.`DLName`) AS `fullName`,`doctors`.`Approval` AS `Approval` from `doctors`;

#
# Source for view doctorfullname2
#

DROP VIEW IF EXISTS `doctorfullname2`;
CREATE ALGORITHM=UNDEFINED SQL SECURITY DEFINER VIEW `doctorfullname2` AS select `doctors`.`Did` AS `did`,concat(`doctors`.`DFName`,' ',`doctors`.`DLName`) AS `doctorname`,`doctors`.`Dactivation` AS `dactivation` from `doctors`;

#
# Source for view doctorsfullnames_vi
#

DROP VIEW IF EXISTS `doctorsfullnames_vi`;
CREATE ALGORITHM=UNDEFINED SQL SECURITY DEFINER VIEW `doctorsfullnames_vi` AS select `doctors`.`Did` AS `did`,concat(`doctors`.`DFName`,' ',`doctors`.`DLName`) AS `DoctorName`,`doctors`.`Dactivation` AS `Dactivation` from `doctors`;

#
# Source for view doctorsfullnamesview
#

DROP VIEW IF EXISTS `doctorsfullnamesview`;
CREATE ALGORITHM=UNDEFINED SQL SECURITY DEFINER VIEW `doctorsfullnamesview` AS select `doctors`.`Did` AS `Did`,concat(`doctors`.`DFName`,' ',`doctors`.`DLName`) AS `doctorName`,`doctors`.`Dactivation` AS `Dactivation`,`doctors`.`Approval` AS `Approval` from `doctors`;

#
# Source for view doctorsmaager_view
#

DROP VIEW IF EXISTS `doctorsmaager_view`;
CREATE ALGORITHM=UNDEFINED SQL SECURITY DEFINER VIEW `doctorsmaager_view` AS select concat(`doctors`.`DFName`,' ',`doctors`.`DLName`) AS `DoctorName`,concat(`manager`.`DFName`,' ',`manager`.`DLName`) AS `managerName` from (`doctors` join `doctors` `manager`) where ((`doctors`.`Mid` = `manager`.`Did`) and (`doctors`.`Dactivation` = 1));

#
# Source for view login_view
#

DROP VIEW IF EXISTS `login_view`;
CREATE ALGORITHM=UNDEFINED SQL SECURITY DEFINER VIEW `login_view` AS select `doctors`.`Did` AS `Did`,concat(`doctors`.`DFName`,' ',`doctors`.`DLName`) AS `fullName`,`doctors`.`email` AS `email`,`doctors`.`password` AS `password`,`doctors`.`Dactivation` AS `Dactivation`,`doctors`.`IsAdmin` AS `IsAdmin` from `doctors`;

#
# Source for view reservedetail_vi
#

DROP VIEW IF EXISTS `reservedetail_vi`;
CREATE ALGORITHM=UNDEFINED SQL SECURITY DEFINER VIEW `reservedetail_vi` AS select concat(`doctors`.`DFName`,' ',`doctors`.`DLName`) AS `DoctorName`,`patient`.`Pname` AS `pname`,`reservation`.`Value` AS `value`,`reservation`.`Done` AS `Done` from ((`doctors` join `patient`) join `reservation`) where ((`doctors`.`Did` = `reservation`.`Did`) and (`patient`.`Pid` = `reservation`.`Pid`));

#
#  Foreign keys for table doctors
#

ALTER TABLE `doctors`
ADD CONSTRAINT `doctors_ibfk_1` FOREIGN KEY (`Sid`) REFERENCES `special` (`Sid`),
ADD CONSTRAINT `doctors_ibfk_2` FOREIGN KEY (`Mid`) REFERENCES `doctors` (`Did`),
ADD CONSTRAINT `doctors_ibfk_3` FOREIGN KEY (`Sid`) REFERENCES `special` (`Sid`);

#
#  Foreign keys for table reservation
#

ALTER TABLE `reservation`
ADD CONSTRAINT `reservation_ibfk_1` FOREIGN KEY (`Did`) REFERENCES `doctors` (`Did`),
ADD CONSTRAINT `reservation_ibfk_2` FOREIGN KEY (`Pid`) REFERENCES `patient` (`Pid`),
ADD CONSTRAINT `reservation_ibfk_3` FOREIGN KEY (`Did`) REFERENCES `doctors` (`Did`),
ADD CONSTRAINT `reservation_ibfk_4` FOREIGN KEY (`Pid`) REFERENCES `patient` (`Pid`);


/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
