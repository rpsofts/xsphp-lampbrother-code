/*
SQLyog Ultimate v10.00 Beta1
MySQL - 5.6.14-log : Database - xscms
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`xscms` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `xscms`;

/*Table structure for table `cms_album` */

DROP TABLE IF EXISTS `cms_album`;

CREATE TABLE `cms_album` (
  `catId` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `catPid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `catPath` varchar(100) NOT NULL DEFAULT '',
  `catTitle` varchar(100) NOT NULL DEFAULT '',
  `description` varchar(200) NOT NULL DEFAULT '',
  PRIMARY KEY (`catId`),
  KEY `catPid` (`catPid`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

/*Data for the table `cms_album` */

insert  into `cms_album`(`catId`,`catPid`,`catPath`,`catTitle`,`description`) values (1,0,'0','相册集','相册根目录');

/*Table structure for table `cms_article` */

DROP TABLE IF EXISTS `cms_article`;

CREATE TABLE `cms_article` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL DEFAULT '',
  `summary` varchar(200) NOT NULL DEFAULT '',
  `postTime` int(10) unsigned NOT NULL DEFAULT '0',
  `author` varchar(30) NOT NULL DEFAULT '',
  `comeFrom` varchar(50) NOT NULL DEFAULT '',
  `content` text NOT NULL,
  `keyword` varchar(20) NOT NULL DEFAULT '',
  `catId` smallint(5) unsigned NOT NULL DEFAULT '0',
  `audit` smallint(1) unsigned NOT NULL DEFAULT '0',
  `recommend` smallint(1) unsigned NOT NULL DEFAULT '0',
  `views` smallint(5) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `catId` (`catId`),
  KEY `keyword` (`keyword`),
  KEY `recommend` (`recommend`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `cms_article` */

/*Table structure for table `cms_columns` */

DROP TABLE IF EXISTS `cms_columns`;

CREATE TABLE `cms_columns` (
  `colId` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `colPid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `picId` smallint(5) unsigned NOT NULL DEFAULT '0',
  `colPath` varchar(100) NOT NULL DEFAULT '',
  `colTitle` varchar(100) NOT NULL DEFAULT '',
  `description` varchar(200) NOT NULL DEFAULT '',
  `ord` smallint(3) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`colId`),
  KEY `colPath` (`colPath`,`picId`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

/*Data for the table `cms_columns` */

insert  into `cms_columns`(`colId`,`colPid`,`picId`,`colPath`,`colTitle`,`description`,`ord`) values (1,0,0,'0','首页','分类根目录',0);

/*Table structure for table `cms_comments` */

DROP TABLE IF EXISTS `cms_comments`;

CREATE TABLE `cms_comments` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `uid` int(11) unsigned NOT NULL DEFAULT '0',
  `aid` int(11) unsigned NOT NULL DEFAULT '0',
  `postTime` int(10) unsigned NOT NULL DEFAULT '0',
  `content` text NOT NULL,
  `cmt` smallint(5) NOT NULL DEFAULT '0',
  `support` smallint(1) unsigned NOT NULL DEFAULT '0',
  `oppose` smallint(1) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `postTime` (`postTime`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `cms_comments` */

/*Table structure for table `cms_flink` */

DROP TABLE IF EXISTS `cms_flink`;

CREATE TABLE `cms_flink` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `webName` varchar(30) NOT NULL DEFAULT '',
  `url` varchar(60) NOT NULL DEFAULT '',
  `logo` varchar(60) NOT NULL DEFAULT '',
  `email` varchar(50) NOT NULL DEFAULT '',
  `dtime` int(10) unsigned NOT NULL DEFAULT '0',
  `msg` varchar(200) NOT NULL DEFAULT '',
  `list` smallint(1) unsigned NOT NULL DEFAULT '0',
  `ord` smallint(3) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `webName` (`webName`,`url`,`logo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `cms_flink` */

/*Table structure for table `cms_picture` */

DROP TABLE IF EXISTS `cms_picture`;

CREATE TABLE `cms_picture` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `picTitle` varchar(30) NOT NULL DEFAULT '',
  `description` varchar(200) NOT NULL DEFAULT '',
  `picName` varchar(50) NOT NULL DEFAULT '',
  `catId` smallint(4) unsigned NOT NULL,
  `hasThumb` smallint(1) NOT NULL DEFAULT '0',
  `hasMark` smallint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `catId` (`catId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `cms_picture` */

/*Table structure for table `cms_user` */

DROP TABLE IF EXISTS `cms_user`;

CREATE TABLE `cms_user` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `userName` varchar(20) NOT NULL DEFAULT '',
  `userPwd` varchar(40) NOT NULL DEFAULT '',
  `email` varchar(60) NOT NULL DEFAULT '',
  `safequestion` smallint(3) NOT NULL DEFAULT '0',
  `safeanswer` varchar(60) NOT NULL DEFAULT '',
  `regTime` int(10) unsigned NOT NULL DEFAULT '0',
  `sex` char(2) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  KEY `id` (`userName`,`userPwd`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

/*Data for the table `cms_user` */

insert  into `cms_user`(`id`,`userName`,`userPwd`,`email`,`safequestion`,`safeanswer`,`regTime`,`sex`) values (1,'admin','3f44afd6d32e9ee196e60372d971123f','joneyee22@qq.com',0,'',0,'');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
