-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 12, 2017 at 10:13 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `architecon`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_us`
--

CREATE TABLE `about_us` (
  `id` int(4) NOT NULL,
  `title` text NOT NULL,
  `main_text` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `about_us`
--

INSERT INTO `about_us` (`id`, `title`, `main_text`) VALUES
(1, 'About us', '<h2 0px="" 20px="" color:="" font-size:="" font-weight:="" line-height:="" margin:="" padding:="" segoe="" style="font-family: ">\r\n	<span style="color:#e6e6fa;">Introduction</span></h2>\r\n<p color:="" font-size:="" line-height:="" segoe="" style="font-family: ">\r\n	<span style="color:#e6e6fa;">If you are going to search in Google with this word &lsquo;SOLID&rsquo;, you will get tons of articles, videos, tutorials on this topic. My aim is to make this article as simple as possible and provide small but good examples.</span></p>\r\n<p color:="" font-size:="" line-height:="" segoe="" style="font-family: ">\r\n	<span style="color:#e6e6fa;">And I can provide all those examples in C#. But don&rsquo;t worry, get the concept and keep practicing with the programming language that you are familiar with.</span></p>\r\n<h3 color:="" font-size:="" font-weight:="" line-height:="" segoe="" style="font-family: ">\r\n	<span style="color:#e6e6fa;">1. About SOLID</span></h3>\r\n<p color:="" font-size:="" line-height:="" segoe="" style="font-family: ">\r\n	<span style="color:#e6e6fa;">SOLID is basically 5 principles, which will help to create a good software architecture. You can see that all design patterns are based on these principles. SOLID is basically an acronym of the following:</span></p>\r\n<ul font-size:="" segoe="" style="margin: 10px 0px; padding: 0px 0px 0px 40px; border: 0px; color: rgb(17, 17, 17); font-family: ">\r\n	<li style="margin: 0px; padding: 0px; border: 0px; line-height: normal;">\r\n		<span style="color:#e6e6fa;"><strong style="margin: 0px; padding: 0px; border: 0px;"><u>S&nbsp;</u></strong><em style="margin: 0px; padding: 0px; border: 0px;">is single responsibility principle (SRP)</em></span></li>\r\n	<li style="margin: 0px; padding: 0px; border: 0px; line-height: normal;">\r\n		<span style="color:#e6e6fa;"><strong style="margin: 0px; padding: 0px; border: 0px;"><u>O&nbsp;</u></strong><em style="margin: 0px; padding: 0px; border: 0px;">stands for open closed principle (OCP)</em></span></li>\r\n	<li style="margin: 0px; padding: 0px; border: 0px; line-height: normal;">\r\n		<span style="color:#e6e6fa;"><strong style="margin: 0px; padding: 0px; border: 0px;"><u>L</u></strong>&nbsp;<em style="margin: 0px; padding: 0px; border: 0px;">Liskov substitution principle (LSP)</em></span></li>\r\n	<li style="margin: 0px; padding: 0px; border: 0px; line-height: normal;">\r\n		<span style="color:#e6e6fa;"><strong style="margin: 0px; padding: 0px; border: 0px;"><u>I</u></strong>&nbsp;<em style="margin: 0px; padding: 0px; border: 0px;">interface segregation principle (ISP)</em></span></li>\r\n	<li style="margin: 0px; padding: 0px; border: 0px; line-height: normal;">\r\n		<span style="color:#e6e6fa;"><strong style="margin: 0px; padding: 0px; border: 0px;"><u>D</u></strong>&nbsp;<em style="margin: 0px; padding: 0px; border: 0px;">Dependency injection principle (DIP)</em></span></li>\r\n</ul>\r\n<p color:="" font-size:="" line-height:="" segoe="" style="font-family: ">\r\n	<span style="color:#e6e6fa;">I believe that with pictures, with examples, an article will be more approachable and understandable.</span></p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `client_tbl`
--

CREATE TABLE `client_tbl` (
  `id` int(7) NOT NULL,
  `name` text NOT NULL,
  `image` varchar(1000) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `contact_tbl`
--

CREATE TABLE `contact_tbl` (
  `id` int(4) NOT NULL,
  `address` varchar(250) NOT NULL,
  `cell` varchar(16) NOT NULL,
  `email` varchar(1000) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contact_tbl`
--

