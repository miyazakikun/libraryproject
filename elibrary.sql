-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 03 Nov 2017 pada 22.32
-- Versi Server: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `elibrary`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `authors`
--

CREATE TABLE `authors` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgllahir` date NOT NULL,
  `pekerjaan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bidangpekerjaan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `detail` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `picture` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `authors`
--

INSERT INTO `authors` (`id`, `nama`, `tgllahir`, `pekerjaan`, `bidangpekerjaan`, `detail`, `picture`, `created_at`, `updated_at`) VALUES
(3, 'Mr Kucing', '2012-12-21', 'Spesialis Kucing', 'Kopral Kucing', '<p><strong>Lorem Ipsum</strong>&nbsp;adalah contoh teks atau dummy dalam industri percetakan dan penataan huruf atau typesetting. Lorem Ipsum telah menjadi standar contoh teks sejak tahun 1500an, saat seorang tukang cetak yang tidak dikenal mengambil sebuah kumpulan teks dan mengacaknya untuk menjadi sebuah buku contoh huruf. Ia tidak hanya bertahan selama 5 abad, tapi juga telah beralih ke penataan huruf elektronik, tanpa ada perubahan apapun. Ia mulai dipopulerkan pada tahun 1960 dengan diluncurkannya lembaran-lembaran Letraset yang menggunakan kalimat-kalimat dari Lorem Ipsum, dan seiring munculnya perangkat lunak Desktop Publishing seperti Aldus PageMaker juga memiliki versi Lorem Ipsum.</p>', 'f75cd9a3d7bf18c689223aa35f930e884fc4a88b15854d263b31ffeaf6ef5597.jpg', '2017-11-03 11:38:37', '2017-11-03 11:38:37'),
(4, 'Mr Meong', '2012-12-15', 'Kucing', 'Major Kucing', '<p>saya kucing</p>\r\n\r\n<p>&nbsp;</p>', '0447d8e73757629327ef7edfbe29482f94bae345cd9e749150858de2667cbdde.png', '2017-11-03 12:27:12', '2017-11-03 12:27:12'),
(5, 'asdasdasd', '2012-12-12', 'Major Kucing', 'Spesialis Major Kucing', '<p>kucign kucing</p>\r\n\r\n<p>&nbsp;</p>', '0e3e671bfd01a154ea28b0b78264568560973718_p0.png', '2017-11-03 12:27:43', '2017-11-03 12:27:43'),
(6, 'Kucing terbang', '2012-12-12', 'Penerbangan', 'Pendaratan Kucing Jantan', '<p>HOHOHOHOHOHOHOHOh kucing&nbsp;</p>', '8e13cdd366539c7675d36c429b305df861193912_p0.jpg', '2017-11-03 12:28:16', '2017-11-03 12:28:16'),
(7, 'Kucing 123', '2012-12-12', 'Berhitung', 'Kucing Perhitung', '<p>123 456 789</p>\r\n\r\n<p>&nbsp;</p>', 'e40aecd9b516ac18db2cef2ae8b9d02a62471365_p0.jpg', '2017-11-03 12:28:40', '2017-11-03 12:28:40'),
(8, 'yoyoyo', '1201-12-20', 'asdasd Job', 'Specialis asdasdasd', '<p>asdasdasdasdas yoyoyoyo</p>', 'd659400dd289cd6727c6c6c217541932E-library.png', '2017-11-03 12:55:42', '2017-11-03 12:55:42');

-- --------------------------------------------------------

--
-- Struktur dari tabel `beritas`
--

CREATE TABLE `beritas` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `picture` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `beritas`
--

