-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 25, 2018 at 07:16 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jecrc`
--

-- --------------------------------------------------------

--
-- Table structure for table `admenquiry`
--

CREATE TABLE `admenquiry` (
  `eid` int(11) NOT NULL,
  `name` varchar(80) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `ip` varchar(20) NOT NULL,
  `dateTime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admenquiry`
--

INSERT INTO `admenquiry` (`eid`, `name`, `phone`, `ip`, `dateTime`) VALUES
(1, 'Himanshu', '8890593676', '::1', '2015-09-24 19:43:14'),
(2, 'Himanshu', '889059376', '::1', '2015-09-25 12:48:24'),
(3, 'Himanshu', '11564984546543', '::1', '2015-10-12 09:08:32'),
(4, 'DEEPAK', '8764155254', '::1', '2015-10-26 08:23:37'),
(5, 'cdzsfzf', '254254535', '::1', '2016-01-11 16:50:44'),
(6, 'jhkj', '5468464', '::1', '2016-01-13 06:03:26');

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

CREATE TABLE `adminlogin` (
  `adminId` int(9) NOT NULL,
  `userName` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `ip` varchar(20) NOT NULL,
  `loginAt` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`adminId`, `userName`, `password`, `ip`, `loginAt`) VALUES
(1, 'admin', '$2y$12$BMkd2pkU3b8KUEaDr0MgDOExJJ2Wut1lYB9222TsexmlJGY.j5HP6', '1.0.0.0', '2015-09-09 07:34:17');

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE `chat` (
  `id` int(10) UNSIGNED NOT NULL,
  `msg_from` varchar(255) NOT NULL DEFAULT '',
  `msg_to` varchar(255) NOT NULL DEFAULT '',
  `message` text NOT NULL,
  `sent` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `recd` int(10) UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `contactId` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(150) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `message` text NOT NULL,
  `ip` varchar(50) NOT NULL,
  `dateTime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`contactId`, `name`, `email`, `phone`, `message`, `ip`, `dateTime`) VALUES
(1, 'Himanshu Singh', 'himanshusingh.0314@gmail.com', '08890593676', 'Weâ€™d love to hear from you. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam ut erat magna. Aliquam porta sem a lacus imperdiet posuere. Integer semper eget ligula id eleifend.', '::1', '2015-09-24 15:48:59');

-- --------------------------------------------------------

--
-- Table structure for table `dept`
--

CREATE TABLE `dept` (
  `deptId` int(11) NOT NULL,
  `deptName` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dept`
--

INSERT INTO `dept` (`deptId`, `deptName`) VALUES
(1, 'Computer Science & Engineering'),
(2, 'Information Technology'),
(3, 'Civil Engineering'),
(4, 'Electrical Engineering'),
(5, 'Electronic & Communication Engineering'),
(6, 'Mechanical Engineering');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `eventId` int(11) NOT NULL,
  `eventName` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `eventDetails` varchar(250) NOT NULL,
  `stime` time NOT NULL,
  `etime` time NOT NULL,
  `image` varchar(150) DEFAULT NULL,
  `place` varchar(100) NOT NULL,
  `postDate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`eventId`, `eventName`, `date`, `eventDetails`, `stime`, `etime`, `image`, `place`, `postDate`) VALUES
(30, '1914 translation by H.Rackham', '2015-09-25', '\"But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of h', '13:00:00', '14:30:00', '1675736606events_medium.jpg', 'Library', '2015-09-23 12:06:31'),
(31, 'Finibu sBonorum', '2015-09-11', '\"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia v', '13:00:00', '15:02:00', 'fsdzfzd.jpg', 'et Malorum', '2015-09-25 16:29:30'),
(32, 'standard Lorem Ipsump assage', '2015-09-26', '\"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia v', '16:01:00', '18:03:00', '1675736606events_medium.jpg', 'Ipsum passage', '2015-09-23 12:08:58'),
(33, 'translation by H.Rackham', '2015-09-26', '\"On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and e', '14:01:00', '12:58:00', '1675736606events_medium.jpg', 'Lorem Paasage 2', '2015-09-23 13:37:28'),
(34, 'standard chunk o fLorem Ipsum', '2015-10-13', 'The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English vers', '10:00:00', '12:00:00', '1_dummy-downhill-spongebob-resized.jpg', 'Lorem Paasage 5', '2015-09-23 13:37:09'),
(35, 'the Renaissance', '2015-10-16', 'The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English vers', '10:00:00', '11:00:00', '1675736606events_medium.jpg', 'Library', '2015-09-23 13:36:54'),
(36, 'Quisaut em veleum', '2015-10-24', '\"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia v', '09:00:00', '13:00:00', '1675736606events_medium.jpg', 'Lorem Paasage 500', '2015-09-23 13:36:43'),
(37, 'Etharum quidem rerumfacil isestet ex peditadistinctio.', '2015-09-26', '\"At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt m', '11:42:00', '14:00:00', '1675736606events_medium.jpg', 'Lorem Paasage 500', '2015-09-23 13:36:22'),
(38, '2015 translation by H.Rackham', '2015-10-29', '\"But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of h', '02:00:00', '13:00:00', '1675736606events_medium.jpg', 'Library', '2015-09-23 13:35:59'),
(39, 'ssimos ducimusquib landitiispraesen tiumvolupta', '2015-09-25', '\"But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of h', '11:58:00', '14:58:00', '1675736606events_medium.jpg', 'North Campus', '2015-09-23 13:35:45'),
(40, 'Finibus Bonorum et Malorum', '2015-11-10', '\"At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt m', '13:01:00', '15:00:00', '1675736606events_medium.jpg', 'South Block', '2015-09-23 13:35:30'),
(41, 'Lorem Ipsum', '2015-10-09', '\"But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of h', '13:01:00', '14:00:00', '1675736606events_medium.jpg', 'Library', '2015-09-23 13:35:12');

