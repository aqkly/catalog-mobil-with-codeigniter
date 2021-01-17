-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 17, 2021 at 07:09 AM
-- Server version: 5.7.24
-- PHP Version: 7.1.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `assesment`
--

-- --------------------------------------------------------

--
-- Table structure for table `brand_mobil`
--

CREATE TABLE `brand_mobil` (
  `id_brand` int(11) NOT NULL,
  `id_trademark` int(11) NOT NULL,
  `nama_brand` varchar(255) NOT NULL,
  `gambar_brand` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `brand_mobil`
--

INSERT INTO `brand_mobil` (`id_brand`, `id_trademark`, `nama_brand`, `gambar_brand`) VALUES
(1, 1, 'AVANZA', 'avanza.jpg'),
(2, 1, 'FORTUNER', 'fortuner.jpg'),
(3, 2, 'MOBILIO', 'mobilio.jpg'),
(4, 2, 'CR-V', 'crv.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `trade_mark`
--

CREATE TABLE `trade_mark` (
  `id_trademark` int(11) NOT NULL,
  `nama_trademark` varchar(255) NOT NULL,
  `gambar_trademark` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `trade_mark`
--

INSERT INTO `trade_mark` (`id_trademark`, `nama_trademark`, `gambar_trademark`) VALUES
(1, 'TOYOTA', 'toyota.png'),
(2, 'HONDA', 'honda.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `varian_mobil`
--

CREATE TABLE `varian_mobil` (
  `id_varian` int(11) NOT NULL,
  `id_trademark` int(11) NOT NULL,
  `id_brand` int(11) NOT NULL,
  `nama_varian` varchar(255) NOT NULL,
  `gambar_varian` varchar(255) NOT NULL,
  `harga` varchar(255) NOT NULL,
  `tinggi` varchar(255) NOT NULL,
  `konfigurasi_mesin` varchar(255) NOT NULL,
  `hiburan` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `varian_mobil`
--

INSERT INTO `varian_mobil` (`id_varian`, `id_trademark`, `id_brand`, `nama_varian`, `gambar_varian`, `harga`, `tinggi`, `konfigurasi_mesin`, `hiburan`, `status`) VALUES
(1, 1, 1, 'Avanza Seri E', 'avanzatipee.png', '202000000', ' 1695 mm', '1NR-VE, IL, 4 Cylinder, 16 V, DOHC, Dual VVT-i ', '2 DIN CD, AM/FM, USB, & Bluetooth ', 1),
(2, 1, 1, 'Avanza Seri G', 'avanzatipeg.png', '231000000', '1695 mm', '1NR-VE, IL, 4 Cylinder, 16 V, DOHC, Dual VVT-i ', 'Touch screen Head Unit ', 2),
(4, 1, 1, 'Avanza Veloz', 'avanzatipeveloz.png', '227000000', '1695 mm', '1NR-VE, IL, 4 Cylinder, 16 V, DOHC, Dual VVT-i ', 'Radio AM/FM CD Player, USB, Speaker, Audio 2DIN', 2),
(5, 1, 2, 'Fortuner VRZ', 'vrz.jpg', '558000000', '1777 mm', 'Lorem ipsum dolor sit amet', 'Lorem ipsum dolor sit amet', 2),
(6, 1, 2, 'Fortuner SRZ', 'srz.jpg', '627000000', '1877 mm', 'Lorem ipsum dolor sit amet', 'Lorem ipsum dolor sit amet', 2),
(7, 1, 2, 'Fortuner SRZ TRD', 'trd.jpg', '558000000', '1659 mm', 'Lorem ipsum dolor sit amet', 'Lorem ipsum dolor sit amet', 1),
(8, 2, 3, 'Mobilio E CVT', 'ecvt.jpg', '203000000', '1563 mm', 'Lorem ipsum dolor sit amet', 'Lorem ipsum dolor sit amet', 1),
(9, 2, 3, 'Mobilio RS CVT', 'rscvt.jpg', '253000000', '1432 mm', 'Lorem ipsum dolor sit amet', 'Lorem ipsum dolor sit amet', 2),
(10, 2, 3, 'Mobilio E M/T', 'mtx.png', '342000000', '1512 mm', 'Lorem ipsum dolor sit amet', 'Lorem ipsum dolor sit amet', 1),
(11, 2, 4, 'Honda CRV 2.0L', 'crv20.jpg', '324000000', '1432 mm', 'Lorem ipsum dolor sit amet', 'Lorem ipsum dolor sit amet', 2),
(12, 2, 4, 'Honda CRV 1.5L Turbo', 'crv15.jpg', '543000000', '1323 mm', 'Lorem ipsum dolor sit amet', 'Lorem ipsum dolor sit amet', 2),
(13, 2, 4, 'Honda CRV 1.5L Turbo Prestige', 'crv15pres.jpg', '432000000', '1543 mm', 'Lorem ipsum dolor sit amet', 'Lorem ipsum dolor sit amet', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brand_mobil`
--
ALTER TABLE `brand_mobil`
  ADD PRIMARY KEY (`id_brand`);

--
-- Indexes for table `trade_mark`
--
ALTER TABLE `trade_mark`
  ADD PRIMARY KEY (`id_trademark`);

--
-- Indexes for table `varian_mobil`
--
ALTER TABLE `varian_mobil`
  ADD PRIMARY KEY (`id_varian`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brand_mobil`
--
ALTER TABLE `brand_mobil`
  MODIFY `id_brand` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `trade_mark`
--
ALTER TABLE `trade_mark`
  MODIFY `id_trademark` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `varian_mobil`
--
ALTER TABLE `varian_mobil`
  MODIFY `id_varian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
