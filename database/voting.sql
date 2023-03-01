-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 28, 2023 at 01:38 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vote`
--

-- --------------------------------------------------------

--
-- Table structure for table `candidate`
--

CREATE TABLE `candidate` (
  `candidate_id` int(11) NOT NULL,
  `position` varchar(100) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `year_level` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `img` varchar(100) NOT NULL,
  `party` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `candidate`
--

INSERT INTO `candidate` (`candidate_id`, `position`, `firstname`, `lastname`, `year_level`, `gender`, `img`, `party`) VALUES
(2, 'President', 'Wild', 'Tuna', '4th Year', 'Female', 'upload/2.jpg', 'UNLUSU'),
(3, 'Vice President', 'Charles', 'Kupa', '4th Year', 'Male', 'upload/FB_IMG_1512549340567.jpg', 'UPA'),
(4, 'Vice President', 'Mercy', 'Lastace', '1st Year', 'Female', 'upload/2016-Ford-Mustang-GT-KING-Edition-Convertible-Black-6-1600x900.jpg', 'UPP'),
(5, 'Union Advisor', 'Harry', 'Linkon', '3rd Year', 'Female', 'upload/2017-ford-mustang-gt-lt-15.jpg', 'DDA'),
(6, 'Union Advisor', 'Janet ', 'Ngulube', '1st Year', 'Female', 'upload/1920x1200-2087858-sports-car-wallpaper.jpg', 'ZAPO'),
(8, 'Sports Secretary', 'Garith', 'Bale', '4th Year', 'Male', 'upload/FB_IMG_1512549311412.jpg', 'FIFA 18'),
(9, 'Entertainment Advisor', 'Dj', 'Dazo', '4th Year', 'Female', 'upload/FB_IMG_1512549320331.jpg', '87.7 FM'),
(10, 'Entertainment Advisor', 'James ', 'Kalaba', '2nd Year', 'Female', 'upload/2.jpg', 'UNZA RADIO'),
(11, 'Treasurer', 'Mike', 'Banda', '4th Year', 'Male', 'upload/FB_IMG_1512549442135.jpg', 'BOZ'),
(12, 'Treasurer', 'Lisa', 'Mulenga', '4th Year', 'Female', 'upload/ws_Porsche_911_Autumn_1366x768.jpg', 'ZANACO'),
(13, 'Secretary General', 'Harison', 'Daka', '1st Year', 'Male', 'upload/FB_IMG_1512549340567.jpg', 'UNLUSU'),
(14, 'Secretary General', 'Susan', 'Nachalo', '1st Year', 'Female', 'upload/1920x1200-2087858-sports-car-wallpaper.jpg', 'UNZA RADIO'),
(15, 'Vice Treasurer', 'Kalumba', 'Mwiche', '4th Year', 'Male', 'upload/2016-ford-mustang-gt-v8-manual-grey-55.jpg', 'FIFA 18'),
(16, 'Vice Treasurer', 'Dickson', 'Shaka', '3rd Year', 'Male', 'upload/2016-Ford-Mustang-GT-KING-Edition-Convertible-Black-6-1600x900.jpg', 'UPP'),
(17, 'Transport & Accommodation Secretary', 'Mazhandu', 'Bus', '3rd Year', 'Male', 'upload/2017-ford-mustang-gt-lt-15.jpg', 'ZANACO'),
(19, 'Publicity Secretary', 'Headline', 'Mbewe', '2nd Year', 'Female', 'upload/FB_IMG_1512549320331.jpg', 'FIFA15'),
(20, 'Publicity Secretary', 'Daily', 'News', '4th Year', 'Female', 'upload/1920x1200-2087858-sports-car-wallpaper.jpg', 'UNLUSU'),
(21, 'Academics Secretary', 'Michelle', 'Mwale', '3rd Year', 'Female', 'upload/2.jpg', 'UNZA RADIO'),
(22, 'Academics Secretary', 'Gift', 'Nkhole', '2nd Year', 'Male', 'upload/FB_IMG_1512549311412.jpg', 'FIFA 18'),
(23, 'President', 'achu', 'achu', '4th Year', 'Male', 'upload/c2c26853e4d9564e678cf07b5382ea16.jpg', 'ksu'),
(24, 'President', 'Marny', 'Carney', '2nd Year', 'Female', 'upload/Love is given not taken4880_rectangle.jpg', 'Aut beatae corporis '),
(25, 'President', 'Shana', 'Hobbs', '2nd Year', 'Female', 'upload/vlcsnap-00001.jpg', 'Voluptate et volupta');

-- --------------------------------------------------------

--
-- Table structure for table `ids`
--

CREATE TABLE `ids` (
  `id_number` varchar(100) NOT NULL,
  `names` varchar(225) NOT NULL,
  `started` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ids`
