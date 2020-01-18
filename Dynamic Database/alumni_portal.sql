-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 13, 2019 at 03:11 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `alumni_portal`
--

-- --------------------------------------------------------

--
-- Table structure for table `alumnis`
--

CREATE TABLE `alumnis` (
  `alumni_id` int(11) NOT NULL,
  `alumni_name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `alumni_ph_no` varchar(15) NOT NULL,
  `password` varchar(200) NOT NULL,
  `alumni_gender` varchar(20) NOT NULL,
  `country` text NOT NULL,
  `alumni_course` varchar(20) NOT NULL,
  `alumni_last_year` varchar(50) NOT NULL,
  `certificate_code` varchar(200) NOT NULL,
  `Status` text NOT NULL,
  `course_phs` varchar(200) NOT NULL,
  `institute_phs` varchar(200) NOT NULL,
  `company` varchar(200) NOT NULL,
  `organisation` varchar(200) NOT NULL,
  `designation` varchar(200) NOT NULL,
  `no_of_employees` varchar(200) NOT NULL,
  `turnover` varchar(200) NOT NULL,
  `other` text NOT NULL,
  `img_phs` varchar(200) NOT NULL,
  `img_job` varchar(255) NOT NULL,
  `role` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `alumnis`
--

INSERT INTO `alumnis` (`alumni_id`, `alumni_name`, `email`, `alumni_ph_no`, `password`, `alumni_gender`, `country`, `alumni_course`, `alumni_last_year`, `certificate_code`, `Status`, `course_phs`, `institute_phs`, `company`, `organisation`, `designation`, `no_of_employees`, `turnover`, `other`, `img_phs`, `img_job`, `role`) VALUES
(1, 'Aawez Khan', 'aawezk456@gmail.com', '8103543543', 'aawez123123', 'Male', 'Afghanistan', 'Computer Engineering', '2003', '121212', '', '', '', 'FACEBOOK', '', 'manager', '', '', '', '', '', 'admin'),
(3, 'khan shahnawaz', 'khanshanu@gmail.com', '1234344454', 'shanu123123', 'Male', 'India', 'Computer Engineering', '2015', '545454', 'Entrepreneur', '', '', '', 'AZINFO.TECH', '', '55', '30Lakhs', '', '', '', ''),
(4, 'Usama Thakur', 'usama@gmail.com', '9823233411', 'usama123123', 'Male', 'Bangladesh', 'Computer Engineering', '2018', '989898', 'Job', '', '', 'RELIANCE JIO', '', 'SOFTWARE TESTER', '', '', '', '', '', ''),
(6, 'wsdijasdjsi', 'sadhusaduk@gmail.com', '123123123', 'asass', 'Male', 'Afghanistan', 'Computer Engineering', '2003', '896565', 'Other', '', '', '', '', '', '', '', 'Hell', '', '', ''),
(7, 'kdifiosdjf', 'asdjasd@gmail.com', '1231231231', 'asdasdas', 'Male', 'Afghanistan', 'Computer Engineering', '2003', '355465', 'Other', '', '', '', '', '', '', '', 'HEY', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `any_other`
--

CREATE TABLE `any_other` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(255) NOT NULL,
  `branch` text NOT NULL,
  `passyear` int(11) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `any_other`
--

INSERT INTO `any_other` (`id`, `name`, `email`, `branch`, `passyear`, `description`) VALUES
(1, 'aawez', '', 'CO', 2003, 'event');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `contact_id` int(11) NOT NULL,
  `contact_name` varchar(200) NOT NULL,
  `contact_email` varchar(200) NOT NULL,
  `contact_subject` varchar(200) NOT NULL,
  `contact_message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`contact_id`, `contact_name`, `contact_email`, `contact_subject`, `contact_message`) VALUES
