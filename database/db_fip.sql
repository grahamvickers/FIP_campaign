-- phpMyAdmin SQL Dump
-- version 4.9.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Apr 15, 2020 at 05:00 AM
-- Server version: 5.7.26
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_fip`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_blog`
--

CREATE TABLE `tbl_blog` (
  `post_id` int(11) NOT NULL,
  `post_title` text NOT NULL,
  `post_body` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_blog`
--

INSERT INTO `tbl_blog` (`post_id`, `post_title`, `post_body`) VALUES
(1, 'Red In The Rink', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla sed suscipit quam. Curabitur blandit lacinia sem sit amet placerat. Proin dictum tempus tellus et malesuada. Vivamus quis fermentum est. Curabitur sit amet lectus velit. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Fusce elementum dapibus arcu vitae fermentum. Morbi finibus vel dui a elementum.'),
(2, 'How to Deal With HIV/AIDS as a Teenager', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla sed suscipit quam. Curabitur blandit lacinia sem sit amet placerat. Proin dictum tempus tellus et malesuada. Vivamus quis fermentum est. Curabitur sit amet lectus velit. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Fusce elementum dapibus arcu vitae fermentum. Morbi finibus vel dui a elementum.'),
(3, 'You Aren\'t Alone!', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sodales erat eu dolor vulputate, non pretium velit cursus. Sed tempus, leo sit amet gravida rutrum, lacus ex lacinia massa, lobortis iaculis lorem lorem eu purus. Quisque vel erat a quam fermentum hendrerit. Donec varius, neque ac suscipit tincidunt, lacus nisl mollis quam, vel commodo sapien nisi id lorem. Pellentesque rutrum purus sit amet ante euismod, sed vehicula lorem varius. Donec pretium mi eget semper tristique. Interdum et malesuada fames ac ante ipsum primis in faucibus. Sed sit amet neque a augue pharetra luctus. Aenean at purus ut neque suscipit dignissim et in orci. Pellentesque nec nunc velit. Nulla tristique elit in sem imperdiet interdum. Integer ut nulla et justo ultricies convallis a nec metus.');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_signup`
--

CREATE TABLE `tbl_signup` (
  `signup_id` mediumint(9) NOT NULL,
  `signup_fname` varchar(100) NOT NULL,
  `signup_email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_signup`
--

INSERT INTO `tbl_signup` (`signup_id`, `signup_fname`, `signup_email`) VALUES
(1, 'Graham Vicker', 'vickgrah@gmail.com'),
(2, 'Pan', 'pan@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `user_id` mediumint(9) NOT NULL,
  `user_fname` varchar(250) NOT NULL,
  `user_name` varchar(250) NOT NULL,
  `user_email` varchar(250) NOT NULL,
  `user_pass` varchar(250) NOT NULL,
  `user_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user_ip` varchar(250) NOT NULL,
  `user_verif` tinyint(1) NOT NULL,
  `user_locked` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`user_id`, `user_fname`, `user_name`, `user_email`, `user_pass`, `user_date`, `user_ip`, `user_verif`, `user_locked`) VALUES
(1, 'Graham Vickers', 'gvix', 'gvix@gmail.com', '123', '2020-02-27 21:02:55', '::1', 1, NULL),
(2, 'Pan', 'pan', 'testing@gmail.com', '123', '2020-04-14 21:17:12', '::1', 1, NULL),
(3, 'Trevor', 'trevor', 'testing@gmail.com', '68264bdb65b97eeae6788aa3348e553c', '2020-04-14 21:18:22', 'no', 0, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_blog`
--
ALTER TABLE `tbl_blog`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `tbl_signup`
--
ALTER TABLE `tbl_signup`
  ADD PRIMARY KEY (`signup_id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_blog`
--
ALTER TABLE `tbl_blog`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_signup`
--
ALTER TABLE `tbl_signup`
  MODIFY `signup_id` mediumint(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `user_id` mediumint(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
