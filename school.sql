-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 14, 2021 at 07:14 PM
-- Server version: 8.0.21
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `school`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int NOT NULL AUTO_INCREMENT,
  `full_name` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `addmin_pass` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `full_name`, `email`, `addmin_pass`) VALUES
(1, 'admin', 'admin@gmail.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `classes`
--

DROP TABLE IF EXISTS `classes`;
CREATE TABLE IF NOT EXISTS `classes` (
  `id` int NOT NULL AUTO_INCREMENT,
  `classname` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `classes`
--

INSERT INTO `classes` (`id`, `classname`) VALUES
(1, 'one'),
(2, 'two'),
(3, 'three'),
(4, 'four'),
(5, 'five');

-- --------------------------------------------------------

--
-- Table structure for table `results`
--

DROP TABLE IF EXISTS `results`;
CREATE TABLE IF NOT EXISTS `results` (
  `id` int NOT NULL AUTO_INCREMENT,
  `subjects` varchar(30) DEFAULT NULL,
  `class_id` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `mark` int DEFAULT NULL,
  `roll_number` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=99 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `results`
--

INSERT INTO `results` (`id`, `subjects`, `class_id`, `mark`, `roll_number`) VALUES
(93, 'Math', '4', 60, 4001),
(94, 'Science', '4', 60, 4001),
(95, 'Bangla', '1', 80, 1001),
(96, 'English', '1', 80, 1001),
(97, 'Math', '1', 80, 1001),
(98, 'Science', '1', 80, 1001),
(92, 'English2nd', '4', 60, 4001),
(91, 'English1st', '4', 60, 4001),
(90, 'Bangla2nd', '4', 60, 4001),
(89, 'Bangla1st', '4', 60, 4001);

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

DROP TABLE IF EXISTS `students`;
CREATE TABLE IF NOT EXISTS `students` (
  `id` int NOT NULL AUTO_INCREMENT,
  `first_name` varchar(30) DEFAULT NULL,
  `last_name` varchar(30) DEFAULT NULL,
  `mobile` varchar(30) DEFAULT NULL,
  `roll_number` int DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `student_pass` varchar(50) DEFAULT NULL,
  `class_id` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `first_name`, `last_name`, `mobile`, `roll_number`, `email`, `student_pass`, `class_id`) VALUES
(1, 'md', 'fayshal', '1234567890', 1001, 'admin@gmail.com', '1234', 1),
(16, 'Shabbir ', 'Md. Fayshal', '01222455587 ', 4001, 'raju@gmail.com', '1234 ', 4),
(14, 'sam', 'hasan', '01254544', 3001, 'teachers@gmail.com', '  1234', 3),
(15, 'kali ', 'bayu', '014578932 ', 2001, 'admintest@gmail.com', '1234 ', 2);

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

DROP TABLE IF EXISTS `subjects`;
CREATE TABLE IF NOT EXISTS `subjects` (
  `id` int NOT NULL AUTO_INCREMENT,
  `subjectname` varchar(50) DEFAULT NULL,
  `classid` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`id`, `subjectname`, `classid`) VALUES
(1, 'bangla', '1'),
(2, 'english', '1'),
(3, 'math', '1'),
(4, 'science', '1'),
(5, 'bangla', '2'),
(6, 'english', '2'),
(7, 'math', '2'),
(8, 'science', '2'),
(9, 'bangla1st', '3'),
(10, 'bangla2nd', '3'),
(11, 'english1st', '3'),
(12, 'english2nd', '3'),
(13, 'math', '3'),
(14, 'science', '3'),
(15, 'bangla1st', '4'),
(16, 'bangla2nd', '4'),
(17, 'english1st', '4'),
(18, 'english2nd', '4'),
(19, 'math', '4'),
(20, 'science', '4');

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

DROP TABLE IF EXISTS `teachers`;
CREATE TABLE IF NOT EXISTS `teachers` (
  `id` int NOT NULL AUTO_INCREMENT,
  `first_name` varchar(30) DEFAULT NULL,
  `last_name` varchar(30) DEFAULT NULL,
  `mobile` varchar(30) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `teacher_pass` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`id`, `first_name`, `last_name`, `mobile`, `email`, `teacher_pass`) VALUES
(10, 'sam', 'hasan', '01254544', 'teacher@gmail.com', '1234'),
(11, 'ms', 'raju', '0123456987', 'raju@gmail.com', '1234');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
