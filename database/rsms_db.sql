-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 07, 2023 at 07:33 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rsms_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `client_list`
--

CREATE TABLE `client_list` (
  `id` int(30) NOT NULL,
  `firstname` text NOT NULL,
  `middlename` text DEFAULT NULL,
  `lastname` text NOT NULL,
  `contact` varchar(100) NOT NULL,
  `email` text NOT NULL,
  `address` text NOT NULL,
  `delete_flag` tinyint(1) NOT NULL DEFAULT 0,
  `date_created` datetime NOT NULL DEFAULT current_timestamp(),
  `date_updated` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `client_list`
--

INSERT INTO `client_list` (`id`, `firstname`, `middlename`, `lastname`, `contact`, `email`, `address`, `delete_flag`, `date_created`, `date_updated`) VALUES
(3, 'Jyothi', '', 'Shankar', '7771234567', 'jss@gmail.com', 'Katpadi', 1, '2023-05-19 18:48:01', NULL),
(5, 'Swarna', '', 'Laxmi', '9876543210', 'laxmiswarna02@gmail.com', 'u;aisshflikmsd;l', 0, '2023-06-07 20:09:10', NULL),
(9, 'Manishsh', 'v', 'shettigar', '7962398735', 'manishshettigar25@gmail.com', 'angaragudde', 0, '2023-06-13 14:31:38', NULL),
(17, 'Manish', '', 'Shettigar', '1234567', 'manishshettigar255@gmail.com', 'mulki', 1, '2023-06-16 15:37:54', NULL),
(18, 'aaa', 'a', 'bbbb', '8899006670', 'aa@gmail', 'Hejamadi', 1, '2023-06-22 09:15:36', NULL),
(19, '1', '', '1111', '7962398739', 'Swarnaaaa@gmail.com', 'Hejamadi', 1, '2023-06-22 13:58:23', NULL),
(20, '11', '', '66', '7414129871', 'aaq@gmail', 'dgfhyhgj', 1, '2023-06-22 13:59:49', NULL),
(22, 'Y', '', 'qqq', '7962398739', 'Swarnaaaa@gmail.com', 'Hejamadi', 1, '2023-06-22 15:32:41', NULL),
(23, 'Swarna', 'd', 'mendon', '7962398739', 'Swarnaaa11a@gmail.com', 'u;aisshflikmsd;l', 1, '2023-06-22 15:33:58', NULL),
(24, 'Swarna', 'd', 'mendon', '7962398739', 'mendonswarna02@gmail.com', 'u;aisshflikmsd;l', 0, '2023-06-22 15:41:17', NULL),
(25, 'shwetha', '', 'kotian', '9923764392', 'shwethakotion2002@gmail.com', 'mulki', 0, '2023-06-27 13:36:53', NULL),
(26, 'shwetha', '', 'kotian', '7414129871', 'shwe@gmailcom', 'mulki', 1, '2023-07-02 16:51:36', NULL),
(27, 'swapna', 'd', 'mendon', '6677445566', 'swapna@gmail.com', 'Hejamadi', 1, '2023-07-03 19:29:48', NULL),
(28, 'swapna', 'd', 'mendon', '6677889900', 'swapnamendon2007@gmail.com', 'Hejamadi', 0, '2023-07-03 19:37:50', NULL),
(29, 'Saakshi', '', 'Sudhakar', '7026362995', 'saakshishetty121@gmail.com', 'kinnigoli', 0, '2023-07-04 11:49:35', NULL),
(30, 'megha', 'a', 'salian', '7766554433', 'meghaa@gmail.com', 'karnad', 0, '2023-07-04 23:55:59', NULL),
(31, 'shwetha', 'k', 'kotian', '2345678912', 'Swarna@gmail.com', 'mulki', 0, '2023-07-05 09:56:39', NULL),
(32, 'swarna', 'y', 'mendon', '2345678912', 'Swarna123@gmail.com', 'hejmadi', 1, '2023-07-05 09:58:28', NULL),
(33, 'Manish', '', 'Shettigar', '9936677745', 'manishshettigar2577@gmail.com', 'zz', 0, '2023-07-05 23:07:57', NULL),
(34, 'Manish', '', 'Shettigar', '1235566777', 'manishshettigar2775@gmail.com', 'mulki', 0, '2023-07-06 14:10:46', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `message_list`
--

CREATE TABLE `message_list` (
  `id` int(30) NOT NULL,
  `fullname` text NOT NULL,
  `contact` text NOT NULL,
  `email` text NOT NULL,
  `message` text NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `date_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `message_list`
--

INSERT INTO `message_list` (`id`, `fullname`, `contact`, `email`, `message`, `status`, `date_created`) VALUES
(2, 'Manish Shettigar', '1235566777', 'manishshettigar25@gmail.com', 'Its been 2 week.. please finish with the repairment of my device', 1, '2023-05-20 20:29:19'),
(13, 'Manish', '9606742493', 'manishshettigar25@gmail.com', 'Amazed!!! That was a very quik service..', 1, '2023-06-16 16:45:13'),
(22, 'swapna d mendon', '6677889949', 'swapnamendon2007@gmail.com', 'amazing service..!', 1, '2023-07-04 23:50:25'),
(23, 'Manish Shettigar', '9606742493', 'manishshettigar25@gmail.com', 'I want my phone by tomorrow.... which i gave for repair yesterday evening', 0, '2023-07-05 20:09:37'),
(26, 'aaa bbb', '9606742493', 'a@gmail.com', 'aaa', 0, '2023-07-05 20:14:22'),
(27, 'Swarna Lakshmi', '9606766666', 'swarna@gmail.com', 'Thanks for the quick service', 0, '2023-07-05 20:15:11'),
(28, 'Manish Shettigar', '7889009988', 'manishshettigar25@gmail.com', 'satisfied by ur service', 0, '2023-07-05 23:03:25'),
(29, 'Akshaya', '9606742878', 'manishshettiga5@gmail.com', 'thank you', 1, '2023-07-06 14:03:33');

-- --------------------------------------------------------

--
-- Table structure for table `repair_list`
--

CREATE TABLE `repair_list` (
  `id` int(30) NOT NULL,
  `code` varchar(50) NOT NULL,
  `client_id` int(30) NOT NULL,
  `remarks` text DEFAULT NULL,
  `total_amount` float NOT NULL DEFAULT 0,
  `payment_status` tinyint(1) NOT NULL DEFAULT 0 COMMENT '0= Unpaid, 1= paid',
  `status` tinyint(1) NOT NULL DEFAULT 0 COMMENT '0 = pending, 1= Approved, 2 = In-Progress, 3 = Checking, 4 = Done, 5= Cancelled ',
  `date_created` datetime NOT NULL DEFAULT current_timestamp(),
  `date_updadted` datetime DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `repair_list`
--

INSERT INTO `repair_list` (`id`, `code`, `client_id`, `remarks`, `total_amount`, `payment_status`, `status`, `date_created`, `date_updadted`) VALUES
(6, 'RSMS-2023050003', 3, 'aaa', 600, 1, 2, '2023-05-19 18:52:00', '2023-05-19 18:53:11'),
(9, 'RSMS-2023060001', 3, 'ssssssssssssssss', 554, 1, 1, '2023-06-07 10:33:21', '2023-06-07 10:36:28'),
(10, 'RSMS-2023060002', 3, 'aaaaaa', 1305, 0, 2, '2023-06-07 10:39:47', NULL),
(11, 'RSMS-2023060003', 3, 'dddddddd', 249, 0, 1, '2023-06-07 10:43:02', NULL),
(21, 'RSMS-2023060006', 5, 'aaaaa', 300, 0, 0, '2023-06-07 20:11:04', NULL),
(23, 'RSMS-2023060008', 5, 'vcv', 1300, 0, 0, '2023-06-08 10:04:17', NULL),
(25, 'RSMS-2023060010', 5, 'cc', 0.7, 0, 0, '2023-06-08 10:05:29', '2023-06-13 13:35:28'),
(26, 'RSMS-2023060011', 5, 'cc', 0, 0, 4, '2023-06-08 10:06:58', '2023-06-16 18:26:43'),
(30, 'RSMS-2023060009', 9, 'aaa', 600, 1, 0, '2023-06-13 14:33:51', NULL),
(31, 'RSMS-2023060012', 9, 'aa', 330, 1, 2, '2023-06-13 14:34:41', NULL),
(32, 'RSMS-2023060013', 9, 'aa', 330, 1, 2, '2023-06-13 14:36:36', NULL),
(33, 'RSMS-2023060014', 9, 'aa', 450, 1, 2, '2023-06-13 14:37:01', NULL),
(34, 'RSMS-2023060005', 9, 'aa', 1274, 1, 1, '2023-06-13 14:46:24', '2023-06-13 14:49:54'),
(42, 'RSMS-2023060015', 5, '', 700.07, 0, 2, '2023-06-15 21:18:34', NULL),
(45, 'RSMS-2023060016', 5, '', 250, 0, 0, '2023-06-15 21:20:45', NULL),
(48, 'RSMS-2023060017', 5, '', 0, 0, 5, '2023-06-16 11:38:40', '2023-06-16 18:27:34'),
(49, 'RSMS-2023060018', 3, 'aa', 850, 1, 2, '2023-06-16 11:39:33', '2023-06-16 11:45:01'),
(50, 'RSMS-2023060019', 5, 'aa', 250, 0, 0, '2023-06-16 11:45:19', NULL),
(51, 'RSMS-2023060020', 5, 'aa', 1039, 0, 0, '2023-06-16 15:06:47', '2023-06-16 15:07:14'),
(53, 'RSMS-2023060004', 3, '', 1549, 1, 3, '2023-06-16 17:15:43', '2023-06-16 18:27:08'),
(54, 'RSMS-2023060007', 3, 'aaa', 2249, 0, 0, '2023-06-16 17:16:01', NULL),
(58, 'RSMS-2023060022', 18, '', 1299, 0, 0, '2023-06-22 09:16:44', NULL),
(61, 'RSMS-2023060021', 23, '', 1299, 0, 0, '2023-06-22 15:49:58', NULL),
(63, 'RSMS-2023060024', 23, '', 900, 0, 0, '2023-06-24 10:32:23', '2023-06-24 10:43:13'),
(64, 'RSMS-2023060025', 3, '', 1149, 0, 0, '2023-06-24 11:12:44', NULL),
(68, 'RSMS-2023060027', 23, '', 750, 1, 0, '2023-06-26 12:13:49', '2023-07-05 00:01:06'),
(69, 'RSMS-2023060028', 9, '', 1410, 0, 0, '2023-06-26 13:47:54', NULL),
(70, 'RSMS-2023070001', 24, '', 250, 0, 4, '2023-07-02 17:26:44', '2023-07-04 23:56:45'),
(71, 'RSMS-2023070002', 24, '', 899, 1, 4, '2023-07-02 20:51:09', NULL),
(73, 'RSMS-2023070003', 5, '', 899, 1, 4, '2023-07-03 19:30:48', NULL),
(74, 'RSMS-2023070004', 28, '', 500, 1, 2, '2023-07-03 19:38:29', '2023-07-03 19:39:09'),
(75, 'RSMS-2023070005', 24, '', 250, 0, 0, '2023-07-04 11:04:57', '2023-07-04 11:07:35'),
(76, 'RSMS-2023070006', 25, '', 949, 1, 3, '2023-07-04 23:58:52', NULL),
(77, 'RSMS-2023070007', 24, '', 500, 0, 3, '2023-07-05 10:00:03', '2023-07-05 19:37:59'),
(80, 'RSMS-2023070010', 31, '', 500, 1, 4, '2023-07-05 10:04:27', '2023-07-05 10:11:35'),
(81, 'RSMS-2023070011', 5, '', 500, 1, 5, '2023-07-05 10:04:57', '2023-07-05 19:02:34'),
(82, 'RSMS-2023070012', 31, '', 1099, 1, 1, '2023-07-05 10:05:33', NULL),
(83, 'RSMS-2023070013', 31, '', 699, 0, 3, '2023-07-05 10:05:49', '2023-07-05 19:02:58'),
(88, 'RSMS-2023070008', 9, 'virus removal', 500, 1, 1, '2023-07-05 23:10:29', NULL),
(89, 'RSMS-2023070009', 9, '', 1500, 1, 2, '2023-07-06 11:46:35', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `repair_materials`
--

CREATE TABLE `repair_materials` (
  `repair_id` int(30) NOT NULL,
  `material` text NOT NULL,
  `cost` float NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `repair_materials`
--

INSERT INTO `repair_materials` (`repair_id`, `material`, `cost`) VALUES
(9, 'sensor', 200),
(3, 'flashlight', 80),
(5, 'screw', 5);

-- --------------------------------------------------------

--
-- Table structure for table `repair_services`
--

CREATE TABLE `repair_services` (
  `repair_id` int(30) NOT NULL,
  `service_id` int(30) NOT NULL,
  `fee` float NOT NULL DEFAULT 0,
  `status` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `repair_services`
--

INSERT INTO `repair_services` (`repair_id`, `service_id`, `fee`, `status`) VALUES
(30, 37, 600, 0),
(31, 36, 250, 0),
(32, 36, 250, 0),
(33, 36, 250, 0),
(34, 34, 500, 0),
(45, 35, 250, 0),
(49, 35, 250, 0),
(49, 37, 600, 0),
(50, 35, 250, 0),
(51, 35, 250, 0),
(54, 35, 250, 0),
(54, 53, 1299, 0),
(53, 35, 250, 0),
(53, 53, 1299, 0),
(58, 53, 1299, 0),
(61, 53, 1299, 0),
(63, 35, 250, 0),
(63, 36, 250, 0),
(64, 51, 899, 0),
(64, 35, 250, 0),
(69, 34, 500, 0),
(69, 36, 250, 0),
(71, 51, 899, 0),
(73, 51, 899, 0),
(74, 40, 500, 1),
(75, 35, 250, 0),
(70, 35, 250, 0),
(76, 35, 250, 0),
(76, 62, 699, 0),
(68, 34, 500, 0),
(68, 35, 250, 0),
(82, 62, 699, 0),
(80, 34, 500, 0),
(81, 34, 500, 0),
(83, 62, 699, 0),
(77, 40, 500, 0),
(88, 40, 500, 0),
(89, 33, 1500, 0);

-- --------------------------------------------------------

--
-- Table structure for table `service_list`
--

CREATE TABLE `service_list` (
  `id` int(30) NOT NULL,
  `service` text NOT NULL,
  `description` text NOT NULL,
  `cost` float NOT NULL DEFAULT 0,
  `delete_flag` tinyint(1) NOT NULL DEFAULT 0 COMMENT '0 = Active, 1 = Delete',
  `date_created` datetime NOT NULL DEFAULT current_timestamp(),
  `date_updated` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `service_list`
--

INSERT INTO `service_list` (`id`, `service`, `description`, `cost`, `delete_flag`, `date_created`, `date_updated`) VALUES
(33, 'W11 OS installation', 'Installing licensed version of Windows11 Operating System', 1500, 0, '2023-06-13 10:20:37', NULL),
(34, 'Hardware cleaning', 'Cleaning of hardware such as monitor, motherboard, CPU etc..', 500, 0, '2023-06-13 10:22:18', NULL),
(35, 'Mobile reformatting', 'Reformats mobile phones', 250, 0, '2023-06-13 10:26:20', NULL),
(36, 'Mobile reprogramming', 'Reprograms mobile phones', 250, 0, '2023-06-13 10:27:53', NULL),
(37, 'Software Installation', 'Installation of softwares for Windows, Macintosh or Linux operating systems', 600, 0, '2023-06-13 14:10:51', NULL),
(40, 'Virus removal', 'Removes unwanted viruses', 500, 0, '2023-06-14 11:36:19', NULL),
(51, 'Renew Antivirus', 'renewing the pack.', 899, 0, '2023-06-16 15:21:56', NULL),
(52, 'jj', 'nn', 0, 1, '2023-06-16 16:33:32', NULL),
(53, 'Changing case of CPU & other systems', 'Outer case of system is modified', 1299, 0, '2023-06-16 16:37:16', NULL),
(54, '1111111111118', 'yt', 990, 1, '2023-06-22 14:00:39', NULL),
(55, '4466', 'uyjh', 0, 1, '2023-06-22 14:02:05', NULL),
(56, '111111111111', 'aaa', 0, 1, '2023-06-22 15:38:42', NULL),
(57, '111', 'aa', 0, 1, '2023-06-22 16:01:21', NULL),
(58, '5ggg', 'aaaa', 9000, 1, '2023-06-22 16:04:03', NULL),
(59, '1', '1', 0, 1, '2023-06-22 19:10:22', NULL),
(60, 'xyz', 'ss', 0, 1, '2023-06-24 15:29:46', NULL),
(61, 'xx', 'xx', 444, 1, '2023-07-03 19:45:18', NULL),
(62, 'Laptop reformattng', 'Reformats laptops', 699, 0, '2023-07-04 22:48:57', NULL),
(63, 'W7 OS installation', 'installs windows 11 os', 2220, 0, '2023-07-05 10:26:49', NULL),
(64, 'Windows 8 installation', 'installs 8th os', 400, 0, '2023-07-05 10:27:21', NULL),
(65, 'Laptop Reformatting', 'Reformats laptops', 699, 1, '2023-07-05 10:40:51', NULL),
(66, 'Laptop Reformatting', 'Refromats laptops', 699, 1, '2023-07-05 10:42:47', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `system_info`
--

CREATE TABLE `system_info` (
  `id` int(30) NOT NULL,
  `meta_field` text NOT NULL,
  `meta_value` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `system_info`
--

INSERT INTO `system_info` (`id`, `meta_field`, `meta_value`) VALUES
(1, 'name', 'Electronic Repairs'),
(6, 'short_name', 'ESS'),
(11, 'logo', 'uploads/ESS logo.png'),
(13, 'user_avatar', 'uploads/user_avatar.jpg'),
(14, 'cover', 'uploads/bg.jpeg'),
(15, 'content', 'Array'),
(16, 'email', 'electronic.service.solutions3@gmail.com'),
(17, 'contact', '9574678971'),
(18, 'from_time', '11:00'),
(19, 'to_time', '21:30'),
(20, 'address', 'Katipalla 3rd Block, Surathkal');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(50) NOT NULL,
  `firstname` varchar(250) NOT NULL,
  `middlename` text DEFAULT NULL,
  `lastname` varchar(250) NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `avatar` text DEFAULT NULL,
  `last_login` datetime DEFAULT NULL,
  `type` tinyint(1) NOT NULL DEFAULT 0,
  `status` int(1) NOT NULL DEFAULT 1 COMMENT '0=not verified, 1 = verified',
  `date_added` datetime NOT NULL DEFAULT current_timestamp(),
  `date_updated` datetime DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `middlename`, `lastname`, `username`, `password`, `avatar`, `last_login`, `type`, `status`, `date_added`, `date_updated`) VALUES
(4, 'Manish', NULL, 'Shettigar', 'ManShett', 'dd90acf40a829f56c20f1b3e38c76426', 'uploads/avatar-4.png?v=1688490990', NULL, 1, 1, '2023-05-19 18:16:42', '2023-07-05 18:26:59'),
(9, 'shwetha', NULL, 'kotion', 'shwekotian', 'd8578edf8458ce06fbc5bb76a58c5ca4', NULL, NULL, 2, 1, '2023-05-29 17:01:06', '2023-07-05 09:42:06'),
(23, 'Swarna', NULL, 'mendon', 'Swarnalaxmi', 'd8578edf8458ce06fbc5bb76a58c5ca4', 'uploads/avatar-23.png?v=1688490962', NULL, 1, 1, '2023-06-22 09:09:06', '2023-07-04 22:46:02'),
(31, 'Manish', NULL, 'Shettigar', 'manshettt', 'dd90acf40a829f56c20f1b3e38c76426', NULL, NULL, 2, 1, '2023-07-05 18:28:11', '2023-07-05 19:31:42');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `client_list`
--
ALTER TABLE `client_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `message_list`
--
ALTER TABLE `message_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `repair_list`
--
ALTER TABLE `repair_list`
  ADD PRIMARY KEY (`id`),
  ADD KEY `client_id` (`client_id`);

--
-- Indexes for table `repair_materials`
--
ALTER TABLE `repair_materials`
  ADD KEY `repair_id` (`repair_id`);

--
-- Indexes for table `repair_services`
--
ALTER TABLE `repair_services`
  ADD KEY `repair_id` (`repair_id`),
  ADD KEY `service_id` (`service_id`);

--
-- Indexes for table `service_list`
--
ALTER TABLE `service_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `system_info`
--
ALTER TABLE `system_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `client_list`
--
ALTER TABLE `client_list`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `message_list`
--
ALTER TABLE `message_list`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `repair_list`
--
ALTER TABLE `repair_list`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;

--
-- AUTO_INCREMENT for table `service_list`
--
ALTER TABLE `service_list`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `system_info`
--
ALTER TABLE `system_info`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `repair_list`
--
ALTER TABLE `repair_list`
  ADD CONSTRAINT `repair_list_ibfk_1` FOREIGN KEY (`client_id`) REFERENCES `client_list` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `repair_materials`
--
ALTER TABLE `repair_materials`
  ADD CONSTRAINT `repair_materials_ibfk_1` FOREIGN KEY (`repair_id`) REFERENCES `client_list` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `repair_services`
--
ALTER TABLE `repair_services`
  ADD CONSTRAINT `repair_services_ibfk_1` FOREIGN KEY (`repair_id`) REFERENCES `repair_list` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `repair_services_ibfk_2` FOREIGN KEY (`service_id`) REFERENCES `service_list` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
