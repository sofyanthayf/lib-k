-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 05, 2016 at 08:49 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dblibk`
--

-- --------------------------------------------------------

--
-- Table structure for table `perpustakaan`
--

CREATE TABLE IF NOT EXISTS `perpustakaan` (
  `id` varchar(32) NOT NULL,
  `nama_url` varchar(32) NOT NULL COMMENT 'http://lib-k.com/nama_url/',
  `nama_disp` varchar(128) NOT NULL,
  `owner` varchar(32) NOT NULL COMMENT 'user ID pemilik',
  `type` tinyint(4) NOT NULL COMMENT '1=Personal | 2=Community | 3=College | 4=University',
  `alamat` varchar(255) NOT NULL,
  `kota` varchar(64) NOT NULL,
  `negara` varchar(64) NOT NULL,
  `latitude` decimal(8,6) NOT NULL,
  `longitude` decimal(9,6) NOT NULL,
  `status` tinyint(4) NOT NULL COMMENT '0=inactive | 1=active | 2=suspended'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` varchar(32) NOT NULL,
  `email` varchar(128) NOT NULL,
  `username` varchar(64) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama_depan` varchar(32) NOT NULL,
  `nama_belakang` varchar(32) NOT NULL,
  `sapaan` tinyint(4) NOT NULL DEFAULT '1',
  `tgl_lahir` date NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `kota` varchar(64) NOT NULL,
  `negara` varchar(64) NOT NULL,
  `telepon` varchar(16) NOT NULL,
  `kantor` varchar(128) NOT NULL,
  `jabatan` varchar(128) NOT NULL,
  `pendidikan` varchar(8) NOT NULL,
  `sekolah` varchar(128) NOT NULL,
  `facebook` varchar(128) NOT NULL,
  `linkedin` varchar(128) NOT NULL,
  `gplus` varchar(128) NOT NULL,
  `token` varchar(32) NOT NULL,
  `role` tinyint(4) NOT NULL DEFAULT '0' COMMENT '0=inactive | 1=user | 2=pustakawan',
  `tgl_signup` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `tgl_update` datetime NOT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `perpustakaan`
--
ALTER TABLE `perpustakaan`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
