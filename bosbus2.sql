-- Adminer 4.2.5 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `m_menu`;
CREATE TABLE `m_menu` (
  `id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `parent_id` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `menu` varchar(200) NOT NULL DEFAULT '',
  `menu_order` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `icon` varchar(50) NOT NULL,
  `link` varchar(255) NOT NULL DEFAULT '',
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

INSERT INTO `m_menu` (`id`, `parent_id`, `menu`, `menu_order`, `icon`, `link`, `created`) VALUES
(1,	0,	'Home',	1,	'fa fa-home',	'dashboard',	'2018-07-27 20:04:35'),
(37,	0,	'Setting Menu',	8,	'fa fa-gear',	'menu',	'2018-07-30 14:28:23'),
(38,	0,	'Setting User',	9,	'fa fa-gear',	'user',	'2018-07-30 14:28:36'),
(39,	0,	'Input Bus',	2,	'fa fa-bus',	'booking',	'2019-10-27 13:06:17');

DROP TABLE IF EXISTS `m_menu_user`;
CREATE TABLE `m_menu_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_menu` varchar(50) NOT NULL,
  `id_user` varchar(50) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `m_menu_user` (`id`, `id_menu`, `id_user`, `created`) VALUES
(169,	'9',	'4',	'2018-08-26 06:08:27'),
(170,	'10',	'4',	'2018-08-26 06:08:27'),
(171,	'12',	'4',	'2018-08-26 06:08:27'),
(172,	'13',	'4',	'2018-08-26 06:08:27'),
(173,	'14',	'4',	'2018-08-26 06:08:27'),
(174,	'16',	'4',	'2018-08-26 06:08:27'),
(175,	'17',	'4',	'2018-08-26 06:08:27'),
(176,	'18',	'4',	'2018-08-26 06:08:27'),
(177,	'20',	'4',	'2018-08-26 06:08:27'),
(178,	'22',	'4',	'2018-08-26 06:08:27'),
(179,	'23',	'4',	'2018-08-26 06:08:27'),
(180,	'24',	'4',	'2018-08-26 06:08:28'),
(181,	'25',	'4',	'2018-08-26 06:08:28'),
(182,	'26',	'4',	'2018-08-26 06:08:28'),
(183,	'27',	'4',	'2018-08-26 06:08:28'),
(184,	'29',	'4',	'2018-08-26 06:08:28'),
(185,	'31',	'4',	'2018-08-26 06:08:28'),
(186,	'34',	'4',	'2018-08-26 06:08:28'),
(187,	'51',	'4',	'2018-08-26 06:08:28'),
(237,	'9',	'5',	'2018-09-11 14:26:47'),
(238,	'10',	'5',	'2018-09-11 14:26:47'),
(239,	'11',	'5',	'2018-09-11 14:26:47'),
(240,	'12',	'5',	'2018-09-11 14:26:48'),
(241,	'13',	'5',	'2018-09-11 14:26:48'),
(242,	'14',	'5',	'2018-09-11 14:26:48'),
(243,	'16',	'5',	'2018-09-11 14:26:48'),
(244,	'17',	'5',	'2018-09-11 14:26:48'),
(245,	'18',	'5',	'2018-09-11 14:26:48'),
(246,	'19',	'5',	'2018-09-11 14:26:48'),
(247,	'20',	'5',	'2018-09-11 14:26:48'),
(248,	'22',	'5',	'2018-09-11 14:26:48'),
(249,	'23',	'5',	'2018-09-11 14:26:48'),
(250,	'24',	'5',	'2018-09-11 14:26:48'),
(251,	'25',	'5',	'2018-09-11 14:26:48'),
(252,	'26',	'5',	'2018-09-11 14:26:48'),
(253,	'27',	'5',	'2018-09-11 14:26:48'),
(254,	'28',	'5',	'2018-09-11 14:26:48'),
(255,	'29',	'5',	'2018-09-11 14:26:48'),
(256,	'31',	'5',	'2018-09-11 14:26:48'),
(257,	'34',	'5',	'2018-09-11 14:26:48'),
(258,	'35',	'5',	'2018-09-11 14:26:49'),
(259,	'51',	'5',	'2018-09-11 14:26:49'),
(260,	'9',	'6',	'2018-09-11 14:27:21'),
(261,	'10',	'6',	'2018-09-11 14:27:22'),
(262,	'11',	'6',	'2018-09-11 14:27:22'),
(263,	'12',	'6',	'2018-09-11 14:27:22'),
(264,	'13',	'6',	'2018-09-11 14:27:22'),
(265,	'14',	'6',	'2018-09-11 14:27:22'),
(266,	'16',	'6',	'2018-09-11 14:27:22'),
(267,	'17',	'6',	'2018-09-11 14:27:22'),
(268,	'18',	'6',	'2018-09-11 14:27:22'),
(269,	'19',	'6',	'2018-09-11 14:27:22'),
(270,	'20',	'6',	'2018-09-11 14:27:22'),
(271,	'22',	'6',	'2018-09-11 14:27:22'),
(272,	'23',	'6',	'2018-09-11 14:27:22'),
(273,	'24',	'6',	'2018-09-11 14:27:22'),
(274,	'25',	'6',	'2018-09-11 14:27:22'),
(275,	'26',	'6',	'2018-09-11 14:27:22'),
(276,	'27',	'6',	'2018-09-11 14:27:22'),
(277,	'28',	'6',	'2018-09-11 14:27:23'),
(278,	'29',	'6',	'2018-09-11 14:27:23'),
(279,	'31',	'6',	'2018-09-11 14:27:23'),
(280,	'34',	'6',	'2018-09-11 14:27:23'),
(281,	'35',	'6',	'2018-09-11 14:27:23'),
(282,	'51',	'6',	'2018-09-11 14:27:23'),
(283,	'1',	'1',	'2019-10-27 09:24:45'),
(284,	'2',	'1',	'2019-10-27 09:24:45'),
(285,	'3',	'1',	'2019-10-27 09:24:45'),
(286,	'4',	'1',	'2019-10-27 09:24:45'),
(287,	'5',	'1',	'2019-10-27 09:24:45'),
(288,	'6',	'1',	'2019-10-27 09:24:45'),
(289,	'7',	'1',	'2019-10-27 09:24:45'),
(290,	'8',	'1',	'2019-10-27 09:24:45'),
(291,	'9',	'1',	'2019-10-27 09:24:45'),
(292,	'10',	'1',	'2019-10-27 09:24:45'),
(293,	'11',	'1',	'2019-10-27 09:24:45'),
(294,	'12',	'1',	'2019-10-27 09:24:45'),
(295,	'13',	'1',	'2019-10-27 09:24:45'),
(296,	'14',	'1',	'2019-10-27 09:24:45'),
(297,	'15',	'1',	'2019-10-27 09:24:46'),
(298,	'16',	'1',	'2019-10-27 09:24:46'),
(299,	'17',	'1',	'2019-10-27 09:24:46'),
(300,	'18',	'1',	'2019-10-27 09:24:46'),
(301,	'19',	'1',	'2019-10-27 09:24:46'),
(302,	'20',	'1',	'2019-10-27 09:24:46'),
(303,	'21',	'1',	'2019-10-27 09:24:46'),
(304,	'22',	'1',	'2019-10-27 09:24:46'),
(305,	'23',	'1',	'2019-10-27 09:24:46'),
(306,	'24',	'1',	'2019-10-27 09:24:46'),
(307,	'25',	'1',	'2019-10-27 09:24:46'),
(308,	'26',	'1',	'2019-10-27 09:24:46'),
(309,	'27',	'1',	'2019-10-27 09:24:46'),
(310,	'28',	'1',	'2019-10-27 09:24:46'),
(311,	'29',	'1',	'2019-10-27 09:24:46'),
(312,	'30',	'1',	'2019-10-27 09:24:46'),
(313,	'31',	'1',	'2019-10-27 09:24:46'),
(314,	'32',	'1',	'2019-10-27 09:24:46'),
(315,	'33',	'1',	'2019-10-27 09:24:46'),
(316,	'34',	'1',	'2019-10-27 09:24:46'),
(317,	'35',	'1',	'2019-10-27 09:24:46'),
(318,	'36',	'1',	'2019-10-27 09:24:46'),
(319,	'51',	'1',	'2019-10-27 09:24:46'),
(320,	'37',	'1',	'2019-10-27 09:24:46'),
(321,	'38',	'1',	'2019-10-27 09:24:46'),
(322,	'39',	'1',	'2019-10-27 09:24:47'),
(323,	'40',	'1',	'2019-10-27 09:24:47'),
(324,	'41',	'1',	'2019-10-27 09:24:47'),
(325,	'42',	'1',	'2019-10-27 09:24:47'),
(326,	'43',	'1',	'2019-10-27 09:24:47'),
(327,	'45',	'1',	'2019-10-27 09:24:47'),
(328,	'46',	'1',	'2019-10-27 09:24:47'),
(329,	'44',	'1',	'2019-10-27 09:24:47'),
(330,	'49',	'1',	'2019-10-27 09:24:47'),
(331,	'50',	'1',	'2019-10-27 09:24:47');

DROP TABLE IF EXISTS `m_user`;
CREATE TABLE `m_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) NOT NULL,
  `nik` varchar(50) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `m_user` (`id`, `nama`, `nik`, `username`, `password`, `created`) VALUES
