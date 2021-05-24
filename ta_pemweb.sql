-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 24, 2021 at 12:30 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ta_pemweb`
--

-- --------------------------------------------------------

--
-- Table structure for table `berkas`
--

CREATE TABLE `berkas` (
  `id_berkas` varchar(100) NOT NULL,
  `jenis_berkas` varchar(255) NOT NULL,
  `nama_file` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `berkas`
--

INSERT INTO `berkas` (`id_berkas`, `jenis_berkas`, `nama_file`) VALUES
('1', 'Dispensasi', 'Dispensasi.png');

-- --------------------------------------------------------

--
-- Table structure for table `detail_presensi`
--

CREATE TABLE `detail_presensi` (
  `id_dp` int(11) NOT NULL,
  `id_presensi` int(11) NOT NULL,
  `NISN` int(50) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `guru`
--

CREATE TABLE `guru` (
  `NIP` int(20) NOT NULL,
  `nama_guru` varchar(255) DEFAULT NULL,
  `jenis_kelamin` varchar(20) DEFAULT NULL,
  `TTL` date DEFAULT NULL,
  `Alamat` varchar(255) DEFAULT NULL,
  `tgl_masuk` date DEFAULT NULL,
  `id_mapel` varchar(50) NOT NULL,
  `no_hp` int(50) DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `guru`
--

INSERT INTO `guru` (`NIP`, `nama_guru`, `jenis_kelamin`, `TTL`, `Alamat`, `tgl_masuk`, `id_mapel`, `no_hp`, `foto`, `password`) VALUES
(123, 'Heri Wahana', 'L', '1111-11-11', 'Kediri', '2222-02-22', '03', 8777777, '123.jpg', '6812af90c6a1bbec134e323d7e70587b');

-- --------------------------------------------------------

--
-- Table structure for table `jadwal`
--

CREATE TABLE `jadwal` (
  `id_jadwal` int(11) NOT NULL,
  `id_mapel` varchar(50) NOT NULL,
  `NIP` int(11) NOT NULL,
  `hari` varchar(11) NOT NULL,
  `jam_mulai` time(6) NOT NULL,
  `jam_selesai` time(6) NOT NULL,
  `id_kelas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jadwal`
--

INSERT INTO `jadwal` (`id_jadwal`, `id_mapel`, `NIP`, `hari`, `jam_mulai`, `jam_selesai`, `id_kelas`) VALUES
(1, '03', 123, 'Senin', '08:00:00.000000', '09:00:00.000000', 2);

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `id_kelas` int(11) NOT NULL,
  `nama_kelas` varchar(255) DEFAULT NULL,
  `tahun_ajaran` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`id_kelas`, `nama_kelas`, `tahun_ajaran`) VALUES
(2, 'IPA 2', '2021/2022'),
(3, 'MIPA 3', '2020/2021');

-- --------------------------------------------------------

--
-- Table structure for table `layanan`
--

CREATE TABLE `layanan` (
  `id_form` int(11) NOT NULL,
  `NISN` int(50) NOT NULL,
  `id_berkas` varchar(100) NOT NULL,
  `tanggal` date NOT NULL,
  `form` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `layanan`
--

INSERT INTO `layanan` (`id_form`, `NISN`, `id_berkas`, `tanggal`, `form`) VALUES
(12, 1923141, 'Dispensasi', '2021-05-10', ''),
(13, 1923141, '1', '1212-12-12', '1_1923141_1212-12-12.png'),
(14, 1923141, '1', '1111-11-11', '1_1923141_1111-11-11.png');

-- --------------------------------------------------------

--
-- Table structure for table `mapel`
--

CREATE TABLE `mapel` (
  `id_mapel` varchar(50) NOT NULL,
  `Nama_mapel` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mapel`
--

INSERT INTO `mapel` (`id_mapel`, `Nama_mapel`) VALUES
('01', 'Biologi'),
('02', 'Matematika'),
('03', 'Fisika'),
('04', 'Bahasa Inggris'),
('9', 'Penjaskes');

-- --------------------------------------------------------

--
-- Table structure for table `nilai`
--

