-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 04, 2020 at 12:43 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `max`
--

-- --------------------------------------------------------

--
-- Table structure for table `iwp`
--

CREATE TABLE `iwp` (
  `idusers` int(11) NOT NULL,
  `username` tinytext NOT NULL,
  `password` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `iwp`
--

INSERT INTO `iwp` (`idusers`, `username`, `password`) VALUES
(1, 'abc', '$2y$10$Ud3B2mdEF5N/XTYntULGiuJbCG63holycTPdZrFsSHHajHUviHwLC'),
(2, 'abcd', '$2y$10$NK0QVHwyM6ReogwQYg4Eh.4wrgQqJK88.u94y.d43Mn3EqMaaV4Te'),
(3, 'zxc', '$2y$10$NZbUyo7CROIic9PFYm75FODzQIUTMewwMA8qj.NP4CCHZ.cG/nBtu'),
(4, 'qwe', '$2y$10$jfNlOZ/hJWdFG44DnXt8fuOS.xqGuXaElAGwPlwoabi3YRxoSRRMa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `iwp`
--
ALTER TABLE `iwp`
  ADD PRIMARY KEY (`idusers`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `iwp`
--
ALTER TABLE `iwp`
  MODIFY `idusers` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
