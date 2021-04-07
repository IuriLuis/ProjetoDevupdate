-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 07-Abr-2021 às 07:59
-- Versão do servidor: 10.4.18-MariaDB
-- versão do PHP: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `devupdate`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `passwd` varchar(255) NOT NULL,
  `level` varchar(5) DEFAULT '',
  `photo` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `passwd`, `level`, `photo`, `created_at`, `updated_at`) VALUES
(32, 'teste', 'teste', 'admin1@teste.com', '$2y$10$Bsd0uKWuxRZmzSoKE8CAqOqleluLObWKLVT90DdLj.Bcqa7giczjO', '0', NULL, '2021-04-07 10:42:48', '2021-04-07 05:51:48'),
(33, 'teste2', 'teste2', 'admin2@teste.com', '$2y$10$pmkICzNBgjkl0.VK54N5j.3i.hospnQujCMzdnyDJItTucektGxrW', '0', NULL, '2021-04-07 10:43:36', '2021-04-07 05:52:20'),
(34, 'teste3', 'teste3', 'admin3@teste.com', '$2y$10$YwUKFpOVeHcobYi5E4oX9O1MPI1Erkow1sUVQZbP062XEJGAM63MW', '0', NULL, '2021-04-07 10:44:01', '2021-04-07 05:52:11'),
(35, 'teste4', 'teste4', 'admin4@teste.com', '$2y$10$5PHNPGDkGztzUZjd4UtequRwvHSlSwUIl7dq4g.5GQS7xp/eBXsLG', '0', NULL, '2021-04-07 10:49:48', '2021-04-07 05:52:00'),
(36, 'teste5', 'teste5', 'user5@teste.com', '$2y$10$jDQta0XD60l4XYZOBdyql.NaSmkA6cPiHRn4BXCkggZsUU/72IpDG', '1', NULL, '2021-04-07 10:50:15', '2021-04-07 10:50:15'),
(37, 'teste6', 'teste6', 'user6@teste.com', '$2y$10$DYdD0NcHdJsPYBo5ObZsjuk2YwNz79CSih2DUK.w5JknIK66.tIBa', '1', NULL, '2021-04-07 10:50:52', '2021-04-07 10:50:52');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
