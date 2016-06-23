-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 18, 2015 at 09:41 AM
-- Server version: 5.6.24
-- PHP Version: 5.5.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `skmp`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(255) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `nama`, `username`, `password`) VALUES
(1, 'MOHAMED AZHA BIN AB TALIB', 'admin', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `balik_kampung`
--

CREATE TABLE IF NOT EXISTS `balik_kampung` (
  `pid` int(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `lokasi` varchar(255) NOT NULL,
  `masakeluar` datetime DEFAULT NULL,
  `masamasuk` datetime DEFAULT NULL,
  `tarikhbalik` date NOT NULL,
  `tarikhmasuk` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `balik_kampung`
--

INSERT INTO `balik_kampung` (`pid`, `nama`, `lokasi`, `masakeluar`, `masamasuk`, `tarikhbalik`, `tarikhmasuk`) VALUES
(2, '51', 'kuala lumpur', '2015-12-17 11:26:04', '2015-12-17 11:26:29', '2015-12-04', '2015-12-17');

-- --------------------------------------------------------

--
-- Table structure for table `keluar`
--

CREATE TABLE IF NOT EXISTS `keluar` (
  `pid` int(21) NOT NULL,
  `nama` int(50) NOT NULL,
  `lokasi` varchar(100) NOT NULL,
  `masakeluar` datetime DEFAULT NULL,
  `masamasuk` datetime DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `keluar`
--

INSERT INTO `keluar` (`pid`, `nama`, `lokasi`, `masakeluar`, `masamasuk`) VALUES
(1, 51, 'pas', '2015-12-17 09:38:42', '2015-12-17 00:40:06'),
(2, 50, 'medan', '2015-12-17 10:01:43', '2015-12-17 10:02:12'),
(3, 51, 'seksyen 19', '2015-12-17 11:21:50', '2015-12-17 11:22:22');

-- --------------------------------------------------------

--
-- Table structure for table `kursus`
--

CREATE TABLE IF NOT EXISTS `kursus` (
  `fid` int(21) NOT NULL,
  `kursus` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kursus`
--

INSERT INTO `kursus` (`fid`, `kursus`) VALUES
(1, 'SKM3 + VTO AUTOMOTIF'),
(2, 'SKM3 + VTO ELEKTRONIK'),
(3, 'SKM3 + VTO KIMPALAN'),
(4, 'SKM3 + VTO MEKATRONIK'),
(5, 'DLPV KOMPUTER RANGKAIAN'),
(6, 'DLPV KOMPUTER SISTEM'),
(7, 'DLPV KIMPALAN'),
(8, 'DLPV ELEKTRONIK'),
(9, 'DLPV AUTOMOTIF'),
(10, 'DLPV MEKATRONIK'),
(11, 'DLPV PENGELUARAN'),
(12, 'VTO');

-- --------------------------------------------------------

--
-- Table structure for table `maklumatpelajar`
--

CREATE TABLE IF NOT EXISTS `maklumatpelajar` (
  `id` int(255) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `nokp` varchar(12) NOT NULL,
  `ndp` varchar(50) NOT NULL,
  `jantina` varchar(50) NOT NULL,
  `kursus` varchar(100) NOT NULL,
  `img_path` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=63 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `maklumatpelajar`
--

INSERT INTO `maklumatpelajar` (`id`, `nama`, `nokp`, `ndp`, `jantina`, `kursus`, `img_path`) VALUES
(50, 'Hajar binti ismail', '870826085258', 'D11314018', 'Perempuan', '6', 'profile.jpg'),
(51, 'Nor sahmel bin mastor', '920520055067', 'D11314031', 'Lelaki', '6', 'profile.jpg'),
(57, 'Mohamed Azha Bin Ab Talib', '920518015867', 'D11314030', 'Lelaki', '6', 'profile.jpg'),
(59, 'nor amalina binti zulaini', '921010115546', 'd11314038', 'Perempuan', '6', 'profile.jpg'),
(60, 'AMMAR NASRUDDIN', '911015086243', 'D11314014', 'Lelaki', '12', 'profile.jpg'),
(61, 'ZAMANI ADAM', '910321125369', 'D11314034', 'Lelaki', '2', ''),
(62, 'mohd amir asyraf', '920521015069', 'd1131439', 'Lelaki', '7', '');

-- --------------------------------------------------------

--
-- Table structure for table `masuklewat`
--

CREATE TABLE IF NOT EXISTS `masuklewat` (
  `kid` int(50) NOT NULL,
  `fid` int(50) NOT NULL,
  `masamasuk` datetime DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `masuklewat`
--

INSERT INTO `masuklewat` (`kid`, `fid`, `masamasuk`) VALUES
(1, 1, '2015-12-17 00:40:06');

-- --------------------------------------------------------

--
-- Table structure for table `pulanglewat`
--

CREATE TABLE IF NOT EXISTS `pulanglewat` (
  `kid` int(50) NOT NULL,
  `fid` int(50) NOT NULL,
  `masamasuk` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `balik_kampung`
--
ALTER TABLE `balik_kampung`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `keluar`
--
ALTER TABLE `keluar`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `kursus`
--
ALTER TABLE `kursus`
  ADD PRIMARY KEY (`fid`);

--
-- Indexes for table `maklumatpelajar`
--
ALTER TABLE `maklumatpelajar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `masuklewat`
--
ALTER TABLE `masuklewat`
  ADD PRIMARY KEY (`kid`);

--
-- Indexes for table `pulanglewat`
--
ALTER TABLE `pulanglewat`
  ADD PRIMARY KEY (`kid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `balik_kampung`
--
ALTER TABLE `balik_kampung`
  MODIFY `pid` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `keluar`
--
ALTER TABLE `keluar`
  MODIFY `pid` int(21) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `kursus`
--
ALTER TABLE `kursus`
  MODIFY `fid` int(21) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `maklumatpelajar`
--
ALTER TABLE `maklumatpelajar`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=63;
--
-- AUTO_INCREMENT for table `masuklewat`
--
ALTER TABLE `masuklewat`
  MODIFY `kid` int(50) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `pulanglewat`
--
ALTER TABLE `pulanglewat`
  MODIFY `kid` int(50) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
