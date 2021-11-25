-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 25, 2021 at 07:03 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_latihan_lsp`
--

-- --------------------------------------------------------

--
-- Table structure for table `daftar_siswa`
--

CREATE TABLE `daftar_siswa` (
  `ID` int(11) NOT NULL,
  `NIS` varchar(10) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `kelas` varchar(3) NOT NULL,
  `jurusan` varchar(100) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `daftar_siswa`
--

INSERT INTO `daftar_siswa` (`ID`, `NIS`, `nama`, `kelas`, `jurusan`, `alamat`) VALUES
(1, '192010059', 'muhammadhafidz', 'X', 'RPL', 'bogor'),
(6, '192010049', 'rafa', 'XI', 'RPL', 'bogor'),
(7, '1920100046', 'dayak', 'XI', 'TKJ', 'bogor');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `ID` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`ID`, `username`, `password`) VALUES
(4, 'hafidz', '$2y$10$MADtbqZQtj7MxaJ7ikAcgOFH6KX8MtACtWXm2z2aAiZz7mGGjF4Lq'),
(5, 'papay', '$2y$10$WdbpNdWDlvvoBCxtMLkQu.3Sn.6HPlY/BApJypwrqhD.z1aGeJ/P6');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `daftar_siswa`
--
ALTER TABLE `daftar_siswa`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `daftar_siswa`
--
ALTER TABLE `daftar_siswa`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
