-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 14-Jun-2018 às 01:20
-- Versão do servidor: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `adoption`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `doar`
--

CREATE TABLE `doar` (
  `nome` varchar(240) DEFAULT NULL,
  `tipoanimal` varchar(240) DEFAULT NULL,
  `raca` varchar(240) DEFAULT NULL,
  `idade` text,
  `cor` varchar(20) DEFAULT NULL,
  `emaildono` text,
  `idanimal` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `midia`
--

CREATE TABLE `midia` (
  `tipo` varchar(100) DEFAULT NULL,
  `qualidade` varchar(100) DEFAULT NULL,
  `tamanho` varchar(50) DEFAULT NULL,
  `link` text,
  `cod_midia` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `senha` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `foto` longblob,
  `data_nascimento` date DEFAULT NULL,
  `username` varchar(240) NOT NULL,
  `cod_usuario` int(11) NOT NULL,
  `nome` varchar(240) NOT NULL,
  `sobrenome` varchar(240) NOT NULL,
  `pais` varchar(240) DEFAULT NULL,
  `estado` varchar(240) DEFAULT NULL,
  `cidade` varchar(240) DEFAULT NULL,
  `bairro` varchar(240) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`senha`, `email`, `foto`, `data_nascimento`, `username`, `cod_usuario`, `nome`, `sobrenome`, `pais`, `estado`, `cidade`, `bairro`) VALUES
('123', 'cleitonbraga56@gmail.com', NULL, NULL, 'ThePunisher', 1, 'Cleiton', 'Braga', NULL, NULL, NULL, NULL),
('agnes', 'minions1001@gmail.com', NULL, NULL, 'MinionsEscravos', 2, 'Meu', 'Malvado', NULL, NULL, NULL, NULL),
('24', 'Sei lá', NULL, NULL, '23gu1381uv7', 3, 'Teste4', 'adhgajda', NULL, NULL, NULL, NULL),
('dadadad', 'dadadada', NULL, NULL, 'dadad', 4, 'adad', 'adadaadada', NULL, NULL, NULL, NULL),
('deusnopoder', 'PapaiMeLivre@gmail.com', NULL, NULL, 'Papai_É_Deus', 5, 'Jesus', 'Braga', NULL, NULL, NULL, NULL),
('1e123124asdfa', 'adaadadadad', NULL, NULL, 'd12bd18dg', 6, '1t78231g', 'adadbaida', NULL, NULL, NULL, NULL),
('adadasdad', 'dadaddaada', NULL, NULL, 'adasdada', 7, 'adad', 'adad', NULL, NULL, NULL, NULL),
('mg211126', 'Mateusgv21@gmail.com', NULL, NULL, 'Teuus', 8, 'Mateus', 'Goncalves', NULL, NULL, NULL, NULL),
('1234', '84e7urfo9çtg90y-9&#7765;', NULL, NULL, 'PapaiMeLivre', 9, 'Jesus', 'Deus', NULL, NULL, NULL, NULL),
('1234', 'aadaandasud', NULL, NULL, 'atelogo', 10, 'oi', 'tchau', NULL, NULL, NULL, NULL),
('1234', 'jkabsdka', NULL, NULL, 'atelogo', 11, 'oi', 'tchau', NULL, NULL, NULL, NULL),
('123123', 'cleitonbraga56@gmail.com', NULL, NULL, 'eaimano', 12, 'oi', 'tchau', NULL, NULL, NULL, NULL),
('narquitos', 'narcos762@gmail.com', NULL, NULL, 'LoChief', 13, 'Pablo ', 'Escobar', NULL, NULL, NULL, NULL),
('1213123', 'asdadadada', NULL, NULL, 'NuncaNemVi', 14, 'Não', 'Sei', NULL, NULL, NULL, NULL),
('123', 'Mateusgv21@gmail.com', NULL, NULL, 'ThePunisher', 25, 'Mateus', 'tchau', NULL, NULL, NULL, NULL),
('mg211126', 'Mateusgv21@gmail.com', NULL, NULL, 'Teuus', 26, 'Mateus', 'Goncalves', NULL, 'rj', 'quissama', NULL),
('mg211126', 'Mateusgv21@gmail.com', NULL, NULL, 'Teuus_goncalves', 27, 'Mateus', 'Goncalves', NULL, 'rj', 'quissama', NULL),
('mg211126', 'Mateusgv21@gmail.com', NULL, NULL, 'Teuus', 28, 'Mateus', 'Goncalves', NULL, 'rj', 'quissama', NULL),
('123', 'minions1001@gmail.com', NULL, NULL, 'atelogo', 29, 'Jesus', 'Gonçalves', NULL, 'ce', 'fortaleza', NULL),
('mg211126', 'Mateusgv21@gmail.com', NULL, NULL, 'Teuus', 30, 'Mateus', 'Goncalves', NULL, 'rj', 'quissama', NULL),
('1234', 'gameplayvs@gmail.com', NULL, NULL, 'GameplaysVS', 31, 'Vitor', 'Silva', NULL, '...', '', NULL),
('123', 'cleitinhobraga11@gmail.com', NULL, NULL, 'Papai', 32, 'Jose', 'Antonio', NULL, '...', '', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `doar`
--
ALTER TABLE `doar`
  ADD KEY `idanimal` (`idanimal`);

--
-- Indexes for table `midia`
--
ALTER TABLE `midia`
  ADD PRIMARY KEY (`cod_midia`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`cod_usuario`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `doar`
--
ALTER TABLE `doar`
  MODIFY `idanimal` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `midia`
--
ALTER TABLE `midia`
  MODIFY `cod_midia` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `cod_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
