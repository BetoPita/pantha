-- MySQL dump 10.13  Distrib 5.6.19, for osx10.7 (i386)
--
-- Host: 208.43.193.211    Database: renovand_pantha
-- ------------------------------------------------------
-- Server version	5.5.45-cll-lve

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
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `correo` varchar(200) DEFAULT NULL,
  `password` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin`
--

LOCK TABLES `admin` WRITE;
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
INSERT INTO `admin` VALUES (1,'franquicia1@zavordigital.com','b68ed703542e155743d5fa3bab405a04'),(2,'edgar','a9bff8d0bb065a8a2f99f43418d6a16f'),(3,'pita','548bcab5d74a9e3f61b52cdf946bd984'),(4,'deshilado','06171bc5fcf1bded84f087e4a210a5c2');
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `banner`
--

DROP TABLE IF EXISTS `banner`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `banner` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `imagen` varchar(300) NOT NULL,
  `path` varchar(300) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `banner`
--

LOCK TABLES `banner` WRITE;
/*!40000 ALTER TABLE `banner` DISABLE KEYS */;
INSERT INTO `banner` VALUES (1,'statics/img/banner/textobanner2.png',NULL),(2,'statics/img/banner/textobanner2.png',NULL),(3,'statics/img/banner/textobanner2.png',NULL);
/*!40000 ALTER TABLE `banner` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `evento`
--

DROP TABLE IF EXISTS `evento`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `evento` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `artista` varchar(300) DEFAULT NULL,
  `precio` float DEFAULT NULL,
  `lugar` varchar(300) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `hora` time DEFAULT NULL,
  `link` varchar(300) DEFAULT NULL,
  `texto` varchar(300) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `evento`
--

LOCK TABLES `evento` WRITE;
/*!40000 ALTER TABLE `evento` DISABLE KEYS */;
/*!40000 ALTER TABLE `evento` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `imagenes`
--

DROP TABLE IF EXISTS `imagenes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `imagenes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `link` varchar(200) DEFAULT NULL,
  `imagen` varchar(500) DEFAULT NULL,
  `path` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `imagenes`
--

LOCK TABLES `imagenes` WRITE;
/*!40000 ALTER TABLE `imagenes` DISABLE KEYS */;
INSERT INTO `imagenes` VALUES (1,'www.facebook1-com','statics/img/footer/logo-cuauhtemoc.png','C:/xampp/htdocs/pantha/statics/img/footer/5751184277ca02016-06-03.png'),(2,'www.facebook-com','statics/img/footer/logo-cuauhtemoc.png','C:/xampp/htdocs/pantha/statics/img/imagenes/footer/5751143086cf22016-06-03.png'),(3,'www.facebook-com','statics/img/footer/logo-cuauhtemoc.png','C:/xampp/htdocs/pantha/statics/img/imagenes/footer/5751143086cf22016-06-03.png'),(4,'www.facebook-com','statics/img/footer/logo-cuauhtemoc.png','C:/xampp/htdocs/pantha/statics/img/imagenes/footer/5751143086cf22016-06-03.png'),(5,'www.facebook-com','statics/img/footer/logo-cuauhtemoc.png','C:/xampp/htdocs/pantha/statics/img/imagenes/footer/5751143086cf22016-06-03.png'),(6,'www.facebook-com','statics/img/footer/logo-cuauhtemoc.png','C:/xampp/htdocs/pantha/statics/img/imagenes/footer/5751143086cf22016-06-03.png'),(7,'www.facebook-com','statics/img/footer/logo-cuauhtemoc.png','C:/xampp/htdocs/pantha/statics/img/imagenes/footer/5751143086cf22016-06-03.png');
/*!40000 ALTER TABLE `imagenes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `parametro`
--

