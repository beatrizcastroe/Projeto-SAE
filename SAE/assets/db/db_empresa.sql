-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 04-Out-2021 às 17:40
-- Versão do servidor: 10.4.21-MariaDB
-- versão do PHP: 7.4.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `db_empresa`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `clientes`
--

CREATE TABLE `clientes` (
  `id` bigint(20) NOT NULL,
  `nome` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cpf` bigint(255) NOT NULL,
  `dataNasc` date NOT NULL,
  `rg` bigint(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `clientes`
--

INSERT INTO `clientes` (`id`, `nome`, `cpf`, `dataNasc`, `rg`) VALUES
(1, 'Caio Gen', 12345678990, '2000-10-03', 502605542),
(2, 'Diego Geraldo', 12345678997, '1996-06-12', 502606980),
(3, 'Beatriz Cassiano de Castro', 46852213897, '1999-08-02', 527738486),
(6, 'Fernanda Geraldo', 1234567890, '1999-08-02', 123456789);

-- --------------------------------------------------------

--
-- Estrutura da tabela `enderecos`
--

CREATE TABLE `enderecos` (
  `id` bigint(20) NOT NULL,
  `endereco` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `numero` int(30) DEFAULT NULL,
  `comp` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bairro` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cep` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cidade` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `estado` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `idCliente` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `enderecos`
--

INSERT INTO `enderecos` (`id`, `endereco`, `numero`, `comp`, `bairro`, `cep`, `cidade`, `estado`, `idCliente`) VALUES
(1, 'Rua 25', 23, 'apto 41', 'jd. paulista', '13060091', 'Campinas', 'SP', 1),
(2, 'Rua Babi', 23, 'apto 41', 'jd. paulista', '13060091', 'Campinas', 'SP', 1),
(3, 'Rua Luna', 23, 'apto 41', 'jd. paulista', '13060091', 'Campinas', 'SP', 1),
(4, 'Rua Nove', 23, 'apto 41', 'jd. paulista', '13060091', 'Campinas', 'SP', 1),
(5, 'Rua Nove', 23, 'apto 41', 'jd. paulista', '13060091', 'Campinas', 'SP', 1),
(7, 'Rua Nove', 23, 'apto 41', 'jd. paulista', '13060091', 'Campinas', 'SP', 1),
(8, 'Rua Nove', 23, 'apto 41', 'jd. paulista', '13060091', 'Campinas', 'SP', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `senha` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `email`, `senha`) VALUES
(1, 'Beatriz Castro', 'bia@email.com', '123456'),
(26, 'Amanda Moreira', 'amanda@email.com', '123456'),
(27, 'Amanda Dias', 'amanda@email.com', '123456'),
(30, 'dasdsasd', 'ads@gmail.com', 'dassdas');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `enderecos`
--
ALTER TABLE `enderecos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_id_cliente` (`idCliente`);

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `enderecos`
--
ALTER TABLE `enderecos`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `enderecos`
--
ALTER TABLE `enderecos`
  ADD CONSTRAINT `fk_id_cliente` FOREIGN KEY (`idCliente`) REFERENCES `clientes` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
