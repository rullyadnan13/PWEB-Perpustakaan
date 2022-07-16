-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 01, 2022 at 03:09 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `perpustakaanku`
--

-- --------------------------------------------------------

--
-- Structure for view `vw_pinjam`
--

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vw_pinjam`  AS SELECT `tb_buku`.`db_judulbuku` AS `db_judulbuku`, `tb_buku`.`db_penulisbuku` AS `db_penulisbuku`, `tb_buku`.`db_penerbitbuku` AS `db_penerbitbuku`, `tb_buku`.`db_tahunterbit` AS `db_tahunterbit`, `tb_pinjam`.`id_anggotapinjam` AS `id_anggotapinjam`, `tb_pinjam`.`durasi` AS `durasi`, `tb_pinjam`.`db_tanggalpinjam` AS `db_tanggalpinjam`, `tb_pinjam`.`db_tanggaldurasi` AS `db_tanggaldurasi`, `tb_anggota`.`db_namaanggota` AS `db_namaanggota`, `tb_anggota`.`id_anggota` AS `id_anggota` FROM ((`tb_pinjam` join `tb_anggota` on(`tb_pinjam`.`id_anggotapinjam` = `tb_anggota`.`id_anggota`)) join `tb_buku` on(`tb_pinjam`.`id_bukupinjam` = `tb_buku`.`id_buku`))  ;

--
-- VIEW `vw_pinjam`
-- Data: None
--

COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
