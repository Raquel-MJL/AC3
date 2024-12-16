-- MariaDB dump 10.19  Distrib 10.4.32-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: Taller
-- ------------------------------------------------------
-- Server version	10.4.32-MariaDB

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
-- Current Database: `Taller`
--

CREATE DATABASE /*!32312 IF NOT EXISTS*/ `taller` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;

USE `Taller`;

--
-- Table structure for table `coches`
--

DROP TABLE IF EXISTS `coches`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `coches` (
  `cod_coche` varchar(10) NOT NULL,
  `Marca` varchar(40) DEFAULT NULL,
  `Modelo` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`cod_coche`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `coches`
--

LOCK TABLES `coches` WRITE;
/*!40000 ALTER TABLE `coches` DISABLE KEYS */;
INSERT INTO `coches` VALUES ('A-141','Seat','Toledo'),('A-240','Seat','Ibiza'),('A-380','Dacia','Sandero'),('A-550','Suzuki','Vitara'),('B-121','Opel','Corsa'),('B-125','Seat','Ibiza'),('Z-441','Ford','Fiesta');
/*!40000 ALTER TABLE `coches` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mecanicos`
--

DROP TABLE IF EXISTS `mecanicos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mecanicos` (
  `cod_mecanico` varchar(10) NOT NULL,
  `Nombre` varchar(50) DEFAULT NULL,
  `Especialidad` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`cod_mecanico`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mecanicos`
--

LOCK TABLES `mecanicos` WRITE;
/*!40000 ALTER TABLE `mecanicos` DISABLE KEYS */;
INSERT INTO `mecanicos` VALUES ('001','Ana','Chapista'),('002','Luis','Pintura'),('003','Juan','Electrónica');
/*!40000 ALTER TABLE `mecanicos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `reparaciones`
--

DROP TABLE IF EXISTS `reparaciones`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `reparaciones` (
  `cod_reparacion` int(11) NOT NULL,
  `cod_mecanico` varchar(10) NOT NULL,
  `cod_coche` varchar(10) NOT NULL,
  `fecha_inicio_reparacion` date DEFAULT NULL,
  `fecha_fin_reparacion` date DEFAULT NULL,
  `horas_reparacion` int(11) DEFAULT NULL CHECK (`horas_reparacion` >= 0),
  `total_factura` float(12,2) DEFAULT NULL CHECK (`total_factura` >= 0),
  PRIMARY KEY (`cod_reparacion`),
  KEY `FK_Reparaciones_Mecanicos` (`cod_mecanico`),
  KEY `FK_Reparaciones_Coches` (`cod_coche`),
  CONSTRAINT `FK_Reparaciones_Coches` FOREIGN KEY (`cod_coche`) REFERENCES `coches` (`cod_coche`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `FK_Reparaciones_Mecanicos` FOREIGN KEY (`cod_mecanico`) REFERENCES `mecanicos` (`cod_mecanico`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `CONSTRAINT_1` CHECK (`cod_reparacion` between 0 and 99999)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `reparaciones`
--

LOCK TABLES `reparaciones` WRITE;
/*!40000 ALTER TABLE `reparaciones` DISABLE KEYS */;
INSERT INTO `reparaciones` VALUES (1234,'001','A-141','2024-07-20','2024-07-23',10,260.50),(3402,'002','B-121','2024-07-24','2024-07-26',12,290.60),(3465,'001','A-240','2024-07-10','2024-07-12',12,340.50),(5563,'002','B-121','2024-07-26','2024-07-27',4,98.20),(7211,'003','Z-441','2024-07-27','2024-07-30',43,682.00),(7654,'002','A-380','2024-07-08','2024-07-09',5,180.00),(9283,'003','Z-441','2024-07-24','2024-07-30',57,530.50);
/*!40000 ALTER TABLE `reparaciones` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Temporary table structure for view `reparaciones_seat`
--

DROP TABLE IF EXISTS `reparaciones_seat`;
/*!50001 DROP VIEW IF EXISTS `reparaciones_seat`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE VIEW `reparaciones_seat` AS SELECT
 1 AS `nombre_mecanico`,
  1 AS `modelo_coche`,
  1 AS `fecha_inicio_reparacion`,
  1 AS `fecha_fin_reparacion` */;
SET character_set_client = @saved_cs_client;

--
-- Dumping routines for database 'Taller'
--

--
-- Current Database: `Taller`
--

USE `Taller`;

--
-- Final view structure for view `reparaciones_seat`
--

/*!50001 DROP VIEW IF EXISTS `reparaciones_seat`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8mb4 */;
/*!50001 SET character_set_results     = utf8mb4 */;
/*!50001 SET collation_connection      = utf8mb4_unicode_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `reparaciones_seat` AS select `m`.`Nombre` AS `nombre_mecanico`,`c`.`Modelo` AS `modelo_coche`,`r`.`fecha_inicio_reparacion` AS `fecha_inicio_reparacion`,`r`.`fecha_fin_reparacion` AS `fecha_fin_reparacion` from ((`reparaciones` `r` join `mecanicos` `m` on(`r`.`cod_mecanico` = `m`.`cod_mecanico`)) join `coches` `c` on(`r`.`cod_coche` = `c`.`cod_coche`)) where `c`.`Marca` = 'Seat' */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-12-12 12:53:20
