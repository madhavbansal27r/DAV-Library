-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 21, 2022 at 04:47 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `library management`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  `type` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`, `type`) VALUES
(1, 'abc@gmail.com', '123', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `id` int(20) NOT NULL,
  `pic` varchar(20) NOT NULL,
  `name` varchar(30) NOT NULL,
  `detail` varchar(100) NOT NULL,
  `author` varchar(20) NOT NULL,
  `publication` varchar(20) NOT NULL,
  `branch` varchar(20) NOT NULL,
  `price` int(20) NOT NULL,
  `quantity` int(20) NOT NULL,
  `availability` int(20) NOT NULL,
  `rent` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`id`, `pic`, `name`, `detail`, `author`, `publication`, `branch`, `price`, `quantity`, `availability`, `rent`) VALUES
(1, 'main.PNG', 'madhav', 'asv', 'fdsf', 'fsdfsd', 'Other', 20, 20, 19, 37),
(2, 'index.PNG', 'bansal', 'sadasdas', 'adsfdsf', 'bvcxvxcv', 'BSCS', 213, 44, 44, 9),
(3, 'main.PNG', 'demo', 'adsad', 'xcvxcv', 'asd', 'BSIT', 1000, 2, 2, 47);

-- --------------------------------------------------------

--
-- Table structure for table `issue book`
--

CREATE TABLE `issue book` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `bookname` varchar(100) NOT NULL,
  `usertype` varchar(20) NOT NULL,
  `issuedays` int(20) NOT NULL,
  `issuedate` varchar(20) NOT NULL,
  `returndate` varchar(20) NOT NULL,
  `fine` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `requestbook`
--

CREATE TABLE `requestbook` (
  `id` int(20) NOT NULL,
  `userid` int(20) NOT NULL,
  `bookid` int(20) NOT NULL,
  `username` varchar(100) NOT NULL,
  `usertype` varchar(20) NOT NULL,
  `bookname` varchar(20) NOT NULL,
  `issuedays` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `requestbook`
--

INSERT INTO `requestbook` (`id`, `userid`, `bookid`, `username`, `usertype`, `bookname`, `issuedays`) VALUES
(3, 6, 1, 'madhav', 'Student', 'madhav', 0),
(4, 7, 3, 'madhav', 'Teacher', 'demo', 0),
(7, 6, 3, 'madhav', 'Student', 'demo', 0),
(8, 10, 3, 'aaaa', 'Student', 'demo', 0),
(9, 10, 2, 'aaaa', 'Student', 'bansal', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user data`
--

CREATE TABLE `user data` (
  `id` int(20) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user data`
--

INSERT INTO `user data` (`id`, `Name`, `Email`, `Password`, `type`) VALUES
(6, 'madhav', 'abc@gmail.com', '123', 'Student'),
(7, 'madhav', 'madhavbansal27r@gmail.com', '45', 'Teacher'),
(8, 'bansal', 'asd@gmail.com', '111', 'Teacher'),
(9, 'demo', 'demo@mail.com', 'demo', 'Teacher'),
(10, 'aaaa', 'aaaa@gmail.com', 'aaaa', 'Student');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `issue book`
--
ALTER TABLE `issue book`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `requestbook`
--
ALTER TABLE `requestbook`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user data`
--
ALTER TABLE `user data`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `Email` (`Email`),
  ADD UNIQUE KEY `Email_2` (`Email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `issue book`
--
ALTER TABLE `issue book`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `requestbook`
--
ALTER TABLE `requestbook`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `user data`
--
ALTER TABLE `user data`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
