-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  mer. 24 oct. 2018 à 16:58
-- Version du serveur :  10.1.31-MariaDB
-- Version de PHP :  7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `blog`
--

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

CREATE TABLE `article` (
  `id_article` int(3) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `categorie` varchar(255) NOT NULL,
  `contenu` text NOT NULL,
  `date_enregistrement` datetime NOT NULL,
  `image` text NOT NULL,
  `id_auteur` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `article`
--

INSERT INTO `article` (`id_article`, `titre`, `categorie`, `contenu`, `date_enregistrement`, `image`, `id_auteur`) VALUES
(1, 'sLipsum le nouveau Lorem ipsum', 'Contenu', 'My money\'s in that office, right? If she start giving me some bullshit about it ain\'t there, and we got to go someplace else and get it, I\'m gonna shoot you in the head then and there. Then I\'m gonna shoot that bitch in the kneecaps, find out where my goddamn money is. She gonna tell me too. Hey, look at me when I\'m talking to you, motherfucker. You listen: we go in there, and that nigga Winston or anybody else is in there, you the first motherfucker to get shot. You understand?', '2018-10-23 15:24:19', 'https://cdn.pixabay.com/photo/2013/04/03/12/05/tree-99852_960_720.jpg', 1),
(2, 'Lorem ipsum', 'Contenu', 'My money\'s in that office, right? If she start giving me some bullshit about it ain\'t there, and we got to go someplace else and get it, I\'m gonna shoot you in the head then and there. Then I\'m gonna shoot that bitch in the kneecaps, find out where my goddamn money is. She gonna tell me too. Hey, look at me when I\'m talking to you, motherfucker. You listen: we go in there, and that nigga Winston or anybody else is in there, you the first motherfucker to get shot. You understand?', '2018-10-23 16:00:26', 'https://cdn.pixabay.com/photo/2018/09/07/14/11/city-3660779_960_720.jpg', 2),
(7, 'Actus du mardi', 'Actus', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut placerat nisi vitae orci efficitur, maximus varius tellus scelerisque. Maecenas a nulla ante. Duis varius nunc ac lacus porttitor vulputate. Vivamus pharetra metus eu eleifend porta. Aenean at erat at ligula porta ornare. Ut sagittis tellus et ante tristique condimentum. Mauris vulputate, libero at rhoncus commodo, libero mi viverra turpis, vel commodo erat velit id ligula.<br><br>\r\n\r\nSed neque erat, laoreet ut faucibus tempor, pretium et diam. Aenean facilisis, velit non porttitor bibendum, urna nunc sodales nunc, sit amet pellentesque felis sapien eu nisl. Phasellus rhoncus eleifend tortor ut fermentum. Integer sit amet diam id nulla egestas aliquam hendrerit ut magna. Nam tincidunt ullamcorper risus. In hac habitasse platea dictumst. Pellentesque pharetra, sem at ultrices scelerisque, tellus tellus mollis felis, eget rhoncus magna mauris ut elit. Mauris est augue, tincidunt vitae sollicitudin ut, sodales at justo. Curabitur at ipsum sollicitudin, bibendum sem nec, vestibulum elit. Phasellus lobortis vestibulum pharetra. Maecenas aliquet bibendum dolor ut sollicitudin. Duis dignissim laoreet velit, dapibus aliquam leo tincidunt quis. Aliquam non purus ut purus lobortis fringilla quis eget enim. Integer et velit sit amet purus bibendum porttitor scelerisque ac quam.', '2018-10-23 16:54:09', 'https://cdn.pixabay.com/photo/2017/12/01/20/56/tree-tops-2991743_960_720.jpg', 1),
(8, 'Bonjour à tous !', 'Bienvenue', 'Lorem ipsum', '2018-10-24 09:34:22', 'https://cdn.pixabay.com/photo/2018/09/06/18/49/bacteria-3658992_960_720.jpg', 1),
(9, 'Feuilles d\'automne', 'loisir', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla viverra faucibus sem. Donec feugiat tortor ac nisl dignissim, id efficitur dolor dignissim. Vivamus tempus tempus nibh, at tempus sem sollicitudin non. Morbi at ex mollis, lacinia orci dictum, rhoncus urna. Curabitur faucibus nisi massa, ac condimentum est accumsan laoreet. Phasellus sagittis elit condimentum elit tristique, eu pulvinar elit gravida. In at tempor nulla. Praesent non erat sem. Aenean tempus feugiat imperdiet. Donec maximus pretium est, ac aliquet sapien volutpat at. Sed imperdiet risus ut tortor vulputate volutpat. Morbi eget rhoncus quam.<br><br>\r\n\r\nEtiam fringilla nisl ac fermentum sagittis. Nunc odio elit, tristique eget dolor nec, cursus ultricies justo. Donec mauris lectus, consequat id nunc vitae, sagittis mattis arcu. Nunc eleifend, tortor in scelerisque gravida, mauris augue ultrices eros, id accumsan neque lorem et ligula. In rutrum massa sed mi maximus, id imperdiet augue feugiat. Curabitur hendrerit est ut lectus dignissim pretium. Donec magna quam, condimentum id leo placerat, aliquam porttitor magna. Aliquam et risus nisi. Aliquam at ante id nisi cursus ornare in eget risus. Quisque fermentum odio eros. Sed quis neque pharetra, convallis nunc in, ornare nulla. Curabitur porta pharetra nisi, id efficitur magna bibendum nec. In vitae nisi metus. Donec ac tincidunt massa. Quisque rutrum semper metus nec fermentum.', '2018-10-24 15:37:57', 'https://cdn.pixabay.com/photo/2018/10/13/17/31/fall-leaves-3744649_960_720.jpg', 1);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id_user` int(3) NOT NULL,
  `pseudo` varchar(255) NOT NULL,
  `mdp` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `date_inscription` date NOT NULL,
  `avatar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id_user`, `pseudo`, `mdp`, `email`, `date_inscription`, `avatar`) VALUES
(1, 'Mathieu', 'password', 'mail@mail.fr', '2018-10-01', 'https://randomuser.me/api/portraits/men/36.jpg'),
(2, 'Webforce', '123456', 'webforce@mail.fr', '2018-10-01', 'https://randomuser.me/api/portraits/men/36.jpg');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id_article`),
  ADD KEY `id_auteur` (`id_auteur`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `article`
--
ALTER TABLE `article`
  MODIFY `id_article` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
