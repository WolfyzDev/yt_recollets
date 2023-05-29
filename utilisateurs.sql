-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : fdb1034.awardspace.net
-- Généré le : lun. 29 mai 2023 à 13:10
-- Version du serveur : 8.0.32
-- Version de PHP : 8.1.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `4124459_ytrec`
--

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

CREATE TABLE `utilisateurs` (
  `id` int NOT NULL,
  `pseudo` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` text NOT NULL,
  `ip` varchar(20) NOT NULL,
  `token` text NOT NULL,
  `date_inscription` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id`, `pseudo`, `email`, `password`, `ip`, `token`, `date_inscription`) VALUES
(1, 'Wolfyz', 'wolfyzpro@gmail.com', '$2y$12$S1H6Hbo3JRUAzHAc7txgeOodKpN/.fPVZ/KvsEIm8lBye4TiMnthO', '92.184.105.66', '1eb6b5c0afadc5bf0f0478943f9c7c3b8d6dba9578f37e4e5475220e4db88285a3d7c44bb25d8b4a94f2bface24662cde5121de232307edb26af3e740a856f47', '2023-05-22 19:15:39'),
(2, 'mmmm', 'castellan.marie18@gmail.com', '$2y$12$9/t6pjDLK9RjbtkOACB.8.5qQA.dDrw4FXOi6Ua39JP0aP6K7vENS', '92.184.105.184', 'ee901251aed7ed3da5b4d17d824d6423a486f7379aeaea62451c5b2e7878e3a546853fa74c835cedb0ceb0c7065486cc6f5a67317e3823df6020709d70ddc304', '2023-05-23 08:38:30'),
(3, 'POP', 'pop@gmail.com', '$2y$12$AYY0mNPCVZFCBA5uOpKN9uJdA1S8EeI7lQj9UwBFL.6jMZ/WY3vWi', '92.184.105.66', '0d1886ef9b892577b79a9e1adccc4836e9f12cf2dd791a21f468e16b8b888679207b4ee9046b73b3175cf6df49586835084f8ab4575c7d100d8e5633d716d2af', '2023-05-23 19:27:12'),
(4, 'Canard', 'canard@gmail.com', '$2y$12$y4UxY8xXntqhereearNOuu6Rgy50cg1bXOiH3qWokm4KSivVROJOW', '92.184.99.187', '7fec5cf015f3a9dd1b77f3d2c4cde301d109c93bb2217ea02b854db4e5c4bd567f4fff9660934612702a1c8fc26a62dbd88d0e8e35dc97daf6b907535413a6d1', '2023-05-24 14:45:22'),
(5, 'PP', 'pp@gmail.com', '$2y$12$7Ktp03I0MHFqcfJuX3HjWuazzDBdzkb4CkwGBq9y6.1dY3P6orj6i', '92.184.99.187', '0377af08da68f5481c39126aecde9b6f851e19acd43af786fff5cb14837b36c0d4bb6a38f161f954d9cf6f78cc10fcde84dd63ae9dd39469bb15b1c6a6952e51', '2023-05-24 16:05:51'),
(6, 'MMM', 'mmm@gmail.com', '$2y$12$AzU8NdH3ZiHmMFe.KsQxIuPbYjbzkVcipGtRF5I0FK0RmonDeX9CK', '92.184.105.37', 'f6a82c0aa03bfd29fdfbc89d9ca5e2e34f771c8f65a687cfbc497bd7c78c7f059f73fd967322439bdbb1c23a9089e7afef0f07218ad9da7a5339f268d0d0c944', '2023-05-29 12:32:54');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
