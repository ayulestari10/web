-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 28, 2016 at 05:01 AM
-- Server version: 5.6.26
-- PHP Version: 5.5.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `penerimaan`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(32) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`) VALUES
(6, 'admin', '827ccb0eea8a706c4c34a16891f84e7b');

-- --------------------------------------------------------

--
-- Table structure for table `nilai`
--

CREATE TABLE IF NOT EXISTS `nilai` (
  `no_pendaftaran` int(11) NOT NULL,
  `nilai_bing` varchar(3) NOT NULL,
  `nilai_bindo` varchar(3) NOT NULL,
  `nilai_matematika` varchar(3) NOT NULL,
  `nilai_ipa` varchar(3) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=62 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nilai`
--

INSERT INTO `nilai` (`no_pendaftaran`, `nilai_bing`, `nilai_bindo`, `nilai_matematika`, `nilai_ipa`) VALUES
(34, '', '', '', ''),
(35, '', '', '', ''),
(38, '', '', '', ''),
(39, '', '', '', ''),
(40, '', '', '', ''),
(41, '', '', '', ''),
(42, 'a', 'a', 'a', 'a'),
(43, '88', '85', '90', '90'),
(44, '90', '90', '80', '80'),
(45, '80', '80', '85', '85'),
(46, '90', '90', '80', '80'),
(61, '100', '100', '100', '100');

-- --------------------------------------------------------

--
-- Table structure for table `orang_tua`
--

