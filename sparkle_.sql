-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 17, 2016 at 06:05 AM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 7.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sparkle_`
--

-- --------------------------------------------------------

--
-- Table structure for table `activities`
--

CREATE TABLE `activities` (
  `ID` int(11) NOT NULL,
  `TITLE_` varchar(200) NOT NULL,
  `BRIEF_` text NOT NULL,
  `DET_PATH` varchar(100) NOT NULL,
  `PICTURE_PATH` varchar(100) NOT NULL,
  `DATE_OF_ACTIVITY` varchar(15) NOT NULL,
  `DATE_` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `STATUS_` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `activities`
--

INSERT INTO `activities` (`ID`, `TITLE_`, `BRIEF_`, `DET_PATH`, `PICTURE_PATH`, `DATE_OF_ACTIVITY`, `DATE_`, `STATUS_`) VALUES
(1, 'Final Exams 2016 are on the on the way', 'Amrapali Website is now re-engineered in a new architecture as per the modern trends and standards of the World Wide Web. Combination of MVC & Bootstrap technology endow with new heights to our website, which ensures secure, more reliable, strong development environment and embedded with smart devices compatibility', '1.docx', '1.jpg', '2016-05-16', '2016-05-16 04:45:31', 0),
(2, 'Happy Holi', 'Amrapali Website is now re-engineered in a new architecture as per the modern trends and standards of the World Wide Web. Combination of MVC & Bootstrap technology endow with new heights to our website, which ensures secure, more reliable, strong development environment and embedded with smart devices compatibility.', '2.docx', '2.jpg', '2016-05-16', '2016-05-16 04:46:27', 0),
(3, 'Summer Vacation from Mid of May 2016 starts', 'Have Presentable Information platform.\r\nResponsive Web Architecture which enables website and all panels to all the smart devices.\r\nSEO enabled Architecture.\r\nLight weight architecture.\r\nPlug n play preferences to new technologies.\r\nInteractive admin panel is embedded for easy and disciplined handling.\r\nDynamic Faculty Panel which provides easy addition & updating.\r\nDynamic News & Event Panel which provides easy handling of latest & archive news feeding and view.\r\nDynamic google Photo/ video panel which provides easy & secure uploading and easy navigation.\r\nDynamic navigational structure to present current and immediate events/ happenings.\r\nEasy and smooth navigation.\r\nStrict Disciplined standard is followed for enhanced Interaction and navigation.', '3.pdf', '3.jpg', '2016-05-16', '2016-05-16 05:04:45', 0),
(4, 'Session 22016-17 starts from 1st-Aug-2016', 'Have Presentable Information platform.\r\nResponsive Web Architecture which enables website and all panels to all the smart devices.\r\nSEO enabled Architecture.\r\nLight weight architecture.\r\nPlug n play preferences to new technologies.\r\nInteractive admin panel is embedded for easy and disciplined handling.\r\nDynamic Faculty Panel which provides easy addition & updating.\r\nDynamic News & Event Panel which provides easy handling of latest & archive news feeding and view.\r\nDynamic google Photo/ video panel which provides easy & secure uploading and easy navigation.\r\nDynamic navigational structure to present current and immediate events/ happenings.\r\nEasy and smooth navigation.\r\nStrict Disciplined standard is followed for enhanced Interaction and navigation\r\n', '4.docx', '4.jpg', '2016-05-17', '2016-05-16 05:05:52', 0);

-- --------------------------------------------------------

--
-- Table structure for table `bday_data`
--

CREATE TABLE `bday_data` (
  `BID` int(11) NOT NULL,
  `NAME_` varchar(100) NOT NULL,
  `DOB` varchar(25) NOT NULL,
  `PHOTO_` varchar(100) NOT NULL,
  `DOA` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `STATUS` int(11) NOT NULL,
  `USERNAME_` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `bday_data`
--

INSERT INTO `bday_data` (`BID`, `NAME_`, `DOB`, `PHOTO_`, `DOA`, `STATUS`, `USERNAME_`) VALUES
(3, 'Mukesh Joshi', '1981-11-28', 'x', '2016-04-29 07:32:21', 1, 'nitin'),
(4, 'cscvad', '2015-11-30', 'x', '2016-05-01 02:13:22', 1, 'nitin');

-- --------------------------------------------------------

--
-- Table structure for table `city_`
--

CREATE TABLE `city_` (
  `NAME_` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `city_`
--

INSERT INTO `city_` (`NAME_`) VALUES
('HALDWANI'),
('BAZPUR');

-- --------------------------------------------------------

--
-- Table structure for table `country_`
--

CREATE TABLE `country_` (
  `ABREV_` varchar(5) NOT NULL,
  `NAME_` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `country_`
--

INSERT INTO `country_` (`ABREV_`, `NAME_`) VALUES
('AF', 'Afghanistan'),
('AL', 'Albania'),
('DZ', 'Algeria'),
('AS', 'American Samoa'),
('AD', 'Andorra'),
('AO', 'Angola'),
('AI', 'Anguilla'),
('AQ', 'Antarctica'),
('AG', 'Antigua and Barbuda'),
('AR', 'Argentina'),
('AM', 'Armenia'),
('AW', 'Aruba'),
('AU', 'Australia'),
('AT', 'Austria'),
('AZ', 'Azerbaijan'),
('BS', 'Bahamas'),
('BH', 'Bahrain'),
('BD', 'Bangladesh'),
('BB', 'Barbados'),
('BY', 'Belarus'),
('BE', 'Belgium'),
('BZ', 'Belize'),
('BJ', 'Benin'),
('BM', 'Bermuda'),
('BT', 'Bhutan'),
('BO', 'Bolivia'),
('BA', 'Bosnia and Herzegovina'),
('BW', 'Botswana'),
('BV', 'Bouvet Island'),
('BR', 'Brazil'),
('BQ', 'British Antarctic Territo'),
('IO', 'British Indian Ocean Terr'),
('VG', 'British Virgin Islands'),
('BN', 'Brunei'),
('BG', 'Bulgaria'),
('BF', 'Burkina Faso'),
('BI', 'Burundi'),
('KH', 'Cambodia'),
('CM', 'Cameroon'),
('CA', 'Canada'),
('CT', 'Canton and Enderbury Isla'),
('CV', 'Cape Verde'),
('KY', 'Cayman Islands'),
('CF', 'Central African Republic'),
('TD', 'Chad'),
('CL', 'Chile'),
('CN', 'China'),
('CX', 'Christmas Island'),
('CC', 'Cocos [Keeling] Islands'),
('CO', 'Colombia'),
('KM', 'Comoros'),
('CG', 'Congo - Brazzaville'),
('CD', 'Congo - Kinshasa'),
('CK', 'Cook Islands'),
('CR', 'Costa Rica'),
('HR', 'Croatia'),
('CU', 'Cuba'),
('CY', 'Cyprus'),
('CZ', 'Czech Republic'),
('CI', 'C'),
('DK', 'Denmark'),
('DJ', 'Djibouti'),
('DM', 'Dominica'),
('DO', 'Dominican Republic'),
('NQ', 'Dronning Maud Land'),
('DD', 'East Germany'),
('EC', 'Ecuador'),
('EG', 'Egypt'),
('SV', 'El Salvador'),
('GQ', 'Equatorial Guinea'),
('ER', 'Eritrea'),
('EE', 'Estonia'),
('ET', 'Ethiopia'),
('FK', 'Falkland Islands'),
('FO', 'Faroe Islands'),
('FJ', 'Fiji'),
('FI', 'Finland'),
('FR', 'France'),
('GF', 'French Guiana'),
('PF', 'French Polynesia'),
('TF', 'French Southern Territori'),
('FQ', 'French Southern and Antar'),
('GA', 'Gabon'),
('GM', 'Gambia'),
('GE', 'Georgia'),
('DE', 'Germany'),
('GH', 'Ghana'),
('GI', 'Gibraltar'),
('GR', 'Greece'),
('GL', 'Greenland'),
('GD', 'Grenada'),
('GP', 'Guadeloupe'),
('GU', 'Guam'),
('GT', 'Guatemala'),
('GG', 'Guernsey'),
('GN', 'Guinea'),
('GW', 'Guinea-Bissau'),
('GY', 'Guyana'),
('HT', 'Haiti'),
('HM', 'Heard Island and McDonald'),
('HN', 'Honduras'),
('HK', 'Hong Kong SAR China'),
('HU', 'Hungary'),
('IS', 'Iceland'),
('IN', 'India'),
('ID', 'Indonesia'),
('IR', 'Iran'),
('IQ', 'Iraq'),
('IE', 'Ireland'),
('IM', 'Isle of Man'),
('IL', 'Israel'),
('IT', 'Italy'),
('JM', 'Jamaica'),
('JP', 'Japan'),
('JE', 'Jersey'),
('JT', 'Johnston Island'),
('JO', 'Jordan'),
('KZ', 'Kazakhstan'),
('KE', 'Kenya'),
('KI', 'Kiribati'),
('KW', 'Kuwait'),
('KG', 'Kyrgyzstan'),
('LA', 'Laos'),
('LV', 'Latvia'),
('LB', 'Lebanon'),
('LS', 'Lesotho'),
('LR', 'Liberia'),
('LY', 'Libya'),
('LI', 'Liechtenstein'),
('LT', 'Lithuania'),
('LU', 'Luxembourg'),
('MO', 'Macau SAR China'),
('MK', 'Macedonia'),
('MG', 'Madagascar'),
('MW', 'Malawi'),
('MY', 'Malaysia'),
('MV', 'Maldives'),
('ML', 'Mali'),
('MT', 'Malta'),
('MH', 'Marshall Islands'),
('MQ', 'Martinique'),
('MR', 'Mauritania'),
('MU', 'Mauritius'),
('YT', 'Mayotte'),
('FX', 'Metropolitan France'),
('MX', 'Mexico'),
('FM', 'Micronesia'),
('MI', 'Midway Islands'),
('MD', 'Moldova'),
('MC', 'Monaco'),
('MN', 'Mongolia'),
('ME', 'Montenegro'),
('MS', 'Montserrat'),
('MA', 'Morocco'),
('MZ', 'Mozambique'),
('MM', 'Myanmar [Burma]'),
('NA', 'Namibia'),
('NR', 'Nauru'),
('NP', 'Nepal'),
('NL', 'Netherlands'),
('AN', 'Netherlands Antilles'),
('NT', 'Neutral Zone'),
('NC', 'New Caledonia'),
('NZ', 'New Zealand'),
('NI', 'Nicaragua'),
('NE', 'Niger'),
('NG', 'Nigeria'),
('NU', 'Niue'),
('NF', 'Norfolk Island'),
('KP', 'North Korea'),
('VD', 'North Vietnam'),
('MP', 'Northern Mariana Islands'),
('NO', 'Norway'),
('OM', 'Oman'),
('PC', 'Pacific Islands Trust Ter'),
('PK', 'Pakistan'),
('PW', 'Palau'),
('PS', 'Palestinian Territories'),
('PA', 'Panama'),
('PZ', 'Panama Canal Zone'),
('PG', 'Papua New Guinea'),
('PY', 'Paraguay'),
('YD', 'People''s Democratic Repub'),
('PE', 'Peru'),
('PH', 'Philippines'),
('PN', 'Pitcairn Islands'),
('PL', 'Poland'),
('PT', 'Portugal'),
('PR', 'Puerto Rico'),
('QA', 'Qatar'),
('RO', 'Romania'),
('RU', 'Russia'),
('RW', 'Rwanda'),
('RE', 'R'),
('BL', 'Saint Barth'),
('SH', 'Saint Helena'),
('KN', 'Saint Kitts and Nevis'),
('LC', 'Saint Lucia'),
('MF', 'Saint Martin'),
('PM', 'Saint Pierre and Miquelon'),
('VC', 'Saint Vincent and the Gre'),
('WS', 'Samoa'),
('SM', 'San Marino'),
('SA', 'Saudi Arabia'),
('SN', 'Senegal'),
('RS', 'Serbia'),
('CS', 'Serbia and Montenegro'),
('SC', 'Seychelles'),
('SL', 'Sierra Leone'),
('SG', 'Singapore'),
('SK', 'Slovakia'),
('SI', 'Slovenia'),
('SB', 'Solomon Islands'),
('SO', 'Somalia'),
('ZA', 'South Africa'),
('GS', 'South Georgia and the Sou'),
('KR', 'South Korea'),
('ES', 'Spain'),
('LK', 'Sri Lanka'),
('SD', 'Sudan'),
('SR', 'Suriname'),
('SJ', 'Svalbard and Jan Mayen'),
('SZ', 'Swaziland'),
('SE', 'Sweden'),
('CH', 'Switzerland'),
('SY', 'Syria'),
('ST', 'S'),
('TW', 'Taiwan'),
('TJ', 'Tajikistan'),
('TZ', 'Tanzania'),
('TH', 'Thailand'),
('TL', 'Timor-Leste'),
('TG', 'Togo'),
('TK', 'Tokelau'),
('TO', 'Tonga'),
('TT', 'Trinidad and Tobago'),
('TN', 'Tunisia'),
('TR', 'Turkey'),
('TM', 'Turkmenistan'),
('TC', 'Turks and Caicos Islands'),
('TV', 'Tuvalu'),
('UM', 'U.S. Minor Outlying Islan'),
('PU', 'U.S. Miscellaneous Pacifi'),
('VI', 'U.S. Virgin Islands'),
('UG', 'Uganda'),
('UA', 'Ukraine'),
('SU', 'Union of Soviet Socialist'),
('AE', 'United Arab Emirates'),
('GB', 'United Kingdom'),
('US', 'United States'),
('ZZ', 'Unknown or Invalid Region'),
('UY', 'Uruguay'),
('UZ', 'Uzbekistan'),
('VU', 'Vanuatu'),
('VA', 'Vatican City'),
('VE', 'Venezuela'),
('VN', 'Vietnam'),
('WK', 'Wake Island'),
('WF', 'Wallis and Futuna'),
('EH', 'Western Sahara'),
('YE', 'Yemen'),
('ZM', 'Zambia'),
('ZW', 'Zimbabwe'),
('AX', '');

-- --------------------------------------------------------

--
-- Table structure for table `fee`
--

CREATE TABLE `fee` (
  `feeID` int(11) NOT NULL,
  `regID` varchar(25) NOT NULL,
  `date` varchar(20) NOT NULL,
  `Amount` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `feetype` varchar(20) NOT NULL,
  `feemode` varchar(20) NOT NULL,
  `bankname` varchar(50) NOT NULL,
  `dd_ch_no` varchar(20) NOT NULL,
  `dd_ch_date` varchar(20) NOT NULL,
  `DOE_` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `fee`
--

INSERT INTO `fee` (`feeID`, `regID`, `date`, `Amount`, `username`, `feetype`, `feemode`, `bankname`, `dd_ch_no`, `dd_ch_date`, `DOE_`) VALUES
(1, '2016011001', '09/01/2016', 1000, 'operator1', 'Registration', 'Cash', 'x', 'x', 'x', '2016-01-22 15:46:16'),
(2, '2016011002', '13/01/2016', 1000, 'operator1', 'Registration', 'Cash', 'x', 'x', 'x', '2016-01-22 15:46:16'),
(18, '2016011004', '16/01/2016', 1000, 'operator1', 'Registration', 'Cash', 'x', 'x', 'x', '2016-01-22 15:46:16'),
(21, '2016011003', '17/01/2016', 1000, 'nitin', 'Registration', 'CHEQUE', 'HDFC', '258456', '06/01/2016', '2016-01-22 15:46:16'),
(22, '2016011006', '18/01/2016', 1000, 'nitin', 'Registration', 'CHEQUE', 'SBI', '258930', '12/01/2016', '2016-01-22 15:46:16'),
(23, '2016011007', '18/01/2016', 1000, 'nitin', 'Registration', 'DD', 'HDFC', '587469', '18/01/2016', '2016-01-22 15:46:16'),
(24, '2016011008', '18/01/2016', 1000, 'nitin', 'Registration', 'Cash', 'x', 'x', 'x', '2016-01-22 15:46:16'),
(25, '2016011009', '18/01/2016', 1000, 'nitin', 'Registration', 'Cash', 'x', 'x', 'x', '2016-01-22 15:46:16'),
(26, '2016011010', '18/01/2016', 1000, 'nitin', 'Registration', 'CHEQUE', 'State Bank of India', '258963', '10/01/2016', '2016-01-22 15:46:16');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `GL_ID` int(11) NOT NULL,
  `PHOTO_` varchar(250) NOT NULL,
  `TITLE_` varchar(250) NOT NULL,
  `WIDTH_` int(11) NOT NULL,
  `HEIGHT_` int(11) NOT NULL,
  `CATEG_ID` int(11) NOT NULL,
  `STATUS` tinyint(1) NOT NULL DEFAULT '1',
  `USERNAME_` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`GL_ID`, `PHOTO_`, `TITLE_`, `WIDTH_`, `HEIGHT_`, `CATEG_ID`, `STATUS`, `USERNAME_`) VALUES
(12, '1.jpg', 'x', 0, 0, 1, 1, 'nitin');

-- --------------------------------------------------------

--
-- Table structure for table `gallery_category`
--

CREATE TABLE `gallery_category` (
  `CATEG_ID` int(11) NOT NULL,
  `CATEGORY` varchar(25) NOT NULL,
  `DESC` varchar(500) NOT NULL,
  `STATUS` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `gallery_category`
--

INSERT INTO `gallery_category` (`CATEG_ID`, `CATEGORY`, `DESC`, `STATUS`) VALUES
(1, 'General', 'General', 1);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `USERNAME_` varchar(40) NOT NULL,
  `PASSWORD_` varchar(25) NOT NULL,
  `USER_STATUS` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`USERNAME_`, `PASSWORD_`, `USER_STATUS`) VALUES
('deepak', '123', 'nw'),
('gopal', '123', 'adm'),
('naveen', '123', 'adm'),
('nitin', '123', 'adm'),
('operator1', 'oper$#1234', 'deo');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `ID_` int(11) NOT NULL,
  `MENU` varchar(30) NOT NULL,
  `USER_STATUS` varchar(5) NOT NULL,
  `PRIORITY_` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `newsevents`
--

CREATE TABLE `newsevents` (
  `ID` int(11) NOT NULL,
  `SUBJECT` varchar(200) NOT NULL,
  `NEWS` text NOT NULL,
  `PATH_ATTACH` varchar(150) NOT NULL,
  `FONTJI` varchar(250) NOT NULL,
  `DATE_` varchar(25) NOT NULL,
  `TIME_` varchar(25) NOT NULL,
  `STATUS` int(11) NOT NULL DEFAULT '1',
  `USERNAME` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `newsevents`
--

INSERT INTO `newsevents` (`ID`, `SUBJECT`, `NEWS`, `PATH_ATTACH`, `FONTJI`, `DATE_`, `TIME_`, `STATUS`, `USERNAME`) VALUES
(2, 'School Holiday Notice', 'School will remain close from 21-Mar-2016 to 26-Mar-2016', 'x', 'Arial', '23/03/2016', '01:43:39am', 1, 'nitin'),
(7, 'Cheeku happy Holi Khelegaa', 'Cheeku Happy Holi Khelegaa. Apni Pichkaari se papa ke sath holi khelegaa', 'x', 'Arial', '01/05/2016', '04:35:41pm', 0, 'nitin'),
(9, 'ok', 'ok', 'x', 'Arial', '29/04/2016', '01:04:14pm', 1, 'nitin'),
(10, 'ADS', 'asd', 'x', 'Arial', '29/04/2016', '01:05:30pm', 1, 'nitin'),
(11, 'nitin', 'nitin', 'x', 'Arial', '29/04/2016', '03:32:41pm', 1, 'nitin'),
(12, 'Szx', 'zxc', 'x', 'Arial', '29/04/2016', '03:47:33pm', 1, 'nitin'),
(13, 'kjh', 'zxc', 'x', 'Arial', '29/04/2016', '03:48:53pm', 1, 'nitin'),
(14, 'nb', 'zxc', 'x', 'Arial', '29/04/2016', '03:50:27pm', 1, 'nitin'),
(15, 'nb', 'zxc', 'x', 'Arial', '29/04/2016', '03:51:21pm', 1, 'nitin'),
(16, 'hg', 'b', 'x', 'Arial', '29/04/2016', '03:51:27pm', 1, 'nitin'),
(17, 'ZXx', 'ZxZx', 'x', 'Arial', '29/04/2016', '03:55:37pm', 1, 'nitin'),
(18, ' sfvSD', ' dfcsd', 'x', 'Arial', '29/04/2016', '04:06:34pm', 0, 'nitin'),
(19, 'zxcvzxc', 'zxcvzxcvzxcv', 'x', 'Arial', '29/04/2016', '03:56:26pm', 1, 'nitin'),
(20, 'as', 'asd', 'x', 'Arial', '29/04/2016', '03:57:06pm', 1, 'nitin'),
(21, 'sdfsdf', 'sdfSDF', 'x', 'Arial', '29/04/2016', '03:57:26pm', 1, 'nitin'),
(22, 'asc', 'asca', 'x', 'Arial', '03/05/2016', '09:22:22am', 1, 'naveen');

-- --------------------------------------------------------

--
-- Table structure for table `newsletter`
--

CREATE TABLE `newsletter` (
  `NID` int(11) NOT NULL,
  `TITLE_` varchar(250) NOT NULL,
  `VOLUME_` int(11) NOT NULL COMMENT 'Means edition (i.e 1,2,3,4...n) of newsletter',
  `COVER_` varchar(250) NOT NULL,
  `PATH_` varchar(250) NOT NULL,
  `DATE_` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `YEAR_` varchar(5) NOT NULL,
  `USERNAME_` varchar(150) NOT NULL,
  `STATUS_` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `newsletter`
--

INSERT INTO `newsletter` (`NID`, `TITLE_`, `VOLUME_`, `COVER_`, `PATH_`, `DATE_`, `YEAR_`, `USERNAME_`, `STATUS_`) VALUES
(30, 'Newsletter', 1, 'front_30.jpg', '30.doc', '2016-05-01 14:20:45', '2016', 'nitin', 0),
(31, 'Newsletter', 2, 'x', '31.pdf', '2016-05-01 14:21:02', '2016', 'nitin', 1);

-- --------------------------------------------------------

--
-- Table structure for table `news_id_`
--

CREATE TABLE `news_id_` (
  `ID_` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `online_enquiry`
--

CREATE TABLE `online_enquiry` (
  `ENQ_ID` int(11) NOT NULL,
  `NAME_` varchar(150) NOT NULL,
  `GENDER_` varchar(10) NOT NULL,
  `EMAIL_` varchar(150) NOT NULL,
  `MOBILE_PH` varchar(30) NOT NULL,
  `ENQ_IN_DETAIL` text NOT NULL,
  `DOR_` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `online_registration`
--

CREATE TABLE `online_registration` (
  `regid` int(11) NOT NULL,
  `FULLNAME` varchar(150) NOT NULL,
  `GENDER` varchar(10) NOT NULL,
  `FATHER` varchar(150) NOT NULL,
  `NATIONALITY` varchar(25) NOT NULL,
  `STUDENT_INTEREST` varchar(120) NOT NULL,
  `ADMISSION_FOR` varchar(25) NOT NULL,
  `CLASS_FOR_ADMISSION` varchar(5) NOT NULL,
  `APPLIED_YEAR` int(11) NOT NULL,
  `TRANSPORT_REQUIRED` varchar(5) NOT NULL,
  `LAST_SCHOOL_NAME` varchar(300) NOT NULL,
  `LAST_SCHOOL_GRADE` varchar(50) NOT NULL,
  `ADDRESS_` varchar(250) NOT NULL,
  `CITY_` varchar(50) NOT NULL,
  `PINCODE_` varchar(10) NOT NULL,
  `STATE_` varchar(50) NOT NULL,
  `COUNTRY_` varchar(50) NOT NULL,
  `MOBILE_` varchar(15) NOT NULL,
  `EMAIL_` varchar(100) NOT NULL,
  `DOR_` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `register_with_us`
--

CREATE TABLE `register_with_us` (
  `regid` varchar(25) NOT NULL,
  `FULLNAME` varchar(150) NOT NULL,
  `FATHER` varchar(150) NOT NULL,
  `DOB_` varchar(150) NOT NULL,
  `PHOTO_` varchar(250) NOT NULL,
  `GENDER` varchar(10) NOT NULL,
  `NATIONALITY` varchar(25) NOT NULL DEFAULT '-x-',
  `STUDENT_INTEREST` varchar(120) NOT NULL DEFAULT '-x-',
  `ADMISSION_FOR` varchar(25) NOT NULL,
  `CLASS_FOR_ADMISSION` varchar(5) NOT NULL,
  `APPLIED_YEAR` int(11) NOT NULL,
  `TRANSPORT_REQUIRED` varchar(5) NOT NULL,
  `LAST_SCHOOL_NAME` varchar(300) NOT NULL,
  `LAST_SCHOOL_GRADE` varchar(50) NOT NULL,
  `ADDRESS_` varchar(250) NOT NULL,
  `CITY_` varchar(50) NOT NULL,
  `PINCODE_` varchar(10) NOT NULL,
  `ZONE_` varchar(20) NOT NULL,
  `STATE_` varchar(50) NOT NULL,
  `COUNTRY_` varchar(50) NOT NULL,
  `MOBILE_` varchar(15) NOT NULL,
  `EMAIL_` varchar(100) NOT NULL,
  `KNOWN_SOURCE_` varchar(200) NOT NULL,
  `PASSWORD_` varchar(25) NOT NULL DEFAULT '123456',
  `DOR_` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `USERNAME_` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `state_`
--

CREATE TABLE `state_` (
  `NAME_` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `state_`
--

INSERT INTO `state_` (`NAME_`) VALUES
('UTTARAKHAND'),
('UTTAR PRADESH'),
('DELHI'),
('HARAYANA'),
('KARNATAKA'),
('MAHARASHTRA');

-- --------------------------------------------------------

--
-- Table structure for table `user_status`
--

CREATE TABLE `user_status` (
  `ST_ID` varchar(5) NOT NULL,
  `STATUS` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_status`
