-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 11/11/2024 às 17:42
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
-- Banco de dados: `simulado`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `alocacao`
--

CREATE TABLE `alocacao` (
  `id` int(11) NOT NULL,
  `area` int(11) DEFAULT NULL,
  `automovel` int(11) DEFAULT NULL,
  `concessionaria` int(11) DEFAULT NULL,
  `quantidade` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `automoveis`
--

CREATE TABLE `automoveis` (
  `id` int(11) NOT NULL,
  `modelo` varchar(50) DEFAULT NULL,
  `preco` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `cliente`
--

CREATE TABLE `cliente` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `concessionarias`
--

CREATE TABLE `concessionarias` (
  `id` int(11) NOT NULL,
  `concessionaria` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `venda`
--

CREATE TABLE `venda` (
  `id` int(11) NOT NULL,
  `cliente` int(11) DEFAULT NULL,
  `concessionaria` int(11) DEFAULT NULL,
  `automovel` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `alocacao`
--
ALTER TABLE `alocacao`
  ADD PRIMARY KEY (`id`),
  ADD KEY `automovel` (`automovel`),
  ADD KEY `concessionaria` (`concessionaria`);

--
-- Índices de tabela `automoveis`
--
ALTER TABLE `automoveis`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `concessionarias`
--
ALTER TABLE `concessionarias`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `venda`
--
ALTER TABLE `venda`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cliente` (`cliente`),
  ADD KEY `automovel` (`automovel`),
  ADD KEY `concessionaria` (`concessionaria`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `alocacao`
--
ALTER TABLE `alocacao`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `automoveis`
--
ALTER TABLE `automoveis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `concessionarias`
--
ALTER TABLE `concessionarias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `venda`
--
ALTER TABLE `venda`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `alocacao`
--
ALTER TABLE `alocacao`
  ADD CONSTRAINT `alocacao_ibfk_1` FOREIGN KEY (`automovel`) REFERENCES `automoveis` (`id`),
  ADD CONSTRAINT `alocacao_ibfk_2` FOREIGN KEY (`concessionaria`) REFERENCES `concessionarias` (`id`);

--
-- Restrições para tabelas `venda`
--
ALTER TABLE `venda`
  ADD CONSTRAINT `venda_ibfk_1` FOREIGN KEY (`cliente`) REFERENCES `cliente` (`id`),
  ADD CONSTRAINT `venda_ibfk_2` FOREIGN KEY (`automovel`) REFERENCES `automoveis` (`id`),
  ADD CONSTRAINT `venda_ibfk_3` FOREIGN KEY (`concessionaria`) REFERENCES `concessionarias` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