DROP TABLE IF EXISTS `parametro`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `parametro` (
  `idparametro` int(11) NOT NULL AUTO_INCREMENT,
  `logo` varchar(100) DEFAULT NULL,
  `path4` varchar(300) DEFAULT NULL,
  `facebook` varchar(100) DEFAULT NULL,
  `twitter` varchar(100) DEFAULT NULL,
  `celular` varchar(45) DEFAULT NULL,
  `telefono` varchar(45) DEFAULT NULL,
  `domicilio` varchar(45) DEFAULT NULL,
  `correo` varchar(45) DEFAULT NULL,
  `fondo1` varchar(20) DEFAULT NULL,
  `fondo2` varchar(20) DEFAULT NULL,
  `nombre_empresa` varchar(100) DEFAULT NULL,
  `correo_paypal` varchar(100) NOT NULL,
  `banner1` varchar(300) NOT NULL,
  `path1` varchar(300) DEFAULT NULL,
  `banner2` varchar(300) NOT NULL,
  `path2` varchar(300) DEFAULT NULL,
  `banner3` varchar(300) NOT NULL,
  `path3` varchar(300) DEFAULT NULL,
  `google` varchar(100) DEFAULT NULL,
  `lv` varchar(45) DEFAULT NULL,
  `sabado` varchar(45) DEFAULT NULL,
  `snapchat` varchar(300) DEFAULT NULL,
  `domingo` varchar(45) DEFAULT NULL,
  `link_banner1` varchar(300) DEFAULT NULL,
  `link_banner2` varchar(300) DEFAULT NULL,
  `link_banner3` varchar(300) DEFAULT NULL,
  PRIMARY KEY (`idparametro`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `parametro`
--

LOCK TABLES `parametro` WRITE;
/*!40000 ALTER TABLE `parametro` DISABLE KEYS */;
INSERT INTO `parametro` VALUES (1,'statics/img/logo/2016/05/573131a254d202016-05-10.png','/Applications/MAMP/htdocs/tienda/statics/img/logo/2016/05/573131a254d202016-05-10.png','https://www.facebook.com/pages/La-Casa-del-Deshilado/636216443093217?fref=ts','http://twitter.com','01 33 1813 2040','(449) 9710464','Centro Comercial Plaza Vestir Local #73     C','desquivel91@gmail.com','#ffffff','#ffffff','La casa del deshilado1','albertopitava-facilitator@gmail.com','statics/img/banner1/2016/05/573caf62f1f0c2016-05-18.jpg','/nfs/c06/h02/mnt/184102/domains/lacasadeldeshilado.com/html/sitio/statics/img/banner1/2016/05/573caf62f1f0c2016-05-18.jpg','statics/img/banner2/2016/05/5747d2503a93e2016-05-26.jpg','/nfs/c06/h02/mnt/184102/domains/lacasadeldeshilado.com/html/sitio/statics/img/banner2/2016/05/5747d2503a93e2016-05-26.jpg','statics/img/banner3/2016/05/57479e8dea97d2016-05-26.jpg','/nfs/c06/h02/mnt/184102/domains/lacasadeldeshilado.com/html/sitio/statics/img/banner3/2016/05/57479e8dea97d2016-05-26.jpg','www.google.com','8 am to 8 pm','9 am to 2 pm','snapt123',NULL,'www.google1.com','www.google.com',NULL);
/*!40000 ALTER TABLE `parametro` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `promocion`
--

DROP TABLE IF EXISTS `promocion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `promocion` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(300) DEFAULT NULL,
  `destino` varchar(300) DEFAULT NULL,
  `precio` float DEFAULT NULL,
  `pdf` varchar(300) DEFAULT NULL,
  `imagen` varchar(300) DEFAULT NULL,
  `path` varchar(300) DEFAULT NULL,
  `status` varchar(45) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `promocion`
--

LOCK TABLES `promocion` WRITE;
/*!40000 ALTER TABLE `promocion` DISABLE KEYS */;
/*!40000 ALTER TABLE `promocion` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuarios` (
  `nombre` varchar(100) NOT NULL,
  `apellido` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `telefono` varchar(20) NOT NULL,
  `domicilio` varchar(300) NOT NULL,
  `ciudad` varchar(100) NOT NULL,
  `cp` varchar(10) NOT NULL,
  `pais` varchar(50) NOT NULL,
  `estado` varchar(50) NOT NULL,
  `comentarios` longtext NOT NULL,
  `idusuario` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`idusuario`)
) ENGINE=MyISAM AUTO_INCREMENT=142 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuarios`
--

LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` VALUES ('fhfj,fjg,k',',gjhg,jhb','artstar28@hotmail.com','3123173974','khk.jbkj','.khg.kjb','28979','','.kb,jb','',140),('asda','sdasdasd','albertopitava@gmail.com','123123','asdasd','asd','123123','','123','123123',139),('asda','asdas','albertopitava@gmail.com','234','asdasd','asd','333','','asdasd','ssdf',138),('edgar uribe','asda','albertopitava@gmail.com','3123123','4','colima','123123','','colima','buena',137),('asdas','dasdasd','albertopitava@gmail.com','321','yucatan 723 loma bonita','colima','123123','','COLIMA','asdasd',136),('LUIS ALBERTO','PITA VAZQUEZ','albertopitava@gmail.com','3123094368','yucatan 723 loma bonita','colima','28984','','COLIMA','comentarios',135),('LUIS ALBERTO','PITA VAZQUEZ','albertopitava@gmail.com','3122336','yucatan 723 loma bonita','colima','28984','','colima','comentarios',134),('LUIS ALBERTO','PITA VAZQUEZ','albertopitava@gmail.com','3122336','yucatan','colima','28984','','colima','comentarios',132),('LUIS ALBERTO','PITA VAZQUEZ','albertopitava@gmail.com','3122336','yucatan','colima','28984','','colima','comentarios',133),('luis alberto','pita','albertopitava@gmail.com','3122336','yucatan','colima','28984','','colima','comentarios',131),('LUIS ALNERTO','PITA','albertopitava@gmail.com','3122336','YUCATAN','COLIMA','28984','','COLIMA','',130),('123','123','albertopitava@gmail.com','123','123','123','123','','123','123',128),('LUIS ALNERTO','PITA','albertopitava@gmail.com','3122336','YUCATAN','COLIMA','28984','','COLIMA','',129),('LUIS ALNERTO','PITA','albertopitava@gmail.com','3122336','YUCATAN','COLIMA','28984','','COLIMA','',127),('Daniel','Esquivel','desquivel91@gmail.com','3121073720','Casa','Aguas','28900','','Aguas','nada',125),('luis alberto','pita','albertopitava@gmail.com','3122336','yucatan','723','28984','','colima','comentarios',126),('123','321','123@123.com','123','123','123','123','','123','',141);
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-06-07  8:34:23
