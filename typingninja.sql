-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 15, 2021 at 05:25 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `typingninja`
--

-- --------------------------------------------------------

--
-- Table structure for table `typinglessons`
--

CREATE TABLE `typinglessons` (
  `id` int(11) NOT NULL,
  `buttons` varchar(255) NOT NULL,
  `textw` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `typinglessons`
--

INSERT INTO `typinglessons` (`id`, `buttons`, `textw`) VALUES
(1, 'f,j', 'jjffj ffjjf jffjj ffjjf ffjfj fjfjf jjffj jffjf fjjff fjjfj jjfjf fjfjf\r\njfjff fjjfj jffjf jfjjf ffjfj fjfjf jfjfj fjjfj jffjf fjfjj ffjjf jfjjf\r\njfjfj fjfjj fjjff jfjjf fjjfj jffjf jjffj fjjfj jjffj jfjff jffjf jfjjf\r\nffjfj jfjfj jffjf jffjj \r\n'),
(2, 'd,k', 'kkddk ddkkd kkdkd dkkdk kdkdk ddkkd kdkdk dkdkk kddkd dkkdd ddkdk kkddk\r\nkdkkd ddkdk dkkdk dkdkd kddkk kdkdd ddkkd dkdkk kdkkd kkddk dkkdk kdkkd\r\ndkdkd kddkd kkddk kddkd kdkdk dkkdd dkkdk kddkd kdkkd ddkdk kdkdd dkdkd\r\nkddkk kddkd kddkd dkkdk ');

-- --------------------------------------------------------

--
-- Table structure for table `typingtools`
--

CREATE TABLE `typingtools` (
  `id` int(11) NOT NULL,
  `lang_name` varchar(200) NOT NULL,
  `lang_value` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `typingtools`
--

INSERT INTO `typingtools` (`id`, `lang_name`, `lang_value`) VALUES
(1, 'Hindi', 'HINDI'),
(2, 'Gujrati', 'GUJARATI'),
(3, 'Tamil', 'TAMIL'),
(4, 'Telugu', 'TELUGU'),
(5, 'Urdu', 'URDU'),
(6, 'Punjabi', 'PUNJABI'),
(7, 'Marathi', 'MARATHI'),
(8, 'Sanskrit', 'SANSKRIT'),
(9, 'Nepali', 'NEPALI'),
(10, 'Oriya', 'ORIYA'),
(11, 'Kannada', 'KANNADA'),
(12, 'Malyalam', 'MALAYALAM');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `typinglessons`
--
ALTER TABLE `typinglessons`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `typingtools`
--
ALTER TABLE `typingtools`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `typinglessons`
--
ALTER TABLE `typinglessons`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `typingtools`
--
ALTER TABLE `typingtools`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
