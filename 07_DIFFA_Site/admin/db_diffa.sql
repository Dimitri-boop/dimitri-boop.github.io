-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 10 mars 2021 à 19:38
-- Version du serveur :  10.4.17-MariaDB
-- Version de PHP : 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `db_diffa`
--

-- --------------------------------------------------------

--
-- Structure de la table `apropos`
--

CREATE TABLE `apropos` (
  `id` int(11) NOT NULL,
  `titre1` varchar(2000) NOT NULL,
  `text1` varchar(2000) NOT NULL,
  `image1` varchar(2000) NOT NULL,
  `titre2` varchar(2000) NOT NULL,
  `text2` varchar(2000) NOT NULL,
  `image2` varchar(2000) NOT NULL,
  `titre3` varchar(2000) NOT NULL,
  `text3` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `apropos`
--

INSERT INTO `apropos` (`id`, `titre1`, `text1`, `image1`, `titre2`, `text2`, `image2`, `titre3`, `text3`) VALUES
(1, '<p>titr</p>', '<p>Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligulaqssdqsdqsdqsdqsd porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>', 'Plat_Diffa_01.jpg', '<p>titre2</p>', '<p>Mais on ? ULLAMCORPER nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.656565 qsdqsdqsd</p>', 'Plat_Diffa_02.jpg', '<p>titre3</p>', '<p>C est sur on ? ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commoqsdqsddqsdqsdqsdo.qssqs</p>');

-- --------------------------------------------------------

--
-- Structure de la table `carte`
--

CREATE TABLE `carte` (
  `id` int(11) NOT NULL,
  `cartePresentation` varchar(2000) CHARACTER SET latin1 NOT NULL,
  `sliderTitre1` varchar(2000) CHARACTER SET latin1 NOT NULL,
  `sliderTitre2` varchar(2000) CHARACTER SET latin1 NOT NULL,
  `sliderTitre3` varchar(2000) CHARACTER SET latin1 NOT NULL,
  `sliderText1` varchar(2000) CHARACTER SET latin1 NOT NULL,
  `sliderText2` varchar(2000) CHARACTER SET latin1 NOT NULL,
  `sliderText3` varchar(2000) CHARACTER SET latin1 NOT NULL,
  `sliderImage1` varchar(2000) CHARACTER SET latin1 NOT NULL,
  `sliderImage2` varchar(2000) CHARACTER SET latin1 NOT NULL,
  `sliderImage3` varchar(2000) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `carte`
--

INSERT INTO `carte` (`id`, `cartePresentation`, `sliderTitre1`, `sliderTitre2`, `sliderTitre3`, `sliderText1`, `sliderText2`, `sliderText3`, `sliderImage1`, `sliderImage2`, `sliderImage3`) VALUES
(1, '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore sit quasi fuga, mollitia sapiente perferendis, ipsa sequi consequuntur maiores sed nostrum inventore error vero nisi, possimus impedit rerum. Esse, nam.s11111</p>', 'Titre Slide 1s', 'Titre Slide 2s', 'Titre Slide 3s', '<p>1Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.1Lorem ipsum do', '<p>2Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>', '<p>3Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.consequatconseq', 'interieur1.jpg', 'interieur4.jpg', 'interieur1.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `restaurant`
--

CREATE TABLE `restaurant` (
  `id` int(11) NOT NULL,
  `textPresentation` varchar(2000) NOT NULL,
  `restaurantTerrasse1` varchar(2000) NOT NULL,
  `restaurantTerrasse2` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `restaurant`
--

INSERT INTO `restaurant` (`id`, `textPresentation`, `restaurantTerrasse1`, `restaurantTerrasse2`) VALUES
(1, '123Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla varius sapien vitae augue maximus vehicula. Aenean posuere nunc sed ligula elementum, eget sagittis dolor condimentum. Proin id nulla nec quam bibendum imperdiet. Pellentesque eu enims', 'Exterieur_Diffa_03.png', 'Exterieur_Diffa_01.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

CREATE TABLE `utilisateurs` (
  `mdp` varchar(250) NOT NULL,
  `identifiant` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`mdp`, `identifiant`) VALUES
('$2y$10$2iwWijYpNsRsMTHDmdh4s.znD5RTzpJ/SYiSPRlMXVwhzQf6WzgRC', 'Dimitri');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `apropos`
--
ALTER TABLE `apropos`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `carte`
--
ALTER TABLE `carte`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `restaurant`
--
ALTER TABLE `restaurant`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `apropos`
--
ALTER TABLE `apropos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `carte`
--
ALTER TABLE `carte`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `restaurant`
--
ALTER TABLE `restaurant`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
