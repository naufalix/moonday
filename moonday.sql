-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 27, 2021 at 06:55 PM
-- Server version: 10.4.20-MariaDB-log
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `moonday`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id_about` int(11) NOT NULL,
  `judul` int(50) NOT NULL,
  `deskripsi` text NOT NULL,
  `foto` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `kota`
--

CREATE TABLE `kota` (
  `id_kota` int(11) NOT NULL,
  `kota` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kota`
--

INSERT INTO `kota` (`id_kota`, `kota`) VALUES
(2, 'Jakarta'),
(3, 'Surabaya');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id_menu` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL,
  `id_varian` int(11) NOT NULL,
  `foto` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id_menu`, `nama`, `deskripsi`, `id_varian`, `foto`) VALUES
(1, 'Matcha Latte', 'Deskripsi Matcha Latte', 2, ''),
(2, 'Brown Sugar Boba Milk Tea', 'Deskripsi Brown Sugar Boba Milk Tea', 3, ''),
(4, 'Green Tea', 'Deskripsi Green Tea', 3, ''),
(6, 'Black Coffe', 'Deskripsi Black Coffe', 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `promo`
--

CREATE TABLE `promo` (
  `id_promo` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `id_menu` int(11) NOT NULL,
  `end` datetime NOT NULL,
  `foto` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `promo`
--

INSERT INTO `promo` (`id_promo`, `nama`, `id_menu`, `end`, `foto`) VALUES
(1, 'Monday Madness', 1, '2021-11-30 23:37:00', ''),
(2, 'Coffee Night', 2, '2021-12-10 23:41:00', '');

-- --------------------------------------------------------

--
-- Table structure for table `store`
--

CREATE TABLE `store` (
  `id_store` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `id_kota` int(11) NOT NULL,
  `lokasi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `store`
--

INSERT INTO `store` (`id_store`, `nama`, `alamat`, `id_kota`, `lokasi`) VALUES
(1, 'Cabang Jakarta', '', 2, 'lokasi');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(6) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` varchar(50) NOT NULL,
  `foto` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama`, `username`, `password`, `level`, `foto`) VALUES
(1, 'Naufal Ulinnuha', 'naufal', '21232f297a57a5a743894a0e4a801fc3', 'superadmin', '1.png'),
(2, 'Luthfiyah', 'luthfi', 'e10adc3949ba59abbe56e057f20f883e', 'superadmin', ''),
(3, 'Zahran', 'zahran', 'e10adc3949ba59abbe56e057f20f883e', 'superadmin', ''),
(4, 'Dena', 'dena', 'e10adc3949ba59abbe56e057f20f883e', 'admin', ''),
(5, 'Putra', 'putra', 'e10adc3949ba59abbe56e057f20f883e', 'admin', ''),
(6, 'Nevian', 'nevian', 'e10adc3949ba59abbe56e057f20f883e', 'admin', ''),
(7, 'Misaka', 'misaka', '9c5fa085ce256c7c598f6710584ab25d', 'admin', '7.png');

-- --------------------------------------------------------

--
-- Table structure for table `varian`
--

CREATE TABLE `varian` (
  `id_varian` int(11) NOT NULL,
  `varian` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `varian`
--

INSERT INTO `varian` (`id_varian`, `varian`) VALUES
(1, 'Coffe'),
(2, 'Non-coffe'),
(3, 'Tea');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id_about`);

--
-- Indexes for table `kota`
--
ALTER TABLE `kota`
  ADD PRIMARY KEY (`id_kota`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id_menu`),
  ADD KEY `id_varian` (`id_varian`);

--
-- Indexes for table `promo`
--
ALTER TABLE `promo`
  ADD PRIMARY KEY (`id_promo`),
  ADD KEY `id_menu` (`id_menu`);

--
-- Indexes for table `store`
--
ALTER TABLE `store`
  ADD PRIMARY KEY (`id_store`),
  ADD KEY `id_kota` (`id_kota`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `varian`
--
ALTER TABLE `varian`
  ADD PRIMARY KEY (`id_varian`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id_about` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kota`
--
ALTER TABLE `kota`
  MODIFY `id_kota` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id_menu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `promo`
--
ALTER TABLE `promo`
  MODIFY `id_promo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `store`
--
ALTER TABLE `store`
  MODIFY `id_store` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `varian`
--
ALTER TABLE `varian`
  MODIFY `id_varian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `menu`
--
ALTER TABLE `menu`
  ADD CONSTRAINT `menu_ibfk_1` FOREIGN KEY (`id_varian`) REFERENCES `varian` (`id_varian`) ON UPDATE CASCADE;

--
-- Constraints for table `promo`
--
ALTER TABLE `promo`
  ADD CONSTRAINT `promo_ibfk_1` FOREIGN KEY (`id_menu`) REFERENCES `menu` (`id_menu`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `store`
--
ALTER TABLE `store`
  ADD CONSTRAINT `store_ibfk_1` FOREIGN KEY (`id_kota`) REFERENCES `kota` (`id_kota`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
