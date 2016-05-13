-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 27, 2016 at 12:17 AM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `c&c`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', 'pass123'),
('admin', 'pass123');

-- --------------------------------------------------------

--
-- Table structure for table `arts_science`
--

CREATE TABLE `arts_science` (
  `college_id` int(5) NOT NULL,
  `college_name` varchar(40) NOT NULL,
  `bsc_maths` float NOT NULL,
  `bsc_chemistry` float NOT NULL,
  `bsc_physics` float NOT NULL,
  `bsc_botany` float NOT NULL,
  `bsc_zoology` float NOT NULL,
  `ba_english` float NOT NULL,
  `bcom` float NOT NULL,
  `bsc_computer` float NOT NULL,
  `ba_dance` float NOT NULL,
  `ba_music` float NOT NULL,
  `ba_hindi` float NOT NULL,
  `ba_malayalam` float NOT NULL,
  `ba_french` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `arts_science`
--

INSERT INTO `arts_science` (`college_id`, `college_name`, `bsc_maths`, `bsc_chemistry`, `bsc_physics`, `bsc_botany`, `bsc_zoology`, `ba_english`, `bcom`, `bsc_computer`, `ba_dance`, `ba_music`, `ba_hindi`, `ba_malayalam`, `ba_french`) VALUES
(1, 'All Saints'' College, Trivandrum', 103.2, 103.2, 98.4, 81.6, 96, 98.4, 108, 0, 0, 0, 0, 0, 0),
(2, 'St Joseph''s College Devagiri, Calicut', 30, 30, 30, 54, 45.6, 38.4, 81.6, 72, 0, 0, 0, 0, 0),
(3, 'Sacred Heart College, Thevara, Ernakulam', 67.2, 114, 96, 114, 114, 103.2, 106, 108, 0, 0, 0, 0, 0),
(4, 'St Teresa''s College, Ernakulam', 86.4, 114, 93.6, 114, 114, 114, 114, 66, 100, 0, 0, 0, 100),
(5, 'Government College Kasaragod', 64.8, 54, 50.4, 57, 51, 60, 0, 0, 0, 0, 0, 0, 0),
(6, 'CMS College, Kottayam', 105.6, 78, 48, 108, 91.2, 57.6, 74.4, 0, 0, 0, 0, 92, 0),
(7, 'Farook College, Kozhikode', 67.2, 57, 52.8, 60, 54, 62.4, 62.4, 90, 0, 0, 0, 88, 0),
(8, 'Payyanur College, Payyanur, Kannur', 62.4, 51, 55.2, 51, 43.2, 64.8, 60, 0, 0, 0, 114, 114, 0),
(9, 'Mahatma Gandhi College, Trivandrum', 30, 30, 45.6, 30, 30, 30, 57.6, 0, 0, 0, 54, 44, 0),
(10, 'Mar Athanasius College, Kothamangalam', 60, 60, 91.2, 105.6, 98.4, 81.6, 84, 0, 0, 0, 60, 0, 0),
(11, 'Mar Ivanios College, Trivandrum', 100.8, 98.4, 88.8, 103.2, 88.8, 100.8, 114, 0, 0, 0, 0, 0, 0),
(12, 'Rajagiri College of Management and Appli', 0, 0, 0, 0, 0, 0, 114, 0, 0, 0, 0, 0, 0),
(13, 'St Berchmans College Changanacherry', 114, 114, 114, 84, 93.6, 114, 114, 114, 0, 0, 0, 96, 0),
(14, 'Nehru Arts and Science College Kanhangad', 30, 114, 57.6, 63, 57, 0, 48, 0, 0, 0, 0, 0, 0),
(15, 'Union Christian College, Aluva', 96, 96, 86.4, 79.2, 86.4, 79.2, 72, 96, 0, 0, 0, 114, 0),
(16, 'Vimala College, Thrissur', 55.2, 45.6, 84, 114, 114, 96, 69.6, 84, 0, 0, 0, 60, 0),
(17, 'Mar Thoma College, Tiruvalla', 98.4, 100.8, 114, 114, 114, 108, 100, 0, 0, 0, 0, 0, 0),
(18, 'St Alberts College, Kochi', 52.8, 48, 60, 76.8, 100.8, 76.8, 55.2, 0, 0, 0, 0, 0, 0),
(19, 'Govt. Victoria College, Palakkad', 57.6, 43.2, 81.6, 72, 84, 67.2, 64.8, 78, 0, 0, 72, 56, 0),
(20, 'Sree Sankaracharya University of Sanskri', 0, 0, 0, 0, 0, 0, 0, 0, 100, 100, 0, 0, 0),
(21, 'Govt. College for Women, Thiruvananthapu', 88.8, 84, 105.6, 74.4, 81, 114, 96, 0, 0, 100, 84, 100, 0),
(22, 'SCMS School of Technology and Management', 0, 0, 0, 0, 0, 0, 104, 0, 0, 0, 0, 0, 0),
(23, 'Assumption College, Changanacherry', 114, 84, 114, 100.8, 105.6, 105.6, 98, 60, 0, 0, 0, 114, 0),
(24, 'Marian College, Kuttikkanam, Idukki', 0, 0, 0, 0, 0, 93.6, 114, 0, 0, 0, 0, 0, 0),
(25, 'Sree Narayana College, Kollam', 30, 30, 30, 30, 60, 30, 86.4, 0, 0, 0, 78, 64, 0),
(26, 'Sri. Swathi Thirunal College of Music, T', 0, 0, 0, 0, 0, 0, 0, 0, 0, 100, 0, 0, 0),
(27, 'Chembai Memorial Government Music Colleg', 0, 0, 0, 0, 0, 0, 0, 0, 0, 100, 0, 0, 0),
(28, 'University College, Trivandrum', 114, 93.6, 108, 98.4, 108, 74.4, 0, 0, 0, 0, 90, 68, 0),
(29, 'Lasya College of Fine Arts, Kannur', 0, 0, 0, 0, 0, 0, 0, 0, 100, 100, 0, 0, 0),
(30, 'Bharata Mata College, Kochi', 38.4, 30, 43.2, 30, 30, 40.8, 30, 0, 0, 0, 0, 40, 0),
(31, 'KMM College of Arts and Science, Thrikka', 30, 0, 0, 0, 0, 30, 30, 30, 0, 0, 0, 0, 0),
(32, 'RLV College of Music and Fine Arts,Tripu', 0, 0, 0, 0, 0, 0, 0, 0, 100, 100, 0, 0, 0),
(33, 'St. Thomas College, Palai, Kottayam', 93.6, 81, 79.2, 96, 63, 91.2, 30, 0, 0, 0, 0, 72, 0),
(34, 'Amal College of Advanced Studies, Nilamb', 0, 0, 0, 0, 0, 30, 91.2, 30, 0, 0, 0, 0, 0),
(35, 'Government College Chittur, Palakkad', 72, 63, 63, 30, 40.8, 69.6, 79.2, 54, 0, 0, 96, 76, 0),
(36, 'Gems Arts & Science College, Ramapuram M', 50.4, 0, 0, 0, 0, 43.2, 50.4, 48, 0, 0, 0, 0, 0),
(37, 'Catholicate College, Pathanamthitta', 74.4, 69, 30, 38.4, 30, 45.6, 52.8, 0, 0, 0, 48, 52, 0),
(38, 'Nirmalagiri college, Kuthuparamba, Kannu', 40.8, 66, 66, 30, 30, 52.8, 45.6, 0, 0, 0, 0, 80, 0),
(39, 'St. Xavier''s College, Thumba, Trivandrum', 48, 38.4, 30, 30, 0, 0, 40.8, 0, 0, 0, 0, 30, 0),
(40, 'Fatima Mata National College, Kollam', 91.2, 88.8, 76.8, 88.8, 78, 88.8, 88.8, 114, 0, 0, 42, 48, 100),
(41, 'Maharaja''s College, Ernakulam', 114, 91.2, 114, 93.6, 103.2, 114, 102, 0, 0, 0, 114, 114, 0),
(42, 'Malabar Christian College, Calicut', 114, 105.6, 114, 91.2, 75, 114, 114, 0, 0, 0, 108, 108, 0),
(43, 'Sanatana Dharma College, Alappuzha', 43.2, 114, 103.2, 45.6, 72, 72, 93.6, 0, 0, 0, 102, 104, 0),
(44, 'Kuriakose Elias College, Mannanam, Kotta', 79.2, 86.4, 74.4, 69, 69, 72, 76.8, 102, 0, 0, 0, 0, 0),
(45, 'Nirmala College, Muvattupuzha, Ernakulam', 76.8, 72, 40.8, 40.8, 30, 48, 30, 0, 0, 0, 30, 30, 0),
(46, 'St Gregorious College, Kottarakara', 69.6, 75, 69, 43.2, 38.4, 50.4, 30, 0, 0, 0, 0, 0, 0),
(47, 'B.C.M College, Kottayam', 84, 84, 100.8, 86.4, 114, 86.4, 67.2, 114, 0, 0, 0, 0, 0),
(48, 'Christ College, Thrissur', 45.6, 40.8, 72, 114, 72, 84, 43.2, 42, 0, 0, 0, 30, 0),
(49, 'Deva Matha College, Kottayam', 81.6, 82, 38.4, 66, 66, 55.2, 38.4, 0, 0, 0, 0, 84, 0),
(50, 'E K Nayanar Memorial Government College,', 0, 0, 30, 0, 0, 30, 30, 0, 0, 0, 30, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `bio_ip`
--

CREATE TABLE `bio_ip` (
  `user_id` int(11) NOT NULL,
  `ip` int(11) DEFAULT NULL,
  `physics` int(11) DEFAULT NULL,
  `chemistry` int(11) DEFAULT NULL,
  `english` int(11) DEFAULT NULL,
  `biology` int(11) DEFAULT NULL,
  `sec_lang_name` varchar(10) DEFAULT NULL,
  `second_lang` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bio_ip`
--

INSERT INTO `bio_ip` (`user_id`, `ip`, `physics`, `chemistry`, `english`, `biology`, `sec_lang_name`, `second_lang`) VALUES
(80, 0, 0, 0, 0, 0, NULL, 0),
(81, 90, 97, 88, 90, 87, NULL, 0),
(82, 0, 0, 0, 0, 0, NULL, 0),
(83, 45, 65, 56, 34, 87, NULL, 0),
(84, 6, 6, 6, 6, 6, NULL, 0),
(85, 2, 2, 2, 2, 2, NULL, 0),
(86, 1, 1, 1, 1, 1, NULL, 0),
(87, 1, 2, 3, 4, 5, NULL, 6),
(88, 34, 34, 54, 23, 65, '', 0),
(89, 23, 43, 12, 2, 1, '', 44),
(90, 1, 1, 1, 1, 1, '', 0),
(91, 1, 1, 1, 1, 1, 'NULL', 0),
(92, 7, 7, 7, 7, 7, 'null', 0),
(93, 1, 1, 1, 1, 1, '', 0),
(94, 1, 1, 1, 1, 1, '', 0),
(95, 2, 2, 2, 2, 2, '', 0),
(130, 0, 0, 0, 0, 0, '', 0),
(131, 0, 0, 0, 0, 0, '', 0),
(132, 0, 0, 0, 0, 0, '', 0),
(138, 0, 0, 0, 0, 0, '', 0),
(141, 0, 0, 0, 0, 0, '', 0),
(1000, 0, 0, 0, 0, 0, '', 0),
(1001, 0, 0, 0, 0, 0, '', 0),
(1004, 1, 2, 3, 4, 5, '', 0),
(1005, 1, 2, 3, 4, 5, 'malayalam', 6),
(1006, 11, 22, 33, 44, 55, '', 0),
(1007, 0, 0, 0, 0, 0, '', 0),
(1016, 1, 2, 3, 4, 5, 'hindi', 6),
(1030, 100, 100, 100, 100, 100, '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `bio_lang`
--

CREATE TABLE `bio_lang` (
  `user_id` int(11) NOT NULL,
  `biology` int(11) DEFAULT NULL,
  `physics` int(11) DEFAULT NULL,
  `chemistry` int(11) DEFAULT NULL,
  `english` int(11) DEFAULT NULL,
  `sec_lang_name` varchar(10) DEFAULT NULL,
  `second_lang` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bio_lang`
--

INSERT INTO `bio_lang` (`user_id`, `biology`, `physics`, `chemistry`, `english`, `sec_lang_name`, `second_lang`) VALUES
(97, 1, 2, 3, 4, 'malayalam', 5),
(139, 0, 0, 0, 0, 'french', 0),
(1011, 2, 22, 222, 2222, 'malayalam', 22),
(1013, 11, 22, 33, 44, 'hindi', 55),
(1017, 1, 12, 15, 151, 'malayalam', 12);

-- --------------------------------------------------------

--
-- Table structure for table `bio_maths`
--

CREATE TABLE `bio_maths` (
  `user_id` int(11) NOT NULL,
  `maths` int(11) DEFAULT NULL,
  `physics` int(11) DEFAULT NULL,
  `chemistry` int(11) DEFAULT NULL,
  `english` int(11) DEFAULT NULL,
  `biology` int(11) DEFAULT NULL,
  `sec_lang_name` varchar(10) NOT NULL,
  `second_lang` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bio_maths`
--

INSERT INTO `bio_maths` (`user_id`, `maths`, `physics`, `chemistry`, `english`, `biology`, `sec_lang_name`, `second_lang`) VALUES
(98, 1, 2, 3, 4, 5, 'malayalam', 6),
(140, 0, 0, 0, 0, 0, '', 0),
(1008, 12, 13, 15, 16, 17, 'malayalam', 87),
(1021, 90, 80, 100, 80, 100, '', 0),
(1022, 0, 100, 100, 0, 100, '', 0),
(1028, 0, 100, 100, 0, 100, '', 0),
(1029, 100, 100, 100, 100, 100, '', 0),
(1032, 100, 100, 100, 0, 100, '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `commerce_ip`
--

CREATE TABLE `commerce_ip` (
  `user_id` int(11) NOT NULL,
  `maths` int(11) DEFAULT NULL,
  `ip` int(11) DEFAULT NULL,
  `commerce` int(11) DEFAULT NULL,
  `accounts` int(11) DEFAULT NULL,
  `business` int(11) DEFAULT NULL,
  `sec_lang_name` varchar(10) NOT NULL,
  `second_lang` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `commerce_ip`
--

INSERT INTO `commerce_ip` (`user_id`, `maths`, `ip`, `commerce`, `accounts`, `business`, `sec_lang_name`, `second_lang`) VALUES
(99, 1, 2, 3, 4, 5, 'malayalam', 6),
(100, 1, 2, 3, 4, 5, 'malayalam', 6),
(141, 23, 2, 22, 2, 2, 'hindi', 5),
(1013, 1, 2, 3, 4, 5, 'malayalam', 6),
(1014, 1, 2, 3, 4, 5, 'malayalam', 6),
(1015, 1, 1, 1, 1, 1, 'malayalam', 1),
(1027, 100, 100, 100, 100, 100, '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `commerce_maths`
--

CREATE TABLE `commerce_maths` (
  `user_id` int(11) NOT NULL,
  `maths` int(11) DEFAULT NULL,
  `english` int(11) DEFAULT NULL,
  `commerce` int(11) DEFAULT NULL,
  `accounts` int(11) DEFAULT NULL,
  `business` int(11) DEFAULT NULL,
  `sec_lang_name` varchar(10) NOT NULL,
  `second_lang` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `commerce_maths`
--

INSERT INTO `commerce_maths` (`user_id`, `maths`, `english`, `commerce`, `accounts`, `business`, `sec_lang_name`, `second_lang`) VALUES
(102, 1, 2, 3, 4, 5, 'malayalam', 6),
(116, 99, 86, 87, 1, 25, 'malayalam', 50),
(1018, 80, 88, 86, 75, 90, 'nosecond', 0),
(1020, 100, 100, 100, 100, 100, 'nosecond', 0),
(1031, 100, 100, 100, 100, 100, 'nosecond', 0);

-- --------------------------------------------------------

--
-- Table structure for table `computer_maths`
--

CREATE TABLE `computer_maths` (
  `user_id` int(11) DEFAULT NULL,
  `maths` int(11) DEFAULT NULL,
  `physics` int(11) DEFAULT NULL,
  `chemistry` int(11) DEFAULT NULL,
  `english` int(11) DEFAULT NULL,
  `computer` int(11) DEFAULT NULL,
  `sec_lang_name` varchar(10) NOT NULL,
  `second_lang` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `computer_maths`
--

INSERT INTO `computer_maths` (`user_id`, `maths`, `physics`, `chemistry`, `english`, `computer`, `sec_lang_name`, `second_lang`) VALUES
(1012, 1, 1, 1, 1, 1, 'malayalam', 1),
(1019, 90, 98, 94, 90, 99, 'nosecond', 0),
(1023, 100, 100, 100, 10, 0, 'nosecond', 0),
(1024, 100, 100, 100, 0, 0, 'nosecond', 0),
(1025, 100, 100, 100, 0, 0, 'nosecond', 0),
(1026, 100, 100, 100, 0, 0, 'nosecond', 0),
(1037, 98, 96, 99, 95, 97, 'nosecond', 0),
(1038, 97, 98, 90, 95, 99, 'nosecond', 0);

-- --------------------------------------------------------

--
-- Table structure for table `engg_colleges`
--

CREATE TABLE `engg_colleges` (
  `college_id` int(30) NOT NULL,
  `college_name` varchar(80) NOT NULL,
  `last_rank` int(30) NOT NULL,
  `benchmark` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `engg_colleges`
--

INSERT INTO `engg_colleges` (`college_id`, `college_name`, `last_rank`, `benchmark`) VALUES
(1, 'College of Engineering, Trivandrum', 1426, 114),
(2, 'Thangal Kunju Musaliar College of Engineering', 3295, 114),
(3, 'Govt Engineering College, Trichur', 3960, 114),
(4, 'Model Engineering College', 4330, 114),
(5, 'Mar Athanasius College of Engineering', 4759, 114),
(6, 'Rajiv Gandhi Institute of Technology', 5708, 108),
(7, 'Nss College of Engineering', 5913, 106),
(8, 'Govt Engineering College, Wayanad', 6507, 103),
(9, 'Sree Chitra Thirunal College of Engineering', 6848, 101),
(10, 'Govt Engineering College, Idukki', 7565, 98),
(11, 'Govt Engineering College, Kannur', 7690, 96),
(12, 'Govt Engineering College, Palakkad', 7833, 94),
(13, 'Rajagiri School of Engineering and Technology', 8009, 91),
(14, 'College of Engineering, Chengannur', 10722, 89),
(15, 'Lbs Institute of Technology for Women', 112312, 86),
(16, 'College of Engineering, Kidangoor', 12922, 84),
(17, 'University College of Engineering, Kariavattom', 12995, 82),
(18, 'College of Engineering, Thalassery', 13783, 79),
(19, 'College of Engineering, Perumon', 14597, 77),
(20, 'College of Engineering, Adoor', 14681, 74),
(21, 'Scms School of Engineering and Technology', 14971, 72),
(22, 'Federal Istitute of Science and Technology', 15500, 70),
(23, 'College of Engineering, Trikaripur', 15398, 67),
(24, 'College of Engineering, Vadakara', 16295, 65),
(25, 'Lbs Engineering College, Kasargod', 16883, 62),
(26, 'College of Engineering, Attingal', 17601, 60),
(27, 'College of Engineering, Kallooppara', 18054, 58),
(28, 'College of Engineering, Cherthala', 18390, 55),
(29, 'Toc H Institute of Science and Technology ', 18441, 53),
(30, 'Adi Shankara Institute of Engineering and Technology', 18651, 50),
(31, 'University of Engineering, Thodupuzha', 18969, 48),
(32, 'College of Engineering and Management, Punnapara', 19762, 46),
(33, 'College of Engineering, Munnar', 20031, 43),
(34, 'College of Engineering, Karunagappally', 20534, 41),
(35, 'College of Engineering, Poonjar', 21844, 38),
(36, 'College of Engineering, Kottarakkara', 21890, 30),
(37, 'College of Engineering, Pathanapuram', 33061, 30),
(38, 'Masaniamman Institute of Engineering', 55395, 30),
(39, 'Holy Kings College of Engineering and Technology', 55667, 30),
(40, 'Kmp College of Engineering, Cherukunnam', 56066, 30);

-- --------------------------------------------------------

--
-- Table structure for table `maths_ip`
--

CREATE TABLE `maths_ip` (
  `user_id` int(11) NOT NULL,
  `ip` int(11) DEFAULT NULL,
  `physics` int(11) DEFAULT NULL,
  `chemistry` int(11) DEFAULT NULL,
  `english` int(11) DEFAULT NULL,
  `maths` int(11) DEFAULT NULL,
  `sec_lang_name` varchar(10) NOT NULL,
  `second_lang` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `maths_ip`
--

INSERT INTO `maths_ip` (`user_id`, `ip`, `physics`, `chemistry`, `english`, `maths`, `sec_lang_name`, `second_lang`) VALUES
(108, 1, 2, 3, 4, 5, 'hindi', 6),
(1010, 12, 13, 14, 15, 16, 'malayalam', 16);

-- --------------------------------------------------------

--
-- Table structure for table `maths_lang`
--

CREATE TABLE `maths_lang` (
  `user_id` int(11) NOT NULL,
  `maths` int(11) DEFAULT NULL,
  `physics` int(11) DEFAULT NULL,
  `chemistry` int(11) DEFAULT NULL,
  `english` int(11) DEFAULT NULL,
  `sec_lang_name` varchar(10) NOT NULL,
  `second_lang` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `maths_lang`
--

INSERT INTO `maths_lang` (`user_id`, `maths`, `physics`, `chemistry`, `english`, `sec_lang_name`, `second_lang`) VALUES
(109, 1, 2, 3, 4, 'french', 5);

-- --------------------------------------------------------

--
-- Table structure for table `mbbs`
--

CREATE TABLE `mbbs` (
  `college_id` int(5) NOT NULL,
  `college_name` varchar(50) NOT NULL,
  `last_rank` int(5) NOT NULL,
  `benchmark` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mbbs`
--

INSERT INTO `mbbs` (`college_id`, `college_name`, `last_rank`, `benchmark`) VALUES
(1, 'Govt. Medical College Kozhikode', 298, 114),
(2, 'Govt. Medical College Trivandrum', 348, 114),
(3, 'Govt. Medical College Kottayam', 465, 114),
(4, 'Govt. Medical College Thrissur', 585, 104),
(5, 'TD Medical College Alappuzha', 727, 100),
(6, 'Govt. Medical College Malappuram', 757, 96),
(7, 'Govt. Medical College Ernakulam', 761, 92),
(8, 'Govt. Medical College Idukki', 872, 88),
(9, 'Govt. Medical College Palakkad', 900, 84),
(10, 'Academy of Medical Science Kannur', 950, 80),
(11, 'SUT Medical College Trivandrum', 1196, 76),
(12, 'Jubilee Mission Medical College Thrissur', 1401, 72),
(13, 'Sree Gokulam Medical College Trivandrum', 1485, 68),
(14, 'DM Wayanad Institute of Medical Science', 1667, 64),
(15, 'Sree Narayana Institute of Medical Sciences Ernaku', 1786, 60),
(16, 'Azeezia Institute of Medical Sciences Kollam', 1797, 56),
(17, 'PK DAS Institute Of Medical Sciences', 1884, 52),
(18, 'Amala Institute of Medical Sciences Thrissur', 1890, 48),
(19, 'Mount Zion Medical College', 2023, 44),
(20, 'Malankara Medical College Ernakulam', 2032, 40),
(21, 'AlAzhar Medical College', 2058, 36),
(22, 'Pushpagiri Institute Of Medical Sciences Thiruvall', 2131, 30),
(23, 'Kannur Medical College', 2212, 30),
(24, 'MES Medical College', 2331, 30);

-- --------------------------------------------------------

--
-- Table structure for table `user_details`
--

CREATE TABLE `user_details` (
  `user_id` int(11) NOT NULL,
  `first_name` varchar(10) NOT NULL,
  `last_name` varchar(10) NOT NULL,
  `email_id` varchar(20) NOT NULL,
  `school_board` varchar(10) NOT NULL,
  `school_stream` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_details`
--

INSERT INTO `user_details` (`user_id`, `first_name`, `last_name`, `email_id`, `school_board`, `school_stream`) VALUES
(1012, 'Alan', 'Jose', 'alanjose10@gmail.com', 'CBSE', 'computer_maths'),
(1013, 'asdasd', 'Jose', 'coolabi7@gmail.com', '', 'bio_language'),
(1014, '', '', '', '', 'commerce_ip'),
(1015, 'Alan', 'Jose', 'a@b.c', 'State', 'commerce_ip'),
(1016, 'Alan', 'Jose', '', '', 'bio_ip'),
(1017, 'Alan', 'as', 'a@gmail.com', 'State', 'bio_language'),
(1018, 'Alan', 'Jose', 'alanjose10@gmail.com', 'cbse', 'commerce_maths'),
(1019, 'Alan', 'Jose', 'alanjose10@gmail.com', 'cbse', 'computer_maths'),
(1020, 'Alan', 'Jose', 'alanjose10@gmail.com', 'cbse', 'commerce_maths'),
(1021, 'Alan', 'Jose', 'alanjose10@gmail.com', 'cbse', 'bio_maths'),
(1022, 'Alan', 'Jose', 'a@gmail.com', 'cbse', 'bio_maths'),
(1023, 'Alan', 'Jose', 'alanjose10@gmail.com', 'state', 'computer_maths'),
(1024, 'Alan', 'Jose', 'alanjose10@gmail.com', 'cbse', 'computer_maths'),
(1025, 'Alan', 'Jose', 'alanjose10@gmail.com', 'cbse', 'computer_maths'),
(1026, 'Alan', 'Jose', 'alanjose10@gmail.com', 'cbse', 'computer_maths'),
(1027, 'qwerwe', 'qwedasdasx', 'fty@fy.in', 'cbse', 'commerce_ip'),
(1028, 'asdasd', 'lol', 'a@gmail.com', 'cbse', 'bio_maths'),
(1029, 'Alan', 'Jose', 'alanjose10@gmail.com', 'cbse', 'bio_maths'),
(1030, 'Alan', 'Jose', 'alanjose10@gmail.com', 'cbse', 'bio_ip'),
(1031, 'asxasx', 'asdas', 'as@gmail.com', 'state', 'commerce_maths'),
(1032, 'as', 's', '', 'cbse', 'bio_maths'),
(1033, 'sadsdad', '', '', '', ''),
(1034, '', '', '', '', ''),
(1035, 'axas', '', '', '', 'bio_ip'),
(1036, 'Pooja ', 'R', 'poojarajasekharan.me', 'cbse', 'computer_maths'),
(1037, 'Pooja', 'R', 'poojarajasekharan.me', 'cbse', 'computer_maths'),
(1038, 'Pooja', 'R', 'poojarajasekharan.me', 'cbse', 'computer_maths'),
(1039, '', '', '', '', ''),
(1040, '', '', '', '', 'bio_language');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `arts_science`
--
ALTER TABLE `arts_science`
  ADD PRIMARY KEY (`college_id`);

--
-- Indexes for table `bio_ip`
--
ALTER TABLE `bio_ip`
  ADD UNIQUE KEY `user_id` (`user_id`);

--
-- Indexes for table `bio_lang`
--
ALTER TABLE `bio_lang`
  ADD UNIQUE KEY `user_id` (`user_id`);

--
-- Indexes for table `bio_maths`
--
ALTER TABLE `bio_maths`
  ADD UNIQUE KEY `user_id` (`user_id`);

--
-- Indexes for table `commerce_ip`
--
ALTER TABLE `commerce_ip`
  ADD UNIQUE KEY `user_id` (`user_id`);

--
-- Indexes for table `commerce_maths`
--
ALTER TABLE `commerce_maths`
  ADD UNIQUE KEY `user_id` (`user_id`);

--
-- Indexes for table `computer_maths`
--
ALTER TABLE `computer_maths`
  ADD UNIQUE KEY `user_id` (`user_id`);

--
-- Indexes for table `engg_colleges`
--
ALTER TABLE `engg_colleges`
  ADD PRIMARY KEY (`college_id`);

--
-- Indexes for table `maths_ip`
--
ALTER TABLE `maths_ip`
  ADD UNIQUE KEY `user_id` (`user_id`);

--
-- Indexes for table `maths_lang`
--
ALTER TABLE `maths_lang`
  ADD UNIQUE KEY `user_id` (`user_id`);

--
-- Indexes for table `mbbs`
--
ALTER TABLE `mbbs`
  ADD PRIMARY KEY (`college_id`);

--
-- Indexes for table `user_details`
--
ALTER TABLE `user_details`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `user_id` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `arts_science`
--
ALTER TABLE `arts_science`
  MODIFY `college_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
--
-- AUTO_INCREMENT for table `engg_colleges`
--
ALTER TABLE `engg_colleges`
  MODIFY `college_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
--
-- AUTO_INCREMENT for table `mbbs`
--
ALTER TABLE `mbbs`
  MODIFY `college_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `user_details`
--
ALTER TABLE `user_details`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1041;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `computer_maths`
--
ALTER TABLE `computer_maths`
  ADD CONSTRAINT `computer_maths_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user_details` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
