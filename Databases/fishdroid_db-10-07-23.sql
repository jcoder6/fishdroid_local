-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 07, 2023 at 09:42 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fd_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `familynames`
--

CREATE TABLE `familynames` (
  `id` int(11) NOT NULL,
  `family_name` varchar(100) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `familynames`
--

INSERT INTO `familynames` (`id`, `family_name`, `created_at`) VALUES
(11, 'ACANTHURIDAE', '2023-10-07 07:49:02'),
(12, 'BELONIDAE', '2023-10-07 07:49:20'),
(13, 'CAESIONIDAE', '2023-10-07 07:50:29'),
(14, 'CARANGIDAE', '2023-10-07 07:50:38'),
(15, 'CLUPEIDAE', '2023-10-07 07:51:02'),
(16, 'DASYATIDAE', '2023-10-07 07:51:16'),
(17, 'ELOPIDAE', '2023-10-07 07:51:21'),
(18, 'EPHIPPIDAE', '2023-10-07 07:51:29'),
(19, 'ENGRAULIDAE', '2023-10-07 07:51:35'),
(20, 'GERREIDAE', '2023-10-07 07:51:51'),
(21, 'HAEMULIDAE', '2023-10-07 07:52:01'),
(22, 'HEMIGALEIDAE', '2023-10-07 07:52:07'),
(23, 'ISTIOPHORIDAE', '2023-10-07 07:52:13'),
(24, 'LEIOGNATHIDAE', '2023-10-07 07:52:22'),
(25, 'LETHRINIDAE', '2023-10-07 07:52:40'),
(26, 'LUTJANIDAE', '2023-10-07 07:52:50'),
(27, 'MENIDAE', '2023-10-07 07:52:56'),
(28, 'MONACANTHIDAE', '2023-10-07 07:53:03'),
(29, 'MUGILIDAE', '2023-10-07 07:53:08'),
(30, 'MULLIDAE', '2023-10-07 07:53:17'),
(31, 'MURAENIDAE', '2023-10-07 07:53:30'),
(32, 'NEMIPTERIDAE', '2023-10-07 07:53:37'),
(33, 'PLATYCEPHALIDAE', '2023-10-07 07:53:53'),
(34, 'PRIACANTHIDAE', '2023-10-07 07:54:04'),
(35, 'SCARIDAE', '2023-10-07 07:54:11'),
(37, 'SCATOPHAGIDAE', '2023-10-07 07:54:28'),
(38, 'SCOMBRIDAE', '2023-10-07 07:54:35'),
(39, 'SERRANIDAE', '2023-10-07 07:54:46'),
(40, 'SIGANIDAE', '2023-10-07 07:54:59'),
(41, 'SOLEIDAE', '2023-10-07 07:55:10'),
(42, 'SPHYRAENIDAE', '2023-10-07 07:55:16'),
(43, 'STROMATEIDAE', '2023-10-07 07:55:23'),
(44, 'SYNODONTIDAE', '2023-10-07 07:55:30'),
(45, 'TERAPONIDAE', '2023-10-07 07:55:36'),
(46, 'TRICHIURIDAE', '2023-10-07 07:55:44'),
(47, 'CHANIDAE', '2023-10-07 08:11:28'),
(48, 'ICTALURIDS', '2023-10-07 08:14:54');

-- --------------------------------------------------------

--
-- Table structure for table `fish`
--

CREATE TABLE `fish` (
  `id` int(11) NOT NULL,
  `fish_name` varchar(100) NOT NULL,
  `scientific_name` varchar(100) NOT NULL,
  `family_name_id` int(11) NOT NULL,
  `local_name` varchar(100) NOT NULL,
  `fish_image` varchar(100) NOT NULL,
  `fish_info` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `fish`
--

INSERT INTO `fish` (`id`, `fish_name`, `scientific_name`, `family_name_id`, `local_name`, `fish_image`, `fish_info`) VALUES
(72, 'Wahoo', 'Acanthocybium solandri', 38, 'Tangigue', 'FISH_IMG_700.jpeg', 'Body very elongate, fusiform, a little compressed; snout long (50% head length), pointed; rear of top jaw bone hidden; teeth strong, compressed, triangular; no gill rakers; 1st dorsal fin with long base, XXIII-XXVII spines; 2nd dorsal 12-16, with 8-9 finlets behind; anal fin 12-14 + 9 finlets behind; 1 large + 2 small'),
(73, 'Gracile lizardfish', 'Saurida gracilis', 44, 'Kalaso; Dalag baybay', 'FISH_IMG_198.jpg', 'The gracile lizardfish is a species of lizardfish which lives mainly in the Indo-Pacific region.'),
(75, 'Fourlined terapon', 'Pelates quadrilineatus', 45, 'Babansi; Banlaongan', 'FISH_IMG_881.jpg', 'Fourline Striped Grunter, Pelates quadrilineatus (Bloch 1790) Summary: Adults are silvery with 4-6 dark stripes along the sides, a dark blotch below the anterior dorsal-fin spines, and a black blotch on the spinous dorsal fin. '),
(76, 'Greater lizardfish', 'Saurida tumbil', 44, 'Kalaso; Dalag baybay', 'FISH_IMG_815.jpeg', 'Body is cigar-shaped, rounded or slightly compressed; the head pointed and depressed; the snout broader than long.'),
(77, 'Eyestripe surgeonfish', 'Acanthurus dussumieri', 11, 'Lablabahita', 'FISH_IMG_244.jpg', 'Pale brown body; broader, irregular lines on head; orange band between eyes, continued behind each eye to gill cover. Each side of caudal peduncle with single, sharp, forward-pointing erectile spine; spine largely covered by cream sheath; groove surrounded by a black area.\r\n'),
(78, 'Hound needlefish', 'Tylosurus crocodilus', 12, 'Layalay', 'FISH_IMG_633.jpg', 'Body relatively robust, rounded; beak relatively short, stout and straight, with many long, pointed teeth; front teeth point forwards in juveniles; dorsal rays 21-23 (usually 22-23); anal rays 18-22; front lobes of dorsal + anal fin relatively high (9.4-18.5% and 12.5-18.1%, respectively of body length); pectoral rays '),
(79, 'Redbelly yellowtail fusilier', 'Caesio cuning', 13, 'Dalagang bukid', 'FISH_IMG_209.jpg', 'has a deep and laterally compressed body. The jaws, vomer, and palatines have small conical teeth. The dorsal and anal fins have scales; the dorsal fin has 10 spines and 14 to 16, typically 15, soft rays while the anal fin contains 3 spines and 10 to 12, usually 11, soft rays.'),
(80, 'Indian threadfish', 'Alectis indicus', 14, 'Tutungol', 'FISH_IMG_418.jpg', 'Though measuring usually about 1 m, Alectis indica can reach the 175 cm with a weight of 20 kg. The body, angular, is much compressed laterally. The profile of the head in the adults displays a slight concavity at the height of the eyes and this distinguishes it from similar species belonging to the genus Alectis.'),
(81, 'Shrimp scad', 'Alepes djedaba', 14, 'Salay-salay ginto; Malarak', 'FISH_IMG_446.jpg', 'The species is commonly found on inshore reefs and sandy substrates. It has the common body profile of a scad, and may be difficult to differentiate from others in the genus Alepes. It is one of the larger scads, growing to 40 cm, but often is encountered at much smaller sizes.'),
(82, 'Yellowtail scad', 'Atule mate', 14, 'Ekol; Salay batang', 'FISH_IMG_346.jpg', 'This species is distinguished by the following characters: adipose eyelid well developed and completely covering eye except for a vertical slit centred on pupil; shoulder girdle (cleithrum) margin smooth, without papillae; terminal dorsal and anal rays finlet-like in adults, about twice length of adjacent rays \r\n'),
(83, 'Longfin trevally', 'Carangoides armatus', 14, 'Talakitok', 'FISH_IMG_827.jpg', 'The longfin trevally (Carangoides armatus), also known as the longfin kingfish, longfin cavalla or armed trevally, is a species of inshore marine fish in the jack family, Carangidae.\r\n'),
(84, 'Blue trevally', 'Carangoides ferdau', 14, 'Talakitok', 'FISH_IMG_908.jpg', 'The Blue Trevally is a compressed fish with long curved pectoral fins and a forked tail. The snout is bluntly rounded. The dorsal profile of the head is more convex above than below. The species is silver in colour, often with a tinge of blue-green above.\r\n'),
(85, 'Malabar trevally', 'Carangoides malabaricus', 14, 'Talakitok', 'FISH_IMG_401.jpg', 'The Malabar trevally (Carangoides malabaricus), also known as the Malabar jack, Malabar kingfish or nakedshield kingfish, is a species of large inshore marine fish of the jack family, Carangidae.'),
(86, 'Red tail scad', 'Decapterus kurroides', 14, 'Urot; Galonggong', 'FISH_IMG_814.jpg', 'Dorsal spines (total): 9; Dorsal soft rays (total): 28-29; Anal spines: 3; Anal soft rays: 22 - 25. Deep bodied compared to similar species (Ref. 48635). Body color bluish green above, silvery below; caudal fin bright red'),
(87, 'Shortfin scad', 'Decapterus macrosoma', 14, 'Galonggong', 'FISH_IMG_400.jpg', 'Elongate, slender, cylindrical; eye covered with adipose eyelid except for central slit; top and rear end of upper jaw concave on top and at end, rounded at the lower corner; front of shoulder that meets gill chamber with 2 moderate sized papillae; gill rakers (including rudiments) 10-13 + 34-38; dorsal rays VIII+I, 33\r\n'),
(88, 'Japanese scad', 'Decapterus muruadsi', 14, 'Galonggong', 'FISH_IMG_530.jpg', 'Decapterus muruadsi (Temminck & Schlegel, 1844) · unaccepted (misspelling) ... Original description. Not documented. Taxonomic citation.\r\n'),
(89, 'Golden trevally', 'Gnathanodon speciosus', 14, 'Talakitok', 'FISH_IMG_810.jpg', 'Silver grey, yellowish on belly, often with scattered black patches or spots on sides; all fins yellow; tips of tail black; juveniles and young adults with 7-11 black bars on body.'),
(90, 'Torpedo scad', 'Megalaspis cordyla', 14, 'Aweten; Oriles; Bonito', 'FISH_IMG_394.jpg', ' A slender bluish-grey to greenish scad becoming silver on the sides and belly, with a large black spot on the upper rear edge of the gill cover, a series of prominent deep scutes along the side, long scythe-like pectoral fins, and a narrow caudal peduncle.\r\n\r\n'),
(91, 'Black pomfret', 'Parastromateus niger', 14, 'Duhay; Pampano', 'FISH_IMG_834.jpg', 'Adults are a bluish-brown above, pale silvery-grey below with anterior parts of the dorsal and anal fins bluish-grey, a black blotch on the rear margin of the gill cover, and no pelvic fins.'),
(92, 'Needlescaled queenfish', 'Scomberoides tol', 14, 'Tulong-tulong', 'FISH_IMG_50.jpg', 'bluish-green to bluish-grey on the dorsal part of its body becoming silvery white on the ventral part. It has 5-8 vertically oval black spots along its flanks. The anterior 4-5 overlap the lateral line.\r\n\r\n'),
(93, 'Oxeye scad', 'Selar boops', 14, 'Mataan; Matangbaka', 'FISH_IMG_946.jpg', 'is a species of ray-finned fish in the family Carangidae, the scads, jacks and trevallies. It is found in the Indo-Pacific. It is an important species for fisheries in some parts of its range.\r\n'),
(94, 'Bigeye scad', 'Selar crumenophthalmus', 14, 'Mataan; Matangbaka', 'FISH_IMG_569.jpg', ' A nocturnal species that forms large schools during the day, dispersing at night to feed. '),
(95, 'Yellowstripe scad', 'Selaroides leptolepis', 14, 'Balanghay ekol; Salay ginto', 'FISH_IMG_734.jpg', ' A schooling species that predominantly inhabits inshore waters, the yellowstripe scad is a predatory fish, taking crustaceans, small fish and a variety of other planktonic prey.\r\n'),
(96, 'Spotted sardinella', 'Amblygaster sirm', 15, 'Tamban', 'FISH_IMG_401.jpg', 'The fish has 13 to 21 dorsal soft rays and 12 to 23 anal soft rays. It grows up to a maximum length of 27 cm (10.6 in). The distinctive feature of spotted sardinella from other two relatives is the presence of 10 to 20 golden spots along the flank. The color of spots may change into black after preservation.\r\n'),
(97, 'Rainbow sardine', 'Dussumieria acuta', 15, 'Tulis', 'FISH_IMG_199.jpg', ' is a bony fish important to aquaculture and commercial fisheries.\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `hatcheries`
--

CREATE TABLE `hatcheries` (
  `id` int(11) NOT NULL,
  `fish_name` varchar(100) NOT NULL,
  `hatch_video` varchar(100) NOT NULL,
  `hatch_process` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hatcheries`
--

INSERT INTO `hatcheries` (`id`, `fish_name`, `hatch_video`, `hatch_process`) VALUES
(1, 'Bangus', 'HATCH_VIDEO_280.mp4', 'Some Hatching Process'),
(2, 'Pantat', 'HATCH_VIDEO_553.mp4', 'Try update');

-- --------------------------------------------------------

--
-- Table structure for table `jokes`
--

CREATE TABLE `jokes` (
  `id` int(11) NOT NULL,
  `trivia` text NOT NULL,
  `trivia_video` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `jokes`
--

INSERT INTO `jokes` (`id`, `trivia`, `trivia_video`) VALUES
(4, 'Goldfish can tell different faces apart and are able to distinguish between different shapes, colors and sounds.', 'TRIVIA_VIDEO_533.mp4');

-- --------------------------------------------------------

--
-- Table structure for table `nutritions`
--

CREATE TABLE `nutritions` (
  `id` int(11) NOT NULL,
  `fish_id` int(11) NOT NULL,
  `nutrition_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `nutritions`
--

INSERT INTO `nutritions` (`id`, `fish_id`, `nutrition_name`) VALUES
(1, 61, 'Protein'),
(2, 59, 'Potassium'),
(3, 61, 'potassuim'),
(4, 60, 'update'),
(5, 61, 'nutrition'),
(6, 60, 'update uli');

-- --------------------------------------------------------

--
-- Table structure for table `quiz`
--

CREATE TABLE `quiz` (
  `id` int(11) NOT NULL,
  `quiz_answer` varchar(100) NOT NULL,
  `quiz_hint` varchar(100) NOT NULL,
  `quiz_image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `quiz`
--

INSERT INTO `quiz` (`id`, `quiz_answer`, `quiz_hint`, `quiz_image`) VALUES
(1, 'Milk Fish', 'Chanos', 'QUIZ_IMG_123.png'),
(2, 'Banded Tilapia', 'sadfasdf', 'QUIZ_IMG_890.PNG');

-- --------------------------------------------------------

--
-- Table structure for table `recipes`
--

CREATE TABLE `recipes` (
  `id` int(11) NOT NULL,
  `fish_id` int(11) NOT NULL,
  `recipe_name` varchar(50) NOT NULL,
  `recipe_steps` text NOT NULL,
  `recipe_img` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `recipes`
--

INSERT INTO `recipes` (`id`, `fish_id`, `recipe_name`, `recipe_steps`, `recipe_img`) VALUES
(1, 61, 'fishsadf', 'dfasfjk', 'RECIPE_IMG_000.jpg'),
(2, 60, 'dfsaf', 'fdsfsdf', 'RECIPE_IMG_001.jpg'),
(4, 60, 'dfsaf', 'fdsfsdf', 'RECIPE_IMG_001.jpg'),
(14, 58, 'jdsf', 'dfsaads', 'RECIPE_IMG_226.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `role_name` varchar(100) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `role_name`, `description`) VALUES
(1, 'Guard', 'Watch me!');

-- --------------------------------------------------------

--
-- Table structure for table `terms`
--

CREATE TABLE `terms` (
  `id` int(11) NOT NULL,
  `tech_term` varchar(100) NOT NULL,
  `tech_desc` text NOT NULL,
  `term_img` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `terms`
--

INSERT INTO `terms` (`id`, `tech_term`, `tech_desc`, `term_img`) VALUES
(2, 'Stocking Program', 'A stocking program refers to a management strategy where fish or other aquatic species are introduced or &quot;stocked&quot; into natural water bodies to supplement existing populations or establish new populations. This is commonly done by releasing juvenile fish from hatcheries into lakes, rivers, or ponds to enhance recreational fishing opportunities or restore species in decline. Stocking programs help maintain or improve the overall health and diversity of aquatic resources.', 'NO_IMG_YET'),
(3, 'Fish Tagging', 'Fish Tagging: Fish tagging is a method of marking individual fish with unique identifiers to track their movement, behavior, and population dynamics. This involves attaching small tags or electronic devices to fish, which can include physical tags, fin clips, or implanted transmitters. By monitoring tagged fish, researchers gain valuable insights into migration patterns, habitat preferences, and the overall health of fish populations.', 'NO_IMG_YET'),
(4, 'Fishway', 'A fishway, also known as a fish ladder or fish pass, is a structure built in or around dams, weirs, or other barriers in rivers or streams to facilitate the migration of fish. Fishways provide a series of ascending steps or bypass channels that allow fish to navigate around obstacles and reach their spawning grounds or essential habitats. These structures help maintain healthy fish populations by restoring access to critical habitats and promoting natural reproductive processes.', 'NO_IMG_YET'),
(5, 'Water Aeration', 'Water aeration involves the process of adding oxygen to aquatic environments, typically in stagnant or oxygen-deficient bodies of water. This can be done through mechanical means, such as using aerators or pumps, or through natural methods like the introduction of plants or waterfalls. Aeration improves water quality, prevents fish kills, and supports the overall health of aquatic organisms by increasing oxygen levels and reducing harmful substances like ammonia and carbon dioxide.', 'NO_IMG_YET'),
(17, 'fds', 'fsdf', 'NO_IMG_YET');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `img` varchar(50) NOT NULL,
  `created_at` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fullname`, `username`, `email`, `password`, `img`, `created_at`) VALUES
(1, 'Jomer Dorego', 'omer', 'ommer@gmail.com', '123', 'USER_IMG_221.webp', '2023-05-31 15:33:45'),
(2, 'Shekyna Cayago', 'kaynaa', 'kaynaa@gmail.com', '123', 'USER_IMG_750.webp', '2023-05-31 15:25:52'),
(16, 'Mark Lester Taguiam', 'lest', 'lest@gmail', '123', 'USER_IMG_918.webp', '2023-05-31 15:26:15'),
(20, 'Ivan Gerard Deguzman', 'banban', 'banban@gmail.com', '123', 'USER_IMG_612.webp', '2023-05-31 15:26:08'),
(22, 'Admin', 'admin', 'admin@gmail.com', '123', 'USER_IMG_764.PNG', '2023-09-27 01:57:38');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `familynames`
--
ALTER TABLE `familynames`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fish`
--
ALTER TABLE `fish`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hatcheries`
--
ALTER TABLE `hatcheries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jokes`
--
ALTER TABLE `jokes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nutritions`
--
ALTER TABLE `nutritions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quiz`
--
ALTER TABLE `quiz`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `recipes`
--
ALTER TABLE `recipes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `terms`
--
ALTER TABLE `terms`
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
-- AUTO_INCREMENT for table `familynames`
--
ALTER TABLE `familynames`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `fish`
--
ALTER TABLE `fish`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=98;

--
-- AUTO_INCREMENT for table `hatcheries`
--
ALTER TABLE `hatcheries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `jokes`
--
ALTER TABLE `jokes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `nutritions`
--
ALTER TABLE `nutritions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `quiz`
--
ALTER TABLE `quiz`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `recipes`
--
ALTER TABLE `recipes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `terms`
--
ALTER TABLE `terms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
