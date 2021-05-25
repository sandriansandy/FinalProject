-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 25, 2021 at 05:00 AM
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
('1', 'Dispensasi', 'Dispensasi.pdf'),
('2', 'Surat Sakit', 'Surat Sakit.jpg'),
('4', 'Proposal', 'Proposal.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `detail_presensi`
--

CREATE TABLE `detail_presensi` (
  `id_dp` int(11) NOT NULL,
  `id_presensi` int(11) NOT NULL,
  `NISN` int(50) NOT NULL,
  `status` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `detail_presensi`
--

INSERT INTO `detail_presensi` (`id_dp`, `id_presensi`, `NISN`, `status`) VALUES
(27, 2, 1, 'hadir'),
(28, 2, 1923141, 'ijin'),
(29, 3, 1, 'absen'),
(30, 3, 1923141, 'hadir'),
(31, 4, 1, 'hadir'),
(32, 4, 1923141, 'hadir'),
(33, 5, 1, 'hadir'),
(34, 5, 1923141, 'hadir');

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
(123, 'Heriadi', 'L', '1978-11-11', 'Malang', '2017-02-22', '01', 877777, '123.png', '202cb962ac59075b964b07152d234b70'),
(9090, 'Dini Handini', 'L', '1976-03-31', 'Jombang', '2015-04-04', '01', 9090909, '9090.jpg', '38f629170ac3ab74b9d6d2cc411c2f3c');

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
(1, '01', 123, 'Senin', '08:30:00.000000', '09:00:00.000000', 1),
(2, '04', 9090, 'Rabu', '12:00:00.000000', '13:00:00.000000', 1),
(3, '04', 9090, 'Senin', '12:00:00.000000', '13:00:00.000000', 2),
(5, '04', 9090, 'Rabu', '08:00:00.000000', '09:00:00.000000', 4),
(6, '01', 123, 'Kamis', '12:00:00.000000', '13:00:00.000000', 2);

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
(1, 'MIPA 1', '2020/2021'),
(2, 'MIPA 5', '2021/2022'),
(3, 'MIPA 3', '2020/2021'),
(4, 'IPS 3', '2020/2021');

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
('05', 'Kimia'),
('9', 'PJOK');

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
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `presensi`
--

INSERT INTO `presensi` (`id_presensi`, `id_jadwal`, `tanggal`) VALUES
(1, 1, '0011-11-11'),
(2, 3, '0222-02-22'),
(3, 3, '0333-03-31'),
(4, 3, '5555-05-05'),
(5, 6, '1111-11-11'),
(6, 5, '5555-05-05');

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
(1, 'Al Hadad', '2000-06-12', 2020, 'Surabaya', '2020-07-12', 'L', '1.jpg', 1, 'c4ca4238a0b923820dcc509a6f75849b'),
(1923141, 'Siti Markonah', '2000-09-13', 2020, 'Kediri', '2020-08-23', 'P', '1923141.jpg', 1, 'f1f31ed84a4705672e02b2deabedd4fb');

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
  ADD KEY `id_jadwal` (`id_jadwal`);

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
-- AUTO_INCREMENT for table `detail_presensi`
--
ALTER TABLE `detail_presensi`
  MODIFY `id_dp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

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
  ADD CONSTRAINT `presensi_ibfk_1` FOREIGN KEY (`id_jadwal`) REFERENCES `jadwal` (`id_jadwal`);

--
-- Constraints for table `siswa`
--
ALTER TABLE `siswa`
  ADD CONSTRAINT `siswa_ibfk_1` FOREIGN KEY (`id_kelas`) REFERENCES `kelas` (`id_kelas`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
