-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 13 Des 2020 pada 18.58
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `indekos`
--

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `detail`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `detail` (
`id` int(11)
,`nama_kos` text
,`jenis` text
,`alamat` text
,`jarak` text
,`luas` text
,`image` text
,`kondisi` text
,`fasilitas_utama` text
,`fasilitas_tambahan` text
,`harga` text
);

-- --------------------------------------------------------

--
-- Struktur dari tabel `fasilitas_t`
--

CREATE TABLE `fasilitas_t` (
  `id` int(11) NOT NULL,
  `nama` text NOT NULL,
  `id_kriteria` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `fasilitas_t`
--

INSERT INTO `fasilitas_t` (`id`, `nama`, `id_kriteria`) VALUES
(1, 'Dapur', '5fd64e4111020'),
(2, 'Kamar Mandi Dalam', '5fd64e4111020'),
(3, 'Tempat Jemuran', '5fd64e4111020'),
(4, 'Parkir Mobil', '5fd64e4111020'),
(5, 'Ruang Tamu', '5fd64e4111020'),
(6, 'Dapur', '5fd6537b54f1a'),
(7, 'Tempat Jemuran', '5fd6537b54f1a'),
(8, 'Parkir Mobil', '5fd6537b54f1a'),
(9, 'Dapur', '5fd654d224bd0'),
(10, 'Kamar Mandi Dalam', '5fd654d224bd0'),
(11, 'Tempat Jemuran', '5fd654d224bd0'),
(12, 'Parkir Mobil', '5fd654d224bd0'),
(13, 'Kulkas', '5fd654d224bd0'),
(14, 'Mesin Cuci', '5fd654d224bd0'),
(15, 'Ruang Tamu', '5fd654d224bd0'),
(16, 'Dapur', '5fd654dd9a906'),
(17, 'Kamar Mandi Dalam', '5fd654dd9a906'),
(18, 'Tempat Jemuran', '5fd654dd9a906'),
(19, 'Parkir Mobil', '5fd654dd9a906'),
(20, 'Kulkas', '5fd654dd9a906'),
(21, 'Mesin Cuci', '5fd654dd9a906'),
(22, 'Ruang Tamu', '5fd654dd9a906');

-- --------------------------------------------------------

--
-- Struktur dari tabel `fasilitas_u`
--

CREATE TABLE `fasilitas_u` (
  `id` int(11) NOT NULL,
  `nama` text NOT NULL,
  `id_kriteria` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `fasilitas_u`
--

INSERT INTO `fasilitas_u` (`id`, `nama`, `id_kriteria`) VALUES
(1, 'Kasur', '5fd64e4111020'),
(2, 'Lemari', '5fd64e4111020'),
(3, 'Parkir', '5fd6537b54f1a'),
(4, 'Kasur', '5fd654d224bd0'),
(5, 'Lemari', '5fd654d224bd0'),
(6, 'Wifi', '5fd654d224bd0'),
(7, 'Parkir', '5fd654d224bd0'),
(8, 'Kipas', '5fd654d224bd0'),
(9, 'Tv', '5fd654d224bd0'),
(10, 'Kasur', '5fd654dd9a906'),
(11, 'Lemari', '5fd654dd9a906'),
(12, 'Wifi', '5fd654dd9a906'),
(13, 'Parkir', '5fd654dd9a906'),
(14, 'Kipas', '5fd654dd9a906'),
(15, 'Tv', '5fd654dd9a906');

-- --------------------------------------------------------

--
-- Struktur dari tabel `favorite`
--

CREATE TABLE `favorite` (
  `id_favorite` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_kosan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `gambar`
--

CREATE TABLE `gambar` (
  `id` text NOT NULL,
  `id_kosan` text NOT NULL,
  `file_name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `gambar`
--

INSERT INTO `gambar` (`id`, `id_kosan`, `file_name`) VALUES
('5fd64e415dbbc', '1', '2.jpg'),
('5fd64e4161caa', '1', '3.jpg'),
('5fd6537b8ef10', '2', '8.jpg'),
('5fd6537b92b52', '2', '9.jpg'),
('5fd654dde32ab', '4', '4.jpg'),
('5fd654dde6a3c', '4', '5.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kondisi`
--

CREATE TABLE `kondisi` (
  `id` int(11) NOT NULL,
  `nama` text NOT NULL,
  `id_kriteria` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kondisi`
--

INSERT INTO `kondisi` (`id`, `nama`, `id_kriteria`) VALUES
(1, 'Bersih', '5fd64e4111020'),
(2, 'Baru Dicat Ulang', '5fd64e4111020'),
(3, 'Bangunan Arsitektur Modern', '5fd64e4111020'),
(4, 'Bersih', '5fd6537b54f1a'),
(5, '1 Lokasi Dengan Pemilik', '5fd6537b54f1a'),
(6, ' Lebih Dari 1 Lantai', '5fd6537b54f1a'),
(7, 'Bersih', '5fd654d224bd0'),
(8, 'Baru Dicat Ulang', '5fd654d224bd0'),
(9, '1 Lokasi Dengan Pemilik', '5fd654d224bd0'),
(10, 'Bangunan Arsitektur Modern', '5fd654d224bd0'),
(11, ' Lebih Dari 1 Lantai', '5fd654d224bd0'),
(12, 'Bersih', '5fd654dd9a906'),
(13, 'Baru Dicat Ulang', '5fd654dd9a906'),
(14, '1 Lokasi Dengan Pemilik', '5fd654dd9a906'),
(15, 'Bangunan Arsitektur Modern', '5fd654dd9a906'),
(16, ' Lebih Dari 1 Lantai', '5fd654dd9a906');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kosan`
--

CREATE TABLE `kosan` (
  `id` int(11) NOT NULL,
  `nama_kos` text NOT NULL,
  `jenis` text NOT NULL,
  `alamat` text NOT NULL,
  `desk` text NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kosan`
--

INSERT INTO `kosan` (`id`, `nama_kos`, `jenis`, `alamat`, `desk`, `image`) VALUES
(1, 'Taman Menteng Kos', 'putri', 'Jember', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vitae condimentum erat. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Sed posuere, purus at efficitur hendrerit, augue elit lacinia arcu, a eleifend sem elit et nunc. Sed rutrum vestibulum est, sit amet cursus dolor fermentum vel. Suspendisse mi nibh, congue et ante et, commodo mattis lacus. Duis varius finibus purus sed venenatis. Vivamus varius metus quam, id dapibus velit mattis eu. Praesent et semper risus. Vestibulum erat erat, condimentum at elit at, bibendum placerat orci. Nullam gravida velit mauris, in pellentesque urna pellentesque viverra. Nullam non pellentesque justo, et ultricies neque. Praesent vel metus rutrum, tempus erat a, rutrum ante. Quisque interdum efficitur nunc vitae consectetur. Suspendisse venenatis, tortor non convallis interdum, urna mi molestie eros, vel tempor justo lacus ac justo. Fusce id enim a erat fringilla sollicitudin ultrices vel metus.', '611790538.jpg'),
(2, 'Murah Kost', 'putra', 'Jalan mantan no 32 kec.jember', 'Kosan termurah yang pernah ada tapi banyak jurignya hehe', '1798489014.jpg'),
(4, 'Mahal Kost', 'putri', 'Jalan kenangan nomor 32 kab.pelakor ', 'Kosan termahal yang pernah ada , selain mahal tersedia paket rebahan', '1797078082.jpg');

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `kosan_view`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `kosan_view` (
`id` int(11)
,`nama_kos` text
,`jenis` text
,`alamat` text
,`desk` text
,`harga` text
,`jarak` text
,`luas` text
,`file_name` text
);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kriteria`
--

CREATE TABLE `kriteria` (
  `id_kriteria` text NOT NULL,
  `id_kos` text NOT NULL,
  `harga` text NOT NULL,
  `jarak` text NOT NULL,
  `luas` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kriteria`
--

INSERT INTO `kriteria` (`id_kriteria`, `id_kos`, `harga`, `jarak`, `luas`) VALUES
('5fd64e4111020', '1', '500k-600k', '>1km', '4x4'),
('5fd6537b54f1a', '2', '300k', '>15km', '4x2'),
('5fd654dd9a906', '4', '>600k', '>1km', '4x5');

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `kriteria_view`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `kriteria_view` (
`id_kos` text
,`harga` text
,`jarak` text
,`luas` text
,`kondisi` text
,`fasilitas_utama` text
,`fasilitas_tambahan` text
);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(100) NOT NULL,
  `email_user` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` varchar(100) NOT NULL,
  `telepon` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `nama_user`, `email_user`, `password`, `level`, `telepon`) VALUES
(1, 'husnul', 'husnul@mail.com', '1234', '2', '089757745546'),
(2, 'husen', 'husen@mail.com', '1234', '1', '0898076986');

-- --------------------------------------------------------

--
-- Struktur untuk view `detail`
--
DROP TABLE IF EXISTS `detail`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `detail`  AS SELECT `kosan_view`.`id` AS `id`, `kosan_view`.`nama_kos` AS `nama_kos`, `kosan_view`.`jenis` AS `jenis`, `kosan_view`.`alamat` AS `alamat`, `kosan_view`.`jarak` AS `jarak`, `kosan_view`.`luas` AS `luas`, `kosan_view`.`file_name` AS `image`, `kriteria_view`.`kondisi` AS `kondisi`, `kriteria_view`.`fasilitas_utama` AS `fasilitas_utama`, `kriteria_view`.`fasilitas_tambahan` AS `fasilitas_tambahan`, `kriteria_view`.`harga` AS `harga` FROM (`kosan_view` join `kriteria_view` on(`kosan_view`.`id` = `kriteria_view`.`id_kos`)) ;

-- --------------------------------------------------------

--
-- Struktur untuk view `kosan_view`
--
DROP TABLE IF EXISTS `kosan_view`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `kosan_view`  AS SELECT `kosan`.`id` AS `id`, `kosan`.`nama_kos` AS `nama_kos`, `kosan`.`jenis` AS `jenis`, `kosan`.`alamat` AS `alamat`, `kosan`.`desk` AS `desk`, `kriteria`.`harga` AS `harga`, `kriteria`.`jarak` AS `jarak`, `kriteria`.`luas` AS `luas`, `gambar`.`file_name` AS `file_name` FROM ((`kosan` join `gambar` on(`kosan`.`id` = `gambar`.`id_kosan`)) join `kriteria` on(`kosan`.`id` = `kriteria`.`id_kos`)) ;

-- --------------------------------------------------------

--
-- Struktur untuk view `kriteria_view`
--
DROP TABLE IF EXISTS `kriteria_view`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `kriteria_view`  AS SELECT `kriteria`.`id_kos` AS `id_kos`, `kriteria`.`harga` AS `harga`, `kriteria`.`jarak` AS `jarak`, `kriteria`.`luas` AS `luas`, `kondisi`.`nama` AS `kondisi`, `fasilitas_u`.`nama` AS `fasilitas_utama`, `fasilitas_t`.`nama` AS `fasilitas_tambahan` FROM (((`kriteria` join `kondisi` on(`kriteria`.`id_kriteria` = `kondisi`.`id_kriteria`)) join `fasilitas_u` on(`kriteria`.`id_kriteria` = `fasilitas_u`.`id_kriteria`)) join `fasilitas_t` on(`kriteria`.`id_kriteria` = `fasilitas_t`.`id_kriteria`)) ;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `fasilitas_t`
--
ALTER TABLE `fasilitas_t`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `fasilitas_u`
--
ALTER TABLE `fasilitas_u`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `favorite`
--
ALTER TABLE `favorite`
  ADD PRIMARY KEY (`id_favorite`);

--
-- Indeks untuk tabel `kondisi`
--
ALTER TABLE `kondisi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kosan`
--
ALTER TABLE `kosan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `fasilitas_t`
--
ALTER TABLE `fasilitas_t`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT untuk tabel `fasilitas_u`
--
ALTER TABLE `fasilitas_u`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `kondisi`
--
ALTER TABLE `kondisi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `kosan`
--
ALTER TABLE `kosan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
