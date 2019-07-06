-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 04, 2019 at 04:45 PM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 7.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `login`
--

-- --------------------------------------------------------

--
-- Table structure for table `scores`
--

CREATE TABLE `scores` (
  `no` int(11) NOT NULL,
  `nickname` varchar(100) NOT NULL,
  `score` int(11) NOT NULL,
  `timer` int(11) NOT NULL,
  `level` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `scores`
--

INSERT INTO `scores` (`no`, `nickname`, `score`, `timer`, `level`) VALUES
(21, 'Kiminatesu', 93, 27, 'Medium'),
(22, 'Kelompok 4', 79, 41, 'Medium'),
(23, 'Kiminatesu', 106, 14, 'Easy'),
(24, 'Kiminatesu', 94, 26, 'Hard'),
(25, 'Lintang', 92, 28, 'Easy'),
(26, 'Indri', 86, 34, 'Hard'),
(27, 'Kiminatesu', 96, 24, 'Easy'),
(28, 'Indri', 102, 18, 'Easy'),
(29, 'Anis', 64, 56, 'Medium'),
(30, 'Anis', 0, 60, 'Hard'),
(31, 'Anis', 24, 48, 'Hard'),
(32, 'Kiminatesu', 89, 31, 'Easy'),
(33, 'Kelompok 4', 104, 16, 'Easy'),
(34, 'anis', 24, 48, 'Hard'),
(35, 'anis', 57, 63, 'Medium'),
(36, 'anis', 0, 60, 'Hard'),
(37, 'anis', 65, 55, 'Easy'),
(38, 'Kelompok 4', 101, 19, 'Easy'),
(39, 'Kelompok 4', 100, 20, 'Easy'),
(40, 'Lintang', 105, 15, 'Easy'),
(43, 'Kiminatesu', 105, 15, 'Easy'),
(44, 'Kiminatesu', 106, 14, 'Easy');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `nickname` varchar(12) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `nickname`, `gender`, `foto`) VALUES
(1, 'admin', 'admin', 'Kelompok 4', 'Unisex', ''),
(2, 'Galang', 'Dimas', 'Kiminatesu', 'Male', 'Kiminatesu.png'),
(3, 'lintang', '123', 'Lintang', 'Female', 'Lintang.png'),
(4, 'indri', '123', 'Indri', 'Female', 'Indri.gif'),
(5, 'anis', '123', 'Anis', 'Female', 'Anis.GIF'),
(6, 'Nishi', 'anis', 'anis', 'Female', 'anis.jpg'),
(7, 'sigit', '123', 'Sigit', 'Male', 'Sigit.gif');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `scores`
--
ALTER TABLE `scores`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `scores`
--
ALTER TABLE `scores`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
