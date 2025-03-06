-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 06, 2025 at 06:42 PM
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
-- Database: `researchdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phonenumber` int(10) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `age` int(10) NOT NULL,
  `city` varchar(100) NOT NULL,
  `password` varchar(244) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `email`, `phonenumber`, `gender`, `age`, `city`, `password`) VALUES
(3, 'Tonny', 'Ombalo', 'john@gmail.com', 72535, 'Male', 21, 'Elgeyo Marakwet', '$2y$10$7ZooTXG4F8NORWFdKu9aTek/b5Psmk0CHvnOqmkqVz8422EgIAWjK'),
(4, 'Lewis', 'mudaida', 'mudaidalewis@gmail.com', 796319394, 'Male', 22, 'Vihiga', '$2y$10$J4duuXz0A.UayvUAieyYxeIhhaA6ts48f8SwZV0WDqWVspqv5aXfW'),
(5, 'Stacy', 'Msupa', 'hanning@gmail.com', 71424242, 'Female', 19, 'Homa Bay', '$2y$10$LyD3fTwSnpjchMjl6ybip.B0Un4lLGDtNMDxxTSoUGQ4jmAfEsf9O'),
(6, 'sharon', 'baraza', 'Mr.H4CH3R@gmail.com', 7554444, '07554444', 21, 'Isiolo', '$2y$10$d8yQoHeotm4Muv/ZayRlHeiUz4IvaNR.z/gJ3qAyPcn/BFA9fRXPi');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
