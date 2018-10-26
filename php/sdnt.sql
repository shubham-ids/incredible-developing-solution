-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 26, 2018 at 05:56 PM
-- Server version: 5.7.24-0ubuntu0.18.04.1
-- PHP Version: 7.2.10-0ubuntu0.18.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sdnt`
--

-- --------------------------------------------------------

--
-- Table structure for table `records`
--

CREATE TABLE `records` (
  `id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `records`
--

INSERT INTO `records` (`id`, `firstname`, `lastname`, `username`, `email`, `password`) VALUES
(2, 'shubham', 'kumar', 'shubham kumar1', 'shubham@kuyhfjd', '202cb962ac59075b964b07152d234b70'),
(3, 'jyoti', 'kumari', 'jyoti kumari', 'jyoti@kumari', '202cb962ac59075b964b07152d234b70'),
(4, 'plesr', 'fhgdtf', 'hfdghdfgh', 'p@p.vom', '35f4a8d465e6e1edc05f3d8ab658c551'),
(11, 'bgjbv', 'ghgjhg', 'hghjg', 'gffgy2GFF', 'dfd479195858946fc41d7ddad0995f53'),
(18, 'shubham', 'kumar', 'shubham kumar', 'dfdg@egr', 'd926d7bb9ccf46fc04a61bd65d87b9b3'),
(26, 'shubham', 'kumar', 'fgdffhtg', 'fh@eg', '49f292a7f767b8ce10f7f287642d7b03'),
(30, 'shubham', 'kumar', 'gfhgd', 'jyoti@kumari', '5dcf358070f07d9d74a1f4309ab415b9'),
(31, 'shubham', 'kumar', 'gfhgdgrergerg', 'jyoti@kumari', '5dcf358070f07d9d74a1f4309ab415b9'),
(32, 'gfh', 'gfh', 'gfh', 'jyoti@kumari', '580123b1eee6b0f82540e45282730a52'),
(33, 'gfh', 'gfh', 'gfhdfvfsdfgd', 'shubham@kuyhfjdkjl', '580123b1eee6b0f82540e45282730a52'),
(35, 'daf', 'df', 'shubham kumarsdfcd', 'shubham@kuyhfjdds', '57a6a0811829faf34a78ca625c383ec9');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `records`
--
ALTER TABLE `records`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `records`
--
ALTER TABLE `records`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
