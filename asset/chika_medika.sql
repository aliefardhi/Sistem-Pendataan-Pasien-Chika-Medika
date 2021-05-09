-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 09, 2021 at 06:46 AM
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
  `id_konsultasi` int(10) NOT NULL,
  `tanggal` timestamp NULL DEFAULT NULL,
  `anamnese` varchar(100) DEFAULT NULL,
  `nomenklatur` varchar(10) DEFAULT NULL,
  `tindakan` varchar(100) DEFAULT NULL,
  `resep` varchar(100) DEFAULT NULL,
  `keterangan` varchar(100) DEFAULT NULL,
  `visit` int(100) DEFAULT NULL,
  `id_pasien` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `konsultasi`
--

INSERT INTO `konsultasi` (`id_konsultasi`, `tanggal`, `anamnese`, `nomenklatur`, `tindakan`, `resep`, `keterangan`, `visit`, `id_pasien`) VALUES
(1, '2021-03-26 17:00:00', 'Nyeri gigi dibagian gusi', '6', 'kompres', 'Jangan makan permen mulu', 'nyeri bngt', 1, 1),
(2, '2021-03-08 17:00:00', 'sakit hati', '1', 'cari pacar', 'jomblo aja', 'gusi berdarah', 1, 2),
(3, '2021-03-08 17:00:00', 'Gigi berlubang', '4', 'tambal gigi', 'Tambal gigi', 'gigi bengkak', 1, 3),
(4, '2021-03-14 17:00:00', 'Gusi bengkak', '5', 'kompres', 'antibiotik', 'gusi bengkak', 1, 4),
(5, '2021-03-07 17:00:00', 'Ga punya gigi', '8', 'pasang gigi palsu', 'Pasang gigi palsu', 'gigi lobang', 1, 5),
(6, '2021-03-30 17:00:00', 'Gusi berdarah', '1', 'antibiotik', 'Obat', 'ga punya gigi', 1, 6),
(7, '2021-03-06 17:00:00', 'Gigi ompong', '4', 'pasang gigi palsu', 'Pasang gigi palsu', 'gatau lg bingung', 1, 7),
(8, '2021-03-14 17:00:00', 'sakit gigi', '3', 'minum obat', 'kompress', 'bingung', 1, 8),
(9, '2021-03-29 17:00:00', 'Gusi bengkak', '1', 'kompres', 'Obat', 'data dummy doang kok', 1, 9),
(10, '2021-03-13 17:00:00', 'Bau mulut', '6', 'obat', 'Makan permen', 'gapapa kan ?', 1, 10),
(11, '2021-02-28 17:00:00', 'Gusi bengkak', '7', 'kompres', 'Obat kompres', 'asal asalan gini ?', 1, 11),
(12, '2021-04-09 17:00:00', 'Gigi berlubang', '3', 'tambal gigi', 'tambal gigi', 'tambal gigi', 1, 12),
(13, '2021-04-28 17:00:00', 'gatau bang', '1', 'pasang gigi palsu', 'tidak ada', 'tidak ada', 1, 13),
(14, '2021-05-05 17:00:00', 'Gigi berlubang', '8', 'tambal gigi', 'antibiotik', 'tidak ada', 2, 1);

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
(14, 'Joni Suniardi', '2021-04-28', 'L', 'Sukarame', '09278826752');

-- --------------------------------------------------------

--
-- Table structure for table `riwayat_pasien`
--

CREATE TABLE `riwayat_pasien` (
  `id_diagnosa` int(10) NOT NULL,
  `diagnosa` varchar(100) DEFAULT NULL,
  `id_pasien` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `riwayat_pasien`
--

INSERT INTO `riwayat_pasien` (`id_diagnosa`, `diagnosa`, `id_pasien`) VALUES
(1, 'Gigi berlubang', 1),
(2, 'Gigi copot', 2),
(3, 'Sakit gigi', 3),
(4, 'Sakit gusi', 4),
(5, 'Gigi lobang', 5),
(6, 'Gigi tambal', 6),
(7, 'Gigi palsu', 7),
(8, 'Ga punya gigi', 8),
(9, 'Gusi bengkak', 9),
(10, 'Gapnya gigi', 10),
(11, 'Gusi bengkak', 11),
(12, 'gigi berlubang', 12),
(13, 'ga ada gigi', 13);

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
  ADD PRIMARY KEY (`id_konsultasi`),
  ADD KEY `id_pasien` (`id_pasien`);

--
-- Indexes for table `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`id_pasien`);

--
-- Indexes for table `riwayat_pasien`
--
ALTER TABLE `riwayat_pasien`
  ADD PRIMARY KEY (`id_diagnosa`),
  ADD KEY `id_pasien` (`id_pasien`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `konsultasi`
--
ALTER TABLE `konsultasi`
  MODIFY `id_konsultasi` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `pasien`
--
ALTER TABLE `pasien`
  MODIFY `id_pasien` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `riwayat_pasien`
--
ALTER TABLE `riwayat_pasien`
  MODIFY `id_diagnosa` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `konsultasi`
--
ALTER TABLE `konsultasi`
  ADD CONSTRAINT `konsultasi_ibfk_1` FOREIGN KEY (`id_pasien`) REFERENCES `pasien` (`id_pasien`);

--
-- Constraints for table `riwayat_pasien`
--
ALTER TABLE `riwayat_pasien`
  ADD CONSTRAINT `riwayat_pasien_ibfk_1` FOREIGN KEY (`id_pasien`) REFERENCES `pasien` (`id_pasien`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
