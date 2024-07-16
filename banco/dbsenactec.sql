-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 17/07/2024 às 01:53
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `dbsenactec`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `cursos`
--

CREATE TABLE `cursos` (
  `id` int(11) UNSIGNED NOT NULL,
  `nome` varchar(255) NOT NULL,
  `descricao` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `cursos`
--

INSERT INTO `cursos` (`id`, `nome`, `descricao`) VALUES
(1, 'Desenvolvedor Full-Stack', NULL),
(2, 'Desenvolvedor de Sistemas', NULL),
(3, 'Desenvolvedor Front-End', NULL),
(4, 'Desenvolvedor Back-End', NULL);

-- --------------------------------------------------------

--
-- Estrutura para tabela `projetos`
--

CREATE TABLE `projetos` (
  `id` int(11) UNSIGNED NOT NULL,
  `usuario_id` int(11) UNSIGNED NOT NULL,
  `nome` varchar(255) NOT NULL,
  `descricao` varchar(255) NOT NULL,
  `arquivo` varchar(255) NOT NULL,
  `github` varchar(255) DEFAULT NULL,
  `imagem` varchar(255) DEFAULT NULL,
  `visibilidade` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) UNSIGNED NOT NULL,
  `nome` varchar(255) NOT NULL,
  `data` date NOT NULL,
  `curso_id` int(11) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `imagem` varchar(255) NOT NULL,
  `criado_em` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `data`, `curso_id`, `email`, `senha`, `imagem`, `criado_em`) VALUES
(25, 'Samuel de Almeida Aguilar', '2006-06-23', 1, 'samueldealmeida.aguilar12@gmail.com', '$2y$10$xtN4W3NsxofbgwlE4ZPrJOBH.DbdLNd.U6v1Oh9oWXUkqbzcWLOFy', '', '2024-06-14 00:00:00'),
(26, 'Teste', '2006-06-23', 3, 'samueldealmeida.aguilar@gmail.com', '$2y$10$yIzXH8m5uhhM/ykTWFZ2c.50O5xtzd0D.opZIFbmokqryhh6bLzMm', '', '2024-06-14 00:00:00'),
(27, 'Jessé Barbosa', '2009-03-11', 1, 'barbosajesse419@gmail.com', '$2y$10$9tTTd26J36.WY5n9a.LF/Or0AOhJ.DqYJadIon3JVx.bpvu8pA81q', '', '2024-06-14 00:00:00');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `cursos`
--
ALTER TABLE `cursos`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nome` (`nome`);

--
-- Índices de tabela `projetos`
--
ALTER TABLE `projetos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_user_id` (`usuario_id`);

--
-- Índices de tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `nome` (`nome`),
  ADD KEY `fk_curso_id` (`curso_id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cursos`
--
ALTER TABLE `cursos`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `projetos`
--
ALTER TABLE `projetos`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `projetos`
--
ALTER TABLE `projetos`
  ADD CONSTRAINT `fk_user_id` FOREIGN KEY (`usuario_id`) REFERENCES `usuarios` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Restrições para tabelas `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `fk_curso_id` FOREIGN KEY (`curso_id`) REFERENCES `cursos` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
