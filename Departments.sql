-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 21, 2019 at 07:18 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 5.6.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Departments`
--

-- --------------------------------------------------------

--
-- Table structure for table `DepartmentTrack`
--

CREATE TABLE `DepartmentTrack` (
  `Id` int(11) NOT NULL,
  `DeptId` int(11) DEFAULT NULL,
  `subject` varchar(100) DEFAULT NULL,
  `senders` text,
  `message` text,
  `note` text,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `DepartmentTrack`
--

INSERT INTO `DepartmentTrack` (`Id`, `DeptId`, `subject`, `senders`, `message`, `note`, `created_at`, `updated_at`) VALUES
(1, 2, 'About Exam', '1,2', NULL, NULL, '2018-12-25 17:35:05', '2018-12-25 17:35:05'),
(2, 2, 'SET EXAM', '1,2', NULL, NULL, '2018-12-25 17:54:18', '2018-12-25 17:54:18'),
(3, 1, 'pucsd exams', '1,2', NULL, NULL, '2018-12-25 18:04:11', '2018-12-25 18:04:11'),
(4, 1, 'about health', '1,5,7,9', NULL, NULL, '2018-12-25 18:26:26', '2018-12-25 18:26:26'),
(5, 5, 'exam', '2,7', NULL, NULL, '2018-12-25 18:39:17', '2018-12-25 18:39:17'),
(6, 6, 'spc', '1,3,8', NULL, NULL, '2018-12-26 05:38:32', '2018-12-26 05:38:32'),
(7, 6, 'about health', '2,3,10', NULL, NULL, '2018-12-26 05:52:10', '2018-12-26 05:52:10'),
(8, 1, 'Angoor', '4,7', NULL, NULL, '2019-03-19 12:47:42', '2019-03-19 12:47:42'),
(9, 1, 'About Payment Updation', '2,5,9', NULL, NULL, '2019-03-19 13:23:20', '2019-03-19 13:23:20'),
(10, 1, 'To the Payment', '2,6,9', NULL, NULL, '2019-03-19 13:32:22', '2019-03-19 13:32:22'),
(11, 1, 'To the Payment', '2,6,9', NULL, NULL, '2019-03-19 13:33:16', '2019-03-19 13:33:16'),
(12, 1, 'To the Payment', '2,6,9', '								To the head of computer science \nthis is computer generated invoice\nthis is', NULL, '2019-03-19 13:35:17', '2019-03-19 13:35:17'),
(13, 1, 'About Deggree ', '3', '								This is computersed Test', NULL, '2019-03-19 15:08:23', '2019-03-19 15:08:23'),
(14, 1, '', '', '								', '', '2019-03-19 15:51:34', '2019-03-19 15:51:34'),
(15, 1, 'Regarding Confidential Details', '5,7', '			Virat Kohli is an Indian international cricketer who currently captains the India national team. A right-handed top-order batsman, Kohli is regarded as one of the best batsmen in the world. He plays for Royal Challengers Bangalore in the Indian Premier League, and has been the team\'s captain since 2013					', 'Dhoni or Kohli - pick your side!', '2019-03-19 16:12:49', '2019-03-19 16:12:49'),
(16, 1, 'About Details Of Exam', '6,17', '								Truncated message. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sit amet lacinia orci. Proin vestibulum eget risus non luctus. Nunc cursus lacinia lacinia. Nulla molestie malesuada est ac tincidunt. Quisque eget convallis diam, nec venenatis risus. Vestibulum blandit faucibus est et malesuada. Sed interdum cursus dui nec venenatis. Pellentesque non nisi lobortis, rutrum eros ut, convallis nisi. Sed tellus turpis, dignissim sit amet tristique quis, pretium id est. Sed aliquam diam diam, sit amet faucibus tellus ultricies eu. Aliquam lacinia nibh a metus bibendum, eu commodo eros commodo. Sed commodo molestie elit, a molestie lacus porttitor id. Donec facilisis varius sapien, ac fringilla velit porttitor et. Nam tincidunt gravida dui, sed pharetra odio pharetra nec. Duis consectetur venenatis pharetra. Vestibulum egestas nisi quis elementum elementum.</span>\n										', 'Lorem ipsum dolor sit.', '2019-03-20 11:06:26', '2019-03-20 11:06:26'),
(17, 18, 'About Demo Of Code', '19', '								Hello How are You', 'if you found any mistake then let me know', '2019-03-20 13:18:47', '2019-03-20 13:18:47');

-- --------------------------------------------------------

--
-- Table structure for table `TrackDocument`
--

CREATE TABLE `TrackDocument` (
  `id` int(11) NOT NULL,
  `docId` int(11) DEFAULT NULL,
  `recieverId` int(11) DEFAULT NULL,
  `feedback` text,
  `scanAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `TrackDocument`
