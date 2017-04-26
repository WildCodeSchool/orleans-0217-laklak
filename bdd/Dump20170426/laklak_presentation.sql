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
-- Table structure for table `presentation`
--

DROP TABLE IF EXISTS `presentation`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `presentation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `textpresentation` text,
  `textcover` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `presentation`
--

LOCK TABLES `presentation` WRITE;
/*!40000 ALTER TABLE `presentation` DISABLE KEYS */;
INSERT INTO `presentation` VALUES (1,'<p><span style=\"font-size:18px\"><strong>LAKLAK Productions</strong>&nbsp;est une agence artistique bas&eacute;e &agrave; Rabat. Dans une dynamique ded&eacute;veloppement de la sc&egrave;ne musicale au Maroc, nos m&eacute;tiers consistent en la production d&rsquo;&eacute;v&egrave;nements (concerts, festivals) et le d&eacute;veloppement de projet artistiques.</span></p>\r\n\r\n<p><span style=\"font-size:18px\">Fond&eacute;e en 2015, par Hajar Hami et Cyril Foucault,&nbsp;<strong>LAKLAK Productions</strong>&nbsp;a particip&eacute;, lors de sa premi&egrave;re ann&eacute;e d&rsquo;existence, &agrave; la mise en &oelig;uvre de 30 soir&eacute;es de concerts au travers de 15 villes marocaines, assurant notamment la coordination g&eacute;n&eacute;rale du&nbsp;<strong>Festival Jazz au Chellah &agrave; Rabat</strong>. Ces spectacles ont r&eacute;uni pr&egrave;s de 40.000 spectateurs autour de formes musicales diverses mais toujours pertinentes.&nbsp;<strong>Para One, Mehdi Nassouli, Hindi Zahra, Amine K, Imed Alibi, Majid Bekkas, Songhoy Blues</strong>... font partie des artistes &agrave; qui nous nous sommes associ&eacute;s en 2015.&nbsp;</span></p>\r\n\r\n<p><span style=\"font-size:18px\">D&eacute;but 2016, nous allons plus loin dans le d&eacute;veloppement de concepts initi&eacute;s en 2015, et organisons ainsi pour la deuxi&egrave;me ann&eacute;e cons&eacute;cutive&nbsp;<strong>la Nuit Electronique &agrave; Casablanca</strong>&nbsp;en accueillant&nbsp;<strong>Rone</strong>. Nous rejoignons &eacute;galement la production du festival&nbsp;<strong>Jazzablanca</strong>&nbsp;pour en assurer la coordination artistique. Une collaboration qui donne lieu ensuite &agrave; une relation de travail &eacute;largie aux Casa Live Sessions . En septembre 2016, nous lan&ccedil;ons et coproduisons le projet&nbsp;<strong>ENCORE</strong>, en invitant Malca pour la premi&egrave;re &eacute;dition.&nbsp;<strong>Habibi Funk</strong>&nbsp;sera le second artiste programm&eacute;, au mois de d&eacute;cembre. En parall&egrave;le, nous d&eacute;veloppons un catalogue d&rsquo;artistes que nous accompagnons dans le d&eacute;veloppement de leurs projets artistiques et initions ainsi des collaborations avec&nbsp;<strong>Meryem Aboulouafa et Ayoub El Machatt</strong>.</span></p>\r\n\r\n<p><span style=\"font-size:18px\">2017 d&eacute;marre par la poursuite de la gestion de la production des Casa Live Sessions, avec l&rsquo;accueil d&rsquo;<strong>Erik Truffaz</strong>&nbsp;&agrave; Casablanca. Le projet&nbsp;<strong>ENCORE</strong>&nbsp;poursuit &eacute;galement son d&eacute;veloppement avec le premier ENCORE + et le concert priv&eacute; de&nbsp;<strong>Bachar Mar Khalif&eacute;</strong>. Mais 2017 marque &eacute;galement une implication toujours plus forte dans&nbsp;<strong>Jazzablanca</strong>, par la gestion de la coordination g&eacute;n&eacute;rale du festival.&nbsp;<strong>La Nuit Electronique de Casablanca</strong>&nbsp;connaitra &eacute;galement sa troisi&egrave;me &eacute;dition, alors que&nbsp;<strong>Meryem Aboulouafa</strong>&nbsp;d&eacute;marre l&rsquo;ann&eacute;e 2017 par une tourn&eacute;e en Indon&eacute;sie.</span></p>\r\n\r\n<p><span style=\"font-size:18px\"><strong>LAKLAK Productions</strong>&nbsp;a &eacute;t&eacute; fond&eacute;e sur les bases de plus de sept ann&eacute;es d&rsquo;exp&eacute;rience en France et au Maroc (Universal Music France, 3 Pom Prod, Francofolies de La Rochelle, Paris Hip Hop, Mawazine, Institut fran&ccedil;ais du Maroc...) faites de multiples rencontres et collaborations artistiques. Depuis 2015, ce sont toujours plus de nouvelles collaborations qui renforcent notre expertise et notre sp&eacute;cialisation au Maroc. Nous mettons ce savoir faire au service des artistes avec qui nous collaborons, des partenaires priv&eacute;s et publics qui nous accordent leur confiance et du public que nous accueillons.</span></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n','images/Upload/presentation/8.jpg');
/*!40000 ALTER TABLE `presentation` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-04-26 10:46:54
