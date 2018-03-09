-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 24, 2017 at 05:00 AM
-- Server version: 5.7.17
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mydb`
--

-- --------------------------------------------------------

--
-- Table structure for table `anganwadi_list`
--

CREATE TABLE `anganwadi_list` (
  `a_id` int(11) NOT NULL,
  `a_name` varchar(255) DEFAULT NULL,
  `area` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `state` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `login_id` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `anganwadi_list`
--

INSERT INTO `anganwadi_list` (`a_id`, `a_name`, `area`, `city`, `state`, `address`, `login_id`, `password`) VALUES
(1, 'olpad center', 'olpad', 'surat', 'gujarat', '23,oppo. sai dham complex,olpad ,surat.', 'olpad#123', '123#olpad'),
(2, 'kumbharia center', 'kumbharia', 'surat', 'gujarat', '43,near pramukh park,kumbharia ,surat', 'kumbharia#123', '123#kumbharia'),
(3, 'maroli center', 'maroli', 'surat', 'gujarat', '11,safari complex,maroli,surat', 'maroli#123', '123#maroli'),
(4, 'palsana center', 'palsana', 'surat', 'gujarat', '54,mokra gam,palsana,surat.', 'mokra#123', '123#mokra'),
(5, 'cauzway center', 'cauzway road', 'surat', 'gujarat', '32,near chandan gas,cauzway,surat.', 'cauzway#123', '123#cauzway'),
(6, 'saroli center', 'saroli gam', 'surat', 'gujarat', '21,near sarjan tower,saroli gam,surat.', 'saroli#123', '123#saroli'),
(7, 'sachin center', 'sachin junction', 'surat', 'gujarat', '9,near sarthi complex,sachin, surat.', 'sachin#123', '123#sachin'),
(8, 'kosad center', 'kosad road', 'surat', 'gujarat', '26,oppo. suman shakti appt.,kosad,surat.', 'kosad#123', '123#kosad');

-- --------------------------------------------------------

--
-- Table structure for table `a_staff`
--

CREATE TABLE `a_staff` (
  `st_id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `contactno` int(11) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `designation` varchar(255) DEFAULT NULL,
  `a_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `child`
--

CREATE TABLE `child` (
  `id` varchar(255) NOT NULL,
  `fname` varchar(50) DEFAULT NULL,
  `lname` varchar(50) DEFAULT NULL,
  `father_name` varchar(50) DEFAULT NULL,
  `mother_name` varchar(50) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `dob_time` time DEFAULT NULL,
  `birth_place` varchar(50) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `area` varchar(50) DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL,
  `state` varchar(50) DEFAULT NULL,
  `gender` varchar(20) DEFAULT NULL,
  `contactno` bigint(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `child`
--

INSERT INTO `child` (`id`, `fname`, `lname`, `father_name`, `mother_name`, `dob`, `dob_time`, `birth_place`, `address`, `area`, `city`, `state`, `gender`, `contactno`) VALUES
('', 'vraj', 'lunai', 'mitul', 'nita', '2017-09-13', '04:00:00', 'Hospital', 'Varacha', 'Surat', 'Surat', 'Gujarat', 'M', 8980151680);

-- --------------------------------------------------------

--
-- Table structure for table `hospital_list`
--

CREATE TABLE `hospital_list` (
  `h_id` int(11) NOT NULL,
  `h_name` varchar(255) DEFAULT NULL,
  `area` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `state` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  `login_id` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hospital_list`
--

