-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 31, 2018 at 12:10 PM
-- Server version: 10.1.22-MariaDB
-- PHP Version: 7.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `server`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `admin_ident` varchar(20) NOT NULL,
  `admin_email` varchar(30) NOT NULL,
  `admin_key` varchar(100) NOT NULL,
  `type` varchar(1) NOT NULL,
  `admin_category` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `first_name`, `last_name`, `admin_ident`, `admin_email`, `admin_key`, `type`, `admin_category`) VALUES
(1, 'Sir', 'Stark', 'admin', 'admin@ultimatehub.co.ke', 'admin', '1', 'sudo su'),
(2, 'user', 'stark', 'user', 'user@ultimatehub.co.ke', '1234', '0', '');

-- --------------------------------------------------------

--
-- Table structure for table `uploads`
--

CREATE TABLE `uploads` (
  `id` int(11) NOT NULL,
  `admin_name` varchar(20) NOT NULL,
  `filename` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `uploads`
--

INSERT INTO `uploads` (`id`, `admin_name`, `filename`) VALUES
(1, 'admin', 'Corporate Music Baground.zip'),
(2, 'admin', 'Dubstep Vlog Music.zip'),
(3, 'admin', 'EDM Background Music.zip'),
(4, 'admin', 'Vlog Music.zip'),
(5, 'admin', 'Watch Ratchet & Clank 2016 Online - Free Movies.MP4'),
(6, 'admin', 'music matters 2017.mp3'),
(7, 'admin', 'Marshmello - Silence Ft. Khalid (Official Music Video).mp4'),
(8, 'admin', 'SEPTEMBER-2018-EXAMINATIONS-TIMETABLE.pdf'),
(9, 'admin', 'Ed Sheeran - Happier (Music Video).mp4'),
(10, 'admin', 'Fetch Data From MySQL DB Without Refreshing_Reloading Page Using jQuery AJAX.mp4'),
(11, 'admin', 'upload.php'),
(12, 'admin', 'upload.php'),
(13, 'admin', 'cyber security.docx'),
(14, 'admin', 'plms day.zip'),
(15, 'admin', 'lms-www-1.zip'),
(16, 'admin', 'users.sql'),
(17, 'admin', 'WhatsApp Image 2018-08-28 at 5.03.50 PM.jpeg'),
(18, 'admin', 'WhatsApp Image 2018-08-28 at 5.03.54 PM(1).jpeg'),
(19, 'user', 'Asian American Reading discussion.docx'),
(20, 'user', 'case study 4.docx'),
(21, 'admin', 'Father.of.the.Year.2018.720p.NF.WEB-DL @RickyChristanto.mkv'),
(22, 'admin', 'Unlocked 2017 720p BRRip 700 mb - iExTV.mp4'),
(23, 'admin', 'Natural.Born.Pranksters.2016.720p.WEB-DL.Ganool-[Nightsdl.com].mkv');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admin_ident` (`admin_ident`);

--
-- Indexes for table `uploads`
--
ALTER TABLE `uploads`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `uploads`
--
ALTER TABLE `uploads`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
