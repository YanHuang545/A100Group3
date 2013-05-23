-- MySQL dump 10.13  Distrib 5.5.27, for Win32 (x86)
--
-- Host: localhost    Database: mydb
-- ------------------------------------------------------
-- Server version	5.5.27

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
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `file_location` varchar(60) DEFAULT NULL,
  `resume` mediumblob NOT NULL,
  `letter` mediumblob NOT NULL,
  `submitted_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `other` mediumtext NOT NULL,
  PRIMARY KEY (`id`),
  KEY `name` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `applications`
--

LOCK TABLES `applications` WRITE;
/*!40000 ALTER TABLE `applications` DISABLE KEYS */;
INSERT INTO `applications` VALUES (1,'John Lechmere','JohnLechmere@example.com','(123) 456-7890','documents\\','Resume.pdf','Letter.txt','2013-05-17 00:00:28',''),(2,'Dave Porter','DavePorter@example.com','(123) 456-7890','documents\\','Resume.pdf','Letter.txt','2013-05-16 23:59:52',''),(3,'Ana Alewife','AnaAlewife@example.com','(123) 456-7890','documents\\','Resume.pdf','Letter.txt','2013-05-17 00:00:40',''),(4,'Jeff Copely','JeffC@example.com','(123) 456-7890','documents\\','Resume.pdf','Letter.txt','2013-05-17 00:01:56',''),(5,'Lily Parkst','lparkst@example.com','(123) 456-7890','documents\\','Resume.pdf','Letter.txt','2013-05-17 00:04:07',''),(6,'Mary Charles','mary.charles@example.com','(123) 456-7890','documents\\','Resume.pdf','Letter.txt','2013-05-17 00:04:02',''),(7,'Christopher Fenway','chrisfenway@example.com','(123) 456-7890','documents\\','Resume.pdf','Letter.txt','2013-05-17 00:03:48',''),(8,'Steven Bowdoin','StevenB@example.com','(123) 456-7890','documents\\','Resume.pdf','Letter.txt','2013-05-17 00:04:51',''),(9,'Nancy Braintree','nbtree@example.com','(123) 456-7890','documents\\','Resume.pdf','Letter.txt','2013-05-17 00:05:34',''),(10,'Des Boylston','dboylston@example.com','(123) 456-7890','documents\\','Resume.pdf','Letter.txt','2013-05-17 00:06:06',''),(12,'Jason South','JSouth@example.com','(123) 456-7890','documents\\','Resume.pdf','Letter.txt','2013-05-17 03:36:27','');
/*!40000 ALTER TABLE `applications` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `jobs`
--

DROP TABLE IF EXISTS `jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `jobs` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(30) NOT NULL,
  `type` varchar(30) NOT NULL,
  `location` varchar(30) NOT NULL,
  `company` varchar(30) NOT NULL,
  `company_description` mediumtext NOT NULL,
  `job_description` mediumtext NOT NULL,
  `skills` tinytext NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `contact_name` varchar(30) NOT NULL,
  `contact_email` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jobs`
--

LOCK TABLES `jobs` WRITE;
/*!40000 ALTER TABLE `jobs` DISABLE KEYS */;
INSERT INTO `jobs` VALUES (1,'Senior Project Manager','Software Development','New Haven','SoftwareCentral','We develop.','Managing projects. ','Managing. Seniority. ','0000-00-00 00:00:00','Robert Rotaru','email@example.com'),(2,'Intern','Life long friend','Sesame Street','Barney and Co.','Bunch of fun loving pals ','In need of master puppetian.  ','Hand and eye and mouth cordination ','0000-00-00 00:00:00','Barney','Barney@sesame.street.com'),(3,'Developer','Software Development','New Haven','The Company','Descriptions','description','description','0000-00-00 00:00:00','Steve','email@example.com'),(4,'Engineer','Manual labor','New Haven','Some Company 2','',' This job is hard.','','0000-00-00 00:00:00','Steve','email@example.com'),(5,'A100 Apprentice','Intern','New Haven','Independent Software','A bunch of cool kids. ','Learn to develop and work in groups. ','Programming experience.','0000-00-00 00:00:00','Krishna Sampath','ksampath@indie-soft.com'),(6,'Test','Test','Test','Test','Test','Test','Test','0000-00-00 00:00:00','Test','Test'),(7,'Test','Test','Test','Test','Test','Test','Test','0000-00-00 00:00:00','Test','Test');
/*!40000 ALTER TABLE `jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `posts`
--

