-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 12, 2019 at 05:42 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `data_siswa`
--

-- --------------------------------------------------------

--
-- Table structure for table `list_siswa`
--

CREATE TABLE `list_siswa` (
  `id` int(11) NOT NULL,
  `nama` varchar(64) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `jenis_kelamin` varchar(16) NOT NULL,
  `agama` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `list_siswa`
--

INSERT INTO `list_siswa` (`id`, `nama`, `alamat`, `jenis_kelamin`, `agama`) VALUES
(2, 'Fajar Windhu Zulfikar', 'Tegal Munjul, Purwakarta', 'Laki-laki', 'Islam'),
(4, 'Lia Ritonga', 'Maracang, Purwakarta', 'Perempuan', 'Kristen');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `list_siswa`
--
ALTER TABLE `list_siswa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `list_siswa`
--
ALTER TABLE `list_siswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
