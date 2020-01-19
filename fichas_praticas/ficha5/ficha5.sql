-- --------------------------------------------------------
-- BEGIN - alínea 1, 2 e 3
-- --------------------------------------------------------
-- phpMyAdmin SQL Dump
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cinema`
--
CREATE DATABASE `cinema` COLLATE 'utf8mb4_general_ci';
USE `cinema`;

-- --------------------------------------------------------
--
-- Estrutura da tabela `exibicao`
--

DROP TABLE IF EXISTS `exibicao`;
CREATE TABLE IF NOT EXISTS `exibicao` (
  `id_filme` int(11) NOT NULL,
  `id_sala` int(11) NOT NULL,
  `data` date NOT NULL,
  PRIMARY KEY (`id_filme`,`id_sala`),
  KEY `fk_exibicao_sala_id_sala` (`id_sala`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `exibicao`
--

INSERT INTO `exibicao` (`id_filme`, `id_sala`, `data`) VALUES
(1, 2, '2019-12-02'),
(2, 3, '2019-12-03'),
(3, 1, '2019-12-01');

-- --------------------------------------------------------
--
-- Estrutura da tabela `filme`
--

DROP TABLE IF EXISTS `filme`;
CREATE TABLE IF NOT EXISTS `filme` (
  `id_filme` int(11) NOT NULL AUTO_INCREMENT,
  `nome_pt` varchar(200) NOT NULL,
  `nome_original` varchar(200) NOT NULL,
  `ano_lancamento` year(4) NOT NULL,
  `id_realizador` int(11) NOT NULL,
  PRIMARY KEY (`id_filme`),
  KEY `fk_filme_realizador_id_realizador` (`id_realizador`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `filme`
--

INSERT INTO `filme` (`id_filme`, `nome_pt`, `nome_original`, `ano_lancamento`, `id_realizador`) VALUES
(1, 'Bons Rapazes', 'Goodfellas', 1990, 1),
(2, 'Twin Peaks: Os Últimos Dias de Laura Palmer', 'Twin Peaks Fire Walk with Me', 1992, 2),
(3, 'E.T.: O Extraterrestre', 'E.T. the Extra-Terrestrial', 1982, 3);

-- --------------------------------------------------------
--
-- Estrutura da tabela `realizador`
--

DROP TABLE IF EXISTS `realizador`;
CREATE TABLE IF NOT EXISTS `realizador` (
  `id_realizador` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(80) NOT NULL,
  `data` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_realizador`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `realizador`
--

INSERT INTO `realizador` (`id_realizador`, `nome`, `data`) VALUES
(1, 'Martin Scorsese', '2019-12-02 15:01:39'),
(2, 'David Lynch', '2019-12-02 15:01:39'),
(3, 'Steven Spielberg', '2019-12-02 15:01:59');

-- --------------------------------------------------------
--
-- Estrutura da tabela `sala`
--

DROP TABLE IF EXISTS `sala`;
CREATE TABLE IF NOT EXISTS `sala` (
  `id_sala` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `capacidade` int(11) NOT NULL,
  `data` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_sala`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `sala`
--

INSERT INTO `sala` (`id_sala`, `nome`, `capacidade`, `data`) VALUES
(1, 'Sala 1', 50, '2019-12-02 14:59:55'),
(2, 'Sala 2', 100, '2019-12-02 14:59:55'),
(3, 'Sala 3', 75, '2019-12-02 15:00:18');

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `exibicao`
--
ALTER TABLE `exibicao`
  ADD CONSTRAINT `fk_exibicao_filme_id_filme` FOREIGN KEY (`id_filme`) REFERENCES `filme` (`id_filme`),
  ADD CONSTRAINT `fk_exibicao_sala_id_sala` FOREIGN KEY (`id_sala`) REFERENCES `sala` (`id_sala`);

--
-- Limitadores para a tabela `filme`
--
ALTER TABLE `filme`
  ADD CONSTRAINT `fk_filme_realizador_id_realizador` FOREIGN KEY (`id_realizador`) REFERENCES `realizador` (`id_realizador`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- --------------------------------------------------------
-- END - alínea 1, 2 e 3
-- --------------------------------------------------------


/* alínea 4 */
SELECT nome, capacidade FROM sala;

/* alínea 5 */
SELECT nome_pt AS "Nome em Português", nome_original AS "Nome Original"
FROM filme
WHERE id_realizador=2;

/* alínea 6 */
SELECT filme.nome_pt AS "Nome do Filme"
FROM filme
JOIN realizador ON filme.id_realizador=realizador.id_realizador
WHERE realizador.nome LIKE 'Manoel Oliveira';

/* alínea 7 */
SELECT exibicao.data, filme.nome_original
FROM exibicao
JOIN filme ON exibicao.id_filme = filme.id_filme
WHERE filme.nome_original LIKE 'O Gebo e a Sombra';

/* alínea 8 */
SELECT filme.nome_original, filme.nome_pt
FROM filme
JOIN exibicao ON filme.id_filme=exibicao.id_filme
JOIN sala ON exibicao.id_sala=sala.id_sala
WHERE sala.id_sala = 1
AND exibicao.data LIKE '2019%';