DROP TABLE IF EXISTS `posts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `posts` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(30) NOT NULL,
  `blurb` tinytext NOT NULL,
  `image_link` varchar(120) NOT NULL,
  `content` mediumtext NOT NULL,
  `full_link` varchar(120) NOT NULL,
  `post_date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `posts`
--

LOCK TABLES `posts` WRITE;
/*!40000 ALTER TABLE `posts` DISABLE KEYS */;
INSERT INTO `posts` VALUES (1,'Axis901: Putting Manchester on','Coworking space opened today on Main St. in Manchester, CT','http://newhiteboard.com/wp-content/uploads/2013/02/rcprofilepic.jpg','In recent years, the concept of coworking has become increasingly popular in cities all across the country. Nowhere is the trend more noticeable than here in CT. Recently, the Town of Manchester took the initiative to open a coworking space on Main st. Today, we are joined by R.C. Thornton, Founder & President of RCJ Creative, a startup housed at the new coworking space. In this article, R.C. shares his experience, along with information on the space, and how you can get involved.','http://newhiteboard.com/2013/05/13/axis901-putting-mancheste','2013-05-13'),(2,'Guest Post: Evolving Technical','SB Chaffterjee shares his experience on startup community.','http://newhiteboard.com/wp-content/uploads/2013/05/theaccelerators.jpg','Today, we are joined by SB Chatterjee, Acting Director of CTDotNet/ CTDevStartup, an organization of startup enthusiasts in CT who are interested in honing their programming skills among a community of like-minded peers. In this article, SB shares his experience, along with information on the group, and how you can get involved.','http://newhiteboard.com/2013/05/20/guest-post-evolving-techn','2013-05-20'),(3,'Startup Weekend Fairfield (06/','Weekend startup event taking place in Fairfield.','http://newhiteboard.com/wp-content/uploads/2013/05/fairfeldSW-featured-200x200.png','This June, join the Fairfield startup community in a weekend-long event designed to help you take your idea to the next level. Register for Fairfield’s first Startup Weekend today!','http://newhiteboard.com/2013/05/21/startup-weekend-fairfield','2013-05-21'),(4,' Ask an Expert: Who Pays for L','Find out what industry experts have to say.','http://newhiteboard.com/wp-content/uploads/2013/02/experts.jpg','No two startups are identical – but they are often similar. As an entrepreneur, you’ll find that carving your own path to success can leave you with a lot of questions. As part of our mission to help you succeed, we’re taking your questions, and reaching out to industry experts for the answers. Have a question of your own? Submit it here, and stay tuned for the answer.\r\n\r\nThis week’s question is on a taboo topic: When startup members get together, who pays for lunch? Does an investor carry more responsibility than a budding entrepreneur? For this question, we asked a handful of experts. Find out what htey had to say here.','http://newhiteboard.com/2013/05/16/ask-an-expert-who-pays-fo','2013-05-16');
/*!40000 ALTER TABLE `posts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `city` varchar(30) NOT NULL,
  `occupation` varchar(30) NOT NULL,
  `employer` varchar(30) NOT NULL,
  `image_link` varchar(120) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'John','Lechmere','New Haven','Developer','Company X','images/default_user.png'),(2,'Dave','Porter','Fairfield','Designer','Company Y','images/default_user.png'),(3,'Ana','Alewife','Hartford','HR Manager','Company Z','images/default_user.png'),(4,'Jeff','Copely','New Haven','CEO','Company J','images/default_user.png'),(5,'Lily','Parkst','Middletown','Developer','Company A','images/default_user.png'),(6,'Mary','Charles','Middletown','Developer','Company B','images/default_user.png'),(7,'Christopher','Fenway','Bristol','Software Architect','Company X','images/default_user.png'),(8,'Steven','Bowdoin','Boston','Entrepreneur','Self','images/default_user.png'),(9,'Nancy','Braintree','Bridgeport','Product Design','Unemployed','images/default_user.png'),(10,'Desmond','Boylston','New Britain','Web Designer','Company Q','images/default_user.png'),(11,'Jason','South','New Britain','Networks Architect','Company C','images/default_user.png'),(12,'Bill','North','Springfield','Developer','Company D','images/default_user.png'),(13,'Phil','East','New York City','Head PR','Company E','images/default_user.png'),(14,'Adam','West','Hollywood','Actor','Company N','images/default_user.png'),(15,'Tim','Point','Middletown','Marketing','Company XYZ','images/default_user.png');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2013-05-23 10:41:51
