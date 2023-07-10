-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 24, 2023 at 08:27 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `myportfolio`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int(11) NOT NULL,
  `profile_pic` varchar(300) NOT NULL,
  `about_title` varchar(300) NOT NULL,
  `about_subtitle` varchar(320) NOT NULL,
  `about_desc` varchar(340) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `profile_pic`, `about_title`, `about_subtitle`, `about_desc`) VALUES
(1, 'dist/img/WhatsApp Image 2023-05-15 at 18.02.56 (2).jpeg', 'Php Developer', 'I\'am student at Baku Engeneering Univercity and faculty is computer engeneering.', 'I am a 20 years old computer\r\nengineering student. Adept at\r\nmonitoring and maintaining\r\nbackend performance and\r\ntroubleshooting and debugging the\r\nsame to bolster overall\r\nperformance.');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `ad_pic` varchar(430) NOT NULL,
  `ad_logo` varchar(300) NOT NULL,
  `ad_name` varchar(420) NOT NULL,
  `ad_title` varchar(400) NOT NULL,
  `ad_usarname` varchar(320) NOT NULL,
  `ad_password` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `ad_pic`, `ad_logo`, `ad_name`, `ad_title`, `ad_usarname`, `ad_password`) VALUES
(1, 'dist/img/WhatsApp Image 2023-05-15 at 18.02.56.jpeg', 'Admin Panel', 'Cavidan Nasirov', 'Admin Panel', 'cavidan', '2003');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `adress` varchar(320) NOT NULL,
  `email` varchar(350) NOT NULL,
  `mobile` varchar(310) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `adress`, `email`, `mobile`) VALUES
(1, 'Papanin, InBaku', 'nasirovcavidan2003@gmail.com', '050 820 83 14');

-- --------------------------------------------------------

--
-- Table structure for table `galery`
--

