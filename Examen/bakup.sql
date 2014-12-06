/*
SQLyog Ultimate v8.61 
MySQL - 5.5.16 : Database - escuela
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`escuela` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `escuela`;

/*Table structure for table `grupo` */

DROP TABLE IF EXISTS `grupo`;

CREATE TABLE `grupo` (
  `id_grupo` int(11) NOT NULL AUTO_INCREMENT,
  `Grupo` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`id_grupo`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

/*Data for the table `grupo` */

insert  into `grupo`(`id_grupo`,`Grupo`) values (15,'A'),(16,'B'),(17,'C'),(18,'D'),(19,'E');

/*Table structure for table `maestro_materia` */

DROP TABLE IF EXISTS `maestro_materia`;

CREATE TABLE `maestro_materia` (
  `id_maestro` int(11) NOT NULL AUTO_INCREMENT,
  `id_materia` int(11) DEFAULT NULL,
  `id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_maestro`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

/*Data for the table `maestro_materia` */

insert  into `maestro_materia`(`id_maestro`,`id_materia`,`id`) values (6,6,2),(9,1,7),(10,8,8),(11,3,7),(12,11,7);

/*Table structure for table `materia` */

DROP TABLE IF EXISTS `materia`;

CREATE TABLE `materia` (
  `id_materia` int(11) NOT NULL AUTO_INCREMENT,
  `Materia` varchar(250) DEFAULT NULL,
  `estatus` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_materia`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

/*Data for the table `materia` */

insert  into `materia`(`id_materia`,`Materia`,`estatus`) values (1,'Matematicas',1),(2,'Español',1),(3,'Base de datos',1),(4,'Fisica',1),(5,'Quimica',1),(6,'Administracion de negocios',1),(7,'Programacion',1),(8,'Mantenimiento',1),(9,'Sistemas Operativos',1),(10,'Administracion de Recursos',1),(11,'Administracion del tiempo',1);

/*Table structure for table `preguntas` */

DROP TABLE IF EXISTS `preguntas`;

CREATE TABLE `preguntas` (
  `id_preunta` int(11) NOT NULL,
  `pregunta` varchar(200) DEFAULT NULL,
  `repuesta1` varchar(200) DEFAULT NULL,
  `respuesta2` varchar(200) DEFAULT NULL,
  `respuesta3` varchar(200) DEFAULT NULL,
  `respuestacorecta` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id_preunta`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `preguntas` */

insert  into `preguntas`(`id_preunta`,`pregunta`,`repuesta1`,`respuesta2`,`respuesta3`,`respuestacorecta`) values (1,'¿cuanto es 2+2?','4','3','5','4'),(2,'¿Cuanto es 2*2?','11','4','5','4'),(3,'¿cuanto es 23+6?','3','4','29','29'),(4,'¿cuanto es 34-2','3','32','30','32'),(5,'¿cuanto es 64-60?','4','6','7','4'),(6,'¿cuanto e 45+45?','90','34','67','90'),(7,'¿cuanto es 3*4?','15','12','45','12'),(8,'¿cuanto es 6*8','11','48','45','48'),(9,'Cuanto es 4+5+6?','56','15','2','15'),(10,'¿cuanto es 23*4?','92','23','12','92');

/*Table structure for table `promedio` */

DROP TABLE IF EXISTS `promedio`;

CREATE TABLE `promedio` (
  `id` int(11) DEFAULT NULL,
  `promedio` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `promedio` */

insert  into `promedio`(`id`,`promedio`) values (1,'23'),(2,'30');

/*Table structure for table `usuario` */

DROP TABLE IF EXISTS `usuario`;

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(250) DEFAULT NULL,
  `ApellidoPaterno` varchar(250) DEFAULT NULL,
  `ApellidoMaterno` varchar(250) DEFAULT NULL,
  `Telefono` varchar(250) DEFAULT NULL,
  `NumeroExterior` int(11) DEFAULT NULL,
  `NumeroInterior` int(11) DEFAULT NULL,
  `Colonia` varchar(250) DEFAULT NULL,
  `Municipio` varchar(250) DEFAULT NULL,
  `Estado` varchar(250) DEFAULT NULL,
  `CP` int(11) DEFAULT NULL,
  `Correo` varchar(250) DEFAULT NULL,
  `Usuario` varchar(250) DEFAULT NULL,
  `Contrasena` varchar(250) DEFAULT NULL,
  `Nivel` varchar(250) DEFAULT NULL,
  `Estatus` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

/*Data for the table `usuario` */

insert  into `usuario`(`id`,`Nombre`,`ApellidoPaterno`,`ApellidoMaterno`,`Telefono`,`NumeroExterior`,`NumeroInterior`,`Colonia`,`Municipio`,`Estado`,`CP`,`Correo`,`Usuario`,`Contrasena`,`Nivel`,`Estatus`) values (1,'moise','morales','sanche','123456789',234,234,'centro','tenango','mexico',3456,'Qgmail.com','misa','12345','1','1'),(2,'juan','Marque','Vasque','987654321',346,678,'Marta','Santiago','Estados unido',4567,'@hotmail.com','moises','12345','2','1'),(3,'moises','morales','sanchez',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'1','1'),(6,'marco','inez','salazar',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'1','1'),(7,'.juan.','.misael.','.salazar.',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2','1'),(8,'juan','pablo','escamilla',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2','1'),(9,'moises','morales','sanchez',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'3','1'),(10,'..','..','..',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'1','1');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
