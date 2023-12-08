-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 08, 2023 at 06:36 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `profile_manager`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `Degree` varchar(255) NOT NULL,
  `user_type` varchar(255) NOT NULL,
  `status` int(1) NOT NULL,
  `reset_token_hash` varchar(255) DEFAULT NULL,
  `reset_token_expires_at` datetime DEFAULT NULL,
  `Email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_name`, `password`, `name`, `Degree`, `user_type`, `status`, `reset_token_hash`, `reset_token_expires_at`, `Email`) VALUES
(1, 'cuyos', 'c4ca4238a0b923820dcc509a6f75849b', 'janmarie', 'BSIT', 'user', 0, '688e0ba027d190efa5e632c986dcc9370145398b07762288d74ff5fb0471e44e', '2023-12-03 09:23:00', 'janmariecuyos@gmail.com'),
(2, 'shena', 'c20ad4d76fe97759aa27a0c99bff6710', 'natalix', '', '', 1, 'c3236bab17185bcf1ce78ddfa277e15dd23b3a2015fc596de83b992a5a3468d5', '2023-12-03 09:05:36', 'shena@example.com'),
(4, 'Tulao22', 'aab3238922bcc25a6f606eb525ffdc56', 'Moon', '', '', 1, 'a801bd8865fe909ccee2e35d9081ad0000325817995bc3efb3ecff687b01a5dc', '2023-11-29 08:04:01', 'tulao22@gmail.com'),
(5, 'GREEN', 'c81e728d9d4c2f636f067f89cc14862c', 'GREENTEAM', '', 'admin', 1, 'ce71d5dbe8b528259efef2e6bcbf5da141d1902e6b45da6fa501fbb0dfe98d1b', '2023-12-03 08:48:48', 'gteam@gmail.com'),
(6, 'John', 'c81e728d9d4c2f636f067f89cc14862c', 'doe', 'BSIT', 'user', 0, NULL, NULL, 'JohnDoe@gmail.com'),
(7, 'Peter', 'c4ca4238a0b923820dcc509a6f75849b', 'Park', 'BSIT', 'user', 1, NULL, NULL, 'PeterParker@gmail.com'),
(8, 'a', '0cc175b9c0f1b6a831c399e269772661', 'a', '', '', 1, NULL, NULL, 'a'),
(9, 'b', '92eb5ffee6ae2fec3ad71c777531578f', 'b', '', '', 0, NULL, NULL, 'b'),
(10, 'c', '4a8a08f09d37b73795649038408b5f33', 'c', '', '', 0, NULL, NULL, 'c'),
(12, 'as', 'f970e2767d0cfe75876ea857f92e319b', 'as', '', '', 1, NULL, NULL, 'as'),
(13, 'qwe', '76d80224611fc919a5d54f0ff9fba446', 'qwerty', 'qwe', '', 1, NULL, NULL, 'qwe'),
(14, 'qq', '099b3b060154898840f0ebdfb46ec78f', 'qq', 'qq', '', 1, NULL, NULL, 'qq');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `reset_token_hash` (`reset_token_hash`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
