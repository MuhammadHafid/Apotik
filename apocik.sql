-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 19 Apr 2019 pada 14.05
-- Versi Server: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `apocik`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `log`
--

CREATE TABLE `log` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `log`
--

INSERT INTO `log` (`id_admin`, `username`, `password`, `level`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin'),
(2, 'konsumen', '94727b16c2221c188d39993e39f39ac3', 'konsumen');

-- --------------------------------------------------------

--
-- Struktur dari tabel `m_karyawan`
--

CREATE TABLE `m_karyawan` (
  `nik` int(10) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `telp` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `m_karyawan`
--

INSERT INTO `m_karyawan` (`nik`, `nama`, `alamat`, `telp`) VALUES
(2, 'riadi', 'desa banaran', '085678910112'),
(3, 'ahmad rizal permadi', 'ds besuki tgl welahan kab tulungagung', '08576312345');

-- --------------------------------------------------------

--
-- Struktur dari tabel `m_obat`
--

CREATE TABLE `m_obat` (
  `tgli` date NOT NULL,
  `kode` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `stok` varchar(11) NOT NULL,
  `kategori` varchar(50) NOT NULL,
  `suplier` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `m_obat`
--

INSERT INTO `m_obat` (`tgli`, `kode`, `nama`, `stok`, `kategori`, `suplier`) VALUES
('2018-09-22', 2235, 'antalgin', '3', 'obat bebas', 'pt maju mundur'),
('2018-09-14', 2236, 'panadol', '2', 'obat dokter', 'pt maju jayaa'),
('2018-09-08', 2237, 'yg', '5', 'obat bebas', 'gyug');

-- --------------------------------------------------------

--
-- Struktur dari tabel `m_penjual`
--

CREATE TABLE `m_penjual` (
  `id_t` int(50) NOT NULL,
  `kasir` varchar(100) NOT NULL,
  `tgl` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `m_penjual`
--

INSERT INTO `m_penjual` (`id_t`, `kasir`, `tgl`) VALUES
(1, 'jono paimen', '2018-09-12'),
(2, 'jono', '2018-10-07');

-- --------------------------------------------------------

--
-- Struktur dari tabel `m_supli`
--

CREATE TABLE `m_supli` (
  `j_barang` varchar(10) NOT NULL,
  `id_bar` int(10) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `telp` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `m_supli`
--

INSERT INTO `m_supli` (`j_barang`, `id_bar`, `nama`, `alamat`, `telp`) VALUES
('69', 9, 'pt lte', 'bogor jawa tengah', '085019724');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `log`
--
ALTER TABLE `log`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `m_karyawan`
--
ALTER TABLE `m_karyawan`
  ADD PRIMARY KEY (`nik`);

--
-- Indexes for table `m_obat`
--
ALTER TABLE `m_obat`
  ADD PRIMARY KEY (`kode`);

--
-- Indexes for table `m_penjual`
--
ALTER TABLE `m_penjual`
  ADD PRIMARY KEY (`id_t`);

--
-- Indexes for table `m_supli`
--
ALTER TABLE `m_supli`
  ADD PRIMARY KEY (`id_bar`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `log`
--
ALTER TABLE `log`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `m_karyawan`
--
ALTER TABLE `m_karyawan`
  MODIFY `nik` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `m_obat`
--
ALTER TABLE `m_obat`
  MODIFY `kode` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2238;
--
-- AUTO_INCREMENT for table `m_penjual`
--
ALTER TABLE `m_penjual`
  MODIFY `id_t` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `m_supli`
--
ALTER TABLE `m_supli`
  MODIFY `id_bar` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
