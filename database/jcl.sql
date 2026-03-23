/*
SQLyog Ultimate
MySQL - 10.4.32-MariaDB : Database - jcl
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`jcl` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;

USE `jcl`;

/*Table structure for table `admin` */

DROP TABLE IF EXISTS `admin`;

CREATE TABLE `admin` (
  `id` int(45) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `fullname` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `admin` */

insert  into `admin`(`id`,`username`,`password`,`fullname`) values 
(1,'admin','1234','Administrator');

/*Table structure for table `branch` */

DROP TABLE IF EXISTS `branch`;

CREATE TABLE `branch` (
  `id` int(45) NOT NULL AUTO_INCREMENT,
  `description` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `branch` */

insert  into `branch`(`id`,`description`) values 
(1,'KIDAPAWAN'),
(3,'DIGOS');

/*Table structure for table `customer_beneficiary` */

DROP TABLE IF EXISTS `customer_beneficiary`;

CREATE TABLE `customer_beneficiary` (
  `id` int(45) NOT NULL AUTO_INCREMENT,
  `fullname` varchar(200) DEFAULT NULL,
  `relationship` varchar(100) DEFAULT NULL,
  `birthdate` date DEFAULT NULL,
  `datearray` date DEFAULT NULL,
  `timearray` time DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `customer_beneficiary` */

/*Table structure for table `customer_details` */

DROP TABLE IF EXISTS `customer_details`;

CREATE TABLE `customer_details` (
  `id` int(45) NOT NULL AUTO_INCREMENT,
  `customerId` varchar(100) DEFAULT NULL,
  `planId` varchar(100) DEFAULT NULL,
  `branchId` varchar(100) DEFAULT NULL,
  `date_registered` date DEFAULT NULL,
  `manager` varchar(10) DEFAULT NULL,
  `agent` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `customer_details` */

/*Table structure for table `customer_profile` */

DROP TABLE IF EXISTS `customer_profile`;

CREATE TABLE `customer_profile` (
  `id` int(45) NOT NULL AUTO_INCREMENT,
  `customerId` varchar(100) DEFAULT NULL,
  `lastname` varchar(100) DEFAULT NULL,
  `firstname` varchar(100) DEFAULT NULL,
  `middlename` varchar(100) DEFAULT NULL,
  `suffix` varchar(10) DEFAULT NULL,
  `birthdate` date DEFAULT NULL,
  `gender` varchar(50) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `status` varchar(100) DEFAULT NULL,
  `datearray` date DEFAULT NULL,
  `timearray` time DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `customer_profile` */

/*Table structure for table `designation` */

DROP TABLE IF EXISTS `designation`;

CREATE TABLE `designation` (
  `id` int(45) NOT NULL AUTO_INCREMENT,
  `description` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `designation` */

insert  into `designation`(`id`,`description`) values 
(1,'Branch Cashier'),
(3,'Branch Manager'),
(4,'Collection Supervisor'),
(5,'Collector');

/*Table structure for table `employee` */

DROP TABLE IF EXISTS `employee`;

CREATE TABLE `employee` (
  `id` int(45) NOT NULL AUTO_INCREMENT,
  `lastname` varchar(100) DEFAULT NULL,
  `firstname` varchar(100) DEFAULT NULL,
  `middlename` varchar(100) DEFAULT NULL,
  `suffix` varchar(50) DEFAULT NULL,
  `designation` varchar(10) DEFAULT NULL,
  `birthdate` date DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `date_employed` date DEFAULT NULL,
  `branch` varchar(100) DEFAULT NULL,
  `status` varchar(100) DEFAULT 'Active',
  `datearray` date DEFAULT NULL,
  `timearray` time DEFAULT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `employee` */

insert  into `employee`(`id`,`lastname`,`firstname`,`middlename`,`suffix`,`designation`,`birthdate`,`gender`,`date_employed`,`branch`,`status`,`datearray`,`timearray`,`username`,`password`) values 
(2,'Aboy','Eczekiel','Hermocilla','','1','1986-05-14','Male','2025-01-01','1','Active','2025-01-13','12:48:56','shakiel17','1234'),
(3,'Aro','Jefferson','Sambilad','','3','1980-04-08','Male','2023-12-12','1','Active','2025-01-13','12:49:55',NULL,NULL),
(4,'Aboy','Jonah EM','Hermosilla','','5','1992-02-24','Male','2024-02-02','1','Active','2025-01-13','12:50:31',NULL,NULL);

/*Table structure for table `plan_type` */

DROP TABLE IF EXISTS `plan_type`;

CREATE TABLE `plan_type` (
  `id` int(45) NOT NULL AUTO_INCREMENT,
  `description` varchar(100) DEFAULT NULL,
  `amount` double DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `plan_type` */

insert  into `plan_type`(`id`,`description`,`amount`) values 
(2,'FPP',500);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
