-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 20, 2023 at 04:20 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `login_register`
--

-- --------------------------------------------------------

--
-- Table structure for table `annual_financial_reports`
--

CREATE TABLE `annual_financial_reports` (
  `id` int(11) NOT NULL,
  `AFR_title` varchar(255) NOT NULL,
  `AFR_file_name` varchar(255) NOT NULL,
  `year` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `annual_procurement_plan`
--

CREATE TABLE `annual_procurement_plan` (
  `id` int(11) NOT NULL,
  `image_title` varchar(255) NOT NULL,
  `file_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `annual_reports_si`
--

CREATE TABLE `annual_reports_si` (
  `id` int(11) NOT NULL,
  `ARSI_title` varchar(255) NOT NULL,
  `ARSI_file_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `approved_budget_targets`
--

CREATE TABLE `approved_budget_targets` (
  `id` int(11) NOT NULL,
  `ABT_title` varchar(255) NOT NULL,
  `ABT_file_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `image_path` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `board_regents`
--

CREATE TABLE `board_regents` (
  `id` int(11) NOT NULL,
  `fullname` varchar(255) DEFAULT NULL,
  `position` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `comment` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `campus_gallery`
--

CREATE TABLE `campus_gallery` (
  `id` int(11) NOT NULL,
  `gallery_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `citizen_charters`
--

CREATE TABLE `citizen_charters` (
  `id` int(11) NOT NULL,
  `CC_title` varchar(255) NOT NULL,
  `CC_file_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `citizen_charters`
--

INSERT INTO `citizen_charters` (`id`, `CC_title`, `CC_file_name`) VALUES
(6, 'Citizen\'s Charter', 'SAMPLE PDF.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `cs_directory`
--

CREATE TABLE `cs_directory` (
  `id` int(11) NOT NULL,
  `fullname` varchar(255) DEFAULT NULL,
  `position` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `comment` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `department_heads`
--

CREATE TABLE `department_heads` (
  `id` int(11) NOT NULL,
  `fullname` varchar(255) DEFAULT NULL,
  `position` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `comment` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` int(11) NOT NULL,
  `fullname` varchar(255) DEFAULT NULL,
  `position` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `comment` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `fullname`, `position`, `title`, `comment`, `image`) VALUES
(111, 'Sample Full name', 'Sample Position', 'Sample Overview', 'Sample Description', 'employees/12111111.jpg'),
(112, 'Sample Full name 1', '123213', '213123213', '213213123', 'employees/12111111.jpg'),
(113, 'Sample Full name 2', '23213', '21321321', '3213213213', 'employees/12111111.jpg'),
(114, 'Sample Full name 3', '1232132', '132132132', '2132132131', 'employees/12111111.jpg'),
(115, 'Sample Full name 4', '123213213', '21321321', '321321321321', 'employees/12111111.jpg'),
(116, 'Sample Full name 5', '12321321', '3213213213', '21321321321321321', 'employees/12111111.jpg'),
(117, 'Sample Full name 6', '123213213', '213213213', '21321321321321', 'employees/12111111.jpg'),
(118, 'Sample Full name 7', '1232121321', '321321321321', '3213213213213', 'employees/12111111.jpg'),
(119, 'Sample Full name 8', '12321323213', '213213213', '1321321321321', 'employees/12111111.jpg'),
(120, 'Sample Full name 9', '213213213', '213213213', '21321321321321', 'employees/12111111.jpg'),
(121, 'Sample Full name 10', '21321', '32132131', '32132', 'employees/12111111.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `et_directory`
--

CREATE TABLE `et_directory` (
  `id` int(11) NOT NULL,
  `fullname` varchar(255) DEFAULT NULL,
  `position` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `comment` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `event_schedule`
--

CREATE TABLE `event_schedule` (
  `id` int(11) NOT NULL,
  `day` varchar(10) DEFAULT NULL,
  `date` varchar(255) DEFAULT NULL,
  `event_name` varchar(255) DEFAULT NULL,
  `start_time` varchar(255) DEFAULT NULL,
  `end_time` varchar(255) DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL,
  `pdf_path` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `faculty_directory`
--

CREATE TABLE `faculty_directory` (
  `id` int(11) NOT NULL,
  `fullname` varchar(255) DEFAULT NULL,
  `position` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `comment` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `featured_officials`
--

CREATE TABLE `featured_officials` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `name` varchar(100) NOT NULL,
  `profession` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `hess_directory`
--

CREATE TABLE `hess_directory` (
  `id` int(11) NOT NULL,
  `fullname` varchar(255) DEFAULT NULL,
  `position` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `comment` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `hrmt_directory`
--

CREATE TABLE `hrmt_directory` (
  `id` int(11) NOT NULL,
  `fullname` varchar(255) DEFAULT NULL,
  `position` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `comment` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `img_pdf`
--

CREATE TABLE `img_pdf` (
  `id` int(11) NOT NULL,
  `image_path` varchar(255) NOT NULL,
  `title` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `img_pdf`
--

INSERT INTO `img_pdf` (`id`, `image_path`, `title`) VALUES
(1, '335927323_1614071332438000_5795109904596351067_n.jpg', NULL),
(2, '335927323_1614071332438000_5795109904596351067_n.jpg', 'asdsadasd'),
(3, '335927323_1614071332438000_5795109904596351067_n.jpg', 'asdsadasd'),
(4, '335927323_1614071332438000_5795109904596351067_n.jpg', 'dsaasdsa'),
(5, '51111251.PNG', ''),
(6, '51111251.PNG', ''),
(7, '51111251.PNG', ''),
(8, '51111251.PNG', ''),
(9, '51111251.PNG', ''),
(10, '335927323_1614071332438000_5795109904596351067_n.jpg', ''),
(11, '335927323_1614071332438000_5795109904596351067_n.jpg', ''),
(12, '335927323_1614071332438000_5795109904596351067_n.jpg', ''),
(13, '2511111.PNG', ''),
(14, '2511111.PNG', ''),
(15, '2511111.PNG', ''),
(16, '2511111.PNG', ''),
(17, '335927323_1614071332438000_5795109904596351067_n.jpg', ''),
(18, '335927323_1614071332438000_5795109904596351067_n.jpg', ''),
(19, '51111251.PNG', ''),
(20, '51111251.PNG', ''),
(21, '2511111.PNG', ''),
(22, '2511111.PNG', ''),
(23, '2511111.PNG', ''),
(24, '2511111.PNG', ''),
(25, '51111251.PNG', ''),
(26, '51111251.PNG', ''),
(27, '51111251.PNG', ''),
(28, '51111251.PNG', ''),
(29, '51111251.PNG', ''),
(30, '335927323_1614071332438000_5795109904596351067_n.jpg', ''),
(31, '335927323_1614071332438000_5795109904596351067_n.jpg', ''),
(32, '335927323_1614071332438000_5795109904596351067_n.jpg', ''),
(33, '335927323_1614071332438000_5795109904596351067_n.jpg', ''),
(34, '2511111.PNG', ''),
(35, '335927323_1614071332438000_5795109904596351067_n.jpg', '');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `pdf` varchar(255) NOT NULL,
  `title` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `it_directory`
--

CREATE TABLE `it_directory` (
  `id` int(11) NOT NULL,
  `fullname` varchar(255) DEFAULT NULL,
  `position` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `comment` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `msu_system_officials`
--

CREATE TABLE `msu_system_officials` (
  `id` int(11) NOT NULL,
  `fullname` varchar(255) DEFAULT NULL,
  `position` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `comment` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `image_path` varchar(255) NOT NULL,
  `filename` varchar(255) NOT NULL,
  `image_title` varchar(255) DEFAULT NULL,
  `pdf_title` varchar(255) DEFAULT NULL,
  `title` varchar(255) NOT NULL,
  `pdf_path` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `newsletters`
--

CREATE TABLE `newsletters` (
  `id` int(11) NOT NULL,
  `newsletter_img` varchar(255) NOT NULL,
  `newsletter_pdf` varchar(255) NOT NULL,
  `newsletter_title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `news_pdf`
--

CREATE TABLE `news_pdf` (
  `id` int(11) NOT NULL,
  `filename` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `news_pdf`
--

INSERT INTO `news_pdf` (`id`, `filename`, `title`) VALUES
(1, 'BACHELOR-OF-SCIENCE-IN-COMPUTER-SCIENCE.pdf', 'BACHELOR-OF-SCIENCE-IN-COMPUTER-SCIENCE'),
(2, 'BACHELOR-OF-SCIENCE-IN-COMPUTER-SCIENCE.pdf', 'BACHELOR-OF-SCIENCE-IN-COMPUTER-SCIENCE'),
(3, 'activity-fpe.pdf', 'activity-fpe'),
(4, 'activity-fpe.pdf', 'activity-fpe'),
(5, 'activity-fpe.pdf', 'activity-fpe'),
(6, 'activity-fpe.pdf', 'activity-fpe'),
(7, 'activity-fpe.pdf', 'activity-fpe'),
(8, 'BACHELOR-OF-SCIENCE-IN-COMPUTER-SCIENCE.pdf', 'BACHELOR-OF-SCIENCE-IN-COMPUTER-SCIENCE'),
(9, 'BACHELOR-OF-SCIENCE-IN-COMPUTER-SCIENCE.pdf', 'BACHELOR-OF-SCIENCE-IN-COMPUTER-SCIENCE'),
(10, 'BACHELOR-OF-SCIENCE-IN-COMPUTER-SCIENCE.pdf', 'BACHELOR-OF-SCIENCE-IN-COMPUTER-SCIENCE'),
(11, 'BACHELOR-OF-SCIENCE-IN-COMPUTER-SCIENCE.pdf', 'BACHELOR-OF-SCIENCE-IN-COMPUTER-SCIENCE'),
(12, 'BACHELOR-OF-SCIENCE-IN-COMPUTER-SCIENCE.pdf', 'BACHELOR-OF-SCIENCE-IN-COMPUTER-SCIENCE'),
(13, 'BACHELOR-OF-SCIENCE-IN-COMPUTER-SCIENCE.pdf', 'BACHELOR-OF-SCIENCE-IN-COMPUTER-SCIENCE'),
(14, 'BACHELOR-OF-SCIENCE-IN-COMPUTER-SCIENCE.pdf', 'BACHELOR-OF-SCIENCE-IN-COMPUTER-SCIENCE'),
(15, 'BACHELOR-OF-SCIENCE-IN-COMPUTER-SCIENCE.pdf', 'BACHELOR-OF-SCIENCE-IN-COMPUTER-SCIENCE'),
(16, 'BACHELOR-OF-SCIENCE-IN-COMPUTER-SCIENCE.pdf', 'BACHELOR-OF-SCIENCE-IN-COMPUTER-SCIENCE'),
(17, 'BACHELOR-OF-SCIENCE-IN-COMPUTER-SCIENCE.pdf', 'BACHELOR-OF-SCIENCE-IN-COMPUTER-SCIENCE'),
(18, 'activity-fpe.pdf', 'activity-fpe'),
(19, 'activity-fpe.pdf', 'activity-fpe'),
(20, 'BACHELOR-OF-SCIENCE-IN-COMPUTER-SCIENCE.pdf', 'BACHELOR-OF-SCIENCE-IN-COMPUTER-SCIENCE'),
(21, 'BACHELOR-OF-SCIENCE-IN-COMPUTER-SCIENCE.pdf', 'BACHELOR-OF-SCIENCE-IN-COMPUTER-SCIENCE'),
(22, 'BACHELOR-OF-SCIENCE-IN-COMPUTER-SCIENCE.pdf', 'BACHELOR-OF-SCIENCE-IN-COMPUTER-SCIENCE'),
(23, 'BACHELOR-OF-SCIENCE-IN-COMPUTER-SCIENCE.pdf', 'BACHELOR-OF-SCIENCE-IN-COMPUTER-SCIENCE'),
(24, 'BACHELOR-OF-SCIENCE-IN-COMPUTER-SCIENCE.pdf', 'BACHELOR-OF-SCIENCE-IN-COMPUTER-SCIENCE'),
(25, 'BACHELOR-OF-SCIENCE-IN-COMPUTER-SCIENCE.pdf', 'BACHELOR-OF-SCIENCE-IN-COMPUTER-SCIENCE'),
(26, 'BACHELOR-OF-SCIENCE-IN-COMPUTER-SCIENCE.pdf', 'BACHELOR-OF-SCIENCE-IN-COMPUTER-SCIENCE'),
(27, 'BACHELOR-OF-SCIENCE-IN-COMPUTER-SCIENCE.pdf', 'BACHELOR-OF-SCIENCE-IN-COMPUTER-SCIENCE'),
(28, 'BACHELOR-OF-SCIENCE-IN-COMPUTER-SCIENCE.pdf', 'BACHELOR-OF-SCIENCE-IN-COMPUTER-SCIENCE'),
(29, 'BACHELOR-OF-SCIENCE-IN-COMPUTER-SCIENCE.pdf', 'BACHELOR-OF-SCIENCE-IN-COMPUTER-SCIENCE'),
(30, 'BACHELOR-OF-SCIENCE-IN-COMPUTER-SCIENCE.pdf', 'BACHELOR-OF-SCIENCE-IN-COMPUTER-SCIENCE'),
(31, 'activity-fpe.pdf', 'activity-fpe'),
(32, 'activity-fpe.pdf', 'activity-fpe'),
(33, 'activity-fpe.pdf', 'activity-fpe'),
(34, 'activity-fpe.pdf', 'activity-fpe'),
(35, 'BACHELOR-OF-SCIENCE-IN-COMPUTER-SCIENCE.pdf', 'BACHELOR-OF-SCIENCE-IN-COMPUTER-SCIENCE'),
(36, 'beed.pdf', 'beed');

-- --------------------------------------------------------

--
-- Table structure for table `nsm_directory`
--

CREATE TABLE `nsm_directory` (
  `id` int(11) NOT NULL,
  `fullname` varchar(255) DEFAULT NULL,
  `position` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `comment` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `overall_directory`
--

CREATE TABLE `overall_directory` (
  `id` int(11) NOT NULL,
  `fullname` varchar(255) DEFAULT NULL,
  `position` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `comment` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `overall_directory`
--

INSERT INTO `overall_directory` (`id`, `fullname`, `position`, `title`, `comment`, `image`) VALUES
(0, 'Daisuke Vivarez', 'Progamer', 'asd', 'asdas', 'overall-directory/1221312sadas.PNG');

-- --------------------------------------------------------

--
-- Table structure for table `se_directory`
--

CREATE TABLE `se_directory` (
  `id` int(11) NOT NULL,
  `fullname` varchar(255) DEFAULT NULL,
  `position` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `comment` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `slideshow`
--

CREATE TABLE `slideshow` (
  `id` int(11) NOT NULL,
  `image_path` varchar(255) NOT NULL,
  `alt_text` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `slideshow`
--

INSERT INTO `slideshow` (`id`, `image_path`, `alt_text`) VALUES
(1, 'images/Slideshow-img335927323_1614071332438000_5795109904596351067_n.jpg', 'sadsadsa'),
(2, 'images/Slideshow-img335927323_1614071332438000_5795109904596351067_n.jpg', 'yessss'),
(3, 'images/Slideshow-img335927323_1614071332438000_5795109904596351067_n.jpg', 'yessss'),
(4, 'images/Slideshow-imgimages/Slideshow-img/', ''),
(5, 'images/Slideshow-img/images/Slideshow-img/', ''),
(6, 'images/Slideshow-img//', ''),
(7, 'images/Slideshow-img//', ''),
(8, 'images/Slideshow-img//', ''),
(9, 'images/Slideshow-img/images/Slideshow-img/', ''),
(10, 'images/Slideshow-img/images/Slideshow-img/', ''),
(11, 'images/Slideshow-img/images/Slideshow-img/', ''),
(12, 'images/Slideshow-img/images/Slideshow-img/', ''),
(13, 'images/Slideshow-img/images/Slideshow-img/', ''),
(14, 'images/Slideshow-img/images/Slideshow-img/', ''),
(15, 'images/Slideshow-img/images/Slideshow-img/', ''),
(16, 'images/Slideshow-img/images/Slideshow-img/', ''),
(17, 'images/Slideshow-img/images/Slideshow-img/', ''),
(18, 'images/Slideshow-img/images/Slideshow-img/', ''),
(19, 'images/Slideshow-img/images/Slideshow-img/', ''),
(20, 'images/Slideshow-img/images/Slideshow-img/', '');

-- --------------------------------------------------------

--
-- Table structure for table `staff_directory`
--

CREATE TABLE `staff_directory` (
  `id` int(11) NOT NULL,
  `fullname` varchar(255) DEFAULT NULL,
  `position` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `comment` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `middle_name` varchar(50) NOT NULL,
  `surname` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `id_no` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `middle_name`, `surname`, `username`, `id_no`, `email`, `password`, `role`) VALUES
(9, 'short', 'mofo ', 'eulyza', 'shortmofo_123', '', 'exmpleee@gmail.com', '$2y$10$X8S3O3pnTy38ZphQyTHNyuSrlKq5a2IKeviAVlffv87KMcAHGM6zC', 'alumni'),
(10, 'Daisuke', 'Logronio', 'Vivarez', 'admin123', '000000', 'admin123@gmail.com', '$2y$10$z1KP.AQi2G9evhXvw3K/BepZa.XeDjUCZWI35MNSw3zun2PjJvYyy', 'admin'),
(11, 'daisuke', 'logronio', 'vivarez', 'vivarez123x1', '1231122', 'daisuke.cs19@gmail.com', '$2y$10$nd1LxV7EqkP7uPXTIvmlte9uo9xvN3nSpldgxXFDw5FEnoZ3A4SsW', 'student'),
(12, 'eulyza', 'randa', 'mofo', 'mofoshort1', '123567', 'mofoshort1@gmail.com', '$2y$10$SN5WPY0bczV7//zr.ebDqOGkCg/xKIkp5znsvagwNctHPiR7QXzia', 'student'),
(13, 'eulyza', 'eulanda', 'rnada', 'randa123', '1254151', 'randa_e@gmail.com', '$2y$10$YuHDkbni5ZUWtwyNvJ.DA.wfE0YD1i3EpKX0zbv5RghSEdSgtA01m', 'student'),
(14, 'pablo', 'picaso', 'pica', 'pablo123x1', '1232151', 'nababurbd@gmail.com', '$2y$10$ror91NRsafBye/QBixYRl.Xm6Blq.x/D4GhOynmpSoy1A7ajpbOI2', 'student'),
(15, 'herb', 'picaso', 'pablo', 'herb123x1', '', 'herb123x1@gmail.com', '$2y$10$.5zbaxTSAn/5Tqc4CF6bc.5o6yxBzNfgf4S7v9DcPKfrJDtSNqiP2', 'alumni'),
(16, 'leven', 'pablo', 'pika', 'pikaso123x1', '1231231', 'pikaso123@gmail.com', '$2y$10$yI/y8Sj85nSzW8YbIwzwnecF4VhzymhmWE2.afBm9OOooLlCzpZlC', 'student');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `annual_financial_reports`
--
ALTER TABLE `annual_financial_reports`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `annual_procurement_plan`
--
ALTER TABLE `annual_procurement_plan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `annual_reports_si`
--
ALTER TABLE `annual_reports_si`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `approved_budget_targets`
--
ALTER TABLE `approved_budget_targets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `board_regents`
--
ALTER TABLE `board_regents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `campus_gallery`
--
ALTER TABLE `campus_gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `citizen_charters`
--
ALTER TABLE `citizen_charters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cs_directory`
--
ALTER TABLE `cs_directory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `department_heads`
--
ALTER TABLE `department_heads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `et_directory`
--
ALTER TABLE `et_directory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `event_schedule`
--
ALTER TABLE `event_schedule`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faculty_directory`
--
ALTER TABLE `faculty_directory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `featured_officials`
--
ALTER TABLE `featured_officials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hess_directory`
--
ALTER TABLE `hess_directory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hrmt_directory`
--
ALTER TABLE `hrmt_directory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `img_pdf`
--
ALTER TABLE `img_pdf`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `it_directory`
--
ALTER TABLE `it_directory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `msu_system_officials`
--
ALTER TABLE `msu_system_officials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newsletters`
--
ALTER TABLE `newsletters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news_pdf`
--
ALTER TABLE `news_pdf`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nsm_directory`
--
ALTER TABLE `nsm_directory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `se_directory`
--
ALTER TABLE `se_directory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slideshow`
--
ALTER TABLE `slideshow`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff_directory`
--
ALTER TABLE `staff_directory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `annual_financial_reports`
--
ALTER TABLE `annual_financial_reports`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `annual_procurement_plan`
--
ALTER TABLE `annual_procurement_plan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `annual_reports_si`
--
ALTER TABLE `annual_reports_si`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `approved_budget_targets`
--
ALTER TABLE `approved_budget_targets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `board_regents`
--
ALTER TABLE `board_regents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `campus_gallery`
--
ALTER TABLE `campus_gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `citizen_charters`
--
ALTER TABLE `citizen_charters`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `cs_directory`
--
ALTER TABLE `cs_directory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `department_heads`
--
ALTER TABLE `department_heads`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=122;

--
-- AUTO_INCREMENT for table `et_directory`
--
ALTER TABLE `et_directory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `event_schedule`
--
ALTER TABLE `event_schedule`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=111;

--
-- AUTO_INCREMENT for table `faculty_directory`
--
ALTER TABLE `faculty_directory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `featured_officials`
--
ALTER TABLE `featured_officials`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `hess_directory`
--
ALTER TABLE `hess_directory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `hrmt_directory`
--
ALTER TABLE `hrmt_directory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `img_pdf`
--
ALTER TABLE `img_pdf`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=466;

--
-- AUTO_INCREMENT for table `it_directory`
--
ALTER TABLE `it_directory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `msu_system_officials`
--
ALTER TABLE `msu_system_officials`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=306;

--
-- AUTO_INCREMENT for table `newsletters`
--
ALTER TABLE `newsletters`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=140;

--
-- AUTO_INCREMENT for table `news_pdf`
--
ALTER TABLE `news_pdf`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `nsm_directory`
--
ALTER TABLE `nsm_directory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `se_directory`
--
ALTER TABLE `se_directory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `slideshow`
--
ALTER TABLE `slideshow`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `staff_directory`
--
ALTER TABLE `staff_directory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
