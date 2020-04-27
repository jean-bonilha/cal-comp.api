-- MySQL dump 10.13  Distrib 5.6.47, for Linux (x86_64)
--
-- Host: localhost    Database: default
-- ------------------------------------------------------
-- Server version	5.6.47

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
-- Table structure for table `DQC84`
--

DROP TABLE IF EXISTS `DQC84`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `DQC84` (
  `ID` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `MODEL` bigint(20) unsigned NOT NULL,
  `FAT_PART_NO` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `TOTAL_LOCATION` int(11) NOT NULL,
  `UPDATE_DT` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `CREATE_DT` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `dqc84_fat_part_no_unique` (`FAT_PART_NO`),
  KEY `dqc84_model_foreign` (`MODEL`),
  CONSTRAINT `dqc84_model_foreign` FOREIGN KEY (`MODEL`) REFERENCES `DQCMODEL` (`ID`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `DQC841`
--

DROP TABLE IF EXISTS `DQC841`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `DQC841` (
  `ID` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `FAT_PART_NO` bigint(20) unsigned NOT NULL,
  `PARTS_NO` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `UNT_USG` int(11) NOT NULL,
  `DESCRIPTION` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `REF_DESIGNATOR` longtext COLLATE utf8mb4_unicode_ci,
  `UPDATE_DT` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `CREATE_DT` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`ID`),
  KEY `dqc841_fat_part_no_foreign` (`FAT_PART_NO`),
  CONSTRAINT `dqc841_fat_part_no_foreign` FOREIGN KEY (`FAT_PART_NO`) REFERENCES `DQC84` (`ID`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `DQCMODEL`
--

DROP TABLE IF EXISTS `DQCMODEL`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `DQCMODEL` (
  `ID` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `MODEL` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `UPDATE_DT` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `CREATE_DT` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `dqcmodel_model_unique` (`MODEL`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `failed_jobs`
--