-- --------------------------------------------------------

--
-- Table structure for table `faculties`
--

CREATE TABLE `faculties` (
  `ftId` int(11) NOT NULL,
  `fName` varchar(120) NOT NULL,
  `designation` varchar(120) NOT NULL,
  `deptId` int(11) NOT NULL,
  `qualifications` varchar(100) NOT NULL,
  `exp` varchar(150) NOT NULL,
  `paperPublish` varchar(500) NOT NULL,
  `paperPresent` varchar(500) NOT NULL,
  `phdGuide` varchar(300) NOT NULL,
  `phdPgProjectsGuided` varchar(300) NOT NULL,
  `booksPatentsPublished` varchar(300) NOT NULL,
  `memberships` varchar(120) NOT NULL,
  `consultancyAct` varchar(150) NOT NULL,
  `awards` varchar(200) NOT NULL,
  `researchGrantsReceived` varchar(300) NOT NULL,
  `interaction` varchar(300) NOT NULL,
  `teachingSubjects` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `newsId` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `thumbnail` varchar(255) NOT NULL,
  `details` text NOT NULL,
  `postDateTime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`newsId`, `title`, `thumbnail`, `details`, `postDateTime`) VALUES
(11, 'Saraswati Puja', '0(5).JPG', '<p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.3</p>', '2016-01-19 12:34:23'),
(12, 'Science Exhibition', '0(19).JPG', '<p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.3</p>', '2016-01-19 12:41:36');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `slider1` varchar(255) DEFAULT NULL,
  `slider2` varchar(255) DEFAULT NULL,
  `slider3` varchar(255) DEFAULT NULL,
  `slider4` varchar(255) DEFAULT NULL,
  `slider5` varchar(255) DEFAULT NULL,
  `slider6` varchar(255) DEFAULT NULL,
  `slider7` varchar(255) DEFAULT NULL,
  `sliderLocation` varchar(10) NOT NULL DEFAULT 'HOME',
  `postDateTime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `tId` int(11) NOT NULL,
  `refPerson` varchar(200) NOT NULL,
  `image` varchar(200) NOT NULL,
  `worksAt` varchar(255) NOT NULL,
  `testimony` text NOT NULL,
  `postDateTime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`tId`, `refPerson`, `image`, `worksAt`, `testimony`, `postDateTime`) VALUES
(1, 'Ignacio', 'fzdczdcvx.jpg', 'VendorManagementOrganization', 'From my first interaction with Altisource, I realized the company was fully committed to offering the highest level of service to its clients. Since joining, I\'ve had the opportunity to participate in several company-wide initiatives to develop efficient processes leveraging technology and our diverse employee knowledge base. Finally, Altisourceâ€™s dynamic environment provides a truly motivating workplace for me and my team. \r\n', '2015-09-24 23:29:37'),
(2, 'Mr.Chairman', 'fsdfdz.jpg', 'KidZeeSchoolMumbai', 'At Altisource, the management team focuses on and rewards employees\' contributions and achievements. We are recognized for the value we bring to the company and consistently given opportunities to learn additional skills. ', '2015-09-24 23:30:10'),
(3, 'Stephanie', 'fsdfdzfxdfxd.jpg', 'Non-LegalProcessingServices', 'My main motivation for joining Altisource centered around the incredible growth potential for both myself and the company. I am faced with exciting new challenges every day, and my management team provides me with the information and support to overcome any roadblocks. In my position, I have the chance to think outside the box and identify new solutions while continuing to learn and grow in my role. ', '2015-09-24 23:30:43');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admenquiry`
--
ALTER TABLE `admenquiry`
  ADD PRIMARY KEY (`eid`);

--
-- Indexes for table `adminlogin`
--
ALTER TABLE `adminlogin`
  ADD PRIMARY KEY (`adminId`);

--
-- Indexes for table `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`id`),
  ADD KEY `to` (`msg_to`),
  ADD KEY `from` (`msg_from`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`contactId`);

--
-- Indexes for table `dept`
--
ALTER TABLE `dept`
  ADD PRIMARY KEY (`deptId`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`eventId`);

--
-- Indexes for table `faculties`
--
ALTER TABLE `faculties`
  ADD PRIMARY KEY (`ftId`),
  ADD KEY `deptId` (`deptId`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`newsId`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD UNIQUE KEY `sliderLocation` (`sliderLocation`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`tId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admenquiry`
--
ALTER TABLE `admenquiry`
  MODIFY `eid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `chat`
--
ALTER TABLE `chat`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `contactId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `dept`
--
ALTER TABLE `dept`
  MODIFY `deptId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `eventId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
--
-- AUTO_INCREMENT for table `faculties`
--
ALTER TABLE `faculties`
  MODIFY `ftId` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `newsId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `tId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `faculties`
--
ALTER TABLE `faculties`
  ADD CONSTRAINT `faculties_ibfk_1` FOREIGN KEY (`deptId`) REFERENCES `dept` (`deptId`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
