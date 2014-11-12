/*
Navicat MySQL Data Transfer

Source Server         : ConexionRoot
Source Server Version : 50620
Source Host           : localhost:3306
Source Database       : examenes

Target Server Type    : MYSQL
Target Server Version : 50620
File Encoding         : 65001

Date: 2014-11-12 14:38:58
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for examenes
-- ----------------------------
DROP TABLE IF EXISTS `examenes`;
CREATE TABLE `examenes` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `IDNICK` varchar(20) DEFAULT NULL,
  `UNIDAD` int(11) NOT NULL,
  `ESTADO` varchar(20) DEFAULT NULL,
  `FECHAINICIO` datetime DEFAULT NULL,
  `FECHACIERRE` datetime DEFAULT NULL,
  PRIMARY KEY (`ID`),
  KEY `FK_REFERENCE_3` (`IDNICK`),
  CONSTRAINT `FK_REFERENCE_3` FOREIGN KEY (`IDNICK`) REFERENCES `usuarios` (`IDNICK`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for preguntas
-- ----------------------------
DROP TABLE IF EXISTS `preguntas`;
CREATE TABLE `preguntas` (
  `IDPRE` varchar(40) NOT NULL,
  `PREGUNTA` varchar(500) NOT NULL,
  `ID` int(11) NOT NULL,
  `TIPO` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`IDPRE`),
  KEY `FK_REFERENCE_5` (`ID`),
  CONSTRAINT `FK_REFERENCE_5` FOREIGN KEY (`ID`) REFERENCES `examenes` (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for privilegios
-- ----------------------------
DROP TABLE IF EXISTS `privilegios`;
CREATE TABLE `privilegios` (
  `IDPRIVILEGIO` varchar(30) NOT NULL,
  `IDNICK` varchar(20) DEFAULT NULL,
  `EXAMEN` varchar(4) DEFAULT NULL,
  `PREGUNTAS` varchar(4) DEFAULT NULL,
  `RESPUESTAS` varchar(4) DEFAULT NULL,
  PRIMARY KEY (`IDPRIVILEGIO`),
  KEY `FK_REFERENCE_4` (`IDNICK`),
  CONSTRAINT `FK_REFERENCE_4` FOREIGN KEY (`IDNICK`) REFERENCES `usuarios` (`IDNICK`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for respuestas
-- ----------------------------
DROP TABLE IF EXISTS `respuestas`;
CREATE TABLE `respuestas` (
  `IDRES` varchar(40) NOT NULL,
  `NUMERO` int(11) NOT NULL,
  `IDPRE` varchar(40) DEFAULT NULL,
  `RESPUESTA` varchar(400) DEFAULT NULL,
  `CORRECTA` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`IDRES`,`NUMERO`),
  KEY `FK_REFERENCE_6` (`IDPRE`),
  CONSTRAINT `FK_REFERENCE_6` FOREIGN KEY (`IDPRE`) REFERENCES `preguntas` (`IDPRE`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for usuarios
-- ----------------------------
DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE `usuarios` (
  `IDNICK` varchar(20) NOT NULL,
  `PASSWORD` varchar(500) DEFAULT NULL,
  `Foto` varchar(200) NOT NULL,
  PRIMARY KEY (`IDNICK`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- View structure for examenesabiertos
-- ----------------------------
DROP VIEW IF EXISTS `examenesabiertos`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER  VIEW `examenesabiertos` AS  ;
