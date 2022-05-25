-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 15, 2021 at 05:20 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `s18150679`
--
CREATE DATABASE IF NOT EXISTS `s18150679` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `s18150679`;

-- --------------------------------------------------------

--
-- Table structure for table `listing`
--

CREATE TABLE `listing` (
  `id` int(11) NOT NULL,
  `owner_id` int(50) NOT NULL,
  `car_model` varchar(255) NOT NULL,
  `car_type` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `start_date` date NOT NULL,
  `added_date` varchar(255) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `listing`
--

INSERT INTO `listing` (`id`, `owner_id`, `car_model`, `car_type`, `city`, `start_date`, `added_date`, `description`) VALUES
(1, '1', 'Tesla Model S (2020)', 'Sports car / Coupe', 'Bucharest', '2021-08-15', 'Sunday 15th of August 2021 05:05:35 AM', 'Electric Vehicle | 50 euros per day | contact me for more info'),
(2, '1', 'Lamborghini Huracan (2018)', 'Sports car / Coupe', 'Bucharest', '2021-08-18', 'Sunday 15th of August 2021 05:06:21 AM', 'Premium sports car, 100euros per day, call me for more information'),
(3, '2', 'Lamborghini Aventador (2012)', 'Sports car / Coupe', 'Bucharest', '2021-08-15', 'Sunday 15th of August 2021 05:10:17 AM', 'Really expensive sports car, 150 euros per day, call me for more information'),
(4, '2', 'BMW M5 Competition (2020)', 'Sports car / Coupe', 'Bucharest', '2021-08-18', 'Sunday 15th of August 2021 05:11:29 AM', 'Really expensive sports car, 150 euros per day, call me for more information');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(60) NOT NULL,
  `real_name` varchar(50) NOT NULL,
  `phone_number` varchar(15) NOT NULL,
  `admin_access` bit(1) NOT NULL DEFAULT b'0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `email`, `real_name`, `phone_number`, `admin_access`) VALUES
(1, 'bogdan', '$2y$10$1N2IaspJCo0TsTXsrswom.de.J.w4/5fyYpCKhf/HN.zSnkHNIpzW', 'bogdan.mihalcea@icloud.com', 'Bogdan Mihalcea', '+447733752684', b'1'),
(2, 'denyxp31', '$2y$10$EO2kOuIWNU7PE4DIYHWjDekXfHCY8UPOqfKQt92j.fb0t3pP0wjbK', 'denyxp31@gmail.com', 'Bogdan Mihalcea', '+40725925165', b'0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `listing`
--
ALTER TABLE `listing`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `listing`
--
ALTER TABLE `listing`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
