-- MySQL dump 10.13  Distrib 5.6.11, for Win64 (x86_64)
--
-- Host: localhost    Database: mydb
-- ------------------------------------------------------
-- Server version	5.5.24-log

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
-- Table structure for table `applications`
--

DROP TABLE IF EXISTS `applications`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `applications` (
  `aID` int(11) DEFAULT NULL,
  `Name` varchar(45) DEFAULT NULL,
  `Email` varchar(45) DEFAULT NULL,
  `Phone` int(11) DEFAULT NULL,
  `jID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `applications`
--

LOCK TABLES `applications` WRITE;
/*!40000 ALTER TABLE `applications` DISABLE KEYS */;
/*!40000 ALTER TABLE `applications` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `employees`
--

DROP TABLE IF EXISTS `employees`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `employees` (
  `FirstName` varchar(30) DEFAULT NULL,
  `LastName` varchar(30) DEFAULT NULL,
  `City` varchar(45) DEFAULT NULL,
  `Occupation` varchar(45) DEFAULT NULL,
  `Password` varchar(32) DEFAULT NULL,
  `Employer` varchar(45) DEFAULT NULL,
  `UserName` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `employees`
--

LOCK TABLES `employees` WRITE;
/*!40000 ALTER TABLE `employees` DISABLE KEYS */;
INSERT INTO `employees` VALUES ('David','Wright','New York City, NY','3rd Baseman','77bb7b6398734a405cd04ce5a9bb194c','New York Mets','dwright5'),('Carmelo','Anthony','New York City, NY','Small Forward','deb54ffb41e085fd7f69a75b6359c989','New York Knicks','melo7'),('some','guy','some place, OH','some job','04f0cef3e4796f6967fd5bae6e2c9113','some company','genericname');
/*!40000 ALTER TABLE `employees` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `employers`
--

DROP TABLE IF EXISTS `employers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `employers` (
  `employer_id` int(11) NOT NULL AUTO_INCREMENT,
  `CompanyName` varchar(45) DEFAULT NULL,
  `Location` varchar(45) DEFAULT NULL,
  `CompanyDesc` varchar(255) DEFAULT NULL,
  `WebsiteURL` varchar(255) DEFAULT NULL,
  `UserName` varchar(30) DEFAULT NULL,
  `Password` varchar(32) DEFAULT NULL,
  PRIMARY KEY (`employer_id`),
  UNIQUE KEY `employer_id_UNIQUE` (`employer_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `employers`
--

LOCK TABLES `employers` WRITE;
/*!40000 ALTER TABLE `employers` DISABLE KEYS */;
INSERT INTO `employers` VALUES (3,'Sample Company','sample, NY','sample sample sample','sample.com','genericguy','3d517f8924ac7fd03699a29d97dc52d9'),(4,'Starbucks','Orange, CT','Coffee and shit...','starbucks.com/06477','sbux','24eb05d18318ac2db8b2b959315d10f2'),(5,'NY Giants','NYC','football team','giants.com','gmen2011','7ac66c0f148de9519b8bd264312c4d64');
/*!40000 ALTER TABLE `employers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `jobs`
--

DROP TABLE IF EXISTS `jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `jobs` (
  `jID` int(11) DEFAULT NULL,
  `JobType` varchar(45) DEFAULT NULL,
  `Location` varchar(45) DEFAULT NULL,
  `CompanyName` varchar(45) DEFAULT NULL,
  `CompanyDesc` varchar(150) DEFAULT NULL,
  `JobDesc` varchar(150) DEFAULT NULL,
  `SkillsRequired` varchar(150) DEFAULT NULL,
  `PostedDate` date DEFAULT NULL,
  `ContactPerson` varchar(45) DEFAULT NULL,
  `Email` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jobs`
--

LOCK TABLES `jobs` WRITE;
/*!40000 ALTER TABLE `jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `jobs` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2013-06-03 15:27:29
