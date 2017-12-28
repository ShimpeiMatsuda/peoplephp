-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 2017 年 12 朁E28 日 03:04
-- サーバのバージョン： 10.1.28-MariaDB
-- PHP Version: 7.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `peopledb`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `countrytbl`
--

CREATE TABLE `countrytbl` (
  `countryid` int(30) NOT NULL,
  `countryname` varchar(30) NOT NULL,
  `nationality` varchar(40) NOT NULL,
  `primary_language` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- テーブルのデータのダンプ `countrytbl`
--

INSERT INTO `countrytbl` (`countryid`, `countryname`, `nationality`, `primary_language`) VALUES
(1, 'Japan', 'Japanese', 'Japanese'),
(2, 'Philippines', 'Filipino', 'Filipino'),
(3, 'others', 'others', 'others');

-- --------------------------------------------------------

--
-- テーブルの構造 `persontbl`
--

CREATE TABLE `persontbl` (
  `perid` int(20) NOT NULL,
  `name` varchar(30) NOT NULL,
  `countryid` int(12) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `age` int(30) NOT NULL,
  `address` varchar(100) NOT NULL,
  `description` varchar(2500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- テーブルのデータのダンプ `persontbl`
--

INSERT INTO `persontbl` (`perid`, `name`, `countryid`, `gender`, `age`, `address`, `description`) VALUES
(1, 'shimpei', 1, 'male', 22, 'Kobe', 'Very nice guy'),
(2, 'shimpei', 1, 'male', 22, 'Kobe', 'very handsome'),
(6, 'sam', 2, 'male', 28, 'Cebu', 'IT teacher'),
(7, 'sam', 2, 'male', 28, 'Cebu', 'IT teacher');

-- --------------------------------------------------------

--
-- テーブルの構造 `usertbl`
--

CREATE TABLE `usertbl` (
  `userid` int(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- テーブルのデータのダンプ `usertbl`
--

INSERT INTO `usertbl` (`userid`, `username`, `email`, `password`) VALUES
(1, 'kabo', 'kabo@gmail.com', '58217682ef7e15d921246a396b684fb7'),
(2, 'sam', 'sam@', '202cb962ac59075b964b07152d234b70');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `countrytbl`
--
ALTER TABLE `countrytbl`
  ADD PRIMARY KEY (`countryid`);

--
-- Indexes for table `persontbl`
--
ALTER TABLE `persontbl`
  ADD PRIMARY KEY (`perid`);

--
-- Indexes for table `usertbl`
--
ALTER TABLE `usertbl`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `countrytbl`
--
ALTER TABLE `countrytbl`
  MODIFY `countryid` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `persontbl`
--
ALTER TABLE `persontbl`
  MODIFY `perid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `usertbl`
--
ALTER TABLE `usertbl`
  MODIFY `userid` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
