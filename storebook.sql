-- MySQL dump 10.13  Distrib 8.0.35, for Linux (x86_64)
--
-- Host: localhost    Database: storebook
-- ------------------------------------------------------
-- Server version	8.0.35-0ubuntu0.22.04.1

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
-- Table structure for table `books`
--

DROP TABLE IF EXISTS `books`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `books` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `title` varchar(100) DEFAULT NULL,
  `description` text,
  `price` double DEFAULT NULL,
  `discount` double DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `books`
--

LOCK TABLES `books` WRITE;
/*!40000 ALTER TABLE `books` DISABLE KEYS */;
INSERT INTO `books` VALUES (1,'The Lord Of The Kings',NULL,14.99,7.99,'assets/img/book-1.png',NULL,NULL,NULL),(2,'Simple & Minimalist',NULL,14.99,7.99,'assets/img/book-2.png',NULL,NULL,NULL),(3,'Muted Poster',NULL,14.99,7.99,'assets/img/book-3.png',NULL,NULL,NULL),(4,'Pouring Dreams',NULL,14.99,7.99,'assets/img/book-4.png',NULL,NULL,NULL),(5,'Customize Your Autumn Clothes',NULL,14.99,7.99,'assets/img/book-5.png',NULL,NULL,NULL),(6,'Designed For Work',NULL,14.99,7.99,'assets/img/book-6.png',NULL,NULL,NULL),(7,'Plant  Tree  For The Future',NULL,14.99,7.99,'assets/img/book-7.png',NULL,NULL,NULL),(8,'Modern Abstract Poster',NULL,14.99,7.99,'assets/img/book-8.png',NULL,NULL,NULL),(9,'Bird Park',NULL,14.99,7.99,'assets/img/book-9.png',NULL,NULL,NULL),(10,'Memories Of The Sword',NULL,14.99,7.99,'assets/img/book-10.png',NULL,NULL,NULL);
/*!40000 ALTER TABLE `books` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `testimoni`
--

DROP TABLE IF EXISTS `testimoni`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `testimoni` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `description` text,
  `image` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `testimoni`
--

LOCK TABLES `testimoni` WRITE;
/*!40000 ALTER TABLE `testimoni` DISABLE KEYS */;
INSERT INTO `testimoni` VALUES (1,'Iqbal Fadhlurrahman Huda','The best website to buy books, the purchase\n                           is very easy to make and has great discounts.','assets/img/testimonial-perfil-1.png',NULL,NULL,NULL),(2,'Muhammad Al Fadjri',' The best website to buy books, the purchase\n                           is very easy to make and has great discounts.','assets/img/testimonial-perfil-2.png',NULL,NULL,NULL),(3,'Alvin Cahyo Nugroho','The best website to buy books, the purchase\n                           is very easy to make and has great discounts.','assets/img/testimonial-perfil-3.png',NULL,NULL,NULL),(4,'Habib Jayadi','The best website to buy books, the purchase\n                           is very easy to make and has great discounts.','assets/img/testimonial-perfil-4.png',NULL,NULL,NULL);
/*!40000 ALTER TABLE `testimoni` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'storebook'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-12-13  7:18:16
