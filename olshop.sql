-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 22 Des 2018 pada 10.12
-- Versi server: 10.1.30-MariaDB
-- Versi PHP: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `olshop`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `komentar`
--

CREATE TABLE `komentar` (
  `id` int(50) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `komentar` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `komentar`
--

INSERT INTO `komentar` (`id`, `nama`, `email`, `komentar`) VALUES
(1, 'Mukidi', 'blablabla@gmail.com', 'Aku cinta eek'),
(2, 'Marco', 'blablabla@gmail.com', 'Bukan Kaleng-kaleng'),
(3, 'Perawan Anak 1', 'sukamakan@gmail.com', 'Saya belanja di sini beli iPhone X, alhamduillah setelah barangnya datang saya gak dapat hp tapi malah dapat piring cantik. terima kasih kedai smartphone');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kritik`
--

CREATE TABLE `kritik` (
  `id` int(11) NOT NULL,
  `kritik` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kritik`
--

INSERT INTO `kritik` (`id`, `kritik`) VALUES
(1, 'ghjj');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemesanan`
--

CREATE TABLE `pemesanan` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `email` varchar(60) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `hp` varchar(16) NOT NULL,
  `no_ktp` varchar(50) NOT NULL,
  `barang` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pemesanan`
--

INSERT INTO `pemesanan` (`id`, `nama`, `jenis_kelamin`, `email`, `alamat`, `hp`, `no_ktp`, `barang`) VALUES
(1, 'John Meyer', 'laki-laki', 'blabla@gmail.com', 'Jalan Arjosari', '081123456789', '123456111', 'Xiaomi Mi A1 - Rp. 3.100.000,-'),
(2, 'Susi Susanti', 'perempuan', 'blabla@gmail.com', 'Jalan Mawar', '081123456789', '123456112', 'Xiaomi Mi 6 - Rp 7.100.000,-'),
(3, 'Pudji Astuti', 'perempuan', 'blabla@gmail.com', 'Jalan Anggrek', '081123456789', '123456113', 'Samsung Galaxy S8 - Rp. 10.000.000,-'),
(4, 'Faisal Maulana', 'laki-laki', 'blabla@gmail.com', 'Jalan Mangga', '081123456789', '123456114', 'Samsung Galaxy Note 8 - Rp. 13.000.000,-'),
(5, 'Marco Polo', 'laki-laki', 'blabla@gmail.com', 'Jalan Daun Muda', '081123456789', '123456115', 'Iphone 8 - Rp. 15.000.000,-'),
(6, 'Ria SW', 'perempuan', 'blabla@gmail.com', 'Jalan Kaki', '081123456789', '123456116', 'Iphone X - Rp. 16.000.000,-'),
(7, 'Ferry', 'laki-laki', 'blabla@gmail.com', 'Jalan santai', '081123456789', '123456117', 'OPPO R11 - 7.000.000,-'),
(8, 'Mukidi', 'laki-laki', 'blablabla@gmail.com', 'Semarang', '123456789', '12345669', 'SAMSUNG GALAXY S8 - Rp 10.000.000,-'),
(10, 'aesfdd', 'laki-laki', 'blablabla@gmail.com', 'Semarang Barat', '1234567890', '123456119', 'SAMSUNG GALAXY S8 - Rp 10.000.000,-');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kritik`
--
ALTER TABLE `kritik`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `komentar`
--
ALTER TABLE `komentar`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `kritik`
--
ALTER TABLE `kritik`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `pemesanan`
--
ALTER TABLE `pemesanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
