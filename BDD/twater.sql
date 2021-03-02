-- phpMyAdmin SQL Dump
-- version 4.6.6deb4+deb9u2
-- https://www.phpmyadmin.net/
--
-- Client :  localhost:3306
-- Généré le :  Mar 02 Mars 2021 à 11:12
-- Version du serveur :  10.1.48-MariaDB-0+deb9u1
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
(4, 5, 8),
(11, 2, 21),
(12, 2, 20),
(45, 2, 29),
(61, 2, 31),
(84, 2, 131),
(85, 4, 131),
(86, 16, 131),
(87, 20, 131),
(88, 5, 131),
(89, 13, 131),
(90, 14, 131),
(91, 15, 131),
(92, 40, 131),
(93, 41, 131),
(94, 42, 131),
(95, 43, 131),
(96, 44, 131),
(97, 45, 131),
(98, 46, 131),
(99, 47, 131),
(100, 48, 131);

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
(20, 'd**f/sdg*ffr*-reagvfd          *fsdsqd-* f**              f*ze *f*ef*aefr', 5, '2021-02-10 04:58:59.000000', NULL),
(21, 'el guaôp', 2, '2021-02-10 11:34:14.000000', NULL),
(22, 'ssa', 2, '2021-02-16 13:36:10.000000', NULL),
(23, 'bonjour monsieur', 2, '2021-03-01 08:32:33.000000', NULL),
(24, 'ddddd', 2, '2021-03-01 08:32:43.000000', NULL),
(25, 'ddddd', 2, '2021-03-01 08:32:50.000000', NULL),
(26, 'ddddd', 2, '2021-03-01 08:33:08.000000', NULL),
(27, 'coucou lé gens', 2, '2021-03-01 08:34:00.000000', NULL),
(28, 'ccc lé zami', 2, '2021-03-01 08:34:54.000000', NULL),
(29, 'Coucou les gens', 2, '2021-03-01 08:34:59.000000', NULL),
(32, 'wsh salut', 2, '2021-03-01 12:08:06.000000', 5),
(33, 'coucou toi', 2, '2021-03-02 06:24:27.000000', 31),
(34, 'coucou toi', 2, '2021-03-02 06:36:59.000000', 13),
(35, 'coucou toi', 2, '2021-03-02 06:37:03.000000', 13),
(36, 'coucou toi', 2, '2021-03-02 06:37:50.000000', 13),
(37, 'coucou toi', 2, '2021-03-02 06:37:53.000000', 13),
(38, 'coucou toi', 2, '2021-03-02 06:42:41.000000', 13),
(39, 'bonjour', 2, '2021-03-02 08:07:51.000000', 31),
(40, 'bonjour', 2, '2021-03-02 08:08:52.000000', 31),
(41, 'bonjour', 2, '2021-03-02 08:09:11.000000', 31),
(42, 'bonjour', 2, '2021-03-02 08:10:24.000000', 31),
(43, 'bonjour', 2, '2021-03-02 08:10:34.000000', 31),
(44, 'bonjour', 2, '2021-03-02 08:10:44.000000', 31),
(45, 'bonjour', 2, '2021-03-02 08:10:50.000000', 31),
(46, 'bonjour', 2, '2021-03-02 08:16:53.000000', 31),
(47, 'bonjour', 2, '2021-03-02 08:17:13.000000', 31),
(48, 'bonjour', 2, '2021-03-02 08:17:23.000000', 31),
(49, 'bonjour', 2, '2021-03-02 08:17:51.000000', 31),
(50, 'bonjour', 2, '2021-03-02 08:18:04.000000', 31),
(51, 'bonjour', 2, '2021-03-02 08:18:51.000000', 31),
(52, 'bonjour', 2, '2021-03-02 08:19:10.000000', 31),
(53, 'bonjour', 2, '2021-03-02 08:19:22.000000', 31),
(54, 'bonjour', 2, '2021-03-02 08:19:56.000000', 31),
(55, 'bonjour', 2, '2021-03-02 08:21:02.000000', 31),
(56, 'bonjour', 2, '2021-03-02 08:21:12.000000', 31),
(57, 'bonjour', 2, '2021-03-02 08:21:30.000000', 31),
(58, 'bonjour', 2, '2021-03-02 08:22:56.000000', 31),
(59, 'bonjour', 2, '2021-03-02 08:23:28.000000', 31),
(60, 'bonjour', 2, '2021-03-02 08:24:06.000000', 31),
(61, 'bonjour', 2, '2021-03-02 08:24:51.000000', 31),
(62, 'bonjour', 2, '2021-03-02 08:25:00.000000', 31),
(63, 'bonjour', 2, '2021-03-02 08:25:52.000000', 31),
(64, 'bonjour', 2, '2021-03-02 08:26:15.000000', 31),
(65, 'bonjour', 2, '2021-03-02 08:26:27.000000', 31),
(66, 'bonjour', 2, '2021-03-02 08:26:36.000000', 31),
(67, 'bonjour', 2, '2021-03-02 08:26:55.000000', 31),
(68, 'bonjour', 2, '2021-03-02 08:27:09.000000', 31),
(69, 'bonjour', 2, '2021-03-02 08:27:59.000000', 31),
(70, 'bonjour', 2, '2021-03-02 08:28:16.000000', 31),
(71, 'bonjour', 2, '2021-03-02 08:28:26.000000', 31),
(72, 'bonjour', 2, '2021-03-02 08:28:33.000000', 31),
(73, 'bonjour', 2, '2021-03-02 08:29:21.000000', 31),
(74, 'bonjour', 2, '2021-03-02 08:29:40.000000', 31),
(75, 'bonjour', 2, '2021-03-02 08:31:03.000000', 31),
(76, 'bonjour', 2, '2021-03-02 08:31:39.000000', 31),
(77, 'bonjour', 2, '2021-03-02 08:32:54.000000', 31),
(78, 'bonjour', 2, '2021-03-02 08:33:11.000000', 31),
(79, 'bonjour', 2, '2021-03-02 08:33:29.000000', 31),
(80, 'bonjour', 2, '2021-03-02 08:34:12.000000', 31),
(81, 'bonjour', 2, '2021-03-02 08:34:31.000000', 31),
(82, 'bonjour', 2, '2021-03-02 08:34:38.000000', 31),
(83, 'bonjour', 2, '2021-03-02 08:35:03.000000', 31),
(84, 'bonjour', 2, '2021-03-02 08:35:09.000000', 31),
(85, 'bonjour', 2, '2021-03-02 08:35:52.000000', 31),
(86, 'bonjour', 2, '2021-03-02 08:36:07.000000', 31),
(87, 'bonjour', 2, '2021-03-02 08:36:33.000000', 31),
(88, 'bonjour', 2, '2021-03-02 08:36:45.000000', 31),
(89, 'bonjour', 2, '2021-03-02 08:36:57.000000', 31),
(90, 'bonjour', 2, '2021-03-02 08:37:04.000000', 31),
(91, 'bonjour', 2, '2021-03-02 08:37:08.000000', 31),
(92, 'bonjour', 2, '2021-03-02 08:37:28.000000', 31),
(93, 'bonjour', 2, '2021-03-02 08:37:37.000000', 31),
(94, 'bonjour', 2, '2021-03-02 08:41:01.000000', 31),
(95, 'bonjour', 2, '2021-03-02 08:41:47.000000', 31),
(96, 'bonjour', 2, '2021-03-02 08:41:59.000000', 31),
(97, 'bonjour', 2, '2021-03-02 08:42:05.000000', 31),
(98, 'bonjour', 2, '2021-03-02 08:42:16.000000', 31),
(99, 'bonjour', 2, '2021-03-02 08:42:24.000000', 31),
(100, 'bonjour', 2, '2021-03-02 08:42:33.000000', 31),
(101, 'bonjour', 2, '2021-03-02 08:44:05.000000', 31),
(102, 'bonjour', 2, '2021-03-02 08:46:35.000000', 31),
(103, 'bonjour', 2, '2021-03-02 08:47:17.000000', 31),
(104, 'bonjour', 2, '2021-03-02 08:47:26.000000', 31),
(105, 'cc', 2, '2021-03-02 08:58:46.000000', 29),
(106, 'cc', 2, '2021-03-02 08:59:08.000000', 29),
(107, 'cc', 2, '2021-03-02 08:59:34.000000', 29),
(108, 'cc', 2, '2021-03-02 08:59:44.000000', 29),
(109, 'cc', 2, '2021-03-02 09:00:05.000000', 29),
(110, 'cc', 2, '2021-03-02 09:00:11.000000', 29),
(111, 'cc', 2, '2021-03-02 09:00:22.000000', 29),
(112, 'cc', 2, '2021-03-02 09:00:29.000000', 29),
(113, 'cc', 2, '2021-03-02 09:00:59.000000', 29),
(114, 'cc', 2, '2021-03-02 09:01:07.000000', 29),
(115, 'cc', 2, '2021-03-02 09:01:20.000000', 29),
(116, 'cc', 2, '2021-03-02 09:01:27.000000', 29),
(117, 'cc', 2, '2021-03-02 09:01:45.000000', 29),
(118, 'cc', 2, '2021-03-02 09:01:51.000000', 29),
(119, 'cc', 2, '2021-03-02 09:01:59.000000', 29),
(120, 'cc', 2, '2021-03-02 09:02:13.000000', 29),
(121, 'cc', 2, '2021-03-02 09:02:36.000000', 29),
(122, 'cc', 2, '2021-03-02 09:02:53.000000', 29),
(123, 'Bonjour ', 2, '2021-03-02 09:05:02.000000', 31),
(124, 'Heeee', 2, '2021-03-02 09:05:10.000000', 31),
(125, 'cc', 2, '2021-03-02 09:05:24.000000', 29),
(126, 'cc', 2, '2021-03-02 09:05:41.000000', 29),
(127, 'cc', 2, '2021-03-02 09:05:47.000000', 29),
(128, 'cc', 2, '2021-03-02 09:05:53.000000', 29),
(129, 'cc', 2, '2021-03-02 09:05:59.000000', 29),
(130, 'cc', 2, '2021-03-02 09:06:06.000000', 29),
(131, 'Coucou les qoqinou c\\\'est moi valetin Bouter le plus bg des bg comment j\\\'ai de classe j\\\'ai trop de charme épouse moi Coucou les qoqinou c\\\'est moi valetin Bouter le plus bg des bg comment j\\\'ai de classe j\\\'ai trop de charme épouse moi ai de classe j\\\'ai trop de charme épouse moi charme épouse moi épouse moi épouse moi épouse moi épouse', 2, '2021-03-02 09:15:24.000000', NULL),
(132, 'Trop cool ;)', 2, '2021-03-02 09:16:01.000000', 131),
(133, 'Trop cool ;)', 2, '2021-03-02 09:38:05.000000', 131);

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
(2, 'valou123', 'valou', '123456', '2021-02-09', 'BONJOUR JE MAPELLE VALENTIN BOUET'),
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
(47, 'pademarco', 'freztraz', '1234567', '2021-02-06', ' '),
(48, 'zqadzd', 'zzzdq', 'mdp', '2021-02-15', ' ');

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
  MODIFY `id_like` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;
--
-- AUTO_INCREMENT pour la table `tweet`
--
ALTER TABLE `tweet`
  MODIFY `id_tweet` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=134;
--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
