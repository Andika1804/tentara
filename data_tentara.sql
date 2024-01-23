-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 23, 2024 at 07:45 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `data_tentara`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_tugas_tentara`
--

CREATE TABLE `data_tugas_tentara` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `pangkat` varchar(50) NOT NULL,
  `kode_tugas` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_tugas_tentara`
--

INSERT INTO `data_tugas_tentara` (`id`, `nama`, `pangkat`, `kode_tugas`) VALUES
(12, 'bambang', '115', '1701'),
(26, 'gigi', '113', '0734'),
(27, 'rizal', '113', '0833'),
(28, 'jimba', '115', '0905'),
(29, 'riski bilar', '115', '0734'),
(30, 'joni', '114', '0501');

-- --------------------------------------------------------

--
-- Table structure for table `kode_wilayah`
--

CREATE TABLE `kode_wilayah` (
  `id_wilayah` char(4) NOT NULL,
  `wilayah` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kode_wilayah`
--

INSERT INTO `kode_wilayah` (`id_wilayah`, `wilayah`) VALUES
('0501', 'jakarta'),
('0701', 'jayapura'),
('0734', 'yogyakarta'),
('0833', 'malang'),
('0905', 'balikpapan');

-- --------------------------------------------------------

--
-- Table structure for table `pangkat`
--

CREATE TABLE `pangkat` (
  `id_pangkat` char(10) NOT NULL,
  `pangkat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pangkat`
--

INSERT INTO `pangkat` (`id_pangkat`, `pangkat`) VALUES
('112', 'serma'),
('113', 'serka'),
('114', 'serda'),
('115', 'kopral');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_tugas_tentara`
--
ALTER TABLE `data_tugas_tentara`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kode_wilayah`
--
ALTER TABLE `kode_wilayah`
  ADD PRIMARY KEY (`id_wilayah`);

--
-- Indexes for table `pangkat`
--
ALTER TABLE `pangkat`
  ADD PRIMARY KEY (`id_pangkat`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_tugas_tentara`
--
ALTER TABLE `data_tugas_tentara`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
