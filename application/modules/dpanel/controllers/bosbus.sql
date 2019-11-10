-- Adminer 4.2.5 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

CREATE DATABASE `db_bosbus` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `db_bosbus`;

DROP TABLE IF EXISTS `tbl_booking`;
CREATE TABLE `tbl_booking` (
  `v_id` int(5) NOT NULL,
  `v_id_kendaraan` int(5) NOT NULL,
  `v_id_pengguna` int(5) NOT NULL,
  `d_book_start` date NOT NULL,
  `d_book_end` date NOT NULL,
  `c_adress_book` text NOT NULL,
  `d_date` date NOT NULL,
  `d_created_date` date NOT NULL,
  `c_created_by` int(5) NOT NULL,
  `c_updated_by` int(5) NOT NULL,
  `d_updated_date` date NOT NULL,
  `c_deleted` tinyint(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `tbl_kendaraan`;
CREATE TABLE `tbl_kendaraan` (
  `v_id` int(5) NOT NULL AUTO_INCREMENT,
  `v_id_penyedia` int(5) NOT NULL,
  `c_nama` varchar(50) NOT NULL,
  `c_tipe` varchar(15) NOT NULL,
  `c_keterangan` text NOT NULL,
  `c_created_by` int(5) NOT NULL,
  `d_created_date` datetime NOT NULL,
  `c_updated_by` int(5) NOT NULL,
  `d_updated_date` datetime NOT NULL,
  `c_deleted` tinyint(1) NOT NULL,
  PRIMARY KEY (`v_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `tbl_pengguna`;
CREATE TABLE `tbl_pengguna` (
  `v_id` int(5) NOT NULL,
  `c_nama` varchar(50) NOT NULL,
  `c_hp` varchar(15) NOT NULL,
  `c_pass` varchar(50) NOT NULL,
  `c_created_by` int(5) NOT NULL,
  `d_created_date` datetime NOT NULL,
  `c_updated_by` int(5) NOT NULL,
  `d_updated_date` datetime NOT NULL,
  `c_deleted` tinyint(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `tbl_penyedia`;
CREATE TABLE `tbl_penyedia` (
  `v_id` int(5) NOT NULL AUTO_INCREMENT,
  `c_nama` varchar(50) NOT NULL,
  `c_hp` varchar(15) NOT NULL,
  `c_pass` varchar(50) NOT NULL,
  `c_alamat` text NOT NULL,
  `d_created_date` datetime NOT NULL,
  `c_created_by` int(5) NOT NULL,
  `d_updated_date` datetime NOT NULL,
  `c_updated_by` int(5) NOT NULL,
  `c_deleted` tinyint(1) NOT NULL,
  PRIMARY KEY (`v_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;


-- 2019-10-27 12:20:48