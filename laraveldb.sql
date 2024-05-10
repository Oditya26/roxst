-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 10 Bulan Mei 2024 pada 13.42
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laraveldb`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `halaman`
--

CREATE TABLE `halaman` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) NOT NULL,
  `isi` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `halaman`
--

INSERT INTO `halaman` (`id`, `judul`, `isi`, `created_at`, `updated_at`) VALUES
(1, 'Let\'s get to know us better', '<p>We are a Marketing Agency based in Malang, a city renowned for its breathtaking natural beauty and rich cultural diversity. Proudly entrenched within this thriving business community, we bring forth a dedicated and seasoned team offering an array of services tailored to meet your company\'s marketing and branding needs.</p>\r\n<p>One of our primary areas of expertise lies in marketing. We understand the critical importance of effective marketing strategies in enhancing your brand\'s visibility and engagement with your target audience. Whether it\'s developing comprehensive marketing campaigns, harnessing the power of digital platforms, or implementing innovative promotional strategies, we are committed to delivering results that exceed your expectations.</p><p>Our service includes:</p><ul><li>Marketing</li><li>Design</li><li>Photo &amp; Video</li></ul><p>In essence, our agency serves as a beacon of creativity and innovation in the bustling landscape of Malang\'s business sphere. With an unwavering commitment to excellence and a relentless pursuit of perfection, we stand ready to partner with you on your journey towards unparalleled success in the realm of marketing and branding.<br></p>', '2024-05-09 11:38:45', '2024-05-10 11:19:29'),
(2, 'See all the services we provide', '<div>Make sure you understand the full range of services we can provide. If you do not understand you can contact our contact email or phone number.<br></div>', '2024-05-09 11:38:58', '2024-05-10 11:30:59'),
(3, 'Contact us to confirm the agreement', '<div>Contact us via email or phone number for an agreement regarding the project to be done.<br></div>', '2024-05-09 11:39:13', '2024-05-10 11:32:36'),
(4, 'Wait for our work to be completed.', '<div>If an agreement has been made then wait for our work to be completed.<br></div>', '2024-05-09 11:39:20', '2024-05-10 11:33:51'),
(5, 'Review our work', '<div>When the work is complete you can review our work and provide revisions.<br></div>', '2024-05-09 11:39:26', '2024-05-10 11:35:04'),
(6, 'Agreement in the project work time', '<div>If the agreement has been determined then make an agreement in the project work time to us.<br></div>', '2024-05-09 11:39:33', '2024-05-10 11:38:01'),
(7, 'Payment', '<div>If you are satisfied with our work, then you can provide payment to us in the agreed payment method.<br></div>', '2024-05-09 11:39:40', '2024-05-10 11:39:18'),
(8, 'Design', 'We provide qualified graphic design services so that hopefully it can meet your expectations.', '2024-05-09 17:00:25', '2024-05-09 17:00:25'),
(9, 'Marketing', 'We provide marketing strategy services and plan in the field of marketing so that your products are more easily reached by consumers.', '2024-05-09 17:01:29', '2024-05-09 17:01:29'),
(10, 'Photo and Video', 'We provide photo and video documentation services to advertise your products.', '2024-05-09 17:02:34', '2024-05-09 17:02:34');

-- --------------------------------------------------------

--
-- Struktur dari tabel `images`
--

CREATE TABLE `images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `metadata`
--

CREATE TABLE `metadata` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `meta_key` varchar(255) NOT NULL,
  `meta_value` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `metadata`
--

INSERT INTO `metadata` (`id`, `meta_key`, `meta_value`, `created_at`, `updated_at`) VALUES
(1, '_halaman_about', '1', '2024-05-09 11:39:57', '2024-05-09 11:39:57'),
(2, '_halaman_interest', NULL, '2024-05-09 11:39:58', '2024-05-09 11:39:58'),
(3, '_halaman_award', NULL, '2024-05-09 11:39:58', '2024-05-09 11:39:58'),
(4, '_step_1', '2', '2024-05-09 11:39:58', '2024-05-09 11:39:58'),
(5, '_step_2', '3', '2024-05-09 11:39:58', '2024-05-09 11:39:58'),
(6, '_step_3', '6', '2024-05-09 11:39:58', '2024-05-10 11:40:08'),
(7, '_step_4', '4', '2024-05-09 11:39:58', '2024-05-10 11:40:08'),
(8, '_step_5', '5', '2024-05-09 11:39:58', '2024-05-10 11:40:08'),
(9, '_step_6', '7', '2024-05-09 11:39:58', '2024-05-09 11:39:58'),
(10, '_foto', '240510104640.png', '2024-05-09 11:41:23', '2024-05-10 03:46:40'),
(11, '_email', 'roxstco@gmail.com', '2024-05-09 11:41:23', '2024-05-09 11:41:23'),
(12, '_kota', 'Malang', '2024-05-09 11:41:23', '2024-05-09 11:41:23'),
(13, '_provinsi', 'Jawa Timur', '2024-05-09 11:41:23', '2024-05-09 11:41:23'),
(14, '_nohp', '+62 822-3400-0304', '2024-05-09 11:41:23', '2024-05-09 11:41:23'),
(15, '_facebook', NULL, '2024-05-09 11:41:23', '2024-05-09 11:41:23'),
(16, '_twitter', NULL, '2024-05-09 11:41:23', '2024-05-09 11:41:23'),
(17, '_linkedin', NULL, '2024-05-09 11:41:23', '2024-05-09 11:41:23'),
(18, '_github', 'ROXST', '2024-05-09 11:41:23', '2024-05-09 11:41:23'),
(19, '_instagram', 'roxst.id', '2024-05-09 11:41:23', '2024-05-09 11:41:23'),
(20, '_deskripsi', 'Empowering UMKMs through Digital Transformation', '2024-05-09 11:41:23', '2024-05-10 03:43:09'),
(21, '_service_1', '9', '2024-05-09 16:31:44', '2024-05-09 17:02:48'),
(22, '_service_2', '8', '2024-05-09 16:31:45', '2024-05-09 17:02:48'),
(23, '_service_3', '10', '2024-05-09 16:31:45', '2024-05-09 17:02:48');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2024_04_18_005906_create_halaman_table', 1),
(7, '2024_04_18_083243_create_riwayat_table', 1),
(8, '2024_04_18_193504_create_metadata_table', 1),
(9, '2024_05_08_162252_create_images_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `riwayat`
--

CREATE TABLE `riwayat` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) NOT NULL,
  `tipe` enum('experience','education') NOT NULL,
  `tgl_mulai` date NOT NULL,
  `tgl_akhir` date DEFAULT NULL,
  `info1` varchar(255) DEFAULT NULL,
  `info2` varchar(255) DEFAULT NULL,
  `info3` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `riwayat`
