-- phpMyAdmin SQL Dump
-- version 5.2.1deb3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Tempo de geração: 14/05/2024 às 16:04
-- Versão do servidor: 8.0.36-2ubuntu3
-- Versão do PHP: 8.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `empresa`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `funcionarios`
--

CREATE TABLE `funcionarios` (
  `id` int NOT NULL,
  `nome` text NOT NULL,
  `data_nascimento` varchar(50) NOT NULL,
  `funcao` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Despejando dados para a tabela `funcionarios`
--

INSERT INTO `funcionarios` (`id`, `nome`, `data_nascimento`, `funcao`) VALUES
(10, 'Thainan', '2005-12-10', 'Pasteleiro'),
(11, 'Yago', '2000-10-17', 'Logística'),
(12, 'Karol', '2005-04-15', 'Designer de Interiores'),
(13, 'Otavio', '1992-07-08', 'Desenvolvedor Web'),
(15, 'Márcio', '1966-06-14', 'Professor Universitário'),
(16, 'Andressa', '2006-10-25', 'Maquiadora');

-- --------------------------------------------------------

--
-- Estrutura para tabela `registro_horas`
--

CREATE TABLE `registro_horas` (
  `id_ponto` int NOT NULL,
  `id_funcionario` int NOT NULL,
  `data_ponto` date NOT NULL,
  `entrada_1` time NOT NULL,
  `saida_1` time NOT NULL,
  `entrada_2` time NOT NULL,
  `saida_2` time NOT NULL,
  `horas_totais` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Despejando dados para a tabela `registro_horas`
--

INSERT INTO `registro_horas` (`id_ponto`, `id_funcionario`, `data_ponto`, `entrada_1`, `saida_1`, `entrada_2`, `saida_2`, `horas_totais`) VALUES
(1, 10, '2024-05-08', '08:00:00', '12:00:00', '13:00:00', '15:00:00', '06:00:00'),
(2, 11, '2024-05-13', '08:00:00', '12:00:00', '13:00:00', '17:00:00', '08:00:00'),
(3, 11, '2024-05-13', '08:00:00', '12:00:00', '13:00:00', '17:00:00', '08:00:00'),
(4, 12, '2024-05-13', '05:30:00', '10:00:00', '11:30:00', '15:00:00', '08:00:00'),
(5, 13, '2024-05-11', '07:30:00', '12:00:00', '13:00:00', '14:30:00', '06:00:00'),
(6, 11, '2024-05-09', '08:00:00', '12:00:00', '13:00:00', '17:00:00', '08:00:00'),
(7, 13, '2024-05-08', '14:00:00', '17:30:00', '19:00:00', '22:30:00', '07:00:00'),
(8, 13, '2024-05-10', '07:41:00', '12:12:00', '13:46:00', '18:26:00', '09:11:00'),
(9, 10, '2024-05-13', '06:36:08', '12:00:34', '12:50:28', '15:00:16', '07:34:00'),
(10, 12, '2024-05-10', '07:18:57', '12:20:10', '13:28:19', '16:21:12', '07:54:00');

-- --------------------------------------------------------

--
-- Estrutura para tabela `superior`
--

CREATE TABLE `superior` (
  `id` int NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Despejando dados para a tabela `superior`
--

INSERT INTO `superior` (`id`, `username`, `password`) VALUES
(1, 'usuario', 'senha123'),
(2, 'Alexandra', '123456'),
(3, 'Bianca', 'bianca');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `funcionarios`
--
ALTER TABLE `funcionarios`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `registro_horas`
--
ALTER TABLE `registro_horas`
  ADD PRIMARY KEY (`id_ponto`),
  ADD KEY `id_funcionario` (`id_funcionario`);

--
-- Índices de tabela `superior`
--
ALTER TABLE `superior`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `funcionarios`
--
ALTER TABLE `funcionarios`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de tabela `registro_horas`
--
ALTER TABLE `registro_horas`
  MODIFY `id_ponto` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de tabela `superior`
--
ALTER TABLE `superior`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `registro_horas`
--
ALTER TABLE `registro_horas`
  ADD CONSTRAINT `registro_horas_ibfk_1` FOREIGN KEY (`id_funcionario`) REFERENCES `funcionarios` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