INSERT INTO `beritas` (`id`, `title`, `slug`, `picture`, `content`, `created_at`, `updated_at`) VALUES
(10, 'Jual Paving Block Di Samarinda', 'jual-paving-block-di-samarinda8a5d1f47aec26d9e1ba1f0cdb50bd0a6', 'fef134def026078bd4353a91057159a862288750_p0_master1200.jpg', '<p>asdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasd</p>', '2017-10-16 07:49:54', '2017-10-16 07:49:54'),
(11, 'Kucing Terbang', 'kucing-terbang12e321c5db742aad015df115f23a8f4a', 'd58443211c647eabb20b028db8d080a4a3b224e9f05b510806240cd19f1b8a2a022.jpg', '<p>sadasdasd asd as das dasdasdasdasdasdasda asda sda sda sadas asd as dasd</p>', '2017-10-17 15:21:52', '2017-10-17 15:21:52'),
(12, 'Kucing Blablablaasdasdasd', 'kucing-blablablaasdasdasdaf5728211fac977a1b7ce2f3dfc86bb3', '330af9a2dfa8c852b4b6b9ec444f4861infinityWallpaper.jpg', '<p>asdasdsadasdasdasd ada sdas asdasdadasdasasdasasdas asdasdasdasdasdasdasd</p>', '2017-10-17 15:22:17', '2017-10-17 15:22:17'),
(13, 'Jual Paving Block Di Samarinda2', 'jual-paving-block-di-samarinda2-113e85d53b599b94a8370bafda0848bf', '7483eb64c62e520555b4dab875352c60022_Nusawungu.net.jpg', '<h2>Apakah Lorem Ipsum itu?</h2>\r\n\r\n<p><strong>Lorem Ipsum</strong>&nbsp;adalah contoh teks atau dummy dalam industri percetakan dan penataan huruf atau typesetting. Lorem Ipsum telah menjadi standar contoh teks sejak tahun 1500an, saat seorang tukang cetak yang tidak dikenal mengambil sebuah kumpulan teks dan mengacaknya untuk menjadi sebuah buku contoh huruf. Ia tidak hanya bertahan selama 5 abad, tapi juga telah beralih ke penataan huruf elektronik, tanpa ada perubahan apapun. Ia mulai dipopulerkan pada tahun 1960 dengan diluncurkannya lembaran-lembaran Letraset yang menggunakan kalimat-kalimat dari Lorem Ipsum, dan seiring munculnya perangkat lunak Desktop Publishing seperti Aldus PageMaker juga memiliki versi Lorem Ipsum.</p>', '2017-10-18 21:27:09', '2017-10-20 05:06:36'),
(18, 'asdasdasdasdsadsadsa', 'asdasdasdasdsadsadsaf4704fa8a745dc48411148fdcf4c4ea9', '122a04ed3d82d3476e2f0d35752c89aekaltim.png', '<p>sadasdsadasdasdasdasdsa</p>', '2017-10-18 22:55:34', '2017-10-18 22:55:34');

-- --------------------------------------------------------

--
-- Struktur dari tabel `books`
--