CREATE TABLE `nilai` (
  `id_nilai` int(11) NOT NULL,
  `NISN` int(50) NOT NULL,
  `id_mapel` varchar(50) NOT NULL,
  `semester` int(11) NOT NULL,
  `T1` int(11) NOT NULL,
  `T2` int(11) NOT NULL,
  `UTS` int(11) NOT NULL,
  `T3` int(11) NOT NULL,
  `T4` int(11) NOT NULL,
  `UAS` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `presensi`
--

CREATE TABLE `presensi` (
  `id_presensi` int(11) NOT NULL,
  `id_jadwal` int(11) NOT NULL,
  `id_kelas` int(11) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `NISN` int(50) NOT NULL,
  `Nama` varchar(100) DEFAULT NULL,
  `TTL` date DEFAULT NULL,
  `Angkatan` int(100) DEFAULT NULL,
  `Alamat` varchar(255) DEFAULT NULL,
  `tgl_masuk` date DEFAULT NULL,
  `jenis_kelamin` varchar(10) DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `id_kelas` int(11) DEFAULT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`NISN`, `Nama`, `TTL`, `Angkatan`, `Alamat`, `tgl_masuk`, `jenis_kelamin`, `foto`, `id_kelas`, `password`) VALUES
(1923141, 'Siti Markonah', '1111-11-11', 2020, 'Kediri', '0222-02-22', 'L', '1923141.jpg', 2, 'f1f31ed84a4705672e02b2deabedd4fb');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `berkas`
--
ALTER TABLE `berkas`
  ADD PRIMARY KEY (`id_berkas`);

--
-- Indexes for table `detail_presensi`
--
ALTER TABLE `detail_presensi`
  ADD PRIMARY KEY (`id_dp`),
  ADD KEY `id_presensi` (`id_presensi`),
  ADD KEY `NISN` (`NISN`);

--
-- Indexes for table `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`NIP`),
  ADD KEY `id_mapel` (`id_mapel`);

--
-- Indexes for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`id_jadwal`),
  ADD KEY `id_mapel` (`id_mapel`),
  ADD KEY `NIP` (`NIP`),
  ADD KEY `id_kelas` (`id_kelas`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id_kelas`);

--
-- Indexes for table `layanan`
--
ALTER TABLE `layanan`
  ADD PRIMARY KEY (`id_form`),
  ADD KEY `NISN` (`NISN`);

--
-- Indexes for table `mapel`
--
ALTER TABLE `mapel`
  ADD PRIMARY KEY (`id_mapel`);

--
-- Indexes for table `nilai`
--
ALTER TABLE `nilai`
  ADD PRIMARY KEY (`id_nilai`),
  ADD KEY `NISN` (`NISN`),
  ADD KEY `id_mapel` (`id_mapel`);

--
-- Indexes for table `presensi`
--
ALTER TABLE `presensi`
  ADD PRIMARY KEY (`id_presensi`),
  ADD KEY `id_jadwal` (`id_jadwal`),
  ADD KEY `id_kelas` (`id_kelas`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`NISN`),
  ADD KEY `id_kelas` (`id_kelas`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `layanan`
--
ALTER TABLE `layanan`
  MODIFY `id_form` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `nilai`
--
ALTER TABLE `nilai`
  MODIFY `id_nilai` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `detail_presensi`
--
ALTER TABLE `detail_presensi`
  ADD CONSTRAINT `detail_presensi_ibfk_1` FOREIGN KEY (`id_presensi`) REFERENCES `presensi` (`id_presensi`),
  ADD CONSTRAINT `detail_presensi_ibfk_2` FOREIGN KEY (`NISN`) REFERENCES `siswa` (`NISN`);

--
-- Constraints for table `guru`
--
ALTER TABLE `guru`
  ADD CONSTRAINT `guru_ibfk_1` FOREIGN KEY (`id_mapel`) REFERENCES `mapel` (`id_mapel`);

--
-- Constraints for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD CONSTRAINT `jadwal_ibfk_3` FOREIGN KEY (`id_mapel`) REFERENCES `mapel` (`id_mapel`),
  ADD CONSTRAINT `jadwal_ibfk_4` FOREIGN KEY (`id_kelas`) REFERENCES `kelas` (`id_kelas`);

--
-- Constraints for table `layanan`
--
ALTER TABLE `layanan`
  ADD CONSTRAINT `layanan_ibfk_1` FOREIGN KEY (`NISN`) REFERENCES `siswa` (`NISN`);

--
-- Constraints for table `nilai`
--
ALTER TABLE `nilai`
  ADD CONSTRAINT `nilai_ibfk_1` FOREIGN KEY (`NISN`) REFERENCES `siswa` (`NISN`),
  ADD CONSTRAINT `nilai_ibfk_2` FOREIGN KEY (`id_mapel`) REFERENCES `mapel` (`id_mapel`);

--
-- Constraints for table `presensi`
--
ALTER TABLE `presensi`
  ADD CONSTRAINT `presensi_ibfk_1` FOREIGN KEY (`id_jadwal`) REFERENCES `jadwal` (`id_jadwal`),
  ADD CONSTRAINT `presensi_ibfk_2` FOREIGN KEY (`id_kelas`) REFERENCES `kelas` (`id_kelas`);

--
-- Constraints for table `siswa`
--
ALTER TABLE `siswa`
  ADD CONSTRAINT `siswa_ibfk_1` FOREIGN KEY (`id_kelas`) REFERENCES `kelas` (`id_kelas`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
