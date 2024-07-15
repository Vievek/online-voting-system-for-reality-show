-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 06, 2024 at 11:11 PM
-- Server version: 8.4.0
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `online-voting-system`
--

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `id` int NOT NULL,
  `Fname` text NOT NULL,
  `Lname` text NOT NULL,
  `email` text NOT NULL,
  `country` text NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`id`, `Fname`, `Lname`, `email`, `country`, `message`) VALUES
(13, 'Thaneswaran', 'Vievegan', 'vieveganthaneswaran@gmail.com', 'Sri Lanka', 'hi'),
(28, 'Thaneswaran', 'Vievegan', 'vieveganthaneswaran@gmail.com', 'Sri Lanka', 'jknjknn'),
(29, 'Thaneswaran', 'Vievegan', 'vieveganthaneswaran@gmail.com', 'Sri Lanka', 'cygvjhbk'),
(30, 'su', 'kjncds', 'thanesthiv19@gmail.com', 'Sri Lanka', 'welcome'),
(32, 'nklm m,', 'Vievegan', 'vieveganthaneswaran@gmail.com', 'Sri Lanka', 'biuhjkbmn'),
(34, 'hjbfgtv', 'virat', 'virat@gmail.com', 'Sri Lanka', 'ghvjhb'),
(35, 'Thaneswaran', 'Vievegan', 'vieveganthaneswaran@gmail.com', 'Sri Lanka', 'tufygjkjk'),
(36, 'Thaneswaran', 'Vievegan', 'vieveganthaneswaran@gmail.com', 'Sri Lanka', 'tfyugihujkl'),
(37, 'Thaneswaran', 'Vievegan', 'vieveganthaneswaran@gmail.com', 'Sri Lanka', 'esdtryfghbj'),
(38, 'Thaneswaran', 'Vievegan', 'vieveganthaneswaran@gmail.com', 'india', 'ufjhkh'),
(40, 'hjbfgtv', 'virat', 'virat@gmail.com', 'Sri Lanka', 'hkbj');

-- --------------------------------------------------------

--
-- Table structure for table `contestants`
--

