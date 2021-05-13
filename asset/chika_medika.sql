-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 13, 2021 at 09:39 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chika_medika`
--

-- --------------------------------------------------------

--
-- Table structure for table `konsultasi`
--

CREATE TABLE `konsultasi` (
  `tanggal` timestamp NULL DEFAULT NULL,
  `anamnese` varchar(100) DEFAULT NULL,
  `nomenklatur` varchar(10) DEFAULT NULL,
  `diagnosa` varchar(100) DEFAULT NULL,
  `tindakan` varchar(100) DEFAULT NULL,
  `resep` varchar(100) DEFAULT NULL,
  `keterangan` varchar(100) DEFAULT NULL,
  `visit` int(100) DEFAULT NULL,
  `id_pasien` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `konsultasi`
--

INSERT INTO `konsultasi` (`tanggal`, `anamnese`, `nomenklatur`, `diagnosa`, `tindakan`, `resep`, `keterangan`, `visit`, `id_pasien`) VALUES
('2021-05-08 17:00:00', 'sakit gigi', '6', NULL, 'kompres', 'Jangan makan permen mulu', 'nyeri bngt', 1, 1),
('2021-03-08 17:00:00', 'sakit hati', '1', NULL, 'cari pacar', 'jomblo aja', 'gusi berdarah', 1, 2),
('2021-03-08 17:00:00', 'Gigi berlubang', '4', NULL, 'tambal gigi', 'Tambal gigi', 'gigi bengkak', 1, 3),
('2021-03-14 17:00:00', 'Gusi bengkak', '5', NULL, 'kompres', 'antibiotik', 'gusi bengkak', 1, 4),
('2021-03-07 17:00:00', 'Ga punya gigi', '8', NULL, 'pasang gigi palsu', 'Pasang gigi palsu', 'gigi lobang', 1, 5),
('2021-03-30 17:00:00', 'Gusi berdarah', '1', NULL, 'antibiotik', 'Obat', 'ga punya gigi', 1, 6),
('2021-03-06 17:00:00', 'Gigi ompong', '4', NULL, 'pasang gigi palsu', 'Pasang gigi palsu', 'gatau lg bingung', 1, 7),
('2021-03-14 17:00:00', 'sakit gigi', '3', NULL, 'minum obat', 'kompress', 'bingung', 1, 8),
('2021-03-29 17:00:00', 'Gusi bengkak', '1', NULL, 'kompres', 'Obat', 'data dummy doang kok', 1, 9),
('2021-03-13 17:00:00', 'Bau mulut', '6', NULL, 'obat', 'Makan permen', 'gapapa kan ?', 1, 10),
('2021-02-28 17:00:00', 'Gusi bengkak', '7', NULL, 'kompres', 'Obat kompres', 'asal asalan gini ?', 1, 11),
('2021-04-09 17:00:00', 'Gigi berlubang', '3', NULL, 'tambal gigi', 'tambal gigi', 'tambal gigi', 1, 12),
('2021-04-28 17:00:00', 'gatau bang', '1', NULL, 'pasang gigi palsu', 'tidak ada', 'tidak ada', 1, 13),
('2021-05-08 17:00:00', 'sakit gigi', '6', NULL, 'kompres', 'Jangan makan permen mulu', 'nyeri bngt', 2, 1),
('2021-05-08 17:00:00', 'sakit gigi', '6', NULL, 'kompres', 'Jangan makan permen mulu', 'nyeri bngt', 3, 1),
('2021-05-08 17:00:00', 'sakit hati', '1', NULL, 'cari pacar', 'jomblo aja', 'gusi berdarah', 2, 2),
('2021-05-08 17:00:00', 'ytjkyukylwere', 'rtjtrjh', NULL, 'fwegerghre', 'qdfqwfew', 'ewrger', 1, 15),
('2021-05-08 17:00:00', '4hrhrfthn', '4', NULL, 'ergre', 'fwe', '3', 1, 16),
('2021-05-08 17:00:00', 'Gusi berdarah', '2', NULL, 'antibiotik', 'Obat', 'ga punya gigi', 2, 6),
('2021-05-08 17:00:00', 'Gusi bengkak', '1', NULL, 'kompres', 'Obat', 'data dummy doang kok', 2, 9),
('2021-05-07 17:00:00', 'cobain', '6', NULL, 'obat', 'Makan permen', 'gapapa kan ?', 2, 10),
('2021-05-09 05:21:42', 'sakit gigi', '2134', NULL, 'wgwerghtrh', 'wqefgergh', 'qfwgw', 1, 18),
('2021-05-09 10:30:24', 'evrdhn', '232', NULL, 'reger', 'ewgfwe', 'weg', 1, 19),
(NULL, 'Sariawan', '2', NULL, 'obat', 'Makan permen', 'gapapa kan ?', 3, 10),
('2021-05-09 10:33:29', 'sariawan', '2', NULL, 'kompres', 'Obat', 'data dummy doang kok', 3, 9),
('2021-05-13 19:29:20', 'gigi copot', '4', 'karang gigi', 'pasang gigi palsu', 'anti biotik', 'tidak ada', 1, 20),
('2021-05-13 19:32:58', 'gusi nyeri', '123', 'gusi bengkak', 'membersihkan gigi', 'antibiotik', 'tidak ada', 2, 20);

-- --------------------------------------------------------

--
-- Table structure for table `pasien`
--

CREATE TABLE `pasien` (
  `id_pasien` int(11) NOT NULL,
  `nama_pasien` varchar(50) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jk` char(1) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `no_telp` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pasien`
--

INSERT INTO `pasien` (`id_pasien`, `nama_pasien`, `tgl_lahir`, `jk`, `alamat`, `no_telp`) VALUES
(1, 'Annisa Jufe Aryani', '2021-04-06', 'P', 'kemiling', '083876562312'),
(2, 'Alief M Ardhi', '2021-04-07', 'L', 'sukarame', '021376542313'),
(3, 'Lukas', '2021-04-19', 'L', 'gsm', '989237847235'),
(4, 'Sandy', '2021-04-01', 'L', 'gsm', '89237653253'),
(5, 'Alief', '2021-04-26', 'L', 'palembang', '872895723234'),
(6, 'Ardhi', '2021-04-28', 'L', 'palembang\r\n', '2134236'),
(7, 'Anastasia', '2021-04-27', 'P', 'jakarta', '87238674823'),
(8, 'Puteri', '2021-04-26', 'P', 'jakarta', '8927834624'),
(9, 'Dewi', '2021-04-27', 'P', 'bogor', '892374623'),
(10, 'Arya', '2021-04-06', 'L', 'bekasi', '8781264723'),
(11, 'Daulat', '2021-04-05', 'L', 'jawa', '0823748234'),
(12, 'Satrio Kunto Birowo', '2021-04-05', 'L', 'Sukarame', '09289074892375'),
(13, 'Jono', '2013-01-01', 'P', 'Jakarta', '8278657826'),
(15, 'Junandar', '2011-06-09', 'L', 'regknejrherh', '902389572389'),
(16, 'Iskandar', '2021-04-26', 'L', 'rthjtrrtjh', '34647568'),
(17, 'Citra Amelia', '2012-06-09', 'L', 'iwhuifweghjif', '8934789756346'),
(18, 'Susanto', '2014-02-09', 'L', 'lpejgioerjh', '47457564'),
(19, 'Susi Susanti', '2017-07-09', 'P', 'qferghe', '475685'),
(20, 'Susi junaedi', '2021-05-14', 'P', 'Jakarta', '082342532');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(3) NOT NULL,
  `nama_depan` varchar(10) NOT NULL,
  `nama_belakang` varchar(10) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nama_depan`, `nama_belakang`, `username`, `password`) VALUES
(1, 'admin', 'admin', 'admin', '21232f297a57a5a743894a0e4a801fc3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `konsultasi`
--
ALTER TABLE `konsultasi`
  ADD KEY `id_pasien` (`id_pasien`);

--
-- Indexes for table `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`id_pasien`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pasien`
--
ALTER TABLE `pasien`
  MODIFY `id_pasien` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `konsultasi`
--
ALTER TABLE `konsultasi`
  ADD CONSTRAINT `konsultasi_ibfk_1` FOREIGN KEY (`id_pasien`) REFERENCES `pasien` (`id_pasien`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
