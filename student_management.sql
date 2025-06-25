-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 25, 2025 at 03:06 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `student_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `student_id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `year_level` varchar(10) NOT NULL,
  `program` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`student_id`, `first_name`, `last_name`, `year_level`, `program`, `email`) VALUES
(1, 'Gillian', 'Florano', '2nd Year', 'Bachelor of Science in Biochemistry', 'gillian.florano@gmail.com'),
(2, 'Russell', 'Pagcu', '2nd Year', 'Bachelor of Science in Information Technology', 'russell.pagcu@gmail.com'),
(3, 'Jaira', 'Canteras', '3rd Year', 'Bachelor of Science in Nursing', 'jai.canteras@gmail.com'),
(4, 'Justine', 'Placio', '4th Year', 'Bachelor of Science in Computer Science', 'justine.placio@gmail.com'),
(5, 'Micaella', 'Eliab', '5th Year', 'Bachelor of Science in Architecture', 'micaella.eliab@gmail.com'),
(6, 'Andres', 'David', '1st Year', 'Bachelor of Science in Economics', 'andres.david@gmail.com'),
(7, 'Asnaira', 'Usman', '2nd Year', 'Bachelor of Science in Internation Tourism Management', 'asnaira.usman@gmail.com'),
(8, 'Hermione', 'Benitez', '3rd Year', 'Bachelor of Science in Cybersecurity', 'hermione.benitez@gmail.com'),
(10, 'Myka Ella', 'Tumesa', '4th Year', 'Bachelor of Science in Medical Technology', 'myka.tumesa@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`student_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `student_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
