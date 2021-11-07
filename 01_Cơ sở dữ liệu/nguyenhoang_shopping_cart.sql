-- MySQL dump 10.13  Distrib 8.0.26, for Win64 (x86_64)
--
-- Host: localhost    Database: nguyenhoang
-- ------------------------------------------------------
-- Server version	8.0.26

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `shopping_cart`
--

DROP TABLE IF EXISTS `shopping_cart`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `shopping_cart` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint unsigned NOT NULL,
  `sach_id` int unsigned NOT NULL,
  `state` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `so_luong` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `shopping_cart_user_id_foreign` (`user_id`),
  KEY `shopping_cart_sach_id_foreign` (`sach_id`),
  CONSTRAINT `shopping_cart_sach_id_foreign` FOREIGN KEY (`sach_id`) REFERENCES `sach` (`STT`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `shopping_cart_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `shopping_cart`
--

LOCK TABLES `shopping_cart` WRITE;
/*!40000 ALTER TABLE `shopping_cart` DISABLE KEYS */;
INSERT INTO `shopping_cart` VALUES (25,'cuhoang2000bn@gmail.com',10,13,25,'2021-10-29 13:17:04','2021-10-29 13:20:23',4),(26,'nguyenhoang23112000bn@gmail.com',7,12,26,'2021-11-02 21:05:26','2021-11-02 21:05:38',1),(27,'nguyenhoang23112000bn@gmail.com',7,18,27,'2021-11-02 21:05:30','2021-11-02 21:05:38',2),(28,'buia@leagueing.edu.vn',14,13,28,'2021-11-02 21:05:56','2021-11-02 21:06:14',1),(29,'buia@leagueing.edu.vn',14,14,29,'2021-11-02 21:06:01','2021-11-02 21:06:14',1),(30,'buia@leagueing.edu.vn',14,17,30,'2021-11-02 21:06:05','2021-11-02 21:06:14',1),(31,'18d190196@svtmu.vn',18,11,31,'2021-11-02 21:06:47','2021-11-02 21:07:05',1),(32,'18d190196@svtmu.vn',18,16,32,'2021-11-02 21:06:51','2021-11-02 21:07:05',1),(33,'18d190196@svtmu.vn',18,18,33,'2021-11-02 21:06:56','2021-11-02 21:07:05',1),(34,'buia@leagueing.edu.vn',14,15,NULL,'2021-11-03 22:58:04','2021-11-03 22:58:04',NULL);
/*!40000 ALTER TABLE `shopping_cart` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-11-04 17:26:30
