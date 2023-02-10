-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 10, 2023 at 06:16 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `enrollhere`
--

-- --------------------------------------------------------

--
-- Table structure for table `agent_details`
--

CREATE TABLE `agent_details` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `country` varchar(100) NOT NULL,
  `school_name` varchar(255) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `phone_number` varchar(100) NOT NULL,
  `contact_title` varchar(100) NOT NULL,
  `additional_comments` longtext NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `agent_details`
--

INSERT INTO `agent_details` (`id`, `user_id`, `country`, `school_name`, `first_name`, `last_name`, `phone_number`, `contact_title`, `additional_comments`, `created_at`, `updated_at`) VALUES
(1, 1, '78', 'PCH School, Sarari', 'Niraj', 'Singh', '8851541659', 'Agent', 'This is demo agent', '2022-09-01 08:58:28', '2022-09-01 08:58:28'),
(2, 32, 'Anguilla', 'ZAI College', 'Niraj21', 'Last name', '8855663355', 'Niraj', 'Any additional comments: *', '2022-09-13 18:41:57', '2022-09-13 18:41:57'),
(3, 34, 'Australia', 'ZAIC', 'zaic', 'college', '8855663322', 'zaic', 'test', '2022-09-13 18:57:11', '2022-09-13 18:57:11'),
(4, 62, 'India', 'IITT', 'Harkaran', 'Singh', '878944567', 'Karan Agent', 'No', '2023-01-24 17:19:49', '2023-01-24 17:19:49');

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `id` int(11) NOT NULL,
  `state_id` int(11) NOT NULL,
  `city` varchar(100) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`id`, `state_id`, `city`, `status`) VALUES
(2, 2, 'Mumbai', 1),
(3, 3, 'Delhi', 1),
(4, 4, 'Bengaluru', 1),
(5, 5, 'Ahmedabad', 1),
(6, 6, 'Hyderabad', 1),
(7, 7, 'Chennai', 1),
(8, 8, 'Kolkata', 1),
(9, 2, 'Pune', 1),
(10, 9, 'Jaipur', 1),
(11, 5, 'Surat', 1),
(12, 10, 'Lucknow', 1),
(13, 10, 'Kanpur', 1),
(14, 2, 'Nagpur', 1),
(15, 11, 'Patna', 1),
(16, 12, 'Indore', 1),
(17, 2, 'Thane', 1),
(18, 12, 'Bhopal', 1),
(19, 13, 'Visakhapatnam', 1),
(20, 5, 'Vadodara', 1),
(21, 10, 'Firozabad', 1),
(22, 14, 'Ludhiana', 1),
(23, 5, 'Rajkot', 1),
(24, 10, 'Agra', 1),
(25, 8, 'Siliguri', 1),
(26, 2, 'Nashik', 1),
(27, 15, 'Faridabad', 1),
(28, 14, 'Patiala', 1),
(29, 10, 'Meerut', 1),
(30, 2, 'Kalyan-Dombivali', 1),
(31, 2, 'Vasai-Virar', 1),
(32, 10, 'Varanasi', 1),
(33, 16, 'Srinagar', 1),
(34, 17, 'Dhanbad', 1),
(35, 9, 'Jodhpur', 1),
(36, 14, 'Amritsar', 1),
(37, 18, 'Raipur', 1),
(38, 10, 'Allahabad', 1),
(39, 7, 'Coimbatore', 1),
(40, 12, 'Jabalpur', 1),
(41, 12, 'Gwalior', 1),
(42, 13, 'Vijayawada', 1),
(43, 7, 'Madurai', 1),
(44, 19, 'Guwahati', 1),
(45, 20, 'Chandigarh', 1),
(46, 4, 'Hubli-Dharwad', 1),
(47, 10, 'Amroha', 1),
(48, 10, 'Moradabad', 1),
(49, 15, 'Gurgaon', 1),
(50, 10, 'Aligarh', 1),
(51, 2, 'Solapur', 1),
(52, 17, 'Ranchi', 1),
(53, 14, 'Jalandhar', 1),
(54, 7, 'Tiruchirappalli', 1),
(55, 21, 'Bhubaneswar', 1),
(56, 7, 'Salem', 1),
(57, 6, 'Warangal', 1),
(58, 2, 'Mira-Bhayandar', 1),
(59, 22, 'Thiruvananthapuram', 1),
(60, 2, 'Bhiwandi', 1),
(61, 10, 'Saharanpur', 1),
(62, 13, 'Guntur', 1),
(63, 2, 'Amravati', 1),
(64, 9, 'Bikaner', 1),
(65, 10, 'Noida', 1),
(66, 17, 'Jamshedpur', 1),
(67, 18, 'Bhilai Nagar', 1),
(68, 21, 'Cuttack', 1),
(69, 22, 'Kochi', 1),
(70, 9, 'Udaipur', 1),
(71, 5, 'Bhavnagar', 1),
(72, 23, 'Dehradun', 1),
(73, 8, 'Asansol', 1),
(74, 2, 'Nanded-Waghala', 1),
(75, 9, 'Ajmer', 1),
(76, 5, 'Jamnagar', 1),
(77, 12, 'Ujjain', 1),
(78, 2, 'Sangli', 1),
(79, 10, 'Loni', 1),
(80, 10, 'Jhansi', 1),
(81, 24, 'Pondicherry', 1),
(82, 13, 'Nellore', 1),
(83, 16, 'Jammu', 1),
(84, 4, 'Belagavi', 1),
(85, 21, 'Raurkela', 1),
(86, 4, 'Mangaluru', 1),
(87, 7, 'Tirunelveli', 1),
(88, 2, 'Malegaon', 1),
(89, 11, 'Gaya', 1),
(90, 7, 'Tiruppur', 1),
(91, 4, 'Davanagere', 1),
(92, 22, 'Kozhikode', 1),
(93, 2, 'Akola', 1),
(94, 13, 'Kurnool', 1),
(95, 17, 'Bokaro Steel City', 1),
(96, 13, 'Rajahmundry', 1),
(97, 4, 'Ballari', 1),
(98, 25, 'Agartala', 1),
(99, 11, 'Bhagalpur', 1),
(100, 2, 'Latur', 1),
(101, 2, 'Dhule', 1),
(102, 18, 'Korba', 1),
(103, 9, 'Bhilwara', 1),
(104, 21, 'Brahmapur', 1),
(105, 26, 'Mysore', 1),
(106, 11, 'Muzaffarpur', 1),
(107, 2, 'Ahmednagar', 1),
(108, 22, 'Kollam', 1),
(109, 8, 'Raghunathganj', 1),
(110, 18, 'Bilaspur', 1),
(111, 10, 'Shahjahanpur', 1),
(112, 22, 'Thrissur', 1),
(113, 9, 'Alwar', 1),
(114, 13, 'Kakinada', 1),
(115, 6, 'Nizamabad', 1),
(116, 12, 'Sagar', 1),
(117, 4, 'Tumkur', 1),
(118, 15, 'Hisar', 1),
(119, 15, 'Rohtak', 1),
(120, 15, 'Panipat', 1),
(121, 11, 'Darbhanga', 1),
(122, 8, 'Kharagpur', 1),
(123, 27, 'Aizawl', 1),
(124, 2, 'Ichalkaranji', 1),
(125, 13, 'Tirupati', 1),
(126, 15, 'Karnal', 1),
(127, 14, 'Bathinda', 1),
(128, 10, 'Rampur', 1),
(129, 4, 'Shivamogga', 1),
(130, 12, 'Ratlam', 1),
(131, 10, 'Modinagar', 1),
(132, 18, 'Durg', 1),
(133, 28, 'Shillong', 1),
(134, 29, 'Imphal', 1),
(135, 10, 'Hapur', 1),
(136, 7, 'Ranipet', 1),
(137, 13, 'Anantapur', 1),
(138, 11, 'Arrah', 1),
(139, 6, 'Karimnagar', 1),
(140, 2, 'Parbhani', 1),
(141, 10, 'Etawah', 1),
(142, 9, 'Bharatpur', 1),
(143, 11, 'Begusarai', 1),
(144, 3, 'New Delhi', 1),
(145, 11, 'Chhapra', 1),
(146, 13, 'Kadapa', 1),
(147, 6, 'Ramagundam', 1),
(148, 9, 'Pali', 1),
(149, 12, 'Satna', 1),
(150, 13, 'Vizianagaram', 1),
(151, 11, 'Katihar', 1),
(152, 23, 'Hardwar', 1),
(153, 15, 'Sonipat', 1),
(154, 7, 'Nagercoil', 1),
(155, 7, 'Thanjavur', 1),
(156, 12, 'Murwara (Katni)', 1),
(157, 8, 'Naihati', 1),
(158, 10, 'Sambhal', 1),
(159, 5, 'Nadiad', 1),
(160, 15, 'Yamunanagar', 1),
(161, 8, 'English Bazar', 1),
(162, 13, 'Eluru', 1),
(163, 11, 'Munger', 1),
(164, 15, 'Panchkula', 1),
(165, 4, 'Raayachuru', 1),
(166, 2, 'Panvel', 1),
(167, 17, 'Deoghar', 1),
(168, 13, 'Ongole', 1),
(169, 13, 'Nandyal', 1),
(170, 12, 'Morena', 1),
(171, 15, 'Bhiwani', 1),
(172, 5, 'Porbandar', 1),
(173, 22, 'Palakkad', 1),
(174, 5, 'Anand', 1),
(175, 11, 'Purnia', 1),
(176, 8, 'Baharampur', 1),
(177, 9, 'Barmer', 1),
(178, 5, 'Morvi', 1),
(179, 10, 'Orai', 1),
(180, 10, 'Bahraich', 1),
(181, 9, 'Sikar', 1),
(182, 7, 'Vellore', 1),
(183, 12, 'Singrauli', 1),
(184, 6, 'Khammam', 1),
(185, 5, 'Mahesana', 1),
(186, 19, 'Silchar', 1),
(187, 21, 'Sambalpur', 1),
(188, 12, 'Rewa', 1),
(189, 10, 'Unnao', 1),
(190, 8, 'Hugli-Chinsurah', 1),
(191, 8, 'Raiganj', 1),
(192, 17, 'Phusro', 1),
(193, 17, 'Adityapur', 1),
(194, 22, 'Alappuzha', 1),
(195, 15, 'Bahadurgarh', 1),
(196, 13, 'Machilipatnam', 1),
(197, 10, 'Rae Bareli', 1),
(198, 8, 'Jalpaiguri', 1),
(199, 5, 'Bharuch', 1),
(200, 14, 'Pathankot', 1),
(201, 14, 'Hoshiarpur', 1),
(202, 16, 'Baramula', 1),
(203, 13, 'Adoni', 1),
(204, 15, 'Jind', 1),
(205, 9, 'Tonk', 1),
(206, 13, 'Tenali', 1),
(207, 7, 'Kancheepuram', 1),
(208, 5, 'Vapi', 1),
(209, 15, 'Sirsa', 1),
(210, 5, 'Navsari', 1),
(211, 6, 'Mahbubnagar', 1),
(212, 21, 'Puri', 1),
(213, 4, 'Robertson Pet', 1),
(214, 7, 'Erode', 1),
(215, 14, 'Batala', 1),
(216, 23, 'Haldwani-cum-Kathgodam', 1),
(217, 12, 'Vidisha', 1),
(218, 11, 'Saharsa', 1),
(219, 15, 'Thanesar', 1),
(220, 13, 'Chittoor', 1),
(221, 5, 'Veraval', 1),
(222, 10, 'Lakhimpur', 1),
(223, 10, 'Sitapur', 1),
(224, 13, 'Hindupur', 1),
(225, 8, 'Santipur', 1),
(226, 8, 'Balurghat', 1),
(227, 12, 'Ganjbasoda', 1),
(228, 14, 'Moga', 1),
(229, 13, 'Proddatur', 1),
(230, 23, 'Srinagar', 1),
(231, 8, 'Medinipur', 1),
(232, 8, 'Habra', 1),
(233, 11, 'Sasaram', 1),
(234, 11, 'Hajipur', 1),
(235, 5, 'Bhuj', 1),
(236, 12, 'Shivpuri', 1),
(237, 8, 'Ranaghat', 1),
(238, 30, 'Shimla', 1),
(239, 7, 'Tiruvannamalai', 1),
(240, 15, 'Kaithal', 1),
(241, 18, 'Rajnandgaon', 1),
(242, 5, 'Godhra', 1),
(243, 17, 'Hazaribag', 1),
(244, 13, 'Bhimavaram', 1),
(245, 12, 'Mandsaur', 1),
(246, 19, 'Dibrugarh', 1),
(247, 4, 'Kolar', 1),
(248, 8, 'Bankura', 1),
(249, 4, 'Mandya', 1),
(250, 11, 'Dehri-on-Sone', 1),
(251, 13, 'Madanapalle', 1),
(252, 14, 'Malerkotla', 1),
(253, 10, 'Lalitpur', 1),
(254, 11, 'Bettiah', 1),
(255, 7, 'Pollachi', 1),
(256, 14, 'Khanna', 1),
(257, 12, 'Neemuch', 1),
(258, 15, 'Palwal', 1),
(259, 5, 'Palanpur', 1),
(260, 13, 'Guntakal', 1),
(261, 8, 'Nabadwip', 1),
(262, 4, 'Udupi', 1),
(263, 18, 'Jagdalpur', 1),
(264, 11, 'Motihari', 1),
(265, 10, 'Pilibhit', 1),
(266, 31, 'Dimapur', 1),
(267, 14, 'Mohali', 1),
(268, 9, 'Sadulpur', 1),
(269, 7, 'Rajapalayam', 1),
(270, 13, 'Dharmavaram', 1),
(271, 23, 'Kashipur', 1),
(272, 7, 'Sivakasi', 1),
(273, 8, 'Darjiling', 1),
(274, 4, 'Chikkamagaluru', 1),
(275, 13, 'Gudivada', 1),
(276, 21, 'Baleshwar Town', 1),
(277, 6, 'Mancherial', 1),
(278, 13, 'Srikakulam', 1),
(279, 6, 'Adilabad', 1),
(280, 2, 'Yavatmal', 1),
(281, 14, 'Barnala', 1),
(282, 19, 'Nagaon', 1),
(283, 13, 'Narasaraopet', 1),
(284, 18, 'Raigarh', 1),
(285, 23, 'Roorkee', 1),
(286, 5, 'Valsad', 1),
(287, 18, 'Ambikapur', 1),
(288, 17, 'Giridih', 1),
(289, 10, 'Chandausi', 1),
(290, 8, 'Purulia', 1),
(291, 5, 'Patan', 1),
(292, 11, 'Bagaha', 1),
(293, 10, 'Hardoi ', 1),
(294, 2, 'Achalpur', 1),
(295, 2, 'Osmanabad', 1),
(296, 5, 'Deesa', 1),
(297, 2, 'Nandurbar', 1),
(298, 10, 'Azamgarh', 1),
(299, 17, 'Ramgarh', 1),
(300, 14, 'Firozpur', 1),
(301, 21, 'Baripada Town', 1),
(302, 4, 'Karwar', 1),
(303, 11, 'Siwan', 1),
(304, 13, 'Rajampet', 1),
(305, 7, 'Pudukkottai', 1),
(306, 16, 'Anantnag', 1),
(307, 13, 'Tadpatri', 1),
(308, 2, 'Satara', 1),
(309, 21, 'Bhadrak', 1),
(310, 11, 'Kishanganj', 1),
(311, 6, 'Suryapet', 1),
(312, 2, 'Wardha', 1),
(313, 4, 'Ranebennuru', 1),
(314, 5, 'Amreli', 1),
(315, 7, 'Neyveli (TS)', 1),
(316, 11, 'Jamalpur', 1),
(317, 32, 'Marmagao', 1),
(318, 2, 'Udgir', 1),
(319, 13, 'Tadepalligudem', 1),
(320, 7, 'Nagapattinam', 1),
(321, 11, 'Buxar', 1),
(322, 2, 'Aurangabad', 1),
(323, 11, 'Jehanabad', 1),
(324, 14, 'Phagwara', 1),
(325, 10, 'Khair', 1),
(326, 9, 'Sawai Madhopur', 1),
(327, 14, 'Kapurthala', 1),
(328, 13, 'Chilakaluripet', 1),
(329, 11, 'Aurangabad', 1),
(330, 22, 'Malappuram', 1),
(331, 15, 'Rewari', 1),
(332, 9, 'Nagaur', 1),
(333, 10, 'Sultanpur', 1),
(334, 12, 'Nagda', 1),
(335, 33, 'Port Blair', 1),
(336, 11, 'Lakhisarai', 1),
(337, 32, 'Panaji', 1),
(338, 19, 'Tinsukia', 1),
(339, 12, 'Itarsi', 1),
(340, 31, 'Kohima', 1),
(341, 21, 'Balangir', 1),
(342, 11, 'Nawada', 1),
(343, 21, 'Jharsuguda', 1),
(344, 6, 'Jagtial', 1),
(345, 7, 'Viluppuram', 1),
(346, 2, 'Amalner', 1),
(347, 14, 'Zirakpur', 1),
(348, 10, 'Tanda', 1),
(349, 7, 'Tiruchengode', 1),
(350, 10, 'Nagina', 1),
(351, 13, 'Yemmiganur', 1),
(352, 7, 'Vaniyambadi', 1),
(353, 12, 'Sarni', 1),
(354, 7, 'Theni Allinagaram', 1),
(355, 32, 'Margao', 1),
(356, 2, 'Akot', 1),
(357, 12, 'Sehore', 1),
(358, 12, 'Mhow Cantonment', 1),
(359, 14, 'Kot Kapura', 1),
(360, 9, 'Makrana', 1),
(361, 2, 'Pandharpur', 1),
(362, 6, 'Miryalaguda', 1),
(363, 10, 'Shamli', 1),
(364, 12, 'Seoni', 1),
(365, 4, 'Ranibennur', 1),
(366, 13, 'Kadiri', 1),
(367, 2, 'Shrirampur', 1),
(368, 23, 'Rudrapur', 1),
(369, 2, 'Parli', 1),
(370, 10, 'Najibabad', 1),
(371, 6, 'Nirmal', 1),
(372, 7, 'Udhagamandalam', 1),
(373, 10, 'Shikohabad', 1),
(374, 17, 'Jhumri Tilaiya', 1),
(375, 7, 'Aruppukkottai', 1),
(376, 22, 'Ponnani', 1),
(377, 11, 'Jamui', 1),
(378, 11, 'Sitamarhi', 1),
(379, 13, 'Chirala', 1),
(380, 5, 'Anjar', 1),
(381, 24, 'Karaikal', 1),
(382, 15, 'Hansi', 1),
(383, 13, 'Anakapalle', 1),
(384, 18, 'Mahasamund', 1),
(385, 14, 'Faridkot', 1),
(386, 17, 'Saunda', 1),
(387, 5, 'Dhoraji', 1),
(388, 7, 'Paramakudi', 1),
(389, 12, 'Balaghat', 1),
(390, 9, 'Sujangarh', 1),
(391, 5, 'Khambhat', 1),
(392, 14, 'Muktsar', 1),
(393, 14, 'Rajpura', 1),
(394, 13, 'Kavali', 1),
(395, 18, 'Dhamtari', 1),
(396, 12, 'Ashok Nagar', 1),
(397, 9, 'Sardarshahar', 1),
(398, 5, 'Mahuva', 1),
(399, 21, 'Bargarh', 1),
(400, 6, 'Kamareddy', 1),
(401, 17, 'Sahibganj', 1),
(402, 6, 'Kothagudem', 1),
(403, 4, 'Ramanagaram', 1),
(404, 4, 'Gokak', 1),
(405, 12, 'Tikamgarh', 1),
(406, 11, 'Araria', 1),
(407, 23, 'Rishikesh', 1),
(408, 12, 'Shahdol', 1),
(409, 17, 'Medininagar (Daltonganj)', 1),
(410, 7, 'Arakkonam', 1),
(411, 2, 'Washim', 1),
(412, 14, 'Sangrur', 1),
(413, 6, 'Bodhan', 1),
(414, 14, 'Fazilka', 1),
(415, 13, 'Palacole', 1),
(416, 5, 'Keshod', 1),
(417, 13, 'Sullurpeta', 1),
(418, 5, 'Wadhwan', 1),
(419, 14, 'Gurdaspur', 1),
(420, 22, 'Vatakara', 1),
(421, 28, 'Tura', 1),
(422, 15, 'Narnaul', 1),
(423, 14, 'Kharar', 1),
(424, 4, 'Yadgir', 1),
(425, 2, 'Ambejogai', 1),
(426, 5, 'Ankleshwar', 1),
(427, 5, 'Savarkundla', 1),
(428, 21, 'Paradip', 1),
(429, 7, 'Virudhachalam', 1),
(430, 22, 'Kanhangad', 1),
(431, 5, 'Kadi', 1),
(432, 7, 'Srivilliputhur', 1),
(433, 14, 'Gobindgarh', 1),
(434, 7, 'Tindivanam', 1),
(435, 14, 'Mansa', 1),
(436, 22, 'Taliparamba', 1),
(437, 2, 'Manmad', 1),
(438, 13, 'Tanuku', 1),
(439, 13, 'Rayachoti', 1),
(440, 7, 'Virudhunagar', 1),
(441, 22, 'Koyilandy', 1),
(442, 19, 'Jorhat', 1),
(443, 7, 'Karur', 1),
(444, 7, 'Valparai', 1),
(445, 13, 'Srikalahasti', 1),
(446, 22, 'Neyyattinkara', 1),
(447, 13, 'Bapatla', 1),
(448, 15, 'Fatehabad', 1),
(449, 14, 'Malout', 1),
(450, 7, 'Sankarankovil', 1),
(451, 7, 'Tenkasi', 1),
(452, 2, 'Ratnagiri', 1),
(453, 4, 'Rabkavi Banhatti', 1),
(454, 10, 'Sikandrabad', 1),
(455, 17, 'Chaibasa', 1),
(456, 18, 'Chirmiri', 1),
(457, 6, 'Palwancha', 1),
(458, 21, 'Bhawanipatna', 1),
(459, 22, 'Kayamkulam', 1),
(460, 12, 'Pithampur', 1),
(461, 14, 'Nabha', 1),
(462, 10, 'Shahabad, Hardoi', 1),
(463, 21, 'Dhenkanal', 1),
(464, 2, 'Uran Islampur', 1),
(465, 11, 'Gopalganj', 1),
(466, 19, 'Bongaigaon City', 1),
(467, 7, 'Palani', 1),
(468, 2, 'Pusad', 1),
(469, 16, 'Sopore', 1),
(470, 10, 'Pilkhuwa', 1),
(471, 14, 'Tarn Taran', 1),
(472, 10, 'Renukoot', 1),
(473, 6, 'Mandamarri', 1),
(474, 4, 'Shahabad', 1),
(475, 21, 'Barbil', 1),
(476, 6, 'Koratla', 1),
(477, 11, 'Madhubani', 1),
(478, 8, 'Arambagh', 1),
(479, 15, 'Gohana', 1),
(480, 9, 'Ladnu', 1),
(481, 7, 'Pattukkottai', 1),
(482, 4, 'Sirsi', 1),
(483, 6, 'Sircilla', 1),
(484, 8, 'Tamluk', 1),
(485, 14, 'Jagraon', 1),
(486, 8, 'AlipurdUrban Agglomerationr', 1),
(487, 12, 'Alirajpur', 1),
(488, 6, 'Tandur', 1),
(489, 13, 'Naidupet', 1),
(490, 7, 'Tirupathur', 1),
(491, 15, 'Tohana', 1),
(492, 9, 'Ratangarh', 1),
(493, 19, 'Dhubri', 1),
(494, 11, 'Masaurhi', 1),
(495, 5, 'Visnagar', 1),
(496, 10, 'Vrindavan', 1),
(497, 9, 'Nokha', 1),
(498, 13, 'Nagari', 1),
(499, 15, 'Narwana', 1),
(500, 7, 'Ramanathapuram', 1),
(501, 10, 'Ujhani', 1),
(502, 11, 'Samastipur', 1),
(503, 10, 'Laharpur', 1),
(504, 2, 'Sangamner', 1),
(505, 9, 'Nimbahera', 1),
(506, 6, 'Siddipet', 1),
(507, 8, 'Suri', 1),
(508, 19, 'Diphu', 1),
(509, 8, 'Jhargram', 1),
(510, 2, 'Shirpur-Warwade', 1),
(511, 10, 'Tilhar', 1),
(512, 4, 'Sindhnur', 1),
(513, 7, 'Udumalaipettai', 1),
(514, 2, 'Malkapur', 1),
(515, 6, 'Wanaparthy', 1),
(516, 13, 'Gudur', 1),
(517, 21, 'Kendujhar', 1),
(518, 12, 'Mandla', 1),
(519, 30, 'Mandi', 1),
(520, 22, 'Nedumangad', 1),
(521, 19, 'North Lakhimpur', 1),
(522, 13, 'Vinukonda', 1),
(523, 4, 'Tiptur', 1),
(524, 7, 'Gobichettipalayam', 1),
(525, 21, 'Sunabeda', 1),
(526, 2, 'Wani', 1),
(527, 5, 'Upleta', 1),
(528, 13, 'Narasapuram', 1),
(529, 13, 'Nuzvid', 1),
(530, 19, 'Tezpur', 1),
(531, 5, 'Una', 1),
(532, 13, 'Markapur', 1),
(533, 12, 'Sheopur', 1),
(534, 7, 'Thiruvarur', 1),
(535, 5, 'Sidhpur', 1),
(536, 10, 'Sahaswan', 1),
(537, 9, 'Suratgarh', 1),
(538, 12, 'Shajapur', 1),
(539, 21, 'Rayagada', 1),
(540, 2, 'Lonavla', 1),
(541, 13, 'Ponnur', 1),
(542, 6, 'Kagaznagar', 1),
(543, 6, 'Gadwal', 1),
(544, 18, 'Bhatapara', 1),
(545, 13, 'Kandukur', 1),
(546, 6, 'Sangareddy', 1),
(547, 5, 'Unjha', 1),
(548, 27, 'Lunglei', 1),
(549, 19, 'Karimganj', 1),
(550, 22, 'Kannur', 1),
(551, 13, 'Bobbili', 1),
(552, 11, 'Mokameh', 1),
(553, 2, 'Talegaon Dabhade', 1),
(554, 2, 'Anjangaon', 1),
(555, 5, 'Mangrol', 1),
(556, 14, 'Sunam', 1),
(557, 8, 'Gangarampur', 1),
(558, 7, 'Thiruvallur', 1),
(559, 22, 'Tirur', 1),
(560, 10, 'Rath', 1),
(561, 21, 'Jatani', 1),
(562, 5, 'Viramgam', 1),
(563, 9, 'Rajsamand', 1),
(564, 24, 'Yanam', 1),
(565, 22, 'Kottayam', 1),
(566, 7, 'Panruti', 1),
(567, 14, 'Dhuri', 1),
(568, 7, 'Namakkal', 1),
(569, 22, 'Kasaragod', 1),
(570, 5, 'Modasa', 1),
(571, 13, 'Rayadurg', 1),
(572, 11, 'Supaul', 1),
(573, 22, 'Kunnamkulam', 1),
(574, 2, 'Umred', 1),
(575, 6, 'Bellampalle', 1),
(576, 19, 'Sibsagar', 1),
(577, 15, 'Mandi Dabwali', 1),
(578, 22, 'Ottappalam', 1),
(579, 11, 'Dumraon', 1),
(580, 13, 'Samalkot', 1),
(581, 13, 'Jaggaiahpet', 1),
(582, 19, '32lpara', 1),
(583, 13, 'Tuni', 1),
(584, 9, 'Lachhmangarh', 1),
(585, 6, 'Bhongir', 1),
(586, 13, 'Amalapuram', 1),
(587, 14, 'Firozpur Cantt.', 1),
(588, 6, 'Vikarabad', 1),
(589, 22, 'Thiruvalla', 1),
(590, 10, 'Sherkot', 1),
(591, 2, 'Palghar', 1),
(592, 2, 'Shegaon', 1),
(593, 6, 'Jangaon', 1),
(594, 13, 'Bheemunipatnam', 1),
(595, 12, 'Panna', 1),
(596, 22, 'Thodupuzha', 1),
(597, 16, 'KathUrban Agglomeration', 1),
(598, 5, 'Palitana', 1),
(599, 11, 'Arwal', 1),
(600, 13, 'Venkatagiri', 1),
(601, 10, 'Kalpi', 1),
(602, 9, 'Rajgarh (Churu)', 1),
(603, 13, 'Sattenapalle', 1),
(604, 4, 'Arsikere', 1),
(605, 2, 'Ozar', 1),
(606, 7, 'Thirumangalam', 1),
(607, 5, 'Petlad', 1),
(608, 9, 'Nasirabad', 1),
(609, 2, 'Phaltan', 1),
(610, 8, 'Rampurhat', 1),
(611, 4, 'Nanjangud', 1),
(612, 11, 'Forbesganj', 1),
(613, 10, 'Tundla', 1),
(614, 11, 'BhabUrban Agglomeration', 1),
(615, 4, 'Sagara', 1),
(616, 13, 'Pithapuram', 1),
(617, 4, 'Sira', 1),
(618, 6, 'Bhadrachalam', 1),
(619, 15, 'Charkhi Dadri', 1),
(620, 17, 'Chatra', 1),
(621, 13, 'Palasa Kasibugga', 1),
(622, 9, 'Nohar', 1),
(623, 2, 'Yevla', 1),
(624, 14, 'Sirhind Fatehgarh Sahib', 1),
(625, 6, 'Bhainsa', 1),
(626, 13, 'Parvathipuram', 1),
(627, 2, 'Shahade', 1),
(628, 22, 'Chalakudy', 1),
(629, 11, 'Narkatiaganj', 1),
(630, 5, 'Kapadvanj', 1),
(631, 13, 'Macherla', 1),
(632, 12, 'Raghogarh-Vijaypur', 1),
(633, 14, 'Rupnagar', 1),
(634, 11, 'Naugachhia', 1),
(635, 12, 'Sendhwa', 1),
(636, 21, 'Byasanagar', 1),
(637, 10, 'Sandila', 1),
(638, 13, 'Gooty', 1),
(639, 13, 'Salur', 1),
(640, 10, 'Nanpara', 1),
(641, 10, 'Sardhana', 1),
(642, 2, 'Vita', 1),
(643, 17, 'Gumia', 1),
(644, 4, 'Puttur', 1),
(645, 14, 'Jalandhar Cantt.', 1),
(646, 10, 'Nehtaur', 1),
(647, 22, 'Changanassery', 1),
(648, 13, 'Mandapeta', 1),
(649, 17, 'Dumka', 1),
(650, 10, 'Seohara', 1),
(651, 2, 'Umarkhed', 1),
(652, 17, 'Madhupur', 1),
(653, 7, 'Vikramasingapuram', 1),
(654, 22, 'Punalur', 1),
(655, 21, 'Kendrapara', 1),
(656, 5, 'Sihor', 1),
(657, 7, 'Nellikuppam', 1),
(658, 14, 'Samana', 1),
(659, 2, 'Warora', 1),
(660, 22, 'Nilambur', 1),
(661, 7, 'Rasipuram', 1),
(662, 23, 'Ramnagar', 1),
(663, 13, 'Jammalamadugu', 1),
(664, 14, 'Nawanshahr', 1),
(665, 29, 'Thoubal', 1),
(666, 4, 'Athni', 1),
(667, 22, 'Cherthala', 1),
(668, 12, 'Sidhi', 1),
(669, 6, 'Farooqnagar', 1),
(670, 13, 'Peddapuram', 1),
(671, 17, 'Chirkunda', 1),
(672, 2, 'Pachora', 1),
(673, 11, 'Madhepura', 1),
(674, 23, 'Pithoragarh', 1),
(675, 2, 'Tumsar', 1),
(676, 9, 'Phalodi', 1),
(677, 7, 'Tiruttani', 1),
(678, 14, 'Rampura Phul', 1),
(679, 22, 'Perinthalmanna', 1),
(680, 10, 'Padrauna', 1),
(681, 12, 'Pipariya', 1),
(682, 18, 'Dalli-Rajhara', 1),
(683, 13, 'Punganur', 1),
(684, 22, 'Mattannur', 1),
(685, 10, 'Mathura', 1),
(686, 10, 'Thakurdwara', 1),
(687, 7, 'Nandivaram-Guduvancheri', 1),
(688, 4, 'Mulbagal', 1),
(689, 2, 'Manjlegaon', 1),
(690, 5, 'Wankaner', 1),
(691, 2, 'Sillod', 1),
(692, 13, 'Nidadavole', 1),
(693, 4, 'Surapura', 1),
(694, 21, 'Rajagangapur', 1),
(695, 11, 'Sheikhpura', 1),
(696, 21, 'Parlakhemundi', 1),
(697, 8, 'Kalimpong', 1),
(698, 4, 'Siruguppa', 1),
(699, 2, 'Arvi', 1),
(700, 5, 'Limbdi', 1),
(701, 19, 'Barpeta', 1),
(702, 23, 'Manglaur', 1),
(703, 13, 'Repalle', 1),
(704, 4, 'Mudhol', 1),
(705, 12, 'Shujalpur', 1),
(706, 5, 'Mandvi', 1),
(707, 5, 'Thangadh', 1),
(708, 12, 'Sironj', 1),
(709, 2, 'Nandura', 1),
(710, 22, 'Shoranur', 1),
(711, 9, 'Nathdwara', 1),
(712, 7, 'Periyakulam', 1),
(713, 11, 'Sultanganj', 1),
(714, 6, 'Medak', 1),
(715, 6, 'Narayanpet', 1),
(716, 11, 'Raxaul Bazar', 1),
(717, 16, 'Rajauri', 1),
(718, 7, 'Pernampattu', 1),
(719, 23, 'Nainital', 1),
(720, 13, 'Ramachandrapuram', 1),
(721, 2, 'Vaijapur', 1),
(722, 14, 'Nangal', 1),
(723, 4, 'Sidlaghatta', 1),
(724, 16, 'Punch', 1),
(725, 12, 'Pandhurna', 1),
(726, 2, 'Wadgaon Road', 1),
(727, 21, 'Talcher', 1),
(728, 22, 'Varkala', 1),
(729, 9, 'Pilani', 1),
(730, 12, 'Nowgong', 1),
(731, 18, 'Naila Janjgir', 1),
(732, 32, 'Mapusa', 1),
(733, 7, 'Vellakoil', 1),
(734, 9, 'Merta City', 1),
(735, 7, 'Sivaganga', 1),
(736, 12, 'Mandideep', 1),
(737, 2, 'Sailu', 1),
(738, 5, 'Vyara', 1),
(739, 13, 'Kovvur', 1),
(740, 7, 'Vadalur', 1),
(741, 10, 'Nawabganj', 1),
(742, 5, 'Padra', 1),
(743, 8, 'Sainthia', 1),
(744, 10, 'Siana', 1),
(745, 4, 'Shahpur', 1),
(746, 9, 'Sojat', 1),
(747, 10, 'Noorpur', 1),
(748, 22, 'Paravoor', 1),
(749, 2, 'Murtijapur', 1),
(750, 11, 'Ramnagar', 1),
(751, 21, 'Sundargarh', 1),
(752, 8, 'Taki', 1),
(753, 4, 'Saundatti-Yellamma', 1),
(754, 22, 'Pathanamthitta', 1),
(755, 4, 'Wadi', 1),
(756, 7, 'Rameshwaram', 1),
(757, 2, 'Tasgaon', 1),
(758, 10, 'Sikandra Rao', 1),
(759, 12, 'Sihora', 1),
(760, 7, 'Tiruvethipuram', 1),
(761, 13, 'Tiruvuru', 1),
(762, 2, 'Mehkar', 1),
(763, 22, 'Peringathur', 1),
(764, 7, 'Perambalur', 1),
(765, 4, 'Manvi', 1),
(766, 31, 'Zunheboto', 1),
(767, 11, 'Mahnar Bazar', 1),
(768, 22, 'Attingal', 1),
(769, 15, 'Shahbad', 1),
(770, 10, 'Puranpur', 1),
(771, 4, 'Nelamangala', 1),
(772, 14, 'Nakodar', 1),
(773, 5, 'Lunawada', 1),
(774, 8, 'Murshidabad', 1),
(775, 24, 'Mahe', 1),
(776, 19, 'Lanka', 1),
(777, 10, 'Rudauli', 1),
(778, 31, 'Tuensang', 1),
(779, 4, 'Lakshmeshwar', 1),
(780, 14, 'Zira', 1),
(781, 2, 'Yawal', 1),
(782, 10, 'Thana Bhawan', 1),
(783, 4, 'Ramdurg', 1),
(784, 2, 'Pulgaon', 1),
(785, 6, 'Sadasivpet', 1),
(786, 4, 'Nargund', 1),
(787, 9, 'Neem-Ka-Thana', 1),
(788, 8, 'Memari', 1),
(789, 2, 'Nilanga', 1),
(790, 34, 'Naharlagun', 1),
(791, 17, 'Pakaur', 1),
(792, 2, 'Wai', 1),
(793, 4, 'Tarikere', 1),
(794, 4, 'Malavalli', 1),
(795, 12, 'Raisen', 1),
(796, 12, 'Lahar', 1),
(797, 13, 'Uravakonda', 1),
(798, 4, 'Savanur', 1),
(799, 9, 'Sirohi', 1),
(800, 16, 'Udhampur', 1),
(801, 2, 'Umarga', 1),
(802, 9, 'Pratapgarh', 1),
(803, 4, 'Lingsugur', 1),
(804, 7, 'Usilampatti', 1),
(805, 10, 'Palia Kalan', 1),
(806, 31, 'Wokha', 1),
(807, 5, 'Rajpipla', 1),
(808, 4, 'Vijayapura', 1),
(809, 9, 'Rawatbhata', 1),
(810, 9, 'Sangaria', 1),
(811, 2, 'Paithan', 1),
(812, 2, 'Rahuri', 1),
(813, 14, 'Patti', 1),
(814, 10, 'Zaidpur', 1),
(815, 9, 'Lalsot', 1),
(816, 12, 'Maihar', 1),
(817, 7, 'Vedaranyam', 1),
(818, 2, 'Nawapur', 1),
(819, 30, 'Solan', 1),
(820, 5, 'Vapi', 1),
(821, 12, 'Sanawad', 1),
(822, 11, 'Warisaliganj', 1),
(823, 11, 'Revelganj', 1),
(824, 12, 'Sabalgarh', 1),
(825, 2, 'Tuljapur', 1),
(826, 17, 'Simdega', 1),
(827, 17, 'Musabani', 1),
(828, 22, 'Kodungallur', 1),
(829, 21, 'Phulabani', 1),
(830, 5, 'Umreth', 1),
(831, 13, 'Narsipatnam', 1),
(832, 10, 'Nautanwa', 1),
(833, 11, 'Rajgir', 1),
(834, 6, 'Yellandu', 1),
(835, 7, 'Sathyamangalam', 1),
(836, 9, 'Pilibanga', 1),
(837, 2, 'Morshi', 1),
(838, 15, 'Pehowa', 1),
(839, 11, 'Sonepur', 1),
(840, 22, 'Pappinisseri', 1),
(841, 10, 'Zamania', 1),
(842, 17, 'Mihijam', 1),
(843, 2, 'Purna', 1),
(844, 7, 'Puliyankudi', 1),
(845, 10, 'Shikarpur, Bulandshahr', 1),
(846, 12, 'Umaria', 1),
(847, 12, 'Porsa', 1),
(848, 10, 'Naugawan Sadat', 1),
(849, 10, 'Fatehpur Sikri', 1),
(850, 6, 'Manuguru', 1),
(851, 25, 'Udaipur', 1),
(852, 9, 'Pipar City', 1),
(853, 21, 'Pattamundai', 1),
(854, 7, 'Nanjikottai', 1),
(855, 9, 'Taranagar', 1),
(856, 13, 'Yerraguntla', 1),
(857, 2, 'Satana', 1),
(858, 11, 'Sherghati', 1),
(859, 4, 'Sankeshwara', 1),
(860, 4, 'Madikeri', 1),
(861, 7, 'Thuraiyur', 1),
(862, 5, 'Sanand', 1),
(863, 5, 'Rajula', 1),
(864, 6, 'Kyathampalle', 1),
(865, 10, 'Shahabad, Rampur', 1),
(866, 18, 'Tilda Newra', 1),
(867, 12, 'Narsinghgarh', 1),
(868, 22, 'Chittur-Thathamangalam', 1),
(869, 12, 'Malaj Khand', 1),
(870, 12, 'Sarangpur', 1),
(871, 10, 'Robertsganj', 1),
(872, 7, 'Sirkali', 1),
(873, 5, 'Radhanpur', 1),
(874, 7, 'Tiruchendur', 1),
(875, 10, 'Utraula', 1),
(876, 17, 'Patratu', 1),
(877, 9, 'Vijainagar, Ajmer', 1),
(878, 7, 'Periyasemur', 1),
(879, 2, 'Pathri', 1),
(880, 10, 'Sadabad', 1),
(881, 4, 'Talikota', 1),
(882, 2, 'Sinnar', 1),
(883, 18, 'Mungeli', 1),
(884, 4, 'Sedam', 1),
(885, 4, 'Shikaripur', 1),
(886, 9, 'Sumerpur', 1),
(887, 7, 'Sattur', 1),
(888, 11, 'Sugauli', 1),
(889, 19, 'Lumding', 1),
(890, 7, 'Vandavasi', 1),
(891, 21, 'Titlagarh', 1),
(892, 2, 'Uchgaon', 1),
(893, 31, 'Mokokchung', 1),
(894, 8, 'Paschim Punropara', 1),
(895, 9, 'Sagwara', 1),
(896, 9, 'Ramganj Mandi', 1),
(897, 8, 'Tarakeswar', 1),
(898, 4, 'Mahalingapura', 1),
(899, 25, 'Dharmanagar', 1),
(900, 5, 'Mahemdabad', 1),
(901, 18, 'Manendragarh', 1),
(902, 2, 'Uran', 1),
(903, 7, 'Tharamangalam', 1),
(904, 7, 'Tirukkoyilur', 1),
(905, 2, 'Pen', 1),
(906, 11, 'Makhdumpur', 1),
(907, 11, 'Maner', 1),
(908, 7, 'Oddanchatram', 1),
(909, 7, 'Palladam', 1),
(910, 12, 'Mundi', 1),
(911, 21, 'Nabarangapur', 1),
(912, 4, 'Mudalagi', 1),
(913, 15, 'Samalkha', 1),
(914, 12, 'Nepanagar', 1),
(915, 2, 'Karjat', 1),
(916, 5, 'Ranavav', 1),
(917, 13, 'Pedana', 1),
(918, 15, 'Pinjore', 1),
(919, 9, 'Lakheri', 1),
(920, 12, 'Pasan', 1),
(921, 13, 'Puttur', 1),
(922, 7, 'Vadakkuvalliyur', 1),
(923, 7, 'Tirukalukundram', 1),
(924, 12, 'Mahidpur', 1),
(925, 23, 'Mussoorie', 1),
(926, 22, 'Muvattupuzha', 1),
(927, 10, 'Rasra', 1),
(928, 9, 'Udaipurwati', 1),
(929, 2, 'Manwath', 1),
(930, 22, 'Adoor', 1),
(931, 7, 'Uthamapalayam', 1),
(932, 2, 'Partur', 1),
(933, 30, 'Nahan', 1),
(934, 15, 'Ladwa', 1),
(935, 19, 'Mankachar', 1),
(936, 28, 'Nongstoin', 1),
(937, 9, 'Losal', 1),
(938, 9, 'Sri Madhopur', 1),
(939, 9, 'Ramngarh', 1),
(940, 22, 'Mavelikkara', 1),
(941, 9, 'Rawatsar', 1),
(942, 9, 'Rajakhera', 1),
(943, 10, 'Lar', 1),
(944, 10, 'Lal Gopalganj Nindaura', 1),
(945, 4, 'Muddebihal', 1),
(946, 10, 'Sirsaganj', 1),
(947, 9, 'Shahpura', 1),
(948, 7, 'Surandai', 1),
(949, 2, 'Sangole', 1),
(950, 4, 'Pavagada', 1),
(951, 5, 'Tharad', 1),
(952, 5, 'Mansa', 1),
(953, 5, 'Umbergaon', 1),
(954, 22, 'Mavoor', 1),
(955, 19, 'Nalbari', 1),
(956, 5, 'Talaja', 1),
(957, 4, 'Malur', 1),
(958, 2, 'Mangrulpir', 1),
(959, 21, 'Soro', 1),
(960, 9, 'Shahpura', 1),
(961, 5, 'Vadnagar', 1),
(962, 9, 'Raisinghnagar', 1),
(963, 4, 'Sindhagi', 1),
(964, 4, 'Sanduru', 1),
(965, 15, 'Sohna', 1),
(966, 5, 'Manavadar', 1),
(967, 10, 'Pihani', 1),
(968, 15, 'Safidon', 1),
(969, 2, 'Risod', 1),
(970, 11, 'Rosera', 1),
(971, 7, 'Sankari', 1),
(972, 9, 'Malpura', 1),
(973, 8, 'Sonamukhi', 1),
(974, 10, 'Shamsabad, Agra', 1),
(975, 11, 'Nokha', 1),
(976, 8, 'PandUrban Agglomeration', 1),
(977, 8, 'Mainaguri', 1),
(978, 4, 'Afzalpur', 1),
(979, 2, 'Shirur', 1),
(980, 5, 'Salaya', 1),
(981, 7, 'Shenkottai', 1),
(982, 25, 'Pratapgarh', 1),
(983, 7, 'Vadipatti', 1),
(984, 6, 'Nagarkurnool', 1),
(985, 2, 'Savner', 1),
(986, 2, 'Sasvad', 1),
(987, 10, 'Rudrapur', 1),
(988, 10, 'Soron', 1),
(989, 7, 'Sholingur', 1),
(990, 2, 'Pandharkaoda', 1),
(991, 22, 'Perumbavoor', 1),
(992, 4, 'Maddur', 1),
(993, 9, 'Nadbai', 1),
(994, 2, 'Talode', 1),
(995, 2, 'Shrigonda', 1),
(996, 4, 'Madhugiri', 1),
(997, 4, 'Tekkalakote', 1),
(998, 12, 'Seoni-Malwa', 1),
(999, 2, 'Shirdi', 1),
(1000, 10, 'SUrban Agglomerationr', 1),
(1001, 4, 'Terdal', 1),
(1002, 2, 'Raver', 1),
(1003, 7, 'Tirupathur', 1),
(1004, 15, 'Taraori', 1),
(1005, 2, 'Mukhed', 1),
(1006, 7, 'Manachanallur', 1),
(1007, 12, 'Rehli', 1),
(1008, 9, 'Sanchore', 1),
(1009, 2, 'Rajura', 1),
(1010, 11, 'Piro', 1),
(1011, 4, 'Mudabidri', 1),
(1012, 2, 'Vadgaon Kasba', 1),
(1013, 9, 'Nagar', 1),
(1014, 5, 'Vijapur', 1),
(1015, 7, 'Viswanatham', 1),
(1016, 7, 'Polur', 1),
(1017, 7, 'Panagudi', 1),
(1018, 12, 'Manawar', 1),
(1019, 23, 'Tehri', 1),
(1020, 10, 'Samdhan', 1),
(1021, 5, 'Pardi', 1),
(1022, 12, 'Rahatgarh', 1),
(1023, 12, 'Panagar', 1),
(1024, 7, 'Uthiramerur', 1),
(1025, 2, 'Tirora', 1),
(1026, 19, 'Rangia', 1),
(1027, 10, 'Sahjanwa', 1),
(1028, 12, 'Wara Seoni', 1),
(1029, 4, 'Magadi', 1),
(1030, 9, 'Rajgarh (Alwar)', 1),
(1031, 11, 'Rafiganj', 1),
(1032, 12, 'Tarana', 1),
(1033, 10, 'Rampur Maniharan', 1),
(1034, 9, 'Sheoganj', 1),
(1035, 14, 'Raikot', 1),
(1036, 23, 'Pauri', 1),
(1037, 10, 'Sumerpur', 1),
(1038, 4, 'Navalgund', 1),
(1039, 10, 'Shahganj', 1),
(1040, 11, 'Marhaura', 1),
(1041, 10, 'Tulsipur', 1),
(1042, 9, 'Sadri', 1),
(1043, 7, 'Thiruthuraipoondi', 1),
(1044, 4, 'Shiggaon', 1),
(1045, 7, 'Pallapatti', 1),
(1046, 15, 'Mahendragarh', 1),
(1047, 12, 'Sausar', 1),
(1048, 7, 'Ponneri', 1),
(1049, 2, 'Mahad', 1),
(1050, 17, 'Lohardaga', 1),
(1051, 10, 'Tirwaganj', 1),
(1052, 19, 'Margherita', 1),
(1053, 30, 'Sundarnagar', 1),
(1054, 12, 'Rajgarh', 1),
(1055, 19, 'Mangaldoi', 1),
(1056, 13, 'Renigunta', 1),
(1057, 14, 'Longowal', 1),
(1058, 15, 'Ratia', 1),
(1059, 7, 'Lalgudi', 1),
(1060, 4, 'Shrirangapattana', 1),
(1061, 12, 'Niwari', 1),
(1062, 7, 'Natham', 1),
(1063, 7, 'Unnamalaikadai', 1),
(1064, 10, 'PurqUrban Agglomerationzi', 1),
(1065, 10, 'Shamsabad, Farrukhabad', 1),
(1066, 11, 'Mirganj', 1),
(1067, 9, 'Todaraisingh', 1),
(1068, 10, 'Warhapur', 1),
(1069, 13, 'Rajam', 1),
(1070, 14, 'Urmar Tanda', 1),
(1071, 2, 'Lonar', 1),
(1072, 10, 'Powayan', 1),
(1073, 7, 'P.N.Patti', 1),
(1074, 30, 'Palampur', 1),
(1075, 13, 'Srisailam Project (Right Flank Colony) Township', 1),
(1076, 4, 'Sindagi', 1),
(1077, 10, 'Sandi', 1),
(1078, 22, 'Vaikom', 1),
(1079, 8, 'Malda', 1),
(1080, 7, 'Tharangambadi', 1),
(1081, 4, 'Sakaleshapura', 1),
(1082, 11, 'Lalganj', 1),
(1083, 21, 'Malkangiri', 1),
(1084, 5, 'Rapar', 1),
(1085, 12, 'Mauganj', 1),
(1086, 9, 'Todabhim', 1),
(1087, 4, 'Srinivaspur', 1),
(1088, 11, 'Murliganj', 1),
(1089, 9, 'Reengus', 1),
(1090, 2, 'Sawantwadi', 1),
(1091, 7, 'Tittakudi', 1),
(1092, 29, 'Lilong', 1),
(1093, 9, 'Rajaldesar', 1),
(1094, 2, 'Pathardi', 1),
(1095, 10, 'Achhnera', 1),
(1096, 7, 'Pacode', 1),
(1097, 10, 'Naraura', 1),
(1098, 10, 'Nakur', 1),
(1099, 22, 'Palai', 1),
(1100, 14, 'Morinda, India', 1),
(1101, 12, 'Manasa', 1),
(1102, 12, 'Nainpur', 1),
(1103, 10, 'Sahaspur', 1),
(1104, 2, 'Pauni', 1),
(1105, 12, 'Prithvipur', 1),
(1106, 2, 'Ramtek', 1),
(1107, 19, 'Silapathar', 1),
(1108, 5, 'Songadh', 1),
(1109, 10, 'Safipur', 1),
(1110, 12, 'Sohagpur', 1),
(1111, 2, 'Mul', 1),
(1112, 9, 'Sadulshahar', 1),
(1113, 14, 'Phillaur', 1),
(1114, 9, 'Sambhar', 1),
(1115, 9, 'Prantij', 1),
(1116, 23, 'Nagla', 1),
(1117, 14, 'Pattran', 1),
(1118, 9, 'Mount Abu', 1),
(1119, 10, 'Reoti', 1),
(1120, 17, 'Tenu dam-cum-Kathhara', 1),
(1121, 8, 'Panchla', 1),
(1122, 23, 'Sitarganj', 1),
(1123, 34, 'Pasighat', 1),
(1124, 11, 'Motipur', 1),
(1125, 7, 'O\' Valley', 1),
(1126, 8, 'Raghunathpur', 1),
(1127, 7, 'Suriyampalayam', 1),
(1128, 14, 'Qadian', 1),
(1129, 21, 'Rairangpur', 1),
(1130, 35, 'Silvassa', 1),
(1131, 12, 'Nowrozabad (Khodargama)', 1),
(1132, 9, 'Mangrol', 1),
(1133, 2, 'Soyagaon', 1),
(1134, 14, 'Sujanpur', 1),
(1135, 11, 'Manihari', 1),
(1136, 10, 'Sikanderpur', 1),
(1137, 2, 'Mangalvedhe', 1),
(1138, 9, 'Phulera', 1),
(1139, 4, 'Ron', 1),
(1140, 7, 'Sholavandan', 1),
(1141, 10, 'Saidpur', 1),
(1142, 12, 'Shamgarh', 1),
(1143, 7, 'Thammampatti', 1),
(1144, 12, 'Maharajpur', 1),
(1145, 12, 'Multai', 1),
(1146, 14, 'Mukerian', 1),
(1147, 10, 'Sirsi', 1),
(1148, 10, 'Purwa', 1),
(1149, 11, 'Sheohar', 1),
(1150, 7, 'Namagiripettai', 1),
(1151, 10, 'Parasi', 1),
(1152, 5, 'Lathi', 1),
(1153, 10, 'Lalganj', 1),
(1154, 2, 'Narkhed', 1),
(1155, 8, 'Mathabhanga', 1),
(1156, 2, 'Shendurjana', 1),
(1157, 7, 'Peravurani', 1),
(1158, 19, 'Mariani', 1),
(1159, 10, 'Phulpur', 1),
(1160, 15, 'Rania', 1),
(1161, 12, 'Pali', 1),
(1162, 12, 'Pachore', 1),
(1163, 7, 'Parangipettai', 1),
(1164, 7, 'Pudupattinam', 1),
(1165, 22, 'Panniyannur', 1),
(1166, 11, 'Maharajganj', 1),
(1167, 12, 'Rau', 1),
(1168, 8, 'Monoharpur', 1),
(1169, 9, 'Mandawa', 1),
(1170, 19, 'Marigaon', 1),
(1171, 7, 'Pallikonda', 1),
(1172, 9, 'Pindwara', 1),
(1173, 10, 'Shishgarh', 1),
(1174, 2, 'Patur', 1),
(1175, 29, 'Mayang Imphal', 1),
(1176, 12, 'Mhowgaon', 1),
(1177, 22, 'Guruvayoor', 1),
(1178, 2, 'Mhaswad', 1),
(1179, 10, 'Sahawar', 1),
(1180, 7, 'Sivagiri', 1),
(1181, 4, 'Mundargi', 1),
(1182, 7, 'Punjaipugalur', 1),
(1183, 25, 'Kailasahar', 1),
(1184, 10, 'Samthar', 1),
(1185, 18, 'Sakti', 1),
(1186, 4, 'Sadalagi', 1),
(1187, 11, 'Silao', 1),
(1188, 9, 'Mandalgarh', 1),
(1189, 2, 'Loha', 1),
(1190, 10, 'Pukhrayan', 1),
(1191, 7, 'Padmanabhapuram', 1),
(1192, 25, 'Belonia', 1),
(1193, 27, 'Saiha', 1),
(1194, 8, 'Srirampore', 1),
(1195, 14, 'Talwara', 1),
(1196, 22, 'Puthuppally', 1),
(1197, 25, 'Khowai', 1),
(1198, 12, 'Vijaypur', 1),
(1199, 9, 'Takhatgarh', 1),
(1200, 7, 'Thirupuvanam', 1),
(1201, 8, 'Adra', 1),
(1202, 4, 'Piriyapatna', 1),
(1203, 10, 'Obra', 1),
(1204, 5, 'Adalaj', 1),
(1205, 2, 'Nandgaon', 1),
(1206, 11, 'Barh', 1),
(1207, 5, 'Chhapra', 1),
(1208, 22, 'Panamattom', 1),
(1209, 10, 'Niwai', 1),
(1210, 23, 'Bageshwar', 1),
(1211, 21, 'Tarbha', 1),
(1212, 4, 'Adyar', 1),
(1213, 12, 'Narsinghgarh', 1),
(1214, 2, 'Warud', 1),
(1215, 11, 'Asarganj', 1),
(1216, 15, 'Sarsod', 1),
(1217, 0, 'Name', 0),
(1218, 0, 'Name', 0),
(1219, 0, 'city', 0),
(1220, 36, 'Airdrie', 1),
(1221, 36, 'Brooks', 1),
(1222, 36, 'Calgary', 1),
(1223, 36, 'Camrose', 1),
(1224, 36, 'Chestermere', 1),
(1225, 36, 'Cold Lake', 1),
(1226, 36, 'Edmonton', 1),
(1227, 36, 'Fort 46', 1),
(1228, 36, 'Grande Prairie', 1),
(1229, 36, 'Lacombe', 1),
(1230, 36, 'Leduc', 1),
(1231, 36, 'Lethbridge', 1),
(1232, 36, 'Lloydminster (part)', 1),
(1233, 36, 'Medicine Hat', 1),
(1234, 36, 'Red Deer', 1),
(1235, 36, 'Spruce Grove', 1),
(1236, 36, 'St. Albert', 1),
(1237, 36, 'Wetaskiwin', 1),
(1238, 37, 'Abbotsford', 2),
(1239, 37, 'Armstrong', 2),
(1240, 37, 'Burnaby', 2),
(1241, 37, 'Campbell River', 2),
(1242, 37, 'Castlegar', 2),
(1243, 37, 'Chilliwack', 2),
(1244, 37, 'Colwood', 2),
(1245, 37, 'Coquitlam', 2),
(1246, 37, 'Courtenay', 2),
(1247, 37, 'Cranbrook', 2),
(1248, 37, 'Dawson Creek', 2),
(1249, 37, 'Duncan', 2),
(1250, 37, 'Enderby', 2),
(1251, 37, 'Fernie', 2),
(1252, 37, 'Fort St. John', 2),
(1253, 37, 'Grand Forks', 2),
(1254, 37, 'Greenwood', 2),
(1255, 37, 'Kamloops', 2),
(1256, 37, 'Kelowna', 2),
(1257, 37, 'Kimberley', 2),
(1258, 37, 'Langford', 2),
(1259, 37, 'Langley', 2),
(1260, 37, 'Maple Ridge', 2),
(1261, 37, 'Merritt', 2),
(1262, 37, 'Nanaimo', 2),
(1263, 37, 'Nelson', 2),
(1264, 37, 'New Westminster', 2),
(1265, 37, 'North Vancouver', 2),
(1266, 37, 'Parksville', 2),
(1267, 37, 'Penticton', 2),
(1268, 37, 'Pitt Meadows', 2),
(1269, 37, 'Port Alberni', 2),
(1270, 37, 'Port Coquitlam', 2),
(1271, 37, 'Port Moody', 2),
(1272, 37, 'Powell River', 2),
(1273, 37, 'Prince George', 2),
(1274, 37, 'Prince Rupert', 2),
(1275, 37, 'Quesnel', 2),
(1276, 37, 'Revelstoke', 2),
(1277, 37, 'Richmond', 2),
(1278, 37, 'Rossland', 2),
(1279, 37, 'Salmon Arm', 2),
(1280, 37, 'Surrey', 2),
(1281, 37, 'Terrace', 2),
(1282, 37, 'Trail', 2),
(1283, 37, 'Vancouver', 2),
(1284, 37, 'Vernon', 2),
(1285, 37, 'Victoria', 2),
(1286, 37, 'White Rock', 2),
(1287, 37, 'Williams Lake', 2),
(1288, 38, 'Brandon', 3),
(1289, 38, 'Dauphin', 3),
(1290, 38, 'Flin Flon (part)', 3),
(1291, 38, 'Morden', 3),
(1292, 38, 'Portage la Prairie', 3),
(1293, 38, 'Selkirk', 3),
(1294, 38, 'Steinbach', 3),
(1295, 38, 'Thompson', 3),
(1296, 38, 'Winkler', 3),
(1297, 38, 'Winnipeg', 3),
(1298, 39, 'Bathurst', 4),
(1299, 39, 'Campbellton', 4),
(1300, 39, 'Dieppe', 4),
(1301, 39, 'Edmundston', 4),
(1302, 39, 'Fredericton', 4),
(1303, 39, 'Miramichi', 4),
(1304, 39, 'Moncton', 4),
(1305, 39, 'Saint John', 4),
(1306, 40, 'Corner Brook', 5),
(1307, 40, 'Mount Pearl', 5),
(1308, 40, 'St. John\'s', 5),
(1309, 41, 'Yellowknife', 5),
(1310, 42, 'Iqaluit', 6),
(1311, 43, 'Barrie', 7),
(1312, 43, 'Belleville', 7),
(1313, 43, 'Brampton', 7),
(1314, 43, 'Brant', 7),
(1315, 43, 'Brantford', 7),
(1316, 43, 'Brockville', 7),
(1317, 43, 'Burlington', 7),
(1318, 43, 'Cambridge', 7),
(1319, 43, 'Clarence-Rockland', 7),
(1320, 43, 'Cornwall', 7),
(1321, 43, 'Dryden', 7),
(1322, 43, 'Elliot Lake', 7),
(1323, 43, 'Greater Sudbury', 7),
(1324, 43, 'Guelph', 7),
(1325, 43, 'Haldimand County', 7),
(1326, 43, 'Hamilton', 7),
(1327, 43, 'Kawartha Lakes', 7),
(1328, 43, 'Kenora', 7),
(1329, 43, 'Kingston', 7),
(1330, 43, 'Kitchener', 7),
(1331, 43, 'London', 7),
(1332, 43, 'Markham', 7),
(1333, 43, 'Mississauga', 7),
(1334, 43, 'Niagara Falls', 7),
(1335, 43, 'Norfolk County', 7),
(1336, 43, 'North Bay', 7),
(1337, 43, 'Orillia', 7),
(1338, 43, 'Oshawa', 7),
(1339, 43, 'Ottawa', 7),
(1340, 43, 'Owen Sound', 7),
(1341, 43, 'Pembroke', 7),
(1342, 43, 'Peterborough', 7),
(1343, 43, 'Pickering', 7),
(1344, 43, 'Port Colborne', 7),
(1345, 43, 'Prince Edward County', 7),
(1346, 43, 'Quinte West', 7),
(1347, 43, 'Sarnia', 7),
(1348, 43, 'Sault Ste. Marie', 7),
(1349, 43, 'St. Catharines', 7),
(1350, 43, 'St. Thomas', 7),
(1351, 43, 'Stratford', 7),
(1352, 43, 'Temiskaming Shores', 7),
(1353, 43, 'Thorold', 7),
(1354, 43, 'Thunder Bay', 7),
(1355, 43, 'Timmins', 7),
(1356, 43, 'Toronto', 7),
(1357, 43, 'Vaughan', 7),
(1358, 43, 'Waterloo', 7),
(1359, 43, 'Welland', 7),
(1360, 43, 'Windsor', 7),
(1361, 43, 'Woodstock', 7),
(1362, 44, 'Charlottetown', 8),
(1363, 44, 'Summerside', 8),
(1364, 45, 'Acton Vale', 9),
(1365, 45, 'Alma', 9),
(1366, 45, 'Amos', 9),
(1367, 45, 'Amqui', 9),
(1368, 45, 'Asbestos', 9),
(1369, 45, 'Baie-Comeau', 9),
(1370, 45, 'Baie-D\'Urfé', 9),
(1371, 45, 'Baie-Saint-Paul', 9),
(1372, 45, 'Barkmere', 9),
(1373, 45, 'Beaconsfield', 9),
(1374, 45, 'Beauceville', 9),
(1375, 45, 'Beauharnois', 9),
(1376, 45, 'Beaupré', 9),
(1377, 45, 'Bécancour', 9),
(1378, 45, 'Bedford', 9),
(1379, 45, 'Belleterre', 9),
(1380, 45, 'Beloeil', 9),
(1381, 45, 'Berthierville', 9),
(1382, 45, 'Blainville', 9),
(1383, 45, 'Boisbriand', 9),
(1384, 45, 'Bois-des-Filion', 9),
(1385, 45, 'Bonaventure', 9),
(1386, 45, 'Boucherville', 9),
(1387, 45, 'Brome Lake', 9),
(1388, 45, 'Bromont', 9),
(1389, 45, 'Brossard', 9),
(1390, 45, 'Brownsburg-Chatham', 9),
(1391, 45, 'Candiac', 9),
(1392, 45, 'Cap-Chat', 9),
(1393, 45, 'Cap-Santé', 9),
(1394, 45, 'Carignan', 9),
(1395, 45, 'Carleton-sur-Mer', 9),
(1396, 45, 'Causapscal', 9),
(1397, 45, 'Chambly', 9),
(1398, 45, 'Chandler', 9),
(1399, 45, 'Chapais', 9),
(1400, 45, 'Charlemagne', 9),
(1401, 45, 'Châteauguay', 9),
(1402, 45, 'Château-Richer', 9),
(1403, 45, 'Chibougamau', 9),
(1404, 45, 'Clermont', 9),
(1405, 45, 'Coaticook', 9),
(1406, 45, 'Contrecoeur', 9),
(1407, 45, 'Cookshire-Eaton', 9),
(1408, 45, 'Côte Saint-Luc', 9),
(1409, 45, 'Coteau-du-Lac', 9),
(1410, 45, 'Cowansville', 9),
(1411, 45, 'Danville', 9),
(1412, 45, 'Daveluyville', 9),
(1413, 45, 'Dégelis', 9),
(1414, 45, 'Delson', 9),
(1415, 45, 'Desbiens', 9),
(1416, 45, 'Deux-Montagnes', 9),
(1417, 45, 'Disraeli', 9),
(1418, 45, 'Dolbeau-Mistassini', 9),
(1419, 45, 'Dollard-des-Ormeaux', 9),
(1420, 45, 'Donnacona', 9),
(1421, 45, 'Dorval', 9),
(1422, 45, 'Drummondville', 9),
(1423, 45, 'Dunham', 9),
(1424, 45, 'Duparquet', 9),
(1425, 45, 'East Angus', 9),
(1426, 45, 'Estérel', 9),
(1427, 45, 'Farnham', 9),
(1428, 45, 'Fermont', 9),
(1429, 45, 'Forestville', 9),
(1430, 45, 'Fossambault-sur-le-Lac', 9),
(1431, 45, 'Gaspé', 9),
(1432, 45, 'Gatineau', 9),
(1433, 45, 'Gracefield', 9),
(1434, 45, 'Granby', 9),
(1435, 45, 'Grande-Rivière', 9),
(1436, 45, 'Hampstead', 9),
(1437, 45, 'Hudson', 9),
(1438, 45, 'Huntingdon', 9),
(1439, 45, 'Joliette', 9),
(1440, 45, 'Kingsey Falls', 9),
(1441, 45, 'Kirkland', 9),
(1442, 45, 'La Malbaie', 9),
(1443, 45, 'La Pocatière', 9),
(1444, 45, 'La Prairie', 9),
(1445, 45, 'La Sarre', 9),
(1446, 45, 'La Tuque', 9),
(1447, 45, 'Lac-Delage', 9),
(1448, 45, 'Lachute', 9),
(1449, 45, 'Lac-Mégantic', 9),
(1450, 45, 'Lac-Saint-Joseph', 9),
(1451, 45, 'Lac-Sergent', 9),
(1452, 45, 'L\'Ancienne-Lorette', 9),
(1453, 45, 'L\'Assomption', 9),
(1454, 45, 'Laval', 9),
(1455, 45, 'Lavaltrie', 9),
(1456, 45, 'Lebel-sur-Quévillon', 9),
(1457, 45, 'L\'Épiphanie', 9),
(1458, 45, 'Léry', 9),
(1459, 45, 'Lévis', 9),
(1460, 45, 'L\'Île-Cadieux', 9),
(1461, 45, 'L\'Île-Dorval', 9),
(1462, 45, 'L\'Île-Perrot', 9),
(1463, 45, 'Longueuil', 9),
(1464, 45, 'Lorraine', 9),
(1465, 45, 'Louiseville', 9),
(1466, 45, 'Macamic', 9),
(1467, 45, 'Magog', 9),
(1468, 45, 'Malartic', 9),
(1469, 45, 'Maniwaki', 9),
(1470, 45, 'Marieville', 9),
(1471, 45, 'Mascouche', 9),
(1472, 45, 'Matagami', 9),
(1473, 45, 'Matane', 9),
(1474, 45, 'Mercier', 9),
(1475, 45, 'Métabetchouan–Lac-à-la-Croix', 9),
(1476, 45, 'Métis-sur-Mer', 9),
(1477, 45, 'Mirabel', 9),
(1478, 45, 'Mont-Joli', 9),
(1479, 45, 'Mont-Laurier', 9),
(1480, 45, 'Montmagny', 9),
(1481, 45, 'Montreal', 9),
(1482, 45, 'Montreal West', 9),
(1483, 45, 'Montréal-Est', 9),
(1484, 45, 'Mont-Saint-Hilaire', 9),
(1485, 45, 'Mont-Tremblant', 9),
(1486, 45, 'Mount Royal', 9),
(1487, 45, 'Murdochville', 9),
(1488, 45, 'Neuville', 9),
(1489, 45, 'New Richmond', 9),
(1490, 45, 'Nicolet', 9),
(1491, 45, 'Normandin', 9),
(1492, 45, 'Notre-Dame-de-l\'Île-Perrot', 9),
(1493, 45, 'Notre-Dame-des-Prairies', 9),
(1494, 45, 'Otterburn Park', 9),
(1495, 45, 'Paspébiac', 9),
(1496, 45, 'Percé', 9),
(1497, 45, 'Pincourt', 9),
(1498, 45, 'Plessisville', 9),
(1499, 45, 'Pohénégamook', 9),
(1500, 45, 'Pointe-Claire', 9),
(1501, 45, 'Pont-Rouge', 9),
(1502, 45, 'Port-Cartier', 9),
(1503, 45, 'Portneuf', 9),
(1504, 45, 'Prévost', 9),
(1505, 45, 'Princeville', 9),
(1506, 45, 'Québec', 9),
(1507, 45, 'Repentigny', 9),
(1508, 45, 'Richelieu', 9),
(1509, 45, 'Richmond', 9),
(1510, 45, 'Rimouski', 9),
(1511, 45, 'Rivière-du-Loup', 9),
(1512, 45, 'Rivière-Rouge', 9),
(1513, 45, 'Roberval', 9),
(1514, 45, 'Rosemère', 9),
(1515, 45, 'Rouyn-Noranda', 9),
(1516, 45, 'Saguenay', 9),
(1517, 45, 'Saint-Augustin-de-Desmaures', 9),
(1518, 45, 'Saint-Basile', 9),
(1519, 45, 'Saint-Basile-le-Grand', 9),
(1520, 45, 'Saint-Bruno-de-Montarville', 9),
(1521, 45, 'Saint-Césaire', 9),
(1522, 45, 'Saint-Colomban', 9),
(1523, 45, 'Saint-Constant', 9),
(1524, 45, 'Sainte-Adèle', 9),
(1525, 45, 'Sainte-Agathe-des-Monts', 9),
(1526, 45, 'Sainte-Anne-de-Beaupré', 9),
(1527, 45, 'Sainte-Anne-de-Bellevue', 9),
(1528, 45, 'Sainte-Anne-des-Monts', 9),
(1529, 45, 'Sainte-Anne-des-Plaines', 9),
(1530, 45, 'Sainte-Catherine', 9),
(1531, 45, 'Sainte-Catherine-de-la-Jacques-Cartier', 9),
(1532, 45, 'Sainte-Julie', 9),
(1533, 45, 'Sainte-Marguerite-du-Lac-Masson', 9),
(1534, 45, 'Sainte-Marie', 9),
(1535, 45, 'Sainte-Marthe-sur-le-Lac', 9),
(1536, 45, 'Sainte-Thérèse', 9),
(1537, 45, 'Saint-Eustache', 9),
(1538, 45, 'Saint-Félicien', 9),
(1539, 45, 'Saint-Gabriel', 9),
(1540, 45, 'Saint-Georges', 9),
(1541, 45, 'Saint-Hyacinthe', 9),
(1542, 45, 'Saint-Jean-sur-Richelieu', 9),
(1543, 45, 'Saint-Jérôme', 9),
(1544, 45, 'Saint-Joseph-de-Beauce', 9),
(1545, 45, 'Saint-Joseph-de-Sorel', 9),
(1546, 45, 'Saint-Lambert', 9),
(1547, 45, 'Saint-Lazare', 9),
(1548, 45, 'Saint-Lin-Laurentides', 9),
(1549, 45, 'Saint-Marc-des-Carrières', 9),
(1550, 45, 'Saint-Ours', 9),
(1551, 45, 'Saint-Pamphile', 9),
(1552, 45, 'Saint-Pascal', 9),
(1553, 45, 'Saint-Pie', 9),
(1554, 45, 'Saint-Raymond', 9),
(1555, 45, 'Saint-Rémi', 9),
(1556, 45, 'Saint-Sauveur', 9),
(1557, 45, 'Saint-Tite', 9),
(1558, 45, 'Salaberry-de-Valleyfield', 9),
(1559, 45, 'Schefferville', 9),
(1560, 45, 'Scotstown', 9),
(1561, 45, 'Senneterre', 9),
(1562, 45, 'Sept-Îles', 9),
(1563, 45, 'Shawinigan', 9),
(1564, 45, 'Sherbrooke', 9),
(1565, 45, 'Sorel-Tracy', 9),
(1566, 45, 'Stanstead', 9),
(1567, 45, 'Sutton', 9),
(1568, 45, 'Témiscaming', 9),
(1569, 45, 'Témiscouata-sur-le-Lac', 9),
(1570, 45, 'Terrebonne', 9),
(1571, 45, 'Thetford Mines', 9),
(1572, 45, 'Thurso', 9),
(1573, 45, 'Trois-Pistoles', 9),
(1574, 45, 'Trois-Rivières', 9),
(1575, 45, 'Valcourt', 9),
(1576, 45, 'Val-d\'Or', 9),
(1577, 45, 'Varennes', 9),
(1578, 45, 'Vaudreuil-Dorion', 9),
(1579, 45, 'Victoriaville', 9),
(1580, 45, 'Ville-Marie', 9),
(1581, 45, 'Warwick', 9),
(1582, 45, 'Waterloo', 9),
(1583, 45, 'Waterville', 9),
(1584, 45, 'Westmount', 9),
(1585, 45, 'Windsor', 9),
(1586, 46, 'Estevan', 10),
(1587, 46, 'Flin Flon (part)', 10),
(1588, 46, 'Humboldt', 10),
(1589, 46, 'Lloydminster (part)', 10),
(1590, 46, 'Martensville', 10),
(1591, 46, 'Meadow Lake', 10),
(1592, 46, 'Melfort', 10),
(1593, 46, 'Melville', 10),
(1594, 46, 'Moose Jaw', 10),
(1595, 46, 'North Battleford', 10),
(1596, 46, 'Prince Albert', 10),
(1597, 46, 'Regina', 10),
(1598, 46, 'Saskatoon', 10),
(1599, 46, 'Swift Current', 10),
(1600, 46, 'Warman', 10),
(1601, 46, 'Weyburn', 10),
(1602, 46, 'Yorkton', 10),
(1603, 47, 'Whitehorse', 11);

-- --------------------------------------------------------

--
-- Table structure for table `colleges`
--

CREATE TABLE `colleges` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `user_type` int(11) DEFAULT 1,
  `college_logo` varchar(100) DEFAULT NULL,
  `college_name` varchar(255) NOT NULL,
  `college_images` varchar(500) DEFAULT NULL,
  `college_country` varchar(255) NOT NULL,
  `college_address` varchar(255) NOT NULL,
  `college_about_details` text DEFAULT NULL,
  `application_fee` varchar(100) NOT NULL,
  `average_graduate_program` varchar(100) NOT NULL,
  `average_undergraduate_program` varchar(100) NOT NULL,
  `cost_of_living` varchar(100) NOT NULL,
  `tuition` varchar(100) DEFAULT NULL,
  `founded` varchar(100) NOT NULL,
  `school_id` varchar(100) DEFAULT NULL,
  `provider_id_number` varchar(100) DEFAULT NULL,
  `institution_type` varchar(100) NOT NULL,
  `january_april` varchar(100) DEFAULT NULL,
  `may_august` varchar(100) DEFAULT NULL,
  `september_december` varchar(100) DEFAULT NULL,
  `engineering_and_technology` varchar(100) DEFAULT NULL,
  `health_sciences_medicine_nursing_paramedic_and_kinesiology` varchar(100) DEFAULT NULL,
  `business_management_and_economics` varchar(100) DEFAULT NULL,
  `other` varchar(100) DEFAULT NULL,
  `year_post_secondary_certificate` varchar(100) DEFAULT NULL,
  `year_undergraduate_diploma` varchar(100) DEFAULT NULL,
  `map_location` varchar(255) DEFAULT NULL,
  `map_streetview` varchar(255) DEFAULT NULL,
  `valid_study_permit_visa` longtext DEFAULT NULL,
  `eligible_nationality` longtext DEFAULT NULL,
  `eligible_education_country` longtext DEFAULT NULL,
  `education_level` longtext DEFAULT NULL,
  `grading_scheme` longtext DEFAULT NULL,
  `english_exam_type` longtext DEFAULT NULL,
  `provinces_states` longtext DEFAULT NULL,
  `campus_city` longtext DEFAULT NULL,
  `work_permit_available` longtext DEFAULT NULL,
  `college_type` longtext DEFAULT NULL,
  `status` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `colleges`
--

INSERT INTO `colleges` (`id`, `user_id`, `user_type`, `college_logo`, `college_name`, `college_images`, `college_country`, `college_address`, `college_about_details`, `application_fee`, `average_graduate_program`, `average_undergraduate_program`, `cost_of_living`, `tuition`, `founded`, `school_id`, `provider_id_number`, `institution_type`, `january_april`, `may_august`, `september_december`, `engineering_and_technology`, `health_sciences_medicine_nursing_paramedic_and_kinesiology`, `business_management_and_economics`, `other`, `year_post_secondary_certificate`, `year_undergraduate_diploma`, `map_location`, `map_streetview`, `valid_study_permit_visa`, `eligible_nationality`, `eligible_education_country`, `education_level`, `grading_scheme`, `english_exam_type`, `provinces_states`, `campus_city`, `work_permit_available`, `college_type`, `status`, `created_at`, `updated_at`) VALUES
(3, 29, 1, '1658944252.jpg', 'Photograph', '', '1', 'Ellesmere Port, North West, GB', '<p>Cheshire College &ndash; South &amp; West offers exciting opportunities for their 11,000 learners and 1,000 Apprentices to access high-quality teaching and learning at their modern Campuses in Crewe, Ellesmere Port and Chester.&nbsp;They aim to provide their learners with the skills, experience and qualifications that will prepare them for their future career or higher-level study at the College or university. They encourage learners to become confident individuals who will make valuable contributions to businesses and the local economy in their future careers.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>All the Campuses provide a safe, happy and innovative learning experience that will ensure students achieve their full potential. Students&nbsp;will have access to world-class inspirational facilities which are the result of a &pound;140m investment in the latest technology and real work environments.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Why Cheshire College South and West</p>\r\n\r\n<ul>\r\n	<li>Campus:&nbsp;Utilize all of Cheshire College&#39;s sports facilities to stay fit, get pampered in the salons, visit state-of-the-art theatres or even fine dine in their award-winning restaurants. Get discounted rates in all of the Community College facilities.</li>\r\n	<li>Links with Businesses: The college prides themselves on their strong links with local businesses of all sizes who benefit from tailored training delivered in the workplace or at College Campuses, and from their provision of a wide range of Apprenticeships such as Accountancy, Catering, Construction, Engineering and Dental Nursing. They work with many major local employers across the regions such Bentley, Brownlow Furniture, Ecolab, Vauxhall Motors, Scottish Power, Unilever, Brunning and Price and National Grid.</li>\r\n	<li>Approved Apprenticeship Provider:&nbsp;As an approved Apprenticeship provider, Cheshire College can support local employers who are using the Levy system to recruit and train Apprentices within their business. The Apprenticeship Team can also conduct a training needs analysis and make proposals for a bespoke training and development strategy for the organization, whilst being able to access financial support available to businesses.</li>\r\n</ul>', '50000', '90', '1 Year', '80000', '10000', '2006', 'helloschoolID', 'NAR1001', 'Public', 'N/A', 'N/A', '90', '80', '70', '89', '78', '76', '56', 'Minavo-A SAAS Company', 'Minavo-A SAAS Company', '[\"2\",\"3\",\"4\",\"1\"]', '[\"3\",\"78\",\"100\",\"50\",\"77\"]', '[\"78\",\"79\"]', '[\"1\",\"22\",\"3\",\"21\",\"15\",\"18\"]', '[\"1\",\"2\",\"5\",\"3\"]', '[\"1\",\"3\",\"2\",\"4\",\"5\",\"6\"]', '[\"15\",\"16\"]', '[\"2\",\"3\"]', 'Yes', '[\"University\",\"High School\",\"English Institute\",\"College\"]', 1, '2022-06-27 22:39:50', '2022-07-27 23:20:52'),
(4, 12, 1, '1658848912.png', 'Cheshire College South and West - Ellesmere Port', '', '1', 'Ellesmere Port, North West, GB', '<p>Cheshire College &ndash; South &amp; West offers exciting opportunities for their 11,000 learners and 1,000 Apprentices to access high-quality teaching and learning at their modern Campuses in Crewe, Ellesmere Port and Chester.&nbsp;They aim to provide their learners with the skills, experience and qualifications that will prepare them for their future career or higher-level study at the College or university. They encourage learners to become confident individuals who will make valuable contributions to businesses and the local economy in their future careers.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>All the Campuses provide a safe, happy and innovative learning experience that will ensure students achieve their full potential. Students&nbsp;will have access to world-class inspirational facilities which are the result of a &pound;140m investment in the latest technology and real work environments.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Why Cheshire College South and West</p>\r\n\r\n<ul>\r\n	<li>Campus:&nbsp;Utilize all of Cheshire College&#39;s sports facilities to stay fit, get pampered in the salons, visit state-of-the-art theatres or even fine dine in their award-winning restaurants. Get discounted rates in all of the Community College facilities.</li>\r\n	<li>Links with Businesses: The college prides themselves on their strong links with local businesses of all sizes who benefit from tailored training delivered in the workplace or at College Campuses, and from their provision of a wide range of Apprenticeships such as Accountancy, Catering, Construction, Engineering and Dental Nursing. They work with many major local employers across the regions such Bentley, Brownlow Furniture, Ecolab, Vauxhall Motors, Scottish Power, Unilever, Brunning and Price and National Grid.</li>\r\n	<li>Approved Apprenticeship Provider:&nbsp;As an approved Apprenticeship provider, Cheshire College can support local employers who are using the Levy system to recruit and train Apprentices within their business. The Apprenticeship Team can also conduct a training needs analysis and make proposals for a bespoke training and development strategy for the organization, whilst being able to access financial support available to businesses.</li>\r\n</ul>', '00', 'NA', '2 Year', '9,207.00', '11,308.0', '2005', '2159', '10005972', 'Public', 'N/A', 'N/A', 'N/A', '75%', '50%', '40%', '80', '', '50', 'Off Sutton Way, Ellesmere Port, North West, United Kingdom', 'Off Sutton Way, Ellesmere Port, North West, United Kingdom', '[\"2\",\"3\",\"4\",\"1\"]', '[\"3\",\"78\",\"100\",\"50\"]', '[\"3\",\"78\",\"100\",\"50\"]', '[\"1\",\"21\",\"3\"]', '[\"1\",\"3\"]', '[\"1\",\"3\",\"2\"]', '[\"15\",\"16\"]', '[\"2\",\"3\"]', 'No', '[\"University\",\"High School\",\"English Institute\",\"College\"]', 1, '2022-07-15 02:10:53', '2022-07-26 20:51:52'),
(5, 13, 1, '1658954104.png', 'Western University', '', '1', '1151 Richmond Street, London, Ontario, Canada', '<p>Since 1878, Western University has been a&nbsp; choice destination for minds seeking the best education at a research university in Canada. Students at Western University can choose from over 400 undergraduate programs, which enables students to tailor their learning to their personal strengths, interests and career ambitions. At Western University, students will learn from nationally and internationally renowned professors and researchers. Students are also able to experience a wide range of curricular and co-curricular activities, both at the University and in the community.&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Why Western University</strong></p>\r\n\r\n<ul>\r\n	<li>Campus:&nbsp;Western University is one of the most picturesque campuses in North America, located on the beautiful Thames River in London, Ontario.&nbsp;</li>\r\n	<li>Top-Quality Residence System:&nbsp;The University&#39;s&nbsp;residence system has continually been ranked as one of the best residence experiences among large Canadian universities.</li>\r\n	<li>Unique Programs:&nbsp;There are more than 400 undergraduate programs and several academic enrichment opportunities which students can apply for, including&nbsp;</li>\r\n	<li>Employment Opportunities:&nbsp;Over 2,000 undergraduate work study and paid positions are available right on campus. There are many internship, co-op, job shadow, fieldwork and other volunteer opportunities available off campus as well.&nbsp;</li>\r\n</ul>\r\n\r\n<p><strong>NOTE</strong>:&nbsp;Management &amp; Organizational Studies is not available to international students that are attending an Ontario Curriculum high school, or international university/college transfer.</p>', '$125.00 – $259.50 CAD', '1 years', '4 Year', '$13,213.00 CAD / Year', '$35,320.02 CAD / Year', '1990', '348', 'O19375892122', 'Public', '31+ days', 'Under 15 days', '15-30 days', '50', '25', '13', '95', '25', '45', '1151 Richmond Street, London, Ontario, Canada', '1151 Richmond Street, London, Ontario, Canada', '[\"2\",\"3\",\"4\"]', '[\"3\",\"78\",\"100\",\"50\"]', '[\"3\",\"78\",\"100\",\"50\"]', '[\"1\",\"21\",\"3\"]', '[\"1\",\"3\"]', '[\"1\",\"3\",\"2\"]', '[\"16\"]', '[\"2\",\"3\"]', 'Yes', '[\"University\"]', 1, '2022-07-28 02:05:04', '2022-07-28 02:05:04'),
(6, 17, 1, '1662299311.jpg', 'Narayan College Goriyakothi', '', '1', 'Narayan College Goriyakothi,Siwan,Bihar', '<p>Only those students are eligible to apply for admission in I.A &amp; I.Sc. (2020-21) on this portal who has been already allotted <em>Narayan Mahavidyalaya</em> by BSEB&nbsp;...</p>', '50000', '3 Years', '3 Year', '5000', '4500', '1990', 'NAR1001', 'NAR1001', 'Public', 'N/A', 'N/A', 'N/A', '90%', '25%', '25%', '85%', '75%', '25%', 'Map Location', 'Map Streetview', '[\"2\",\"4\"]', '[\"7\",\"13\",\"19\"]', '[\"1\",\"2\",\"3\"]', '[\"1\",\"2\",\"7\",\"8\",\"18\",\"19\",\"20\",\"21\"]', '[\"1\",\"2\",\"3\"]', '[\"1\",\"3\",\"2\"]', '[\"16\"]', '[\"2\",\"3\"]', 'Yes', '[\"University\",\"College\",\"High School\"]', 1, '2022-09-04 17:37:17', '2022-09-04 19:18:31'),
(7, 21, 0, '', 'test', NULL, '1', 'assAS', '', 'ASsa', 'asas', '4 Year', '22', '', '1991', 'asS', 'asS', 'Public', '', '', '', '', '', '', '', '', '', '', '', NULL, NULL, '[\"3\",\"78\",\"100\",\"50\"]', NULL, '[\"1\",\"3\"]', NULL, '[\"15\",\"16\"]', '[\"2\",\"3\"]', NULL, '[\"English Institute\",\"College\"]', 1, '2022-09-06 17:29:03', '2022-09-06 17:29:03'),
(8, 26, 0, NULL, 'DAV', NULL, '1', 'DAV College,Siwan,Bihar', NULL, '8500', '3 Years', '3 Year', '5000', NULL, '1990', 'dav0015', 'NAR1001', 'Public', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '[\"3\",\"78\",\"100\",\"50\"]', NULL, '[\"1\",\"3\"]', NULL, '[\"15\",\"16\"]', '[\"2\",\"3\"]', NULL, '[\"University\",\"High School\",\"College\"]', 1, '2022-09-06 17:51:26', '2022-09-06 17:51:26'),
(9, 27, 1, '1662468051.jpg', 'DAV', '', '1', 'DAV College,Siwan,Bihar', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>', '50000', '3 Years', '5 Year', '5000', '6500', '1990', 'dav0015', 'NAR1001', 'Public', '3', '4', '5', '58', '25', '45', '60', '75', '35', 'Map Location', 'Map Streetview', '[\"2\",\"3\",\"4\"]', '[\"3\",\"78\"]', '[\"78\",\"79\"]', '[\"1\",\"21\",\"3\"]', '[\"1\",\"3\"]', '[\"1\",\"3\",\"2\"]', '[\"15\"]', '[\"3\"]', 'No', '[\"University\",\"College\"]', 1, '2022-09-06 18:04:29', '2022-09-06 18:10:51'),
(10, 37, 0, NULL, 'Narayan College', NULL, '1', 'bihar', NULL, '50000', '3 Years', '4 Year', '5000', NULL, '1995', 'NAR1001', 'NAR1001', 'Private', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2022-09-14 00:39:56', '2022-09-14 00:39:56'),
(11, 50, 0, NULL, 'IITT', NULL, '1', 'toronto', NULL, '1200', 'B.tech', '2 Year', '2000', NULL, '1990', '123', NULL, 'Private', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2022-12-09 22:07:24', '2022-12-09 22:07:24');

-- --------------------------------------------------------

--
-- Table structure for table `college_feature_questions`
--

CREATE TABLE `college_feature_questions` (
  `id` int(11) NOT NULL,
  `college_id` int(11) NOT NULL,
  `feature_questions` text NOT NULL,
  `feature_answer` text NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `college_feature_questions`
--

INSERT INTO `college_feature_questions` (`id`, `college_id`, `feature_questions`, `feature_answer`, `created_at`, `updated_at`) VALUES
(106, 3, 'Accommodations', 'Off-Campus AccommodationsnStudents wishing to live off-campus need to research availability on their own, and should arrive well before the start of term to do so.nHOMESTAYnThere are a wide variety of homestay options available, and our partner schools do their best to match students and hosts according to their interests and preferences. All homestay accommodations have been inspected, and all adults in the home have completed a required criminal reference check.', '2022-07-26 15:21:52', '2022-07-26 20:51:52'),
(107, 3, 'Work While Studying', 'See guidelines on working while studyinghere', '2022-07-26 15:21:52', '2022-07-26 20:51:52'),
(108, 3, 'Conditional Offer Letter', 'Even if you do NOT meet our minimum English requirement (IELTS or TOEFL), you still can get conditionally accepted in the program of your choice with the condition of completing our English program prior to starting your chosen program.', '2022-07-26 15:21:52', '2022-07-26 20:51:52'),
(109, 3, 'Post Graduation Permit', 'Off-Campus AccommodationsnStudents wishing to live off-campus need to research availability on their own, and should arrive well before the start of term to do so.nHOMESTAYnThere are a wide variety of homestay options available, and our partner schools do their best to match students and hosts according to their interests and preferences. All homestay accommodations have been inspected, and all adults in the home have completed a required criminal reference check.', '2022-07-26 15:21:52', '2022-07-26 20:51:52'),
(110, 13, 'Post Graduation Permit', 'The Post-Graduation Work Permit Program (PGWPP) allows students who have graduated from a participating Canadian post-secondary institution to gain valuable Canadian work experience.nRead more: http://www.cic.gc.ca/english/study/work-postgrad.aspnnnn', '2022-07-27 22:59:18', '2022-07-27 22:59:18'),
(111, 13, 'Co/OP Internship Participation', 'Cooperative education (or co-operative education) and internships are methods of combining classroom-based education with practical work experience. A cooperative education experience (\"co-op\"), provides academic credit for structured job experience. Co-ops are full-time, paid or unpaid positions. Internships may be full-time or part-time, paid or unpaid positions.', '2022-07-27 22:59:18', '2022-07-27 22:59:18'),
(112, 13, 'Work while studying', 'See guidelines on working while studying here.n', '2022-07-27 22:59:18', '2022-07-27 22:59:18'),
(113, 13, 'Conditional Offer Letter ', 'Even if applicants do NOT meet Western University\'s minimum English requirement (IELTS or TOEFL), applicants can still be conditionally accepted in the program of their choice with the condition of completing Western University\'s English program prior to starting their chosen program.n', '2022-07-27 22:59:18', '2022-07-27 22:59:18'),
(114, 13, 'Post Graduation Permit', 'The Post-Graduation Work Permit Program (PGWPP) allows students who have graduated from a participating Canadian post-secondary institution to gain valuable Canadian work experience.nRead more: http://www.cic.gc.ca/english/study/work-postgrad.aspnnnn', '2022-07-27 22:59:48', '2022-07-27 22:59:48'),
(115, 13, 'Co/OP Internship Participation', 'Cooperative education (or co-operative education) and internships are methods of combining classroom-based education with practical work experience. A cooperative education experience (\"co-op\"), provides academic credit for structured job experience. Co-ops are full-time, paid or unpaid positions. Internships may be full-time or part-time, paid or unpaid positions.', '2022-07-27 22:59:48', '2022-07-27 22:59:48'),
(116, 13, 'Work while studying', 'See guidelines on working while studying here.n', '2022-07-27 22:59:48', '2022-07-27 22:59:48'),
(117, 13, 'Conditional Offer Letter ', 'Even if applicants do NOT meet Western University\'s minimum English requirement (IELTS or TOEFL), applicants can still be conditionally accepted in the program of their choice with the condition of completing Western University\'s English program prior to starting their chosen program.n', '2022-07-27 22:59:48', '2022-07-27 22:59:48'),
(118, 1, 'aas', 'sas', '2022-07-27 17:50:52', '2022-07-27 23:20:52'),
(119, 1, 'ghghgh', 'erer', '2022-07-27 17:50:52', '2022-07-27 23:20:52'),
(120, 13, 'Post Graduation Permit', 'The Post-Graduation Work Permit Program (PGWPP) allows students who have graduated from a participating Canadian post-secondary institution to gain valuable Canadian work experience.nRead more: http://www.cic.gc.ca/english/study/work-postgrad.asp', '2022-07-28 02:05:04', '2022-07-28 02:05:04'),
(121, 13, 'Co-op/Inernship Participation', 'Cooperative education (or co-operative education) and internships are methods of combining classroom-based education with practical work experience. A cooperative education experience (\"co-op\"), provides academic credit for structured job experience. Co-ops are full-time, paid or unpaid positions. Internships may be full-time or part-time, paid or unpaid positions.', '2022-07-28 02:05:04', '2022-07-28 02:05:04'),
(122, 13, 'Work While Studying', 'See guidelines on working while studying here.', '2022-07-28 02:05:04', '2022-07-28 02:05:04'),
(123, 13, 'Conditional Offer Letter ', 'Even if applicants do NOT meet Western University\'s minimum English requirement (IELTS or TOEFL), applicants can still be conditionally accepted in the program of their choice with the condition of completing Western University\'s English program prior to starting their chosen program.', '2022-07-28 02:05:04', '2022-07-28 02:05:04'),
(124, 13, 'Accomodations', 'On-Campus Residence AccommodationsnGuaranteednPrice range: $8260-$16350 per yearnA meal plan is mandatory in all residences except in Alumni House or London Hall (for upper-year students).nFor more information, please see the school\'s information page herenOff-Campus AccommodationsnStudents wishing to live off-campus need to research availability on their own, and should arrive well before the start of term to do so.nFor additional information and resources, please see herenHOMESTAYnThere are a wide variety of homestay options available, and our partner schools do their best to match students and hosts according to their interests and preferences. All homestay accommodations have been inspected, and all adults in the home have completed a required criminal reference check.', '2022-07-28 02:05:04', '2022-07-28 02:05:04'),
(130, 17, 'Feature Questions ', 'nFeature Answer ', '2022-09-04 19:18:31', '2022-09-04 19:18:31'),
(131, 27, 'Section 1.10.32 of \"de Finibus Bonorum et Malorum\", written by Cicero in 45 BC', 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequ', '2022-09-06 18:10:51', '2022-09-06 18:10:51');

-- --------------------------------------------------------

--
-- Table structure for table `college_pictures`
--

CREATE TABLE `college_pictures` (
  `id` int(11) NOT NULL,
  `college_id` int(11) NOT NULL,
  `name` text NOT NULL,
  `url` longtext NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `college_pictures`
--

INSERT INTO `college_pictures` (`id`, `college_id`, `name`, `url`, `created_at`, `updated_at`) VALUES
(30, 3, 'collage-photo5-2.png', '/uploads/collage-photo5-2.png', '2022-08-03 11:58:06', '2022-07-17 17:23:57');

-- --------------------------------------------------------

--
-- Table structure for table `college_programs`
--

CREATE TABLE `college_programs` (
  `id` int(11) NOT NULL,
  `college_id` int(11) NOT NULL,
  `program_logo` varchar(100) NOT NULL,
  `programs_name` varchar(255) NOT NULL,
  `program_college_name` varchar(255) NOT NULL,
  `earliest_intake_date` date DEFAULT NULL,
  `earliest_intake_type` varchar(50) NOT NULL,
  `earliest_intake_price` varchar(100) NOT NULL,
  `post_secondary_discipline` longtext DEFAULT NULL,
  `post_secondary_sub_categories` longtext DEFAULT NULL,
  `include_living_costs` varchar(11) DEFAULT NULL,
  `tuition_fee_min` varchar(11) DEFAULT NULL,
  `tuition_fee_max` varchar(11) DEFAULT NULL,
  `application_fee_min` varchar(11) DEFAULT NULL,
  `application_fee_max` varchar(11) DEFAULT NULL,
  `program_summary` longtext NOT NULL,
  `minimum_level_of_education_completed` varchar(255) NOT NULL,
  `minimum_gpa` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `first_year_post_secondary_certificate` varchar(150) NOT NULL,
  `first_year_t_level_program_including_a_work_placement` text NOT NULL,
  `commission_break_down` text NOT NULL,
  `disclaimer` text NOT NULL,
  `month_year` date NOT NULL,
  `open_date` datetime NOT NULL,
  `submission_deadline` varchar(50) NOT NULL,
  `doc_requirement` varchar(100) DEFAULT NULL,
  `doc_count` int(11) NOT NULL DEFAULT 0,
  `commission_type` varchar(20) DEFAULT NULL,
  `amount_percentage` int(11) NOT NULL DEFAULT 0,
  `amount_fixed` int(11) NOT NULL DEFAULT 0,
  `tax_fixed` int(11) NOT NULL DEFAULT 0,
  `tax_percentage` int(11) NOT NULL DEFAULT 0,
  `tax_type` varchar(10) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `college_programs`
--

INSERT INTO `college_programs` (`id`, `college_id`, `program_logo`, `programs_name`, `program_college_name`, `earliest_intake_date`, `earliest_intake_type`, `earliest_intake_price`, `post_secondary_discipline`, `post_secondary_sub_categories`, `include_living_costs`, `tuition_fee_min`, `tuition_fee_max`, `application_fee_min`, `application_fee_max`, `program_summary`, `minimum_level_of_education_completed`, `minimum_gpa`, `status`, `first_year_post_secondary_certificate`, `first_year_t_level_program_including_a_work_placement`, `commission_break_down`, `disclaimer`, `month_year`, `open_date`, `submission_deadline`, `doc_requirement`, `doc_count`, `commission_type`, `amount_percentage`, `amount_fixed`, `tax_fixed`, `tax_percentage`, `tax_type`, `created_at`, `updated_at`) VALUES
(1, 2, '1655305626.png', 'Diploma', 'ABC College', '2022-12-01', '', '', NULL, NULL, '75000', '5641', '25000', '7510', '5000', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\n', 'Grade 11', '50.0%', 'Likely Open', 'Program Level', 'Program Length ', 'The Commission structure agreement is based on the respective school\'s confirmation of the student(s) successful full-time enrolment as long as they have passed the determined withdrawal date, are in good standing with the school and have no outstanding balance (in most cases). The terms stipulated are based on what is believed to be the current process however, many variables may contribute to the final determined amount or commission payout timeline (ie: ESL/ACD, Nationality, Amount of credit/courses, Transfer Policy (if any), Agent changes, and the Term and/or Program). Exclusions may apply. For further details or clarification please inquire through each student(s) ApplyBoard application page through the Notes tab.', 'This is a high-level estimate of what may be receivable by you upon a school confirming successful full-time enrollment. This estimate uses the gross tuition amount posted on the school program page, however, the actual commission you may receive is based on a final determination resulting from ApplyBoard\'s agreement with the school, the net amount payable to ApplyBoard after deducting ancillary fees, scholarships and/or other non-commissionable fees. The commission is subject to several variables relevant to each student, such as ESL courses, nationality, volume of credits/courses, transfer policy (if any), agent change (if any), and the term and/or program. For further specific commission details, consult each student\'s ApplyBoard application page, specifically the Notes tab.', '2022-12-01', '2022-12-31 23:59:00', '1', '[\"1\",\"2\",\"3\",\"4\",\"5\",\"6\",\"7\",\"8\",\"9\",\"10\",\"11\",\"12\",\"13\"]', 0, 'percent', 10, 0, 0, 4, 'inclusive', '2022-06-15 15:07:06', '2022-06-15 15:07:06'),
(2, 3, '1655305928.txt', 'Certificate ', 'Photograph', '2022-12-01', '', '', NULL, NULL, '86520', '98', '1500', '1200', '5600', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\n', 'Grade 12', '60.0%', 'Open', 'Program Level', 'Program Length ', 'The Commission structure agreement is based on the respective school\'s confirmation of the student(s) successful full-time enrolment as long as they have passed the determined withdrawal date, are in good standing with the school and have no outstanding balance (in most cases). The terms stipulated are based on what is believed to be the current process however, many variables may contribute to the final determined amount or commission payout timeline (ie: ESL/ACD, Nationality, Amount of credit/courses, Transfer Policy (if any), Agent changes, and the Term and/or Program). Exclusions may apply. For further details or clarification please inquire through each student(s) ApplyBoard application page through the Notes tab.', 'This is a high-level estimate of what may be receivable by you upon a school confirming successful full-time enrollment. This estimate uses the gross tuition amount posted on the school program page, however, the actual commission you may receive is based on a final determination resulting from ApplyBoard\'s agreement with the school, the net amount payable to ApplyBoard after deducting ancillary fees, scholarships and/or other non-commissionable fees. The commission is subject to several variables relevant to each student, such as ESL courses, nationality, volume of credits/courses, transfer policy (if any), agent change (if any), and the term and/or program. For further specific commission details, consult each student\'s ApplyBoard application page, specifically the Notes tab.', '2022-12-01', '2022-12-31 23:59:00', 'No data available', '[\"4\",\"5\",\"6\",\"7\",\"8\",\"9\",\"10\",\"11\",\"12\",\"13\"]', 0, 'fixed', 0, 500, 200, 0, 'exclusive', '2022-06-15 15:12:08', '2022-06-15 15:12:08'),
(3, 1, '1655306063.png', 'sdsdsdsd', 'sdsdsdsd', '2022-12-01', '', '', NULL, NULL, NULL, '356', NULL, '1400', '5126', '<p>sdsd</p>', 'sdsdsds', 'sdsdsd', 'Likely Open', '', '', '', '', '2022-12-01', '2022-12-31 22:59:00', '1', '[\"1\",\"2\",\"3\",\"4\",\"5\",\"6\",\"7\",\"8\",\"9\",\"10\"]', 0, '', 0, 0, 0, 0, '', '2022-06-15 15:14:23', '2022-06-15 15:14:23'),
(4, 4, '1655306143.png', 'BPharma- Bachelor of Pharmacy.', 'Cheshire College South and West - Ellesmere Port', NULL, '', '', NULL, NULL, NULL, '4563', NULL, '4758', '4586', '<p>sdsdsd</p>\r\n\r\n<p>sdsdsd</p>\r\n\r\n<p>sdsd</p>\r\n\r\n<p>sdsdsd</p>\r\n\r\n<p>sdsdsd</p>\r\n\r\n<p>sdsdsd</p>\r\n\r\n<p>&nbsp;</p>', 'sdsdsds', 'sdsdsd', 'Likely Open', '', '', '', '', '2022-12-01', '2022-12-31 23:59:00', '1', '[\"1\",\"2\",\"3\",\"7\",\"8\",\"9\",\"10\",\"11\",\"12\",\"13\"]', 0, '', 0, 0, 0, 0, '', '2022-06-15 15:15:43', '2022-06-15 15:15:43'),
(5, 1, '1655306315.png', 'sdsdsdsd', 'sdsdsdsd', NULL, '', '', NULL, NULL, NULL, '4562', NULL, NULL, NULL, '<p>sdsd</p>\r\n\r\n<p>sdsds</p>\r\n\r\n<p>&nbsp;</p>', 'sdsdsds', 'sdsdsd', 'Likely Open', '', '', '', '', '2022-12-01', '2022-12-31 23:59:00', '1', '[\"1\",\"2\",\"3\",\"4\",\"5\",\"6\",\"7\",\"8\",\"9\",\"10\",\"11\",\"12\",\"13\"]', 0, '', 0, 0, 0, 0, '', '2022-06-15 15:18:35', '2022-06-15 15:18:35'),
(6, 1, '1655306359.png', 'sdsdsdsd', 'sdsdsdsd', NULL, '', '', NULL, NULL, NULL, '4756', NULL, NULL, NULL, '<p>sdsdsd</p>', 'sdsdsds', 'sdsdsd', 'Likely Open', '', '', '', '', '2022-12-01', '2022-12-31 23:59:00', '1', '[\"1\",\"2\",\"3\",\"4\",\"5\",\"6\",\"7\",\"8\",\"9\",\"10\",\"11\",\"12\",\"13\"]', 0, '', 0, 0, 0, 0, '', '2022-06-15 15:19:19', '2022-06-15 15:19:19'),
(7, 1, '1655306485.png', 'sdsdsdsd', 'sdsdsdsd', NULL, '', '', NULL, '[\"1\",\"3\",\"6\"]', NULL, '421.1', NULL, NULL, NULL, '<p>sdsdsd</p>\r\n\r\n<p>&nbsp;</p>', 'sdsdsds', 'sdsdsd', 'Open', '', '', '', '', '2022-12-01', '2022-12-31 23:59:00', '1', '[\"1\",\"2\",\"3\",\"4\",\"5\",\"6\",\"7\",\"8\",\"9\",\"10\",\"11\",\"12\",\"13\"]', 0, '', 0, 0, 0, 0, '', '2022-06-15 15:21:25', '2022-06-15 15:21:25'),
(8, 1, '1655306533.jpg', 'sdsdsdsd', 'sdsdsdsd', NULL, '', '', NULL, NULL, NULL, '4586', NULL, NULL, NULL, '<p>sdsdsd</p>', 'sdsdsds', 'sdsdsd', 'Likely Open', '', '', '', '', '2022-12-01', '2022-12-31 23:59:00', '1', '[\"1\",\"2\",\"3\",\"4\",\"5\",\"6\",\"7\",\"8\",\"9\",\"10\",\"11\",\"12\",\"13\"]', 0, '', 0, 0, 0, 0, '', '2022-06-15 15:22:13', '2022-06-15 15:22:13'),
(9, 1, '1655306647.png', 'sdsdsdsd dip', 'sdsdsdsd', NULL, '', '', NULL, NULL, NULL, '486', NULL, NULL, NULL, '<p>ewewe</p>\r\n\r\n<p>&nbsp;</p>', 'sdsdsds', 'sdsdsd', 'Open', '', '', '', '', '2022-12-01', '2022-12-31 23:59:00', '1', '[\"1\",\"2\",\"3\",\"4\",\"5\",\"6\",\"7\",\"8\",\"9\",\"10\",\"11\",\"12\",\"13\"]', 0, '', 0, 0, 0, 0, '', '2022-06-15 15:24:07', '2022-06-15 15:24:07'),
(10, 1, '1655306676.png', 'sds diploma rgg dsdsd', 'sdsdsdsd', NULL, '', '', NULL, '[\"1\",\"3\",\"6\"]', NULL, '4586', NULL, NULL, NULL, '<p>eweew</p>', 'sdsdsds', 'sdsdsd', 'Open', '', '', '', '', '2022-12-01', '2022-12-31 23:59:00', '1', '[\"1\",\"2\",\"3\",\"4\",\"5\",\"6\",\"7\",\"8\",\"9\",\"10\",\"11\",\"12\",\"13\"]', 0, '', 0, 0, 0, 0, '', '2022-06-15 15:24:36', '2022-06-15 15:24:36'),
(11, 1, '1655479468.png', 'sdsd Diploma sdsd', 'sdsdsdsd', '2021-01-01', 'Free', 'Free', '[\"1\",\"3\",\"6\"]', '[\"1\",\"3\",\"6\"]', NULL, '7425398', NULL, NULL, NULL, '<p>wewewe</p>', 'sdsd', 'sdsdsd', 'Open', '', '', '', '', '2022-12-01', '2022-12-31 23:59:00', '1', '[\"1\",\"2\",\"3\",\"4\",\"5\",\"6\",\"7\",\"8\",\"9\",\"10\",\"11\",\"12\",\"13\"]', 0, '', 0, 0, 0, 0, '', '2022-06-17 15:24:28', '2022-06-17 15:24:28'),
(12, 1, '1655479509.png', 'sdsdsdsd Diploma', 'sdsdsdsd', '2022-12-01', 'Paid', '$7867', '[\"1\",\"3\",\"6\"]', '[\"1\",\"3\",\"6\"]', NULL, '5632', NULL, NULL, NULL, '<p>sdsdsd</p>\r\n\r\n<p>sdsds</p>\r\n\r\n<p>&nbsp;</p>', 'sdsdsds', 'sdsdsd', 'Likely Open', '', '', '', '', '2022-12-01', '2022-12-31 23:59:00', '1', '[\"1\",\"2\",\"3\",\"4\",\"5\",\"6\",\"7\",\"8\",\"9\",\"10\",\"11\",\"12\",\"13\"]', 0, '', 0, 0, 0, 0, '', '2022-06-17 15:25:09', '2022-06-17 15:25:09'),
(13, 1, '1656007424.png', 'Diploma sds', 'DAV', '2021-01-01', 'Paid', '1232323', '[\"1\",\"3\",\"6\"]', '[\"1\",\"3\",\"6\"]', NULL, '12', NULL, NULL, NULL, '<p>sdsds</p>\r\n\r\n<p>sdsdsd</p>\r\n\r\n<p>&nbsp;</p>', 'sdsdsds', 'sdsdsd', 'Likely Open', '', '', '', '', '2022-12-01', '2022-12-31 23:59:00', '1', '[\"1\",\"2\",\"3\",\"4\",\"5\",\"6\",\"7\",\"8\",\"9\",\"10\",\"11\",\"12\",\"13\"]', 0, '', 0, 0, 0, 0, '', '2022-06-23 23:33:44', '2022-06-23 23:33:44'),
(14, 5, '1659272305.png', 'Java', 'Western University', '2022-07-01', 'Free', 'Free', '[\"1\",\"3\",\"6\"]', '[\"1\",\"3\",\"6\"]', 'Yes', '100', '3000', '12', '100', '<p>Hello Sajan Here Ujwall</p>', 'Graduation', '89', 'Likely Open', '', '', '', '', '2022-12-01', '2022-12-31 16:37:00', '1', '[\"1\",\"2\",\"3\",\"4\",\"5\",\"6\",\"7\",\"8\",\"9\",\"10\",\"11\",\"12\",\"13\"]', 0, '', 0, 0, 0, 0, '', '2022-07-31 18:28:25', '2022-07-31 18:28:25'),
(16, 4, '1659287944.png', 'Core Java', 'Cheshire College South and West - Ellesmere Port', '2022-04-01', 'Free', 'Free', '[\"1\",\"3\"]', '[\"4\",\"6\"]', 'Yes', '10', '100', '800', '900', '<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of &quot;de Finibus Bonorum et Malorum&quot; (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, &quot;Lorem ipsum dolor sit amet..&quot;, comes from a line in section 1.10.32.</p>', 'BCA', '100', 'Open', '', '', '', '', '2022-01-01', '2022-06-28 22:48:00', '1', '[\"1\",\"2\",\"3\",\"4\",\"5\",\"6\",\"7\",\"8\",\"9\",\"10\",\"11\",\"12\",\"13\"]', 0, '', 0, 0, 0, 0, '', '2022-07-31 22:49:04', '2022-07-31 22:49:04'),
(17, 3, '1659288188.png', 'Computer Science', 'Photograph', '2021-01-01', 'Free', 'Free', '[\"1\",\"3\",\"6\"]', '[\"1\",\"3\",\"6\"]', 'Yes', '900', '1000', '899', '1000', '<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of &quot;de Finibus Bonorum et Malorum&quot; (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, &quot;Lorem ipsum dolor sit amet..&quot;, comes from a line in section 1.10.32.</p>\r\n\r\n<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of &quot;de Finibus Bonorum et Malorum&quot; (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, &quot;Lorem ipsum dolor sit amet..&quot;, comes from a line in section 1.10.32.</p>\r\n\r\n<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of &quot;de Finibus Bonorum et Malorum&quot; (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, &quot;Lorem ipsum dolor sit amet..&quot;, comes from a line in section 1.10.32.</p>\r\n\r\n<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of &quot;de Finibus Bonorum et Malorum&quot; (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, &quot;Lorem ipsum dolor sit amet..&quot;, comes from a line in section 1.10.32.</p>', 'MCA', '100', 'Open', '', '', '', '', '0000-00-00', '2022-07-31 22:52:00', '1', '[\"1\",\"2\",\"3\",\"4\",\"5\",\"6\",\"7\",\"8\",\"9\",\"10\",\"11\",\"12\",\"13\",\"14\"]', 0, '', 0, 0, 0, 0, '', '2022-07-31 22:53:08', '2022-07-31 22:53:08'),
(18, 17, '1662314750.jpg', 'SEO', 'Narayan College Goriyakothi', '2021-08-11', 'Paid', '2500', '[\"2\",\"3\",\"4\"]', '[\"2\",\"3\",\"4\",\"5\"]', 'Yes', '5000', '6000', '2500', '3500', '<p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', 'PHD', '85', 'Open', '1-Year Post Secondary Certificate', '1-Year T Level Program Including A Work Placement', 'Commission Breakdown', 'Disclaimer', '2023-08-01', '2022-09-14 00:00:00', 'Data Available', '[\"1\",\"2\",\"3\",\"4\",\"5\",\"6\",\"7\",\"8\",\"9\",\"10\",\"11\",\"12\",\"13\"]', 0, '', 0, 0, 0, 0, '', '2022-09-04 23:35:50', '2022-09-04 23:35:50'),
(19, 17, '1662315444.jpg', 'SEO', 'Narayan College Goriyakothi', '2021-08-11', 'Paid', '2500', '[\"2\",\"3\",\"4\"]', '[\"2\",\"3\",\"4\",\"5\"]', 'Yes', '5000', '6000', '2500', '3500', '<p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', 'PHD', '85', 'Open', '1-Year Post Secondary Certificate', '1-Year T Level Program Including A Work Placement', 'Commission Breakdown', 'Disclaimer', '2023-08-01', '2022-09-15 00:00:00', 'Data Available', '[\"1\",\"2\",\"3\",\"4\",\"5\",\"6\",\"7\",\"8\",\"9\",\"10\",\"11\",\"12\",\"13\"]', 0, '', 0, 0, 0, 0, '', '2022-09-04 23:47:24', '2022-09-04 23:47:24'),
(20, 17, '1662316569.jpg', 'BPharma- Bachelor of Pharmacy', 'Narayan College Goriyakothi', '2022-09-07', 'Paid', '5600', '[\"2\",\"3\",\"5\"]', '[\"2\",\"3\",\"4\"]', 'Yes', '500', '6411', '5632', '5700', '<p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', 'PHD', '85', 'Open', '1-Year Post Secondary Certificate', '1-Year T Level Program Including A Work Placement', 'Commission Breakdown', 'Disclaimer', '2022-10-01', '2022-09-07 00:00:00', 'No Data Available', '[\"1\",\"2\",\"3\",\"4\",\"5\",\"6\",\"7\",\"8\",\"9\",\"10\",\"11\",\"12\",\"13\"]', 0, '', 0, 0, 0, 0, '', '2022-09-05 00:06:09', '2022-09-05 00:06:09'),
(21, 37, '1663616951.jpg', 'React', 'Narayan College', '2022-10-13', 'Free', 'Free', '[\"2\",\"4\"]', '[\"1\",\"2\",\"4\",\"5\"]', 'Yes', '500', '600', '500', '650', '<p>Program Summary Program Summary Program Summary Program Summary Program Summary Program Summary Program Summary Program Summary</p>', 'PHD', '85', 'Likely', '1-Year Post Secondary Certificate', '1-Year T Level Program Including A Work Placement', 'Commission Breakdown', 'Disclaimer', '2023-08-01', '2022-09-21 00:00:00', 'Data Available', '[\"1\",\"2\",\"3\",\"4\",\"5\",\"6\",\"7\",\"8\",\"9\",\"10\",\"11\",\"12\",\"13\"]', 0, '', 0, 0, 0, 0, '', '2022-09-20 01:19:11', '2022-09-20 01:19:11'),
(22, 26, '1664221937.png', 'sdd', 'DAV', '2022-09-13', 'Free', 'Free', '[\"2\"]', '[\"4\"]', 'Yes', '500', '52', '42', '45', '<p>xxcxcxzcx</p>', 'sfsdsfdsdf', '85', 'Open', '1-Year Post Secondary Certificate', '1-Year T Level Program Including A Work Placement', 'dsffs', 'dsfsfd', '2022-09-01', '2022-09-20 00:00:00', 'No Data Available', '[\"1\",\"2\",\"3\",\"4\",\"5\",\"6\",\"7\",\"8\",\"9\",\"10\",\"11\",\"12\",\"13\"]', 0, '', 0, 0, 0, 0, '', '2022-09-27 01:22:17', '2022-09-27 01:22:17'),
(23, 26, '1664223312.png', 'BPharma- Bachelor of Pharmacy', 'DAV', '2022-09-01', 'Free', 'Free', '[\"2\"]', '[\"3\"]', 'No', '4', '4', '4', '4', '<p>dfdffsfsfd</p>', 'ddsf', '85', 'Likely', '1-Year Post Secondary Certificate', '1-Year T Level Program Including A Work Placement', 'scsdd', 'asad', '2023-08-01', '2022-08-30 00:00:00', 'Data Available', '[\"1\",\"2\",\"3\",\"4\",\"5\",\"6\",\"7\",\"8\",\"9\",\"10\",\"11\",\"12\",\"13\"]', 0, '', 0, 0, 0, 0, '', '2022-09-27 01:45:12', '2022-09-27 01:45:12'),
(24, 26, '1664223347.png', 'BPharma- Bachelor of Pharmacy', 'DAV', '2022-09-01', 'Free', 'Free', '[\"2\"]', '[\"3\"]', 'No', '4', '4', '4', '4', '<p>dfdffsfsfd</p>', 'ddsf', '85', 'Likely', '1-Year Post Secondary Certificate', '1-Year T Level Program Including A Work Placement', 'scsdd', 'asad', '2023-08-01', '2022-08-30 00:00:00', 'Data Available', '\"1,2,3,4,5,6,7,8,9,10,11,12,13\"', 0, '', 0, 0, 0, 0, '', '2022-09-27 01:45:47', '2022-09-27 01:45:47'),
(25, 26, '1664223673.png', 'BPharma- Bachelor of Pharmacy', 'DAV', '2022-09-01', 'Free', 'Free', '[\"2\"]', '[\"3\"]', 'No', '4', '4', '4', '4', '<p>ZXXxxxz</p>', 'ddsf', '85', 'Likely', '1-Year Post Secondary Certificate', '1-Year T Level Program Including A Work Placement', 'scsdd', 'asad', '2023-08-01', '2022-08-30 00:00:00', 'Data Available', '[\"1\",\"2\",\"3\",\"4\",\"5\",\"6\",\"7\",\"8\",\"9\",\"10\",\"11\",\"12\",\"13\"]', 0, '', 0, 0, 0, 0, '', '2022-09-27 01:51:13', '2022-09-27 01:51:13'),
(26, 26, '1664223751.png', 'BPharma- Bachelor of Pharmacy', 'DAV', '2022-09-01', 'Free', 'Free', '[\"2\"]', '[\"3\"]', 'No', '4', '4', '4', '4', '<p>zffffgsdf</p>', 'ddsf', '85', 'Likely', '1-Year Post Secondary Certificate', '1-Year T Level Program Including A Work Placement', 'scsdd', 'asad', '2023-08-01', '2022-08-30 00:00:00', 'Data Available', '[\"1\",\"2\",\"3\",\"4\",\"5\",\"6\",\"7\",\"8\",\"9\",\"10\",\"11\",\"12\",\"13\"]', 0, '', 0, 0, 0, 0, '', '2022-09-27 01:52:31', '2022-09-27 01:52:31'),
(27, 50, '1671132253.png', 'BPharma- Bachelor of Pharmacy', 'IITT', '2022-12-15', 'Free', 'Free', '[\"2\"]', '[\"2\"]', 'Yes', '4', '600', '500', '600', '<p>dsfsdffsdffsd</p>', 'sfsdsfdsdf', '56', 'Open', '1-Year Post Secondary Certificate', '1-Year T Level Program Including A Work Placement', 'zddddsdff', 'ddsdsfsfd', '2022-09-01', '2022-12-27 00:00:00', 'Data Available', NULL, 0, '', 0, 0, 0, 0, '', '2022-12-16 00:54:13', '2022-12-16 00:54:13'),
(28, 50, '1671133414.png', 'yyy', 'IITT', '2022-12-30', 'Paid', '3434', '[\"5\",\"6\"]', '[\"5\",\"6\"]', 'No', '1200', '1500', '1299', '5666', '<p>gfgfgfgggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggg</p>', '12', '34', 'Open', '56', '55556', '56', '45', '2022-12-01', '2022-12-17 00:00:00', 'Data Available', NULL, 0, '', 0, 0, 0, 0, '', '2022-12-16 01:13:34', '2022-12-16 01:13:34');

-- --------------------------------------------------------

--
-- Table structure for table `college_programs_test_scores`
--

CREATE TABLE `college_programs_test_scores` (
  `id` int(11) NOT NULL,
  `college_programs_id` int(11) NOT NULL,
  `test_scores_name` varchar(100) NOT NULL,
  `test_scores_number` varchar(100) NOT NULL,
  `reading` int(11) NOT NULL DEFAULT 0,
  `writing` int(11) NOT NULL DEFAULT 0,
  `listening` int(11) DEFAULT 0,
  `speaking` int(11) NOT NULL DEFAULT 1,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `college_programs_test_scores`
--

INSERT INTO `college_programs_test_scores` (`id`, `college_programs_id`, `test_scores_name`, `test_scores_number`, `reading`, `writing`, `listening`, `speaking`, `created_at`, `updated_at`) VALUES
(1, 1, 'Jan 2022', '10', 3, 2, 1, 4, '2022-06-15 15:07:06', '2022-06-15 15:07:06'),
(2, 2, 'TOEFL', '100', 21, 21, 12, 41, '2022-06-15 15:12:08', '2022-06-15 15:12:08'),
(3, 2, 'IELTS', '10', 5, 1, 2, 2, '2022-06-15 15:14:23', '2022-06-15 15:14:23'),
(4, 2, 'Duolingo English Test', '8', 2, 2, 3, 1, '2022-06-15 15:15:43', '2022-06-15 15:15:43'),
(5, 2, 'PTE', '10', 3, 1, 2, 3, '2022-06-15 15:15:43', '2022-06-15 15:15:43'),
(6, 5, 'dssdsd', 'sdsds', 0, 0, 0, 0, '2022-06-15 15:18:35', '2022-06-15 15:18:35'),
(7, 6, 'dssdsd', 'sdsds', 0, 0, 0, 0, '2022-06-15 15:19:19', '2022-06-15 15:19:19'),
(8, 7, 'dssdsd', 'sdsds', 0, 0, 0, 0, '2022-06-15 15:21:25', '2022-06-15 15:21:25'),
(9, 8, 'dssdsd', 'sdsds', 0, 0, 0, 0, '2022-06-15 15:22:13', '2022-06-15 15:22:13'),
(10, 9, 'dssdsd', 'sdsdsd', 0, 0, 0, 0, '2022-06-15 15:24:07', '2022-06-15 15:24:07'),
(11, 10, 'dssdsd', 'sdsds', 0, 0, 0, 0, '2022-06-15 15:24:36', '2022-06-15 15:24:36'),
(12, 11, 'dssdsd', 'sdsds', 0, 0, 0, 0, '2022-06-17 15:24:28', '2022-06-17 15:24:28'),
(13, 12, 'dssdsd', 'sdsds', 0, 0, 0, 0, '2022-06-17 15:25:09', '2022-06-17 15:25:09'),
(14, 13, 'dssdsd', 'sdsds', 0, 0, 0, 0, '2022-06-23 23:33:44', '2022-06-23 23:33:44'),
(15, 14, 'English', '67', 10, 20, 30, 40, '2022-07-31 18:28:25', '2022-07-31 18:28:25'),
(16, 15, 'English', '100', 50, 10, 20, 10, '2022-07-31 22:22:51', '2022-07-31 22:22:51'),
(17, 16, 'Java MCQ', '10', 2, 2, 3, 1, '2022-07-31 22:49:04', '2022-07-31 22:49:04'),
(18, 17, 'PHP MCQ', '98', 10, 20, 70, 90, '2022-07-31 22:53:08', '2022-07-31 22:53:08'),
(19, 18, 'Test Scores1', '10', 2, 2, 2, 2, '2022-09-04 23:35:50', '2022-09-04 23:35:50'),
(20, 19, 'Test Scores1', '10', 2, 2, 2, 2, '2022-09-04 23:47:24', '2022-09-04 23:47:24'),
(21, 20, 'Test Scores2', '10', 2, 2, 2, 2, '2022-09-05 00:06:09', '2022-09-05 00:06:09'),
(22, 21, 'Test Scores Name', '10', 21, 21, 12, 3, '2022-09-20 01:19:11', '2022-09-20 01:19:11'),
(23, 22, 'Test Scores1', '10', 5, 5, 5, 5, '2022-09-27 01:22:17', '2022-09-27 01:22:17'),
(24, 23, 'Test Scores2', '10', 5, 11, 1, 1, '2022-09-27 01:45:12', '2022-09-27 01:45:12'),
(25, 24, 'Test Scores2', '10', 5, 11, 1, 1, '2022-09-27 01:45:47', '2022-09-27 01:45:47'),
(26, 25, 'Test Scores2', '10', 5, 11, 1, 1, '2022-09-27 01:51:13', '2022-09-27 01:51:13'),
(27, 26, 'Test Scores2', '10', 5, 11, 1, 1, '2022-09-27 01:52:31', '2022-09-27 01:52:31'),
(28, 27, 'ggh', '22', 22, 2, 2, 2, '2022-12-16 00:54:13', '2022-12-16 00:54:13'),
(29, 28, '34', '5', 6, 6, 7, 8, '2022-12-16 01:13:34', '2022-12-16 01:13:34');

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE `country` (
  `id` int(11) NOT NULL,
  `country` varchar(100) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`id`, `country`, `status`, `created_at`, `updated_at`) VALUES
(1, 'India\r\n', 1, '2023-01-28 21:04:52', '2023-01-28 21:04:52'),
(2, 'Canada\r\n', 1, '2023-01-28 21:04:52', '2023-01-28 21:04:52');

-- --------------------------------------------------------

--
-- Table structure for table `current_status`
--

CREATE TABLE `current_status` (
  `id` int(11) NOT NULL,
  `status_title` varchar(35) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `current_status`
--

INSERT INTO `current_status` (`id`, `status_title`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Pay Application Fee', 1, '2022-09-17 01:21:25', '2022-09-17 01:21:25'),
(2, 'Prepare Application', 1, '2022-09-17 01:21:25', '2022-09-17 01:21:25'),
(3, 'Submission In Progress', 1, '2022-09-17 01:21:25', '2022-09-17 01:21:25'),
(4, 'Decision', 1, '2022-09-17 01:21:25', '2022-09-17 01:21:25'),
(5, 'Post-Decision Requirements', 1, '2022-09-17 01:21:25', '2022-09-17 01:21:25'),
(7, 'Ready to Submit', 1, '2022-09-17 01:21:25', '2022-09-17 01:21:25'),
(8, 'Submitted to School', 1, '2022-09-17 01:21:25', '2022-09-17 01:21:25'),
(9, 'Ready for Visa', 1, '2022-09-17 01:21:25', '2022-09-17 01:21:25'),
(10, 'Ready to Enroll', 1, '2022-09-23 00:02:33', '2022-09-23 00:02:33'),
(11, 'Application Cancelled', 1, '2022-09-23 00:02:33', '2022-09-23 00:02:33'),
(12, 'Enrollment Confirmed', 1, '2022-09-23 01:14:11', '2022-09-23 01:14:11');

-- --------------------------------------------------------

--
-- Table structure for table `documents_requirment`
--

CREATE TABLE `documents_requirment` (
  `id` int(11) NOT NULL,
  `document_name` varchar(50) NOT NULL,
  `description` text DEFAULT NULL,
  `required_field` int(11) NOT NULL DEFAULT 1 COMMENT '1 =required,0=optional',
  `upload_status` int(11) NOT NULL DEFAULT 1 COMMENT '1 = display file option, 0 = hide file upload option',
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `documents_requirment`
--

INSERT INTO `documents_requirment` (`id`, `document_name`, `description`, `required_field`, `upload_status`, `status`, `created_at`, `updated_at`) VALUES
(1, '10th certificate ', 'For Indian applicants who completed Grade 12 in Central Board of Secondary Education (CBSE), please be advised that EACH of below is required for admission to this program:', 1, 1, 1, '2022-09-27 01:11:08', '2022-10-02 20:51:34'),
(2, '12th certificate ', 'For Indian applicants who completed Grade 12 in Central Board of Secondary Education (CBSE), please be advised that EACH of below is required for admission to this program:', 1, 1, 1, '2022-09-27 01:11:08', '2022-10-02 19:59:00'),
(3, 'Graduation certificate', 'For Indian applicants who completed Grade 12 in Central Board of Secondary Education (CBSE), please be advised that EACH of below is required for admission to this program:', 1, 1, 1, '2022-09-27 01:11:08', '2022-10-02 19:58:57'),
(4, 'Post graduation certificate ', 'For Indian applicants who completed Grade 12 in Central Board of Secondary Education (CBSE), please be advised that EACH of below is required for admission to this program:', 1, 1, 1, '2022-09-27 01:11:08', '2022-10-02 19:58:55'),
(5, 'Graduation transcript ', 'For Indian applicants who completed Grade 12 in Central Board of Secondary Education (CBSE), please be advised that EACH of below is required for admission to this program:', 1, 1, 1, '2022-09-27 01:11:08', '2022-10-02 19:58:52'),
(6, 'Post graduation transcript ', 'For Indian applicants who completed Grade 12 in Central Board of Secondary Education (CBSE), please be advised that EACH of below is required for admission to this program:', 1, 1, 1, '2022-09-27 01:11:08', '2022-10-02 19:58:50'),
(7, 'IELTS score certificate ', 'For Indian applicants who completed Grade 12 in Central Board of Secondary Education (CBSE), please be advised that EACH of below is required for admission to this program:', 1, 1, 1, '2022-09-27 01:11:08', '2022-10-02 19:58:48'),
(8, 'Experience certificate ', 'For Indian applicants who completed Grade 12 in Central Board of Secondary Education (CBSE), please be advised that EACH of below is required for admission to this program:', 1, 1, 1, '2022-09-27 01:11:08', '2022-10-02 19:59:04'),
(9, 'Migration certificate ', 'For Indian applicants who completed Grade 12 in Central Board of Secondary Education (CBSE), please be advised that EACH of below is required for admission to this program:', 1, 1, 1, '2022-09-27 01:11:08', '2022-10-02 19:58:44'),
(10, 'Backlog certificate ', 'For Indian applicants who completed Grade 12 in Central Board of Secondary Education (CBSE), please be advised that EACH of below is required for admission to this program:', 1, 1, 1, '2022-09-27 01:11:08', '2022-10-02 19:59:14'),
(11, 'Consent form', 'For Indian applicants who completed Grade 12 in Central Board of Secondary Education (CBSE), please be advised that EACH of below is required for admission to this program:', 1, 1, 1, '2022-09-27 01:11:08', '2022-10-02 19:59:11'),
(12, 'CV', 'For Indian applicants who completed Grade 12 in Central Board of Secondary Education (CBSE), please be advised that EACH of below is required for admission to this program:', 1, 0, 1, '2022-09-27 01:11:08', '2022-10-09 21:26:33'),
(13, 'Additional certificate', 'For Indian applicants who completed Grade 12 in Central Board of Secondary Education (CBSE), please be advised that EACH of below is required for admission to this program:', 1, 1, 1, '2022-09-27 01:11:08', '2022-10-02 19:59:06'),
(14, 'Post Secondary Education Course Outlines ', 'For applicants who have post secondary education and intend to request transfer credit, please upload Course Outlines for the related post secondary subjects here.\r\n\r\nProviding related course outlines will help school to evaluate the applicant\'s post secondary credentials more accurate. However it is NOT mandatory to provide.\r\n\r\nPlease note that transfer credit given and course outline evaluation is school\'s case by case decision and there is NO guarantee for any transfer credit. ', 0, 0, 1, '2022-10-03 02:21:22', '2022-10-02 20:51:22');

-- --------------------------------------------------------

--
-- Table structure for table `education`
--

CREATE TABLE `education` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `education_group` varchar(15) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `education`
--

INSERT INTO `education` (`id`, `title`, `education_group`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Grade 1', 'primary', 1, '2022-09-02 18:50:12', '2022-09-02 18:50:12'),
(2, 'Grade 2', 'primary', 1, '2022-09-02 18:50:12', '2022-09-02 18:50:12'),
(3, 'Grade 3', 'primary', 1, '2022-09-02 18:50:12', '2022-09-02 18:50:12'),
(4, 'Grade 4', 'primary', 1, '2022-09-02 18:50:12', '2022-09-02 18:50:12'),
(5, 'Grade 5', 'primary', 1, '2022-09-02 18:50:12', '2022-09-02 18:50:12'),
(6, 'Grade 6', 'primary', 1, '2022-09-02 18:50:12', '2022-09-02 18:50:12'),
(7, 'Grade 7', 'primary', 1, '2022-09-02 18:50:12', '2022-09-02 18:50:12'),
(8, 'Grade 8', 'primary', 1, '2022-09-02 18:50:12', '2022-09-02 18:50:12'),
(9, 'Grade 9', 'secondary', 1, '2022-09-02 18:50:12', '2022-09-02 18:50:12'),
(10, 'Grade 10', 'secondary', 1, '2022-09-02 18:50:12', '2022-09-02 18:50:12'),
(11, 'Grade 10', 'secondary', 1, '2022-09-02 18:52:29', '2022-09-02 18:52:29'),
(12, 'Grade 11', 'secondary', 1, '2022-09-02 18:52:29', '2022-09-02 18:52:29'),
(13, 'Grade 12 / High School', 'secondary', 1, '2022-09-02 18:52:29', '2022-09-02 18:52:29'),
(14, '1-Year Post-Secondary Certificate', 'undergraduate', 1, '2022-09-02 18:52:29', '2022-09-02 18:52:29'),
(15, '2-Year Undergradute Diploma', 'undergraduate', 1, '2022-09-02 18:52:29', '2022-09-02 18:52:29'),
(16, '2-Year Undergradute Advanced Diploma', 'undergraduate', 1, '2022-09-02 18:52:29', '2022-09-02 18:52:29'),
(17, '3-Year Bachelors Degree', 'undergraduate', 1, '2022-09-02 18:52:29', '2022-09-02 18:52:29'),
(18, '4-Year Bachelors Degree', 'undergraduate', 1, '2022-09-02 18:52:29', '2022-09-02 18:52:29'),
(19, 'Postgraduate Certificate/Diploma', 'postgraduate', 1, '2022-09-02 18:52:29', '2022-09-02 18:52:29'),
(20, 'Masters Degree', 'postgraduate', 1, '2022-09-02 18:52:29', '2022-09-02 18:52:29'),
(21, 'Doctoral Degree (Phd, M.D., ...)', 'postgraduate', 1, '2022-09-02 18:52:29', '2022-09-02 18:52:29');

-- --------------------------------------------------------

--
-- Table structure for table `english_exam_type`
--

CREATE TABLE `english_exam_type` (
  `id` int(11) NOT NULL,
  `exam_name` varchar(50) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `english_exam_type`
--

INSERT INTO `english_exam_type` (`id`, `exam_name`, `status`, `created_at`, `updated_at`) VALUES
(1, 'I don\'t have this', 1, '2022-09-07 20:12:05', '2022-09-07 20:12:05'),
(2, 'I will provide this later', 1, '2022-09-07 20:12:05', '2022-09-07 20:12:05'),
(3, 'TOEFL', 1, '2022-09-07 20:12:05', '2022-09-07 20:12:05'),
(4, 'IELTS', 1, '2022-09-07 20:12:05', '2022-09-07 20:12:05'),
(5, 'Duolingo English Test', 1, '2022-09-07 20:12:05', '2022-09-07 20:12:05'),
(6, 'PTE', 1, '2022-09-07 20:12:05', '2022-09-07 20:12:05');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `grading_scheme`
--

CREATE TABLE `grading_scheme` (
  `id` int(11) NOT NULL,
  `grad_name` varchar(50) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `grading_scheme`
--

INSERT INTO `grading_scheme` (`id`, `grad_name`, `status`, `created_at`, `updated_at`) VALUES
(1, 'High Education (Degree) Division Scale', 1, '2022-09-02 17:58:34', '2022-09-02 17:58:34'),
(2, 'High Education (Bechelor and Above) Grade Point 10', 1, '2022-09-02 17:58:34', '2022-09-02 17:58:34'),
(3, 'High Education (Bechelor and Above) Percentage Sca', 1, '2022-09-02 18:00:12', '2022-09-02 18:00:12');

-- --------------------------------------------------------

--
-- Table structure for table `invice`
--

CREATE TABLE `invice` (
  `id` int(11) NOT NULL,
  `appid` int(11) NOT NULL,
  `email` varchar(35) NOT NULL,
  `amount` double NOT NULL,
  `commission` double NOT NULL,
  `tax` double NOT NULL,
  `total_deduction` double NOT NULL,
  `final_payable_amt` double NOT NULL,
  `commission_type` varchar(12) NOT NULL,
  `tax_type` varchar(12) NOT NULL,
  `payment_id` varchar(50) NOT NULL,
  `payment_date` datetime NOT NULL DEFAULT current_timestamp(),
  `debite_amount` double NOT NULL,
  `debited_by` int(11) NOT NULL,
  `debited_date` datetime NOT NULL DEFAULT current_timestamp(),
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `invice`
--

INSERT INTO `invice` (`id`, `appid`, `email`, `amount`, `commission`, `tax`, `total_deduction`, `final_payable_amt`, `commission_type`, `tax_type`, `payment_id`, `payment_date`, `debite_amount`, `debited_by`, `debited_date`, `created_at`, `updated_at`) VALUES
(5, 90376044, '10', 1200, 500, 200, 700, 500, 'fixed', 'exclusive', 'pay_KuhArNtkxp7J8p', '2022-12-22 02:10:28', 0, 0, '2022-12-22 02:10:28', '2022-12-22 02:10:28', '2022-12-22 02:10:28'),
(6, 90123585, '10', 1200, 500, 200, 700, 500, 'fixed', 'fixed', 'pay_KuhGavvIMJtXFv', '2022-12-22 02:15:54', 0, 0, '2022-12-22 02:15:54', '2022-12-22 02:15:54', '2022-12-22 02:15:54'),
(7, 56496397, '28', 1200, 500, 200, 700, 500, 'fixed', 'fixed', 'pay_L87FRuHrzDAb7b', '2023-01-25 00:07:58', 0, 0, '2023-01-25 00:07:58', '2023-01-25 00:07:58', '2023-01-25 00:07:58'),
(8, 93211678, '28', 1200, 500, 200, 700, 500, 'fixed', 'fixed', 'pay_LBfJ8LKQFZM8TU', '2023-02-02 23:24:41', 0, 0, '2023-02-02 23:24:41', '2023-02-02 23:24:41', '2023-02-02 23:24:41');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2014_10_12_200000_add_two_factor_columns_to_users_table', 2),
(6, '2022_06_08_204627_create_sessions_table', 2),
(7, '2022_06_09_150425_add_google_id_column', 3),
(8, '2022_06_09_150814_add_google_id_column', 4);

-- --------------------------------------------------------

--
-- Table structure for table `my_profile`
--

CREATE TABLE `my_profile` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `account_name` varchar(100) DEFAULT NULL,
  `account_number` varchar(100) DEFAULT NULL,
  `bank_name` varchar(100) DEFAULT NULL,
  `bank_address` varchar(100) DEFAULT NULL,
  `organization_number` varchar(100) DEFAULT NULL,
  `institution_number` varchar(100) DEFAULT NULL,
  `transit_number` varchar(100) DEFAULT NULL,
  `swift_code` varchar(100) DEFAULT NULL,
  `ifsc_code` varchar(100) DEFAULT NULL,
  `comments` longtext DEFAULT NULL,
  `student_profile_picture` varchar(100) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `my_profile`
--

INSERT INTO `my_profile` (`id`, `user_id`, `account_name`, `account_number`, `bank_name`, `bank_address`, `organization_number`, `institution_number`, `transit_number`, `swift_code`, `ifsc_code`, `comments`, `student_profile_picture`, `created_at`, `updated_at`) VALUES
(3, 9, 'hello', 'hello', 'hello', 'hello', 'hello', 'hello', 'hello', 'hello', 'hello', 'hello', '1658944440.jpg', '2022-07-13 20:51:49', '2022-07-13 20:51:49'),
(4, 11, 'Hello Ujwall', '102930920932', 'hello bank name', 'hello bank address', 'hello org number', 'hello institution number', 'transit number', 'hello swift code___', 'punb6300100', 'wewewe', '1658058956.png', '2022-07-17 11:55:39', '2022-07-17 11:55:39'),
(5, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1658780181.jpg', '2022-07-25 20:16:21', '2022-07-25 20:16:21');

-- --------------------------------------------------------

--
-- Table structure for table `notes`
--

CREATE TABLE `notes` (
  `id` int(11) NOT NULL,
  `title` varchar(55) NOT NULL,
  `notes` text NOT NULL,
  `app_id` int(11) NOT NULL,
  `is_trash` int(11) NOT NULL DEFAULT 0,
  `is_read` int(11) NOT NULL DEFAULT 0,
  `student_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `notes`
--

INSERT INTO `notes` (`id`, `title`, `notes`, `app_id`, `is_trash`, `is_read`, `student_id`, `created_at`, `updated_at`) VALUES
(1, 'ddaasd', 'sasadadad', 78429398, 0, 0, 17, '2022-10-04 21:56:11', '2022-10-04 21:56:11'),
(2, 'ddaasd', 'sasadadad', 78429398, 0, 0, 17, '2022-10-04 21:57:47', '2022-10-04 21:57:47'),
(3, 'ddaasd', 'sasadadad', 78429398, 0, 0, 17, '2022-10-04 22:00:23', '2022-10-04 22:00:23'),
(4, 'Test', 'Final Test', 78429398, 0, 0, 17, '2022-10-04 22:07:46', '2022-10-04 22:07:46'),
(5, 'Test', 'Final Test  notes', 78429398, 0, 0, 17, '2022-10-04 22:08:25', '2022-10-04 22:08:25'),
(6, 'Test2', 'Final Test  notes2', 78429398, 0, 0, 17, '2022-10-04 22:08:42', '2022-10-04 22:08:42'),
(7, 'Test', 'Hi This is test', 78429398, 0, 0, 17, '2022-10-05 19:24:44', '2022-10-05 19:24:44'),
(8, 'testr', 'ssdsadasdadadasd', 78429398, 0, 0, 17, '2022-10-05 21:17:22', '2022-10-05 21:17:22'),
(9, 'testr', 'ssdsadasdadadasd', 78429398, 0, 0, 17, '2022-10-05 21:17:32', '2022-10-05 21:17:32'),
(10, 'testr', 'ssdsadasdadadasd', 78429398, 0, 0, 17, '2022-10-05 21:19:14', '2022-10-05 21:19:14'),
(11, 'testr', 'ssdsadasdadadasd', 78429398, 0, 0, 17, '2022-10-05 21:20:34', '2022-10-05 21:20:34'),
(12, 'testr', 'ssdsadasdadadasd', 78429398, 0, 0, 17, '2022-10-05 21:20:58', '2022-10-05 21:20:58'),
(13, 'testr', 'ssdsadasdadadasd', 78429398, 0, 0, 17, '2022-10-05 21:27:21', '2022-10-05 21:27:21'),
(14, 'Test mail', 'this is mail functionality test', 78429398, 0, 0, 17, '2022-10-05 21:29:21', '2022-10-05 21:29:21'),
(15, 'test', 'sdaddasdadssdssd', 78429398, 0, 0, 17, '2022-10-05 21:48:29', '2022-10-05 21:48:29'),
(16, 'test', 'sdaddasdadssdssd', 78429398, 0, 0, 17, '2022-10-05 21:49:30', '2022-10-05 21:49:30'),
(17, 'Sdadsdadsd', 'asdsadasdad asda ds', 78429398, 0, 0, 17, '2022-10-05 21:52:54', '2022-10-05 21:52:54'),
(18, 'sdsdasdas', 'asdadad s ds', 78429398, 0, 0, 17, '2022-10-05 21:54:18', '2022-10-05 21:54:18'),
(19, 'sdsdasdas', 'asdadad s ds', 78429398, 0, 0, 17, '2022-10-05 21:55:05', '2022-10-05 21:55:05'),
(20, 'sdsdasdas', 'asdadad s ds', 78429398, 0, 0, 17, '2022-10-05 21:55:25', '2022-10-05 21:55:25'),
(21, 'sadsd', 'ssad', 78429398, 0, 0, 17, '2022-10-05 21:56:38', '2022-10-05 21:56:38'),
(22, 'sadsd', 'ssad', 78429398, 0, 0, 17, '2022-10-05 22:27:24', '2022-10-05 22:27:24'),
(23, 'add', 'adfas', 78429398, 0, 0, 17, '2022-10-05 22:28:08', '2022-10-05 22:28:08'),
(24, 'add', 'adfas', 78429398, 0, 0, 17, '2022-10-05 22:28:35', '2022-10-05 22:28:35'),
(25, 'add', 'adfas', 78429398, 0, 0, 17, '2022-10-05 22:29:08', '2022-10-05 22:29:08'),
(26, 'aeaa', 'ssdasdd', 78429398, 0, 0, 17, '2022-10-05 22:36:54', '2022-10-05 22:36:54'),
(27, 'aeaa', 'ssdasdd', 78429398, 0, 0, 16, '2022-10-05 22:37:51', '2022-10-05 22:37:51'),
(28, 'aeaa', 'ssdasdd', 78429398, 0, 0, 16, '2022-10-05 22:39:11', '2022-10-05 22:39:11'),
(29, 'aeaa', 'ssdasdd', 78429398, 0, 0, 16, '2022-10-05 22:56:08', '2022-10-05 22:56:08'),
(30, 'aeaa', 'ssdasdd', 78429398, 0, 0, 16, '2022-10-05 22:56:34', '2022-10-05 22:56:34'),
(31, 'aeaa', 'ssdasdd', 78429398, 0, 0, 16, '2022-10-05 22:57:30', '2022-10-05 22:57:30'),
(32, 'XSas', 'asafsadafadsd', 78429398, 0, 0, 16, '2022-10-05 22:59:48', '2022-10-05 22:59:48'),
(33, 'saadsd', 'asdsadsadasd', 78429398, 0, 0, 16, '2022-10-05 23:00:57', '2022-10-05 23:00:57'),
(34, 'What is Lorem Ipsum?', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 78429398, 0, 0, 16, '2022-10-05 23:06:36', '2022-10-05 23:06:36'),
(35, 'This is test message', 'asdddsadadaddsadaddas  a ada sad das ds dasd a dsdsadasa', 78429398, 0, 0, 16, '2022-10-05 23:09:06', '2022-10-05 23:09:06'),
(36, 'sadasddad', 'safsa bsf asD sad ad SAd sas dsadas saasad', 78429398, 0, 0, 16, '2022-10-05 23:10:46', '2022-10-05 23:10:46'),
(37, 'ASA', 'AsASasS', 78429398, 0, 0, 16, '2022-10-05 23:12:18', '2022-10-05 23:12:18'),
(38, 'AdSSSSasa', 'AassssS', 78429398, 0, 0, 16, '2022-10-05 23:13:17', '2022-10-05 23:13:17'),
(39, '10th certificate', 'For Indian applicants who completed Grade 12 in Central Board of Secondary Education (CBSE), please be advised that EACH of below is required for admission to this program:', 78429398, 0, 0, 16, '2022-10-09 22:11:39', '2022-10-09 22:11:39'),
(40, '10th certificate', 'For Indian applicants who completed Grade 12 in Central Board of Secondary Education (CBSE), please be advised that EACH of below is required for admission to this program:', 78429398, 0, 0, 16, '2022-10-09 22:12:20', '2022-10-09 22:12:20'),
(41, 'test', 'undefined', 26892179, 0, 0, 28, '2022-11-23 18:18:48', '2022-11-23 18:18:48'),
(42, 'mnmnm', 'undefined', 69505131, 0, 0, 28, '2023-01-26 17:47:56', '2023-01-26 17:47:56'),
(43, 'title', 'undefined', 69505131, 0, 0, 28, '2023-01-27 19:55:42', '2023-01-27 19:55:42'),
(44, 'tiitle', 'undefined', 78429398, 0, 0, 16, '2023-01-27 19:57:27', '2023-01-27 19:57:27'),
(45, 'tester', 'undefined', 78429398, 0, 0, 16, '2023-01-27 20:00:26', '2023-01-27 20:00:26');

-- --------------------------------------------------------

--
-- Table structure for table `notice_board`
--

CREATE TABLE `notice_board` (
  `id` int(11) NOT NULL,
  `notice_text` text NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `notice_board`
--

INSERT INTO `notice_board` (`id`, `notice_text`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 1, '2022-12-17 19:26:10', '2022-12-17 19:26:10'),
(2, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.2', 1, '2022-12-17 19:26:10', '2022-12-17 19:26:10'),
(3, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 1, '2022-12-17 19:26:28', '2022-12-17 19:26:28'),
(4, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.2', 1, '2022-12-17 19:26:28', '2022-12-17 19:26:28'),
(5, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 1, '2022-12-17 19:26:28', '2022-12-17 19:26:28'),
(6, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.2', 1, '2022-12-17 19:26:28', '2022-12-17 19:26:28');

-- --------------------------------------------------------

--
-- Table structure for table `other_schools_attended`
--

CREATE TABLE `other_schools_attended` (
  `id` int(11) NOT NULL,
  `country_of_institution2` int(11) DEFAULT NULL,
  `name_of_institution2` varchar(50) DEFAULT NULL,
  `level_of_education2` int(11) DEFAULT NULL,
  `primary_language_of_instruction2` varchar(50) DEFAULT NULL,
  `attended_institution_from2` date DEFAULT NULL,
  `attended_institution_to2` date DEFAULT NULL,
  `degree_name2` varchar(50) DEFAULT NULL,
  `graduated_institution2` int(11) DEFAULT NULL,
  `graduation_date2` date DEFAULT NULL,
  `physical_certificate_for_this_degree2` int(11) DEFAULT NULL,
  `school_address2` varchar(100) DEFAULT NULL,
  `school_province2` int(11) DEFAULT NULL,
  `school_city_town2` int(11) DEFAULT NULL,
  `school_postal_code2` int(11) DEFAULT NULL,
  `country_of_institution3` int(11) DEFAULT NULL,
  `name_of_institution3` varchar(50) DEFAULT NULL,
  `level_of_education3` int(11) DEFAULT NULL,
  `primary_language_of_instruction3` varchar(50) DEFAULT NULL,
  `attended_institution_from3` date DEFAULT NULL,
  `attended_institution_to3` date DEFAULT NULL,
  `degree_name3` varchar(50) DEFAULT NULL,
  `graduated_institution3` int(11) DEFAULT NULL,
  `graduation_date3` date DEFAULT NULL,
  `physical_certificate_for_this_degree3` int(11) DEFAULT NULL,
  `school_address3` varchar(100) DEFAULT NULL,
  `school_province3` int(11) DEFAULT NULL,
  `school_city_town3` int(11) DEFAULT NULL,
  `school_postal_code3` varchar(15) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `other_schools_attended`
--

INSERT INTO `other_schools_attended` (`id`, `country_of_institution2`, `name_of_institution2`, `level_of_education2`, `primary_language_of_instruction2`, `attended_institution_from2`, `attended_institution_to2`, `degree_name2`, `graduated_institution2`, `graduation_date2`, `physical_certificate_for_this_degree2`, `school_address2`, `school_province2`, `school_city_town2`, `school_postal_code2`, `country_of_institution3`, `name_of_institution3`, `level_of_education3`, `primary_language_of_instruction3`, `attended_institution_from3`, `attended_institution_to3`, `degree_name3`, `graduated_institution3`, `graduation_date3`, `physical_certificate_for_this_degree3`, `school_address3`, `school_province3`, `school_city_town3`, `school_postal_code3`, `user_id`, `created_at`, `updated_at`) VALUES
(2, 35, 'Name of Institution', 16, 'Primary Lang11', '2025-02-08', '2024-11-08', 'Degree Name', 1, '2025-07-08', 1, 'Address', 2, 2, 885544, 72, 'Name of Institution', 16, 'Primary Lang', '2025-02-08', '2025-02-08', 'Degree Name', 1, '2025-01-08', 1, 'Address', 2, 2, '885544', 47, '2023-01-12 02:35:08', '2023-01-12 02:35:08'),
(3, 8, 'ZAIC', 15, 'Hindi', '0007-03-09', '0008-03-01', 'DCA', 1, '0008-03-01', 1, 'Noida', 2, 2, 112233, 8, 'Test', 18, NULL, '0015-03-07', '0018-02-07', 'TEST', 0, '0007-04-08', 1, 'Siwan', 2, 2, '841469', 54, '2023-01-13 03:29:47', '2023-01-13 03:29:47'),
(4, 0, NULL, 0, NULL, '0000-00-00', '0000-00-00', NULL, 0, '0000-00-00', NULL, NULL, 2, 2, NULL, 0, NULL, 0, NULL, '0000-00-00', '0000-00-00', NULL, 0, '0000-00-00', NULL, NULL, 2, 2, NULL, 56, '2023-01-16 12:40:04', '2023-01-16 12:40:04'),
(5, 0, NULL, 0, NULL, '0000-00-00', '0000-00-00', NULL, 0, '0000-00-00', NULL, NULL, 2, 2, NULL, 0, NULL, 0, NULL, '0000-00-00', '0000-00-00', NULL, 0, '0000-00-00', NULL, NULL, 2, 2, NULL, 57, '2023-01-17 00:46:02', '2023-01-17 00:46:02'),
(6, 0, NULL, 0, NULL, '2023-11-09', '2001-02-01', NULL, 0, '2023-01-01', NULL, NULL, 2, 2, NULL, 0, NULL, 0, NULL, '2023-01-28', '2023-01-26', NULL, 0, '2023-01-29', NULL, NULL, 2, 2, NULL, 58, '2023-01-17 01:29:02', '2023-01-17 01:29:02'),
(7, 78, 'Pranjivan academy', 13, 'English', '1991-01-14', '1993-01-04', '10+2', 0, NULL, 1, 'Laxmi nagar', 2, 2, 110048, 78, 'national academy school', 13, 'English', '1999-01-01', '2000-12-31', 'intermediate', 0, NULL, 1, '1st Floor, C3/195', 2, 2, '110022', 59, '2023-01-17 02:46:51', '2023-01-17 02:46:51'),
(8, 78, 'Pranjivan academy', 13, 'english, hindi', '1989-01-01', '1991-01-17', 'intermediate', 0, '2023-01-18', NULL, 'dwarka', 2, 2, 110020, 78, 'PK Roy memorial', 17, 'English', '1991-01-01', '1994-01-02', 'B Sc math', 1, '1994-12-12', NULL, 'Dhanbad', 2, 2, '110020', 60, '2023-01-17 14:33:58', '2023-01-17 14:33:58'),
(9, 0, NULL, 0, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, 2, 2, NULL, 0, NULL, 0, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, 2, 2, NULL, 61, '2023-01-24 00:04:41', '2023-01-24 00:04:41'),
(10, 78, 'Adrash', 13, 'Hindi', '2014-01-09', '2015-01-13', '12', 0, '2023-01-17', 1, 'Mohali', 2, 2, 155245, 0, NULL, 0, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, 2, 2, NULL, 63, '2023-01-24 23:11:39', '2023-01-24 23:11:39'),
(11, 0, NULL, 0, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, 2, 2, NULL, 0, NULL, 0, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, 2, 2, NULL, 64, '2023-01-26 23:05:29', '2023-01-26 23:05:29'),
(12, 1, 'vcvvc', 18, 'cvcvc', NULL, NULL, 'fgfgfg', 0, NULL, NULL, 'cvcvcvcv', 2, 2, 5454545, 1, 'gfgfgf', 18, 'fvcvcvcvcv', NULL, '2023-01-31', NULL, 0, '2023-01-17', NULL, 'cvvcvc', 2, 2, '45454545', 67, '2023-01-29 21:42:53', '2023-01-29 21:42:53'),
(13, 2, 'sdasd', 15, NULL, '2023-01-18', '2023-01-18', NULL, 0, NULL, NULL, 'cxxxvc', 2, 2, 88554455, 2, 'xcz', 14, 'cxcxcv', '2023-01-17', '2023-01-18', NULL, NULL, NULL, NULL, 'dssf', 15, 16, NULL, 69, '2023-01-31 02:23:56', '2023-01-31 02:23:56'),
(14, 0, NULL, 0, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, 2, 2, NULL, 0, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 2, NULL, 71, '2023-01-31 22:36:49', '2023-01-31 22:36:49'),
(15, 0, NULL, 0, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, 2, 2, NULL, 0, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 2, NULL, 72, '2023-02-02 20:30:53', '2023-02-02 20:30:53');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('test@gmail.com', '$2y$10$GFBMHiYNC/HCt9owurW6X.iPi6BFM3KanGzhwxY6tKJtdHzrDMMlu', '2022-06-10 07:58:14');

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` int(11) NOT NULL,
  `payment_id` varchar(25) NOT NULL,
  `student_id` int(11) NOT NULL,
  `amount` varchar(20) NOT NULL,
  `appid` int(11) DEFAULT NULL,
  `other` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `payment_id`, `student_id`, `amount`, `appid`, `other`, `created_at`) VALUES
(1, 'pay_KVMwAtdSWKqm2i', 11, '899', NULL, NULL, '2022-10-18 20:37:49'),
(2, 'pay_KVMzoz9HkGNimb', 11, '899', NULL, NULL, '2022-10-18 20:41:18'),
(3, 'pay_KVNQ33BifIvFnh', 11, '1200', NULL, NULL, '2022-10-18 21:06:09'),
(4, 'pay_KVjlKKkdSInfAv', 16, '899', 78429398, 'Application Fees Payment', '2022-10-19 18:58:04'),
(5, 'pay_KVjxbq9r5j4FDn', 15, '1200', 91737136, 'Application Fees Payment', '2022-10-19 19:09:10'),
(6, 'pay_KVk4K1aMjXON2R', 16, '899', 78429398, 'Application Fees Payment', '2022-10-19 19:15:27'),
(7, 'pay_KVkUWlX5hoULlq', 16, '899', 78429398, 'Application Fees Payment', '2022-10-19 19:40:16'),
(8, 'pay_KVkXKk99vsJHbV', 15, '1200', 91737136, 'Application Fees Payment', '2022-10-19 19:42:56'),
(9, 'pay_KVkvvz2N7FCCc3', 10, '1200', 90376044, 'Application Fees Payment', '2022-10-19 20:06:10'),
(10, 'pay_KVlCFtcJ74pGUO', 15, '1200', 91737136, 'Application Fees Payment', '2022-10-19 20:21:38'),
(11, 'pay_KWURFwMoJBzhZh', 16, '899', 78429398, 'Application Fees Payment', '2022-10-21 16:36:56'),
(12, 'pay_KWWEhbdbCAsJaH', 28, '1200', 26892179, 'Application Fees Payment', '2022-10-21 18:22:27'),
(13, 'pay_KuEzuwWIDDikh9', 10, '1200', 90123585, 'Application Fees Payment', '2022-12-20 17:06:44'),
(14, 'pay_KuHA7PdX1yJRSV', 28, '1200', 53896579, 'Application Fees Payment', '2022-12-20 19:13:46'),
(15, 'pay_KuHSXXmbXrlkaM', 10, '1200', 56525658, 'Application Fees Payment', '2022-12-20 19:31:14'),
(16, 'pay_Kuf27ClLGfxAHv', 10, '1200', 90376044, 'Application Fees Payment', '2022-12-21 18:34:51'),
(17, 'pay_Kuf6HToJ5E3W7d', 10, '1200', 90376044, 'Application Fees Payment', '2022-12-21 18:38:46'),
(18, 'pay_Kuf90yja4wG087', 10, '1200', 90123585, 'Application Fees Payment', '2022-12-21 18:41:21'),
(19, 'pay_KufF1uneZeCjGq', 10, '1200', 90376044, 'Application Fees Payment', '2022-12-21 18:47:03'),
(20, 'pay_KufHjUsbgsGeQQ', 10, '1200', 90123585, 'Application Fees Payment', '2022-12-21 18:49:37'),
(21, 'pay_KufK7nzWrQ3LMN', 10, '1200', 56525658, 'Application Fees Payment', '2022-12-21 18:51:52'),
(22, 'pay_KufckuXhCAlWqK', 10, '1200', 90376044, 'Application Fees Payment', '2022-12-21 19:09:30'),
(23, 'pay_KufhmXBATInMzd', 10, '1200', 90376044, 'Application Fees Payment', '2022-12-21 19:14:18'),
(24, 'pay_KugI29NLllKWtw', 10, '1200', 90376044, 'Application Fees Payment', '2022-12-21 19:48:34'),
(25, 'pay_KugL0IDzgslmSb', 10, '1200', 90376044, 'Application Fees Payment', '2022-12-21 19:51:23'),
(26, 'pay_KugNynmZ1cX7R8', 10, '1200', 90123585, 'Application Fees Payment', '2022-12-21 19:54:12'),
(27, 'pay_KugQ9UJNzQ8eLM', 10, '1200', 56525658, 'Application Fees Payment', '2022-12-21 19:56:15'),
(28, 'pay_KugRvQJbf6tV8R', 10, '1200', 58472427, 'Application Fees Payment', '2022-12-21 19:57:57'),
(29, 'pay_KugURTVkjqMOmt', 10, '1200', 90376044, 'Application Fees Payment', '2022-12-21 20:00:19'),
(30, 'pay_KugYonIKdxc3Bj', 10, '1200', 90376044, 'Application Fees Payment', '2022-12-21 20:04:28'),
(31, 'pay_KugcBMOJA1wB1s', 10, '1200', 90123585, 'Application Fees Payment', '2022-12-21 20:07:39'),
(32, 'pay_KugnhrReKBjCaB', 10, '1200', 56525658, 'Application Fees Payment', '2022-12-21 20:18:34'),
(33, 'pay_KugwsIbLdrMhzp', 10, '1200', 90376044, 'Application Fees Payment', '2022-12-21 20:27:14'),
(34, 'pay_KuhArNtkxp7J8p', 10, '1200', 90376044, 'Application Fees Payment', '2022-12-21 20:40:28'),
(35, 'pay_KuhGavvIMJtXFv', 10, '1200', 90123585, 'Application Fees Payment', '2022-12-21 20:45:54'),
(36, 'pay_L87FRuHrzDAb7b', 28, '1200', 56496397, 'Application Fees Payment', '2023-01-24 18:37:58'),
(37, 'pay_LBfJ8LKQFZM8TU', 28, '1200', 93211678, 'Application Fees Payment', '2023-02-02 17:54:41');

-- --------------------------------------------------------

--
-- Table structure for table `payment_status`
--

CREATE TABLE `payment_status` (
  `id` int(11) NOT NULL,
  `status_name` varchar(35) NOT NULL,
  `bgcolor` varchar(25) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `payment_status`
--

INSERT INTO `payment_status` (`id`, `status_name`, `bgcolor`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Not Paid', 'bg-warning', 1, '2022-09-17 01:39:59', '2022-09-17 01:39:59'),
(2, 'Processing', 'bg-primary', 1, '2022-09-17 01:39:59', '2022-09-17 01:39:59'),
(3, 'Accepted', 'bg-success', 1, '2022-09-17 01:39:59', '2022-09-17 01:39:59'),
(4, 'Cancelled', 'bg-light', 1, '2022-09-17 01:39:59', '2022-09-17 01:39:59'),
(5, 'Submitted', 'bg-success', 1, '2022-09-17 01:41:13', '2022-09-17 01:41:13');

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `page_title` varchar(60) NOT NULL,
  `slug` varchar(60) NOT NULL,
  `icon` varchar(150) NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `role_id`, `page_title`, `slug`, `icon`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 'Dashboard', 'admin-dashboard', '<i class=\"me-2 fa-solid fa-house-chimney-window\"></i>', 1, '2022-08-20 09:42:03', '2022-08-20 09:42:03'),
(2, 1, 'Application', 'admin-application-list', '<i class=\"me-2 fa-solid fa-magnifying-glass\"></i>', 1, '2022-08-20 09:42:03', '2022-08-20 09:42:03'),
(3, 0, 'Application Review', 'admin-application-review', '<i class=\"me-2 fa-solid fa-user-graduate\"></i>', 0, '2022-08-20 09:48:31', '2022-08-20 09:48:31'),
(4, 0, 'Students', 'students', '<i class=\"me-2 fa-solid fa-user-graduate\"></i>', 1, '2022-08-20 09:48:31', '2022-08-20 09:48:31'),
(5, 0, 'Applications', 'agentApplication', '<i class=\"me-2 fa-solid fa-scroll\"></i>', 1, '2022-08-20 09:48:31', '2022-08-20 09:48:31'),
(6, 0, 'Payments', 'payments', '<i class=\"fa-solid fa-credit-card me-2 \"></i>', 1, '2022-08-20 09:48:31', '2022-08-20 09:48:31'),
(7, 0, 'Commission Structure', 'commission_structure', '<i class=\"me-2 fa-solid fa-percent\"></i>', 1, '2022-08-20 09:48:31', '2022-08-20 09:48:31'),
(8, 0, 'Manage Staff', 'manage_staff', '<i class=\"me-2 fa-solid fa-user-check\"></i>', 1, '2022-08-20 09:48:31', '2022-08-20 09:48:31'),
(9, 0, 'Sub Agents', 'sub_agent', '<i class=\"me-2 fa-solid fa-user\"></i>', 1, '2022-08-20 09:48:31', '2022-08-20 09:48:31'),
(10, 0, 'Growth Hub', 'growth_hub', '<i class=\"me-2 fa-solid fa-users\"></i>', 1, '2022-08-20 09:48:31', '2022-08-20 09:48:31'),
(11, 0, 'Student Profile', 'agent_student_profile', '<i class=\"me-2 fa-solid fa-users\"></i>', 1, '2022-08-20 09:48:31', '2022-08-20 09:48:31'),
(12, 0, 'Training Request', 'training_request', '<i class=\"me-2 fa-solid fa-flag\"></i>', 1, '2022-08-20 09:52:13', '2022-08-20 09:52:13'),
(13, 0, 'Wallet', 'wallet', '<i class=\"me-2 fa-solid fa-wallet\"></i>', 1, '2022-08-20 09:52:13', '2022-08-20 09:52:13'),
(14, 0, 'Invoices', 'invoices', '<i class=\"me-2 fa-solid fa-receipt\"></i>', 1, '2022-08-20 09:52:13', '2022-08-20 09:52:13'),
(15, 0, 'Students Applications', 'students_applications', '<i class=\"me-2 fa-solid fa-file-lines\"></i>', 1, '2022-08-20 09:52:13', '2022-08-20 09:52:13'),
(16, 0, 'Team', 'team', '<i class=\"me-2 fa-solid fa-people-group\"></i>', 1, '2022-08-20 09:52:13', '2022-08-20 09:52:13'),
(17, 0, 'My Reminders', 'agent_my_reminders', '<i class=\"me-2 fa-solid fa-clock\"></i>', 1, '2022-08-20 09:52:13', '2022-08-20 09:52:13'),
(18, 0, 'Template', 'template', '<i class=\"me-2 fa-solid fa-file-lines\"></i>', 1, '2022-08-20 09:52:13', '2022-08-20 09:52:13'),
(19, 0, 'Knowledge Base', 'knowledge_base', '<i class=\"me-2 fa-solid fa-box\"></i>', 1, '2022-08-20 09:52:13', '2022-08-20 09:52:13'),
(20, 2, 'Dashboard', 'agentDashboard', '<i class=\"me-2 fa-solid fa-house-chimney-window\"></i>', 1, '2022-08-20 09:42:03', '2022-08-20 09:42:03'),
(21, 2, 'Programs & Schools', 'agentProgram', '<i class=\"me-2 fa-solid fa-magnifying-glass\"></i>', 1, '2022-08-20 09:42:03', '2022-08-20 09:42:03'),
(22, 2, 'Students', 'students', '<i class=\"me-2 fa-solid fa-user-graduate\"></i>', 1, '2022-08-20 09:48:31', '2022-08-20 09:48:31'),
(23, 2, 'Applications', 'agentApplication', '<i class=\"me-2 fa-solid fa-scroll\"></i>', 1, '2022-08-20 09:48:31', '2022-08-20 09:48:31'),
(24, 2, 'Payments', 'payments', '<i class=\"fa-solid fa-credit-card me-2 \"></i>', 1, '2022-08-20 09:48:31', '2022-08-20 09:48:31'),
(25, 2, 'Commission Structure', 'commission_structure', '<i class=\"me-2 fa-solid fa-percent\"></i>', 1, '2022-08-20 09:48:31', '2022-08-20 09:48:31'),
(26, 2, 'Manage Staff', 'manage_staff', '<i class=\"me-2 fa-solid fa-user-check\"></i>', 1, '2022-08-20 09:48:31', '2022-08-20 09:48:31'),
(27, 2, 'Sub Agents', 'sub_agent', '<i class=\"me-2 fa-solid fa-user\"></i>', 1, '2022-08-20 09:48:31', '2022-08-20 09:48:31'),
(28, 2, 'Growth Hub', 'growth_hub', '<i class=\"me-2 fa-solid fa-users\"></i>', 1, '2022-08-20 09:48:31', '2022-08-20 09:48:31'),
(29, 2, 'Student Profile', 'agent_student_profile', '<i class=\"me-2 fa-solid fa-users\"></i>', 1, '2022-08-20 09:48:31', '2022-08-20 09:48:31'),
(30, 2, 'Training Request', 'training_request', '<i class=\"me-2 fa-solid fa-flag\"></i>', 1, '2022-08-20 09:52:13', '2022-08-20 09:52:13'),
(31, 2, 'Wallet', 'wallet', '<i class=\"me-2 fa-solid fa-wallet\"></i>', 1, '2022-08-20 09:52:13', '2022-08-20 09:52:13'),
(32, 2, 'Invoices', 'invoices', '<i class=\"me-2 fa-solid fa-receipt\"></i>', 1, '2022-08-20 09:52:13', '2022-08-20 09:52:13'),
(33, 2, 'Students Applications', 'students_applications', '<i class=\"me-2 fa-solid fa-file-lines\"></i>', 1, '2022-08-20 09:52:13', '2022-08-20 09:52:13'),
(34, 2, 'Team', 'team', '<i class=\"me-2 fa-solid fa-people-group\"></i>', 1, '2022-08-20 09:52:13', '2022-08-20 09:52:13'),
(35, 2, 'My Reminders', 'agent_my_reminders', '<i class=\"me-2 fa-solid fa-clock\"></i>', 1, '2022-08-20 09:52:13', '2022-08-20 09:52:13'),
(36, 2, 'Template', 'template', '<i class=\"me-2 fa-solid fa-file-lines\"></i>', 1, '2022-08-20 09:52:13', '2022-08-20 09:52:13'),
(37, 2, 'Knowledge Base', 'knowledge_base', '<i class=\"me-2 fa-solid fa-box\"></i>', 1, '2022-08-20 09:52:13', '2022-08-20 09:52:13'),
(38, 3, 'Dashboard', 'agentDashboard', '<i class=\"me-2 fa-solid fa-house-chimney-window\"></i>', 1, '2022-08-20 09:42:03', '2022-08-20 09:42:03'),
(39, 3, 'Programs & Schools', 'agentProgram', '<i class=\"me-2 fa-solid fa-magnifying-glass\"></i>', 1, '2022-08-20 09:42:03', '2022-08-20 09:42:03'),
(40, 3, 'Students', 'students', '<i class=\"me-2 fa-solid fa-user-graduate\"></i>', 1, '2022-08-20 09:48:31', '2022-08-20 09:48:31'),
(41, 3, 'Applications', 'agentApplication', '<i class=\"me-2 fa-solid fa-scroll\"></i>', 1, '2022-08-20 09:48:31', '2022-08-20 09:48:31'),
(45, 3, 'Sub Agents', 'sub_agent', '<i class=\"me-2 fa-solid fa-user\"></i>', 1, '2022-08-20 09:48:31', '2022-08-20 09:48:31'),
(46, 3, 'Growth Hub', 'growth_hub', '<i class=\"me-2 fa-solid fa-users\"></i>', 1, '2022-08-20 09:48:31', '2022-08-20 09:48:31'),
(47, 3, 'Student Profile', 'agent_student_profile', '<i class=\"me-2 fa-solid fa-users\"></i>', 1, '2022-08-20 09:48:31', '2022-08-20 09:48:31'),
(48, 3, 'Training Request', 'training_request', '<i class=\"me-2 fa-solid fa-flag\"></i>', 1, '2022-08-20 09:52:13', '2022-08-20 09:52:13'),
(50, 3, 'Invoices', 'invoices', '<i class=\"me-2 fa-solid fa-receipt\"></i>', 1, '2022-08-20 09:52:13', '2022-08-20 09:52:13'),
(51, 3, 'Students Applications', 'students_applications', '<i class=\"me-2 fa-solid fa-file-lines\"></i>', 1, '2022-08-20 09:52:13', '2022-08-20 09:52:13'),
(52, 3, 'Team', 'team', '<i class=\"me-2 fa-solid fa-people-group\"></i>', 1, '2022-08-20 09:52:13', '2022-08-20 09:52:13'),
(53, 3, 'My Reminders', 'agent_my_reminders', '<i class=\"me-2 fa-solid fa-clock\"></i>', 1, '2022-08-20 09:52:13', '2022-08-20 09:52:13'),
(54, 3, 'Template', 'template', '<i class=\"me-2 fa-solid fa-file-lines\"></i>', 1, '2022-08-20 09:52:13', '2022-08-20 09:52:13'),
(55, 3, 'Knowledge Base', 'knowledge_base', '<i class=\"me-2 fa-solid fa-box\"></i>', 1, '2022-08-20 09:52:13', '2022-08-20 09:52:13'),
(56, 4, 'Dashboard', 'agentDashboard', '<i class=\"me-2 fa-solid fa-house-chimney-window\"></i>', 1, '2022-08-20 09:42:03', '2022-08-20 09:42:03'),
(57, 4, 'Programs & Schools', 'agentProgram', '<i class=\"me-2 fa-solid fa-magnifying-glass\"></i>', 1, '2022-08-20 09:42:03', '2022-08-20 09:42:03'),
(59, 4, 'Applications', 'agentApplication', '<i class=\"me-2 fa-solid fa-scroll\"></i>', 1, '2022-08-20 09:48:31', '2022-08-20 09:48:31'),
(60, 4, 'Payments', 'payments', '<i class=\"fa-solid fa-credit-card me-2 \"></i>', 1, '2022-08-20 09:48:31', '2022-08-20 09:48:31'),
(65, 4, 'Student Profile', 'agent_student_profile', '<i class=\"me-2 fa-solid fa-users\"></i>', 1, '2022-08-20 09:48:31', '2022-08-20 09:48:31'),
(74, 5, 'Dashboard', 'agentDashboard', '<i class=\"me-2 fa-solid fa-house-chimney-window\"></i>', 1, '2022-08-20 09:42:03', '2022-08-20 09:42:03'),
(75, 5, 'Programs & Schools', 'agentProgram', '<i class=\"me-2 fa-solid fa-magnifying-glass\"></i>', 1, '2022-08-20 09:42:03', '2022-08-20 09:42:03'),
(77, 5, 'Applications', 'agentApplication', '<i class=\"me-2 fa-solid fa-scroll\"></i>', 1, '2022-08-20 09:48:31', '2022-08-20 09:48:31'),
(83, 5, 'Student Profile', 'agent_student_profile', '<i class=\"me-2 fa-solid fa-users\"></i>', 1, '2022-08-20 09:48:31', '2022-08-20 09:48:31'),
(92, 5, 'Payments', 'payments', '<i class=\"fa-solid fa-credit-card me-2 \"></i>', 1, '2022-08-20 09:48:31', '2022-08-20 09:48:31'),
(93, 5, 'My Reminders', 'agent_my_reminders', '<i class=\"me-2 fa-solid fa-clock\"></i>', 1, '2022-08-20 09:52:13', '2022-08-20 09:52:13'),
(94, 4, 'My Reminders', 'agent_my_reminders', '<i class=\"me-2 fa-solid fa-clock\"></i>', 1, '2022-08-20 09:52:13', '2022-08-20 09:52:13'),
(95, 2, 'College Dashboard', 'collegeDashboard', '<i class=\"me-2 fa-solid fa-house-chimney-window\">', 1, '2022-12-14 18:53:22', '2022-12-14 18:53:22'),
(96, 2, 'Add College', 'addCollege', '<i class=\"me-2 fa-solid fa-building-columns\"></i>', 1, '2022-12-14 18:53:22', '2022-12-14 18:53:22'),
(97, 2, 'Add Program', 'addProgram', '<i class=\"me-2 fa-solid fa-list-check\"></i>', 1, '2022-12-14 18:55:43', '2022-12-14 18:55:43'),
(98, 20, 'Requirement', 'requirement', '<i class=\"me-2 fa-solid fa-list-check\"></i>', 0, '2022-12-14 18:55:43', '2022-12-14 18:55:43');

-- --------------------------------------------------------

--
-- Table structure for table `permit_visa`
--

CREATE TABLE `permit_visa` (
  `id` int(11) NOT NULL,
  `visa_title` varchar(50) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `permit_visa`
--

INSERT INTO `permit_visa` (`id`, `visa_title`, `status`, `created_at`, `updated_at`) VALUES
(1, 'I don\'t have this', 1, '2022-09-02 21:04:01', '2022-09-02 21:04:01'),
(2, 'USA F1 Visa', 1, '2022-09-02 21:04:01', '2022-09-02 21:04:01'),
(3, 'Canadian Study Permit or Visitor Visa', 1, '2022-09-02 21:04:01', '2022-09-02 21:04:01'),
(4, 'UK Student Visa (Tier 4) or Short Term Study Visa', 1, '2022-09-02 21:04:01', '2022-09-02 21:04:01'),
(5, 'Australian Student Visa', 1, '2022-09-02 21:04:01', '2022-09-02 21:04:01'),
(6, 'Irish Stamp 2', 1, '2022-09-02 21:04:01', '2022-09-02 21:04:01');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pictures`
--

CREATE TABLE `pictures` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `url` longtext NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pictures`
--

INSERT INTO `pictures` (`id`, `name`, `url`, `created_at`, `updated_at`) VALUES
(2, 'collage-photo2.jpg', '/uploads/collage-photo2.jpg', '2022-07-17 02:40:06', '2022-07-17 02:40:06'),
(3, 'screenshot-from-2022-07-15-21-41-14.png', '/uploads/screenshot-from-2022-07-15-21-41-14.png', '2022-07-17 02:40:06', '2022-07-17 02:40:06'),
(4, 'collage-photo5.png', '/uploads/collage-photo5.png', '2022-07-17 02:40:06', '2022-07-17 02:40:06');

-- --------------------------------------------------------

--
-- Table structure for table `post_secondary_discipline`
--

CREATE TABLE `post_secondary_discipline` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `post_secondary_discipline`
--

INSERT INTO `post_secondary_discipline` (`id`, `title`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Science', 1, '2022-07-30 22:54:11', '2022-07-30 22:54:11'),
(2, 'Law, Politics, Social, Community Service and Teaching', 1, '2022-07-30 22:54:11', '2022-07-30 22:54:11'),
(3, 'Arts', 1, '2022-07-30 22:54:11', '2022-07-30 22:54:11'),
(4, 'English For Academic Studies', 1, '2022-07-30 22:54:11', '2022-07-30 22:54:11'),
(5, 'Business, Mangement and Economics', 1, '2022-07-30 22:54:11', '2022-07-30 22:54:11'),
(6, 'Health Sciences, Medicine, Nursing, Peramedic and Kinesiology', 1, '2022-07-30 22:54:11', '2022-07-30 22:54:11');

-- --------------------------------------------------------

--
-- Table structure for table `post_secondary_sub_categories`
--

CREATE TABLE `post_secondary_sub_categories` (
  `id` int(11) NOT NULL,
  `sub_cat_name` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `post_secondary_sub_categories`
--

INSERT INTO `post_secondary_sub_categories` (`id`, `sub_cat_name`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Science', 1, '2022-07-30 22:59:37', '2022-07-30 22:59:37'),
(2, 'Law, Politics, Social, Community Service and Teaching', 1, '2022-07-30 22:59:37', '2022-07-30 22:59:37'),
(3, 'Arts', 1, '2022-07-30 22:59:37', '2022-07-30 22:59:37'),
(4, 'English For Academic Studies', 1, '2022-07-30 22:59:37', '2022-07-30 22:59:37'),
(5, 'Business, Mangement and Economics', 1, '2022-07-30 22:59:37', '2022-07-30 22:59:37'),
(6, 'Health Sciences, Medicine, Nursing, Peramedic and Kinesiology', 1, '2022-07-30 22:59:37', '2022-07-30 22:59:37');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `role` varchar(35) NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `role`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Super Admin', 1, '2022-08-16 20:25:22', '2022-08-16 20:25:22'),
(2, 'Admin', 1, '2022-08-16 20:27:05', '2022-08-16 20:27:05'),
(3, 'Agent', 1, '2022-08-16 20:27:42', '2022-08-16 20:27:42'),
(4, 'Student', 1, '2022-08-16 20:28:39', '2022-08-16 20:28:39'),
(5, 'Student by Agent', 1, '2022-08-16 20:28:39', '2022-08-16 20:28:39'),
(6, 'Sub Agent', 1, '2022-08-16 20:29:05', '2022-08-16 20:29:05'),
(7, 'Staff', 1, '2022-08-16 20:29:05', '2022-08-16 20:29:05'),
(8, 'Student by Sub Agent', 1, '2022-08-16 20:30:27', '2022-08-16 20:30:27'),
(9, 'Team', 1, '2022-08-16 20:30:27', '2022-08-16 20:30:27'),
(10, 'Manager', 1, '2022-08-16 20:30:44', '2022-08-16 20:30:44');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` text NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('qqHYhZ7Zv3tWWYf31soaSJJThCVL9JG8tpNJdmjz', NULL, '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64; rv:101.0) Gecko/20100101 Firefox/101.0', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiOTN6OFowREs0aFNaa256SFIzVTJmUFBSZmxxQ3pieVE2c0hSYVU4WSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzM6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hdXRoL2dvb2dsZSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NToic3RhdGUiO3M6NDA6IlZXeEZLN3phQmVqZ1ZzM1RuUXFWejBOV0oxS2x2aVFZa3lZRFNRU0EiO30=', 1654786587),
('VEPum8fygzybST1pzufOZGVuYr7nHGB6srK7ze0j', NULL, '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiWk56bFFUWTFFWXZjenFwRWU1MFFvWGF2Y1BCOXE4Mnl1Q091bXg0MyI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9sb2dpbiI7fX0=', 1654793829),
('YkbzLL5csZzaFAG6eII7PydgiiiuccuyLeAjKq1i', NULL, '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64; rv:101.0) Gecko/20100101 Firefox/101.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiRmNvbjRnaDBac0xqUVBPaWMzaHZoc2Rua2RQVElIWTlxS1BidWNjcCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fX0=', 1654793826);

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

CREATE TABLE `state` (
  `id` int(11) NOT NULL,
  `country_id` int(11) NOT NULL,
  `state` varchar(100) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `state`
--

INSERT INTO `state` (`id`, `country_id`, `state`, `status`, `created_at`, `updated_at`) VALUES
(2, 1, 'Maharashtra', 1, '2023-01-28 21:00:02', '2023-01-28 21:00:02'),
(3, 1, 'Delhi', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 1, 'Karnataka', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 1, 'Gujarat', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 1, 'Telangana', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, 1, 'Tamil Nadu', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(8, 1, 'West Bengal', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(9, 1, 'Rajasthan', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(10, 1, 'Uttar Pradesh', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(11, 1, 'Bihar', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(12, 1, 'Madhya Pradesh', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(13, 1, 'Andhra Pradesh', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(14, 1, 'Punjab', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(15, 1, 'Haryana', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(16, 1, 'Jammu and Kashmir', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(17, 1, 'Jharkhand', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(18, 1, 'Chhattisgarh', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(19, 1, 'Assam', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(20, 1, 'Chandigarh', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(21, 1, 'Odisha', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(22, 1, 'Kerala', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(23, 1, 'Uttarakhand', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(24, 1, 'Puducherry', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(25, 1, 'Tripura', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(26, 1, 'Karnatka', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(27, 1, 'Mizoram', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(28, 1, 'Meghalaya', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(29, 1, 'Manipur', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(30, 1, 'Himachal Pradesh', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(31, 1, 'Nagaland', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(32, 1, 'Goa', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(33, 1, 'Andaman and Nicobar Islands', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(34, 1, 'Arunachal Pradesh', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(35, 1, 'Dadra and Nagar Haveli', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(36, 2, 'Alberta', 1, '2023-01-31 19:23:24', '2023-01-31 19:23:24'),
(37, 2, 'British Columbia\r\n', 1, '2023-01-31 19:24:24', '2023-01-31 19:24:24'),
(38, 2, 'Manitoba\r\n', 1, '2023-01-31 19:24:24', '2023-01-31 19:24:24'),
(39, 2, 'New Brunswick\r\n', 1, '2023-01-31 19:24:24', '2023-01-31 19:24:24'),
(40, 2, 'Newfoundland and Labrador\r\n', 1, '2023-01-31 19:24:24', '2023-01-31 19:24:24'),
(41, 2, 'Northwest Territories\r\n', 1, '2023-01-31 19:24:24', '2023-01-31 19:24:24'),
(42, 2, 'Nunavut\r\n', 1, '2023-01-31 19:24:24', '2023-01-31 19:24:24'),
(43, 2, 'Ontario\r\n', 1, '2023-01-31 19:24:24', '2023-01-31 19:24:24'),
(44, 2, 'Prince Edward Island\r\n', 1, '2023-01-31 19:24:24', '2023-01-31 19:24:24'),
(45, 2, 'Quebec\r\n', 1, '2023-01-31 19:24:24', '2023-01-31 19:24:24'),
(46, 2, 'Saskatchewan\r\n', 1, '2023-01-31 19:34:27', '2023-01-31 19:34:27'),
(47, 2, 'Yukon\r\n', 1, '2023-01-31 19:34:27', '2023-01-31 19:34:27');

-- --------------------------------------------------------

--
-- Table structure for table `student_applications`
--

CREATE TABLE `student_applications` (
  `id` int(11) NOT NULL,
  `program_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `app_id` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `agent_id` int(11) NOT NULL,
  `payment_amount` int(11) NOT NULL DEFAULT 0,
  `payment_status` int(11) NOT NULL DEFAULT 1,
  `application_status` int(11) NOT NULL DEFAULT 1,
  `payment_date` datetime NOT NULL DEFAULT current_timestamp(),
  `certificate_img` varchar(50) DEFAULT NULL,
  `certificate_upload_date` datetime DEFAULT NULL,
  `passport_img` varchar(50) DEFAULT NULL,
  `passport_img_upload_date` datetime DEFAULT NULL,
  `is_trash` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student_applications`
--

INSERT INTO `student_applications` (`id`, `program_id`, `student_id`, `app_id`, `status`, `agent_id`, `payment_amount`, `payment_status`, `application_status`, `payment_date`, `certificate_img`, `certificate_upload_date`, `passport_img`, `passport_img_upload_date`, `is_trash`, `created_at`, `updated_at`) VALUES
(4, 2, 16, 58434328, 1, 0, 0, 1, 1, '2022-09-19 01:01:49', NULL, '2022-09-24 01:11:59', NULL, '2022-09-24 01:11:59', 0, '2022-08-23 20:20:04', '2022-08-23 20:20:32'),
(7, 4, 16, 56998853, 1, 16, 0, 1, 5, '2022-10-16 01:01:49', NULL, '2022-09-24 01:11:59', NULL, '2022-09-24 01:11:59', 0, '2022-08-23 20:20:04', '2022-08-23 20:20:32'),
(14, 17, 16, 78429398, 1, 16, 899, 2, 9, '2022-10-21 22:06:56', '1664827667.png', '2022-10-04 01:37:47', '1664135891.png', '2022-09-26 01:28:11', 0, '2022-08-25 09:36:03', '2022-08-25 09:36:03'),
(17, 2, 15, 91737136, 1, 16, 1200, 2, 2, '2022-10-20 01:51:38', NULL, '2022-09-24 01:11:59', NULL, '2022-09-24 01:11:59', 0, '2022-08-31 18:29:02', '2022-08-31 18:29:02'),
(19, 2, 28, 26892179, 1, 1, 1200, 2, 3, '2022-10-21 23:52:27', NULL, '2022-09-24 01:11:59', NULL, '2022-09-24 01:11:59', 0, '2022-09-10 17:43:17', '2022-09-10 17:43:17'),
(20, 2, 28, 53896579, 1, 1, 1200, 2, 4, '2022-12-21 00:43:46', NULL, '2022-09-24 01:11:59', NULL, '2022-09-24 01:11:59', 0, '2022-09-13 17:52:34', '2022-09-13 17:52:34'),
(21, 2, 28, 56496397, 1, 1, 1200, 2, 5, '2023-01-25 00:07:58', NULL, NULL, NULL, NULL, 0, '2022-09-24 20:43:41', '2022-09-24 20:43:41'),
(22, 2, 30, 23138467, 1, 1, 0, 1, 1, '2022-09-25 02:15:39', NULL, NULL, NULL, NULL, 0, '2022-09-24 20:45:39', '2022-09-24 20:45:39'),
(23, 2, 10, 90376044, 1, 1, 1200, 2, 3, '2022-12-22 02:10:28', NULL, NULL, NULL, NULL, 0, '2022-09-24 20:46:48', '2022-09-24 20:46:48'),
(24, 2, 10, 90123585, 1, 1, 1200, 2, 4, '2022-12-22 02:15:54', NULL, NULL, NULL, NULL, 0, '2022-09-24 20:46:52', '2022-09-24 20:46:52'),
(25, 2, 10, 56525658, 1, 1, 0, 1, 5, '2022-12-22 01:48:34', NULL, NULL, NULL, NULL, 0, '2022-09-24 20:47:35', '2022-09-24 20:47:35'),
(26, 2, 10, 58472427, 1, 1, 0, 1, 8, '2022-12-22 01:27:57', NULL, NULL, NULL, NULL, 0, '2022-09-24 20:48:41', '2022-09-24 20:48:41'),
(27, 2, 28, 60896568, 1, 49, 0, 1, 11, '2022-10-12 01:33:37', NULL, NULL, NULL, NULL, 0, '2022-10-11 20:03:37', '2023-02-02 17:46:35'),
(28, 2, 28, 21303563, 1, 1, 0, 1, 1, '2022-10-12 01:33:48', NULL, NULL, NULL, NULL, 0, '2022-10-11 20:03:48', '2022-10-11 20:03:48'),
(29, 2, 28, 93211678, 1, 1, 1200, 2, 1, '2023-02-02 23:24:41', NULL, NULL, NULL, NULL, 0, '2022-10-11 20:04:06', '2022-10-11 20:04:06'),
(30, 2, 28, 64068641, 1, 1, 0, 1, 1, '2022-10-12 01:46:38', NULL, NULL, NULL, NULL, 0, '2022-10-11 20:16:38', '2022-10-11 20:16:38'),
(31, 2, 28, 56283487, 1, 1, 0, 1, 1, '2022-10-12 01:47:24', NULL, NULL, NULL, NULL, 0, '2022-10-11 20:17:24', '2022-10-11 20:17:24'),
(32, 2, 28, 60649174, 1, 1, 0, 1, 1, '2022-10-16 22:06:46', NULL, NULL, NULL, NULL, 0, '2022-10-16 16:36:46', '2022-10-16 16:36:46'),
(33, 14, 15, 37635391, 1, 1, 0, 1, 1, '2022-10-20 01:45:41', NULL, NULL, NULL, NULL, 0, '2022-10-19 20:15:41', '2022-10-19 20:15:41'),
(34, 4, 15, 33377136, 1, 1, 0, 1, 1, '2022-10-20 01:46:04', NULL, NULL, NULL, NULL, 0, '2022-10-19 20:16:04', '2022-10-19 20:16:04'),
(35, 2, 28, 69505131, 1, 49, 0, 1, 1, '2022-10-21 22:50:31', NULL, NULL, NULL, NULL, 0, '2022-10-21 17:20:31', '2022-12-15 18:46:46'),
(36, 2, 43, 75489662, 1, 62, 0, 1, 1, '2023-01-24 23:41:00', NULL, NULL, NULL, NULL, 0, '2023-01-24 18:11:00', '2023-01-24 18:11:00'),
(37, 2, 55, 70584031, 1, 62, 0, 1, 1, '2023-01-24 23:43:42', NULL, NULL, NULL, NULL, 0, '2023-01-24 18:13:42', '2023-01-24 18:13:42'),
(38, 2, 55, 17585023, 1, 62, 0, 1, 1, '2023-01-24 23:43:43', NULL, NULL, NULL, NULL, 0, '2023-01-24 18:13:43', '2023-01-24 18:13:43'),
(39, 2, 55, 54686759, 1, 62, 0, 1, 1, '2023-01-24 23:43:44', NULL, NULL, NULL, NULL, 0, '2023-01-24 18:13:44', '2023-01-24 18:13:44'),
(40, 2, 55, 67230993, 1, 62, 0, 1, 1, '2023-01-24 23:43:45', NULL, NULL, NULL, NULL, 0, '2023-01-24 18:13:45', '2023-01-24 18:13:45'),
(41, 2, 55, 74801618, 1, 62, 0, 1, 1, '2023-01-24 23:43:45', NULL, NULL, NULL, NULL, 0, '2023-01-24 18:13:45', '2023-01-24 18:13:45'),
(42, 2, 64, 87701795, 1, 1, 0, 1, 1, '2023-01-26 23:07:00', NULL, NULL, NULL, NULL, 0, '2023-01-26 17:37:00', '2023-01-26 17:37:00'),
(43, 4, 68, 87348154, 1, 1, 0, 1, 1, '2023-01-27 22:58:11', NULL, NULL, NULL, NULL, 0, '2023-01-27 17:28:11', '2023-01-27 17:28:11'),
(44, 2, 68, 49690698, 1, 1, 0, 1, 1, '2023-01-27 23:09:31', NULL, NULL, NULL, NULL, 0, '2023-01-27 17:39:31', '2023-01-27 17:39:31'),
(45, 2, 68, 23509034, 1, 1, 0, 1, 1, '2023-01-27 23:36:49', NULL, NULL, NULL, NULL, 0, '2023-01-27 18:06:49', '2023-01-27 18:06:49');

-- --------------------------------------------------------

--
-- Table structure for table `student_education_pictures`
--

CREATE TABLE `student_education_pictures` (
  `id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `name` text NOT NULL,
  `url` longtext NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `student_emergency_contact_pictures`
--

CREATE TABLE `student_emergency_contact_pictures` (
  `id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `name` text NOT NULL,
  `url` longtext NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `student_english_test_score_pictures`
--

CREATE TABLE `student_english_test_score_pictures` (
  `id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `name` text NOT NULL,
  `url` longtext NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `student_passport_and_travel_history_pictures`
--

CREATE TABLE `student_passport_and_travel_history_pictures` (
  `id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `name` text NOT NULL,
  `url` longtext NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `student_profile`
--

CREATE TABLE `student_profile` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `middle_name` varchar(25) DEFAULT NULL,
  `last_name` varchar(25) DEFAULT NULL,
  `family_name` varchar(25) DEFAULT NULL,
  `date_of_birth` date DEFAULT NULL,
  `first_language` varchar(30) DEFAULT NULL,
  `country_of_citizenship` int(11) DEFAULT NULL,
  `passport_number` varchar(50) DEFAULT NULL,
  `marital_status` varchar(20) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `address` varchar(150) DEFAULT NULL,
  `city_town` int(4) DEFAULT NULL,
  `country` int(4) DEFAULT NULL,
  `province_state` int(4) DEFAULT NULL,
  `postal_code` int(6) DEFAULT NULL,
  `phone_number` varchar(12) DEFAULT NULL,
  `country_of_education` int(11) DEFAULT NULL,
  `highest_level_of_education` varchar(4) DEFAULT NULL,
  `grading_scheme` int(11) DEFAULT NULL,
  `grade_average` int(11) DEFAULT NULL,
  `graduated_from_most_recent_school` varchar(60) DEFAULT NULL,
  `country_of_institution` varchar(25) DEFAULT NULL,
  `name_of_institution` varchar(50) DEFAULT NULL,
  `level_of_education` int(11) DEFAULT NULL,
  `primary_language_of_instruction` varchar(12) DEFAULT NULL,
  `attended_institution_from` date DEFAULT NULL,
  `attended_institution_to` date DEFAULT NULL,
  `degree_name` varchar(35) DEFAULT NULL,
  `graduated_institution` varchar(35) DEFAULT NULL,
  `graduation_date` date DEFAULT NULL,
  `physical_certificate_for_this_degree` int(11) DEFAULT NULL,
  `school_address` varchar(250) DEFAULT NULL,
  `school_city_town` int(4) DEFAULT NULL,
  `school_province` int(11) DEFAULT NULL,
  `school_postal_code` int(6) DEFAULT NULL,
  `english_exam_type` int(11) DEFAULT NULL,
  `date_of_exam` date DEFAULT NULL,
  `lisenting` int(3) DEFAULT NULL,
  `reading` int(3) DEFAULT NULL,
  `writing` int(3) DEFAULT NULL,
  `speaking` int(3) DEFAULT NULL,
  `gre_exam_date` date DEFAULT NULL,
  `gre_verbal_score` int(4) DEFAULT NULL,
  `gre_verbal_rank` varchar(4) DEFAULT NULL,
  `gre_quantitative_score` varchar(4) DEFAULT NULL,
  `gre_quantitative_rank` varchar(4) DEFAULT NULL,
  `gre_writing_score` varchar(4) DEFAULT NULL,
  `gre_writing_rank` varchar(4) DEFAULT NULL,
  `gmat_gre_exam_date` date DEFAULT NULL,
  `gmat_verbal_score` varchar(4) DEFAULT NULL,
  `gmat_verbal_rank` varchar(4) DEFAULT NULL,
  `gmat_quantitative_score` varchar(4) DEFAULT NULL,
  `gmat_quantitative_rank` varchar(4) DEFAULT NULL,
  `gmat_writing_score` varchar(4) DEFAULT NULL,
  `gmat_writing_rank` varchar(4) DEFAULT NULL,
  `refused_visa` varchar(4) DEFAULT NULL,
  `study_permit_visa` varchar(11) DEFAULT NULL,
  `more_background_details` varchar(250) DEFAULT NULL,
  `three_year_undergraduate_advanced_diploma` int(4) DEFAULT NULL,
  `lead_status` varchar(4) DEFAULT NULL,
  `referral_source` varchar(25) DEFAULT NULL,
  `country_intrest` int(4) DEFAULT NULL,
  `services_intrest` varchar(11) DEFAULT NULL,
  `term_conditions` int(11) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student_profile`
--

INSERT INTO `student_profile` (`id`, `user_id`, `first_name`, `middle_name`, `last_name`, `family_name`, `date_of_birth`, `first_language`, `country_of_citizenship`, `passport_number`, `marital_status`, `gender`, `address`, `city_town`, `country`, `province_state`, `postal_code`, `phone_number`, `country_of_education`, `highest_level_of_education`, `grading_scheme`, `grade_average`, `graduated_from_most_recent_school`, `country_of_institution`, `name_of_institution`, `level_of_education`, `primary_language_of_instruction`, `attended_institution_from`, `attended_institution_to`, `degree_name`, `graduated_institution`, `graduation_date`, `physical_certificate_for_this_degree`, `school_address`, `school_city_town`, `school_province`, `school_postal_code`, `english_exam_type`, `date_of_exam`, `lisenting`, `reading`, `writing`, `speaking`, `gre_exam_date`, `gre_verbal_score`, `gre_verbal_rank`, `gre_quantitative_score`, `gre_quantitative_rank`, `gre_writing_score`, `gre_writing_rank`, `gmat_gre_exam_date`, `gmat_verbal_score`, `gmat_verbal_rank`, `gmat_quantitative_score`, `gmat_quantitative_rank`, `gmat_writing_score`, `gmat_writing_rank`, `refused_visa`, `study_permit_visa`, `more_background_details`, `three_year_undergraduate_advanced_diploma`, `lead_status`, `referral_source`, `country_intrest`, `services_intrest`, `term_conditions`, `created_at`, `updated_at`) VALUES
(1, 2, 'Shivam', '', 'Singh', NULL, '1987-09-22', NULL, 1, NULL, NULL, 'male', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2022-09-01 14:30:49', '2022-09-01 14:30:49'),
(2, 3, 'Ramesh', '', 'Chandra', NULL, '1991-09-14', NULL, 1, NULL, NULL, 'male', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2022-09-01 16:42:43', '2022-09-01 16:42:43'),
(3, 4, 'Mandy', NULL, 'steeve', 'steeve', '2024-07-01', 'Hindi', 1, 'IND110022536', 'married', 'male', 'zzxcvbn', 12, 1, 3, 885524, '9315507532', 1, '5', 0, 60, NULL, '1', 'ASzdxfcgvhbn', 16, 'asdfghjn', '2024-07-01', '2024-05-01', NULL, '0', '0037-05-06', NULL, 'zSzdxfcgvbnm', 13, 9, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', '3', 'Zxcvbn', NULL, NULL, NULL, NULL, NULL, 1, '2022-09-01 16:47:31', '2022-09-01 16:47:31'),
(4, 5, 'Mona', '', 'Sharma', NULL, '1998-09-30', NULL, 1, NULL, NULL, 'female', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2022-09-01 17:03:30', '2022-09-01 17:03:30'),
(5, 6, 'Devid', '', 'Sharma', NULL, '1998-09-30', NULL, 1, NULL, NULL, 'male', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2022-09-01 17:10:40', '2022-09-01 17:10:40'),
(6, 7, 'Rashid', '', 'khan', NULL, '1998-09-30', NULL, 1, NULL, NULL, 'male', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2022-09-01 17:11:38', '2022-09-01 17:11:38'),
(7, 8, 'mahesh', '', 'rana', NULL, '1998-09-30', NULL, 1, NULL, NULL, 'male', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '3', NULL, NULL, NULL, NULL, NULL, NULL, 1, '2022-09-01 17:14:30', '2022-09-01 17:14:30'),
(8, 9, 'Kaushik', '', 'Rai', NULL, '2001-10-11', NULL, 1, NULL, NULL, 'male', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2', NULL, NULL, NULL, NULL, NULL, NULL, 1, '2022-09-01 17:26:36', '2022-09-01 17:26:36'),
(9, 10, 'Barkha', NULL, 'Sinha', NULL, '2000-09-14', 'hindi', 1, 'IND45622N', 'married', 'female', 'sasaad', 14, 1, 12, 885599, '8855446699', 1, '9', 3, 60, '1', '1', 'xfffsdfsfs', 15, 'sadadada', '2022-10-26', '2022-10-19', 'daaaaasdsad', '1', '2022-10-28', 1, 'asf araaf', 10, 2, 88554466, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', '1', 'dfdsdsfsfdffs', NULL, NULL, NULL, NULL, NULL, 1, '2022-09-01 17:32:00', '2022-09-01 17:32:00'),
(10, 11, 'Sonu', '', 'Rai', NULL, '1994-09-23', NULL, 1, NULL, NULL, 'male', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5', NULL, NULL, NULL, NULL, NULL, NULL, 1, '2022-09-01 17:38:36', '2022-09-01 17:38:36'),
(11, 15, 'Mandyy', 'Mandee', 'Steevi', NULL, '1998-09-15', NULL, 1, NULL, NULL, 'male', NULL, NULL, NULL, NULL, NULL, '8866553344', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '4', NULL, NULL, NULL, NULL, NULL, NULL, 1, '2022-09-01 18:26:08', '2022-09-01 18:26:08'),
(12, 16, 'vinita', 'kumari', 'Sharma', 'sdasdd', '1990-09-28', 'Hindi', 1, 'IND142563289NI', 'single', 'female', 'Mayur Bihar', 5, 1, 15, 110096, '8866889944', 1, '20', 3, 60, '1', '1', 'M.R.University', 20, 'english', '2017-07-01', '2021-06-30', '4-Year Bachelors Degree', '1', '2021-06-30', 1, 'Bathinda', 2, 2, 985642, 1, '2020-09-24', 3, 2, 2, 1, '2021-10-08', 2, '2.5', '3', '4', '2', '2', '2023-04-14', '2', '3', '1', '2', '3', '2', '1', '1', 'If you answered \"Yes\" to any of the questions above, please provide more details below', NULL, NULL, NULL, NULL, NULL, 1, '2022-09-01 23:29:30', '2022-09-01 23:29:30'),
(13, 18, 'First Name', 'Middle Name', 'Last Name', 'Familly Name', '2022-09-21', 'First Language', 1, 'Passport Number', 'single', 'female', 'Address *', 3, 1, 16, 841439, '8855633555', 1, '21', 3, 60, '1', '1', 'Name of Institution *', 21, 'Primary Lang', '2022-09-29', '2022-09-21', 'Degree Name', '1', '2022-09-23', 1, 'Addresjjj', 2, 2, 841439, 4, '2022-09-06', 1, 1, 1, 1, '2022-09-14', 1, '1', '1', '1', '1', '1', '2022-09-07', '1', '1', '1', '1', '1', '1', '1', '2', 'If you answered \"Yes\" to any of the questions above, please provide more details below:', NULL, NULL, NULL, NULL, NULL, 1, '2022-09-05 02:12:23', '2022-09-05 02:12:23'),
(14, 19, 'Alex', 'test3', 'Arnaldow', 'Alex', '2022-09-21', 'English', 1, 'IND1526354C', 'single', 'female', 'Delhi', 4, 1, 9, 885544, '8855663322', 1, '18', 2, 61, '1', '0', '0', NULL, 'English', '2022-11-22', '2022-09-22', 'PHD', '1', '2022-09-20', 1, 'Noida', 2, 2, 201301, NULL, NULL, 3, 4, 5, NULL, NULL, 30, '10', '50', '10', '60', NULL, NULL, '35', '15', '25', '20', '10', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2022-09-05 23:49:53', '2022-09-05 23:49:53'),
(15, 28, 'Ram', 'RAM', 'Ram', NULL, '2022-09-09', 'Hindi', 1, 'IND14253658', 'married', 'male', 'Noida', 2, 1, 16, 110096, '8855669988', 1, '18', 3, 0, '1', '1', '0', 21, 'English', '2022-09-09', '2022-09-23', 'MCA', '1', '2022-09-29', 1, 'Noida', 13, 16, 110096, 4, '2022-09-09', 12, 21, 21, 41, '2022-09-22', 2, '3', '2', '2', '2', '3', '2022-09-15', '5', '1', '1', '1', '3', '8', '1', '2', 'If you answered \"Yes\" to any of the questions above, please provide more details below:', NULL, NULL, NULL, NULL, NULL, 1, '2022-09-08 01:07:50', '2022-09-08 01:07:50'),
(16, 30, 'Niraj', 'kumar', 'singh', NULL, '2022-09-08', 'English', 1, 'rtsad', 'Single', 'Male', 'test', 0, 0, 0, 841439, '8855446699', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 3, '2022-09-09', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-09-09 01:16:29', '2022-09-09 01:16:29'),
(17, 31, 'test', NULL, 'last nAME', 'FAMILYNAME', '2022-09-28', NULL, 1, NULL, NULL, 'male', NULL, NULL, NULL, NULL, NULL, '8855663355', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2022-09-13 23:23:59', '2022-09-13 23:23:59'),
(18, 33, 'rrggdf', 'sdgfg', 'dfgdf', NULL, '2022-09-14', 'fdgfdg', 1, 'dhfghhffffffffhg', 'Single', 'Female', 'fghhfhh', 10, 1, 9, 885545, '7855555555', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-09-14 00:13:44', '2022-09-14 00:13:44'),
(19, 36, '\'\'student\'\'', '\'\'middle name\'\'', '\'\'last  name\'\'', '\'ssdsa\'', '2022-09-23', '\'\'hindi\'\'', 1, '\'\'dddf454224242\'\'', '\'single\'', '\'female\'', '\'\'sadadsddadads\'\'', 9, 1, 13, 884455, '8855663322', 1, '4', 2, 60, '1', '1', '\'dDS\'', 4, '\'ASASADAD\'', '2022-09-14', '2022-09-15', '\'SACVVCXVXV\'', '1', '2022-09-08', 1, '\'DSSFF\'', 6, 5, 885544, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', '6', '\'If you answered \"Yes\" to any of the questions above, please provide more details below:\'', NULL, NULL, NULL, NULL, NULL, NULL, '2022-09-14 00:30:14', '2022-09-14 00:30:14'),
(20, 38, '\'fadasda\'', '\'sdsadd\'', '\'sasad\'', '\'saad\'', '2022-09-17', '\'sadasds\'', 1, '\'saadassaddd\'', '\'single\'', '\'female\'', '\'asdsd\'', 9, 1, 10, 885544, '8855335522', 1, '3', 3, 60, '1', '1', '\'aasdadsa\'', 6, '\'asdas\'', '2022-09-29', '2022-09-22', '\'dsdad\'', '1', '2022-09-14', 1, '\'asssda\'', 2, 2, 112244, 1, NULL, 4, 4, 4, 4, NULL, 1, '1', '1', '1', '1', '1', NULL, '1', '1', '1', '1', '1', '1', '0', '3', '\'asdasdasdsada\'', NULL, NULL, NULL, NULL, NULL, 1, '2022-09-15 00:08:07', '2022-09-15 00:08:07'),
(21, 39, '\'\'Test\'\'', '\'\'\'\'', '\'\'Test2\'\'', '\'\'Test3\'\'', '2022-09-22', '\'\'saddadadadadsdadas\'\'', 1, '\'\'dsfffd458652\'\'', '\'\'', '\'\'', '\'\'dfsdff\'\'', 2, 1, 2, 885544, '8855663322', 1, '5', 3, 58, '1', '1', '\'\'dssdsff\'\'', 6, '\'\'dssffs\'\'', '2022-09-30', '2022-09-21', '\'\'dsfdsfsf\'\'', '1', '2022-09-18', 1, '\'\'dsfsd\'\'', 2, 2, 885544, 1, '2022-09-15', 44, 55, 52, 54, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '4', '\'\'ddffddsffsfs\'\'', NULL, NULL, NULL, NULL, NULL, 1, '2022-09-25 23:55:50', '2022-09-25 23:55:50'),
(22, 48, 'Rekha', NULL, 'sahni', '', NULL, NULL, 1, NULL, NULL, 'female', NULL, NULL, 1, NULL, NULL, '9810944806', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-11-09 05:20:13', '2022-11-09 05:20:13'),
(23, 51, 'karans', NULL, 'singh', 'garcha', '0000-00-00', NULL, 1, NULL, NULL, 'male', NULL, NULL, 1, NULL, NULL, '8968288460', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2022-12-20 23:38:37', '2022-12-20 23:38:37'),
(24, 52, 'Mahendra', 'Kumar', 'Sahni', 'Sahni', '1990-01-04', 'English', 1, 'bagps0737M', 'married', 'male', '1st Floor, 331B, C4B Block, JANAKPURI', 61, 1, 16, 110058, '9818113799', 1, '14', 1, 75, NULL, '1', 'PK Roy Memorial', 17, 'Math', '1999-01-01', '2001-12-31', 'B.Sc Math', '1', '2002-01-30', 1, 'delhi cant carmel school', 2, 2, 110020, 1, NULL, NULL, NULL, NULL, NULL, '2018-01-01', 40, NULL, '60', NULL, '80', NULL, '2020-01-01', '40', NULL, '50', NULL, '80', NULL, '0', '1', 'not available', NULL, NULL, NULL, NULL, NULL, 1, '2022-12-26 15:08:08', '2022-12-26 15:08:08'),
(25, 53, 'Harkaran', NULL, 'Singh', 'Garcha', '0000-00-00', NULL, 1, NULL, NULL, 'male', NULL, NULL, 1, NULL, NULL, '8968288460', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2022-12-27 22:25:54', '2022-12-27 22:25:54'),
(26, 54, 'Mandy', NULL, 'steeve', 'steeve', '1990-04-01', 'English', 1, 'bagps0737M4zu', 'single', 'male', '331 B, C4B Block, Janakpuri, New Delhi', 3, 1, 16, 110058, '9315507532', 1, '18', 1, 70, '1', '1', 'PK Roy Memorial', 18, 'Math', '2005-03-03', '2008-12-12', 'B.SC Math', '1', '1997-01-06', NULL, 'Indian School Of Learning', 21, 16, 110058, 1, '0000-00-00', NULL, NULL, NULL, NULL, '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2022-12-27 23:46:04', '2022-12-27 23:46:04'),
(27, 55, 'karan', NULL, NULL, NULL, '1990-11-01', 'english', 1, '12hkkk', 'Single', 'Male', 'Garcha', 16, 1, 16, 144518, '8968288460', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-06 23:31:55', '2023-01-06 23:31:55'),
(28, 56, 'Santoshi', 'san', 'garcha', 'k', '0016-01-02', 'Punjabi', 1, 'A2344668jo998', 'single', 'female', '1469, sctor 59, Sahibzada Ajit Singh Nagar, Punjab, India', 3, 1, 16, 11096, '9769903168', 1, '18', 2, 8, NULL, '1', 'KC college of engineering & IT', 18, 'Punjabi', '2024-05-07', '0007-11-06', 'BTech CSE', '1', '0008-04-07', 1, 'KC Group of Institutions Karyam Road Nawanshahr Punjab (India)', 2, 2, 144514, 1, '2023-01-18', 1, 4, 5, 5, '2023-01-11', NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-11', NULL, NULL, NULL, NULL, NULL, NULL, '0', '1', NULL, NULL, NULL, NULL, NULL, NULL, 1, '2023-01-16 12:18:01', '2023-01-16 12:18:01'),
(29, 57, 'Harkaran', 'har', 'Singh', 'Garcha', '1990-08-01', 'Hindi', 1, 'IND110022536', 'single', 'male', 'Noida', 2, 1, 15, 885566, '8967388249', 1, '3', 2, 60, '1', '1', 'dsf', 7, 'xdssfs', '2012-03-07', '2016-03-02', 'b.tech', '1', '2016-06-16', 1, 'dsf', 2, 2, 155789, 1, '2023-03-10', 8, 8, 8, 9, '2023-01-05', 89, '78', '89', '78', '78', '88', '2023-01-13', '89', '99', '78', '88', '78', '88', '0', '1', 'test detils', NULL, NULL, NULL, NULL, NULL, 1, '2023-01-17 00:10:16', '2023-01-17 00:10:16'),
(30, 58, 'Harsh', NULL, 'Sahni', 'Sahni', '1990-01-01', 'ASDFGHJ', 1, 'IND110022536', 'married', 'male', 'SDFGHB', 2, 1, 3, 884455, '9599618649', 1, '4', 1, 0, NULL, '1', 'DDSFF', 3, 'DSEWERW', '2017-01-04', '2021-03-03', 'RERT', '0', '2023-01-29', NULL, 'AWQW', 2, 2, NULL, 1, '2023-01-06', 2, 2, 2, 2, '2022-12-28', 5, '5', '5', '5', '5', '5', '2022-12-26', '5', '5', '5', '5', '5', '5', '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2023-01-17 01:19:14', '2023-01-17 01:19:14'),
(31, 59, 'Mahendra', NULL, 'kumar', 'Sahni', '1980-03-03', 'English', 1, 'bagps0737M4zu', 'single', 'male', '2nd floor, 331B, C4B Block, Janakpuri', 3, 1, 16, 110056, '9015754566', 1, '17', 2, 10, '1', '1', 'PK Roy Memorial', 17, 'English', '2014-05-05', '2017-01-05', 'B.Sc Math', '1', '2017-08-31', 1, 'lado sarai school', 2, 2, 110045, 1, NULL, NULL, NULL, NULL, NULL, '2022-07-19', 8, '45', '8', '22', '7', '56', '2022-02-18', '4', NULL, '8', NULL, '9', NULL, '1', '3', NULL, NULL, NULL, NULL, NULL, NULL, 1, '2023-01-17 02:43:07', '2023-01-17 02:43:07'),
(32, 60, 'mandy', NULL, 'sahni', 'sahni', '1979-01-04', 'English', 1, 'bagps0737M4zu', 'single', 'male', '331B, c4b block, Janakpri new delhi', 3, 1, 16, 110058, '9315507532', 1, '13', 0, 75, NULL, '1', 'Indian school of learning', 0, 'English', '1988-01-01', '2023-01-18', 'matric', '0', '1995-01-17', NULL, 'School Adress for Mandy', 2, 2, 110020, 3, '2023-01-18', 1, 11, 1, 1, '2023-01-11', 1, '1', '1', '1', '1', '1', '2023-01-17', '1', '1', '1', '1', '1', '1', '0', '5', 'HI this it test message ... kkjkj', NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-17 14:02:38', '2023-01-17 14:02:38'),
(33, 61, 'karantest', 'test', 'garcha', NULL, '2023-01-11', 'hg', 1, 'gfgfgfdg', 'single', 'male', 'gfdgfd', 2, 1, NULL, 54545, '9877839495', 1, '18', 1, 67, '1', '1', 'vxc', 12, 'gfg', '2023-01-03', '2023-01-02', NULL, '0', '2023-01-26', NULL, 'iyi', 2, 2, NULL, 1, '2023-01-20', 8, 8, 8, 8, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2023-01-23 22:53:39', '2023-01-23 22:53:39'),
(34, 63, 'karan', NULL, 'test', NULL, '1990-01-01', 'Hindi', 1, 'PB324513', 'married', 'male', 'VPO', 3, 1, 16, 156609, '8978234566', 1, '18', 1, 78, '1', '1', 'PTU', 18, 'English', '2018-01-01', '2022-01-12', NULL, '0', '2022-01-05', 1, 'Mohali', 2, 2, 144518, 1, '2023-01-04', NULL, NULL, NULL, NULL, '2023-01-05', 8, '65', '7', '87', '5', '98', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '2', 'No', NULL, NULL, NULL, NULL, NULL, 1, '2023-01-24 22:57:40', '2023-01-24 22:57:40'),
(35, 64, 'jaskaran', 'rere', 'garcha', NULL, '2023-01-03', 'hindi', 1, 'dsffdsf', 'single', 'male', 'Garcha', 3, 1, 16, 144578, '1234567900', 1, '18', 2, 89, '1', '1', 'PTU', 18, 'english', '2023-01-01', '2023-01-20', NULL, '1', '2023-01-24', 1, 'Addreas', 2, 2, 45465767, 1, '2023-01-12', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', '1', 'yyes', NULL, NULL, NULL, NULL, NULL, 1, '2023-01-26 23:01:18', '2023-01-26 23:01:18'),
(36, 65, 'kitan', NULL, 'singh', 'garcha', '2022-01-20', NULL, 1, NULL, NULL, 'male', NULL, NULL, NULL, NULL, NULL, '8976543216', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2023-01-27 20:13:47', '2023-01-27 20:13:47'),
(37, 66, 'tester', NULL, 'singh', 'singh', '1990-01-01', NULL, 1, NULL, NULL, 'male', NULL, NULL, NULL, NULL, NULL, '8976345671', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2023-01-27 21:32:05', '2023-01-27 21:32:05'),
(38, 67, 'tester', 'fgfgf', 'singh', NULL, '1990-01-01', 'hibdiy', 1, 'gfgf', 'single', 'male', 'gfgfgf', 14, 1, 3, 545454547, '8976345671', 1, '18', 2, 78, NULL, '1', 'gfgf', 18, 'ggfgfd', '2023-01-03', '2023-01-19', 'fdfdf', '0', '2023-01-10', 1, 'vcvc', 19, 20, 45454, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2023-01-27 21:32:05', '2023-01-27 21:32:05'),
(39, 68, 'test5', NULL, 'test5', 'test5', '2023-01-25', NULL, 1, NULL, NULL, 'male', NULL, NULL, NULL, NULL, NULL, '9999999999', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2023-01-27 22:56:58', '2023-01-27 22:56:58'),
(40, 69, 'yum', NULL, 'singh', NULL, '1990-01-01', 'Hindi', 1, 'IND110022536', 'single', 'male', 'Noida', 3, 1, 3, 201301, '6543219875', 1, '14', 2, 60, '1', '1', 'xzczx', 11, 'xxxzx', '2023-01-11', '2023-01-18', 'zddsad', '0', NULL, NULL, 'cdfsfd', 14, 14, 885544, 4, '2023-01-31', 5, 5, 5, 5, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5', 'saddfghjb,kzcxvcbnm', NULL, NULL, NULL, NULL, NULL, 1, '2023-01-28 00:58:37', '2023-01-28 00:58:37'),
(41, 70, 'trt', NULL, NULL, NULL, '2023-01-01', 'hintyt', 1, 'hgjhgh', 'Single', 'Female', 'gjgjy', 18, 1, 9, 67678, '7686867676', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-28 01:42:13', '2023-01-28 01:42:13'),
(42, 71, 'yum', NULL, 'singh', NULL, '2003-11-01', 'Hindi', 1, 'uyuyuyu', 'married', 'male', 'garcha', 14, 1, 2, 767676, '8968288678', 1, '18', 2, 89, '1', '0', NULL, 0, NULL, NULL, NULL, NULL, '0', NULL, NULL, NULL, 2, 2, NULL, 4, '2023-01-03', 5, 5, 5, 5, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2023-01-31 22:29:49', '2023-01-31 22:29:49'),
(43, 72, 'Bunty', NULL, 'singh', NULL, '2003-02-12', 'hindi', 1, 'yuyuyu', 'single', 'male', 'hhh', 3, 1, 3, 678905, '8976543216', 1, '13', 2, 78, '1', '0', 'iitt', 13, NULL, '2023-02-14', '2023-02-09', NULL, '0', NULL, NULL, NULL, 2, 2, NULL, 4, '2023-02-01', 2, 2, 2, 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', 'ui', NULL, NULL, NULL, NULL, NULL, 1, '2023-02-02 20:28:36', '2023-02-02 20:28:36');

-- --------------------------------------------------------

--
-- Table structure for table `student_records`
--

CREATE TABLE `student_records` (
  `id` int(11) NOT NULL,
  `title` varchar(50) DEFAULT NULL,
  `text` text DEFAULT NULL,
  `agent_id` int(11) DEFAULT 0,
  `student_id` int(11) DEFAULT NULL,
  `app_id` int(11) DEFAULT NULL,
  `is_view` int(11) NOT NULL DEFAULT 0,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student_records`
--

INSERT INTO `student_records` (`id`, `title`, `text`, `agent_id`, `student_id`, `app_id`, `is_view`, `created_at`, `updated_at`) VALUES
(1, '10th certificate  uploaded', '10th certificate   uploaded successfully ', 0, 17, 78429398, 0, '2022-10-06 00:50:14', '2022-10-06 00:50:14'),
(2, '12th certificate  uploaded', '12th certificate   uploaded successfully ', 0, 17, 78429398, 0, '2022-10-06 00:50:23', '2022-10-06 00:50:23'),
(3, 'Graduation certificate uploaded', 'Graduation certificate  uploaded successfully ', 0, 17, 78429398, 0, '2022-10-10 02:32:38', '2022-10-10 02:32:38'),
(4, 'Post graduation certificate  uploaded', 'Post graduation certificate   uploaded successfully ', 0, 17, 78429398, 0, '2022-10-10 02:32:43', '2022-10-10 02:32:43'),
(5, 'Graduation transcript  uploaded', 'Graduation transcript   uploaded successfully ', 0, 17, 78429398, 0, '2022-10-10 02:32:49', '2022-10-10 02:32:49'),
(6, 'Post graduation transcript  uploaded', 'Post graduation transcript   uploaded successfully ', 0, 17, 78429398, 0, '2022-10-10 02:32:56', '2022-10-10 02:32:56'),
(7, '10th certificate updated', '10th certificate  updated successfully ', 0, 17, 78429398, 0, '2022-10-10 02:33:32', '2022-10-10 02:33:32'),
(8, 'Profile Updated', 'Profile Updated', 0, 39, 0, 0, '2022-10-12 00:56:21', '2022-10-12 00:56:21'),
(9, 'Program Apply', 'Program apply by ', 1, 28, 60896568, 0, '2022-10-12 01:33:37', '2022-10-12 01:33:37'),
(10, 'Program Apply', 'Program apply by ', 1, 28, 21303563, 0, '2022-10-12 01:33:48', '2022-10-12 01:33:48'),
(11, 'Program Apply', 'Program apply by ', 1, 28, 93211678, 0, '2022-10-12 01:34:06', '2022-10-12 01:34:06'),
(12, 'Program Apply', 'Program apply by ', 1, 28, 64068641, 0, '2022-10-12 01:46:38', '2022-10-12 01:46:38'),
(13, 'Program Apply', 'Program apply by ', 1, 28, 56283487, 0, '2022-10-12 01:47:24', '2022-10-12 01:47:24'),
(14, 'Program Apply', 'Program apply by ', 1, 28, 60649174, 0, '2022-10-16 22:06:46', '2022-10-16 22:06:46'),
(15, 'Experience certificate  uploaded', 'Experience certificate   uploaded successfully ', 0, 17, 78429398, 0, '2022-10-16 22:26:55', '2022-10-16 22:26:55'),
(16, 'Consent form uploaded', 'Consent form  uploaded successfully ', 0, 17, 78429398, 0, '2022-10-16 23:06:57', '2022-10-16 23:06:57'),
(17, 'Additional certificate uploaded', 'Additional certificate  uploaded successfully ', 0, 17, 78429398, 0, '2022-10-16 23:08:31', '2022-10-16 23:08:31'),
(18, 'Profile Updated', 'Profile Updated', 0, 10, 0, 0, '2022-10-20 01:28:59', '2022-10-20 01:28:59'),
(19, 'Program Apply', 'Program apply by ', 1, 15, 37635391, 0, '2022-10-20 01:45:41', '2022-10-20 01:45:41'),
(20, 'Program Apply', 'Program apply by ', 1, 15, 33377136, 0, '2022-10-20 01:46:04', '2022-10-20 01:46:04'),
(21, 'Program Apply', 'Program apply by ', 1, 28, 69505131, 0, '2022-10-21 22:50:31', '2022-10-21 22:50:31'),
(22, 'Graduation transcript  uploaded', 'Graduation transcript   uploaded successfully ', 0, 2, 53896579, 0, '2022-10-21 23:57:48', '2022-10-21 23:57:48'),
(23, 'Graduation transcript updated', 'Graduation transcript  updated successfully ', 0, 2, 53896579, 0, '2022-10-21 23:58:31', '2022-10-21 23:58:31'),
(24, 'Graduation transcript updated', 'Graduation transcript  updated successfully ', 0, 2, 53896579, 0, '2022-10-22 00:00:20', '2022-10-22 00:00:20'),
(25, 'Post graduation certificate  uploaded', 'Post graduation certificate   uploaded successfully ', 0, 2, 69505131, 0, '2022-10-22 00:17:04', '2022-10-22 00:17:04'),
(26, 'Post graduation certificate  uploaded', 'Post graduation certificate   uploaded successfully ', 0, 2, 60896568, 0, '2022-10-31 22:45:04', '2022-10-31 22:45:04'),
(27, 'Student Registration', 'Student Register Successfully by Agent', 1, 48, NULL, 0, '2022-11-09 05:20:13', '2022-11-09 05:20:13'),
(28, 'Graduation transcript  uploaded', 'Graduation transcript   uploaded successfully ', 0, 2, 69505131, 0, '2022-11-12 18:05:38', '2022-11-12 18:05:38'),
(29, 'Post graduation certificate updated', 'Post graduation certificate  updated successfully ', 0, 2, 69505131, 0, '2022-11-14 10:41:30', '2022-11-14 10:41:30'),
(30, 'Document Approved', 'Document Approved by Admin (4)', 49, 0, 69505131, 0, '2022-11-15 02:36:40', '2022-11-15 02:36:40'),
(31, 'Document Approved', 'Document Approved by Admin (5)', 49, 0, 69505131, 0, '2022-11-15 22:16:21', '2022-11-15 22:16:21'),
(32, 'Document Disapproved', 'Document Disapproved by Admin (5)', 49, 0, 69505131, 0, '2022-11-15 22:18:42', '2022-11-15 22:18:42'),
(33, 'Document Approved', 'Document Approved by Admin (5)', 49, 0, 69505131, 0, '2022-11-15 22:19:55', '2022-11-15 22:19:55'),
(34, 'Document Disapproved', 'Document Disapproved by Admin (4)', 1, 0, 69505131, 0, '2022-11-16 14:18:00', '2022-11-16 14:18:00'),
(35, 'Document Approved', 'Document Approved by Admin (4)', 1, 0, 69505131, 0, '2022-11-16 14:18:39', '2022-11-16 14:18:39'),
(36, 'Document Disapproved', 'Document Disapproved by Admin (4)', 1, 0, 69505131, 0, '2022-11-16 14:19:01', '2022-11-16 14:19:01'),
(37, 'Document Approved', 'Document Approved by Admin (4)', 1, 0, 69505131, 0, '2022-11-16 14:55:15', '2022-11-16 14:55:15'),
(38, 'Document Disapproved', 'Document Disapproved by Admin (4)', 1, 0, 69505131, 0, '2022-11-16 14:55:18', '2022-11-16 14:55:18'),
(39, 'Post graduation certificate updated', 'Post graduation certificate  updated successfully ', 0, 2, 69505131, 0, '2022-11-16 16:08:10', '2022-11-16 16:08:10'),
(40, 'Post graduation certificate updated', 'Post graduation certificate  updated successfully ', 0, 2, 69505131, 0, '2022-11-16 16:08:17', '2022-11-16 16:08:17'),
(41, 'Post graduation certificate updated', 'Post graduation certificate  updated successfully ', 0, 2, 69505131, 0, '2022-11-16 16:09:06', '2022-11-16 16:09:06'),
(42, 'Graduation transcript updated', 'Graduation transcript  updated successfully ', 0, 2, 69505131, 0, '2022-11-16 16:10:03', '2022-11-16 16:10:03'),
(43, 'Document Approved', 'Document Approved by Admin (4)', 1, 0, 69505131, 0, '2022-11-16 16:12:03', '2022-11-16 16:12:03'),
(44, 'Document Disapproved', 'Document Disapproved by Admin (4)', 1, 0, 69505131, 0, '2022-11-16 16:12:17', '2022-11-16 16:12:17'),
(45, 'Document Approved', 'Document Approved by Admin (4)', 1, 0, 69505131, 0, '2022-11-16 16:21:19', '2022-11-16 16:21:19'),
(46, 'Document Disapproved', 'Document Disapproved by Admin (4)', 1, 0, 69505131, 0, '2022-11-16 16:21:28', '2022-11-16 16:21:28'),
(47, 'Document Approved', 'Document Approved by Admin (4)', 1, 0, 69505131, 0, '2022-11-16 16:21:38', '2022-11-16 16:21:38'),
(48, 'Document Disapproved', 'Document Disapproved by Admin (4)', 1, 0, 69505131, 0, '2022-11-16 16:22:13', '2022-11-16 16:22:13'),
(49, 'Document Approved', 'Document Approved by Admin (4)', 1, 0, 69505131, 0, '2022-11-16 16:22:14', '2022-11-16 16:22:14'),
(50, 'Document Disapproved', 'Document Disapproved by Admin (4)', 1, 0, 69505131, 0, '2022-11-16 16:22:31', '2022-11-16 16:22:31'),
(51, 'Document Approved', 'Document Approved by Admin (4)', 1, 0, 69505131, 0, '2022-11-16 16:31:45', '2022-11-16 16:31:45'),
(52, 'Document Disapproved', 'Document Disapproved by Admin (4)', 1, 0, 69505131, 0, '2022-11-16 16:31:46', '2022-11-16 16:31:46'),
(53, 'Document Approved', 'Document Approved by Admin (4)', 1, 0, 69505131, 0, '2022-11-16 16:39:11', '2022-11-16 16:39:11'),
(54, 'Document Disapproved', 'Document Disapproved by Admin (4)', 1, 0, 69505131, 0, '2022-11-16 16:39:12', '2022-11-16 16:39:12'),
(55, 'Document Approved', 'Document Approved by Admin (4)', 1, 0, 69505131, 0, '2022-11-16 16:39:16', '2022-11-16 16:39:16'),
(56, 'Document Approved', 'Document Approved by Admin (4)', 1, 0, 69505131, 0, '2022-11-16 16:39:23', '2022-11-16 16:39:23'),
(57, 'Document Disapproved', 'Document Disapproved by Admin (4)', 1, 0, 69505131, 0, '2022-11-16 16:39:25', '2022-11-16 16:39:25'),
(58, 'Document Approved', 'Document Approved by Admin (4)', 1, 0, 69505131, 0, '2022-11-16 16:40:54', '2022-11-16 16:40:54'),
(59, 'Document Disapproved', 'Document Disapproved by Admin (4)', 1, 0, 69505131, 0, '2022-11-16 16:40:57', '2022-11-16 16:40:57'),
(60, 'Document Approved', 'Document Approved by Admin (4)', 1, 0, 69505131, 0, '2022-11-16 16:45:44', '2022-11-16 16:45:44'),
(61, 'Document Disapproved', 'Document Disapproved by Admin (4)', 1, 0, 69505131, 0, '2022-11-16 16:45:45', '2022-11-16 16:45:45'),
(62, 'Document Approved', 'Document Approved by Admin (4)', 1, 0, 69505131, 0, '2022-11-16 16:47:38', '2022-11-16 16:47:38'),
(63, 'Document Disapproved', 'Document Disapproved by Admin (4)', 1, 0, 69505131, 0, '2022-11-16 16:47:41', '2022-11-16 16:47:41'),
(64, 'Document Approved', 'Document Approved by Admin (4)', 1, 0, 69505131, 0, '2022-11-16 16:47:42', '2022-11-16 16:47:42'),
(65, 'Document Disapproved', 'Document Disapproved by Admin (4)', 1, 0, 69505131, 0, '2022-11-16 16:47:44', '2022-11-16 16:47:44'),
(66, 'Document Approved', 'Document Approved by Admin (4)', 1, 0, 69505131, 0, '2022-11-16 16:48:45', '2022-11-16 16:48:45'),
(67, 'Document Disapproved', 'Document Disapproved by Admin (4)', 1, 0, 69505131, 0, '2022-11-16 16:48:48', '2022-11-16 16:48:48'),
(68, 'Document Approved', 'Document Approved by Admin (4)', 1, 0, 69505131, 0, '2022-11-16 16:48:49', '2022-11-16 16:48:49'),
(69, 'Document Disapproved', 'Document Disapproved by Admin (4)', 1, 0, 69505131, 0, '2022-11-16 16:54:50', '2022-11-16 16:54:50'),
(70, 'Document Approved', 'Document Approved by Admin (4)', 1, 0, 69505131, 0, '2022-11-16 16:54:52', '2022-11-16 16:54:52'),
(71, 'Document Disapproved', 'Document Disapproved by Admin (4)', 1, 0, 69505131, 0, '2022-11-16 16:54:56', '2022-11-16 16:54:56'),
(72, 'Document Approved', 'Document Approved by Admin (4)', 1, 0, 69505131, 0, '2022-11-16 16:55:59', '2022-11-16 16:55:59'),
(73, 'Document Disapproved', 'Document Disapproved by Admin (4)', 1, 0, 69505131, 0, '2022-11-16 16:56:01', '2022-11-16 16:56:01'),
(74, 'Document Approved', 'Document Approved by Admin (4)', 1, 0, 69505131, 0, '2022-11-16 16:59:48', '2022-11-16 16:59:48'),
(75, 'Document Disapproved', 'Document Disapproved by Admin (4)', 1, 0, 69505131, 0, '2022-11-16 16:59:50', '2022-11-16 16:59:50'),
(76, 'Document Approved', 'Document Approved by Admin (4)', 1, 0, 69505131, 0, '2022-11-16 16:59:51', '2022-11-16 16:59:51'),
(77, 'Document Approved', 'Document Approved by Admin (4)', 1, 0, 69505131, 0, '2022-11-16 16:59:59', '2022-11-16 16:59:59'),
(78, 'Document Disapproved', 'Document Disapproved by Admin (4)', 1, 0, 69505131, 0, '2022-11-16 17:03:24', '2022-11-16 17:03:24'),
(79, 'Document Approved', 'Document Approved by Admin (4)', 1, 0, 69505131, 0, '2022-11-16 17:04:14', '2022-11-16 17:04:14'),
(80, 'Document Disapproved', 'Document Disapproved by Admin (4)', 1, 0, 69505131, 0, '2022-11-16 17:04:15', '2022-11-16 17:04:15'),
(81, 'Document Approved', 'Document Approved by Admin (4)', 1, 0, 69505131, 0, '2022-11-16 17:08:13', '2022-11-16 17:08:13'),
(82, 'Document Disapproved', 'Document Disapproved by Admin (4)', 1, 0, 69505131, 0, '2022-11-16 17:08:46', '2022-11-16 17:08:46'),
(83, 'Document Approved', 'Document Approved by Admin (4)', 1, 0, 69505131, 0, '2022-11-16 17:10:44', '2022-11-16 17:10:44'),
(84, 'Document Disapproved', 'Document Disapproved by Admin (4)', 1, 0, 69505131, 0, '2022-11-16 17:11:05', '2022-11-16 17:11:05'),
(85, 'Document Approved', 'Document Approved by Admin (4)', 1, 0, 69505131, 0, '2022-11-16 17:12:46', '2022-11-16 17:12:46'),
(86, 'Document Disapproved', 'Document Disapproved by Admin (4)', 1, 0, 69505131, 0, '2022-11-16 17:12:49', '2022-11-16 17:12:49'),
(87, 'Document Approved', 'Document Approved by Admin (4)', 1, 0, 69505131, 0, '2022-11-16 17:16:22', '2022-11-16 17:16:22'),
(88, 'Document Disapproved', 'Document Disapproved by Admin (4)', 1, 0, 69505131, 0, '2022-11-16 17:16:24', '2022-11-16 17:16:24'),
(89, 'Document Approved', 'Document Approved by Admin (4)', 1, 0, 69505131, 0, '2022-11-16 17:16:25', '2022-11-16 17:16:25'),
(90, 'Document Disapproved', 'Document Disapproved by Admin (4)', 1, 0, 69505131, 0, '2022-11-16 17:16:31', '2022-11-16 17:16:31'),
(91, 'Document Disapproved', 'Document Disapproved by Admin (4)', 1, 0, 69505131, 0, '2022-11-16 17:16:35', '2022-11-16 17:16:35'),
(92, 'Document Approved', 'Document Approved by Admin (4)', 1, 0, 69505131, 0, '2022-11-16 17:16:36', '2022-11-16 17:16:36'),
(93, 'Document Disapproved', 'Document Disapproved by Admin (4)', 1, 0, 69505131, 0, '2022-11-16 17:16:39', '2022-11-16 17:16:39'),
(94, 'Document Approved', 'Document Approved by Admin (4)', 1, 0, 69505131, 0, '2022-11-16 17:16:42', '2022-11-16 17:16:42'),
(95, 'Document Approved', 'Document Approved by Admin (4)', 1, 0, 69505131, 0, '2022-11-16 17:16:45', '2022-11-16 17:16:45'),
(96, 'Document Disapproved', 'Document Disapproved by Admin (4)', 1, 0, 69505131, 0, '2022-11-16 17:16:47', '2022-11-16 17:16:47'),
(97, 'Document Approved', 'Document Approved by Admin (4)', 1, 0, 69505131, 0, '2022-11-16 17:17:18', '2022-11-16 17:17:18'),
(98, 'Document Disapproved', 'Document Disapproved by Admin (4)', 1, 0, 69505131, 0, '2022-11-16 17:17:23', '2022-11-16 17:17:23'),
(99, 'Document Approved', 'Document Approved by Admin (4)', 1, 0, 69505131, 0, '2022-11-16 17:19:42', '2022-11-16 17:19:42'),
(100, 'Document Disapproved', 'Document Disapproved by Admin (4)', 1, 0, 69505131, 0, '2022-11-16 17:19:56', '2022-11-16 17:19:56'),
(101, 'Document Approved', 'Document Approved by Admin (4)', 1, 0, 69505131, 0, '2022-11-16 17:27:02', '2022-11-16 17:27:02'),
(102, 'Document Disapproved', 'Document Disapproved by Admin (4)', 1, 0, 69505131, 0, '2022-11-16 17:27:04', '2022-11-16 17:27:04'),
(103, 'Document Approved', 'Document Approved by Admin (4)', 1, 0, 69505131, 0, '2022-11-16 17:27:12', '2022-11-16 17:27:12'),
(104, 'Document Disapproved', 'Document Disapproved by Admin (4)', 1, 0, 69505131, 0, '2022-11-16 17:27:13', '2022-11-16 17:27:13'),
(105, 'Document Approved', 'Document Approved by Admin (4)', 1, 0, 69505131, 0, '2022-11-16 17:28:38', '2022-11-16 17:28:38'),
(106, 'Document Disapproved', 'Document Disapproved by Admin (4)', 1, 0, 69505131, 0, '2022-11-16 17:28:47', '2022-11-16 17:28:47'),
(107, 'Document Disapproved', 'Document Disapproved by Admin (4)', 1, 0, 69505131, 0, '2022-11-16 17:33:01', '2022-11-16 17:33:01'),
(108, 'Document Approved', 'Document Approved by Admin (4)', 1, 0, 69505131, 0, '2022-11-16 17:33:02', '2022-11-16 17:33:02'),
(109, 'Document Disapproved', 'Document Disapproved by Admin (4)', 1, 0, 69505131, 0, '2022-11-16 17:33:04', '2022-11-16 17:33:04'),
(110, 'Document Approved', 'Document Approved by Admin (4)', 1, 0, 69505131, 0, '2022-11-16 17:35:40', '2022-11-16 17:35:40'),
(111, 'Document Disapproved', 'Document Disapproved by Admin (4)', 1, 0, 69505131, 0, '2022-11-16 17:38:36', '2022-11-16 17:38:36'),
(112, 'Document Approved', 'Document Approved by Admin (4)', 1, 0, 69505131, 0, '2022-11-16 17:38:37', '2022-11-16 17:38:37'),
(113, 'Document Disapproved', 'Document Disapproved by Admin (4)', 1, 0, 69505131, 0, '2022-11-16 17:38:43', '2022-11-16 17:38:43'),
(114, 'Document Disapproved', 'Document Disapproved by Admin (4)', 1, 0, 69505131, 0, '2022-11-16 17:41:23', '2022-11-16 17:41:23'),
(115, 'Document Approved', 'Document Approved by Admin (4)', 1, 0, 69505131, 0, '2022-11-16 17:41:25', '2022-11-16 17:41:25'),
(116, 'Document Disapproved', 'Document Disapproved by Admin (4)', 1, 0, 69505131, 0, '2022-11-16 17:41:37', '2022-11-16 17:41:37'),
(117, 'Document Approved', 'Document Approved by Admin (4)', 1, 0, 69505131, 0, '2022-11-16 17:42:01', '2022-11-16 17:42:01'),
(118, 'Document Disapproved', 'Document Disapproved by Admin (4)', 1, 0, 69505131, 0, '2022-11-16 17:42:25', '2022-11-16 17:42:25'),
(119, 'Document Approved', 'Document Approved by Admin (4)', 1, 0, 69505131, 0, '2022-11-16 17:42:48', '2022-11-16 17:42:48'),
(120, 'Document Disapproved', 'Document Disapproved by Admin (4)', 1, 0, 69505131, 0, '2022-11-16 17:42:52', '2022-11-16 17:42:52'),
(121, 'Document Approved', 'Document Approved by Admin (4)', 1, 0, 69505131, 0, '2022-11-16 17:42:54', '2022-11-16 17:42:54'),
(122, 'Document Disapproved', 'Document Disapproved by Admin (4)', 1, 0, 69505131, 0, '2022-11-16 17:42:55', '2022-11-16 17:42:55'),
(123, 'Document Approved', 'Document Approved by Admin (4)', 1, 0, 69505131, 0, '2022-11-16 17:49:07', '2022-11-16 17:49:07'),
(124, 'Document Disapproved', 'Document Disapproved by Admin (4)', 1, 0, 69505131, 0, '2022-11-16 17:49:21', '2022-11-16 17:49:21'),
(125, 'Document Approved', 'Document Approved by Admin (4)', 1, 0, 69505131, 0, '2022-11-16 17:51:11', '2022-11-16 17:51:11'),
(126, 'Document Disapproved', 'Document Disapproved by Admin (4)', 1, 0, 69505131, 0, '2022-11-16 17:52:18', '2022-11-16 17:52:18'),
(127, 'Document Approved', 'Document Approved by Admin (4)', 1, 0, 69505131, 0, '2022-11-16 17:52:19', '2022-11-16 17:52:19'),
(128, 'Document Disapproved', 'Document Disapproved by Admin (4)', 1, 0, 69505131, 0, '2022-11-16 17:52:22', '2022-11-16 17:52:22'),
(129, 'Document Approved', 'Document Approved by Admin (4)', 1, 0, 69505131, 0, '2022-11-16 17:52:30', '2022-11-16 17:52:30'),
(130, 'Document Disapproved', 'Document Disapproved by Admin (4)', 1, 0, 69505131, 0, '2022-11-16 17:52:42', '2022-11-16 17:52:42'),
(131, 'Document Approved', 'Document Approved by Admin (4)', 1, 0, 69505131, 0, '2022-11-16 17:55:50', '2022-11-16 17:55:50'),
(132, 'Document Disapproved', 'Document Disapproved by Admin (4)', 1, 0, 69505131, 0, '2022-11-16 17:55:52', '2022-11-16 17:55:52'),
(133, 'Document Approved', 'Document Approved by Admin (4)', 1, 0, 69505131, 0, '2022-11-16 17:56:07', '2022-11-16 17:56:07'),
(134, 'Document Disapproved', 'Document Disapproved by Admin (4)', 1, 0, 69505131, 0, '2022-11-16 17:56:10', '2022-11-16 17:56:10'),
(135, 'Document Approved', 'Document Approved by Admin (4)', 1, 0, 69505131, 0, '2022-11-16 17:56:11', '2022-11-16 17:56:11'),
(136, 'Document Disapproved', 'Document Disapproved by Admin (4)', 1, 0, 69505131, 0, '2022-11-16 17:56:22', '2022-11-16 17:56:22'),
(137, 'Document Approved', 'Document Approved by Admin (4)', 1, 0, 69505131, 0, '2022-11-16 17:56:29', '2022-11-16 17:56:29'),
(138, 'Document Disapproved', 'Document Disapproved by Admin (4)', 1, 0, 69505131, 0, '2022-11-16 17:56:32', '2022-11-16 17:56:32'),
(139, 'Document Approved', 'Document Approved by Admin (4)', 1, 0, 69505131, 0, '2022-11-16 17:57:10', '2022-11-16 17:57:10'),
(140, 'Document Disapproved', 'Document Disapproved by Admin (4)', 1, 0, 69505131, 0, '2022-11-16 17:57:13', '2022-11-16 17:57:13'),
(141, 'Document Approved', 'Document Approved by Admin (4)', 1, 0, 69505131, 0, '2022-11-16 17:57:14', '2022-11-16 17:57:14'),
(142, 'Document Disapproved', 'Document Disapproved by Admin (4)', 1, 0, 69505131, 0, '2022-11-16 17:57:15', '2022-11-16 17:57:15'),
(143, 'Document Approved', 'Document Approved by Admin (4)', 1, 0, 69505131, 0, '2022-11-16 17:57:27', '2022-11-16 17:57:27'),
(144, 'Document Disapproved', 'Document Disapproved by Admin (4)', 1, 0, 69505131, 0, '2022-11-16 17:57:52', '2022-11-16 17:57:52'),
(145, 'Document Disapproved', 'Document Disapproved by Admin (4)', 1, 0, 69505131, 0, '2022-11-16 17:57:54', '2022-11-16 17:57:54'),
(146, 'Document Approved', 'Document Approved by Admin (4)', 1, 0, 69505131, 0, '2022-11-16 17:57:55', '2022-11-16 17:57:55'),
(147, 'Document Disapproved', 'Document Disapproved by Admin (4)', 1, 0, 69505131, 0, '2022-11-16 17:58:02', '2022-11-16 17:58:02'),
(148, 'Document Disapproved', 'Document Disapproved by Admin (4)', 1, 0, 69505131, 0, '2022-11-16 17:58:07', '2022-11-16 17:58:07'),
(149, 'Document Approved', 'Document Approved by Admin (4)', 1, 0, 69505131, 0, '2022-11-16 17:58:11', '2022-11-16 17:58:11'),
(150, 'Document Disapproved', 'Document Disapproved by Admin (4)', 1, 0, 69505131, 0, '2022-11-16 17:58:18', '2022-11-16 17:58:18'),
(151, 'Document Approved', 'Document Approved by Admin (4)', 1, 0, 69505131, 0, '2022-11-16 17:58:26', '2022-11-16 17:58:26'),
(152, 'Document Disapproved', 'Document Disapproved by Admin (4)', 1, 0, 69505131, 0, '2022-11-16 17:59:51', '2022-11-16 17:59:51'),
(153, 'Document Approved', 'Document Approved by Admin (4)', 1, 0, 69505131, 0, '2022-11-16 18:00:47', '2022-11-16 18:00:47'),
(154, 'Document Disapproved', 'Document Disapproved by Admin (4)', 1, 0, 69505131, 0, '2022-11-16 18:01:20', '2022-11-16 18:01:20'),
(155, 'Document Disapproved', 'Document Disapproved by Admin (4)', 1, 0, 69505131, 0, '2022-11-16 18:01:23', '2022-11-16 18:01:23'),
(156, 'Document Approved', 'Document Approved by Admin (4)', 1, 0, 69505131, 0, '2022-11-16 18:02:53', '2022-11-16 18:02:53'),
(157, 'Document Disapproved', 'Document Disapproved by Admin (4)', 1, 0, 69505131, 0, '2022-11-16 18:02:56', '2022-11-16 18:02:56'),
(158, 'Document Disapproved', 'Document Disapproved by Admin (4)', 1, 0, 69505131, 0, '2022-11-16 18:02:58', '2022-11-16 18:02:58'),
(159, 'Document Disapproved', 'Document Disapproved by Admin (4)', 1, 0, 69505131, 0, '2022-11-16 18:03:00', '2022-11-16 18:03:00'),
(160, 'Document Disapproved', 'Document Disapproved by Admin (4)', 1, 0, 69505131, 0, '2022-11-16 18:10:04', '2022-11-16 18:10:04'),
(161, 'Document Approved', 'Document Approved by Admin (4)', 1, 0, 69505131, 0, '2022-11-16 18:10:31', '2022-11-16 18:10:31'),
(162, 'Document Disapproved', 'Document Disapproved by Admin (4)', 1, 0, 69505131, 0, '2022-11-16 18:10:48', '2022-11-16 18:10:48'),
(163, 'Document Disapproved', 'Document Disapproved by Admin (4)', 1, 0, 69505131, 0, '2022-11-16 18:11:16', '2022-11-16 18:11:16'),
(164, 'Document Approved', 'Document Approved by Admin (4)', 1, 0, 69505131, 0, '2022-11-16 18:11:59', '2022-11-16 18:11:59'),
(165, 'Document Disapproved', 'Document Disapproved by Admin (4)', 1, 0, 69505131, 0, '2022-11-16 18:12:05', '2022-11-16 18:12:05'),
(166, 'Document Approved', 'Document Approved by Admin (4)', 1, 0, 69505131, 0, '2022-11-16 18:12:44', '2022-11-16 18:12:44'),
(167, 'Document Disapproved', 'Document Disapproved by Admin (4)', 1, 0, 69505131, 0, '2022-11-16 18:12:50', '2022-11-16 18:12:50'),
(168, 'Document Disapproved', 'Document Disapproved by Admin (4)', 1, 0, 69505131, 0, '2022-11-16 18:14:20', '2022-11-16 18:14:20'),
(169, 'Document Disapproved', 'Document Disapproved by Admin (4)', 1, 0, 69505131, 0, '2022-11-16 18:14:41', '2022-11-16 18:14:41'),
(170, 'Document Disapproved', 'Document Disapproved by Admin (4)', 1, 0, 69505131, 0, '2022-11-16 18:14:45', '2022-11-16 18:14:45'),
(171, 'Document Disapproved', 'Document Disapproved by Admin (4)', 1, 0, 69505131, 0, '2022-11-16 18:15:49', '2022-11-16 18:15:49'),
(172, 'Document Disapproved', 'Document Disapproved by Admin (4)', 1, 0, 69505131, 0, '2022-11-16 18:15:59', '2022-11-16 18:15:59'),
(173, 'Document Approved', 'Document Approved by Admin (4)', 1, 0, 69505131, 0, '2022-11-16 18:18:53', '2022-11-16 18:18:53'),
(174, 'Document Disapproved', 'Document Disapproved by Admin (4)', 1, 0, 69505131, 0, '2022-11-16 18:20:36', '2022-11-16 18:20:36'),
(175, 'Document Approved', 'Document Approved by Admin (4)', 1, 0, 69505131, 0, '2022-11-16 18:20:39', '2022-11-16 18:20:39'),
(176, 'Document Disapproved', 'Document Disapproved by Admin (4)', 1, 0, 69505131, 0, '2022-11-16 18:21:04', '2022-11-16 18:21:04'),
(177, 'Document Approved', 'Document Approved by Admin (4)', 1, 0, 69505131, 0, '2022-11-16 18:21:07', '2022-11-16 18:21:07'),
(178, 'Document Disapproved', 'Document Disapproved by Admin (4)', 1, 0, 69505131, 0, '2022-11-16 18:21:09', '2022-11-16 18:21:09'),
(179, 'Document Approved', 'Document Approved by Admin (4)', 1, 0, 69505131, 0, '2022-11-16 18:21:15', '2022-11-16 18:21:15'),
(180, 'Document Disapproved', 'Document Disapproved by Admin (4)', 1, 0, 69505131, 0, '2022-11-16 18:21:43', '2022-11-16 18:21:43'),
(181, 'Document Approved', 'Document Approved by Admin (4)', 1, 0, 69505131, 0, '2022-11-16 18:21:49', '2022-11-16 18:21:49'),
(182, 'Document Disapproved', 'Document Disapproved by Admin (4)', 1, 0, 69505131, 0, '2022-11-16 18:22:06', '2022-11-16 18:22:06'),
(183, 'Document Approved', 'Document Approved by Admin (4)', 1, 0, 69505131, 0, '2022-11-16 18:22:07', '2022-11-16 18:22:07'),
(184, 'Document Disapproved', 'Document Disapproved by Admin (4)', 1, 0, 69505131, 0, '2022-11-16 18:22:09', '2022-11-16 18:22:09'),
(185, 'Document Approved', 'Document Approved by Admin (4)', 1, 0, 69505131, 0, '2022-11-16 18:22:36', '2022-11-16 18:22:36'),
(186, 'Document Disapproved', 'Document Disapproved by Admin (4)', 1, 0, 69505131, 0, '2022-11-16 18:22:39', '2022-11-16 18:22:39'),
(187, 'Document Approved', 'Document Approved by Admin (4)', 1, 0, 69505131, 0, '2022-11-16 18:23:05', '2022-11-16 18:23:05'),
(188, 'Document Disapproved', 'Document Disapproved by Admin (4)', 1, 0, 69505131, 0, '2022-11-16 18:23:09', '2022-11-16 18:23:09'),
(189, 'Document Approved', 'Document Approved by Admin (4)', 1, 0, 69505131, 0, '2022-11-16 18:23:16', '2022-11-16 18:23:16'),
(190, 'Document Approved', 'Document Approved by Admin (4)', 1, 0, 69505131, 0, '2022-11-16 18:23:37', '2022-11-16 18:23:37'),
(191, 'Document Disapproved', 'Document Disapproved by Admin (4)', 1, 0, 69505131, 0, '2022-11-16 18:23:40', '2022-11-16 18:23:40'),
(192, 'Document Approved', 'Document Approved by Admin (4)', 1, 0, 69505131, 0, '2022-11-16 18:23:42', '2022-11-16 18:23:42'),
(193, 'Document Disapproved', 'Document Disapproved by Admin (4)', 1, 0, 69505131, 0, '2022-11-16 18:23:43', '2022-11-16 18:23:43'),
(194, 'Document Approved', 'Document Approved by Admin (4)', 1, 0, 69505131, 0, '2022-11-16 18:24:08', '2022-11-16 18:24:08'),
(195, 'Document Disapproved', 'Document Disapproved by Admin (4)', 1, 0, 69505131, 0, '2022-11-16 18:24:10', '2022-11-16 18:24:10'),
(196, 'Document Approved', 'Document Approved by Admin (4)', 1, 0, 69505131, 0, '2022-11-16 18:24:15', '2022-11-16 18:24:15'),
(197, 'Document Disapproved', 'Document Disapproved by Admin (4)', 1, 0, 69505131, 0, '2022-11-16 18:24:20', '2022-11-16 18:24:20'),
(198, 'Document Disapproved', 'Document Disapproved by Admin (5)', 1, 0, 69505131, 0, '2022-11-16 18:24:29', '2022-11-16 18:24:29'),
(199, 'Document Approved', 'Document Approved by Admin (5)', 1, 0, 69505131, 0, '2022-11-16 18:24:32', '2022-11-16 18:24:32'),
(200, 'Document Disapproved', 'Document Disapproved by Admin (5)', 1, 0, 69505131, 0, '2022-11-16 18:24:33', '2022-11-16 18:24:33'),
(201, 'Document Approved', 'Document Approved by Admin (4)', 1, 0, 69505131, 0, '2022-11-16 18:33:00', '2022-11-16 18:33:00'),
(202, 'Document Disapproved', 'Document Disapproved by Admin (4)', 1, 0, 69505131, 0, '2022-11-16 18:33:02', '2022-11-16 18:33:02'),
(203, 'Document Approved', 'Document Approved by Admin (4)', 1, 0, 69505131, 0, '2022-11-16 18:33:03', '2022-11-16 18:33:03'),
(204, 'Document Approved', 'Document Approved by Admin (4)', 1, 0, 69505131, 0, '2022-11-16 18:33:05', '2022-11-16 18:33:05'),
(205, 'Document Disapproved', 'Document Disapproved by Admin (4)', 1, 0, 69505131, 0, '2022-11-16 18:33:06', '2022-11-16 18:33:06'),
(206, 'Document Approved', 'Document Approved by Admin (4)', 1, 0, 69505131, 0, '2022-11-16 18:33:45', '2022-11-16 18:33:45'),
(207, 'Document Approved', 'Document Approved by Admin (4)', 1, 0, 69505131, 0, '2022-11-16 18:33:47', '2022-11-16 18:33:47'),
(208, 'Document Disapproved', 'Document Disapproved by Admin (4)', 1, 0, 69505131, 0, '2022-11-16 18:33:48', '2022-11-16 18:33:48'),
(209, 'Document Approved', 'Document Approved by Admin (4)', 1, 0, 69505131, 0, '2022-11-16 18:33:50', '2022-11-16 18:33:50'),
(210, 'Document Disapproved', 'Document Disapproved by Admin (4)', 1, 0, 69505131, 0, '2022-11-16 18:35:13', '2022-11-16 18:35:13'),
(211, 'Document Approved', 'Document Approved by Admin (4)', 1, 0, 69505131, 0, '2022-11-16 18:35:14', '2022-11-16 18:35:14'),
(212, 'Document Disapproved', 'Document Disapproved by Admin (4)', 1, 0, 69505131, 0, '2022-11-16 18:35:17', '2022-11-16 18:35:17'),
(213, 'Document Approved', 'Document Approved by Admin (4)', 1, 0, 69505131, 0, '2022-11-16 18:35:55', '2022-11-16 18:35:55'),
(214, 'Document Disapproved', 'Document Disapproved by Admin (4)', 1, 0, 69505131, 0, '2022-11-16 18:35:56', '2022-11-16 18:35:56'),
(215, 'Document Approved', 'Document Approved by Admin (4)', 1, 0, 69505131, 0, '2022-11-16 18:37:14', '2022-11-16 18:37:14'),
(216, 'Document Disapproved', 'Document Disapproved by Admin (4)', 1, 0, 69505131, 0, '2022-11-16 18:37:17', '2022-11-16 18:37:17'),
(217, 'Document Approved', 'Document Approved by Admin (4)', 1, 0, 69505131, 0, '2022-11-16 18:37:18', '2022-11-16 18:37:18'),
(218, 'Document Approved', 'Document Approved by Admin (5)', 1, 0, 69505131, 0, '2022-11-16 18:38:30', '2022-11-16 18:38:30'),
(219, 'Document Approved', 'Document Approved by Admin (5)', 1, 0, 69505131, 0, '2022-11-16 18:38:32', '2022-11-16 18:38:32'),
(220, 'Document Disapproved', 'Document Disapproved by Admin (5)', 1, 0, 69505131, 0, '2022-11-16 18:38:33', '2022-11-16 18:38:33'),
(221, 'Document Disapproved', 'Document Disapproved by Admin (4)', 1, 0, 69505131, 0, '2022-11-16 18:40:30', '2022-11-16 18:40:30'),
(222, 'Document Approved', 'Document Approved by Admin (4)', 1, 0, 69505131, 0, '2022-11-16 18:40:42', '2022-11-16 18:40:42'),
(223, 'Document Disapproved', 'Document Disapproved by Admin (4)', 1, 0, 69505131, 0, '2022-11-16 18:40:49', '2022-11-16 18:40:49'),
(224, 'Document Approved', 'Document Approved by Admin (4)', 1, 0, 69505131, 0, '2022-11-16 18:40:50', '2022-11-16 18:40:50'),
(225, 'Document Approved', 'Document Approved by Admin (4)', 1, 0, 69505131, 0, '2022-11-16 18:41:22', '2022-11-16 18:41:22'),
(226, 'Document Disapproved', 'Document Disapproved by Admin (4)', 1, 0, 69505131, 0, '2022-11-16 18:41:24', '2022-11-16 18:41:24'),
(227, 'Document Approved', 'Document Approved by Admin (4)', 1, 0, 69505131, 0, '2022-11-16 18:41:26', '2022-11-16 18:41:26'),
(228, 'Document Disapproved', 'Document Disapproved by Admin (4)', 1, 0, 69505131, 0, '2022-11-16 18:41:53', '2022-11-16 18:41:53'),
(229, 'Document Approved', 'Document Approved by Admin (4)', 1, 0, 69505131, 0, '2022-11-16 18:41:54', '2022-11-16 18:41:54'),
(230, 'Document Approved', 'Document Approved by Admin (4)', 1, 0, 69505131, 0, '2022-11-16 18:42:02', '2022-11-16 18:42:02'),
(231, 'Document Approved', 'Document Approved by Admin (4)', 1, 0, 69505131, 0, '2022-11-16 18:42:29', '2022-11-16 18:42:29'),
(232, 'Document Disapproved', 'Document Disapproved by Admin (4)', 1, 0, 69505131, 0, '2022-11-16 18:42:31', '2022-11-16 18:42:31'),
(233, 'Document Approved', 'Document Approved by Admin (4)', 1, 0, 69505131, 0, '2022-11-16 18:42:33', '2022-11-16 18:42:33'),
(234, 'Document Approved', 'Document Approved by Admin (4)', 1, 0, 69505131, 0, '2022-11-16 18:42:36', '2022-11-16 18:42:36'),
(235, 'Document Disapproved', 'Document Disapproved by Admin (4)', 1, 0, 69505131, 0, '2022-11-16 18:42:37', '2022-11-16 18:42:37'),
(236, 'Document Approved', 'Document Approved by Admin (4)', 1, 0, 69505131, 0, '2022-11-16 18:43:53', '2022-11-16 18:43:53'),
(237, 'Document Disapproved', 'Document Disapproved by Admin (4)', 1, 0, 69505131, 0, '2022-11-16 18:43:56', '2022-11-16 18:43:56'),
(238, 'Document Approved', 'Document Approved by Admin (5)', 1, 0, 69505131, 0, '2022-11-16 18:45:02', '2022-11-16 18:45:02'),
(239, 'Document Disapproved', 'Document Disapproved by Admin (5)', 1, 0, 69505131, 0, '2022-11-16 18:45:04', '2022-11-16 18:45:04'),
(240, 'Document Approved', 'Document Approved by Admin (4)', 1, 0, 69505131, 0, '2022-11-16 18:45:06', '2022-11-16 18:45:06'),
(241, 'Document Disapproved', 'Document Disapproved by Admin (4)', 1, 0, 69505131, 0, '2022-11-16 18:45:09', '2022-11-16 18:45:09'),
(242, 'Document Approved', 'Document Approved by Admin (5)', 1, 0, 69505131, 0, '2022-11-16 18:47:31', '2022-11-16 18:47:31'),
(243, 'Document Disapproved', 'Document Disapproved by Admin (5)', 1, 0, 69505131, 0, '2022-11-16 18:48:02', '2022-11-16 18:48:02'),
(244, 'Document Approved', 'Document Approved by Admin (5)', 1, 0, 69505131, 0, '2022-11-16 18:48:03', '2022-11-16 18:48:03'),
(245, 'Document Disapproved', 'Document Disapproved by Admin (5)', 1, 0, 69505131, 0, '2022-11-16 18:48:06', '2022-11-16 18:48:06'),
(246, 'Document Approved', 'Document Approved by Admin (4)', 1, 0, 69505131, 0, '2022-11-16 18:51:34', '2022-11-16 18:51:34'),
(247, 'Document Approved', 'Document Approved by Admin (5)', 1, 0, 69505131, 0, '2022-11-16 18:51:36', '2022-11-16 18:51:36'),
(248, 'Document Disapproved', 'Document Disapproved by Admin (5)', 1, 0, 69505131, 0, '2022-11-16 18:51:39', '2022-11-16 18:51:39'),
(249, 'Document Disapproved', 'Document Disapproved by Admin (4)', 1, 0, 69505131, 0, '2022-11-16 18:51:43', '2022-11-16 18:51:43'),
(250, 'Document Approved', 'Document Approved by Admin (4)', 1, 0, 69505131, 0, '2022-11-16 18:51:45', '2022-11-16 18:51:45'),
(251, 'Document Disapproved', 'Document Disapproved by Admin (4)', 1, 0, 69505131, 0, '2022-11-16 18:52:18', '2022-11-16 18:52:18'),
(252, 'Document Approved', 'Document Approved by Admin (5)', 1, 0, 69505131, 0, '2022-11-16 18:52:21', '2022-11-16 18:52:21'),
(253, 'Document Approved', 'Document Approved by Admin (4)', 1, 0, 69505131, 0, '2022-11-16 18:52:24', '2022-11-16 18:52:24'),
(254, 'Document Disapproved', 'Document Disapproved by Admin (5)', 1, 0, 69505131, 0, '2022-11-16 18:52:28', '2022-11-16 18:52:28'),
(255, 'Document Disapproved', 'Document Disapproved by Admin (4)', 1, 0, 69505131, 0, '2022-11-16 18:56:05', '2022-11-16 18:56:05'),
(256, 'Document Approved', 'Document Approved by Admin (4)', 1, 0, 69505131, 0, '2022-11-16 18:56:06', '2022-11-16 18:56:06'),
(257, 'Document Approved', 'Document Approved by Admin (5)', 1, 0, 69505131, 0, '2022-11-16 18:56:10', '2022-11-16 18:56:10'),
(258, 'Document Disapproved', 'Document Disapproved by Admin (5)', 1, 0, 69505131, 0, '2022-11-16 18:56:12', '2022-11-16 18:56:12'),
(259, 'Document Approved', 'Document Approved by Admin (4)', 1, 0, 69505131, 0, '2022-11-16 18:56:13', '2022-11-16 18:56:13'),
(260, 'Document Disapproved', 'Document Disapproved by Admin (4)', 1, 0, 69505131, 0, '2022-11-16 18:56:14', '2022-11-16 18:56:14'),
(261, 'Document Disapproved', 'Document Disapproved by Admin (5)', 1, 0, 69505131, 0, '2022-11-16 19:01:55', '2022-11-16 19:01:55'),
(262, 'Document Disapproved', 'Document Disapproved by Admin (4)', 1, 0, 69505131, 0, '2022-11-16 19:01:58', '2022-11-16 19:01:58'),
(263, 'Document Approved', 'Document Approved by Admin (4)', 1, 0, 69505131, 0, '2022-11-16 19:02:00', '2022-11-16 19:02:00'),
(264, 'Document Disapproved', 'Document Disapproved by Admin (4)', 1, 0, 69505131, 0, '2022-11-16 19:02:01', '2022-11-16 19:02:01'),
(265, 'Document Approved', 'Document Approved by Admin (4)', 1, 0, 69505131, 0, '2022-11-16 19:02:16', '2022-11-16 19:02:16'),
(266, 'Document Disapproved', 'Document Disapproved by Admin (4)', 1, 0, 69505131, 0, '2022-11-16 19:02:19', '2022-11-16 19:02:19'),
(267, 'Document Approved', 'Document Approved by Admin (4)', 1, 0, 69505131, 0, '2022-11-16 19:02:29', '2022-11-16 19:02:29'),
(268, 'Document Approved', 'Document Approved by Admin (5)', 1, 0, 69505131, 0, '2022-11-16 19:02:33', '2022-11-16 19:02:33'),
(269, 'Document Disapproved', 'Document Disapproved by Admin (5)', 1, 0, 69505131, 0, '2022-11-16 19:02:35', '2022-11-16 19:02:35'),
(270, 'Document Disapproved', 'Document Disapproved by Admin (4)', 1, 0, 69505131, 0, '2022-11-16 19:02:37', '2022-11-16 19:02:37'),
(271, 'Document Approved', 'Document Approved by Admin (4)', 1, 0, 69505131, 0, '2022-11-16 19:02:51', '2022-11-16 19:02:51'),
(272, 'Document Approved', 'Document Approved by Admin (5)', 1, 0, 69505131, 0, '2022-11-16 19:02:53', '2022-11-16 19:02:53'),
(273, 'Graduation transcript updated', 'Graduation transcript  updated successfully ', 0, 2, 69505131, 0, '2022-11-16 19:03:22', '2022-11-16 19:03:22'),
(274, 'Document Disapproved', 'Document Disapproved by Admin (5)', 1, 0, 69505131, 0, '2022-11-16 19:03:36', '2022-11-16 19:03:36'),
(275, 'Document Approved', 'Document Approved by Admin (4)', 1, 0, 69505131, 0, '2022-11-16 19:03:51', '2022-11-16 19:03:51'),
(276, 'Document Disapproved', 'Document Disapproved by Admin (4)', 1, 0, 69505131, 0, '2022-11-16 19:03:52', '2022-11-16 19:03:52'),
(277, 'Post graduation certificate updated', 'Post graduation certificate  updated successfully ', 0, 2, 69505131, 0, '2022-11-16 19:03:58', '2022-11-16 19:03:58'),
(278, 'Document Approved', 'Document Approved by Admin (4)', 1, 0, 69505131, 0, '2022-11-16 19:04:31', '2022-11-16 19:04:31'),
(279, 'Document Approved', 'Document Approved by Admin (5)', 1, 0, 69505131, 0, '2022-11-16 19:04:34', '2022-11-16 19:04:34'),
(280, 'Document Disapproved', 'Document Disapproved by Admin (5)', 49, 0, 69505131, 0, '2022-11-16 23:12:42', '2022-11-16 23:12:42'),
(281, 'Document Approved', 'Document Approved by Admin (5)', 49, 0, 69505131, 0, '2022-11-16 23:55:55', '2022-11-16 23:55:55'),
(282, 'Document Disapproved', 'Document Disapproved by Admin (5)', 49, 0, 69505131, 0, '2022-11-16 23:56:02', '2022-11-16 23:56:02'),
(283, 'Document Disapproved', 'Document Disapproved by Admin (4)', 49, 0, 69505131, 0, '2022-11-17 00:01:26', '2022-11-17 00:01:26'),
(284, 'Document Approved', 'Document Approved by Admin (4)', 49, 0, 69505131, 0, '2022-11-17 00:01:35', '2022-11-17 00:01:35'),
(285, 'Document Disapproved', 'Document Disapproved by Admin (4)', 49, 0, 69505131, 0, '2022-11-17 00:01:38', '2022-11-17 00:01:38'),
(286, 'Document Approved', 'Document Approved by Admin (5)', 49, 0, 69505131, 0, '2022-11-17 00:02:14', '2022-11-17 00:02:14'),
(287, 'Document Approved', 'Document Approved by Admin (4)', 49, 0, 69505131, 0, '2022-11-17 00:02:18', '2022-11-17 00:02:18'),
(288, 'Document Disapproved', 'Document Disapproved by Admin (4)', 49, 0, 69505131, 0, '2022-11-17 00:02:22', '2022-11-17 00:02:22'),
(289, 'Document Approved', 'Document Approved by Admin (4)', 49, 0, 69505131, 0, '2022-11-17 00:03:09', '2022-11-17 00:03:09'),
(290, 'Document Disapproved', 'Document Disapproved by Admin (4)', 49, 0, 69505131, 0, '2022-11-17 00:03:15', '2022-11-17 00:03:15'),
(291, 'Document Disapproved', 'Document Disapproved by Admin (5)', 1, 0, 69505131, 0, '2022-11-17 11:11:18', '2022-11-17 11:11:18'),
(292, 'Document Approved', 'Document Approved by Admin (4)', 1, 0, 69505131, 0, '2022-11-17 11:33:39', '2022-11-17 11:33:39'),
(293, 'Document Disapproved', 'Document Disapproved by Admin (4)', 1, 0, 69505131, 0, '2022-11-17 11:33:41', '2022-11-17 11:33:41'),
(294, 'Document Approved', 'Document Approved by Admin (4)', 1, 0, 69505131, 0, '2022-11-17 11:33:42', '2022-11-17 11:33:42'),
(295, 'Document Approved', 'Document Approved by Admin (5)', 1, 0, 69505131, 0, '2022-11-17 11:33:46', '2022-11-17 11:33:46'),
(296, 'Document Approved', 'Document Approved by Admin (5)', 1, 0, 69505131, 0, '2022-11-17 11:33:49', '2022-11-17 11:33:49'),
(297, 'Document Disapproved', 'Document Disapproved by Admin (5)', 1, 0, 69505131, 0, '2022-11-17 11:33:50', '2022-11-17 11:33:50'),
(298, 'Document Disapproved', 'Document Disapproved by Admin (4)', 1, 0, 69505131, 0, '2022-11-17 11:33:52', '2022-11-17 11:33:52'),
(299, 'Document Approved', 'Document Approved by Admin (4)', 1, 0, 69505131, 0, '2022-11-17 11:33:53', '2022-11-17 11:33:53'),
(300, 'Document Disapproved', 'Document Disapproved by Admin (4)', 1, 0, 69505131, 0, '2022-11-18 19:13:35', '2022-11-18 19:13:35'),
(301, 'Document Approved', 'Document Approved by Admin (5)', 49, 0, 69505131, 0, '2022-11-19 04:02:03', '2022-11-19 04:02:03'),
(302, 'Document Disapproved', 'Document Disapproved by Admin (5)', 49, 0, 69505131, 0, '2022-11-19 04:02:06', '2022-11-19 04:02:06'),
(303, 'Application Cancelled', ' Application Cancelled by Admin', 49, 0, 69505131, 0, '2022-11-19 04:09:32', '2022-11-19 04:09:32'),
(304, 'Document Approved', 'Document Approved by Admin (5)', 49, 0, 69505131, 0, '2022-11-19 04:14:24', '2022-11-19 04:14:24'),
(305, 'Document Disapproved', 'Document Disapproved by Admin (5)', 49, 0, 69505131, 0, '2022-11-19 04:14:27', '2022-11-19 04:14:27'),
(306, 'Document Dis Approved', 'Document DisApproved Comment registered by Admin (5)', 49, 0, 69505131, 0, '2022-11-19 04:14:40', '2022-11-19 04:14:40'),
(307, 'Document Approved', 'Document Approved by Admin (5)', 49, 0, 69505131, 0, '2022-11-19 04:14:52', '2022-11-19 04:14:52'),
(308, 'Document Disapproved', 'Document Disapproved by Admin (5)', 49, 0, 69505131, 0, '2022-11-19 04:14:54', '2022-11-19 04:14:54'),
(309, 'Document Approved', 'Document Approved by Admin (4)', 1, 0, 69505131, 0, '2022-11-19 16:48:00', '2022-11-19 16:48:00'),
(310, 'Document Disapproved', 'Document Disapproved by Admin (4)', 1, 0, 69505131, 0, '2022-11-19 16:48:03', '2022-11-19 16:48:03'),
(311, 'Post graduation certificate updated', 'Post graduation certificate  updated successfully ', 0, 2, 69505131, 0, '2022-11-19 16:51:08', '2022-11-19 16:51:08'),
(312, 'Document Approved', 'Document Approved by Admin (4)', 1, 0, 69505131, 0, '2022-11-19 16:54:07', '2022-11-19 16:54:07'),
(313, 'Document Disapproved', 'Document Disapproved by Admin (4)', 1, 0, 69505131, 0, '2022-11-19 16:54:11', '2022-11-19 16:54:11'),
(314, 'Document Approved', 'Document Approved by Admin (4)', 1, 0, 69505131, 0, '2022-11-19 17:00:11', '2022-11-19 17:00:11'),
(315, 'Document Approved', 'Document Approved by Admin (5)', 1, 0, 69505131, 0, '2022-11-19 17:10:28', '2022-11-19 17:10:28'),
(316, 'Document Disapproved', 'Document Disapproved by Admin (5)', 1, 0, 69505131, 0, '2022-11-19 17:10:30', '2022-11-19 17:10:30'),
(317, 'Document Disapproved', 'Document Disapproved by Admin (4)', 1, 0, 69505131, 0, '2022-11-19 17:10:33', '2022-11-19 17:10:33'),
(318, 'Document Approved', 'Document Approved by Admin (4)', 1, 0, 69505131, 0, '2022-11-19 17:11:16', '2022-11-19 17:11:16'),
(319, 'Document Disapproved', 'Document Disapproved by Admin (4)', 1, 0, 69505131, 0, '2022-11-19 17:11:18', '2022-11-19 17:11:18'),
(320, 'Document Disapproved', 'Document Disapproved by Admin (5)', 1, 0, 69505131, 0, '2022-11-19 17:11:32', '2022-11-19 17:11:32'),
(321, 'Document Approved', 'Document Approved by Admin (4)', 1, 0, 69505131, 0, '2022-11-19 17:12:06', '2022-11-19 17:12:06'),
(322, 'Document Disapproved', 'Document Disapproved by Admin (4)', 1, 0, 69505131, 0, '2022-11-19 17:12:07', '2022-11-19 17:12:07'),
(323, 'Document Disapproved', 'Document Disapproved by Admin (4)', 1, 0, 69505131, 0, '2022-11-19 17:12:38', '2022-11-19 17:12:38'),
(324, 'Document Disapproved', 'Document Disapproved by Admin (4)', 1, 0, 69505131, 0, '2022-11-19 17:13:41', '2022-11-19 17:13:41'),
(325, 'Document Approved', 'Document Approved by Admin (5)', 1, 0, 69505131, 0, '2022-11-19 17:14:01', '2022-11-19 17:14:01'),
(326, 'Document Disapproved', 'Document Disapproved by Admin (5)', 1, 0, 69505131, 0, '2022-11-19 17:14:03', '2022-11-19 17:14:03'),
(327, 'Document Approved', 'Document Approved by Admin (5)', 1, 0, 69505131, 0, '2022-11-19 17:14:36', '2022-11-19 17:14:36'),
(328, 'Document Disapproved', 'Document Disapproved by Admin (5)', 1, 0, 69505131, 0, '2022-11-19 17:14:38', '2022-11-19 17:14:38'),
(329, 'Document Disapproved', 'Document Disapproved by Admin (4)', 1, 0, 69505131, 0, '2022-11-19 17:15:21', '2022-11-19 17:15:21'),
(330, 'Document Disapproved', 'Document Disapproved by Admin (5)', 1, 0, 69505131, 0, '2022-11-19 17:15:34', '2022-11-19 17:15:34'),
(331, 'Document Disapproved', 'Document Disapproved by Admin (4)', 1, 0, 69505131, 0, '2022-11-22 18:29:56', '2022-11-22 18:29:56'),
(332, 'Post graduation certificate updated', 'Post graduation certificate  updated successfully ', 0, 2, 69505131, 0, '2022-11-22 18:31:03', '2022-11-22 18:31:03'),
(333, 'Post graduation certificate updated', 'Post graduation certificate  updated successfully ', 0, 2, 69505131, 0, '2022-11-22 18:32:08', '2022-11-22 18:32:08'),
(334, 'Post graduation certificate updated', 'Post graduation certificate  updated successfully ', 0, 2, 69505131, 0, '2022-11-22 18:32:20', '2022-11-22 18:32:20'),
(335, 'Post graduation certificate updated', 'Post graduation certificate  updated successfully ', 0, 2, 69505131, 0, '2022-11-22 18:33:27', '2022-11-22 18:33:27'),
(336, 'Graduation transcript updated', 'Graduation transcript  updated successfully ', 0, 2, 69505131, 0, '2022-11-22 18:33:32', '2022-11-22 18:33:32'),
(337, 'Post graduation certificate updated', 'Post graduation certificate  updated successfully ', 0, 2, 69505131, 0, '2022-11-22 18:34:00', '2022-11-22 18:34:00'),
(338, 'Post graduation certificate updated', 'Post graduation certificate  updated successfully ', 0, 2, 69505131, 0, '2022-11-22 18:35:55', '2022-11-22 18:35:55'),
(339, 'Post graduation certificate updated', 'Post graduation certificate  updated successfully ', 0, 2, 69505131, 0, '2022-11-22 18:37:50', '2022-11-22 18:37:50'),
(340, 'Post graduation certificate updated', 'Post graduation certificate  updated successfully ', 0, 2, 69505131, 0, '2022-11-22 18:44:40', '2022-11-22 18:44:40'),
(341, 'Post graduation certificate updated', 'Post graduation certificate  updated successfully ', 0, 2, 69505131, 0, '2022-11-22 18:51:18', '2022-11-22 18:51:18'),
(342, 'Post graduation certificate updated', 'Post graduation certificate  updated successfully ', 0, 2, 69505131, 0, '2022-11-22 18:51:43', '2022-11-22 18:51:43'),
(343, 'Post graduation certificate updated', 'Post graduation certificate  updated successfully ', 0, 2, 69505131, 0, '2022-11-22 18:56:34', '2022-11-22 18:56:34'),
(344, 'Post graduation certificate updated', 'Post graduation certificate  updated successfully ', 0, 2, 69505131, 0, '2022-11-22 19:06:09', '2022-11-22 19:06:09'),
(345, 'Post graduation certificate updated', 'Post graduation certificate  updated successfully ', 0, 2, 69505131, 0, '2022-11-22 19:06:17', '2022-11-22 19:06:17'),
(346, 'Graduation transcript updated', 'Graduation transcript  updated successfully ', 0, 2, 69505131, 0, '2022-11-22 19:06:23', '2022-11-22 19:06:23'),
(347, 'Post graduation certificate updated', 'Post graduation certificate  updated successfully ', 0, 2, 69505131, 0, '2022-11-24 12:37:11', '2022-11-24 12:37:11'),
(348, 'Graduation transcript updated', 'Graduation transcript  updated successfully ', 0, 2, 69505131, 0, '2022-11-30 10:15:59', '2022-11-30 10:15:59'),
(349, 'Post graduation certificate updated', 'Post graduation certificate  updated successfully ', 0, 2, 69505131, 0, '2022-12-08 18:29:17', '2022-12-08 18:29:17'),
(350, 'Graduation transcript updated', 'Graduation transcript  updated successfully ', 0, 2, 69505131, 0, '2022-12-08 18:52:33', '2022-12-08 18:52:33'),
(351, 'Post graduation certificate updated', 'Post graduation certificate  updated successfully ', 0, 2, 69505131, 0, '2022-12-08 18:54:27', '2022-12-08 18:54:27'),
(352, 'Post graduation certificate updated', 'Post graduation certificate  updated successfully ', 0, 2, 69505131, 0, '2022-12-08 19:00:13', '2022-12-08 19:00:13'),
(353, 'Graduation transcript updated', 'Graduation transcript  updated successfully ', 0, 2, 69505131, 0, '2022-12-08 19:00:25', '2022-12-08 19:00:25'),
(354, 'Application Approved', 'Application Approved by Admin', 49, 0, 69505131, 0, '2022-12-16 00:16:46', '2022-12-16 00:16:46'),
(355, 'Student Registration', 'Student Register Successfully by Agent', 1, 51, NULL, 0, '2022-12-20 23:38:37', '2022-12-20 23:38:37'),
(356, 'Graduation transcript updated', 'Graduation transcript  updated successfully ', 0, 17, 78429398, 0, '2022-12-25 01:03:52', '2022-12-25 01:03:52'),
(357, 'Student Registration', 'Student Register Successfully by Agent', 1, 52, NULL, 0, '2022-12-26 15:08:08', '2022-12-26 15:08:08'),
(358, 'Profile Updated', 'Profile Updated', 0, 52, 0, 0, '2022-12-26 23:52:01', '2022-12-26 23:52:01'),
(359, 'Profile Updated', 'Profile Updated', 0, 52, 0, 0, '2022-12-26 23:58:56', '2022-12-26 23:58:56'),
(360, 'Profile Updated', 'Profile Updated', 0, 52, 0, 0, '2022-12-27 00:00:22', '2022-12-27 00:00:22'),
(361, 'Student Registration', 'Student Register Successfully by Agent', 1, 53, NULL, 0, '2022-12-27 22:25:54', '2022-12-27 22:25:54'),
(362, 'Student Registration', 'Student Register Successfully by Agent', 1, 54, NULL, 0, '2022-12-27 23:46:04', '2022-12-27 23:46:04'),
(363, 'Document Approved', 'Document Approved by Admin (4)', 49, 0, 69505131, 0, '2022-12-29 22:30:00', '2022-12-29 22:30:00'),
(364, 'Document Disapproved', 'Document Disapproved by Admin (4)', 49, 0, 69505131, 0, '2022-12-29 22:30:07', '2022-12-29 22:30:07'),
(365, 'Document Approved', 'Document Approved by Admin (5)', 49, 0, 69505131, 0, '2022-12-29 22:30:33', '2022-12-29 22:30:33'),
(366, 'Document Disapproved', 'Document Disapproved by Admin (5)', 49, 0, 69505131, 0, '2022-12-29 22:30:34', '2022-12-29 22:30:34'),
(367, 'Student Registration', 'Student Register Successfully by Agent', 1, 56, NULL, 0, '2023-01-16 12:18:01', '2023-01-16 12:18:01'),
(368, 'Profile Updated', 'Profile Updated', 0, 56, 0, 0, '2023-01-16 12:40:04', '2023-01-16 12:40:04'),
(369, 'Profile Updated', 'Profile Updated', 0, 56, 0, 0, '2023-01-16 12:43:53', '2023-01-16 12:43:53'),
(370, 'Profile Updated', 'Profile Updated', 0, 54, 0, 0, '2023-01-16 13:47:46', '2023-01-16 13:47:46'),
(371, 'Profile Updated', 'Profile Updated', 0, 56, 0, 0, '2023-01-16 23:53:32', '2023-01-16 23:53:32'),
(372, 'Student Registration', 'Student Register Successfully by Agent', 1, 57, NULL, 0, '2023-01-17 00:10:16', '2023-01-17 00:10:16'),
(373, 'Profile Updated', 'Profile Updated', 0, 56, 0, 0, '2023-01-17 00:25:39', '2023-01-17 00:25:39'),
(374, 'Profile Updated', 'Profile Updated', 0, 57, 0, 0, '2023-01-17 00:46:02', '2023-01-17 00:46:02'),
(375, 'Profile Updated', 'Profile Updated', 0, 57, 0, 0, '2023-01-17 00:47:07', '2023-01-17 00:47:07'),
(376, 'Profile Updated', 'Profile Updated', 0, 56, 0, 0, '2023-01-17 00:48:10', '2023-01-17 00:48:10'),
(377, 'Profile Updated', 'Profile Updated', 0, 56, 0, 0, '2023-01-17 00:49:24', '2023-01-17 00:49:24'),
(378, 'Profile Updated', 'Profile Updated', 0, 56, 0, 0, '2023-01-17 00:52:42', '2023-01-17 00:52:42'),
(379, 'Profile Updated', 'Profile Updated', 0, 56, 0, 0, '2023-01-17 01:15:47', '2023-01-17 01:15:47'),
(380, 'Student Registration', 'Student Register Successfully by Agent', 1, 58, NULL, 0, '2023-01-17 01:19:14', '2023-01-17 01:19:14'),
(381, 'Profile Updated', 'Profile Updated', 0, 56, 0, 0, '2023-01-17 01:20:37', '2023-01-17 01:20:37'),
(382, 'Profile Updated', 'Profile Updated', 0, 58, 0, 0, '2023-01-17 01:29:02', '2023-01-17 01:29:02'),
(383, 'Profile Updated', 'Profile Updated', 0, 58, 0, 0, '2023-01-17 01:30:12', '2023-01-17 01:30:12');
INSERT INTO `student_records` (`id`, `title`, `text`, `agent_id`, `student_id`, `app_id`, `is_view`, `created_at`, `updated_at`) VALUES
(384, 'Profile Updated', 'Profile Updated', 0, 58, 0, 0, '2023-01-17 01:44:31', '2023-01-17 01:44:31'),
(385, 'Profile Updated', 'Profile Updated', 0, 58, 0, 0, '2023-01-17 02:00:55', '2023-01-17 02:00:55'),
(386, 'Profile Updated', 'Profile Updated', 0, 58, 0, 0, '2023-01-17 02:12:46', '2023-01-17 02:12:46'),
(387, 'Profile Updated', 'Profile Updated', 0, 58, 0, 0, '2023-01-17 02:20:36', '2023-01-17 02:20:36'),
(388, 'Profile Updated', 'Profile Updated', 0, 58, 0, 0, '2023-01-17 02:35:40', '2023-01-17 02:35:40'),
(389, 'Student Registration', 'Student Register Successfully by Agent', 1, 59, NULL, 0, '2023-01-17 02:43:07', '2023-01-17 02:43:07'),
(390, 'Profile Updated', 'Profile Updated', 0, 59, 0, 0, '2023-01-17 02:46:51', '2023-01-17 02:46:51'),
(391, 'Profile Updated', 'Profile Updated', 0, 59, 0, 0, '2023-01-17 02:59:13', '2023-01-17 02:59:13'),
(392, 'Student Registration', 'Student Register Successfully by Agent', 1, 60, NULL, 0, '2023-01-17 14:02:38', '2023-01-17 14:02:38'),
(393, 'Profile Updated', 'Profile Updated', 0, 60, 0, 0, '2023-01-17 14:33:58', '2023-01-17 14:33:58'),
(394, 'Profile Updated', 'Profile Updated', 0, 60, 0, 0, '2023-01-17 21:43:14', '2023-01-17 21:43:14'),
(395, 'Profile Updated', 'Profile Updated', 0, 57, 0, 0, '2023-01-17 22:22:55', '2023-01-17 22:22:55'),
(396, 'Profile Updated', 'Profile Updated', 0, 57, 0, 0, '2023-01-17 22:25:16', '2023-01-17 22:25:16'),
(397, 'Profile Updated', 'Profile Updated', 0, 57, 0, 0, '2023-01-17 22:28:13', '2023-01-17 22:28:13'),
(398, 'Profile Updated', 'Profile Updated', 0, 57, 0, 0, '2023-01-17 22:29:07', '2023-01-17 22:29:07'),
(399, 'Profile Updated', 'Profile Updated', 0, 57, 0, 0, '2023-01-17 22:30:52', '2023-01-17 22:30:52'),
(400, 'Profile Updated', 'Profile Updated', 0, 60, 0, 0, '2023-01-19 00:53:05', '2023-01-19 00:53:05'),
(401, 'Profile Updated', 'Profile Updated', 0, 60, 0, 0, '2023-01-19 00:54:57', '2023-01-19 00:54:57'),
(402, 'Profile Updated', 'Profile Updated', 0, 60, 0, 0, '2023-01-19 03:39:20', '2023-01-19 03:39:20'),
(403, 'Profile Updated', 'Profile Updated', 0, 59, 0, 0, '2023-01-19 03:47:08', '2023-01-19 03:47:08'),
(404, 'Profile Updated', 'Profile Updated', 0, 60, 0, 0, '2023-01-19 03:48:47', '2023-01-19 03:48:47'),
(405, 'Profile Updated', 'Profile Updated', 0, 60, 0, 0, '2023-01-20 00:55:09', '2023-01-20 00:55:09'),
(406, 'Profile Updated', 'Profile Updated', 0, 60, 0, 0, '2023-01-20 00:55:46', '2023-01-20 00:55:46'),
(407, 'Profile Updated', 'Profile Updated', 0, 60, 0, 0, '2023-01-20 00:56:30', '2023-01-20 00:56:30'),
(408, 'Profile Updated', 'Profile Updated', 0, 60, 0, 0, '2023-01-20 00:59:37', '2023-01-20 00:59:37'),
(409, 'Student Registration', 'Student Register Successfully by Agent', 1, 61, NULL, 0, '2023-01-23 22:53:39', '2023-01-23 22:53:39'),
(410, 'Profile Updated', 'Profile Updated', 0, 61, 0, 0, '2023-01-24 00:04:41', '2023-01-24 00:04:41'),
(411, 'Profile Updated', 'Profile Updated', 0, 61, 0, 0, '2023-01-24 00:05:33', '2023-01-24 00:05:33'),
(412, 'Student Registration', 'Student Register Successfully by Agent', 62, 63, NULL, 0, '2023-01-24 22:57:40', '2023-01-24 22:57:40'),
(413, 'Profile Updated', 'Profile Updated', 0, 63, 0, 0, '2023-01-24 23:11:39', '2023-01-24 23:11:39'),
(414, 'Profile Updated', 'Profile Updated', 0, 63, 0, 0, '2023-01-24 23:25:11', '2023-01-24 23:25:11'),
(415, 'Profile Updated', 'Profile Updated', 0, 63, 0, 0, '2023-01-24 23:26:26', '2023-01-24 23:26:26'),
(416, 'Profile Updated', 'Profile Updated', 0, 63, 0, 0, '2023-01-24 23:29:22', '2023-01-24 23:29:22'),
(417, 'Profile Updated', 'Profile Updated', 0, 63, 0, 0, '2023-01-24 23:35:49', '2023-01-24 23:35:49'),
(418, 'Profile Updated', 'Profile Updated', 0, 63, 0, 0, '2023-01-24 23:36:34', '2023-01-24 23:36:34'),
(419, 'Program Apply', 'Program apply by ', 62, 43, 75489662, 0, '2023-01-24 23:41:00', '2023-01-24 23:41:00'),
(420, 'Program Apply', 'Program apply by ', 62, 55, 70584031, 0, '2023-01-24 23:43:42', '2023-01-24 23:43:42'),
(421, 'Program Apply', 'Program apply by ', 62, 55, 17585023, 0, '2023-01-24 23:43:43', '2023-01-24 23:43:43'),
(422, 'Program Apply', 'Program apply by ', 62, 55, 54686759, 0, '2023-01-24 23:43:44', '2023-01-24 23:43:44'),
(423, 'Program Apply', 'Program apply by ', 62, 55, 67230993, 0, '2023-01-24 23:43:45', '2023-01-24 23:43:45'),
(424, 'Program Apply', 'Program apply by ', 62, 55, 74801618, 0, '2023-01-24 23:43:45', '2023-01-24 23:43:45'),
(425, 'Profile Updated', 'Profile Updated', 0, 61, 0, 0, '2023-01-26 22:57:27', '2023-01-26 22:57:27'),
(426, 'Student Registration', 'Student Register Successfully by Agent', 1, 64, NULL, 0, '2023-01-26 23:01:18', '2023-01-26 23:01:18'),
(427, 'Profile Updated', 'Profile Updated', 0, 64, 0, 0, '2023-01-26 23:05:29', '2023-01-26 23:05:29'),
(428, 'Profile Updated', 'Profile Updated', 0, 64, 0, 0, '2023-01-26 23:06:16', '2023-01-26 23:06:16'),
(429, 'Program Apply', 'Program apply by ', 1, 64, 87701795, 0, '2023-01-26 23:07:00', '2023-01-26 23:07:00'),
(430, 'Document Approved', 'Document Approved by Admin (4)', 49, 0, 69505131, 0, '2023-01-26 23:19:52', '2023-01-26 23:19:52'),
(431, 'Document Disapproved', 'Document Disapproved by Admin (4)', 49, 0, 69505131, 0, '2023-01-26 23:19:57', '2023-01-26 23:19:57'),
(432, 'Document Dis Approved', 'Document DisApproved Comment registered by Admin (4)', 49, 0, 69505131, 0, '2023-01-26 23:20:05', '2023-01-26 23:20:05'),
(433, 'Student Registration', 'Student Register Successfully by Agent', 1, 65, NULL, 0, '2023-01-27 20:13:47', '2023-01-27 20:13:47'),
(434, 'Student Registration', 'Student Register Successfully by Agent', 1, 66, NULL, 0, '2023-01-27 21:32:05', '2023-01-27 21:32:05'),
(435, 'Student Registration', 'Student Register Successfully by Agent', 1, 67, NULL, 0, '2023-01-27 21:32:05', '2023-01-27 21:32:05'),
(436, 'Student Registration', 'Student Register Successfully by Agent', 1, 68, NULL, 0, '2023-01-27 22:56:58', '2023-01-27 22:56:58'),
(437, 'Program Apply', 'Program apply by ', 1, 68, 87348154, 0, '2023-01-27 22:58:11', '2023-01-27 22:58:11'),
(438, 'Program Apply', 'Program apply by ', 1, 68, 49690698, 0, '2023-01-27 23:09:31', '2023-01-27 23:09:31'),
(439, 'Program Apply', 'Program apply by ', 1, 68, 23509034, 0, '2023-01-27 23:36:49', '2023-01-27 23:36:49'),
(440, 'Student Registration', 'Student Register Successfully by Agent', 1, 69, NULL, 0, '2023-01-28 00:58:37', '2023-01-28 00:58:37'),
(441, 'Profile Updated', 'Profile Updated', 0, 67, 0, 0, '2023-01-29 21:42:53', '2023-01-29 21:42:53'),
(442, 'Profile Updated', 'Profile Updated', 0, 69, 0, 0, '2023-01-31 02:23:56', '2023-01-31 02:23:56'),
(443, 'Student Registration', 'Student Register Successfully by Agent', 1, 71, NULL, 0, '2023-01-31 22:29:49', '2023-01-31 22:29:49'),
(444, 'Profile Updated', 'Profile Updated', 0, 71, 0, 0, '2023-01-31 22:36:49', '2023-01-31 22:36:49'),
(445, 'Profile Updated', 'Profile Updated', 0, 71, 0, 0, '2023-01-31 22:58:48', '2023-01-31 22:58:48'),
(446, 'Student Registration', 'Student Register Successfully by Agent', 1, 72, NULL, 0, '2023-02-02 20:28:36', '2023-02-02 20:28:36'),
(447, 'Profile Updated', 'Profile Updated', 0, 72, 0, 0, '2023-02-02 20:30:53', '2023-02-02 20:30:53'),
(448, 'Profile Updated', 'Profile Updated', 0, 72, 0, 0, '2023-02-02 20:32:53', '2023-02-02 20:32:53'),
(449, 'Application Approved', 'Application Approved by Admin', 49, 0, 60896568, 0, '2023-02-02 23:16:30', '2023-02-02 23:16:30'),
(450, 'Application Cancelled', ' Application Cancelled by Admin', 49, 0, 60896568, 0, '2023-02-02 23:16:35', '2023-02-02 23:16:35');

-- --------------------------------------------------------

--
-- Table structure for table `student_uploaded_docs`
--

CREATE TABLE `student_uploaded_docs` (
  `id` int(11) NOT NULL,
  `doc_id` int(11) NOT NULL,
  `image_name` varchar(35) NOT NULL,
  `app_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `is_verified` int(11) NOT NULL DEFAULT 0 COMMENT '0=pending,1=verified,2=canclied',
  `backend_comment` text DEFAULT NULL,
  `verified_by` int(11) NOT NULL DEFAULT 0,
  `verified_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student_uploaded_docs`
--

INSERT INTO `student_uploaded_docs` (`id`, `doc_id`, `image_name`, `app_id`, `student_id`, `is_verified`, `backend_comment`, `verified_by`, `verified_at`, `created_at`, `updated_at`) VALUES
(1, 1, '1665349411.jpg', 78429398, 17, 0, 'Image not clear,please upload again', 1, '2022-10-09 21:06:42', '2022-10-05 19:20:14', '2022-10-09 21:03:31'),
(2, 2, '1664997622.JPG', 78429398, 17, 1, NULL, 1, '2022-10-09 21:06:42', '2022-10-05 19:20:22', '2022-10-05 19:20:22'),
(3, 3, '1665349357.jpg', 78429398, 17, 2, NULL, 1, '2022-10-09 21:06:42', '2022-10-09 21:02:38', '2022-10-09 21:02:38'),
(4, 4, '1665349363.jpg', 78429398, 17, 1, NULL, 1, '2022-10-09 21:06:42', '2022-10-09 21:02:43', '2022-10-09 21:02:43'),
(5, 5, '1671910431.jpg', 78429398, 17, 2, NULL, 1, '2022-10-09 21:06:42', '2022-10-09 21:02:49', '2022-12-24 19:33:51'),
(6, 6, '1665349375.jpeg', 78429398, 17, 0, NULL, 1, '2022-10-09 21:06:42', '2022-10-09 21:02:55', '2022-10-09 21:02:55'),
(7, 8, '1665939415.png', 78429398, 17, 0, NULL, 0, '2022-10-16 16:56:55', '2022-10-16 16:56:55', '2022-10-16 16:56:55'),
(8, 11, '1665941817.jpg', 78429398, 17, 0, NULL, 0, '2022-10-16 17:36:57', '2022-10-16 17:36:57', '2022-10-16 17:36:57'),
(9, 13, '1665941911.png', 78429398, 17, 0, NULL, 0, '2022-10-16 17:38:31', '2022-10-16 17:38:31', '2022-10-16 17:38:31'),
(10, 5, '1666377020.JPG', 53896579, 2, 0, NULL, 0, '2022-10-21 18:27:48', '2022-10-21 18:27:48', '2022-10-21 18:30:20'),
(11, 4, '1670506213.png', 69505131, 2, 2, 'hfhkdk', 49, '2023-01-26 17:50:05', '2022-10-21 18:47:04', '2022-12-08 13:30:13'),
(12, 4, '1667236504.png', 60896568, 2, 0, NULL, 0, '2022-10-31 17:15:04', '2022-10-31 17:15:04', '2022-10-31 17:15:04'),
(13, 5, '1670506225.png', 69505131, 2, 2, 'Please be advised that the file size limit of the photocopy is 20MB.', 49, '2022-12-29 17:00:34', '2022-11-12 12:35:38', '2022-12-08 13:30:25');

-- --------------------------------------------------------

--
-- Table structure for table `student_work_experience_pictures`
--

CREATE TABLE `student_work_experience_pictures` (
  `id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `name` text NOT NULL,
  `url` longtext NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sub_agents`
--

CREATE TABLE `sub_agents` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `country` int(11) NOT NULL,
  `state` int(11) NOT NULL,
  `city` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `ccode` varchar(5) NOT NULL,
  `mobile` varchar(11) NOT NULL,
  `contact_person` varchar(50) NOT NULL,
  `user_id` int(11) NOT NULL,
  `password` varchar(60) NOT NULL,
  `agent_id` int(11) NOT NULL,
  `is_admin` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sub_agents`
--

INSERT INTO `sub_agents` (`id`, `name`, `country`, `state`, `city`, `email`, `ccode`, `mobile`, `contact_person`, `user_id`, `password`, `agent_id`, `is_admin`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Niraj', 1, 2, 3, 'niraj@gmail.com', '+91', '8851541659', 'Niraj', 2, '111', 1, 0, 1, '2022-09-20 19:32:04', '2022-08-12 20:19:49'),
(2, 'Ram Singh', 78, 3, 164, 'ram@yahoo.in', '+91', '8000001203', 'Ram', 82, 'ram', 1, 1, 1, '2022-09-20 19:32:08', '2022-08-13 16:35:34'),
(4, 'Ramesh ji', 32, 10, 100, 'ramesh4@gmail.com', '+91', '8855446633', 'Ram', 0, '$2y$10$2/NNsfIn/nbpG3nJWKlCf.lMkm3tSQzB86h2tF0Oyt5NObeYZCSwK', 1, 0, 1, '2022-09-20 19:32:10', '2022-08-13 18:43:15'),
(5, 'liprat 22', 32, 5, 61, 'shyam345@gmail.com', '+91', '8855663322', 'rahul', 1, '$2y$10$i8JHDVsnRjSYCo5bdpylK.zZhj47v38g4p4uvmYk1cEK4kHpJNZ0K', 1, 1, 1, '2022-09-20 19:32:12', '2022-08-24 13:31:26'),
(6, 'Niraj', 1, 3, 2, 'hello_stu4d2256ent@gmail.com', '+91', '5588669922', 'niraj', 1, '$2y$10$6sBFEddaT.pBzmj95yBYye.sPtB13up0NXrpU1no5pv1ytAyTuzS2', 1, 1, 1, '2022-09-20 19:32:15', '2022-08-24 19:13:56'),
(7, 'Shivam', 1, 3, 18, 'shivam@gmail.com', '+91', '8899663344', 'Shivam', 99, '$2y$10$TjUOWZJY8eBcyeoKtvHvN.g.dPIhhbIzqBpHLRm4XUROxPk.vgaca', 1, 1, 1, '2022-09-20 19:32:16', '2022-08-25 09:25:59'),
(8, 'Rahul sinngh', 78, 16, 3, 'rahul23@gmail.com', '+91', '8855441122', 'Rahul', 40, '$2y$10$FTeasszLWajYo5QNs3P07ODQiqDTW68t64ATCuZVqGpsDQbeICsbC', 1, 0, 1, '2022-10-12 21:56:41', '2022-10-12 21:56:41');

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(35) NOT NULL,
  `country_code` varchar(5) NOT NULL,
  `mobile` varchar(12) NOT NULL,
  `user_id` int(11) NOT NULL,
  `password` varchar(50) NOT NULL,
  `is_admin` int(11) NOT NULL,
  `agent_id` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`id`, `name`, `email`, `country_code`, `mobile`, `user_id`, `password`, `is_admin`, `agent_id`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Neeraj Kandpal', 'niraj@gmail.com', '+91', '8855663322', 0, 'abc', 0, 1, 1, '2022-09-20 19:33:02', '2022-08-11 18:42:10'),
(2, 'Ram', 'ram@gmail.com', '', '8855663399', 0, 'abc', 1, 1, 1, '2022-09-20 19:33:05', '2022-08-11 18:46:54'),
(4, 'liprat4', 'test@g1mail.com', '+91', '8888888888', 0, 'abc', 0, 1, 1, '2022-09-20 19:33:06', '2022-08-11 18:50:14'),
(7, 'Rahul sinngh', 'rahul3@gmail.com', '+91', '8866335522', 69, 'dsefrgdgfg', 0, 1, 1, '2022-09-20 19:33:09', '2022-08-12 12:52:03'),
(10, 'Viran', 'viran@gmail.com', '+91', '8844223355', 42, 'viran@gmail.com', 0, 1, 1, '2022-10-12 22:07:52', '2022-10-12 22:07:52'),
(11, 'admin', 'admin@gmail.com', '+91', '8989676756', 73, 'Password@12', 0, 1, 1, '2023-02-02 15:25:43', '2023-02-02 15:25:43'),
(12, 'harkaran', 'karan129@gmail.com', '+91', '9898999989', 74, 'Password@12', 0, 1, 1, '2023-02-02 15:28:10', '2023-02-02 15:28:10');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_type` int(11) NOT NULL COMMENT '1. Super Admin |\r\n2. Admin | \r\n3. Agent | \r\n4. Student | \r\n5. Student by Agent| \r\n6. Sub Agent| \r\n7. Staff | \r\n8. Student by Sub Agent | \r\n9. Team | \r\n10. Manager |\r\n11. Student by Team |\r\n12. Student by Staf',
  `agent_id` int(11) DEFAULT 0,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `two_factor_secret` text DEFAULT NULL,
  `two_factor_recovery_codes` text DEFAULT NULL,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp(),
  `social_id` varchar(255) DEFAULT NULL,
  `social_type` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `user_type`, `agent_id`, `email_verified_at`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `remember_token`, `created_at`, `updated_at`, `social_id`, `social_type`) VALUES
(1, 'Niraj', 'hello_agent@gmail.com', '$2y$10$.oiw/R8NVOQY2w6j3DEdR.CC8jZcoAH5ZZ274L8dhPMyaa5danzSa', 3, 0, NULL, NULL, NULL, NULL, 'mZNXEzF1uNxGaS3YsarVCRzJEASBmGYkROoEvyCoUrM4iURhxW8PJyxwUpaZ', '2022-09-01 08:58:27', '2022-09-01 08:58:27', NULL, NULL),
(2, 'Shivam', 'shivam@gmail.com', '$2y$10$8ultxrWJJfp42yGGY25Kr.yzuSU.NOzAVZPdiK5AqQWwXmcoSt6yK', 5, 1, NULL, NULL, NULL, NULL, NULL, '2022-09-01 09:00:49', '2022-09-01 09:00:49', NULL, NULL),
(3, 'Ramesh', 'ramesh@yahoo.in', '$2y$10$EaK474zhULKEfKkw4rl6O.bhg3b9fcdBxGFVfGz1dgzrqmfu.ju/.', 5, 2, NULL, NULL, NULL, NULL, NULL, '2022-09-01 11:12:43', '2022-09-01 11:12:43', NULL, NULL),
(4, 'Rima', 'rima@gmail.com', '$2y$10$RmRsT3ZeFuJIjEzhnFIe5.J.DdlWXR3.TYWJKP4oB9A7pybmEw1pa', 5, 1, NULL, NULL, NULL, NULL, NULL, '2022-09-01 11:17:31', '2022-09-01 11:17:31', NULL, NULL),
(5, 'Mona', 'mona@gmail.com', '$2y$10$vlKFe2bVTNXXRYspcfaA8.d28TaVXJNlx2x5JjRxszToyaIgW0GxW', 5, 1, NULL, NULL, NULL, NULL, NULL, '2022-09-01 11:33:30', '2022-09-01 11:33:30', NULL, NULL),
(6, 'Devid', 'devid@gmail.com', '$2y$10$p.uCL9GPVckCE.Y.25Qv.eZ2JWexyvOWA4zIGT5XR..7RiZIh4Vda', 5, 3, NULL, NULL, NULL, NULL, NULL, '2022-09-01 11:40:40', '2022-09-01 11:40:40', NULL, NULL),
(7, 'Rashid', 'rashid@gmail.com', '$2y$10$omHIZr6NX31/Pjm.j/tfn.TE8ltBiAnUjX35QykuY2b0gobzuqwAi', 5, 1, NULL, NULL, NULL, NULL, NULL, '2022-09-01 11:41:38', '2022-09-01 11:41:38', NULL, NULL),
(8, 'mahesh_by Team', 'mahesh@gmail.com', '$2y$10$GzFXY6GBPhyD0dpf79XKDeUlup.WFG0VZI.2U7TVb.E9l53oROEGG', 11, 40, NULL, NULL, NULL, NULL, NULL, '2022-09-01 11:44:30', '2022-09-01 11:44:30', NULL, NULL),
(9, 'Kaushik_by_staff', 'kaushik@gmail.com', '$2y$10$FXRol0aeBaPbh2X5FmfoU.e61flYZQGLVHN0YVUZURVCJnraLdsp.', 12, 41, NULL, NULL, NULL, NULL, NULL, '2022-09-01 11:56:35', '2022-09-01 11:56:35', NULL, NULL),
(10, 'Barkha', 'barkha@gmail.com', '$2y$10$bKS9ZRTo0A9iyuNO.SpdOuLVjdF1yT0TI.MSe9BeqUN81r.D5LONm', 5, 41, NULL, NULL, NULL, NULL, NULL, '2022-09-01 12:02:00', '2022-09-01 12:02:00', NULL, NULL),
(11, 'Sonu by sub agent', 'sonu@t.com', '$2y$10$FeHucH150a0bBLEWIxtOa.1YLYsdRUOAVclhFvpvBav3UHID7Sk..', 8, 42, NULL, NULL, NULL, NULL, NULL, '2022-09-01 12:08:34', '2022-09-01 12:08:34', NULL, NULL),
(15, 'Mandyy', 'mandeystive@xzy.com', '$2y$10$0sDinJjtvx5CQKLiJhJzyu8qIEgMlDLt6YFtzPUd01/D5kFyL.1Tu', 5, 1, NULL, NULL, NULL, NULL, NULL, '2022-09-01 12:56:08', '2022-09-01 12:56:08', NULL, NULL),
(16, 'Vinay', 'vinay@gmail.com', '$2y$10$C7/.tSlv1FMdwh7KXJr/huBVn1fV5q7iKLI4nUVRgSqzDdXJbBFaC', 5, 1, NULL, NULL, NULL, NULL, NULL, '2022-09-01 17:59:30', '2022-09-01 17:59:30', NULL, NULL),
(17, '\r\nCollege', 'college@gmail.com', '$2y$10$C7/.tSlv1FMdwh7KXJr/huBVn1fV5q7iKLI4nUVRgSqzDdXJbBFaC', 3, 0, NULL, NULL, NULL, NULL, NULL, '2022-09-04 11:41:16', '2022-09-04 11:41:16', NULL, NULL),
(18, 'xd', 'hello_ag44ent@gmail.com', '$2y$10$81J2iAXrZBPq79rSuBX5dOlNKlRP5./RfpGMUINOKMLl05WHm115K', 5, 1, NULL, NULL, NULL, NULL, NULL, '2022-09-04 20:42:23', '2022-09-04 20:42:23', NULL, NULL),
(19, 'test1', 'hello_agent551455@gmail.com', '$2y$10$St7DpBaXdgC0YbLwyjmRkOfkSsbmoU/CwKoEuOH51oPbv5CfOmhZe', 5, 1, NULL, NULL, NULL, NULL, NULL, '2022-09-05 18:19:53', '2022-09-05 18:19:53', NULL, NULL),
(20, 'test', 'sv45b@gmail.com', '$2y$10$ImGabffS.syMbHt/y2xkY.BOJMNyB7VoThMDPCsCW8JzwCzPnnnsm', 3, 0, NULL, NULL, NULL, NULL, NULL, '2022-09-06 11:57:54', '2022-09-06 11:57:54', NULL, NULL),
(21, 'test', 'sv4556b@gmail.com', '$2y$10$/ZnqucPkKC7H3nJ5Lki4cuAamYQwAVJbdv8bpW8KfzH8i1Yg4gyVO', 3, 0, NULL, NULL, NULL, NULL, NULL, '2022-09-06 11:59:03', '2022-09-06 11:59:03', NULL, NULL),
(22, 'test', 'sv45564b@gmail.com', '$2y$10$Chk3t.W8nRSDcyT.MuRbLuYT9W6DfhXpJA/4UuTjyyUUvT8at3BQ2', 7, 0, NULL, NULL, NULL, NULL, NULL, '2022-09-06 12:04:57', '2022-09-06 12:04:57', NULL, NULL),
(23, 'test', 'sv455647b@gmail.com', '$2y$10$fWDkMsyTDsqzWBmdGJORqe0VUs.PEw8w7hVq5Ams0uL8IRPXmFraW', 7, 0, NULL, NULL, NULL, NULL, NULL, '2022-09-06 12:05:49', '2022-09-06 12:05:49', NULL, NULL),
(24, 'test', 'sv45025647b@gmail.com', '$2y$10$bgPXAjAfBAOBmadVJwSgwePtiVxobGte/CPtCKIk7EsrQUXk.WWL2', 7, 0, NULL, NULL, NULL, NULL, NULL, '2022-09-06 12:11:18', '2022-09-06 12:11:18', NULL, NULL),
(25, 'test', 'sv450525647b@gmail.com', '$2y$10$DVeofbiPQACAYdv0qdgv/On1bVwap/q85qeDe9DuZ9ndQPCUukw0m', 6, 0, NULL, NULL, NULL, NULL, NULL, '2022-09-06 12:12:06', '2022-09-06 12:12:06', NULL, NULL),
(26, 'DAV', 'dav@gmail.com', '$2y$10$.oiw/R8NVOQY2w6j3DEdR.CC8jZcoAH5ZZ274L8dhPMyaa5danzSa', 6, 0, NULL, NULL, NULL, NULL, NULL, '2022-09-06 12:21:26', '2022-09-06 12:21:26', NULL, NULL),
(27, 'DAV', 'dav@yahoo.in', '$2y$10$Owebdp7sgjCZnM8Ji4KD1uGb1VCCmmXnfyXgISj3ZeMOMRGv09fD2', 6, 0, NULL, NULL, NULL, NULL, NULL, '2022-09-06 12:34:29', '2022-09-06 12:34:29', NULL, NULL),
(28, 'Ram', 'ram111@gmail.com', '$2y$10$Ssn/TJM59ZY0xvOFdXgRme.QiA2a4dCQ.rNHNFoUTIpwwxUQR2iYW', 5, 1, NULL, NULL, NULL, NULL, NULL, '2022-09-07 19:37:50', '2022-09-07 19:37:50', NULL, NULL),
(29, 'Niraj', 'lipra2t@gmail.com', '$2y$10$AwLOnAo5.t9N7i06Us3d.On8I8N0zCl2qHVFgn.KiBndBWcIh8aPS', 2, 0, NULL, NULL, NULL, NULL, NULL, '2022-09-08 19:36:02', '2022-09-08 19:36:02', NULL, NULL),
(30, 'Niraj', 'lipra24t@gmail.com', '$2y$10$lu/HzISBNyf9DYcxvX0AyuQDWkKakF9tkVS5Dy7A4Y9TL1iYraAie', 2, 0, NULL, NULL, NULL, NULL, NULL, '2022-09-08 19:46:29', '2022-09-08 19:46:29', NULL, NULL),
(31, 'test', 'test34@GMAIL.COM', '$2y$10$LI1hwPh8RcfaLxvTWTaxKe./KD7cR/C20B2oclmOwGCLM8YVzGQqK', 5, 1, NULL, NULL, NULL, NULL, NULL, '2022-09-13 17:53:58', '2022-09-13 17:53:58', NULL, NULL),
(32, 'Niraj21', 'niraj21@gmail.com', '$2y$10$LbWcjOlHd.KKDEptFJ3v2eubd.Lg6iaPDkcOOOWW2J/NG5LHElJAK', 3, 0, NULL, NULL, NULL, NULL, NULL, '2022-09-13 18:41:57', '2022-09-13 18:41:57', NULL, NULL),
(33, 'rrggdf', 'abc@gmail.com', '$2y$10$LCwqxi2xNBQx5GrY3YklhuY8duu74tYPkCVhf/B8h.sBUz4p43HGe', 2, 0, NULL, NULL, NULL, NULL, NULL, '2022-09-13 18:43:44', '2022-09-13 18:43:44', NULL, NULL),
(34, 'zaic', 'zaic@gmail.com', '$2y$10$twAeEdQZLJZGHzeQvV.4iOd2aWQRl4YACK8LFjDOY7l2fWvCeaXAq', 3, 0, NULL, NULL, NULL, NULL, NULL, '2022-09-13 18:57:11', '2022-09-13 18:57:11', NULL, NULL),
(35, 'student_pks', 'student@gmail.com', '$2y$10$h5ofZuBsfnhSXFOT/DcZ4efkJYXb1hfz8dNXdCZVRu4JFLbS/QHGy', 5, 3, NULL, NULL, NULL, NULL, NULL, '2022-09-13 18:58:34', '2022-09-13 18:58:34', NULL, NULL),
(36, 'student', 'student1@gmail.com', '$2y$10$J/BJ/BhKcSF5i0QDzRooCePAaKZWP.KOocnmy9FSRmPN4NFOxSohO', 8, 2, NULL, NULL, NULL, NULL, NULL, '2022-09-13 19:00:14', '2022-09-13 19:00:14', NULL, NULL),
(37, 'Narayan College', 'nc@gmail.com', '$2y$10$Mw9RryCckkfBFj3jhTTIoeTQZgJxjUEuk9QNrQXBG.Vv6EpN0CctG', 3, 0, NULL, NULL, NULL, NULL, NULL, '2022-09-13 19:09:56', '2022-09-13 19:09:56', NULL, NULL),
(38, 'fadasda', 'kalakargmail@gmail.com', '$2y$10$Ofb7pcAj9nkPfveebiV3E.9lp8q.giwN/1f1K8Zg4lBU80fvAPu4u', 5, 2, NULL, NULL, NULL, NULL, NULL, '2022-09-14 18:38:07', '2022-09-14 18:38:07', NULL, NULL),
(39, 'Test_nks', 'test87@gmail.com', '$2y$10$wAqh9Yu71yZcl3Fh3z47ROt3kiPi86vzmWuTssCYxwk6XWt1WeH1C', 5, 4, NULL, NULL, NULL, NULL, NULL, '2022-09-25 18:25:50', '2022-09-25 18:25:50', NULL, NULL),
(40, 'Rahul sinngh', 'rahul23@gmail.com', '$2y$10$u07i2G5D28sWiXlnJE7DXuZY7Kjz7VLOhZx5NdtN29tz0uYQqscWG', 6, 1, NULL, NULL, NULL, NULL, NULL, '2022-10-12 21:56:41', '2022-10-12 21:56:41', NULL, NULL),
(42, 'Viran', 'viran@gmail.com', '$2y$10$9VCk4rYu3GfcGql85qd8.eJWdEWWt6tcG2tAAoeOQgJjSbs81wGnu', 7, 1, NULL, NULL, NULL, NULL, NULL, '2022-10-12 22:07:51', '2022-10-12 22:07:51', NULL, NULL),
(43, 'Karan', 'karan@gmail.com', '$2y$10$Z364k6dpAcajSKQr4rU9IOZPvWW8/foA3lfcG/pvEhByOnXuFH0Aq', 5, 1, NULL, NULL, NULL, NULL, NULL, '2022-10-21 17:36:13', '2022-10-21 17:36:13', NULL, NULL),
(44, 'Karan', 'karan1@gmail.com', '$2y$10$znUoMBBz1U7tf9Q8F0aThuef.8rjVKCo3uqOElTCibWuuef5aENoe', 5, 1, NULL, NULL, NULL, NULL, NULL, '2022-10-21 17:36:22', '2022-10-21 17:36:22', NULL, NULL),
(45, 'Karan', 'karan123q@gmail.com', '$2y$10$E8slhtc.EKxy/lU.TsmcUOMsxRV79Qyftv9vEyjjS9knvKFmTgbOC', 5, 1, NULL, NULL, NULL, NULL, NULL, '2022-10-21 17:36:37', '2022-10-21 17:36:37', NULL, NULL),
(46, 'Karan', '23q@gmail.com', '$2y$10$nvBg2VZwbXySrsqCjyFm6elJyZwXe5VaNK0JxSFZYev84sYoiXJh6', 5, 1, NULL, NULL, NULL, NULL, NULL, '2022-10-21 17:36:55', '2022-10-21 17:36:55', NULL, NULL),
(47, 'Karan', 'uu@gmail.com', '$2y$10$82./mtXORVblSw4./RV5Gu62hlZ7c7r./xSuBXzYu/6nUD0o3D4V.', 5, 1, NULL, NULL, NULL, NULL, NULL, '2022-10-21 17:41:22', '2022-10-21 17:41:22', NULL, NULL),
(48, 'Rekha', 'info@toponsearch.com', '$2y$10$Y8uwvMPOMID2PW.5PdryNOCso.vCpsi/GNtM0yi.wk97kDhD.bbMG', 5, 1, NULL, NULL, NULL, NULL, NULL, '2022-11-08 23:50:13', '2022-11-08 23:50:13', NULL, NULL),
(49, 'Super Admin', 'superadmin@gmail.com', '$2y$10$ErdfrbW60kCOsCs5IkYNJuDjGgvYITwj8HjEWmVBdcjV8eg7Wu7em', 1, 0, NULL, NULL, NULL, NULL, NULL, '2022-11-12 22:54:45', '2022-11-12 22:54:45', NULL, NULL),
(50, 'IITT', 'iitt@gmail.com', '$2y$10$3qI.OknhHqDm4Fh8EexF0eYYAQUZDcIO6vNHa9xF8rUntQ2RbBzSK', 2, 0, NULL, NULL, NULL, NULL, NULL, '2022-12-09 16:37:24', '2022-12-09 16:37:24', NULL, NULL),
(51, 'karans', 'karan12@gmail.com', '$2y$10$I7g2nxCHTJzJ6LCzEnSAyu.kldooWvxmuD0geX/XZZoKTzP/X3hXa', 5, 1, NULL, NULL, NULL, NULL, NULL, '2022-12-20 18:08:37', '2022-12-20 18:08:37', NULL, NULL),
(52, 'Mahendra', 'm.sahni@gmail.com', '$2y$10$7Ei9BMM7U306Jvz7yOqLL.MrgA02qtrlVNK4QMsEwEjledj8Y.4QG', 5, 1, NULL, NULL, NULL, NULL, NULL, '2022-12-26 09:38:08', '2022-12-26 09:38:08', NULL, NULL),
(53, 'Harkaran', 'karantest@gmail.com', '$2y$10$XpYegvD9cm3T0OkaTaBDwOzS5pAVb/KQJC4wecLs6rXwSCz2WsaC.', 5, 1, NULL, NULL, NULL, NULL, NULL, '2022-12-27 16:55:54', '2022-12-27 16:55:54', NULL, NULL),
(54, 'Mandy', 'm.sahni@hotmail.com', '$2y$10$lAE2TcXOfd4dxoWAuKxy8e9eXWrlqzOEwQNyVLLcBPI9MCDhLF/BK', 5, 1, NULL, NULL, NULL, NULL, NULL, '2022-12-27 18:16:04', '2022-12-27 18:16:04', NULL, NULL),
(55, 'karan', 'karan166@gmail.com', '$2y$10$3Diu6.1iLEqa6TRaU2sUR.rdGX/3jWZluo9pt43m3xHyYHJ4SSYpu', 4, 0, NULL, NULL, NULL, NULL, NULL, '2023-01-06 18:01:55', '2023-01-06 18:01:55', NULL, NULL),
(56, 'Santoshi', 'santoshise3012@gmail.com', '$2y$10$GTObLL0/tkj.4E46MRmYOuWYLd8YSSQq.XNcby5z0cHl8YZMW8UUy', 5, 1, NULL, NULL, NULL, NULL, NULL, '2023-01-16 06:48:01', '2023-01-16 06:48:01', NULL, NULL),
(57, 'Harkaran', 'harkaran0001@gmail.com', '$2y$10$sk3CDQ0HnFT362M8m8A0Oug1rcg1dX60v/Gww7LaZc.O0/YYOrNjW', 5, 1, NULL, NULL, NULL, NULL, NULL, '2023-01-16 18:40:16', '2023-01-16 18:40:16', NULL, NULL),
(58, 'Harsh', 'sahaniharsh234@gmail.com', '$2y$10$Ow3UpVzt4O9Zj5k1IV/of.a1tnJfHAcLdZwm8s0lOxXmzIRIhgQfq', 5, 1, NULL, NULL, NULL, NULL, NULL, '2023-01-16 19:49:14', '2023-01-16 19:49:14', NULL, NULL),
(59, 'Mahendra', 'mahendra_sahani@hotmail.com', '$2y$10$Iyg3ZRCg6FnlQCdmlvKwrOHHmXs.GyzpVW2CCrcNX.qVAgjAXiyOy', 5, 1, NULL, NULL, NULL, NULL, NULL, '2023-01-16 21:13:07', '2023-01-16 21:13:07', NULL, NULL),
(60, 'mandy', 'digitaldesigntechnology2015@gmail.com', '$2y$10$.aLBK6m8az7hnKCNe2lcqefEDWZihAMoGGmZCGO2i.13ZAumTT89a', 5, 1, NULL, NULL, NULL, NULL, NULL, '2023-01-17 08:32:38', '2023-01-17 08:32:38', NULL, NULL),
(61, 'karantest', 'tester@gmail.com', '$2y$10$iTapx5CMPCL6d.TFjamGXO1RAs137CxGiKz4Hjn7vtYhyfD.OdThC', 5, 1, NULL, NULL, NULL, NULL, NULL, '2023-01-23 17:23:39', '2023-01-23 17:23:39', NULL, NULL),
(62, 'Harkaran', 'karan_agent@gmail.com', '$2y$10$pvEOVvlJS2TaLfQGpuqaIuLK9rZBXWZPGGZtDje5Yk5eIoW0YWqBG', 3, 0, NULL, NULL, NULL, NULL, NULL, '2023-01-24 17:19:49', '2023-01-24 17:19:49', NULL, NULL),
(63, 'karan', 'garchakaran@gmail.com', '$2y$10$C8IsjEFFlQvJS8EHL9xyn.ZhaijI8ykuBsrpn9cSGjo/Ynez0fBI.', 5, 62, NULL, NULL, NULL, NULL, NULL, '2023-01-24 17:27:40', '2023-01-24 17:27:40', NULL, NULL),
(64, 'jaskaran', 'teester_karan@gmail.com', '$2y$10$xaXjiT4q3SA0SF5txtooieMRJstqy6IPLwJ06Fdoq8UmeCIMkaBA6', 5, 1, NULL, NULL, NULL, NULL, NULL, '2023-01-26 17:31:18', '2023-01-26 17:31:18', NULL, NULL),
(65, 'kitan', 'new_teest@gmail.com', '$2y$10$sOYvB67HaJhRlcBzzN0h5uNmMSQNaaQU44TSTEs/SOCNleIp2Cl6y', 5, 1, NULL, NULL, NULL, NULL, NULL, '2023-01-27 14:43:47', '2023-01-27 14:43:47', NULL, NULL),
(66, 'tester', 'news_karan@gmail.com', '$2y$10$pb8aC1TDsmit9aPuxKpwNe0.VFb2fL/f1lxiU2lLRyihX/Ka2Ivw2', 5, 1, NULL, NULL, NULL, NULL, NULL, '2023-01-27 16:02:05', '2023-01-27 16:02:05', NULL, NULL),
(67, 'tester', 'news_karan@gmail.com', '$2y$10$Yun6j4huWztp/4.peIF.p.A1kTDRrnXiSXVxn9S2SSQSTGoEkD/ae', 5, 1, NULL, NULL, NULL, NULL, NULL, '2023-01-27 16:02:05', '2023-01-27 16:02:05', NULL, NULL),
(68, 'test5', 'test5@gmail.com', '$2y$10$yFfehGsDebPGGAXW5Wuw5u.F15EG2ZxxlkTmLNATn1IA4Nh6rzUZi', 5, 1, NULL, NULL, NULL, NULL, NULL, '2023-01-27 17:26:58', '2023-01-27 17:26:58', NULL, NULL),
(69, 'yum', 'karan_newss@gmail.com', '$2y$10$iSeX5603KsPNylI0JRXj0ec/SHMywGl7cbUydgZhSXDVANnbt5f22', 5, 1, NULL, NULL, NULL, NULL, NULL, '2023-01-27 19:28:37', '2023-01-27 19:28:37', NULL, NULL),
(70, 'trt', 'karan123@gmail.com', '$2y$10$MbGmdm1ouND/gtyl1Drz9eSqCRUANlaGsKK6Tmf8BRnsS8AOZ9k7.', 4, 0, NULL, NULL, NULL, NULL, NULL, '2023-01-27 20:12:13', '2023-01-27 20:12:13', NULL, NULL),
(71, 'yum', 'yum_test@gmail.com', '$2y$10$ZpD3ZObAM12ri7YYqa6pEuf2VZvB0mlZe9Wzw16rGgyxo4dufe6De', 5, 1, NULL, NULL, NULL, NULL, NULL, '2023-01-31 16:59:49', '2023-01-31 16:59:49', NULL, NULL),
(72, 'Bunty', 'har@gmail.com', '$2y$10$DXrleIpTsgB25kw8mpByK.1ZMNyX6Vc5PBHttQhfMbDmaFAEHNEVW', 5, 1, NULL, NULL, NULL, NULL, NULL, '2023-02-02 14:58:36', '2023-02-02 14:58:36', NULL, NULL),
(73, 'admin', 'admin@gmail.com', '$2y$10$f34JlPbxnE5MXPDxxU8jRu9ns5dfX4AlIlV.ZscBbQ/V.Q2oN2rAa', 7, 1, NULL, NULL, NULL, NULL, NULL, '2023-02-02 15:25:43', '2023-02-02 15:25:43', NULL, NULL),
(74, 'harkaran', 'karan129@gmail.com', '$2y$10$OvmOIQ1ZLqy/RGhhiPh4GurA3NZcF8rJDYloSmcJJG.Ytsn0j9CL2', 7, 1, NULL, NULL, NULL, NULL, NULL, '2023-02-02 15:28:10', '2023-02-02 15:28:10', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agent_details`
--
ALTER TABLE `agent_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `colleges`
--
ALTER TABLE `colleges`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `college_feature_questions`
--
ALTER TABLE `college_feature_questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `college_pictures`
--
ALTER TABLE `college_pictures`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `college_programs`
--
ALTER TABLE `college_programs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `college_programs_test_scores`
--
ALTER TABLE `college_programs_test_scores`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `current_status`
--
ALTER TABLE `current_status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `documents_requirment`
--
ALTER TABLE `documents_requirment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `education`
--
ALTER TABLE `education`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `english_exam_type`
--
ALTER TABLE `english_exam_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `grading_scheme`
--
ALTER TABLE `grading_scheme`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `invice`
--
ALTER TABLE `invice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `my_profile`
--
ALTER TABLE `my_profile`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notes`
--
ALTER TABLE `notes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notice_board`
--
ALTER TABLE `notice_board`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `other_schools_attended`
--
ALTER TABLE `other_schools_attended`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment_status`
--
ALTER TABLE `payment_status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `permit_visa`
--
ALTER TABLE `permit_visa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `pictures`
--
ALTER TABLE `pictures`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post_secondary_discipline`
--
ALTER TABLE `post_secondary_discipline`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post_secondary_sub_categories`
--
ALTER TABLE `post_secondary_sub_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `state`
--
ALTER TABLE `state`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_applications`
--
ALTER TABLE `student_applications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_education_pictures`
--
ALTER TABLE `student_education_pictures`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_emergency_contact_pictures`
--
ALTER TABLE `student_emergency_contact_pictures`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_english_test_score_pictures`
--
ALTER TABLE `student_english_test_score_pictures`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_passport_and_travel_history_pictures`
--
ALTER TABLE `student_passport_and_travel_history_pictures`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_profile`
--
ALTER TABLE `student_profile`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_records`
--
ALTER TABLE `student_records`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_uploaded_docs`
--
ALTER TABLE `student_uploaded_docs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_work_experience_pictures`
--
ALTER TABLE `student_work_experience_pictures`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_agents`
--
ALTER TABLE `sub_agents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
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
-- AUTO_INCREMENT for table `agent_details`
--
ALTER TABLE `agent_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1604;

--
-- AUTO_INCREMENT for table `colleges`
--
ALTER TABLE `colleges`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `college_feature_questions`
--
ALTER TABLE `college_feature_questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=132;

--
-- AUTO_INCREMENT for table `college_pictures`
--
ALTER TABLE `college_pictures`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `college_programs`
--
ALTER TABLE `college_programs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `college_programs_test_scores`
--
ALTER TABLE `college_programs_test_scores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `country`
--
ALTER TABLE `country`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `current_status`
--
ALTER TABLE `current_status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `documents_requirment`
--
ALTER TABLE `documents_requirment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `education`
--
ALTER TABLE `education`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `english_exam_type`
--
ALTER TABLE `english_exam_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `grading_scheme`
--
ALTER TABLE `grading_scheme`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `invice`
--
ALTER TABLE `invice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `my_profile`
--
ALTER TABLE `my_profile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `notes`
--
ALTER TABLE `notes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `notice_board`
--
ALTER TABLE `notice_board`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `other_schools_attended`
--
ALTER TABLE `other_schools_attended`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `payment_status`
--
ALTER TABLE `payment_status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=99;

--
-- AUTO_INCREMENT for table `permit_visa`
--
ALTER TABLE `permit_visa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pictures`
--
ALTER TABLE `pictures`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `post_secondary_discipline`
--
ALTER TABLE `post_secondary_discipline`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `post_secondary_sub_categories`
--
ALTER TABLE `post_secondary_sub_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `state`
--
ALTER TABLE `state`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `student_applications`
--
ALTER TABLE `student_applications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `student_education_pictures`
--
ALTER TABLE `student_education_pictures`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `student_emergency_contact_pictures`
--
ALTER TABLE `student_emergency_contact_pictures`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `student_english_test_score_pictures`
--
ALTER TABLE `student_english_test_score_pictures`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `student_passport_and_travel_history_pictures`
--
ALTER TABLE `student_passport_and_travel_history_pictures`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `student_profile`
--
ALTER TABLE `student_profile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `student_records`
--
ALTER TABLE `student_records`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=451;

--
-- AUTO_INCREMENT for table `student_uploaded_docs`
--
ALTER TABLE `student_uploaded_docs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `student_work_experience_pictures`
--
ALTER TABLE `student_work_experience_pictures`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sub_agents`
--
ALTER TABLE `sub_agents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