(1,	'Super Admin',	'',	'admin',	'240be518fabd2724ddb6f04eeb1da5967448d7e831c08c8fa822809f74c720a9',	'2018-04-28 15:01:18'),
(2,	'Finance',	'',	'finance',	'240be518fabd2724ddb6f04eeb1da5967448d7e831c08c8fa822809f74c720a9',	'2018-08-22 04:33:56'),
(3,	'Delivery',	'',	'delivery',	'240be518fabd2724ddb6f04eeb1da5967448d7e831c08c8fa822809f74c720a9',	'2018-07-18 13:12:40'),
(4,	'Sales',	'17080001',	'sales_credit',	'240be518fabd2724ddb6f04eeb1da5967448d7e831c08c8fa822809f74c720a9',	'2018-09-11 14:22:37'),
(5,	'Sales',	'17080002',	'sales_cash',	'240be518fabd2724ddb6f04eeb1da5967448d7e831c08c8fa822809f74c720a9',	'2018-09-11 14:22:37'),
(6,	'Sales',	'17080003',	'sales_project',	'240be518fabd2724ddb6f04eeb1da5967448d7e831c08c8fa822809f74c720a9',	'2018-09-11 14:23:09');

DROP TABLE IF EXISTS `m_user_level`;
CREATE TABLE `m_user_level` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


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


-- 2019-10-27 13:11:27