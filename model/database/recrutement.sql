-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 31, 2020 at 03:42 PM
-- Server version: 10.3.20-MariaDB-1
-- PHP Version: 7.3.10-1+b1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `recrutement`
--

-- --------------------------------------------------------

--
-- Table structure for table `emtreprise`
--

CREATE TABLE `emtreprise` (
  `nom` varchar(50) COLLATE utf8_bin NOT NULL,
  `adresse` varchar(50) COLLATE utf8_bin NOT NULL,
  `domaine` text COLLATE utf8_bin NOT NULL,
  `email` varchar(50) COLLATE utf8_bin NOT NULL,
  `mpd` varchar(50) COLLATE utf8_bin NOT NULL,
  `matricule` int(4) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `emtreprise`
--

INSERT INTO `emtreprise` (`nom`, `adresse`, `domaine`, `email`, `mpd`, `matricule`) VALUES
('DCN-Technologie', 'Rue DALAGOU', 'Développement informatique', 'eliasdando@gmail.com', 'dando', 1);

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` int(11) NOT NULL,
  `contrat` text NOT NULL,
  `post` text NOT NULL,
  `localisation` text NOT NULL,
  `description` text NOT NULL,
  `temps` date NOT NULL,
  `niveau` text NOT NULL,
  `salaireMin` text NOT NULL,
  `salaireMax` text NOT NULL,
  `image` text NOT NULL,
  `name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`id`, `contrat`, `post`, `localisation`, `description`, `temps`, `niveau`, `salaireMin`, `salaireMax`, `image`, `name`) VALUES
(1, 'Stage', 'Stage en marketing Commercial - Logex', 'Bè Klikamé, Atikoumé', 'Nous recherchons un (e) Chargé (e) de Clientèle pour mettre en place une stratégie permettant de con...', '2020-12-14', 'BAC+2', '35000', '50000', 'default.png', 'DCN Tchenologies'),
(2, 'CDD', 'Psychologue Clinicien', 'Atakpamé - Lomé - Sokodé - International', 'Sous la direction du Directeur Exécutif et la responsabilité fonctionnelle de la direction des progr...', '2020-12-15', 'BAC+4', '150000', '200000', 'indien.jpg', 'DCN Technologies'),
(3, 'CDI', 'Scout-Éclaireur - Avepozo /Baguida', 'Avepozo / Baguida', 'Votre mission consiste à être sur le terrain, étudier le marché et la faisabilité du projet. Votre...', '2020-12-16', 'BAC+2', '80000', '100000', '27.jpg', 'DCN'),
(4, 'CDI', 'Représentant Acquisition Chauffeur- Avepozo / Baguida', 'Avepozo / Baguida', 'Ce que vous allez faire Faire la promotion de Gozem auprès des taxis et Zemidjan Déterminer les...', '2020-12-23', 'BAC+2', '50000', '100000', '28.jpg', 'DCN'),
(5, 'CDI', 'Expert Sécurité Alimentaire, Nutrition et Hygiène - Atakpamé', 'Atakpamé ville', 'La « GFA-Consulting Group », GFA en sigle, par lintermédiaire de son Projet dé-nommé Programme Sécu...\r\n', '2020-12-16', 'BAC+4', '200000', '300000', '29.jpg', 'DCN'),
(6, 'Stage', 'Stage Commercial (H/F) - Lomé', 'Ablogamé, Lomé', 'H&C MAGAZINES TOGO Sarl, filiale de H&C Group présent dans 15 pays et leader en Afrique centrale et...', '2020-12-17', 'BAC+2', '50000', '70000', '30.jpg', 'DCN'),
(16, 'CDD', 'Archiviste Documentaliste Et Informaticien / Informaticienne', 'Dékon, Lomé', 'Nous recherchons pour une mission de trois mois à Lomé : Un/e Archiviste Documentaliste, Inform...', '2020-12-25', 'BAC+3', '150000', '300000', 'fichier_du_20201231063848.jpg', 'DCN Technologies');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `nom` varchar(50) COLLATE utf8_bin NOT NULL,
  `prenom` varchar(50) COLLATE utf8_bin NOT NULL,
  `sexe` varchar(2) COLLATE utf8_bin NOT NULL,
  `profession` varchar(50) COLLATE utf8_bin NOT NULL,
  `email` varchar(50) COLLATE utf8_bin NOT NULL,
  `mpd` varchar(50) COLLATE utf8_bin NOT NULL,
  `matricule` int(4) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`nom`, `prenom`, `sexe`, `profession`, `email`, `mpd`, `matricule`) VALUES
('Ketekou', 'Makafui william', 'M', 'dev', 'mketekou@gmail.com', 'liam12', 1),
('makafui', 'liam', 'M', 'ingénieure bâtiment', 'liam@gmail.com', '1802', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `emtreprise`
--
ALTER TABLE `emtreprise`
  ADD PRIMARY KEY (`matricule`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`matricule`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `emtreprise`
--
ALTER TABLE `emtreprise`
  MODIFY `matricule` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `matricule` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
