-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 29, 2021 at 05:09 PM
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
  `keluhan` varchar(100) DEFAULT NULL,
  `resep` varchar(100) DEFAULT NULL,
  `id_pasien` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `konsultasi`
--

INSERT INTO `konsultasi` (`id_konsultasi`, `tanggal`, `keluhan`, `resep`, `id_pasien`) VALUES
('K-001', '2021-03-27', 'Nyeri gigi dibagian gusi', 'Jangan makan permen mulu', 1),
('K-002', '2021-03-09', 'sakit hati', 'jomblo aja', 2),
('K-003', '2021-03-09', 'Gigi berlubang', 'Tambal gigi', 3),
('K-004', '2021-03-15', 'Gusi bengkak', 'Kompres', 4),
('K-005', '2021-03-08', 'Ga punya gigi', 'Pasang gigi palsu', 5),
('K-006', '2021-03-31', 'Gusi berdarah', 'Obat', 6),
('K-007', '2021-03-07', 'Gigi ompong', 'Pasang gigi palsu', 7),
('K-008', '2021-03-15', 'sakit gigi', 'kompress', 8),
('K-009', '2021-03-30', 'Gusi bengkak', 'Obat', 9),
('K-010', '2021-03-14', 'Bau mulut', 'Makan permen', 10),
('K-011', '2021-03-01', 'Gusi bengkak', 'Obat kompres', 11);

-- --------------------------------------------------------

--
-- Table structure for table `pasien`
--

CREATE TABLE `pasien` (
  `id_pasien` int(11) NOT NULL,
  `nama_pasien` varchar(50) NOT NULL,
  `umur` int(3) NOT NULL,
  `jk` char(1) NOT NULL,
  `no_telp` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pasien`
--

INSERT INTO `pasien` (`id_pasien`, `nama_pasien`, `umur`, `jk`, `no_telp`) VALUES
(1, 'Annisa Jufe Aryani', 21, 'P', '083876562312'),
(2, 'Alief M Ardhi', 21, 'L', '021376542313'),
(3, 'Lukas', 21, 'L', '989237847235'),
(4, 'Sandy', 20, 'L', '89237653253'),
(5, 'Alief', 19, 'L', '872895723234'),
(6, 'Ardhi', 30, 'L', '2134236'),
(7, 'Anastasia', 12, 'P', '87238674823'),
(8, 'Puteri', 39, 'P', '8927834624'),
(9, 'Dewi', 38, 'P', '892374623'),
(10, 'Arya', 46, 'L', '8781264723'),
(11, 'Daulat', 29, 'L', '0823748234');

-- --------------------------------------------------------

--
-- Table structure for table `riwayat_pasien`
--

CREATE TABLE `riwayat_pasien` (
  `id_riwayat` varchar(10) NOT NULL,
  `riwayat` varchar(100) DEFAULT NULL,
  `id_pasien` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `riwayat_pasien`
--

INSERT INTO `riwayat_pasien` (`id_riwayat`, `riwayat`, `id_pasien`) VALUES
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
  ADD PRIMARY KEY (`id_riwayat`),
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
