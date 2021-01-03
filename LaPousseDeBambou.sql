-- phpMyAdmin SQL Dump
-- version 4.6.6deb4+deb9u1
-- https://www.phpmyadmin.net/
--
-- Client :  localhost:3306
-- Généré le :  Dim 13 Décembre 2020 à 16:02
-- Version du serveur :  10.1.45-MariaDB-0+deb9u1
-- Version de PHP :  7.0.33-0+deb9u10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `LaPousseDeBambou`
--

-- --------------------------------------------------------

--
-- Structure de la table `Admins`
--

CREATE TABLE `Admins` (
  `id_admin` int(11) NOT NULL,
  `login` varchar(54) NOT NULL,
  `mdp` varchar(130) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `Admins`
--

INSERT INTO `Admins` (`id_admin`, `login`, `mdp`) VALUES
(1, 'admin', '8c6976e5b5410415bde908bd4dee15dfb167a9c873fc4bb8a81f6f2ab448a918');

-- --------------------------------------------------------

--
-- Structure de la table `Clients`
--

CREATE TABLE `Clients` (
  `id_client` int(11) NOT NULL,
  `nom_client` varchar(24) NOT NULL,
  `email` varchar(42) NOT NULL,
  `tel` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `Clients`
--

INSERT INTO `Clients` (`id_client`, `nom_client`, `email`, `tel`) VALUES
(1, 'Amelie V', 'ameliev@gmail.com', 623679086),
(2, 'Valerie Mizorek', 'vmizo@hotmail.fr', 687432456);

-- --------------------------------------------------------

--
-- Structure de la table `Messages`
--

CREATE TABLE `Messages` (
  `id_message` int(11) NOT NULL,
  `email` varchar(64) NOT NULL,
  `object` varchar(64) NOT NULL,
  `message` varchar(200) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `Messages`
--

INSERT INTO `Messages` (`id_message`, `email`, `object`, `message`, `date`) VALUES
(1, 'ameliev@gmail.com', 'Demande d\'information', 'Bonjour, j\'aurais une question. Concernant vos menus, sont-ils vegan ? Cordialement, Amelie V', '2020-11-18 15:27:40'),
(2, 'ameliev@gmail.com', 'Demande d\'information 2', 'Bonjour, j\'aurais une autre question. Vos plats sont-ils d\'origine ? Cordialement, Amelie V', '2020-11-18 15:28:46'),
(3, 'andrel@ymail.com', 'Recommandation', 'Bonjour, j\'ai eu le plaisir d\'essayer votre restaurant la semaine passée et j\'aimerais vous faire savoir que j\'ai beaucoup apprécié et le recommanderais vivement à l\'avenir. Bien cordialement, Andre L', '2020-11-18 15:47:00'),
(4, 'julienv@gmail.com', 'Bonjour', 'Bonjour, ce serait pour savoir si votre restaurant accepterait des candidatures. Cordialement, Julien V.\\n envoyé par Julien V ', '2020-11-30 10:21:52'),
(5, 'vmaeri@lmail.fr', 'Object', 'simple message pour tester que ça fonctionne. envoyé par Vincent Maeri ', '2020-12-05 18:57:52');

-- --------------------------------------------------------

--
-- Structure de la table `Plats`
--

CREATE TABLE `Plats` (
  `id_plat` int(11) NOT NULL,
  `nom_plat` varchar(44) NOT NULL,
  `description` varchar(124) NOT NULL,
  `id_type` int(11) NOT NULL,
  `prix_euros` decimal(10,2) NOT NULL,
  `img_plat` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `Plats`
--

INSERT INTO `Plats` (`id_plat`, `nom_plat`, `description`, `id_type`, `prix_euros`, `img_plat`) VALUES
(1, 'Raviolis porc crevettes', 'champignons noirs, carotte, ail, filet de porc, crevettes cuites et décortiquées, sauce soja, vinaigre de riz\r\n', 1, '4.30', 'app/assets/img/menu/raviolis.jpg'),
(2, 'Soupe aux fèves de soya et au tofu tendre', 'gousses d\'ail, bouillon de poulet, fèves de soya, gingembre frais, tofu, sauce soya , oignon vert, coriandre fraîche', 1, '4.30', 'app/assets/img/menu/soupe-soja.jpg'),
(3, 'Potage aux fruits de mer', 'fruits de mer, lait de coco, crème liquide, oignons, gousse d’ail, estragon, basilic, gingembre, fumet de poisson', 1, '5.00', 'app/assets/img/menu/soupe-mer.jpg'),
(4, 'Salade de légumes avec graines de sésame', 'carotte, courgette, panais, choux canut, oignon vert, concombre, sésame blond ', 1, '5.00', 'app/assets/img/menu/sal-sesame.jpg'),
(5, 'Nouilles au poulet parsemées de menthe', 'nouilles fines de riz, menthe, graines de sésame noir, citron vert, filet de poulet', 2, '7.50', 'app/assets/img/menu/n-menthe.jpg'),
(6, 'Gateau aux amandes', 'beurre, farine, amandes, poudre d\'amande, sucre ', 3, '4.25', 'app/assets/img/menu/amande.jpg'),
(7, 'Emincé de viande et coulis de caramel', 'canard, caramel, légumes verts, salade', 2, '8.90', 'app/assets/img/menu/emince-viande.jpg'),
(8, 'Nouilles sautées dans leur lit de légumes', 'nouilles, légumes, épices', 2, '9.64', 'app/assets/img/menu/nouille-sautee.jpg'),
(9, 'Glace bingqilin', 'de nombreux parfums disponibles tels que fraise, vanille, noix de coco,..', 3, '5.30', 'app/assets/img/menu/glace.jpg'),
(10, 'Nems de banane au chocolat blanc', 'banane, chocolat blanc, farine, oeuf, sucre', 3, '5.20', 'app/assets/img/menu/banane.jpg'),
(11, 'Baozi à la vapeur', 'pate, légumes, boeuf/porc', 2, '8.30', 'app/assets/img/menu/baozi.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `Reservations`
--

CREATE TABLE `Reservations` (
  `id_reservation` int(11) NOT NULL,
  `id_client` int(11) NOT NULL,
  `clients_nb` int(11) NOT NULL,
  `date` datetime NOT NULL,
  `message` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `Reservations`
--

INSERT INTO `Reservations` (`id_reservation`, `id_client`, `clients_nb`, `date`, `message`) VALUES
(1, 1, 3, '2021-01-05 13:15:13', ' '),
(2, 2, 5, '2021-02-11 12:20:12', '');

-- --------------------------------------------------------

--
-- Structure de la table `Types`
--

CREATE TABLE `Types` (
  `id_type` int(11) NOT NULL,
  `nom_type` varchar(14) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `Types`
--

INSERT INTO `Types` (`id_type`, `nom_type`) VALUES
(1, 'entrée'),
(2, 'main'),
(3, 'dessert');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `Admins`
--
ALTER TABLE `Admins`
  ADD PRIMARY KEY (`id_admin`);

--
-- Index pour la table `Clients`
--
ALTER TABLE `Clients`
  ADD PRIMARY KEY (`id_client`);

--
-- Index pour la table `Messages`
--
ALTER TABLE `Messages`
  ADD PRIMARY KEY (`id_message`);

--
-- Index pour la table `Plats`
--
ALTER TABLE `Plats`
  ADD PRIMARY KEY (`id_plat`),
  ADD KEY `id_type` (`id_type`);

--
-- Index pour la table `Reservations`
--
ALTER TABLE `Reservations`
  ADD PRIMARY KEY (`id_reservation`),
  ADD KEY `id_client` (`id_client`);

--
-- Index pour la table `Types`
--
ALTER TABLE `Types`
  ADD PRIMARY KEY (`id_type`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `Admins`
--
ALTER TABLE `Admins`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `Clients`
--
ALTER TABLE `Clients`
  MODIFY `id_client` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `Messages`
--
ALTER TABLE `Messages`
  MODIFY `id_message` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT pour la table `Plats`
--
ALTER TABLE `Plats`
  MODIFY `id_plat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT pour la table `Reservations`
--
ALTER TABLE `Reservations`
  MODIFY `id_reservation` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `Types`
--
ALTER TABLE `Types`
  MODIFY `id_type` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `Plats`
--
ALTER TABLE `Plats`
  ADD CONSTRAINT `Plats_ibfk_1` FOREIGN KEY (`id_type`) REFERENCES `Types` (`id_type`);

--
-- Contraintes pour la table `Reservations`
--
ALTER TABLE `Reservations`
  ADD CONSTRAINT `Reservations_ibfk_1` FOREIGN KEY (`id_client`) REFERENCES `Clients` (`id_client`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
