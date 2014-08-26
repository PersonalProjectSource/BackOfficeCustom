-- MySQL dump 10.13  Distrib 5.6.16, for Win32 (x86)
--
-- Host: localhost    Database: backoffice
-- ------------------------------------------------------
-- Server version	5.6.16

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
-- Table structure for table `croping`
--

DROP TABLE IF EXISTS `croping`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `croping` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `width` int(11) NOT NULL,
  `height` int(11) NOT NULL,
  `quality` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `croping`
--

LOCK TABLES `croping` WRITE;
/*!40000 ALTER TABLE `croping` DISABLE KEYS */;
INSERT INTO `croping` VALUES (1,'Petite taille','mini',100,100,100),(2,'grande taille','big',400,345,90),(3,'test','test',300,10,80);
/*!40000 ALTER TABLE `croping` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `field`
--

DROP TABLE IF EXISTS `field`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `field` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cle` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `field`
--

LOCK TABLES `field` WRITE;
/*!40000 ALTER TABLE `field` DISABLE KEYS */;
/*!40000 ALTER TABLE `field` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `field_translation`
--

DROP TABLE IF EXISTS `field_translation`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `field_translation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `langue_id` int(11) DEFAULT NULL,
  `object_id` int(11) DEFAULT NULL,
  `value` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_71DEF6B82AADBACD` (`langue_id`),
  KEY `IDX_71DEF6B8232D562B` (`object_id`),
  CONSTRAINT `FK_71DEF6B8232D562B` FOREIGN KEY (`object_id`) REFERENCES `field` (`id`),
  CONSTRAINT `FK_71DEF6B82AADBACD` FOREIGN KEY (`langue_id`) REFERENCES `langue` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `field_translation`
--

LOCK TABLES `field_translation` WRITE;
/*!40000 ALTER TABLE `field_translation` DISABLE KEYS */;
/*!40000 ALTER TABLE `field_translation` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fos_group`
--

DROP TABLE IF EXISTS `fos_group`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fos_group` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `roles` longtext COLLATE utf8_unicode_ci NOT NULL COMMENT '(DC2Type:array)',
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_4B019DDB5E237E06` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fos_group`
--

LOCK TABLES `fos_group` WRITE;
/*!40000 ALTER TABLE `fos_group` DISABLE KEYS */;
INSERT INTO `fos_group` VALUES (1,'Groupe Super Admin','a:2:{i:0;s:10:\"ROLE_ADMIN\";i:1;s:16:\"ROLE_SUPER_ADMIN\";}'),(2,'Groupe Admin','a:1:{i:0;s:10:\"ROLE_ADMIN\";}'),(3,'Groupe User','a:1:{i:0;s:9:\"ROLE_USER\";}');
/*!40000 ALTER TABLE `fos_group` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fos_user_user_group`
--

DROP TABLE IF EXISTS `fos_user_user_group`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fos_user_user_group` (
  `user_id` int(11) NOT NULL,
  `group_id` int(11) NOT NULL,
  PRIMARY KEY (`user_id`,`group_id`),
  KEY `IDX_B3C77447A76ED395` (`user_id`),
  KEY `IDX_B3C77447FE54D947` (`group_id`),
  CONSTRAINT `FK_B3C77447A76ED395` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`),
  CONSTRAINT `FK_B3C77447FE54D947` FOREIGN KEY (`group_id`) REFERENCES `fos_group` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fos_user_user_group`
--

LOCK TABLES `fos_user_user_group` WRITE;
/*!40000 ALTER TABLE `fos_user_user_group` DISABLE KEYS */;
INSERT INTO `fos_user_user_group` VALUES (1,2),(2,1),(3,3);
/*!40000 ALTER TABLE `fos_user_user_group` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `hermesuser`
--

DROP TABLE IF EXISTS `hermesuser`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `hermesuser` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `prenom` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `hermesid` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `position` int(11) NOT NULL,
  `end` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `hermesuser`
--

LOCK TABLES `hermesuser` WRITE;
/*!40000 ALTER TABLE `hermesuser` DISABLE KEYS */;
INSERT INTO `hermesuser` VALUES (1,'Dumas','Axel','axel.dumas@gmail.com','123Ae7',0,1),(2,'de Seynes','Guillaume','guillaume.deseynes@mail.com','44r58',0,1),(3,'Puesh','Bertrand','bertrand.puesh@mail.com','a78df',0,1);
/*!40000 ALTER TABLE `hermesuser` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `langue`
--

DROP TABLE IF EXISTS `langue`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `langue` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `libelle` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `code` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `langue`
--

LOCK TABLES `langue` WRITE;
/*!40000 ALTER TABLE `langue` DISABLE KEYS */;
INSERT INTO `langue` VALUES (1,'Français','fr'),(2,'Anglais','en'),(3,'Japonais','ja'),(4,'Chinois simplifié','zh'),(5,'Espagnol','es'),(6,'Italien','it');
/*!40000 ALTER TABLE `langue` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `media`
--

DROP TABLE IF EXISTS `media`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `media` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `libelle` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `date_creation` datetime NOT NULL,
  `path` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `extension` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `media`
--

LOCK TABLES `media` WRITE;
/*!40000 ALTER TABLE `media` DISABLE KEYS */;
INSERT INTO `media` VALUES (8,'super image','firstPiRRTE','2014-08-07 17:17:15','novedia2.png',''),(9,'yrtry','rtyrty','2014-08-08 17:26:55','sec4.gif',''),(10,'yrtry','rtyrty','2014-08-08 17:27:04','stopGif.gif',''),(11,'yrtry','rtyrty','2014-08-08 17:27:41','novedia2.png',''),(12,'coucou toi','salut toi','2014-08-11 15:55:33','download (1)','jpeg'),(13,'image','firstPiRRTE','2014-08-11 17:23:53','3de7f529731e5da64dba9c445ff951dbca996fe8.jpeg',NULL),(14,'image/jpeg','firstPiRRTE','2014-08-11 17:28:33','novedia2.png',NULL),(15,'image/jpeg','firstPiRRTE','2014-08-11 17:29:38','66aac6a9a2b835dbedbdf349c3341c68d85949f4.jpeg','jpeg'),(16,'image/png','firstPic','2014-08-11 17:31:16','5f2b7245aadc8676f6b7b848a4855a3881d401a8.png','png'),(17,'image/jpeg','firstPic','2014-08-11 17:33:26','d99c7d404ba0a7a6ddc4127374c7627b06524714','jpeg'),(18,'image/jpeg','firstPic','2014-08-11 17:40:42','63365c82b78541c1bdde47479d953b25ccddbc7e','jpeg'),(19,'image/jpeg','firstPic','2014-08-11 17:41:04','f839634aeb117a0d06652718b86e73d754106f21','jpeg'),(20,'image/jpeg','firstPic','2014-08-11 17:42:04','2219cc13de3706dc5463bd40ab6a8f67d98fcd76','jpeg'),(21,'image/jpeg','rtyrty','2014-08-11 17:59:30','c65f5cdc03916fa819f878f0b4434a281962570d','jpeg'),(22,'image/jpeg','coucou lib lolo','2014-08-11 18:13:34','945ba3cc30eba36ff5975baffa3469f4f0604f29','jpeg'),(23,'image/jpeg','rrr','2014-08-11 22:02:20','deb686b6641167f3e4d14c20d17056b21e2ccfe1','jpeg'),(24,'image/jpeg','test Tony','2014-08-12 14:48:39','2ca245c0d4e1d3d1ec56e9a4dff1116d7b49f9e4','jpeg'),(25,'image/jpeg','tintin','2014-08-12 14:52:42','62395d23f4c97ad016fcff0c5fb647d77022680b','jpeg'),(26,'image/jpeg','toto','2014-08-12 14:54:22','414519cbb2846b878a1c635f521d8bc1d7a9a828','jpeg'),(27,'image/jpeg','test Tony 2','2014-08-12 14:58:34','41d83f72587784f3fe15d1da134ea94481b37505','jpeg'),(28,'image/jpeg','test pour une tres grande image.','2014-08-12 17:44:20','1d13f46660275d858c6903ab5c1debba36d805ca','jpeg'),(29,'image/jpeg','testForGitMaster','2014-08-13 18:07:49','adf9e2da0c8c55239a0701278d3b44edc864bcc0','jpeg');
/*!40000 ALTER TABLE `media` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `media_croping`
--

DROP TABLE IF EXISTS `media_croping`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `media_croping` (
  `media_id` int(11) NOT NULL,
  `croping_id` int(11) NOT NULL,
  PRIMARY KEY (`media_id`,`croping_id`),
  KEY `IDX_1FFCA1F8EA9FDD75` (`media_id`),
  KEY `IDX_1FFCA1F8D4A41A4C` (`croping_id`),
  CONSTRAINT `FK_1FFCA1F8D4A41A4C` FOREIGN KEY (`croping_id`) REFERENCES `croping` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_1FFCA1F8EA9FDD75` FOREIGN KEY (`media_id`) REFERENCES `media` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `media_croping`
--

LOCK TABLES `media_croping` WRITE;
/*!40000 ALTER TABLE `media_croping` DISABLE KEYS */;
/*!40000 ALTER TABLE `media_croping` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `question`
--

DROP TABLE IF EXISTS `question`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `question` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `position` int(11) DEFAULT NULL,
  `type` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `question`
--

LOCK TABLES `question` WRITE;
/*!40000 ALTER TABLE `question` DISABLE KEYS */;
INSERT INTO `question` VALUES (1,NULL,0),(2,NULL,1),(3,NULL,1),(4,NULL,0),(5,NULL,0),(6,NULL,0),(7,NULL,0),(8,NULL,1),(9,NULL,1),(10,NULL,0),(11,NULL,1);
/*!40000 ALTER TABLE `question` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `question_translation`
--

DROP TABLE IF EXISTS `question_translation`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `question_translation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `object_id` int(11) DEFAULT NULL,
  `langues_id` int(11) DEFAULT NULL,
  `libelle` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `reponse1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `reponse2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `reponse3` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `reponse4` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `reponse5` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `reponse6` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_576D9AE2232D562B` (`object_id`),
  KEY `IDX_576D9AE228EAE92` (`langues_id`),
  CONSTRAINT `FK_576D9AE2232D562B` FOREIGN KEY (`object_id`) REFERENCES `question` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_576D9AE228EAE92` FOREIGN KEY (`langues_id`) REFERENCES `langue` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `question_translation`
--

LOCK TABLES `question_translation` WRITE;
/*!40000 ALTER TABLE `question_translation` DISABLE KEYS */;
INSERT INTO `question_translation` VALUES (1,1,1,'Qui a dessiné La Maison des Carrés?',NULL,NULL,NULL,NULL,NULL,NULL),(2,2,1,'Quelles saisons sont présentées dans La Maison des carrés?','PE13','AH13','PE14','AH14',NULL,NULL),(3,3,1,'Quelle est l’animation produit majeure pour ce lancement ? (grande pièce sous les toits)','bandanas','twilly','châles cachemire',NULL,NULL,NULL),(4,4,1,'Lister2 noms de dessins qui ressortent si vous tapez le mot « Nature » dans la barre de recherche?',NULL,NULL,NULL,NULL,NULL,NULL),(5,5,1,'Comment trouver un carré sur le thème \"Equestre, chevaux\" via le site ?',NULL,NULL,NULL,NULL,NULL,NULL),(6,6,1,'Donner une référence complète d’un format 140 rouge avec des fleurs.',NULL,NULL,NULL,NULL,NULL,NULL),(7,7,1,'Citez 4 produits présents dans la chambre des garçons',NULL,NULL,NULL,NULL,NULL,NULL),(8,8,1,'La Maison des Carrés est accessible depuis :','un ordinateur','une tablette','un portable',NULL,NULL,NULL),(9,9,1,'La Maison des Carrés est-elle :','Un magasin e-commerce dédié à la Soie dans mon pays?','Une vitrine supplémentaire pour mon magasin?','Une façon innovante de faire découvrir et aimer nos carrés ?','Un allié pour générer du trafic dans mon magasin ?','Un outil d\'informations complet (histoires de carrés, nouages, actualités..) pour nos clients ou futurs clients','Un moyen de renforcer la relation avec les clients en partageant l’actualité de la Soie'),(10,10,1,'Comment un client procède-t-il pour aller en magasin avec sa sélection Internet?',NULL,NULL,NULL,NULL,NULL,NULL),(11,11,1,'Quelles sont les modalités d’échange d’un carré acheté sur Internet?','Echange possible en magasin ou sur Internet(sous x jours)','Avoir (credit note) en magasin ou sur internet(sous x jours)','S’adresser au magasin Internet pour un remboursement (sous x jours)',NULL,NULL,NULL);
/*!40000 ALTER TABLE `question_translation` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `question_userhermes`
--

DROP TABLE IF EXISTS `question_userhermes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `question_userhermes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `question_id` int(11) DEFAULT NULL,
  `contenu` longtext COLLATE utf8_unicode_ci,
  `reponse1` tinyint(1) DEFAULT NULL,
  `reponse2` tinyint(1) DEFAULT NULL,
  `reponse3` tinyint(1) DEFAULT NULL,
  `reponse4` tinyint(1) DEFAULT NULL,
  `reponse5` tinyint(1) DEFAULT NULL,
  `reponse6` tinyint(1) DEFAULT NULL,
  `usersHermes_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_5B26D3E5300C433F` (`usersHermes_id`),
  KEY `IDX_5B26D3E51E27F6BF` (`question_id`),
  CONSTRAINT `FK_5B26D3E51E27F6BF` FOREIGN KEY (`question_id`) REFERENCES `question` (`id`),
  CONSTRAINT `FK_5B26D3E5300C433F` FOREIGN KEY (`usersHermes_id`) REFERENCES `hermesuser` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `question_userhermes`
--

LOCK TABLES `question_userhermes` WRITE;
/*!40000 ALTER TABLE `question_userhermes` DISABLE KEYS */;
INSERT INTO `question_userhermes` VALUES (1,1,'Proin ac luctus lorem. Suspendisse feugiat interdum vehicula. Pellentesque sit amet ullamcorper orci, vitae rhoncus nunc. Nunc bibendum justo a tortor venenatis tristique. Suspendisse varius ligula eget rutrum auctor. Aliquam fringilla et eros sit amet porta. Nullam pellentesque justo eu sapien volutpat auctor.',NULL,NULL,NULL,NULL,NULL,NULL,1),(2,2,NULL,1,0,1,1,NULL,NULL,1),(3,3,NULL,1,0,1,NULL,NULL,NULL,1),(4,4,'Morbi vehicula, enim sit amet dapibus sodales, mi massa eleifend nulla, quis pharetra arcu urna at orci. Quisque a turpis quam. Suspendisse adipiscing justo sit amet metus venenatis faucibus. Praesent a hendrerit enim, a rhoncus nulla. Vivamus auctor, eros in euismod ullamcorper, orci purus molestie erat,',NULL,NULL,0,NULL,NULL,NULL,1),(5,5,'Proin ac luctus lorem. Suspendisse feugiat interdum vehicula. Pellentesque sit amet ullamcorper orci, vitae rhoncus nunc. Nunc bibendum justo a tortor venenatis tristique. Suspendisse varius ligula eget rutrum auctor. Aliquam fringilla et eros sit amet porta. Nullam pellentesque justo eu sapien volutpat auctor. Proin ac luctus lorem. Suspendisse feugiat interdum vehicula. Pellentesque sit amet ullamcorper orci, vitae rhoncus nunc. Nunc bibendum justo a tortor venenatis tristique. Suspendisse varius ligula eget rutrum auctor. Aliquam fringilla et eros sit amet porta. Nullam pellentesque justo eu sapien volutpat auctor. ',NULL,NULL,NULL,NULL,NULL,NULL,1),(6,6,'Morbi vehicula, enim sit amet dapibus sodales, mi massa eleifend nulla, quis pharetra arcu urna at orci. Quisque a turpis quam. Suspendisse adipiscing justo sit amet metus venenatis faucibus. Praesent a hendrerit enim, a rhoncus nulla. Vivamus auctor, eros in euismod ullamcorper, orci purus molestie erat,',NULL,NULL,NULL,NULL,NULL,NULL,1);
/*!40000 ALTER TABLE `question_userhermes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `username_canonical` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email_canonical` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `enabled` tinyint(1) NOT NULL,
  `salt` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_login` datetime DEFAULT NULL,
  `locked` tinyint(1) NOT NULL,
  `expired` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL,
  `confirmation_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password_requested_at` datetime DEFAULT NULL,
  `roles` longtext COLLATE utf8_unicode_ci NOT NULL COMMENT '(DC2Type:array)',
  `credentials_expired` tinyint(1) NOT NULL,
  `credentials_expire_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_8D93D64992FC23A8` (`username_canonical`),
  UNIQUE KEY `UNIQ_8D93D649A0D96FBF` (`email_canonical`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (1,'admin','admin','admin@mail.com','admin@mail.com',1,'8x80k677924gwooogs0kw0kkk4cos4c','U1DLbXoX1ZcZoyKPP1UxjAwZj8Ofkh5xieGQnDEdvgA6q5wGrnZi35llyyhSGgITjCfdjhVmL3xLKbXvK5+l/g==','2014-08-13 14:03:10',0,0,NULL,NULL,NULL,'a:0:{}',0,NULL),(2,'superadmin','superadmin','superadmin@mail.com','superadmin@mail.com',1,'2l4lgrww8jswwsc844o4gkgsw404ocw','h3AHoTssUigo2FF8fOsJil/AJu4hSb3Ba4w0CZOwbG+I8pW0JjPoDb0BkLnFqMDZa/srF+3kfvGqKFPmCM3ynA==','2014-08-06 17:33:01',0,0,NULL,NULL,NULL,'a:0:{}',0,NULL),(3,'user','user','user@mail.com','user@mail.com',1,'s9yh737zzm88o4ww0840wow0kgk4ooc','FS43Tlqv6PAZUokHg4atkaKDhaZ/Hu3ffTkuynMY0rCpn5DGfIZ7fIlejhTsjeIgskYRLyvmPfhSjzbJUKCBGA==',NULL,0,0,NULL,NULL,NULL,'a:0:{}',0,NULL);
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2014-08-26 10:56:12
