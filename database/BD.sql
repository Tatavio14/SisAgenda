-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           5.7.33 - MySQL Community Server (GPL)
-- OS do Servidor:               Win64
-- HeidiSQL Versão:              11.2.0.6213
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Copiando estrutura do banco de dados para sisagenda
CREATE DATABASE IF NOT EXISTS `sisagenda` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `sisagenda`;

-- Copiando estrutura para tabela sisagenda.agenda
CREATE TABLE IF NOT EXISTS `agenda` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(50) DEFAULT NULL,
  `data_inicio` date DEFAULT NULL,
  `hora_inicio` time DEFAULT NULL,
  `data_fim` date DEFAULT NULL,
  `hora_fim` time DEFAULT NULL,
  `agenda_local` varchar(50) DEFAULT NULL,
  `descricao` varchar(250) DEFAULT NULL,
  `convidado_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `convidado_id` (`convidado_id`),
  CONSTRAINT `agenda_ibfk_1` FOREIGN KEY (`convidado_id`) REFERENCES `contato` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela sisagenda.agenda: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `agenda` DISABLE KEYS */;
INSERT INTO `agenda` (`id`, `titulo`, `data_inicio`, `hora_inicio`, `data_fim`, `hora_fim`, `agenda_local`, `descricao`, `convidado_id`) VALUES
	(2, 'adsd', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(3, '12312312', NULL, NULL, NULL, NULL, '111', '1', NULL),
	(4, '11', NULL, NULL, NULL, NULL, '111', '1', NULL);
/*!40000 ALTER TABLE `agenda` ENABLE KEYS */;

-- Copiando estrutura para tabela sisagenda.contato
CREATE TABLE IF NOT EXISTS `contato` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) DEFAULT NULL,
  `sobrenome` varchar(50) DEFAULT NULL,
  `telefone1` varchar(20) DEFAULT NULL,
  `tipo_telefone1` varchar(20) NOT NULL DEFAULT 'Principal',
  `telefone2` varchar(20) DEFAULT NULL,
  `tipo_telefone2` varchar(20) NOT NULL DEFAULT 'Principal',
  `email` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela sisagenda.contato: ~1 rows (aproximadamente)
/*!40000 ALTER TABLE `contato` DISABLE KEYS */;
/*!40000 ALTER TABLE `contato` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