INSERT INTO `contact_tbl` (`id`, `address`, `cell`, `email`) VALUES
(1, '<p>\r\n	4 Tobago Pl, Sunnynook, Auckland 0620</p>\r\n', '640210436393', 'sonny.dev@outlook.com'),
(2, '<p>\r\n	5 streer name, town name, city name, 0333</p>\r\n', '640022555', 'privateemail@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `portfolio_category_tbl`
--

CREATE TABLE `portfolio_category_tbl` (
  `id` int(4) NOT NULL,
  `portfolio_category` varchar(250) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `portfolio_tbl`
--

CREATE TABLE `portfolio_tbl` (
  `id` int(4) NOT NULL,
  `title` text NOT NULL,
  `client_name` text NOT NULL,
  `location` varchar(1000) NOT NULL,
  `year` varchar(144) NOT NULL,
  `status` varchar(44) NOT NULL,
  `category` varchar(500) NOT NULL,
  `other` varchar(600) NOT NULL,
  `image_path` varchar(500) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `services_tbl`
--

CREATE TABLE `services_tbl` (
  `id` int(7) NOT NULL,
  `name` text NOT NULL,
  `description` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `services_tbl`
--

INSERT INTO `services_tbl` (`id`, `name`, `description`) VALUES
(1, 'Managed IT Services', '<p>\r\n	<span style="color:#d3d3d3;"><span style="font-family: &quot;Open Sans&quot;, Arial, Helvetica, sans-serif; font-size: 14px;">Concerned about unplanned downtime affecting your business? SOHO Managed IT Services in Auckland can help. Wouldn&#39;t it be great if you could get your computer systems health checked every minute of every day without the hassle? That&#39;s what you get with a SOHO Managed IT Service and support plan, we make sure you system is working at its best all for a fixed price.</span></span></p>\r\n'),
(2, 'Computer Networking', '<p>\r\n	<span style="color: rgb(51, 51, 51); font-family: &quot;Open Sans&quot;, Arial, Helvetica, sans-serif; font-size: 14px;">Network running slow? Network not running at all? Don&#39;t have a network and need to be connected? We can help. We pride ourselves in network design and installation including multi-site remote access and connectivity. Please feel free to call us to perform a computer network health check/audit of your current computer network.</span></p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `slider_image`
--

CREATE TABLE `slider_image` (
  `id` int(3) NOT NULL,
  `file_name` varchar(250) NOT NULL,
  `caption` varchar(250) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `slider_image`
--

INSERT INTO `slider_image` (`id`, `file_name`, `caption`) VALUES
(2, 'beautiful-new-zealand-wallpaper_121111965_124.jpg', 'picture _ 1'),
(5, 'img_fjords.jpg', 'Landscape _1'),
(4, 'img_lights.jpg', 'Aurora'),
(6, 'img_lights1.jpg', '333');

-- --------------------------------------------------------

--
-- Table structure for table `team_member`
--

CREATE TABLE `team_member` (
  `id` int(7) NOT NULL,
  `name` text NOT NULL,
  `team_title` varchar(555) NOT NULL,
  `designation` text NOT NULL,
  `qualification` text NOT NULL,
  `institution` text NOT NULL,
  `publication` varchar(1) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `team_member`
--

INSERT INTO `team_member` (`id`, `name`, `team_title`, `designation`, `qualification`, `institution`, `publication`) VALUES
(1, 'member name 1', 'Design Team', 'designation 1', 'qualification 1', 'institution 1 ', '1'),
(2, 'member name 1', 'Design Team', 'designation 1', 'qualification 1', 'institution 1 ', '1'),
(3, 'member name 1', 'Design Team', 'designation 1', 'qualification 1', 'institution 1 ', '1');

-- --------------------------------------------------------

--
-- Table structure for table `team_name`
--

CREATE TABLE `team_name` (
  `id` int(4) NOT NULL,
  `team_name` varchar(555) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `team_name`
--

INSERT INTO `team_name` (`id`, `team_name`) VALUES
(1, 'Design Team\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `user_admin`
--

CREATE TABLE `user_admin` (
  `id` int(4) NOT NULL,
  `user_id` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_admin`
--

INSERT INTO `user_admin` (`id`, `user_id`, `password`) VALUES
(1, 'lkj', 'd553d148479a268914cecb77b2b88e6a');

-- --------------------------------------------------------

--
-- Table structure for table `welcoming_message_tbl`
--

CREATE TABLE `welcoming_message_tbl` (
  `id` int(3) NOT NULL,
  `title` varchar(250) NOT NULL,
  `message_body` varchar(1000) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `welcoming_message_tbl`
--

INSERT INTO `welcoming_message_tbl` (`id`, `title`, `message_body`) VALUES
(1, 'Message title.. ', '<p>\r\n	Message line _1.</p>\r\n<p>\r\n	Message line _ 2</p>\r\n<p>\r\n	Line 3 .&nbsp;...&nbsp;</p>\r\n');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_us`
--
ALTER TABLE `about_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `client_tbl`
--
ALTER TABLE `client_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_tbl`
--
ALTER TABLE `contact_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `portfolio_category_tbl`
--
ALTER TABLE `portfolio_category_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `portfolio_tbl`
--
ALTER TABLE `portfolio_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services_tbl`
--
ALTER TABLE `services_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider_image`
--
ALTER TABLE `slider_image`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `team_member`
--
ALTER TABLE `team_member`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `team_name`
--
ALTER TABLE `team_name`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_admin`
--
ALTER TABLE `user_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `welcoming_message_tbl`
--
ALTER TABLE `welcoming_message_tbl`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about_us`
--
ALTER TABLE `about_us`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `client_tbl`
--
ALTER TABLE `client_tbl`
  MODIFY `id` int(7) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `contact_tbl`
--
ALTER TABLE `contact_tbl`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `portfolio_category_tbl`
--
ALTER TABLE `portfolio_category_tbl`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `portfolio_tbl`
--
ALTER TABLE `portfolio_tbl`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `services_tbl`
--
ALTER TABLE `services_tbl`
  MODIFY `id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `slider_image`
--
ALTER TABLE `slider_image`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `team_member`
--
ALTER TABLE `team_member`
  MODIFY `id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `team_name`
--
ALTER TABLE `team_name`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `user_admin`
--
ALTER TABLE `user_admin`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `welcoming_message_tbl`
--
ALTER TABLE `welcoming_message_tbl`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
