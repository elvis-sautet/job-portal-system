-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 28, 2020 at 09:44 PM
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
(31, 'DURA COURT', 'JUJA', 'Dura@gmail.com', '5f1f35b0863466.75113502.png', '$2y$10$U/pjUWgi1ikFdv.r5JAh0OOfCgtjl0A430JDbFsqEzhXEAs1rNcwW'),
(32, 'ZUSHA ltd', 'nairobi', 'zusha@gmail.com', NULL, '$2y$10$ccv3BZHeyW8UmKvcq6DqeOtEWJJ7Ah0BSE.aYH56PicY/yl8CiYNu'),
(33, 'TIKMA', 'Nairobi', 'tikma@gmail.com', NULL, '$2y$10$DYw3A31FbiE1ny75kKpSOuKC.YUxnG/LbVBlgPsWfgRy3Yj35DxPi'),
(34, 'VISHNU RECTREM', 'THIKA', 'vishnu@gmail.com', '5f1f33e17573a2.65065539.png', '$2y$10$7PsM9NvN3lTq/i8bm7UL5.Ipef0TTKFsDuvHostsH8Q/HKPWDMnp6');

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
  `mobilenumber` int(11) NOT NULL,
  `qualification` varchar(50) NOT NULL,
  `experience` varchar(50) NOT NULL,
  `salaryexpected` int(11) NOT NULL,
  `coverletter` longtext NOT NULL,
  `CV` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jobapplicantion`
--

INSERT INTO `jobapplicantion` (`id`, `companyname`, `Jobname`, `firstname`, `lastname`, `mobilenumber`, `qualification`, `experience`, `salaryexpected`, `coverletter`, `CV`) VALUES
(247, 'TIKMA', 'Truck/Diesel Mechanic', 'Elviss', 'meritei', 768692323, 'Bachelor', '4 years', 20000, 'The Truck/ Diesel Mechanic Is Responsible To Ensure The Successful And High Quality Repair And Maintenance Of Small And Heavy Vehicles And Equipment Associated With It.', 'Elviss5f1f371b52bf87.55393820.txt'),
(248, 'TIKMA', 'Truck/Diesel Mechanic', 'Elviss', 'meritei', 768692323, 'Bachelor', '1 year', 12000, 'sdfsdf', 'Elviss5f1f38462f9091.45690753.docx');

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
(72, 34, 'Technical Procurement Manager - Mombasa', 'VISHNU RECTREM', 'Mombasa', 'fulltime', 'confidential', '<p>Job Summary</p>\r\n\r\n<p>Our client in the engineering industry is currently looking to hire a Technical Procurement Manager to be based in Mombasa.</p>\r\n\r\n<ul>\r\n	<li>Minimum Qualification:&nbsp;Bachelor</li>\r\n	<li>Experience Level:&nbsp;Management level</li>\r\n	<li>Experience Length:&nbsp;10 years</li>\r\n</ul>\r\n', '<p>Job Description</p>\r\n\r\n<p>ROLES &amp; RESPONSIBILITIES<br />\r\n&bull; Clear cut sourcing strategies formulation<br />\r\n&bull; Technical knowledge on products/raw materials like steel, pumps, motors, spares, paints, consumables, etc.,<br />\r\n&bull; Maintaining global/local vendors data base<br />\r\n&bull; P.O. terms formulation to the advantage of the Company<br />\r\n&bull; Functional metrics to reduce expenses and improve efficiency<br />\r\n&bull; Collaborate with key persons to ensure the clarity on the specifications and delivery terms.<br />\r\n&bull; Risk analysis &amp; management<br />\r\n&bull; Efficiency in cost control and Budget Management.<br />\r\n&bull; MIS on procurement reports.</p>\r\n\r\n<p>&nbsp; Development &amp; review of procurement policies, plans, strategies and procedures</p>\r\n\r\n<p>&nbsp; Provide technical advice on matters of the entire procurement processes</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>QUALIFICATIONS</p>\r\n\r\n<p>&bull; Bachelor Degree in Mechanical Engineering or a similar field<br />\r\n&bull; Must have a minimum of 10 years&rsquo; and above experience in Procurement in the engineering industry<br />\r\n&bull; Should be computer savvy and be able to work on ERP, SAP &amp; MS office<br />\r\n&bull; Excellent Communication and Negotiation Skills<br />\r\n&bull; Ability to handle &amp; manage a team<br />\r\n&bull; Great intra-department coordination</p>\r\n', '2020-07-27'),
(73, 34, 'Infrastructure Engineer job opening', 'VISHNU RECTREM', 'Nairobi', 'fulltime', 'confidential', '<p>Job Summary</p>\r\n\r\n<p>We are looking for a infrastructure engineer who will be responsible for designing, building, deploying and maintaining IT Infrastructure using the latest technology.His job will include working with internet connections, cabling, virtualization platforms and storage area networks. Engineers interact with all vendors on behalf of their organizations concerning their infrastructure. Due to the nature of their responsibilities, IT infrastructure engineers need to have excellent written and spoken communication skills. A network infrastructure engineer should be ready to report for work round-the-clock throughout the year as well as in different locations. Infrastructure engineers have the flexibility of being able to work remotely, which since global connections are predicted to reach 3.5 billion by 2023, means that the demand for remote engineers will increase as businesses continue to prioritize globalization.</p>\r\n\r\n<ul>\r\n	<li>Minimum Qualification:&nbsp;Bachelor</li>\r\n	<li>Experience Level:&nbsp;Mid level</li>\r\n	<li>Experience Length:&nbsp;3 years</li>\r\n</ul>\r\n', '<p>Job Description</p>\r\n\r\n<p>The infrastructure engineer job description includes<br />\r\n&bull;&nbsp;&nbsp;&nbsp; Being responsible for performing several duties for their overall objective of maintaining the infrastructure of an organization.<br />\r\n&bull;&nbsp;&nbsp;&nbsp; Design solutions from mission needs and assess current systems to secure the best practices and balance by complying with federal policies and procedures.<br />\r\n&bull;&nbsp;&nbsp;&nbsp; Manage and maintain broad area virtual private networks (VPN).<br />\r\n&bull;&nbsp;&nbsp;&nbsp; Administration of the Middleware application server, such as Oracle Weblogic server and IBM Web Sphere server and automated workflow tools.<br />\r\n&bull;&nbsp;&nbsp;&nbsp; Monitoring administration of Windows, Linux or Mac OS Operating Systems and are conversant with systems administration.<br />\r\n&bull;&nbsp;&nbsp;&nbsp; Troubleshooting applications and providing J2EE application deployment.<br />\r\n&bull;&nbsp;&nbsp;&nbsp; Partnering with the application development team on application building, implementation and fixing of issues.<br />\r\n&bull;&nbsp;&nbsp;&nbsp; Installing infrastructure components on networks and servers, ensuring that the technical performance aspects in the infrastructure environment are optimized, including database, network, and application server performance.<br />\r\n&bull;&nbsp;&nbsp;&nbsp; Applying, and enforcing processes for promoting all infrastructure components from the development environment to the environments of testing, demonstrating, and generating.<br />\r\n&bull;&nbsp;&nbsp;&nbsp; Making sure that the infrastructure components are working in tandem and can be executed without compilation errors in various platforms and environments.<br />\r\n&bull;&nbsp;&nbsp;&nbsp; Managing host environment including web servers, database servers,VMWare,Cisco,Citrix,SAN and blades.<br />\r\n&bull;&nbsp;&nbsp;&nbsp; Collaborating and participating in activities to share and integrate programs<br />\r\n&bull;&nbsp;&nbsp;&nbsp; Fixing any network connectivity issues, ensuring smooth flow of data and voice in the organization<br />\r\n<br />\r\nQualified candidates are required to send their updated CV.</p>\r\n', '2020-07-27'),
(74, 34, 'Debt Collector Job Opening', 'VISHNU RECTREM', 'Nairobi', 'fulltime', 'confidential', '<p>Job Summary</p>\r\n\r\n<p>Our debt collection agency specializes in delinquent business and personal loan accounts. As a debt collector, you&#39;ll help clients recover assets as quickly as possible, reducing cash-flow issues and allowing for smooth business operation. The ideal candidate will be excited about the opportunity to help both lenders and borrowers reach a mutually agreed upon payment plan to settle existing past due accounts. As a debt collection specialist you&#39;ll work with debtors on a daily basis, negotiating with clients to come to a payment plan suitable for all parties. We&#39;re looking for someone who is persistent in the face of obstacles and difficult clients.</p>\r\n\r\n<ul>\r\n	<li>Minimum Qualification:&nbsp;Diploma</li>\r\n	<li>Experience Level:&nbsp;Mid level</li>\r\n	<li>Experience Length:&nbsp;2 years</li>\r\n</ul>\r\n', '<p>Job Description</p>\r\n\r\n<p>Debt Collector responsibilities and duties<br />\r\n&bull;&nbsp;&nbsp;&nbsp; Manage multiple accounts for delinquency and debt collection efforts<br />\r\n&bull;&nbsp;&nbsp;&nbsp; Locate and contact debtors about outstanding obligations<br />\r\n&bull;&nbsp;&nbsp;&nbsp; Send out past due notices for delinquent accounts or for missed settlement payments<br />\r\n&bull;&nbsp;&nbsp;&nbsp; Investigate and resolve complaints regarding incorrect debt collection attempts<br />\r\n&bull;&nbsp;&nbsp;&nbsp; Report address changes and maintain files regarding debtors for correct and current contact information<br />\r\n&bull;&nbsp;&nbsp;&nbsp; Compile reports on delinquent accounts and report missed payments to credit bureaus<br />\r\n<br />\r\nQualifications and skills<br />\r\n&bull;&nbsp;&nbsp;&nbsp; Intermediate skills using MS Office and database software<br />\r\n&bull;&nbsp;&nbsp;&nbsp; Demonstrated skill in negotiating and resolving conflicts<br />\r\n&bull;&nbsp;&nbsp;&nbsp; Ability to speak persuasively and listen critically<br />\r\n&bull;&nbsp;&nbsp;&nbsp; Ability to multi-task and meet tight deadlines<br />\r\n&bull;&nbsp;&nbsp;&nbsp; Prioritize multiple tasks to ensure the successful completion of each debt collection attempt<br />\r\n&bull;&nbsp;&nbsp;&nbsp; Call center experience preferred<br />\r\n<br />\r\nQualified candidates are asked to send their updated CV.</p>\r\n', '2020-07-27'),
(75, 31, 'Database Administrator', 'DURA COURT', 'Nairobi', 'fulltime', 'confidential', '<p>Job Summary</p>\r\n\r\n<p>Our consulting firm needs a reliable Database Administrator to join our team. We&#39;re looking for a college graduate with journey-level skills and a desire to expand his or her skill set and experience. The ideal candidate will be able to function effectively with limited oversight and moderate on-site training. He or she should understand the importance of database integrity in terms of both efficiency and security. Our team includes some of the brightest minds in the industry and we hope to add you to our roster. We offer excellent benefits and a competitive salary as well as paid sick time and vacation.</p>\r\n\r\n<ul>\r\n	<li>Minimum Qualification:&nbsp;Bachelor</li>\r\n	<li>Experience Level:&nbsp;Mid level</li>\r\n	<li>Experience Length:&nbsp;2 years</li>\r\n</ul>\r\n', '<p>Job Description</p>\r\n\r\n<p>Job Roles and Responsibilities<br />\r\n&bull;&nbsp;&nbsp;&nbsp; Install server software<br />\r\n&bull;&nbsp;&nbsp;&nbsp; Configure database servers<br />\r\n&bull;&nbsp;&nbsp;&nbsp; Monitor and maintain system health and security<br />\r\n&bull;&nbsp;&nbsp;&nbsp; Design backup processes for server and associated data<br />\r\n&bull;&nbsp;&nbsp;&nbsp; Create accounts for all users and assign security levels<br />\r\n&bull;&nbsp;&nbsp;&nbsp; Establish a disaster recovery protocol<br />\r\n&bull;&nbsp;&nbsp;&nbsp; Provide end-to-end technical support and problem resolution<br />\r\n&bull;&nbsp;&nbsp;&nbsp; Schedule and perform regular server maintenance<br />\r\n&bull;&nbsp;&nbsp;&nbsp; Create database management procedures<br />\r\n&bull;&nbsp;&nbsp;&nbsp; Evaluate data analysis models and procedures<br />\r\n&bull;&nbsp;&nbsp;&nbsp; Participate in company&#39;s cross-training program<br />\r\n<br />\r\nDatabase Administrator skills<br />\r\n&bull;&nbsp;&nbsp;&nbsp; Bachelor&#39;s Degree in Computer Science or Computer Engineering<br />\r\n&bull;&nbsp;&nbsp;&nbsp; 2+ years&#39; professional experience or internship<br />\r\n&bull;&nbsp;&nbsp;&nbsp; Advanced knowledge of database structure and theory<br />\r\n&bull;&nbsp;&nbsp;&nbsp; Experience with MySQL and MSSQL<br />\r\n&bull;&nbsp;&nbsp;&nbsp; Basic understanding of disaster recovery and database backup procedures<br />\r\n&bull;&nbsp;&nbsp;&nbsp; Familiarity with reporting tools<br />\r\n&bull;&nbsp;&nbsp;&nbsp; PostgreSQL certification preferred<br />\r\n&bull;&nbsp;&nbsp;&nbsp; Ability to work independently with minimal supervision and assistance</p>\r\n', '2020-07-27'),
(76, 31, 'Data Analyst', 'DURA COURT', 'Nairobi', 'fulltime', 'confidential', '<p>Job Summary</p>\r\n\r\n<p>Our growing technology firm is looking for an experienced Data Analyst who is able to turn project requirements into custom-formatted data reports. The ideal candidate for this position is able to do complete life cycle data generation and outline critical information for each Project Manager. We also need someone who is able to analyze business procedures and recommend specific types of data that can be used to improve upon them.</p>\r\n\r\n<ul>\r\n	<li>Minimum Qualification:&nbsp;Bachelor</li>\r\n	<li>Experience Level:&nbsp;Mid level</li>\r\n	<li>Experience Length:&nbsp;2 years</li>\r\n</ul>\r\n', '<p>Job Description</p>\r\n\r\n<p>Responsibilities and duties<br />\r\n&bull;&nbsp;&nbsp;&nbsp; Use statistical methods to analyze data and generate useful business reports<br />\r\n&bull;&nbsp;&nbsp;&nbsp; Work with management team to create a prioritized list of needs for each business segment<br />\r\n&bull;&nbsp;&nbsp;&nbsp; Identify and recommend new ways to save money by streamlining business processes<br />\r\n&bull;&nbsp;&nbsp;&nbsp; Use data to create models that depict trends in the customer base and the consumer population as a whole<br />\r\n&bull;&nbsp;&nbsp;&nbsp; Work with departmental managers to outline the specific data needs for each business method analysis project<br />\r\n<br />\r\nData Analyst qualifications and skills<br />\r\n&bull;&nbsp;&nbsp;&nbsp; Bachelor&#39;s Degree in Mathematics or Computer Engineering<br />\r\n&bull;&nbsp;&nbsp;&nbsp; 2+ years&#39; Data mining experience<br />\r\n&bull;&nbsp;&nbsp;&nbsp; 4+ years in a data analyst role<br />\r\n&bull;&nbsp;&nbsp;&nbsp; Ability to collaborate effectively and work as part of the team<br />\r\n&bull;&nbsp;&nbsp;&nbsp; Strong attention to Detail<br />\r\n&bull;&nbsp;&nbsp;&nbsp; Experience with MySQL and MSSQL<br />\r\n&bull;&nbsp;&nbsp;&nbsp; Basic Understanding of disaster recovery and database backup procedurers<br />\r\n&bull;&nbsp;&nbsp;&nbsp; Familiarity with reporting procedurers<br />\r\n&bull;&nbsp;&nbsp;&nbsp; Ability to work independently with minimal supervision and assistance</p>\r\n', '2020-07-27'),
(77, 33, 'Summer Flower Supervisor', 'TIKMA', 'Nairobi', 'fulltime', 'confidential', '<p>Job Summary</p>\r\n\r\n<p>Applications are invited from qualified persons for the above vacant position.</p>\r\n\r\n<ul>\r\n	<li>Minimum Qualification:&nbsp;Diploma</li>\r\n	<li>Experience Level:&nbsp;Mid level</li>\r\n	<li>Experience Length:&nbsp;3 years</li>\r\n</ul>\r\n', '<p>Job Description</p>\r\n\r\n<p>IMPORTANT<br />\r\nOnly applications received via&nbsp;BrighterMonday&nbsp;will be considered. Any phone calls, emails or other types of canvassing may lead to your application being disqualified.<br />\r\nPlease do not apply if you do not meet the minimum requirements set out below.</p>\r\n\r\n<p>Responsibilities for the Summer Flower Supervisor<br />\r\n<br />\r\nLabour Management<br />\r\n&bull;&nbsp;&nbsp;&nbsp; Responsible in recruiting new staff.<br />\r\n&bull;&nbsp;&nbsp;&nbsp; Take an active role in training and assessment of staff.<br />\r\n&bull;&nbsp;&nbsp;&nbsp; Take an active role in staff motivation, creating a conducive work environment and actively participating in conflict resolution.<br />\r\n&bull;&nbsp;&nbsp;&nbsp; Collaborating with managers, team leaders and staff in work planning, implementation, monitoring, evaluating and follow up of set targets.<br />\r\n&bull;&nbsp;&nbsp;&nbsp; Take an active role in staff appraisals in fair and transparent manner.<br />\r\n<br />\r\nCrop Management<br />\r\n&bull;&nbsp;&nbsp;&nbsp; Ensure that appropriate crop husbandry practices are efficiently carried out and within set timeframe<br />\r\n&bull;&nbsp;&nbsp;&nbsp; Ensure cut point rules are strictly followed and adhered to.<br />\r\n&bull;&nbsp;&nbsp;&nbsp; Organizing planting and taking care of young crop.<br />\r\n&bull;&nbsp;&nbsp;&nbsp; Ensure irrigation is proper and the systems are functional as per set program.<br />\r\n&bull;&nbsp;&nbsp;&nbsp; Monitor growth habit of the crop in various weather situations and report any abnormalities.<br />\r\n<br />\r\nQuality Management and Production<br />\r\n&bull;&nbsp;&nbsp;&nbsp; Ensure 5 harvesting commandments is followed and adhered to handling proper netting and minimal damages.<br />\r\n&bull;&nbsp;&nbsp;&nbsp; Carry out weekly and predictions with less margin of error<br />\r\n&bull;&nbsp;&nbsp;&nbsp; Proper netting and minimal damages.<br />\r\n&bull;&nbsp;&nbsp;&nbsp; Carry out weekly and predictions with less margin of error<br />\r\n<br />\r\nHygiene<br />\r\n&bull;&nbsp;&nbsp;&nbsp; Ensure all working tools are strictly followed especially secateurs following the SOP in place.<br />\r\n&bull;&nbsp;&nbsp;&nbsp; Ensure the greenhouse is clean both inside and outside and all items are properly arranged and all unwanted items removed.<br />\r\n<br />\r\nPest and Diseases Reporting<br />\r\n&bull;&nbsp;&nbsp;&nbsp; Do crop walk in liaison with scouts and report to management of any pest or disease for appropriate action<br />\r\n&bull;&nbsp;&nbsp;&nbsp; In case of any pest or disease, report the action taken following the SOPs in place.<br />\r\n<br />\r\nHealth and Safety<br />\r\n&bull;&nbsp;&nbsp;&nbsp; Ensure safe working environment by making sure health and safety regulations are followed and adhered to.<br />\r\n&bull;&nbsp;&nbsp;&nbsp; Also report any worn out or torn PPEs for repairs or to management for replacement.<br />\r\n&bull;&nbsp;&nbsp;&nbsp; Reporting on any damages to the green house, to maintenance team or to management for repairs. Ensure all working tools are in good working condition and are repaired in time.<br />\r\n&bull;&nbsp;&nbsp;&nbsp; Any other duties as may be assigned from time to time by the immediate manager or senior management.<br />\r\n<br />\r\nCV&#39;s to sent via Apply Now Button.</p>\r\n', '2020-07-27'),
(78, 33, 'Truck/Diesel Mechanic', 'TIKMA', 'Eldoret', 'fulltime', 'confidential', '<p>Job Summary</p>\r\n\r\n<p>The Truck/ Diesel Mechanic is responsible to ensure the successful and high quality repair and maintenance of small and heavy vehicles and equipment associated with it.</p>\r\n\r\n<ul>\r\n	<li>Minimum Qualification:&nbsp;Diploma</li>\r\n	<li>Experience Level:&nbsp;Mid level</li>\r\n	<li>Experience Length:&nbsp;2 years</li>\r\n</ul>\r\n', '<p>Job Description</p>\r\n\r\n<p>Responsibilities:<br />\r\n&bull; Performs routine checks and maintenance of the small and heavy vehicle / heavy equipment.<br />\r\n&bull; Provides preventative Maintenance and repairs to saloon cars, heavy trucks and performing inspections and safeties.<br />\r\n&bull; Carry out routine maintenance, service and repair on a variety of HGV of hydraulic systems, diesel engines, and air brake systems<br />\r\n&bull; Follow all relevant operational procedures and instructions so that work is carried out in a controlled and consistent manner.<br />\r\n&bull; Follow all relevant safety, and environmental control procedures and instructions &amp; maintain a safe and clean work area, and be able to perform in a fast paced environment.<br />\r\n<br />\r\nQualifications<br />\r\n&bull; Possess an appropriate and relevant qualification degree or diploma from a recognized institution.<br />\r\n&bull; Must be a certified Truck / Diesel mechanic.<br />\r\n&bull; Must have an automotive maintenance experience particularly in a heavy vehicles industry.<br />\r\n&bull; Possess a strong technical background and have excellent knowledge of effective quality control methods.<br />\r\n&bull; Possess a mature and conscientious approach to work.<br />\r\n&bull; High level of computer literacy is required.<br />\r\n&bull; Proven leadership skills in a diverse and multi-cultural environment.<br />\r\n&bull; Excellent English communication skills verbal and written are essential.<br />\r\n&bull; Be in possession of a clean criminal record and credit record.<br />\r\n<br />\r\nHow to Apply<br />\r\n<br />\r\nInterested and qualified persons are requested to submit their application letter, copies of professional certificates, testimonials and clearance certificates should be sent not later than&nbsp;30th July, 2020 at 5:00 p.m. to:<br />\r\n<br />\r\nOnly short-listed candidates will be contacted.</p>\r\n', '2020-07-27');

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
(41, 'esam', 'Elviss', 'meritei', 'sautetelvis4148@gmail.com', 768692323, 'male', '5f1f38c54ca8e5.83768969.png', '$2y$10$3ZzETrflBzvU7jx3vSrMkebelS.ChSe2CAAIgl9qs/gC4HuSEsmZe');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `jobapplicantion`
--
ALTER TABLE `jobapplicantion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=249;

--
-- AUTO_INCREMENT for table `jobpost`
--
ALTER TABLE `jobpost`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT for table `job_seeker_registration`
--
ALTER TABLE `job_seeker_registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

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
