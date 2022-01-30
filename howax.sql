-- MariaDB dump 10.18  Distrib 10.4.17-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: howax
-- ------------------------------------------------------
-- Server version	10.4.17-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `berita`
--

DROP TABLE IF EXISTS `berita`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `berita` (
  `id_berita` int(11) NOT NULL AUTO_INCREMENT,
  `rilis` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `judul` varchar(255) DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL,
  `isi` longtext DEFAULT NULL,
  `view` int(11) DEFAULT 0,
  `kategori` varchar(255) DEFAULT 'semua',
  `kreator` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_berita`),
  UNIQUE KEY `judul` (`judul`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `berita`
--

LOCK TABLES `berita` WRITE;
/*!40000 ALTER TABLE `berita` DISABLE KEYS */;
INSERT INTO `berita` VALUES (1,'2022-01-30 16:57:15','Mengejoetkan, Ternyata Pemuda Pancasila Tidak Jelas!','pp.jpg','Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas nostrum tempora iure nisi praesentium, quasi quam. Repellendus itaque vel aliquid cum delectus, error, quasi deserunt necessitatibus neque nulla odit recusandae. Tempore numquam blanditiis, necessitatibus nostrum hic id officiis? Nisi veniam, fugiat sunt harum temporibus mollitia aperiam magni in soluta vero aliquid, officiis labore repellendus! Repudiandae obcaecati ratione cum hic recusandae perspiciatis. Quas, molestias fugit laborum blanditiis facilis voluptatem sunt saepe itaque at accusantium, repellat ipsam voluptatum dolor consectetur a, veniam temporibus ut suscipit. Exercitationem impedit fuga esse nisi animi provident et qui odit iste fugit voluptatum dolorum eum vero numquam rem omnis quod reiciendis deleniti deserunt ipsam, illo, aspernatur voluptatibus dolor. Vitae facere molestiae illo dolor numquam dicta ipsam, quo voluptatibus illum temporibus voluptas ratione labore optio quia in rem, consequatur laudantium mollitia nulla, ducimus officia! Deleniti, expedita excepturi possimus enim laborum sunt hic vero quos beatae repudiandae delectus cum a soluta accusantium corrupti. Temporibus, a velit nam commodi, doloribus qui voluptatum iste sunt rem nihil quia, laudantium atque. Illum delectus, minima quae modi impedit magnam quisquam eum dolore cupiditate veniam corporis totam dolor eaque esse blanditiis quibusdam quasi ipsam pariatur atque aliquam beatae culpa! Aut inventore rem harum nostrum facilis aspernatur deserunt nihil ad fugiat, incidunt, atque, accusantium tempora est minus eius itaque velit beatae ipsam esse ex quos odio ullam tempore? Quis iste provident, unde excepturi laborum repellat voluptatibus culpa. Voluptatibus, voluptates ab tenetur, excepturi sunt in accusantium vitae aspernatur totam praesentium hic dolorem. Dolores quidem quas incidunt nemo nostrum fuga eaque at ullam hic aliquid eos debitis tempore amet, porro ducimus consequatur repellat consectetur temporibus, et non id? Harum soluta accusantium aspernatur fuga at, officia ex pariatur tempore totam. Eum ipsa temporibus ab aperiam. Dolore velit at, sunt incidunt recusandae obcaecati magnam, beatae doloribus excepturi libero fugiat!',53432,'artis','Kokkuri Chan'),(2,'2022-01-30 17:46:20','Kyawh','lahngatur.png','Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas nostrum tempora iure nisi praesentium, quasi quam. Repellendus itaque vel aliquid cum delectus, error, quasi deserunt necessitatibus neque nulla odit recusandae. Tempore numquam blanditiis, necessitatibus nostrum hic id officiis? Nisi veniam, fugiat sunt harum temporibus mollitia aperiam magni in soluta vero aliquid, officiis labore repellendus! Repudiandae obcaecati ratione cum hic recusandae perspiciatis. Quas, molestias fugit laborum blanditiis facilis voluptatem sunt saepe itaque at accusantium, repellat ipsam voluptatum dolor consectetur a, veniam temporibus ut suscipit. Exercitationem impedit fuga esse nisi animi provident et qui odit iste fugit voluptatum dolorum eum vero numquam rem omnis quod reiciendis deleniti deserunt ipsam, illo, aspernatur voluptatibus dolor. Vitae facere molestiae illo dolor numquam dicta ipsam, quo voluptatibus illum temporibus voluptas ratione labore optio quia in rem, consequatur laudantium mollitia nulla, ducimus officia! Deleniti, expedita excepturi possimus enim laborum sunt hic vero quos beatae repudiandae delectus cum a soluta accusantium corrupti. Temporibus, a velit nam commodi, doloribus qui voluptatum iste sunt rem nihil quia, laudantium atque. Illum delectus, minima quae modi impedit magnam quisquam eum dolore cupiditate veniam corporis totam dolor eaque esse blanditiis quibusdam quasi ipsam pariatur atque aliquam beatae culpa! Aut inventore rem harum nostrum facilis aspernatur deserunt nihil ad fugiat, incidunt, atque, accusantium tempora est minus eius itaque velit beatae ipsam esse ex quos odio ullam tempore? Quis iste provident, unde excepturi laborum repellat voluptatibus culpa. Voluptatibus, voluptates ab tenetur, excepturi sunt in accusantium vitae aspernatur totam praesentium hic dolorem. Dolores quidem quas incidunt nemo nostrum fuga eaque at ullam hic aliquid eos debitis tempore amet, porro ducimus consequatur repellat consectetur temporibus, et non id? Harum soluta accusantium aspernatur fuga at, officia ex pariatur tempore totam. Eum ipsa temporibus ab aperiam. Dolore velit at, sunt incidunt recusandae obcaecati magnam, beatae doloribus excepturi libero fugiat!',5245347,'artis','Kokkuri Chan');
/*!40000 ALTER TABLE `berita` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `profile` varchar(255) DEFAULT 'kurumi.jpg',
  `nama` varchar(255) DEFAULT NULL,
  `bio` longtext DEFAULT 'No Bio you can see',
  `pass` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `reset` varchar(30) DEFAULT 'Kucing',
  `regist` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `try` int(1) DEFAULT 3,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'kurumi.jpg','Iqro Negoro','No Bio you can see','7e507024194fe6ab5fa7b7b4673a9f8378ee722be3b835485266462d8b0d4f57','iqronegoro0@gmail.com','kucing','2022-01-30 14:31:43',3),(3,'profile.png','Kokkuri Chan','Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas nostrum tempora iure nisi praesentium, quasi quam. Repellendus itaque vel aliquid cum delectus, error, quasi deserunt necessitatibus neque nulla odit recusandae. Tempore numquam blanditiis, necessitatibus nostrum hic id officiis? Nisi veniam, fugiat sunt harum temporibus mollitia aperiam magni in soluta vero aliquid, officiis labore repellendus! Repudiandae obcaecati ratione cum hic recusandae perspiciatis. Quas, molestias fugit laborum blanditiis facilis voluptatem sunt saepe itaque at accusantium, repellat ipsam voluptatum dolor consectetur a, veniam temporibus ut suscipit. Exercitationem impedit fuga esse nisi animi provident et qui odit iste fugit voluptatum dolorum eum vero numquam rem omnis quod reiciendis deleniti deserunt ipsam, illo, aspernatur voluptatibus dolor. Vitae facere molestiae illo dolor numquam dicta ipsam, quo voluptatibus illum temporibus voluptas ratione labore optio quia in rem, consequatur laudantium mollitia nulla, ducimus officia! Deleniti, expedita excepturi possimus enim laborum sunt hic vero quos beatae repudiandae delectus cum a soluta accusantium corrupti. Temporibus, a velit nam commodi, doloribus qui voluptatum iste sunt rem nihil quia, laudantium atque. Illum delectus, minima quae modi impedit magnam quisquam eum dolore cupiditate veniam corporis totam dolor eaque esse blanditiis quibusdam quasi ipsam pariatur atque aliquam beatae culpa! Aut inventore rem harum nostrum facilis aspernatur deserunt nihil ad fugiat, incidunt, atque, accusantium tempora est minus eius itaque velit beatae ipsam esse ex quos odio ullam tempore? Quis iste provident, unde excepturi laborum repellat voluptatibus culpa. Voluptatibus, voluptates ab tenetur, excepturi sunt in accusantium vitae aspernatur totam praesentium hic dolorem. Dolores quidem quas incidunt nemo nostrum fuga eaque at ullam hic aliquid eos debitis tempore amet, porro ducimus consequatur repellat consectetur temporibus, et non id? Harum soluta accusantium aspernatur fuga at, officia ex pariatur tempore totam. Eum ipsa temporibus ab aperiam. Dolore velit at, sunt incidunt recusandae obcaecati magnam, beatae doloribus excepturi libero fugiat!','12345678','kokkuri@gmail.com','Kucing','2022-01-30 16:07:08',3);
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

-- Dump completed on 2022-01-30 17:52:12
