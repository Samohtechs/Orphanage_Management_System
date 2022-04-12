-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 25, 2021 at 10:20 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `orphanage_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `children`
--

CREATE TABLE `children` (
  `id` int(11) NOT NULL,
  `child_id` varchar(220) NOT NULL,
  `first_name` varchar(45) NOT NULL,
  `last_name` varchar(45) NOT NULL,
  `report` varchar(2000) NOT NULL,
  `school_name` varchar(2552) NOT NULL,
  `class_level` varchar(255) NOT NULL,
  `dor` varchar(45) NOT NULL,
  `guide` varchar(200) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(7) NOT NULL,
  `file` varchar(400) NOT NULL,
  `address` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `children`
--

INSERT INTO `children` (`id`, `child_id`, `first_name`, `last_name`, `report`, `school_name`, `class_level`, `dor`, `guide`, `dob`, `gender`, `file`, `address`) VALUES
(3, 'MS17-5624', 'Opraaa', 'Tiida', 'Single mom  ', 'Segerea Pr School', 'STD-4', '2017', '12233', '2012-02-05', 'Female', 'chakuwama_orphanage_care_center_970440d3e82d529365629f3756a289e7.jpg', 'kibaha'),
(4, 'MS17-3cbe', 'Kiatu', 'kiaba', 'ueyirtueywtoiuy ', 'Makongo', 'STD-5', '2016', '798769098', '2011-09-21', 'Male', 'chakuwama_orphanage_care_center_61a81cf53f7e6809dd00abcc36ec1052.png', 'mwanza'),
(5, 'MS17-510c', 'Macralen', 'Fone', 'igoiughituehlwhoeneojfow  ', 'Mwenge Pr School', 'STD-5', '2018', '7983083736', '2010-09-07', 'Male', 'chakuwama_orphanage_care_center_667c6eacba99026183e1094e13c6a1eb.jpg', 'Mwenge'),
(6, 'MS17-56d7', 'Ford ', 'indigo', 'kulyherioh;peroj;vin.lvnp;orjruhofheofjpfoefpeokfpifjroihrojforihrouighruigij;fjlhruigrhfprjrlfhrugrihrfjrogihuigrfje;kw;jroiyiorihgojjouhgiurlrihriurrirh  ', 'Mapambano Pr School', 'STD-2', '2018', '29794769', '2016-09-15', 'Female', 'chakuwama_orphanage_care_center_3ab77274bfad305ebcc5f07686af2c3d.jpg', 'Tegeta'),
(7, 'MS17-a9f4', 'lotus', 'Loft', 'aklijfirjouhuhu urhkhoior\r\niroeruohvrohouhhor kjlrughrofug\r\ngruoefihuiigifeeofrhoforifefjofholsieyfkfl\r\nkhfkufufhof lirufoulh\r\nurfgifvkkfhufeofefouhror\r\nuiufeufhlfhofir  ', 'Ubungo Pr. School', 'STD-2', '2019', '893670575', '2014-09-10', 'Male', 'chakuwama_orphanage_care_center_b915e8a7efabd51443a8302271204f07.jpg', 'Kawe'),
(8, 'MS17-581d', 'tatu', 'Haji', 'furyfiuryhoihfiwurfgoeifh  ', 'Ilala Sec School', 'FORM-1', '2020', '762396', '2003-09-07', 'Female', 'chakuwama_orphanage_care_center_e6c154979f16a9daba016abba9c8ee1c.jpg', 'Kijitonyama'),
(11, 'MS17-f16d', 'Kaka', 'Mkubwa', 'eiuorghohv iofufoyg\r\ndufyiuha;fiouheu  ', 'Kibasila Primary School', 'STD-1', '2021', '75948679', '2016-02-17', 'Male', 'chakuwama_orphanage_care_center_db94c99c37342a043b56d298ca310ed5.jpg', 'Kawe'),
(12, 'MS17-d191', 'ali', 'alisi', 'eurugyrioug gelhurgh ', 'Mwenge Pr School', 'STD-3', '2018', '5676578', '2011-09-07', 'Male', 'chakuwama_orphanage_care_center_34d5e17aa277965b583a6b5d8273a1b9.jpg', 'kawe');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `f_name` varchar(55) NOT NULL,
  `l_name` varchar(55) NOT NULL,
  `role` varchar(255) NOT NULL,
  `user_name` varchar(55) NOT NULL,
  `pass_word` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `f_name`, `l_name`, `role`, `user_name`, `pass_word`) VALUES
(5, 'Rhoby', 'Fedrick', 'admin', 'Rhoby', '73b5aada9fe470784776d9c513b1792c422d689c'),
(9, 'Master', 'Ofselemonii', 'admin', 'Mc', 'b46e38b6501e1454be2c5d98a53f2f282770f87e'),
(10, 'Emmaculata', 'Emma', 'staff', 'Emma', '02c075f7ac5f002bee7b0e4665a5ee845c84026b');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `children`
--
ALTER TABLE `children`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_name` (`user_name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `children`
--
ALTER TABLE `children`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