--

INSERT INTO `user_status` (`ST_ID`, `STATUS`) VALUES
('adm', 'Admin'),
('deo', 'Data Entry Operator'),
('fc', 'Faculty'),
('meo', 'Marks Entry Operator'),
('nw', 'news');

-- --------------------------------------------------------

--
-- Table structure for table `zone_`
--

CREATE TABLE `zone_` (
  `ID` int(11) NOT NULL,
  `ZONE` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `zone_`
--

INSERT INTO `zone_` (`ID`, `ZONE`) VALUES
(1, 'NORTH'),
(2, 'SOUTH'),
(3, 'EAST'),
(4, 'WEST'),
(5, 'NORTH EAST'),
(6, 'CENTRAL');

-- --------------------------------------------------------

--
-- Table structure for table `zone_region`
--

CREATE TABLE `zone_region` (
  `ID_` int(11) NOT NULL,
  `ZONE_` int(11) NOT NULL,
  `REGION` varchar(10) NOT NULL,
  `REG_NAME` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `zone_region`
--

INSERT INTO `zone_region` (`ID_`, `ZONE_`, `REGION`, `REG_NAME`) VALUES
(1, 1, 'PB', 'Punjab'),
(2, 1, 'JK', 'Jammu & Kashmi'),
(3, 1, 'HR', 'Harayana'),
(4, 1, 'HP', 'Himanchal Pradesh'),
(5, 1, 'UP', 'Uttar Pradesh'),
(6, 1, 'UL', 'Uttarakhand'),
(7, 1, 'RJ', 'Rajasthan'),
(8, 1, 'CH', 'Chandigarh'),
(9, 1, 'DL', 'Delhi'),
(10, 2, 'AP', 'Andhra Pradesh'),
(11, 2, 'KA', 'Karnataka'),
(12, 2, 'KL', 'Kerala'),
(13, 2, 'TN', 'Tamil Nadu'),
(14, 2, 'TG', 'Telangana'),
(15, 3, 'WB', 'West Bengal'),
(16, 3, 'OS', 'Odisa'),
(17, 3, 'BR', 'Bihar'),
(18, 3, 'JH', 'Jharkhand'),
(19, 3, 'AN', 'Andaman and Nicobaar Islands'),
(20, 4, 'GJ', 'Gujrat'),
(21, 4, 'MH', 'Maharshtra'),
(22, 4, 'GO', 'Goa'),
(23, 4, 'DD', 'Daman and Diu'),
(24, 4, 'DN', 'Dadra and Nagar Havali'),
(25, 6, 'MP', 'Madhya Pradesh'),
(26, 6, 'CG', 'Chhatisgarh'),
(27, 5, 'AS', 'Assam'),
(28, 5, 'SK', 'Sikkim'),
(29, 5, 'NG', 'Nagaland'),
(30, 5, 'MG', 'Meghalaya'),
(31, 5, 'MN', 'Manipur'),
(32, 5, 'MZ', 'Mizoram'),
(33, 5, 'TR', 'Tripura'),
(34, 5, 'AZ', 'Arunachal Pradesh');

-- --------------------------------------------------------

--
-- Table structure for table `_id_`
--

CREATE TABLE `_id_` (
  `ID_` int(11) NOT NULL,
  `regid_` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `_id_`
--

INSERT INTO `_id_` (`ID_`, `regid_`) VALUES
(1011, '2016011011');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activities`
--
ALTER TABLE `activities`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `bday_data`
--
ALTER TABLE `bday_data`
  ADD PRIMARY KEY (`BID`),
  ADD KEY `USERNAME_` (`USERNAME_`);

--
-- Indexes for table `fee`
--
ALTER TABLE `fee`
  ADD PRIMARY KEY (`feeID`),
  ADD KEY `regID` (`regID`,`date`),
  ADD KEY `userID` (`username`),
  ADD KEY `username` (`username`),
  ADD KEY `username_2` (`username`),
  ADD KEY `regID_2` (`regID`),
  ADD KEY `feetype` (`feetype`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`GL_ID`),
  ADD KEY `CATEG_ID` (`CATEG_ID`);

--
-- Indexes for table `gallery_category`
--
ALTER TABLE `gallery_category`
  ADD PRIMARY KEY (`CATEG_ID`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`USERNAME_`),
  ADD KEY `USER_STATUS` (`USER_STATUS`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`ID_`);

--
-- Indexes for table `newsevents`
--
ALTER TABLE `newsevents`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `STATUS` (`STATUS`);

--
-- Indexes for table `newsletter`
--
ALTER TABLE `newsletter`
  ADD PRIMARY KEY (`NID`),
  ADD KEY `USERNAME_` (`USERNAME_`);

--
-- Indexes for table `news_id_`
--
ALTER TABLE `news_id_`
  ADD PRIMARY KEY (`ID_`);

--
-- Indexes for table `online_enquiry`
--
ALTER TABLE `online_enquiry`
  ADD PRIMARY KEY (`ENQ_ID`);

--
-- Indexes for table `online_registration`
--
ALTER TABLE `online_registration`
  ADD PRIMARY KEY (`regid`);

--
-- Indexes for table `register_with_us`
--
ALTER TABLE `register_with_us`
  ADD PRIMARY KEY (`regid`),
  ADD KEY `USERNAME_` (`USERNAME_`);

--
-- Indexes for table `user_status`
--
ALTER TABLE `user_status`
  ADD PRIMARY KEY (`ST_ID`);

--
-- Indexes for table `zone_`
--
ALTER TABLE `zone_`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `zone_region`
--
ALTER TABLE `zone_region`
  ADD PRIMARY KEY (`ID_`);

--
-- Indexes for table `_id_`
--
ALTER TABLE `_id_`
  ADD PRIMARY KEY (`ID_`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activities`
--
ALTER TABLE `activities`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `bday_data`
--
ALTER TABLE `bday_data`
  MODIFY `BID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `fee`
--
ALTER TABLE `fee`
  MODIFY `feeID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `GL_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `gallery_category`
--
ALTER TABLE `gallery_category`
  MODIFY `CATEG_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `ID_` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `newsevents`
--
ALTER TABLE `newsevents`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `newsletter`
--
ALTER TABLE `newsletter`
  MODIFY `NID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT for table `online_enquiry`
--
ALTER TABLE `online_enquiry`
  MODIFY `ENQ_ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `online_registration`
--
ALTER TABLE `online_registration`
  MODIFY `regid` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `zone_region`
--
ALTER TABLE `zone_region`
  MODIFY `ID_` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `login`
--
ALTER TABLE `login`
  ADD CONSTRAINT `usrstatus_for_login` FOREIGN KEY (`USER_STATUS`) REFERENCES `user_status` (`ST_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
