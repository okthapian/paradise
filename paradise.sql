-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 24, 2018 at 02:33 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `paradise`
--

-- --------------------------------------------------------

--
-- Table structure for table `proker`
--

CREATE TABLE `proker` (
  `id_proker` int(11) NOT NULL,
  `judul_proker` varchar(100) NOT NULL,
  `isi_proker` text NOT NULL,
  `foto_proker` varchar(100) NOT NULL,
  `tanggal_proker` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `proker`
--

INSERT INTO `proker` (`id_proker`, `judul_proker`, `isi_proker`, `foto_proker`, `tanggal_proker`) VALUES
(1, 'MAKRAB PARADISE', 'Acara ini dilaksanakan untuk menyambut anggota baru paradise.Dilaksanakan setiap tahun.', 'makrab.jpg', '2018-06-24'),
(2, 'DIESNATALIS PARADISE', 'Acara ini dilaksanakan untuk merayakan hari jadi paradise setiap tahun', 'diesnatalis.jpg', '2018-06-24'),
(3, 'mendaki gunung', 'Proker yang satu ini cocok banget loh buat anggota PARADISE yang hobi daki gunung.', 'daki.jpg', '2018-06-24'),
(4, 'Pra Diesnatalies', 'Acara Ini merupakan rangkaian dari diesnatalis', 'lomba.jpg', '2018-06-24');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `proker`
--
ALTER TABLE `proker`
  ADD PRIMARY KEY (`id_proker`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `proker`
--
ALTER TABLE `proker`
  MODIFY `id_proker` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
