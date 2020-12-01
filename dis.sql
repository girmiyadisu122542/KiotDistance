-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 04, 2021 at 05:18 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dis`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `Id` int(200) NOT NULL,
  `UserName` varchar(40) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `UserType` varchar(40) NOT NULL,
  `ADMIN_ID` varchar(200) NOT NULL,
  `Finance_Id` varchar(100) NOT NULL,
  `registrar_Id` varchar(100) NOT NULL,
  `facultyregistrar_Id` varchar(100) NOT NULL,
  `Student_Id` varchar(100) NOT NULL,
  `Dep_Id` varchar(100) NOT NULL,
  `Instructor_Id` varchar(100) NOT NULL,
  `Status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`Id`, `UserName`, `Password`, `UserType`, `ADMIN_ID`, `Finance_Id`, `registrar_Id`, `facultyregistrar_Id`, `Student_Id`, `Dep_Id`, `Instructor_Id`, `Status`) VALUES
(1, 'melkamua', '8105225d151c3e0c165da890bdb4ff8e', 'student', '', '', '', '', 'etr/423/06', '', '1', 1),
(2, 'melakmu', '202cb962ac59075b964b07152d234b70', 'instructor', '', '', '', '', '', '', '1', 0),
(3, 'melakmum', '123456', 'instructor', '', '', '', '', '', '', 'ens/423/08', 0),
(7, 'ageriewudu', '9edcf5566ead58c2a093c2d293a55511', 'student', '', '', '', '', 'etr/734/06', '', '', 1),
(8, 'Haile', '1234', 'student', '', '', '', '', 'etr/865/08', '', '', 1),
(9, 'Yeshanew', '81dc9bdb52d04dc20036dbd8313ed055', 'instructor', '', '', '', '', '', '', '1', 1),
(11, 'registrar', '202cb962ac59075b964b07152d234b70', ' registrar', '', '', '', '', '', '', '', 1),
(12, 'faculty', '1234', 'facultyregistrar', '', '', '', 'etr/423/08', '', '', '', 1),
(13, 'Bulecha', '202cb962ac59075b964b07152d234b70', ' finance', '', '', '', '', '', '', '', 1),
(17, 'Hailesh', '12345', ' administrator', '', '', '', '', '', '', '', 1),
(27, 'Getaneh', '1234', ' departmenthead', '', '', '', '', '', '14', '', 1),
(39, 'Dawite', '202cb962ac59075b964b07152d234b70', ' departmenthead', '', '', '', '', '', '123', '', 1),
(43, 'instructorT', '1234', 'instructor', '', '', '', '', '', '', 'ETR/923/09', 1),
(44, 'mekides', '202cb962ac59075b964b07152d234b70', 'student', '', '', '', '', 'etr/766/06', '', '', 1),
(45, 'girmish', '12345', ' administrator', '1234', '', '', '', '', '', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `ADMI_ID` varchar(200) NOT NULL,
  `FIRST_NAME` varchar(50) NOT NULL,
  `LAST_NAME` varchar(50) NOT NULL,
  `SEX` varchar(12) NOT NULL,
  `Email` varchar(40) NOT NULL,
  `phone_Number` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ADMI_ID`, `FIRST_NAME`, `LAST_NAME`, `SEX`, `Email`, `phone_Number`) VALUES
('1234', 'girmay', 'adisu', 'Male', 'girmay12adisu@gmail.com', 985855555),
('etr/423/08', 'agerie', 'wudu', 'Female', 'agerie@gmail.com', 923423188),
('etr/794/06', 'hh', 'nhtr', 'Female', 'aw@gmail.com', 941476113),
('etr/799/06', 'agerie', 'wudu', 'Female', 'aw@gamil.com', 918484986),
('etr/926/06', 'Abebe', 'Alemu', 'Male', 'admin@gmail.com', 912234567);

-- --------------------------------------------------------

--
-- Table structure for table `assigment`
--

CREATE TABLE `assigment` (
  `id` int(11) NOT NULL,
  `ASSIGNMENT_NUMBER` int(11) NOT NULL,
  `ASSIGNMENT_TYPE` varchar(100) NOT NULL,
  `Student_Id` varchar(30) NOT NULL,
  `Course_Code` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `assigment`
--

INSERT INTO `assigment` (`id`, `ASSIGNMENT_NUMBER`, `ASSIGNMENT_TYPE`, `Student_Id`, `Course_Code`) VALUES
(8, 3, 'Chapter3 - Computer Assembly - Step by Step.ppt', 'ETR/766/06', 'Cosc3092'),
(9, 2, 'Chapter7 - Fundamental Networks.ppt', 'etr/789/06', 'Cosc3092'),
(10, 2, 'Chapter7 - Fundamental Networks.ppt', 'etr/777/06', 'Cosc3112'),
(11, 1, 'Chapter3 - Computer Assembly - Step by Step.ppt', 'ETR/766/06', 'Cosc3112'),
(23, 1, '1 Introduction to AI concise.pdf', 'etr/234/06', 'Cosc3092'),
(24, 1, '2 Knowlege Base System.pdf', 'etr/456/06', 'Cosc3092'),
(25, 1, '03problem.pdf', '', 'Cosc3112'),
(26, 1, '02_Problem_Solving_Search_ControlTower.pdf', '', 'Cosc3112'),
(27, 1, '03problem.pdf', '', 'csc234'),
(28, 1, '3-problem-solving.pdf', '', 'TT1234'),
(29, 1, '01-NNLDAR05-Liu(1).pdf', '', 'Cosc3121'),
(30, 2, '7_DatabaseSecurity.pdf', '', 'Cosc367'),
(31, 1, '2015-06-24-wolf_image-recognition.pdf', '', 'csc234'),
(32, 1, 'ce61824fa7eec480fa7333b8e9536063d9df.pdf', '', 'Cosc3092'),
(33, 3, 'Cosc3121', 'complexitynotes02.pdf', 'ens/423/08'),
(34, 6, 'Cosc3121', 'complexitynotes02.pdf', 'ens/423/08'),
(35, 1, 'Cosc3121', 'complexitytheory.pdf', 'ens/423/08'),
(36, 1, 'ch13-np.pdf', '', 'Cosc3121'),
(37, 1, 'handout33.pdf', '', 'csc234'),
(38, 1, 'Cosc367', 'medical diagnosis system.pdf', 'ens/423/08'),
(39, 2, 'Cosc367', 'medical diagnosis system.pdf', 'ens/423/08'),
(40, 1, 'aw123.docx', '', 'Cosc3121'),
(41, 2, 'group four.docx', '', 'Cosc367'),
(42, 1, 'Cosc367', 'UninformedSearch.ppt', 'ens/423/08'),
(43, 2, 'csc324', '7 Knowledge and Reasoning.pdf', 'ens/423/08'),
(44, 1, 'Cosc367', '1 Introduction to AI concise.p', 'ens/423/08'),
(45, 1, 'Cosc3092', '7 Knowledge and Reasoning.pdf', 'ens/423/08'),
(46, 1, 'Cosc3121', '9 Rule Based Reasoning System ', 'ens/423/08'),
(47, 1, 'Cosc367', '2 Knowlege Base System.pdf', 'ens/423/08'),
(48, 1, 'csc324', '3 IntelligentAgent.pdf', 'ens/423/08'),
(49, 2, 'Cosc3121', '5 uninformedSearch .pdf', 'ens/423/08'),
(50, 1, 'Cosc3121', '2 Knowlege Base System.pdf', 'ens/423/08'),
(51, 1, 'Cosc367', '8 Learning.pdf', 'ens/423/08'),
(52, 1, 'default', '', 'ens/423/08');

-- --------------------------------------------------------

--
-- Table structure for table `bankaccount`
--

CREATE TABLE `bankaccount` (
  `bid` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `accountnum` varchar(50) NOT NULL,
  `password` int(50) NOT NULL,
  `balance` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bankaccount`
--

INSERT INTO `bankaccount` (`bid`, `firstname`, `lastname`, `accountnum`, `password`, `balance`) VALUES
(1, 'Agerie', 'Wudu', '1234567891011', 1234, '5977'),
(2, 'Hayile', 'Tiruneh', '1234567891112', 1234, '5985'),
(3, 'ASU', 'ASU', '1000012131415', 1234, '4560');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `Cid` int(11) NOT NULL,
  `DEPARTEMENT` varchar(30) NOT NULL,
  `TITLE` varchar(30) NOT NULL,
  `COURSE_CODE` varchar(35) NOT NULL,
  `CREDITHR` int(11) NOT NULL,
  `ECTS` int(11) NOT NULL,
  `LECHER_HOUR` int(11) NOT NULL,
  `LAB_HOUR` int(11) NOT NULL,
  `TUR` int(11) NOT NULL,
  `YEAR` int(11) NOT NULL,
  `Semister` varchar(2) NOT NULL,
  `cost prise per crh` varchar(25) NOT NULL,
  `totalcost` varchar(50) NOT NULL,
  `expiredate` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`Cid`, `DEPARTEMENT`, `TITLE`, `COURSE_CODE`, `CREDITHR`, `ECTS`, `LECHER_HOUR`, `LAB_HOUR`, `TUR`, `YEAR`, `Semister`, `cost prise per crh`, `totalcost`, `expiredate`) VALUES
