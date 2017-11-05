-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 06, 2017 at 01:38 AM
-- Server version: 5.7.20-0ubuntu0.16.04.1
-- PHP Version: 7.0.22-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quiz`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(1, 'Computer Science'),
(2, 'General Knowledge'),
(3, 'Current Affiars'),
(4, 'Electronics');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `email` varchar(30) NOT NULL,
  `message` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `subject`, `email`, `message`) VALUES
(1, 'Ngangbam Indrason', 'Improvement', 'indrasonkangla@gmail.com', 'Need some improvement');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` int(11) NOT NULL,
  `question` varchar(300) NOT NULL,
  `option1` varchar(200) NOT NULL,
  `option2` varchar(200) NOT NULL,
  `option3` varchar(200) NOT NULL,
  `option4` varchar(200) NOT NULL,
  `answer` int(11) NOT NULL,
  `category` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `question`, `option1`, `option2`, `option3`, `option4`, `answer`, `category`) VALUES
(1, 'Who designed C Programming?', 'Dennis Ritchie', 'Bjarne Stroustrup', 'James Gosling', 'Brendan Eich', 1, 'Computer Science'),
(2, 'Who designed C++ Programming?', 'Brendan Eich', 'Bjarne Stroustrup', 'Dennis Ritchie', 'James Gosling', 2, 'Computer Science'),
(3, 'Which is the only floating National Park in the World?', 'Kaziranga National Park, India', 'Ben Boyd National Park, Australia', 'Keibul Lamjao National Park, India', 'Big Bend National Park, USA', 3, 'General Knowledge'),
(4, 'Which continent has the maximum number of countries in the World?', 'Europe', 'North America', 'Asia', 'Africa', 4, 'General Knowledge'),
(5, 'What is the Rank of India according to the size of the country?', '2nd Rank', '3rd Rank', '6th Rank', '7th Rank', 4, 'General Knowledge'),
(6, 'Who received the Nobel Prize in Literature in 2017?', 'Kazuo Ishiguro', 'Jacques Dubochet', 'Rainer Weiss', 'Richard Thaler', 1, 'Current Affiars'),
(7, 'Who is the richest person in India?', 'Lakshmi Mittal', 'Mukesh Ambani', 'Binny Bansal', 'Rahul Bajaj', 2, 'Current Affiars'),
(8, 'How many programming languages are there?', '158', '203', '256', '298', 3, 'Computer Science'),
(9, 'Who is oldest living person in the World?', 'Sarah Knauss (119 years) - US', 'Jeanne Calment (122 years) - France', 'Nabi Tajima (117 years) - Japan', 'Jiroemon Kimura (116 years) - Japan', 3, 'Current Affiars');

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE `result` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `category` varchar(50) NOT NULL,
  `dated` varchar(30) NOT NULL,
  `marks` varchar(11) NOT NULL,
  `totalmarks` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`id`, `username`, `category`, `dated`, `marks`, `totalmarks`) VALUES
(1, 'priyanshu10193', 'General Knowledge', 'Sun 05 Nov 2017-06:50:34 PM', '3', 3),
(2, 'chitra', 'Computer Science', 'Sun 05 Nov 2017-07:51:57 PM', '2', 3),
(3, 'chitra', 'General Knowledge', 'Sun 05 Nov 2017-07:59:11 PM', '2', 3);

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`id`, `name`) VALUES
(1, 'C'),
(2, 'C++'),
(3, 'HTML/CSS'),
(4, 'Open Source'),
(5, 'Digital Electronics'),
(6, 'Mechanics'),
(7, 'Ionic');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fullname` varchar(50) DEFAULT NULL,
  `username` varchar(30) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `dob` varchar(10) DEFAULT NULL,
  `qualification` varchar(30) DEFAULT NULL,
  `college` varchar(50) DEFAULT NULL,
  `password` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fullname`, `username`, `email`, `dob`, `qualification`, `college`, `password`) VALUES
(1, 'jack', 'tom', NULL, NULL, NULL, 'lpu', '123'),
(2, 'Ngangbam Indrason', 'IndraC96', 'indrasonkangla@gmail.com', '1996-01-28', 'B.Tech', 'Lovely Professional University', '1234'),
(3, 'tomba', 'tomba123', NULL, NULL, NULL, NULL, '321'),
(4, 'Waikhom Chitradhani Devi', 'chitra', '', '1995-10-17', 'B.A', 'Lovely Professional University', 'qwerty'),
(5, 'Roshni Kumar', 'roshni', NULL, NULL, NULL, 'LPU', 'kumar'),
(6, 'Utkarsh Singh', 'utk9695', NULL, NULL, NULL, 'LPU', 'shreya'),
(8, 'priyanshu srivastava', 'priyanshu10193', NULL, NULL, NULL, 'lucknow christian collage', '123654');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `result`
--
ALTER TABLE `result`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `result`
--
ALTER TABLE `result`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
