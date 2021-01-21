-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.7.24 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping data for table recrutement.emtreprise: 3 rows
DELETE FROM `emtreprise`;
/*!40000 ALTER TABLE `emtreprise` DISABLE KEYS */;
INSERT INTO `emtreprise` (`nom`, `adresse`, `domaine`, `email`, `mpd`, `matricule`) VALUES
	('DCN-Technologie', 'Rue DALAGOU', 'Développement informatique', 'eliasdando@gmail.com', 'dando', 1),
	('gedeon', 'agoue', 'sodks,dsdiod', 'amoussougedeon@gmail.com', 'ged', 2),
	('tpg', 'agoue', 'informatique et finance', 'amoussougedeon20@gmail.com', 'gedeon', 3);
/*!40000 ALTER TABLE `emtreprise` ENABLE KEYS */;

-- Dumping data for table recrutement.info: ~1 rows (approximately)
DELETE FROM `info`;
/*!40000 ALTER TABLE `info` DISABLE KEYS */;
INSERT INTO `info` (`matricule`, `cvdefinie`, `certification`, `siteweb`, `facebook`, `competence`, `nom`, `prenom`, `email`, `sexe`, `profession`, `photo`) VALUES
	(3, 'TRUE', 'adobe', 'gedeon.com', 'none', 'analyste financier', 'amoussou', 'gedeon', 'amoussougedeon13@gmail.com', 'M', 'etudient', 'defaut');
/*!40000 ALTER TABLE `info` ENABLE KEYS */;

-- Dumping data for table recrutement.job: ~6 rows (approximately)
DELETE FROM `job`;
/*!40000 ALTER TABLE `job` DISABLE KEYS */;
INSERT INTO `job` (`id`, `contrat`, `post`, `localisation`, `description`, `temps`, `niveau`, `salaireMin`, `salaireMax`, `image`, `name`) VALUES
	(1, 'Stage', 'Stage en marketing Commercial - Logex', 'Be Klikame, Atikoume', 'Nous recherchons un (e) Charge (e) de Clientele pour mettre en place une strategie permettant de con...', '2020-12-14', 'BAC+2', '35000', '50000', 'default.png', 'DCN Tchenologies'),
	(2, 'CDD', 'Psychologue Clinicien', 'Atakpame - Lome - Sokode - International', 'Sous la direction du Directeur Executif et la responsabilite fonctionnelle de la direction des progr...', '2020-12-15', 'BAC+4', '150000', '200000', 'indien.jpg', 'DCN Technologies'),
	(3, 'CDI', 'Scout-eclaireur - Avepozo /Baguida', 'Avepozo / Baguida', 'Votre mission consiste e etre sur le terrain, etudier le marche et la faisabilite du projet. Votre...', '2020-12-16', 'BAC+2', '80000', '100000', '27.jpg', 'DCN'),
	(4, 'CDI', 'Representant Acquisition Chauffeur- Avepozo / Baguida', 'Avepozo / Baguida', 'Ce que vous allez faire Faire la promotion de Gozem aupres des taxis et Zemidjan Determiner les...', '2020-12-23', 'BAC+2', '50000', '100000', '28.jpg', 'DCN'),
	(5, 'CDI', 'Expert Securite Alimentaire, Nutrition et Hygiene - Atakpame', 'Atakpame ville', 'La « GFA-Consulting Group », GFA en sigle, par l\'intermediaire de son Projet de-nomme Programme Secu...\r\n', '2020-12-16', 'BAC+4', '200000', '300000', '29.jpg', 'DCN'),
	(6, 'Stage', 'Stage Commercial (H/F) - Lome', 'Ablogame, Lome', 'H&C MAGAZINES TOGO Sarl, filiale de H&C Group present dans 15 pays et leader en Afrique centrale et...', '2020-12-17', 'BAC+2', '50000', '70000', '30.jpg', 'DCN');
/*!40000 ALTER TABLE `job` ENABLE KEYS */;

