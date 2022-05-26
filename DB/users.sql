-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 12, 2022 at 03:49 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `users`
--

-- --------------------------------------------------------

--
-- Table structure for table `alerts`
--

CREATE TABLE `alerts` (
  `id_alert` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `role` varchar(255) NOT NULL,
  `alertType` varchar(20) NOT NULL,
  `title` varchar(50) NOT NULL,
  `body` varchar(255) NOT NULL,
  `fixed` int(11) NOT NULL DEFAULT 0,
  `dateAlert` datetime NOT NULL DEFAULT current_timestamp(),
  `dateFixed` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `alerts`
--

INSERT INTO `alerts` (`id_alert`, `username`, `role`, `alertType`, `title`, `body`, `fixed`, `dateAlert`, `dateFixed`) VALUES
(12, 'admin', 'new signup', 'danger', 'Complete Your Profile', ' You need to complete all of your informations <a href=\"doctor-profile-settings.php\" class=\"alert-link\">Here</a>.', 1, '2022-01-28 22:09:26', NULL),
(13, 'admin', 'serial', 'warning', 'Warning', ' You need to enter your <a href=\"registration/status.php\" class=\"alert-link\">Registration Key</a> to gain full access.', 1, '2022-01-28 22:09:26', NULL),
(14, 'admin', 'info', 'success', 'Successfully Registered', ' You can gain all functions in our <a href=\"registration/status.php\" class=\"alert-link\">Platform</a> since 2022-01-28.', 1, '2022-01-28 22:39:30', NULL),
(15, 'admin', 'info', 'success', 'Successfully Registered', ' You can gain all functions in our <a href=\"registration/status.php\" class=\"alert-link\">Platform</a> since 2022-01-28.', 1, '2022-01-28 22:49:14', NULL),
(17, 'ehamza', 'new signup', 'danger', 'Complete Your Profile', ' You need to complete all of your informations <a href=\"doctor-profile-settings.php\" class=\"alert-link\">Here</a>.', 1, '2022-01-28 23:42:48', NULL),
(18, 'admin', 'info', 'success', 'Successfully Registered', ' You can gain all functions in our <a href=\"registration/status.php\" class=\"alert-link\">Platform</a> since 2022-01-28.', 1, '2022-01-30 12:26:16', NULL),
(19, 'admin', 'info', 'success', 'Successfully Registered', ' You can gain all functions in our <a href=\"registration/status.php\" class=\"alert-link\">Platform</a> since 2022-01-28.', 1, '2022-01-30 12:28:19', NULL),
(20, 'a', 'new signup', 'danger', 'Complete Your Profile', ' You need to complete all of your informations <a href=\"doctor-profile-settings.php\" class=\"alert-link\">Here</a>.', 1, '2022-01-30 13:35:08', NULL),
(21, 'a', 'serial', 'warning', 'Warning', ' You need to enter your <a href=\"registration/status.php\" class=\"alert-link\">Registration Key</a> to gain full access.', 1, '2022-01-30 13:35:08', NULL),
(22, 'a', 'info', 'success', 'Successfully Registered', ' You can gain all functions in our <a href=\"registration/status.php\" class=\"alert-link\">Platform</a> since 2022-01-28.', 1, '2022-01-30 13:36:31', NULL),
(23, 'user1', 'new signup', 'danger', 'Complete Your Profile', ' You need to complete all of your informations <a href=\"doctor-profile-settings.php\" class=\"alert-link\">Here</a>.', 1, '2022-01-30 13:42:31', NULL),
(24, 'd1', 'new signup', 'danger', 'Complete Your Profile', ' You need to complete all of your informations <a href=\"doctor-profile-settings.php\" class=\"alert-link\">Here</a>.', 1, '2022-03-10 17:31:44', NULL),
(25, 'd1', 'serial', 'warning', 'Warning', ' You need to enter your <a href=\"registration/status.php\" class=\"alert-link\">Registration Key</a> to gain full access.', 1, '2022-03-10 17:31:44', NULL),
(26, 'd1', 'info', 'success', 'Successfully Registered', ' You can gain all functions in our <a href=\"registration/status.php\" class=\"alert-link\">Platform</a> since 2022-01-28.', 1, '2022-03-10 17:32:42', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `awards`
--

CREATE TABLE `awards` (
  `id_awards` int(11) NOT NULL,
  `award` varchar(255) NOT NULL,
  `year` year(4) NOT NULL,
  `doctorUsername` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `awards`
--

INSERT INTO `awards` (`id_awards`, `award`, `year`, `doctorUsername`) VALUES
(1, 'Golden globe', 2010, 'admin'),
(2, 'Ballon d\'OR', 2010, 'admin'),
(3, 'Ballon d\'OR', 2017, 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `businesshour`
--

CREATE TABLE `businesshour` (
  `id_BHour` int(11) NOT NULL,
  `day` varchar(10) NOT NULL,
  `fromTime` varchar(10) NOT NULL,
  `toTime` varchar(10) NOT NULL,
  `doctorUsername` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `businesshour`
--

INSERT INTO `businesshour` (`id_BHour`, `day`, `fromTime`, `toTime`, `doctorUsername`) VALUES
(1, 'Sunday', '07:00 AM ', '09:00 PM', 'admin'),
(2, 'Monday', '07:00 AM ', '09:00 PM', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `username` varchar(20) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `DateOfBirth` date DEFAULT NULL,
  `BloodGroupe` varchar(3) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(13) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `state` varchar(255) DEFAULT NULL,
  `ZipCode` int(5) DEFAULT NULL,
  `country` varchar(20) DEFAULT NULL,
  `image` varchar(255) NOT NULL DEFAULT 'default_profile_picture.png',
  `password` varchar(255) NOT NULL,
  `userType` varchar(1) NOT NULL DEFAULT 'P',
  `status` varchar(255) NOT NULL DEFAULT 'online',
  `pricing` int(11) DEFAULT NULL,
  `about` varchar(1000) DEFAULT NULL,
  `services` varchar(255) DEFAULT NULL,
  `speciality` varchar(255) DEFAULT NULL,
  `registered` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`username`, `fname`, `lname`, `DateOfBirth`, `BloodGroupe`, `email`, `mobile`, `address`, `city`, `state`, `ZipCode`, `country`, `image`, `password`, `userType`, `status`, `pricing`, `about`, `services`, `speciality`, `registered`) VALUES
('a', 'Mohamed', 'a', '0000-00-00', '', 'a@a', '', '', '', '', 0, '', 'default_profile_picture.png', '$2y$10$77qlizmguBZ95X0fAb.8ye0xaRWDmXt8a3meLofGDgU36.X7JiJfu', 'D', 'offline', 0, NULL, NULL, NULL, 0),
('admin', 'Ammari.', 'Liamine', '1975-05-12', '+AB', 'admin@avismed.net', '0661751150', 'Fibour', 'Bordj Bou Arreridj', 'Bordj Bou Arreridj', 34000, 'Algeria', '310406027949527927LIAMINE-AMMARI.png', '$2y$10$iqOScLiZxGadF9pK2qNh4uFL8smn1oGywToFZXXk4tShzGAJcr4n6', 'D', 'offline', 15000, NULL, NULL, NULL, 1),
('d1', 'Ahmed', 'Mustafa', '0000-00-00', 'A+', 'd1@d1', '+213672457854', '', 'Algiers', 'Algiers', 16000, 'Algeria', '14932868851006538680doctor-thumb-05.jpg', '$2y$10$ZUKQ1kAvk8c7mHQ/OVG2zub7uWaQ.ErR1LdZVav0XqIP3QT8zlQ26', 'D', 'offline', 1500, NULL, NULL, NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `education`
--

CREATE TABLE `education` (
  `id_education` int(11) NOT NULL,
  `degree` varchar(255) NOT NULL,
  `college` varchar(255) NOT NULL,
  `yearOfCompletion` varchar(255) NOT NULL,
  `doctorUsername` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `education`
--

INSERT INTO `education` (`id_education`, `degree`, `college`, `yearOfCompletion`, `doctorUsername`) VALUES
(1, 'BDS', 'American Dental Medical University', '2003 - 2010', 'admin'),
(2, 'Bachelor', 'Farhat Abbas', '2015 - 2016', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `experience`
--

CREATE TABLE `experience` (
  `id_experience` int(11) NOT NULL,
  `hospital` varchar(255) NOT NULL,
  `frm` varchar(255) NOT NULL,
  `tto` varchar(255) NOT NULL,
  `doctorUsername` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `experience`
--

INSERT INTO `experience` (`id_experience`, `hospital`, `frm`, `tto`, `doctorUsername`) VALUES
(1, 'Glowing Smiles Family Dental Clinic', '2010', '2020', 'admin'),
(2, 'Comfort Care Dental Clinic', '2007', '2010', 'admin'),
(3, 'Dream Smile Dental Practice', '2005', '2007', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `friendslist`
--

CREATE TABLE `friendslist` (
  `friendsListId` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `friendUsername` varchar(255) NOT NULL,
  `msgCount` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `friendslist`
--

INSERT INTO `friendslist` (`friendsListId`, `username`, `friendUsername`, `msgCount`) VALUES
(1, 'ehamza', 'admin', 3),
(2, 'admin', 'ehamza', 4),
(3, 'admin', 'user01', 0),
(4, 'user01', 'admin', 0);

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `msgid` int(255) NOT NULL,
  `incoming_msg` varchar(255) NOT NULL,
  `outgoing_msg` varchar(255) NOT NULL,
  `msg` varchar(255) NOT NULL,
  `msgTime` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `patients`
--

CREATE TABLE `patients` (
  `username` varchar(20) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `DateOfBirth` date DEFAULT NULL,
  `BloodGroupe` varchar(3) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(13) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `state` varchar(255) DEFAULT NULL,
  `ZipCode` int(5) DEFAULT NULL,
  `country` varchar(20) DEFAULT NULL,
  `image` varchar(255) NOT NULL DEFAULT 'default_profile_picture.png',
  `password` varchar(255) NOT NULL,
  `userType` varchar(1) NOT NULL DEFAULT 'P',
  `status` varchar(255) NOT NULL DEFAULT 'online',
  `vkey` varchar(255) NOT NULL,
  `verified` int(1) DEFAULT 0,
  `createdate` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patients`
--

INSERT INTO `patients` (`username`, `fname`, `lname`, `DateOfBirth`, `BloodGroupe`, `email`, `mobile`, `address`, `city`, `state`, `ZipCode`, `country`, `image`, `password`, `userType`, `status`, `vkey`, `verified`, `createdate`) VALUES
('ehamza', 'Hamza', 'Mansouri', '1997-10-04', '+B', 'ehamza@avismed.com', '0672138811', 'Rue Z, LOTS 278, N18', 'Bordj Bou Arreridj', 'Bordj Bou Arreridj', 34000, 'Algeria', '740558994147931294Chi-typing-on-a-computer-chis-sweet-home-chis-new-address-37597964-320-240.gif', '$2y$10$GyzADYvZC8QrBMSDlV/NSepY4hOc2SFF5o.PMSgUWzAf/fanGJVbm', 'P', 'offline', 'a02948bf3fcbd10feef4170f7f21e563', 0, '2022-01-28 23:42:48'),
('user1', 'Ammari', 'Liamine', '0000-00-00', '', 'ammari@gmail.com', '', '', '', '', 0, '', '1633527440278615149LIAMINE-AMMARI.png', '$2y$10$Iy.c9LCW2B2CCNPSjgfAJ.IC3Ky.z9qVxJZqz9XGyUr5oF6FdAw/2', 'P', 'online', '9f65f5eb54966a814f3124e262bcfb61', 0, '2022-01-30 13:42:30');

-- --------------------------------------------------------

--
-- Table structure for table `registrations`
--

CREATE TABLE `registrations` (
  `id_registrations` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `serial` varchar(255) NOT NULL,
  `dateTime` datetime NOT NULL DEFAULT current_timestamp(),
  `type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registrations`
--

INSERT INTO `registrations` (`id_registrations`, `username`, `serial`, `dateTime`, `type`) VALUES
(21, 'admin', '3UHL-F9SVJC-EWXEGF-3B8D', '2022-01-28 22:49:14', 'Normal'),
(22, 'admin', 'HXKE4Y-BAKCV2-5FC5GE', '2022-01-30 12:26:15', 'Normal'),
(23, 'admin', 'HXKE4Y-BAKCV2-5FC5GE', '2022-01-30 12:28:18', 'Normal'),
(25, 'd1', 'RRJ8X5-RLYHB2-5FC5NS', '2022-03-10 17:32:42', 'Normal');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `idReviwes` int(11) NOT NULL,
  `stars` int(1) NOT NULL,
  `review` varchar(300) NOT NULL,
  `dateTime` date NOT NULL DEFAULT current_timestamp(),
  `doctorUsername` varchar(20) NOT NULL,
  `patientUsername` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`idReviwes`, `stars`, `review`, `dateTime`, `doctorUsername`, `patientUsername`) VALUES
(1, 5, 'aze', '2022-01-24', 'admin', 'ehamza'),
(2, 4, 'sest', '2022-01-24', 'd01', 'ehamza'),
(3, 5, 'lkhiol', '2022-01-24', 'admin', 'ehamza'),
(4, 4, 'sef', '2022-01-24', 'admin', 'ehamza');

-- --------------------------------------------------------

--
-- Table structure for table `serials`
--

CREATE TABLE `serials` (
  `id_serials` int(20) NOT NULL,
  `serial` varchar(255) NOT NULL,
  `used` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `serials`
--

INSERT INTO `serials` (`id_serials`, `serial`, `used`) VALUES
(1, '3UHL-F9SVJC-EWXEGF-3B8D', 1),
(4, 'YJMP73-83Y9S2-5FL5W2', 1),
(5, 'RRJ8X5-RLYHB2-5FC5NS', 1),
(6, 'EMSQFH-6X4QTJ-4QL7MJ', 0),
(7, 'HXKE4Y-BAKCV2-5FC5GE', 1),
(8, 'MQ5GN4-Z8DV72-5FC5BJ', 0),
(9, 'NWWDDF-DP75DJ-5FL5VE', 0),
(10, 'SKFFZ9-6GQ8GJ-5FC5QJ', 0),
(11, 'CC7MQ3-VDAQ92-5FL56A', 0),
(12, '3AYV5V-XE7LL2-4YL4F6', 0),
(13, 'Y5F3GL-BQA832-5FC5CA', 0),
(14, 'KE9MVP-QF2Q72-564642', 0),
(15, 'LWHFAC-XJ3M72-5FL5U2', 0),
(16, 'ZPBF6Q-EEYRF2-5FC5GN', 0),
(17, '3CRWJX-H2BC22-5FC5NS', 0),
(18, 'PWKX6L-LN4UTJ-5RL652', 0),
(19, 'HZ3KXS-HT7HAJ-5FL5QJ', 0),
(20, 'AHUU5Q-ZVSY4J-5FL5DJ', 0),
(21, 'M2ADQ8-J85DZ2-4848PN', 0),
(22, 'ZE5L43-P625J2-5FL5A2', 0);

-- --------------------------------------------------------

--
-- Table structure for table `socialmedia`
--

CREATE TABLE `socialmedia` (
  `id_socialMedia` int(11) NOT NULL,
  `doctorUsername` varchar(20) NOT NULL,
  `facebook` varchar(255) NOT NULL,
  `twitter` varchar(255) NOT NULL,
  `youtube` varchar(255) NOT NULL,
  `linkedin` varchar(255) NOT NULL,
  `whatsapp` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `socialmedia`
--

INSERT INTO `socialmedia` (`id_socialMedia`, `doctorUsername`, `facebook`, `twitter`, `youtube`, `linkedin`, `whatsapp`) VALUES
(2, 'admin', 'aze', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alerts`
--
ALTER TABLE `alerts`
  ADD PRIMARY KEY (`id_alert`);

--
-- Indexes for table `awards`
--
ALTER TABLE `awards`
  ADD PRIMARY KEY (`id_awards`);

--
-- Indexes for table `businesshour`
--
ALTER TABLE `businesshour`
  ADD PRIMARY KEY (`id_BHour`),
  ADD KEY `doctorUsername` (`doctorUsername`);

--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `education`
--
ALTER TABLE `education`
  ADD PRIMARY KEY (`id_education`),
  ADD KEY `doctorUsername` (`doctorUsername`);

--
-- Indexes for table `experience`
--
ALTER TABLE `experience`
  ADD PRIMARY KEY (`id_experience`),
  ADD KEY `doctorUsername` (`doctorUsername`);

--
-- Indexes for table `friendslist`
--
ALTER TABLE `friendslist`
  ADD PRIMARY KEY (`friendsListId`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`msgid`),
  ADD KEY `messages_ibfk_1` (`incoming_msg`);

--
-- Indexes for table `patients`
--
ALTER TABLE `patients`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `registrations`
--
ALTER TABLE `registrations`
  ADD PRIMARY KEY (`id_registrations`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`idReviwes`);

--
-- Indexes for table `serials`
--
ALTER TABLE `serials`
  ADD PRIMARY KEY (`id_serials`);

--
-- Indexes for table `socialmedia`
--
ALTER TABLE `socialmedia`
  ADD PRIMARY KEY (`id_socialMedia`),
  ADD UNIQUE KEY `doctorUsername` (`doctorUsername`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alerts`
--
ALTER TABLE `alerts`
  MODIFY `id_alert` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `awards`
--
ALTER TABLE `awards`
  MODIFY `id_awards` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `businesshour`
--
ALTER TABLE `businesshour`
  MODIFY `id_BHour` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `education`
--
ALTER TABLE `education`
  MODIFY `id_education` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `experience`
--
ALTER TABLE `experience`
  MODIFY `id_experience` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `friendslist`
--
ALTER TABLE `friendslist`
  MODIFY `friendsListId` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `msgid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `registrations`
--
ALTER TABLE `registrations`
  MODIFY `id_registrations` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `idReviwes` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `serials`
--
ALTER TABLE `serials`
  MODIFY `id_serials` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `socialmedia`
--
ALTER TABLE `socialmedia`
  MODIFY `id_socialMedia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `businesshour`
--
ALTER TABLE `businesshour`
  ADD CONSTRAINT `businesshour_ibfk_1` FOREIGN KEY (`doctorUsername`) REFERENCES `doctors` (`username`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `education`
--
ALTER TABLE `education`
  ADD CONSTRAINT `doctorUsername` FOREIGN KEY (`doctorUsername`) REFERENCES `doctors` (`username`);

--
-- Constraints for table `experience`
--
ALTER TABLE `experience`
  ADD CONSTRAINT `experience_ibfk_1` FOREIGN KEY (`doctorUsername`) REFERENCES `doctors` (`username`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `messages`
--
ALTER TABLE `messages`
  ADD CONSTRAINT `messages_ibfk_1` FOREIGN KEY (`incoming_msg`) REFERENCES `patients` (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
