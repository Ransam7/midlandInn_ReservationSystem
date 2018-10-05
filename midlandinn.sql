-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 05, 2018 at 12:13 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `midlandinn`
--

-- --------------------------------------------------------

--
-- Table structure for table `amenities`
--

CREATE TABLE `amenities` (
  `id` int(10) UNSIGNED NOT NULL,
  `amenity_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amenity_status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `amenities`
--

INSERT INTO `amenities` (`id`, `amenity_name`, `amenity_status`, `created_at`, `updated_at`) VALUES
(6, 'Air Condition', 'UNAVAILABLE', NULL, '2018-09-26 22:43:12'),
(7, 'Cable TV', 'AVAILABLE', NULL, '2018-09-25 15:46:50'),
(8, 'Bathroom', 'AVAILABLE', NULL, '2018-09-25 15:37:41'),
(9, 'WiFi', 'AVAILABLE', NULL, '2018-09-25 15:46:58'),
(10, 'Mini-refrigerator', 'UNAVAILABLE', '2018-09-25 04:15:49', '2018-09-25 15:44:18'),
(11, 'Golden Shower', 'UNAVAILABLE', '2018-09-25 23:23:48', '2018-09-25 23:24:14'),
(12, 'Air Condition', 'ACTIVE', NULL, NULL),
(13, 'Cable TV', 'ACTIVE', NULL, NULL),
(14, 'Bathroom', 'ACTIVE', NULL, NULL),
(15, 'WiFi', 'ACTIVE', NULL, NULL),
(16, 'virtual pool', 'UNAVAILABLE', '2018-09-26 23:59:45', '2018-09-27 00:00:05');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_09_19_114525_create_user_roles_table', 2),
(4, '2018_09_19_114840_update_users_table', 3),
(5, '2018_09_19_124854_update_user_role_table', 4),
(6, '2018_09_21_172133_update_user_roles_table', 5),
(7, '2018_09_21_194235_update_users_table', 6),
(8, '2018_09_21_195149_update_users_table', 7),
(9, '2018_09_23_004705_create_rooms_table', 8),
(10, '2018_09_23_022137_add_room_rates_to_rooms_table', 9),
(11, '2018_09_23_202540_create_room_types_table', 10),
(12, '2018_09_23_205711_add_room_type_status_room_types_table', 11),
(13, '2018_09_23_223844_update_users_table', 12),
(14, '2018_09_23_224002_update_rooms_table', 12),
(15, '2018_09_23_224213_update_rooms_table', 13),
(16, '2018_09_24_091631_create_amenities_table', 14),
(17, '2018_09_24_173851_drop_column_in_rooms_table', 15),
(18, '2018_09_24_175654_drop_column_in_room_type_table', 16),
(19, '2018_09_24_180014_update_room_types_table', 17),
(20, '2018_09_24_180639_update_rooms_table', 18),
(21, '2018_09_26_001612_update_room_types_table', 19),
(22, '2018_09_26_174616_create_room_reservation_table', 20),
(23, '2018_09_29_113901_update_room_reservation_table', 21),
(24, '2018_09_29_115544_drop_room_reservation_table', 21),
(25, '2018_09_29_115729_create_room_reservations_table', 22);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `id` int(10) UNSIGNED NOT NULL,
  `room_number` int(11) NOT NULL,
  `room_type_id` int(11) NOT NULL,
  `room_status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`id`, `room_number`, `room_type_id`, `room_status`, `created_at`, `updated_at`) VALUES
