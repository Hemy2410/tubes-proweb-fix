-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 19, 2019 at 11:23 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `2dp3akb`
--

-- --------------------------------------------------------

--
-- Table structure for table `keluargaberencana`
--

CREATE TABLE `keluargaberencana` (
  `id` int(11) NOT NULL,
  `nokk` varchar(255) NOT NULL,
  `namakepkel` varchar(255) NOT NULL,
  `jumlah` int(255) NOT NULL,
  `kelurahan` varchar(255) NOT NULL,
  `rt` int(255) NOT NULL,
  `kecamatan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `keluargaberencana`
--

INSERT INTO `keluargaberencana` (`id`, `nokk`, `namakepkel`, `jumlah`, `kelurahan`, `rt`, `kecamatan`) VALUES
(1, '6471042705980001', 'Wira Maulana', 4, 'Karang Joang', 5, 'Balikpapan Utara'),
(2, '6471042905240003', 'Didi Febrian Putra', 3, 'Sepinggan Baru', 10, 'Balikpapan Selatan');

-- --------------------------------------------------------

--
-- Table structure for table `kepegawaian`
--

CREATE TABLE `kepegawaian` (
  `id` int(11) NOT NULL,
  `nip` varchar(255) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `tempatLahir` varchar(100) NOT NULL,
  `tanggalLahir` date NOT NULL,
  `nomor` varchar(20) NOT NULL,
  `jk` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kepegawaian`
--

INSERT INTO `kepegawaian` (`id`, `nip`, `nama`, `tempatLahir`, `tanggalLahir`, `nomor`, `jk`) VALUES
(1, '19790215 199903 2 005', 'Didi Febrian Putra', 'Balikpapan', '1979-02-15', '086589267290', 'Laki-Laki'),
(2, '19821024 199903 2 005', 'Hemy Octantia', 'Balikpapan', '1982-10-24', '085250326125', 'Perempuan'),
(3, '19711016 199803 2 005', 'Dinda Dwi Ananda', 'Balikpapan', '1971-10-16', '08588299800', 'Perempuan');

-- --------------------------------------------------------

--
-- Table structure for table `kepengurusan`
--

CREATE TABLE `kepengurusan` (
  `id` int(11) NOT NULL,
  `bidang` varchar(255) NOT NULL,
  `posisi` varchar(255) NOT NULL,
  `nip` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kepengurusan`
--

INSERT INTO `kepengurusan` (`id`, `bidang`, `posisi`, `nip`) VALUES
(1, 'Perempuan', 'Posisi A', '19821024 199903 2 005'),
(2, 'Perlindungan Anak', 'Posisi B', '19790215 199903 2 005'),
(3, 'Perlindungan Anak', 'Posisi B', '19711016 199803 2 005');

-- --------------------------------------------------------

--
-- Table structure for table `laporan`
--

CREATE TABLE `laporan` (
  `nama` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `jk` varchar(255) NOT NULL,
  `nomor` varchar(255) NOT NULL,
  `ktp` varchar(255) NOT NULL,
  `deskripsi` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `laporan`
--

INSERT INTO `laporan` (`nama`, `alamat`, `jk`, `nomor`, `ktp`, `deskripsi`) VALUES
('Nadine Octaraisya', 'Graha Indah Blok F No.22 Balikpapan Utara', 'Perempuan', '089876589521', '6471037108770002', 'Mengalami kejadian kekerasan pada lokasi ................ tanggal 20 Mei 2019 pukul 22:00. Pelaku memiliki ciri-ciri........');

-- --------------------------------------------------------

--
-- Table structure for table `pelapor`
--

CREATE TABLE `pelapor` (
  `NIK` varchar(20) NOT NULL,
  `Nama` varchar(255) NOT NULL,
  `jenisKelamin` varchar(20) NOT NULL,
  `tempatLahir` varchar(30) NOT NULL,
  `tanggalLahir` date NOT NULL,
  `nomor` varchar(20) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `password` varchar(266) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pelapor`
--

INSERT INTO `pelapor` (`NIK`, `Nama`, `jenisKelamin`, `tempatLahir`, `tanggalLahir`, `nomor`, `alamat`, `password`) VALUES
('6471037108770002', 'Nadine Octaraisya', 'Perempuan', 'Balikpapan', '1999-10-15', '082128759576', 'Graha indah Blok F No.22 Balikpapan Utara', '111222333'),
('6471042705980001', 'Wira Maulana', 'Laki-Laki', 'Banjarmasin', '1998-05-27', '082156890862', 'Jl. Sei Wain RT. 33 No.19 Balikpapan Utara', 'wiraaaaaaaaaaa');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `nip` varchar(30) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nama_pegawai` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`nip`, `password`, `nama_pegawai`) VALUES
('19711016 199803 2 005', '11111111', 'Dinda Dwi Ananda'),
('19821024 199903 2 005', 'test1234', 'Hemy Octantia');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `keluargaberencana`
--
ALTER TABLE `keluargaberencana`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `kepegawaian`
--
ALTER TABLE `kepegawaian`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kepengurusan`
--
ALTER TABLE `kepengurusan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `laporan`
--
ALTER TABLE `laporan`
  ADD PRIMARY KEY (`nama`);

--
-- Indexes for table `pelapor`
--
ALTER TABLE `pelapor`
  ADD PRIMARY KEY (`NIK`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`nip`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `keluargaberencana`
--
ALTER TABLE `keluargaberencana`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `kepegawaian`
--
ALTER TABLE `kepegawaian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `kepengurusan`
--
ALTER TABLE `kepengurusan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
