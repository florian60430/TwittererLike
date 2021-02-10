-- phpMyAdmin SQL Dump
-- version 4.6.6deb4+deb9u2
-- https://www.phpmyadmin.net/
--
-- Client :  localhost:3306
-- Généré le :  Mer 10 Février 2021 à 05:38
-- Version du serveur :  10.1.47-MariaDB-0+deb9u1
-- Version de PHP :  7.0.33-0+deb9u10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `twater`
--

-- --------------------------------------------------------

--
-- Structure de la table `follow`
--

CREATE TABLE `follow` (
  `id_follow` int(11) NOT NULL,
  `id_follower` int(50) NOT NULL,
  `id_followed` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `like`
--

CREATE TABLE `like` (
  `id_like` int(11) NOT NULL,
  `id_user` int(50) NOT NULL,
  `id_tweet` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `like`
--

INSERT INTO `like` (`id_like`, `id_user`, `id_tweet`) VALUES
(4, 5, 8);

-- --------------------------------------------------------

--
-- Structure de la table `tweet`
--

CREATE TABLE `tweet` (
  `id_tweet` int(11) NOT NULL,
  `contenu` varchar(340) NOT NULL,
  `id_user` int(50) NOT NULL,
  `date` datetime(6) NOT NULL,
  `id_tweetARepondre` int(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `tweet`
--

INSERT INTO `tweet` (`id_tweet`, `contenu`, `id_user`, `date`, `id_tweetARepondre`) VALUES
(1, 'bordel de merde pade arret de faire des conneries', 2, '2021-02-10 03:01:30.000000', NULL),
(2, 'rip', 4, '2021-02-10 03:01:50.000000', NULL),
(3, 'je twat vue d\'en haut sur la twature', 5, '2021-02-10 03:02:37.000000', NULL),
(4, 'je twat vue d\'en haut sur la twature', 5, '2021-02-10 03:02:40.000000', NULL),
(5, 'gg', 5, '2021-02-10 03:03:07.000000', NULL),
(6, 'dfd', 5, '2021-02-10 03:03:09.000000', NULL),
(7, 'rip', 4, '2021-02-10 03:03:22.000000', NULL),
(8, 'dfd', 5, '2021-02-10 03:39:05.000000', NULL),
(9, 'fgh fgh fgh fgh fgh fgh fgh fgh fgh fgh fgh fgh fgh fgh fgh fgh fgh fgh fgh fgh fgh fgh fgh fgh fgh fgh fgh fgh fgh fgh fgh fgh fgh fgh fgh fgh fgh fgh fgh fgh fgh fgh fgh fgh fgh fgh fgh fgh fgh fgh fgh fgh fgh fgh fgh fgh fgh fgh fgh fgh fgh fgh fgh fgh fgh fgh fgh fgh fgh fgh fgh fgh fgh fgh fgh fgh fgh fgh fgh fgh fgh fgh fgh fgh fgh ', 2, '2021-02-10 04:13:23.000000', NULL),
(10, 'fgh fgh fgh fgh fgh fgh fgh fgh fgh fgh fgh fgh fgh fgh fgh fgh fgh fgh fgh fgh fgh fgh fgh fgh fgh fgh fgh fgh fgh fgh fgh fgh fgh fgh fgh fgh fgh fgh fgh fgh fgh fgh fgh fgh fgh fgh fgh fgh fgh fgh fgh fgh fgh fgh fgh fgh fgh fgh fgh fgh fgh fgh fgh fgh fgh fgh fgh fgh fgh fgh fgh fgh fgh fgh fgh fgh fgh fgh fgh fgh fgh fgh fgh fgh fgh ', 2, '2021-02-10 04:14:04.000000', NULL),
(11, 'yolo', 2, '2021-02-10 04:19:06.000000', NULL),
(12, 'tt', 20, '2021-02-10 04:24:31.000000', NULL),
(13, 'bitch dab', 5, '2021-02-10 04:26:30.000000', NULL),
(14, 'd**f/sdg*ffr*-reagvfd          *fsdsqd-* f**              f*ze *f*ef*aefr', 5, '2021-02-10 04:26:49.000000', NULL),
(15, 'd**f/sdg*ffr*-reagvfd          *fsdsqd-* f**              f*ze *f*ef*aefr', 5, '2021-02-10 04:27:32.000000', NULL),
(16, 'd**f/sdg*ffr*-reagvfd          *fsdsqd-* f**              f*ze *f*ef*aefr', 5, '2021-02-10 04:38:14.000000', NULL),
(17, 'ea', 26, '2021-02-10 04:43:41.000000', NULL),
(20, 'd**f/sdg*ffr*-reagvfd          *fsdsqd-* f**              f*ze *f*ef*aefr', 5, '2021-02-10 04:58:59.000000', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `identifiant` varchar(12) NOT NULL,
  `pseudo` varchar(12) NOT NULL,
  `password` varchar(15) NOT NULL,
  `birthdate` date NOT NULL,
  `bio` varchar(350) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `user`
--

INSERT INTO `user` (`id_user`, `identifiant`, `pseudo`, `password`, `birthdate`, `bio`) VALUES
(2, 'valou123', 'valou', '123456', '2021-02-09', ' '),
(4, 'Apoline', 'ApolineV', '123', '2000-09-12', ' '),
(5, 'FloGoudalavo', 'FloGoudalavo', '123456', '2021-02-10', ' '),
(13, 'JeSuisNouvea', 'JeSuisNouvea', '123456', '2021-02-09', ' '),
(14, 'JeSuisNouvea', 'JeSuisNouvea', '123456', '2021-02-09', ' '),
(15, 'JeSuisNouvea', 'JeSuisNouvea', '123456', '2021-02-09', ' '),
(16, 'Marco', 'Pade', '0000', '2001-09-20', ' '),
(20, 'lololo', 'lolola', '123456', '2021-02-10', ' '),
(40, 'azerty123', 'azerty', 'gre95++*', '2021-02-09', ' '),
(41, 'azerty', 'jetest', 'AZ35Rty!+-', '2021-02-06', ' '),
(42, 'aaa bbb', 'jetest', 'fef95+-', '2021-02-09', ' '),
(43, 'aaaccc', 'azertfsd', '14fe9r5fze9+', '2021-02-02', ' '),
(44, 'azerty', 'jetest', '1891256', '2021-02-09', ' '),
(45, 'persona', 'azertfsd', '1984581f', '2021-02-03', ' '),
(46, 'hfjehsfkj', 'fzefzef', '184165efz', '2021-02-02', ' '),
(47, 'pademarco', 'freztraz', '1234567', '2021-02-06', ' ');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `follow`
--
ALTER TABLE `follow`
  ADD PRIMARY KEY (`id_follow`);

--
-- Index pour la table `like`
--
ALTER TABLE `like`
  ADD PRIMARY KEY (`id_like`);

--
-- Index pour la table `tweet`
--
ALTER TABLE `tweet`
  ADD PRIMARY KEY (`id_tweet`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `follow`
--
ALTER TABLE `follow`
  MODIFY `id_follow` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `like`
--
ALTER TABLE `like`
  MODIFY `id_like` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT pour la table `tweet`
--
ALTER TABLE `tweet`
  MODIFY `id_tweet` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
