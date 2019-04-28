-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 27, 2019 at 09:45 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.2.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nieopen`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `link` varchar(256) NOT NULL,
  `sem` int(3) DEFAULT NULL,
  `branch` varchar(50) DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `link`, `sem`, `branch`, `date`) VALUES
(1, 'abc@gmail.com', 20, 'Hubli', '2019-04-27 17:26:46'),
(3, 'http://www.nie.ac.in/wp-content/uploads/2016/08/1st-year-Blown-up-Syllabus2018-19.pdf', 1, 'ISE', '2019-04-27 18:27:18'),
(4, 'http://www.nie.ac.in/wp-content/uploads/2015/05/I-Sc-Engg-_II-year-BlownUp-Syllabus-2017-18admittedstudents.pdf', 2, 'ISE', '2019-04-27 18:27:47'),
(5, 'http://www.nie.ac.in/wp-content/uploads/2015/05/I-Sc-Engg-_-III-year-BlownUp-Syllabus2016-17-batch-admitted-students.pdf', 3, 'ISE', '2019-04-27 18:28:29'),
(6, 'http://www.nie.ac.in/wp-content/uploads/2015/05/I-S-Engg-IV-Year-2018-19.pdf', 4, 'ISE', '2019-04-27 18:28:51'),
(7, 'http://www.nie.ac.in/wp-content/uploads/2016/08/1st-year-Blown-up-Syllabus2018-19.pdf', 1, 'CSE', '2019-04-27 18:31:45'),
(8, 'http://www.nie.ac.in/wp-content/uploads/2015/05/C-Sc-Engg-II_Year-Blown-up-syllabus-2017-18admbatch.pdf', 2, 'CSE', '2019-04-27 18:32:05'),
(9, 'http://www.nie.ac.in/wp-content/uploads/2015/05/C-Sc-Engg-III_Year-blown-up-syllabus2016-17-batch-admitted-students.pdf', 3, 'CSE', '2019-04-27 18:32:30'),
(10, 'http://www.nie.ac.in/wp-content/uploads/2015/05/C-S-Engg-IV_Year-2018-19.pdf', 4, 'CSE', '2019-04-27 18:32:53');

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
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