CREATE TABLE IF NOT EXISTS `orang_tua` (
  `no_pendaftaran` int(11) NOT NULL,
  `nama_ayah` varchar(12) NOT NULL,
  `nama_ibu` varchar(12) NOT NULL,
  `pekerjaan_ayah` varchar(20) NOT NULL,
  `pekerjaan_ibu` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=62 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orang_tua`
--

INSERT INTO `orang_tua` (`no_pendaftaran`, `nama_ayah`, `nama_ibu`, `pekerjaan_ayah`, `pekerjaan_ibu`) VALUES
(34, '', '', '', ''),
(35, '', '', '', ''),
(38, '', '', '', ''),
(39, '', '', '', ''),
(40, '', '', '', ''),
(41, '', '', '', ''),
(42, 'a', 'a', 'Guru', 'Guru'),
(43, 'Sukarman', 'Yunida', 'TNI/POLRI', 'Karyawan Swasata'),
(44, 'Sudirman', 'Inah', 'Guru', 'Pedangang'),
(45, 'Budi Thomas', 'Lela Anisa', 'Karyawan Swa', 'Guru'),
(46, 'Efand', 'Iska Rinda', 'Guru', 'Karyawan Swa'),
(61, 'coba', 'coba', 'Petani', 'Karyawan Swasata');

-- --------------------------------------------------------

--
-- Table structure for table `sekolah`
--

CREATE TABLE IF NOT EXISTS `sekolah` (
  `no_pendaftaran` int(11) NOT NULL,
  `nisn` varchar(20) NOT NULL,
  `nama_sekolah` varchar(30) NOT NULL,
  `tahun_lulus` varchar(4) NOT NULL,
  `no_sttb` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=62 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sekolah`
--

INSERT INTO `sekolah` (`no_pendaftaran`, `nisn`, `nama_sekolah`, `tahun_lulus`, `no_sttb`) VALUES
(34, '', 'SMPN 09 Palembang', '', ''),
(35, '', 'SMPN 09 Palembang', '', ''),
(38, '', 'SMPN 10 Palembang', '', ''),
(39, '', 'SMPN 02 Palembang', '', ''),
(40, '', 'SMPN 01 Palembang', '', ''),
(41, '', 'SMPN 09 Palembang', '', ''),
(42, '', 'SMPN 09 Palembang', 'a', 'a'),
(43, '', 'SMPN 24 Palembang', '2015', '12345678910'),
(44, '', 'SMPN 24 Palembang', '2015', '1234576890'),
(45, '', 'SMPN 01 Palembang', '2016', '12345678911'),
(46, '', 'SMPN 24 Palembang', '2015', '12345678923'),
(61, 'yakcoba', 'SMPN 24 Palembang', '2015', '1010101009');

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE IF NOT EXISTS `siswa` (
  `no_pendaftaran` int(11) NOT NULL,
  `nisn` varchar(20) NOT NULL,
  `password` varchar(35) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `skor` int(3) NOT NULL,
  `hasil` varchar(15) NOT NULL,
  `foto` varchar(30) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `tempat_lahir` varchar(20) NOT NULL,
  `tanggal` varchar(2) NOT NULL,
  `bulan` varchar(2) NOT NULL,
  `tahun` varchar(4) NOT NULL,
  `alamat_lengkap` varchar(25) NOT NULL,
  `no_telp_hp` varchar(15) NOT NULL,
  `email` varchar(25) NOT NULL,
  `keahlian` varchar(12) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=62 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`no_pendaftaran`, `nisn`, `password`, `nama`, `skor`, `hasil`, `foto`, `jenis_kelamin`, `tempat_lahir`, `tanggal`, `bulan`, `tahun`, `alamat_lengkap`, `no_telp_hp`, `email`, `keahlian`) VALUES
(34, 'asdadvadgg', '11111', 'Trikurnia Sari', 100, 'Lulus', '', '', '', '', '', '', '', '', '', ''),
(35, 'fssaasasas', '11111', 'Pipit Kurnia Sari', 40, 'Tidak Lulus', '', '', '', '', '', '', '', '', '', ''),
(38, 'absabaaba', '22222', 'Aliando ', 80, 'Tidak Lulus', '', '', '', '', '', '', '', '', '', ''),
(39, 'aafsasfawf', '22222', 'Arjuna Syaputra', 0, 'Tidak Lulus', '', '', '', '', '', '', '', '', '', ''),
(40, 'asfvsrgvgvw', '33333', 'Mutia Dwi Putri', 0, 'Lulus', '', '', '', '', '', '', '', '', '', ''),
(41, 'bagagagaga', '33333', 'Azhary Arliansyah', 0, 'Lulus', '', '', '', '', '', '', '', '', '', ''),
(42, 'ayules', '827ccb0eea8a706c4c34a16891f84e7b', 'Putri Ayu', 0, 'Tidak Lulus', 'ayules.png', 'Perempuan', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'Akuntansi'),
(43, '09021191520021', '827ccb0eea8a706c4c34a16891f84e7b', 'Lutfi Mattauch', 0, 'Lulus', '09021191520021.png', 'Laki-laki', 'Palembang', '10', '08', '1998', 'Jl. AKBP H. Umar Palemban', '082380817234', 'lutfi_mattauch@gmail.com', 'Akuntansi'),
(44, '09021181520010', '074189fa65c08ecf15de3b22b757b342', 'Lifya Fitriani', 0, 'Lulus', '09021181520010.png', 'Perempuan', 'Jakarta', '28', '09', '2003', 'KM 5 Palembang', '081289706958', 'lifya_fitriani@yahoo.com', 'Akuntansi'),
(45, '09021181520012', '827ccb0eea8a706c4c34a16891f84e7b', 'Thomas', 0, 'Lulus', '09021181520012.png', 'Laki-laki', 'Baturaja', '17', '05', '2004', 'Ogan Ilir Indralaya', '082188091232', 'thomas_twin@gmail.com', 'Pemasaran'),
(46, '09021181520024', '827ccb0eea8a706c4c34a16891f84e7b', 'Ali Akbar', 0, 'Lulus', '09021181520024.png', 'Laki-laki', 'Jakarta', '05', '08', '2003', 'Bom Baru Palembang', '085327619871', 'akbar_Ali@yahoo.co.id', 'Multimedia'),
(61, 'yakcoba', 'd9c30c7b25cfa6c0a92eb4275609164b', 'Ayu', 100, 'Tidak Lulus', '61.png', 'Laki-laki', 'jarai', '09', '11', '1997', 'aa', 'a', 'a', 'Akuntansi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `nilai`
--
ALTER TABLE `nilai`
  ADD PRIMARY KEY (`no_pendaftaran`);

--
-- Indexes for table `orang_tua`
--
ALTER TABLE `orang_tua`
  ADD PRIMARY KEY (`no_pendaftaran`);

--
-- Indexes for table `sekolah`
--
ALTER TABLE `sekolah`
  ADD PRIMARY KEY (`no_pendaftaran`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`no_pendaftaran`),
  ADD UNIQUE KEY `nisn` (`nisn`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `nilai`
--
ALTER TABLE `nilai`
  MODIFY `no_pendaftaran` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=62;
--
-- AUTO_INCREMENT for table `orang_tua`
--
ALTER TABLE `orang_tua`
  MODIFY `no_pendaftaran` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=62;
--
-- AUTO_INCREMENT for table `sekolah`
--
ALTER TABLE `sekolah`
  MODIFY `no_pendaftaran` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=62;
--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
  MODIFY `no_pendaftaran` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=62;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `nilai`
--
ALTER TABLE `nilai`
  ADD CONSTRAINT `fk_nilai_siswa` FOREIGN KEY (`no_pendaftaran`) REFERENCES `siswa` (`no_pendaftaran`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `orang_tua`
--
ALTER TABLE `orang_tua`
  ADD CONSTRAINT `fk_ortu_siswa` FOREIGN KEY (`no_pendaftaran`) REFERENCES `siswa` (`no_pendaftaran`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `sekolah`
--
ALTER TABLE `sekolah`
  ADD CONSTRAINT `fk_sekolah_siswa` FOREIGN KEY (`no_pendaftaran`) REFERENCES `siswa` (`no_pendaftaran`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
