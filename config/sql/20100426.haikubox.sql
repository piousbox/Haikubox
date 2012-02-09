-- MySQL dump 10.13  Distrib 5.1.42, for redhat-linux-gnu (x86_64)
--
-- Host: localhost    Database: haikubox
-- ------------------------------------------------------
-- Server version	5.1.42

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
-- Table structure for table `notes`
--

DROP TABLE IF EXISTS `notes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `notes` (
  `id` int(12) NOT NULL AUTO_INCREMENT,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `body` text,
  `row_id` int(12) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `notes`
--

LOCK TABLES `notes` WRITE;
/*!40000 ALTER TABLE `notes` DISABLE KEYS */;
/*!40000 ALTER TABLE `notes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `rows`
--

DROP TABLE IF EXISTS `rows`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `rows` (
  `id` int(12) NOT NULL AUTO_INCREMENT,
  `service_name` varchar(300) DEFAULT NULL,
  `host_url` varchar(500) DEFAULT NULL,
  `username` varchar(200) DEFAULT NULL,
  `passphrase` varchar(200) DEFAULT NULL,
  `descr` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rows`
--

LOCK TABLES `rows` WRITE;
/*!40000 ALTER TABLE `rows` DISABLE KEYS */;
INSERT INTO `rows` VALUES (3,'Interwoven developers forums','http://devnet.interwoven.com','spencer@mediatecpub.com','pixkni26',''),(2,'WIFI','Apple Network bfe497','','0xFF0000','wireless network at the office.'),(4,'FTP','98.129.95.66','webint','m3d!47ecpU81!5h|ng',''),(5,'Mediatec Marketing(HOUSE ADS) FTP','98.129.95.66','marketing','nmediatecnmediatec',''),(6,'unix machines in the office','','melmore','h0rreble','All Unix machines in the office (Webteam, Strongmail Console, and Interwoven)'),(7,'Webteam Redhat Linux Development Server','192.168.243.63','root','Tmd0admS','');
/*!40000 ALTER TABLE `rows` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2010-04-26  5:40:18
