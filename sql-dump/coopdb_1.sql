CREATE DATABASE  IF NOT EXISTS `dbcoopos_v1` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `dbcoopos_v1`;
-- MySQL dump 10.13  Distrib 5.7.17, for Win64 (x86_64)
--
-- Host: localhost    Database: dbcoopos_v1
-- ------------------------------------------------------
-- Server version	5.7.17-log

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `member_basic_table`
--

DROP TABLE IF EXISTS `member_basic_table`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `member_basic_table` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) DEFAULT NULL,
  `streets` varchar(300) DEFAULT NULL,
  `barangay` varchar(80) DEFAULT NULL,
  `city` varchar(60) DEFAULT NULL,
  `province` varchar(60) DEFAULT NULL,
  `zip_code` varchar(10) DEFAULT NULL,
  `telephone` varchar(30) DEFAULT NULL,
  `mobile` varchar(30) DEFAULT NULL,
  `education_attainment` tinyint(4) DEFAULT NULL,
  `profession` varchar(200) DEFAULT NULL,
  `skills` varchar(200) DEFAULT NULL,
  `citizenship` varchar(20) DEFAULT NULL,
  `blood_type` varchar(10) DEFAULT NULL,
  `civil_status` tinyint(4) DEFAULT NULL,
  `sss_no` varchar(20) DEFAULT NULL,
  `tin_no` varchar(20) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `member_basic_table`
--

