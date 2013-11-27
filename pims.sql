-- MySQL dump 10.13  Distrib 5.5.32, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: pims
-- ------------------------------------------------------
-- Server version	5.5.32-0ubuntu0.12.04.1

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
-- Table structure for table `Billing`
--

DROP TABLE IF EXISTS `Billing`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Billing` (
  `billingID` bigint unsigned zerofill NOT NULL AUTO_INCREMENT,
  `patientID` char(8) COLLATE utf8_unicode_ci DEFAULT NULL,
  `visitID` char(16) COLLATE utf8_unicode_ci DEFAULT NULL,
  `amountPaid` decimal(9,2) NOT NULL DEFAULT '0.00',
  `amountPaidByInsurance` decimal(9,2) NOT NULL DEFAULT '0.00',
  PRIMARY KEY (`billingID`),
  KEY `patientID` (`patientID`),
  KEY `visitID` (`visitID`),
  CONSTRAINT `Billing_ibfk_1` FOREIGN KEY (`patientID`) REFERENCES `Patient` (`patientID`) ON DELETE NO ACTION ON UPDATE CASCADE,
  CONSTRAINT `Billing_ibfk_2` FOREIGN KEY (`visitID`) REFERENCES `Visit` (`visitID`) ON DELETE NO ACTION ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Billing`
--

