-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 09 Bulan Mei 2023 pada 07.20
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_cost`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `login`
--

CREATE TABLE `login` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `login`
--

INSERT INTO `login` (`username`, `password`, `name`, `level`) VALUES
('18.14.1.0001', '141c0b659fc817b30e12af710092864028d8b03f', 'Admin COST', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_pembayaran`
--

CREATE TABLE `t_pembayaran` (
  `no_pem` int(11) NOT NULL,
  `no_tag` int(11) NOT NULL,
  `bayar` int(11) NOT NULL,
  `sisa` int(11) NOT NULL,
  `tgl` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `t_pembayaran`
--

INSERT INTO `t_pembayaran` (`no_pem`, `no_tag`, `bayar`, `sisa`, `tgl`) VALUES
(1, 1, 250000, 0, '2018-04-24'),
(2, 2, 400000, 0, '2018-07-09'),
(3, 3, 450000, 0, '2018-08-03'),
(4, 16, 750000, 2250000, '2018-09-13'),
(5, 17, 350000, 950000, '2018-09-13'),
(6, 15, 300000, 2700000, '2018-09-20'),
(7, 18, 250000, 0, '2018-10-16'),
(8, 16, 750000, 1500000, '2018-10-31'),
(9, 17, 300000, 650000, '2018-10-31'),
(10, 15, 450000, 2250000, '2018-11-02'),
(11, 19, 110000, 0, '2018-11-27'),
(12, 17, 650000, 0, '2018-12-07'),
(13, 16, 1500000, 0, '2018-12-19'),
(14, 20, 125000, 10000, '2018-12-20'),
(15, 15, 750000, 1500000, '2019-01-09'),
(16, 15, 375000, 1125000, '2019-02-06'),
(17, 21, 750000, 2250000, '2019-02-06'),
(18, 22, 345000, 1020000, '2019-02-06'),
(19, 20, 10000, 0, '2019-03-04'),
(20, 21, 750000, 1500000, '2019-03-08'),
(21, 22, 365000, 655000, '2019-03-08'),
(22, 23, 380000, 0, '2019-03-11'),
(23, 25, 250000, 0, '2019-04-08'),
(24, 24, 250000, 0, '2019-04-08'),
(25, 22, 25000, 630000, '2019-04-09'),
(26, 15, 375000, 750000, '2019-04-09'),
(27, 15, 500000, 250000, '2019-05-22'),
(28, 21, 500000, 1000000, '2019-05-22'),
(29, 21, 1000000, 0, '2019-06-12'),
(30, 15, 250000, 0, '2019-07-03'),
(31, 22, 630000, 0, '2019-07-03'),
(32, 28, 125000, 0, '2019-09-09'),
(33, 31, 10000, 0, '2019-09-16'),
(34, 29, 750000, 2250000, '2019-09-19'),
(35, 30, 325000, 975000, '2019-09-19'),
(36, 32, 250000, 0, '2019-11-05'),
(37, 33, 250000, 0, '2019-11-05'),
(38, 29, 750000, 1500000, '2019-11-14'),
(39, 30, 350000, 625000, '2019-11-14'),
(40, 29, 750000, 750000, '2019-12-31'),
(41, 30, 350000, 275000, '2019-12-31'),
(42, 29, 750000, 0, '2020-01-21'),
(43, 30, 275000, 0, '2020-01-21'),
(44, 35, 325000, 975000, '2020-02-21'),
(45, 34, 750000, 2250000, '2020-02-21'),
(46, 35, 325000, 650000, '2020-04-13'),
(47, 34, 750000, 1500000, '2020-04-13'),
(48, 35, 325000, 325000, '2020-05-27'),
(49, 34, 750000, 570000, '2020-05-27'),
(50, 35, 325000, 0, '2020-07-01'),
(51, 34, 570000, 0, '2020-07-01'),
(52, 36, 250000, 0, '2020-07-03'),
(53, 37, 250000, 0, '2020-07-03'),
(54, 38, 125000, 0, '2020-09-08'),
(55, 40, 243750, 731250, '2020-10-17'),
(56, 39, 750000, 2250000, '2020-10-17'),
(57, 40, 243750, 487500, '2020-12-13'),
(58, 39, 750000, 1500000, '2020-12-13'),
(59, 42, 250000, 0, '2020-12-28'),
(60, 43, 250000, 0, '2020-12-28'),
(61, 40, 243750, 243750, '2021-02-01'),
(62, 39, 750000, 750000, '2021-02-01'),
(63, 41, 180000, 0, '2021-01-15'),
(64, 39, 750000, 0, '2021-02-27'),
(65, 40, 243750, 0, '2021-02-27'),
(66, 44, 750000, 2250000, '2021-03-22'),
(67, 45, 325000, 975000, '2021-03-22'),
(68, 44, 750000, 1500000, '2021-04-16'),
(69, 45, 325000, 650000, '2021-04-16'),
(70, 44, 750000, 750000, '2021-05-27'),
(71, 45, 325000, 325000, '2021-05-27'),
(72, 47, 250000, 0, '2021-06-09'),
(73, 45, 325000, 0, '2021-06-09'),
(74, 44, 750000, 0, '2021-06-09'),
(75, 46, 600000, 0, '2021-09-04'),
(76, 48, 125000, 0, '2021-09-13'),
(77, 49, 10000, 0, '2021-09-16'),
(78, 50, 100000, 0, '2021-09-18'),
(79, 51, 750000, 2250000, '2021-10-01'),
(80, 52, 750000, 0, '2021-10-13'),
(81, 51, 750000, 1500000, '2021-11-01'),
(82, 51, 750000, 750000, '2022-01-11'),
(83, 51, 750000, 0, '2022-02-02'),
(84, 53, 750000, 2250000, '2022-03-01'),
(85, 54, 120000, 335000, '2022-03-01'),
(86, 55, 1000000, 2000000, '2022-03-26'),
(87, 53, 750000, 1500000, '2022-04-01'),
(88, 54, 115000, 220000, '2022-04-01'),
(89, 56, 250000, 0, '2022-04-21'),
(90, 53, 750000, 750000, '2022-05-02'),
(91, 54, 120000, 100000, '2022-05-02'),
(92, 53, 750000, 0, '2022-06-01'),
(93, 54, 100000, 0, '2022-06-01'),
(94, 55, 1000000, 1000000, '2022-06-09'),
(96, 58, 50000, 0, '2022-06-28'),
(97, 55, 1000000, 0, '2023-01-09'),
(98, 60, 125000, 0, '2022-09-06'),
(99, 61, 750000, 0, '2022-09-30');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_tagihan`
--

CREATE TABLE `t_tagihan` (
  `no_tag` int(11) NOT NULL,
  `nama_tag` varchar(50) NOT NULL,
  `total` int(11) NOT NULL,
  `dibayar` int(11) DEFAULT NULL,
  `sem` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `t_tagihan`
--

INSERT INTO `t_tagihan` (`no_tag`, `nama_tag`, `total`, `dibayar`, `sem`) VALUES
(1, 'DAFTAR', 250000, 250000, 1),
(2, 'REGISTRASI', 400000, 400000, 1),
(3, 'PROSSPEK', 450000, 450000, 1),
(15, 'DPK', 3000000, 3000000, 1),
(16, 'DPP', 3000000, 3000000, 1),
(17, 'SKS', 1300000, 1300000, 1),
(18, 'Praktikum Fisika Dasar', 250000, 250000, 1),
(19, 'Jas Praktikum Ukuran M', 110000, 110000, 1),
(20, 'Kemeja HIMATIF', 135000, 135000, 1),
(21, 'DPP', 3000000, 3000000, 2),
(22, 'SKS', 1365000, 1365000, 2),
(23, 'Kunjungan Industri', 380000, 380000, 2),
(24, 'Praktikum Algoritma & Pascal', 250000, 250000, 2),
(25, 'Praktikum Dasar Komputer', 250000, 250000, 2),
(28, 'HEREGISTRASI', 125000, 125000, 3),
(29, 'DPP', 3000000, 3000000, 3),
(30, 'SKS', 1300000, 1300000, 3),
(31, 'Rapot Informatika', 10000, 10000, 3),
(32, 'Praktikum Prolog', 250000, 250000, 3),
(33, 'Praktikum Pemrograman Jaringan', 250000, 250000, 3),
(34, 'DPP', 2820000, 2820000, 4),
(35, 'SKS', 1300000, 1300000, 4),
(36, 'Praktikum Dasar Komputer II', 250000, 250000, 4),
(37, 'Praktikum  Pemrograman Visual dan SQL', 250000, 250000, 4),
(38, 'HEREGISTRASI', 125000, 125000, 5),
(39, 'DPP', 3000000, 3000000, 5),
(40, 'SKS', 975000, 975000, 5),
(41, 'TUGAS FILM', 180000, 180000, 5),
(42, 'Praktikum Jaringan Komputer', 250000, 250000, 5),
(43, 'Praktikum Audit Sistem Informasi', 250000, 250000, 5),
(44, 'DPP', 3000000, 3000000, 6),
(45, 'SKS', 1300000, 1300000, 6),
(46, 'KNM', 600000, 600000, 6),
(47, 'Praktikum Grafika Komputer', 250000, 250000, 6),
(48, 'HEREGISTRASI', 125000, 125000, 7),
(49, 'Rapot', 10000, 10000, 6),
(50, 'TES TOEP', 100000, 100000, 7),
(51, 'DPP', 3000000, 3000000, 7),
(52, 'KP', 750000, 750000, 7),
(53, 'DPP', 3000000, 3000000, 8),
(54, 'SKS', 455000, 455000, 8),
(55, 'TUGAS AKHIR', 3000000, 3000000, 8),
(56, 'PRAKTIKUM PEMROSESAN BAHASA ALAMI', 250000, 250000, 8),
(58, 'PEMAKALAH SENATIB', 50000, 50000, 8),
(60, 'HEREGISTRASI', 125000, 125000, 9),
(61, 'DPP', 750000, 750000, 9);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`username`);

--
-- Indeks untuk tabel `t_pembayaran`
--
ALTER TABLE `t_pembayaran`
  ADD PRIMARY KEY (`no_pem`),
  ADD KEY `no_tag` (`no_tag`);

--
-- Indeks untuk tabel `t_tagihan`
--
ALTER TABLE `t_tagihan`
  ADD PRIMARY KEY (`no_tag`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `t_pembayaran`
--
ALTER TABLE `t_pembayaran`
  MODIFY `no_pem` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;

--
-- AUTO_INCREMENT untuk tabel `t_tagihan`
--
ALTER TABLE `t_tagihan`
  MODIFY `no_tag` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `t_pembayaran`
--
ALTER TABLE `t_pembayaran`
  ADD CONSTRAINT `t_pembayaran_ibfk_1` FOREIGN KEY (`no_tag`) REFERENCES `t_tagihan` (`no_tag`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
