-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 30, 2019 at 02:55 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `loker`
--
CREATE DATABASE IF NOT EXISTS `loker` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `loker`;

-- --------------------------------------------------------

--
-- Table structure for table `tb_penitipan`
--

CREATE TABLE `tb_penitipan` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `tgl_masuk` date NOT NULL,
  `tgl_keluar` date DEFAULT NULL,
  `desc_barang` text NOT NULL,
  `foto_barang` varchar(50) NOT NULL,
  `status_barang` varchar(20) NOT NULL,
  `kode_penitipan` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_penitipan`
--

INSERT INTO `tb_penitipan` (`id`, `id_user`, `tgl_masuk`, `tgl_keluar`, `desc_barang`, `foto_barang`, `status_barang`, `kode_penitipan`) VALUES
(1, 1, '2019-03-13', '0000-00-00', 'anu nyaa', '1234a', 'Sudah Diambil', 122211),
(2, 2, '2019-03-29', '2019-03-08', 'bujang', '1234', 'Sudah Diambil', 12221),
(3, 1, '2019-03-30', NULL, 'ada', 'ada', 'Sudah Titip', 123),
(4, 2, '2019-03-30', '2019-03-30', 'ada', 'ada', 'Sudah Diambil', NULL),
(6, 2, '2019-03-30', NULL, 'ada', '1553220777403.jpg', 'Belum Titip', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `tipe` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `username`, `password`, `tipe`) VALUES
(1, 'admin', 'admin', 'admin'),
(2, 'user', 'user', 'user'),
(3, 'rn', 'rn', 'petugas'),
(4, 'tt', 'tt', 'admin'),
(6, '12344', '123', 'petugas');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_penitipan`
--
ALTER TABLE `tb_penitipan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_penitipan`
--
ALTER TABLE `tb_penitipan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_penitipan`
--
ALTER TABLE `tb_penitipan`
  ADD CONSTRAINT `tb_penitipan_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `tb_user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
