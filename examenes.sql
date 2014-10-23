/*
Navicat MySQL Data Transfer

Source Server         : ConexionRoot
Source Server Version : 50620
Source Host           : localhost:3306
Source Database       : examenes

Target Server Type    : MYSQL
Target Server Version : 50620
File Encoding         : 65001

Date: 2014-10-22 22:37:55
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
-- Records of examenes
-- ----------------------------
INSERT INTO `examenes` VALUES ('1', 'admin', '1', 'Abierto', '2014-10-09 12:34:21', '2014-10-09 12:34:21');
INSERT INTO `examenes` VALUES ('2', 'admin', '1', 'Abierto', '2014-10-09 12:34:21', '2014-10-09 12:34:21');
INSERT INTO `examenes` VALUES ('3', 'admin', '0', 'Abierto', '2014-10-09 15:35:40', '2014-10-09 22:57:25');
INSERT INTO `examenes` VALUES ('4', 'admin', '0', 'Abierto', '2014-10-09 15:35:40', '2014-10-16 11:42:18');
INSERT INTO `examenes` VALUES ('5', 'admin', '1', 'Abierto', '2010-10-10 00:00:00', '2010-10-10 00:00:00');
INSERT INTO `examenes` VALUES ('6', 'admin', '1', 'Abierto', '2010-10-10 00:00:00', '2010-10-10 00:00:00');
INSERT INTO `examenes` VALUES ('7', 'admin', '1', 'Abierto', '2010-10-10 00:00:00', '2010-10-10 00:00:00');
INSERT INTO `examenes` VALUES ('8', 'admin', '1', 'Abierto', '2010-10-10 00:00:00', '2010-10-10 00:00:00');
INSERT INTO `examenes` VALUES ('9', 'admin', '1', 'Abierto', '2010-10-10 00:00:00', '2010-10-10 00:00:00');
INSERT INTO `examenes` VALUES ('10', 'admin', '1', 'Abierto', '2010-10-10 00:00:00', '2011-11-11 00:00:00');
INSERT INTO `examenes` VALUES ('11', 'admin', '1', 'Abierto', '2010-10-10 00:00:00', '2011-11-11 00:00:00');
INSERT INTO `examenes` VALUES ('12', 'admin', '1', 'Abierto', '2010-10-10 00:00:00', '2011-11-11 00:00:00');

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
-- Records of preguntas
-- ----------------------------

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
-- Records of privilegios
-- ----------------------------

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
-- Records of respuestas
-- ----------------------------

-- ----------------------------
-- Table structure for usuarios
-- ----------------------------
DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE `usuarios` (
  `IDNICK` varchar(20) NOT NULL,
  `PASSWORD` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`IDNICK`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of usuarios
-- ----------------------------
INSERT INTO `usuarios` VALUES ('admin', '*4ACFE3202A5FF5CF467898FC58AAB1D615029441');
