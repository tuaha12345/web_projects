-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 18, 2022 at 11:23 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lab_5`
--

-- --------------------------------------------------------

--
-- Table structure for table `lab_5`
--

CREATE TABLE `lab_5` (
  `id` int(11) NOT NULL,
  `name` varchar(15) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `email` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lab_5`
--

INSERT INTO `lab_5` (`id`, `name`, `age`, `email`) VALUES
(1, 'tuaha', 22, 'syeedmdtuaha@gm'),
(2, 'Sayed Hasan Emo', 53, 'sayed15-13049@d'),
(6, 'aa', 88, 'sayed15-13126@d'),
(7, 'ss', 11, 'mmm@mmm'),
(8, 'abc', 33, 'sayed15-13126@d');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `lab_5`
--
ALTER TABLE `lab_5`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `lab_5`
--
ALTER TABLE `lab_5`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
