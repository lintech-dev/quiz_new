-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 11, 2021 at 01:25 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quiz_new`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `quiz_list`
--

CREATE TABLE `quiz_list` (
  `id` int(11) NOT NULL,
  `q_name` text DEFAULT NULL,
  `participants` text DEFAULT NULL,
  `time` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `quiz_list`
--

INSERT INTO `quiz_list` (`id`, `q_name`, `participants`, `time`) VALUES
(1, 'test quiz', '2|3', '02:00'),
(2, 'test quiz 2', '3', '01:00'),
(3, 'test quiz 3', '3', '01:00');

-- --------------------------------------------------------

--
-- Table structure for table `quiz_q_a`
--

CREATE TABLE `quiz_q_a` (
  `id` int(11) NOT NULL,
  `quiz_id` varchar(100) DEFAULT NULL,
  `question` text DEFAULT NULL,
  `option1` text DEFAULT NULL,
  `option2` text DEFAULT NULL,
  `option3` text DEFAULT NULL,
  `option4` text DEFAULT NULL,
  `actual_awnser` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `quiz_q_a`
--

INSERT INTO `quiz_q_a` (`id`, `quiz_id`, `question`, `option1`, `option2`, `option3`, `option4`, `actual_awnser`) VALUES
(1, '1', 'what is c ?', 'Procedure oriented language', 'Object oriented language', 'subject', 'testing', 'Procedure oriented language'),
(2, '1', 'what is PHP ?', 'css', 'js', 'language', 'hipper text pre processor', 'hipper text pre processor'),
(3, '2', 'what is java ?', 'Programing langauage', 'Emglish subject', 'test 1', 'test 2', 'Programing langauage'),
(4, '2', 'who is modi', 'PM', 'CM', 'minister', 'manager', 'PM'),
(5, '2', 'who is karnataka cm', 'modi', 'advani', 'yediverippa', 'vajapey', 'yediverippa'),
(6, '3', 'test 1', 'test 1', 'test 2', 'test 3', 'test 4', 'test 1'),
(7, '3', 'c++', 'pl', 'ml', 'cc', 'dd', 'pl');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'gopal', 'gopalkrishna_b@lintechnokrats.com', NULL, '$2y$10$uS3fJElrKh6DV7gOTpUuQO/afM3szUV7fOP5Bdu4DohMnMgjn3wHO', 'Admin', NULL, '2021-02-03 01:41:14', '2021-02-03 01:41:14'),
(2, 'gopal user', 'gopalavb@gmail.com', NULL, '$2y$10$Wov47LVqwGpCr0HjdNGIFepuWKw58NgHXVWNdjh90z7Ih5EbgFa9O', 'User', NULL, '2021-02-03 01:43:39', '2021-02-03 01:43:39'),
(3, 'raghu', 'raghu_s@lintechnokrats.com', NULL, '$2y$10$MrXp6ZyphrI4N06xx9I4su3pH8CyTAtaStQKxPLXzvy2Q03Z4Cqhe', 'User', NULL, '2021-02-03 02:57:51', '2021-02-03 02:57:51');

-- --------------------------------------------------------

--
-- Table structure for table `user_ans`
--

CREATE TABLE `user_ans` (
  `id` int(11) NOT NULL,
  `roll_no` varchar(100) DEFAULT NULL,
  `quiz_no` varchar(100) DEFAULT NULL,
  `question_no` varchar(100) DEFAULT NULL,
  `question_title` text DEFAULT NULL,
  `actual_aws` text DEFAULT NULL,
  `user_aws` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_ans`
--

INSERT INTO `user_ans` (`id`, `roll_no`, `quiz_no`, `question_no`, `question_title`, `actual_aws`, `user_aws`) VALUES
(1, '2', NULL, '1', 'what is c ?', 'Procedure oriented language', 'Procedure oriented language'),
(2, '2', NULL, '2', 'what is PHP ?', 'hipper text pre processor', 'hipper text pre processor'),
(3, '2', NULL, '3', 'what is java ?', 'Programing langauage', 'Programing langauage'),
(4, '2', NULL, '4', 'who is modi', 'PM', 'PM'),
(5, '2', NULL, '5', 'who is karnataka cm', 'yediverippa', 'yediverippa'),
(6, '2', NULL, '6', 'test 1', 'test 1', 'test 1'),
(7, '2', NULL, '7', 'c++', 'pl', 'pl'),
(8, '3', NULL, '1', 'what is c ?', 'Procedure oriented language', 'Object oriented language'),
(9, '3', NULL, '2', 'what is PHP ?', 'hipper text pre processor', 'js'),
(10, '3', NULL, '3', 'what is java ?', 'Programing langauage', 'Programing langauage'),
(11, '3', NULL, '4', 'who is modi', 'PM', 'PM'),
(12, '3', NULL, '5', 'who is karnataka cm', 'yediverippa', 'yediverippa'),
(13, '3', NULL, '6', 'test 1', 'test 1', 'test 2'),
(14, '3', NULL, '7', 'c++', 'pl', 'pl');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

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
-- Indexes for table `quiz_list`
--
ALTER TABLE `quiz_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quiz_q_a`
--
ALTER TABLE `quiz_q_a`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_ans`
--
ALTER TABLE `user_ans`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `quiz_list`
--
ALTER TABLE `quiz_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `quiz_q_a`
--
ALTER TABLE `quiz_q_a`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_ans`
--
ALTER TABLE `user_ans`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
