-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 14 Apr 2020 pada 07.00
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laundry`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_detail_transaksi`
--

CREATE TABLE `tb_detail_transaksi` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_transaksi` int(11) UNSIGNED DEFAULT NULL,
  `id_paket` int(11) UNSIGNED NOT NULL,
  `id_user` int(10) UNSIGNED NOT NULL,
  `qty` double DEFAULT NULL,
  `keterangan` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tb_detail_transaksi`
--

INSERT INTO `tb_detail_transaksi` (`id`, `id_transaksi`, `id_paket`, `id_user`, `qty`, `keterangan`, `created_at`, `updated_at`) VALUES
(1, NULL, 5, 3, 3, 'Tambah Parfum', '2020-04-13 06:19:11', '2020-04-13 06:19:11'),
(2, NULL, 3, 3, 1, NULL, '2020-04-13 06:19:16', '2020-04-13 06:19:16'),
(3, NULL, 6, 4, 5, NULL, '2020-04-13 07:06:52', '2020-04-13 07:06:52'),
(4, NULL, 9, 5, 3, 'Bungkus Plastik', '2020-04-13 07:07:50', '2020-04-13 21:42:06');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_member`
--

CREATE TABLE `tb_member` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_kelamin` enum('L','P') COLLATE utf8mb4_unicode_ci NOT NULL,
  `tlp` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tb_member`
--

INSERT INTO `tb_member` (`id`, `nama`, `alamat`, `jenis_kelamin`, `tlp`, `created_at`, `updated_at`) VALUES
(1, 'Mabud', 'Young St', 'L', '089765786543', '2020-03-07 16:43:09', '2020-03-07 16:43:09'),
(2, 'Selamet', 'Kopeng', 'L', '087765784321', '2020-03-11 11:54:47', '2020-03-11 11:54:47'),
(3, 'Gungun', 'Ciaul', 'L', '089765783543', '2020-04-11 00:26:36', '2020-04-11 00:26:36'),
(4, 'Audy', 'Cisaat', 'P', '08976578689', '2020-04-11 00:27:05', '2020-04-11 00:27:05'),
(5, 'Maudy', 'Cikondang', 'P', '087712345679', '2020-04-11 00:27:35', '2020-04-11 00:27:35'),
(6, 'Diwa', 'Pasirhalang', 'P', '087712345667', '2020-04-13 15:42:08', '2020-04-13 15:42:15');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_outlet`
--

CREATE TABLE `tb_outlet` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `tlp` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tb_outlet`
--

INSERT INTO `tb_outlet` (`id`, `nama`, `alamat`, `tlp`, `created_at`, `updated_at`) VALUES
(1, 'Mitra Outlet', 'Subangjaya', '0878987898', NULL, NULL),
(2, 'Kusuma Laundry', 'Jl. Kenari No.99', '087898789812', '2020-04-10 23:51:40', '2020-04-10 23:51:40'),
(3, 'Justin Laundry', 'Young Street', '08637814412', '2020-04-10 23:52:35', '2020-04-10 23:52:35');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_paket`
--

CREATE TABLE `tb_paket` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_outlet` int(11) UNSIGNED NOT NULL,
  `jenis` enum('kiloan','selimut','bed_cover','kaos','lain') COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_paket` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tb_paket`
--

INSERT INTO `tb_paket` (`id`, `id_outlet`, `jenis`, `nama_paket`, `harga`, `created_at`, `updated_at`) VALUES
(3, 1, 'bed_cover', 'Bersih Murah', 12000, '2020-03-07 16:42:31', '2020-03-07 16:42:31'),
(5, 1, 'kaos', 'Kaos Bersih dan Wangi', 15000, '2020-04-10 16:55:12', '2020-04-10 16:55:12'),
(6, 2, 'kiloan', 'Cuci Murah', 18000, '2020-04-11 00:04:57', '2020-04-11 00:04:57'),
(7, 2, 'selimut', 'Cuci Selimut', 11000, '2020-04-11 00:05:22', '2020-04-11 00:05:22'),
(8, 3, 'kaos', 'Kaos Harum', 13000, '2020-04-11 00:05:58', '2020-04-11 00:05:58'),
(9, 3, 'lain', 'Cuci Karpet', 19000, '2020-04-11 00:06:41', '2020-04-11 00:06:41');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_transaksi`
--

CREATE TABLE `tb_transaksi` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_outlet` int(11) UNSIGNED NOT NULL,
  `kode_invoice` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_member` int(11) UNSIGNED NOT NULL,
  `tgl` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batas_waktu` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_bayar` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `biaya_tambahan` int(11) DEFAULT NULL,
  `diskon` double DEFAULT NULL,
  `pajak` int(11) DEFAULT NULL,
  `status` enum('baru','proses','selesai','diambil') COLLATE utf8mb4_unicode_ci NOT NULL,
  `dibayar` enum('dibayar','belum_dibayar') COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_user` int(11) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tb_transaksi`
--

