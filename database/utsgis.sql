-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 22, 2020 at 02:31 AM
-- Server version: 10.1.37-MariaDB
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
-- Database: `utsgis`
--

-- --------------------------------------------------------

--
-- Table structure for table `pekalongan`
--

CREATE TABLE `pekalongan` (
  `id` int(10) NOT NULL,
  `nss` varchar(20) NOT NULL,
  `npsn` varchar(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `status` varchar(10) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `kec` varchar(50) NOT NULL,
  `lat` varchar(50) NOT NULL,
  `lng` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pekalongan`
--

INSERT INTO `pekalongan` (`id`, `nss`, `npsn`, `nama`, `status`, `alamat`, `kec`, `lat`, `lng`) VALUES
(1, '301036402001', '20329517', 'SMAN 1 Pekalongan', 'SMA', 'Jl. RA Kartini No. 39', 'Pekalongan Timur', '-6.896708', '109.677922'),
(2, '301036404007', '20329516', 'SMAN 2 Pekalongan', 'SMA', 'Jl. Kusuma Bangsa', 'Pekalongan Utara', '-6.866220', '109.678678'),
(3, '301036404009', '20329508', 'SMAN 3 Pekalongan', 'SMA', 'Jl. Progo No. 28', 'Pekalongan Utara', '-6.878439', '109.671534'),
(4, '301036403012', '20329509', 'SMAN 4 Pekalongan', 'SMA', 'Jl. HOS Cokroaminoto No. 383A', 'Pekalongan Selatan', '-6.930970', '109.679570'),
(5, '302036401006', '20329524', 'SMA Dwija Praja', 'SMA', 'Jl. Sriwijaya No. 7', 'Pekalongan Barat', '-6.894150', '109.660133'),
(6, '302036401005', '20329523', 'SMA Masehi', 'SMA', 'Jl. Kurinci No. 34', 'Pekalongan Barat', '-6.893338', '109.665664'),
(7, '302036402003', '20329522', 'SMA Islam', 'SMA', 'Jl. Surabaya No. 1', 'Pekalongan Timur', '-6.882723', '109.677322'),
(8, '302036402004', '20329521', 'SMA Hasyim Asyari', 'SMA', 'Jl. Dr Wahidin No. 104', 'Pekalongan Timur', '-6.896767', '109.680681'),
(9, '303036402010', '20329520', 'SMA Al-Irsyad', 'SMA', 'Jl. Seruni No. 66A', 'Pekalongan Timur', '-6.886571', '109.683373'),
(10, '302036404002', '20329525', 'SMA Santo Bernardus', 'SMA', 'Jl. Patriot No. 14', 'Pekalongan Utara', '-6.876704', '109.668360'),
(12, '311337503231', '20329643', 'MAN 3 Pekalongan', 'MA', 'Jl. Trikora Pragak', 'Pekalongan Selatan', '-6.905716', '109.683027'),
(13, '312337502282', '20329650', 'MA Ribatul Mutaallimin', 'MA', 'Jl. HOS Cokroaminoto No. 57', 'Pekalongan Timur', '-6.902687', '109.678294'),
(14, '312337502284', '20329642', 'MA Salafiyah', 'MA', 'Jl. Purnasari No. 100', 'Pekalongan Timur', '-6.898164', '109.685449'),
(15, '312337503363', '20329646', 'MAS Hidayatul Athfal', 'MA', 'Jl. Gatot Subroto', 'Pekalongan Selatan', '-6.917307', '109.655529'),
(16, '312337503285', '20329647', 'MA KH Syafii', 'MA', 'Jl. Raya Buaran No. 21A', 'Pekalongan Selatan', '-6.916651', '109.661167'),
(17, '331036401001', '20329514', 'SMKN 1 Pekalongan', 'SMK', 'Jl. Angkatan 66 No. 90', 'Pekalongan Barat', '-6.886243', '109.660798'),
(18, '341036402001', '20329512', 'SMK 2 Pekalongan', 'SMK', 'Jl. Perintis Kemerdekaan No. 29', 'Pekalongan Barat', '-6.884932', '109.664601'),
(19, '721036401001', '20329528', 'SMKN 3 Pekalongan', 'SMK', 'Jl. Perintis Kemerdekaan No. 30', 'Pekalongan Barat', '-6.885528', '109.664591'),
(20, '322036401001', '20329526', 'SMK Muhammadiyah', 'SMK', 'Jl. Pramuka No. 1', 'Pekalongan Barat', '-6.883314', '109.663550'),
(22, '343036401003', '20329510', 'SMK Baitussalam', 'SMK', 'Jl. Darma Bakti No. 3', 'Pekalongan Barat', '-6.906026', '109.671648'),
(23, '582036401003', '20329539', 'SMK Perikanan Irma', 'SMK', 'Jl. Sriwijaya No. 16', 'Pekalongan Barat', '-6.892670', '109.660832'),
(24, '342036404002', '20329513', 'SMK Veteran', 'SMK', 'Jl. Maninjau No. 14', 'Pekalongan Timur', '-6.894505', '109.677776'),
(25, '323036403003', '20329527', 'SMK Syafii Akrom', 'SMK', 'Jl. Pelita I No. 322', 'Pekalongan Selatan', '-6.915125', '109.667598'),
(26, '343036404004', '20329511', 'SMK Gatra Praja', 'SMK', 'Jl. Perintis Kemerdekaan No. 9', 'Pekalongan Utara', '-6.878762', '109.664994'),
(27, '322036403004', '20351614', 'SMK Diponegoro', 'SMK', 'Jl. Raya Kertoharjo', 'Pekalongan Selatan', '-6.933382', '109.669839');

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `id` int(10) NOT NULL,
  `kec` varchar(50) NOT NULL,
  `kab` varchar(50) NOT NULL,
  `prov` varchar(50) NOT NULL,
  `sma_ma` int(20) NOT NULL,
  `smk` int(20) NOT NULL,
  `jumlah` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`id`, `kec`, `kab`, `prov`, `sma_ma`, `smk`, `jumlah`) VALUES
(1, 'Kec. Pekalongan Barat', 'Kota Pekalongan', 'Jawa Tengah', 0, 5137, 5137),
(2, 'Kec. Pekalongan Timur', 'Kota Pekalongan', 'Jawa Tengah', 1407, 182, 3000),
(3, 'Kec. Pekalongan Selatan', 'Kota Pekalongan', 'Jawa Tengah', 727, 1971, 2698),
(4, 'Kec. Pekalongan Utara', 'Kota Pekalongan', 'Jawa Tengah', 1773, 207, 1980);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(10) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'admin', '1'),
(5, '1', '1'),
(6, '1', '1'),
(7, '1', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pekalongan`
--
ALTER TABLE `pekalongan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pekalongan`
--
ALTER TABLE `pekalongan`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
