-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 01, 2019 at 01:38 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `registration`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(200) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` int(100) NOT NULL,
  `SID` int(20) NOT NULL,
  `slot` varchar(200) NOT NULL,
  `firstName` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `SID`, `slot`, `firstName`) VALUES
(1, 'rabdur194', 'khvykj@gmail.com', 0, 6544654, '3', 'Abdur'),
(2, 'JuakhorJax', 'radkag@gmail.com', 81, 0, '4', 'Abdur'),
(569, 'newuser', 'sayedi.hassanp@gmail.com', 81, 32134, '2', 'Abdur'),
(571, 'fgjkk', 'sretwsrh@dsfhgsdf.com', 2147483647, 3745667, '0', 'kluilkul'),
(572, 'yjtfjtyf', 'sdfhgdsfg@dsh.vom', 0, 897987, '3', 'sfghs'),
(574, 'dgfyhfkj', 'asga@asrdg.sfdg', 2147483647, 48763, '2', 'swrtu'),
(575, 'erg', 'rabdur194@gmail.com', 2147483647, 987987, '4', 'edrwh'),
(576, 'Rahim', 'rahim@gmail.com', 81, 987987, '0', 'rahim'),
(577, 'karim', 'sdfhgdsfg@dsh.vom', 81, 23154, '', 'asdg'),
(578, 'karim', 'sayedi.hassanp@gmail.com', 81, 4537453, '', 'sdfh'),
(579, 'crypto', 'sayedi.hassanp@gmail.com', 81, 45786, '', 'crypto'),
(583, 'rtuer', 'sdfhgdsfg@dsh.vom', 81, 984351, '', 'jkyfdct'),
(591, 'rtuer', 'sdfhgdsfg@dsh.vom', 81, 123548, '', 'Abdur'),
(592, 'rtuer', 'sdfhgdsfg@dsh.vom', 81, 516654684, '', 'Abdur');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=593;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
