-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 29, 2019 at 12:13 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tubes_webpro`
--

-- --------------------------------------------------------

--
-- Table structure for table `jenis_jasa`
--

CREATE TABLE `jenis_jasa` (
  `id_layanan` varchar(8) NOT NULL,
  `nama_jasa` varchar(20) NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jenis_jasa`
--

INSERT INTO `jenis_jasa` (`id_layanan`, `nama_jasa`, `harga`) VALUES
('LY01', 'Nail Art', 200000),
('LY02', 'Creambath', 100000),
('LY03', 'Smoothing', 200000),
('LY04', 'Spa', 300000),
('LY05', 'Hair Extenion', 700000),
('LY06', 'Hair Coloring', 800000),
('LY07', 'Hair Cut', 150000);

-- --------------------------------------------------------

--
-- Table structure for table `pemesanan`
--

CREATE TABLE `pemesanan` (
  `kode_booking` varchar(5) NOT NULL,
  `Username` varchar(25) NOT NULL,
  `id_layanan` varchar(8) NOT NULL,
  `status_bayar` tinyint(1) NOT NULL,
  `jam_pelayanan` time NOT NULL,
  `tanggal_pelayanan` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pemesanan`
--

INSERT INTO `pemesanan` (`kode_booking`, `Username`, `id_layanan`, `status_bayar`, `jam_pelayanan`, `tanggal_pelayanan`) VALUES
('psn-8', 'ajitamayog', 'LY01', 0, '08:02:00', '2019-06-29');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `Nama` varchar(20) NOT NULL,
  `Date` varchar(10) NOT NULL,
  `Email` varchar(20) NOT NULL,
  `Username` varchar(10) NOT NULL,
  `Password` varchar(10) NOT NULL,
  `Role` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`Nama`, `Date`, `Email`, `Username`, `Password`, `Role`) VALUES
('Aji', '2019-04-04', 'aji@gmail.com', 'ajitamayog', 'yogaganten', 'customer'),
('aqua', '2019-04-12', 'aqua@gmail.com', 'butuhaqua', 'aquasehat', 'Pegawai'),
('eja', '04051999', 'eja@gmail.com', 'farezaa', 'fareza01', 'pegawai'),
('mawar', '2019-04-24', 'mawar@harum.com', 'mawar', 'e93943ef53', 'customer'),
('nabil', '2019-04-30', 'nabil@gmail.com', 'nabilfauza', 'nabilfauza', 'customer'),
('Nurul', '2019-01-08', 'nurul@gmail.com', 'nunuzakiyy', '8d3813054d', 'customer'),
('nisa', '123', 'nisarahma128@yahoo.c', 'RTR', '13124141', 'Customer'),
('yoga', '2019-04-04', 'aji@gmail.com', 'yogaaji', 'yogacool', 'customer'),
('Yoga Ajitama', '2019-04-09', 'yoga@gmail.com', 'yogaajitam', 'yogaajitam', 'Pegawai');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jenis_jasa`
--
ALTER TABLE `jenis_jasa`
  ADD PRIMARY KEY (`id_layanan`);

--
-- Indexes for table `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD PRIMARY KEY (`kode_booking`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`Username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
