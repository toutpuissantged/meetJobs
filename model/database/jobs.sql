-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 02, 2021 at 07:42 AM
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
(6, 'Stage', 'Stage Commercial (H/F) - Lomé', 'Ablogamé, Lomé', 'H&C MAGAZINES TOGO Sarl, filiale de H&C Group présent dans 15 pays et leader en Afrique centrale et...', '2020-12-17', 'BAC+2', '50000', '70000', '30.jpg', 'DCN');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
