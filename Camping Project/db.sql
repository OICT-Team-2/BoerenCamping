-- MySQL dump 10.13  Distrib 8.0.35, for Linux (x86_64)
--
-- Host: localhost    Database: camping_database
-- ------------------------------------------------------
-- Server version	8.0.35-0ubuntu0.20.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `customer_data`
--

DROP TABLE IF EXISTS `customer_data`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `customer_data` (
  `customer_id` int NOT NULL AUTO_INCREMENT,
  `voornaam` varchar(45) DEFAULT NULL,
  `achternaam` varchar(45) DEFAULT NULL,
  `plaats` varchar(45) DEFAULT NULL,
  `postcode` varchar(45) DEFAULT NULL,
  `straatnaam` mediumtext,
  `huisnummer` int DEFAULT NULL,
  `telefoonnummer` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `klanttoegevoegd` datetime DEFAULT CURRENT_TIMESTAMP,
  `c_reservation_id` int DEFAULT NULL,
  PRIMARY KEY (`customer_id`),
  KEY `reservation_id_idx` (`c_reservation_id`),
  CONSTRAINT `reservation_id` FOREIGN KEY (`c_reservation_id`) REFERENCES `reservation_data` (`reservation_id`)
) ENGINE=InnoDB AUTO_INCREMENT=67 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `customer_data`
--

