-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 16, 2024 at 12:38 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gogigs`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_acc`
--

CREATE TABLE `admin_acc` (
  `id` int(11) NOT NULL,
  `admin_ID` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_acc`
--

INSERT INTO `admin_acc` (`id`, `admin_ID`, `name`, `password`, `email`) VALUES
(1, 'veid1234', 'Erik Erikson', 'nazim1982', 'wacha@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `admin_pfp`
--

CREATE TABLE `admin_pfp` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_pfp`
--

INSERT INTO `admin_pfp` (`id`, `name`, `img`) VALUES
(1, 'veid1234', 'pitstop.png');

-- --------------------------------------------------------

--
-- Table structure for table `admin_profile`
--

CREATE TABLE `admin_profile` (
  `id` int(11) NOT NULL,
  `admin_ID` varchar(255) NOT NULL,
  `admin_address` varchar(255) NOT NULL,
  `admin_email` varchar(255) NOT NULL,
  `admin_contact` varchar(255) NOT NULL,
  `admin_github` varchar(255) NOT NULL,
  `admin_linkedin` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_profile`
--

INSERT INTO `admin_profile` (`id`, `admin_ID`, `admin_address`, `admin_email`, `admin_contact`, `admin_github`, `admin_linkedin`) VALUES
(1, 'veid1234', 'Something', 'Shazlin@kolejspace.edu.my', '+0184949233', 'Nazim Hilman', 'https://www.linkedin.com/in/nazim-hilman-270528315/');

-- --------------------------------------------------------

--
-- Table structure for table `card_information`
--

CREATE TABLE `card_information` (
  `id` int(11) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(500) NOT NULL,
  `city` varchar(255) NOT NULL,
  `zipcode` int(11) NOT NULL,
  `cardname` varchar(255) NOT NULL,
  `cardnumber` int(50) NOT NULL,
  `expmonth` varchar(255) NOT NULL,
  `expyear` int(20) NOT NULL,
  `cvv` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `card_information`
--

INSERT INTO `card_information` (`id`, `fullname`, `email`, `address`, `city`, `zipcode`, `cardname`, `cardnumber`, `expmonth`, `expyear`, `cvv`) VALUES
(1, 'Nazim Hilman', 'email@gmail.com', 'no.1 Jalan Handalan 1/4, Kementah,', 'Setiawangsa', 541000, 'Mr.Nazim Hilman', 2147483647, 'january', 2024, 623),
(2, 'Eric Eridy', 'lottle@gmail.com', '1007 John Calvin Drive', 'Hillside', 60162, 'Mr.Eric Eridy', 2147483647, 'March', 2025, 432),
(3, 'Nur Shazlin Binti Mohd Azhari', 'Shazlin@kolejspace.edu.my', 'Setiawangsa,Mindef,', 'Setiawangsa', 510000, 'Mrs.Shazlin ', 2147483647, 'March', 2025, 322);

-- --------------------------------------------------------

--
-- Table structure for table `customer_acc`
--

CREATE TABLE `customer_acc` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `bio` text NOT NULL,
  `birthday` date DEFAULT NULL,
  `state` varchar(100) DEFAULT NULL,
  `phone_number` varchar(20) NOT NULL,
  `twittercreds` varchar(255) NOT NULL,
  `fbcreds` varchar(255) NOT NULL,
  `igcreds` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customer_acc`
--

INSERT INTO `customer_acc` (`id`, `name`, `email`, `password`, `bio`, `birthday`, `state`, `phone_number`, `twittercreds`, `fbcreds`, `igcreds`) VALUES
(1, 'Larry Davis', 'tron@example.com', 'newpassword', 'This is my favourite website', '2024-08-02', 'Sabah', '+60103123218', 'larry@twitter.com', 'larry@facebook.com', 'larry@Instagram.com'),
(2, 'Warden Illsend', 'germa@gmail.com', 'nazim123', 'We Exist Wow', '2004-01-03', 'Melaka', '+60123234239', '', '', ''),
(3, 'Ahmad Ahmari', 'ahmadahmari@gmail.com', 'ahmad123', 'I have a bio', NULL, 'Perdu', '+60192302323', '', '', ''),
(4, 'Firdaus Farhan', 'firdausfarhan43@gmail.com', 'test', 'Skibidi rizz toilet', '2004-09-27', 'W.P. Kuala Lumpur', '+60123456789', '', '', ''),
(5, 'Nazim Hilman', 'email@gmail.com', 'nazim1982', 'Despite all my rage, i am still just a gyatt in the cage', '2004-01-20', 'Melaka', '+60194066925', '', '', ''),
(6, 'Nur Shazlin ', 'Shazlin@kolejspace.edu.my', 'password', '', NULL, NULL, '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `customer_ticket`
--

CREATE TABLE `customer_ticket` (
  `id` int(11) NOT NULL,
  `ticket_id` varchar(255) NOT NULL,
  `Cust_Name` varchar(255) NOT NULL,
  `Cust_Email` varchar(255) NOT NULL,
  `event_name` varchar(255) NOT NULL,
  `cost` bigint(50) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT curtime(),
  `ticket_venue` varchar(1000) NOT NULL,
  `event_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customer_ticket`
--

INSERT INTO `customer_ticket` (`id`, `ticket_id`, `Cust_Name`, `Cust_Email`, `event_name`, `cost`, `created_at`, `ticket_venue`, `event_image`) VALUES
(1, '80675220', 'Nazim Hilman', 'email@gmail.com', 'IndieNasional', 76, '2024-04-01 13:23:45', 'Bigshot Events Space with Sports Bar and Indoor Golf ', 'indienasional.png'),
(2, '56655424', 'Nazim Hilman', 'email@gmail.com', 'IndieNasional', 76, '2024-07-07 15:46:27', 'Bigshot Events Space with Sports Bar and Indoor Golf ', 'indienasional.png'),
(3, '65273649', 'Ahmad Ahmari', 'ahmadahmari@gmail.com', 'IndieNasional', 76, '2024-07-07 15:46:27', 'Bigshot Events Space with Sports Bar and Indoor Golf ', 'indienasional.png'),
(4, '11084680', 'Nazim Hilman', 'email@gmail.com', 'Magnificent Moment', 75, '2024-07-07 16:38:28', 'Motion Studio Asia (Mid Valley) Art Jamming KL | Art Activities KL | Gallery Ev', 'magnificent.png'),
(5, '50528119', 'Nazim Hilman', 'email@gmail.com', 'Magnificent Moment', 75, '2024-07-07 16:39:45', 'Motion Studio Asia (Mid Valley) Art Jamming KL | Art Activities KL | Gallery Ev', 'magnificent.png'),
(6, '67698106', 'Eric Eridy', 'lottle@gmail.com', 'Moonsoon Warirors', 80, '2024-07-08 11:45:45', 'Bigshot Events Space with Sports Bar and Indoor Golf', 'monsoon.png'),
(7, '55356510', 'Ahmad Ahmari', 'ahmadahmari@gmail.com', 'Moonsoon Warirors', 80, '2024-07-08 11:54:45', 'Bigshot Events Space with Sports Bar and Indoor Golf', 'monsoon.png'),
(8, '36935011', 'Larry Davis', 'email@example.com', 'Unity (by spectrum rays)', 40, '2024-07-10 21:22:09', 'Resonance Music Kelana Jaya', 'unity.png'),
(9, '29705582', 'Larry Davis', 'tron@example.com', 'Pleasantrees Thought Id let you know', 40, '2024-07-10 21:34:10', 'BEKL Cheras', 'pleasentrees.png'),
(10, '12381732', 'Nur Shazlin Binti Mohd Azhari', 'Shazlin@kolejspace.edu.my', 'Unity (by spectrum rays)', 40, '2024-07-11 15:15:46', 'Resonance Music Kelana Jaya', 'unity.png'),
(11, '48261331', 'Ahmad Ahmari', 'ahmadahmari@gmail.com', 'Indiepologies Vol III  (Better late than never)', 30, '2024-07-13 12:46:04', 'Echo Chamber Subang Jaya', 'indiepologies3.png');

-- --------------------------------------------------------

--
-- Table structure for table `events_current`
--

CREATE TABLE `events_current` (
  `id` int(11) NOT NULL,
  `event_name` varchar(255) NOT NULL,
  `event_image` varchar(255) NOT NULL,
  `event_date_start` varchar(255) NOT NULL,
  `event_date_finish` varchar(255) NOT NULL,
  `event_cost` bigint(255) NOT NULL,
  `event_location` varchar(255) NOT NULL,
  `event_description` mediumtext NOT NULL,
  `events_ticketavail` varchar(255) DEFAULT NULL,
  `event_expiry` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `events_current`
--

INSERT INTO `events_current` (`id`, `event_name`, `event_image`, `event_date_start`, `event_date_finish`, `event_cost`, `event_location`, `event_description`, `events_ticketavail`, `event_expiry`) VALUES
(1, 'Magnificent 8 Volume 22 ', 'magnificent.png', '2023-04-24', '2024-09-28', 20, 'Migos Garage Seri Kembangan', 'A gig focused on the themes of hari raya hosted at Migos Garage, Seri Kembangan \r\n', '201', 'Past'),
(2, 'Rotan Lot Holiday Home Market', 'rotanlot.png', '2023-12-02', '2023-12-19', 0, 'Taman Subang Ria Subang Jaya', 'A home market selling furniture made with rotan with a emphasis on local acts being there in order to keep guests happy and entertained while shopping\r\n', '102', 'Past'),
(3, 'Pleasantrees Thought Id let you know', 'pleasentrees.png', '2024-05-18', '2024-09-18', 40, 'BEKL Cheras', 'An independant concert held by the band Pleasantrees to support their EP Launch party, supported by indie (independant) bands such as DogTooth', '0', 'Past'),
(4, 'Riuh #SamaSamaRaya', 'ruih.png', '2024-03-29', '2024-04-10', 0, ' Sentul depot Kuala Lumpur', 'An event organized by RIUH sponsored by MyCreativeVentures that advertises the sale of local brands for baju raya shopping alongside a heavy emphasis on live performances happening where visitors can enjoy the music while shopping', '245', 'upcoming'),
(5, 'Unity (by spectrum rays)', 'unity.png', '2024-07-20', '2024-08-02', 40, 'Resonance Music Kelana Jaya', 'From indie to nu gaze its going to be a friendship-fuelled night with an eclectic lineup featuring @theavakl @dukesmy @dimesmusic @futurabandmy @dogtoothsound @segregatedcrystalmusicmy @foryoursafetyband @papertrailmy', '199', 'Upcoming'),
(6, 'Indiepologies Vol III  (Better late than never)', 'indiepologies3.png', '2024-06-08', '2024-06-18', 30, 'Echo Chamber Subang Jaya', 'On 8th June at @echochambermy  spectrum rays will be holding their third Indiepologies series with awesome talented bands ready to reveal themselves in the shape of performing their music live So come check them out! ', '366', 'Current'),
(7, 'Indiepologies vol 2 May the Fourth be with you', 'indiepologies2.png', '2024-05-04', '2024-05-21', 30, 'Echo chamber Subang Jaya', 'Come and experience a Star Wars themed event in the form of a music gig! We will be having 9 bands taking the stage at @echochambermy from 4pm onwards! \r\n', '678', 'upcoming'),
(8, 'Rising Fest 8 ', 'risingfest.png', '2024-05-05', '2024-05-27', 25, 'BEKL Cheras', 'A gig organized by Atas Angin that features a number of talented bands such as @theavakl and @zuraatheband \r\n', '444', 'upcoming'),
(9, 'Indienasional Vol 6 ', 'indienasional.png', '2024-04-27', '2024-05-20', 35, 'BEKL Cheras', 'Come and experience the sixth installation for Indienational hosted by atas angin at BeKL ! \r\n', '300', 'upcoming'),
(10, 'Monsoon Madness', 'monsoon.png', '2023-12-22', '2024-01-09', 45, 'Angguk Studio Petaling Jaya', 'An independent gig organized by the independent RawSpirit team with special guests such as bands like fictions and pleasantrees\r\n', '800', 'upcoming');

-- --------------------------------------------------------

--
-- Table structure for table `feedback_form`
--

CREATE TABLE `feedback_form` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedback_form`
--

INSERT INTO `feedback_form` (`id`, `name`, `email`, `subject`, `message`) VALUES
(1, 'Nazim Hilman Bin Hashim', 'nazimhilman@yahoo.com', 'Concern over your saving system', 'Somethings wrong here i can feel it'),
(2, 'Jerry Smith', 'Jerry@gmail.com', 'I heckin love coding', 'Coding is so good and fun im enjoying a blast'),
(3, 'Armand', 'armand@gmail.com', 'I have a complaining', 'this is a test');

-- --------------------------------------------------------

--
-- Table structure for table `pfp_test`
--

CREATE TABLE `pfp_test` (
  `id` int(11) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pfp_test`
--

INSERT INTO `pfp_test` (`id`, `img`) VALUES
(1, '6dac8dac19777f25820a9ea0da6f73ef7cb5cd19.png'),
(2, '6dac8dac19777f25820a9ea0da6f73ef7cb5cd19.png'),
(3, '6dac8dac19777f25820a9ea0da6f73ef7cb5cd19.png'),
(4, '1-intro-photo-final.jpg'),
(5, '1-intro-photo-final.jpg'),
(6, '1-intro-photo-final.jpg'),
(7, '2abd0e42d24d45fc61be5bc6d88125c907cedc89.png'),
(8, '2abd0e42d24d45fc61be5bc6d88125c907cedc89.png'),
(9, '6dac8dac19777f25820a9ea0da6f73ef7cb5cd19.png');

-- --------------------------------------------------------

--
-- Table structure for table `profile_info`
--

CREATE TABLE `profile_info` (
  `id` int(11) NOT NULL,
  `prof_name` varchar(255) NOT NULL,
  `prof_email` varchar(255) NOT NULL,
  `prof_birthday` varchar(255) NOT NULL,
  `prof_country` varchar(255) NOT NULL,
  `prof_PN` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ticket_counter`
--

CREATE TABLE `ticket_counter` (
  `id` int(11) NOT NULL,
  `ticket_bought` int(200) NOT NULL,
  `ticket_cash` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_acc`
--
ALTER TABLE `admin_acc`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admin_ID` (`admin_ID`);

--
-- Indexes for table `admin_pfp`
--
ALTER TABLE `admin_pfp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_profile`
--
ALTER TABLE `admin_profile`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `card_information`
--
ALTER TABLE `card_information`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer_acc`
--
ALTER TABLE `customer_acc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer_ticket`
--
ALTER TABLE `customer_ticket`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `ticket_id` (`ticket_id`);

--
-- Indexes for table `events_current`
--
ALTER TABLE `events_current`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback_form`
--
ALTER TABLE `feedback_form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pfp_test`
--
ALTER TABLE `pfp_test`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profile_info`
--
ALTER TABLE `profile_info`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_acc`
--
ALTER TABLE `admin_acc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `admin_pfp`
--
ALTER TABLE `admin_pfp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `admin_profile`
--
ALTER TABLE `admin_profile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `card_information`
--
ALTER TABLE `card_information`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `customer_acc`
--
ALTER TABLE `customer_acc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `customer_ticket`
--
ALTER TABLE `customer_ticket`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `events_current`
--
ALTER TABLE `events_current`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `feedback_form`
--
ALTER TABLE `feedback_form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pfp_test`
--
ALTER TABLE `pfp_test`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `profile_info`
--
ALTER TABLE `profile_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admin_profile`
--
ALTER TABLE `admin_profile`
  ADD CONSTRAINT `admin_profile_ibfk_1` FOREIGN KEY (`id`) REFERENCES `admin_acc` (`id`);

--
-- Constraints for table `card_information`
--
ALTER TABLE `card_information`
  ADD CONSTRAINT `card_information_ibfk_1` FOREIGN KEY (`id`) REFERENCES `customer_acc` (`id`);

--
-- Constraints for table `customer_acc`
--
ALTER TABLE `customer_acc`
  ADD CONSTRAINT `customer_acc_ibfk_1` FOREIGN KEY (`id`) REFERENCES `customer_ticket` (`id`);

--
-- Constraints for table `events_current`
--
ALTER TABLE `events_current`
  ADD CONSTRAINT `events_current_ibfk_1` FOREIGN KEY (`id`) REFERENCES `customer_ticket` (`id`);

--
-- Constraints for table `feedback_form`
--
ALTER TABLE `feedback_form`
  ADD CONSTRAINT `feedback_form_ibfk_1` FOREIGN KEY (`id`) REFERENCES `customer_acc` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
