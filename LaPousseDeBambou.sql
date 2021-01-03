-- phpMyAdmin SQL Dump
-- version 4.6.6deb4+deb9u1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 16, 2020 at 10:58 AM
-- Server version: 10.1.45-MariaDB-0+deb9u1
-- PHP Version: 7.0.33-0+deb9u10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `LaPousseDeBambou`
--

-- --------------------------------------------------------

--
-- Table structure for table `Clients`
--

CREATE TABLE `Clients` (
  `id_client` int(11) NOT NULL,
  `nom_client` varchar(24) NOT NULL,
  `email` varchar(42) NOT NULL,
  `tel` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `Plats`
--

CREATE TABLE `Plats` (
  `id_plat` int(11) NOT NULL,
  `nom_plat` varchar(44) NOT NULL,
  `description` varchar(124) NOT NULL,
  `id_type` int(11) NOT NULL,
  `prix_euros` decimal(3,2) NOT NULL,
  `img_plat` varchar(34) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Plats`
--

INSERT INTO `Plats` (`id_plat`, `nom_plat`, `description`, `id_type`, `prix_euros`, `img_plat`) VALUES
(1, 'raviolis porc crevettes', 'champignons noirs, carotte, ail, filet de porc, crevettes cuites et décortiquées, sauce soja, vinaigre de riz\r\n', 1, '4.30', 'assets/img/menu/raviolis.jpg'),
(2, 'Soupe aux fèves de soya et au tofu tendre', 'gousses d\'ail, bouillon de poulet, fèves de soya, gingembre frais, tofu, sauce soya , oignon vert, coriandre fraîche', 1, '4.30', 'assets/img/menu/soupe-soja.jpg'),
(3, 'Potage aux fruits de mer', 'fruits de mer, lait de coco, crème liquide, oignons, gousse d’ail, estragon, basilic, gingembre, fumet de poisson', 1, '5.00', 'assets/img/menu/soupe-mer.jpg'),
(4, 'Salade de légumes avec graines de sésame', 'carotte, courgette, panais, choux canut, oignon vert, concombre, sésame blond ', 1, '5.00', 'assets/img/menu/salade-sesame.jpg'),
(5, 'Nouilles au poulet parsemées de menthe', 'nouilles fines de riz, menthe, graines de sésame noir, citron vert, filet de poulet', 2, '7.50', 'assets/img/menu/nouille-menthe.jpg'),
(6, 'Gateau aux amandes', 'beurre, farine, amandes, poudre d\'amande, sucre ', 3, '4.25', 'assets/img/menu/amande.jpg'),
(7, 'Emincé de viande et coulis de caramel', 'canard, caramel, légumes verts, salade', 2, '8.90', 'assets/img/menu/emince-viande.jpg'),
(8, 'Nouilles sautées dans leur lit de légumes', 'nouilles, légumes, épices', 2, '9.64', 'assets/img/menu/nouille-sautee.jpg'),
(9, 'Glace bingqilin', 'de nombreux parfums disponible', 3, '5.30', 'assets/img/menu/glace.jpg'),
(10, 'Nems de banane au chocolat blanc', 'banane, chocolat blanc, farine, oeuf, sucre', 3, '5.20', 'assets/img/menu/banane.jpg'),
(11, 'Baozi à la vapeur', 'pate, légumes, boeuf/porc', 2, '8.30', 'assets/img/menu/baozi.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `Reservations`
--

CREATE TABLE `Reservations` (
  `id_reservation` int(11) NOT NULL,
  `id_client` int(11) NOT NULL,
  `clients_nb` int(11) NOT NULL,
  `date` datetime NOT NULL,
  `is_approved` tinyint(1) NOT NULL,
  `message` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `Types`
--

CREATE TABLE `Types` (
  `id_type` int(11) NOT NULL,
  `nom_type` varchar(14) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Types`
--

INSERT INTO `Types` (`id_type`, `nom_type`) VALUES
(1, 'entrée'),
(2, 'main'),
(3, 'dessert');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Clients`
--
ALTER TABLE `Clients`
  ADD PRIMARY KEY (`id_client`);

--
-- Indexes for table `Plats`
--
ALTER TABLE `Plats`
  ADD PRIMARY KEY (`id_plat`),
  ADD KEY `id_type` (`id_type`);

--
-- Indexes for table `Reservations`
--
ALTER TABLE `Reservations`
  ADD PRIMARY KEY (`id_reservation`),
  ADD KEY `id_client` (`id_client`);

--
-- Indexes for table `Types`
--
ALTER TABLE `Types`
  ADD PRIMARY KEY (`id_type`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Clients`
--
ALTER TABLE `Clients`
  MODIFY `id_client` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `Plats`
--
ALTER TABLE `Plats`
  MODIFY `id_plat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `Reservations`
--
ALTER TABLE `Reservations`
  MODIFY `id_reservation` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `Types`
--
ALTER TABLE `Types`
  MODIFY `id_type` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `Plats`
--
ALTER TABLE `Plats`
  ADD CONSTRAINT `Plats_ibfk_1` FOREIGN KEY (`id_type`) REFERENCES `Types` (`id_type`);

--
-- Constraints for table `Reservations`
--
ALTER TABLE `Reservations`
  ADD CONSTRAINT `Reservations_ibfk_1` FOREIGN KEY (`id_client`) REFERENCES `Clients` (`id_client`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
