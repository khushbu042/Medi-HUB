-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 30, 2021 at 06:45 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `onlinedrproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointment_data`
--

CREATE TABLE `appointment_data` (
  `appointment_id` int(11) NOT NULL,
  `first_name` varchar(300) NOT NULL,
  `last_name` varchar(300) NOT NULL,
  `age` varchar(30) NOT NULL,
  `gender` varchar(30) NOT NULL,
  `email` varchar(300) NOT NULL,
  `contact` varchar(300) NOT NULL,
  `doctor_id` int(250) NOT NULL,
  `tag_name` varchar(300) NOT NULL,
  `slot_time` varchar(300) NOT NULL,
  `slot_id` int(250) NOT NULL,
  `symptoms` varchar(300) NOT NULL,
  `appointment_date` date NOT NULL,
  `appointment_mode` varchar(100) NOT NULL,
  `status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `doctor_data`
--

CREATE TABLE `doctor_data` (
  `doctor_id` int(250) NOT NULL,
  `doctor_name` varchar(300) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `email` varchar(300) NOT NULL,
  `location` varchar(300) NOT NULL,
  `experience` varchar(300) NOT NULL,
  `gender` varchar(30) NOT NULL,
  `degree` varchar(100) NOT NULL,
  `description` varchar(300) NOT NULL,
  `office_location` varchar(300) NOT NULL,
  `meeting_link` varchar(300) NOT NULL,
  `tag_name` varchar(300) NOT NULL,
  `password` varchar(100) NOT NULL,
  `profile` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doctor_data`
--

INSERT INTO `doctor_data` (`doctor_id`, `doctor_name`, `contact`, `email`, `location`, `experience`, `gender`, `degree`, `description`, `office_location`, `meeting_link`, `tag_name`, `password`, `profile`) VALUES
(11, 'Prakash Jhavdekar', '9843454656', 'prakash123@gmail.com', 'Indore', '21', 'male', 'MBBS', ' SENIOR PEDIATRIC CONSULTANT & PEDIATRIC EMERGEMCY CONSULTANT at APOLLO HOSPITALS', 'Kalani Nagar,main squar ,arodram road ,indore (MP)', 'https://google.meet.com/grf-rjc', 'Pediatrician: Specialist for Babies and Children', '$2y$10$DYidsiZym3.Bd8o9vu8pSOgSPgNQTqvKjf6GAX9cZlywlQHcfhJSG', 'prakash_.jpg'),
(14, 'S. K.  Gupta', '6260453464', 'skgupta123@gmail.com', 'Indore', '15', 'male', 'MBBS', 'Experienced Paediatrician working with Apollo Hospitals', 'Meghna Medicure ,tower squar , AB road , Indore (MP)', 'https://meet.google.com/vvq-rgar-tvd', 'Pediatrician: Specialist for Babies and Children', '$2y$10$m1QQjmVbCcVjTXvQupcUGeYTV.LK603StkpNm8Jr863Vur0RPG35q', 'sk gupta.jpg'),
(15, 'P S  Ragavan', '6260423423', 'Ragavan123@gmail.com', 'Bangalore', '16', 'male', 'MBBS, MD, DCH, PDCC', ' Experienced Paediatrician working with Apollo Hospitals, Bangalore.', 'Apollo Hospitals Bannerghatta Road,', 'https://google.meet.com/grf-rjc-ere', 'cardiologist: heart specialist', '$2y$10$686CDbOLGd.Ldacet1FkhOLpVVVkAtUWoNjny9wetPl5IxG9JqeHO', 'prakash.jfif'),
(16, 'rupesh Patil', '6260299232', 'rp007@gamil.com', 'khandwa', '21', 'male', 'MBBS', 'dASDasdfasdfs', 'Meghna Medicure ,tower squar , AB road , Indore (MP)', 'https://google.meet.com/grf-rjc-ere', 'Pediatrician: Specialist for Babies and Children', '$2y$10$S2KxVWxYCKUguGg2I7WDrehC4aow0dJGsm.D/s8If7XSJC8g/A0ua', 'prakash.jfif');

-- --------------------------------------------------------

--
-- Table structure for table `tag_table`
--

CREATE TABLE `tag_table` (
  `tag_id` int(250) NOT NULL,
  `tag_name` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tag_table`
--

INSERT INTO `tag_table` (`tag_id`, `tag_name`) VALUES
(1, 'cardiologist: heart specialist'),
(2, 'Dentist: Tooth Specialist'),
(3, 'Dermatologist: Skin Specialist'),
(4, 'Chiropractor: Back Specialist'),
(5, 'Gynecologist: Specializes in Women\'s Needs'),
(6, 'Massage Therapist: Muscle Relaxation'),
(8, 'Naturopath: Specializes in Natural Cures and Remedies'),
(9, 'Podiatrist: Foot Specialist'),
(10, 'Psychiatrist: Specialist in Mental Health'),
(11, 'Pediatrician: Specialist for Babies and Children'),
(12, 'Ophthalmologist: Specializes in Eye Diseases');

-- --------------------------------------------------------

--
-- Table structure for table `time_slot_data`
--

CREATE TABLE `time_slot_data` (
  `slot_id` int(250) NOT NULL,
  `slot_time` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `time_slot_data`
--

INSERT INTO `time_slot_data` (`slot_id`, `slot_time`) VALUES
(3, '09:00 AM - 09:30 AM (mornning)'),
(4, '09:30 AM - 10:00 AM (mornning)'),
(5, '10:00 AM - 10:30 AM (mornning)'),
(6, '10:30 AM - 11:00 AM (mornning)'),
(7, '11:00 AM - 11:30 AM (mornning)'),
(8, '11:30 AM - 12:00 PM (mornning)'),
(9, '12:00 PM - 12:30 PM (Afternoon)'),
(10, '12:30 PM - 01:00 PM (Afternoon)'),
(11, '01:00 PM - 01:30 PM (Afternoon)'),
(12, '01:30 PM - 02:00 PM (Afternoon)'),
(13, '02:00 PM - 02:30 PM (Afternoon)'),
(14, '02:30 PM - 03:00 PM (Afternoon)'),
(15, '03:00 PM - 03:30 PM (Afternoon)'),
(16, '03:30 PM - 04:00 PM (Afternoon)'),
(17, '04:00 PM - 04:30 PM (Afternoon)'),
(18, '04:30 PM - 05:00 PM (Afternoon)'),
(19, '05:00 PM - 05:30 PM (Evening)'),
(20, '05:30 PM - 06:00 PM (Evening)'),
(21, '06:00 PM - 06:30 PM (Evening)'),
(22, '06:30 PM - 07:00 PM (Evening)');

-- --------------------------------------------------------

--
-- Table structure for table `user_data`
--

CREATE TABLE `user_data` (
  `id` int(11) NOT NULL,
  `email_id` varchar(30) NOT NULL,
  `pwd` varchar(300) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `contact` varchar(30) NOT NULL,
  `gender` varchar(8) NOT NULL,
  `city` varchar(20) NOT NULL,
  `age` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_data`
--

INSERT INTO `user_data` (`id`, `email_id`, `pwd`, `first_name`, `last_name`, `contact`, `gender`, `city`, `age`) VALUES
(22, 'rupeshpatil9007@gmail.com', '$2y$10$EsDPBQ9KSOfkvo5tPitYwe0zaf/S6xzbrlQc78RROHC9M6bt0IAni', 'Rupesh', 'Patil', '123456789', 'male', 'indore', '21'),
(23, 'rupesh@123.com', '$2y$10$.SkAySD2h3hap3giw0/ej.6ffpF.hUcQA.DAvWDvLO6qX9ixIL9PO', 'Rupesh', 'Patil', '1235677667', 'male', 'khandwa', '21'),
(24, 'rp@1234.com', '$2y$10$AhfLK8FpTbzdu.4hyS0tHu/MDArTfbfpCwoz4gwO9Mzv2GdsOJcb.', 'Rupesh', 'Patil', '122343453', 'male', 'khandwa', '21'),
(25, '', '$2y$10$TfxQVkPn9K3OPulEfCo6Vehphtr8Nz/53cjjZj3Bzo2zfIoKbuIyu', '', '', '', '', '', ''),
(28, 'prakash@gmail.com', '$2y$10$EHxISaXnmlM9uiOnzK2SyO4rWWMiK7WSDntaSrqc1XNNyKo8VsjgO', 'prakash', 'gupta', '2342342343', 'male', 'mumbai', '35'),
(34, 'rp007@gamil.com', '$2y$10$LDp0ksfLAltUS4Am8VKfNOwu7WugnU5OOJmmUmOQL45iEZ.ysCVSy', 'Rupesh', 'Patil', '2342342343', 'male', 'indore', '21'),
(36, 'RP@12345.com', '$2y$10$QDxqQZWq49d5uSxs1K5E2eNREtKa.gVYJXqJWLZArDa9hF2p3letu', 'Rupesh', 'Patil', '2342342343', 'male', 'indore', '21'),
(37, 'shalini@123.com', '$2y$10$jOUOW0GP0vvlm6wOoSE.4ejI0Wu7jp0Jmgtn4kBvgb8ibPd6rn3oi', 'shalini', 'sen', '2983422366', 'female', 'indore', '21'),
(38, 'patelshivani0404@gmail.com', '$2y$10$i12B5S.0pGkUwz5sbzPFKuoMtJW0Gr28CJWdloC2DOU1RcDNxpy32', 'shivani', 'patel', '9691367826', 'female', 'indore', '22'),
(39, 'patil22@GAMI.COM', '$2y$10$aRqpmdnKfofZ3tzHj6aYEOVODCuXzl4aPZnvY4WAUjvd2rn6EDI.S', '', '', '6260299408', 'male', 'khandwa', '21'),
(42, 'vaishali123@gmail.com', '$2y$10$W2hyM/8jQWdn2kmb9BkEv.63ncFsejn/vjMW687X6DaOW.u2m9oXO', 'vaishali', 'Patil', '6234782368', 'female', 'khandwa', '20'),
(43, 'vaishali1234@gmail.com', '$2y$10$7ielcJ6r6VnVqA/K.WR9/unMlz/rxA13AvV25S9872DYcSOj6ziIG', 'vaishali', 'Patil', '5423423423', 'female', 'khandwa', '20');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointment_data`
--
ALTER TABLE `appointment_data`
  ADD PRIMARY KEY (`appointment_id`);

--
-- Indexes for table `doctor_data`
--
ALTER TABLE `doctor_data`
  ADD PRIMARY KEY (`doctor_id`),
  ADD UNIQUE KEY `doctor_id` (`doctor_id`,`email`);

--
-- Indexes for table `tag_table`
--
ALTER TABLE `tag_table`
  ADD PRIMARY KEY (`tag_id`);

--
-- Indexes for table `time_slot_data`
--
ALTER TABLE `time_slot_data`
  ADD PRIMARY KEY (`slot_id`);

--
-- Indexes for table `user_data`
--
ALTER TABLE `user_data`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email_id` (`email_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointment_data`
--
ALTER TABLE `appointment_data`
  MODIFY `appointment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `doctor_data`
--
ALTER TABLE `doctor_data`
  MODIFY `doctor_id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tag_table`
--
ALTER TABLE `tag_table`
  MODIFY `tag_id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `time_slot_data`
--
ALTER TABLE `time_slot_data`
  MODIFY `slot_id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `user_data`
--
ALTER TABLE `user_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
