-- phpMyAdmin SQL Dump
-- version 4.6.6deb4+deb9u2
-- https://www.phpmyadmin.net/
--
-- Client :  localhost:3306
-- Généré le :  Mer 10 Février 2021 à 04:24
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
-- Structure de la table `commentaire`
--

CREATE TABLE `commentaire` (
  `id_commentaire` int(11) NOT NULL,
  `contenu` varchar(340) NOT NULL,
  `id_user` int(50) NOT NULL,
  `id_tweet` int(50) NOT NULL,
  `date` datetime(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
  `date` datetime(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `tweet`
--

INSERT INTO `tweet` (`id_tweet`, `contenu`, `id_user`, `date`) VALUES
(1, 'bordel de merde pade arret de faire des conneries', 2, '2021-02-10 03:01:30.000000'),
(2, 'rip', 4, '2021-02-10 03:01:50.000000'),
(3, 'je twat vue d\'en haut sur la twature', 5, '2021-02-10 03:02:37.000000'),
(4, 'je twat vue d\'en haut sur la twature', 5, '2021-02-10 03:02:40.000000'),
(5, 'gg', 5, '2021-02-10 03:03:07.000000'),
(6, 'dfd', 5, '2021-02-10 03:03:09.000000'),
(7, 'rip', 4, '2021-02-10 03:03:22.000000'),
(8, 'dfd', 5, '2021-02-10 03:39:05.000000'),
(9, 'fgh fgh fgh fgh fgh fgh fgh fgh fgh fgh fgh fgh fgh fgh fgh fgh fgh fgh fgh fgh fgh fgh fgh fgh fgh fgh fgh fgh fgh fgh fgh fgh fgh fgh fgh fgh fgh fgh fgh fgh fgh fgh fgh fgh fgh fgh fgh fgh fgh fgh fgh fgh fgh fgh fgh fgh fgh fgh fgh fgh fgh fgh fgh fgh fgh fgh fgh fgh fgh fgh fgh fgh fgh fgh fgh fgh fgh fgh fgh fgh fgh fgh fgh fgh fgh ', 2, '2021-02-10 04:13:23.000000'),
(10, 'fgh fgh fgh fgh fgh fgh fgh fgh fgh fgh fgh fgh fgh fgh fgh fgh fgh fgh fgh fgh fgh fgh fgh fgh fgh fgh fgh fgh fgh fgh fgh fgh fgh fgh fgh fgh fgh fgh fgh fgh fgh fgh fgh fgh fgh fgh fgh fgh fgh fgh fgh fgh fgh fgh fgh fgh fgh fgh fgh fgh fgh fgh fgh fgh fgh fgh fgh fgh fgh fgh fgh fgh fgh fgh fgh fgh fgh fgh fgh fgh fgh fgh fgh fgh fgh ', 2, '2021-02-10 04:14:04.000000'),
(11, 'yolo', 2, '2021-02-10 04:19:06.000000'),
(12, 'tt', 20, '2021-02-10 04:24:31.000000');

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
(20, 'lololo', 'lolola', '123456', '2021-02-10', ' ');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `commentaire`
--
ALTER TABLE `commentaire`
  ADD PRIMARY KEY (`id_commentaire`);

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
-- AUTO_INCREMENT pour la table `commentaire`
--
ALTER TABLE `commentaire`
  MODIFY `id_commentaire` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `follow`
--
ALTER TABLE `follow`
  MODIFY `id_follow` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `like`
--
ALTER TABLE `like`
  MODIFY `id_like` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `tweet`
--
ALTER TABLE `tweet`
  MODIFY `id_tweet` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
