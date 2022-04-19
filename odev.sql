-- MySQL dump 10.13  Distrib 8.0.28, for macos11 (x86_64)
--
-- Host: filmlovers.cvvdf4otwo3r.eu-central-1.rds.amazonaws.com    Database: odev
-- ------------------------------------------------------
-- Server version	8.0.28

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
SET @MYSQLDUMP_TEMP_LOG_BIN = @@SESSION.SQL_LOG_BIN;
SET @@SESSION.SQL_LOG_BIN= 0;

--
-- GTID state at the beginning of the backup 
--

SET @@GLOBAL.GTID_PURGED=/*!80000 '+'*/ '';

--
-- Table structure for table `anasayfa`
--

DROP TABLE IF EXISTS `anasayfa`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `anasayfa` (
  `anasayfa_id` int NOT NULL AUTO_INCREMENT,
  `f_baslik1` varchar(500) CHARACTER SET utf16 COLLATE utf16_turkish_ci NOT NULL,
  `f_baslik2` varchar(500) CHARACTER SET utf16 COLLATE utf16_turkish_ci NOT NULL,
  `f_baslik3` varchar(500) CHARACTER SET utf16 COLLATE utf16_turkish_ci NOT NULL,
  `f_baslik4` varchar(500) CHARACTER SET utf16 COLLATE utf16_turkish_ci NOT NULL,
  `d_baslik1` varchar(500) CHARACTER SET utf16 COLLATE utf16_turkish_ci NOT NULL,
  `d_baslik2` varchar(500) CHARACTER SET utf16 COLLATE utf16_turkish_ci NOT NULL,
  `d_baslik3` varchar(500) CHARACTER SET utf16 COLLATE utf16_turkish_ci NOT NULL,
  `d_baslik4` varchar(500) CHARACTER SET utf16 COLLATE utf16_turkish_ci NOT NULL,
  `m_baslik1` varchar(500) CHARACTER SET utf16 COLLATE utf16_turkish_ci NOT NULL,
  `m_baslik2` varchar(500) CHARACTER SET utf16 COLLATE utf16_turkish_ci NOT NULL,
  `m_baslik3` varchar(500) CHARACTER SET utf16 COLLATE utf16_turkish_ci NOT NULL,
  `m_baslik4` varchar(500) CHARACTER SET utf16 COLLATE utf16_turkish_ci NOT NULL,
  PRIMARY KEY (`anasayfa_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf16 COLLATE=utf16_turkish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `anasayfa`
--

LOCK TABLES `anasayfa` WRITE;
/*!40000 ALTER TABLE `anasayfa` DISABLE KEYS */;
INSERT INTO `anasayfa` VALUES (1,'IMBD\'YE Göre En İyi Türk Filmleri','Mutlaka İzlenmesi Gereken Başyapıt Filmler','IMBD\'ye Göre En iyi Biyografi Filmleri','En İyi Korku Filmleri','En İyi Yabancı Diziler','En Popüler Netflix Dizileri','En Beğenilen Bilim Kurgu Dizileri','IMBD\'ye GÖre En iyi Türk Dizileri','90\'lar Türkçe Pop Listesi','En Popüler Rap Şarkı Listesi','70\'li Yıllara Damga Vurmuş Rock Şarkılar','Bir Neslin Ergenlik Dönemine Damga Vuran Şarkılar');
/*!40000 ALTER TABLE `anasayfa` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `diziler`
--

DROP TABLE IF EXISTS `diziler`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `diziler` (
  `dizi_id` int NOT NULL AUTO_INCREMENT,
  `dizi_adi` varchar(45) DEFAULT NULL,
  `dizi_kategori` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`dizi_id`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `diziler`
--

LOCK TABLES `diziler` WRITE;
/*!40000 ALTER TABLE `diziler` DISABLE KEYS */;
INSERT INTO `diziler` VALUES (1,'Sherlock','yabanci_dizi'),(2,'Game of Thrones','yabanci_dizi'),(3,'La Casa De Papel','yabanci_dizi'),(4,'Black Mirror','yabanci_dizi'),(5,'Simpsons','yabanci_dizi'),(7,'The Breaking Bad','netflix'),(8,'Our Planet','netflix'),(9,'Rick And Morty','netflix'),(10,'When They See Us','netflix'),(11,'Narcos ve Narcos Mexico','netflix'),(12,'Firefly','bilim_kurgu'),(13,'Stranger Things','bilim_kurgu'),(14,'Battlestar Galactica','bilim_kurgu'),(15,'Westworld','bilim_kurgu'),(16,'Dark','bilim_kurgu'),(17,'Şahsiyet','turk_dizi'),(19,'Leyla ile Mecnun','turk_dizi'),(20,'S&uuml;per Baba','turk_dizi'),(21,'Behzat &Ccedil;.: Bir Ankara Polisiyesi','turk_dizi'),(22,'7 Numara','turk_dizi'),(23,'Game of Thrones','filmlovers_okur'),(24,'How I Met Your Mother','filmlovers_okur'),(25,'Prison Break','filmlovers_okur'),(26,'Friends','filmlovers_okur'),(27,'Supernatural','filmlovers_okur'),(28,'The Act','carpici_dizi'),(29,'Orange Is The New Black','carpici_dizi'),(30,'Mindhunter','carpici_dizi'),(31,'Narcos','carpici_dizi'),(32,'The Crown','carpici_dizi');
/*!40000 ALTER TABLE `diziler` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `filmler`
--

DROP TABLE IF EXISTS `filmler`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `filmler` (
  `film_id` int NOT NULL AUTO_INCREMENT,
  `film_adi` varchar(45) DEFAULT NULL,
  `film_kategori` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`film_id`)
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `filmler`
--

LOCK TABLES `filmler` WRITE;
/*!40000 ALTER TABLE `filmler` DISABLE KEYS */;
INSERT INTO `filmler` VALUES (1,'Hababam Sınıfı','turk_filmleri'),(2,'Tosun Paşa','turk_filmleri'),(3,'Hababam Sınıfı Sınıfta Kaldı','turk_filmleri'),(4,'Süt Kardeşler','turk_filmleri'),(5,'Hababam Sınıfı Uyanır','turk_filmleri'),(6,'Şaban Oğlu Şaban','turk_filmleri'),(7,'Selvi Boylu Al Yazmalı','turk_filmleri'),(8,'Züğürt Ağa','turk_filmleri'),(9,'Kibar Feyzo','turk_filmleri'),(10,'Çöpçüler Kralı','turk_filmleri'),(15,'Schinlerin Listesi','basyapit_film'),(16,'Piyanist','basyapit_film'),(17,'12 Kızgın Adam','basyapit_film'),(18,'3 Ahmak','basyapit_film'),(19,'Her &Ccedil;ocuk &Ouml;zeldir','basyapit_film'),(20,'Patch Adams','biyografi_filmi'),(21,'Temple Grandin','biyografi_filmi'),(22,'Para Avcısı','biyografi_filmi'),(23,'&Ouml;zg&uuml;rl&uuml;k Yolu','biyografi_filmi'),(24,'Zafere H&uuml;cum','biyografi_filmi'),(25,'Let The Right One In','korku_filmi'),(27,'A Quiet Place','korku_filmi'),(28,'Get Out','korku_filmi'),(29,'The Jonjuring','korku_filmi'),(30,'Train to Busan','korku_filmi'),(31,'Son Ultimatom','aksiyon'),(32,'IP Man','aksiyon'),(33,'Ada','aksiyon'),(34,'Rambo','aksiyon'),(35,'Kiss Kiss Bang Bang','aksiyon'),(36,'Yenilmezler: Sonsuzluk Savaşı','marvel'),(37,'Galaksinin Koruyucuları','marvel'),(38,'Logan','marvel'),(39,'X-Man: Ge&ccedil;miş G&uuml;nler','marvel'),(40,'Yenilmezler','marvel');
/*!40000 ALTER TABLE `filmler` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `iletisim`
--

DROP TABLE IF EXISTS `iletisim`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `iletisim` (
  `iletisim_id` int NOT NULL AUTO_INCREMENT,
  `isim` varchar(100) CHARACTER SET utf16 COLLATE utf16_turkish_ci NOT NULL,
  `mail` varchar(300) CHARACTER SET utf16 COLLATE utf16_turkish_ci NOT NULL,
  `telefon` varchar(20) CHARACTER SET utf16 COLLATE utf16_turkish_ci NOT NULL,
  `konu` varchar(100) CHARACTER SET utf16 COLLATE utf16_turkish_ci NOT NULL,
  `mesaj` text CHARACTER SET utf16 COLLATE utf16_turkish_ci NOT NULL,
  `tarih` date NOT NULL,
  PRIMARY KEY (`iletisim_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf16 COLLATE=utf16_turkish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `iletisim`
--

LOCK TABLES `iletisim` WRITE;
/*!40000 ALTER TABLE `iletisim` DISABLE KEYS */;
/*!40000 ALTER TABLE `iletisim` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sarkilar`
--

DROP TABLE IF EXISTS `sarkilar`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `sarkilar` (
  `sarki_id` int NOT NULL AUTO_INCREMENT,
  `sarki_adi` varchar(45) DEFAULT NULL,
  `sarki_kategori` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`sarki_id`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sarkilar`
--

LOCK TABLES `sarkilar` WRITE;
/*!40000 ALTER TABLE `sarkilar` DISABLE KEYS */;
INSERT INTO `sarkilar` VALUES (1,'Ajda Pekkan - Oyalama Beni','turkce_pop'),(2,'Kerim Tekin - Kar Beyaz','turkce_pop'),(3,'Serdar Orta&ccedil; - Karabiberim','turkce_pop'),(4,'Sertab Erener - Aldırma Deli G&ouml;nl&uuml;m','turkce_pop'),(5,'Levent Y&uuml;ksel - Medcezir','turkce_pop'),(6,'Şanışer - Susamam','rap_sarki'),(7,'Tepki - Ghetto','rap_sarki'),(8,'G&uuml;nay Aksoy - Her Yer Karanlık','rap_sarki'),(9,'Şanışer - Aynı Sokaklarda','rap_sarki'),(10,'Kubilay Kar&ccedil;a - Duman','rap_sarki'),(11,'AC/DC - Back in Black','rock_sarki'),(12,'Pink Floyd - Another Brick In The Wall','rock_sarki'),(13,'Dire Straits - Sultans Of Swing','rock_sarki'),(14,'Queen - Bohemian Rhapsody','rock_sarki'),(15,'Led Zepellin - Stairway to Heaven','rock_sarki'),(16,'İrem - Hayalet Sevgilim','ergenlik'),(17,'G&ouml;k&ccedil;e Kırgız - Kalbime G&ouml;mer','ergenlik'),(18,'Emre Aydın - Afili Yanlızlık','ergenlik'),(19,'&Ccedil;ilekeş - Y.O.K','ergenlik'),(20,'Grup Koridor - Senin O G&ouml;zlerin Varya','ergenlik'),(21,'Camila Cabello ft. DaBaby - My Oh My','hit2020'),(22,'Static - Further Up','hit2020'),(25,'Dua Lipa - Dont Start Now','hit2020'),(26,'Trevor Daniel - Falling','hit2020'),(27,'Oryane, Sean Paul - Love Mi Ladies','hit2020'),(28,'Massage Song - Yoga Relax','huzur_sarki'),(29,'Mindfulness - Vinyasa','huzur_sarki'),(30,'Calm Piano - Baby Lullaby','huzur_sarki'),(31,'Power Yoga - Yoga Relax','huzur_sarki'),(32,'Kundali - Tantric Sleep','huzur_sarki');
/*!40000 ALTER TABLE `sarkilar` ENABLE KEYS */;
UNLOCK TABLES;
SET @@SESSION.SQL_LOG_BIN = @MYSQLDUMP_TEMP_LOG_BIN;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-04-19 12:58:55
