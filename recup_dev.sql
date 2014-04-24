-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Machine: 127.0.0.1
-- Genereertijd: 12 apr 2014 om 12:49
-- Serverversie: 5.6.14
-- PHP-versie: 5.5.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Databank: `recup_dev`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `code_car_brand`
--

CREATE TABLE IF NOT EXISTS `code_car_brand` (
  `C_I_IDF_TECH` bigint(19) NOT NULL,
  `T_I_DESCR_NDLS` varchar(64) COLLATE utf8_bin DEFAULT NULL,
  `T_I_DESCR_FRANS` varchar(64) COLLATE utf8_bin DEFAULT NULL,
  `T_I_DESCR_DUITS` varchar(64) COLLATE utf8_bin DEFAULT NULL,
  `D_I_BEGIN` date DEFAULT NULL,
  `D_I_END` date DEFAULT NULL,
  `S_I_CREATE_TECH` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `S_I_MOD_TECH` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`C_I_IDF_TECH`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Gegevens worden uitgevoerd voor tabel `code_car_brand`
--

INSERT INTO `code_car_brand` (`C_I_IDF_TECH`, `T_I_DESCR_NDLS`, `T_I_DESCR_FRANS`, `T_I_DESCR_DUITS`, `D_I_BEGIN`, `D_I_END`, `S_I_CREATE_TECH`, `S_I_MOD_TECH`) VALUES
(1, 'Audi', 'Audi', 'Audi', NULL, NULL, '2014-04-04 15:24:14', NULL),
(2, 'BMW', 'BMW', 'BMW', NULL, NULL, '2014-04-04 15:29:56', NULL);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `code_car_buildmonth`
--

CREATE TABLE IF NOT EXISTS `code_car_buildmonth` (
  `C_I_IDF_TECH` bigint(19) NOT NULL,
  `T_I_DESCR_NDLS` varchar(64) COLLATE utf8_bin DEFAULT NULL,
  `T_I_DESCR_FRANS` varchar(64) COLLATE utf8_bin DEFAULT NULL,
  `T_I_DESCR_DUITS` varchar(64) COLLATE utf8_bin DEFAULT NULL,
  `D_I_BEGIN` date DEFAULT NULL,
  `D_I_END` date DEFAULT NULL,
  `S_I_CREATE_TECH` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `S_I_MOD_TECH` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`C_I_IDF_TECH`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Gegevens worden uitgevoerd voor tabel `code_car_buildmonth`
--

INSERT INTO `code_car_buildmonth` (`C_I_IDF_TECH`, `T_I_DESCR_NDLS`, `T_I_DESCR_FRANS`, `T_I_DESCR_DUITS`, `D_I_BEGIN`, `D_I_END`, `S_I_CREATE_TECH`, `S_I_MOD_TECH`) VALUES
(1, 'Januari', 'Janvier', 'Januari', NULL, NULL, '2014-04-08 05:47:04', NULL),
(2, 'Februari', 'Février', 'Februari', NULL, NULL, '2014-04-08 05:47:04', NULL);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `code_car_buildyear`
--

CREATE TABLE IF NOT EXISTS `code_car_buildyear` (
  `C_I_IDF_TECH` bigint(19) NOT NULL,
  `T_I_DESCR_NDLS` varchar(64) COLLATE utf8_bin DEFAULT NULL,
  `T_I_DESCR_FRANS` varchar(64) COLLATE utf8_bin DEFAULT NULL,
  `T_I_DESCR_DUITS` varchar(64) COLLATE utf8_bin DEFAULT NULL,
  `D_I_BEGIN` date DEFAULT NULL,
  `D_I_END` date DEFAULT NULL,
  `S_I_CREATE_TECH` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `S_I_MOD_TECH` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`C_I_IDF_TECH`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Gegevens worden uitgevoerd voor tabel `code_car_buildyear`
--

INSERT INTO `code_car_buildyear` (`C_I_IDF_TECH`, `T_I_DESCR_NDLS`, `T_I_DESCR_FRANS`, `T_I_DESCR_DUITS`, `D_I_BEGIN`, `D_I_END`, `S_I_CREATE_TECH`, `S_I_MOD_TECH`) VALUES
(1, '2014', '2014', '2014', NULL, NULL, '2014-04-08 05:42:04', NULL),
(2, '2013', '2013', '2013', NULL, NULL, '2014-04-08 05:42:04', NULL);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `code_car_category`
--

CREATE TABLE IF NOT EXISTS `code_car_category` (
  `C_I_IDF_TECH` bigint(19) NOT NULL,
  `T_I_DESCR_NDLS` varchar(64) COLLATE utf8_bin DEFAULT NULL,
  `T_I_DESCR_FRANS` varchar(64) COLLATE utf8_bin DEFAULT NULL,
  `T_I_DESCR_DUITS` varchar(64) COLLATE utf8_bin DEFAULT NULL,
  `D_I_BEGIN` date DEFAULT NULL,
  `D_I_END` date DEFAULT NULL,
  `S_I_CREATE_TECH` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `S_I_MOD_TECH` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`C_I_IDF_TECH`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `code_car_doors`
--

CREATE TABLE IF NOT EXISTS `code_car_doors` (
  `C_I_IDF_TECH` bigint(19) NOT NULL,
  `T_I_DESCR_NDLS` varchar(64) COLLATE utf8_bin DEFAULT NULL,
  `T_I_DESCR_FRANS` varchar(64) COLLATE utf8_bin DEFAULT NULL,
  `T_I_DESCR_DUITS` varchar(64) COLLATE utf8_bin DEFAULT NULL,
  `D_I_BEGIN` date DEFAULT NULL,
  `D_I_END` date DEFAULT NULL,
  `S_I_CREATE_TECH` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `S_I_MOD_TECH` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`C_I_IDF_TECH`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Gegevens worden uitgevoerd voor tabel `code_car_doors`
--

INSERT INTO `code_car_doors` (`C_I_IDF_TECH`, `T_I_DESCR_NDLS`, `T_I_DESCR_FRANS`, `T_I_DESCR_DUITS`, `D_I_BEGIN`, `D_I_END`, `S_I_CREATE_TECH`, `S_I_MOD_TECH`) VALUES
(1, 'Twee deuren', 'Deux portes', 'Twee deuren', NULL, NULL, '2014-04-08 05:53:16', NULL),
(2, 'Vier deuren', 'Quatres portes', 'Vier deuren', NULL, NULL, '2014-04-08 05:53:16', NULL);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `code_car_drivetype`
--

CREATE TABLE IF NOT EXISTS `code_car_drivetype` (
  `C_I_IDF_TECH` bigint(19) NOT NULL,
  `T_I_DESCR_NDLS` varchar(64) COLLATE utf8_bin DEFAULT NULL,
  `T_I_DESCR_FRANS` varchar(64) COLLATE utf8_bin DEFAULT NULL,
  `T_I_DESCR_DUITS` varchar(64) COLLATE utf8_bin DEFAULT NULL,
  `D_I_BEGIN` date DEFAULT NULL,
  `D_I_END` date DEFAULT NULL,
  `S_I_CREATE_TECH` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `S_I_MOD_TECH` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`C_I_IDF_TECH`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Gegevens worden uitgevoerd voor tabel `code_car_drivetype`
--

INSERT INTO `code_car_drivetype` (`C_I_IDF_TECH`, `T_I_DESCR_NDLS`, `T_I_DESCR_FRANS`, `T_I_DESCR_DUITS`, `D_I_BEGIN`, `D_I_END`, `S_I_CREATE_TECH`, `S_I_MOD_TECH`) VALUES
(1, 'Achterwiel', 'Achterwiel', 'Achterwiel', NULL, NULL, '2014-04-08 05:54:08', NULL),
(2, 'Voorwiel', 'Voorwiel', 'Voorwiel', NULL, NULL, '2014-04-08 05:54:08', NULL),
(3, '4 X 4', '4 X 4', '4 X 4', NULL, NULL, '2014-04-08 08:10:15', NULL);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `code_car_enginetype`
--

CREATE TABLE IF NOT EXISTS `code_car_enginetype` (
  `C_I_IDF_TECH` bigint(19) NOT NULL,
  `T_I_DESCR_NDLS` varchar(64) COLLATE utf8_bin DEFAULT NULL,
  `T_I_DESCR_FRANS` varchar(64) COLLATE utf8_bin DEFAULT NULL,
  `T_I_DESCR_DUITS` varchar(64) COLLATE utf8_bin DEFAULT NULL,
  `D_I_BEGIN` date DEFAULT NULL,
  `D_I_END` date DEFAULT NULL,
  `S_I_CREATE_TECH` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `S_I_MOD_TECH` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`C_I_IDF_TECH`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Gegevens worden uitgevoerd voor tabel `code_car_enginetype`
--

INSERT INTO `code_car_enginetype` (`C_I_IDF_TECH`, `T_I_DESCR_NDLS`, `T_I_DESCR_FRANS`, `T_I_DESCR_DUITS`, `D_I_BEGIN`, `D_I_END`, `S_I_CREATE_TECH`, `S_I_MOD_TECH`) VALUES
(1, 'Benzine', 'Benzine', 'Benzine', NULL, NULL, '2014-04-08 05:52:13', NULL),
(2, 'Diesel', 'Diesel', 'Diesel', NULL, NULL, '2014-04-08 05:52:13', NULL);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `code_car_execution`
--

CREATE TABLE IF NOT EXISTS `code_car_execution` (
  `C_I_IDF_TECH` bigint(19) NOT NULL,
  `T_I_DESCR_NDLS` varchar(64) COLLATE utf8_bin DEFAULT NULL,
  `T_I_DESCR_FRANS` varchar(64) COLLATE utf8_bin DEFAULT NULL,
  `T_I_DESCR_DUITS` varchar(64) COLLATE utf8_bin DEFAULT NULL,
  `D_I_BEGIN` date DEFAULT NULL,
  `D_I_END` date DEFAULT NULL,
  `S_I_CREATE_TECH` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `S_I_MOD_TECH` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`C_I_IDF_TECH`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Gegevens worden uitgevoerd voor tabel `code_car_execution`
--

INSERT INTO `code_car_execution` (`C_I_IDF_TECH`, `T_I_DESCR_NDLS`, `T_I_DESCR_FRANS`, `T_I_DESCR_DUITS`, `D_I_BEGIN`, `D_I_END`, `S_I_CREATE_TECH`, `S_I_MOD_TECH`) VALUES
(1, 'Bestel', 'Bestel', 'Bestel', NULL, NULL, '2014-04-08 05:51:22', NULL),
(2, 'Bus', 'Bus', 'Bus', NULL, NULL, '2014-04-08 05:51:22', NULL);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `code_car_gearbox`
--

CREATE TABLE IF NOT EXISTS `code_car_gearbox` (
  `C_I_IDF_TECH` bigint(19) NOT NULL,
  `T_I_DESCR_NDLS` varchar(64) COLLATE utf8_bin DEFAULT NULL,
  `T_I_DESCR_FRANS` varchar(64) COLLATE utf8_bin DEFAULT NULL,
  `T_I_DESCR_DUITS` varchar(64) COLLATE utf8_bin DEFAULT NULL,
  `D_I_BEGIN` date DEFAULT NULL,
  `D_I_END` date DEFAULT NULL,
  `S_I_CREATE_TECH` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `S_I_MOD_TECH` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`C_I_IDF_TECH`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Gegevens worden uitgevoerd voor tabel `code_car_gearbox`
--

INSERT INTO `code_car_gearbox` (`C_I_IDF_TECH`, `T_I_DESCR_NDLS`, `T_I_DESCR_FRANS`, `T_I_DESCR_DUITS`, `D_I_BEGIN`, `D_I_END`, `S_I_CREATE_TECH`, `S_I_MOD_TECH`) VALUES
(1, 'Vier versnellingen', 'Vier versnellingen', 'Vier versnellingen', NULL, NULL, '2014-04-08 05:56:15', NULL),
(2, 'Vijf versnellingen', 'Vijf versnellingen', 'Vijf versnellingen', NULL, NULL, '2014-04-08 05:56:15', NULL),
(3, 'Zes versnellingen', 'Zes versnellingen', 'Zes versnellingen', NULL, NULL, '2014-04-08 05:56:44', NULL),
(4, 'Zeven versnellingen', 'Zeven versnellingen', 'Zeven versnellingen', NULL, NULL, '2014-04-08 05:56:44', NULL),
(5, 'Automaat', 'Automaat', 'Automaat', NULL, NULL, '2014-04-08 05:56:58', NULL);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `code_car_model`
--

CREATE TABLE IF NOT EXISTS `code_car_model` (
  `C_I_IDF_TECH` bigint(19) NOT NULL,
  `T_I_DESCR_NDLS` varchar(64) COLLATE utf8_bin DEFAULT NULL,
  `T_I_DESCR_FRANS` varchar(64) COLLATE utf8_bin DEFAULT NULL,
  `T_I_DESCR_DUITS` varchar(64) COLLATE utf8_bin DEFAULT NULL,
  `C_CARBRAND_IDF_TECH` bigint(19) NOT NULL,
  `D_I_BEGIN` date DEFAULT NULL,
  `D_I_END` date DEFAULT NULL,
  `S_I_CREATE_TECH` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `S_I_MOD_TECH` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`C_I_IDF_TECH`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Gegevens worden uitgevoerd voor tabel `code_car_model`
--

INSERT INTO `code_car_model` (`C_I_IDF_TECH`, `T_I_DESCR_NDLS`, `T_I_DESCR_FRANS`, `T_I_DESCR_DUITS`, `C_CARBRAND_IDF_TECH`, `D_I_BEGIN`, `D_I_END`, `S_I_CREATE_TECH`, `S_I_MOD_TECH`) VALUES
(1, 'A1', 'A1', 'A1', 1, NULL, NULL, '2014-04-04 15:28:05', NULL),
(2, 'A2', 'A2', 'A2', 1, NULL, NULL, '2014-04-04 15:28:05', NULL),
(3, 'A3', 'A3', 'A3', 1, NULL, NULL, '2014-04-04 15:28:39', NULL),
(4, 'A4', 'A4', 'A4', 1, NULL, NULL, '2014-04-04 15:28:39', NULL),
(5, '318', '318', '318', 2, NULL, NULL, '2014-04-04 15:31:05', NULL),
(6, '320', '320', '320', 2, NULL, NULL, '2014-04-04 15:31:05', NULL),
(7, '518', '518', '518', 2, NULL, NULL, '2014-04-04 15:31:35', NULL),
(8, '520', '520', '520', 2, NULL, NULL, '2014-04-04 15:31:35', NULL);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `code_car_subcategory`
--

CREATE TABLE IF NOT EXISTS `code_car_subcategory` (
  `C_I_IDF_TECH` bigint(19) NOT NULL,
  `T_I_DESCR_NDLS` varchar(64) COLLATE utf8_bin DEFAULT NULL,
  `T_I_DESCR_FRANS` varchar(64) COLLATE utf8_bin DEFAULT NULL,
  `T_I_DESCR_DUITS` varchar(64) COLLATE utf8_bin DEFAULT NULL,
  `C_CARCATEGORY_IDF_TECH` bigint(19) NOT NULL,
  `D_I_BEGIN` date DEFAULT NULL,
  `D_I_END` date DEFAULT NULL,
  `S_I_CREATE_TECH` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `S_I_MOD_TECH` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`C_I_IDF_TECH`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `code_country`
--

CREATE TABLE IF NOT EXISTS `code_country` (
  `C_I_IDF_TECH` bigint(19) NOT NULL,
  `T_I_DESCR_NDLS` varchar(64) COLLATE utf8_bin DEFAULT NULL,
  `T_I_DESCR_FRANS` varchar(64) COLLATE utf8_bin DEFAULT NULL,
  `T_I_DESCR_DUITS` varchar(64) COLLATE utf8_bin DEFAULT NULL,
  `D_I_BEGIN` date DEFAULT NULL,
  `D_I_END` date DEFAULT NULL,
  `S_I_CREATE_TECH` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `S_I_MOD_TECH` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`C_I_IDF_TECH`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Gegevens worden uitgevoerd voor tabel `code_country`
--

INSERT INTO `code_country` (`C_I_IDF_TECH`, `T_I_DESCR_NDLS`, `T_I_DESCR_FRANS`, `T_I_DESCR_DUITS`, `D_I_BEGIN`, `D_I_END`, `S_I_CREATE_TECH`, `S_I_MOD_TECH`) VALUES
(1, 'België', 'Belgique', 'België', NULL, NULL, '2014-04-09 05:58:55', NULL);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `code_language`
--

CREATE TABLE IF NOT EXISTS `code_language` (
  `C_I_IDF_TECH` bigint(19) NOT NULL,
  `T_I_DESCR_NDLS` varchar(64) COLLATE utf8_bin DEFAULT NULL,
  `T_I_DESCR_FRANS` varchar(64) COLLATE utf8_bin DEFAULT NULL,
  `T_I_DESCR_DUITS` varchar(64) COLLATE utf8_bin DEFAULT NULL,
  `D_I_BEGIN` date DEFAULT NULL,
  `D_I_END` date DEFAULT NULL,
  `S_I_CREATE_TECH` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `S_I_MOD_TECH` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`C_I_IDF_TECH`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `code_postalcode`
--

CREATE TABLE IF NOT EXISTS `code_postalcode` (
  `C_I_IDF_TECH` bigint(19) NOT NULL,
  `T_I_DESCR_NDLS` varchar(64) COLLATE utf8_bin DEFAULT NULL,
  `T_I_DESCR_FRANS` varchar(64) COLLATE utf8_bin DEFAULT NULL,
  `T_I_DESCR_DUITS` varchar(64) COLLATE utf8_bin DEFAULT NULL,
  `D_I_BEGIN` date DEFAULT NULL,
  `D_I_END` date DEFAULT NULL,
  `S_I_CREATE_TECH` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `S_I_MOD_TECH` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`C_I_IDF_TECH`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Gegevens worden uitgevoerd voor tabel `code_postalcode`
--

INSERT INTO `code_postalcode` (`C_I_IDF_TECH`, `T_I_DESCR_NDLS`, `T_I_DESCR_FRANS`, `T_I_DESCR_DUITS`, `D_I_BEGIN`, `D_I_END`, `S_I_CREATE_TECH`, `S_I_MOD_TECH`) VALUES
(3540, 'Herk-de-Stad', 'Herk-de-Stad', 'Herk-de-Stad', NULL, NULL, '2014-04-09 06:00:21', NULL);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `search_article`
--

CREATE TABLE IF NOT EXISTS `search_article` (
  `O_I_IDF_TECH` bigint(19) NOT NULL,
  `O_SEARCHREQUEST_IDF_TECH` bigint(19) NOT NULL,
  `O_CARCATEGORY_IDF_TECH` bigint(19) NOT NULL,
  `O_CARSUBCATEGORY_IDF_TECH` bigint(19) NOT NULL,
  `T_I_DESCRIPTION` varchar(256) COLLATE utf8_bin NOT NULL,
  `T_I_IMAGE` varchar(128) COLLATE utf8_bin NOT NULL,
  `T_I_ARTICLENUMBER` varchar(128) COLLATE utf8_bin NOT NULL,
  `S_I_CREATE_TECH` timestamp NULL DEFAULT NULL,
  `S_I_MOD_TECH` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `search_request`
--

CREATE TABLE IF NOT EXISTS `search_request` (
  `O_I_IDF_TECH` bigint(19) NOT NULL,
  `O_USERCONTACT_IDF_TECH` bigint(19) NOT NULL,
  `O_USERREPLY_IDF_TECH` bigint(19) NOT NULL,
  `T_I_CHASSIS` varchar(128) COLLATE utf8_bin NOT NULL,
  `T_I_KILOWATT` varchar(128) COLLATE utf8_bin NOT NULL,
  `L_I_ACTIVE` tinyint(1) NOT NULL,
  `S_I_CREATE_TECH` timestamp NULL DEFAULT NULL,
  `S_I_MOD_TECH` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `search_request_details`
--

CREATE TABLE IF NOT EXISTS `search_request_details` (
  `O_I_IDF_TECH` bigint(19) NOT NULL AUTO_INCREMENT,
  `O_SEARCHREQUEST_IDF_TECH` bigint(19) NOT NULL,
  `C_CARBRAND_IDF_TECH` bigint(19) NOT NULL,
  `C_CARMODEL_IDF_TECH` bigint(19) NOT NULL,
  `C_BUILDYEAR_IDF_TECH` bigint(19) NOT NULL,
  `C_BUILDMONTH_IDF_TECH` bigint(19) NOT NULL,
  `C_EXECUTION_IDF_TECH` bigint(19) NOT NULL,
  `C_DOORS_IDF_TECH` bigint(19) NOT NULL,
  `C_ENGINETYPE_IDF_TECH` bigint(19) NOT NULL,
  `C_DRIVETYPE_IDF_TECH` bigint(19) NOT NULL,
  `C_GEARBOX_IDF_TECH` bigint(19) NOT NULL,
  `T_I_DETAILS` varchar(512) COLLATE utf8_bin DEFAULT NULL,
  `S_I_CREATE_TECH` timestamp NULL DEFAULT NULL,
  `S_I_MOD_TECH` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`O_I_IDF_TECH`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=23 ;

--
-- Gegevens worden uitgevoerd voor tabel `search_request_details`
--

INSERT INTO `search_request_details` (`O_I_IDF_TECH`, `O_SEARCHREQUEST_IDF_TECH`, `C_CARBRAND_IDF_TECH`, `C_CARMODEL_IDF_TECH`, `C_BUILDYEAR_IDF_TECH`, `C_BUILDMONTH_IDF_TECH`, `C_EXECUTION_IDF_TECH`, `C_DOORS_IDF_TECH`, `C_ENGINETYPE_IDF_TECH`, `C_DRIVETYPE_IDF_TECH`, `C_GEARBOX_IDF_TECH`, `T_I_DETAILS`, `S_I_CREATE_TECH`, `S_I_MOD_TECH`) VALUES
(1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'updated detailske', '0000-00-00 00:00:00', '2014-04-10 07:37:44'),
(2, 0, 2, 5, 2, 1, 2, 2, 2, 2, 0, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 0, 2, 5, 2, 1, 2, 2, 2, 2, 0, '', '2014-04-09 16:33:48', NULL),
(4, 0, 2, 5, 1, 1, 2, 2, 2, 2, 0, 'detailske', '2014-04-09 16:34:14', NULL),
(5, 0, 2, 5, 1, 1, 2, 2, 2, 2, 0, 'detailske', '2014-04-09 16:35:06', NULL),
(6, 0, 2, 5, 1, 1, 2, 2, 2, 2, 0, 'detailske', '2014-04-09 16:36:58', NULL),
(7, 0, 2, 5, 1, 1, 2, 2, 2, 2, 1, 'detailske', '2014-04-09 16:40:00', NULL),
(8, 0, 2, 5, 1, 1, 2, 2, 2, 2, 1, 'detailske', '2014-04-09 16:42:22', NULL),
(9, 0, 2, 5, 1, 1, 2, 2, 2, 2, 1, 'detailske', '2014-04-09 16:43:11', NULL),
(10, 0, 2, 5, 1, 1, 2, 2, 2, 2, 1, 'detailske', '2014-04-09 16:44:07', NULL),
(11, 0, 1, 1, 1, 1, 2, 2, 2, 2, 1, 'detailske', '2014-04-10 06:40:49', NULL),
(12, 0, 1, 1, 1, 1, 2, 2, 2, 2, 1, 'detailske', '2014-04-10 06:42:12', NULL),
(13, 0, 1, 1, 1, 1, 2, 2, 2, 2, 1, 'detailske', '2014-04-10 06:47:26', NULL),
(14, 0, 1, 1, 1, 1, 2, 2, 2, 2, 1, 'detailske', '2014-04-10 06:47:41', NULL),
(15, 0, 1, 1, 1, 1, 2, 2, 2, 2, 1, 'detailske', '2014-04-10 06:48:08', NULL),
(16, 0, 1, 1, 1, 1, 2, 2, 2, 2, 1, 'detailske', '2014-04-10 07:15:22', NULL),
(17, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2014-04-10 07:16:16', NULL),
(18, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2014-04-10 07:17:15', NULL),
(19, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2014-04-10 07:18:13', NULL),
(20, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2014-04-10 07:18:54', NULL),
(21, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2014-04-10 07:19:44', NULL),
(22, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2014-04-10 07:37:44', NULL);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `user_contact`
--

CREATE TABLE IF NOT EXISTS `user_contact` (
  `O_I_IDF_TECH` bigint(19) NOT NULL,
  `O_USER_IDF_TECH` bigint(19) NOT NULL,
  `T_I_NAME` varchar(64) COLLATE utf8_bin NOT NULL,
  `T_I_FNAME` varchar(64) COLLATE utf8_bin NOT NULL,
  `T_I_EMAIL` varchar(64) COLLATE utf8_bin NOT NULL,
  `T_I_PHONE` varchar(32) COLLATE utf8_bin NOT NULL,
  `T_I_GSM` varchar(32) COLLATE utf8_bin NOT NULL,
  `T_I_STREET` varchar(64) COLLATE utf8_bin NOT NULL,
  `T_I_HOUSENR` varchar(16) COLLATE utf8_bin NOT NULL,
  `T_I_BUSNR` varchar(8) COLLATE utf8_bin NOT NULL,
  `C_CODEPOSTALCODE` bigint(19) NOT NULL,
  `C_CODECOUNTRY_IDF_TECH` bigint(19) NOT NULL,
  `T_I_DETAILS` varchar(256) COLLATE utf8_bin NOT NULL,
  `D_I_BEGIN` date NOT NULL,
  `D_I_END` date NOT NULL,
  `S_I_CREATE_TECH` timestamp NULL DEFAULT NULL,
  `S_I_MOD_TECH` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `user_reply`
--

CREATE TABLE IF NOT EXISTS `user_reply` (
  `O_I_IDF_TECH` bigint(19) NOT NULL,
  `O_USER_IDF_TECH` bigint(19) NOT NULL,
  `L_I_EMAIL` tinyint(1) NOT NULL,
  `L_I_PHONE` tinyint(1) NOT NULL,
  `L_I_GSM` tinyint(1) NOT NULL,
  `L_I_ADDRESS` tinyint(1) NOT NULL,
  `D_I_BEGIN` date NOT NULL,
  `D_I_END` date NOT NULL,
  `S_I_CREATE_TECH` timestamp NULL DEFAULT NULL,
  `S_I_MOD_TECH` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`O_I_IDF_TECH`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
