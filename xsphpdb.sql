/*
SQLyog Ultimate v10.00 Beta1
MySQL - 5.6.14-log : Database - xsphpdb
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`xsphpdb` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `xsphpdb`;

/*Table structure for table `article` */

DROP TABLE IF EXISTS `article`;

CREATE TABLE `article` (
  `id` int(11) DEFAULT NULL,
  `name` char(30) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `sex` char(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `article` */

/*Table structure for table `salary` */

DROP TABLE IF EXISTS `salary`;

CREATE TABLE `salary` (
  `id` int(11) DEFAULT NULL,
  `salary` decimal(9,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `salary` */

insert  into `salary`(`id`,`salary`) values (1,'1000.00'),(2,'2000.00'),(3,'3000.00'),(4,'4000.00'),(5,'5000.00'),(6,NULL);

/*Table structure for table `shops` */

DROP TABLE IF EXISTS `shops`;

CREATE TABLE `shops` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL DEFAULT '',
  `price` double NOT NULL DEFAULT '0',
  `num` int(11) NOT NULL DEFAULT '0',
  `desn` text,
  PRIMARY KEY (`id`),
  KEY `name` (`name`,`price`)
) ENGINE=InnoDB AUTO_INCREMENT=99 DEFAULT CHARSET=utf8;

/*Data for the table `shops` */

insert  into `shops`(`id`,`name`,`price`,`num`,`desn`) values (1,'book',10,1233,'very kkk'),(2,'book',10,1233,'very 111'),(3,'dog',10,1233,'very 111'),(4,'child',10,1233,'very 111'),(5,'holiday',10,1233,'very 111'),(6,'book',10,1233,'very kkk'),(7,'book',10,1233,'very 111'),(8,'dog',10,1233,'very 111'),(9,'child',10,1233,'very 111'),(10,'holiday',10,1233,'very 111'),(13,'book',10,1233,'very kkk'),(14,'book',10,1233,'very 111'),(15,'dog',10,1233,'very 111'),(16,'child',10,1233,'very 111'),(17,'holiday',10,1233,'very 111'),(18,'book',10,1233,'very kkk'),(19,'book',10,1233,'very 111'),(20,'dog',10,1233,'very 111'),(21,'child',10,1233,'very 111'),(22,'holiday',10,1233,'very 111'),(28,'book',10,1233,'very kkk'),(29,'book',10,1233,'very 111'),(30,'dog',10,1233,'very 111'),(31,'child',10,1233,'very 111'),(32,'holiday',10,1233,'very 111'),(33,'book',10,1233,'very kkk'),(34,'book',10,1233,'very 111'),(35,'dog',10,1233,'very 111'),(36,'child',10,1233,'very 111'),(37,'holiday',10,1233,'very 111'),(38,'book',10,1233,'very kkk'),(39,'book',10,1233,'very 111'),(40,'dog',10,1233,'very 111'),(41,'child',10,1233,'very 111'),(42,'holiday',10,1233,'very 111'),(43,'book',10,1233,'very kkk'),(44,'book',10,1233,'very 111'),(45,'dog',10,1233,'very 111'),(46,'child',10,1233,'very 111'),(47,'holiday',10,1233,'very 111'),(59,'book',10,1233,'very kkk'),(60,'book',10,1233,'very 111'),(61,'dog',10,1233,'very 111'),(62,'child',10,1233,'very 111'),(63,'holiday',10,1233,'very 111'),(64,'book',10,1233,'very kkk'),(65,'book',10,1233,'very 111'),(66,'dog',10,1233,'very 111'),(67,'child',10,1233,'very 111'),(68,'holiday',10,1233,'very 111'),(69,'book',10,1233,'very kkk'),(70,'book',10,1233,'very 111'),(71,'dog',10,1233,'very 111'),(72,'child',10,1233,'very 111'),(73,'holiday',10,1233,'very 111'),(74,'book',10,1233,'very kkk'),(75,'book',10,1233,'very 111'),(76,'dog',10,1233,'very 111'),(77,'child',10,1233,'very 111'),(78,'holiday',10,1233,'very 111'),(79,'book',10,1233,'very kkk'),(80,'book',10,1233,'very 111'),(81,'dog',10,1233,'very 111'),(82,'child',10,1233,'very 111'),(83,'holiday',10,1233,'very 111'),(84,'book',10,1233,'very kkk'),(85,'book',10,1233,'very 111'),(86,'dog',10,1233,'very 111'),(87,'child',10,1233,'very 111'),(88,'holiday',10,1233,'very 111'),(89,'book',10,1233,'very kkk'),(90,'book',10,1233,'very 111'),(91,'dog',10,1233,'very 111'),(92,'child',10,1233,'very 111'),(93,'holiday',10,1233,'very 111'),(94,'book',10,1233,'very kkk'),(95,'book',10,1233,'very 111'),(96,'dog',10,1233,'very 111'),(97,'child',10,1233,'very 111'),(98,'holiday',10,1233,'very 111');

/*Table structure for table `t1` */

DROP TABLE IF EXISTS `t1`;

CREATE TABLE `t1` (
  `id` int(10) unsigned DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `t1` */

insert  into `t1`(`id`) values (100);

/*Table structure for table `t2` */

DROP TABLE IF EXISTS `t2`;

CREATE TABLE `t2` (
  `num` int(5) unsigned zerofill DEFAULT NULL,
  `price` float(7,2) unsigned zerofill DEFAULT NULL,
  `name` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `t2` */

insert  into `t2`(`num`,`price`,`name`) values (88888888,12367.12,'adsdd');

/*Table structure for table `t3` */

DROP TABLE IF EXISTS `t3`;

CREATE TABLE `t3` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` char(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

/*Data for the table `t3` */

insert  into `t3`(`id`,`name`) values (1,'我是谁是是'),(2,'我是谁是是s'),(3,'我是谁是是sssss');

/*Table structure for table `tab1` */

DROP TABLE IF EXISTS `tab1`;

CREATE TABLE `tab1` (
  `id` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `tab1` */

insert  into `tab1`(`id`) values (100);

/*Table structure for table `tab10` */

DROP TABLE IF EXISTS `tab10`;

CREATE TABLE `tab10` (
  `one` date DEFAULT NULL,
  `two` time DEFAULT NULL,
  `three` datetime DEFAULT NULL,
  `four` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `five` year(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `tab10` */

insert  into `tab10`(`one`,`two`,`three`,`four`,`five`) values ('2010-12-03',NULL,NULL,'2013-11-13 17:48:36',NULL),('2010-12-03',NULL,NULL,'2013-11-13 17:49:55',NULL),('2012-10-02','12:12:22',NULL,'2013-11-13 17:50:54',NULL),('2012-10-02','12:12:22','2011-12-12 11:11:11','2013-11-13 17:52:47',NULL),('2012-10-02','12:12:22',NULL,'2013-11-13 17:55:20',NULL);

/*Table structure for table `tab2` */

DROP TABLE IF EXISTS `tab2`;

CREATE TABLE `tab2` (
  `id` tinyint(3) unsigned DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `tab2` */

insert  into `tab2`(`id`) values (90);

/*Table structure for table `tab3` */

DROP TABLE IF EXISTS `tab3`;

CREATE TABLE `tab3` (
  `price` float(5,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `tab3` */

insert  into `tab3`(`price`) values (123.15);

/*Table structure for table `tab4` */

DROP TABLE IF EXISTS `tab4`;

CREATE TABLE `tab4` (
  `one` double(8,1) DEFAULT NULL,
  `two` decimal(8,1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `tab4` */

insert  into `tab4`(`one`,`two`) values (12.3,'12.3'),(12.4,'12.4');

/*Table structure for table `tab7` */

DROP TABLE IF EXISTS `tab7`;

CREATE TABLE `tab7` (
  `v` varchar(4) DEFAULT NULL,
  `c` char(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `tab7` */

insert  into `tab7`(`v`,`c`) values ('ab ','ab');

/*Table structure for table `tab9` */

DROP TABLE IF EXISTS `tab9`;

CREATE TABLE `tab9` (
  `one` enum('a','b','c','d') DEFAULT NULL,
  `two` set('a','b','c','d') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `tab9` */

insert  into `tab9`(`one`,`two`) values ('a','a'),('a','a,b');

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL DEFAULT '',
  `age` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

/*Data for the table `users` */

insert  into `users`(`id`,`name`,`age`) values (1,'aaa',10),(3,'aaa2',10);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
