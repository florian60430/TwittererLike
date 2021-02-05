-- phpMyAdmin SQL Dump
-- version 4.1.4
-- http://www.phpmyadmin.net
--
-- Client :  localhost:3306
-- Généré le :  Ven 05 Février 2021 à 08:55
-- Version du serveur :  10.1.47-MariaDB-0+deb9u1
-- Version de PHP :  7.0.33-0+deb9u10
=======
-- Client :  127.0.0.1
-- Généré le :  Mer 03 Février 2021 à 12:00
-- Version du serveur :  5.6.15-log
-- Version de PHP :  5.5.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `twitterlite`
--

-- --------------------------------------------------------

--
-- Structure de la table `like`
--

CREATE TABLE IF NOT EXISTS `like` (
  `id_like` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(50) NOT NULL,
  `id_tweet` int(50) NOT NULL,
  PRIMARY KEY (`id_like`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Contenu de la table `like`
--

INSERT INTO `like` (`id_like`, `id_user`, `id_tweet`) VALUES
(52, 2, 12),
(114, 4, 18),
(115, 4, 19),
(116, 4, 16),
(117, 4, 15),
(120, 1, 15),
(121, 1, 16),
(122, 1, 17),
(123, 1, 18);

-- --------------------------------------------------------

--
-- Structure de la table `tweet`
--

CREATE TABLE IF NOT EXISTS `tweet` (
  `id_tweet` int(11) NOT NULL AUTO_INCREMENT,
  `contenu` varchar(340) NOT NULL,
  `id_user` int(50) NOT NULL,
  `date` datetime(6) NOT NULL,
  PRIMARY KEY (`id_tweet`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Contenu de la table `tweet`
--

INSERT INTO `tweet` (`id_tweet`, `contenu`, `id_user`, `date`) VALUES
(1, 'hello world!', 1, '2021-02-03 07:13:20.000000'),
(2, 'mdr', 1, '2021-02-04 02:10:56.000000'),
(3, 'cc', 1, '2021-02-04 02:11:00.000000'),
(4, 'bonjour', 1, '2021-02-04 02:11:16.000000'),
(5, 'yolo', 1, '2021-02-04 02:11:41.000000'),
(6, 'yolo', 1, '2021-02-04 09:15:56.000000'),
(7, 'salut les rheys', 1, '2021-02-04 09:18:20.000000'),
(8, 'salut les rheys', 1, '2021-02-04 09:22:35.000000'),
(9, 'PROUT', 1, '2021-02-04 09:29:32.000000'),
(10, 'fhudhudhfsfdhiohodmojohgdniojdgsiojhdgjok', 1, '2021-02-04 09:33:54.000000'),
(11, 'PROUT', 1, '2021-02-04 09:36:32.000000'),
(12, 'Nouveau utilisateur', 2, '2021-02-04 09:38:56.000000'),
(13, 'a', 4, '2021-02-04 09:46:26.000000'),
(14, 'salut les mecs', 4, '2021-02-04 09:46:35.000000'),
(15, 'a b c d e f g h i j k l ', 4, '2021-02-04 09:46:46.000000'),
(16, 'eazeazkejazkejazkejazkjazkjazkejazkejazkejazkejazkejazkeazjkeazjkeazjkazjkazjkazjkazjkazjazkjazkjazkjazkjazkjazkejazkejazkejazkeazjkeazjkejaz', 4, '2021-02-04 09:47:50.000000'),
(17, 'salut les mecs comment vosu allez today ? ', 4, '2021-02-04 09:48:08.000000'),
(18, 'ggg', 1, '2021-02-04 09:50:58.000000'),
(19, 'yolo', 1, '2021-02-04 10:27:10.000000');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `identifiant` varchar(50) NOT NULL,
  `pseudo` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `birthdate` date NOT NULL,
  `bio` varchar(350) NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `user`
<<<<<<< HEAD
--

INSERT INTO `user` (`id_user`, `identifiant`, `pseudo`, `password`, `birthdate`, `bio`) VALUES
(1, 'valou123', 'valou', '123', '1999-03-07', 'fuck'),
(2, 'clement', 'StingyFox', '2468', '2000-04-20', 'la binouse'),
(3, 'tbonny', 'tbonny', 'tbonny', '2001-08-01', 'welcome to twatter'),
(4, 'Marco', 'Marco', 'Marco', '2001-04-29', 'Je m\'appelle Marco, j\'ai 19 ans.\r\n');

--
-- Index pour les tables exportées
=======
>>>>>>> 08b0a7a8f0c8184a317a14141f02fd3651ffff29
--

INSERT INTO `user` (`id_user`, `identifiant`, `pseudo`, `password`, `birthdate`, `bio`) VALUES
(1, 'flo', 'Jean-Street-Cred', '1234', '1998-08-16', 'J''ai une bonne déscente'),
(2, 'flo', 'Jean-Street-Cred', '1234', '1998-08-16', 'J''ai une bonne déscente');

<<<<<<< HEAD
--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `like`
--
ALTER TABLE `like`
  MODIFY `id_like` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=124;
--
-- AUTO_INCREMENT pour la table `tweet`
--
ALTER TABLE `tweet`
  MODIFY `id_tweet` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
=======
>>>>>>> 08b0a7a8f0c8184a317a14141f02fd3651ffff29
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
