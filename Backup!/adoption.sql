-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Tempo de geração: 18/12/2018 às 14:58
-- Versão do servidor: 5.7.18-0ubuntu0.16.04.1
-- Versão do PHP: 7.0.18-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `adoption`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `doar`
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
-- Estrutura para tabela `empresas`
--

CREATE TABLE `empresas` (
  `NomeEmpresa` varchar(200) NOT NULL,
  `cnpj` int(50) NOT NULL,
  `endereco` varchar(200) NOT NULL,
  `cidade` varchar(100) NOT NULL,
  `sevico` varchar(100) NOT NULL,
  `dono` varchar(100) NOT NULL,
  `cod_empresa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `empresas`
--

INSERT INTO `empresas` (`NomeEmpresa`, `cnpj`, `endereco`, `cidade`, `sevico`, `dono`, `cod_empresa`) VALUES
('Adoption', 312313113, 'jose alguma coisa', 'quissama', 'lavagem', 'beatriz', 1),
('dadadasdada', 13131334, 'josÃ© saturnino', 'quisasa', 'adadqeq', 'eu', 2),
('Netflix', 31231312, 'josÃ© saturnino', 'Rio de Janeiro', 'entretenimento', 'alguem', 3),
('adoption', 51210, 'josÃ© saturnino', 'quissamÃ£', 'raÃ§Ã£o', 'bia', 4),
('adoption', 12345678, 'josÃ© saturnino', 'quissamÃ£', 'matar', 'nos', 5),
('adoption', 12345678, 'josÃ© saturnino', 'quissamÃ£', 'matar', 'nos', 6);

-- --------------------------------------------------------

--
-- Estrutura para tabela `midia`
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
-- Estrutura para tabela `usuario`
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
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `doar`
--
ALTER TABLE `doar`
  ADD KEY `idanimal` (`idanimal`);

--
-- Índices de tabela `empresas`
--
ALTER TABLE `empresas`
  ADD PRIMARY KEY (`cod_empresa`);

--
-- Índices de tabela `midia`
--
ALTER TABLE `midia`
  ADD PRIMARY KEY (`cod_midia`);

--
-- Índices de tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`cod_usuario`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `doar`
--
ALTER TABLE `doar`
  MODIFY `idanimal` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de tabela `empresas`
--
ALTER TABLE `empresas`
  MODIFY `cod_empresa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de tabela `midia`
--
ALTER TABLE `midia`
  MODIFY `cod_midia` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `cod_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