INSERT INTO `hospital_list` (`h_id`, `h_name`, `area`, `city`, `state`, `address`, `type`, `login_id`, `password`) VALUES
(1, 'mehta hospital', 'sagarmpura', 'surat', 'gujarat', 'Near Putli, Sagrampura Surat Ho, Surat - 395003', 'private', 'mehta@gmail.com', 'mehta123'),
(2, 'nirmal hospital pvt.ltd', 'ring road', 'surat', 'gujarat', 'Centre Point, Ring Road, Near Kadiwala School Khatodra Wadi, Surat - 395002	', 'private', 'nirmal@gmail.com', 'nirmal123'),
(3, 'care hospital', 'athwa gate', 'surat', 'gujarat', 'Athwa Gate , Surat - 395001	', 'private', 'care@gmail.com', 'care123'),
(4, 'Ashaktashram Hospital', 'rampura', 'surat', 'gujarat', ' Main Road, Rampura, Surat', 'government', 'ashaktashram@gmail.com', 'ashakta123'),
(5, 'Shree Prannath Hospital', 'ved road', 'surat', 'gujarat', ' Opposite Sanghavi Diamond, Shree Prannath Marg, Ved Road, Surat', 'government', 'prannath@gmail.com', 'prannath123'),
(6, 'Surat Civil Hospital', 'majuragate', 'surat', 'gujarat', ' Majuragate, Surat.', 'government', 'civil@gmail.com', 'civil123'),
(7, 'Sanjeevani Multi Speciality Hospital', 'udhana', 'surat', 'gujarat', 'Udhana-Magdalla Road, Surat', 'private', 'sanjeevani@gmail.com', 'sanjeevani123'),
(8, 'nupoor nursing home', 'citylight', 'surat', 'gujarat', '33, Citylight Road, Near Maheshwari Bhavan, Citylight Circle Sangam Society, Surat - 395007	', 'private', 'nupoor@gmail.com', 'nupoor123'),
(9, 'ewa hospital', 'adajan', 'surat', 'gujarat', '405-8, Millionaire Business Park, Above Mc Donald, Opposite TGb Restaurant, L P Savani Road Adajan Hazira Road, Surat - 395009	', 'private', 'ewa@gmail.com', 'ewa123'),
(10, 'New Civil Hospital', 'athwagate', 'Surat', 'Gujarat', 'athwagate,surat', 'public', 'vkiranmaniya@gmail.com', '9caa96f3f6ef35dcbcbb34b156c985dc');

-- --------------------------------------------------------

--
-- Table structure for table `h_staff`
--

CREATE TABLE `h_staff` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `emailid` varchar(255) DEFAULT NULL,
  `contactno` int(11) DEFAULT NULL,
  `designation` varchar(255) DEFAULT NULL,
  `h_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `polio`
--

CREATE TABLE `polio` (
  `p_id` int(11) DEFAULT NULL,
  `p_type` varchar(255) DEFAULT NULL,
  `dose1` tinyint(4) DEFAULT NULL,
  `dose2` tinyint(4) DEFAULT NULL,
  `dose3` tinyint(4) DEFAULT NULL,
  `dose4` tinyint(4) DEFAULT NULL,
  `last_date` date DEFAULT NULL,
  `c_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `p_staff`
--

CREATE TABLE `p_staff` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `emailid` varchar(255) DEFAULT NULL,
  `contactno` int(11) DEFAULT NULL,
  `designation` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`) VALUES
(1, 'Kiran Maniya', 'vkiranmaniya@gmail.com', '713c8ce3d66cdac0a1e97cab02b0deb8');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anganwadi_list`
--
ALTER TABLE `anganwadi_list`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `a_staff`
--
ALTER TABLE `a_staff`
  ADD PRIMARY KEY (`st_id`);

--
-- Indexes for table `child`
--
ALTER TABLE `child`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hospital_list`
--
ALTER TABLE `hospital_list`
  ADD PRIMARY KEY (`h_id`);

--
-- Indexes for table `h_staff`
--
ALTER TABLE `h_staff`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `p_staff`
--
ALTER TABLE `p_staff`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `anganwadi_list`
--
ALTER TABLE `anganwadi_list`
  MODIFY `a_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `a_staff`
--
ALTER TABLE `a_staff`
  MODIFY `st_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `hospital_list`
--
ALTER TABLE `hospital_list`
  MODIFY `h_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