--

INSERT INTO `ids` (`id_number`, `names`, `started`) VALUES
('BIT114', 'Jamason Liquor', '2017-06-20'),
('BIT121', 'arunima', '2021-04-16'),
('BIT190', 'manu suresh', '2023-02-20'),
('BIT225', 'indrajith r nair', '2023-02-18'),
('BIT333', 'sreyas satheesh', '2023-02-25'),
('BITED100', 'Joe Kay', '2019-02-14');

-- --------------------------------------------------------

--
-- Table structure for table `logins`
--

CREATE TABLE `logins` (
  `user_id` int(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `login_time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `logins`
--

INSERT INTO `logins` (`user_id`, `username`, `login_time`) VALUES
(1, ' user', '2019-02-12 13:21:43'),
(2, ' user', '2019-02-12 13:37:32'),
(3, ' user', '2019-02-12 18:44:37'),
(4, ' user', '2023-02-25 11:15:38'),
(5, ' user', '2023-02-25 12:10:39'),
(6, ' user', '2023-02-25 12:16:35'),
(7, ' user', '2023-02-25 13:05:36'),
(8, ' user', '2023-02-25 13:14:40'),
(9, ' user', '2023-02-25 15:29:41'),
(10, ' user', '2023-02-25 18:42:50'),
(11, ' user', '2023-02-25 18:55:06'),
(12, ' user', '2023-02-25 19:28:57'),
(13, ' user', '2023-02-25 19:44:04'),
(14, ' user', '2023-02-25 19:49:48'),
(15, ' user', '2023-02-25 19:53:02'),
(16, ' zoteda', '2023-02-26 01:52:07'),
(17, ' user', '2023-02-26 10:12:42'),
(18, ' user', '2023-02-27 12:17:54'),
(19, ' user', '2023-02-27 22:06:06'),
(20, ' user', '2023-02-27 23:06:39'),
(21, ' user', '2023-02-28 14:07:03');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `Phone` int(100) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `password`, `firstname`, `lastname`, `Phone`, `email`) VALUES
(1, 'admin', 'admin', 'shybin', 'k thomas', 977112458, 'Kapiya@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `Phone` int(11) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `accepted` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `firstname`, `lastname`, `Phone`, `email`, `accepted`) VALUES
(1, 'user', 'user', 'Kaden', 'Bowen', 2147483647, 'jykypawo@mailinator.com', 1);

-- --------------------------------------------------------

--
-- Table structure for table `voters`
--

CREATE TABLE `voters` (
  `voters_id` int(11) NOT NULL,
  `id_number` varchar(12) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `prog_study` varchar(10) NOT NULL,
  `year_level` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `account` varchar(100) NOT NULL DEFAULT 'Inactive',
  `banned` tinyint(1) NOT NULL DEFAULT 0,
  `date` date DEFAULT NULL,
  `password` varchar(100) NOT NULL,
  `accepted` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `voters`
--

INSERT INTO `voters` (`voters_id`, `id_number`, `firstname`, `lastname`, `gender`, `prog_study`, `year_level`, `status`, `account`, `banned`, `date`, `password`, `accepted`) VALUES
(59, 'BIT101', 'Wild', 'Cat3', 'Male', 'BIT', '1st Year', 'Voted', 'Active', 0, '2019-02-09', '4a7d1ed414474e4033ac29ccb8653d9b', 1),
(60, 'BIT113', 'w', 'Turner', 'Male', 'BIT', '1st Year', 'Voted', 'Active', 0, '2019-02-11', '4a7d1ed414474e4033ac29ccb8653d9b', 1),
(61, 'BFIN119', 'Jane', 'Mwale', 'Female', 'BFIN', '2nd Year', 'Unvoted', 'Active', 0, '2019-02-12', '4a7d1ed414474e4033ac29ccb8653d9b', 1),
(63, 'BIT114', 'James  ', 'Daka', 'Male', 'BIT', '4th Year', 'Voted', 'Active', 0, '2019-02-12', '4a7d1ed414474e4033ac29ccb8653d9b', 1),
(64, 'DS116', 'Angel', 'Koni', 'Female', 'DS', '4th Year', 'Unvoted', 'Active', 0, '2019-02-12', '4a7d1ed414474e4033ac29ccb8653d9b', 1),
(65, 'LLB115', 'Juliet', 'Kamasa', 'Female', 'LLB', '1st Year', 'Unvoted', 'Active', 0, '2019-02-12', '4a7d1ed414474e4033ac29ccb8653d9b', 1),
(66, 'LLB118', 'Willium ', 'Daka', 'Male', 'LLB', '3rd Year', 'Unvoted', 'Active', 0, '2019-02-12', '4a7d1ed414474e4033ac29ccb8653d9b', 1),
(67, 'PBH117', 'Kapiya ', 'Charles', 'Male', 'PBH', '4th Year', 'Unvoted', 'Active', 0, '2019-02-12', '4a7d1ed414474e4033ac29ccb8653d9b', 1),
(71, 'BIT112', 'Lisa', 'Newtone', 'Female', 'BIT', '3rd Year', 'Unvoted', 'Active', 0, '2019-02-14', '4a7d1ed414474e4033ac29ccb8653d9b', 1),
(72, 'BITED100', 'Joe', 'Kay', 'Male', 'BITED', '1st Year', 'Unvoted', 'Active', 0, '2019-02-14', '4a7d1ed414474e4033ac29ccb8653d9b', 1),
(73, 'BIT190', 'manu', 'suresh', 'Male', 'BIT', '1st Year', 'Unvoted', 'Active', 0, '2023-02-20', '5f4dcc3b5aa765d61d8327deb882cf99', 1),
(74, 'BIT333', 'sreyas', 'satheesh', 'Male', 'BIT', '3rd Year', 'Voted', 'Active', 0, '2023-02-25', 'f46c2acc4c3c7a375639705f9d9b6fd2', 0);

-- --------------------------------------------------------

--
-- Table structure for table `votes`
--

CREATE TABLE `votes` (
  `vote_id` int(255) NOT NULL,
  `candidate_id` varchar(255) NOT NULL,
  `voters_id` varchar(255) NOT NULL,
  `banned` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `votes`
--

INSERT INTO `votes` (`vote_id`, `candidate_id`, `voters_id`, `banned`) VALUES
(111, '1', '59', 0),
(112, '3', '59', 0),
(113, '6', '59', 0),
(114, '8', '59', 0),
(115, '9', '59', 0),
(116, '11', '59', 0),
(117, '14', '59', 0),
(118, '15', '59', 0),
(119, '18', '59', 0),
(120, '19', '59', 0),
(121, '22', '59', 0),
(122, '2', '63', 0),
(123, '3', '63', 0),
(124, '6', '63', 0),
(125, '8', '63', 0),
(126, '10', '63', 0),
(127, '11', '63', 0),
(128, '13', '63', 0),
(129, '16', '63', 0),
(130, '17', '63', 0),
(131, '19', '63', 0),
(132, '22', '63', 0),
(133, '1', '74', 0),
(134, '3', '74', 0),
(135, '5', '74', 0),
(136, '8', '74', 0),
(137, '10', '74', 0),
(138, '12', '74', 0),
(139, '13', '74', 0),
(140, '16', '74', 0),
(141, '17', '74', 0),
(142, '19', '74', 0),
(143, '22', '74', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `candidate`
--
ALTER TABLE `candidate`
  ADD PRIMARY KEY (`candidate_id`);

--
-- Indexes for table `ids`
--
ALTER TABLE `ids`
  ADD PRIMARY KEY (`id_number`);

--
-- Indexes for table `logins`
--
ALTER TABLE `logins`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `voters`
--
ALTER TABLE `voters`
  ADD PRIMARY KEY (`voters_id`),
  ADD UNIQUE KEY `id_number` (`id_number`);

--
-- Indexes for table `votes`
--
ALTER TABLE `votes`
  ADD PRIMARY KEY (`vote_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `candidate`
--
ALTER TABLE `candidate`
  MODIFY `candidate_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `logins`
--
ALTER TABLE `logins`
  MODIFY `user_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `voters`
--
ALTER TABLE `voters`
  MODIFY `voters_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT for table `votes`
--
ALTER TABLE `votes`
  MODIFY `vote_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=144;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
