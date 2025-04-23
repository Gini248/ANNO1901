-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 22-Abr-2025 às 01:10
-- Versão do servidor: 10.4.32-MariaDB
-- versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `anno_cands`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cands_anno`
--

CREATE TABLE `cands_anno` (
  `discord` varchar(150) NOT NULL,
  `como_conheceu` varchar(45) NOT NULL,
  `banido` varchar(45) NOT NULL,
  `tempo_rp` varchar(45) NOT NULL,
  `idade_ooc` varchar(45) NOT NULL,
  `nome_ooc` varchar(45) NOT NULL,
  `motivo` varchar(45) NOT NULL,
  `pontos` varchar(45) NOT NULL,
  `nome_ic` varchar(45) NOT NULL,
  `idade_ic` varchar(45) NOT NULL,
  `objetivos` varchar(45) NOT NULL,
  `historia` varchar(4000) NOT NULL,
  `psicologico` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `cands_anno`
--

INSERT INTO `cands_anno` (`discord`, `como_conheceu`, `banido`, `tempo_rp`, `idade_ooc`, `nome_ooc`, `motivo`, `pontos`, `nome_ic`, `idade_ic`, `objetivos`, `historia`, `psicologico`) VALUES
('aa', 'aaaaaaaaaaaaa', 'aaaaaaaaaa', 'aaaaaaaaaaaaaaa', 'aaaaaaaaaa', 'aaaaaaaaaaaa', 'aaaaaaaaaaaaa', 'aaaaaaaa', 'aaaaaaaaaaaaaaaa', 'aaaaaaaaaaaa', 'aaaaaaaa', 'aaaaaaa', 'aaaaaaaaaa'),
('gini0_0', 'Conheci através da stream do horroroso', 'Não', '6 anos', '18', 'Guilherme Serrado', 'Quero praticar roleplay num sitio onde o prop', 'a b c d e f', 'Frodo Johnson', '22', 'Ser rico', '1ª candidatura\r\nIsto é um exemplo de uma bre e curta historia que se vai repetir para que a professora consiga ver que a base de dados está a funcionar por isso vou repetir isto umas 20 vezes\r\n1ª candidatura\r\nIsto é um exemplo de uma bre e curta historia que se vai repetir para que a professora consiga ver que a base de dados está a funcionar por isso vou repetir isto umas 20 vezes\r\n1ª candidatura\r\nIsto é um exemplo de uma bre e curta historia que se vai repetir para que a professora consiga ver que a base de dados está a funcionar por isso vou repetir isto umas 20 vezes\r\n1ª candidatura\r\nIsto é um exemplo de uma bre e curta historia que se vai repetir para que a professora consiga ver que a base de dados está a funcionar por isso vou repetir isto umas 20 vezes\r\n1ª candidatura\r\nIsto é um exemplo de uma bre e curta historia que se vai repetir para que a professora consiga ver que a base de dados está a funcionar por isso vou repetir isto umas 20 vezes\r\n1ª candidatura\r\nIsto é um exemplo de uma bre e curta historia que se vai repetir para que a professora consiga ver que a base de dados está a funcionar por isso vou repetir isto umas 20 vezes\r\n1ª candidatura\r\nIsto é um exemplo de uma bre e curta historia que se vai repetir para que a professora consiga ver que a base de dados está a funcionar por isso vou repetir isto umas 20 vezes\r\n1ª candidatura\r\nIsto é um exemplo de uma bre e curta historia que se vai repetir para que a professora consiga ver que a base de dados está a funcionar por isso vou repetir isto umas 20 vezes\r\n1ª candidatura\r\nIsto é um exemplo de uma bre e curta historia que se vai repetir para que a professora consiga ver que a base de dados está a funcionar por isso vou repetir isto umas 20 vezes', 'Medo de cobras'),
('qwertz10', 'Conheci através da stream do gini', 'Não', '16 anos', '18', 'Issam Santos', 'teste para a base de dados (2ª candidatura )', 'a b c d e f', 'José Malaquias', '26', 'asdvadsg', '2ªCANDIDATURA\r\nMais um teste para ver se a base de dados está a funcionar\r\nMais um teste para ver se a base de dados está a funcionar\r\nMais um teste para ver se a base de dados está a funcionar\r\nMais um teste para ver se a base de dados está a funcionar\r\nMais um teste para ver se a base de dados está a funcionar\r\nMais um teste para ver se a base de dados está a funcionar\r\nMais um teste para ver se a base de dados está a funcionar\r\nMais um teste para ver se a base de dados está a funcionar\r\nMais um teste para ver se a base de dados está a funcionar\r\nMais um teste para ver se a base de dados está a funcionar\r\nMais um teste para ver se a base de dados está a funcionar\r\nMais um teste para ver se a base de dados está a funcionar\r\nMais um teste para ver se a base de dados está a funcionar\r\nMais um teste para ver se a base de dados está a funcionar\r\nMais um teste para ver se a base de dados está a funcionar', 'asagasgag');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `cands_anno`
--
ALTER TABLE `cands_anno`
  ADD PRIMARY KEY (`discord`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
