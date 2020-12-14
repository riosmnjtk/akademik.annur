# MySQL-Front 5.1  (Build 4.13)

/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE */;
/*!40101 SET SQL_MODE='NO_ZERO_IN_DATE,NO_ZERO_DATE,NO_ENGINE_SUBSTITUTION' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES */;
/*!40103 SET SQL_NOTES='ON' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS */;
/*!40014 SET FOREIGN_KEY_CHECKS=0 */;


# Host: localhost    Database: admin_annur
# ------------------------------------------------------
# Server version 5.5.5-10.4.14-MariaDB

#
# Source for table admin
#

DROP TABLE IF EXISTS `admin`;
CREATE TABLE `admin` (
  `username` varchar(10) NOT NULL DEFAULT '',
  `password` varchar(255) DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

#
# Dumping data for table admin
#

LOCK TABLES `admin` WRITE;
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
INSERT INTO `admin` VALUES ('admin','123456780','Panjul');
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;
UNLOCK TABLES;

#
# Source for table guru
#

DROP TABLE IF EXISTS `guru`;
CREATE TABLE `guru` (
  `nip` char(10) NOT NULL DEFAULT '',
  `nm_guru` varchar(50) NOT NULL DEFAULT '',
  `jenkel_guru` enum('Pria','Wanita') NOT NULL DEFAULT 'Pria',
  `jenis_guru` enum('Guru Umum','Tahfiz','Tahsin') NOT NULL DEFAULT 'Guru Umum',
  PRIMARY KEY (`nip`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

#
# Dumping data for table guru
#

LOCK TABLES `guru` WRITE;
/*!40000 ALTER TABLE `guru` DISABLE KEYS */;
INSERT INTO `guru` VALUES ('1612500048','Pakkalll','Wanita','Tahfiz');
INSERT INTO `guru` VALUES ('1612500049','Pakkal','Pria','Guru Umum');
/*!40000 ALTER TABLE `guru` ENABLE KEYS */;
UNLOCK TABLES;

#
# Source for table kelas
#

DROP TABLE IF EXISTS `kelas`;
CREATE TABLE `kelas` (
  `id_kelas` varchar(5) NOT NULL DEFAULT '',
  `nama_kelas` varchar(100) NOT NULL DEFAULT '',
  PRIMARY KEY (`id_kelas`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

#
# Dumping data for table kelas
#

LOCK TABLES `kelas` WRITE;
/*!40000 ALTER TABLE `kelas` DISABLE KEYS */;
INSERT INTO `kelas` VALUES ('1','1AA');
/*!40000 ALTER TABLE `kelas` ENABLE KEYS */;
UNLOCK TABLES;

#
# Source for table ppdb
#

DROP TABLE IF EXISTS `ppdb`;
CREATE TABLE `ppdb` (
  `id_daftar` varchar(10) NOT NULL DEFAULT '',
  `nama` varchar(255) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `namafile` varchar(255) DEFAULT NULL,
  `kodepembayaran` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_daftar`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

#
# Dumping data for table ppdb
#

LOCK TABLES `ppdb` WRITE;
/*!40000 ALTER TABLE `ppdb` DISABLE KEYS */;
INSERT INTO `ppdb` VALUES ('PPDB000001','Gajah','gajah','logo.png','asdasd');
/*!40000 ALTER TABLE `ppdb` ENABLE KEYS */;
UNLOCK TABLES;

#
# Source for table wali_kelas
#

DROP TABLE IF EXISTS `wali_kelas`;
CREATE TABLE `wali_kelas` (
  `id_kelas` varchar(5) NOT NULL DEFAULT '',
  `nip` char(10) NOT NULL DEFAULT '',
  `tahun_ajaran` char(9) NOT NULL DEFAULT '',
  `jenis_guru` varchar(255) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

#
# Dumping data for table wali_kelas
#

LOCK TABLES `wali_kelas` WRITE;
/*!40000 ALTER TABLE `wali_kelas` DISABLE KEYS */;
/*!40000 ALTER TABLE `wali_kelas` ENABLE KEYS */;
UNLOCK TABLES;

/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
