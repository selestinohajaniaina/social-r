-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  lun. 06 fév. 2023 à 06:37
-- Version du serveur :  10.4.10-MariaDB
-- Version de PHP :  7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `compte`
--

-- --------------------------------------------------------

--
-- Structure de la table `information`
--

DROP TABLE IF EXISTS `information`;
CREATE TABLE IF NOT EXISTS `information` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` text NOT NULL,
  `prenom` text NOT NULL,
  `passe` varchar(50) NOT NULL,
  `photo` varchar(1000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `information`
--

INSERT INTO `information` (`id`, `nom`, `prenom`, `passe`, `photo`) VALUES
(1, 'HAJANIAINA', 'selestino', '123', 'picture/sary.jpg'),
(2, 'siry', 'siry', 'siry', 'picture/icon'),
(3, 'koto', 'koto', 'koto', 'picture/0dc3871b-6579-4ec9-95cb-0b3dda7a6a96.jpg'),
(4, 'MANANKAJA', 'sylvie', 'sylvie', 'picture/5e46b11ff20d5a642285ebbe.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `mp`
--

DROP TABLE IF EXISTS `mp`;
CREATE TABLE IF NOT EXISTS `mp` (
  `num_mp` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(100) NOT NULL,
  `texte` varchar(50000) NOT NULL,
  PRIMARY KEY (`num_mp`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `mp`
--

INSERT INTO `mp` (`num_mp`, `user`, `texte`) VALUES
(1, 'selestino//siry', '//siry_zh fon io//siry_yaya//siry_ew ew//selestino_bonjour//selestino_hello//siry_hello//siry_123//siry_bonjpur'),
(2, 'sylvie//siry', ''),
(3, 'koto//siry', '//siry_bonjour'),
(4, 'selestino//sylvie', '//sylvie_bonjour//selestino_salama e');

-- --------------------------------------------------------

--
-- Structure de la table `publication`
--

DROP TABLE IF EXISTS `publication`;
CREATE TABLE IF NOT EXISTS `publication` (
  `idpost` int(11) NOT NULL AUTO_INCREMENT,
  `auteur` text NOT NULL,
  `legende` varchar(1000) DEFAULT NULL,
  `image` varchar(1000) DEFAULT NULL,
  `coms` varchar(5000) DEFAULT NULL,
  PRIMARY KEY (`idpost`)
) ENGINE=MyISAM AUTO_INCREMENT=39 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `publication`
--

INSERT INTO `publication` (`idpost`, `auteur`, `legende`, `image`, `coms`) VALUES
(19, '2', 'mon lundi', 'picture/93085aca-2c33-427a-9d7d-c831877d3aa3.jpg', NULL),
(22, '3', 'logo', 'picture/mihaja.png', NULL),
(24, '3', '1234', 'picture/0eb96028-f480-40d7-8caf-bec6ee36808b.jpg', NULL),
(25, '4', 'tsy zah tsy izy ðŸ˜‚ðŸ¤£ðŸ˜œ', 'picture/Snapchat-81189845.jpg', NULL),
(26, '4', 'kkkkkkkkkkkkkkkkk\r\nðŸ¤£ðŸ¤£ðŸ¤£ðŸ¤£ðŸ¤£ðŸ¤£', 'picture/Snapchat-1044449304.jpg', NULL),
(27, '2', 'Mon LundiðŸ•ðŸ°ðŸ¡', 'picture/Snapchat-2014614444.jpg', NULL),
(32, '1', 'premier test', 'picture/facebook (2).png', NULL),
(33, '4', 'ts zh ts izy', 'picture/icon (2).jpg', NULL),
(31, '1', '#rica_rido', 'picture/a565ff76-717e-43f2-b1e0-8f110643c7fborca-image-1147141353.jpeg', NULL),
(30, '2', 'tokon mb met am zay ee ðŸ§€ðŸ§€ðŸ¿ðŸŸ kwkwkwkwkw aon ee 123 456 789', 'picture/Snapchat-1966746060.jpg', NULL),
(37, '1', 'vuyfyudq', 'picture/icon (9).png', NULL),
(38, '1', 'ðŸ¤£ðŸ˜’ðŸ‘€(âŒâ– _â– )â˜œ(ï¾Ÿãƒ®ï¾Ÿâ˜œ)(ï¿£ï¹ï¿£ï¼›)kkkkk', 'picture/AMBULANCEic.png', NULL),
(36, '2', 'tydyfty', 'picture/Mes photos_10.jpg', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `sporti`
--

DROP TABLE IF EXISTS `sporti`;
CREATE TABLE IF NOT EXISTS `sporti` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `sportif`
--

DROP TABLE IF EXISTS `sportif`;
CREATE TABLE IF NOT EXISTS `sportif` (
  `id` int(11) NOT NULL,
  `prenom` varchar(1000) NOT NULL,
  `sexe` text NOT NULL,
  `sport` varchar(1000) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
