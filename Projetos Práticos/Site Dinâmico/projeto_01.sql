-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 01-Nov-2019 às 21:07
-- Versão do servidor: 10.4.8-MariaDB
-- versão do PHP: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `projeto_01`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_adminUsers`
--

CREATE TABLE `tb_adminUsers` (
  `id` int(11) NOT NULL,
  `user` varchar(100) NOT NULL,
  `password` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tb_adminUsers`
--

INSERT INTO `tb_adminUsers` (`id`, `user`, `password`) VALUES
(1, 'admin', 'admin');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tb_adminUsers`
--
ALTER TABLE `tb_adminUsers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tb_adminUsers`
--
ALTER TABLE `tb_adminUsers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
