-- MySQL dump 10.13  Distrib 5.7.27, for Linux (x86_64)
--
-- Host: localhost    Database: BP
-- ------------------------------------------------------
-- Server version	5.7.27-0ubuntu0.19.04.1

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
-- Table structure for table `Card`
--

DROP TABLE IF EXISTS `Card`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Card` (
  `id` tinyint(2) unsigned NOT NULL AUTO_INCREMENT,
  `symbol_id` tinyint(1) unsigned NOT NULL,
  `value` tinyint(2) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `symbol_id` (`symbol_id`),
  CONSTRAINT `Card_ibfk_1` FOREIGN KEY (`symbol_id`) REFERENCES `CardSymbol` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=55 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Card`
--

LOCK TABLES `Card` WRITE;
/*!40000 ALTER TABLE `Card` DISABLE KEYS */;
INSERT INTO `Card` VALUES (1,1,2),(2,1,3),(3,1,4),(4,1,5),(5,1,6),(6,1,7),(7,1,8),(8,1,9),(9,1,10),(10,1,11),(11,1,12),(12,1,13),(13,1,14),(14,2,2),(15,2,3),(16,2,4),(17,2,5),(18,2,6),(19,2,7),(20,2,8),(21,2,9),(22,2,10),(23,2,11),(24,2,12),(25,2,13),(26,2,14),(27,3,2),(28,3,3),(29,3,4),(30,3,5),(31,3,6),(32,3,7),(33,3,8),(34,3,9),(35,3,10),(36,3,11),(37,3,12),(38,3,13),(39,3,14),(40,4,2),(41,4,3),(42,4,4),(43,4,5),(44,4,6),(45,4,7),(46,4,8),(47,4,9),(48,4,10),(49,4,11),(50,4,12),(51,4,13),(52,4,14),(53,1,66),(54,4,87);
/*!40000 ALTER TABLE `Card` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `CardSymbol`
--

DROP TABLE IF EXISTS `CardSymbol`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `CardSymbol` (
  `id` tinyint(1) unsigned NOT NULL AUTO_INCREMENT,
  `symbol_letter` varchar(1) NOT NULL,
  `name` varchar(10) NOT NULL,
  `color` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `CardSymbol`
--

LOCK TABLES `CardSymbol` WRITE;
/*!40000 ALTER TABLE `CardSymbol` DISABLE KEYS */;
INSERT INTO `CardSymbol` VALUES (1,'h','heart','red'),(2,'d','diamond','red'),(3,'s','spade','black'),(4,'c','club','black');
/*!40000 ALTER TABLE `CardSymbol` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-09-26 11:57:41
