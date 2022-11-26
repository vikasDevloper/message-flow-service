-- MySQL dump 10.13  Distrib 8.0.31, for Linux (x86_64)
--
-- Host: localhost    Database: app
-- ------------------------------------------------------
-- Server version	8.0.31-0ubuntu0.22.04.1

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
-- Table structure for table `messages`
--

DROP TABLE IF EXISTS `messages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `messages` (
  `id` int NOT NULL AUTO_INCREMENT,
  `sender_from` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sender_to` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `sender_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `messages`
--

LOCK TABLES `messages` WRITE;
/*!40000 ALTER TABLE `messages` DISABLE KEYS */;
INSERT INTO `messages` VALUES (1,'13341242-52325','1233123-41242141-412','Hi Vikas ','2022-11-22 03:27:40','2022-11-22 03:27:40','123-44-55'),(2,'010cc5dc-51ee-4da0-a5e3-9cd704fc9be6','8a7290c4-970d-4285-b18d-d62b581f2061','Hi! I am impressed with your painting, I want to propose more for it!','2022-11-26 03:11:17','2022-11-26 03:11:17','576-ssd8e-98788s'),(3,'8a7290c4-970d-4285-b18d-d62b581f2061','010cc5dc-51ee-4da0-a5e3-9cd704fc9be6','Wow, cool, how much?','2022-11-26 03:11:17','2022-11-26 03:11:17','576-ssd8e-98788s'),(4,'010cc5dc-51ee-4da0-a5e3-9cd704fc9be6','8a7290c4-970d-4285-b18d-d62b581f2061','Hi!, I want topropose 6000!','2022-11-26 16:15:01','2022-11-26 16:15:01','576-ssd8e-98788s'),(5,'8a7290c4-970d-4285-b18d-d62b581f2061','010cc5dc-51ee-4da0-a5e3-9cd704fc9be6','Wow, cool, need 7000','2022-11-26 16:15:01','2022-11-26 16:15:01','576-ssd8e-98788s'),(6,'010cc5dc-51ee-4da0-a5e3-9cd704fc9be6','8a7290c4-970d-4285-b18d-d62b581f2061','Hi!, I want topropose 6000!','2022-11-26 16:18:28','2022-11-26 16:18:28','576-ssd8e-98788s'),(7,'8a7290c4-970d-4285-b18d-d62b581f2061','010cc5dc-51ee-4da0-a5e3-9cd704fc9be6','Wow, cool, need 7000','2022-11-26 16:18:28','2022-11-26 16:18:28','576-ssd8e-98788s'),(8,'010cc5dc-51ee-4da0-a5e3-9cd704fc9be6','8a7290c4-970d-4285-b18d-d62b581f2061','Hi!, I want topropose 6000!','2022-11-26 16:24:01','2022-11-26 16:24:01','576-ssd8e-98788s'),(9,'8a7290c4-970d-4285-b18d-d62b581f2061','010cc5dc-51ee-4da0-a5e3-9cd704fc9be6','Wow, cool, need 7000','2022-11-26 16:24:01','2022-11-26 16:24:01','576-ssd8e-98788s'),(10,'010cc5dc-51ee-4da0-a5e3-9cd704fc9be6','8a7290c4-970d-4285-b18d-d62b581f2061','Hi!, I want topropose 6005$!','2022-11-26 16:32:34','2022-11-26 16:32:34','6381f24a6663397287000001'),(11,'8a7290c4-970d-4285-b18d-d62b581f2061','010cc5dc-51ee-4da0-a5e3-9cd704fc9be6','Wow, cool,no pls bid morethan 10000$','2022-11-26 16:32:34','2022-11-26 16:32:34','6381f24a6663397287000001');
/*!40000 ALTER TABLE `messages` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-11-27  1:43:15
