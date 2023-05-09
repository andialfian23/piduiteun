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
-- Stand-in struktur untuk tampilan `v_pembayaran`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `v_pembayaran` (
`no_pem` int(11)
,`nama_tag` varchar(50)
,`sem` int(11)
,`total` int(11)
,`bayar` int(11)
,`sisa` int(11)
,`tgl` date
);

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `v_pengeluaran`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `v_pengeluaran` (
`tg` varchar(7)
,`bayar` decimal(32,0)
,`sem` int(11)
);

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `v_per_semester`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `v_per_semester` (
`sem` int(11)
,`bayar` decimal(32,0)
);

-- --------------------------------------------------------

--
-- Struktur untuk view `v_pembayaran`
--
DROP TABLE IF EXISTS `v_pembayaran`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_pembayaran`  AS  select `t_pembayaran`.`no_pem` AS `no_pem`,`t_tagihan`.`nama_tag` AS `nama_tag`,`t_tagihan`.`sem` AS `sem`,`t_tagihan`.`total` AS `total`,`t_pembayaran`.`bayar` AS `bayar`,`t_pembayaran`.`sisa` AS `sisa`,`t_pembayaran`.`tgl` AS `tgl` from (`t_pembayaran` join `t_tagihan`) where `t_pembayaran`.`no_tag` = `t_tagihan`.`no_tag` ;

-- --------------------------------------------------------

--
-- Struktur untuk view `v_pengeluaran`
--
DROP TABLE IF EXISTS `v_pengeluaran`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_pengeluaran`  AS  select left(`v_pembayaran`.`tgl`,7) AS `tg`,sum(`v_pembayaran`.`bayar`) AS `bayar`,`v_pembayaran`.`sem` AS `sem` from `v_pembayaran` group by left(`v_pembayaran`.`tgl`,7) ;

-- --------------------------------------------------------

--
-- Struktur untuk view `v_per_semester`
--
DROP TABLE IF EXISTS `v_per_semester`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_per_semester`  AS  select `v_pembayaran`.`sem` AS `sem`,sum(`v_pembayaran`.`bayar`) AS `bayar` from `v_pembayaran` group by `v_pembayaran`.`sem` ;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