LOCK TABLES `customer_data` WRITE;
/*!40000 ALTER TABLE `customer_data` DISABLE KEYS */;
INSERT INTO `customer_data` VALUES (47,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2023-12-18 09:59:08',20),(48,'max','visser','zeist','3703at','de brink',76,'0613549846','maxvisser8@hotmail.com','2023-12-18 09:59:51',NULL),(49,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2023-12-20 08:30:48',21),(50,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2023-12-20 09:03:29',22),(51,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2023-12-20 09:07:39',23),(52,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2024-01-09 08:23:24',24),(53,'Randy','Paulus','Castricum','1901XJ','Rossinistraat ',13,'0683090889','randy.paulus@student.hu.nl','2024-01-09 08:23:43',NULL),(54,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2024-01-11 10:42:12',25),(55,'rens','ekin','maarssen','3821BA','reigerskamp',110,'06123423123','rens.ege.ekin@gmail.com','2024-01-11 10:42:20',NULL),(56,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2024-01-11 10:47:42',26),(57,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2024-01-12 12:23:04',27),(58,'Randy','Paulus','Castricum','1901XJ','Rossinistraat ',13,'0683090889','randy.paulus15@gmail.com','2024-01-12 12:24:22',NULL),(59,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2024-01-15 10:06:12',28),(60,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2024-01-16 09:15:57',29),(61,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2024-01-16 09:19:31',30),(62,'siem','vandennoort','utrecht','3961ks','kotter',67,'0612345678','siem@reinel.nl','2024-01-16 09:22:16',NULL),(63,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2024-01-16 09:24:28',31),(64,'siem','vandennoort','utrecht','3961 ks','kotter',67,'0612345678','siem@reinel.nl','2024-01-16 09:25:01',NULL),(65,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2024-01-16 09:29:31',32),(66,'siem','van den noort','utrecht','3961 ks','kotter',67,'0612345678','siem@reinel.nl','2024-01-16 09:30:22',NULL);
/*!40000 ALTER TABLE `customer_data` ENABLE KEYS */;
UNLOCK TABLES;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_0900_ai_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
/*!50003 CREATE*/ /*!50017 DEFINER=`root`@`localhost`*/ /*!50003 TRIGGER `customer_data_AFTER_INSERT` AFTER INSERT ON `customer_data` FOR EACH ROW BEGIN
	INSERT INTO `order_data` (`o_customer_id`) VALUES (NEW.customer_id);
END */;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;

--
-- Table structure for table `order_data`
--

DROP TABLE IF EXISTS `order_data`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `order_data` (
  `order_id` int NOT NULL AUTO_INCREMENT,
  `o_customer_id` int DEFAULT NULL,
  `orderdate` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`order_id`),
  KEY `customer_id_idx` (`o_customer_id`),
  CONSTRAINT `customer_id` FOREIGN KEY (`o_customer_id`) REFERENCES `customer_data` (`customer_id`)
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `order_data`
--

LOCK TABLES `order_data` WRITE;
/*!40000 ALTER TABLE `order_data` DISABLE KEYS */;
INSERT INTO `order_data` VALUES (16,47,'2023-12-18 09:59:08'),(17,48,'2023-12-18 09:59:51'),(18,49,'2023-12-20 08:30:48'),(19,50,'2023-12-20 09:03:29'),(20,51,'2023-12-20 09:07:39'),(21,52,'2024-01-09 08:23:24'),(22,53,'2024-01-09 08:23:43'),(23,54,'2024-01-11 10:42:12'),(24,55,'2024-01-11 10:42:20'),(25,56,'2024-01-11 10:47:42'),(26,57,'2024-01-12 12:23:04'),(27,58,'2024-01-12 12:24:22'),(28,59,'2024-01-15 10:06:12'),(29,60,'2024-01-16 09:15:57'),(30,61,'2024-01-16 09:19:31'),(31,62,'2024-01-16 09:22:16'),(32,63,'2024-01-16 09:24:28'),(33,64,'2024-01-16 09:25:01'),(34,65,'2024-01-16 09:29:31'),(35,66,'2024-01-16 09:30:22');
/*!40000 ALTER TABLE `order_data` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `reservation_data`
--

DROP TABLE IF EXISTS `reservation_data`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `reservation_data` (
  `reservation_id` int NOT NULL AUTO_INCREMENT,
  `aantalpersonen` int DEFAULT NULL,
  `type` varchar(50) DEFAULT NULL,
  `aankomst` datetime DEFAULT NULL,
  `vertrek` datetime DEFAULT NULL,
  `reserveringsdatum` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`reservation_id`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `reservation_data`
--

LOCK TABLES `reservation_data` WRITE;
/*!40000 ALTER TABLE `reservation_data` DISABLE KEYS */;
INSERT INTO `reservation_data` VALUES (20,2,'Luxe Plaats','2023-12-20 08:05:00','2023-12-28 09:09:00','2023-12-18 09:59:08'),(21,3,'Luxe Plaats','2023-12-15 09:30:00','2023-12-28 09:30:00','2023-12-20 08:30:48'),(22,1,'Standaard Plaats','2023-12-20 10:03:00','2023-12-01 10:03:00','2023-12-20 09:03:29'),(23,1,'Standaard Plaats','2023-12-20 10:07:00','2023-12-20 10:07:00','2023-12-20 09:07:39'),(24,6,'Luxe Plaats','2024-01-10 02:24:00','2024-01-03 12:25:00','2024-01-09 08:23:24'),(25,7,'Camperplaats','2024-01-28 11:42:00','2024-02-05 11:42:00','2024-01-11 10:42:12'),(26,10,'Luxe Plaats','2024-02-25 11:47:00','2024-01-30 11:47:00','2024-01-11 10:47:42'),(27,1,'Standaard Plaats','2024-01-12 13:22:00','2024-01-19 13:22:00','2024-01-12 12:23:04'),(28,10,'Camperplaats','2024-01-12 12:01:00','2024-01-02 10:00:00','2024-01-15 10:06:12'),(29,1,'Standaard Plaats','2024-01-16 10:15:00','2024-01-19 10:15:00','2024-01-16 09:15:57'),(30,1,'Standaard Plaats','2024-01-16 10:15:00','2024-01-19 10:15:00','2024-01-16 09:19:31'),(31,1,'Standaard Plaats','2024-01-16 10:15:00','2024-01-19 10:15:00','2024-01-16 09:24:28'),(32,1,'Standaard Plaats','2024-01-16 10:15:00','2024-01-19 10:15:00','2024-01-16 09:29:31');
/*!40000 ALTER TABLE `reservation_data` ENABLE KEYS */;
UNLOCK TABLES;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_0900_ai_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
/*!50003 CREATE*/ /*!50017 DEFINER=`root`@`localhost`*/ /*!50003 TRIGGER `reservation_data_AFTER_INSERT` AFTER INSERT ON `reservation_data` FOR EACH ROW BEGIN
	INSERT INTO `customer_data` (`c_reservation_id`) VALUES (NEW.reservation_id);
END */;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-01-16 12:13:50
