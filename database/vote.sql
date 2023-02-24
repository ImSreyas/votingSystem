-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 14, 2019 at 07:09 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
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
(1, 'President', 'Wilz', 'John', '3rd Year', 'Male', 'upload/163.jpg', 'UNLUSU'),
(2, 'President', 'Wild', 'Tuna', '4th Year', 'Female', 'upload/2.jpg', 'UNLUSU'),
(3, 'Vice President', 'Charles', 'Kupa', '4th Year', 'Male', 'upload/FB_IMG_1512549340567.jpg', 'UPA'),
(4, 'Vice President', 'Mercy', 'Lastace', '1st Year', 'Female', 'upload/2016-Ford-Mustang-GT-KING-Edition-Convertible-Black-6-1600x900.jpg', 'UPP'),
(5, 'Union Advisor', 'Harry', 'Linkon', '3rd Year', 'Female', 'upload/2017-ford-mustang-gt-lt-15.jpg', 'DDA'),
(6, 'Union Advisor', 'Janet ', 'Ngulube', '1st Year', 'Female', 'upload/1920x1200-2087858-sports-car-wallpaper.jpg', 'ZAPO'),
(7, 'Sports Secretary', 'Christianol', 'Ronaldo', '1st Year', 'Male', 'upload/163.jpg', 'FIFA15'),
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
(18, 'Transport & Accommodation Secretary', 'Flight', 'Njovu', '1st Year', 'Female', 'upload/ws_Porsche_911_Autumn_1366x768.jpg', 'DDA'),
(19, 'Publicity Secretary', 'Headline', 'Mbewe', '2nd Year', 'Female', 'upload/FB_IMG_1512549320331.jpg', 'FIFA15'),
(20, 'Publicity Secretary', 'Daily', 'News', '4th Year', 'Female', 'upload/1920x1200-2087858-sports-car-wallpaper.jpg', 'UNLUSU'),
(21, 'Academics Secretary', 'Michelle', 'Mwale', '3rd Year', 'Female', 'upload/2.jpg', 'UNZA RADIO'),
(22, 'Academics Secretary', 'Gift', 'Nkhole', '2nd Year', 'Male', 'upload/FB_IMG_1512549311412.jpg', 'FIFA 18');

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
('BFIN119', 'Finous Acculate', '2021-04-16'),
('BIT101', 'Wild Cat Three', '2019-02-09'),
('BIT110', 'Metoo Jack', '2015-01-09'),
('BIT112', 'Charles Mukupa', '2019-02-09'),
('BIT113', 'Wl Turner', '2019-02-11'),
('BIT114', 'Jamason Liquor', '2017-06-20'),
('BITED100', 'Joe Kay', '2019-02-14'),
('DS116', 'Devy Stud', '2019-02-12'),
('LLB115', 'Judy Court', '2017-07-16'),
('LLB118', 'Jackline Hamster', '2013-10-17'),
('PBH117', 'Publy Hether', '2018-07-12');

-- --------------------------------------------------------

--
-- Table structure for table `logins`
--

CREATE TABLE `logins` (
  `user_id` int(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `login_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `logins`
--

INSERT INTO `logins` (`user_id`, `username`, `login_time`) VALUES
(1, ' user', '2019-02-12 13:21:43'),
(2, ' user', '2019-02-12 13:37:32'),
(3, ' user', '2019-02-12 18:44:37');

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
(1, 'admin', 'admin', 'Charles', 'Kupa', 977112458, 'Kapiya@gmail.com');

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
  `Phone` int(100) NOT NULL DEFAULT '260',
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `firstname`, `lastname`, `Phone`, `email`) VALUES
(4, 'user', 'user', 'C', 'Cat3', 253626, 'char@mail.com');

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
  `date` date DEFAULT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `voters`
--

INSERT INTO `voters` (`voters_id`, `id_number`, `firstname`, `lastname`, `gender`, `prog_study`, `year_level`, `status`, `account`, `date`, `password`) VALUES
(59, 'BIT101', 'Wild', 'Cat3', 'Male', 'BIT', '1st Year', 'Voted', 'Active', '2019-02-09', '4a7d1ed414474e4033ac29ccb8653d9b'),
(60, 'BIT113', 'w', 'Turner', 'Male', 'BIT', '1st Year', 'Voted', 'Active', '2019-02-11', '4a7d1ed414474e4033ac29ccb8653d9b'),
(61, 'BFIN119', 'Jane', 'Mwale', 'Female', 'BFIN', '2nd Year', 'Unvoted', 'Active', '2019-02-12', '4a7d1ed414474e4033ac29ccb8653d9b'),
(62, 'BIT110', 'Isaac ', 'Phiri', 'Male', 'BIT', '3rd Year', 'Unvoted', 'Active', '2019-02-12', '4a7d1ed414474e4033ac29ccb8653d9b'),
(63, 'BIT114', 'James  ', 'Daka', 'Male', 'BIT', '4th Year', 'Voted', 'Active', '2019-02-12', '4a7d1ed414474e4033ac29ccb8653d9b'),
(64, 'DS116', 'Angel', 'Koni', 'Female', 'DS', '4th Year', 'Unvoted', 'Active', '2019-02-12', '4a7d1ed414474e4033ac29ccb8653d9b'),
(65, 'LLB115', 'Juliet', 'Kamasa', 'Female', 'LLB', '1st Year', 'Unvoted', 'Active', '2019-02-12', '4a7d1ed414474e4033ac29ccb8653d9b'),
(66, 'LLB118', 'Willium ', 'Daka', 'Male', 'LLB', '3rd Year', 'Unvoted', 'Active', '2019-02-12', '4a7d1ed414474e4033ac29ccb8653d9b'),
(67, 'PBH117', 'Kapiya ', 'Charles', 'Male', 'PBH', '4th Year', 'Unvoted', 'Active', '2019-02-12', '4a7d1ed414474e4033ac29ccb8653d9b'),
(71, 'BIT112', 'Lisa', 'Newtone', 'Female', 'BIT', '3rd Year', 'Unvoted', 'Active', '2019-02-14', '4a7d1ed414474e4033ac29ccb8653d9b'),
(72, 'BITED100', 'Joe', 'Kay', 'Male', 'BITED', '1st Year', 'Unvoted', 'Active', '2019-02-14', '4a7d1ed414474e4033ac29ccb8653d9b');

-- --------------------------------------------------------

--
-- Table structure for table `votes`
--

CREATE TABLE `votes` (
  `vote_id` int(255) NOT NULL,
  `candidate_id` varchar(255) NOT NULL,
  `voters_id` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `votes`
--

INSERT INTO `votes` (`vote_id`, `candidate_id`, `voters_id`) VALUES
(111, '1', '59'),
(112, '3', '59'),
(113, '6', '59'),
(114, '8', '59'),
(115, '9', '59'),
(116, '11', '59'),
(117, '14', '59'),
(118, '15', '59'),
(119, '18', '59'),
(120, '19', '59'),
(121, '22', '59'),
(122, '2', '63'),
(123, '3', '63'),
(124, '6', '63'),
(125, '8', '63'),
(126, '10', '63'),
(127, '11', '63'),
(128, '13', '63'),
(129, '16', '63'),
(130, '17', '63'),
(131, '19', '63'),
(132, '22', '63');

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
  MODIFY `candidate_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `logins`
--
ALTER TABLE `logins`
  MODIFY `user_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `voters`
--
ALTER TABLE `voters`
  MODIFY `voters_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT for table `votes`
--
ALTER TABLE `votes`
  MODIFY `vote_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=133;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
