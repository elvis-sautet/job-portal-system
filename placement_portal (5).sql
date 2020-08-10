-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 10, 2020 at 08:21 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `placement portal`
--

-- --------------------------------------------------------

--
-- Table structure for table `companyregistration`
--

CREATE TABLE `companyregistration` (
  `id` int(11) NOT NULL,
  `companyName` varchar(100) NOT NULL,
  `companyAddress` varchar(100) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `companyprofile` varchar(250) DEFAULT NULL,
  `password` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `companyregistration`
--

INSERT INTO `companyregistration` (`id`, `companyName`, `companyAddress`, `Email`, `companyprofile`, `password`) VALUES
(31, 'DURA COURT', 'JUJA', 'Dura@gmail.com', '5f317a019e6fc8.64002514.png', '$2y$10$U/pjUWgi1ikFdv.r5JAh0OOfCgtjl0A430JDbFsqEzhXEAs1rNcwW'),
(32, 'ZUSHA ltd', 'nairobi', 'zusha@gmail.com', '5f31741c675dd2.97273128.jpg', '$2y$10$ccv3BZHeyW8UmKvcq6DqeOtEWJJ7Ah0BSE.aYH56PicY/yl8CiYNu'),
(33, 'TIKMA', 'Nairobi', 'tikma@gmail.com', NULL, '$2y$10$DYw3A31FbiE1ny75kKpSOuKC.YUxnG/LbVBlgPsWfgRy3Yj35DxPi'),
(34, 'VISHNU RECTREM', 'THIKA', 'vishnu@gmail.com', '5f3179d7436607.19305079.png', '$2y$10$7PsM9NvN3lTq/i8bm7UL5.Ipef0TTKFsDuvHostsH8Q/HKPWDMnp6'),
(35, 'kachyNety', 'Nairobi', 'kachi@gmail.com', '5f318b04e02c91.66543391.png', '$2y$10$um.TKWjH0YzcLpomKXNJ0OiGFbsdNxpU1ZN1PtSrONTcRZZpwCR9q'),
(36, 'vishnu LTD', 'Nairobi', 'sautetelvis4148@gmail.com', NULL, '$2y$10$TP0ZfFlOUKOzCr86gdARaOxMM8MAztaC4c.PbWzTPHSMDcdy3XAzG'),
(37, 'vikram', '00-209-00-210', 'vikram@gmail.com', '5f318d003824e3.95544231.jpg', '$2y$10$Ql4N.42chA6Sgc4UV2u0Ve5vanu0DDFZgWx3r5PIo5XskRzce1QBO'),
(38, 'Resson vikram', 'Los Angeles', 'resson@gmail.com', NULL, '$2y$10$KOe76Zju1wm5i4Zknq4nHeUUn5PXUgTzsM4Q5B9CHm1N1JYEn4nCC'),
(39, 'FOX', 'Los Angeles', 'fox@gmail.com', NULL, '$2y$10$wnUs/wdlfL9LqElY/di/jemhhuxmEGnv3WxifM1YPjYZXp5SanOvu'),
(40, 'LINK', 'Nairobi', 'link@gmail.com', '5f313e3aeb6ea0.06731766.jpg', '$2y$10$6CL4N.W7J/FrD30gPlohtu1neF4XySDqEtXB0GyevqJ.BkJSJxzHG'),
(41, 'Onecode', 'Nairobi', 'onecode@gmail.com', '5f317ab6623ca8.47075910.png', '$2y$10$DT7jS9IB0aVUflSaUbqbVeb470B/Mtj5Nc6u80RY7KDSpVhPmVKXa');

-- --------------------------------------------------------

--
-- Table structure for table `jobapplicantion`
--

CREATE TABLE `jobapplicantion` (
  `id` int(11) NOT NULL,
  `companyname` varchar(250) NOT NULL,
  `Jobname` varchar(250) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `applicant_id` int(11) NOT NULL,
  `mobilenumber` int(11) NOT NULL,
  `qualification` varchar(50) NOT NULL,
  `experience` varchar(50) NOT NULL,
  `salaryexpected` int(11) NOT NULL,
  `coverletter` longtext NOT NULL,
  `CV` varchar(500) NOT NULL,
  `Message` varchar(300) DEFAULT NULL,
  `messagedate` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jobapplicantion`
--

INSERT INTO `jobapplicantion` (`id`, `companyname`, `Jobname`, `firstname`, `lastname`, `applicant_id`, `mobilenumber`, `qualification`, `experience`, `salaryexpected`, `coverletter`, `CV`, `Message`, `messagedate`) VALUES
(428, 'DURA COURT', 'someone', 'Elvis', 'meritei', 41, 768692323, 'Certificate', '2 years', 12000, '130000', 'Elvis5f30487f2c05c5.12950212.docx', 'YOU HAVE qualified', '2020:08:09 10:12:15'),
(429, 'DURA COURT', 'Distributor Sales Rep – Domestic Water Treatment Equipment', 'Elvis', 'meritei', 41, 768692323, 'Certificate', '5 years', 12000, 'i need this job', 'Elvis5f304b65c5a830.90388615.docx', 'Application for this job has being nullified,your qualifications are too low,\r\nthank you...                ', '2020:08:09 10:16:27'),
(430, 'VISHNU RECTREM', ' Restaurant Captain', 'peter', 'Ngige', 45, 768692323, 'Bachelor', '3 years', 13000, 'hello there i need this job i know i can make you proud and you wount regret having me in this company', 'peter5f311076128c96.14313254.docx', 'Application for this job has being nullified,your qualifications are too low,\r\nthank you...                ', '2020:08:10 12:17:27'),
(431, 'VISHNU RECTREM', 'Sales Manager', 'Erick', 'kasaine', 47, 7889765, 'Bachelor', '9 years', 12000, 'i need this', 'Erick5f3145f8a57391.92310592.docx', 'Application for this job has being nullified,your qualifications are too low,\r\nthank you...                ', '2020:08:10 06:56:26'),
(432, 'VISHNU RECTREM', 'Sales Manager', 'Erick', 'kasaine', 47, 7889765, 'Bachelor', '2 years', 12000, 'jisdfd', 'Erick5f314659374239.31792821.docx', 'Application for this job has being nullified,your qualifications are too low,\r\nthank you...                ', '2020:08:10 06:56:11'),
(433, 'VISHNU RECTREM', 'Sales Manager', 'Erick', 'kasaine', 47, 7889765, 'Diploma', '8 years', 13000, 'hello', 'Erick5f3146af3ac3f6.88000699.docx', 'Application for this job has being nullified,your qualifications are too low,\r\nthank you...                ', '2020:08:10 06:55:59'),
(434, 'VISHNU RECTREM', 'Sales Manager', 'Erick', 'kasaine', 47, 7889765, 'Certificate', '1 year', 13000, '12000', 'Erick5f314706a58453.60329634.docx', 'here', '2020:08:10 06:49:58'),
(435, 'VISHNU RECTREM', 'Sales Manager', 'Erick', 'kasaine', 47, 7889765, 'Certificate', '2 years', 12000, '62354723', 'Erick5f3148a8588d56.73062185.docx', 'Application for this job has being nullified,your qualifications are too low,\r\nthank you...                ', '2020:08:10 06:47:52'),
(436, 'DURA COURT', 'Delivery Assistant', 'Elvis', 'meritei', 41, 768692323, 'Bachelor', '7 years', 12000, '34554', 'Elvis5f315747c226b1.15813570.docx', 'Application for this job has being nullified,your qualifications are too low,\r\nthank you...                ', '2020:08:10 05:19:26'),
(437, 'DURA COURT', 'Delivery Assistant', 'Elvis', 'meritei', 41, 768692323, 'Bachelor', '5 years', 13000, 'hey there', 'Elvis5f316d193d0024.67510303.docx', 'Application for this job has being nullified,your qualifications are too low,\r\nthank you...                ', '2020:08:10 06:53:09'),
(438, 'VISHNU RECTREM', ' Restaurant Captain', 'Elvis', 'meritei', 41, 768692323, 'Bachelor', '6 years', 15000, 'can i have this job ', 'Elvis5f316dc718da79.55295166.docx', 'Application for this job has being nullified,your qualifications are too low,\r\nthank you...                ', '2020:08:10 06:55:37'),
(439, 'ZUSHA ltd', ' Accountant -Payables & Receivables (FMCG Manufacturing Company)', 'Elvis', 'meritei', 41, 768692323, 'Certificate', '8 years', 13000, 'please help me', 'Elvis5f3171eac930d4.57620434.docx', 'Application for this job has being nullified,your qualifications are too low,\r\nthank you...                ', '2020:08:10 07:12:46'),
(440, 'Onecode', 'Mobile App Developer (Android & IOS)', 'Erick', 'kasaine', 47, 7889765, 'Bachelor', '1 year', 12000, 'can you please have the job', 'Erick5f317b8d93d560.44067993.docx', 'Application for this job has being nullified,your qualifications are too low,\r\nthank you...                ', '2020:08:10 07:53:49'),
(441, 'Onecode', 'Mobile App Developer (Android & IOS)', 'Elvis', 'meritei', 41, 768692323, 'Certificate', '8 years', 12000, 'hey do you know this job', 'Elvis5f3185298eed52.00935225.docx', 'we have received your application stop disturbing me please boy', '2020:08:10 08:35:31'),
(442, 'kachyNety', 'Pre-Sales Executive- Electronic Security Systems', 'Elvis', 'meritei', 41, 768692323, 'Bachelor', '8 years', 12344, 'jhknbbi', 'Elvis5f318a3a7aa0c2.82053239.docx', 'Application for this job has being nullified,your qualifications are too low,\r\nthank you...                ', '2020:08:10 08:56:25'),
(443, 'vikram', 'Tax Manager', 'Elvis', 'meritei', 41, 768692323, 'Certificate', '3 years', 12000, 'i need this job', 'Elvis5f318c7311ccf1.66765006.docx', 'application received.\r\ncontact me at \r\n0700107880', '2020:08:10 09:06:33');

-- --------------------------------------------------------

--
-- Table structure for table `jobpost`
--

CREATE TABLE `jobpost` (
  `id` int(11) NOT NULL,
  `company_id` int(11) NOT NULL,
  `jobname` varchar(100) NOT NULL,
  `companyname` varchar(100) NOT NULL,
  `joblocation` varchar(100) NOT NULL,
  `employment_type` varchar(100) NOT NULL,
  `job_salary` varchar(100) NOT NULL,
  `joboverview` longtext NOT NULL,
  `jobduties` longtext NOT NULL,
  `dateposted` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jobpost`
--

INSERT INTO `jobpost` (`id`, `company_id`, `jobname`, `companyname`, `joblocation`, `employment_type`, `job_salary`, `joboverview`, `jobduties`, `dateposted`) VALUES
(101, 31, 'Distributor Sales Rep – Domestic Water Treatment Equipment', 'DURA COURT', 'Nairobi', 'parttime', 'Less than 15,000', '<p>we need people</p>\r\n', '<p>yes</p>\r\n', '2020-08-09'),
(102, 31, 'Distributor Sales Rep – Swimming Pool Chemicals', 'DURA COURT', 'Nakuru', 'fulltime', 'confidential', '<p>Job Summary</p>\r\n\r\n<p>Our client is a leading supplier of water-related equipment. They are looking to hire a Distributor Sales Representative to help drive Swimming Pool Chemicals sales.</p>\r\n\r\n<ul>\r\n	<li>Minimum Qualification:&nbsp;Diploma</li>\r\n	<li>Experience Level:&nbsp;Mid level</li>\r\n	<li>Experience Length:&nbsp;3 years</li>\r\n</ul>\r\n', '<p>Job Description</p>\r\n\r\n<p>Sales Region: Nairobi,<br />\r\nBase Town: Nakuru,<br />\r\nSalary: Competitive,<br />\r\n<br />\r\nResponsibilities<br />\r\n&bull;&nbsp;&nbsp;&nbsp; To approach and pitch products to stockists and manage both the existing and new accounts<br />\r\n&bull;&nbsp;&nbsp;&nbsp; To provide ongoing technical support to the stockiest and ensure sales targets for each stockist are met.<br />\r\n&bull;&nbsp;&nbsp;&nbsp; To actively seek and implement new ways to increase sales revenue and continuously hit set sales targets.<br />\r\n&bull;&nbsp;&nbsp;&nbsp; Resolve customer complaints by investigating problems; developing solutions; preparing reports and making recommendations to management.<br />\r\n&bull;&nbsp;&nbsp;&nbsp; To process client, restock orders within reasonable timelines.<br />\r\n&bull;&nbsp;&nbsp;&nbsp; To gather market intelligence and communicate the same to management so as enhance business performance<br />\r\n&bull;&nbsp;&nbsp;&nbsp; Undertake competitor and market analysis and communicate the same to management.<br />\r\n<br />\r\nQualifications<br />\r\n&bull;&nbsp;&nbsp;&nbsp; Must have Diploma in Sales &amp; Marketing.<br />\r\n&bull;&nbsp;&nbsp;&nbsp; Should have at least 3 &ndash; 5 years experience in swimming pool chemical sales<br />\r\n&bull;&nbsp;&nbsp;&nbsp; They should be willing to travel on sales assignments<br />\r\n&bull;&nbsp;&nbsp;&nbsp;&nbsp;MUST have a valid Driving License<br />\r\n&bull;&nbsp;&nbsp;&nbsp; Men are highly encouraged to apply<br />\r\n<br />\r\nNB<br />\r\nExperience in swimming pool chemical sales is a&nbsp;MUST<br />\r\nA Valid Driving License is a&nbsp;MUST<br />\r\n<br />\r\nHow to Apply<br />\r\nIf you are up to the challenge, possess the necessary qualification and experience; please send your CV only quoting the job title on the email subject (Distributor Sales Rep Job &ndash; Swimming Pool Chemicals) before&nbsp;14th August 2020.<br />\r\nKindly indicate current/last salary on your CV<br />\r\nN.B: We do not charge any fee for receiving your CV or for interviewing<br />\r\nOnly candidates short-listed for interview will be contacted.</p>\r\n', '2020-08-09'),
(103, 31, 'Assistant Motor Vehicle Assessor / Valuer', 'DURA COURT', 'Nairobi', 'fulltime', 'confidential', '<p>Job Summary</p>\r\n\r\n<p>Our Client in the automotive industry is currently looking to hire an Assistant Motor Vehicle Assessor / Valuer</p>\r\n\r\n<ul>\r\n	<li>Minimum Qualification:&nbsp;Diploma</li>\r\n	<li>Experience Level:&nbsp;Entry level</li>\r\n	<li>Experience Length:&nbsp;1 year</li>\r\n</ul>\r\n', '<p>Job Description</p>\r\n\r\n<p>Qualifications</p>\r\n\r\n<ul>\r\n	<li>Motor Engineering Degree/Diploma in Mechanical</li>\r\n	<li>At least 1 year of experience as an Assessor &amp; Valuer</li>\r\n	<li>A Certificate of Proficiency in Insurance is a&nbsp;MUST</li>\r\n	<li>Good attitude and start up mentality for a small business entity.</li>\r\n	<li>Good Management and business skills.</li>\r\n	<li>Candidates should be willing to work in growing a business.</li>\r\n	<li>In depth knowledge of vehicles - their technologies, systems and components</li>\r\n</ul>\r\n', '2020-08-09'),
(104, 34, ' Restaurant Captain', 'VISHNU RECTREM', 'Nairobi', 'fulltime', 'confidential', '<p>Job Summary</p>\r\n\r\n<p>Our Client a business class hotel is currently looking to hire a Restaurant Captain.</p>\r\n\r\n<ul>\r\n	<li>Minimum Qualification:&nbsp;Diploma</li>\r\n	<li>Experience Level:&nbsp;Entry level</li>\r\n	<li>Experience Length:&nbsp;2 years</li>\r\n</ul>\r\n', '<p>Job Description</p>\r\n\r\n<p>Responsibilities</p>\r\n\r\n<ul>\r\n	<li>Promoting and ensuring guest satisfaction by providing guests with an exceptional dining experience and quality service.</li>\r\n	<li>Greet guests and perform duties of a host.</li>\r\n	<li>Set tables according to type of event.</li>\r\n	<li>To be fully conversant with every dish served in the Restaurant and assist with menu selections.</li>\r\n	<li>Take food and beverage orders from guests.</li>\r\n	<li>Ensure guests are served in a timely, professional and efficient manner.</li>\r\n	<li>Consistently check on guests to ensure satisfaction with food and beverages.</li>\r\n	<li>Assign tables and tasks to wait staff in addition to waiting on their own tables.</li>\r\n	<li>Ensure billing process is accurate and present final bills to guests.</li>\r\n	<li>Creating weekly shift schedules and disciplining wait staff as necessary.</li>\r\n	<li>Set standard for wait staff, ensure they are properly groomed and doing their jobs efficiently</li>\r\n	<li>Performing opening and closing procedures.</li>\r\n	<li>Ensure that the dining area and work stations are kept clean and well organized.</li>\r\n	<li>Ensure that the restaurant&rsquo;s SOP&rsquo;s are consistently implemented.</li>\r\n	<li>Communicate with the Executive Chef on specials and menus.</li>\r\n	<li>Communicate with kitchen on special requests for guests, menu items, dietary needs and product availability.</li>\r\n	<li>Obtain constructive feedback from guests and to use the information to improve service.</li>\r\n	<li>Train and supervise service staff on SOP&rsquo;s and food service techniques.</li>\r\n	<li>Conduct monthly inventory checks on all crockery, glassware, cutlery and operating equipment.</li>\r\n	<li>To ensure that all appliances, equipment are safe and report any faults to the Restaurant Supervisor.</li>\r\n	<li>Perform other duties related to food and beverage service as assigned by the manager</li>\r\n</ul>\r\n\r\n<p>Qualifications</p>\r\n\r\n<ul>\r\n	<li>Diploma/Certificate in Food and Beverage or equivalent qualification</li>\r\n	<li>At least 2 years of experience in a similar role</li>\r\n	<li>Must have good knowledge of food and beverage service</li>\r\n	<li>Outgoing personality</li>\r\n	<li>Exceptional leadership and communication skills</li>\r\n	<li>Highly organized with the ability to multitask</li>\r\n	<li>Supervisory skills and ability to delegate and follow up on tasks.</li>\r\n	<li>Passionate in delivering outstanding customer service</li>\r\n</ul>\r\n\r\n<p>Preferred Skills</p>\r\n\r\n<ul>\r\n	<li>Flexible and able to adapt to changes</li>\r\n	<li>Committed to delivering high standards of customer service</li>\r\n	<li>Interest in continuous improvement and able to take initiative</li>\r\n	<li>Conflict resolution skills</li>\r\n	<li>Excellent interpersonal skills</li>\r\n</ul>\r\n', '2020-08-09'),
(106, 31, 'Delivery Assistant', 'DURA COURT', 'Nairobi', 'fulltime', 'confidential', '<p>Job Summary</p>\r\n\r\n<p>To ensure that customer delivery is done in adherence to the laid our standard operating procedure.</p>\r\n\r\n<ul>\r\n	<li>Minimum Qualification:&nbsp;Highschool</li>\r\n	<li>Experience Level:&nbsp;Mid level</li>\r\n	<li>Experience Length:&nbsp;2 years</li>\r\n</ul>\r\n', '<p>Job Description</p>\r\n\r\n<ul>\r\n	<li>JOB RESPONSIBILITIES\r\n	<p>Delivery:&nbsp;Following the laid-out route plan, deliver the products ordered by vendors in the assigned route as per delivery manifest.</p>\r\n\r\n	<p>Stock management:&nbsp;Collection of customers returns on time and ensuring that end of day stock reconciliation is done.</p>\r\n\r\n	<p>Asset management:&nbsp;Ensuring that the assigned DMS handset and crates are maintained as per the set standards and available for inspection where need be.</p>\r\n\r\n	<p>Meeting KPIs:&nbsp;Starting deliveries at the scheduled time, keeping a clear log on delivery times for all orders, accounting for all assigned crates, ensuring payment for goods upon delivery.</p>\r\n\r\n	<p>Delivery excellence:&nbsp;Ensuring quality customer service in the delivery of customer promise.</p>\r\n\r\n	<p>&nbsp;</p>\r\n\r\n	<p>KEY PERFORMANCE INDICATORS</p>\r\n\r\n	<ul>\r\n		<li>Fulfillment Accuracy: % Order matching;</li>\r\n		<li>&nbsp;Sales revenue;</li>\r\n		<li>&nbsp;Sales volumes;</li>\r\n		<li>&nbsp;Percentage of market share growth;</li>\r\n		<li>NPS Scores in respective routes.</li>\r\n	</ul>\r\n\r\n	<p>&nbsp;</p>\r\n\r\n	<p>COMPETENCIES&nbsp;</p>\r\n\r\n	<ul>\r\n		<li>Customer Focus;</li>\r\n		<li>Planning and organizing skills;</li>\r\n		<li>&nbsp;Excellent communication and interpersonal skills;</li>\r\n		<li>&nbsp;Proven integrity, transparency and accountability;</li>\r\n		<li>Attention to detail</li>\r\n	</ul>\r\n\r\n	<p>&nbsp;</p>\r\n\r\n	<p>QUALIFICATIONS</p>\r\n\r\n	<ul>\r\n		<li>KCSE qualification with a minimum C+ grade.</li>\r\n		<li>A valid certificate of good conduct.</li>\r\n		<li>Aged between 25-35.</li>\r\n	</ul>\r\n	</li>\r\n</ul>\r\n', '2020-08-10'),
(107, 32, ' Accountant -Payables & Receivables (FMCG Manufacturing Company)', 'ZUSHA ltd', 'Nairobi', 'fulltime', 'confidential', '<p>Job Summary</p>\r\n\r\n<p>Applications are invited from qualified persons for the above vacant position.</p>\r\n\r\n<ul>\r\n	<li>Minimum Qualification:&nbsp;Diploma</li>\r\n	<li>Experience Level:&nbsp;Mid level</li>\r\n	<li>Experience Length:&nbsp;5 years</li>\r\n</ul>\r\n', '<p>Job Description</p>\r\n\r\n<p>Employer:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; A MANUFACTURING COMPANY LOCATED AT NYAMIRA COUNTY<br />\r\nRef No:&nbsp; &nbsp;&nbsp;&nbsp; SGK-ACC_PAYABLES&amp;RECEIVABLES-08-2020<br />\r\nIndustry:&nbsp; &nbsp;&nbsp;&nbsp; MANUFACTURING<br />\r\nJob Category:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; SUPERVISORY<br />\r\nTown:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; NYAMIRA COUNTY<br />\r\nCountry:&nbsp; &nbsp;&nbsp;&nbsp; KENYA<br />\r\n<br />\r\nRequirements:&nbsp; &nbsp;&nbsp;&nbsp;<br />\r\nMust have a minimum CPA part 2 -Section 4. University degree is an added advantage.<br />\r\n<br />\r\nExperience:&nbsp; &nbsp;&nbsp;&nbsp;<br />\r\n&bull;&nbsp;&nbsp;&nbsp; At least 5 years working experience doing payables and receivables accounting duties in a busy manufacturing company.<br />\r\nSalary:&nbsp; &nbsp;&nbsp;&nbsp; KSHS. 60,000 - 70,000<br />\r\n<br />\r\nDuties:&nbsp; &nbsp;&nbsp;&nbsp;<br />\r\n&bull;&nbsp;&nbsp;&nbsp; Accountant in charge of payables and receivables accounting will report to chief accountant.<br />\r\n&bull;&nbsp;&nbsp;&nbsp; He/she may also be delegated other general accounting assignments from time to time. Hence one has to be an all rounded accountant.</p>\r\n', '2020-08-10'),
(109, 35, 'Pre-Sales Executive- Electronic Security Systems', 'kachyNety', 'Nairobi', 'fulltime', 'confidential', '<p>Job Summary</p>\r\n\r\n<p>Our client is a leading integrated IT business solutions provider. They seek to hire a highly competent and efficient pre-sales executive who will generate sales via desk research, prepare technical and commercial bids for tenders, customized electronic security solution offerings and work together with the sales team to generate revenue.</p>\r\n\r\n<ul>\r\n	<li>Minimum Qualification:&nbsp;Bachelor</li>\r\n	<li>Experience Level:&nbsp;Mid level</li>\r\n	<li>Experience Length:&nbsp;3 years</li>\r\n</ul>\r\n', '<p>Job Description</p>\r\n\r\n<p>Industry: IT,</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Location: Nairobi,</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Reporting to: Business manager,</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Salary:50-60k,</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Responsibilities<br />\r\n&bull;&nbsp;&nbsp;&nbsp; Building and maintaining relationships with both the new and existing clients<br />\r\n&bull;&nbsp;&nbsp;&nbsp; Generate new sales leads for the Electronic Security systems.<br />\r\n&bull;&nbsp;&nbsp;&nbsp; Data mine for potential clients and come up with persuasive approaches to pitches the potential clients<br />\r\n&bull;&nbsp;&nbsp;&nbsp; Engage the sales team in product training to maintain high product knowledge.<br />\r\n&bull;&nbsp;&nbsp;&nbsp; Solution presentation to potential clients.<br />\r\n&bull;&nbsp;&nbsp;&nbsp; Determine, resolve, and communicate technical and business presales issues to presales management.<br />\r\n&bull;&nbsp;&nbsp;&nbsp; Analyze market data to determine the ideal customer for a given product as well as gain a clear understanding of the clients&rsquo; requirements<br />\r\n&bull;&nbsp;&nbsp;&nbsp; Design and prepare Technical and Commercial Bids for Tenders and Customized Electronic Security Solution offerings.<br />\r\n&bull;&nbsp;&nbsp;&nbsp; Ensuring sales performance and aiming to meet and /or exceed Target Assigned per month<br />\r\n&bull;&nbsp;&nbsp;&nbsp; Taking clients for site visits and demos<br />\r\n<br />\r\nQualifications<br />\r\n&bull;&nbsp;&nbsp;&nbsp; A Bachelor&rsquo;s Degree and/or MBA in Marketing.&nbsp;<br />\r\n&bull;&nbsp;&nbsp;&nbsp; Sales/Marketing Professional courses will be an added advantage<br />\r\n&bull;&nbsp;&nbsp;&nbsp;&nbsp;A minimum of 3-4 years&rsquo; experience in promoting and selling Electronic security solutions<br />\r\n&bull;&nbsp;&nbsp;&nbsp; Must have experience in B2B sales<br />\r\n&bull;&nbsp;&nbsp;&nbsp; Knowledge and experience in security management solutions i.e. Entrance control, Access control, Fire Alarm, Intrusion Alarm, CCTV, and BMS system.<br />\r\n&bull;&nbsp;&nbsp;&nbsp; Must have experience in preparing technical and commercial bids for tenders<br />\r\n&bull;&nbsp;&nbsp;&nbsp; Should be very well conversant with MS office packages<br />\r\n&bull;&nbsp;&nbsp;&nbsp; Strong communication and interpersonal skills<br />\r\n&bull;&nbsp;&nbsp;&nbsp; Should be very well conversant with MS office packages. Excellent hands-on skills in Microsoft EXCEL, MS Word, and Powerpoint.<br />\r\n&bull;&nbsp;&nbsp;&nbsp; Strong strategic, analytical, and organizational skills.<br />\r\n&bull;&nbsp;&nbsp;&nbsp; Ability to work on own initiative, meet the sales targets within the stipulated deadlines.<br />\r\n<br />\r\nNB:<br />\r\n&bull;&nbsp;&nbsp;&nbsp; A minimum of 3-4 years&rsquo; experience in promoting and selling Electronic security solutions is a&nbsp;MUST<br />\r\n&bull;&nbsp;&nbsp;&nbsp; Knowledge and experience in security management solutions i.e. Entrance control, Access control, Fire Alarm, Intrusion Alarm, CCTV and BMS system is also a&nbsp;MUST<br />\r\n&bull;&nbsp;&nbsp;&nbsp; The candidate must have experience in preparing technical and commercial bids for tenders<br />\r\n<br />\r\nHow to Apply<br />\r\nIf you are up to the challenge, possess the necessary qualification and experience; please send your CV only quoting the job title on the email subject (Pre-Sales Executive) before&nbsp;Friday 14th August 2020.<br />\r\nKindly indicate the current/last salary on your CV.<br />\r\nWe do not charge any fee for receiving your CV or for interviewing<br />\r\nOnly candidates short-listed for interview will be contacted</p>\r\n', '2020-08-10');

-- --------------------------------------------------------

--
-- Table structure for table `job_seeker_registration`
--

CREATE TABLE `job_seeker_registration` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `firstname` tinytext NOT NULL,
  `lastname` tinytext NOT NULL,
  `email` varchar(100) NOT NULL,
  `phonenumber` int(11) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `profileimage` varchar(250) DEFAULT NULL,
  `password` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `job_seeker_registration`
--

INSERT INTO `job_seeker_registration` (`id`, `username`, `firstname`, `lastname`, `email`, `phonenumber`, `gender`, `profileimage`, `password`) VALUES
(41, 'esam', 'Elvis', 'meritei', 'sautetelvis4148@gmail.com', 768692323, 'male', '5f312fecb9e999.18257480.jpg', '$2y$10$3ZzETrflBzvU7jx3vSrMkebelS.ChSe2CAAIgl9qs/gC4HuSEsmZe'),
(42, 'njoe', 'moses', 'kanai', 'kanaimoses@gmail.com', 768684343, 'male', '5f2bfd733f0b95.25461045.jpg', '$2y$10$5bTwgI2JYcX9ZJVRcD6PBeg/3U/G7.k19dp0ajUvVDKPZkccSCOca'),
(43, 'sam', 'peter', 'sautet', 'peter@gmail.com', 768692323, 'male', '5f2c3927436f74.30797569.jpg', '$2y$10$DfHKQ/orxEuXcWLuYUu0s.dwnv1epnVHKqX3AQpEnYGj9ue61LG2a'),
(44, 'kush', 'mann', 'mannit', 'mankush@gmail.com', 768692323, 'male', '5f2c0249185f53.06766921.jpg', '$2y$10$ELMzpXpQSgMPoN7zG2ViA.ifyAFEchuibYTxbY8ST67Sd0Y9U725y'),
(45, 'kahush', 'peter', 'Ngige', 'peter@gmail.com', 768692323, 'male', '5f311001e202d4.07987365.jpg', '$2y$10$jgVZMdHo16tYGDs1bs4g4.EgBkPYREKRo16E8fl4ECi/HzwKomXQy'),
(46, 'pishta', 'kinyanjui', 'peter', 'peter@gmail.com', 726028842, 'male', NULL, '$2y$10$KM1/YuVDzssYCpcLa.7mu.spgvM0O2anyplql/2jPnJHzzHTNoD/W'),
(47, 'vishnu', 'Erick', 'kasaine', 'eric@gmail.com', 7889765, 'male', '5f313f1f41ea35.86938124.jpg', '$2y$10$58cUZayeRJujz5KAyFG76.4T3oiH82HhK1/5apCQbTyn6fXtxbMDS');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `companyregistration`
--
ALTER TABLE `companyregistration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobapplicantion`
--
ALTER TABLE `jobapplicantion`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobpost`
--
ALTER TABLE `jobpost`
  ADD PRIMARY KEY (`id`),
  ADD KEY `company_id` (`company_id`);

--
-- Indexes for table `job_seeker_registration`
--
ALTER TABLE `job_seeker_registration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `companyregistration`
--
ALTER TABLE `companyregistration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `jobapplicantion`
--
ALTER TABLE `jobapplicantion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=444;

--
-- AUTO_INCREMENT for table `jobpost`
--
ALTER TABLE `jobpost`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=111;

--
-- AUTO_INCREMENT for table `job_seeker_registration`
--
ALTER TABLE `job_seeker_registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `jobpost`
--
ALTER TABLE `jobpost`
  ADD CONSTRAINT `jobpost_ibfk_1` FOREIGN KEY (`company_id`) REFERENCES `companyregistration` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
