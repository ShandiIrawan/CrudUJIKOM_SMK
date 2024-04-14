-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 14, 2024 at 06:06 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_pln`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_bayar`
--

CREATE TABLE `tb_bayar` (
  `id_bayar` int(10) NOT NULL,
  `id_tagihan` int(10) NOT NULL,
  `id_petugas` int(10) NOT NULL,
  `tgl_bayar` varchar(10) NOT NULL,
  `jml_tagihan` varchar(10) NOT NULL,
  `abonemen` varchar(10) NOT NULL,
  `denda` varchar(10) NOT NULL,
  `biaya_admin` varchar(10) NOT NULL,
  `total_bayar` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tb_bayar`
--

INSERT INTO `tb_bayar` (`id_bayar`, `id_tagihan`, `id_petugas`, `tgl_bayar`, `jml_tagihan`, `abonemen`, `denda`, `biaya_admin`, `total_bayar`) VALUES
(25, 20, 0, '2024-04-14', '2,000,000', '7000', '0', '2,500', '2,009,500'),
(26, 18, 0, '2024-04-14', '200,000', '5000', '0', '2,500', '207,500');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pelanggan`
--

CREATE TABLE `tb_pelanggan` (
  `id_pelanggan` varchar(15) NOT NULL,
  `id_tarif` int(10) NOT NULL,
  `pelanggan` varchar(50) NOT NULL,
  `alamat` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tb_pelanggan`
--

INSERT INTO `tb_pelanggan` (`id_pelanggan`, `id_tarif`, `pelanggan`, `alamat`) VALUES
('PLG002', 4, 'Deni Fadlu', 'Petukangan Selatan, Pesanggrahan, Jakarta Selatan, DKI Jakarta\r\n'),
('PLG03', 6, 'Farhan Harun', 'Cipulir, Kebayoran Lama, Jakarta Selatan, DKI Jakarta');

-- --------------------------------------------------------

--
-- Table structure for table `tb_petugas`
--

CREATE TABLE `tb_petugas` (
  `id_petugas` int(10) NOT NULL,
  `petugas` varchar(50) NOT NULL,
  `alamat` varchar(300) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `user_name` varchar(20) NOT NULL,
  `sandi` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tb_petugas`
--

INSERT INTO `tb_petugas` (`id_petugas`, `petugas`, `alamat`, `jabatan`, `user_name`, `sandi`) VALUES
(1, 'Shandi Irawan', 'Petukangan Utara, Pesanggrahan, Jakarta Selatan, DKI Jakarta', 'ADMIN', 'admin', 'admin'),
(4, 'Rizky Maulana', 'Mekarsari, Panimbang, Pandeglang, Banten', 'KASIR', 'user', 'user'),
(7, 'Farhan Harun', 'Kebayoran Lama, Jakarta Selatan, DKI Jakarta', 'ADMIN', 'admin1', 'admin1');

-- --------------------------------------------------------

--
-- Table structure for table `tb_tagihan`
--

CREATE TABLE `tb_tagihan` (
  `id_tagihan` int(10) NOT NULL,
  `id_pelanggan` varchar(15) NOT NULL,
  `periode_tagihan` varchar(15) NOT NULL,
  `tgl_jatuh_tempo` varchar(20) NOT NULL,
  `meter_awal` int(10) NOT NULL,
  `meter_akhir` int(10) NOT NULL,
  `status_bayar` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tb_tagihan`
--

INSERT INTO `tb_tagihan` (`id_tagihan`, `id_pelanggan`, `periode_tagihan`, `tgl_jatuh_tempo`, `meter_awal`, `meter_akhir`, `status_bayar`) VALUES
(18, 'PLG002', 'Desember', '2024-04-13', 100, 200, 'LUNAS'),
(20, 'PLG03', 'April', '2024-04-13', 500, 900, 'LUNAS');

-- --------------------------------------------------------

--
-- Table structure for table `tb_tarif`
--

CREATE TABLE `tb_tarif` (
  `id_tarif` int(10) NOT NULL,
  `golongan` varchar(5) NOT NULL,
  `daya` varchar(10) NOT NULL,
  `tarifpermeter` varchar(10) NOT NULL,
  `abonemen` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tb_tarif`
--

INSERT INTO `tb_tarif` (`id_tarif`, `golongan`, `daya`, `tarifpermeter`, `abonemen`) VALUES
(4, '1', '450', '2000', '5000'),
(6, '2', '900', '5000', '7000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_bayar`
--
ALTER TABLE `tb_bayar`
  ADD PRIMARY KEY (`id_bayar`);

--
-- Indexes for table `tb_pelanggan`
--
ALTER TABLE `tb_pelanggan`
  ADD PRIMARY KEY (`id_pelanggan`),
  ADD KEY `id_tarif` (`id_tarif`);

--
-- Indexes for table `tb_petugas`
--
ALTER TABLE `tb_petugas`
  ADD PRIMARY KEY (`id_petugas`);

--
-- Indexes for table `tb_tagihan`
--
ALTER TABLE `tb_tagihan`
  ADD PRIMARY KEY (`id_tagihan`),
  ADD KEY `id_pelanggan` (`id_pelanggan`);

--
-- Indexes for table `tb_tarif`
--
ALTER TABLE `tb_tarif`
  ADD PRIMARY KEY (`id_tarif`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_bayar`
--
ALTER TABLE `tb_bayar`
  MODIFY `id_bayar` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `tb_petugas`
--
ALTER TABLE `tb_petugas`
  MODIFY `id_petugas` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tb_tagihan`
--
ALTER TABLE `tb_tagihan`
  MODIFY `id_tagihan` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `tb_tarif`
--
ALTER TABLE `tb_tarif`
  MODIFY `id_tarif` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_pelanggan`
--
ALTER TABLE `tb_pelanggan`
  ADD CONSTRAINT `tb_pelanggan_ibfk_1` FOREIGN KEY (`id_tarif`) REFERENCES `tb_tarif` (`id_tarif`);

--
-- Constraints for table `tb_tagihan`
--
ALTER TABLE `tb_tagihan`
  ADD CONSTRAINT `tb_tagihan_ibfk_1` FOREIGN KEY (`id_pelanggan`) REFERENCES `tb_pelanggan` (`id_pelanggan`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
