-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 05, 2023 at 11:24 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `customer`
--

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE `country` (
  `id` int(50) NOT NULL,
  `name` varchar(255) NOT NULL,
  `sort_order` int(255) NOT NULL,
  `created_at` timestamp(6) NOT NULL DEFAULT current_timestamp(6),
  `updated_at` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`id`, `name`, `sort_order`, `created_at`, `updated_at`) VALUES
(1, 'india', 1, '0000-00-00 00:00:00.000000', '0000-00-00 00:00:00.000000'),
(2, 'canada', 2, '0000-00-00 00:00:00.000000', '0000-00-00 00:00:00.000000'),
(3, 'usa', 3, '0000-00-00 00:00:00.000000', '0000-00-00 00:00:00.000000'),
(4, 'australia', 4, '2023-01-03 10:15:07.000000', '2023-01-10 10:15:07.000000');

-- --------------------------------------------------------

--
-- Table structure for table `customer_data`
--

CREATE TABLE `customer_data` (
  `id` int(40) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `number` varchar(255) NOT NULL,
  `status` text NOT NULL,
  `hobby` text NOT NULL,
  `file` varchar(255) NOT NULL,
  `country_id` int(10) NOT NULL,
  `state_id` int(10) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer_data`
--

INSERT INTO `customer_data` (`id`, `name`, `email`, `password`, `number`, `status`, `hobby`, `file`, `country_id`, `state_id`, `created_at`, `updated_at`) VALUES
(8, 'ggg', 'DHAd@gmail.com', '', '222', '0', 'pool', '2.jpg', 0, 0, '2022-12-22 11:32:18', '2023-01-05 09:18:42'),
(9, 'ggg', 'khushi@gmail.com', '', '888888', '1', 'cricket,bowling', '', 0, 0, '2022-12-22 11:36:47', '2022-12-26 11:15:51'),
(10, 'khushi', 'khushi@gmail.com', '', '888888', '1', 'football', '', 0, 0, '2022-12-22 11:54:32', '2022-12-26 11:16:17'),
(11, '', '', '', '', '', '', '', 0, 0, '2022-12-27 11:55:16', '2022-12-27 11:55:16'),
(12, '', '', '', '', '', '', 'image/Screenshot 2022-12-27 at 08-53-50 Fashiony layout.png', 0, 0, '2022-12-27 12:09:43', '2022-12-27 12:09:43'),
(13, 'khushi', 'yash@gmail.com', '', '222', 'yes', 'football,pool', '1', 0, 0, '2022-12-27 12:24:21', '2022-12-27 12:24:21'),
(14, 'yahvi', 'yahvi@gmail.com', '', '9978001540', 'no', 'cricket,bowling', '1', 0, 0, '2022-12-29 06:40:21', '2022-12-29 06:40:21'),
(15, '$name', '$email', '', '$number', '$status', '$hobby_str', '$destinationFilename', 0, 0, '2022-12-29 06:54:47', '2022-12-29 07:39:23'),
(16, 'princy', 'DHAd@gmail.com', '', '666', '0', 'cricket', '', 0, 0, '2022-12-29 07:08:30', '2022-12-29 07:21:05'),
(17, 'yash', 'yash@gmail.com', '', '888888', '0', 'football,pool', '', 0, 0, '2022-12-29 07:24:33', '2022-12-29 07:26:11'),
(18, 'dharmik', 'kenil@gmail.com', '', '666', '0', 'football,pool', '', 0, 0, '2022-12-29 07:32:14', '2022-12-29 07:32:37'),
(19, 'khushi', 'kenil@gmail.com', '', '2222', '0', 'football,pool', '', 0, 0, '2022-12-29 07:41:28', '2022-12-29 07:41:47'),
(20, 'khushi', 'yahvi@gmail.com', '', '5555', 'yes', 'cricket,bowling', '4d3b3061fb65d443abc76ab8acdf1282-online-store-sale-slider-template.jpg', 0, 0, '2022-12-29 07:45:30', '2022-12-29 07:45:30'),
(21, 'niiiiiii', 'sfdcsd@gmail.com', '', '555', 'no', 'pool,cricket', 'D:xampp	mpphp7B8D.tmp', 0, 0, '2022-12-29 07:56:51', '2022-12-29 07:56:51'),
(22, 'khushi', 'khushi@gmail.com', '', '2222', 'yes', 'football', 'D:xampp	mpphpA52F.tmp', 0, 0, '2022-12-29 08:07:57', '2022-12-29 08:07:57'),
(23, 'yash', 'yash@gmail.com', '', '9081250081', '0', 'football,cricket', '2.jpg', 0, 0, '2022-12-29 08:10:07', '2022-12-29 11:23:08'),
(25, 'virat', 'virat@gmail.com', '', '888888888', '0', 'pool,cricket', 'free-education-website-slider-banner-psd-template.jpg', 0, 0, '2023-01-02 10:04:29', '2023-01-02 10:04:55'),
(26, '', '', '', '', '', '', '', 0, 0, '2023-01-02 10:50:18', '2023-01-02 10:50:18'),
(27, 'kenil', 'kenil@gmail.com', '', '888888', '0', 'football', 'free-education-website-slider-banner-psd-template.jpg', 0, 0, '2023-01-02 10:51:04', '2023-01-03 09:26:06'),
(28, 'dddd', 'ddd@gmail.com', 'ddd', '45456', 'yes', 'football', '2.jpg', 0, 0, '2023-01-04 14:46:29', '2023-01-04 14:46:29'),
(29, 'ggg', 'admin@gmail.com', 'cb42e130d1471239a27fca6228094f0e', '4444', 'yes', 'football', 'th (1).jpg', 0, 0, '2023-01-04 14:48:44', '2023-01-04 14:48:44'),
(30, 'sss', 'sss@gmail.com', '9f6e6800cfae7749eb6c486619254b9c', '', '0', '', 'free-education-website-slider-banner-psd-template.jpg', 0, 0, '2023-01-04 15:03:00', '2023-01-05 09:26:34'),
(31, 'khushi', 'sss@gmail.com', 'eb9279982226a42afdf2860dbdc29b45', '5555555', 'yes', 'football,pool', '4d3b3061fb65d443abc76ab8acdf1282-online-store-sale-slider-template.jpg', 0, 0, '2023-01-05 08:57:17', '2023-01-05 08:57:17'),
(32, 'khajur', 'khajur@gmail.com', '202cb962ac59075b964b07152d234b70', '2345', 'yes', 'football', '14kgf4.jpg', 1, 1, '2023-01-05 09:38:24', '2023-01-05 09:38:24');

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

CREATE TABLE `state` (
  `id` int(50) NOT NULL,
  `country_id` int(50) NOT NULL,
  `name` varchar(255) NOT NULL,
  `short_order` int(50) NOT NULL,
  `created_at` timestamp(6) NOT NULL DEFAULT current_timestamp(6),
  `updated_at` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `state`
--

INSERT INTO `state` (`id`, `country_id`, `name`, `short_order`, `created_at`, `updated_at`) VALUES
(1, 1, 'gujarat', 1, '0000-00-00 00:00:00.000000', '0000-00-00 00:00:00.000000'),
(2, 1, 'ahemdabad', 2, '0000-00-00 00:00:00.000000', '0000-00-00 00:00:00.000000'),
(3, 1, 'sikkim', 3, '0000-00-00 00:00:00.000000', '0000-00-00 00:00:00.000000'),
(4, 2, 'torrent', 1, '0000-00-00 00:00:00.000000', '0000-00-00 00:00:00.000000'),
(5, 2, 'otava', 2, '0000-00-00 00:00:00.000000', '0000-00-00 00:00:00.000000'),
(6, 2, 'victoria', 3, '0000-00-00 00:00:00.000000', '0000-00-00 00:00:00.000000'),
(7, 3, 'newyork', 1, '0000-00-00 00:00:00.000000', '0000-00-00 00:00:00.000000'),
(8, 3, 'voshington', 2, '0000-00-00 00:00:00.000000', '0000-00-00 00:00:00.000000'),
(9, 4, 'melborn', 1, '0000-00-00 00:00:00.000000', '0000-00-00 00:00:00.000000'),
(10, 4, 'adiled', 2, '0000-00-00 00:00:00.000000', '0000-00-00 00:00:00.000000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer_data`
--
ALTER TABLE `customer_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `state`
--
ALTER TABLE `state`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `country`
--
ALTER TABLE `country`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `customer_data`
--
ALTER TABLE `customer_data`
  MODIFY `id` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `state`
--
ALTER TABLE `state`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
