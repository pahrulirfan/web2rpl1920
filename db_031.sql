-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 15, 2019 at 12:23 AM
-- Server version: 5.7.19
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_031`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_031`
--

CREATE TABLE `tbl_031` (
  `id` int(11) NOT NULL,
  `nip` varchar(20) NOT NULL,
  `nama` varchar(60) NOT NULL,
  `alamat` text NOT NULL,
  `jabatan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_031`
--

INSERT INTO `tbl_031` (`id`, `nip`, `nama`, `alamat`, `jabatan`) VALUES
(1, '16.10.32', 'Pahrul Irfan', 'Jl. Kelapa Tiga Nomor 90', 'Dosen'),
(2, '16.10.31', 'Irfan', 'Jl. Kelapa Tiga', 'Dosen');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_031`
--
ALTER TABLE `tbl_031`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_031`
--
ALTER TABLE `tbl_031`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
