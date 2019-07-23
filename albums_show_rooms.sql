-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 05, 2018 at 01:01 နံနက်
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `albums_show_rooms`
--

-- --------------------------------------------------------

--
-- Table structure for table `albums`
--

CREATE TABLE `albums` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `remark` text NOT NULL,
  `created_date` datetime NOT NULL,
  `modified_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `albums`
--

INSERT INTO `albums` (`id`, `name`, `remark`, `created_date`, `modified_date`) VALUES
(1, 'Album1', '', '2013-06-22 08:19:41', '2013-06-22 08:19:41'),
(2, 'Album2', '', '2013-06-22 08:19:45', '2013-06-22 08:19:45'),
(3, 'Album3', '', '2013-06-22 08:19:54', '2013-06-22 08:19:54'),
(4, 'Album4', '', '2013-06-22 08:20:05', '2013-06-22 08:20:05');

-- --------------------------------------------------------

--
-- Table structure for table `band_categories`
--

CREATE TABLE `band_categories` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `remark` text NOT NULL,
  `created_date` datetime NOT NULL,
  `modified_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `band_categories`
--

INSERT INTO `band_categories` (`id`, `name`, `remark`, `created_date`, `modified_date`) VALUES
(1, 'Technology', '', '2013-06-22 08:19:41', '2013-06-22 08:19:41'),
(2, 'History', '', '2013-06-22 08:19:45', '2013-06-22 08:19:45'),
(3, 'Sci-Fi', '', '2013-06-22 08:19:54', '2013-06-22 08:19:54'),
(4, 'Language', '', '2013-06-22 08:20:05', '2013-06-22 08:20:05');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `albums`
--
ALTER TABLE `albums`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `band_categories`
--
ALTER TABLE `band_categories`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `albums`
--
ALTER TABLE `albums`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `band_categories`
--
ALTER TABLE `band_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
