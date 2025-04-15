-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 15 avr. 2025 à 09:45
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
-- Base de données : `gestion_compte_user-cfpcanadienne-2025`
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
  `confirmation_token` varchar(100) DEFAULT NULL,
  `confirmed_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `confirmation_token`, `confirmed_at`) VALUES
(13, 'jemafe', 'zikumileq@mailinator.com', '$2y$10$kxtaTv7UkbrXPv7.Ba5xluOPlaO44IALX7Q8W9HjgiqztnI/YYRrS', 'RZt4X3drSPO7Lf6FK4sGeZGd4m37paDZovcqPVTNFXWYOF0mHCWVfbIq9tOWR4KxSH80vp2su9fchltxkvPWrK1yujpkLWJyCyhX', NULL),
(14, 'wujekojari', 'qotegemeto@mailinator.com', '$2y$10$XT87dtZb9..CSNS8XJcAFeXCh70ypPtfOKCS4lsIGFA2uY7sMYtQ.', '9nYRPU313gm5RNuqWKBCuWk4SyBSqZspYoZ7VmaITMTa7UJIk2jnWZhbAspOlnNWKjZj0YWzx7gvIO1IBxDSvzxWXhnLs0RXixHF', NULL),
(15, 'piludoz', 'bucosywut@mailinator.com', '$2y$10$1vDW2IyhBMaIZ1PZDhqPG.Ff2WrbFc5ZuhjKwdrhY4cyrejYJwT6G', 'KkkOlM7KfD97HK6mXwx3VGXy6KDx7x1shae0r8Gu26UHt7d6uY7HdWN3PESGAsMOvvMxmLd45LnVxOAFeztpugwbrWwI4fkusD2m', NULL),
(16, 'maiva', 'maiva@maiva.com', '$2y$10$gc19wRtiovQJeZSjhfTs1.ALWGqs1lWLvFpjGkh9JrnMmeOn6ePFG', 'tWnzsHRqYe7ziYTHoOfcju9lfqXd3qwiavSG1VpLI6MWugeeS2NRYuPW8IcPDtTNe6Q9PS21fRvD9wrtdXX9VnrzLgWBMeCxIlEN', NULL),
(17, 'revar', 'lycovogom@mailinator.com', '$2y$10$D4nUB/5MEFeTsHfyZf6qSOmh./yCYQ7C0tjR3AaS1ZFsKw60U/82u', 'HN3ZlEIiIX2kwKWqhBEZsN2SRHfGS9mDjVNVhrNAHLwrFNNnG6xXHPu9dmVPXNDk0BluzMxWCrjHXotbmOwdmdMzZCwh6e0StwXy', NULL),
(18, 'deerrtfgt', 'rostoinfocus@gmail.com', '$2y$10$7Zh2LDzSW3EFRaDjWpnQS.uGZNeufN/bpCwgmd4YoNpu9WL5w4Aia', 'AHkbwp2CSqU0xWx8X5ndMHG0ikCotgE3296pi2MZf3Ecl69XAyMau7bM5Qhs6rjGWkZ60tjk4atKFzmeyKzKp0WYw1HGSY0StHm7', NULL),
(19, 'fff', 'rostoinfocusff@gmail.com', '$2y$10$nk7D.pBvAcYn0dwfpa/b0uShBuW75cOHLCLzX5JYruUGYMykoGIGO', 'OtVWXOA5EM0MjjYhWxUq2XM6AWT8rqIiKaIGMalvqgLPnkIWfng1Y7BrNcXngmpm1fN2Hxu5AMAfvHy0J6XpmQ8h64aPxV9EwWtR', NULL),
(20, 'qozorejaxo', 'pikiwufaf@mailinator.com', '$2y$10$w6fWfc80aLEL621N4AZ2Le5zFk3UkZRDqv9ygUG5G3/HQ73Fy7g1S', 'vlvjEun70o0eYpNPXaQvatOKmXyohHZ1hvK3jFFnrAy9KUdg5ApwdmEqn6SSclJXlCZS1fcVhecVheYcUAhO5Koqmf0XMqpwBYQY', NULL),
(21, 'cowajygu', 'pyfafadib@mailinator.com', '$2y$10$2oPiDvUda/Xq6eyCdGmK1OiS9E1F.jhp0mhOHpRhviefdVkQER65e', 'Gu0SqQecmRHCJQwEkyC2GN5qCokzsnH4n5bvS1nIqQSHI6nqMgsFAwrqvNTKbeVVhdRvJKJ8fwCtvI5RjjXAzI8DJB7DCmmMdu20', NULL),
(22, 'fohudy', 'vuzi@mailinator.com', '$2y$10$5T1lzjBsJWSpq0cIKYpcg.Dafv2Sz9cXraMN3ngus/uTwMhbYaDfS', '075YGceMB8rXifwhB61efmNQGjNNgLLqWXsK8IvMN01ibrCoVttMWIOtM3rYr2xEILqxFvv6dT6NCu8Jmqo2pfc9Wc7VHCZL0y56', NULL),
(23, 'jodixoqa', 'zarepadoz@mailinator.com', '$2y$10$gtbdAeUaCri3JTk3AmawfeKs5iqEvUpBOGYj.gzFZX9Ko9DnfAi3m', 'WwLR31B26PlfVpzrgECGf6ncsxLXM4iRYk3HoHTDiIMZ10Ip2v2NeDWvrGsbMkiktqQWuYl9Xx64BwpxXzp8l9VKcV6NrzmcC7Ld', NULL),
(24, 'bivymequ', 'divozocowa@mailinator.com', '$2y$10$3rHN361RS7laR/IkDW0dQeIKDF03kisPFPBT8YljBQ62rMKI4gXiG', 'gYx3ImnREvAz8enZOyWj5E8z3tpVQDmrq6gr1FyVqI3TYcIojs10ZYX1aEFqY4u7bfw51D8ptM6xyMQGhZzYXGA4sMVCUDMiqXVZ', NULL),
(25, 'bixub', 'reda@mailinator.com', '$2y$10$KBkqTJAYZ/FHDJ02JqEmp.3t6NZ3QBTMXWXCxUMU360ng9UsiO1tK', 'grlk8psO44yaZW7nbO07HQdChiVs03z0mo4fJcTr1jdh4QGsIuYUXpw3S8u7Qp4rXi75Z5F6ihP3KRAVLQPTy6jkR2gRxQxLGnua', NULL),
(26, 'siqycuta', 'syty@mailinator.com', '$2y$10$p7NWrPlm1ex34VmCAUbX3.NgbDRFBZ7W4eREmDRn0Ya1UOxa1DNSK', 'L91l0rxKJbg5q3YZTaZMzSoFdhrHiOcKgKmIvI2wlWsuLS5XMXKqEJ5DAKmYrYe10oz8nmUFuOvvywwwMgDwYLTerhDeWtmKvH17', NULL),
(27, 'hahex', 'tumibaxyze@mailinator.com', '$2y$10$e7f4p5rNeyoJboz7JWG1TO2k7krngr0DayGGaKewn7bSUiqG96DCq', 'E67YoyiP6xCzrTo9pOYZ00vvePuM9WWUJKkQWyNBXCKnWWGPKAwYrfyxb2cAtgLaHRfuaViGSSgJBM3BkNp4ztqnxT7gahRjUpCi', NULL),
(28, 'qabep', 'numib@mailinator.com', '$2y$10$QPZEjPhSkvUzZ6ioz9lcDudewv7g7RVyy2xqDfn2TA3Bhn4sLUGIW', 'F3RkAfaLMTaYlFf59y94lXA4zlEEGnOsTokexQYXJT0dJa7wgpOVY6daU6me9kmdliui4fLPvUSUSRh26ipt1pPIBhZCY2RvuHIg', NULL),
(29, 'pobyqozu', 'gakizori@mailinator.com', '$2y$10$YBjVvYZdf2tktuIfVy88WeQKc6TyGqVF9qJhiz1t.YoqEaz9r2mN.', '5OwwuAZDgX9pGdRJ2rzPIoYWLF0h3MJhlJ8BOPCAylbY3JttTQr076Id9oLDTczpZuYE3zzQnXbgXeX61RFKfQ4CdKxXXB49K0YO', NULL),
(30, 'kuricijy', 'hubecezu@mailinator.com', '$2y$10$4UxZ6lTHM1bilGCKqx/kxOAwQxxA7QM.PjZRiXjWp0NWVisUAFBMG', 'DBBsQ7s6baGE1flkQAyk3YZFr7zZMyi1E0dafHWeVE9RvmtjTEVJvZio4fxiNbJVvSm35Ssk4DsYqvD5EaRhPcOQXlqxSF3qeZIR', NULL);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
