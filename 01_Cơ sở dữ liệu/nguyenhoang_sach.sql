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
-- Table structure for table `sach`
--

DROP TABLE IF EXISTS `sach`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `sach` (
  `STT` int unsigned NOT NULL AUTO_INCREMENT,
  `MS` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `TenSach` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `TacGia` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `NSB` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `SoLuong` int NOT NULL,
  `DonGia` int NOT NULL,
  `TheLoai` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `AnhSP` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Id_TheLoai` int unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`STT`),
  KEY `sach_id_theloai_foreign` (`Id_TheLoai`),
  CONSTRAINT `sach_id_theloai_foreign` FOREIGN KEY (`Id_TheLoai`) REFERENCES `theloaisach` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sach`
--

LOCK TABLES `sach` WRITE;
/*!40000 ALTER TABLE `sach` DISABLE KEYS */;
INSERT INTO `sach` VALUES (7,'a12s21ds','Giết con chim nhại','Harper Lee','HarperCollins',30,103000,'Văn học','Mockingbirdfirst.jfif',1,'2021-10-23 18:28:34','2021-10-23 18:51:38'),(8,'asd1f','Bố già (The Godfather)','Mario Puzo','Không có',20,77000,'Tiểu thuyết','2763091e1fc1e79fbed0_1d5f05aeaaf942f58da69a32156093c8_master.jpg',3,'2021-10-23 18:38:54','2021-10-23 18:38:54'),(9,'sqdnd12','The Great Gatsby','F. Scott Fitzgerald','Charles Scribner\'s Sons',10,40000,'Văn học','The_Great_Gatsby_cover_1925_(1).jpg',1,'2021-10-23 18:56:55','2021-10-23 18:56:55'),(10,'a12sd','Chuông nguyện hồn ai','Ernest Hemingway','Charles Scribner\'s Sons',15,110000,'Văn học','Chuong_nguyen_hon_ai.jpg',1,'2021-10-23 18:59:15','2021-10-23 18:59:15'),(11,'as35g','Kiêu hãnh và định kiến (Pride and Prejudice)','Jane Austen','T. Egerton, Whitehall',9,64600,'Văn học','Kiêu_hãnh_và_định_kiến_(sách).jpg',1,'2021-10-23 19:01:53','2021-11-02 21:07:05'),(12,'ad23','Trăm năm cô đơn (Cien años de soledad)','Gabriel García Márquez','Sudamericana, Buenos Aires, Argentina',19,90000,'Văn học','4CAZJVZ8.jpg',1,'2021-10-23 19:12:56','2021-11-02 21:05:38'),(13,'skqm12','Chúa Ruồi','William Golding','Chưa có',15,74000,'Văn học','download.png',1,'2021-10-23 19:15:57','2021-11-02 21:06:14'),(14,'jhs234','Đắc nhân tâm','Dale Carnegie','Simon and Schuster (1936)',29,70000,'Tâm lý','download (1).png',2,'2021-10-23 21:02:12','2021-11-02 21:06:14'),(15,'sjeugm','How Psychology Works - Hiểu Hết Về Tâm Lý Học','Jo Hemmings','Chưa có',10,225000,'Tâm lý','cb34637573525a998596b58d6939411e.jpg',2,'2021-10-23 21:44:12','2021-10-23 21:44:12'),(16,'sskqx','Tư duy nhanh và chậm','Daniel Kahneman','Chưa có',9,234000,'Tâm lý','6deec49282e3416f38b46e57d1ffd79f.jpg',2,'2021-10-23 22:03:26','2021-11-02 21:07:05'),(17,'sdqwc','Thế giới phẳng (The World is Flat)','Thomas L. Friedman','Nhà xuất bản Trẻ',9,235000,'Khác','5d5c0a6482df2238aaa0fec24357abaf.jpg',3,'2021-10-23 22:10:36','2021-11-02 21:06:14'),(18,'sace2c','Phishing for Phools: The Economics of Manipulation and Deception','George A. Akerlof,  Robert J. Shiller','Chưa có',7,245000,'Khác','51X0Xts8v4L._SX342_SY445_QL70_ML2_.jpg',3,'2021-10-23 22:12:41','2021-11-02 21:07:05');
/*!40000 ALTER TABLE `sach` ENABLE KEYS */;
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
