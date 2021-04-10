-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 10, 2021 at 11:35 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

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
  `id_konsultasi` varchar(10) NOT NULL,
  `tanggal` date DEFAULT NULL,
  `anamnese` varchar(100) DEFAULT NULL,
  `nomenklatur` varchar(10) DEFAULT NULL,
  `resep` varchar(100) DEFAULT NULL,
  `keterangan` varchar(100) DEFAULT NULL,
  `id_pasien` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `konsultasi`
--

INSERT INTO `konsultasi` (`id_konsultasi`, `tanggal`, `anamnese`, `nomenklatur`, `resep`, `keterangan`, `id_pasien`) VALUES
('K-001', '2021-03-27', 'Nyeri gigi dibagian gusi', '2', 'Jangan makan permen mulu', 'nyeri bngt', 1),
('K-002', '2021-03-09', 'sakit hati', '1', 'jomblo aja', 'gusi berdarah', 2),
('K-003', '2021-03-09', 'Gigi berlubang', '4', 'Tambal gigi', 'gigi bengkak', 3),
('K-004', '2021-03-15', 'Gusi bengkak', '5', 'Kompres', 'gusi bengkak', 4),
('K-005', '2021-03-08', 'Ga punya gigi', '8', 'Pasang gigi palsu', 'gigi lobang', 5),
('K-006', '2021-03-31', 'Gusi berdarah', '1', 'Obat', 'ga punya gigi', 6),
('K-007', '2021-03-07', 'Gigi ompong', '4', 'Pasang gigi palsu', 'gatau lg bingung', 7),
('K-008', '2021-03-15', 'sakit gigi', '3', 'kompress', 'bingung', 8),
('K-009', '2021-03-30', 'Gusi bengkak', '1', 'Obat', 'data dummy doang kok', 9),
('K-010', '2021-03-14', 'Bau mulut', '6', 'Makan permen', 'gapapa kan ?', 10),
('K-011', '2021-03-01', 'Gusi bengkak', '7', 'Obat kompres', 'asal asalan gini ?', 11);

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
(1, 'Annisa Jufe Aryani', '2021-04-06', 'P', 'korpri', '083876562312'),
(2, 'Alief M Ardhi', '2021-04-07', 'L', 'sukarame', '021376542313'),
(3, 'Lukas', '2021-04-19', 'L', 'gsm', '989237847235'),
(4, 'Sandy', '2021-04-01', 'L', 'gsm', '89237653253'),
(5, 'Alief', '2021-04-26', 'L', 'palembang', '872895723234'),
(6, 'Ardhi', '2021-04-28', 'L', 'palembang\r\n', '2134236'),
(7, 'Anastasia', '2021-04-27', 'P', 'jakarta', '87238674823'),
(8, 'Puteri', '2021-04-26', 'P', 'jakarta', '8927834624'),
(9, 'Dewi', '2021-04-27', 'P', 'bogor', '892374623'),
(10, 'Arya', '2021-04-06', 'L', 'bekasi', '8781264723'),
(11, 'Daulat', '2021-04-05', 'L', 'jawa', '0823748234');

-- --------------------------------------------------------

--
-- Table structure for table `riwayat_pasien`
--

CREATE TABLE `riwayat_pasien` (
  `id_diagnosa` varchar(10) NOT NULL,
  `diagnosa` varchar(100) DEFAULT NULL,
  `id_pasien` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `riwayat_pasien`
--

INSERT INTO `riwayat_pasien` (`id_diagnosa`, `diagnosa`, `id_pasien`) VALUES
('R-001', 'Gigi berlubang', 1),
('R-002', 'Gigi copot', 2),
('R-003', 'Sakit gigi', 3),
('R-004', 'Sakit gusi', 4),
('R-005', 'Gigi lobang', 5),
('R-006', 'Gigi tambal', 6),
('R-007', 'Gigi palsu', 7),
('R-008', 'Ga punya gigi', 8),
('R-009', 'Gusi bengkak', 9),
('R-010', 'Gapnya gigi', 10),
('R-011', 'Gusi bengkak', 11);

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
-- AUTO_INCREMENT for table `pasien`
--
ALTER TABLE `pasien`
  MODIFY `id_pasien` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

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
