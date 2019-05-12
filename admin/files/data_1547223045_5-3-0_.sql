-- MySQL dump 10.16  Distrib 10.1.23-MariaDB, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: wingduell2
-- ------------------------------------------------------
-- Server version	10.1.23-MariaDB-9+deb9u1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Dumping data for table `Antwort`
--

LOCK TABLES `Antwort` WRITE;
/*!40000 ALTER TABLE `Antwort` DISABLE KEYS */;
INSERT  IGNORE INTO `Antwort` (`m_oid`, `c_ts`, `m_ts`, `Antworttext`, `korrekt`, `to_Frage`, `ts`) VALUES (3,1547139341,1547139341,'Schätter',0,1,NULL),(4,1547139373,1547139373,'Gohout',1,1,NULL),(5,1547139418,1547139418,'Schnell',0,1,NULL),(6,1547139445,1547139445,'Dittmann',0,1,NULL),(7,1547199410,1547199410,'Elektronisches Schlagzeug',0,4,NULL),(8,1547199466,1547199466,'Element einer Programmiersprache',0,4,NULL),(9,1547199559,1547199559,'Eindeutige Handlungsvorschrift',1,4,NULL),(10,1547199801,1547199801,'Komplizierte Problemstellung',0,4,NULL),(11,1547200355,1547200355,'Schätter',1,2,NULL),(12,1547200362,1547216136,'Schnell',0,2,NULL),(13,1547200368,1547200368,'Binder',0,2,NULL),(14,1547200393,1547200393,'Kölmel',0,2,NULL),(15,1547214736,1547214736,'2257',NULL,43,NULL),(16,1547214787,1547214787,'1154',NULL,43,NULL),(17,1547214800,1547214800,'1254',NULL,43,NULL),(18,1547214819,1547214819,'1244',NULL,43,NULL),(19,1547216507,1547216507,'1943',0,42,NULL),(20,1547216511,1547216511,'1944',0,42,NULL),(21,1547216516,1547216516,'1945',1,42,NULL),(22,1547216520,1547216520,'1946',0,42,NULL),(23,1547216559,1547216568,'In der Nordstadt',1,16,NULL),(24,1547216610,1547216610,'Nahe der Autobahnauffahrt West',0,16,NULL),(25,1547216629,1547216629,'Die FH ist auf dem Wartberg gebaut',0,16,NULL),(26,1547216643,1547216643,'nicht in Pforzheim',0,16,NULL),(27,1547216709,1547216709,'gar nicht',1,44,NULL),(28,1547216758,1547216758,'Mit einem speziellen Schlüsselsymbol',0,44,NULL),(29,1547216804,1547216804,'Einfach mit einem Schlüsselnamen',0,44,NULL),(30,1547216820,1547216820,'Mit dem festen Feld m_oid',0,44,NULL),(31,1547216933,1547216933,'Programmiersprache',0,46,NULL),(32,1547216940,1547216940,'Auszeichnungssprache',1,46,NULL),(33,1547216984,1547217116,'alte, nicht mehr verwendete Technologie',0,46,NULL),(34,1547217109,1547217109,'Empfehlung zur Strukturierung von Software',0,46,NULL),(35,1547217334,1547217334,'Seitenlänge * ½&Sqrt;3',0,45,NULL),(36,1547217491,1547217491,'a²+b²',0,45,NULL),(37,1547217542,1547217542,'½*(a+b)',0,45,NULL),(38,1547217552,1547217552,'Seitenlänge * &Sqrt;2',1,45,NULL),(39,1547217656,1547217656,'doppelte',0,47,NULL),(40,1547217661,1547217661,'vierfache',0,47,NULL),(41,1547217667,1547217667,'8-fache',1,47,NULL),(42,1547217672,1547217672,'16-fache',0,47,NULL),(43,1547217761,1547217761,'8',0,48,NULL),(44,1547217766,1547217766,'10',0,48,NULL),(45,1547217769,1547217769,'12',1,48,NULL),(46,1547217779,1547217779,'15',0,48,NULL),(47,1547217877,1547217877,'20',0,49,NULL),(48,1547217895,1547217895,'16',0,49,NULL),(49,1547217899,1547217908,'24',1,49,NULL),(50,1547217904,1547217904,'32',0,49,NULL),(51,1547218061,1547218061,'3',0,50,NULL),(52,1547218063,1547218063,'4',0,50,NULL),(53,1547218066,1547218066,'5',1,50,NULL),(54,1547218069,1547218069,'6',0,50,NULL),(55,1547218143,1547218143,'Stadtmitte',0,51,NULL),(56,1547218159,1547218159,'Oststadt',0,51,NULL),(57,1547218165,1547218165,'Nordstadt',1,51,NULL),(58,1547218177,1547218177,'Wilferdinger Höhe',0,51,NULL),(59,1547218210,1547218210,'eine Szenebar am Bahnhof',0,52,NULL),(60,1547218230,1547218230,'ein Jazzclub in Brötzingen',1,52,NULL),(61,1547218245,1547218245,'Ein Restaurant am Schlossberg',0,52,NULL),(62,1547218277,1547218277,'Eine Pizzeria am Sedansplatz',0,52,NULL),(63,1547218385,1547218385,'am Schlossberg',1,53,NULL),(64,1547218406,1547218406,'direkt an der Nagold',0,53,NULL),(65,1547218413,1547218413,'direkt an der Enz',0,53,NULL),(66,1547218483,1547218483,'am Stadtrand',0,53,NULL);
/*!40000 ALTER TABLE `Antwort` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `Frage`
--

LOCK TABLES `Frage` WRITE;
/*!40000 ALTER TABLE `Frage` DISABLE KEYS */;
INSERT  IGNORE INTO `Frage` (`m_oid`, `c_ts`, `m_ts`, `beschreibung`, `Kategorie`, `ts`) VALUES (1,NULL,1547137287,'Welcher Prof unterrichtet Mathe',3,'2019-01-10 16:21:27'),(2,NULL,1547208662,'Welcher Professor hat ein Rastatter Kennzeichen',2,'2019-01-11 12:11:02'),(4,NULL,NULL,'Was ist ein Algorithmus',0,'2019-01-10 12:44:09'),(16,1547124354,1547124522,'Wo liegt der Wartberg',3,'2019-01-10 12:48:42'),(42,1547132767,1547216538,'Wann fand der Bombenangriff auf Pforzheim statt',3,'2019-01-11 14:22:18'),(43,1547132778,1547214698,'22x57',5,'2019-01-11 13:51:38'),(44,1547132800,1547216700,'Wie werden  Primärschlüssel im UML-Modell angegeben',0,'2019-01-11 14:25:00'),(45,1547132843,1547217255,'Die Diagonale eines Quadrates berechnet sich aus',5,'2019-01-11 14:34:16'),(46,1547132860,1547217126,'HTML ist eine',0,'2019-01-11 14:32:06'),(47,1547132865,1547217678,'Ein Würfel mit doppelter Kantenlänge hat das _________ Volumen',5,'2019-01-11 14:41:18'),(48,1547133076,1547217797,'Wie viele Credits gibt es für die Thesis',6,'2019-01-11 14:43:17'),(49,1547133105,1547217938,'Wie viele  Credits bekommt man für Vertiefungsfächer insgesamt',6,'2019-01-11 14:45:39'),(50,1547133113,1547217974,'In welchem Semester findet in der Regel das Praxissemester statt',6,'2019-01-11 14:46:14'),(51,1547133207,1547218137,'Das Rosenroth befindet sich in der',4,'2019-01-11 14:48:57'),(52,1547133222,1547218292,'Das Domicile ist',4,'2019-01-11 14:51:32'),(53,1547133245,1547218438,'Das Lehners liegt',4,'2019-01-11 14:53:58');
/*!40000 ALTER TABLE `Frage` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `KategorieT`
--

LOCK TABLES `KategorieT` WRITE;
/*!40000 ALTER TABLE `KategorieT` DISABLE KEYS */;
INSERT  IGNORE INTO `KategorieT` (`myval`, `codes`, `valActive`, `rno`, `ts`) VALUES ('IT',0,1,0,'2019-01-09 13:44:36'),('Controlling',1,1,1,'2019-01-09 13:44:36'),('Professoren',2,1,2,'2019-01-09 13:44:36'),('Pforzheim',3,1,3,'2019-01-09 13:44:36'),('Kneipen',4,1,4,'2019-01-09 13:44:36'),('Mathematik',5,1,5,'2019-01-09 13:44:36'),('SPO',6,1,6,'2019-01-09 13:44:36');
/*!40000 ALTER TABLE `KategorieT` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `ResultT`
--

LOCK TABLES `ResultT` WRITE;
/*!40000 ALTER TABLE `ResultT` DISABLE KEYS */;
INSERT  IGNORE INTO `ResultT` (`myval`, `codes`, `valActive`, `rno`, `ts`) VALUES ('offen',0,1,0,'2019-01-09 13:44:36'),('falsch',1,1,1,'2019-01-09 13:44:36'),('richtig',2,1,2,'2019-01-09 13:44:36');
/*!40000 ALTER TABLE `ResultT` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `Runde`
--

LOCK TABLES `Runde` WRITE;
/*!40000 ALTER TABLE `Runde` DISABLE KEYS */;
/*!40000 ALTER TABLE `Runde` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `Spiel`
--

LOCK TABLES `Spiel` WRITE;
/*!40000 ALTER TABLE `Spiel` DISABLE KEYS */;
/*!40000 ALTER TABLE `Spiel` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `StatusT`
--

LOCK TABLES `StatusT` WRITE;
/*!40000 ALTER TABLE `StatusT` DISABLE KEYS */;
INSERT  IGNORE INTO `StatusT` (`myval`, `codes`, `valActive`, `rno`, `ts`) VALUES ('erstellt',0,1,0,'2019-01-09 13:44:36'),('gestartet',1,1,1,'2019-01-09 13:44:36'),('beendet',2,1,2,'2019-01-09 13:44:36');
/*!40000 ALTER TABLE `StatusT` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `User`
--

LOCK TABLES `User` WRITE;
/*!40000 ALTER TABLE `User` DISABLE KEYS */;
INSERT  IGNORE INTO `User` (`m_oid`, `c_ts`, `m_ts`, `nachname`, `vorname`, `kennung`, `passwort`, `gruppe`, `rating`, `nickname`, `bild`, `ts`) VALUES (1,1,1359615962,'Nippa','Markus','nippa','098f6bcd4621d373cade4e832627b4f6',1,NULL,'nippa',NULL,'2019-01-11 16:06:34'),(2,2,1359615962,'Schätter','Alfred','schaetter','098f6bcd4621d373cade4e832627b4f6',2,NULL,'schaetter',NULL,'2019-01-11 16:06:42'),(9,1547221357,1547221357,'Schmidt','Stefan','schmidt@hs-pforzheim.de','098f6bcd4621d373cade4e832627b4f6',1,23,'schmiddy',NULL,'2019-01-11 15:43:45'),(10,1547222485,1547222485,'Schmidt','Stefan','stefan.schmidt@hs-pforzhe','098f6bcd4621d373cade4e832627b4f6',1,NULL,'schmiddy80',NULL,'2019-01-11 16:01:25');
/*!40000 ALTER TABLE `User` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-01-11 17:10:45
