-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           10.1.21-MariaDB - mariadb.org binary distribution
-- OS do Servidor:               Win32
-- HeidiSQL Versão:              9.4.0.5125
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Copiando estrutura do banco de dados para db_pdo
CREATE DATABASE IF NOT EXISTS `db_pdo` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `db_pdo`;

-- Copiando estrutura para tabela db_pdo.tb_dado
CREATE TABLE IF NOT EXISTS `tb_dado` (
  `cd_dado` int(11) NOT NULL AUTO_INCREMENT,
  `nm_dado` varchar(50) DEFAULT NULL,
  `cd_status` int(11) NOT NULL,
  PRIMARY KEY (`cd_dado`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- Exportação de dados foi desmarcado.
-- Copiando estrutura para tabela db_pdo.tb_usuario
CREATE TABLE IF NOT EXISTS `tb_usuario` (
  `cd_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `nm_usuario` varchar(50) DEFAULT NULL,
  `nm_email` varchar(50) DEFAULT NULL,
  `cd_cpf` varchar(50) DEFAULT NULL,
  `cd_rg` varchar(50) DEFAULT NULL,
  `dt_cadastro` date DEFAULT NULL,
  `nm_senha` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`cd_usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

-- Exportação de dados foi desmarcado.
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
