-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 21 Jan 2021 pada 02.25
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_perindo`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `berita`
--

CREATE TABLE `berita` (
  `id_berita` int(11) NOT NULL,
  `judul` varchar(200) NOT NULL,
  `Tanggal` date NOT NULL,
  `foto` varchar(225) NOT NULL,
  `sumber` varchar(500) NOT NULL,
  `konten` varchar(50000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `berita`
--

INSERT INTO `berita` (`id_berita`, `judul`, `Tanggal`, `foto`, `sumber`, `konten`) VALUES
(22, 'Divisi Budidaya & Pakan Perum Perindo Ciptakan Terobosan Teknologi Untuk Proyek Tambak', '2021-01-17', '22.jpg', 'perumperindo.com', '<p>JAKARTA--Perum Perindo Divisi Budidaya dan Pakan menciptakan inovasi berupa Internet of Things (IoT) di salah satu tambak udang perusahaan di Bengkayang, Kalimantan Barat. Terobosan ini memungkinkan pengambil kebijakan untuk mengelola, memonitor dan memelihara tambaknya melalui sistem IoT.</p>\r\n\r\n<p>Sebagai informasi, IoT merupakan sebuah konsep di mana konektivitas internet dapat bertukar informasi satu sama lainnya dengan benda-benda yang ada di sekelilingnya. IoT digadang-gadang sebagai &ldquo;The Next Big Thing&rdquo; di dunia informasi teknologi.</p>\r\n\r\n<p>Divisi Budidaya dan Pakan menjelaskan saat ini IoT telah diimplementasikan di site tambak Bengkayang. Aplikasi ini menjelaskan tentang kondisi salinitas, amonia, suhu, kadar keasaman (PH) hingga kadar oksigen terlarut dalam air atau Disolve Oxygen (DO) di tambak. Ke depannya, sistem IoT ini akan diimplementasikan di seluruh tambak Perum Perindo.</p>\r\n\r\n<p>Adapun tambak Perum Perindo lainnya berlokasi di Aceh Barat Daya, Karawang, Kendal, Comal, Pekalongan, Barru.</p>\r\n\r\n<p>Terobosan IoT tidak berhenti sampai di sini. Sistem ini nantinya akan dilengkapi dengan&nbsp;<em>alert mitigation</em>&nbsp;atau siaga bencana. Dengan begitu, apabila kondisi air ada pada keadaan tertentu, maka muncul pertanda di&nbsp;<em>dashboard&nbsp;</em>berupa rujukan atas tindakan yang harus dilakukan oleh teknisi Perum Perindo.</p>\r\n\r\n<p>Data yang ditarik dijadikan variable untuk tindakan yang harus dilakukan oleh teknisi. Data tersebut akan muncul di tampilan&nbsp;<em>dashboard.</em>&nbsp;Sejalan dengan hal itu, lokasi tambak akan mendapatkan&nbsp;<em>reminder</em>&nbsp;dari alat ini terkait tindakan yang harus segera dikerjakan.</p>\r\n\r\n<p>Semakin banyak data yang bisa dikumpulkan, maka kekayaan akan keilmuan budidaya bisa terserap sehingga Perum Perindo mampu melakukan&nbsp;<em>knowledge management</em>&nbsp;dengan baik.</p>\r\n\r\n<p>Dengan hal ini, siapapun vice president, manager hingga teknisinya di Unit Budidaya dan Pakan, akan tetap bisa mengelola tambaknya dengan baik.</p>\r\n\r\n<table>\r\n	<tbody>\r\n		<tr>\r\n			<td>Jakarta, 8 April 2019</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n'),
(23, 'Pameran di AS, Perindo Raih Kontrak Ekspor Rp 300 Miliar', '2021-01-18', '600525e6f0e4b.jpg', 'perumperindo.com', '<p>JAKARTA.- Perum Perikanan Indonesia (Perindo) mendapat hasil nyata dari keikutsertaan di pameran Seafood Expo North America (SENA) di Boston, Amerika Serikat (AS), 11-13 Maret 2018. BUMN Perikanan ini langsung mencatat transaksi ekspor senilai 21,9 dolar AS atau  sekitar Rp 300 miliar.</p>\r\n\r\n<p>Transaksi ekspor itu diwujudkan dalam bentuk penandatanganan kontrak antara Direktur Utama Perum Perikanan Indonesia Risyanto Suanda dan wakil dari dua perusahaan importir <em>seafood</em> dari AS, Harbor Seafood Inc senilai 16,5 juta dolar AS dan North Atlantic Inc (5,4 juta dolar AS). Penandatanganan dilakukan di <em>booth</em> Perum Perindo pada Minggu (11/3) waktu AS,  disaksikan  Menteri Kelautan dan Perikanan Susi Pudjiastuti dan Direktur Jenderal Penguatan Daya Saing Produk Kelautan Nilanto Perbowo. Dua pejabat Kementerian Kelautan dan Perikanan (KKP) itu juga hadir dalam pameran yang mempertemukan produsen dan buyer produk perikanan dari seluruh dunia itu.</p>\r\n\r\n<p>Risyanto Suanda mengaku bersyukur bisa mendapat kontrak ekspor dengan nilai relatif besar. Hal itu, lanjut dia, sejalan dengan komitmen untuk meningkatkan kontribusi dalam ekspor produk perikanan.  ‘’Nilai ekspor kami akan meningkat 30 kali lipat lebih dibanding 2017 lalu,’’ katanya.</p>\r\n\r\n<p>Dia menjelaskan, sejak 2016 lalu, Perum Perindo sudah ekspor produk olahan ikan ke negeri Paman Sam ini. Namun, nilainya masih kecil. 2016 senilai Rp 5 miliar, lalu 2017 Rp 10 miliar. Ekspor ke AS itu berupa produk olahan ikan kakap, kerapu dan mahi-mahi serta rajungan hasil produksi Perum Perindo bersama mitranya, PT Kemilau Bintang Timur (KBT) di Cirebon dan Makassar.</p>\r\n\r\n<p>Meningkatnya nilai ekspor itu, menurut Risyanto disebabkan oleh beberapa hal. Antara lain, akibat meningkatnya pasokan bahan mentah bernilai tinggi yang bisa diperoleh Perum Perindo.  Ini dampak dari kebijakan positif KKP yang melarang penangkapan ikan oleh kapal lasing, serta penangkapan yang tidak memakai alat ramah lingkungan.  ‘’Ditambah lagi, upaya kami untuk meningkatkan kualitas produk direspon positif <em>buyer </em>di luar negeri,’’ jelasnya.</p>\r\n\r\n<p> </p>\r\n');

-- --------------------------------------------------------

--
-- Struktur dari tabel `gallery`
--

CREATE TABLE `gallery` (
  `id_gambar` int(11) NOT NULL,
  `ket` varchar(100) DEFAULT NULL,
  `gambar` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `gallery`
--

INSERT INTO `gallery` (`id_gambar`, `ket`, `gambar`) VALUES
(5, 'gambar 1', '5.jpg'),
(6, 'gambar 3', 'gambar3.jpg'),
(7, 'gambar 4', '600503d359fe3.png'),
(8, 'a', 'gambar1.png'),
(9, '1', '60068de5d3a55.png'),
(10, '2', '60068df4036b2.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(11) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `istilah` varchar(255) DEFAULT NULL,
  `deskripsi` text DEFAULT NULL,
  `gambar` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`id_produk`, `nama`, `istilah`, `deskripsi`, `gambar`) VALUES
(1, 'Ikan Kakap Merah', 'Red Snapper Lutjanius Campechanus', 'produk 1', 'ikan-kakap-merah.png'),
(2, 'Ikan Tuna', 'Bluefin Tuna Thunnus Thynnus', 'produk 2', 'ikan-tuna.png'),
(3, 'Ikan Kerapu', 'Grouper Fish Epinephelinae', 'produk 3', 'ikan-kerapu.png'),
(4, 'Ikan Layur', 'Ribbon Fish Trichiurus Lepturus', 'produk 4', 'ikan-layur.png'),
(5, 'Ikan Tenggiri', 'Mackerel Scomberomorini', 'produk 5', 'ikan-tenggiri.png'),
(6, 'Ikan Albakora', 'False Albacore Euthynnus Alletteratus', 'produk 6', 'ikan-albakora.png'),
(7, 'Cumi - cumi', 'Squid Decapodiformes', 'produk 7', 'cumi.png'),
(8, 'Sotong', 'Cuttlefish Sepiida', 'produk 8', 'sotong.png'),
(9, 'Ikan Lemadang', 'Mahi-Mahi Fish Coryphaena Hippurus', 'produk 9', 'ikan-lemadang.png'),
(10, 'Ikan Cakalang', 'Skipjack Tuna Katsuwonus Pelamis', 'produk 10', 'ikan-cakalang.png'),
(11, 'Udang', 'Shrimp Penaeus Monodon', 'produk 11', 'udang.png'),
(12, 'Gurita Kemasan', 'Octopus Ball Packed Octopus Vulgaris', 'produk 12', 'gurita.png'),
(15, 'Ikan Gurame', 'Osphronemus goramy', 'produk 13', '15.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `username` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL,
  `level` enum('1','2') NOT NULL DEFAULT '2'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `nama`, `email`, `username`, `password`, `level`) VALUES
(1, 'admin', 'admin@email.com', 'admin', 'admin', '1');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indeks untuk tabel `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id_gambar`);

--
-- Indeks untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `berita`
--
ALTER TABLE `berita`
  MODIFY `id_berita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT untuk tabel `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id_gambar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
