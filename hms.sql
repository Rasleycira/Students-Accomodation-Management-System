-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 02, 2020 at 01:33 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 5.6.36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hms`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_rooms`
--

CREATE TABLE `add_rooms` (
  `id` int(5) NOT NULL,
  `rooms_no` varchar(20) NOT NULL,
  `room_image` varchar(1000) NOT NULL,
  `room_price` varchar(1000) NOT NULL,
  `available` varchar(20) NOT NULL,
  `total_space` varchar(500) NOT NULL,
  `admin_username` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `add_rooms`
--

INSERT INTO `add_rooms` (`id`, `rooms_no`, `room_image`, `room_price`, `available`, `total_space`, `admin_username`) VALUES
(59, 'ROOM 6', 'room_image/5c74f8b23ab5e1378afebb11cc297447hostel4-1024x576.jpg', '33000ksh', '0', '', 'abc'),
(60, 'ROOM 2', 'room_image/cb9ea3da8cfd621d07ecd696a43c0b28hostel4-1024x576.jpg', '33000ksh', '0', '', 'abc'),
(61, 'ROOM 5', 'room_image/19a750536400a294057da0192e8c372dhostel4-1024x576.jpg', '33000ksh', '2', '', 'abc');

-- --------------------------------------------------------

--
-- Table structure for table `admin_registration`
--

CREATE TABLE `admin_registration` (
  `id` int(5) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `contact` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_registration`
--

INSERT INTO `admin_registration` (`id`, `firstname`, `lastname`, `username`, `password`, `email`, `contact`) VALUES
(1, 'abc', 'def', 'abc', 'def', 'abv@gmail.com', '9999999999');

-- --------------------------------------------------------

--
-- Table structure for table `issue_rooms`
--

CREATE TABLE `issue_rooms` (
  `id` int(10) NOT NULL,
  `student_registration` varchar(20) NOT NULL,
  `student_name` varchar(20) NOT NULL,
  `student_college` varchar(20) NOT NULL,
  `student_email` varchar(1000) NOT NULL,
  `rooms_no` varchar(20) NOT NULL,
  `room_enter day` varchar(20) NOT NULL,
  `room_exist_day` varchar(20) NOT NULL,
  `student_username` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `issue_rooms`
--

INSERT INTO `issue_rooms` (`id`, `student_registration`, `student_name`, `student_college`, `student_email`, `rooms_no`, `room_enter day`, `room_exist_day`, `student_username`) VALUES
(314, 'CIT-01-1120/2019', 'GEORGECAMERON', 'zetech', 'georgecameron@gmail', 'ROOM 1', '31-05-20', '', 'family'),
(315, 'BSCIT-01-1120/2009', 'maryatieno', 'NIBS', 'maryatieno@gmail', 'ROOM 1', '31-05-20', '', 'atieno'),
(316, 'KIST-0-0003', 'rasleycira', 'KIST', 'rancelychira@gmailc', 'ROOM 4', '01-06-20', '', 'ras'),
(317, 'k-99--111', 'joycemwende', 'KABETE', 'joycemwende@outlook', 'ROOM 1', '01-06-20', '', 'joy'),
(318, 'BSCIT-01-1120/2009', 'maryatieno', 'NIBS', 'maryatieno@gmail', 'ROOM 1', '01-06-20', '', 'atieno'),
(319, 'CIT-01-1120/2019', 'GEORGECAMERON', 'zetech', 'georgecameron@gmail', 'ROOM 2', '01-06-20', '', 'family'),
(320, 'BSCIT-01-1120/2009', 'maryatieno', 'NIBS', 'maryatieno@gmail', 'ROOM 3', '01-06-20', '', 'atieno'),
(321, 'CIT-01-1120/2019', 'GEORGECAMERON', 'zetech', 'georgecameron@gmail', 'ROOM 6', '02-06-20', '', 'family'),
(322, 'CIT-01-1120/2019', 'GEORGECAMERON', 'zetech', 'georgecameron@gmail', 'ROOM 6', '02-06-20', '', 'family'),
(323, 'k-99--111', 'joycemwende', 'KABETE', 'joycemwende@outlook', 'ROOM 2', '02-06-20', '', 'joy');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(5) NOT NULL,
  `susername` varchar(20) NOT NULL,
  `dusername` varchar(20) NOT NULL,
  `title` varchar(100) NOT NULL,
  `msg` varchar(500) NOT NULL,
  `read1` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `susername`, `dusername`, `title`, `msg`, `read1`) VALUES
(20, 'abc', 'family', 'hey', 'hope to see you soon', 'n'),
(21, 'abc', 'ras', 'haww', 'came too tomorrow', 'n'),
(22, 'abc', 'family', 'haww', '1234', 'n'),
(23, 'abc', 'Rasley Wanjiru', 'haww', '12wee', 'n'),
(24, 'abc', 'Rasley Wanjiru', 'thhhhhhhhhhhhhh', 'h890', 'n'),
(25, 'abc', 'Rasley Wanjiru', 'thhhhhhhhhhhhhh', 'h890', 'n'),
(26, 'abc', 'ras', 'sage', 'rrrrrrrrrrrr', 'n');

-- --------------------------------------------------------

--
-- Table structure for table `messages_admin`
--

CREATE TABLE `messages_admin` (
  `id` int(100) NOT NULL,
  `susername` varchar(20) NOT NULL,
  `dusername` varchar(20) NOT NULL,
  `room_no` varchar(500) NOT NULL,
  `title` varchar(20) NOT NULL,
  `msg` varchar(20) NOT NULL,
  `read1` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `messages_admin`
--

INSERT INTO `messages_admin` (`id`, `susername`, `dusername`, `room_no`, `title`, `msg`, `read1`) VALUES
(16, 'ras', 'abc', 'room2', 'sage', 'ddddddd', 'n'),
(17, 'ras', 'abc', 'room2', 'sage', 'juhh', 'n'),
(18, 'family', '', 'room2', 'haww', 'hjjj', 'n'),
(19, 'family', 'abc', 'room2', 'sage', 'jjjjjjjjjjj', 'n'),
(20, 'family', 'abc', 'room 7', 'sage', 'happy days', 'n'),
(21, 'family', 'abc', 'room2', 'haww', 'jjjjj', 'n'),
(22, 'family', 'abc', 'room2', 'haww', 'jjj', 'n');

-- --------------------------------------------------------

--
-- Table structure for table `student_registration`
--

CREATE TABLE `student_registration` (
  `id` int(5) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `college` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `registration` varchar(20) NOT NULL,
  `status` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_registration`
--

INSERT INTO `student_registration` (`id`, `firstname`, `lastname`, `username`, `password`, `college`, `email`, `gender`, `registration`, `status`) VALUES
(19, 'GEORGE', 'CAMERON', 'family', '0000', 'zetech', 'georgecameron@gmail', 'male', 'CIT-01-1120/2019', 'yes'),
(20, 'mary', 'atieno', 'atieno', '1234', 'NIBS', 'maryatieno@gmail', 'female', 'BSCIT-01-1120/2009', 'yes'),
(21, 'joyce', 'mwende', 'joy', '22222', 'KABETE', 'joycemwende@outlook', 'female', 'k-99--111', 'yes'),
(23, 'rasley', 'cira', 'ras', '1234', 'KIST', 'rancelychira@gmailc', 'male', 'KIST-0-0003', 'yes'),
(24, 'paul', 'okoth', 'paul', '1q2w', 'UON', 'paulokoth@gmailcom', 'male', 'N/80-/2', 'yes'),
(25, 'faith', 'nyakobo', 'faith2', 'zxcv', 'ZETECH', 'faithnyakibo@zetech.', 'female', 'P--87JJUI', 'yes'),
(26, 'wesley', 'kariuki', 'wesley', '1234', 'ST.PAUL', 'wesleykariuki@gmail', 'male', 'FR-4221-2011', 'yes');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_rooms`
--
ALTER TABLE `add_rooms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_registration`
--
ALTER TABLE `admin_registration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `issue_rooms`
--
ALTER TABLE `issue_rooms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages_admin`
--
ALTER TABLE `messages_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_registration`
--
ALTER TABLE `student_registration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_rooms`
--
ALTER TABLE `add_rooms`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `admin_registration`
--
ALTER TABLE `admin_registration`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `issue_rooms`
--
ALTER TABLE `issue_rooms`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=324;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `messages_admin`
--
ALTER TABLE `messages_admin`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `student_registration`
--
ALTER TABLE `student_registration`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
