-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 14, 2020 at 04:11 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbrumahsakit`
--

-- --------------------------------------------------------

--
-- Table structure for table `rs`
--

CREATE TABLE `rs` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `telepon` varchar(100) DEFAULT NULL,
  `alamat` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rs`
--

INSERT INTO `rs` (`id`, `nama`, `telepon`, `alamat`) VALUES
(1, 'RSUD Blambangan', '62333421118', 'Jl. Letkol. Istiqlah No. 49, Singonegaran, Kec. Banyuwangi, Kab. Banyuwangi, Jawa Timur 68415'),
(2, 'RSUD dr. Iskak Tulungagung', '62355322609', 'Jl. Dr. Wahidin Sudiro Husodo, Kedung Taman, Kedungwaru, Kec. Kedungwaru, Kab. Tulungagung, Jawa Timur'),
(3, 'RSUD dr. R. Koesma Tuban', '62356321010', 'Jl. Dr. Wahidin Sudirohusodo No. 800, Sidorejo, Kec. Tuban, Kab. Tuban, Jawa Timur 62315'),
(4, 'RSUD Dr. R. Sosodoro Djatikoesoemo', '628113224972', 'Jl. Veteran No. 36, Kec. Bojonegoro, Kab. Bojonegoro, Jawa Timur 62111'),
(5, 'RSUD dr. Saiful Anwar', '6282139672121', 'Jl. Jaksa Agung Suprapto No. 2, Klojen, Kec. Klojen, Kota Malang, Jawa Timur 65111'),
(6, 'RSUD dr. Soebandi Jember', '62331487441', 'Jl. Dr. Soebandi No. 124, Cangkring, Patrang, Kec. Patrang, Kab. Jember, Jawa Timur 68111'),
(7, 'RSUD dr. Soedono Madiun', '62351454657', 'Jl. Dr. Soetomo No.59, Kartoharjo, Kec. Kartoharjo, Kota Madiun, Jawa Timur 63117'),
(8, 'RSUD Dr. Soetomo', '62315501239', 'Jl. Mayjen. Prof. Dr. Moestop No. 6-8, Airlangga, Kec. Gubeng, Kota Surabaya, Jawa Timur 60286'),
(9, 'RSUD Pare Kediri', '62354391718', 'Jl. Pahlawan Kusuma Bangsa No. 1, Cangkring, Pelem, Pare, Kediri, Jawa Timur 64213');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `rs`
--
ALTER TABLE `rs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `rs`
--
ALTER TABLE `rs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
