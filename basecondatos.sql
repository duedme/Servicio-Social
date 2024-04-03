-- MySQL dump 10.13  Distrib 8.0.36, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: base_cv1
-- ------------------------------------------------------
-- Server version	8.0.36

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `cursos`
--

DROP TABLE IF EXISTS `cursos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cursos` (
  `id_curso` int NOT NULL AUTO_INCREMENT,
  `nombre_curso` varchar(100) DEFAULT NULL,
  `institucion_curso` varchar(50) DEFAULT NULL,
  `duracion_curso` varchar(4) DEFAULT NULL,
  `fecha_finalizacion_curso` date DEFAULT NULL,
  `id_usuario` int DEFAULT NULL,
  PRIMARY KEY (`id_curso`),
  KEY `id_usuario` (`id_usuario`),
  CONSTRAINT `cursos_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id_usuario`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cursos`
--

LOCK TABLES `cursos` WRITE;
/*!40000 ALTER TABLE `cursos` DISABLE KEYS */;
INSERT INTO `cursos` VALUES (3,'Diplomado en Finanzas','Colegio 123','120','2021-08-30',2),(4,'Curso de Programación en Python','Academia de Desarrollo','40','2023-03-10',2),(5,'Seminario de Fotografía Avanzada','Escuela de Arte','16','2022-11-05',3),(6,'Taller de Desarrollo Personal','Centro de Capacitación','8','2022-09-15',3),(7,'Curso de Inglés Avanzado','Instituto de Idiomas','48','2021-12-25',4),(8,'Seminario de Diseño Gráfico','Universidad de Bellas Artes','32','2023-02-28',4),(9,'Curso de Gestión de Proyectos','Escuela de Negocios','56','2022-07-20',5),(10,'Taller de Comunicación Efectiva','Instituto de Comunicación','12','2023-01-10',5);
/*!40000 ALTER TABLE `cursos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `datospersonales`
--

DROP TABLE IF EXISTS `datospersonales`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `datospersonales` (
  `id_datos` int NOT NULL AUTO_INCREMENT,
  `nombre_datosp` varchar(35) DEFAULT NULL,
  `apellido_materno_datos` varchar(20) DEFAULT NULL,
  `apellido_paterno_datos` varchar(20) DEFAULT NULL,
  `carrera_datos` varchar(35) DEFAULT NULL,
  `ciudad_datos` varchar(20) DEFAULT NULL,
  `telefono_datos` char(10) DEFAULT NULL,
  `correo_datos` varchar(50) DEFAULT NULL,
  `id_usuario` int DEFAULT NULL,
  PRIMARY KEY (`id_datos`),
  KEY `id_usuario` (`id_usuario`),
  CONSTRAINT `datospersonales_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id_usuario`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `datospersonales`
--

LOCK TABLES `datospersonales` WRITE;
/*!40000 ALTER TABLE `datospersonales` DISABLE KEYS */;
/*!40000 ALTER TABLE `datospersonales` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `educacion`
--

DROP TABLE IF EXISTS `educacion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `educacion` (
  `id_educacion` int NOT NULL AUTO_INCREMENT,
  `nombre_institucion` varchar(45) DEFAULT NULL,
  `nivel_institucion` varchar(15) DEFAULT NULL,
  `especialidad_institucion` varchar(50) DEFAULT NULL,
  `fecha_inicio_institucion` varchar(10) DEFAULT NULL,
  `fecha_fin_institucion` varchar(10) DEFAULT NULL,
  `id_usuario` int DEFAULT NULL,
  PRIMARY KEY (`id_educacion`),
  KEY `id_usuario` (`id_usuario`),
  CONSTRAINT `educacion_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id_usuario`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=71 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `educacion`
--

LOCK TABLES `educacion` WRITE;
/*!40000 ALTER TABLE `educacion` DISABLE KEYS */;
INSERT INTO `educacion` VALUES (64,'Escuela Primaria ABC','Primaria','especialidad','1987-08-01','1993-07-15',2),(65,'Guardería XYZ','Guardería','especialidad','1986-01-01','1987-07-15',2),(66,'Institución Educativa 456','Curso Técnico','Electricidad','1998-09-01','1999-06-30',2),(67,'Centro de Idiomas ABC','Idiomas','Inglés','2010-09-01','2011-06-30',3),(68,'Academia de Arte XYZ','Arte','Pintura al Óleo','2015-09-01','2016-06-30',3),(69,'Instituto de Música 123','Música','Piano','2018-09-01','2019-06-30',4),(70,'Escuela de Negocios ABC','Diplomado','Administración','2012-09-01','2013-06-30',4);
/*!40000 ALTER TABLE `educacion` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `experiencial`
--

DROP TABLE IF EXISTS `experiencial`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `experiencial` (
  `id_experiencia` int NOT NULL AUTO_INCREMENT,
  `nombre_empresa` varchar(50) DEFAULT NULL,
  `puesto_empresa` varchar(70) DEFAULT NULL,
  `fecha_inicio_empresa` varchar(10) DEFAULT NULL,
  `fecha_fin_empresa` varchar(10) DEFAULT NULL,
  `descripcion_empresa` varchar(200) DEFAULT NULL,
  `id_usuario` int DEFAULT NULL,
  PRIMARY KEY (`id_experiencia`),
  KEY `id_usuario` (`id_usuario`),
  CONSTRAINT `experiencial_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id_usuario`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `experiencial`
--

LOCK TABLES `experiencial` WRITE;
/*!40000 ALTER TABLE `experiencial` DISABLE KEYS */;
INSERT INTO `experiencial` VALUES (3,'Fábrica 123','Ingeniero de Producción','2014-01-10','2016-06-30','Participé en la optimización de procesos de producción y en la implementación de mejoras.',2),(4,'Consultora XYZ','Consultor Financiero','2012-05-20','2013-12-31','Asesoré a clientes en materia financiera y realicé análisis de riesgos.',2),(5,'Agencia de Viajes ABC','Asistente de Viajes','2010-09-05','2012-04-30','Brindé atención al cliente y coordiné reservaciones de viajes.',3),(6,'Hospital XYZ','Médico Residente','2008-03-10','2010-08-20','Realicé rotaciones en diversas especialidades médicas como parte del programa de residencia.',3),(7,'Estudio de Arquitectura ABC','Dibujante Técnico','2005-07-01','2007-12-31','Colaboré en el diseño de planos arquitectónicos y en la elaboración de documentos técnicos.',4),(8,'Empresa de Tecnología XYZ','Desarrollador Web','2003-02-15','2005-06-30','Participé en el desarrollo y mantenimiento de sitios web.',4),(9,'Institución Educativa ABC','Docente de Matemáticas','2000-08-20','2002-12-31','Impartí clases de matemáticas a estudiantes de secundaria.',5),(10,'Empresa de Telecomunicaciones XYZ','Técnico en Redes','1998-04-05','2000-07-15','Realicé configuración y mantenimiento de redes de telecomunicaciones.',5);
/*!40000 ALTER TABLE `experiencial` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `habilidades`
--

DROP TABLE IF EXISTS `habilidades`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `habilidades` (
  `id_habilidades` int NOT NULL AUTO_INCREMENT,
  `habilidad` varchar(25) DEFAULT NULL,
  `id_usuario` int DEFAULT NULL,
  PRIMARY KEY (`id_habilidades`),
  KEY `id_usuario` (`id_usuario`),
  CONSTRAINT `habilidades_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id_usuario`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `habilidades`
--

LOCK TABLES `habilidades` WRITE;
/*!40000 ALTER TABLE `habilidades` DISABLE KEYS */;
INSERT INTO `habilidades` VALUES (4,'Habilidad 4',2),(5,'Habilidad 5',2),(6,'Habilidad 6',2),(7,'Habilidad 7',3),(8,'Habilidad 8',3),(9,'Habilidad 9',4),(10,'Habilidad 10',5);
/*!40000 ALTER TABLE `habilidades` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `idiomas`
--

DROP TABLE IF EXISTS `idiomas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `idiomas` (
  `id_idioma` int NOT NULL AUTO_INCREMENT,
  `nombre_idioma` varchar(15) DEFAULT NULL,
  `nivel_idioma` varchar(16) DEFAULT NULL,
  `id_usuario` int DEFAULT NULL,
  PRIMARY KEY (`id_idioma`),
  KEY `id_usuario` (`id_usuario`),
  CONSTRAINT `idiomas_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id_usuario`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `idiomas`
--

LOCK TABLES `idiomas` WRITE;
/*!40000 ALTER TABLE `idiomas` DISABLE KEYS */;
INSERT INTO `idiomas` VALUES (3,'Alemán','Intermedio',2),(4,'Italiano','Avanzado',2),(5,'Chino Mandarín','Básico',3),(6,'Japonés','Intermedio',3),(7,'Ruso','Básico',4),(8,'Portugués','Avanzado',4),(9,'Árabe','Intermedio',5),(10,'Coreano','Básico',5);
/*!40000 ALTER TABLE `idiomas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `usuarios` (
  `id_usuario` int NOT NULL AUTO_INCREMENT,
  `correo_usuario` varchar(50) DEFAULT NULL,
  `contrasena_usuario` varchar(20) DEFAULT NULL,
  `matricula_usuario` char(10) DEFAULT NULL,
  PRIMARY KEY (`id_usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuarios`
--

LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` VALUES (2,'usuario2@example.com','password2','MAT7654321'),(3,'usuario3@example.com','password3','MAT5678910'),(4,'usuario4@example.com','password4','MAT0987654'),(5,'usuario5@example.com','password5','MAT2468109');
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

-- Dump completed on 2024-04-02 21:01:58
