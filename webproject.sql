-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 24, 2019 at 09:16 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `kapil`
--

CREATE TABLE `kapil` (
  `1` varchar(299) NOT NULL,
  `2` varchar(299) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kapil`
--

INSERT INTO `kapil` (`1`, `2`) VALUES
('sachin', '123');

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE `question` (
  `id` int(3) NOT NULL,
  `question` varchar(250) NOT NULL,
  `option1` varchar(250) NOT NULL,
  `option2` varchar(250) NOT NULL,
  `option3` varchar(250) NOT NULL,
  `option4` varchar(250) NOT NULL,
  `answer` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`id`, `question`, `option1`, `option2`, `option3`, `option4`, `answer`) VALUES
(1, 'Which class automatically flushes the data so that there is no need to call the flush() method. Moreover, its methods don\'t throw IOException?', 'Console class', 'Scanner Class', 'FileInputStream class', 'PrintStream class', 4),
(2, ' How many methods does a thread class provides for sleeping a thread?', '3', '1', '4', '2', 2),
(3, 'Which class members can be accessed from the classes in the same package as well as classes in other Packages that are subclasses of the declaring class?', 'private', 'Public', 'Protected', 'None of the above', 3),
(4, 'Which method of object class can clone an object?', 'copy()', 'Objectcopy()', ' Objectclone()', 'Clone()', 3),
(5, 'Which is a technique in Java in which a class can have any number of constructors that differ in parameter lists?', 'Constructor overloading', 'Method overloading', 'Operator overloading', 'None', 1),
(6, 'Which packages represent interfaces and classes for servlet API?', 'javax.servlet', 'javax.servlet.http', 'Both A & B', 'None of the above', 3),
(7, 'Which pattern is the struts framework based?', 'MVC2 Pattern', 'Bridge Pattern', 'MVC 1 Pattern', 'None of the following', 1),
(8, 'Which program obtains a remote reference to one or more remote objects on a server and then invokes methods on them in an RMI application?', 'Server', 'Client', 'Both B & A', 'none', 2),
(9, 'Which action tags are used in JSP for developing web application with Java Bean?', 'jsp:useBean', 'jsp:setProperty', 'B jsp:getProperty', 'Both B & C', 4),
(10, 'Which JDBC type represents a 64-bit signed integer value between -9223372036854775808 and 9223372036854775807?', 'SMALLINT', 'BIGINT', 'TINYINT', 'INTEGER5', 2);

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `name` varchar(40) NOT NULL,
  `email` varchar(30) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(5) NOT NULL,
  `mobile` int(12) NOT NULL,
  `password` varchar(30) NOT NULL,
  `institute` varchar(50) NOT NULL,
  `course` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`name`, `email`, `dob`, `gender`, `mobile`, `password`, `institute`, `course`) VALUES
('kapil', '77777@gmail.com', '2019-02-03', 'male', 2147483647, 'password', '', 'Mca'),
('chhipakapil1', 'abc@gmai', '2019-02-02', 'femal', 2147483647, 'kapil', '', 'mca'),
('kapil', 'asaskapilchhipa4@gmail.com', '2019-02-12', 'male', 2147483647, 'password', '', 'Mca'),
('kapil', 'chhipa@gmail.com', '2019-02-12', 'male', 2147483647, 'password', '', 'Mca'),
('kapil', 'kakdfjsdljfsldkjpilchhipa4@gma', '2019-02-05', 'male', 2147483647, 'password', '', 'Mca'),
('kapil', 'kapidkdkdklchdkfjdjfhipa4@gmai', '2019-02-13', 'male', 2147483647, 'password', '', 'Mca'),
('kapil', 'kapidkfjdjflchhipa4@gmail.com', '2019-02-14', 'male', 2147483647, 'password', '', 'Mca'),
('kapil', 'kapikjkjkdlchhipa4@gmail.com', '2019-02-12', 'male', 2147483647, 'password', '', 'Mca'),
('dkfkdsfjkj', 'kapil2@gmail.com', '2019-02-08', 'male', 2147483647, '99999dkj', '999', 'jjj'),
('kapil', 'kapil8888chhipa4@gmail.com', '2019-02-10', 'male', 2147483647, 'password', '', 'Mca'),
('dkfdjf', 'kapil@gmail', '2019-02-07', 'male', 2147483647, 'dkfjdkfjdfkj', 'kjkj', 'dkfj'),
('kapil', 'kapilc4jdfjdjfhhipa4@gmail.com', '2019-02-12', 'male', 2147483647, 'password', '', 'Mca'),
('kapil', 'kapilcdkfjdkfjdkjhhipa4@gmail.', '2019-02-21', 'femal', 2147483647, 'password', '', 'Mca'),
('kapil', 'kapilch777hipa4@gmail.com', '2019-02-22', 'male', 2147483647, 'password', '', 'Mca'),
('kapil', 'kapilch88899hipa4@gmail.com', '2019-02-14', 'male', 2147483647, 'password', '', 'Mca'),
('kapil', 'kapilchh87787ipa4@gmail.com', '2019-02-05', 'other', 2147483647, 'password', '', 'Mca'),
('kapil', 'kapilchhffdfdfipa4@gmail.com', '2019-02-06', 'male', 2147483647, 'password', '', 'Mca'),
('kapil', 'kapilchhikjpa4@gmail.com', '2019-02-06', 'male', 2147483647, 'password', '', 'Mca'),
('kapil', 'kapilchhip55a4@gmail.com', '2019-02-10', 'male', 2147483647, 'password', '', 'Mca'),
('kapil', 'kapilchhipa', '0000-00-00', 'male', 343434344, 'dkfjd', 'kdfjd', ''),
('454535', 'kapilchhipa004@gmail.com', '2019-02-07', 'male', 2147483647, 'password', '', 'Mca'),
('kapil', 'kapilchhipa1234@gmail.com', '2019-02-09', 'male', 2147483647, 'password', '', 'Mca'),
('kapil', 'kapilchhipa34@gmail.com', '2019-02-05', 'male', 2147483647, 'password', '', 'Mca'),
('kapil', 'kapilchhipa412345@gmail.com', '2019-02-05', 'male', 1111111111, 'password', '', 'Mca'),
('343434', 'kapilchhipa4837474@gmail.com', '2019-02-09', 'male', 2147483647, 'password', '', 'Mca'),
('kapil', 'kapilchhipa4@gmail.com', '2019-02-05', 'male', 2147483647, 'password', '', 'Mca'),
('kapil', 'kapilchhipakfjskdjskdj4@gmail.', '2019-02-13', 'male', 2147483647, 'password', '', 'Mca'),
('kapil', 'kapilchhipaljj4@gmail.com', '2019-02-19', 'femal', 2147483647, 'password', '', 'Mca'),
('kapil', 'kapilchhipkjkjkja4@gmail.com', '2019-02-05', 'male', 2147483647, 'password', '', 'Mca'),
('kapil', 'kapilchkjkjhipa4@gmail.com', '2019-02-05', 'male', 2147483647, 'password', '', 'Mca'),
('kapil', 'kapilckfjdjfhhipa4@gmail.com', '2019-02-19', 'male', 2147483647, 'password', '', 'Mca'),
('kapil', 'kapkjkjilchhipa4@gmail.com', '2019-02-06', 'male', 2147483647, 'password', '', 'Mca'),
('kapil', 'kapkjsfkj4ilchhipa4@gmail.com', '2019-02-13', 'male', 2147483647, 'password', '', 'Mca'),
('kapil', 'kdjfkfj@gmail', '2019-02-05', 'male', 2147483647, 'password', '', 'Mca'),
('rahul', 'kejekj@gmal.com', '2019-02-08', 'male', 2147483647, 'dfkj', 'kj', 'dkjf'),
('ravi', 'kfkdfj@gmail', '2019-02-08', 'male', 2147483647, 'eeeeee', '', '222'),
('2424', 'kjdf@gma', '2019-02-02', 'male', 2147483647, 'kjkj', '', 'mca');

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE `result` (
  `email` varchar(40) NOT NULL,
  `one` int(11) NOT NULL,
  `two` int(11) NOT NULL,
  `three` int(11) NOT NULL,
  `four` int(11) NOT NULL,
  `five` int(11) NOT NULL,
  `six` int(11) NOT NULL,
  `seven` int(11) NOT NULL,
  `eight` int(11) NOT NULL,
  `nine` int(11) NOT NULL,
  `ten` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`email`, `one`, `two`, `three`, `four`, `five`, `six`, `seven`, `eight`, `nine`, `ten`) VALUES
('asaskapilchhipa4@gmail.com', 2, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('chhipa@gmail.com', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('kapil', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('kapilchhipa4@gmail.com', 2, 0, 0, 0, 0, 0, 0, 0, 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `result`
--
ALTER TABLE `result`
  ADD PRIMARY KEY (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `question`
--
ALTER TABLE `question`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
