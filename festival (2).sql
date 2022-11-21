-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : jeu. 03 nov. 2022 à 15:52
-- Version du serveur : 10.5.15-MariaDB-0+deb11u1
-- Version de PHP : 7.4.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `festival`
--

-- --------------------------------------------------------

--
-- Structure de la table `Groupes`
--

CREATE TABLE `Groupes` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `cout` decimal(10,2) NOT NULL,
  `pays_origine` varchar(255) NOT NULL,
  `musiciens` text NOT NULL,
  `email` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `Groupes`
--

INSERT INTO `Groupes` (`id`, `nom`, `description`, `cout`, `pays_origine`, `musiciens`, `email`, `photo`) VALUES
(1, 'Soviet Suprem', 'Soviet Suprem est un groupe de musique humoristique français, originaire de la banlieue Est parisienne. Le groupe est composé de John Lénine (alias Toma Feterman, chanteur de La Caravane Passe)1 et de Sylvester Staline (alias R.wan, chanteur du groupe Java). Son style musical s\'inspirerait des musiques des pays de l\'Union soviétique mêlées à des influences balkaniques, militaro-punk et rap. ', '314.15', 'France', '- John Lénine\r\n- Sylvester Staline', 'soviet.suprem@wanalike.fr', 'https://upload.wikimedia.org/wikipedia/commons/thumb/4/42/Soviet_Suprem_Live_2.JPG/440px-Soviet_Suprem_Live_2.JPG'),
(2, 'Émilie Jolie', 'Émilie Jolie est un conte musical de Philippe Chatel, arrangé par Jean-Louis Bucchi et sorti en disque en 1979.\r\n\r\nLe conte est devenu un classique et une référence comme comédie musicale pour enfants. ', '0.00', 'France', 'Philippe Chatel', 'emilie.joli@oldschool.fr', 'https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fi.ytimg.com%2Fvi%2F3Dir-eVkRzM%2Fmaxresdefault.jpg&f=1&nofb=1&ipt=5ee3b2a76161971b3213a8b65df4a0405dc37f802573604b12ee8b4dec87836d&ipo=images'),
(3, 'Rodrigo & Gabriela', 'Groupes de guitaristes', '150.00', 'Colombie', 'Rodrigo\r\nGabriela', 'rodri@toto.fr', 'https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fguitar.com%2Fwp-content%2Fuploads%2F2019%2F06%2Finterview-Rodrigo-y-Gabriela-hero-1%401400x1050.jpg&f=1&nofb=1&ipt=5b5c49050a9918cae4ff03a0928d18453e81cdc80fa897131dc9d3601f39dac8&ipo=images');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `Groupes`
--
ALTER TABLE `Groupes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `Groupes`
--
ALTER TABLE `Groupes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
