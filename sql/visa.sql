-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 18, 2024 at 02:04 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `visa`
--

-- --------------------------------------------------------

--
-- Table structure for table `support_query`
--

CREATE TABLE `support_query` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `passport_no` varchar(255) NOT NULL,
  `nationality` varchar(255) NOT NULL,
  `problem` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0 COMMENT '0=>open,1=>closed',
  `created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `support_query`
--

INSERT INTO `support_query` (`id`, `name`, `email`, `passport_no`, `nationality`, `problem`, `description`, `status`, `created`) VALUES
(1, 'jitendra singh mehra', 'jeet@gmail.com', '78787s78s787s', 'indian', '1', 'sdgsb', 0, '2024-01-18 10:56:58'),
(2, 'Vikram Mehra', 'admin@gmail.com', 'dklkdklkskd', 'mnandja', '2', 'FAFADF', 0, '2024-01-18 10:59:32'),
(3, 'jitendra singh mehra', 'kamalk971943@gmail.comssdd', 'gwggegsg34e', 'afgfg', '3', 'wrgawrtwr', 0, '2024-01-18 11:13:19'),
(4, 'dfdsdf', 'admin@gmail.com', 'fs345245', 'afgfg', '3', '454252', 0, '2024-01-18 11:49:37');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `status`, `created`) VALUES
(1, 'admin', 'admin@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 1, '2024-01-17 18:38:20');

-- --------------------------------------------------------

--
-- Table structure for table `visa_application`
--

CREATE TABLE `visa_application` (
  `id` int(10) UNSIGNED NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `passport_no` varchar(255) NOT NULL DEFAULT '',
  `nationality` varchar(255) NOT NULL,
  `phone` varchar(25) NOT NULL,
  `purpose_of_entry` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `doc` varchar(255) NOT NULL,
  `entry_checkpoint` varchar(255) NOT NULL,
  `date_valid` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT '0',
  `created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `visa_application`
--

INSERT INTO `visa_application` (`id`, `full_name`, `email`, `passport_no`, `nationality`, `phone`, `purpose_of_entry`, `photo`, `doc`, `entry_checkpoint`, `date_valid`, `status`, `created`) VALUES
(1, 'ewewr', 'jeet@gmail.com', '', 'Bruney', '9870986839', 'personal / private', 'Screenshot 2024-01-18 122015.png', 'Screenshot 2024-01-14 223209.png', 'La Lay Landport', '23334234324234', '0', '2024-01-18 12:29:39'),
(2, 'jitendra', 'admin@gmail.com', '', 'Armenia', '9870986839', 'participate in sport competitions', './assets/upload/photo/Screenshot 2024-01-18 122015.png', './assets/upload/doc/Screenshot 2024-01-14 223209.png', 'Noi Bai Airport (HAN) – Ha Noi', '18012024', '0', '2024-01-18 14:35:54');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `support_query`
--
ALTER TABLE `support_query`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `visa_application`
--
ALTER TABLE `visa_application`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `support_query`
--
ALTER TABLE `support_query`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `visa_application`
--
ALTER TABLE `visa_application`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
