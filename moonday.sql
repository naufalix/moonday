-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 04, 2021 at 07:12 PM
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
  `judul` varchar(50) NOT NULL,
  `deskripsi` text NOT NULL,
  `foto` varchar(50) NOT NULL
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
(3, 'Malang'),
(4, 'Bandung');

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
(1, 'Americano', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 1, '1.png'),
(2, 'Avocado Smoothie', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 2, '2.png'),
(4, 'Biscoff Cloud Coffee', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 1, '4.png'),
(6, 'Caramel Latte', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 1, '6.png'),
(8, 'Caramel Macchiato', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 1, '8.png'),
(9, 'Choco Mousse', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 2, '9.png'),
(10, 'Cinnamon Milk Latte', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 1, '10.png'),
(11, 'Cold Brew', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 1, '11.png'),
(12, 'Dalgona Coffee', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 1, '12.png'),
(13, 'Hojicha Hot Chocolate', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 2, '13.png'),
(14, 'Hojicha Latte', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 1, '14.png'),
(15, 'Honeycomb Latte', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 1, '15.png'),
(16, 'Matcha Latte', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 2, '16.png'),
(17, 'Milk Bubble Tea', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 2, '17.png'),
(18, 'Pineapple Mango Smoothie', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 2, '18.png'),
(19, 'Pumpkin Smoothie', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 2, '19.png');

-- --------------------------------------------------------

--
-- Table structure for table `promo`
--

CREATE TABLE `promo` (
  `id_promo` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `id_menu` int(11) NOT NULL,
  `start` datetime DEFAULT NULL,
  `end` datetime NOT NULL,
  `foto` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `promo`
--

INSERT INTO `promo` (`id_promo`, `nama`, `id_menu`, `start`, `end`, `foto`) VALUES
(1, 'Healthy Month', 1, '2021-11-01 00:00:00', '2021-11-30 23:59:00', ''),
(2, 'Cold Brew Season', 1, '2021-10-25 00:00:00', '2021-12-01 23:59:00', ''),
(5, 'Strawberry Festival', 2, '2021-11-20 00:00:00', '2021-12-08 23:59:00', ''),
(6, 'Night Coffee', 4, '2021-10-01 00:00:00', '2021-12-31 23:59:00', '');

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
(1, 'Moonday Kelapa Gading', 'Jl. Raya Klp. Hybrida Blok A1 No. 8 Kecamatan Kelapa Gading Kota Jakarta Utara', 2, 'https://goo.gl/maps/sHjSuUWeMube7Qmy5'),
(3, 'Moonday Jatiwaringin', 'Jl. Raya Jatiwaringin No. 20, Cipinang Melayu Kecamatan Makassar, Jakarta', 2, 'https://goo.gl/maps/5gJkkxaRPi4BTFSa7'),
(4, 'Moonday Town Square Malang', 'Town Square Malang lt. 2 Jl. Veteran, Penanggungan, Kota Malang', 3, 'https://goo.gl/maps/BgUKw3umyAJBPscK8'),
(5, 'Moonday Lowokwaru', 'Jl. Bunga Camalia No. 1, Lowokwaru, Kota Malang', 3, 'https://goo.gl/maps/EfP3z9GgJ8wsh49Z8'),
(6, 'Moonday PVJ Bandung', 'Paris Van Java lt. 3 Jl. Sukajadi Cipedes, Bandung', 4, 'https://goo.gl/maps/UrFn1M75ENPNKfRNA'),
(7, 'Moonday TSM Bandung', 'Trans Studio Bandung lt. 2 Jl. Gatot Subroto, Cibangkong, Batununggal, Bandung', 4, 'https://g.page/transstudiomallbandung?share');

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
  MODIFY `id_kota` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id_menu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `promo`
--
ALTER TABLE `promo`
  MODIFY `id_promo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `store`
--
ALTER TABLE `store`
  MODIFY `id_store` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

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