(1, 'Aassdd', 'aawez@gmail.conm', 'hello', 'hshjasakia'),
(2, 'ahsdysjc', 'kcbkk@gmail.com', 'hellioclkku', 'skchkecjku');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `event_id` int(11) NOT NULL,
  `event_title` varchar(255) NOT NULL,
  `event_organizer` text NOT NULL,
  `event_description` varchar(255) NOT NULL,
  `event_date` date NOT NULL,
  `event_time` time NOT NULL,
  `event_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`event_id`, `event_title`, `event_organizer`, `event_description`, `event_date`, `event_time`, `event_image`) VALUES
(5, 'Alumni Q&A', 'Aawez', '50 years Completion of our institute...............', '2019-03-27', '08:30:00', 'Q&A.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `expert`
--

CREATE TABLE `expert` (
  `expert_id` int(11) NOT NULL,
  `expert_name` text NOT NULL,
  `expert_email` varchar(255) NOT NULL,
  `expert_branch` text NOT NULL,
  `expert_audience` text NOT NULL,
  `expert_topic` text NOT NULL,
  `expert_passyear` int(11) NOT NULL,
  `expert_date` date NOT NULL,
  `expert_time` time NOT NULL,
  `dept_talk` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `expert`
--

INSERT INTO `expert` (`expert_id`, `expert_name`, `expert_email`, `expert_branch`, `expert_audience`, `expert_topic`, `expert_passyear`, `expert_date`, `expert_time`, `dept_talk`) VALUES
(1, 'Aawez khan', '', 'CO', 'TS', 'django', 2003, '2019-01-23', '08:00:00', 'CO');

-- --------------------------------------------------------

--
-- Table structure for table `industrialvisit`
--

CREATE TABLE `industrialvisit` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(255) NOT NULL,
  `branch` text NOT NULL,
  `passyear` text NOT NULL,
  `name_ind` text NOT NULL,
  `audience` text NOT NULL,
  `dept_iv` text NOT NULL,
  `no_audience` int(11) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `industrialvisit`
--

INSERT INTO `industrialvisit` (`id`, `name`, `email`, `branch`, `passyear`, `name_ind`, `audience`, `dept_iv`, `no_audience`, `date`, `time`) VALUES
(1, 'aawez', '', 'CO', '2003', 'Jio', 'Teaching Staff', 'CO', 60, '2019-01-30', '08:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `placement`
--

CREATE TABLE `placement` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(255) NOT NULL,
  `branch` text NOT NULL,
  `passyear` text NOT NULL,
  `name_ind` text NOT NULL,
  `dept_placement` text NOT NULL,
  `sector` text NOT NULL,
  `package` varchar(500) NOT NULL,
  `no_students` int(11) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `placement`
--

INSERT INTO `placement` (`id`, `name`, `email`, `branch`, `passyear`, `name_ind`, `dept_placement`, `sector`, `package`, `no_students`, `date`, `time`) VALUES
(1, 'aawez', '', 'CO', '2003', 'Jio', 'CO', 'IT sector', '1.5 lakh', 23, '2019-01-31', '08:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `project_guidance`
--

CREATE TABLE `project_guidance` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(255) NOT NULL,
  `branch` text NOT NULL,
  `passyear` int(11) NOT NULL,
  `dept_guidance` text NOT NULL,
  `domain` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `requests`
--

CREATE TABLE `requests` (
  `alumni_id` int(11) NOT NULL,
  `alumni_name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `alumni_ph_no` varchar(15) NOT NULL,
  `password` varchar(200) NOT NULL,
  `alumni_gender` varchar(20) NOT NULL,
  `country` text NOT NULL,
  `alumni_course` varchar(20) NOT NULL,
  `alumni_last_year` varchar(50) NOT NULL,
  `certificate_code` varchar(200) NOT NULL,
  `Status` text NOT NULL,
  `course_phs` varchar(200) NOT NULL,
  `institute_phs` varchar(200) NOT NULL,
  `company` varchar(200) NOT NULL,
  `organisation` varchar(200) NOT NULL,
  `designation` varchar(200) NOT NULL,
  `no_of_employees` varchar(200) NOT NULL,
  `turnover` varchar(200) NOT NULL,
  `other` text NOT NULL,
  `img_phs` varchar(200) NOT NULL,
  `img_job` varchar(255) NOT NULL,
  `role` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `requests`
--

