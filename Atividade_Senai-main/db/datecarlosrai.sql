-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 24-Maio-2023 às 01:03
-- Versão do servidor: 10.4.10-MariaDB
-- versão do PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `datecarlosrai`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `carrorai`
--

CREATE TABLE `carrorai` (
  `idcarrorai` int(11) NOT NULL,
  `anocarrorai` int(4) NOT NULL,
  `valorcarrorai` decimal(10,4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `cestarai`
--

CREATE TABLE `cestarai` (
  `idcestarai` int(11) NOT NULL,
  `anocestarai` int(4) NOT NULL,
  `valorcestarai` decimal(10,4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `dolarrai`
--

CREATE TABLE `dolarrai` (
  `iddolarrai` int(11) NOT NULL,
  `anodolarrai` int(4) NOT NULL,
  `valordolarrai` decimal(10,4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `gasolinarai`
--

CREATE TABLE `gasolinarai` (
  `idgasolinarai` int(11) NOT NULL,
  `anogasolinarai` int(4) NOT NULL,
  `valorgasolinarai` decimal(10,4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `pibrai`
--

CREATE TABLE `pibrai` (
  `idpibrai` int(11) NOT NULL,
  `anopibrai` int(4) NOT NULL,
  `valorpibrai` decimal(10,4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `processadorrai`
--

CREATE TABLE `processadorrai` (
  `idprocessadorrai` int(11) NOT NULL,
  `anoprocessadorrai` int(4) NOT NULL,
  `valorprocessadorrai` decimal(10,4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `carrorai`
--
ALTER TABLE `carrorai`
  ADD PRIMARY KEY (`idcarrorai`);

--
-- Índices para tabela `cestarai`
--
ALTER TABLE `cestarai`
  ADD PRIMARY KEY (`idcestarai`);

--
-- Índices para tabela `dolarrai`
--
ALTER TABLE `dolarrai`
  ADD PRIMARY KEY (`iddolarrai`);

--
-- Índices para tabela `gasolinarai`
--
ALTER TABLE `gasolinarai`
  ADD PRIMARY KEY (`idgasolinarai`);

--
-- Índices para tabela `pibrai`
--
ALTER TABLE `pibrai`
  ADD PRIMARY KEY (`idpibrai`);

--
-- Índices para tabela `processadorrai`
--
ALTER TABLE `processadorrai`
  ADD PRIMARY KEY (`idprocessadorrai`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `carrorai`
--
ALTER TABLE `carrorai`
  MODIFY `idcarrorai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `cestarai`
--
ALTER TABLE `cestarai`
  MODIFY `idcestarai` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `dolarrai`
--
ALTER TABLE `dolarrai`
  MODIFY `iddolarrai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `gasolinarai`
--
ALTER TABLE `gasolinarai`
  MODIFY `idgasolinarai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de tabela `pibrai`
--
ALTER TABLE `pibrai`
  MODIFY `idpibrai` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `processadorrai`
--
ALTER TABLE `processadorrai`
  MODIFY `idprocessadorrai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
