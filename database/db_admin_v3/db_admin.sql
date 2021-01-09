-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 09 Jan 2021 pada 01.20
-- Versi server: 10.1.37-MariaDB
-- Versi PHP: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_admin`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_detail_pesanan`
--

CREATE TABLE `tb_detail_pesanan` (
  `id_detail_pesanan` varchar(24) NOT NULL,
  `nama_item` varchar(128) DEFAULT NULL,
  `harga_satuan` int(11) DEFAULT NULL,
  `jumlah_beli` smallint(6) DEFAULT NULL,
  `total_harga` bigint(20) DEFAULT NULL,
  `id_pesanan` varchar(19) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_detail_pesanan`
--

INSERT INTO `tb_detail_pesanan` (`id_detail_pesanan`, `nama_item`, `harga_satuan`, `jumlah_beli`, `total_harga`, `id_pesanan`) VALUES
('201229070011-hdai-1', 'Monitor 19inch HP', 4000000, 10, 40000000, '201229070011-hdai'),
('201229070011-hdai-2', 'Keyboard HP Full Size', 510000, 10, 5100000, '201229070011-hdai'),
('201229070011-jhks-1', 'Meja Komputer + Kursi', 2500000, 10, 25000000, '201229070011-jhks');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_dokumen`
--

CREATE TABLE `tb_dokumen` (
  `id_dokumen` int(11) NOT NULL,
  `jenis` varchar(32) DEFAULT NULL,
  `nama_dokumen` text,
  `id_transaksi` varchar(14) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_dokumen`
--

INSERT INTO `tb_dokumen` (`id_dokumen`, `jenis`, `nama_dokumen`, `id_transaksi`) VALUES
(1, NULL, NULL, '201229070011');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kategori`
--

CREATE TABLE `tb_kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(128) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_kategori`
--

INSERT INTO `tb_kategori` (`id_kategori`, `nama_kategori`) VALUES
(1, 'Buku Tulis'),
(2, 'Agenda'),
(3, 'Buku Nota & Kwitansi'),
(4, 'Buku Telp'),
(5, 'Buku Kas'),
(6, 'Block Note'),
(7, 'Hard Cover'),
(8, 'Box File'),
(9, 'Clear Sleaves and Pocket'),
(10, 'Continuos Form'),
(11, 'Kertas Antrian'),
(12, 'Lem'),
(13, 'Penggaris'),
(14, 'Penghapus'),
(15, 'Set Meja & Kursi'),
(16, 'Pemotong Kertas'),
(17, 'Gunting'),
(18, 'Cutter'),
(19, 'Tinta Printer'),
(20, 'Tinta Refill'),
(21, 'Dispenser Isolasi'),
(22, 'Paku'),
(23, 'Amplop'),
(24, 'Goodie Bag'),
(25, 'Mesin Fax'),
(26, 'Telephone'),
(27, 'Handy Talky'),
(28, 'Aksesoris'),
(29, 'Penghancur Kertas'),
(30, 'Mesin Uang'),
(31, 'Hard Disk'),
(32, 'Flash Disk'),
(33, 'Memory Disk'),
(34, 'CD'),
(35, 'DVD'),
(36, 'Mouse'),
(37, 'Keyboard'),
(38, 'Modem'),
(39, 'Speaker'),
(40, 'Pads'),
(41, 'Camera'),
(42, 'Handphone'),
(43, 'Tablet'),
(44, 'Aksesoris Elektronik'),
(45, 'Komputer & Laptop'),
(46, 'Printer'),
(47, 'Scanner'),
(48, 'Alat Pencegah Covid 19'),
(49, 'Pulsa'),
(50, 'Paket Data'),
(51, 'Listrik'),
(52, 'PDAM'),
(53, 'Isi Ulang & Tagihan Lainnya'),
(54, 'Lainnya'),
(55, 'Jasa Fotokopi / Scan / Laminasi'),
(56, 'Jasa Cetak Dokumen / Spanduk'),
(57, 'Jasa Lainnya');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_ketersediaan`
--

CREATE TABLE `tb_ketersediaan` (
  `id_ketersediaan` bigint(20) NOT NULL,
  `situs` varchar(16) DEFAULT NULL,
  `tautan_produk` text,
  `harga_satuan` int(11) DEFAULT NULL,
  `stok` smallint(5) DEFAULT NULL,
  `log_date` date DEFAULT NULL,
  `log_time` time DEFAULT NULL,
  `id_produk` int(11) DEFAULT NULL,
  `id_penjual` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_ketersediaan`
--

INSERT INTO `tb_ketersediaan` (`id_ketersediaan`, `situs`, `tautan_produk`, `harga_satuan`, `stok`, `log_date`, `log_time`, `id_produk`, `id_penjual`) VALUES
(1, 'SIPLAH BLIBLI', 'https://siplah.blibli.com/product/acer-aspire-e5-475g/SCDB-0005-01674', 6900000, 9, '2021-01-05', '01:27:00', 2, 2),
(2, 'SHOPEE', 'https://shopee.co.id/LAPTOP-ACER-E5-475G-I3-6006U-4GB-i.161292590.7814867108', 4899000, 21, '2020-12-29', '01:27:00', 2, 2),
(3, 'BUKALAPAK', 'https://www.bukalapak.com/p/perlengkapan-kantor/alat-tulis-kantor/buku-organizer/8z9tbz-jual-buku-tulis-sidu-38lbr?from=list-product&pos=0', 35000, 1000, '2020-12-29', '01:30:00', 1, 5),
(4, 'SIPLAH BLIBLI', 'https://siplah.blibli.com/product/buku-sidu-58-buku-tulis-sidu-58/SCST-0007-00037', 52000, 1000, '2020-12-29', '01:32:00', 1, 1),
(15, 'bukalapak', 'abc', 1000, 10, '2021-01-01', '07:00:00', 12, 3),
(70, 'aku', 'aku', 2000, 5, '2021-01-06', '10:35:16', 11, 3),
(71, 'aku', 'aku', 2000, 5, '2021-01-07', '05:25:36', 11, 3),
(73, 'dia', 'aku', 5000, 20, '2021-01-07', '05:31:41', 11, 1),
(74, 'asdasd', 'fsadfsafd', 5000, 10, '2021-01-09', '12:56:01', 12, 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kuitansi`
--

CREATE TABLE `tb_kuitansi` (
  `id_kuitansi` varchar(16) NOT NULL,
  `nama` varchar(128) DEFAULT NULL,
  `jumlah` bigint(20) DEFAULT NULL,
  `terbilang` text,
  `pembayaran` text,
  `id_transaksi` varchar(14) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_penjual`
--

CREATE TABLE `tb_penjual` (
  `id_penjual` int(11) NOT NULL,
  `nama_penjual` varchar(64) DEFAULT NULL,
  `provinsi` varchar(32) DEFAULT NULL,
  `gambar_penjual` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_penjual`
--

INSERT INTO `tb_penjual` (`id_penjual`, `nama_penjual`, `provinsi`, `gambar_penjual`) VALUES
(1, 'Jaya Media', 'Jawa Timur', NULL),
(2, 'Araya Computer', 'Jawa Timur', NULL),
(3, 'Lensa ID', 'DKI Jakarta', NULL),
(4, 'Kimiafarma', 'Jawa Barat', NULL),
(5, 'Intishopcommcell ', 'DKI Jakarta', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pesanan`
--

CREATE TABLE `tb_pesanan` (
  `id_pesanan` varchar(19) NOT NULL,
  `nama_toko` varchar(128) DEFAULT NULL,
  `no_resi` varchar(32) DEFAULT NULL,
  `sub_total` int(11) DEFAULT NULL,
  `id_transaksi` varchar(14) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_pesanan`
--

INSERT INTO `tb_pesanan` (`id_pesanan`, `nama_toko`, `no_resi`, `sub_total`, `id_transaksi`) VALUES
('201229070011-hdai', 'Malang Komputer', NULL, 45100000, '201229070011'),
('201229070011-jhks', 'Ace', NULL, 25000000, '201229070011');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_produk`
--

CREATE TABLE `tb_produk` (
  `id_produk` int(11) NOT NULL,
  `nama_produk` varchar(128) DEFAULT NULL,
  `no_sku` varchar(128) DEFAULT NULL,
  `merek` varchar(32) DEFAULT NULL,
  `kondisi` varchar(32) DEFAULT NULL,
  `garansi` varchar(32) DEFAULT NULL,
  `panjang` int(11) DEFAULT NULL,
  `lebar` int(11) DEFAULT NULL,
  `tinggi` int(11) DEFAULT NULL,
  `berat` int(11) DEFAULT NULL,
  `deskripsi` text,
  `gambar` text,
  `harga_terendah` int(11) NOT NULL,
  `id_kategori` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_produk`
--

INSERT INTO `tb_produk` (`id_produk`, `nama_produk`, `no_sku`, `merek`, `kondisi`, `garansi`, `panjang`, `lebar`, `tinggi`, `berat`, `deskripsi`, `gambar`, `harga_terendah`, `id_kategori`) VALUES
(1, 'Buku Tulis A5 56lbr 1Pack/10pcs', 'BT8634234-a7123', 'SIDU', 'Baru', NULL, 18, 15, 10, 1000, 'buku tullis Sinar Dunia 56 lembar', NULL, 0, 1),
(2, 'Laptop Acer Aspire E5-475 Core-i3 GT940Mx RAM 4GB', 'N16Q1', 'ACER', 'Baru', '1 Tahun', 60, 20, 40, 4000, 'Spesifikasi\r\n<br>\r\n<br>\r\nPlatform	: Notebook\r\n<br>\r\nTipe Prosesor	: Intel Core i5\r\n<br>\r\nMemori Standar	: 4GB DDR4\r\n<br>\r\nUkuran Layar	: 14 Inch\r\n<br>\r\nResolusi Layar	: 1366 x 768\r\n<br>\r\nTipe Layar	: LED\r\n<br>\r\nAudio	: Integrated\r\n<br>\r\nSpeaker	: Integrated\r\n<br>\r\nKapasitas Penyimpanan	: 500 GB HDD\r\n<br>\r\nNetworking	: Integrated\r\n<br>\r\nWireless Network Type	: Integrated\r\n<br>\r\nWireless Bluetooth	: Integrated\r\n<br>\r\nKeyboard	: Standard Keyboard\r\n<br>\r\nRagam Input Device	: Touchpad\r\n<br>\r\nSistem Operasi	: Microsoft Windows 10\r\n<br>\r\nGaransi	: 12 Bulan dari Distributor Resmi di Indonesia\r\n<br>\r\nMemori / RAM	: 4 GB\r\n<br>\r\nKapasitas Harddisk	: 500 GB HDD\r\n<br>\r\nUkuran Layar	: 14 Inch\r\n<br>\r\nSistem Operasi	: Windows 10\r\n<br>\r\nLayar Sentuh	: Tidak', NULL, 0, 45),
(3, 'Logitech B175 Wireless Mouse', NULL, ' Logitech', 'Baru', '1 Tahun', 10, 8, 18, 500, NULL, NULL, 0, 36),
(4, 'Sony A7 Mark II Kit FE 28-70mm F/3.5-5.6 OSS', 'SCAC-0014-00016', 'SONY', 'Bekas', '1 Tahun', 25, 25, 15, 1750, '24.3MP Full-Frame Exmor CMOS Sensor\r\n<br>\r\n5-Axis SteadyShot INSIDE Stabilization\r\n<br>\r\nEnhanced Fast Hybrid AF and 5 fps Burst\r\n<br>\r\nFull HD XAVC S Video and S-Log2 Gamma\r\n<br>\r\n3.0? 1,228.8k-Dot Tilting LCD Monitor\r\n<br>\r\nXGA 2.36M-Dot OLED Electronic Viewfinder\r\n<br>\r\nBuilt-In Wi-Fi Connectivity with NFC\r\n<br>\r\nProses Pengiriman 10 Hari\r\n<br>\r\nHarga sewaktu waktu dapat berubah tanpa pemberitahuan terlebih dahulu', NULL, 0, 41),
(5, 'masker', NULL, 'SPCE-0009-00083', 'Baru', '1 Minggu', 17, 17, 17, 25, 'terbuat kain katun toyobo nyaman dan aman untuk digunakan terdapat bermacam variasi warna', NULL, 0, 48),
(11, 'Antis', '', '', '', '', 0, 0, 0, 0, '<p>fdafasdfasfd</p>', 'Warframe0002.jpg', 2000, 48),
(12, 'foto', '', '', '', '', 0, 0, 0, 0, '', 'gagas.jpg', 1000, 54);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_transaksi`
--

CREATE TABLE `tb_transaksi` (
  `id_transaksi` varchar(14) NOT NULL,
  `tanggal` date DEFAULT NULL,
  `waktu` time DEFAULT NULL,
  `nama_penerima` varchar(128) DEFAULT NULL,
  `no_telp` varchar(13) NOT NULL,
  `provinsi` varchar(32) DEFAULT NULL,
  `kota` varchar(32) DEFAULT NULL,
  `kode_pos` varchar(5) DEFAULT NULL,
  `alamat_penerima` text,
  `grand_total` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_transaksi`
--

INSERT INTO `tb_transaksi` (`id_transaksi`, `tanggal`, `waktu`, `nama_penerima`, `no_telp`, `provinsi`, `kota`, `kode_pos`, `alamat_penerima`, `grand_total`) VALUES
('201229070011', '2020-12-29', '07:00:00', 'Monika Kusuma', '081234567890', 'Jawa Timur', 'Jember', NULL, 'Perumahan Jember', 70100000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(32) DEFAULT NULL,
  `nama_user` varchar(64) DEFAULT NULL,
  `password` text,
  `foto_user` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_detail_pesanan`
--
ALTER TABLE `tb_detail_pesanan`
  ADD PRIMARY KEY (`id_detail_pesanan`),
  ADD KEY `id_pesanan` (`id_pesanan`);

--
-- Indeks untuk tabel `tb_dokumen`
--
ALTER TABLE `tb_dokumen`
  ADD PRIMARY KEY (`id_dokumen`),
  ADD KEY `id_transaksi` (`id_transaksi`);

--
-- Indeks untuk tabel `tb_kategori`
--
ALTER TABLE `tb_kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indeks untuk tabel `tb_ketersediaan`
--
ALTER TABLE `tb_ketersediaan`
  ADD PRIMARY KEY (`id_ketersediaan`),
  ADD KEY `id_produk` (`id_produk`),
  ADD KEY `id_penjual` (`id_penjual`);

--
-- Indeks untuk tabel `tb_kuitansi`
--
ALTER TABLE `tb_kuitansi`
  ADD PRIMARY KEY (`id_kuitansi`),
  ADD KEY `id_transaksi` (`id_transaksi`);

--
-- Indeks untuk tabel `tb_penjual`
--
ALTER TABLE `tb_penjual`
  ADD PRIMARY KEY (`id_penjual`);

--
-- Indeks untuk tabel `tb_pesanan`
--
ALTER TABLE `tb_pesanan`
  ADD PRIMARY KEY (`id_pesanan`),
  ADD KEY `id_transaksi` (`id_transaksi`);

--
-- Indeks untuk tabel `tb_produk`
--
ALTER TABLE `tb_produk`
  ADD PRIMARY KEY (`id_produk`),
  ADD KEY `id_kategori` (`id_kategori`);

--
-- Indeks untuk tabel `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- Indeks untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_dokumen`
--
ALTER TABLE `tb_dokumen`
  MODIFY `id_dokumen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tb_kategori`
--
ALTER TABLE `tb_kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT untuk tabel `tb_ketersediaan`
--
ALTER TABLE `tb_ketersediaan`
  MODIFY `id_ketersediaan` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT untuk tabel `tb_penjual`
--
ALTER TABLE `tb_penjual`
  MODIFY `id_penjual` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tb_produk`
--
ALTER TABLE `tb_produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tb_detail_pesanan`
--
ALTER TABLE `tb_detail_pesanan`
  ADD CONSTRAINT `tb_detail_pesanan_ibfk_1` FOREIGN KEY (`id_pesanan`) REFERENCES `tb_pesanan` (`id_pesanan`);

--
-- Ketidakleluasaan untuk tabel `tb_dokumen`
--
ALTER TABLE `tb_dokumen`
  ADD CONSTRAINT `tb_dokumen_ibfk_1` FOREIGN KEY (`id_transaksi`) REFERENCES `tb_transaksi` (`id_transaksi`);

--
-- Ketidakleluasaan untuk tabel `tb_ketersediaan`
--
ALTER TABLE `tb_ketersediaan`
  ADD CONSTRAINT `tb_ketersediaan_ibfk_1` FOREIGN KEY (`id_produk`) REFERENCES `tb_produk` (`id_produk`),
  ADD CONSTRAINT `tb_ketersediaan_ibfk_2` FOREIGN KEY (`id_penjual`) REFERENCES `tb_penjual` (`id_penjual`);

--
-- Ketidakleluasaan untuk tabel `tb_kuitansi`
--
ALTER TABLE `tb_kuitansi`
  ADD CONSTRAINT `tb_kuitansi_ibfk_1` FOREIGN KEY (`id_transaksi`) REFERENCES `tb_transaksi` (`id_transaksi`);

--
-- Ketidakleluasaan untuk tabel `tb_pesanan`
--
ALTER TABLE `tb_pesanan`
  ADD CONSTRAINT `tb_pesanan_ibfk_1` FOREIGN KEY (`id_transaksi`) REFERENCES `tb_transaksi` (`id_transaksi`);

--
-- Ketidakleluasaan untuk tabel `tb_produk`
--
ALTER TABLE `tb_produk`
  ADD CONSTRAINT `tb_produk_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `tb_kategori` (`id_kategori`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