(3, 2, 1, 'AVAILABLE', NULL, '2018-09-25 15:23:25'),
(4, 3, 1, 'AVAILABLE', NULL, '2018-09-25 15:23:14'),
(5, 5, 2, 'AVAILABLE', '2018-09-22 22:00:44', '2018-09-25 15:23:34'),
(6, 10, 2, 'AVAILABLE', '2018-09-23 01:18:57', '2018-09-25 15:23:46'),
(7, 11, 1, 'AVAILABLE', '2018-09-23 05:55:14', '2018-09-25 15:23:53'),
(8, 13, 2, 'AVAILABLE', '2018-09-23 05:57:27', '2018-09-25 15:24:00'),
(11, 9, 1, 'AVAILABLE', '2018-09-23 15:38:57', '2018-09-25 15:23:40'),
(12, 15, 1, 'AVAILABLE', '2018-09-24 10:49:41', '2018-09-25 15:24:05'),
(13, 10, 4, 'UNAVAILABLE', '2018-09-25 23:21:56', '2018-09-25 23:22:43'),
(14, 1, 1, 'AVAILABLE', '2018-09-26 22:37:31', '2018-09-26 22:37:31');

-- --------------------------------------------------------

--
-- Table structure for table `room_reservations`
--

CREATE TABLE `room_reservations` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `room_type_id` int(11) NOT NULL,
  `room_id` int(11) NOT NULL,
  `numb_of_room` int(11) NOT NULL,
  `est_time_arrival` time NOT NULL,
  `check_in_date` date NOT NULL,
  `check_out_date` date NOT NULL,
  `payment` decimal(8,2) NOT NULL,
  `transac_date` datetime NOT NULL,
  `transac_employee` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `transac_code` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `room_reservations`
--

