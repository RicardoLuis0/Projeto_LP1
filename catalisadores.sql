-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 22-Out-2017 às 00:14
-- Versão do servidor: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `casa cuore`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `catalisadores`
--

CREATE TABLE `catalisadores` (
  `cod_cat` int(11) NOT NULL,
  `nome` varchar(90) NOT NULL,
  `cpf` varchar(30) NOT NULL,
  `telefone` varchar(25) NOT NULL,
  `email` varchar(90) NOT NULL,
  `endereco` varchar(150) NOT NULL,
  `cnpj` varchar(25) NOT NULL,
  `data_nascimento` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `catalisadores`
--
ALTER TABLE `catalisadores`
  ADD PRIMARY KEY (`cod_cat`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `catalisadores`
--
ALTER TABLE `catalisadores`
  MODIFY `cod_cat` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