(6, 'Information thechnology', 'Network Design', 'IT1234', 4, 6, 48, 29, 17, 2009, 'II', '65', '260', '10/01/2017'),
(7, 'computer science', 'computer graphic', 'Cosc3092', 3, 5, 48, 27, 34, 4, 'II', '65', '', '25/06/2007'),
(8, '\ncomputer science', 'compiler Desige', 'Cosc3112', 4, 6, 3, 0, 1, 3, 'II', '65.00', '195', '2017-06-13'),
(10, 'computer science', 'Computer Security ', 'Cosc3121', 3, 5, 48, 27, 12, 4, 'II', '65.00', '195', '25/06/2007'),
(11, 'Information thechnology', 'compiler Desige', 'TT1234', 4, 5, 0, 29, 17, 1, 'II', '65', '260', '2017-06-13'),
(12, 'Information thechnology', 'compiler Desige', 'IT1234', 4, 5, 48, 29, 17, 2009, 'II', '65', '260', '10/01/2017'),
(13, '', 'rmi', 'Cosc3112', 3, 6, 48, 1, 2, 2009, 'II', '65', '195', '2017-06-13'),
(14, 'computer science', 'compiler Desige', 'Cosc3092', 3, 6, 12, 24, 21, 2008, 'II', '65', '195', ''),
(15, 'computer science', 'daynamic', 'Cosc367', 3, 6, 24, 32, 14, 4, 'II', '65', '195', '25/06/2007'),
(16, 'computer science', 'computer grapic', 'csc324', 3, 6, 24, 48, 23, 4, 'II', '65', '195', '25/06/2007'),
(17, 'Information thechnology', 'visual', 'csc234', 4, 6, 48, 24, 15, 2009, 'II', '65', '260', ''),
(18, 'Information thechnology', 'networking', 'cs1223', 3, 4, 48, 12, 12, 2009, 'II', '65', '195', ''),
(19, 'plant scince', 'biology', 'cse34', 3, 6, 24, 10, 2, 2009, 'II', '65', '195', ''),
(20, 'plant scince', 'zology', 'cde123', 3, 6, 48, 24, 10, 2009, 'II', '65', '195', ''),
(21, 'computer science', 'Graphics', 'Cosc1010', 23, 52, 25, 5, 6, 3, 'II', '65', '1495', '24/06/2007'),
(22, 'computer science', 'artifcal intlgent', 'Cosc3043', 4, 6, 22, 0, 24, 2, 'II', '65', '260', '');

