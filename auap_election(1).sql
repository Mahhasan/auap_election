-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 16, 2023 at 03:28 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `auap_election`
--

-- --------------------------------------------------------

--
-- Table structure for table `candidates`
--

CREATE TABLE `candidates` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `number` varchar(255) NOT NULL,
  `profile_pic` varchar(1000) NOT NULL,
  `designation` varchar(255) NOT NULL,
  `organization` varchar(255) NOT NULL,
  `cv` varchar(255) NOT NULL,
  `video` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `candidates`
--

INSERT INTO `candidates` (`id`, `first_name`, `last_name`, `email`, `number`, `profile_pic`, `designation`, `organization`, `cv`, `video`, `country`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Prof. Dr. Anoop', 'Swarup', 'swarup@gmail.com', '1234567890', 'anoop-swarup.jpg', 'Founding Vice Chancellor, JLU India', '&\nChairman Centre for Global Nonkilling, Hawaii, US', 'CV_Dr._Anoop_Swarup_CV.pdf', 'https://www.youtube.com/embed/q7tmr-IkDcM', 'Hawaii, US', NULL, '2023-05-13 16:39:19', '2023-05-13 16:39:19'),
(2, 'Dr. Abdolmajid', 'Eskandari', 'eskandari@gmail.com', '1234567890', 'capture2131.PNG', 'Director General, \nOffice of International Relations,', 'University of Tehran', 'CV_Prof._Abdolmajid_Eskandari.pdf', 'https://www.youtube.com/embed/pAj8ZhGPiTk', 'Thailand', NULL, '2023-05-13 16:39:19', '2023-05-13 16:39:19'),
(3, 'Prof. Dr. A.K.M. Fazlul', 'Haque', 'haque@gmail.com', '1234567890', 'akm.jpg', 'Director, Institutional Quality Assurance Cell (IQAC),', 'Daffodil International University, Bangladesh', 'CV_Prof._Dr._A.K.M._Fazlul_Haque.pdf', 'https://www.youtube.com/embed/IaR2L1MNcRw', 'Bangladesh', NULL, '2023-05-13 16:53:13', '2023-05-13 16:53:13'),
(4, 'Prof. Ujjwal K', 'Chowdhury', 'chowdhury@gmail.com', '1234567890', 'prof-ujjwal-k-chowdhury.jpg', 'Executive Director, \nInternational Online University, Dubai', 'Strategic Adviser & Professor, \nDaffodil International University, Bangladesh', 'CV_Prof._Ujjwal_K_Chowdhury.pdf', 'https://www.youtube.com/embed/qISXmmMPfBc', 'India', NULL, '2023-05-13 16:53:13', '2023-05-13 16:53:13');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
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
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_05_13_140910_candidates', 2),
(6, '2023_05_13_140937_votes', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `designation` varchar(255) NOT NULL,
  `institute` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `number` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(32) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `designation`, `institute`, `email`, `number`, `email_verified_at`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Mahmud', 'Hasan', 'Assistant Software Engineer', 'Daffodil International University', 'fgs.se2@daffodilvarsity.edu.bd', '01738574987', NULL, '$2y$10$BhBovrbJP85rETN1M4fuquEa/SdqWuH903VM/42dKeYzgUeRnzYYi', 'admin', NULL, '2023-05-13 07:37:18', '2023-05-13 07:37:18'),
(2, 'Rakib', 'Hasan', 'Software Engineer', 'Daffodil International University', 'rakibswe.522@gmail.com', '343', NULL, '$2y$10$BhBovrbJP85rETN1M4fuquEa/SdqWuH903VM/42dKeYzgUeRnzYYi', 'voter', NULL, '2023-05-13 07:58:51', '2023-05-13 07:58:51'),
(3, 'Hasan', 'Mahmud', 'Officer', 'Daffodil International University', 'hasan@gmail.com', '12345678', NULL, '$2y$10$yLd4eLBIsMX/cTB1N/qTDOxRen95ya3gJGz2MGvm3px/HFy7NvDcO', 'voter', NULL, '2023-05-13 12:34:57', '2023-05-13 12:34:57'),
(4, 'Monirul', 'Islam', 'Assistant Officer', 'Daffodil International University', 'dita@mailinator.com', '556', NULL, '$2y$10$G1Mn7oSa9.hzvbnaG.oWmOLk/ZDM9lVpyXkrNoIsWstpvzSnLV/MG', 'voter', NULL, '2023-05-16 01:45:33', '2023-05-16 01:45:33'),
(5, 'Jannatul', 'Naim', 'Assistant Director', 'Daffodil International University', 'forewu@mailinator.com', '262', NULL, '$2y$10$KexyPz56HpFThhdKViaDz.S5OaULFabozumQ2WcNL4B/kr9sCj87a', 'voter', NULL, '2023-05-16 05:17:05', '2023-05-16 05:17:05'),
(14, 'Nuri', 'Yousuf', 'Officer', 'diu', 'nuri@gmail.com', '0125478545', NULL, '$2y$10$1/6tBBDQfODFkBfx.Gr1WOGmY9hd8MT1nCE5ZmRVbKyxOBSRf3ZHO', 'voter', NULL, '2023-05-16 06:14:15', '2023-05-16 06:14:15'),
(15, 'Md', 'Hasanujjaman', 'Officer', 'Daffodil International University', 'wyxu@mailinator.com', '5415684651', NULL, '$2y$10$UYbWZKNWTTY0KIdlvfu7DuBf45xSnOy6r1a1tT3snyEvq6pZzw4ti', 'voter', NULL, '2023-05-16 06:15:45', '2023-05-16 06:15:45'),
(16, 'Ramona', 'Kelley', 'Advisor', 'Daffodil International University', 'cesul@mailinator.com', '13945441536', NULL, '$2y$10$j9nIsP2wMzrc.kzg/qPIbeo0uM60Vv9q2dcWXZavqQD28I5Xcb252', 'voter', NULL, '2023-05-16 06:16:31', '2023-05-16 06:16:31'),
(17, 'Amjad', 'Hossain', 'Officer', 'Daffodil International University', 'qawysose@mailinator.com', '68946545364986', NULL, '$2y$10$IEWy13BdOjdMojYPj5YHs.1kKH/QUcg.QEezfgR3mtX/kBsXZd8li', 'voter', NULL, '2023-05-16 06:17:18', '2023-05-16 06:17:18'),
(18, 'Alexandra', 'Adams', 'Advisor', 'Daffodil International University', 'gofu@mailinator.com', '50986546854654', NULL, '$2y$10$sO8jjcHRirsNrnI9YpyoeulKAgAB6KMQqD9605DZyxGL8zs6/gau6', 'voter', NULL, '2023-05-16 06:17:54', '2023-05-16 06:17:54'),
(19, 'Audrey', 'Chan', 'Advisor', 'Daffodil International University', 'zewug@mailinator.com', '8725486456145364', NULL, '$2y$10$Mm33LFobwKi4ZO0SwrFN9.Ig.1GgzK.KIyDH4rA/WelGHF32RsGCa', 'voter', NULL, '2023-05-16 06:18:41', '2023-05-16 06:18:41'),
(20, 'Martin', 'Hossain', 'Advisor', 'Daffodil International University', 'keka@mailinator.com', '1255454545', NULL, '$2y$10$WvGrhPnSl4bACx7bRt7kUerlM3IcPNsbLS.VY8u18T.3vjATU9tgO', 'voter', NULL, '2023-05-16 06:26:17', '2023-05-16 06:26:17'),
(21, 'Lionel', 'May', 'Advisor', 'Daffodil International University', 'tabepa@mailinator.com', '8967574245455', NULL, '$2y$10$gA6GS9hBfjNmJqoD/7kDhugPxpiE1y2kmuQ.Q5YWi29rYIpieLlqW', 'voter', NULL, '2023-05-16 06:26:42', '2023-05-16 06:26:42'),
(22, 'Tarik', 'Ware', 'Advisor', 'Daffodil International University', 'zyluxo@mailinator.com', '617547545', NULL, '$2y$10$rz7BIQyUD/IWIeJGfChP4eJPbWqmPvVmiIZJq2roR76EC7wbDL.bG', 'voter', NULL, '2023-05-16 06:27:07', '2023-05-16 06:27:07'),
(23, 'Daquan', 'Yousuf', 'Totam veniam rerum', 'Aut ea iure nulla vo', 'syji@mailinator.com', '94645654646', NULL, '$2y$10$mlnF1Viitglj4oykPXNAhOpfo5YrjYHAgeTXbjmcuJ6Bu/D46IRhC', 'voter', NULL, '2023-05-16 06:27:37', '2023-05-16 06:27:37'),
(24, 'Lee', 'Ayers', 'Eligendi est non di', 'Itaque temporibus do', 'dafy@mailinator.com', '6094564545', NULL, '$2y$10$GU8aSWv030AWCTrk/Fh69.T1BSXJuo4H7GLc03NsHgz2lut9GmuxW', 'voter', NULL, '2023-05-16 06:28:17', '2023-05-16 06:28:17'),
(25, 'Shay', 'Melendez', 'Advisor', 'Daffodil International University', 'xuro@mailinator.com', '701547545', NULL, '$2y$10$xD6/NLUg70bQbuKzGf3ONey/iMI/yJXCFb8N7oHM2knyXd5aYmbHG', 'voter', NULL, '2023-05-16 06:28:35', '2023-05-16 06:28:35'),
(26, 'Chester', 'Flowers', 'Advisor', 'Daffodil International University', 'xinaq@mailinator.com', '5115454545', NULL, '$2y$10$F7VEsT.9RYVnDqLbLkLbRujp5PMCAoQ9PuSVt8HKx28RvN2jPtfja', 'voter', NULL, '2023-05-16 06:28:55', '2023-05-16 06:28:55'),
(27, 'Mira', 'Wood', 'In aliquam minus occ', 'Eaque totam consequa', 'jifexav@mailinator.com', '970', NULL, '$2y$10$ZkXElI22gr1dCrXohebTvu4NvLqPARODU9w1A0Firn8ElgruiIya.', 'voter', NULL, '2023-05-16 06:29:08', '2023-05-16 06:29:08'),
(28, 'Walker', 'Winters', 'Officer', 'Daffodil International University', 'gaqeb@mailinator.com', '418455544', NULL, '$2y$10$LTKrztNhkYUVbFOzThJjwugL6t3pRvI/V.41LJOBDvBvKw6qPTJwC', 'voter', NULL, '2023-05-16 06:29:25', '2023-05-16 06:29:25');

-- --------------------------------------------------------

--
-- Table structure for table `votes`
--

CREATE TABLE `votes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `candidate_id` varchar(255) NOT NULL,
  `voter_id` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `votes`
--

INSERT INTO `votes` (`id`, `candidate_id`, `voter_id`, `remember_token`, `created_at`, `updated_at`) VALUES
(42, '1', '19', NULL, '2023-05-16 06:20:29', '2023-05-16 06:20:29'),
(43, '1', '14', NULL, '2023-05-16 06:20:29', '2023-05-16 06:20:29'),
(44, '3', '15', NULL, '2023-05-16 06:20:29', '2023-05-16 06:20:29'),
(45, '4', '16', NULL, '2023-05-16 06:20:29', '2023-05-16 06:20:29'),
(46, '1', '17', NULL, '2023-05-16 06:20:29', '2023-05-16 06:20:29'),
(47, '4', '18', NULL, '2023-05-16 06:20:29', '2023-05-16 06:20:29'),
(49, '1', '3', NULL, '2023-05-16 06:20:29', '2023-05-16 06:20:29'),
(50, '4', '4', NULL, '2023-05-16 06:20:29', '2023-05-16 06:20:29'),
(51, '1', '5', NULL, '2023-05-16 06:20:29', '2023-05-16 06:20:29'),
(52, '1', '20', NULL, '2023-05-16 06:20:29', '2023-05-16 06:20:29'),
(53, '3', '21', NULL, '2023-05-16 06:20:29', '2023-05-16 06:20:29'),
(54, '4', '22', NULL, '2023-05-16 06:20:29', '2023-05-16 06:20:29'),
(55, '1', '23', NULL, '2023-05-16 06:20:29', '2023-05-16 06:20:29'),
(56, '2', '24', NULL, '2023-05-16 06:20:29', '2023-05-16 06:20:29'),
(57, '1', '25', NULL, '2023-05-16 06:20:29', '2023-05-16 06:20:29'),
(58, '1', '26', NULL, '2023-05-16 06:20:29', '2023-05-16 06:20:29'),
(59, '4', '27', NULL, '2023-05-16 06:20:29', '2023-05-16 06:20:29'),
(60, '4', '28', NULL, '2023-05-16 06:20:29', '2023-05-16 06:20:29'),
(63, '1', '2', NULL, '2023-05-16 07:10:01', '2023-05-16 07:10:01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `candidates`
--
ALTER TABLE `candidates`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `candidates_email_unique` (`email`);

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
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `votes`
--
ALTER TABLE `votes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `candidates`
--
ALTER TABLE `candidates`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `votes`
--
ALTER TABLE `votes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
