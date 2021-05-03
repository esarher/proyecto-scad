/*
SQLyog Ultimate v11.11 (64 bit)
MySQL - 5.5.5-10.4.14-MariaDB : Database - bd_proyecto
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`bd_proyecto` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `bd_proyecto`;

/*Table structure for table `asistencia` */

DROP TABLE IF EXISTS `asistencia`;

CREATE TABLE `asistencia` (
  `id_asistencia` int(100) NOT NULL AUTO_INCREMENT,
  `datosbasico` int(100) DEFAULT NULL,
  `datosprograma` int(100) DEFAULT NULL,
  `fecha_asistencia` date DEFAULT NULL,
  PRIMARY KEY (`id_asistencia`),
  KEY `fk_datosbasico1` (`datosbasico`),
  KEY `fk_datosprograma1` (`datosprograma`),
  CONSTRAINT `fk_datosbasico1` FOREIGN KEY (`datosbasico`) REFERENCES `datos_basicos` (`id_db`),
  CONSTRAINT `fk_datosprograma1` FOREIGN KEY (`datosprograma`) REFERENCES `datos_programa` (`id_progra`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

/*Data for the table `asistencia` */

LOCK TABLES `asistencia` WRITE;

insert  into `asistencia`(`id_asistencia`,`datosbasico`,`datosprograma`,`fecha_asistencia`) values (2,106,91,'2021-04-22'),(3,109,91,'2021-04-22');

UNLOCK TABLES;

/*Table structure for table `centro_formacion` */

DROP TABLE IF EXISTS `centro_formacion`;

CREATE TABLE `centro_formacion` (
  `id_centro` int(100) NOT NULL AUTO_INCREMENT,
  `nombre_centro` char(100) DEFAULT NULL,
  `direccion_centro` char(50) DEFAULT NULL,
  `lugar_centro` char(50) DEFAULT NULL,
  `telefono_centro` char(15) DEFAULT NULL,
  `mail_centro` char(30) DEFAULT NULL,
  PRIMARY KEY (`id_centro`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

/*Data for the table `centro_formacion` */

LOCK TABLES `centro_formacion` WRITE;

insert  into `centro_formacion`(`id_centro`,`nombre_centro`,`direccion_centro`,`lugar_centro`,`telefono_centro`,`mail_centro`) values (2,'Centro Biotecnológico del Caribe - CBC','Kilómetro 7 Vía a La Paz','Valledupar-César','(5) 5654701','servicioalciudadano@sena.edu.c'),(3,'Centro de Operación y Mantenimiento Minero - COMM','Kra 19 calles 15 y 15','Valledupar-César','(5) 5654701','servicioalciudadano@sena.edu.c'),(4,'Centro Agroempresarial','Km 1 Vía Bucaramanga','Aguachica-César','(5) 5654701','servicioalciudadano@sena.edu.c');

UNLOCK TABLES;

/*Table structure for table `correo_usuario` */

DROP TABLE IF EXISTS `correo_usuario`;

CREATE TABLE `correo_usuario` (
  `id_correo` int(200) NOT NULL AUTO_INCREMENT,
  `nombre_correo` char(50) DEFAULT NULL,
  `contraseña` char(8) DEFAULT NULL,
  PRIMARY KEY (`id_correo`)
) ENGINE=InnoDB AUTO_INCREMENT=91 DEFAULT CHARSET=utf8mb4;

/*Data for the table `correo_usuario` */

LOCK TABLES `correo_usuario` WRITE;

insert  into `correo_usuario`(`id_correo`,`nombre_correo`,`contraseña`) values (87,'mariatorres@gmail.com','Maria123'),(88,'pedroperez@gmail.com','pedro123'),(89,'karinameza@gmail.com','karina12'),(90,'luisatorres@gmail.com','luisa123');

UNLOCK TABLES;

/*Table structure for table `datos_basicos` */

DROP TABLE IF EXISTS `datos_basicos`;

CREATE TABLE `datos_basicos` (
  `id_db` int(100) NOT NULL AUTO_INCREMENT,
  `tipoid_db` char(4) DEFAULT NULL,
  `numdoc_db` char(20) DEFAULT NULL,
  `nomb_db` char(30) DEFAULT NULL,
  `ape_db` char(30) DEFAULT NULL,
  `cel_db` char(15) DEFAULT NULL,
  `mail_db` int(30) DEFAULT NULL,
  `id_tipousuario` int(20) DEFAULT NULL,
  `genero_db` char(10) DEFAULT NULL,
  `centro_deformacion` int(10) DEFAULT NULL,
  PRIMARY KEY (`id_db`),
  KEY `fk_correousu` (`mail_db`),
  KEY `fk_tip_usuario` (`id_tipousuario`),
  KEY `fk_centrodeformacion` (`centro_deformacion`),
  CONSTRAINT `fk_centrodeformacion` FOREIGN KEY (`centro_deformacion`) REFERENCES `centro_formacion` (`id_centro`),
  CONSTRAINT `fk_correousu` FOREIGN KEY (`mail_db`) REFERENCES `correo_usuario` (`id_correo`),
  CONSTRAINT `fk_tip_usuario` FOREIGN KEY (`id_tipousuario`) REFERENCES `tipos_usuarios` (`id_usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=110 DEFAULT CHARSET=utf8mb4;

/*Data for the table `datos_basicos` */

LOCK TABLES `datos_basicos` WRITE;

insert  into `datos_basicos`(`id_db`,`tipoid_db`,`numdoc_db`,`nomb_db`,`ape_db`,`cel_db`,`mail_db`,`id_tipousuario`,`genero_db`,`centro_deformacion`) values (106,'CC','1065384251','Maria del Pilar','Torres Pertuz','55555555',87,2,'Femenino',2),(107,'CC','49254114','Pedro','perez Ortiz','77777777',88,1,'Masculino',NULL),(108,'CC','5684135212','Karina','meza','56565565',89,1,'Femenino',NULL),(109,'CC','891215342','luisa','torres diaz','888888888',90,2,'Femenino',2);

UNLOCK TABLES;

/*Table structure for table `datos_programa` */

DROP TABLE IF EXISTS `datos_programa`;

CREATE TABLE `datos_programa` (
  `id_progra` int(100) NOT NULL AUTO_INCREMENT,
  `nombre_progra` char(50) DEFAULT NULL,
  `tipo_progra` char(50) DEFAULT NULL,
  `num_ficha` int(15) DEFAULT NULL,
  `id_datosbas` int(20) DEFAULT NULL,
  PRIMARY KEY (`id_progra`),
  KEY `fk_crud_aprendices` (`nombre_progra`),
  KEY `fk_datosba` (`id_datosbas`),
  CONSTRAINT `fk_datosba` FOREIGN KEY (`id_datosbas`) REFERENCES `datos_basicos` (`id_db`)
) ENGINE=InnoDB AUTO_INCREMENT=95 DEFAULT CHARSET=utf8mb4;

/*Data for the table `datos_programa` */

LOCK TABLES `datos_programa` WRITE;

insert  into `datos_programa`(`id_progra`,`nombre_progra`,`tipo_progra`,`num_ficha`,`id_datosbas`) values (91,'2','2',1962737,106),(92,'2','2',1962737,107),(93,'2','2',1962737,108),(94,'2','2',1962737,109);

UNLOCK TABLES;

/*Table structure for table `fichas` */

DROP TABLE IF EXISTS `fichas`;

CREATE TABLE `fichas` (
  `num_fichas` int(20) NOT NULL AUTO_INCREMENT,
  `tipo_prog` int(11) DEFAULT NULL,
  PRIMARY KEY (`num_fichas`),
  KEY `fk_progra` (`tipo_prog`),
  CONSTRAINT `fk_progra` FOREIGN KEY (`tipo_prog`) REFERENCES `programas` (`id_programas`)
) ENGINE=InnoDB AUTO_INCREMENT=2085924 DEFAULT CHARSET=utf8mb4;

/*Data for the table `fichas` */

LOCK TABLES `fichas` WRITE;

insert  into `fichas`(`num_fichas`,`tipo_prog`) values (2085923,1),(1962737,2),(2017853,3);

UNLOCK TABLES;

/*Table structure for table `programas` */

DROP TABLE IF EXISTS `programas`;

CREATE TABLE `programas` (
  `id_programas` int(10) NOT NULL AUTO_INCREMENT,
  `nombre_pro` char(30) DEFAULT NULL,
  `tipo_pro` int(10) DEFAULT NULL,
  PRIMARY KEY (`id_programas`),
  KEY `fk_tipospro` (`tipo_pro`),
  CONSTRAINT `fk_tipospro` FOREIGN KEY (`tipo_pro`) REFERENCES `tipos_programas` (`id_tip_programas`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

/*Data for the table `programas` */

LOCK TABLES `programas` WRITE;

insert  into `programas`(`id_programas`,`nombre_pro`,`tipo_pro`) values (1,'Sistemas',1),(2,'ADSI',2),(3,'Ganadería',1),(4,'Emprendimiento',4);

UNLOCK TABLES;

/*Table structure for table `tipo_observacion` */

DROP TABLE IF EXISTS `tipo_observacion`;

CREATE TABLE `tipo_observacion` (
  `id_ob_tipo` int(50) NOT NULL AUTO_INCREMENT,
  `obser_tipo` char(30) DEFAULT NULL,
  `motivo_obser` char(250) DEFAULT NULL,
  PRIMARY KEY (`id_ob_tipo`),
  CONSTRAINT `fk_obser_usuario` FOREIGN KEY (`id_ob_tipo`) REFERENCES `tipos_usuarios` (`id_usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tipo_observacion` */

LOCK TABLES `tipo_observacion` WRITE;

UNLOCK TABLES;

/*Table structure for table `tipo_per` */

DROP TABLE IF EXISTS `tipo_per`;

CREATE TABLE `tipo_per` (
  `id_per` int(20) NOT NULL AUTO_INCREMENT,
  `nomb_per` char(80) DEFAULT NULL,
  PRIMARY KEY (`id_per`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tipo_per` */

LOCK TABLES `tipo_per` WRITE;

insert  into `tipo_per`(`id_per`,`nomb_per`) values (1,'Llegar tarde'),(2,'Salir temprano');

UNLOCK TABLES;

/*Table structure for table `tipo_permiso` */

DROP TABLE IF EXISTS `tipo_permiso`;

CREATE TABLE `tipo_permiso` (
  `id_tipoperm` int(50) NOT NULL AUTO_INCREMENT,
  `autoriza_permiso` char(30) DEFAULT NULL,
  `motivo_permiso` char(250) DEFAULT NULL,
  `id_dat_basic` int(30) DEFAULT NULL,
  `id_tipoper` int(30) DEFAULT NULL,
  `fecha` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_tipoperm`),
  KEY `fk_dato_basico` (`id_dat_basic`),
  KEY `fk_tipo_per` (`id_tipoper`),
  CONSTRAINT `fk_dato_basico` FOREIGN KEY (`id_dat_basic`) REFERENCES `datos_basicos` (`id_db`),
  CONSTRAINT `fk_tipo_per` FOREIGN KEY (`id_tipoper`) REFERENCES `tipo_per` (`id_per`)
) ENGINE=InnoDB AUTO_INCREMENT=63 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tipo_permiso` */

LOCK TABLES `tipo_permiso` WRITE;

insert  into `tipo_permiso`(`id_tipoperm`,`autoriza_permiso`,`motivo_permiso`,`id_dat_basic`,`id_tipoper`,`fecha`) values (61,'107','Buenos días, el dia de hoy no puedo asisitir por cita medica',106,2,'2021-04-22 09:18:22'),(62,'108','Buenos dias, el dia de hoy debo salir un poco mas temprano por motivos medicos',109,1,'2021-04-22 10:03:37');

UNLOCK TABLES;

/*Table structure for table `tipos_programas` */

DROP TABLE IF EXISTS `tipos_programas`;

CREATE TABLE `tipos_programas` (
  `id_tip_programas` int(30) NOT NULL,
  `nomb_tip_pro` char(30) DEFAULT NULL,
  PRIMARY KEY (`id_tip_programas`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `tipos_programas` */

LOCK TABLES `tipos_programas` WRITE;

insert  into `tipos_programas`(`id_tip_programas`,`nomb_tip_pro`) values (1,'Tecnico'),(2,'Tecnologo'),(3,'Curso Corto'),(4,'Curso Virtual');

UNLOCK TABLES;

/*Table structure for table `tipos_usuarios` */

DROP TABLE IF EXISTS `tipos_usuarios`;

CREATE TABLE `tipos_usuarios` (
  `id_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `tp_usuario` char(11) DEFAULT NULL,
  PRIMARY KEY (`id_usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tipos_usuarios` */

LOCK TABLES `tipos_usuarios` WRITE;

insert  into `tipos_usuarios`(`id_usuario`,`tp_usuario`) values (1,'Instructor'),(2,'Aprendiz');

UNLOCK TABLES;

/*Table structure for table `usuario` */

DROP TABLE IF EXISTS `usuario`;

CREATE TABLE `usuario` (
  `id_usua` int(10) NOT NULL AUTO_INCREMENT,
  `nombre_usuario` int(50) DEFAULT NULL,
  `tipo_usuario` int(50) DEFAULT NULL,
  PRIMARY KEY (`id_usua`),
  KEY `fk_tipo` (`tipo_usuario`),
  KEY `fk_correo` (`nombre_usuario`),
  CONSTRAINT `fk_correo` FOREIGN KEY (`nombre_usuario`) REFERENCES `correo_usuario` (`id_correo`),
  CONSTRAINT `fk_tipo` FOREIGN KEY (`tipo_usuario`) REFERENCES `tipos_usuarios` (`id_usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

/*Data for the table `usuario` */

LOCK TABLES `usuario` WRITE;

UNLOCK TABLES;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
