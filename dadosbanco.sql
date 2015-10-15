-- MySQL dump 10.13  Distrib 5.6.17, for Win32 (x86)
--
-- Host: 127.0.0.1    Database: festadasnacoes
-- ------------------------------------------------------
-- Server version	5.6.15-log

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
-- Table structure for table `bebidas`
--

DROP TABLE IF EXISTS `bebidas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `bebidas` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `descricao` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `valor` double(8,2) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bebidas`
--

LOCK TABLES `bebidas` WRITE;
/*!40000 ALTER TABLE `bebidas` DISABLE KEYS */;
INSERT INTO `bebidas` VALUES (1,'Coca Cola - 350ml',3.75,'2015-05-25 14:23:37','2015-05-25 14:36:18'),(2,'Fanta Laranja - 350ml',3.50,'2015-05-25 14:24:06','2015-05-25 14:24:06'),(3,'Guaraná Antártica - 350ml',3.50,'2015-05-25 14:24:23','2015-05-25 15:44:50');
/*!40000 ALTER TABLE `bebidas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cardapios`
--

DROP TABLE IF EXISTS `cardapios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cardapios` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_evento` int(10) unsigned NOT NULL,
  `descricao` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `cardapios_id_evento_foreign` (`id_evento`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cardapios`
--

LOCK TABLES `cardapios` WRITE;
/*!40000 ALTER TABLE `cardapios` DISABLE KEYS */;
INSERT INTO `cardapios` VALUES (4,2,'Cardapio Festa das Nações 2014','2015-05-13 04:10:52','2015-05-13 04:10:52');
/*!40000 ALTER TABLE `cardapios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cardapios_bebidas`
--

DROP TABLE IF EXISTS `cardapios_bebidas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cardapios_bebidas` (
  `id_cardapio` int(10) unsigned NOT NULL,
  `id_bebida` int(10) unsigned NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  KEY `cardapios_bebidas_id_cardapio_foreign` (`id_cardapio`),
  KEY `cardapios_bebidas_id_bebida_foreign` (`id_bebida`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cardapios_bebidas`
--

LOCK TABLES `cardapios_bebidas` WRITE;
/*!40000 ALTER TABLE `cardapios_bebidas` DISABLE KEYS */;
/*!40000 ALTER TABLE `cardapios_bebidas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cardapios_pratos`
--

DROP TABLE IF EXISTS `cardapios_pratos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cardapios_pratos` (
  `id_cardapio` int(10) unsigned NOT NULL,
  `id_prato` int(10) unsigned NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  KEY `cardapios_pratos_id_cardapio_foreign` (`id_cardapio`),
  KEY `cardapios_pratos_id_prato_foreign` (`id_prato`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cardapios_pratos`
--

LOCK TABLES `cardapios_pratos` WRITE;
/*!40000 ALTER TABLE `cardapios_pratos` DISABLE KEYS */;
INSERT INTO `cardapios_pratos` VALUES (4,4,'2015-05-13 04:10:52','2015-05-13 04:10:52'),(4,5,'2015-05-13 04:10:52','2015-05-13 04:10:52'),(4,6,'2015-05-13 04:10:52','2015-05-13 04:10:52'),(4,7,'2015-05-13 04:10:52','2015-05-13 04:10:52'),(4,8,'2015-05-13 04:10:52','2015-05-13 04:10:52');
/*!40000 ALTER TABLE `cardapios_pratos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `clientes`
--

DROP TABLE IF EXISTS `clientes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `clientes` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cpf` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `telefone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `id_user` int(10) unsigned NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `clientes_email_unique` (`email`),
  KEY `clientes_id_user_foreign` (`id_user`)
) ENGINE=MyISAM AUTO_INCREMENT=25 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `clientes`
--

LOCK TABLES `clientes` WRITE;
/*!40000 ALTER TABLE `clientes` DISABLE KEYS */;
INSERT INTO `clientes` VALUES (15,'Lauriana Vaz de Albuquerque Ues Peluzzi','005.538.892-21','(69) 8111-1990','laurivaz7@yahoo.com.br',23,'2015-04-25 01:36:22','2015-04-25 01:36:22'),(18,'qqqqqqqqqqqqqq','222.222.222-22','(33) 3333-3333','laurianapeluzzi@gmssssail.com',31,'2015-05-08 01:58:02','2015-05-08 01:58:02'),(19,'João Testudo','990.990.990-90','(69) 1234-1234','joao@gmail.com',32,'2015-05-14 01:19:23','2015-05-14 01:19:23'),(20,'Yasmin Vaz','888.888.888-88','(99) 9999-9999','yasminvaz@gmail.com',33,'2015-05-20 17:17:42','2015-05-20 17:17:42'),(21,'Abc da Silva','123.000.123-99','(89) 9988-1122','abcdasilva@gmail.com',34,'2015-05-21 00:21:46','2015-05-21 00:21:46'),(22,'Lol Teste','909.909.909-90','(88) 8889-9999','lol@gmail.com',35,'2015-05-22 00:50:08','2015-05-22 00:50:08'),(23,'Dunha da Silva Sauro','123.321.111-00','(69) 9988-7755','dunha@hotmail.com',36,'2015-05-23 00:08:18','2015-05-23 00:08:18'),(24,'Betão','987.657.898-56','(19) 1727-2819','betao@gmail.com',37,'2015-05-23 02:08:59','2015-05-23 02:08:59');
/*!40000 ALTER TABLE `clientes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contatos`
--

DROP TABLE IF EXISTS `contatos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `contatos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `nome` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `assunto` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `comentario` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contatos`
--

LOCK TABLES `contatos` WRITE;
/*!40000 ALTER TABLE `contatos` DISABLE KEYS */;
INSERT INTO `contatos` VALUES (1,'2015-05-25 19:08:56','2015-05-25 19:08:56','Diego Noronha','laurivaz7@yahoo.com.br','alohaaa','asdasdasdasdas'),(2,'2015-06-16 00:32:41','2015-06-16 00:32:41','DUnha','dub@hot.com.br','sei lah','E aew feras');
/*!40000 ALTER TABLE `contatos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `eventos`
--

DROP TABLE IF EXISTS `eventos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `eventos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `descricao` text COLLATE utf8_unicode_ci,
  `dataInicial` date NOT NULL,
  `dataFim` date NOT NULL,
  `dataLimite` date DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `nome` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `unique_nome` (`nome`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `eventos`
--

LOCK TABLES `eventos` WRITE;
/*!40000 ALTER TABLE `eventos` DISABLE KEYS */;
INSERT INTO `eventos` VALUES (2,'Esta festa é de arrasar, \r\nvenha participar você tambem','2015-01-01','2015-12-31','2015-10-20','2015-04-28 04:27:01','2015-05-07 01:21:44','Festa das Nações 2014');
/*!40000 ALTER TABLE `eventos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `eventos_nacoes`
--

DROP TABLE IF EXISTS `eventos_nacoes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `eventos_nacoes` (
  `id_evento` int(10) unsigned NOT NULL,
  `id_nacao` int(10) unsigned NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  KEY `eventos_nacoes_id_evento_foreign` (`id_evento`),
  KEY `eventos_nacoes_id_nacao_foreign` (`id_nacao`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `eventos_nacoes`
--

LOCK TABLES `eventos_nacoes` WRITE;
/*!40000 ALTER TABLE `eventos_nacoes` DISABLE KEYS */;
INSERT INTO `eventos_nacoes` VALUES (2,7,'2015-04-30 00:43:07','2015-04-30 00:43:07'),(2,8,'2015-04-30 03:22:06','2015-04-30 03:22:06'),(2,9,'2015-05-06 00:41:26','2015-05-06 00:41:26'),(2,10,'2015-05-06 00:41:47','2015-05-06 00:41:47'),(2,11,'2015-05-06 00:42:22','2015-05-06 00:42:22');
/*!40000 ALTER TABLE `eventos_nacoes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `funcionarios`
--

DROP TABLE IF EXISTS `funcionarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `funcionarios` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cpf` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `telefone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `id_user` int(10) unsigned NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `funcionarios_email_unique` (`email`),
  KEY `funcionarios_id_user_foreign` (`id_user`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `funcionarios`
--

LOCK TABLES `funcionarios` WRITE;
/*!40000 ALTER TABLE `funcionarios` DISABLE KEYS */;
INSERT INTO `funcionarios` VALUES (6,'Diego Noronha','999.999.999-99','noronha@supersys.com.br','(99) 9999-9999',29,'2015-04-25 04:31:55','2015-04-25 04:31:55');
/*!40000 ALTER TABLE `funcionarios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ingredientes`
--

DROP TABLE IF EXISTS `ingredientes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ingredientes` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_prato` int(10) unsigned NOT NULL,
  `id_produto` int(10) unsigned NOT NULL,
  `qnt` double(8,2) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `ingredientes_id_prato_foreign` (`id_prato`),
  KEY `ingredientes_id_produto_foreign` (`id_produto`)
) ENGINE=MyISAM AUTO_INCREMENT=25 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ingredientes`
--

LOCK TABLES `ingredientes` WRITE;
/*!40000 ALTER TABLE `ingredientes` DISABLE KEYS */;
INSERT INTO `ingredientes` VALUES (2,4,1,1.00,'2015-05-06 00:31:40','2015-05-06 00:31:40'),(3,4,24,2.00,'2015-05-06 00:31:40','2015-05-06 00:31:40'),(4,4,27,3.00,'2015-05-06 00:31:40','2015-05-06 00:31:40'),(5,5,6,1.00,'2015-05-06 00:44:20','2015-05-06 00:44:20'),(6,5,7,3.00,'2015-05-06 00:44:20','2015-05-06 00:44:20'),(7,5,9,0.20,'2015-05-06 00:44:20','2015-05-06 00:44:20'),(8,5,10,1.00,'2015-05-06 00:44:20','2015-05-06 00:44:20'),(9,5,11,1.00,'2015-05-06 00:44:20','2015-05-06 00:44:20'),(10,5,12,1.00,'2015-05-06 00:44:20','2015-05-06 00:44:20'),(11,6,16,0.50,'2015-05-06 00:46:22','2015-05-06 00:46:22'),(12,6,17,0.40,'2015-05-06 00:46:22','2015-05-06 00:46:22'),(13,6,19,1.00,'2015-05-06 00:46:22','2015-05-06 00:46:22'),(14,6,23,1.00,'2015-05-06 00:46:22','2015-05-06 00:46:22'),(15,6,29,2.00,'2015-05-06 00:46:22','2015-05-06 00:46:22'),(16,7,5,0.50,'2015-05-06 00:52:25','2015-05-06 00:52:25'),(17,7,13,0.10,'2015-05-06 00:52:25','2015-05-06 00:52:25'),(18,7,14,0.50,'2015-05-06 00:52:25','2015-05-06 00:52:25'),(19,8,6,2.00,'2015-05-06 00:55:59','2015-05-06 00:55:59'),(20,8,18,0.30,'2015-05-06 00:55:59','2015-05-06 00:55:59'),(21,8,20,0.30,'2015-05-06 00:55:59','2015-05-06 00:55:59'),(22,8,21,1.00,'2015-05-06 00:55:59','2015-05-06 00:55:59'),(23,8,22,5.00,'2015-05-06 00:55:59','2015-05-06 00:55:59'),(24,8,25,0.10,'2015-05-06 00:55:59','2015-05-06 00:55:59');
/*!40000 ALTER TABLE `ingredientes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES ('2014_10_12_000000_create_users_table',1),('2014_10_12_100000_create_password_resets_table',1),('2015_04_19_184141_create_clientes_table',2),('2015_04_20_033807_create_users_tipo_table',3),('2015_04_20_034650_insert_to_users_tipo_table',4),('2015_04_20_035952_add_collumn_id_users_tipo_to_users_table',5),('2015_04_24_021318_create_funcionarios_table',6),('2015_04_25_003710_create_eventos_table',7),('2015_04_28_193934_create_nacoes_table',8),('2015_04_29_001643_create_eventos_nacoes_table',9),('2015_04_29_010016_create_cardapios_table',10),('2015_04_29_200626_create_pratos_table',10),('2015_04_29_211601_create_unidades_table',11),('2015_04_29_215521_create_produtos_table',12),('2015_05_04_214418_create_ingredientes_table',13),('2015_05_11_201631_create_cardapios_pratos_table',14),('2015_05_14_011357_create_pedidos_pratos_table',15),('2015_05_14_011419_create_pedidos_table',15),('2015_05_24_161455_create_contatos_table',16),('2015_05_24_215726_create_bebidas_table',16),('2015_05_24_220002_create_cardapios_bebidas_table',16),('2015_05_24_221152_create_pedidos_bebidas_table',17);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `nacoes`
--

DROP TABLE IF EXISTS `nacoes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `nacoes` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `descricao` text COLLATE utf8_unicode_ci,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `nacoes`
--

LOCK TABLES `nacoes` WRITE;
/*!40000 ALTER TABLE `nacoes` DISABLE KEYS */;
INSERT INTO `nacoes` VALUES (7,'Brasil - Goiás','Eta goiaaaaaaaaaaaaaaaaas da gente!!!!','2015-04-30 00:43:07','2015-04-30 00:43:07'),(8,'Estados Unidos','Aki a gelra joga soccer xD','2015-04-30 03:22:06','2015-04-30 03:22:06'),(9,'Itália','Macarrão, massas, pizzas a la vonté!','2015-05-06 00:41:26','2015-05-06 00:41:26'),(10,'Irlanda','Sei lá o que tem aqui... Dizem que é frapê!','2015-05-06 00:41:47','2015-05-06 00:41:47'),(11,'México','Tortilhas e comidas apimentadas estilo red hot chilli peppers xD','2015-05-06 00:42:22','2015-05-06 00:42:22');
/*!40000 ALTER TABLE `nacoes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pedidos`
--

DROP TABLE IF EXISTS `pedidos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pedidos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_cliente` int(10) unsigned NOT NULL,
  `valor` double(8,2) NOT NULL,
  `data` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `baixado` tinyint(4) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=26 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pedidos`
--

LOCK TABLES `pedidos` WRITE;
/*!40000 ALTER TABLE `pedidos` DISABLE KEYS */;
INSERT INTO `pedidos` VALUES (14,19,85.00,'2015-05-20 06:16:42','2015-05-20 06:16:42','2015-05-23 02:02:50',1),(15,20,95.00,'2015-05-20 17:20:13','2015-05-20 17:20:13','2015-05-23 01:55:30',1),(16,20,15.00,'2015-05-20 17:20:51','2015-05-20 17:20:51','2015-05-23 01:56:46',1),(17,22,110.00,'2015-05-22 00:53:06','2015-05-22 00:53:06','2015-05-23 01:56:44',1),(18,22,10.00,'2015-05-22 00:55:19','2015-05-22 00:55:19','2015-05-22 00:55:19',0),(19,22,30.00,'2015-05-22 02:09:08','2015-05-22 02:09:08','2015-05-22 02:09:08',0),(20,22,50.00,'2015-05-22 02:35:34','2015-05-22 02:35:34','2015-05-22 02:35:34',0),(21,23,70.00,'2015-05-23 00:08:59','2015-05-23 00:08:59','2015-05-23 01:49:22',0),(22,19,45.00,'2015-05-23 01:03:58','2015-05-23 01:03:58','2015-05-23 01:56:11',1),(23,19,15.00,'2015-05-23 01:12:42','2015-05-23 01:12:42','2015-05-23 01:54:08',0),(24,19,10.00,'2015-05-23 01:16:33','2015-05-23 01:16:33','2015-05-23 01:49:08',0),(25,24,50.00,'2015-05-23 02:10:09','2015-05-23 02:10:09','2015-05-23 02:11:18',1);
/*!40000 ALTER TABLE `pedidos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pedidos_bebidas`
--

DROP TABLE IF EXISTS `pedidos_bebidas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pedidos_bebidas` (
  `id_pedido` int(11) NOT NULL,
  `id_bebida` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  KEY `pedidos_bebidas_id_pedido_foreign` (`id_pedido`),
  KEY `pedidos_bebidas_id_bebida_foreign` (`id_bebida`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pedidos_bebidas`
--

LOCK TABLES `pedidos_bebidas` WRITE;
/*!40000 ALTER TABLE `pedidos_bebidas` DISABLE KEYS */;
/*!40000 ALTER TABLE `pedidos_bebidas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pedidos_pratos`
--

DROP TABLE IF EXISTS `pedidos_pratos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pedidos_pratos` (
  `id_pedido` int(11) NOT NULL,
  `id_prato` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `qnt` int(11) NOT NULL,
  KEY `pedidos_pratos_id_pedido_foreign` (`id_pedido`),
  KEY `pedidos_pratos_id_prato_foreign` (`id_prato`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pedidos_pratos`
--

LOCK TABLES `pedidos_pratos` WRITE;
/*!40000 ALTER TABLE `pedidos_pratos` DISABLE KEYS */;
INSERT INTO `pedidos_pratos` VALUES (14,4,'2015-05-20 06:16:42','2015-05-20 06:16:42',4),(14,5,'2015-05-20 06:16:42','2015-05-20 06:16:42',1),(14,6,'2015-05-20 06:16:42','2015-05-20 06:16:42',1),(15,7,'2015-05-20 17:20:13','2015-05-20 17:20:13',3),(15,5,'2015-05-20 17:20:13','2015-05-20 17:20:13',2),(15,4,'2015-05-20 17:20:13','2015-05-20 17:20:13',3),(16,6,'2015-05-20 17:20:51','2015-05-20 17:20:51',1),(17,4,'2015-05-22 00:53:06','2015-05-22 00:53:06',3),(17,6,'2015-05-22 00:53:06','2015-05-22 00:53:06',3),(17,7,'2015-05-22 00:53:06','2015-05-22 00:53:06',2),(18,5,'2015-05-22 00:55:19','2015-05-22 00:55:19',1),(19,4,'2015-05-22 02:09:08','2015-05-22 02:09:08',2),(20,5,'2015-05-22 02:35:34','2015-05-22 02:35:34',2),(20,4,'2015-05-22 02:35:34','2015-05-22 02:35:34',2),(21,5,'2015-05-23 00:08:59','2015-05-23 00:08:59',2),(21,6,'2015-05-23 00:08:59','2015-05-23 00:08:59',2),(21,7,'2015-05-23 00:08:59','2015-05-23 00:08:59',2),(22,8,'2015-05-23 01:03:58','2015-05-23 01:03:58',3),(23,6,'2015-05-23 01:12:42','2015-05-23 01:12:42',1),(24,7,'2015-05-23 01:16:33','2015-05-23 01:16:33',1),(25,5,'2015-05-23 02:10:09','2015-05-23 02:10:09',2),(25,6,'2015-05-23 02:10:09','2015-05-23 02:10:09',2);
/*!40000 ALTER TABLE `pedidos_pratos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pratos`
--

DROP TABLE IF EXISTS `pratos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pratos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_nacao` int(10) unsigned NOT NULL,
  `descricao` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `valor` double(8,2) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `pratos_id_nacao_foreign` (`id_nacao`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pratos`
--

LOCK TABLES `pratos` WRITE;
/*!40000 ALTER TABLE `pratos` DISABLE KEYS */;
INSERT INTO `pratos` VALUES (4,7,'Chica Doida',15.00,'2015-05-06 00:31:40','2015-05-06 00:31:40'),(5,8,'Lanche Americano',10.00,'2015-05-06 00:44:20','2015-05-06 00:44:20'),(6,9,'Macarrões Italianos',15.00,'2015-05-06 00:46:22','2015-05-06 00:46:22'),(7,10,'Frapês Diversos',10.00,'2015-05-06 00:52:25','2015-05-06 00:52:25'),(8,11,'Tortilha',15.00,'2015-05-06 00:55:59','2015-05-06 00:55:59');
/*!40000 ALTER TABLE `pratos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `produtos`
--

DROP TABLE IF EXISTS `produtos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `produtos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `descricao` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `id_unidade` int(10) unsigned NOT NULL,
  `valor` double(8,2) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `produtos_id_unidade_foreign` (`id_unidade`)
) ENGINE=MyISAM AUTO_INCREMENT=31 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `produtos`
--

LOCK TABLES `produtos` WRITE;
/*!40000 ALTER TABLE `produtos` DISABLE KEYS */;
INSERT INTO `produtos` VALUES (1,'Arroz',7,2.00,'2015-04-30 03:32:10','2015-04-30 03:32:10'),(2,'Feijão',7,0.55,'2015-04-30 03:39:00','2015-04-30 03:41:29'),(5,'Leite',2,2.00,'2015-05-01 00:24:48','2015-05-01 00:24:48'),(6,'Alface',3,0.50,'2015-05-01 00:26:21','2015-05-01 00:26:32'),(7,'Tomate',7,5.00,'2015-05-01 00:26:42','2015-05-01 00:26:42'),(8,'Mussarella',7,7.00,'2015-05-01 00:26:59','2015-05-01 00:26:59'),(9,'Cebola',7,3.00,'2015-05-01 00:27:09','2015-05-01 00:27:09'),(10,'Pão',3,0.20,'2015-05-01 00:27:30','2015-05-01 00:27:30'),(11,'Hamburguer',3,0.90,'2015-05-01 00:28:09','2015-05-01 00:28:09'),(12,'Cheddar',7,12.00,'2015-05-01 00:28:54','2015-05-01 00:28:54'),(13,'Chantili',2,7.50,'2015-05-01 00:30:57','2015-05-01 00:30:57'),(14,'Sorvete',2,10.00,'2015-05-01 00:31:42','2015-05-01 00:31:42'),(15,'Cobertura',2,6.25,'2015-05-01 00:31:55','2015-05-01 00:31:55'),(16,'Macarrão',7,6.90,'2015-05-01 00:32:33','2015-05-01 00:32:33'),(17,'Molho de tomate',2,4.00,'2015-05-01 00:32:58','2015-05-01 00:32:58'),(18,'Queijo Ralado',7,0.50,'2015-05-01 01:18:48','2015-05-01 01:18:48'),(19,'Salsinha',7,6.00,'2015-05-01 01:19:37','2015-05-01 01:19:37'),(20,'Carne Moída',7,12.90,'2015-05-01 01:20:11','2015-05-01 01:20:11'),(21,'Massa de tortilha',3,0.39,'2015-05-01 01:20:43','2015-05-01 01:20:43'),(22,'Pimenta',7,2.99,'2015-05-01 01:21:03','2015-05-01 01:21:03'),(23,'Cheiro verde',7,7.00,'2015-05-01 01:21:29','2015-05-01 01:21:29'),(24,'Linguiça',7,9.00,'2015-05-01 01:22:15','2015-05-01 01:22:15'),(25,'Milho verde',7,4.00,'2015-05-01 01:26:08','2015-05-01 01:26:08'),(26,'Bacon',7,18.00,'2015-05-01 01:29:14','2015-05-01 01:29:14'),(27,'Queijo',7,3.50,'2015-05-01 01:30:06','2015-05-01 01:30:06'),(28,'Manteiga',7,8.00,'2015-05-01 01:30:29','2015-05-01 01:30:29'),(29,'Alho',3,0.20,'2015-05-01 01:30:58','2015-05-01 01:30:58');
/*!40000 ALTER TABLE `produtos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `unidades`
--

DROP TABLE IF EXISTS `unidades`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `unidades` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `sigla` varchar(2) COLLATE utf8_unicode_ci NOT NULL,
  `descricao` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `unidades`
--

LOCK TABLES `unidades` WRITE;
/*!40000 ALTER TABLE `unidades` DISABLE KEYS */;
INSERT INTO `unidades` VALUES (2,'LT','Litros','2015-04-30 01:29:12','2015-04-30 01:29:12'),(3,'UN','Unidade','2015-04-30 01:29:25','2015-04-30 01:29:25'),(7,'KG','Quilos','2015-04-30 03:25:19','2015-04-30 03:25:19');
/*!40000 ALTER TABLE `unidades` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `id_users_tipo` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`),
  KEY `users_id_users_tipo_foreign` (`id_users_tipo`)
) ENGINE=MyISAM AUTO_INCREMENT=38 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Sergio Peluzzi','bugao7@gmail.com','$2y$10$.PG5yRTShDRdonUizxx8p.HOOhMfs3m1NNff2G18LTVAIJSySc.k6','xigRjuUGTlkYwen6l38wrgzeDMVHRyDxWXbdSTYJxramoIMdqJiSRBFzycPi','2015-04-18 19:59:09','2015-05-25 18:10:31',1),(23,'Lauriana Vaz de Albuquerque Ues Peluzzi','laurivaz7@yahoo.com.br','$2y$10$XgPiyU.iTBkI8sc3PG46a.fNCCpc5FJQrPkl1U7BbaLUGMnPoZ.bm',NULL,'2015-04-25 01:36:22','2015-04-25 01:36:22',3),(37,'Betão','betao@gmail.com','$2y$10$B4eoen9/ZgN/aJebuDekkewM8rAzYiw22Pnoz5fbm5lk/oRtq5anu','x43Cy767GLvkFsQp4joJ3sRzaRzN51d8AAbHkJTRh5kPBJMFtHXRVUmAzHxJ','2015-05-23 02:08:59','2015-05-23 02:10:50',3),(29,'Diego Noronha','noronha@supersys.com.br','$2y$10$Ag6qkzCPj35/BMfW3cZ4R.EmEFgdXDtQseiJ48rZZwKqifqbENazu',NULL,'2015-04-25 04:31:55','2015-04-25 04:31:55',1),(31,'qqqqqqqqqqqqqq','laurianapeluzzi@gmssssail.com','$2y$10$gJmCaSOyexrdt/Z87173c.wqbGJ6Ndo5YlRortVn1foVXBhPSW1Gy',NULL,'2015-05-08 01:58:02','2015-05-08 01:58:02',3),(32,'João Testudo','joao@gmail.com','$2y$10$uAJUDiirwBzc4dDjyd848OdDxkwY5XZNHLtnqE0yKToBPc5bOvFg2','JribGbDMZ3BMrJYOId5ZPlzKjUqt6xS0gNh94foFV6mlTHmEkJo2pody69Ga','2015-05-14 01:19:23','2015-05-24 21:11:55',3),(33,'Yasmin Vaz','yasminvaz@gmail.com','$2y$10$rsHhCletKtNVhNW7lShimO6aoJJQLhhuqDZ93JFulvy6MR.BSsdXy','MRoxqZvmv17lCp6Rn34ssKBG5mh9Mho9x7I7y8i7Kgj2WP39fy4tJKy5yqyR','2015-05-20 17:17:42','2015-05-20 17:21:14',3),(34,'Abc da Silva','abcdasilva@gmail.com','$2y$10$Niwzd0D5XwwnXxwGZxy.O.f3W9.yNDgvdJVSCFkWhlNMr/LqKPOVS','f3FnHzw2WYw1yioYvgwTirBYwMDwB2eHq517PUgAovO8Nte5Y82OTm67HMoJ','2015-05-21 00:21:46','2015-05-21 00:54:23',3),(35,'Lol Teste','lol@gmail.com','$2y$10$RV4Vj5ZYNcu.eUKB4nOof.deDT3jAdeNkjt0.wiaJd65tgkDftoLm','ELHwO6T3AD2Iuoi5wfEQ1zcd5uZNa96IdcBgGgS4CZgt6JRmCqwsUMhQiLob','2015-05-22 00:50:08','2015-05-22 02:32:49',3),(36,'Dunha da Silva Sauro','dunha@hotmail.com','$2y$10$JoNujbg.ysTOMavImvoeWuU2hKVutR5NmduQTNBldXsvyZ70xoPTu','vJvaPoJPVnZL2FpB7Rut9RFBb5nTM8zKa2GoXMc8iaAW3omomLPnRRqH8Ebl','2015-05-23 00:08:18','2015-05-23 00:09:11',3);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users_tipo`
--

DROP TABLE IF EXISTS `users_tipo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users_tipo` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `descricao` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users_tipo`
--

LOCK TABLES `users_tipo` WRITE;
/*!40000 ALTER TABLE `users_tipo` DISABLE KEYS */;
INSERT INTO `users_tipo` VALUES (2,'Funcionario','2015-04-20 07:57:31','2015-04-20 07:57:31'),(1,'Administrador','2015-04-20 07:57:31','2015-04-20 07:57:31'),(3,'Cliente','2015-04-20 07:57:31','2015-04-20 07:57:31');
/*!40000 ALTER TABLE `users_tipo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database 'festadasnacoes'
--

--
-- Dumping routines for database 'festadasnacoes'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-06-15 21:59:45
