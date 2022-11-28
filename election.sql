-- phpMyAdmin SQL Dump
-- version 4.6.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 28, 2022 at 12:04 PM
-- Server version: 5.7.12-log
-- PHP Version: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `election`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_election`
--

CREATE TABLE `tbl_election` (
  `elec_id` int(11) NOT NULL,
  `image` text NOT NULL,
  `number` text NOT NULL,
  `name` varchar(64) NOT NULL,
  `class` text NOT NULL,
  `election_name` varchar(128) NOT NULL,
  `slogan` text NOT NULL,
  `tel` varchar(11) NOT NULL,
  `email` varchar(128) NOT NULL,
  `score` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_election`
--

INSERT INTO `tbl_election` (`elec_id`, `image`, `number`, `name`, `class`, `election_name`, `slogan`, `tel`, `email`, `score`) VALUES
(1, 'images/1.jpg', 'เบอร์ 1 ', 'นายธนากร แก้วประเสริฐ', 'ม.5/4', 'พรรค Error Graphic', 'ยกเลิก วิทย์ คณิต แล้วเรียนแต่ Graphic', '08122542224', 'Icesexyboy@gmail.com', 12),
(2, 'images/2.jpg', 'เบอร์ 2', 'นายวุฒิพงษ์ นาคเฮง', 'ม.5/7', 'พรรค Japan Girl', 'พาครูและนักเรียนศึกษาดูงานญี่ปุ่นภายใน ปีนี้', '08157812251', 'ballnaja@gmail.com', 3),
(3, 'images/3.jpg', 'เบอร์ 3', 'นายนพกร สุดแดง', 'ม.5/2', 'พรรค Computer Game', 'นักเรียนทุกคนต้องเล่นเกมจนชำนาญอย่างน้อย 10 เกม ถึงจบจากโรงเรียนนี้ได้', '08422512255', 'OHmyGod@gmail.com', 9);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_score`
--

CREATE TABLE `tbl_score` (
  `score` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(11) NOT NULL,
  `studentid` varchar(5) NOT NULL,
  `password` varchar(32) NOT NULL,
  `status` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `studentid`, `password`, `status`) VALUES
(1, 'admin', 'admin', '2'),
(2, '00001', '00001', '1'),
(3, '00002', '00002', '1'),
(4, '00003', '00003', '1');

-- --------------------------------------------------------

--
-- Table structure for table `vote`
--

CREATE TABLE `vote` (
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_election`
--
ALTER TABLE `tbl_election`
  ADD PRIMARY KEY (`elec_id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_election`
--
ALTER TABLE `tbl_election`
  MODIFY `elec_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
