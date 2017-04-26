CREATE DATABASE  IF NOT EXISTS `laklak` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `laklak`;
-- MySQL dump 10.13  Distrib 5.7.17, for Linux (x86_64)
--
-- Host: localhost    Database: laklak
-- ------------------------------------------------------
-- Server version	5.7.17-0ubuntu0.16.04.1

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
-- Table structure for table `artistimages`
--

DROP TABLE IF EXISTS `artistimages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `artistimages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `artistimggalerypath` text,
  `idartist` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_artist_images_1_idx` (`idartist`),
  CONSTRAINT `fk_artist_images_1` FOREIGN KEY (`idartist`) REFERENCES `artist` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=101 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `artistimages`
--

LOCK TABLES `artistimages` WRITE;
/*!40000 ALTER TABLE `artistimages` DISABLE KEYS */;
INSERT INTO `artistimages` VALUES (1,'images/Upload/Galerie/Artist/ayoub/1.jpg',1),(2,'images/Upload/Galerie/Artist/ayoub/2.jpg',1),(3,'images/Upload/Galerie/Artist/imedalibi/1.jpg',4),(4,'images/Upload/Galerie/Artist/imedalibi/2.jpg',4),(5,'images/Upload/Galerie/Artist/imedalibi/3.jpg',4),(6,'images/Upload/Galerie/Artist/imedalibi/4.jpg',4),(7,'images/Upload/Galerie/Artist/imedalibi/5.jpg',4),(8,'images/Upload/Galerie/Artist/imedalibi/6.jpg',4),(9,'images/Upload/Galerie/Artist/imedalibi/7.jpg',4),(10,'images/Upload/Galerie/Artist/imedalibi/8.jpg',4),(11,'images/Upload/Galerie/Artist/imedalibi/9.jpg',4),(12,'images/Upload/Galerie/Artist/imedalibi/10.jpg',4),(13,'images/Upload/Galerie/Artist/imedalibi/11.jpg',4),(14,'images/Upload/Galerie/Artist/imedalibi/12.jpg',4),(15,'images/Upload/Galerie/Artist/imedalibi/13.jpg',4),(16,'images/Upload/Galerie/Artist/imedalibi/14.jpg',4),(17,'images/Upload/Galerie/Artist/imedalibi/15.jpg',4),(18,'images/Upload/Galerie/Artist/imedalibi/16.jpg',4),(19,'images/Upload/Galerie/Artist/imedalibi/17.jpg',4),(20,'images/Upload/Galerie/Artist/imedalibi/18.jpg',4),(21,'images/Upload/Galerie/Artist/imedalibi/19.jpg',4),(22,'images/Upload/Galerie/Artist/imedalibi/20.jpg',4),(23,'images/Upload/Galerie/Artist/imedalibi/21.jpg',4),(24,'images/Upload/Galerie/Artist/imedalibi/22.jpg',4),(25,'images/Upload/Galerie/Artist/imedalibi/23.jpg',4),(26,'images/Upload/Galerie/Artist/imedalibi/24.png',4),(27,'images/Upload/Galerie/Artist/imedalibi/25.jpg',4),(28,'images/Upload/Galerie/Artist/imedalibi/26.jpg',4),(29,'images/Upload/Galerie/Artist/imedalibi/27.jpg',4),(30,'images/Upload/Galerie/Artist/imedalibi/28.jpg',4),(31,'images/Upload/Galerie/Artist/imedalibi/29.jpg',4),(32,'images/Upload/Galerie/Artist/imedalibi/30.jpg',4),(33,'images/Upload/Galerie/Artist/imedalibi/31.jpg',4),(34,'images/Upload/Galerie/Artist/imedalibi/32.jpg',4),(35,'images/Upload/Galerie/Artist/imedalibi/33.jpg',4),(36,'images/Upload/Galerie/Artist/imedalibi/34.jpg',4),(37,'images/Upload/Galerie/Artist/imedalibi/35.jpg',4),(38,'images/Upload/Galerie/Artist/imedalibi/36.jpg',4),(39,'images/Upload/Galerie/Artist/imedalibi/37.jpg',4),(40,'images/Upload/Galerie/Artist/imedalibi/38.jpg',4),(41,'images/Upload/Galerie/Artist/imedalibi/39.jpg',4),(42,'images/Upload/Galerie/Artist/imedalibi/40.jpg',4),(43,'images/Upload/Galerie/Artist/imedalibi/41.jpg',4),(44,'images/Upload/Galerie/Artist/imedalibi/42.JPG',4),(45,'images/Upload/Galerie/Artist/imedalibi/43.jpg',4),(46,'images/Upload/Galerie/Artist/imedalibi/44.jpg',4),(47,'images/Upload/Galerie/Artist/imedalibi/45.jpg',4),(48,'images/Upload/Galerie/Artist/imedalibi/46.jpg',4),(49,'images/Upload/Galerie/Artist/imedalibi/47.jpg',4),(50,'images/Upload/Galerie/Artist/imedalibi/48.jpg',4),(51,'images/Upload/Galerie/Artist/imedalibi/49.jpg',4),(53,'images/Upload/Galerie/Artist/malca/1.jpg',5),(54,'images/Upload/Galerie/Artist/malca/2.jpg',5),(55,'images/Upload/Galerie/Artist/malca/3.jpg',5),(56,'images/Upload/Galerie/Artist/malca/4.jpg',5),(57,'images/Upload/Galerie/Artist/malca/5.jpg',5),(58,'images/Upload/Galerie/Artist/malca/6.jpg',5),(59,'images/Upload/Galerie/Artist/malca/7.jpg',5),(60,'images/Upload/Galerie/Artist/malca/8.jpg',5),(61,'images/Upload/Galerie/Artist/malca/9.jpg',5),(62,'images/Upload/Galerie/Artist/meryem/1.jpg',6),(63,'images/Upload/Galerie/Artist/meryem/2.JPG',6),(64,'images/Upload/Galerie/Artist/meryem/3.jpg',6),(65,'images/Upload/Galerie/Artist/meryem/4.jpg',6),(66,'images/Upload/Galerie/Artist/meryem/5.jpg',6),(67,'images/Upload/Galerie/Artist/meryem/6.jpg',6),(68,'images/Upload/Galerie/Artist/meryem/7.jpg',6),(69,'images/Upload/Galerie/Artist/meryem/8.jpg',6),(70,'images/Upload/Galerie/Artist/meryem/9.jpg',6),(71,'images/Upload/Galerie/Artist/meryem/10.jpg',6),(72,'images/Upload/Galerie/Artist/meryem/11.jpg',6),(73,'images/Upload/Galerie/Artist/paraone/1.jpg',7),(74,'images/Upload/Galerie/Artist/paraone/2.jpg',7),(75,'images/Upload/Galerie/Artist/paraone/3.jpg',7),(76,'images/Upload/Galerie/Artist/paraone/4.jpg',7),(77,'images/Upload/Galerie/Artist/paraone/5.jpg',7),(78,'images/Upload/Galerie/Artist/paraone/6.jpg',7),(79,'images/Upload/Galerie/Artist/paraone/7.jpg',7),(80,'images/Upload/Galerie/Artist/paraone/8.jpg',7),(81,'images/Upload/Galerie/Artist/paraone/9.jpg',7),(82,'images/Upload/Galerie/Artist/paraone/10.jpg',7),(83,'images/Upload/Galerie/Artist/paraone/11.jpg',7),(84,'images/Upload/Galerie/Artist/paraone/12.jpg',7),(85,'images/Upload/Galerie/Artist/paraone/13.jpg',7),(86,'images/Upload/Galerie/Artist/paraone/14.jpg',7),(87,'images/Upload/Galerie/Artist/paraone/15.jpg',7),(88,'images/Upload/Galerie/Artist/paraone/16.jpg',7),(89,'images/Upload/Galerie/Artist/paraone/17.jpg',7),(90,'images/Upload/Galerie/Artist/paraone/18.jpg',7),(91,'images/Upload/Galerie/Artist/paraone/19.jpg',7),(92,'images/Upload/Galerie/Artist/paraone/20.jpg',7),(93,'images/Upload/Galerie/Artist/paraone/21.jpg',7),(94,'images/Upload/Galerie/Artist/paraone/22.jpg',7),(95,'images/Upload/Galerie/Artist/paraone/23.jpg',7),(96,'images/Upload/Galerie/Artist/paraone/24.jpg',7),(97,'images/Upload/Galerie/Artist/paraone/25.jpg',7),(98,'images/Upload/Galerie/Artist/paraone/26.jpg',7),(99,'images/Upload/Galerie/Artist/paraone/27.jpg',7),(100,'images/Upload/Galerie/Artist/paraone/28.jpg',7);
/*!40000 ALTER TABLE `artistimages` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-04-26 10:46:53
