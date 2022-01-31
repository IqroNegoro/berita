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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `berita`
--

LOCK TABLES `berita` WRITE;
/*!40000 ALTER TABLE `berita` DISABLE KEYS */;
INSERT INTO `berita` VALUES (1,'2022-01-31 21:18:25','Mengejutkan! Ternyata Kurumi Seperti Ini...','kurumi.jpg','LoLorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis temporibus similique nisi. Tempora quo totam magnam perferendis consectetur! Corporis nostrum a, deleniti reprehenderit in magni recusandae labore, adipisci laborum repudiandae doloremque voluptatem exercitationem? Optio velit ratione quo unde cum. Sunt atque esse totam sint necessitatibus ex eius ea ab, harum iusto autem fugit, laudantium blanditiis temporibus quaerat architecto distinctio pariatur tenetur! Natus magnam libero incidunt quidem tenetur! Distinctio consectetur fugit inventore beatae molestiae odit nisi, quisquam expedita illo harum nostrum nihil non minima similique. Aspernatur, neque atque, ut quam itaque numquam consequuntur soluta ab nemo reiciendis suscipit ipsam aut quisquam nesciunt assumenda dolor maxime quae corrupti corporis omnis totam tempora quia repellendus sed? Provident eaque eos nam fugit in, quasi excepturi perspiciatis blanditiis illum, minima, laudantium magnam harum ut illo nulla magni architecto possimus explicabo voluptatem omnis officia. Porro vel eos nemo culpa consequuntur quis laudantium, consectetur doloremque veniam sequi dolor deleniti corporis recusandae? Illo hic ad maxime quas qui, minima sint deserunt magni eius eligendi iste aliquid nisi obcaecati perspiciatis voluptatum, accusantium corporis facilis, vel nesciunt sed praesentium incidunt exercitationem quaerat! Eaque dolorem accusantium ab corrupti, repudiandae autem maiores quisquam eligendi nam voluptatem eius molestiae itaque voluptatibus vitae ipsam cupiditate quod, sint hic animi quam dicta explicabo voluptate quae ex. Ullam repellendus omnis libero tempore repellat aut cupiditate sequi reiciendis! Perspiciatis voluptatum unde accusamus maxime laudantium perferendis, consectetur omnis mollitia natus officiis qui! Repudiandae, porro quos? Maiores, nostrum? Dolorum ad rerum facere voluptatibus non omnis id voluptatem consequatur, minus molestiae, at nulla nesciunt sunt commodi odio doloribus enim laborum reprehenderit aut quos optio, quod explicabo numquam. Ab illo voluptatem quae natus animi tempora fugit dolore voluptas explicabo dignissimos, totam doloremque asperiores, sit ea! Ratione dolorem expedita quis, similique itaque non maxime quam labore ducimus dicta aperiam est dignissimos impedit?\n',4032125,'anime','Iqro Negoro');
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
  `profile` varchar(255) DEFAULT 'profile.png',
  `nama` varchar(255) DEFAULT NULL,
  `bio` longtext DEFAULT 'No Bio you can see',
  `pass` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `reset` varchar(30) DEFAULT 'Kucing',
  `regist` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `try` int(1) DEFAULT 3,
  PRIMARY KEY (`id`),
  UNIQUE KEY `nama` (`nama`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'profile.png','Pak Hafiizh','No Bio you can see','8ebd5956d41bdd80ab6a50135079e242192d62f1f6e1a760e1ad1bcda3752cbd','hafiizh@gmail.com','kucing','2022-01-31 20:21:39',3),(2,'profile.png','Iqro Negoro','No Bio you can see','7e507024194fe6ab5fa7b7b4673a9f8378ee722be3b835485266462d8b0d4f57','iqronegoro0@gmail.com','kucing','2022-01-31 20:40:18',3),(4,'profile.png','SaidunSaid','No Bio you can see','7bff32e246b369f3d479970f3c45073766573027d13e54e28e396695ecdf5df2','saidun@gmail.com','kucing','2022-01-31 20:54:38',3);
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

-- Dump completed on 2022-01-31 21:21:27
