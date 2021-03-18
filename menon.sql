-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 18, 2021 at 05:43 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `menon`
--

-- --------------------------------------------------------

--
-- Table structure for table `calendar`
--

CREATE TABLE `calendar` (
  `id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `calendar`
--

INSERT INTO `calendar` (`id`, `title`, `start_date`, `end_date`) VALUES
(1, 'Central Govt.ID Rules,1957 Submission of Returns(56A)', '2021-01-20', '2021-01-20'),
(2, 'Annual Return Minimum Wages in FORM 3', '2021-01-30', '2021-01-30'),
(3, 'Apprentices Act,1961 Joining Report for Apprentices(Rule 14(3))', '2021-01-31', '2021-01-31'),
(4, 'Annual Return Under Sexual Harassment Act 2013', '2021-01-07', '2021-01-07'),
(5, 'Annual Return Under Maternity Benefit Act Rules', '2021-01-15', '2021-01-15'),
(6, 'Annual return of work committees under ID Act 1947 Form XV(Rule 61)', '2021-01-21', '2021-01-21'),
(7, 'Annual information about establishment covered under ESIC Act', '2021-01-31', '2021-01-31'),
(8, 'Annual return under maharashtra factory Act 1963 Form No 27', '2021-01-31', '2021-01-31'),
(9, 'Annual return under the bonus Act', '2021-02-01', '2021-02-01'),
(10, 'Annual return under the contract labour Act', '2021-02-15', '2021-02-15'),
(11, 'Annual return under employee compensation', '2021-02-01', '2021-02-01'),
(12, 'Anuual Combined return under shop and establishment', '2021-02-01', '2021-02-01'),
(13, 'Annual return sent by principal employer', '2021-02-15', '2021-02-15'),
(14, 'Annual return of accidents and dangerous occurences under factories Rules', '2021-02-15', '2021-02-15'),
(15, 'Annual PT return employer for current financial year', '2021-06-30', '2021-06-30'),
(16, 'Environment protection Act,1986 and Hazardous Waste Rules,2008,Copy of annual return in Form 4 to state Pollution Control Board', '2021-06-30', '2021-06-30'),
(17, 'Enviornment protection Act,1986 and e-waste rules,2011.Copies of annual return in Form3', '2021-06-30', '2021-06-30'),
(18, 'Enviornment protection Act,1986 read with bio medical waste management rules,2016,bio medical waste disposal authorization and annual return', '2021-06-30', '2021-06-30'),
(19, 'Air (Prevention and control of pollution)Act,1981,Environment statement form-v', '2021-09-30', '2021-09-30'),
(20, 'Annual Return Under the minimum wages Act', '2021-12-30', '2021-12-30'),
(21, 'Half yearly return of work committees under ID Act 1947 G1(See Rule 58 A)', '2021-01-20', '2021-01-20'),
(22, 'Half yearly return of work committees under ID Act 1947 G1(See Rule 58 A)', '2021-07-20', '2021-07-20'),
(23, 'Half yearly return under LWF Act', '2021-06-30', '2021-06-30'),
(24, 'Half yearly return under LWF Act', '2021-12-15', '2021-12-15'),
(25, 'Half yearly return march ending', '2021-04-15', '2021-04-15'),
(26, 'Half yearly return march ending', '2021-10-20', '2021-10-20'),
(27, 'Half yearly return by contractor and principal employer', '2021-01-15', '2021-01-15'),
(28, 'Half yearly return by contractor and principal employer', '2021-07-15', '2021-07-15'),
(29, 'International Worker Monthly Return', '2021-01-30', '2021-01-30'),
(30, 'International Worker Monthly Return', '2021-02-28', '2021-02-28'),
(31, 'International Worker Monthly Return', '2021-03-30', '2021-03-30'),
(32, 'International Worker Monthly Return', '2021-04-30', '2021-04-30'),
(33, 'International Worker Monthly Return', '2021-05-30', '2021-05-30'),
(34, 'International Worker Monthly Return', '2021-06-30', '2021-06-30'),
(35, 'International Worker Monthly Return', '2021-07-30', '2021-07-30'),
(36, 'International Worker Monthly Return', '2021-08-30', '2021-08-30'),
(37, 'International Worker Monthly Return', '2021-09-30', '2021-09-30'),
(38, 'International Worker Monthly Return', '2021-10-15', '2021-10-15'),
(39, 'International Worker Monthly Return', '2021-11-30', '2021-11-30'),
(40, 'International Worker Monthly Return', '2021-12-30', '2021-12-30'),
(41, 'Quarterly return employment exchange', '2021-01-31', '2021-01-31'),
(42, 'Quarterly return employment exchange', '2021-04-30', '2021-04-30'),
(43, 'Quarterly return employment exchange', '2021-07-30', '2021-07-30'),
(44, 'Quarterly return employment exchange', '2021-10-30', '2021-10-30'),
(45, 'fddf', '2021-04-05', '2021-04-05'),
(46, 'dddd', '2021-03-17', '2021-03-17');

-- --------------------------------------------------------

--
-- Table structure for table `expense_form`
--

CREATE TABLE `expense_form` (
  `id` int(10) NOT NULL,
  `token_no` int(10) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `department` varchar(10) NOT NULL,
  `date` date NOT NULL,
  `particular_name` varchar(50) NOT NULL,
  `quantity` int(10) NOT NULL,
  `amount` int(20) NOT NULL,
  `total_amount` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `expense_form`
--

INSERT INTO `expense_form` (`id`, `token_no`, `first_name`, `last_name`, `department`, `date`, `particular_name`, `quantity`, `amount`, `total_amount`) VALUES
(1, 0, '', '', '', '0000-00-00', '', 0, 0, 0),
(2, 0, '', '', '', '0000-00-00', '', 0, 0, 0),
(3, 0, '', '', '', '0000-00-00', '', 0, 0, 0),
(4, 0, '', '', '', '0000-00-00', '', 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `legal_compliance`
--

CREATE TABLE `legal_compliance` (
  `id` int(20) NOT NULL,
  `return_name` varchar(200) NOT NULL,
  `return_type` varchar(50) NOT NULL,
  `due_date` datetime NOT NULL,
  `SubmittedBy` varchar(20) NOT NULL,
  `file_doc` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `legal_compliance`
--

INSERT INTO `legal_compliance` (`id`, `return_name`, `return_type`, `due_date`, `SubmittedBy`, `file_doc`) VALUES
(1, 'Central Govt.ID Rules,1957 Submission of Returns(56A)', 'Central', '2021-01-20 00:00:00', 'Jaywant_Kodak', ''),
(2, 'Annual Return Minimum Wages in FORM 3', 'Central', '2021-01-30 00:00:00', 'Jaysing_Nevage', ''),
(3, 'Apprentices Act,1961 Joining Report for Apprentices(Rule 14(3))', 'Central', '2021-01-31 00:00:00', 'Jaywant_Kodak', 0x50726f6365737320526571756972656d656e7420446f63756d656e745f49542e646f6378),
(4, 'Annual Return Under Sexual Harassment Act 2013', 'Maharashtra', '2021-01-07 00:00:00', 'Jaywant_Kodak', ''),
(5, 'Annual Return Under Maternity Benefit Act Rules', 'Maharashtra', '2021-01-15 00:00:00', 'Jaywant_Kodak', ''),
(6, 'Annual return of work committees under ID Act 1947 Form XV(Rule 61)', 'Maharashtra', '2021-01-21 00:00:00', 'Jaywant_Kodak', ''),
(7, 'Annual information about establishment covered under ESIC Act', 'Maharashtra', '2021-01-31 00:00:00', 'Jaysing_Nevage', 0x50726f6365737320526571756972656d656e7420446f63756d656e745f49542e646f6378),
(8, 'Annual return under maharashtra factory Act 1963 Form No 27', 'Maharashtra', '2021-01-31 00:00:00', 'Mohit_Patil', 0x50726f6365737320526571756972656d656e7420446f63756d656e745f49542e646f6378),
(9, 'Annual return under the bonus Act', 'Central', '2021-02-01 00:00:00', 'Jaysing_Nevage', ''),
(10, 'Annual return under the contract labour Act', 'Central', '2021-02-15 00:00:00', 'Jaywant_Kodak', ''),
(11, 'Annual return under employee compensation', 'Maharashtra', '2021-02-01 00:00:00', 'Jaywant_Kodak', ''),
(12, 'Anuual Combined return under shop and establishment', 'Maharashtra', '2021-02-01 00:00:00', 'Jaywant_Kodak', ''),
(13, 'Annual return sent by principal employer', 'Maharashtra', '2021-02-15 00:00:00', 'Jaywant_Kodak', ''),
(14, 'Annual return of accidents and dangerous occurences under factories Rules', 'Maharashtra', '2021-02-15 00:00:00', 'Mohit_Patil', ''),
(15, 'Annual PT return employer for current financial year', 'Maharashtra', '2021-06-30 00:00:00', 'Jaysing_Nevage', ''),
(16, 'Environment protection Act,1986 and Hazardous Waste Rules,2008,Copy of annual return in Form 4 to state Pollution Control Board', 'Maharashtra', '2021-06-30 00:00:00', 'Mohit_Patil', ''),
(17, 'Enviornment protection Act,1986 and e-waste rules,2011.Copies of annual return in Form3', 'Maharashtra', '2021-06-30 00:00:00', 'Mohit_Patil', ''),
(18, 'Enviornment protection Act,1986 read with bio medical waste management rules,2016,bio medical waste disposal authorization and annual return', 'Maharashtra', '2021-06-30 00:00:00', 'Mohit_Patil', ''),
(19, 'Air (Prevention and control of pollution)Act,1981,Environment statement form-v', 'Maharashtra', '2021-09-30 00:00:00', 'Mohit_Patil', ''),
(20, 'Annual Return Under the minimum wages Act', 'Central', '2021-12-30 00:00:00', 'Jaysing_Nevage', ''),
(21, 'Half yearly return of work committees under ID Act 1947 G1(See Rule 58 A)', 'Central', '2021-01-20 00:00:00', 'Jaywant_Kodak', ''),
(22, 'Half yearly return of work committees under ID Act 1947 G1(See Rule 58 A)', 'Central', '2021-07-20 00:00:00', 'Jaywant_Kodak', ''),
(23, 'Half yearly return under LWF Act', 'Maharashtra', '2021-06-30 00:00:00', 'Jaysing_Nevage', ''),
(24, 'Half yearly return under LWF Act', 'Maharashtra', '2021-12-15 00:00:00', 'Jaysing_Nevage', ''),
(25, 'Half yearly return march ending', 'Maharashtra', '2021-04-15 00:00:00', 'Jaywant_Kodak', ''),
(26, 'Half yearly return march ending', 'Maharashtra', '2021-10-20 00:00:00', 'Jaywant_Kodak', ''),
(27, 'Half yearly return by contractor and principal employer', 'Maharashtra', '2021-01-15 00:00:00', 'Jaywant_Kodak', ''),
(28, 'Half yearly return by contractor and principal employer', 'Maharashtra', '2021-07-15 00:00:00', 'Jaywant_Kodak', ''),
(29, 'International Worker Monthly Return', 'Maharashtra', '2021-01-30 00:00:00', 'Jaysing_Nevage', ''),
(30, 'International Worker Monthly Return', 'Maharashtra', '2021-02-28 00:00:00', 'Jaysing_Nevage', ''),
(31, 'International Worker Monthly Return', 'Maharashtra', '2021-03-30 00:00:00', 'Jaysing_Nevage', ''),
(32, 'International Worker Monthly Return', 'Maharashtra', '2021-04-30 00:00:00', 'Jaysing_Nevage', ''),
(33, 'International Worker Monthly Return', 'Maharashtra', '2021-05-30 00:00:00', 'Jaysing_Nevage', ''),
(34, 'International Worker Monthly Return', 'Maharashtra', '2021-06-30 00:00:00', 'Jaysing_Nevage', ''),
(35, 'International Worker Monthly Return', 'Maharashtra', '2021-07-30 00:00:00', 'Jaysing_Nevage', ''),
(36, 'International Worker Monthly Return', 'Maharashtra', '2021-08-30 00:00:00', 'Jaysing_Nevage', ''),
(37, 'International Worker Monthly Return', 'Maharashtra', '2021-09-30 00:00:00', 'Jaysing_Nevage', ''),
(38, 'International Worker Monthly Return', 'Maharashtra', '2021-10-15 00:00:00', 'Jaysing_Nevage', ''),
(39, 'International Worker Monthly Return', 'Maharashtra', '2021-11-30 00:00:00', 'Jaysing_Nevage', ''),
(40, 'International Worker Monthly Return', 'Maharashtra', '2021-12-30 00:00:00', 'Jaysing_Nevage', ''),
(41, 'Quarterly return employment exchange', 'Maharashtra', '2021-01-31 00:00:00', 'Jaywant_Kodak', 0x50726f6365737320526571756972656d656e7420446f63756d656e745f49542e646f6378),
(42, 'Quarterly return employment exchange', 'Maharashtra', '2021-04-30 00:00:00', 'Jaywant_Kodak', ''),
(43, 'Quarterly return employment exchange', 'Maharashtra', '2021-07-30 00:00:00', 'Jaywant_Kodak', ''),
(44, 'Quarterly return employment exchange', 'Maharashtra', '2021-10-30 00:00:00', 'Jaywant_Kodak', '');

-- --------------------------------------------------------

--
-- Table structure for table `login_hr`
--

CREATE TABLE `login_hr` (
  `id` int(11) NOT NULL,
  `token_id` varchar(11) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login_hr`
--

INSERT INTO `login_hr` (`id`, `token_id`, `password`) VALUES
(1, '3214', 'Mohit@1234'),
(2, '3452', 'Kodak@1234'),
(3, '7653', 'Nevage@1234'),
(4, '8721', 'Kharade@1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `calendar`
--
ALTER TABLE `calendar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `expense_form`
--
ALTER TABLE `expense_form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `legal_compliance`
--
ALTER TABLE `legal_compliance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login_hr`
--
ALTER TABLE `login_hr`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `calendar`
--
ALTER TABLE `calendar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;
--
-- AUTO_INCREMENT for table `login_hr`
--
ALTER TABLE `login_hr`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
