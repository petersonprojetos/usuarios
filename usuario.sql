-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 27-Set-2022 às 14:27
-- Versão do servidor: 10.4.24-MariaDB
-- versão do PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `cadastro`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `cd_usuario` int(11) NOT NULL,
  `ds_nome` varchar(50) NOT NULL,
  `ds_email` varchar(50) NOT NULL,
  `ds_login` varchar(50) NOT NULL,
  `ds_cpf` varchar(11) NOT NULL,
  `ds_senha` varchar(20) NOT NULL,
  `cd_usuario_criador` int(11) NOT NULL,
  `cd_usuario_alteracao` int(11) NOT NULL,
  `dt_criacao` datetime NOT NULL,
  `dt_alteracao` datetime NOT NULL,
  `fg_bloqueado` tinyint(4) NOT NULL,
  `fg_ativo` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`cd_usuario`),
  ADD KEY `fk_usuario_usuariocriador` (`cd_usuario_criador`),
  ADD KEY `fk_usuario_usuarioalteracao` (`cd_usuario_alteracao`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `cd_usuario` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `fk_usuario_usuarioalteracao` FOREIGN KEY (`cd_usuario_alteracao`) REFERENCES `usuario` (`cd_usuario`),
  ADD CONSTRAINT `fk_usuario_usuariocriador` FOREIGN KEY (`cd_usuario_criador`) REFERENCES `usuario` (`cd_usuario`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