-- Dumping data for table recrutement.jobs: 27 rows
DELETE FROM `jobs`;
/*!40000 ALTER TABLE `jobs` DISABLE KEYS */;
INSERT INTO `jobs` (`id`, `contrat`, `post`, `localisation`, `description`, `temps`, `niveau`, `salaireMin`, `salaireMax`, `image`, `name`, `societeid`, `postuleid`) VALUES
	(1, 'Stage', 'Stage en marketing Commercial - Logex', 'atapkame', 'Nous recherchons un (e) Charge (e) de Clientele pour mettre en place une strategie permettant de con...', '2020-12-14', 'BAC+2', '35000', '50000', 'default.png', 'DCN Tchenologies', 3, ' 3 9'),
	(2, 'CDD', 'Psychologue Clinicien', 'dapaong', 'Sous la direction du Directeur Executif et la responsabilite fonctionnelle de la direction des progr...', '2020-12-15', 'BAC+4', '150000', '200000', 'indien.jpg', 'DCN Technologies', 3, NULL),
	(3, 'CDI', 'Scout-eclaireur - Avepozo /Baguida', 'sokode', 'Votre mission consiste e etre sur le terrain, etudier le marche et la faisabilite du projet. Votre...', '2020-12-16', 'BAC+2', '80000', '100000', '27.jpg', 'DCN', 2, NULL),
	(4, 'CDI', 'Representant Acquisition Chauffeur- Avepozo / Baguida', 'lome', 'Ce que vous allez faire Faire la promotion de Gozem aupres des taxis et Zemidjan Determiner les...', '2020-12-23', 'BAC+2', '50000', '100000', '28.jpg', 'DCN', 1, NULL),
	(5, 'CDI', 'Expert Securite Alimentaire, Nutrition et Hygiene - Atakpame', 'atakpame', 'La « GFA-Consulting Group », GFA en sigle, par l\'intermediaire de son Projet de-nomme Programme Secu...\r\n', '2020-12-16', 'BAC+4', '200000', '300000', '29.jpg', 'DCN', 1, NULL),
	(6, 'Stage', 'Stage Commercial (H/F) - Lome', 'lome', 'H&C MAGAZINES TOGO Sarl, filiale de H&C Group present dans 15 pays et leader en Afrique centrale et...', '2020-12-17', 'BAC+2', '50000', '70000', '30.jpg', 'DCN', 1, NULL),
	(31, 'TempsPlein', 'ingenieur ', 'lome', 'nous fv jkjgbggb kj gij', '2021-01-19', 'BAC+3', '120000', '350000', 'fichier_du_20210113174907.png', 'DCN', 1, NULL),
	(30, 'CDD', 'stage', 'atakpame', 'nous kdld ddsk d ld\'ldl s\'d da', '2021-01-14', 'BAC+3', '100000', '200000', 'default.png', 'DCN', 2, '99'),
	(23, 'TempsPlein', 'stage', 'lome', 'cool', '2021-01-10', 'Autodidacte', '10000', '20000', 'fichier_du_20210110094916.jpg', 'DCN', 2, NULL),
	(24, 'TempsPlein', 'stage', 'lome', 'cool', '2021-01-10', 'Autodidacte', '10000', '20000', 'fichier_du_20210110095125.jpg', 'DCN', 2, ' 3'),
	(25, 'TempsPlein', 'stage', 'lome', 'cool', '2021-01-10', 'Autodidacte', '10000', '20000', 'fichier_du_20210110095753.jpg', 'DCN', 2, NULL),
	(26, 'TempsPlein', 'stage', 'lome', 'cool', '2021-01-10', 'Autodidacte', '10000', '20000', 'fichier_du_20210110095856.jpg', 'DCN', 2, NULL),
	(27, 'TempsPlein', 'stage', 'lome', 'cool', '2021-01-10', 'Autodidacte', '10000', '20000', 'fichier_du_20210110095915.jpg', 'DCN', 3, ' 3'),
	(28, 'Stage', 'stage de gedeon', 'lome', 'ok', '2021-01-28', 'Autodidacte', '30000', '50000', 'fichier_du_20210110123709.jpg', 'DCN', 3, ' 3'),
	(29, 'CDD', 'stage de ouf', 'atakpame', 'salut', '2021-01-28', 'BAC+3', '30000', '50000', 'fichier_du_20210110130232.jpg', 'DCN', 3, ' 3 9'),
	(32, 'TempsPlein', 'ingenieur ', 'lome', 'nous fv jkjgbggb kj gij', '2021-01-19', 'BAC+3', '120000', '350000', 'fichier_du_20210113174939.png', 'DCN', 3, NULL),
	(33, 'TempsPlein', 'ingenieur ', 'lome', 'nous fv jkjgbggb kj gij', '2021-01-19', 'BAC+3', '120000', '350000', 'fichier_du_20210113175512.png', 'DCN', 3, ' 3'),
	(34, 'TempsPlein', 'ingenieur ', 'lome', 'nous fv jkjgbggb kj gij', '2021-01-19', 'BAC+3', '120000', '350000', 'fichier_du_20210113175652.png', 'DCN', 3, NULL),
	(35, 'TempsPlein', 'ingenieur ', 'lome', 'nous fv jkjgbggb kj gij', '2021-01-19', 'BAC+3', '120000', '350000', 'fichier_du_20210113175847.png', 'DCN', 2, ''),
	(36, 'CDD', 'nop', 'sokode', 'efmioperuerc[rcrc r cr urcw ucru cr urce', '2021-01-28', 'BAC+3', '100000', '200000', 'fichier_du_20210113222614.jpg', 'DCN', 1, NULL),
	(37, 'CDD', 'nop', 'sokode', 'efmioperuerc[rcrc r cr urcw ucru cr urce', '2021-01-28', 'BAC+3', '100000', '200000', 'fichier_du_20210113223050.jpg', 'gedeon', 2, ' 3'),
	(38, 'CDD', 'nop', 'sokode', 'efmioperuerc[rcrc r cr urcw ucru cr urce', '2021-01-28', 'BAC+3', '100000', '200000', 'fichier_du_20210113223250.jpg', 'gedeon', 2, ' 3'),
	(39, 'CDD', 'nop', 'sokode', 'efmioperuerc[rcrc r cr urcw ucru cr urce', '2021-01-28', 'BAC+3', '100000', '200000', 'fichier_du_20210113234333.jpg', 'gedeon', 2, ' 3'),
	(40, 'CDD', 'nop', 'sokode', 'efmioperuerc[rcrc r cr urcw ucru cr urce', '2021-01-28', 'BAC+3', '100000', '200000', 'fichier_du_20210113234346.jpg', 'gedeon', 2, NULL),
	(41, 'CDD', 'nop', 'sokode', 'efmioperuerc[rcrc r cr urcw ucru cr urce', '2021-01-28', 'BAC+3', '100000', '200000', 'fichier_du_20210113234349.jpg', 'gedeon', 2, ' 3'),
	(42, 'Stage', 'stage en e3lkdekedoked,pxe', 'sokode', 'w nlkqwkeqwh xerf hx;oewxrerh;exrh', '2021-01-27', 'BAC+5', '200000', '300000', 'default.png', 'gedeon', 2, ''),
	(43, 'TempsPartiel', 'informaticien de moov', 'sokode', 'nous cherchons un  ingenieur experiemnter en c/c++ et en php ', '2021-01-20', 'BAC+5', '200000', '300000', 'fichier_du_20210116065043.jpg', 'gedeon', 2, NULL);