CREATE TABLE `galery` (
  `id` int(11) NOT NULL,
  `galery_picture` varchar(320) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `galery`
--

INSERT INTO `galery` (`id`, `galery_picture`) VALUES
(4, 'dist/img/WhatsApp Image 2023-05-22 at 14.38.40.jpeg'),
(5, 'dist/img/WhatsApp Image 2023-05-22 at 14.38.58.jpeg'),
(6, 'dist/img/WhatsApp Image 2023-05-22 at 14.38.41.jpeg'),
(7, 'dist/img/WhatsApp Image 2023-05-23 at 13.54.18.jpeg'),
(8, 'dist/img/WhatsApp Image 2023-05-23 at 14.00.11.jpeg'),
(12, 'dist/img/WhatsApp Image 2023-05-23 at 14.09.21.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `home`
--

CREATE TABLE `home` (
  `id` int(11) NOT NULL,
  `home_name` varchar(300) NOT NULL,
  `home_title` varchar(300) NOT NULL,
  `facebook` varchar(430) NOT NULL,
  `instagram` varchar(320) NOT NULL,
  `linkedin` varchar(300) NOT NULL,
  `twitter` varchar(300) NOT NULL,
  `github` varchar(340) NOT NULL,
  `skype` varchar(340) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `home`
--

INSERT INTO `home` (`id`, `home_name`, `home_title`, `facebook`, `instagram`, `linkedin`, `twitter`, `github`, `skype`) VALUES
(1, 'Cavidan', 'Php Developer', 'https://www.facebook.com/cavidan.nesirov.90?mibextid=ZbWKwL', 'https://instagram.com/cavida_n_asirov?igshid=OTk0YzhjMDVlZA==', 'https://www.linkedin.com/in/cavidan-n%C9%99sirov-624514258/', '', 'https://github.com/Cavidan03', '');

-- --------------------------------------------------------

--
-- Table structure for table `personal_info`
--

CREATE TABLE `personal_info` (
  `id` int(11) NOT NULL,
  `personal_label` varchar(300) NOT NULL,
  `personal_value` varchar(430) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `personal_info`
--

INSERT INTO `personal_info` (`id`, `personal_label`, `personal_value`) VALUES
(1, 'Birthday', '10.10.2003'),
(2, 'Degree', 'Bacheolar'),
(3, 'City', 'Lankaran'),
(6, 'Website', 'www.myportfolio.az');

-- --------------------------------------------------------

--
-- Table structure for table `portfolio`
--

CREATE TABLE `portfolio` (
  `id` int(11) NOT NULL,
  `project_type` varchar(320) NOT NULL,
  `project_name` varchar(320) NOT NULL,
  `project_pic` varchar(300) NOT NULL,
  `project_link` varchar(340) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `portfolio`
--

INSERT INTO `portfolio` (`id`, `project_type`, `project_name`, `project_pic`, `project_link`) VALUES
(4, 'Web', 'Forgot Password', 'dist/img/login.PNG', 'https://github.com/Cavidan03/Forgot-Password'),
(5, 'Web', 'Digital Clock', 'dist/img/clock.PNG', 'https://github.com/Cavidan03/Digital-Clock');

-- --------------------------------------------------------

--
-- Table structure for table `resume`
--

CREATE TABLE `resume` (
  `id` int(11) NOT NULL,
  `types` varchar(300) NOT NULL,
  `res_title` varchar(350) NOT NULL,
  `res_time` varchar(300) NOT NULL,
  `res_location` varchar(320) NOT NULL,
  `res_subtitle` varchar(430) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `resume`
--

INSERT INTO `resume` (`id`, `types`, `res_title`, `res_time`, `res_location`, `res_subtitle`) VALUES
(1, 'e', 'Student', '2020-Present', 'Baku Engeneering Univercity', ''),
(2, 'p', 'Frontend-Developer', '2 Months', 'IT-Baku', '');

-- --------------------------------------------------------

--
-- Table structure for table `section_control`
--

CREATE TABLE `section_control` (
  `id` int(11) NOT NULL,
  `home_section` varchar(300) NOT NULL,
  `about_section` varchar(430) NOT NULL,
  `resume_section` varchar(320) NOT NULL,
  `galery_section` varchar(340) NOT NULL,
  `portfolio_section` varchar(350) NOT NULL,
  `contact_section` varchar(320) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `section_control`
--

INSERT INTO `section_control` (`id`, `home_section`, `about_section`, `resume_section`, `galery_section`, `portfolio_section`, `contact_section`) VALUES
(1, 'on', 'on', 'on', 'on', 'on', 'on');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(11) NOT NULL,
  `icon` varchar(230) NOT NULL,
  `set_title` varchar(320) NOT NULL,
  `set_keyworrds` varchar(420) NOT NULL,
  `set_desc` varchar(340) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `icon`, `set_title`, `set_keyworrds`, `set_desc`) VALUES
(1, 'dist/img/onlinelogomaker-051323-1624-0125.png', 'MyPortfolio', 'myportfolio, MyPortfolio, Cavidan\'s portfolio', 'MyPortfolio With Admin Panel In PHP');

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE `skills` (
  `id` int(11) NOT NULL,
  `skils_name` varchar(320) NOT NULL,
  `skils_level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `skills`
--

INSERT INTO `skills` (`id`, `skils_name`, `skils_level`) VALUES
(1, 'HTML', 96),
(2, 'Css', 93),
(3, 'Bootstrap ', 88),
(4, 'Figma', 77),
(5, 'Sql', 80),
(6, 'PHP(Laravel)', 75);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galery`
--
ALTER TABLE `galery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home`
--
ALTER TABLE `home`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_info`
--
ALTER TABLE `personal_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `portfolio`
--
ALTER TABLE `portfolio`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `resume`
--
ALTER TABLE `resume`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `section_control`
--
ALTER TABLE `section_control`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `galery`
--
ALTER TABLE `galery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `home`
--
ALTER TABLE `home`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `personal_info`
--
ALTER TABLE `personal_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `portfolio`
--
ALTER TABLE `portfolio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `resume`
--
ALTER TABLE `resume`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `section_control`
--
ALTER TABLE `section_control`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `skills`
--
ALTER TABLE `skills`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
