-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 25, 2018 at 10:18 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_erpagilaran`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_afdeling`
--

CREATE TABLE `tb_afdeling` (
  `id_afedeling` int(11) NOT NULL,
  `nama_afdeling` varchar(50) NOT NULL,
  `luas` varchar(50) NOT NULL,
  `id_unit` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_afdeling`
--

INSERT INTO `tb_afdeling` (`id_afedeling`, `nama_afdeling`, `luas`, `id_unit`) VALUES
(1, 'Pagilaran', '1000', 1),
(2, 'Andongsili', '1000', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_blok`
--

CREATE TABLE `tb_blok` (
  `id_blok` int(11) NOT NULL,
  `nama_blok` varchar(50) NOT NULL,
  `luas` varchar(50) NOT NULL,
  `tahun_pangkas` varchar(100) NOT NULL,
  `tahun_tanam` varchar(100) NOT NULL,
  `populasi_blok` varchar(100) NOT NULL,
  `populasi_hektar` varchar(100) NOT NULL,
  `protas_hektar` varchar(100) NOT NULL,
  `klone` varchar(100) NOT NULL,
  `kemiringan` varchar(100) NOT NULL,
  `tinggi` varchar(100) NOT NULL,
  `jenis_tanah` varchar(100) NOT NULL,
  `opt` varchar(100) NOT NULL,
  `teknis_petik` varchar(100) NOT NULL,
  `gilir_petik` varchar(100) NOT NULL,
  `id_afdeling` int(11) NOT NULL,
  `id_unit` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_coa`
--

CREATE TABLE `tb_coa` (
  `no_coa` int(11) NOT NULL,
  `deskripsi` varchar(255) DEFAULT NULL,
  `saldo_debit` varchar(255) DEFAULT NULL,
  `saldo_kredit` varchar(255) DEFAULT NULL,
  `group_by` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_coa`
--

INSERT INTO `tb_coa` (`no_coa`, `deskripsi`, `saldo_debit`, `saldo_kredit`, `group_by`) VALUES
(10001, 'Kas Kebun', '1000000000', '0', 'press'),
(10002, 'Bank Mandiri\r\n', '5000000', '0', 'press');

-- --------------------------------------------------------

--
-- Table structure for table `tb_karyawan`
--

CREATE TABLE `tb_karyawan` (
  `nik_karyawan` int(11) NOT NULL,
  `no_ktp` varchar(25) NOT NULL,
  `nama_karyawan` varchar(50) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` varchar(25) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `pekerjaan` varchar(50) NOT NULL,
  `status` varchar(25) NOT NULL,
  `jabatan` varchar(25) NOT NULL,
  `tahun_masuk` date NOT NULL,
  `tahun_keluar` date NOT NULL,
  `id_afdeling` int(11) NOT NULL,
  `id_unit` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_komoditi`
--

CREATE TABLE `tb_komoditi` (
  `id_komoditi` int(11) NOT NULL,
  `nama_komoditi` varchar(25) NOT NULL,
  `deskripsi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_komoditi`
--

INSERT INTO `tb_komoditi` (`id_komoditi`, `nama_komoditi`, `deskripsi`) VALUES
(1, 'Teh', 'Teh'),
(2, 'Kakao', 'Kakao');

-- --------------------------------------------------------

--
-- Table structure for table `tb_lhkh`
--

CREATE TABLE `tb_lhkh` (
  `no_coa` int(11) NOT NULL,
  `id_unit` int(11) NOT NULL,
  `id_afdeling` int(11) NOT NULL,
  `id_blok` int(11) NOT NULL,
  `tanggal_lhkh` date NOT NULL,
  `hasil` varchar(50) NOT NULL,
  `kualitas` varchar(50) NOT NULL,
  `material` varchar(255) NOT NULL,
  `harga` varchar(50) NOT NULL,
  `id_pekerjaan` int(11) NOT NULL,
  `nik_mandor` int(11) NOT NULL,
  `nik_karyawan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_mandor`
--

CREATE TABLE `tb_mandor` (
  `nik_mandor` int(11) NOT NULL,
  `nama_mandor` varchar(255) NOT NULL,
  `status` varchar(100) NOT NULL,
  `pekerjaan` varchar(100) NOT NULL,
  `id_afdeling` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_pekerjaan`
--

CREATE TABLE `tb_pekerjaan` (
  `id_pekerjaan` int(11) NOT NULL,
  `nama_pekerjaan` varchar(255) NOT NULL,
  `deskripsi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pekerjaan`
--

INSERT INTO `tb_pekerjaan` (`id_pekerjaan`, `nama_pekerjaan`, `deskripsi`) VALUES
(1, 'Petik Gunting', 'Petik Gunting '),
(2, 'Petik Mesin', 'Petik Mesin');

-- --------------------------------------------------------

--
-- Table structure for table `tb_produksi_harian`
--

CREATE TABLE `tb_produksi_harian` (
  `id_produksi` int(11) NOT NULL,
  `no_refpro` varchar(50) NOT NULL,
  `tanggal` date NOT NULL,
  `hasil` varchar(100) NOT NULL,
  `kualitas` varchar(100) NOT NULL,
  `harga` varchar(100) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `id_komoditi` int(11) NOT NULL,
  `id_afdeling` int(11) NOT NULL,
  `id_unit` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_unit`
--

CREATE TABLE `tb_unit` (
  `id_unit` int(11) NOT NULL,
  `nama_unit` varchar(50) NOT NULL,
  `lokasi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `tb_unit`
--

INSERT INTO `tb_unit` (`id_unit`, `nama_unit`, `lokasi`) VALUES
(1, 'Pagilaran', 'Desa Blado, Pagilaran, Batang, Jawa Tengah'),
(2, 'Sidoharjo', 'Desa Blado, Pagilaran, Batang, Jawa Tengah');

-- --------------------------------------------------------

--
-- Table structure for table `tb_users`
--

CREATE TABLE `tb_users` (
  `id_users` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_afdeling`
--
ALTER TABLE `tb_afdeling`
  ADD PRIMARY KEY (`id_afedeling`),
  ADD KEY `id_unit` (`id_unit`);

--
-- Indexes for table `tb_blok`
--
ALTER TABLE `tb_blok`
  ADD PRIMARY KEY (`id_blok`),
  ADD KEY `id_afdeling` (`id_afdeling`,`id_unit`),
  ADD KEY `id_unit` (`id_unit`);

--
-- Indexes for table `tb_coa`
--
ALTER TABLE `tb_coa`
  ADD PRIMARY KEY (`no_coa`);

--
-- Indexes for table `tb_karyawan`
--
ALTER TABLE `tb_karyawan`
  ADD PRIMARY KEY (`nik_karyawan`);

--
-- Indexes for table `tb_komoditi`
--
ALTER TABLE `tb_komoditi`
  ADD PRIMARY KEY (`id_komoditi`);

--
-- Indexes for table `tb_pekerjaan`
--
ALTER TABLE `tb_pekerjaan`
  ADD PRIMARY KEY (`id_pekerjaan`);

--
-- Indexes for table `tb_produksi_harian`
--
ALTER TABLE `tb_produksi_harian`
  ADD PRIMARY KEY (`id_produksi`);

--
-- Indexes for table `tb_unit`
--
ALTER TABLE `tb_unit`
  ADD PRIMARY KEY (`id_unit`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_coa`
--
ALTER TABLE `tb_coa`
  MODIFY `no_coa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5645634;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_afdeling`
--
ALTER TABLE `tb_afdeling`
  ADD CONSTRAINT `tb_afdeling_ibfk_1` FOREIGN KEY (`id_unit`) REFERENCES `tb_unit` (`id_unit`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_blok`
--
ALTER TABLE `tb_blok`
  ADD CONSTRAINT `tb_blok_ibfk_1` FOREIGN KEY (`id_unit`) REFERENCES `tb_unit` (`id_unit`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_blok_ibfk_2` FOREIGN KEY (`id_afdeling`) REFERENCES `tb_afdeling` (`id_afedeling`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
