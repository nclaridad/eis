-- MySQL dump 10.13  Distrib 5.6.17, for Win32 (x86)
--
-- Host: localhost    Database: eis
-- ------------------------------------------------------
-- Server version	5.6.23-log

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
-- Table structure for table `employees`
--

DROP TABLE IF EXISTS `employees`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `employees` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `last_name` varchar(100) DEFAULT NULL,
  `first_name` varchar(100) DEFAULT NULL,
  `middle_name` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `employee_no` varchar(25) NOT NULL,
  `status` int(1) NOT NULL DEFAULT '1' COMMENT '0 = Inactive, 1 = Active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`employee_no`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `employees`
--

LOCK TABLES `employees` WRITE;
/*!40000 ALTER TABLE `employees` DISABLE KEYS */;
INSERT INTO `employees` VALUES (1,'Alicia','Viloria','D','normanclaridad@b.com','1702001',1,'2017-02-10 12:41:09','2017-02-12 01:02:04'),(2,'Ramon','Ples','D',NULL,'1702002',1,'2017-02-10 12:41:09','2017-02-10 12:41:09'),(3,'Beverly','Purisima','D',NULL,'1702003',1,'2017-02-10 12:41:09','2017-02-10 12:41:09'),(4,'Evan Paul','Consencino','D',NULL,'1702004',1,'2017-02-10 12:41:09','2017-02-10 12:41:09'),(5,'Ann Kathleen','Magcalas','D',NULL,'1702005',1,'2017-02-10 12:41:09','2017-02-10 12:41:09'),(6,'Ruby','Villegas','D',NULL,'1702006',1,'2017-02-10 12:41:09','2017-02-10 12:41:09'),(7,'Melani','Pulgar','D',NULL,'1702007',1,'2017-02-10 12:41:09','2017-02-10 12:41:09'),(8,'Judith','Fontanoz','D',NULL,'1702008',1,'2017-02-10 12:41:09','2017-02-10 12:41:09'),(9,'Ronilo','Borja','D',NULL,'1702009',1,'2017-02-10 12:41:09','2017-02-10 12:41:09'),(10,'Rodolfo','lantin','D',NULL,'1702010',1,'2017-02-10 12:41:09','2017-02-10 12:41:09'),(11,'Jennifer','Sese','D',NULL,'1702011',1,'2017-02-10 12:41:09','2017-02-10 12:41:09'),(12,'Roberto','Marquez','D',NULL,'1702012',1,'2017-02-10 12:41:09','2017-02-10 12:41:09'),(13,'Sharon','Reyes','D',NULL,'1702013',1,'2017-02-10 12:41:09','2017-02-10 12:41:09'),(14,'Nathaniel','Garcia','D',NULL,'1702014',1,'2017-02-10 12:41:09','2017-02-10 12:41:09'),(15,'Edwin','Balatbat','D',NULL,'1702015',1,'2017-02-10 12:41:09','2017-02-10 12:41:09'),(16,'Maria Loudes','Suntay','D',NULL,'1702016',1,'2017-02-10 12:41:09','2017-02-10 12:41:09'),(17,'Artemio','Salvador','D',NULL,'1702017',1,'2017-02-10 12:41:09','2017-02-10 12:41:09'),(18,'Joan Lizzet','Austria','D',NULL,'1702018',1,'2017-02-10 12:41:09','2017-02-10 12:41:09'),(19,'Ivanka Lynor','Tadeo','D',NULL,'1702019',1,'2017-02-10 12:41:09','2017-02-10 12:41:09'),(20,'Kristian','Villesenda','D',NULL,'1702020',1,'2017-02-10 12:41:09','2017-02-10 12:41:09'),(21,'Joy Sto.','Domingo','D',NULL,'1702021',1,'2017-02-10 12:41:09','2017-02-10 12:41:09'),(22,'Theresa Jane','Po','D',NULL,'1702022',1,'2017-02-10 12:41:09','2017-02-10 12:41:09'),(23,'Vincent','Moderes','D',NULL,'1702023',1,'2017-02-10 12:41:09','2017-02-10 12:41:09'),(24,'Romeo','Piodena','D',NULL,'1702024',1,'2017-02-10 12:41:09','2017-02-10 12:41:09'),(25,'Marlon','Marges','D',NULL,'1702025',1,'2017-02-10 12:41:09','2017-02-10 12:41:09'),(26,'Allen','Pagayatan','D',NULL,'1702026',1,'2017-02-10 12:41:09','2017-02-10 12:41:09'),(27,'Aaron Amos','Santos','D',NULL,'1702027',1,'2017-02-10 12:41:09','2017-02-10 12:41:09'),(28,'Marie Genebee','Puzon','D',NULL,'1702028',1,'2017-02-10 12:41:09','2017-02-10 12:41:09'),(29,'Rodineil','Nomorosa','D',NULL,'1702029',1,'2017-02-10 12:41:09','2017-02-10 12:41:09'),(30,'Mark Paulo','Castillo','D',NULL,'1702030',1,'2017-02-10 12:41:09','2017-02-10 12:41:09'),(31,'Santino','Pangwi','D',NULL,'1702031',1,'2017-02-10 12:41:09','2017-02-10 12:41:09'),(32,'Ruby Grazielle','Ticsay','D','normanclaridad@b.com','1702032',1,'2017-02-10 12:41:09','2017-02-12 20:48:27');
/*!40000 ALTER TABLE `employees` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(45) DEFAULT NULL,
  `password` varchar(128) DEFAULT NULL,
  `last_name` varchar(45) DEFAULT NULL,
  `first_name` varchar(45) DEFAULT NULL,
  `status` int(1) DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'normanclaridad@yahoo.com','$2y$10$CTKdAFV4vphz4Tn3n4tHnun.0n3mEzwIyFiwzD9ijenl2MAO8l5kW','Norman','Claridad',1,'WScmTuaGjXZg4IF4ZmupBbU5Fxm9OFfAHuiKUPPlBtMR5Kfi9I7JgDuKYj6P','2017-02-11 08:20:25');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database 'eis'
--

--
-- Dumping routines for database 'eis'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-02-13 12:53:58