CREATE TABLE `contestants` (
  `CID` int NOT NULL,
  `name` text NOT NULL,
  `img` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  `performance` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  `votes` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `contestants`
--

INSERT INTO `contestants` (`CID`, `name`, `img`, `description`, `performance`, `votes`) VALUES
(1, 'Maanasi G Kannan', 'img/Contestants/1.Maanasi G Kannan.jpeg.jpg', 'Maanasi G Kannan is an Indian Tamil film singer and popular dancer and Also She Is one of the contestant in Super Singer Season 8. she has been a Carnatic and Bhajan singer for the past 7 years.She has lot of fans followers on social media sites with millions of followers. When read her post comments, everything is positive message like excellent dance and performance. Once you saw her dance then you are never missed out any videos.', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/D4wuOdOBVD0?si=Klj6p-he0mc6FDiM\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" referrerpolicy=\"strict-origin-when-cross-origin\" allowfullscreen></iframe>', 68),
(2, 'Pooja Venkat', 'img/Contestants/2.Pooja Venkat.jpg', 'Pooja Venkat is a well-known performer in the Pop music genre who hails from the dynamic nation of India. She has won over fans all over the world with her distinctive brand of Indian pop. Pooja is a force to be reckoned with in the music business thanks to her entrancing stage presence and melodic voice.In conclusion, Pooja Venkat is a talented musician who has distinguished herself in the Pop music industry. She stands out and demonstrates her enormous talent and inventiveness with her distinctive Indian Pop style, which incorporates traditional elements. Pooja continues to attract fans and have a big impact on the music business with her alluring voice and contagious charisma.', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/siU4XsMLdPc?si=j5Wizb8tsO-H8MZG\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" referrerpolicy=\"strict-origin-when-cross-origin\" allowfullscreen></iframe>', 98),
(3, 'Anand Aravindakshan', 'img/Contestants/3.anand-aravindakshan.png', 'Anand Aravindakshan, born in Chennai in 1989, is a talented singer and sound engineer. He began studying Indian classical music at six and gained confidence through his mother\'s music lessons. Aravindakshan won the Malayalam reality program Gandharva Sangeetham and gained popularity on Vijay TV\'s \"Super Singer.\" He has performed in movies like \"Kodi\" and has performed with legends like Veena Rajesh Vaidhya, Stefen Devassy, K.S. Chitra, and Dr. S.P. Balasubrahmanyam.', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/puao-iO1Z1w?si=I8_Qhl7Zpo16XCFI\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" referrerpolicy=\"strict-origin-when-cross-origin\" allowfullscreen></iframe>', 66),
(4, 'Bharath K. Rajesh', 'img/Contestants/4.Bharath K. Rajesh.jpg', 'Bharath K. Rajesh is an Indian singer who featured in television talent shows including Super Singer and Sa Re Ga Ma Pa. He was runner up of Super Singer season 8 which was telecast on Vijay TV.\r\nThe competition promised its winner an opportunity to sing their first song as a playback singer for best music director.', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/6r34jJol8LU?si=1ilF2YqGp1nUKnqF\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" referrerpolicy=\"strict-origin-when-cross-origin\" allowfullscreen></iframe>', 100),
(5, 'Anu Anand', 'img/Contestants/5.Anu Anand.jpg', 'Anu Anand is a Playback Singer who is one of the contestants of Super Singer Season 8 conducted by Vijay TV.\r\nShe has sung two songs for the Tamil film Pannaiyarum Padminiyum - Enakkaaga Poranthaayae and Onakkaga Poranthaenae, directed by Arun Kumar. She has later sung Nanba Puthu Anbal songs for the 2019 film Karuthukal Pathivu Sei directed by Rahul Paramahamsa. She has also sung songs in Telugu films.', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/6VmyCz-8_qE?si=JiPW1dsEN6rW4UWv\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" referrerpolicy=\"strict-origin-when-cross-origin\" allowfullscreen></iframe>', 41),
(6, 'Rakshita Suresh', 'img/Contestants/6.Rakshita Suresh.jpg', 'Rakshita Suresh mare her debut as a playback singer for Ilayaraja, she has sung many more singles in Tamil, Hindi, Kannada and Telugu. The first song that she recorded in Telugu was in 2015 for the film Yevade Subramanyam starring Telugu actor Nani. She delivered many solo concerts globally, both in India and abroad, like Mysuru \"Yuva Dasara\".', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/LOtSbbXeWO0?si=zj6jTdy4vLuF1XV7\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" referrerpolicy=\"strict-origin-when-cross-origin\" allowfullscreen></iframe>', 92),
(7, 'Priyanka NK', 'img/Contestants/7. Priyanka NK.jpg', 'Priyanka NK is a singer who has an unlimitedfan base for her fairly voice. She participated inside the Super Singer Juniors the place she travelled till the semi-fnals of the current. She is popularly typically often called Super Singer\r\nPriyanka or Priyanka Super Singer. Her songs have been heard larger than a million events on YouTube and totally different social media.  Check out beneath for Priyanka Super Singer Wiki, Biography, Songs, Videos, Profle, Contact Particulars, Family and others', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/aM7r6ubEAIo?si=8C5TAUhKpmkaTM1O\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" referrerpolicy=\"strict-origin-when-cross-origin\" allowfullscreen></iframe>', 58),
(8, 'Abhijith Anilkumar', 'img/Contestants/8.Abhijith Anilkumar.jpg', 'Abhijith Super Singer 9 Contestant\r\nAbhijit is a playback singer who has appeared in Tamil and Telugu films. Abhijit is the top 20 contestant of Super Singer. She was one among the top 33 contestants selected for Super Singer 9. The 2022 – 2023 season of Super singer has been telecasting on Vijay television . Check out below for Super Singer Priya Songs, Photos, Wiki, Biography, Age and other personal details.', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/O1tZNf8YM6w?si=NksmM6dWFS4i87SE\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" referrerpolicy=\"strict-origin-when-cross-origin\" allowfullscreen></iframe>', 56),
(9, 'Priya Jerson', 'img/Contestants/9.Priya Jerson.jpg', 'Priya Jerson is an aspiring singer from Kerala,India who is a holder of ATCL and Licentiate of Trinity college London (LTCL) in Vocal Repertoire with Distinction, grade 8 artist in Western Classical Singing from Trinity London. Now a full-time recording artist/ Live performer and Vocal trainer.\r\nShe is a versatile singer and performer and has trained in both Western and Eastern music. She sings in various genres and languages and continues to aspire to learn more!', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/TY_7W9w5NTc?si=Jd7skDJs79ysyQKg\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" referrerpolicy=\"strict-origin-when-cross-origin\" allowfullscreen></iframe>', 40),
(10, 'Vrusha Balu', 'img/Contestants/10.Vrusha Balu.jpg', 'Vrusha Balu is an Indian playback singer, She also participants in the Super Singer Season 8, it s a star Vijay TV popular singing reality show. Her date of birth not know, but she is also browned and brought up in Coimbatore, India. Below here Vrusha Balu wiki Biography and many more.', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/-EGJHDRZvuQ?si=1RB0gcdosiS8Dn8U\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" referrerpolicy=\"strict-origin-when-cross-origin\" allowfullscreen></iframe>', 45),
(11, 'abhilash venkitachalam', 'img/Contestants/11. abhilash venkitachalam.jpg', 'Abhilash started his journey as a singer. His songs are released in the Tamil language. He was a contestant of Super Singer Season 8. He is a very passionate and an aspiring singer from Thiruvananthapuram, Kerala. Abhilash has participated in many singing, musical concerts, competition, and shows. Though he belongs from Kerala, he has a potential to sing in Tamil, Tulu, English, and Hindi Languages.', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/WEPf0WjT2b4?si=RQ7-k7ABIikxDBli\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" referrerpolicy=\"strict-origin-when-cross-origin\" allowfullscreen></iframe>', 56),
(12, 'Sridhar Sena', 'img/Contestants/12.Sridhar Sena.jpg', 'Super Singer Season 8, the popular reality show has finally found its winner. Sridhar Sena, the supremely talented singer who made a huge fans base with his stint in the show, has taken home the winners trophy of this season. The winner was crowned by the renowned musician Anirudh Ravichander, who attended the Super Singer Season 8 grand finale as the chief guest.Sridhar Sena rose to prominence after competing in Super Singer 8, a reality music competition broadcast on Star Vijay TV.  He composes music, besides singing.', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/FwYMEpajkuA?si=M5JVCZK_8qcV8ua_\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" referrerpolicy=\"strict-origin-when-cross-origin\" allowfullscreen></iframe>', 32);

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int NOT NULL,
  `UID` int NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `subject` text NOT NULL,
  `message` text NOT NULL,
  `services` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `UID`, `name`, `email`, `subject`, `message`, `services`) VALUES
(1, 1, 'Thaneswaran Vievegan', 'vieveganthaneswaran@gmail.com', 'bikbnj', 'hjnbouj', 'Account Assistance'),
(2, 1, 'mathu', 'thanesthiv19@gmail.com', 'jnonl', 'oubn', 'Array'),
(3, 1, 'jbb', 'innjkn@vu', 'j bkjs', 'b hjkn', 'Array'),
(4, 7, '', '', '', '', ''),
(5, 7, '', '', '', '', ''),
(6, 7, 'Thaneswaran Vievegan', 'vieveganthaneswaran@gmail.com', 'bikbnj', 'tyfujhghj', 'Array');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  `user_type` text NOT NULL,
  `bio` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  `gender` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`, `user_type`, `bio`, `gender`) VALUES
(7, 'jayaram', 'innjkn@vu', '123', 'user', 'hi', 'Male'),
(8, 'Thaneswaran Vievegan', 'vieveganthaneswaran@gmail.com', '123', 'admin', NULL, NULL),
(9, 'kenny', 'IT23259720@my.sliit.lk', '123', 'user', NULL, NULL),
(10, 'mnklnd Vievegan', 'vieveganthaneswaran2@gmail.com', '123', 'user', NULL, NULL),
(11, 'shanuja', 'thanesthiviyan19@gmail.com', '123', 'user', NULL, NULL),
(12, 'Thiru', 'thanesthi19@gmail.com', '123', 'user', NULL, NULL),
(13, 'mass', 'iamthekingofmylife21@gmail.com', '123', 'user', NULL, NULL),
(14, 'boss', 'virat18@gmail.com', '123', 'user', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_interaction`
--

CREATE TABLE `user_interaction` (
  `id` int NOT NULL,
  `UID` int NOT NULL,
  `enjoyment_level` int NOT NULL,
  `agree_elimination` text NOT NULL,
  `wildcard_decision` text NOT NULL,
  `next_week_guest` text NOT NULL,
  `forum_post` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `user_interaction`
--

INSERT INTO `user_interaction` (`id`, `UID`, `enjoyment_level`, `agree_elimination`, `wildcard_decision`, `next_week_guest`, `forum_post`) VALUES
(1, 1, 1, 'No', 'Yes', 'Celebrity A', 'ghuihkj'),
(2, 1, 2, 'Yes', 'Yes', 'Celebrity A', 'uvujb'),
(3, 1, 2, 'Yes', 'No', 'Celebrity C', 'vguhjb kj'),
(4, 1, 3, 'No', 'Yes', 'Celebrity B', 'bguihk'),
(5, 1, 3, 'No', 'Yes', 'Celebrity B', 'ytcfvjb'),
(6, 1, 3, 'No', 'Yes', 'Celebrity B', 'bguihk'),
(7, 1, 3, 'No', 'Yes', 'Celebrity B', 'bguihk'),
(8, 1, 3, 'No', 'Yes', 'Celebrity B', 'bguihk'),
(9, 1, 3, 'No', 'Yes', 'Celebrity B', 'bguihk'),
(10, 1, 3, 'No', 'Yes', 'Celebrity B', 'vivek'),
(11, 1, 2, 'No', 'No', 'Celebrity B', 'hi'),
(12, 1, 1, 'Yes', 'Yes', 'Celebrity A', 'bhjkbk'),
(13, 1, 2, 'No', 'Yes', 'Celebrity A', 'tuuhbkjnk'),
(14, 1, 1, 'No', 'Yes', 'Celebrity A', 'u'),
(15, 7, 2, 'Yes', 'No', 'Celebrity A', 'likai'),
(16, 7, 3, 'Yes', 'No', 'Celebrity B', 'nom;pokjjhi'),
(17, 7, 2, 'Yes', 'No', 'Celebrity A', 'iyvbgej'),
(18, 10, 2, 'Yes', 'No', 'Celebrity C', 'tfuyijol;'),
(19, 10, 2, 'No', 'No', 'Celebrity A', 'gtfhgkl'),
(20, 7, 2, 'Yes', 'No', 'Celebrity A', 'ugvhjbjm'),
(21, 7, 2, 'Yes', 'No', 'Celebrity A', 'jmm'),
(22, 7, 2, 'Yes', 'No', 'Celebrity A', 'iugh'),
(23, 7, 3, 'No', 'Yes', 'Celebrity B', 'ycu');

-- --------------------------------------------------------

--
-- Table structure for table `voting`
--

CREATE TABLE `voting` (
  `VID` int NOT NULL,
  `UID` int NOT NULL,
  `name` text NOT NULL,
  `Contestant` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `voting`
--

INSERT INTO `voting` (`VID`, `UID`, `name`, `Contestant`) VALUES
(1, 1, 'vievegan', 'Anand Aravindakshan'),
(2, 2, 'thiviyan', 'Anand Aravindakshan'),
(3, 2, 'thiviyan', 'Pooja Venkat'),
(4, 2, 'thiviyan', 'Anu Anand'),
(5, 2, 'thiviyan', 'Pooja Venkat'),
(7, 2, 'thiviyan', 'Pooja Venkat'),
(9, 2, 'thiviyan', 'Anu Anand'),
(10, 3, 'senethma', 'Priyanka NK'),
(12, 1, 'vievegan', 'Pooja Venkat'),
(13, 1, 'vievegan', 'Pooja Venkat'),
(14, 1, 'vievegan', 'Rakshita Suresh'),
(16, 5, 'kenny', 'Maanasi G Kannan'),
(17, 7, 'jayaram', 'Rakshita Suresh'),
(18, 9, 'kenny', 'Anu Anand'),
(19, 11, 'shanuja', 'Maanasi G Kannan');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contestants`
--
ALTER TABLE `contestants`
  ADD PRIMARY KEY (`CID`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_interaction`
--
ALTER TABLE `user_interaction`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `voting`
--
ALTER TABLE `voting`
  ADD PRIMARY KEY (`VID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `contestants`
--
ALTER TABLE `contestants`
  MODIFY `CID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `user_interaction`
--
ALTER TABLE `user_interaction`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `voting`
--
ALTER TABLE `voting`
  MODIFY `VID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