/*!40000 ALTER TABLE `jobs` ENABLE KEYS */;

-- Dumping data for table recrutement.user: 9 rows
DELETE FROM `user`;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` (`nom`, `prenom`, `sexe`, `profession`, `email`, `mpd`, `matricule`) VALUES
	('Ketekou', 'Makafui william', 'M', 'dev', 'mketekou@gmail.com', 'liam12', 1),
	('makafui', 'liam', 'M', 'ingénieure bâtiment', 'liam@gmail.com', '1802', 2),
	('amoussou', 'gedeon', 'M', 'etudient', 'amoussougedeon13@gmail.com', 'ged13', 3),
	('essey', 'fernande', 'F', 'etudiente', 'amoussougedeon20@gmail.com', 'ged13', 4),
	('essey', 'fernande', 'F', 'lldslds', 'amoussougedeon22@gmail.com', 'ged13', 5),
	('essey', 'fernande', 'F', 'etudient', 'amoussougedeon92@gmail.com', '13', 6),
	('essey', 'fernande', 'M', 'etudiente', 'amoussougedeon52@gmail.com', '11', 7),
	('essey', 'fernande', 'M', 'etudient', 'amoussougedeon002@gmail.com', 'y', 8),
	('messi', 'leo', 'M', 'footbaleur', 'leo@gmail.com', 'leo', 9);
/*!40000 ALTER TABLE `user` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