--

INSERT INTO `riwayat` (`id`, `judul`, `tipe`, `tgl_mulai`, `tgl_akhir`, `info1`, `info2`, `info3`, `created_at`, `updated_at`) VALUES
(12, 'masonry-portfolio-1', 'experience', '2024-05-10', NULL, 'Content Creating', '<p>We will create content for your product branding.<br></p>', NULL, '2024-05-09 18:07:26', '2024-05-10 11:05:40'),
(13, 'masonry-portfolio-2', 'experience', '2024-05-10', NULL, 'Instagram Feeds', 'Instagram feed to beautify your social media homepage.', NULL, '2024-05-09 18:18:42', '2024-05-10 11:06:39'),
(14, 'masonry-portfolio-3', 'experience', '2024-05-10', NULL, 'Instagram Story', 'This is an example of an Instagram story that we created.', NULL, '2024-05-09 18:19:14', '2024-05-10 11:07:22'),
(15, 'masonry-portfolio-4', 'experience', '2024-05-10', NULL, 'Branding', 'We will also build your brand to increase your sales.', NULL, '2024-05-09 18:31:48', '2024-05-10 11:08:42'),
(16, 'masonry-portfolio-5', 'experience', '2024-05-10', NULL, 'Instagram Stories', 'Some instagram stories will also increase your social media engagement.', NULL, '2024-05-09 18:32:08', '2024-05-10 11:12:25'),
(17, 'masonry-portfolio-6', 'experience', '2024-05-10', NULL, 'Promos Campaign & Design', 'Provide promo campaigns to increase your product sales.', NULL, '2024-05-09 18:32:31', '2024-05-10 11:13:30'),
(18, 'masonry-portfolio-7', 'experience', '2024-05-10', NULL, 'Promo Campaign', '<p>A promo campaign to entice buyers.<br></p>', NULL, '2024-05-09 18:32:57', '2024-05-10 11:14:28'),
(19, 'masonry-portfolio-8', 'experience', '2024-05-10', NULL, 'Photoshoot', 'Provide photoshoots to provide social media engagement.', NULL, '2024-05-09 18:33:24', '2024-05-10 11:15:56'),
(20, 'masonry-portfolio-9', 'experience', '2024-05-10', NULL, 'Photoshoot', 'Provide photoshoots to provide social media engagement.', NULL, '2024-05-09 18:33:51', '2024-05-10 11:16:02'),
(21, 'team-1', 'education', '2024-05-10', NULL, 'Kevin Antonio L', 'Founder', 'As the founder, I am responsible for the overall running of the agency.', '2024-05-09 18:41:56', '2024-05-10 11:23:02'),
(22, 'team-2', 'education', '2024-05-10', NULL, 'Luwis Wijaya M', 'Co-Founder', 'As a co-founder I assist the founder\'s responsibilities and help lead.', '2024-05-09 18:42:35', '2024-05-10 11:23:48'),
(23, 'team-3', 'education', '2024-05-10', NULL, 'Benedict Hebert', 'Head of Design', 'As head of design, I am responsible for all the designs that the agency produces.', '2024-05-09 18:43:11', '2024-05-10 11:24:23'),
(24, 'team-4', 'education', '2024-05-10', NULL, 'Yanuar Allan N', 'Media Department', 'As the media department, I am responsible for all the social media that the agency maintains.', '2024-05-10 03:38:30', '2024-05-10 11:25:06'),
(25, 'team-5', 'education', '2024-05-10', NULL, 'Stanley Marcellino', 'Media Department', 'As the media department, I am responsible for all the social media that the agency maintains.', '2024-05-10 03:39:10', '2024-05-10 11:25:15'),
(26, 'team-6', 'education', '2024-05-10', NULL, 'Gabriel Wima S', 'Media Department', 'As the media department, I am responsible for all the social media that the agency maintains.', '2024-05-10 03:39:38', '2024-05-10 11:25:21');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `google_id` text NOT NULL,
  `avatar` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `google_id`, `avatar`) VALUES
(1, 'Oditya Ridho', 'odityaridho@gmail.com', NULL, NULL, NULL, NULL, '2024-05-09 11:25:30', '112931748534499700859', '112931748534499700859.jpg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `halaman`
--
ALTER TABLE `halaman`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `metadata`
--
ALTER TABLE `metadata`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`email`);

--
-- Indeks untuk tabel `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `riwayat`
--
ALTER TABLE `riwayat`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `halaman`
--
ALTER TABLE `halaman`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `images`
--
ALTER TABLE `images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `metadata`
--
ALTER TABLE `metadata`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `riwayat`
--
ALTER TABLE `riwayat`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