--

INSERT INTO `TrackDocument` (`id`, `docId`, `recieverId`, `feedback`, `scanAt`) VALUES
(1, 16, 17, 'Good Document With Extra Info', '2019-03-20 12:27:22'),
(2, 16, 6, 'Not So Good but Aggree With it', '2019-03-20 12:48:23'),
(3, 17, 19, 'it ok dude', '2019-03-20 13:20:14');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userId` int(11) NOT NULL,
  `fname` varchar(50) DEFAULT 'Department Of',
  `lname` varchar(50) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `upassword` varchar(20) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userId`, `fname`, `lname`, `email`, `upassword`, `created_at`, `updated_at`) VALUES
(1, 'dept. of chemistry', 'sppu', 'chemistry', '12345', '2018-12-25 17:22:26', '2018-12-25 17:22:26'),
(2, 'dept. of mathematics', 'sppu', 'math', '12345', '2018-12-25 17:22:46', '2018-12-25 17:22:46'),
(3, 'dept. of', 'electronic', 'electronics', '12345', '2018-12-25 18:07:59', '2018-12-25 18:07:59'),
(4, 'dept. of', 'instrumentation', 'instrumentation', '12345', '2018-12-25 18:13:50', '2018-12-25 18:13:50'),
(5, 'dept. of', 'environment', 'environment', '12345', '2018-12-25 18:15:23', '2018-12-25 18:15:23'),
(6, 'dept. of', 'zoology', 'zoology', '12345', '2018-12-25 18:15:49', '2018-12-25 18:15:49'),
(7, 'dept. of', 'biotechnology', 'biotechnology', '12345', '2018-12-25 18:18:26', '2018-12-25 18:18:26'),
(8, 'dept. of', 'geography', 'geography', '12345', '2018-12-25 18:19:26', '2018-12-25 18:19:26'),
(9, 'dept. of', 'geology', 'geology', '12345', '2018-12-25 18:19:57', '2018-12-25 18:19:57'),
(10, 'dept. of', 'physic', 'physic', '12345', '2018-12-25 18:20:23', '2018-12-25 18:20:23'),
(12, 'dept. of', 'botny', 'botny', '12345', '2018-12-25 18:21:23', '2018-12-25 18:21:23'),
(13, 'dept. of', 'statistic', 'statistic', '12345', '2018-12-25 18:22:18', '2018-12-25 18:22:18'),
(14, 'dept. of', 'computer', 'computer', '12345', '2018-12-25 18:22:46', '2018-12-25 18:22:46'),
(15, 'dept. of', 'microbiology', 'microbiology', '12345', '2018-12-25 18:23:18', '2018-12-25 18:23:18'),
(16, 'dept. of', 'media and communication', 'media and communication', '12345', '2018-12-25 18:24:07', '2018-12-25 18:24:07'),
(17, 'Department Of', 'Computer Science', 'hod@cs.unipune.ac.in', '12345', '2019-03-20 10:10:30', '2019-03-20 10:10:30'),
(18, 'Department Of', 'XYZ', 'xyz@gmail.com', '12345', '2019-03-20 13:16:27', '2019-03-20 13:16:27'),
(19, 'Department Of', 'abc', 'abc@gmail.com', '123', '2019-03-20 13:17:40', '2019-03-20 13:17:40'),
(20, 'Department Of', 'Pqr', 'pqr@gmail.com', '12345', '2019-03-20 13:27:07', '2019-03-20 13:27:07');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `DepartmentTrack`
--
ALTER TABLE `DepartmentTrack`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `TrackDocument`
--
ALTER TABLE `TrackDocument`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userId`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `DepartmentTrack`
--
ALTER TABLE `DepartmentTrack`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `TrackDocument`
--
ALTER TABLE `TrackDocument`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
