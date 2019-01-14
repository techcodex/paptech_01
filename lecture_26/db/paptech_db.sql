-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 14, 2019 at 09:36 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `paptech_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` int(11) NOT NULL,
  `country_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `country_name`) VALUES
(1, 'Andorra'),
(2, 'United Arab Emirates'),
(3, 'Afghanistan'),
(4, 'Antigua and Barbuda'),
(5, 'Anguilla'),
(6, 'Albania'),
(7, 'Armenia'),
(8, 'Angola'),
(9, 'Argentina'),
(10, 'American Samoa'),
(11, 'Austria'),
(12, 'Australia'),
(13, 'Aruba'),
(14, 'Aland Islands'),
(15, 'Azerbaijan'),
(16, 'Bosnia and Herzegovina'),
(17, 'Barbados'),
(18, 'Bangladesh'),
(19, 'Belgium'),
(20, 'Burkina Faso'),
(21, 'Bulgaria'),
(22, 'Bahrain'),
(23, 'Burundi'),
(24, 'Benin'),
(25, 'Saint Barthelemy'),
(26, 'Bermuda'),
(27, 'Brunei'),
(28, 'Bolivia'),
(29, 'Bonaire, Saint Eustatius and Saba '),
(30, 'Brazil'),
(31, 'Bahamas'),
(32, 'Bhutan'),
(33, 'Botswana'),
(34, 'Belarus'),
(35, 'Belize'),
(36, 'Canada'),
(37, 'Cocos Islands'),
(38, 'Democratic Republic of the Congo'),
(39, 'Central African Republic'),
(40, 'Republic of the Congo'),
(41, 'Switzerland'),
(42, 'Ivory Coast'),
(43, 'Cook Islands'),
(44, 'Chile'),
(45, 'Cameroon'),
(46, 'China'),
(47, 'Colombia'),
(48, 'Costa Rica'),
(49, 'Cuba'),
(50, 'Cape Verde'),
(51, 'Curacao'),
(52, 'Christmas Island'),
(53, 'Cyprus'),
(54, 'Czech Republic'),
(55, 'Germany'),
(56, 'Djibouti'),
(57, 'Denmark'),
(58, 'Dominica'),
(59, 'Dominican Republic'),
(60, 'Algeria'),
(61, 'Ecuador'),
(62, 'Estonia'),
(63, 'Egypt'),
(64, 'Western Sahara'),
(65, 'Eritrea'),
(66, 'Spain'),
(67, 'Ethiopia'),
(68, 'Finland'),
(69, 'Fiji'),
(70, 'Falkland Islands'),
(71, 'Micronesia'),
(72, 'Faroe Islands'),
(73, 'France'),
(74, 'Gabon'),
(75, 'United Kingdom'),
(76, 'Grenada'),
(77, 'Georgia'),
(78, 'French Guiana'),
(79, 'Guernsey'),
(80, 'Ghana'),
(81, 'Gibraltar'),
(82, 'Greenland'),
(83, 'Gambia'),
(84, 'Guinea'),
(85, 'Guadeloupe'),
(86, 'Equatorial Guinea'),
(87, 'Greece'),
(88, 'South Georgia and the South Sandwich Islands'),
(89, 'Guatemala'),
(90, 'Guam'),
(91, 'Guinea-Bissau'),
(92, 'Guyana'),
(93, 'Hong Kong'),
(94, 'Honduras'),
(95, 'Croatia'),
(96, 'Haiti'),
(97, 'Hungary'),
(98, 'Indonesia'),
(99, 'Ireland'),
(100, 'Israel'),
(101, 'Isle of Man'),
(102, 'India'),
(103, 'Iraq'),
(104, 'Iran'),
(105, 'Iceland'),
(106, 'Italy'),
(107, 'Jersey'),
(108, 'Jamaica'),
(109, 'Jordan'),
(110, 'Japan'),
(111, 'Kenya'),
(112, 'Kyrgyzstan'),
(113, 'Cambodia'),
(114, 'Kiribati'),
(115, 'Comoros'),
(116, 'Saint Kitts and Nevis'),
(117, 'North Korea'),
(118, 'South Korea'),
(119, 'Kuwait'),
(120, 'Cayman Islands'),
(121, 'Kazakhstan'),
(122, 'Laos'),
(123, 'Lebanon'),
(124, 'Saint Lucia'),
(125, 'Liechtenstein'),
(126, 'Sri Lanka'),
(127, 'Liberia'),
(128, 'Lesotho'),
(129, 'Lithuania'),
(130, 'Luxembourg'),
(131, 'Latvia'),
(132, 'Libya'),
(133, 'Morocco'),
(134, 'Monaco'),
(135, 'Moldova'),
(136, 'Montenegro'),
(137, 'Saint Martin'),
(138, 'Madagascar'),
(139, 'Marshall Islands'),
(140, 'Macedonia'),
(141, 'Mali'),
(142, 'Myanmar'),
(143, 'Mongolia'),
(144, 'Macao'),
(145, 'Northern Mariana Islands'),
(146, 'Martinique'),
(147, 'Mauritania'),
(148, 'Montserrat'),
(149, 'Malta'),
(150, 'Mauritius'),
(151, 'Maldives'),
(152, 'Malawi'),
(153, 'Mexico'),
(154, 'Malaysia'),
(155, 'Mozambique'),
(156, 'Namibia'),
(157, 'New Caledonia'),
(158, 'Niger'),
(159, 'Norfolk Island'),
(160, 'Nigeria'),
(161, 'Nicaragua'),
(162, 'Netherlands'),
(163, 'Norway'),
(164, 'Nepal'),
(165, 'Nauru'),
(166, 'Niue'),
(167, 'New Zealand'),
(168, 'Oman'),
(169, 'Panama'),
(170, 'Peru'),
(171, 'French Polynesia'),
(172, 'Papua New Guinea'),
(173, 'Philippines'),
(174, 'Pakistan'),
(175, 'Poland'),
(176, 'Saint Pierre and Miquelon'),
(177, 'Pitcairn'),
(178, 'Puerto Rico'),
(179, 'Palestinian Territory'),
(180, 'Portugal'),
(181, 'Palau'),
(182, 'Paraguay'),
(183, 'Qatar'),
(184, 'Reunion'),
(185, 'Romania'),
(186, 'Serbia'),
(187, 'Russia'),
(188, 'Rwanda'),
(189, 'Saudi Arabia'),
(190, 'Solomon Islands'),
(191, 'Seychelles'),
(192, 'Sudan'),
(193, 'Sweden'),
(194, 'Singapore'),
(195, 'Saint Helena'),
(196, 'Slovenia'),
(197, 'Svalbard and Jan Mayen'),
(198, 'Slovakia'),
(199, 'Sierra Leone'),
(200, 'San Marino'),
(201, 'Senegal'),
(202, 'Somalia'),
(203, 'Suriname'),
(204, 'South Sudan'),
(205, 'Sao Tome and Principe'),
(206, 'El Salvador'),
(207, 'Sint Maarten'),
(208, 'Syria'),
(209, 'Swaziland'),
(210, 'Turks and Caicos Islands'),
(211, 'Chad'),
(212, 'French Southern Territories'),
(213, 'Togo'),
(214, 'Thailand'),
(215, 'Tajikistan'),
(216, 'East Timor'),
(217, 'Turkmenistan'),
(218, 'Tunisia'),
(219, 'Tonga'),
(220, 'Turkey'),
(221, 'Trinidad and Tobago'),
(222, 'Tuvalu'),
(223, 'Taiwan'),
(224, 'Tanzania'),
(225, 'Ukraine'),
(226, 'Uganda'),
(227, 'United States'),
(228, 'Uruguay'),
(229, 'Uzbekistan'),
(230, 'Vatican'),
(231, 'Saint Vincent and the Grenadines'),
(232, 'Venezuela'),
(233, 'British Virgin Islands'),
(234, 'U.S. Virgin Islands'),
(235, 'Vietnam'),
(236, 'Vanuatu'),
(237, 'Wallis and Futuna'),
(238, 'Samoa'),
(239, 'Kosovo'),
(240, 'Yemen'),
(241, 'Mayotte'),
(242, 'South Africa'),
(243, 'Zambia'),
(244, 'Zimbabwe');

-- --------------------------------------------------------

--
-- Table structure for table `userprofiles`
--

CREATE TABLE `userprofiles` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `first_name` varchar(200) DEFAULT NULL,
  `middle_name` varchar(200) DEFAULT NULL,
  `last_name` varchar(200) DEFAULT NULL,
  `contact_number` char(16) DEFAULT NULL,
  `gender` char(6) DEFAULT NULL,
  `date_of_birth` char(11) DEFAULT NULL,
  `street_address` text,
  `city_id` int(11) DEFAULT '0',
  `state_id` int(11) DEFAULT '0',
  `country_id` int(11) NOT NULL DEFAULT '0',
  `profile_image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userprofiles`
--

INSERT INTO `userprofiles` (`id`, `user_id`, `first_name`, `middle_name`, `last_name`, `contact_number`, `gender`, `date_of_birth`, `street_address`, `city_id`, `state_id`, `country_id`, `profile_image`) VALUES
(3, 18, 'Muhammad ', 'sohaib', 'amjad', '923237556100', 'female', NULL, 'city housing', 0, 0, 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `user_name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` char(40) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `signup_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_name`, `email`, `password`, `status`, `signup_date`) VALUES
(2, 'sohaib', 'sohaib@yahoo.com', '4cc19aaff82f60ac4097f935ab4a06ad4f0891cc', 1, '0000-00-00 00:00:00'),
(6, 'waseem', 'waseem@yahoo.com', '4cc19aaff82f60ac4097f935ab4a06ad4f0891cc', 1, '0000-00-00 00:00:00'),
(7, 'gulfam', 'gulfam@yahoo.com', 'd7b5075450025356077fd9895f43790692793ab9', 1, '0000-00-00 00:00:00'),
(8, 'maahin', 'mahin@yahoo.com', '558f27424645db2c5cb1e8efd8e3f764e43b702f', 1, '0000-00-00 00:00:00'),
(10, 'gulfam1', 'gulfam1@yahoo.com', '4cc19aaff82f60ac4097f935ab4a06ad4f0891cc', 1, '2019-01-07 08:29:32'),
(11, 'gulfam2', 'gulfam2@yahoo.com', '5fa339bbbb1eeaced3b52e54f44576aaf0d77d96', 1, '2019-01-07 08:30:34'),
(12, 'gulfam3', 'gulfam3@yahoo.com', '4cc19aaff82f60ac4097f935ab4a06ad4f0891cc', 1, '2019-01-07 08:31:09'),
(13, 'gulfam4', 'gulfam4@yahoo.com', '4cc19aaff82f60ac4097f935ab4a06ad4f0891cc', 1, '2019-01-07 12:31:50'),
(14, 'gulfam5', 'gulfam5@yahoo.com', '4cc19aaff82f60ac4097f935ab4a06ad4f0891cc', 1, '2019-01-07 08:32:32'),
(15, 'gulfam6', 'gulfam6@yahoo.com', '4cc19aaff82f60ac4097f935ab4a06ad4f0891cc', 1, '2019-01-07 08:33:08'),
(16, 'sohaib1', 'sohaib1@yahoo.com', '4cc19aaff82f60ac4097f935ab4a06ad4f0891cc', 1, '2019-01-08 12:25:57'),
(17, 'sohaib2', 'sohaib2@yahoo.com', '4cc19aaff82f60ac4097f935ab4a06ad4f0891cc', 1, '2019-01-08 12:26:14'),
(18, 'sohaib3', 'sohaib3@yahoo.com', '4cc19aaff82f60ac4097f935ab4a06ad4f0891cc', 1, '2019-01-08 12:28:30');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userprofiles`
--
ALTER TABLE `userprofiles`
  ADD PRIMARY KEY (`id`,`user_id`),
  ADD KEY `country_id` (`country_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_name` (`user_name`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=245;

--
-- AUTO_INCREMENT for table `userprofiles`
--
ALTER TABLE `userprofiles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
