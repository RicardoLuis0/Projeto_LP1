-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 11-Dez-2017 às 22:14
-- Versão do servidor: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `casacuore`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `criancas`
--

CREATE TABLE `criancas` (
  `nome` varchar(40) NOT NULL,
  `data_nascimento` date NOT NULL,
  `cpfResponsavel` varchar(15) NOT NULL,
  `codigo` int(11) NOT NULL,
  `foto` varchar(128) NOT NULL,
  `periodo_semana` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `criancas`
--

INSERT INTO `criancas` (`nome`, `data_nascimento`, `cpfResponsavel`, `codigo`, `foto`, `periodo_semana`) VALUES
('abc', '2017-12-10', '3', 1, '', 2),
('teste2', '2017-12-05', '3', 2, '', 2),
('teste3', '2017-12-14', '4', 3, '', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `criancas`
--
ALTER TABLE `criancas`
  ADD PRIMARY KEY (`codigo`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `criancas`
--
ALTER TABLE `criancas`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