INSERT INTO `requests` (`alumni_id`, `alumni_name`, `email`, `alumni_ph_no`, `password`, `alumni_gender`, `country`, `alumni_course`, `alumni_last_year`, `certificate_code`, `Status`, `course_phs`, `institute_phs`, `company`, `organisation`, `designation`, `no_of_employees`, `turnover`, `other`, `img_phs`, `img_job`, `role`) VALUES
(1, 'Az', 'aawez12@gmail.com', '213123434', 'aawez123456', 'Male', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `requeststud`
--

CREATE TABLE `requeststud` (
  `stud_id` int(11) NOT NULL,
  `stud_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `student_ph_no` varchar(15) NOT NULL,
  `password` varchar(255) NOT NULL,
  `stud_gender` varchar(255) NOT NULL,
  `stud_course` varchar(255) NOT NULL,
  `enrollment` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `requeststud`
--

INSERT INTO `requeststud` (`stud_id`, `stud_name`, `email`, `student_ph_no`, `password`, `stud_gender`, `stud_course`, `enrollment`) VALUES
(1, 'hasdihsd', 'aisudhasih@gmaikl.com', '4365566776', '123123', 'Male', 'Computer Engineering', 2147483647),
(2, 'sam', 'sam@gmail.com', '5675676', 'aawez', 'Male', 'CO', 34546677);

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `stud_id` int(11) NOT NULL,
  `stud_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `student_ph_no` varchar(15) NOT NULL,
  `password` varchar(255) NOT NULL,
  `stud_gender` varchar(255) NOT NULL,
  `stud_course` varchar(255) NOT NULL,
  `enrollment` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`stud_id`, `stud_name`, `email`, `student_ph_no`, `password`, `stud_gender`, `stud_course`, `enrollment`) VALUES
(1, 'Aawez Khan', 'aawezkawdasd@gmail.com', '8108481831', 'shot', 'Male', 'CO', 1716080162),
(4, 'khan shahnawaz', 'khanshahnawaz8268@gmail.com', '8268242592', '123123123', 'Male', 'CO', 1516080030),
(5, 'sam', 'sam@gmail.com', '5675676', 'aawez', 'Male', 'CO', 34546677);

-- --------------------------------------------------------

--
-- Table structure for table `training`
--

CREATE TABLE `training` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(255) NOT NULL,
  `branch` text NOT NULL,
  `passyear` int(11) NOT NULL,
  `name_com` text NOT NULL,
  `dept_internship` text NOT NULL,
  `sector` text NOT NULL,
  `description` text NOT NULL,
  `no_students` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `training`
--

INSERT INTO `training` (`id`, `name`, `email`, `branch`, `passyear`, `name_com`, `dept_internship`, `sector`, `description`, `no_students`) VALUES
(1, 'aawez', '', 'CO', 2003, 'jio', 'CO', 'IT sector', ' sm', 35),
(2, 'shahnawaz khan', '', 'Computer Engineering', 2003, 'falaa', 'Computer Engineering', '12', ' jyjh bjyh kgbkyuk ', 30);

-- --------------------------------------------------------

--
-- Table structure for table `workshop`
--

CREATE TABLE `workshop` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(255) NOT NULL,
  `branch` text NOT NULL,
  `audience` text NOT NULL,
  `no_audience` int(11) NOT NULL,
  `topic` text NOT NULL,
  `passyear` int(11) NOT NULL,
  `workshop_date` date NOT NULL,
  `workshop_time` time NOT NULL,
  `dept_workshop` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `workshop`
--

INSERT INTO `workshop` (`id`, `name`, `email`, `branch`, `audience`, `no_audience`, `topic`, `passyear`, `workshop_date`, `workshop_time`, `dept_workshop`) VALUES
(1, 'sdsdsd', 'asdasd@gmail.com', 'Computer Engineering', 'Teaching Staff', 122, 'dfsdsfdf', 2003, '2019-03-13', '02:00:00', 'Computer Engineering');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alumnis`
--
ALTER TABLE `alumnis`
  ADD PRIMARY KEY (`alumni_id`,`email`),
  ADD UNIQUE KEY `alumni_email` (`email`),
  ADD UNIQUE KEY `alumni_ph_no` (`alumni_ph_no`);

--
-- Indexes for table `any_other`
--
ALTER TABLE `any_other`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`event_id`);

--
-- Indexes for table `expert`
--
ALTER TABLE `expert`
  ADD PRIMARY KEY (`expert_id`);

--
-- Indexes for table `industrialvisit`
--
ALTER TABLE `industrialvisit`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `placement`
--
ALTER TABLE `placement`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project_guidance`
--
ALTER TABLE `project_guidance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `requests`
--
ALTER TABLE `requests`
  ADD PRIMARY KEY (`alumni_id`);

--
-- Indexes for table `requeststud`
--
ALTER TABLE `requeststud`
  ADD PRIMARY KEY (`stud_id`,`email`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`stud_id`,`student_ph_no`),
  ADD UNIQUE KEY `stud_ph_no_2` (`enrollment`),
  ADD UNIQUE KEY `student_ph_no` (`student_ph_no`);

--
-- Indexes for table `training`
--
ALTER TABLE `training`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `workshop`
--
ALTER TABLE `workshop`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alumnis`
--
ALTER TABLE `alumnis`
  MODIFY `alumni_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `any_other`
--
ALTER TABLE `any_other`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `event_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `expert`
--
ALTER TABLE `expert`
  MODIFY `expert_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `industrialvisit`
--
ALTER TABLE `industrialvisit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `placement`
--
ALTER TABLE `placement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `project_guidance`
--
ALTER TABLE `project_guidance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `requests`
--
ALTER TABLE `requests`
  MODIFY `alumni_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `requeststud`
--
ALTER TABLE `requeststud`
  MODIFY `stud_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `stud_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `training`
--
ALTER TABLE `training`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `workshop`
--
ALTER TABLE `workshop`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
