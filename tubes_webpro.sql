-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 22 Apr 2019 pada 11.55
-- Versi server: 10.1.31-MariaDB
-- Versi PHP: 7.0.28

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
-- Struktur dari tabel `jenis_jasa`
--

CREATE TABLE `jenis_jasa` (
  `id_layanan` varchar(8) NOT NULL,
  `nama_jasa` varchar(20) NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jenis_jasa`
--

INSERT INTO `jenis_jasa` (`id_layanan`, `nama_jasa`, `harga`) VALUES
('ly-01', 'Nail Art', 50000),
('ly-02', 'Creambath', 20000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemesanan`
--

CREATE TABLE `pemesanan` (
  `kode_booking` varchar(5) NOT NULL,
  `username` varchar(25) NOT NULL,
  `id_layanan` varchar(8) NOT NULL,
  `status_bayar` tinyint(1) NOT NULL,
  `jam_pelayanan` time NOT NULL,
  `tanggal_pelayanan` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pemesanan`
--

INSERT INTO `pemesanan` (`kode_booking`, `username`, `id_layanan`, `status_bayar`, `jam_pelayanan`, `tanggal_pelayanan`) VALUES
('psn-2', 'saaa', 'ly-02', 0, '01:00:00', '2019-04-01'),
('psn-3', '1234', 'ly-01', 0, '01:00:00', '2019-04-01'),
('psn-5', '1234', 'ly-01', 0, '15:00:00', '2019-04-23'),
('psn-6', '1234', 'ly-01', 0, '01:00:00', '2019-04-09'),
('psn-9', '1234', 'ly-01', 0, '01:00:00', '2019-04-16');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
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
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`Nama`, `Date`, `Email`, `Username`, `Password`, `Role`) VALUES
('ejaa', '2019-04-04', 'haha@gmail', '1234', '81dc9bdb52', 'customer'),
('eja', '2019-04-09', 'haha@gmail.com', 'dada12', 'e10adc3949', 'customer'),
('nisa', '123', 'nisarahma128@yahoo.c', 'RTR', '13124141', 'Customer'),
('captainAmerika', '123', 'nisarahma128@yahoo.c', 'saaa', '23534635', 'customer');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `jenis_jasa`
--
ALTER TABLE `jenis_jasa`
  ADD PRIMARY KEY (`id_layanan`);

--
-- Indeks untuk tabel `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD PRIMARY KEY (`kode_booking`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`Username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
