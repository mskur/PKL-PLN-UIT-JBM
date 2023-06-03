-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 28 Feb 2023 pada 02.04
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `upti`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3'),
(2, 'admin2', '507250b947cc397023a9595001fcf167'),
(3, 'imam', 'imam');

-- --------------------------------------------------------

--
-- Struktur dari tabel `aplikasi`
--

CREATE TABLE `aplikasi` (
  `idAplikasi` int(11) NOT NULL,
  `namaAplikasi` varchar(250) DEFAULT NULL,
  `alamatAplikasi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `aplikasi`
--

INSERT INTO `aplikasi` (`idAplikasi`, `namaAplikasi`, `alamatAplikasi`) VALUES
(2, 'Google com', 'www.google dot com'),
(4, 'Yahoo', 'www.yahoo.com'),
(5, '11', '11'),
(8, 'TEST', 'www.testing web.com');

-- --------------------------------------------------------

--
-- Struktur dari tabel `inventory`
--

CREATE TABLE `inventory` (
  `idBarang` int(11) NOT NULL,
  `namaBarang` varchar(255) NOT NULL,
  `jumlahBarang` int(11) NOT NULL,
  `serialNumber` varchar(255) DEFAULT NULL,
  `idUPT` int(11) DEFAULT NULL,
  `tanggalMasuk` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `inventory`
--

INSERT INTO `inventory` (`idBarang`, `namaBarang`, `jumlahBarang`, `serialNumber`, `idUPT`, `tanggalMasuk`) VALUES
(3, 'qwe', 1, '1', 2, NULL),
(4, '1234', 111, '123 456', 1, NULL),
(5, '123', 1234, '12344', 4, NULL),
(7, 'Imba', 1, '1', 3, '2023-01-03'),
(8, 'Imba2', 2, '2', 5, NULL),
(9, '44445', 445, '4', 4, NULL),
(11, 'jskdk', 1, '1', 6, NULL),
(14, '33', 3, '3', 4, '2023-01-17'),
(15, '1', 1, '1', 1, NULL),
(16, 'test1', 1, '1123 YH IKK', 5, '2023-01-25');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kontak`
--

CREATE TABLE `kontak` (
  `idKontak` int(11) NOT NULL,
  `whatsapp` varchar(255) DEFAULT NULL,
  `telepon` varchar(255) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kontak`
--

INSERT INTO `kontak` (`idKontak`, `whatsapp`, `telepon`, `alamat`) VALUES
(1, '08112345667895', '(031) 2234567805', 'Sidoarjo5, Jl. Suningrat No.45, Ketegan, Kec. Taman, Kabupaten Sidoarjo, Jawa Timur 61257');

-- --------------------------------------------------------

--
-- Struktur dari tabel `lightbox`
--

CREATE TABLE `lightbox` (
  `idLightBox` int(11) NOT NULL,
  `gambarLightBox` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `lightbox`
--

INSERT INTO `lightbox` (`idLightBox`, `gambarLightBox`) VALUES
(1, 'lightbox1674535461.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `media`
--

CREATE TABLE `media` (
  `idMedia` int(11) NOT NULL,
  `gambarMedia` varchar(255) DEFAULT NULL,
  `judulMedia` varchar(255) DEFAULT NULL,
  `teksMedia` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `media`
--

INSERT INTO `media` (`idMedia`, `gambarMedia`, `judulMedia`, `teksMedia`) VALUES
(16, 'media1674128638.jpeg', '111', '111'),
(18, 'media1674119363.jpg', '123222', '123'),
(20, 'media1674477143.jpg', '55', '55');

-- --------------------------------------------------------

--
-- Struktur dari tabel `upt`
--

CREATE TABLE `upt` (
  `idUPT` int(11) NOT NULL,
  `namaUPT` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `upt`
--

INSERT INTO `upt` (`idUPT`, `namaUPT`) VALUES
(1, 'UPT 1'),
(2, 'UPT 2'),
(3, 'UPT 3'),
(4, 'UPT 4'),
(5, 'UPT 5'),
(6, 'UPT 6');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `aplikasi`
--
ALTER TABLE `aplikasi`
  ADD PRIMARY KEY (`idAplikasi`);

--
-- Indeks untuk tabel `inventory`
--
ALTER TABLE `inventory`
  ADD PRIMARY KEY (`idBarang`);

--
-- Indeks untuk tabel `kontak`
--
ALTER TABLE `kontak`
  ADD PRIMARY KEY (`idKontak`);

--
-- Indeks untuk tabel `lightbox`
--
ALTER TABLE `lightbox`
  ADD PRIMARY KEY (`idLightBox`);

--
-- Indeks untuk tabel `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`idMedia`);

--
-- Indeks untuk tabel `upt`
--
ALTER TABLE `upt`
  ADD PRIMARY KEY (`idUPT`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `aplikasi`
--
ALTER TABLE `aplikasi`
  MODIFY `idAplikasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `inventory`
--
ALTER TABLE `inventory`
  MODIFY `idBarang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `kontak`
--
ALTER TABLE `kontak`
  MODIFY `idKontak` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `lightbox`
--
ALTER TABLE `lightbox`
  MODIFY `idLightBox` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `media`
--
ALTER TABLE `media`
  MODIFY `idMedia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `upt`
--
ALTER TABLE `upt`
  MODIFY `idUPT` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
