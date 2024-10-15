-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 10/10/2024 às 04:11
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
-- Banco de dados: `banco_db`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `cartoes`
--

CREATE TABLE `cartoes` (
  `id` int(11) NOT NULL,
  `cliente_id` int(11) NOT NULL,
  `endereco` varchar(255) NOT NULL,
  `cartao` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `cartoes`
--

INSERT INTO `cartoes` (`id`, `cliente_id`, `endereco`, `cartao`) VALUES
(1, 1, 'Rua das Hortências', '14134'),
(2, 1, 'Rua das Hortências', '14134'),
(3, 1, 'Rua Alexandria Burger', '2412');

-- --------------------------------------------------------

--
-- Estrutura para tabela `clientes`
--

CREATE TABLE `clientes` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `senha` varchar(100) NOT NULL,
  `endereco` varchar(255) DEFAULT NULL,
  `cartao` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `clientes`
--

INSERT INTO `clientes` (`id`, `nome`, `email`, `senha`, `endereco`, `cartao`) VALUES
(1, 'Juliano de Souza', 'julinho@gmail.com', '12345', 'Rua das Hortências', '14134'),
(2, 'Maria Silveira Junior', 'maria@gmail.com', '12345', 'Rua Alexandria Burger', '32443'),
(3, 'Gerúndio Cabral dos Santos', 'gerundinho@gmail.com', '76890', 'Rua João Liberato', '53256'),
(4, 'Andressa Fabiana Santinho', 'andressa@gmail.com', '12345', NULL, NULL),
(6, 'Maria Silveira Junior', 'maria@gmail.com', '12345', NULL, NULL),
(8, 'Juliano de Souza', 'gerundinho@gmail.com', '12345', NULL, NULL),
(9, 'Gerúndio Cabral dos Santos', 'sim@nao', '12453', NULL, NULL),
(11, 'Maria Silveira Junior', 'sim@nao', '12345', NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura para tabela `gerentes`
--

CREATE TABLE `gerentes` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `senha` varchar(50) NOT NULL,
  `nome` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `gerentes`
--

INSERT INTO `gerentes` (`id`, `email`, `senha`, `nome`) VALUES
(8, 'sim@nao', '1234', 'Andressa');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `cartoes`
--
ALTER TABLE `cartoes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_cliente` (`cliente_id`);

--
-- Índices de tabela `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `gerentes`
--
ALTER TABLE `gerentes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cartoes`
--
ALTER TABLE `cartoes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de tabela `gerentes`
--
ALTER TABLE `gerentes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `cartoes`
--
ALTER TABLE `cartoes`
  ADD CONSTRAINT `fk_cliente` FOREIGN KEY (`cliente_id`) REFERENCES `clientes` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