INSERT INTO `tb_transaksi` (`id`, `id_outlet`, `kode_invoice`, `id_member`, `tgl`, `batas_waktu`, `tgl_bayar`, `biaya_tambahan`, `diskon`, `pajak`, `status`, `dibayar`, `id_user`, `created_at`, `updated_at`) VALUES
(1, 1, 'fIO915KQfR', 1, '13-04-2020', '16-04-2020', '13-04-2020', 500, 500, 200, 'diambil', 'dibayar', 3, '2020-04-13 07:04:45', '2020-04-13 07:05:24'),
(2, 1, 'vBaQ0ICQ5E', 2, '13-04-2020', '16-04-2020', '14-04-2020', 1000, 300, 200, 'diambil', 'dibayar', 3, '2020-04-13 07:06:09', '2020-04-13 21:53:40'),
(3, 2, 'oOgRmuPbio', 4, '13-04-2020', '16-04-2020', '13-04-2020', 2500, 500, NULL, 'diambil', 'dibayar', 4, '2020-04-13 07:07:11', '2020-04-13 21:40:55'),
(4, 3, 'XOKwRcDta3', 5, '13-04-2020', '16-04-2020', '13-04-2020', 500, 100, 600, 'diambil', 'dibayar', 5, '2020-04-13 07:08:10', '2020-04-13 21:53:14'),
(5, 3, 'p5RSaLVBMv', 6, '14-04-2020', '17-04-2020', NULL, NULL, NULL, NULL, 'selesai', 'belum_dibayar', 5, '2020-04-13 21:42:11', '2020-04-13 21:54:12'),
(6, 1, 'GX6YnQ50C9', 1, '14-04-2020', '17-04-2020', '14-04-2020', NULL, NULL, NULL, 'proses', 'dibayar', 3, '2020-04-13 21:54:28', '2020-04-13 21:54:41');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_outlet` int(11) UNSIGNED NOT NULL,
  `role` enum('admin','kasir','owner') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `nama`, `username`, `password`, `id_outlet`, `role`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin1', '$2y$10$e3wHxc.YJQyTAZrt8QOsduucIMovRDnDV9v9eWWf8Rh3J1SPLJH8i', 0, 'admin', '2020-03-02 18:00:24', '2020-03-02 18:00:24'),
(3, 'Cecep', 'kasir1', '$2y$10$aYc65iscJ6LE9VvXZaPnKOOghZelTRflh9cF5vp18cb0LRAVbwsrO', 1, 'kasir', '2020-03-07 16:46:05', '2020-03-07 16:46:05'),
(4, 'Abdul', 'kasir2', '$2y$10$IGqrO13LQ0IKv/tnCuPRrOLpYIHVAQVXYcUtTwg04vZIOsXI/svfO', 2, 'kasir', '2020-03-11 11:53:04', '2020-03-11 11:53:04'),
(5, 'Maikel', 'kasir3', '$2y$10$wcMLMVByK.vYsca25UVACOnB7AhXdVd9XASKmXlUraaDDDVy0zQki', 3, 'kasir', '2020-04-11 00:15:52', '2020-04-11 00:15:52'),
(9, 'Mang Ucok', 'owner1', '$2y$10$8TjmXu4EXYa3o/2gu1zB1u/PWjtfCXmuFQ0lEssFlb4O8BSC3P6ue', 1, 'owner', '2020-04-13 03:32:02', '2020-04-13 03:32:02'),
(10, 'Kusuma Firdaus', 'owner2', '$2y$10$8Jph99v/EPx7blz9h8RoF.NB5N0rMRdSCkaFvzwpjE1Ut1iJg6ZUS', 2, 'owner', '2020-04-13 03:32:31', '2020-04-13 03:32:31'),
(11, 'Mang Justin', 'owner3', '$2y$10$l6JKx7UIFkle27Mxn2FdRe0I3K1K.ZT.avaYLOq1HbNDF4zgwuX4.', 3, 'owner', '2020-04-13 03:32:46', '2020-04-13 03:32:46');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_detail_transaksi`
--
ALTER TABLE `tb_detail_transaksi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_paket` (`id_paket`),
  ADD KEY `id_transaksi` (`id_transaksi`),
  ADD KEY `id_user` (`id_user`);

--
-- Indeks untuk tabel `tb_member`
--
ALTER TABLE `tb_member`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_outlet`
--
ALTER TABLE `tb_outlet`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_paket`
--
ALTER TABLE `tb_paket`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_outlet` (`id_outlet`);

--
-- Indeks untuk tabel `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_outlet` (`id_outlet`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_detail_transaksi`
--
ALTER TABLE `tb_detail_transaksi`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tb_member`
--
ALTER TABLE `tb_member`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `tb_outlet`
--
ALTER TABLE `tb_outlet`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tb_paket`
--
ALTER TABLE `tb_paket`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tb_detail_transaksi`
--
ALTER TABLE `tb_detail_transaksi`
  ADD CONSTRAINT `tb_detail_transaksi_ibfk_1` FOREIGN KEY (`id_paket`) REFERENCES `tb_paket` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_detail_transaksi_ibfk_2` FOREIGN KEY (`id_transaksi`) REFERENCES `tb_transaksi` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_detail_transaksi_ibfk_3` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tb_paket`
--
ALTER TABLE `tb_paket`
  ADD CONSTRAINT `tb_paket_ibfk_1` FOREIGN KEY (`id_outlet`) REFERENCES `tb_outlet` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  ADD CONSTRAINT `tb_transaksi_ibfk_1` FOREIGN KEY (`id_outlet`) REFERENCES `tb_outlet` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
