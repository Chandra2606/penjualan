/*
SQLyog Community v13.1.6 (64 bit)
MySQL - 10.4.20-MariaDB : Database - db_penjualan_2010039
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`db_penjualan_2010039` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `db_penjualan_2010039`;

/*Table structure for table `admin` */

DROP TABLE IF EXISTS `admin`;

CREATE TABLE `admin` (
  `idadmin` char(10) NOT NULL,
  `namalengkap` varchar(30) DEFAULT NULL,
  `pass` varchar(50) DEFAULT NULL,
  `level` int(11) DEFAULT NULL,
  PRIMARY KEY (`idadmin`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `admin` */

insert  into `admin`(`idadmin`,`namalengkap`,`pass`,`level`) values 
('admin','Rafi Chandra','21232f297a57a5a743894a0e4a801fc3',1),
('admin2','AFRIZAL','827ccb0eea8a706c4c34a16891f84e7b',1);

/*Table structure for table `bantu` */

DROP TABLE IF EXISTS `bantu`;

CREATE TABLE `bantu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idbrg` char(10) DEFAULT NULL,
  `qty` int(11) DEFAULT NULL,
  `hargabrg` double DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4;

/*Data for the table `bantu` */

/*Table structure for table `barang` */

DROP TABLE IF EXISTS `barang`;

CREATE TABLE `barang` (
  `kdbarang` char(10) NOT NULL,
  `namabrg` varchar(30) DEFAULT NULL,
  `satuan` varchar(20) DEFAULT NULL,
  `harga` int(11) DEFAULT NULL,
  `stok` int(11) DEFAULT NULL,
  PRIMARY KEY (`kdbarang`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `barang` */

insert  into `barang`(`kdbarang`,`namabrg`,`satuan`,`harga`,`stok`) values 
('BRG0001','IPHONE XR','BOX',12000000,110),
('BRG0002','REDMI NOTE 9','BOX',2000000,101),
('BRG0003','ACER Aspire','BOX',7000000,110);

/*Table structure for table `barangkeluar` */

DROP TABLE IF EXISTS `barangkeluar`;

CREATE TABLE `barangkeluar` (
  `nofakkeluar` char(20) NOT NULL,
  `tglkeluar` date DEFAULT NULL,
  `keluarkdplg` char(10) DEFAULT NULL,
  PRIMARY KEY (`nofakkeluar`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `barangkeluar` */

insert  into `barangkeluar`(`nofakkeluar`,`tglkeluar`,`keluarkdplg`) values 
('202208070001','2022-08-08','P0001'),
('202208080001','2022-08-08','P0002'),
('202208080002','2022-08-08','P0001'),
('202208080003','2022-08-08','P0002'),
('202208080004','2022-08-08','P0002');

/*Table structure for table `barangmasuk` */

DROP TABLE IF EXISTS `barangmasuk`;

CREATE TABLE `barangmasuk` (
  `nofakmasuk` char(20) NOT NULL,
  `tglmasuk` date DEFAULT NULL,
  `masukkdpem` char(10) DEFAULT NULL,
  PRIMARY KEY (`nofakmasuk`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `barangmasuk` */

insert  into `barangmasuk`(`nofakmasuk`,`tglmasuk`,`masukkdpem`) values 
('202207280001','2022-07-28','SP0001'),
('202207280002','2022-07-28','SP0001'),
('202207280003','2022-07-28','SP0001'),
('202208010001','2022-08-01','SP0001'),
('202208010002','2022-08-05','SP0001'),
('202208010003','2022-08-01','SP0001'),
('202208010004','2022-08-01','SP0001'),
('202208010005','2022-08-01','SP0001');

/*Table structure for table `detailkeluar` */

DROP TABLE IF EXISTS `detailkeluar`;

CREATE TABLE `detailkeluar` (
  `detailidkeluar` bigint(20) NOT NULL AUTO_INCREMENT,
  `detailnofakkeluar` char(20) DEFAULT NULL,
  `detailkeluarkdbrg` char(10) DEFAULT NULL,
  `detailkeluarqty` int(11) DEFAULT NULL,
  `detailkeluarhrg` double DEFAULT NULL,
  PRIMARY KEY (`detailidkeluar`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

/*Data for the table `detailkeluar` */

insert  into `detailkeluar`(`detailidkeluar`,`detailnofakkeluar`,`detailkeluarkdbrg`,`detailkeluarqty`,`detailkeluarhrg`) values 
(1,'202208080003','BRG0002',1,2000000),
(2,'202208080004','BRG0002',1,2000000);

/*Table structure for table `detailmasuk` */

DROP TABLE IF EXISTS `detailmasuk`;

CREATE TABLE `detailmasuk` (
  `iddetail` bigint(20) NOT NULL AUTO_INCREMENT,
  `detailnofak` char(20) DEFAULT NULL,
  `detailkdbrg` char(10) DEFAULT NULL,
  `detailqty` int(11) DEFAULT NULL,
  `detailharga` double DEFAULT NULL,
  PRIMARY KEY (`iddetail`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4;

/*Data for the table `detailmasuk` */

insert  into `detailmasuk`(`iddetail`,`detailnofak`,`detailkdbrg`,`detailqty`,`detailharga`) values 
(5,'202207280001','BRG0002',6,2000000),
(6,'202207280002','BRG0002',1,2000000),
(7,'202207280003','BRG0003',2,7000000),
(8,'202207280003','BRG0001',1,12000000),
(9,'202208010001','BRG0002',1,2000000),
(10,'202208010002','BRG0002',1,2000000),
(11,'202208010003','BRG0002',1,2000000),
(12,'202208010004','BRG0001',10,12000000),
(13,'202208010005','BRG0002',1,2000000),
(14,'202208010005','BRG0003',10,7000000);

/*Table structure for table `pelanggan` */

DROP TABLE IF EXISTS `pelanggan`;

CREATE TABLE `pelanggan` (
  `idpelanggan` char(10) NOT NULL,
  `namapelanggan` varchar(50) DEFAULT NULL,
  `alamat` varchar(30) DEFAULT NULL,
  `nohp` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`idpelanggan`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `pelanggan` */

insert  into `pelanggan`(`idpelanggan`,`namapelanggan`,`alamat`,`nohp`) values 
('P0001','JOJO PUTRI','TARUSAN','8317667'),
('P0002','RAFI CHANDRA','PADANG','8317667');

/*Table structure for table `pemasok` */

DROP TABLE IF EXISTS `pemasok`;

CREATE TABLE `pemasok` (
  `idpemasok` char(10) NOT NULL,
  `namapemasok` varchar(30) DEFAULT NULL,
  `alamat` varchar(50) DEFAULT NULL,
  `nohp` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`idpemasok`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `pemasok` */

insert  into `pemasok`(`idpemasok`,`namapemasok`,`alamat`,`nohp`) values 
('SP0001','SARA','MEDAN','08565446');

/* Trigger structure for table `detailkeluar` */

DELIMITER $$

/*!50003 DROP TRIGGER*//*!50032 IF EXISTS */ /*!50003 `kurangstok` */$$

/*!50003 CREATE */ /*!50017 DEFINER = 'root'@'localhost' */ /*!50003 TRIGGER `kurangstok` AFTER INSERT ON `detailkeluar` FOR EACH ROW BEGIN
	UPDATE barang SET stok = stok - new.detailkeluarqty WHERE kdbarang=new.detailkeluarkdbrg;
    END */$$


DELIMITER ;

/* Trigger structure for table `detailmasuk` */

DELIMITER $$

/*!50003 DROP TRIGGER*//*!50032 IF EXISTS */ /*!50003 `tambahstok` */$$

/*!50003 CREATE */ /*!50017 DEFINER = 'root'@'localhost' */ /*!50003 TRIGGER `tambahstok` AFTER INSERT ON `detailmasuk` FOR EACH ROW BEGIN
	update barang set stok = stok + new.detailqty where kdbarang=new.detailkdbrg;
    END */$$


DELIMITER ;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
