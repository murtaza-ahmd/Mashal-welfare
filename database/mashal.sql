-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 28, 2023 at 11:33 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mashal`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int(11) NOT NULL,
  `aboutname` varchar(255) NOT NULL,
  `abouttitle` varchar(255) NOT NULL,
  `aboutdesc` varchar(255) NOT NULL,
  `aboutimage1` varchar(255) NOT NULL,
  `aboutimage2` varchar(255) NOT NULL,
  `aboutimage3` varchar(255) NOT NULL,
  `aboutimage4` varchar(255) NOT NULL,
  `volunteer` varchar(255) NOT NULL,
  `registered` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `aboutname`, `abouttitle`, `aboutdesc`, `aboutimage1`, `aboutimage2`, `aboutimage3`, `aboutimage4`, `volunteer`, `registered`) VALUES
(1, 'About Us', 'Welcome to Mashal', 'Welcome to Mashal welfare turst .In This Website we have alot of recipies for users .In Recipe you can see some new features like festivals, taste, diet, pictures and video URL for recipe.We hope that you peoples will enjoy and take advantage of our Websi', 'gallery-1.JPG', 'gallery-2.JPG', 'gallery-3.JPG', 'gallery-4.JPG', '20', '30');

-- --------------------------------------------------------

--
-- Table structure for table `donationmeber`
--

CREATE TABLE `donationmeber` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `amount` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `donationmeber`
--

INSERT INTO `donationmeber` (`id`, `title`, `fullname`, `amount`, `email`, `phone`) VALUES
(4, 'Donations Members', 'hammad', '2000', 'talha@gmail.com', '1111\r\n'),
(5, 'Donations Members', 'Murtaza Ahmad', '100000', 'murtaza@gmail.com', '22121\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `image`) VALUES
(5, 'gallery-1.jpg\n'),
(6, 'gallery-2.jpg'),
(9, 'gallery-3.jpg'),
(10, 'hero-img.jpg'),
(11, 'gallery-4.jpg\n'),
(12, 'gallery-5.jpg\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `header`
--

CREATE TABLE `header` (
  `id` int(11) NOT NULL,
  `menu` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `member` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `donate` varchar(255) NOT NULL,
  `mession` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `header`
--

INSERT INTO `header` (`id`, `menu`, `link`, `member`, `title`, `logo`, `name`, `donate`, `mession`) VALUES
(1, 'Home', 'index.php', '', 'Mashal Welfare Trust', 'assets/img/logo.jpg', 'Mashal', 'Donate Now', 'Be a part of our mission'),
(2, 'Gallery', 'gallery.php', '', '', '', '', '', ''),
(3, 'Become a member', 'member.php', '', '', '', '', '', ''),
(4, 'About', 'about.php', '', '', '', '', '', ''),
(5, 'Contact Us', 'contact.php', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `herosection`
--

CREATE TABLE `herosection` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `herosection`
--

INSERT INTO `herosection` (`id`, `title`, `image`, `description`) VALUES
(1, 'MASHAAL Welfare Trust', 'gallery-5.jpg', 'Is a charitable foundation, a category of nonprofit organization or charitable trust that typically provides funding and support for needy people through different ways.');

-- --------------------------------------------------------

--
-- Table structure for table `info`
--

CREATE TABLE `info` (
  `id` int(11) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `opening` varchar(255) NOT NULL,
  `Designed` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `info`
--

INSERT INTO `info` (`id`, `address`, `phone`, `email`, `name`, `opening`, `Designed`) VALUES
(1, 'Main Bazar Thana, Malakand kpk, 23000', '+92 343 9787095', 'mashaalwelfaretrust@gmail.com', 'Mashal', 'Mon-Sat: 11AM - 23PM Sunday: Closed', 'Talha Banori'),
(2, 'address', 'phone number', '@gmail.com', 'webname', 'Mon-Sat: 11AM - 23PM Sunday: Closed', 'something else');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `desc` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id`, `name`, `email`, `phone`, `desc`) VALUES
(1, 'Murtaza Ahmad', 'mrkhan77707@gmail.com', '', 'empty'),
(17, 'Ahmad', 'mrkhan77707@gmail.com', '', 'empty'),
(18, 'Ahm', 'mrkhan77707@gmail.com', '', 'empty'),
(19, 'Ahmddd', 'mrkhan77707@gmail.com', '', 'empty'),
(20, 'ddd', 'mrkhan77707@gmail.com', '', 'empty');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `donationmeber`
--
ALTER TABLE `donationmeber`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `header`
--
ALTER TABLE `header`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `herosection`
--
ALTER TABLE `herosection`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `info`
--
ALTER TABLE `info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `donationmeber`
--
ALTER TABLE `donationmeber`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `header`
--
ALTER TABLE `header`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `herosection`
--
ALTER TABLE `herosection`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `info`
--
ALTER TABLE `info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
