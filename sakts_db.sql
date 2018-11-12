-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 12 Nov 2018 pada 18.35
-- Versi Server: 5.7.24-0ubuntu0.16.04.1
-- PHP Version: 7.2.11-1+ubuntu16.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sakts_db`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_wp`
--

CREATE TABLE `data_wp` (
  `no_layan` varchar(12) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `kecamatan` varchar(100) NOT NULL,
  `kota` varchar(100) NOT NULL,
  `kodepos` int(10) NOT NULL,
  `nohp` varchar(20) NOT NULL,
  `no_pel` varchar(100) NOT NULL,
  `date` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_wp`
--

INSERT INTO `data_wp` (`no_layan`, `nama`, `alamat`, `kecamatan`, `kota`, `kodepos`, `nohp`, `no_pel`, `date`) VALUES
('001', 'Sdd', 'Qwqw', 'Asas', 'Asas', 23232, '232323', 'MUTASI SUBYEK/OBYEK', '2018-08-15 21:33:18'),
('002', 'Adad', 'Asas', 'Alska', 'Asas', 23232, '232323', 'PEMBETULAN SK. KEBERATAN', '2018-08-18 14:21:54'),
('003', 'Sdd', 'Asas', 'Alska', 'Alaks', 23232, '232323', 'PEMBATALAN SPPT/SKP/STP', '2018-08-15 21:59:23'),
('004', 'Sdd', 'Adad', 'Alska', 'Alaks', 23232, '232323', 'PENENTUAN KEMBALI TANGGAL JATUH TEMPO', '2018-08-15 22:21:16'),
('005', 'Sdd', 'ASad', 'Alska', 'Alaks', 23232, '232323', 'PEMBETULAN SPPT/SKP/STP', '2018-08-18 14:00:35'),
('006', 'Sdd', 'Dd', 'Alska', 'Alaks', 23232, '232323', 'SALINAN SPPT/SKP', '2018-08-19 14:09:21'),
('007', 'Sdd', 'Dd', 'Alska', 'Alaks', 23232, '232323', 'SALINAN SPPT/SKP', '2018-08-19 14:09:22'),
('008', 'Sdd', 'Dd', 'Alska', 'Alaks', 23232, '232323', 'SALINAN SPPT/SKP', '2018-08-19 14:13:14'),
('009', 'Sdd', 'Dd', 'Alska', 'Alaks', 23232, '232323', 'SALINAN SPPT/SKP', '2018-08-19 14:14:38'),
('010', 'Sdd', 'Dd', 'Alska', 'Alaks', 23232, '232323', 'SALINAN SPPT/SKP', '2018-08-19 14:18:18'),
('011', 'Sdd', 'Dd', 'Alska', 'Alaks', 23232, '232323', 'SALINAN SPPT/SKP', '2018-08-19 14:22:59'),
('012', 'Sdd', 'Dd', 'Alska', 'Alaks', 23232, '232323', 'PEMBATALAN SPPT/SKP/STP', '2018-08-19 14:24:46'),
('013', 'Sdd', 'Sds', 'Asas', 'Asas', 2323, '2323', 'PEMBETULAN SPPT/SKP/STP', '2018-08-19 15:39:52'),
('014', 'Sdd', 'Adsd', 'Alska', 'Alaks', 23232, '232323', 'PEMBETULAN SPPT/SKP/STP', '2018-08-19 17:12:30'),
('015', 'Sdd', 'Adsd', 'Alska', 'Alaks', 23232, '232323', 'PEMBETULAN SPPT/SKP/STP', '2018-08-19 17:17:22'),
('016', 'Sdd', 'Adsd', 'Alska', 'Alaks', 23232, '232323', 'PEMBETULAN SPPT/SKP/STP', '2018-08-19 17:21:25'),
('017', 'Sdd', 'Adsd', 'Alska', 'Alaks', 23232, '232323', 'PEMBETULAN SPPT/SKP/STP', '2018-08-19 17:21:28'),
('018', 'Sdd', 'Adsd', 'Alska', 'Alaks', 23232, '232323', 'PEMBETULAN SPPT/SKP/STP', '2018-08-19 17:29:04'),
('019', 'Sdd', 'Adsd', 'Alska', 'Alaks', 23232, '232323', 'PEMBETULAN SPPT/SKP/STP', '2018-08-19 17:29:07'),
('020', 'Sdd', 'Adsd', 'Alska', 'Alaks', 23232, '232323', 'PEMBETULAN SPPT/SKP/STP', '2018-08-19 17:30:09'),
('021', 'Adad', 'Ada', 'Alska', 'Alaks', 23232, '232323', 'PEMBATALAN SPPT/SKP/STP', '2018-08-19 18:44:54'),
('022', 'Sdd', 'Adad', 'Asad', 'Alaks', 23232, '232323', 'PEMBETULAN SPPT/SKP/STP', '2018-08-19 23:10:39'),
('023', 'Sdd', 'Adad', 'Asad', 'Alaks', 23232, '232323', 'PEMBETULAN SPPT/SKP/STP', '2018-08-19 23:16:57'),
('024', 'Sdd', 'Adad', 'Asad', 'Alaks', 23232, '232323', 'PEMBETULAN SPPT/SKP/STP', '2018-08-19 23:17:22'),
('025', 'Sdd', 'Adad', 'Asad', 'Alaks', 23232, '232323', 'PEMBETULAN SPPT/SKP/STP', '2018-08-19 23:17:49'),
('026', 'Sdd', 'Adad', 'Asad', 'Alaks', 23232, '232323', 'PEMBETULAN SPPT/SKP/STP', '2018-08-19 23:19:41'),
('027', 'Sdd', 'Adad', 'Asad', 'Alaks', 23232, '232323', 'PEMBETULAN SPPT/SKP/STP', '2018-08-19 23:20:13'),
('028', 'Sdsd', 'Adsad', 'Asasas', 'Asas', 23232, '232323', 'PEMBETULAN SPPT/SKP/STP', '2018-08-20 22:42:23'),
('029', 'Sdsd', 'Adsad', 'Asasas', 'Asas', 23232, '232323', 'PEMBETULAN SPPT/SKP/STP', '2018-08-20 22:43:06'),
('030', 'Sdd', 'Dada', 'Alska', 'Alaks', 23232, '232323', 'PEMBATALAN SPPT/SKP/STP', '2018-08-21 20:14:47'),
('031', 'Sdd', 'Asas', 'Sas', 'Asas', 242, '242354234', 'MUTASI SUBYEK/OBYEK', '2018-08-21 20:20:27'),
('032', 'Sdd', 'Asas', 'Sas', 'Asas', 242, '242354234', 'MUTASI SUBYEK/OBYEK', '2018-08-21 20:21:21'),
('033', 'Sdd', 'Asas', 'Sas', 'Asas', 242, '242354234', 'MUTASI SUBYEK/OBYEK', '2018-08-21 20:42:10'),
('034', 'Sdd', 'Asa', 'Alska', 'Alaks', 23232, '232323', 'PEMBATALAN SPPT/SKP/STP', '2018-08-21 20:43:20'),
('035', 'Sdd', 'Asa', 'Alska', 'Alaks', 23232, '232323', 'PEMBATALAN SPPT/SKP/STP', '2018-08-21 20:44:41'),
('036', 'Sdd', 'Asa', 'Alska', 'Alaks', 23232, '232323', 'PEMBATALAN SPPT/SKP/STP', '2018-08-21 20:44:46'),
('037', 'Sdd', 'Asa', 'Alska', 'Alaks', 23232, '232323', 'PEMBATALAN SPPT/SKP/STP', '2018-08-21 20:45:30'),
('038', 'Sdd', 'Asa', 'Alska', 'Alaks', 23232, '232323', 'PEMBATALAN SPPT/SKP/STP', '2018-08-21 20:52:11'),
('039', 'Sdd', 'Asa', 'Alska', 'Alaks', 23232, '232323', 'PEMBATALAN SPPT/SKP/STP', '2018-08-21 20:58:42'),
('040', 'Sdd', 'Asa', 'Alska', 'Alaks', 23232, '232323', 'PEMBATALAN SPPT/SKP/STP', '2018-08-21 21:12:19'),
('041', 'Sdd', 'Asa', 'Alska', 'Alaks', 23232, '232323', 'PEMBATALAN SPPT/SKP/STP', '2018-08-21 21:12:49'),
('042', 'Sdd', 'Asa', 'Alska', 'Alaks', 23232, '232323', 'PEMBATALAN SPPT/SKP/STP', '2018-08-21 22:08:26'),
('043', 'Sdd', 'Asa', 'Alska', 'Alaks', 23232, '232323', 'PEMBATALAN SPPT/SKP/STP', '2018-08-21 22:13:34'),
('044', 'Sdd', 'Asa', 'Alska', 'Alaks', 23232, '232323', 'PEMBATALAN SPPT/SKP/STP', '2018-08-21 22:13:50'),
('045', 'Sdd', 'Asa', 'Alska', 'Alaks', 23232, '232323', 'PEMBATALAN SPPT/SKP/STP', '2018-08-21 22:14:01'),
('046', 'Sdd', 'Asa', 'Alska', 'Alaks', 23232, '232323', 'PEMBATALAN SPPT/SKP/STP', '2018-08-21 22:14:11'),
('047', 'Sdd', 'Asa', 'Alska', 'Alaks', 23232, '232323', 'PEMBATALAN SPPT/SKP/STP', '2018-08-21 22:14:25'),
('048', 'Sdd', 'Asa', 'Alska', 'Alaks', 23232, '232323', 'PEMBATALAN SPPT/SKP/STP', '2018-08-21 22:14:41'),
('049', 'Sdd', 'Asa', 'Alska', 'Alaks', 23232, '232323', 'PEMBATALAN SPPT/SKP/STP', '2018-08-21 22:15:06'),
('050', 'Sdd', 'Asa', 'Alska', 'Alaks', 23232, '232323', 'PEMBATALAN SPPT/SKP/STP', '2018-08-21 22:16:10'),
('051', 'Sdd', 'Asa', 'Alska', 'Alaks', 23232, '232323', 'PEMBATALAN SPPT/SKP/STP', '2018-08-21 22:16:46'),
('052', 'Sdd', 'Asa', 'Alska', 'Alaks', 23232, '232323', 'PEMBATALAN SPPT/SKP/STP', '2018-08-21 22:24:21'),
('053', 'Sdd', 'Asa', 'Alska', 'Alaks', 23232, '232323', 'PEMBATALAN SPPT/SKP/STP', '2018-08-21 22:25:09'),
('054', 'Sdd', 'VBCVBCB', 'Alska', 'MH', 23232, '232323', 'PEMBATALAN SPPT/SKP/STP', '2018-08-21 22:26:19'),
('055', 'Sdd', 'VBCVBCB', 'Alska', 'MH', 23232, '232323', 'PENUNDAAN TGL. JATUH TEMPO', '2018-08-21 22:35:26'),
('056', 'Sdd', 'VBCVBCB', 'Alska', 'MH', 23232, '232323', 'SALINAN SPPT/SKP', '2018-08-21 22:43:46'),
('057', 'Sdd', 'VBCVBCB', 'Alska', 'MH', 23232, '232323', 'SALINAN SPPT/SKP', '2018-08-21 22:44:49'),
('058', 'Sdd', 'VBCVBCB', 'Alska', 'MH', 23232, '232323', 'SALINAN SPPT/SKP', '2018-08-21 22:47:09'),
('059', 'Sdd', 'VBCVBCB', 'Alska', 'MH', 23232, '232323', 'SALINAN SPPT/SKP', '2018-08-21 22:47:28'),
('060', 'Sdd', 'VBCVBCB', 'Alska', 'MH', 23232, '232323', 'SALINAN SPPT/SKP', '2018-08-21 22:47:32'),
('061', 'Sdd', 'VBCVBCB', 'Alska', 'MH', 23232, '232323', 'SALINAN SPPT/SKP', '2018-08-21 23:56:10'),
('062', 'Sdd', 'VBCVBCB', 'Alska', 'MH', 23232, '232323', 'SALINAN SPPT/SKP', '2018-08-21 23:57:38'),
('063', 'Sdd', 'VBCVBCB', 'Alska', 'MH', 23232, '232323', 'SALINAN SPPT/SKP', '2018-08-21 23:59:05'),
('064', 'Sdd', 'VBCVBCB', 'Alska', 'MH', 23232, '232323', 'SALINAN SPPT/SKP', '2018-08-22 00:00:04'),
('065', 'Sdd', 'VBCVBCB', 'Alska', 'MH', 23232, '232323', 'SALINAN SPPT/SKP', '2018-08-22 00:00:41'),
('066', 'Sdd', 'VBCVBCB', 'Alska', 'MH', 23232, '232323', 'SALINAN SPPT/SKP', '2018-08-22 00:05:25'),
('067', 'Sdd', 'VBCVBCB', 'Alska', 'MH', 23232, '232323', 'SALINAN SPPT/SKP', '2018-08-22 00:05:53'),
('068', 'Sdd', 'VBCVBCB', 'Alska', 'MH', 23232, '232323', 'SALINAN SPPT/SKP', '2018-08-22 00:17:53'),
('069', 'Sdd', 'VBCVBCB', 'Alska', 'MH', 23232, '232323', 'SALINAN SPPT/SKP', '2018-08-22 00:20:54'),
('070', 'Sdd', 'VBCVBCB', 'Alska', 'MH', 23232, '232323', 'SALINAN SPPT/SKP', '2018-08-22 00:24:15'),
('071', 'Sdd', 'VBCVBCB', 'Alska', 'MH', 23232, '232323', 'SALINAN SPPT/SKP', '2018-08-22 00:26:43'),
('072', 'Sdd', 'VBCVBCB', 'Alska', 'MH', 23232, '232323', 'SALINAN SPPT/SKP', '2018-08-22 00:29:30'),
('073', 'Sdd', 'VBCVBCB', 'Alska', 'MH', 23232, '232323', 'SALINAN SPPT/SKP', '2018-08-22 00:31:05'),
('074', 'Sdd', 'VBCVBCB', 'Alska', 'MH', 23232, '232323', 'SALINAN SPPT/SKP', '2018-08-22 00:31:27'),
('075', 'Sdd', 'VBCVBCB', 'Alska', 'MH', 23232, '232323', 'SALINAN SPPT/SKP', '2018-08-22 00:33:35'),
('076', 'Sdd', 'VBCVBCB', 'Alska', 'MH', 23232, '232323', 'SALINAN SPPT/SKP', '2018-08-22 00:43:00'),
('077', 'Sdd', 'VBCVBCB', 'Alska', 'MH', 23232, '232323', 'SALINAN SPPT/SKP', '2018-08-22 00:43:16'),
('078', 'Sdd', 'VBCVBCB', 'Alska', 'MH', 23232, '232323', 'SALINAN SPPT/SKP', '2018-08-22 00:46:12'),
('079', 'Sdd', 'VBCVBCB', 'Alska', 'MH', 23232, '232323', 'SALINAN SPPT/SKP', '2018-08-22 00:46:26'),
('080', 'Sdd', 'VBCVBCB', 'Alska', 'MH', 23232, '232323', 'SALINAN SPPT/SKP', '2018-08-22 00:47:03'),
('081', 'Sdd', 'VBCVBCB', 'Alska', 'MH', 23232, '232323', 'SALINAN SPPT/SKP', '2018-08-22 00:48:29'),
('082', 'Sdd', 'VBCVBCB', 'Alska', 'MH', 23232, '232323', 'SALINAN SPPT/SKP', '2018-08-22 00:49:28'),
('083', 'Sdd', 'VBCVBCB', 'Alska', 'MH', 23232, '232323', 'SALINAN SPPT/SKP', '2018-08-22 00:50:25'),
('084', 'Sdd', 'VBCVBCB', 'Alska', 'MH', 23232, '232323', 'SALINAN SPPT/SKP', '2018-08-22 00:51:12'),
('085', 'Sdd', 'VBCVBCB', 'Alska', 'MH', 23232, '232323', 'SALINAN SPPT/SKP', '2018-08-22 01:28:05'),
('086', 'Sdd', 'VBCVBCB', 'Alska', 'MH', 23232, '232323', 'SALINAN SPPT/SKP', '2018-08-22 01:28:59'),
('087', 'Sdd', 'VBCVBCB', 'Alska', 'MH', 23232, '232323', 'SALINAN SPPT/SKP', '2018-08-22 01:34:03'),
('088', 'Sdd', 'VBCVBCB', 'Alska', 'MH', 23232, '232323', 'SALINAN SPPT/SKP', '2018-08-22 01:34:14'),
('089', 'Sdd', 'VBCVBCB', 'Alska', 'MH', 23232, '232323', 'SALINAN SPPT/SKP', '2018-08-22 01:39:32'),
('090', 'Sdd', 'VBCVBCB', 'Alska', 'MH', 23232, '232323', 'SALINAN SPPT/SKP', '2018-08-22 01:40:10'),
('091', 'Sdd', 'VBCVBCB', 'Alska', 'MH', 23232, '232323', 'SALINAN SPPT/SKP', '2018-08-22 01:40:29'),
('092', 'Sdd', 'VBCVBCB', 'Alska', 'MH', 23232, '232323', 'SALINAN SPPT/SKP', '2018-08-22 01:40:49'),
('093', 'Sdd', 'VBCVBCB', 'Alska', 'MH', 23232, '232323', 'SALINAN SPPT/SKP', '2018-08-22 01:41:14'),
('094', 'Sdd', 'VBCVBCB', 'Alska', 'MH', 23232, '232323', 'SALINAN SPPT/SKP', '2018-08-22 01:41:28'),
('095', 'Sdd', 'VBCVBCB', 'Alska', 'MH', 23232, '232323', 'SALINAN SPPT/SKP', '2018-08-22 01:41:55'),
('096', 'Sdd', 'VBCVBCB', 'Alska', 'MH', 23232, '232323', 'SALINAN SPPT/SKP', '2018-08-22 01:45:45'),
('097', 'Sdd', 'VBCVBCB', 'Alska', 'MH', 23232, '232323', 'SALINAN SPPT/SKP', '2018-08-22 01:46:21'),
('098', 'Sdd', 'VBCVBCB', 'Alska', 'MH', 23232, '232323', 'SALINAN SPPT/SKP', '2018-08-22 01:47:06'),
('099', 'Sdd', 'VBCVBCB', 'Alska', 'MH', 23232, '232323', 'SALINAN SPPT/SKP', '2018-08-22 01:47:54'),
('100', 'Sdd', 'VBCVBCB', 'Alska', 'MH', 23232, '232323', 'SALINAN SPPT/SKP', '2018-08-22 01:48:23'),
('101', 'Sdd', 'VBCVBCB', 'Alska', 'MH', 23232, '232323', 'SALINAN SPPT/SKP', '2018-08-22 01:50:44'),
('102', 'Sdd', 'VBCVBCB', 'Alska', 'MH', 23232, '232323', 'SALINAN SPPT/SKP', '2018-08-22 01:51:59'),
('103', 'Sdd', 'VBCVBCB', 'Alska', 'MH', 23232, '232323', 'SALINAN SPPT/SKP', '2018-08-22 01:52:13'),
('104', 'Sdd', 'VBCVBCB', 'Alska', 'MH', 23232, '232323', 'SALINAN SPPT/SKP', '2018-08-22 01:52:37'),
('105', 'Sdd', 'VBCVBCB', 'Alska', 'MH', 23232, '232323', 'SALINAN SPPT/SKP', '2018-08-22 01:54:02'),
('106', 'Sdd', 'VBCVBCB', 'Alska', 'MH', 23232, '232323', 'SALINAN SPPT/SKP', '2018-08-22 01:54:29'),
('107', 'Sdd', 'VBCVBCB', 'Alska', 'MH', 23232, '232323', 'SALINAN SPPT/SKP', '2018-08-22 01:54:50'),
('108', 'Sdd', 'VBCVBCB', 'Alska', 'MH', 23232, '232323', 'SALINAN SPPT/SKP', '2018-08-22 01:55:38'),
('109', 'Sdd', 'VBCVBCB', 'Alska', 'MH', 23232, '232323', 'SALINAN SPPT/SKP', '2018-08-22 01:55:58'),
('110', 'Sdd', 'VBCVBCB', 'Alska', 'MH', 23232, '232323', 'SALINAN SPPT/SKP', '2018-08-22 01:56:35'),
('111', 'Sdd', 'VBCVBCB', 'Alska', 'MH', 23232, '232323', 'SALINAN SPPT/SKP', '2018-08-22 01:57:33'),
('112', 'Sdd', 'VBCVBCB', 'Alska', 'MH', 23232, '232323', 'SALINAN SPPT/SKP', '2018-08-22 02:01:14'),
('113', 'Sdd', 'VBCVBCB', 'Alska', 'MH', 23232, '232323', 'SALINAN SPPT/SKP', '2018-08-22 02:02:47'),
('114', 'Sdd', 'VBCVBCB', 'Alska', 'MH', 23232, '232323', 'SALINAN SPPT/SKP', '2018-08-22 02:05:43'),
('115', 'Sdd', 'VBCVBCB', 'Alska', 'MH', 23232, '232323', 'SALINAN SPPT/SKP', '2018-08-22 02:06:26'),
('116', 'Sdd', 'VBCVBCB', 'Alska', 'MH', 23232, '232323', 'SALINAN SPPT/SKP', '2018-08-22 02:07:55'),
('117', 'Sdd', 'VBCVBCB', 'Alska', 'MH', 23232, '232323', 'SALINAN SPPT/SKP', '2018-08-22 02:08:25'),
('118', 'Sdd', 'VBCVBCB', 'Alska', 'MH', 23232, '232323', 'SALINAN SPPT/SKP', '2018-08-22 02:08:49'),
('119', 'Sdd', 'VBCVBCB', 'Alska', 'MH', 23232, '232323', 'SALINAN SPPT/SKP', '2018-08-22 02:09:21'),
('120', 'Sdd', 'VBCVBCB', 'Alska', 'MH', 23232, '232323', 'SALINAN SPPT/SKP', '2018-08-22 02:10:27'),
('121', 'Dadal', 'VBCVBCB', 'Alska', 'MH', 23232, '232323', 'PEMBATALAN SPPT/SKP/STP', '2018-08-22 02:26:30'),
('122', 'Sdd', 'Sdsd', 'Alska', 'Alaks', 23232, '232323', 'PENENTUAN KEMBALI TANGGAL JATUH TEMPO', '2018-08-22 02:44:30'),
('123', 'Dudul', 'Sdsd', 'Alska', 'Alaks', 23232, '232323', 'PEMBATALAN SPPT/SKP/STP', '2018-08-22 02:53:06'),
('124', 'Ssaf', 'Adad', 'Adad', 'Ada', 1312, '323', 'KEBERATAN PENUNJUKKAN WAJIB PAJAK', '2018-08-22 05:30:51'),
('125', 'Sdd', 'Adad', 'Aad', 'Asdad', 23232, '232323', 'SALINAN SPPT/SKP', '2018-08-22 05:31:49'),
('126', 'Sdd', 'Sdsd', 'Alska', 'Alaks', 23232, '232323', 'PEMBATALAN SPPT/SKP/STP', '2018-08-22 05:33:23'),
('127', 'Sdd', 'Sdsd', 'Alska', 'Alaks', 23232, '232323', 'PEMBATALAN SPPT/SKP/STP', '2018-08-22 05:33:56'),
('128', 'Sdsd', 'Adad', 'Adad', 'Ada', 2323, '23423', 'PEMBATALAN SPPT/SKP/STP', '2018-08-22 05:35:20'),
('129', 'Sdsd', 'Adad', 'Adad', 'Ada', 2323, '23423', 'PEMBATALAN SPPT/SKP/STP', '2018-08-22 05:35:37'),
('130', 'Ad', 'Adad', 'Adad', 'Adad', 2323, '242424', 'SALINAN SPPT/SKP', '2018-08-22 05:36:02'),
('131', 'Ad', 'Adad', 'Adad', 'Adad', 2323, '242424', 'SALINAN SPPT/SKP', '2018-08-22 05:36:24'),
('132', 'Asas', 'Asas', 'AdASDFSA', '34235ADWQ43254', 24234, '2424', 'PEMBETULAN SK. KEBERATAN', '2018-08-22 05:36:46'),
('133', 'Safsdfqs', 'Adad', 'Adas', 'Adas', 2424, '232323', 'PEMBATALAN SPPT/SKP/STP', '2018-08-22 05:45:16'),
('134', 'Kkss', 'Nsjs', 'Nsms', 'Mmzsm', 2388, '88484', 'PEMBERIAN INFORMASI PBB', '2018-10-29 00:01:08');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenis_pelayanan`
--

CREATE TABLE `jenis_pelayanan` (
  `no_pel` int(11) NOT NULL,
  `nama_pel` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jenis_pelayanan`
--

INSERT INTO `jenis_pelayanan` (`no_pel`, `nama_pel`) VALUES
(3, 'PEMBETULAN SPPT/SKP/STP'),
(2, 'MUTASI SUBYEK/OBYEK'),
(1, 'PENDAFTARAN DATA BARU'),
(4, 'PEMBATALAN SPPT/SKP/STP'),
(5, 'SALINAN SPPT/SKP'),
(6, 'KEBERATAN PENUNJUKKAN WAJIB PAJAK'),
(7, 'KEBERATAN ATAS PAJAK TERUTANG'),
(8, 'PENGURANGAN BESARNYA PAJAK TERUTANG'),
(9, 'RESTITUSI DAN KOMPENSASI'),
(10, 'PENGURANGAN DENDA ADMINISTRASI'),
(11, 'PENENTUAN KEMBALI TANGGAL JATUH TEMPO'),
(12, 'PENUNDAAN TGL. JATUH TEMPO'),
(13, 'PEMBERIAN INFORMASI PBB'),
(14, 'PEMBETULAN SK. KEBERATAN');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelayanan`
--

CREATE TABLE `pelayanan` (
  `nama` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `nohp` varchar(100) NOT NULL,
  `no_pel` int(11) NOT NULL,
  `tanggal` int(11) NOT NULL,
  `no_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `printer`
--

CREATE TABLE `printer` (
  `id` int(11) NOT NULL,
  `id_akun` int(11) NOT NULL,
  `nama_printer` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `printer`
--

INSERT INTO `printer` (`id`, `id_akun`, `nama_printer`) VALUES
(1, 3, 'Receiptprinter2'),
(2, 5, 'Receiptprinter2'),
(3, 4, 'Receiptprinter2'),
(5, 82, 'Receiptprinter4');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_akun` int(11) NOT NULL,
  `nip` int(100) DEFAULT NULL,
  `nama_depan` varchar(100) NOT NULL,
  `nama_belakang` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `level` enum('manager','karyawan') NOT NULL,
  `username` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_akun`, `nip`, `nama_depan`, `nama_belakang`, `password`, `level`, `username`) VALUES
(3, NULL, 'Fathona', 'Aji', '5887685f0a63c736cbbf45dfebb771e3', 'manager', 'kioscoding'),
(4, NULL, 'Amir', 'Faizal', '5887685f0a63c736cbbf45dfebb771e3', 'karyawan', 'amirfaizal'),
(5, 2147483647, 'Admin', 'Demo', '21232F297A57A5A743894A0E4A801FC3', 'manager', 'admin'),
(82, 2147483647, 'Galih', 'Abdullah', '8dd34e42c92428b12c0e49749e19b11f', 'karyawan', 'gwalieh');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jenis_pelayanan`
--
ALTER TABLE `jenis_pelayanan`
  ADD PRIMARY KEY (`no_pel`);

--
-- Indexes for table `pelayanan`
--
ALTER TABLE `pelayanan`
  ADD PRIMARY KEY (`no_id`);

--
-- Indexes for table `printer`
--
ALTER TABLE `printer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_akun`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `printer`
--
ALTER TABLE `printer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
