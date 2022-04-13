-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 10, 2022 at 03:33 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.4.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `emma_work`
--

-- --------------------------------------------------------

--
-- Table structure for table `daily_site_report`
--

DROP TABLE IF EXISTS `daily_site_report`;
CREATE TABLE IF NOT EXISTS `daily_site_report` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `report_date` datetime NOT NULL,
  `title` varchar(100) NOT NULL,
  `client` varchar(200) NOT NULL,
  `nosof_days_onsite` varchar(100) NOT NULL,
  `nosof_personnel` varchar(100) NOT NULL,
  `activities` text NOT NULL,
  `next_plan` varchar(200) NOT NULL,
  `listof_tools` varchar(200) NOT NULL,
  `observation` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `daily_site_report`
--

INSERT INTO `daily_site_report` (`id`, `report_date`, `title`, `client`, `nosof_days_onsite`, `nosof_personnel`, `activities`, `next_plan`, `listof_tools`, `observation`) VALUES
(1, '2022-04-03 00:00:00', 'road', 'kola', '43', '32', 'klskdf', 'kljadls', 'mnskad', 'kjlkj;ldas'),
(2, '2022-04-03 00:00:00', 'road', 'kola', '43', '32', 'klskdf', 'kljadls', 'mnskad', 'endorse by kola');

-- --------------------------------------------------------

--
-- Table structure for table `project_report`
--

DROP TABLE IF EXISTS `project_report`;
CREATE TABLE IF NOT EXISTS `project_report` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `contract_name` varchar(100) NOT NULL,
  `work_done` varchar(200) NOT NULL,
  `contract_rep` varchar(200) NOT NULL,
  `client_rep` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `project_report`
--

INSERT INTO `project_report` (`id`, `contract_name`, `work_done`, `contract_rep`, `client_rep`) VALUES
(1, 'ola', 'jhkdshkf', 'njljclx', 'jksdjlf');

-- --------------------------------------------------------

--
-- Table structure for table `project_weekly_report`
--

DROP TABLE IF EXISTS `project_weekly_report`;
CREATE TABLE IF NOT EXISTS `project_weekly_report` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `contract_name` varchar(100) NOT NULL,
  `project_loc` varchar(200) NOT NULL,
  `work_done` varchar(200) NOT NULL,
  `contracts_name` varchar(100) NOT NULL,
  `sign_date_contract` date NOT NULL,
  `client_rep` varchar(100) NOT NULL,
  `sign_date_client` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `project_weekly_report`
--

INSERT INTO `project_weekly_report` (`id`, `contract_name`, `project_loc`, `work_done`, `contracts_name`, `sign_date_contract`, `client_rep`, `sign_date_client`) VALUES
(1, 'ksjkaj', 'mklk;lsaf', 'nkljlfa', 'm;lks', '2022-04-03', 'mdasd;l', '2022-04-02'),
(2, 'ksjkaj', 'mklk;lsaf', 'klsk;k', 'm;lks', '2022-04-24', 'mdasd;l', '2022-04-03');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
