-- MySQL dump 10.13  Distrib 5.6.26, for Win32 (x86)
--
-- Host: localhost    Database: jemma
-- ------------------------------------------------------
-- Server version	5.6.26

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `emp`
--

DROP TABLE IF EXISTS `emp`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `emp` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(80) NOT NULL,
  `last_name` varchar(80) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `doj` date NOT NULL,
  `dob` date NOT NULL,
  `role` varchar(80) NOT NULL,
  `personal_email` varchar(255) NOT NULL,
  `cforms` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `emp`
--

LOCK TABLES `emp` WRITE;
/*!40000 ALTER TABLE `emp` DISABLE KEYS */;
/*!40000 ALTER TABLE `emp` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `emp_addr`
--

DROP TABLE IF EXISTS `emp_addr`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `emp_addr` (
  `p_street` varchar(255) NOT NULL,
  `p_city` varchar(80) NOT NULL,
  `p_state` varchar(80) NOT NULL,
  `p_pin_code` int(11) NOT NULL,
  `c_street` varchar(255) NOT NULL,
  `c_city` varchar(80) NOT NULL,
  `c_state` varchar(80) NOT NULL,
  `c_pin_code` int(11) NOT NULL,
  `e_name` varchar(80) NOT NULL,
  `e_number` bigint(20) NOT NULL,
  `relation` varchar(80) NOT NULL,
  `emp_id` bigint(20) NOT NULL,
  KEY `emp_id` (`emp_id`),
  CONSTRAINT `emp_addr_ibfk_1` FOREIGN KEY (`emp_id`) REFERENCES `emp` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `emp_addr`
--

LOCK TABLES `emp_addr` WRITE;
/*!40000 ALTER TABLE `emp_addr` DISABLE KEYS */;
/*!40000 ALTER TABLE `emp_addr` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `emp_bank`
--

DROP TABLE IF EXISTS `emp_bank`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `emp_bank` (
  `account_name` varchar(80) NOT NULL,
  `bank_name` varchar(80) NOT NULL,
  `account_num` bigint(20) NOT NULL,
  `ifsc` varchar(255) NOT NULL,
  `pan` varchar(255) NOT NULL,
  `adhar` varchar(255) NOT NULL,
  `emp_id` bigint(20) NOT NULL,
  KEY `emp_id` (`emp_id`),
  CONSTRAINT `emp_bank_ibfk_1` FOREIGN KEY (`emp_id`) REFERENCES `emp` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `emp_bank`
--

LOCK TABLES `emp_bank` WRITE;
/*!40000 ALTER TABLE `emp_bank` DISABLE KEYS */;
/*!40000 ALTER TABLE `emp_bank` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `emp_docs`
--

DROP TABLE IF EXISTS `emp_docs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `emp_docs` (
  `profile` varchar(255) NOT NULL,
  `high_school` varchar(255) NOT NULL,
  `intermediate` varchar(255) NOT NULL,
  `degree` varchar(255) NOT NULL,
  `pan` varchar(255) NOT NULL,
  `adhar` varchar(255) NOT NULL,
  `passport` varchar(255) NOT NULL,
  `emp_id` bigint(20) NOT NULL,
  KEY `emp_id` (`emp_id`),
  CONSTRAINT `emp_docs_ibfk_1` FOREIGN KEY (`emp_id`) REFERENCES `emp` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `emp_docs`
--

LOCK TABLES `emp_docs` WRITE;
/*!40000 ALTER TABLE `emp_docs` DISABLE KEYS */;
/*!40000 ALTER TABLE `emp_docs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `emp_edu`
--

DROP TABLE IF EXISTS `emp_edu`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `emp_edu` (
  `degree` varchar(80) NOT NULL,
  `college` varchar(255) NOT NULL,
  `emp_id` bigint(20) NOT NULL,
  KEY `emp_id` (`emp_id`),
  CONSTRAINT `emp_edu_ibfk_1` FOREIGN KEY (`emp_id`) REFERENCES `emp` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `emp_edu`
--

LOCK TABLES `emp_edu` WRITE;
/*!40000 ALTER TABLE `emp_edu` DISABLE KEYS */;
/*!40000 ALTER TABLE `emp_edu` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `emp_handle`
--

DROP TABLE IF EXISTS `emp_handle`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `emp_handle` (
  `linkedin` varchar(255) NOT NULL,
  `twitter` varchar(255) NOT NULL,
  `skype` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `emp_id` bigint(20) NOT NULL,
  KEY `emp_id` (`emp_id`),
  CONSTRAINT `emp_handle_ibfk_1` FOREIGN KEY (`emp_id`) REFERENCES `emp` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `emp_handle`
--

LOCK TABLES `emp_handle` WRITE;
/*!40000 ALTER TABLE `emp_handle` DISABLE KEYS */;
/*!40000 ALTER TABLE `emp_handle` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-06-06 12:41:25
