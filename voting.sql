-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 21, 2022 at 01:32 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `voting`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `address` varchar(400) NOT NULL,
  `mobile` bigint(10) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(50) NOT NULL,
  `photo` varchar(300) NOT NULL,
  `role` int(1) NOT NULL,
  `status` int(1) NOT NULL,
  `vote` int(255) NOT NULL,
  `doc` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `address`, `mobile`, `email`, `password`, `photo`, `role`, `status`, `vote`, `doc`) VALUES
(11, 'saksham kumar singh', 'ranchi', 8235445537, 'singhsaksham8235@gmail.com', '123', 'win.jpg', 1, 0, 0, '2022-02-13 09:49:16'),
(12, 'gulafshan', 'muzafferpur', 6203670142, 'gulafshanakhtar0@gmail.com', '123', 'gulafshan.jpeg', 1, 0, 0, '2022-02-13 09:52:04'),
(13, 'sonu', 'ranchi', 8235445538, 'sonu@gmail.com', '123456', 'saksham.jpeg', 1, 0, 0, '2022-02-13 10:24:19'),
(14, 'anand', 'ranchi6823', 75213762389, 'anand@gmail.com', '12345', '1stpage.jpeg', 2, 0, 0, '2022-02-13 23:53:39'),
(15, 'anand', 'jharkhand', 6666666666, 'pandey@gmail.com', '12345', 'anand.jpeg', 1, 0, 0, '2022-02-14 03:22:28'),
(16, 'abcd', 'ghghfjh', 6887598, 'jhfhf@gmail.com', 'guyg', 'WIN_20211006_18_53_09_Pro.jpg', 1, 0, 0, '2022-02-14 04:10:08'),
(17, 'ayush', 'ranchi', 6578545886, 'ayush@gmail.com', '123', 'WIN_20211006_18_53_13_Pro.jpg', 1, 0, 0, '2022-02-20 12:34:50'),
(18, 'prince', '', 0, '', '', '', 1, 0, 0, '2022-02-21 07:06:19'),
(19, 'prince', 'bihar', 8235445539, 'prince8235@gmail.com', '123', 'WIN_20211006_18_53_09_Pro.jpg', 1, 0, 0, '2022-02-21 07:07:02');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
