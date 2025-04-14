-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 14 avr. 2025 à 14:38
-- Version du serveur : 10.4.32-MariaDB
-- Version de PHP : 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `gestion_compte_user-cfpc-2025`
--

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `confirmation_token` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `confirmation_token`) VALUES
(13, 'jemafe', 'zikumileq@mailinator.com', '$2y$10$kxtaTv7UkbrXPv7.Ba5xluOPlaO44IALX7Q8W9HjgiqztnI/YYRrS', 'RZt4X3drSPO7Lf6FK4sGeZGd4m37paDZovcqPVTNFXWYOF0mHCWVfbIq9tOWR4KxSH80vp2su9fchltxkvPWrK1yujpkLWJyCyhX'),
(14, 'wujekojari', 'qotegemeto@mailinator.com', '$2y$10$XT87dtZb9..CSNS8XJcAFeXCh70ypPtfOKCS4lsIGFA2uY7sMYtQ.', '9nYRPU313gm5RNuqWKBCuWk4SyBSqZspYoZ7VmaITMTa7UJIk2jnWZhbAspOlnNWKjZj0YWzx7gvIO1IBxDSvzxWXhnLs0RXixHF'),
(15, 'piludoz', 'bucosywut@mailinator.com', '$2y$10$1vDW2IyhBMaIZ1PZDhqPG.Ff2WrbFc5ZuhjKwdrhY4cyrejYJwT6G', 'KkkOlM7KfD97HK6mXwx3VGXy6KDx7x1shae0r8Gu26UHt7d6uY7HdWN3PESGAsMOvvMxmLd45LnVxOAFeztpugwbrWwI4fkusD2m'),
(16, 'maiva', 'maiva@maiva.com', '$2y$10$gc19wRtiovQJeZSjhfTs1.ALWGqs1lWLvFpjGkh9JrnMmeOn6ePFG', 'tWnzsHRqYe7ziYTHoOfcju9lfqXd3qwiavSG1VpLI6MWugeeS2NRYuPW8IcPDtTNe6Q9PS21fRvD9wrtdXX9VnrzLgWBMeCxIlEN'),
(17, 'revar', 'lycovogom@mailinator.com', '$2y$10$D4nUB/5MEFeTsHfyZf6qSOmh./yCYQ7C0tjR3AaS1ZFsKw60U/82u', 'HN3ZlEIiIX2kwKWqhBEZsN2SRHfGS9mDjVNVhrNAHLwrFNNnG6xXHPu9dmVPXNDk0BluzMxWCrjHXotbmOwdmdMzZCwh6e0StwXy');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