CREATE TABLE `books` (
  `id` int(10) UNSIGNED NOT NULL,
  `judul` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggalterbit` date NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `file` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `picture` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `count` int(100) DEFAULT '0',
  `author_id` int(100) UNSIGNED NOT NULL,
  `kategori_id` int(100) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `books`
--

INSERT INTO `books` (`id`, `judul`, `tanggalterbit`, `deskripsi`, `file`, `picture`, `count`, `author_id`, `kategori_id`, `created_at`, `updated_at`) VALUES
(6, 'Buku 1', '2012-12-21', '<p>Buku 1 2 &nbsp;3</p>', 'ab82ccd27e5334609c17155e18735ea9utf-8\'\'e-library.pdf', 'af631fc91ee6d757ff09e91c313075f1E-library.png', 0, 3, 2, '2017-11-03 12:41:12', '2017-11-03 12:41:13');

-- --------------------------------------------------------

--
-- Struktur dari tabel `favoritauthors`
--

CREATE TABLE `favoritauthors` (
  `id` int(10) UNSIGNED NOT NULL,
  `author_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `galleries`
--

CREATE TABLE `galleries` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `galleries`
--

INSERT INTO `galleries` (`id`, `title`, `created_at`, `updated_at`) VALUES
(3, 'asdasdasd', '2017-11-02 18:24:58', '2017-11-02 18:24:58');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategoris`
--

CREATE TABLE `kategoris` (
  `id` int(10) UNSIGNED NOT NULL,
  `kategori` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `count` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `kategoris`
--

INSERT INTO `kategoris` (`id`, `kategori`, `count`, `created_at`, `updated_at`) VALUES
(2, 'Buku', 0, '2017-11-03 12:37:38', '2017-11-03 12:37:38'),
(3, 'Buletin', 0, '2017-11-03 12:37:43', '2017-11-03 12:37:43'),
(4, 'Dokumen', 0, '2017-11-03 12:37:47', '2017-11-03 12:37:47'),
(5, 'Kliping', 0, '2017-11-03 12:37:52', '2017-11-03 12:37:52'),
(6, 'Artikel Jurnal', 0, '2017-11-03 12:37:58', '2017-11-03 12:37:58'),
(7, 'Manual', 0, '2017-11-03 12:38:02', '2017-11-03 12:38:02');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2017_11_01_170036_create_books_table', 1),
(2, '2017_11_03_053125_create_kategoris_table', 2),
(3, '2017_11_03_072255_create_kategoribukus_table', 2),
(4, '2017_11_03_172939_create_authors_table', 2),
(5, '2017_11_03_174332_create_favoritauthors_table', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `picgalleries`
--

CREATE TABLE `picgalleries` (
  `id` int(10) UNSIGNED NOT NULL,
  `gallery_id` int(10) UNSIGNED NOT NULL,
  `picture` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `picgalleries`
--

INSERT INTO `picgalleries` (`id`, `gallery_id`, `picture`, `created_at`, `updated_at`) VALUES
(77, 3, '5bd0f82e1872f0396f9d1cb6b1f21339E-library.png', '2017-11-02 18:25:26', '2017-11-02 18:25:26');

-- --------------------------------------------------------

--
-- Struktur dari tabel `slideshows`
--

CREATE TABLE `slideshows` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `picture` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `slideshows`
--

INSERT INTO `slideshows` (`id`, `title`, `picture`, `created_at`, `updated_at`) VALUES
(1, 'asdasdasdadasdasdasdasdasdasdasdasdasdasdasdasdasd', '4e60d81ef1130055f78be65f0c7f513einfinityWallpaper.jpg', '2017-10-19 19:37:02', '2017-10-19 19:37:02');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'admin',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin', 'admin@dawn.com', '$2y$10$QWG5d9RGiwlXyIdtCVXq1udXVSzYehXPHXJjPvcPwiy.d8/cpXxq6', 'admin', 'hcKp15QX0kpTPWOOK9Xb93oK3a12ERsXZYSvar6U0XL2kp8lejAZcep5dxXi', '2017-10-29 01:33:22', '2017-11-02 08:56:26'),
(2, 'librarian 1', 'librarian', 'librarian@elibrary.com', '$2y$10$NFMQSmb7jaksHxCA1IIGneve9kpg6aD98FSrn35/0aumilOulo7Ha', 'librarian', NULL, '2017-11-03 13:04:31', '2017-11-03 13:04:31');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `authors`
--
ALTER TABLE `authors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `beritas`
--
ALTER TABLE `beritas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `favoritauthors`
--
ALTER TABLE `favoritauthors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategoris`
--
ALTER TABLE `kategoris`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `picgalleries`
--
ALTER TABLE `picgalleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slideshows`
--
ALTER TABLE `slideshows`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `authors`
--
ALTER TABLE `authors`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `beritas`
--
ALTER TABLE `beritas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `favoritauthors`
--
ALTER TABLE `favoritauthors`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `kategoris`
--
ALTER TABLE `kategoris`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `picgalleries`
--
ALTER TABLE `picgalleries`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT for table `slideshows`
--
ALTER TABLE `slideshows`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