INSERT INTO `room_reservations` (`id`, `user_id`, `room_type_id`, `room_id`, `numb_of_room`, `est_time_arrival`, `check_in_date`, `check_out_date`, `payment`, `transac_date`, `transac_employee`, `transac_code`, `created_at`, `updated_at`) VALUES
(1, 15, 2, 5, 1, '12:03:31', '2018-09-29', '2018-09-29', '250.00', '2018-09-29 12:03:31', 'moderator', 213, NULL, NULL),
(2, 17, 1, 11, 1, '14:11:05', '2018-10-01', '2018-10-01', '250.00', '2018-10-01 14:11:05', 'moderator', 23, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `room_types`
--

CREATE TABLE `room_types` (
  `id` int(10) UNSIGNED NOT NULL,
  `room_type_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `room_type_desc` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `room_type_amenities` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `room_type_rates` decimal(8,2) NOT NULL,
  `room_type_person_occupy` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `room_type_image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `room_type_status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `room_types`
--

INSERT INTO `room_types` (`id`, `room_type_name`, `created_at`, `updated_at`, `room_type_desc`, `room_type_amenities`, `room_type_rates`, `room_type_person_occupy`, `room_type_image`, `room_type_status`) VALUES
(1, 'Premium', NULL, '2018-10-03 23:43:50', 'loremasdasdasd asdasd', 'Cable TV , WiFi', '300.00', '2', '39959625_2186702744940928_8334231673923174400_n_1537875229.jpg', 'AVAILABLE'),
(2, 'Regular', NULL, '2018-10-05 01:33:09', 'sssssasd asdkasdjasd  asdasd', 'WiFi', '500.00', '2', '30d32dcd27107984c839f09d02dba3ea_1538731989.jpg', 'AVAILABLE'),
(3, 'Supreme', '2018-09-24 21:52:24', '2018-09-25 04:24:49', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.', 'Air Condition , WiFi', '200.00', '2', '38829193_1798941970202373_7143511016842723328_n_1537875566.jpg', 'AVAILABLE'),
(4, 'Classic', '2018-09-25 04:17:28', '2018-09-25 16:58:24', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod', 'Air Condition , Bathroom , WiFi', '500.00', '2', '12742806_969014813174592_4061353785359122541_n_1537877848.jpg', 'AVAILABLE'),
(5, 'bobo', '2018-09-26 03:29:47', '2018-10-03 01:28:24', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod', 'WiFi', '500.00', '2', '302306_179107915498623_1587327373_n_1537961387.jpg', 'AVAILABLE'),
(6, 'Single', '2018-09-26 22:42:27', '2018-09-26 22:42:27', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod', 'Air Condition , Cable TV', '1000.00', '2', '302306_179107915498623_1587327373_n_1538030546.jpg', 'AVAILABLE');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `fname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_role_id` int(11) NOT NULL,
  `lname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact` bigint(20) NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `user_role_id`, `lname`, `username`, `contact`, `address`) VALUES
(15, 'Ransom', 'ransomcailing7@gmail.com', NULL, '$2y$10$a0gJiLy1n1a3gwoYEnNxy.rYIlzpcO6P9rhxzhgJ1/LT3iBjPp0QK', 'T0pb1EeorwgDXHs62GfTYzQ03Uz62SZUVwVi9IiweT0lUsTJUvGdWduA8jqN', NULL, '2018-09-21 12:19:46', 1, 'Cailing', 'ransomcailing', 9123456789, 'Buhangin Davao City'),
(17, 'Angelie', 'angelie24@gmail.com', NULL, '$2y$10$CEhe99vuKpQpy4hB9sJVn.saV.Kpx76m6nnnruZbK3lkrmgpu75uu', '2RaG6WMNCqZqU5XnjyQ2zhA7ftV8rlRkaVZ2kXNtzovzp0bI1wQhZCpwXo8y', NULL, '2018-09-21 13:49:11', 2, 'Tangon', 'angelie', 9231234123, 'panacan Davao City'),
(20, 'Charles', 'charles@gmail.com', NULL, '$2y$10$YujV5CaZBxFKcTnJd1trmeZ0xUlQB.gQWS6vXxiP81Gc7ZPwLgfNW', 'U6Ov29SYgdDVtuvYPlCCtcaMLwDlKzfk1OOGQchqBfvpMOco9g4x08y62vnb', '2018-09-21 20:41:15', '2018-09-21 20:41:15', 3, 'leguarda', 'charles', 9182736451, 'Ecoland Davao City'),
(21, 'Ricky', 'ricky@gmail.com', NULL, '$2y$10$mJsbZkFxwBaj3Q6YzOIiJOxSDcttxF3oLTcs4XN764ZC54ddOnzFu', 'qXgbcGuzIjz3vo35HFTc5F5s3NL2nFAv42QBvTV33xTu5NPcIfpOdjRPlFXJ', '2018-09-26 01:21:08', '2018-09-26 01:21:08', 3, 'Lanchinebre', 'rick', 9182736541, 'Sandawa Davao City'),
(22, 'Rick', 'charlesleguarda@gmail.com', NULL, '$2y$10$P7scPO7QLFKtSg3LDbR9CuqHijsxI78ZKj.bf2tB2EYZyGNdYJqy.', 'CzfBISeVMjeHOPmJl0Y7rstktCWueb1uchp6ijq4FGTqrTKKdgN6bgFJntZF', '2018-09-26 03:21:04', '2018-09-26 03:21:04', 3, 'leguarda', 'natsume17', 9182736541, 'Ecoland Davao City'),
(23, 'Charles', 'charles20@gmail.com', NULL, '$2y$10$7V8sY1T/VEa/guH299b9ruOwJmRmOgV93FrPQSceDar9A1ZJTikL2', 'LpNnaEMtO605q7n9ZjW7is6mvaXB9IvfldcCLqdClehDwNynhvkhgk1qtgRJ', '2018-09-26 22:33:30', '2018-09-26 22:33:30', 3, 'Leguarda', 'tabataba', 9182736541, 'Sandawa Davao City');

-- --------------------------------------------------------

--
-- Table structure for table `user_roles`
--

CREATE TABLE `user_roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `role_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_roles`
--

INSERT INTO `user_roles` (`id`, `role_name`, `created_at`, `updated_at`) VALUES
(1, 'SuperAdmin', NULL, NULL),
(2, 'Moderator', NULL, NULL),
(3, 'Customer', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `amenities`
--
ALTER TABLE `amenities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `room_reservations`
--
ALTER TABLE `room_reservations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `room_types`
--
ALTER TABLE `room_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_roles`
--
ALTER TABLE `user_roles`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `amenities`
--
ALTER TABLE `amenities`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `room_reservations`
--
ALTER TABLE `room_reservations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `room_types`
--
ALTER TABLE `room_types`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `user_roles`
--
ALTER TABLE `user_roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
