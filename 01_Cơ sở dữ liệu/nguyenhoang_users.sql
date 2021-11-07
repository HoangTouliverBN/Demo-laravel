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
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_phanquyen` int unsigned NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`),
  KEY `users_id_phanquyen_foreign` (`id_phanquyen`),
  CONSTRAINT `users_id_phanquyen_foreign` FOREIGN KEY (`id_phanquyen`) REFERENCES `phanquyen` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (7,'Master','nguyenhoang23112000bn@gmail.com',NULL,'$2y$10$WNHvcCsm.oyfZSEQFpVO5Ofqg5mXHMs/raHK5LQ1pamavzuGqY88K',3,NULL,'2021-09-25 00:30:52','2021-10-31 04:23:00'),(9,'user','abc@gmail.com',NULL,'$2y$10$y/2/Kb5NKwX7vWldYMBgSeeHp4S4kRe.NKMLbvC/1VQg627nSGO1G',1,NULL,'2021-10-01 21:29:36','2021-10-01 21:29:36'),(10,'admin','cuhoang2000bn@gmail.com',NULL,'$2y$10$eNRoqPEuDXL.WWO4lX3lRuk8yzu6BGlSducRlkPOwTl6yF2BdfAuy',2,NULL,'2021-10-09 21:37:46','2021-10-31 05:07:18'),(11,'Hoang','hoanghanhbn123@yahoo.com',NULL,'$2y$10$xxy9DsHrZaK3CEU17zfAjexP/j7sTdCGxL1nIZZaHvV8OUfSX2b/K',1,NULL,'2021-11-01 10:22:08','2021-11-01 10:22:08'),(12,'Mon','anhduongbui2001@gmail.com',NULL,'$2y$10$2atUvHva7e7tHVRMofG73OxKRj241HW4xXtvWp2R8N2JM9o.d169a',1,NULL,'2021-11-02 20:57:14','2021-11-02 20:57:14'),(13,'Ánh Dương','monduong0709@gmail.com',NULL,'$2y$10$RCyfc01LbX9Ebrw1fWkKReOFXvGKOksr8IAf00OOTR6zUxnrNi/OK',1,NULL,'2021-11-02 20:57:43','2021-11-02 20:57:43'),(14,'Ánh Dương','buia@leagueing.edu.vn',NULL,'$2y$10$UTO65mf4cTQ7RA4QC4FyMOFjzdtbAuYnSgTWC4io34HvRVn0FMC2S',1,NULL,'2021-11-02 20:58:49','2021-11-02 20:58:49'),(15,'Anh Tiến','anhtienhd9x@gmail.com',NULL,'$2y$10$AIOHCQXG7zh5jvtn8H6ZouSCkFzvJRq5rGmZSR05eWsUJXBH5vK1m',1,NULL,'2021-11-02 20:59:13','2021-11-02 20:59:13'),(16,'A Tien','nguyenanhtienhd92@gmail.com',NULL,'$2y$10$ekXFOKYo/JNDEBvvU.XwPOdLHVZ0au3Oz42cH18buV08/j7YmmxbW',1,NULL,'2021-11-02 20:59:30','2021-11-02 20:59:30'),(17,'Ô Trống','blue.wind71311@gmail.com',NULL,'$2y$10$TCgUFwkI.d7DOI/rVHGdfuO6dHm113DVhhdkQWupWkQporYTGteVO',1,NULL,'2021-11-02 20:59:51','2021-11-02 20:59:51'),(18,'Hoàng','18d190196@svtmu.vn',NULL,'$2y$10$PygcpnrXqqi4JMjvf0lmX.77HiQjsTZVPix75tR7yHs31XvMaEgb2',1,NULL,'2021-11-02 21:00:47','2021-11-02 21:00:47');
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

-- Dump completed on 2021-11-04 17:26:30
