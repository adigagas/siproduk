-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 17 Jan 2021 pada 00.50
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
  `id_detail_pesanan` varchar(28) NOT NULL,
  `nama_item` varchar(128) DEFAULT NULL,
  `harga_satuan` int(11) DEFAULT NULL,
  `jumlah_beli` smallint(6) DEFAULT NULL,
  `total_harga` bigint(20) DEFAULT NULL,
  `id_pesanan` varchar(23) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_detail_pesanan`
--

INSERT INTO `tb_detail_pesanan` (`id_detail_pesanan`, `nama_item`, `harga_satuan`, `jumlah_beli`, `total_harga`, `id_pesanan`) VALUES
('202001141609097890-asdf-dhjs', 'penghapus 24/pcs', 27500, 2, 55000, '202001141609097890-asdf'),
('202001141609097890-asdf-guyd', 'Buku Tulis 10pcs/pack', 48000, 3, 144000, '202001141609097890-asdf'),
('202001141609097890-asdf-nsaj', 'Pensil 12pcs/pack', 39500, 3, 118500, '202001141609097890-asdf'),
('202001141609097890-syhs-twya', 'Notebook 10pcs/pack', 20000, 3, 60000, '202001141609097890-syhs');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_dokumen`
--

CREATE TABLE `tb_dokumen` (
  `id_dokumen` bigint(20) NOT NULL,
  `jenis_dokumen` varchar(64) DEFAULT NULL,
  `dokumen` text,
  `id_transaksi` varchar(18) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_dokumen`
--

INSERT INTO `tb_dokumen` (`id_dokumen`, `jenis_dokumen`, `dokumen`, `id_transaksi`) VALUES
(1, 'kuitansi araya', NULL, '202001141609097890'),
(2, 'spk', NULL, '202001141609097890'),
(3, 'berita acara', NULL, '202001141609097890');

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
(2, 'SHOPEE', 'https://shopee.co.id/LAPTOP-ACER-E5-475G-I3-6006U-4GB-i.161292590.7814867108', 10000, 21, '2021-01-13', '06:34:06', 2, 2),
(3, 'BUKALAPAK', 'https://www.bukalapak.com/p/perlengkapan-kantor/alat-tulis-kantor/buku-organizer/8z9tbz-jual-buku-tulis-sidu-38lbr?from=list-product&pos=0', 35000, 1000, '2020-12-29', '01:30:00', 1, 5),
(4, 'SIPLAH BLIBLI', 'https://siplah.blibli.com/product/buku-sidu-58-buku-tulis-sidu-58/SCST-0007-00037', 52000, 1000, '2020-12-29', '01:32:00', 1, 1),
(94, 'aku', '', 800000, 0, '2021-01-13', '06:34:47', 2, 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kuitansi`
--

CREATE TABLE `tb_kuitansi` (
  `id_kuitansi` bigint(20) NOT NULL,
  `nama_pembeli` varchar(32) DEFAULT NULL,
  `jumlah` bigint(20) DEFAULT NULL,
  `terbilang` text,
  `keterangan` text,
  `id_transaksi` varchar(18) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_kuitansi`
--

INSERT INTO `tb_kuitansi` (`id_kuitansi`, `nama_pembeli`, `jumlah`, `terbilang`, `keterangan`, `id_transaksi`) VALUES
(2, 'susi susanti', 377500, NULL, NULL, '202001141609097890');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pembeli`
--

CREATE TABLE `tb_pembeli` (
  `id_pembeli` varchar(18) NOT NULL,
  `nama_pembeli` varchar(64) DEFAULT NULL,
  `no_telp` varchar(13) NOT NULL,
  `provinsi` varchar(32) DEFAULT NULL,
  `kota` varchar(32) DEFAULT NULL,
  `kode_pos` varchar(5) DEFAULT NULL,
  `alamat_lengkap` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_pembeli`
--

INSERT INTO `tb_pembeli` (`id_pembeli`, `nama_pembeli`, `no_telp`, `provinsi`, `kota`, `kode_pos`, `alamat_lengkap`) VALUES
('CUST20200114160909', 'Susi Susanti', '', 'Jawa Timur', 'Malang', '65144', 'Dinoyo');

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
(2, 'Araya Computer', 'Jawa Timur', 'penjual1610665899download.png'),
(3, 'Lensa ID', 'DKI Jakarta', 'penjual1610665834kisspng-photographic-film-camera-lens-shutter-single-lens-ameeraampaposs-blog-5cba9067bf8645_1897145315557305357845.jpg'),
(4, 'Kimiafarma', 'Jawa Barat', 'penjual1610665785ads5be2724bd2f34.jpg'),
(5, 'Intishopcommcell ', 'DKI Jakarta', 'penjual1610535162toko2.jpg'),
(9, 'Toko z', '', 'penjual.jpg'),
(11, 'ini toko z', '', 'penjual1610523828toko.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pesanan`
--

CREATE TABLE `tb_pesanan` (
  `id_pesanan` varchar(23) NOT NULL,
  `nama_toko` varchar(128) DEFAULT NULL,
  `no_resi` varchar(32) DEFAULT NULL,
  `sub_total` bigint(20) DEFAULT NULL,
  `id_transaksi` varchar(18) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_pesanan`
--

INSERT INTO `tb_pesanan` (`id_pesanan`, `nama_toko`, `no_resi`, `sub_total`, `id_transaksi`) VALUES
('202001141609097890-asdf', 'Pupu Store', NULL, 317500, '202001141609097890'),
('202001141609097890-syhs', 'Jaya Media', NULL, 60000, '202001141609097890');

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
(1, 'Buku Tulis A5 58lbr 1Pack/10pcs', 'BT8634234-a7123', 'SIDU', 'Baru', '', 18, 15, 10, 1000, '', 'produk1610515567103499903_b51b271e-b48d-460a-89a6-91df19bd5cc3_945_945.jpg', 0, 1),
(2, 'Laptop Acer Aspire E5-475 Core-i3 GT940Mx RAM 4GB', 'N16Q1', 'ACER', 'Baru', '1 Tahun', 60, 20, 40, 4000, '', 'produk161051550368935_L_1.jpg', 10000, 45),
(3, 'Logitech B175 Wireless Mouse', '', ' Logitech', 'Baru', '1 Tahun', 10, 8, 18, 500, '', 'produk16105154374946430_af7e3cfe-d379-49ef-a449-a09f151a8a30_938_938.png', 0, 36),
(4, 'Sony A7 Mark II Kit FE 28-70mm F/3.5-5.6 OSS', 'SCAC-0014-00016', 'SONY', 'Bekas', '1 Tahun', 25, 25, 15, 1750, '', 'produk1610515365kit.jpg', 0, 41),
(5, 'masker', '', 'SPCE-0009-00083', 'Baru', '1 Minggu', 17, 17, 17, 25, '', 'produk1610515285covid-19_200525221700-778.jpg', 0, 48);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_transaksi`
--

CREATE TABLE `tb_transaksi` (
  `id_transaksi` varchar(18) NOT NULL,
  `tanggal` date DEFAULT NULL,
  `waktu` time DEFAULT NULL,
  `grand_total` bigint(20) DEFAULT NULL,
  `progres` tinyint(4) NOT NULL,
  `id_pembeli` varchar(18) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_transaksi`
--

INSERT INTO `tb_transaksi` (`id_transaksi`, `tanggal`, `waktu`, `grand_total`, `progres`, `id_pembeli`) VALUES
('202001141609097890', '2021-01-15', '05:00:00', 377500, 0, 'CUST20200114160909');

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
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `username`, `nama_user`, `password`, `foto_user`) VALUES
(1, 'adigagas', 'Gagas Adi', '$2y$10$4CriCxDLGFNAuDtEfeVyE.hNb/bo/1fXQhC7jRfVk1flKBUpQn84u', 'gagas1.jpg');

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
-- Indeks untuk tabel `tb_pembeli`
--
ALTER TABLE `tb_pembeli`
  ADD PRIMARY KEY (`id_pembeli`);

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
  ADD PRIMARY KEY (`id_transaksi`),
  ADD KEY `id_pembeli` (`id_pembeli`);

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
  MODIFY `id_dokumen` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tb_kategori`
--
ALTER TABLE `tb_kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT untuk tabel `tb_ketersediaan`
--
ALTER TABLE `tb_ketersediaan`
  MODIFY `id_ketersediaan` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=95;

--
-- AUTO_INCREMENT untuk tabel `tb_kuitansi`
--
ALTER TABLE `tb_kuitansi`
  MODIFY `id_kuitansi` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tb_penjual`
--
ALTER TABLE `tb_penjual`
  MODIFY `id_penjual` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `tb_produk`
--
ALTER TABLE `tb_produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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

--
-- Ketidakleluasaan untuk tabel `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  ADD CONSTRAINT `tb_transaksi_ibfk_1` FOREIGN KEY (`id_pembeli`) REFERENCES `tb_pembeli` (`id_pembeli`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
