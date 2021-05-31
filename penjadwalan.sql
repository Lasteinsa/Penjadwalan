-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 31, 2021 at 05:11 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `penjadwalan`
--

-- --------------------------------------------------------

--
-- Table structure for table `matakuliah`
--

CREATE TABLE `matakuliah` (
  `kodemtk` varchar(25) NOT NULL,
  `namamtk` varchar(25) NOT NULL,
  `namadosen` varchar(255) NOT NULL,
  `ruang` varchar(25) NOT NULL,
  `kelas` varchar(25) NOT NULL,
  `hari` varchar(25) NOT NULL,
  `mulai` time NOT NULL,
  `selesai` time NOT NULL,
  `fakultas` varchar(255) NOT NULL,
  `tempat` varchar(255) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `matakuliah`
--

INSERT INTO `matakuliah` (`kodemtk`, `namamtk`, `namadosen`, `ruang`, `kelas`, `hari`, `mulai`, `selesai`, `fakultas`, `tempat`, `keterangan`) VALUES
('KP05', 'Basis ', 'Dosen 2', '5.4.3', 'AA', 'Senin', '17:00:00', '18:00:00', 'FTI', 'Reguler Pusat', 'Reguler'),
('KP06', 'Algoritma', 'Dosen 3', '5.4.4', 'AB', 'Sabtu', '08:00:00', '10:00:00', 'FTI', 'Reguler Pusat', 'Reguler');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `matakuliah`
--
ALTER TABLE `matakuliah`
  ADD PRIMARY KEY (`kodemtk`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
