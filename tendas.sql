-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Máquina: localhost
-- Data de Criação: 19-Set-2017 às 16:21
-- Versão do servidor: 5.6.33-0ubuntu0.14.04.1
-- versão do PHP: 5.6.31-2+ubuntu14.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de Dados: `tendas`
--
CREATE DATABASE IF NOT EXISTS `tendas` DEFAULT CHARACTER SET utf8 COLLATE utf8_bin;
USE `tendas`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `orcamentos`
--

CREATE TABLE IF NOT EXISTS `orcamentos` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `product` bigint(20) DEFAULT NULL,
  `class` bigint(20) NOT NULL,
  `nome` text COLLATE utf8_bin NOT NULL,
  `email` text COLLATE utf8_bin NOT NULL,
  `telefone` text COLLATE utf8_bin NOT NULL,
  `estado` text COLLATE utf8_bin NOT NULL,
  `cidade` text COLLATE utf8_bin NOT NULL,
  `callmail` text COLLATE utf8_bin NOT NULL,
  `status` int(11) DEFAULT NULL,
  `time` date NOT NULL,
  `mensagem` text COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=16 ;

--
-- Extraindo dados da tabela `orcamentos`
--

INSERT INTO `orcamentos` (`id`, `product`, `class`, `nome`, `email`, `telefone`, `estado`, `cidade`, `callmail`, `status`, `time`, `mensagem`) VALUES
(10, 0, 1, 'Marcus Vin&iacute;cius Martins Meneses', 'marcusmeneses@live.com', '6282824662', 'Goi&aacute;s', 'Goi&acirc;nia', 'mail', 2, '2017-08-15', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc at cursus nibh, id porttitor felis. Duis in luctus enim. Vivamus tempus aliquam velit quis semper. Proin non justo eget felis varius congue. Aliquam finibus turpis feugiat justo ullamcorper, id imperdiet dolor fermentum. Morbi vel nibh odio. Nunc fermentum nec lorem sed commodo. Nunc vel sapien pellentesque, consectetur felis nec, vehicula elit.'),
(11, 2, 1, 'Marcus Vin&iacute;cius Martins Meneses', 'marcusmeneses@live.com', '6282824662', 'Goi&aacute;s', 'Una&iacute;', 'mail', 3, '2017-08-16', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc at cursus nibh, id porttitor felis. Duis in luctus enim. Vivamus tempus aliquam velit quis semper. Proin non justo eget felis varius congue. Aliquam finibus turpis feugiat justo ullamcorper, id imperdiet dolor fermentum. Morbi vel nibh odio. Nunc fermentum nec lorem sed commodo. Nunc vel sapien pellentesque, consectetur felis nec, vehicula elit.'),
(12, 2, 1, 'Marcus Vin&iacute;cius Martins Meneses', 'marcusmeneses@live.com', '6282824662', 'Goi&aacute;s', 'Una&iacute;', 'call', 1, '2017-08-16', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc at cursus nibh, id porttitor felis. Duis in luctus enim. Vivamus tempus aliquam velit quis semper. Proin non justo eget felis varius congue. Aliquam finibus turpis feugiat justo ullamcorper, id imperdiet dolor fermentum. Morbi vel nibh odio. Nunc fermentum nec lorem sed commodo. Nunc vel sapien pellentesque, consectetur felis nec, vehicula elit.'),
(13, 0, 1, 'Marcus Vin&iacute;cius Martins Meneses', 'marcusmeneses@live.com', '6282824662', 'Minas Gerais', 'Una&iacute;', 'mail', 2, '2017-08-16', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc at cursus nibh, id porttitor felis. Duis in luctus enim. Vivamus tempus aliquam velit quis semper. Proin non justo eget felis varius congue. Aliquam finibus turpis feugiat justo ullamcorper, id imperdiet dolor fermentum. Morbi vel nibh odio. Nunc fermentum nec lorem sed commodo. Nunc vel sapien pellentesque, consectetur felis nec, vehicula elit.'),
(14, 12, 1, 'Marcus Vin&iacute;cius Martins Meneses', 'marcusmeneses@live.com', '6282824662', 'Goi&aacute;s', 'Una&iacute;', 'mail', 2, '2017-08-17', 'sghsrhrb hsh netyr whhrth r'),
(15, 0, 1, 'Marcus Vin&iacute;cius Martins Meneses', 'marcusmeneses@live.com', '6282824662', 'Minas Gerais', 'Una&iacute;', 'call', 3, '2017-08-17', 'hgfnjf hgerhgh ghe rhrhrhr ');

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `login` text COLLATE utf8_bin NOT NULL,
  `password` text COLLATE utf8_bin NOT NULL,
  `name` text COLLATE utf8_bin NOT NULL,
  `class` text COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `login`, `password`, `name`, `class`) VALUES
(1, 'tendaseciagoiania@gmail.com', 'Mr92@uc73', 'Lara', 'admin'),
(2, 'marcus@voastudio.tech', '$mvmM1985', 'Marcus', 'admin');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