LOCK TABLES `Billing` WRITE;
/*!40000 ALTER TABLE `Billing` DISABLE KEYS */;
/*!40000 ALTER TABLE `Billing` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Charges`
--

DROP TABLE IF EXISTS `Charges`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Charges` (
  `chargeID` bigint(20) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `billingID` bigint unsigned zerofill NOT NULL,
  `item` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `amount` decimal(8,2) NOT NULL,
  PRIMARY KEY (`chargeID`),
  KEY `billingID` (`billingID`),
  CONSTRAINT `Charges_ibfk_1` FOREIGN KEY (`billingID`) REFERENCES `Billing` (`billingID`) ON DELETE NO ACTION ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Charges`
--

LOCK TABLES `Charges` WRITE;
/*!40000 ALTER TABLE `Charges` DISABLE KEYS */;
/*!40000 ALTER TABLE `Charges` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `DocNotes`
--

DROP TABLE IF EXISTS `DocNotes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `DocNotes` (
  `noteID` bigint(20) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `patientID` char(8) COLLATE utf8_unicode_ci NOT NULL,
  `visitID` char(16) COLLATE utf8_unicode_ci NOT NULL,
  `note` varchar(1024) COLLATE utf8_unicode_ci NOT NULL,
  `doctorID` char(7) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`noteID`),
  KEY `patientID` (`patientID`),
  KEY `visitID` (`visitID`),
  KEY `doctorID` (`doctorID`),
  CONSTRAINT `DocNotes_ibfk_1` FOREIGN KEY (`patientID`) REFERENCES `Patient` (`patientID`) ON DELETE NO ACTION ON UPDATE CASCADE,
  CONSTRAINT `DocNotes_ibfk_2` FOREIGN KEY (`visitID`) REFERENCES `Visit` (`visitID`) ON DELETE NO ACTION ON UPDATE CASCADE,
  CONSTRAINT `DocNotes_ibfk_3` FOREIGN KEY (`doctorID`) REFERENCES `Doctor` (`doctorID`) ON DELETE NO ACTION ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `DocNotes`
--

LOCK TABLES `DocNotes` WRITE;
/*!40000 ALTER TABLE `DocNotes` DISABLE KEYS */;
/*!40000 ALTER TABLE `DocNotes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Doctor`
--

DROP TABLE IF EXISTS `Doctor`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Doctor` (
  `doctorID` char(7) COLLATE utf8_unicode_ci NOT NULL,
  `firstName` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `middleName` varchar(32) COLLATE utf8_unicode_ci DEFAULT NULL,
  `lastName` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `suffix` varchar(16) COLLATE utf8_unicode_ci DEFAULT NULL,
  `specialization` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `loginName` char(7) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`doctorID`),
  KEY `loginName` (`loginName`),
  CONSTRAINT `Doctor_ibfk_1` FOREIGN KEY (`loginName`) REFERENCES `Login` (`loginName`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Doctor`
--

LOCK TABLES `Doctor` WRITE;
/*!40000 ALTER TABLE `Doctor` DISABLE KEYS */;
/*!40000 ALTER TABLE `Doctor` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Insurance`
--

DROP TABLE IF EXISTS `Insurance`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Insurance` (
  `insuranceID` bigint(20) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `patientID` char(8) COLLATE utf8_unicode_ci NOT NULL,
  `provider` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `accountNum` varchar(16) COLLATE utf8_unicode_ci NOT NULL,
  `groupNum` varchar(8) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`insuranceID`),
  KEY `Insurance_ibfk_1` (`patientID`),
  CONSTRAINT `Insurance_ibfk_1` FOREIGN KEY (`patientID`) REFERENCES `Patient` (`patientID`) ON DELETE NO ACTION ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Insurance`
--

LOCK TABLES `Insurance` WRITE;
/*!40000 ALTER TABLE `Insurance` DISABLE KEYS */;
/*!40000 ALTER TABLE `Insurance` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Login`
--

DROP TABLE IF EXISTS `Login`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Login` (
  `loginName` char(7) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `userType` char(1) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`loginName`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Login`
--

LOCK TABLES `Login` WRITE;
/*!40000 ALTER TABLE `Login` DISABLE KEYS */;
/*!40000 ALTER TABLE `Login` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `MedicNotes`
--

DROP TABLE IF EXISTS `MedicNotes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `MedicNotes` (
  `noteID` bigint(20) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `patientID` char(8) COLLATE utf8_unicode_ci NOT NULL,
  `visitID` char(16) COLLATE utf8_unicode_ci NOT NULL,
  `note` varchar(1024) COLLATE utf8_unicode_ci NOT NULL,
  `medicID` char(7) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`noteID`),
  KEY `patientID` (`patientID`),
  KEY `visitID` (`visitID`),
  KEY `medicID` (`medicID`),
  CONSTRAINT `MedicNotes_ibfk_1` FOREIGN KEY (`patientID`) REFERENCES `Patient` (`patientID`) ON DELETE NO ACTION ON UPDATE CASCADE,
  CONSTRAINT `MedicNotes_ibfk_2` FOREIGN KEY (`visitID`) REFERENCES `Visit` (`visitID`) ON DELETE NO ACTION ON UPDATE CASCADE,
  CONSTRAINT `MedicNotes_ibfk_3` FOREIGN KEY (`medicID`) REFERENCES `MedicalStaff` (`medicID`) ON DELETE NO ACTION ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `MedicNotes`
--

LOCK TABLES `MedicNotes` WRITE;
/*!40000 ALTER TABLE `MedicNotes` DISABLE KEYS */;
/*!40000 ALTER TABLE `MedicNotes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `MedicalStaff`
--

DROP TABLE IF EXISTS `MedicalStaff`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `MedicalStaff` (
  `medicID` char(7) COLLATE utf8_unicode_ci NOT NULL,
  `firstName` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `middleName` varchar(32) COLLATE utf8_unicode_ci DEFAULT NULL,
  `lastName` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `suffix` varchar(16) COLLATE utf8_unicode_ci DEFAULT NULL,
  `type` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `loginName` char(7) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`medicID`),
  KEY `loginName` (`loginName`),
  CONSTRAINT `MedicalStaff_ibfk_1` FOREIGN KEY (`loginName`) REFERENCES `Login` (`loginName`) ON DELETE NO ACTION ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `MedicalStaff`
--

LOCK TABLES `MedicalStaff` WRITE;
/*!40000 ALTER TABLE `MedicalStaff` DISABLE KEYS */;
/*!40000 ALTER TABLE `MedicalStaff` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `OfficeStaff`
--

DROP TABLE IF EXISTS `OfficeStaff`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `OfficeStaff` (
  `officeID` char(7) COLLATE utf8_unicode_ci NOT NULL,
  `firstName` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `middleName` varchar(32) COLLATE utf8_unicode_ci DEFAULT NULL,
  `lastName` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `suffix` varchar(16) COLLATE utf8_unicode_ci DEFAULT NULL,
  `type` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `loginName` char(7) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`officeID`),
  KEY `loginName` (`loginName`),
  CONSTRAINT `OfficeStaff_ibfk_1` FOREIGN KEY (`loginName`) REFERENCES `Login` (`loginName`) ON DELETE NO ACTION ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `OfficeStaff`
--

LOCK TABLES `OfficeStaff` WRITE;
/*!40000 ALTER TABLE `OfficeStaff` DISABLE KEYS */;
/*!40000 ALTER TABLE `OfficeStaff` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Patient`
--

DROP TABLE IF EXISTS `Patient`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Patient` (
  `patientID` char(8) COLLATE utf8_unicode_ci NOT NULL,
  `firstName` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `middleName` varchar(32) COLLATE utf8_unicode_ci DEFAULT NULL,
  `lastName` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `suffix` varchar(16) COLLATE utf8_unicode_ci DEFAULT NULL,
  `DOB` date NOT NULL,
  `street` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `city` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `state` char(2) COLLATE utf8_unicode_ci DEFAULT NULL,
  `zipCode` char(5) COLLATE utf8_unicode_ci NOT NULL,
  `homePhone` char(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `workPhone` varchar(14) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cellPhone` char(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `contact1Name` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `contact1Num` varchar(14) COLLATE utf8_unicode_ci NOT NULL,
  `contact2Name` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `contact2Num` varchar(14) COLLATE utf8_unicode_ci NOT NULL,
  `familyDoctor` varchar(128) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`patientID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Patient`
--

LOCK TABLES `Patient` WRITE;
/*!40000 ALTER TABLE `Patient` DISABLE KEYS */;
/*!40000 ALTER TABLE `Patient` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Prescription`
--

DROP TABLE IF EXISTS `Prescription`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Prescription` (
  `noteID` bigint(20) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `patientID` char(8) COLLATE utf8_unicode_ci NOT NULL,
  `visitID` char(16) COLLATE utf8_unicode_ci NOT NULL,
  `prescriptions` varchar(1024) COLLATE utf8_unicode_ci NOT NULL,
  `doctorID` char(7) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`noteID`),
  KEY `patientID` (`patientID`),
  KEY `visitID` (`visitID`),
  KEY `doctorID` (`doctorID`),
  CONSTRAINT `Prescription_ibfk_1` FOREIGN KEY (`patientID`) REFERENCES `Patient` (`patientID`) ON DELETE NO ACTION ON UPDATE CASCADE,
  CONSTRAINT `Prescription_ibfk_2` FOREIGN KEY (`visitID`) REFERENCES `Visit` (`visitID`) ON DELETE NO ACTION ON UPDATE CASCADE,
  CONSTRAINT `Prescription_ibfk_3` FOREIGN KEY (`doctorID`) REFERENCES `Doctor` (`doctorID`) ON DELETE NO ACTION ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Prescription`
--

LOCK TABLES `Prescription` WRITE;
/*!40000 ALTER TABLE `Prescription` DISABLE KEYS */;
/*!40000 ALTER TABLE `Prescription` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Procedures`
--

DROP TABLE IF EXISTS `Procedures`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Procedures` (
  `noteID` bigint(20) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `patientID` char(8) COLLATE utf8_unicode_ci NOT NULL,
  `visitID` char(16) COLLATE utf8_unicode_ci NOT NULL,
  `procedures` varchar(1024) COLLATE utf8_unicode_ci NOT NULL,
  `doctorID` char(7) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`noteID`),
  KEY `patientID` (`patientID`),
  KEY `visitID` (`visitID`),
  KEY `doctorID` (`doctorID`),
  CONSTRAINT `Procedures_ibfk_1` FOREIGN KEY (`patientID`) REFERENCES `Patient` (`patientID`) ON DELETE NO ACTION ON UPDATE CASCADE,
  CONSTRAINT `Procedures_ibfk_2` FOREIGN KEY (`visitID`) REFERENCES `Visit` (`visitID`) ON DELETE NO ACTION ON UPDATE CASCADE,
  CONSTRAINT `Procedures_ibfk_3` FOREIGN KEY (`doctorID`) REFERENCES `Doctor` (`doctorID`) ON DELETE NO ACTION ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Procedures`
--

LOCK TABLES `Procedures` WRITE;
/*!40000 ALTER TABLE `Procedures` DISABLE KEYS */;
/*!40000 ALTER TABLE `Procedures` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Visit`
--

DROP TABLE IF EXISTS `Visit`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Visit` (
  `visitID` char(16) COLLATE utf8_unicode_ci NOT NULL,
  `patientID` char(8) COLLATE utf8_unicode_ci NOT NULL,
  `admitDate` date NOT NULL,
  `dischargeDate` date DEFAULT NULL,
  `admitReason` varchar(512) COLLATE utf8_unicode_ci NOT NULL,
  `facility` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `floor` smallint(6) NOT NULL,
  `roomNum` smallint(6) NOT NULL,
  `bedNum` smallint(6) DEFAULT NULL,
  `visitors` varchar(512) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`visitID`),
  UNIQUE KEY `visitID` (`visitID`),
  KEY `patientID` (`patientID`),
  CONSTRAINT `Visit_ibfk_1` FOREIGN KEY (`patientID`) REFERENCES `Patient` (`patientID`) ON DELETE NO ACTION ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Visit`
--

LOCK TABLES `Visit` WRITE;
/*!40000 ALTER TABLE `Visit` DISABLE KEYS */;
/*!40000 ALTER TABLE `Visit` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Volunteer`
--

DROP TABLE IF EXISTS `Volunteer`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Volunteer` (
  `volunteerID` char(7) COLLATE utf8_unicode_ci NOT NULL,
  `firstName` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `middleName` varchar(32) COLLATE utf8_unicode_ci DEFAULT NULL,
  `lastName` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `suffix` varchar(16) COLLATE utf8_unicode_ci DEFAULT NULL,
  `loginName` char(7) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`volunteerID`),
  KEY `loginName` (`loginName`),
  CONSTRAINT `Volunteer_ibfk_1` FOREIGN KEY (`loginName`) REFERENCES `Login` (`loginName`) ON DELETE NO ACTION ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Volunteer`
--

LOCK TABLES `Volunteer` WRITE;
/*!40000 ALTER TABLE `Volunteer` DISABLE KEYS */;
/*!40000 ALTER TABLE `Volunteer` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2013-10-25 23:37:12