LOCK TABLES `member_basic_table` WRITE;
/*!40000 ALTER TABLE `member_basic_table` DISABLE KEYS */;
INSERT INTO `member_basic_table` VALUES (1,1,'lot 5 block 7 Eucalyptus St. A','Gordon Heights','Olongapo','Zambales','2200','NA','09474746282',3,'Software Engineer','Programmer, IT Network, Server and Driver','Philippines','NA',1,'NA','NA','2017-03-29 08:42:16','2017-03-29 08:42:16'),(2,4,'Blk. 6 Lot 1 Sealion St. Seaside Subd.','Matina Aplaya','Davao City','Davao del Sur','8000',NULL,'09085916321',3,'Retired Govt Employee','Driving, Computer Operation','Filipino','O',2,'GSIS 60032200152','121-006-240','2017-03-29 10:21:39','2017-03-29 10:10:05'),(3,22,'2544-B P. Villanueva St Pasay','87','Pasay','Manila','1300',NULL,'09175437884',3,NULL,NULL,NULL,NULL,2,'3387370395','302780532','2017-03-29 11:11:39','2017-03-29 11:11:39'),(4,62,'304 NTA Staffhousing,','17 Tabug','Batac City','Ilocos Norte','2906','09988695479','09953473650',3,'Financial Advisor/Tax Agent','Estate Planning','Philippines','O',2,'52092501108','119-789-975','2017-03-29 12:46:07','2017-03-29 12:46:06'),(5,71,'138','Barangay 30-B','Laoag City','Ilocos Norte','2900',NULL,'09100545038',3,'freelance','mass communication','Filipino','o',0,'1234567','925621287','2017-03-30 10:00:59','2017-03-30 10:00:59'),(6,60,'Sitio Cabot','Barangay Amaronan','Umingan','Pangasinan','2443',NULL,'09106142435',3,'Computer Technician','Data Encoder/Technician','Filipino','B',1,'1111111111111','111-111-111-000','2017-03-30 23:52:37','2017-03-30 23:52:37'),(7,2,'308 Macatangay St.','Poblacion','Ibaan','Batangas','4230',NULL,'09178772110',3,'Self employed','Taekwondo instructor','Philippines','O',2,'03-8802910--1','131-255-682-000','2017-03-31 01:17:02','2017-03-31 01:17:02');
/*!40000 ALTER TABLE `member_basic_table` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `member_beneficiary_table`
--

DROP TABLE IF EXISTS `member_beneficiary_table`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `member_beneficiary_table` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) DEFAULT NULL,
  `name_of_beneficiary` varchar(200) DEFAULT NULL,
  `same_with_primary` tinyint(4) DEFAULT NULL,
  `streets` varchar(300) DEFAULT NULL,
  `barangay` varchar(80) DEFAULT NULL,
  `city` varchar(60) DEFAULT NULL,
  `province` varchar(60) DEFAULT NULL,
  `zip_code` varchar(10) DEFAULT NULL,
  `telephone` varchar(30) DEFAULT NULL,
  `mobile` varchar(30) DEFAULT NULL,
  `email` varchar(60) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `member_beneficiary_table`
--

LOCK TABLES `member_beneficiary_table` WRITE;
/*!40000 ALTER TABLE `member_beneficiary_table` DISABLE KEYS */;
INSERT INTO `member_beneficiary_table` VALUES (1,1,'Gladys Alcantara Yusi',1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2017-03-29 08:42:40','2017-03-29 08:42:40'),(2,4,'Sir Anthony Francis D. Domingo',0,'125 Gen. Luna St.','20','Laoag City','Ilocos Norte','2800',NULL,'09218928494',NULL,'2017-03-29 10:23:38','2017-03-29 10:23:38'),(3,22,'Cindy Tejada Hernandez',1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2017-03-29 11:11:59','2017-03-29 11:11:59'),(4,62,'Crescencia B. Paculan',0,'304 NTA Staffhousing','17 Tabug','Batac City','Ilocos Norte','2906','09988695479','09953473650','mikepaculan.1978@gmail.com','2017-03-29 12:48:20','2017-03-29 12:48:19'),(5,71,'Ma Hazel Wenda',0,'Sitio Rang-ay','Poblacion 2','Pagudpud','Ilocos Norte','2919',NULL,'09100545038',NULL,'2017-03-30 10:03:01','2017-03-30 10:03:01'),(6,60,'Carolina Diza Motea',1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2017-03-30 23:52:58','2017-03-30 23:52:58'),(7,2,'Mariebel P. Bernardo',1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2017-03-31 01:17:41','2017-03-31 01:17:41');
/*!40000 ALTER TABLE `member_beneficiary_table` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `member_table`
--

DROP TABLE IF EXISTS `member_table`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `member_table` (
  `Id` int(11) NOT NULL,
  `role` tinyint(4) DEFAULT NULL,
  `hash_code` varchar(60) DEFAULT NULL,
  `username` varchar(40) DEFAULT NULL,
  `password` varchar(60) DEFAULT NULL,
  `first_name` varchar(20) DEFAULT NULL,
  `middle_name` varchar(20) DEFAULT NULL,
  `last_name` varchar(20) DEFAULT NULL,
  `birth_date` datetime DEFAULT NULL,
  `gender` tinyint(4) DEFAULT NULL,
  `email` varchar(60) DEFAULT NULL,
  `mobile` varchar(20) DEFAULT NULL,
  `endorse_uid` int(11) DEFAULT NULL,
  `specialist_uid` int(11) DEFAULT NULL,
  `type` tinyint(4) DEFAULT NULL,
  `status` tinyint(4) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `member_table`
--

LOCK TABLES `member_table` WRITE;
/*!40000 ALTER TABLE `member_table` DISABLE KEYS */;
INSERT INTO `member_table` VALUES (1,1,'57715c7099043577b424ba386eea6092','king.a','3e9e1868bb0ecdff876f11a6ae5388ba','king paulo','cabalo','aquino',NULL,1,'me@kpa21.info','09177715380',0,0,2,2,'2017-03-29 08:53:59','2017-03-28 07:24:38');
/*!40000 ALTER TABLE `member_table` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `payment_table`
--

DROP TABLE IF EXISTS `payment_table`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `payment_table` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) DEFAULT NULL,
  `type` tinyint(4) DEFAULT NULL,
  `mode_of_payment` tinyint(4) DEFAULT NULL,
  `amount` decimal(18,4) DEFAULT NULL,
  `proof_of_payment_url` varchar(300) DEFAULT NULL,
  `confirming_a` tinyint(4) DEFAULT NULL,
  `confirming_b` tinyint(4) DEFAULT NULL,
  `confirming_c` tinyint(4) DEFAULT NULL,
  `status` tinyint(4) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `payment_table`
--

LOCK TABLES `payment_table` WRITE;
/*!40000 ALTER TABLE `payment_table` DISABLE KEYS */;
INSERT INTO `payment_table` VALUES (1,1,2,2,1500.0000,'NA',1,1,1,-1,'2017-03-29 08:42:54','2017-03-29 08:42:54'),(2,1,2,2,1500.0000,'NA',1,1,1,-1,'2017-03-29 08:50:46','2017-03-29 08:50:46'),(3,1,2,2,1500.0000,'NA',1,1,1,1,'2017-03-29 08:53:59','2017-03-29 08:53:59'),(4,4,2,0,1500.0000,'Paid',1,1,1,1,'2017-03-29 10:25:05','2017-03-29 10:25:05'),(5,62,3,1,1500.0000,'BPI deposit slip in the name of Francis Domingo',1,1,1,1,'2017-03-29 13:00:56','2017-03-29 13:00:56'),(6,71,3,1,1500.0000,'FRANCIS DOMINGO',1,1,1,1,'2017-03-30 10:04:29','2017-03-30 10:04:29'),(7,60,2,1,1500.0000,'Jenny Peralta',1,1,1,1,'2017-03-30 23:54:23','2017-03-30 23:54:23'),(8,2,2,1,1500.0000,'Anton',1,1,1,1,'2017-03-31 01:20:27','2017-03-31 01:20:27');
/*!40000 ALTER TABLE `payment_table` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-08-02  8:42:55
