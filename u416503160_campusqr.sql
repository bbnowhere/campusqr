-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 22, 2022 at 01:30 AM
-- Server version: 10.5.12-MariaDB-cll-lve
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u416503160_campusqr`
--

-- --------------------------------------------------------

--
-- Table structure for table `qr`
--

CREATE TABLE `qr` (
  `qrid` int(11) NOT NULL,
  `locationname` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `qr`
--

INSERT INTO `qr` (`qrid`, `locationname`) VALUES
(1010, 'IT'),
(2020, 'DATA CENTER'),
(3030, 'SERVER ROOM');

-- --------------------------------------------------------

--
-- Table structure for table `scandata`
--

CREATE TABLE `scandata` (
  `device` varchar(250) DEFAULT NULL,
  `mail` varchar(255) NOT NULL,
  `qrid` int(10) NOT NULL,
  `date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `scandata`
--

INSERT INTO `scandata` (`device`, `mail`, `qrid`, `date`) VALUES
('9130894a1bbf57d5', 'alok.bhaisare@iu-study.org', 2020, '2022-09-15 07:33:24'),
('9130894a1bbf57d5', 'test@gmail.com', 2020, '2022-09-15 07:33:47'),
('9130894a1bbf57d5', 'test@gmail.com', 2020, '2022-09-15 07:33:47'),
('9130894a1bbf57d5', 'test@gmail.com', 2020, '2022-09-15 07:35:08'),
('9130894a1bbf57d5', 'test@gmail.com', 2020, '2022-09-15 07:33:47'),
('9130894a1bbf57d5', 'test@gmail.com', 2020, '2022-09-15 07:35:08'),
('9130894a1bbf57d5', 'test@gmail.com', 2020, '2022-09-15 07:33:47'),
('9130894a1bbf57d5', 'test@gmail.com', 1010, '2022-09-15 07:35:17'),
('9130894a1bbf57d5', 'test@gmail.com', 2020, '2022-09-15 07:35:08'),
('9130894a1bbf57d5', 'test@gmail.com', 2020, '2022-09-15 07:33:47'),
('9130894a1bbf57d5', 'test@gmail.com', 1010, '2022-09-15 07:35:17'),
('9130894a1bbf57d5', 'test@gmail.com', 2020, '2022-09-15 07:35:08'),
('9130894a1bbf57d5', 'test@gmail.com', 2020, '2022-09-15 07:33:47'),
('9130894a1bbf57d5', 'test@gmail.com', 3030, '2022-09-15 07:35:24'),
('9130894a1bbf57d5', 'test@gmail.com', 1010, '2022-09-15 07:35:17'),
('9130894a1bbf57d5', 'test@gmail.com', 2020, '2022-09-15 07:35:08'),
('9130894a1bbf57d5', 'test@gmail.com', 2020, '2022-09-15 07:33:47'),
('9130894a1bbf57d5', 'alok.bhaisare@iu-study.org', 1010, '2022-09-17 06:58:33');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_member`
--

CREATE TABLE `tbl_member` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(200) NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_member`
--

INSERT INTO `tbl_member` (`id`, `username`, `password`, `create_at`) VALUES
(1, 'admin', '$2y$10$3ZnwXA1hl0oSTOmnRC7KRu4jh0d8eVsZfIWpT.6nPuuvpb.MU96tW', '2021-08-05 02:18:40'),
(2, 'user', 'bad220c335d0c1f53548f6acdb17e265', '2022-08-25 09:26:55');

-- --------------------------------------------------------

--
-- Table structure for table `userreg`
--

CREATE TABLE `userreg` (
  `ID` int(10) NOT NULL,
  `name` varchar(60) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `section` varchar(60) NOT NULL,
  `mobile` varchar(60) DEFAULT NULL,
  `device` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userreg`
--

INSERT INTO `userreg` (`ID`, `name`, `mail`, `section`, `mobile`, `device`) VALUES
(1, 'Sonia ', 'sonia@gmail.com', 'IT', '8553154502', NULL),
(5, 'don', 'don@gmail.com', 'IT', '8553154502', NULL),
(9, 'Alok', 'alokdivine@gmail.com', 'IT', '8553154502', NULL),
(15, 'Alok Bhaisare', 'alok.bhaisare@iu-study.org', 'IT', '8553154502', NULL),
(19, 'Zanele', 'test@gmail.com', 'IT', '8208928373', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `qr`
--
ALTER TABLE `qr`
  ADD PRIMARY KEY (`qrid`);

--
-- Indexes for table `scandata`
--
ALTER TABLE `scandata`
  ADD KEY `qrid` (`qrid`);

--
-- Indexes for table `tbl_member`
--
ALTER TABLE `tbl_member`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userreg`
--
ALTER TABLE `userreg`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `mail` (`mail`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_member`
--
ALTER TABLE `tbl_member`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `userreg`
--
ALTER TABLE `userreg`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `scandata`
--
ALTER TABLE `scandata`
  ADD CONSTRAINT `scandata_ibfk_1` FOREIGN KEY (`qrid`) REFERENCES `qr` (`qrid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