-- --------------------------------------------------------

--
-- Table structure for table `courseinstractor`
--

CREATE TABLE `courseinstractor` (
  `id` int(11) NOT NULL,
  `INSTRACTOR_ID` varchar(30) NOT NULL,
  `COURSE_CODE` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `courseinstractor`
--

INSERT INTO `courseinstractor` (`id`, `INSTRACTOR_ID`, `COURSE_CODE`) VALUES
(3, 'ens/423/08', 'Cosc3092'),
(6, 'etr/566/06', 'abcd'),
(9, 'etr/423/08', 'csc234'),
(10, 'etr/923/09', 'TT1234'),
(11, '1', 'Cosc3121'),
(12, '1', 'Cosc367');

-- --------------------------------------------------------

--
-- Table structure for table `coursematerial`
--

CREATE TABLE `coursematerial` (
  `material_id` int(11) NOT NULL,
  `COURSE_CODE` varchar(30) NOT NULL,
  `Filename` varchar(30) NOT NULL,
  `File_type` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `coursematerial`
--

INSERT INTO `coursematerial` (`material_id`, `COURSE_CODE`, `Filename`, `File_type`) VALUES
(1, 'Cosc3092', 'computer secrity assgment.docx', 'C:xampp	mpphp9BB5.tmp'),
(2, 'Cosc3092', 'computer secrity assgment.docx', 'C:xampp	mpphpB842.tmp'),
(4, 'Cosc3092', '5 uninformedSearch .pdf', 'C:xampp	mpphp419E.tmp'),
(5, 'Cosc3092', '2003-Book-ScottAmbler-The_Elem', 'C:xampp	mpphpAB89.tmp'),
(6, 'Cosc3092', 'Chapter 7-  Data Base manipula', 'C:xampp	mpphp4561.tmp'),
(7, 'Cosc3112', 'chapter 4 - php basics.pptx', 'C:xampp	mpphp253B.tmp'),
(12, 'Cosc3092', '2 Knowlege Base System.pdf', 'C:xampp	mpphp39D7.tmp'),
(13, 'Cosc3092', '2 Knowlege Base System.pdf', 'C:xampp	mpphp8A94.tmp'),
(14, 'TT1234', 'search1.pptx', 'C:xampp	mpphp70F3.tmp'),
(16, 'Cosc367', 'Chapter7 - Fundamental Network', 'C:xampp	mpphpB075.tmp'),
(17, 'csc234', 'Chapter7 - Fundamental Network', 'C:xampp	mpphp325C.tmp'),
(18, 'Cosc3112', '7_DatabaseSecurity.pdf', 'C:xampp	mpphpB581.tmp'),
(19, 'Cosc3121', 'complexitytheory.pdf', 'C:xampp	mpphpCF0A.tmp'),
(20, 'csc234', '220-03.pdf', 'C:xampp	mpphpF142.tmp'),
(21, 'Cosc3121', 'SPEECH RECOGHNITION.pdf', 'C:xampp	mpphpC52A.tmp'),
(22, 'Cosc3121', 'chapter three basha.pdf', ''),
(23, 'Cosc367', 'final.reporte.docx', 'C:xampp	mpphp3720.tmp');

-- --------------------------------------------------------

--
-- Table structure for table `courseresult`
--

CREATE TABLE `courseresult` (
  `id` int(11) NOT NULL,
  `STUDENT_ID` varchar(30) NOT NULL,
  `COURSE_CODE` varchar(30) NOT NULL,
  `ASSIGMENT1` varchar(11) DEFAULT NULL,
  `ASSIGMENT2` varchar(11) DEFAULT NULL,
  `QUIZZ` varchar(11) DEFAULT NULL,
  `TEST1` varchar(11) DEFAULT NULL,
  `TEST2` varchar(11) DEFAULT NULL,
  `TEST3` varchar(11) DEFAULT NULL,
  `Final` varchar(11) DEFAULT NULL,
  `TOTAL` varchar(11) DEFAULT NULL,
  `grade` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `courseresult`
--

INSERT INTO `courseresult` (`id`, `STUDENT_ID`, `COURSE_CODE`, `ASSIGMENT1`, `ASSIGMENT2`, `QUIZZ`, `TEST1`, `TEST2`, `TEST3`, `Final`, `TOTAL`, `grade`) VALUES
(33, 'ens/423/08', 'Cosc3121', '12', '10', 'Null', 'Null', 'Null', 'Null', 'Null', '22', 'Nu'),
(34, 'ens/423/08', 'Cosc367', '12', '10', 'Null', 'Null', 'Null', 'Null', 'Null', '22', 'Nu');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `DEPARTEMENT_ID` int(11) NOT NULL,
  `DEPARTMENT_NAME` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`DEPARTEMENT_ID`, `DEPARTMENT_NAME`) VALUES
(1, 'computer science'),
(2, 'Information thechnology'),
(3, 'civil engenring'),
(5, 'electrical eneginring');

-- --------------------------------------------------------

--
-- Table structure for table `departmenthead`
--

CREATE TABLE `departmenthead` (
  `departmenthead_Id` int(11) NOT NULL,
  `FirstName` varchar(30) NOT NULL,
  `LastName` varchar(30) NOT NULL,
  `Sex` varchar(10) NOT NULL,
  `Phone_Number` int(11) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `department_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `departmenthead`
--

INSERT INTO `departmenthead` (`departmenthead_Id`, `FirstName`, `LastName`, `Sex`, `Phone_Number`, `Email`, `department_id`) VALUES
(3, 'kebade', 'mengistu', 'Male', 923423187, 'aw@gamil.com', 0),
(9, 'fghhh', 'sd', 'Female', 923423188, 'sdf@gamil.com', 3),
(14, 'gebergiziber', 'abadi', 'Male', 923423188, '', 1),
(17, 'abc', 'cd', 'Male', 912234567, 'ab@gamil.com', 0),
(18, 'ae', 'yr', 'Male', 935453212, 'qw@gamil.com', 0),
(19, 'mekides', 'abebe', 'Female', 912234567, 'admin@gmail.com', 0),
(20, 'mekides', 'abebe', 'Female', 912234567, 'admin@gmail.com', 0),
(21, 'mekides', 'abebe', 'Female', 912234567, 'admin@gmail.com', 0),
(22, 'gebergiziber', 'Tiruneh', 'Male', 935453212, 'haile@gmail.com', 0),
(123, 'ageri', 'Tiruneh', 'Male', 923423188, 'a@gmail.com', 2);

-- --------------------------------------------------------

--
-- Table structure for table `facultyregistrar`
--

CREATE TABLE `facultyregistrar` (
  `User_Id` int(11) NOT NULL,
  `FIRST_NAME` varchar(25) NOT NULL,
  `LAST_NAME` varchar(25) NOT NULL,
  `SEX` varchar(25) NOT NULL,
  `phone` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `facultyregistrar`
--

INSERT INTO `facultyregistrar` (`User_Id`, `FIRST_NAME`, `LAST_NAME`, `SEX`, `phone`, `email`) VALUES
(0, 'meskerme', 'abebe', 'Female', '0935453212', 'Alemu@gmail.com'),
(1, 'Melkamu', 'abadi', 'Female', '0918484968', 'abcd@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `feedbackid` int(11) NOT NULL,
  `FirstName` varchar(50) NOT NULL,
  `LastName` varchar(50) NOT NULL,
  `email` varchar(60) NOT NULL,
  `feedback` varchar(600) NOT NULL,
  `INSTRCTOR_NAME` varchar(50) NOT NULL,
  `DEPARTMENT` varchar(50) NOT NULL,
  `Status` int(11) NOT NULL DEFAULT 0,
  `Stu_id` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`feedbackid`, `FirstName`, `LastName`, `email`, `feedback`, `INSTRCTOR_NAME`, `DEPARTMENT`, `Status`, `Stu_id`) VALUES
(14, 'belatue', 'almue', 'aw@gamil.com', 'the final project submatio date is exapnde ', '', 'G/egziabiher', 0, ''),
(15, 'tigest', 'kebade', 'qw@gamil.com', 'the exam day expand', '', 'G/egziabiher', 0, ''),
(16, 'mekdis', 'abebe', 'mekdis@gmail.com', 'the test very diffecult due to this resoune the exame change', '', 'G/egziabiher', 0, ''),
(18, 'mekdis', 'alemue', 'mekdis@gmail.com', 'based on exam day is expand', '', 'G/egziabiher', 0, ''),
(20, 'mekdis', 'melkamue', 'mekdis@gmail.com', 'based on give material', 'azeze', '', 0, ''),
(24, 'mekdis', 'kebade', 'mekdis@gmail.com', 'based on exame day expand', 'kebede', '', 0, ''),
(30, 'kebede', 'almu', 'aw@gamil.com', 'Hey gdtrdcv nm,cvbnm,', '', '123', 0, ''),
(35, 'mekdis', 'abebenew', 'mekdis@gmail.com', 'dfghj sdfgh', 'Depcs4', '', 0, ''),
(36, 'mekdis', 'abebenew', 'mekdis@gmail.com', 'gegtdfg drty', '', '14', 0, ''),
(39, 'mekdis', 'abebe', 'mekdis@gmail.com', 'the exam day is expand and mimnimize the course material', '1', '', 0, 'ens/423/08'),
(49, '', 'abebe', 'mekdis@gmail.com', '', '', '14', 0, 'ens/423/08'),
(60, 'Mkides', 'abebe', 'mekdis@gmail.com', '', '', '14', 0, 'ens/423/08'),
(61, 'Mkides', 'abebe', 'mekdis@gmail.com', '', '', '', 0, 'ens/423/08'),
(62, 'Mkides', 'abebe', 'mekdis@gmail.com', '', 'default', '', 0, 'ens/423/08'),
(63, 'Mkides', 'abebe', 'mekdis@gmail.com', '', 'default', '', 0, 'ens/423/08'),
(64, 'Mkides', 'abebe', 'mekdis@gmail.com', '', 'default', '', 0, 'ens/423/08'),
(65, 'Mkides', 'abebe', 'mekdis@gmail.com', '', 'default', '', 0, 'ens/423/08'),
(66, 'Mkides', 'abebe', 'mekdis@gmail.com', '', 'default', '', 0, 'ens/423/08'),
(67, 'Mkides', 'abebe', 'mekdis@gmail.com', '', 'default', '', 0, 'ens/423/08'),
(68, 'Mkides', 'abebe', 'mekdis@gmail.com', '', 'default', '', 0, 'ens/423/08');

-- --------------------------------------------------------

--
-- Table structure for table `finance`
--

CREATE TABLE `finance` (
  `User_Id` int(11) NOT NULL,
  `FIRST_NAME` varchar(25) NOT NULL,
  `LAST_NAME` varchar(25) NOT NULL,
  `SEX` varchar(15) NOT NULL,
  `phone` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `finance`
--

INSERT INTO `finance` (`User_Id`, `FIRST_NAME`, `LAST_NAME`, `SEX`, `phone`, `email`) VALUES
(0, 'bulch', 'abadi', 'fmale', '0935453212', 'Alemu@gmail.com'),
(1, 'Melkamu', 'abadi', 'male', '0918484968', 'abcd@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `instractor`
--

CREATE TABLE `instractor` (
  `INSTROCTER_ID` varchar(30) NOT NULL,
  `FIRST_NAME` varchar(200) NOT NULL,
  `LAST_NAME` varchar(200) NOT NULL,
  `SEX` varchar(200) NOT NULL,
  `Phone_Number` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `department_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `instractor`
--

INSERT INTO `instractor` (`INSTROCTER_ID`, `FIRST_NAME`, `LAST_NAME`, `SEX`, `Phone_Number`, `email`, `department_id`) VALUES
('1', 'Melkamu', 'abadi', 'male', '0918484968', 'abcd@gmail.com', 1),
('5', 'wer', 'we', 'Male', '0923432167', 'we@gamil.com', 0),
('7', 'ayna', 'keabde', 'Male', '0923423189', 'qw@gamil.com', 0),
('Depcs4', 'gebergiziber', 'abadi', 'Male', '0935453212', 'gebra@gmail.com', 1),
('ens/423/08', 'Melakmu', 'Alemu', 'Male', '0935453212', 'aw@gmail.com', 2),
('etr/423/06', 'Melakmum', 'Alemu', 'Male', '0918484986', 'ab@gamil.com', 2),
('etr/423/08', 'Melkamu', 'Alemu', 'Male', '0935453212', 'aw@gmail.com', 2),
('etr/423/09', 'Abebe', 'Tiruneh', 'Male', '0918484990', 'girmaw@gmail.com', 2);

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

CREATE TABLE `notice` (
  `noticeId` int(11) NOT NULL,
  `Title` varchar(30) NOT NULL,
  `posteddate` varchar(50) NOT NULL,
  `postedby` varchar(30) NOT NULL,
  `expareddate` varchar(50) NOT NULL,
  `contente` text NOT NULL,
  `Status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notice`
--

INSERT INTO `notice` (`noticeId`, `Title`, `posteddate`, `postedby`, `expareddate`, `contente`, `Status`) VALUES
(8, 'To inform About Final Project', '06/08/2009', 'Agere', '2009-06-11', 'asdffg gfghfj', 0),
(9, 'registration', '1/05/2017', 'Agere', '06/05/2017', '', 0),
(10, 'mm', '12/06/ 2007', 'g/gebregziberuh', '24/06/2007', 'dfghj retdyui', 0);

-- --------------------------------------------------------

--
-- Table structure for table `registrar`
--

CREATE TABLE `registrar` (
  `USER_ID` int(11) NOT NULL,
  `FIRST_NAME` varchar(25) NOT NULL,
  `LAST_NAME` varchar(25) NOT NULL,
  `SEX` varchar(15) NOT NULL,
  `phone` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registrar`
--

INSERT INTO `registrar` (`USER_ID`, `FIRST_NAME`, `LAST_NAME`, `SEX`, `phone`, `email`) VALUES
(0, 'ayana', 'eniyew', 'male', '0918484990', 'abcd@gmail.com'),
(1, 'Melkamu', 'abadi', 'fmale', '0918484968', 'abcd@gmail.com'),
(5, 'dfgh', 'xcvb', '0976543234', '12sdf@gamil.com', 'Male');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `Student_Id` varchar(300) NOT NULL,
  `FirstName` varchar(50) NOT NULL,
  `LastName` varchar(50) NOT NULL,
  `Phone_Number` int(10) NOT NULL,
  `Email` varchar(40) NOT NULL,
  `Department` varchar(50) NOT NULL,
  `Year` year(4) NOT NULL,
  `Classyear` int(11) NOT NULL,
  `Term` varchar(3) NOT NULL,
  `Nationality` varchar(30) NOT NULL,
  `Sex` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`Student_Id`, `FirstName`, `LastName`, `Phone_Number`, `Email`, `Department`, `Year`, `Classyear`, `Term`, `Nationality`, `Sex`) VALUES
('ens/423/08', 'Melkamu', 'Alemu', 918484986, 'mmmmmm@gmail.com', 'computer science', 2009, 4, 'II', 'Ethiopia', 'Male'),
('etr/404/05', 'Girmaw', 'Andualem', 927672204, 'girmaw@gmail.com', 'computer science', 0000, 3, '', 'Ethiopia', 'Male'),
('etr/423/06', 'po', 'lop', 987654532, 'aw@gmail.com', 'computer science', 2008, 1, 'II', 'Ethiopia', 'Male'),
('etr/423/09', 'Haile', 'Tiruneh', 987654532, 'abcd@gmail.com', 'computer science', 2009, 4, 'III', 'Ethiopia', 'Male'),
('etr/567/06', 'Agerie', 'Wudu', 923456712, 'agerie@gmail.com', 'computer science', 2008, 3, 'II', 'Ethiopia', 'Femal'),
('etr/670/06', 'abc', 'cd', 2147483647, 'abcd@gmail.com', 'computer science', 2008, 1, 'II', 'Ethiopia', 'Male'),
('etr/734/06', 'agerie', 'wudu', 935453212, 'haile@gmail.com', 'Information thechnology', 2005, 4, 'II', 'Ethiopia', 'Male'),
('etr/766/06', 'abebe', 'kebade', 2147483647, 'abebe@gmail.com', 'Information thechnology', 2009, 4, 'II', 'Ethiopia', 'Male'),
('etr/768/06', 'mekdis', 'abebe', 948765432, 'mekdis@gmail.com', 'Information thechnology', 2009, 4, 'II', 'Ethiopia', 'Femal'),
('etr/789/06', 'haile', 'tiruhe', 918484968, 'haile@gmail.com', 'Information thechnology', 2008, 1, 'II', 'Ethiopia', 'Male'),
('etr/794/06', 'balemlay', 'gebeyehu', 987654532, 'balem@gmail.com', '', 2009, 3, 'III', 'Ethiopia', 'Male'),
('etr/890/06', 'ageri', 'wudu', 923456789, 'ageri@gmail.com', 'computer science', 2008, 1, 'II', 'Ethiopia', 'Femal'),
('nro/678/08', 'balem', 'Alemu', 987654532, '167@gmail.com', '', 2009, 4, 'II', 'Ethiopia', 'Male');

-- --------------------------------------------------------

--
-- Table structure for table `student_course`
--

CREATE TABLE `student_course` (
  `id` int(11) NOT NULL,
  `STUDENT_ID` varchar(30) NOT NULL,
  `COURSE_CODE` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_course`
--

INSERT INTO `student_course` (`id`, `STUDENT_ID`, `COURSE_CODE`) VALUES
(1, 'ens/423/08', 'Cosc3092'),
(2, 'etr/766/06', 'Cosc3092'),
(3, 'etr/123/06', 'Cosc3092'),
(4, 'ens/423/08', 'Cosc3121'),
(9, 'etr/766/06', 'bbbb'),
(12, 'etr/404/05', 'csde123'),
(13, 'etr/768/06', 'CSC234'),
(14, 'etr/788/06', 'Cosc3121'),
(15, 'etr/890/06', 'Cosc3121');

-- --------------------------------------------------------

--
-- Table structure for table `student_registration`
--

CREATE TABLE `student_registration` (
  `Student_Id` varchar(30) NOT NULL,
  `FirstName` varchar(45) NOT NULL,
  `LastName` varchar(45) NOT NULL,
  `SEX` varchar(12) NOT NULL,
  `Email` varchar(45) NOT NULL,
  `phone_Number` int(10) NOT NULL,
  `Department` varchar(45) NOT NULL,
  `Nationality` varchar(20) NOT NULL,
  `Year` varchar(20) NOT NULL,
  `classyear` int(11) NOT NULL,
  `Semister` varchar(3) NOT NULL,
  `costprice` float NOT NULL,
  `registerddate` varchar(50) NOT NULL,
  `Status` int(11) NOT NULL DEFAULT 0,
  `photo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_registration`
--

INSERT INTO `student_registration` (`Student_Id`, `FirstName`, `LastName`, `SEX`, `Email`, `phone_Number`, `Department`, `Nationality`, `Year`, `classyear`, `Semister`, `costprice`, `registerddate`, `Status`, `photo`) VALUES
('ens/423/08', 'Mkides', 'abebe', 'f', 'mekdis@gmail.com', 923433299, 'computer science', 'Ethiopia', '2017', 4, 'II', 260, '2009-06-14', 1, ''),
('etr/20/34', 'aster', 'mule', 'f', 'w@gmail.com', 9234564, 'Information thechnology', 'ETIOPAINE', '2013', 2, 'ii', 0, '', 0, ''),
('etr/209/34', 'abebe', 'kebede', 'm', 'a@gmail.com', 923423167, 'computer science', 'ETIOPAINE', '2013', 2, 'ii', 0, '', 0, ''),
('etr/409/05', 'haile', 'tiruhe', 'm', 'haile@gmail.com', 918484968, 'Information thechnology', 'Ethiopia', '2017', 4, 'i', 0, '', 0, ''),
('etr/555/09', 'abebe', 'kebede', 'm', 'abebe@gmail.com', 2147483647, 'Information thechnology', 'Ethiopia', '2017', 1, 'i', 0, '', 0, ''),
('etr/766/06', 'ageri', 'wudu', 'f', 'ageri@gmail.com', 923456789, 'computer science', 'Ethiopia', '2017', 2, 'i', 0, '', 1, ''),
('etr/794/06', 'abc', 'cd', 'f', 'abcd@gmail.com', 0, 'computer science', 'Ethiopia', '2017', 4, 'i', 0, '', 0, ''),
('etr/926/08', 'mekdis', 'alemue', 'f', 'mekdis@gmail.com', 948765432, 'Information thechnology', 'Ethiopia', '2017', 1, 'i', 0, '', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `withdraw`
--

CREATE TABLE `withdraw` (
  `id` int(11) NOT NULL,
  `Student_Id` varchar(30) NOT NULL,
  `firstname` varchar(25) NOT NULL,
  `lastname` varchar(25) NOT NULL,
  `sex` varchar(10) NOT NULL,
  `departiment` varchar(25) NOT NULL,
  `year` varchar(25) NOT NULL,
  `semister` varchar(5) NOT NULL,
  `email` varchar(25) NOT NULL,
  `reson` text NOT NULL,
  `depheadaprove` int(11) NOT NULL DEFAULT 0,
  `registeraprove` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `withdraw`
--

INSERT INTO `withdraw` (`id`, `Student_Id`, `firstname`, `lastname`, `sex`, `departiment`, `year`, `semister`, `email`, `reson`, `depheadaprove`, `registeraprove`) VALUES
(4, 'etr/865/08', 'Abebe', 'Tiruneh', 'male', 'computer', '2009', 'II', 'haile@gmail.com', 'fekjkjd', 1, 2),
(5, 'ens/423/08', 'Melkamu', 'Alemu', 'Male', 'civil engnering', '2008', 'i', 'mmmmmm@gmail.com', 'we you ', 1, 2),
(6, 'etr/794/06', 'balemlay', 'gebeyehu', 'Male', 'information scince', '2007', 'i', 'balem@gmail.com', 'the resouse of sick ', 1, 1),
(7, 'ens/423/08', 'Melkamu', 'Alemu', 'Male', 'information teclology', '2009', 'i', 'mmmmmm@gmail.com', 'the resouon of  healt problme', 1, 0),
(8, 'ens/423/08', 'Melkamu', 'Alemu', 'Male', '', '0000', '', 'mmmmmm@gmail.com', 'the resoun of final pro', 1, 0),
(10, 'ens/423/08', 'Melkamu', 'Alemu', 'Male', 'computer science', '2009', 'ii', 'mmmmmm@gmail.com', 'besed on the resoune of sick', 1, 0),
(11, 'ens/423/08', 'Melkamu', 'Alemu', 'Male', 'computer science', '2009', 'II', 'mmmmmm@gmail.com', 'the resoun of......', 1, 0),
(12, 'etr/734/06', 'agerie', 'wudu', 'Male', 'Information thechnology', '2005', 'II', 'haile@gmail.com', 'sdfghjkl dfghj', 1, 0),
(13, 'ens/423/08', 'Melkamu', 'Alemu', 'Male', 'computer science', '2009', 'II', 'mmmmmm@gmail.com', '', 0, 0),
(14, 'ens/423/08', 'Melkamu', 'Alemu', 'Male', 'computer science', '2009', 'II', 'mmmmmm@gmail.com', '', 0, 0),
(15, 'ens/423/08', 'Melkamu', 'Alemu', 'Male', 'computer science', '2009', 'II', 'mmmmmm@gmail.com', '', 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`Id`),
  ADD UNIQUE KEY `UserName` (`UserName`),
  ADD KEY `Finance_Id` (`Finance_Id`),
  ADD KEY `Instructor_Id` (`Instructor_Id`),
  ADD KEY `Dep_Id` (`Dep_Id`),
  ADD KEY `Student_Id` (`Student_Id`),
  ADD KEY `facultyregistrar_Id` (`facultyregistrar_Id`),
  ADD KEY `registrar_Id` (`registrar_Id`),
  ADD KEY `Finance_Id_2` (`Finance_Id`),
  ADD KEY `forign key` (`ADMIN_ID`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ADMI_ID`);

--
-- Indexes for table `assigment`
--
ALTER TABLE `assigment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bankaccount`
--
ALTER TABLE `bankaccount`
  ADD PRIMARY KEY (`bid`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`Cid`);

--
-- Indexes for table `courseinstractor`
--
ALTER TABLE `courseinstractor`
  ADD PRIMARY KEY (`id`),
  ADD KEY `INSTRACTOR_ID` (`INSTRACTOR_ID`),
  ADD KEY `COURSE_CODE` (`COURSE_CODE`),
  ADD KEY `INSTRACTOR_ID_2` (`INSTRACTOR_ID`);

--
-- Indexes for table `coursematerial`
--
ALTER TABLE `coursematerial`
  ADD PRIMARY KEY (`material_id`);

--
-- Indexes for table `courseresult`
--
ALTER TABLE `courseresult`
  ADD PRIMARY KEY (`id`),
  ADD KEY `STUDENT_ID` (`STUDENT_ID`),
  ADD KEY `STUDENT_ID_2` (`STUDENT_ID`),
  ADD KEY `COURSE_CODE` (`COURSE_CODE`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`DEPARTEMENT_ID`);

--
-- Indexes for table `departmenthead`
--
ALTER TABLE `departmenthead`
  ADD PRIMARY KEY (`departmenthead_Id`);

--
-- Indexes for table `facultyregistrar`
--
ALTER TABLE `facultyregistrar`
  ADD PRIMARY KEY (`User_Id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`feedbackid`);

--
-- Indexes for table `finance`
--
ALTER TABLE `finance`
  ADD PRIMARY KEY (`User_Id`);

--
-- Indexes for table `instractor`
--
ALTER TABLE `instractor`
  ADD PRIMARY KEY (`INSTROCTER_ID`);

--
-- Indexes for table `notice`
--
ALTER TABLE `notice`
  ADD PRIMARY KEY (`noticeId`);

--
-- Indexes for table `registrar`
--
ALTER TABLE `registrar`
  ADD PRIMARY KEY (`USER_ID`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`Student_Id`);

--
-- Indexes for table `student_course`
--
ALTER TABLE `student_course`
  ADD PRIMARY KEY (`id`),
  ADD KEY `STUDENT_ID` (`STUDENT_ID`),
  ADD KEY `COURSE_CODE` (`COURSE_CODE`);

--
-- Indexes for table `student_registration`
--
ALTER TABLE `student_registration`
  ADD PRIMARY KEY (`Student_Id`);

--
-- Indexes for table `withdraw`
--
ALTER TABLE `withdraw`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `Id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `assigment`
--
ALTER TABLE `assigment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `bankaccount`
--
ALTER TABLE `bankaccount`
  MODIFY `bid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `Cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `courseinstractor`
--
ALTER TABLE `courseinstractor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `coursematerial`
--
ALTER TABLE `coursematerial`
  MODIFY `material_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `courseresult`
--
ALTER TABLE `courseresult`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `DEPARTEMENT_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `departmenthead`
--
ALTER TABLE `departmenthead`
  MODIFY `departmenthead_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=124;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `feedbackid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT for table `notice`
--
ALTER TABLE `notice`
  MODIFY `noticeId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `student_course`
--
ALTER TABLE `student_course`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `withdraw`
--
ALTER TABLE `withdraw`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
