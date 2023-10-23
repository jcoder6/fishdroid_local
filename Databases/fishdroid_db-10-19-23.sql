-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 19, 2023 at 01:04 PM
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
(97, 'Rainbow sardine', 'Dussumieria acuta', 15, 'Tulis', 'FISH_IMG_199.jpg', ' is a bony fish important to aquaculture and commercial fisheries.\r\n'),
(98, 'Indian oil sardine', 'Sardinella longiceps', 15, 'Tamban', 'FISH_IMG_591.jpg', 'is a small fish with maximum size 28 cm (FishBase, 2017). This species is a planktivore and feed diatoms, dinoflagellates and copepods. It contributes 15% of total marine catches in India.\r\n'),
(99, 'Blacktip sardinella', 'Sardinella melanura', 15, 'Toyo', 'FISH_IMG_717.jpg', 'Dorsal spines (total): 0; Dorsal soft rays (total): 13-21; Anal spines: 0; Anal soft rays: 12 - 23. Body depth usually not much more than 30% of standard length; scutes 27 to 31. The jet black caudal tips distinguish S. melanura from all other species of Sardinella except S.\r\n'),
(100, 'Blue-spotted stingray', 'Dasyatis kuhlii', 16, 'Page', 'FISH_IMG_661.jpg', 'The bluespotted stingray is a small to medium-sized stingray in the family Dasyatidae. This disc of the bluespotted stingray is angular with a short angular snout. The eyes are large and the mouth is small.'),
(101, 'Hawaiian ladyfish', 'Elops hawaiensis', 17, 'Bidbid', 'FISH_IMG_384.jpg', 'is a long slender silvery fish with a single dorsal fin on the middle of the back, a forked tail, a large eye and a moderately large mouth.\r\n'),
(102, 'Batfish', 'Platax orbicularis', 18, 'Bayong', 'FISH_IMG_655.jpg', 'yellowish silvery or dusky, dark bar through eye and another bar just behind head.'),
(103, 'Commerson’s anchovy', 'Stolephorus commersonii', 19, 'Dilis', 'FISH_IMG_829.jpg', 'It is a small schooling fish found in depth of 0–50 m in most of the tropical areas of the Indo-Pacific oceans, including Madagascar and Mauritius eastward and towards Hong Kong and further east to Papua New Guinea in westwards.'),
(104, 'Indian anchovy', 'Stolephorus indicus', 19, 'Tuakang; Dilis', 'FISH_IMG_113.jpg', 'A schooling species occurring in coastal waters and which appears to enter at least the estuarine parts of rivers and to... Description A schooling species occurring in coastal waters and which appears to enter at least the estuarine parts of rivers and to tolerate brackish water.\r\n'),
(105, 'Deep-bodied mojarra', 'Gerres abbreviatus', 20, 'Batuan', 'FISH_IMG_229.jpg', 'Lives in small schools on sandy bottoms. Juveniles are found in the littoral zone, larger fish down to 40 m depth.\r\n'),
(106, 'Whipfin silver-biddy', 'Gerres filamentosus', 20, 'Batuan; Malakapas', 'FISH_IMG_2.jpg', 'A silvery brown silverbiddy grading to brilliant silver below, with vertical rows of indistinct dark oval-shaped spots on sides of adults and subadults; fins tinged with orange-brown, caudal fin margin blackish.'),
(107, 'Common silver-biddy', 'Gerres oyena', 20, 'Batuan; Lumalanang', 'FISH_IMG_280.jpg', 'A silvery-brown silverbiddy grading to brilliant silver below, sometimes with faint dark vertical bands on sides,'),
(108, 'Javelin grunter', 'Pomadasys kaakan', 21, 'Siget', 'FISH_IMG_321.jpg', 'is a species of marine ray-finned fish, a grunt belonging to the family Haemulidae.'),
(110, 'Saddle grunt', 'Pomadasys maculatus', 21, 'Sagsagir', 'FISH_IMG_347.jpg', ' Pomadasys maculatus has a body which is around two and half times as long as it is deep. It has a blunt head with a convex upper profile and a small mouth which has brush like bands of teeth on its jaws.\r\n'),
(111, 'Sicklefin weasel shark', 'Hemigaleus microstoma', 22, 'Pating', 'FISH_IMG_116.jpg', 'Indonesian, Singapore and Thailand specimens with light-tipped fins; tooth counts 25-32/37-43; total vertebral counts 137 to 150 \r\n'),
(112, 'Indo-Pacific sailfish', 'Istiophorus platypterus', 23, 'Susay', 'FISH_IMG_886.jpg', 'The body is dark blue dorsally and white with brown spots ventrally. About 20 bars, each consisting of many light blue dots, are present on each side. The fins are all generally blackish blue. The anal fin base is white.'),
(113, 'Smalltoothed ponyfish', 'Gazza achlamys', 24, 'Sap-sap', 'FISH_IMG_10.jpg', 'Dorsal spines (total): 8; Dorsal soft rays (total): 16; Anal spines: 3; Anal soft rays: 14; Vertebrae: 24.\r\n'),
(114, 'Toothpony', 'Gazza minuta', 24, 'Sap-sap', 'FISH_IMG_690.jpg', 'is a species of marine ray-finned fish, a ponyfish from the family Leiognathidae.'),
(115, 'Orangefin ponyfish', 'Leiognathus bindus', 24, 'Lawayan', 'FISH_IMG_457.jpg', 'Found over muddy sand bottoms of coastal inshore waters (Ref. 47581). Often enters estuaries (Ref. 4833). Forms schools. Used in Chinese medicine (Ref. 12166).'),
(116, 'Goldstripe ponyfish', 'Leiognathus daura', 24, 'Sap-sap maelol', 'FISH_IMG_271.jpg', 'Leiognathus daura (Cuvier, 1829) ; Status. unaccepted ; Accepted Name. Karalla daura (Cuvier, 1829) ; Rank. Species ; Parent. Leiognathus Lacepède, 1802 ; Orig. name.\r\n'),
(117, 'Slender ponyfish', 'Leiognathus elongatus', 24, 'Sap-sap mabeng', 'FISH_IMG_571.jpg', 'Inhabits coastal inshore waters at depths of 30 to 130 m. Schools near the bottom; sparsely distributed. Feeds on small crustaceans, polychaetes, and algae.'),
(118, 'Common ponyfish', 'Leiognathus equulus', 24, 'Sap-sap betsang', 'FISH_IMG_286.jpg', 'is silvery with a brown saddle on the caudal peduncle. It has faint bars on the back and sometimes a dark blotch on the forehead. The anal fin is yellowish.'),
(119, 'Striped ponyfish', 'Leiognathus fasciatus', 24, 'Sap-sap', 'FISH_IMG_926.jpg', 'Cheek, breast, and belly completely naked. Color: body blue-grayish silver dorsally, brilliant silvery-white ventrally; dorsolateral body with 10-15 narrow dark vertical lines; usually yellow blotches laterally on body.\r\n'),
(120, 'Smithurst’s ponyfish', 'eiognathus smithursti', 24, 'Sap-sap', 'FISH_IMG_33.jpg', ' is a fish of brackish and marine waters found in the Indian and western Pacific Oceans, from India through Malaysia and Indonesia south to northern Australia and east to the Philippines and Fiji It was described in 1835 by French ...\r\n'),
(121, 'Pink ear emperor', 'Lethrinus lentjan', 25, 'Babarat', 'FISH_IMG_253.jpg', 'is a species of emperor fish. It has a distinctive blood-red colouration around the margin of the gill covers\r\n'),
(122, 'Slender emperor', 'Lethrinus variegatus', 25, 'Babarat', 'FISH_IMG_497.jpg', 'Body is brown and gray (usually green, Ref. 48635), becoming lighter ventrally, with scattered irregular dark spots.\r\n'),
(123, 'Humpback snapper', 'Lutjanus gibbus', 26, 'Angrat', 'FISH_IMG_689.jpg', 'This species is distinguished by the following characters: body moderately deep; greatest depth 2.2-2.5 in SL; preopercular notch and knob well developed; vomerine tooth patch crescentic, without a medial posterior extension; gill rakers of first gill arch 9-10 + 115-20 = 25-30 (including rudiments); caudal fin \r\n'),
(124, 'Moonfish', 'Mene maculata', 27, 'Bulan-bulan; Chabita; Bulan-bulan; Chabita;', 'FISH_IMG_87.jpg', ' This species is distinguished by its very deep body, almost triangular, extremely compressed; sharp-edged breast; greatest body depth below lateral line at least 4 times greater than greatest body depth above lateral line; anal fin very long-based, commencing at point of insertion of pelvic fins, uniformly very low;\r\n'),
(125, 'Unicorn leatherjacket', 'Aluterus monoceros', 28, 'Ampapaquet; Borles', 'FISH_IMG_184.jpg', 'A large pale grey leatherjacket with faint spotting in adults, a long slender dorsal-fin spine, and a reticulate pattern of pale lines and greyish blotches in juveniles.\r\n'),
(126, 'Flathead grey mullet', 'Mugil cephalus', 29, 'Perong', 'FISH_IMG_899.jpg', 'Body cilindrical, robust. Head broad, its width more than width of mouth cleft; adipose eyelid well developed, covering most of pupil; upper lip thin, without papillae, labial teeth of upper jaw small, straight, dense, usually in several rows; mouth cleft ending below posterior nostril.'),
(127, 'Yellowstripe goatfish', 'Mulloidichthys flavolineatus', 30, 'Balaki', 'FISH_IMG_98.jpg', ' A silvery-white goatfish with a yellow stripe along the body at eye level, bordered by two pale bluish (sometimes whitish), narrow midlateral stripes, a dark oval or rectangular blotch on the yellow stripe below the first dorsal fin, additional yellow striping often on the cheek and along the abdomen, and yellowish ...\r\n'),
(128, 'Indian goatfish', 'Parupeneus indicus', 30, 'Balaki; Balaka', 'FISH_IMG_557.jpg', ' A pale goatfish with an elongate bright yellow patch on the upper side, a large black spot on the caudal peduncle centred just above the lateral line, and a dusky to dark stripe from the snout, through the eye to the beginning of the lateral line.'),
(129, 'Rosy goatfish', 'Parupeneus rubescens', 30, 'Balaki', 'FISH_IMG_927.jpg', 'Dorsal spines (total): 8 - 9; Dorsal soft rays (total): 8; Anal spines: 1; Anal soft rays: 6\r\n'),
(131, 'Goldband goldfish', 'Upeneus moluccensis', 30, 'Balaki; Saramulyete', 'FISH_IMG_649.jpg', 'has an elongated body which has a sub-cylindrical anterior portion which becomes compressed towards the tail with two dorsal fins which are well separated, with the second dorsal fin directly above the anal fin.\r\n'),
(132, 'Yellowstriped goatfish', 'Upeneus vittatus', 30, 'Balaki', 'FISH_IMG_286.jpg', 'Dark reddish-brown dorsally, white belly, faint yellowish patches along pelvic and anal-fin bases\r\n\r\n'),
(133, 'Snowflake moray', 'Echidna nebulosa', 31, 'Bircaca', 'FISH_IMG_946.jpg', 'A pale moray covered in dark speckles, with two rows of large dendritic black blotches that often enclose irregular yellow spots, a yellow iris and nostrils, and a white snout.'),
(134, 'Yellowbelly threadfin bream', 'Nemipterus bathybius', 32, 'Bisugo', 'FISH_IMG_369.jpg', 'Suborbital spine absent. Preopercle with 3 transverse scale rows. Pectoral fins long, reaching almost to level of origin of anal fin. Pelvic fins moderately long, reaching beyond anus.'),
(135, 'Celebes threadfin bream', 'Nemipterus celebicus', 32, 'Bisugo', 'FISH_IMG_636.jpg', ' Upper lobe of caudal fin slightly rounded and rosy. A line drawn up from posterior edge of suborbital reaching the dorsal profile about 2-4 scales \r\n'),
(136, 'Fork-tailed threadfin bream', 'Nemipterus furcosus', 32, 'Bisugo', 'FISH_IMG_207.jpg', 'is a species of threadfin bream native to Indian oceanic seas around Maldives, Sri Lanka, Andaman islands, and Pacific oceanic seas around Indonesia, and Australia.'),
(137, 'Teardrop threadfin bream', 'Nemipterus isacanthus', 32, 'Bisugo', 'FISH_IMG_767.jpg', 'Dorsal spines (total): 10; Dorsal soft rays (total): 9; Anal spines: 3; Anal soft rays: 7.\r\n'),
(138, 'Japanese threadfin bream', 'Nemipterus japonicus', 32, 'Bisugo', 'FISH_IMG_281.jpg', 'This species is distinguished by the following characters: lower margin of eye above a line from tip of snout to upper base of pectoral fins; a line drawn up from the posterior edge of suborbital reaching the dorsal profile 2 to 4 scale rows before origin of dorsal fin\r\n\r\n'),
(139, 'Red filament threadfin bream', 'Nemipterus marginatus', 32, 'Bisugo', 'FISH_IMG_24.jpg', 'Caudal fin with the upper lobe produced into a short, reddish filament.\r\n'),
(140, 'Mauvelip threadfin bream', 'Nemipterus mesoprion', 32, 'Bisugo', 'FISH_IMG_102.jpg', 'This species closely resembles N. marginatus, but lacks the filamentous extension to the upper lobe of the caudal fin; the posterior margin of the suborbital is more or less straight, rather than evenly curved; and the upper stripe on the body is not divided anteriorly.'),
(141, 'Doublewhip threadfin bream', 'Nemipterus nematophorus', 32, 'Bisugo', 'FISH_IMG_848.jpg', 'Dorsal spines (total): 10; Dorsal soft rays (total): 9; Anal spines: 3; Anal soft rays: 7.\r\n'),
(142, 'Golden threadfin bream', 'Nemipterus virgatus', 32, 'Bisugo', 'FISH_IMG_855.jpg', 'It inhabits areas with mud or sand substrates and the young can be found at depths from 18 to 33 m (59 to 108 ft) while the adults can be found down to 220 m (720 ft).\r\n\r\n'),
(143, 'Indian flathead', 'Platycephalus indicus', 33, 'Buya-buya', 'FISH_IMG_888.jpg', 'Brownish or grayish above, whitish below; caudal fin 2-3 horizontal black stripes '),
(144, 'Moontail bullseye', 'Priacanthus hamrur', 34, 'Baleg mata; Aswang-mataan; Malaking-mata; Matangbaka', 'FISH_IMG_795.JPG', 'An entirely red bigeye sometimes with indistinct darker spots along the lateral line, and a distinctly crescent-shaped or convex tail. \r\n'),
(145, 'Purple-spotted bigeye', 'Priacanthus tayenus', 34, 'Malaking mata;Baga-baga; Mataan', 'FISH_IMG_396.jpg', ' is a species of marine ray finned fish, a bigeye in the family Priacanthidae.'),
(146, 'Heavybeak parrotfish', 'Chlorurus gibbus', 35, 'Mol-mol', 'FISH_IMG_447.jpg', 'is a large species of parrotfish which can attain a total length of 70 centimetres (28 in) and a weight of 2.2 kilograms (4.9 lb).\r\n'),
(147, 'Spotted scat', 'Scatophagus argus', 37, 'Pingaw', 'FISH_IMG_671.jpg', 'The body is quadrangular and strongly compressed. The dorsal head profile is steep; snout rounded. The body is greenish-brown to silvery with many brown to red-brown spots.'),
(148, 'Wahoo', 'Acanthocybium solandri', 38, 'Tangigue', 'FISH_IMG_443.jpg', 'Body very elongate, fusiform, a little compressed; snout long (50% head length), pointed; rear of top jaw bone hidden; teeth strong, compressed, triangular; no gill rakers; 1st dorsal fin with long base, XXIII-XXVII spines; 2nd dorsal 12-16, with 8-9 finlets behind; anal fin 12-14 + 9 finlets behind; 1 large + 2 small\r\n'),
(149, 'Kawakawa', 'Euthynnus affinis', 38, 'Tulingan puti', 'FISH_IMG_262.jpg', ' Colour of back dark blue with a complicated striped pattern which does not extend forward beyond middle of first dorsal fin; lower sides and belly silvery white; several characteristic dark spots between pelvic and pectoral fins (but may not always be present) \r\n'),
(150, 'Short mackerel', 'Rastrelliger brachysoma', 38, 'Hasa-hasa; Kabalyas', 'FISH_IMG_62.jpg', 'This species is distinguished by the following characters: body very deep, its depth at posterior margin of opercle 3.7-4.3 times in fork length; head equal to or less than body depth; maxilla covered by lacrimal bone but extending nearly to end of lacrimal; gill rakers very long, visible when mouth is opened, 30-48 on ...\r\n\r\n'),
(151, 'Indian mackerel', 'Rastrelliger kanagurta', 38, 'Alumahang malaki;Alumahang baleg', 'FISH_IMG_859.jpg', 'Head longer than body depth.\r\n\r\n'),
(152, 'Blue mackerel', 'Scomber australasicus', 38, 'Tangigue', 'FISH_IMG_723.jpg', 'The Blue Mackerel has a fusiform body with two widely separated dorsal fins. Both the second dorsal fin and anal fin are followed by five to six finlets.'),
(153, 'Bigeye tuna', 'Thunnus obesus', 38, 'Tuna', 'FISH_IMG_100.jpg', 'This large species is distinguished by the following characters: robust, fusiform body, slightly compressed from side to side; total gill rakers on first gill arch 23-31; dorsal fins separated only by a narrow interspace, the second followed by 8-10 finlets; anal fin followed by 7-10 finlets; pectoral fins moderately ...'),
(154, 'Longfin grouper', 'Epinephelus quoyanus', 39, 'Lapu-lapu', 'FISH_IMG_868.jpg', 'head, body and fins with numerous large close-set hexagonal to roundish dark brown to blackish spots; ctenoid body scales except cycloid dorsoanteriorly above lateral line, on thorax and abdomen; body with auxiliary scales'),
(155, 'Greasy grouper', 'Epinephelus tauvina', 39, 'Pure lapu', 'FISH_IMG_939.jpg', 'Color of head and body pale greenish grey or brown with round dark spots that vary from dull orange-red to dark brown, centers darker than the edges.\r\n'),
(156, 'Leopard coralgrouper', 'Plectropomus leopardus', 39, 'Red lapu', 'FISH_IMG_414.jpg', 'A large olive green to reddish brown or orange-red coral trout covered in regularly-spaced bright blue spots (except below), and a blue ring around the eye (may be broken up).\r\n'),
(157, 'White-spotted spinefoot', 'Siganus canaliculatus', 40, 'Barangen', 'FISH_IMG_79.jpg', 'This species is distinguished by the following characters: body compressed, moderately slender, its depth 2.3-2.8 in SL; last anal-fin spine 1.2-1.5 times in longest anal-fin spine (usually the third); soft parts of dorsal and anal fins low, longest dorsal-fin ray 0.7-1 times in longest dorsal-fin spine; caudal fin ...\r\n\r\n'),
(158, 'Streaked spinefoot', 'Siganus javus', 40, 'Malaga', 'FISH_IMG_83.jpg', 'Body bronze above, white on belly and thorax; iris light brown; pectoral fins hyaline, pelvic fins white.\r\n'),
(159, 'Tufted sole', 'Dexillus muelleri', 41, 'Dadale', 'FISH_IMG_120.jpg', ' is a species of flatfish from the family of true soles Soleidae.'),
(160, 'Great barracuda', 'Sphyraena barracuda', 42, 'Barracuda; Penyosa;Torsilyo', 'FISH_IMG_331.jpg', ' Found predominantly at or near the surface \r\n'),
(161, 'Bigeye barracuda', 'Sphyraena forsteri', 42, 'Torsilyo', 'FISH_IMG_512.jpg', ' its elongate shape, large eye, and colouration. It is greenish-grey dorsally, has silvery sides, a black blotch on the base of the pectoral fin, and white tips to the second dorsal and anal fins.\r\n'),
(162, 'Pickhandle barracuda', 'Sphyraena jello', 42, 'Barracuda', 'FISH_IMG_244.jpg', ' A large barracuda with dark chevron-like bars along the body that cross the lateral line, and a yellowish caudal fin. \r\n\r\n'),
(163, 'Obtuse barracuda', 'Sphyraena obtusata', 42, 'Barracuda; Torsilyo', 'FISH_IMG_220.jpg', 'Body elongate and subcylindrical with small cycloid scales; head long and pointed.\r\n'),
(164, 'Silver pomfret', 'Pampus argenteus', 43, 'Pampano', 'FISH_IMG_565.jpg', 'Operculum absent; gill opening reduced to a vertical slit on the side of the body; gill membrane broadly united to isthmus. Dorsal and anal fins preceded by a series of 5 to 10 blade-like spines with anterior and posterior points. Pelvic fins absent.'),
(165, 'Gracile lizardfish', 'Saurida gracilis', 44, 'Kalaso; Dalag baybay', 'FISH_IMG_150.jpg', 'The gracile lizardfish is a species of lizardfish which lives mainly in the Indo-Pacific region.'),
(166, 'Greater lizardfish', 'Saurida tumbil', 44, 'Kalaso; Dalag baybay', 'FISH_IMG_657.jpg', 'Body is cigar-shaped, rounded or slightly compressed; the head pointed and depressed; the snout broader than long. '),
(167, 'Fourlined terapon', 'Pelates quadrilineatus', 45, 'Babansi; Banlaongan', 'FISH_IMG_27.jpg', 'Fourline Striped Grunter, Pelates quadrilineatus (Bloch 1790) Summary: Adults are silvery with 4-6 dark stripes along the sides, a dark blotch below the anterior dorsal-fin spines, and a black blotch on the spinous dorsal fin. \r\n\r\n'),
(168, 'Small-scaled terapon', 'Terapon puta', 45, 'Banlaongan', 'FISH_IMG_917.jpg', 'Terapon puta is silvery-grey with four longitudinal, parallel stripes which extend from the head to the caudal fin, upper three stripes are black, the lowermost stripe is paler and varies from yellowish to brown. '),
(169, 'Largehead hairtail', 'Trichiurus lepturus', 46, 'Espada; Pinka', 'FISH_IMG_489.jpg', 'have no scales. Instead, their long, tapered bodies are covered with shiny, metallic silver skin. The body conformation is cutlass-like, tapering from the head to a pointed tail.');

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
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `message` text NOT NULL,
  `is_read` tinyint(1) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `email`, `message`, `is_read`, `created_at`) VALUES
(1, 'kayna@gmail.com', '      Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet quae veritatis itaque fugit libero officiis doloribus quo omnis, repellat eum quam, quod quibusdam? Incidunt fugiat, iste vel unde aut ut porro aperiam quod inventore sed tempora explicabo. Quas totam doloribus eligendi modi voluptas consequatur quam iure consequuntur ab, sed laborum.\r\n', 1, '2023-10-08 19:28:44'),
(2, 'jdept2@gmail.com', '      Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet quae veritatis itaque fugit libero officiis doloribus quo omnis, repellat eum quam, quod quibusdam? Incidunt fugiat, iste vel unde aut ut porro aperiam quod inventore sed tempora explicabo. Quas totam doloribus eligendi modi voluptas consequatur quam iure consequuntur ab, sed laborum.\r\n', 0, '2023-10-08 19:28:44'),
(3, 'kayna@gmail.com', '      Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet quae veritatis itaque fugit libero officiis doloribus quo omnis, repellat eum quam, quod quibusdam? Incidunt fugiat, iste vel unde aut ut porro aperiam quod inventore sed tempora explicabo. Quas totam doloribus eligendi modi voluptas consequatur quam iure consequuntur ab, sed laborum.', 0, '2023-10-08 19:29:12'),
(4, 'jdept2@gmail.com', '      Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet quae veritatis itaque fugit libero officiis doloribus quo omnis, repellat eum quam, quod quibusdam? Incidunt fugiat, iste vel unde aut ut porro aperiam quod inventore sed tempora explicabo. Quas totam doloribus eligendi modi voluptas consequatur quam iure consequuntur ab, sed laborum.', 0, '2023-10-08 19:29:12');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(6, 60, 'update uli'),
(21, 79, 'Calories: Approximately 80-90 calories'),
(22, 79, 'Protein: Approximately 18-20 grams'),
(23, 79, 'Fat: Less than 1 gram'),
(24, 79, 'Carbohydrates: 0 grams'),
(25, 79, 'Vitamins: B vitamins like B12'),
(26, 79, 'Omega-3 Fatty Acids: omega-3'),
(27, 80, 'Calories: Approximately 120 calories'),
(28, 80, 'Protein: About 22 grams'),
(29, 80, 'Total Fat: Approximately 3 grams'),
(30, 80, 'Saturated Fat: Less than 1 gram'),
(31, 80, 'Cholesterol: 40 milligrams'),
(32, 80, 'Sodium: 50 milligrams'),
(33, 81, 'Calories: Approximately 115 calories'),
(34, 81, 'Protein: About 23 grams'),
(35, 81, 'Fat: Approximately 3 grams'),
(36, 81, 'Carbohydrates: (less than 1 gram)'),
(37, 81, 'Vitamins: small amounts of vitamins B12');

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
(14, 58, 'jdsf', 'dfsaads', 'RECIPE_IMG_226.jpg'),
(17, 169, 'Pan Fried Hairtail', '1. Chop the hairtail into about 5 inch pieces. Pat dry with a paper towel and score the skin, cutting through the skin to a depth of about ¼ inch.\r\n\r\n2. Sprinkle the surface of the fish with 1 tsp kosher salt and 1 tsp white pepper, being sure to get both sides. Mix the remaining 1 tsp kosher salt and 1 tsp white pepper, and set aside for dipping later.\r\n\r\n3.  In a nonstick skillet, heat 1 tbsp vegetable oil over medium heat. When the oil is hot, place the pieces of fish in the pan. Let fry for 5 minutes without moving the pieces.\r\n\r\n4. Carefully flip the fish pieces over and fry on the second side, again without moving the pieces, for 5 minutes or until cooked through.\r\n5.  Remove from the pan and serve with the reserved pepper salt.', 'RECIPE_IMG_732.JPG'),
(18, 164, 'Silver Pomfret Pan Fry', '•	Make a paste of all the masala powder, add salt, lemon, ginger garlic paste, mix it up, \r\n\r\n•	Then apply it on the fish both the side (In n out),\r\n\r\n•	Keep it in the fridge for 2 to 3hour.  \r\n\r\n•	Heat up the frying Pan (Tava) add oil, \r\n\r\n•	when oil is hot, place the Fish on tava, fry both the side to golden brown', 'RECIPE_IMG_277.JPG'),
(19, 160, 'Fried Baraccuda Steaks', '1.	In a shallow dish, mix the flour, salt, black pepper, paprika, and cayenne pepper (if using) until well combined.\r\n2.	Rinse the barracuda steaks under cold water and pat them dry with paper towels.\r\n3.	Heat the vegetable oil in a large skillet over medium-high heat until shimmering.\r\n4.	Dredge the barracuda steaks in the seasoned flour, coating them evenly on both sides. Shake off any excess flour before placing them in the skillet.\r\n5.	Fry the barracuda steaks for 4-5 minutes per side, or until they are golden brown and cooked through. The internal temperature should reach 145°F (63°C) when tested with a meat thermometer.\r\n6.	Use a slotted spatula to transfer the fried barracuda steaks to a paper towel-lined plate to drain any excess oil.\r\n7.	Serve the Belizean fried barracuda steaks immediately with lime wedges on the side for squeezing over the top.\r\n8.	Pair with your favorite Belizean side dishes, such as rice and beans or a fresh salad, for a complete and satisfying meal', 'RECIPE_IMG_992.JPG'),
(20, 159, 'Pan Fry Sole Fillet', '•	Marinate sliced fish fillet with salt, pepper, ginger, cornstarch, flour, garlic, egg, and coriander. Mix thoroughly and live for about an hour and put inside in the refrigerator.\r\n\r\n•	Heat pan with exact amount of cooking oil and saute ginger came from the  mixture and let it brown. Throw away ginger and Pan-fry marinated fish', 'RECIPE_IMG_205.JPG'),
(21, 156, 'Steamed coral trout with ginger and shallot', '•	Place a large roasting pan on the stove and fill one third full with water. Add the reserved spring onion roots, ginger trimmings, garlic peelings, coriander roots and a splash of the sesame oil and bring to the boil. \r\n\r\n•	Meanwhile, rub the fish with the remaining sesame oil, place onto a wire rack, then cover it tightly with foil. Place the rack on top of the baking tray with the boiling water and steam for 10 minutes.\r\n\r\n•	To make the garnish, place the spring onion, ginger, garlic, chillies and half the coriander in a bowl. Once the fish has been steaming for 10 minutes, scatter half the garnish over the fish, then cover again with the foil. Steam for another 3-5 minutes or until just cooked through.\r\n\r\n•	While the fish is steaming, place the sauce ingredients in a small saucepan and stir over low heat until hot.\r\n\r\n•	When the fish is cooked, transfer to a platter and spread the remaining garnish over the top. Drizzle the hot sauce over the top of the garnish, then sprinkle with the sugar.\r\n\r\n•	Place the peanut oil in a small saucepan over medium-high heat until it is smoking. It needs to be smoking when you pour it over the fish so it is hot enough to caramelise the sugar but don’t leave it unattended. Pour the smoking hot peanut oil over the trout, then scatter over the remaining coriander leaves and serve immediately.', 'RECIPE_IMG_455.JPG'),
(23, 155, 'Hong Kong Style Steamed Greasy Grouper', '1. After washing of fish, pat dry with paper towel. Salt the fish totally including its stomach. \r\n\r\n2. Lay 1/3 of the spring onions and 1/2 of the big slices of ginger on the plate. Stuff the fish stomach with another 1/3 of the spring onions and 2 slices of ginger. \r\n\r\n3. Rest the fish on the spring onions and ginger slices. Garnish the fish with the slices strips ginger. Place a sour plum next to the fish.\r\n\r\n4. Pour 1 teaspoon of rice water over the fish. Then another half cap of the ShaoXing wine over the fish. \r\n\r\n5.  Send the fish into the steamer for 10mins. \r\n\r\n6. Prepare the soy sauce mixture. \r\n\r\n7. Heat up the oil. \r\n\r\n8. When 10 mins is up, remove the plate and pour away the water on the plate (from the steaming process). Place the fish back into the steamer.', 'RECIPE_IMG_225.JPG'),
(24, 154, 'Fried Grouper Steak', '1, Rub salt and pepper on the grouper steaks. Let it stand for 10 minutes.\r\n	2. combine flour and cornstarch in a wide deep plate. Mix well.\r\n2.	3. Lightly dust the grouper steak with the flour and cornstarch mixture. Make sure that both sides are coated.\r\n3.	4. Heat the oil in a deep frying pan.\r\n4.	5. ry both sides of the grouper steak in medium heat for 6 to 8 minutes or until the color turns golden brown.\r\n5.	6. Arrange the fried grouper steak in a plate line with paper towels. This will help absorb excess oil.\r\n6.	7. Serve. Share and enjoy!', 'RECIPE_IMG_182.JPG'),
(25, 153, 'Seared Ahi Tuna', '•	Pat the ahi tuna steaks dry with a paper towel. Place on a plate or inside a plastic bag.\r\n\r\n•	Mix the soy sauce (2 tablespoons), toasted sesame oil (1 tablespoon), honey (1 tablespoon) kosher salt (1/2 teaspoon- OMIT if marinating for more than a couple hours, see notes), pepper (1/4 teaspoon), and cayenne pepper (1/4 teaspoon) until honey is fully dissolved. Pour over the ahi tuna steaks and turn over to coat completely. Optional: allow to marinate for at least 10 minutes, or up to overnight in the refrigerator. Also optional: Reserve a spoonful or two of the marinade before coating the fish for drizzling on top after you&#039;ve cooked it.\r\n\r\n•	Heat a medium skillet (preferably non-stick or a well-seasoned cast iron skillet) on medium-high to high until very hot ( or medium medium-high for nonstick). I recommend giving cast iron 3-5 minutes to get hot and nonstick about 1 minute, depending on how thick it is.\r\n\r\n•	Add the canola oil (1 tablespoon) to the hot pan. Sear the tuna for 1 – 1½ minutes on each side for medium rare ( 2 -2½ minutes for medium-well to well, 30 seconds for very rare. See notes – this will vary based on thickness of the tuna steaks). (Note: different burners get hotter depending on your stove. Use your best judgement whether you use medium, medium-high, or high heat, as the marinade may burn if too high heat is used)\r\n\r\n•	Remove to a cutting board. Slice into 1/2 inch slices and serve garnished with green onions, toasted sesame seeds, and a squeeze of fresh lime juice, if desired', 'RECIPE_IMG_36.JPG'),
(26, 152, 'Fish Steak (Mackerel/Tangigue)', '•	Combine soy sauce, lemon or kalamansi juice, and pepper together. Pour over the fish and marinate for at least an hour.\r\n\r\n•	In a skillet, heat oil in medium high. Once the oil is hot enough, fry fish until golden brown. Place the cooked fish on your serving plate.\r\n\r\n•	In the same pan, stir-fry onion rings browning the edges a bit but not too much that it will become limp. Place onion rings on top or a round of the fish steak.\r\n\r\n•	Still, in the same pan, add the remaining marinade and let simmer for just a minute. Pour on top of the fish steak. Serve.', 'RECIPE_IMG_525.JPG'),
(27, 151, 'Indian Style Pan Fried Mackerel', '1.	\r\n2.	1\r\nGently rinse filets in cold water. Place fish, skin-side down, on a few paper towels. Place 2-3 sheets of paper towels on top. Let dry for 2 minutes.\r\n3.	\r\n4.	2\r\nRemove paper towels on top and salt the fish. Let stand 15 minutes.\r\n5.	\r\n6.	3\r\nMeanwhile, grind spices. Sprinkle on both sides of fish.\r\n7.	\r\n8.	4\r\nHeat a pan on medium. Pour in half the clarified butter and place fish skin-side up. Let cook for 3-4 minutes without touching it.\r\n9.	\r\n10.	5\r\nFlip mackerel with a long spatula. Turn off heat, but leave pan on the burner (another 1½-2 minutes) to finish cooking. Pour the remaining clarified butter over filets and garnish with the herbs. Serve with lime quarters', 'RECIPE_IMG_311.JPG'),
(28, 150, 'Pinangat na Hasa-hasa', '1. Prepare fish by removing gut and washing well afterwards.\r\n2. Peel and chop ginger.\r\n3. Cut tomatoes into thin wedges, deseeding them as you go along.\r\n4. Peel, halve and slice onion thinly.\r\n5. Line bottom of stockpot with ginger, onion and half of the tomatoes.\r\n6. Top chopped vegetbles with hasa-hasa fish.\r\n7. Place remaining tomato slices in between.\r\n8. Pour in calamansi juice, followed by water.\r\n9. Season with salt and pepper to taste.\r\n10. Cover stockpot with lid. Let boil. When boiling, lower heat and simmer for 15 to 20 minutes, allowing the fish to cook thoroughly.\r\n11. Remove from heat and serve', 'RECIPE_IMG_560.JPG'),
(29, 148, 'Kinilaw na Tanigue/Tanngigue', '•	Squeeze the juice out of the calamansi over a large bowl. Use a sieve to filter the seeds. Discard the seeds.\r\n•	In the bowl with calamansi juice, add sugar, ½ teaspoon salt, and ground black pepper. Stir until the sugar and salt are diluted.\r\n•	Add the ginger, chili, and onion. Stir for a few seconds until all ingredients are well blended.\r\n•	Arranged the raw fish cubes in a large bowl. Pour the calamansi mixture. Toss until the fish cubes are coated. Let is stay for 10 minutes.\r\n•	Toss one more time and taste. Add more salt if needed. You can also add more calamansi juice if needed. Toss to blend all the ingredients. Securely cover the bowl and place it inside the refrigerator. Let it chill for at least 3 hours.\r\n•	Serve. Share and enjoy!', 'RECIPE_IMG_74.JPG'),
(30, 147, 'Pinangat na Isda (Spotted Scat)', '1.	Boil the tamarind fruit in a small pot with a cup of water, and mash it well until all the sour taste is juiced out from the fruit. Strain and set aside.\r\n2.	Line the bottom of a pan or wok with some slices of tomatoes, onion and ginger. And set aside the remaining tomatoes.\r\n3.	Place each fish on top and then place the remaining tomatoes on top of the fish.\r\n4.	Pour in the vinegar, tamarind juice, siling haba and usbong. Season with salt and pepper.\r\n5.	After arranging all the ingredients in the pot, let it sit for a few minutes to let the fish marinate. It will allow the ingredients to be absorbed by the meat of the fish.\r\n6.	Bring to a boil and then drizzle with some vegetable oil. Simmer over medium to low heat for 5 minutes or until the fish is cooked. Do not overcook the fish or it will become too flaky.\r\n7.	Turn off heat and transfer on a serving bowl. Serve with steamed rice. Enjoy!', 'RECIPE_IMG_484.JPG'),
(31, 143, 'Salt and Pepper Flathead Tail', '1.	Place flathead tails in plastic bag, add salt, pepper and flour and shake to coat flathead.\r\n2.	Place salad mix on two plate and top with beetroot, carrot and capsicum.\r\n3.	Place medium frying pan over medium heat. Place in olive oil. Add flathead tails and cook 2 minutes each side until cooked through.\r\n4.	Place on top of salad mix.\r\n5.	Mix sweet chilli sauce and lemon juice together and drizzle over fish and salad.\r\n6.	Serve immediately', 'RECIPE_IMG_833.JPG'),
(32, 137, 'Fried Bisugo', '1. Season both side of fish with salt.\r\n2. Roll fish in flour.\r\n3. Fry in oil until golden brown. Drain on absorbent towel.\r\n4. Serve with lemon and bagoong alamang (shrimp paste) as dipping sauce.', 'RECIPE_IMG_571.JPG'),
(33, 136, 'Sinigang na Bisugo at Hipon', '1.	In a deep pan boil the water.\r\n2.	Add the garlic, onion, ginger, and then boil.\r\n3.	Add the tomatoes and radish. Then, boil.\r\n4.	Put salt and pepper to taste.\r\n5.	Add the bisugo and shrimp. Put into a boil.\r\n6.	Add the calamansi juice and bring it into a boil.\r\n7.	Serve and enjoy', 'RECIPE_IMG_354.JPG'),
(34, 135, 'Paksiw na Bisugo', '•	In a medium-sized pan, combine all ingredients. Cover.\r\n•	Let it boil for 15-20 minutes in a medium-low heat. Cook until the the fish and sauce are ready (it has to have no more acidic taste).\r\n•	Serve hot.\r\n•	Note: Do not stir the dish. Let it boil until the acidic aroma of the sauce is gone.', 'RECIPE_IMG_312.JPG'),
(35, 134, 'Pinangat na Bisugo', '1. Place half of the slices of tomatoes in the bottom of a pan with some slices of onion and ginger. And set aside your remaining tomatoes for later use.\r\n2. Add each Bisugo on top and then top it with your remaining tomatoes.\r\nPour calamansi juice on your bisugo, throw in siling haba and add 2 cups of water. Then sprinkle pinch of salt.\r\n3. Let it marinate for a few minutes to let the flavor absorbed. Giving it an extra few minutes will allow the ingredients to sink in and taste even better.\r\n4. After a few minutes, place it in stove and start cooking. Bring it to a boil and then add some vegetable oil. Adjust heat to low and simmer for about 15 minutes or until the fish is cooked. Don’t overcook the fish if you dont like a flaky fish.\r\n5. Turn off stove and transfer on a serving bowl. Enjoy!', 'RECIPE_IMG_931.JPG'),
(36, 126, 'Baked Grey Mullet with Garlic, Lemon, Chilli and C', '•	Pre heat the oven to 200 degrees celsius.\r\n•	Whilst the oven is heating up, finely slice the red onion and add to a mixing bowl.\r\n•	Roughly chop the garlic, chilli and coriander and mix with the onion. Add the lemon juice, olive oil, salt and pepper and combine well.\r\n•	Lay the fish on a good sized baking tray and lightly score both sides every inch along the fish. Coat the fish with the mixture making sure to fill the main cavity and rub thoroughly onto the skin.\r\n•	Put into the oven and reduce the heat down to 170 degrees celsius for 20 minutes.\r\n•	Check that the meat can be pulled off the bone easily and serve with rice or salad and a yogurt dressing', 'RECIPE_IMG_743.JPG'),
(37, 125, 'Braised leatherjacket fish', '•	Heat oil in pan and saute the ginger and black beans till fragrant.\r\n•	Add leatherjacket fish, water and all seasonings. Bring to a boil.\r\n•	Reduce heat and put the pan lid on. Simmer for 8-10 minutes.\r\n•	Stir in chillies and spring onions. Serve with steamed rice.', 'RECIPE_IMG_754.JPG'),
(38, 117, 'Daing nga Bagsang – Daing na Sapsap (Dried Pony Fi', '1) Marinate the fresh, small pony fishes into desired amount of vinegar, salt, garlic, and black pepper to enhance the natural and tasty flavor.\r\n\r\n2) Dry them under the heat of the sun for 1-2 days.\r\n\r\n3) Ready to cook: deep-fry for 2-3 minutes.\r\n\r\n4) Serve it with freshly sliced tomatoes. This is best paired with fried rice and over-easy eggs. Enjoy!', 'RECIPE_IMG_573.jpg'),
(39, 116, 'Tinolang Sap-sap', '1. Boil water.\r\n\r\n2. Once boiling, add tomato, onion, and salt.\r\n\r\n3. After 5 minutes, add the fish.\r\n\r\n4. Add long peppers if desired.\r\n\r\n5. Keep boiling until fish is cooked.\r\n\r\n6. When ready to serve, add the spring onions on top of it.', 'RECIPE_IMG_341.JPG'),
(40, 115, 'Fried Ponyfish', '1.	Cut and clean the fish, keep aside\r\n2.	Combine rest of the ingredients with water to make a thick paste\r\n3.	Marinate the fish in the masala paste for an hour on the counter top\r\n4.	Heat coconut oil in a skillet\r\n5.	Fry the fish on medium heat until the skin turns deep golden brown', 'RECIPE_IMG_592.JPG'),
(41, 114, 'Ginataang Sap-sap', '`1. Combine Knorr Ginataang Gulay mix with water. Mix well. Set aside.\r\n1.	\r\n2.	2. Heat oil in pan. Saute onion, garlic, and ginger. Continue sautéing until onion softens.\r\n3.	\r\n4.	3. Pour ginataan mixture into pan. Add chili pepper. Let boil. Cook for 1 minute.\r\n5.	\r\n6.	4. Add butterfish. Cover the pan. Cook for 5 minutes.\r\n7.	\r\n8.	5. Pour vinegar and add long green chili pepper. Cover and cook for 2 minutes.\r\n9.	\r\n10.	6. Add spinach. Stir. Cook for 1 minute.\r\n11.	\r\n12.	7. Transfer to a serving plate. Serve with warm rice. Share and enjoy!', 'RECIPE_IMG_668.JPG'),
(42, 113, 'Pangat na Sap-sap', '1.	Rub the cleaned fish with salt. Let sit for at least 10 minutes.\r\n2.	In a large saucepan, arrange fish and put all the ingredients on top except for the cooking oil.\r\n3.	Cover and let it simmer for about fifteen minutes in a low fire or until the vinegar sauce dries up.\r\n4.	Pour the cooking oil and continue simmering for a minute. Remove from heat before the fish gets toasted.\r\n5.	Serve the dish with steamed rice,', 'RECIPE_IMG_465.JPG'),
(43, 107, 'Tasty Mangalorean Fish Curry Recipe with Coconut M', '1.	Grind the ingredients mentioned for the masala to a fine paste\r\n2.	Heat oil or ghee in a cooking vessel, fry 1 sliced onion till it slightly turns brown.\r\n3.	Add 4 slit green chilli, 1½ inch minced ginger and 4 cloves garlic and fry for some time\r\n4.	Add the ground masala and fry in it\r\n5.	Add the masala water, thin coconut milk and wait till the curry boils\r\n6.	Simmer the gas flame and add the thick coconut milk and stir it till the curry boils. (keep stirring till the curry boils)\r\n7.	Add the fish, cook for two mins and close the lid. Do not stir using the ladle, it may break the fish. Lift the vessel and rotate in the circular motion.\r\n8.	Best to serve it after 30 minutes.', 'RECIPE_IMG_205.jpg'),
(44, 105, 'Mojarra Frita: Colombia’s Scrumptious Fried Fish', 'Prepare the fish:\r\n•	Rinse the mojarra fish under cold water and pat it dry with paper towels.\r\n•	With a sharp knife, carefully score the fish on both sides, making diagonal cuts about 1-inch apart. This will help the fish absorb the marinade and cook evenly\r\n\r\nMarinate the fish:\r\n•	Season the fish with salt and pepper, and then drizzle the lime juice over both sides.\r\n•	In a small bowl, combine the minced garlic, ground cumin, and paprika to create a spice mixture.\r\n•	Rub the spice mixture on both sides of the fish, ensuring to get the seasoning into the scored slits. Don’t forget to season the fish cavity as well.\r\n•	Place the fish in a shallow dish or plastic bag, and let it marinate in the refrigerator for at least 30 minutes, or up to 2 hours for a more intense flavor.\r\nFry the mojarra:\r\n•	In a large, deep frying pan or skillet, pour enough vegetable oil to submerge at least half of the fish. Heat the oil over medium-high heat until it reaches approximately 350°F (175°C)\r\nServe the mojarra frita:\r\n•	Place the fried mojarra on a paper towel-lined plate or tray to absorb any remaining oil.', 'RECIPE_IMG_871.JPG'),
(45, 104, 'Anchovy Fry', '1.	Marinate anchovies with ginger garlic paste, chili powder, turmeric powder, pepper powder, fennel powder, rice flour and salt. Keep aside for 10 mins.\r\n\r\n2.	Heat oil in a pan on a medium flame and fry the marinated anchovies along with one sprig of curry leaves. Fry until the fish is cooked on both sides, browned, and crispy. Transfer it to a separate plate and keep aside.\r\n\r\n3.	Into the same pan, add sliced onions, green chilies, garlic pods and curry leaves. Sauté for 2 mins.\r\n\r\n4.	Add back the fried fish into the pan and top with chopped spring onions. Toss well and drizzle lime juice on top.\r\n\r\n5.	Serve warm with steamed rice or chapathi. You can store leftovers covered in the refrigerator for up to 3-4 days. Reheat in the microwave or on in a pan until hot', 'RECIPE_IMG_131.JPG'),
(46, 103, 'Ukoy na Dilis', '•	Rinse fish and drain well. Pat dry.\r\n•	In a pot over medium heat, heat about 2-inch deep of oil to about 350 F.\r\n•	In a large bowl, combine cornstarch, flour, salt, and pepper. Whisk until well distributed.\r\n•	Add egg, water, and fish sauce. Stir to combine.\r\n•	Add fish, shallots and green onions. Gently stir to combine.\r\n•	Using a large spoon, scoop about 2 to 3 tablespoons of the mixture and gently slide the mixture into the hot oil. Cook for about 3 to 4 minutes on each side or until golden brown and crisp.\r\n•	Using a slotted spoon, remove from the pan and drain on a wire rack set over a baking sheet. Serve', 'RECIPE_IMG_412.JPG'),
(47, 102, 'Batman Bat Fish, Fried Bat Fish', '1. Take any fish and add salt, red chilli powder, turmeric, fish fry masala and lemon juice. Coat the fish in all the spices.\r\n\r\n2. Fry it in a pan with extra virgin coconut oil.\r\n\r\n3. Take a banana leaf and place it in the pan. Add the minced ginger and green chillies to it . \r\n\r\n4. Then add the fried fish. \r\n\r\n5. Mix 4 tablespoons of coconut milk powder with 200 ml hot water and pour it over the fish. Allow it to cook over medium flame.', 'RECIPE_IMG_608.JPG'),
(48, 100, 'Ginataang Pagi', '1. Rub the stingray skins with salt. Wash fish thoroughly drain and cut into serving pieces. In a sauce pan put garlic, onion and ginger at the bottom. Add in the stingray and add about 1 cup of water, half of the coconut cream, vinegar, bay leaf, lemongrass and black pepper. \r\n\r\n2. Season with salt to taste. Cover and simmer in a medium heat for 10 to 15 minutes, add remaining coconut cream, chili and turmeric powder, and simmer for another 10 to 15 minutes or until liquid is reduce to thick consistency but not dry. \r\n\r\n3. Serve hot with a lot of rice.', 'RECIPE_IMG_390.JPG'),
(49, 99, 'Sarciadong Tuyo/Toyo', 'Sarciadong Tuyo/Toyo\r\n\r\nSarciadong tuyo is a Filipino dry fish dish, made by simmering fried tuyo in a sauce made by tomatoes, onion, green chilis, ginger, sugar, salt, pepper and oil. Instant gourmet tuyo at home! With the sarciadong tuyo, you won’t need extra vinegar dip and dive in it already with your big bowl of garlic fried rice.	\r\n•	9 pieces dried fish\r\n•	4 pieces’ tomatoes (diced)\r\n•	1 medium white onion (cut into rings)\r\n•	2 pieces long green chilies (chopped)\r\n•	1-piece small ginger (chopped)\r\n•	½ teaspoon sugar\r\n•	salt to taste\r\n•	black pepper to taste\r\n•	oil (for frying and sauteing)	\r\n- Prepare the tomatoes and slice them into large chunks. Transfer them to a bowl and set aside.\r\n\r\n- Wash the onions and slice them into rings. Transfer to a bowl and set aside.\r\n\r\n- Prepare the long green chilies and slice them into diagonal pieces. Transfer to a bowl and set aside.\r\n\r\n- Peel the ginger and slice into small strips. Transfer to a bowl and set aside.\r\n\r\n- Heat some oil in a pan and fry the dried fish. - Flip to cook the other side. Once cooked, remove them from the pan and set aside.\r\n\r\n- Heat some oil in another pan. Add in the onion rings and saute for a few minutes until soft.\r\n\r\n-  Then, add the ginger and tomatoes. Continue sauteing for a few minutes while gently crushing the tomatoes to extract the juice. Then, add the green chilies and some sugar and salt to taste. -Mix and stir well.\r\n\r\n- Add the fried tuyo to the pan and saute them together. Stir for a few seconds for the dried fish to absorb the sauce. After a few minutes of simmering, turn the heat off.\r\n\r\n- Transfer the sarciadong tuyo to a serving plate.\r\nhttps://yummykitchentv.com/sarciadong-tuyo/', 'RECIPE_IMG_785.JPG'),
(50, 98, 'Sardine Fish Gravy', '1. Take the sardines and pull off the intestines through opening. Remove the scales using a knife by sliding the knife to and fro along the fish sides. Once done wash fish pieces well in water. Marinate the fish pieces with few pinches of salt\r\n\r\n2. Cut three tomatoes, chop onions and split green chilies into two and set aside\r\n\r\n3. Soak tamarind in a cup of water for 15 minutes, then extract juice from it and set aside\r\n\r\n4. Take Grated Coconut pieces and cumin seeds in a grinding jar, make it paste and set aside\r\n\r\n5. In a pan add oil, after it heats up splutter mustard seeds, fenugreek seeds, curry leaves and chopped onions.\r\n\r\n6. Saute for a minute. Then add split green chilies, and saute.\r\n\r\n7. Add chopped tomatoes and stir well\r\n\r\n8. Add Garam masala, Turmeric powder, Chili powder and salt\r\n\r\n9. Add tamarind water and stir well.', 'RECIPE_IMG_806.JPG'),
(51, 97, 'Rainbow Sardine Salad', '•	Wash, drain and dice all above ingredients.\r\n•	Remove Sardines from can and place in a big Salad bowl. (Avoid as much of the tomato sauce as you can)\r\n•	Smash Sardines in bowl.\r\n•	Add in all diced ingredients.\r\n•	Squeeze lemon juice as desire.\r\n•	Add salt and Pepper to taste.\r\n•	Serve with a side of toasted bread.', 'RECIPE_IMG_331.JPG'),
(52, 96, 'Homemade Sardines', '1. In a pan, heat oil to saute onions and garlic until soft and fragrant. Add in tomatoes and tomato sauce.\r\n\r\n2. Add water, red chili peppers, bay leaves and whole black pepper and carrots.\r\n\r\n3. Season with salt, sugar and continue to simmer over low heat.\r\n\r\n4. Add in the fish. Let it simmer until cooked through.\r\n\r\n5. It is best if you can cook this into a pressure cooker for about 30 minutes when it starts to whistle. This way the fish bones will become very soft. You may need to add more tomato sauce if using a pressure cooker.', 'RECIPE_IMG_991.JPG'),
(53, 94, 'Paksiw na Matang Baka', '1.	In a pot put all the ingredients and let it boil then simmer until cooked.\r\n2.	If the taste of the vinegar is so strong, you can add a little water.\r\n3.	Simmer for few minutes until done.\r\n4.	Serve it with rice', 'RECIPE_IMG_122.JPG'),
(54, 91, 'Deep Fried Black Pomfret with Ginger', '1.	Rinse the black pomfret and score it slightly on both sides of the fish\r\n2.	Cut ginger into long narrow pieces and set aside\r\n3.	Heat up the cooking oil and fry the black pomfret until its skin turns a crispy golden brown. Remove from the oil and set aside.\r\n4.	Using a separate wok/pan, add 2 teaspoons of oil to it and stir fry ginger slices until they turn golden\r\n5.	Mix in the soya sauce, water as well as sugar. Continue sauteing this mixture for about 10 seconds or so.\r\n6.	Turn the heat off and pour the sauce all over your deep fried pomfret! Garnish with parsley and serve immediately.', 'RECIPE_IMG_159.JPG'),
(55, 90, 'Stuffed fried Ikan Cencaru or Torpedo Scad', '1.	Cut the dried chillies, red chillies, onions, lemon grass and the kaffir lime leaves into small sizes.\r\n2.	Put all the cut ingredients in a blender, pour in the tamarind juice to blend until all the ingredients were fine.\r\n3.	Strand the extra liquid from the blended ingredients.\r\n4.	 In a prying pan, heat up the two tablespoons of oil, fry the ingredients until fragrant.\r\n5.	Leave a side and let cool. Wash the fish and pat dry.\r\n6.	Fill in the fried ingredients into the slide open backs and the stomachs of all the fishes.\r\n7.	Heat up enough oil for deep frying the fish. Fry the fish in low fire until golden brown.\r\n8.	Serve hot.', 'RECIPE_IMG_730.JPG'),
(56, 89, 'Grilled Trevally with Soy Sauce Sambal', '•	Clean fish and make a few slits on the belly. Rub fish with garlic, turmeric powder, salt &amp; pepper.\r\n•	Place a few slices of lemons, gingers and 1 knob of butter on baking tray before placing fish on it.\r\n•	Place the rest of the lemons, ginger and butter on top of the fish.Grill fish in 180 deg C oven, until cook.', 'RECIPE_IMG_351.JPG'),
(57, 88, 'Fish Steak Galunggong', 'Preparation:\r\n\r\n1.	Clean the fish galunggong, remove the innards, wash and drain water. Season them with a pinch of salt and rub them on the fish. Let them sit.\r\n2.	Prepare the spices needed, like garlic, onions, and tomatoes.\r\n3.	In a small bowl, combine soy sauce, lemon juice, oyster sauce, pepper, and sugar. Set aside.\r\nCooking:\r\n1.	Heat enough cooking oil in the frying pan. Fry the fish until golden brown.\r\n2.	Remove the fish from the frying pan and place it on a plate with paper towels. Set aside.\r\n3.	Using a clean pan, heat a small amount of oil. Then saute the garlic and onions until aromatic, and stir in the soy sauce mixture.\r\n4.	Add 1/4 cup of water or as needed and let it boil until it reduces a bit. Taste it and adjust it as needed.\r\n5.	Add the fried fish and add the ring onions, then simmer it for about 2 minutes, bathing the fish as needed. Then transfer to a serving plate.\r\n6.	Serve it while it is still hot. Share and enjoy the food.', 'RECIPE_IMG_982.JPG'),
(58, 86, 'Paksiw na Galunggong', '1.	Rub salt all over the fish including the inner cavity. Let it stay for 10 minutes.\r\n2.	Arrange the fish in a cooking pot along with the ginger, garlic, and long green pepper. Pour water and vinegar. Let boil.\r\n3.	Cover and simmer for 30 to 45 minutes. Add more water if needed.\r\n4.	Add salt to taste. Stir.\r\n5.	Serve with warm rice. Enjoy!', 'RECIPE_IMG_829.JPG'),
(59, 85, 'Fish Curry (Without Coconut)', '•	Take a earthernware kadai or any pan and heat it up. Add coconut oil in it and let it heat up too.\r\n ▢\r\nOnce it gets hot. Add the seasoning ingredients and let them sizzle for a min or so.\r\n ▢\r\nAdd in onions and saute for 5 mins till they turn translucent and slightly golden.\r\n ▢\r\nNow add in the spice powders along with salt and let them bloom in the oil for 30 sec.\r\n ▢\r\nThrow in the tomatoes and let the cook for 5 mins till they turn mushy.\r\n ▢\r\nNow add in the tamarind pulp and some water(around2-3 cups) and bring it to a boil.\r\n ▢\r\nNow add in the fish pieces and let it cook covered for 15-20 mins.\r\n ▢\r\nSwitch off the flame and serve with rice.', 'RECIPE_IMG_377.JPG'),
(60, 84, 'Escabecheng Talakitok', '•	Remove gills and innards of talakitok. Using scissors cut fins and tails. \r\n•	Wash fish thoroughly and slit cut diagonally at two locations across the middle, drain. \r\n•	Season inside and out with salt. \r\n•	Fry fish in a large frying pan until golden brown and skin crispy, Drain on paper towels.\r\n•	Keep aside. I a sauce pan quickly sauté garlic, ginger and onions. \r\n•	Add vinegar and simmer for 2 to 3 minutes, now add in pineapple juice and sugar, stir cook for 2 to 3 minutes or until uniform consistency of sauce is achieved,\r\n•	Thicken with cornstarch diluted in 1/2 cup of water. \r\n•	Add in carrot, celery and bell pepper, stir cook for another 1 to 2 minutes or until vegetables are just cooked. \r\n•	Season with salt to taste. \r\n•	In a big platter put fried fish and pour sauce over the fried fish. Serve immediately.', 'RECIPE_IMG_60.JPG'),
(61, 83, 'Paksiw na Talakitok', '1.	Combine the water, vinegar, ginger in a pot.\r\n2.	Arrange the sliced ampalaya, eggplant, finger chillies, and the fish in a layer.\r\n3.	Bring to a boil and simmer in low heat for about 20 minutes or until the fish is cooked through.\r\n4.	Serve with steamed rice and a dipping sauce of patis with siling labuyo.', 'RECIPE_IMG_41.JPG'),
(62, 82, 'Yellowtail scad fish-fry with cucumber and iceberg', '1. Combine chilli, semolina, fish masala powder, coriander, turmeric and pepper in a small bowl, and season to taste. Rub into fish and set aside.\r\n\r\n2. For cucumber and iceberg salad, combine cucumber, iceberg, coriander and spring onions in a bowl. Dry-roast cumin seeds in a small frying pan until fragrant (30 seconds). Transfer to a mortar and pestle and coarsely crush, transfer to a bowl and whisk in lime juice and oil, season to taste and toss with cucumber mix.\r\n\r\n3. Heat coconut oil in a large, deep-sided frying pan, add some curry leaves, then fry fish in batches, turning once, until golden and crisp (3-5 minutes). Wipe out pan with absorbent paper and repeat with remaining fish and curry leaves. Serve hot with cucumber and iceberg salad and lime wedges', 'RECIPE_IMG_541.JPG'),
(63, 81, 'Shrimp Scad Fish Curry With Fenugreek,Dill And Rad', '	Wash and clean the fish. Now, marinate it with salt, turmeric powder, and garlic paste. Shallow-fry it in a pan.\r\n	Make a fine paste of yellow mustard. Finely chop the tomatoes, green chilies, fenugreek and dill leaves. Take a pan and add fortune mustard oil. Now splutter in some five spices and when spluttering begins add garlic paste, red chili -coriander powder, tomatoes and the chopped greens. Add in the cut radish and half-fry it. Fry everything again for a minute.\r\n	Now add in the mustard paste, salt, turmeric powder and fry these masalas for not more than three minutes. After all, the frying has been done add in the water and let it simmer on medium-flame for three-five minutes and when the sauce starts to thicken a bit and a boil comes in it add the fried fish. After the dish is done you can add some raw mustard oil in it as it will enhance your eating experience very well.', 'RECIPE_IMG_953.JPG'),
(64, 79, 'Sweet and Sour Dalagang Bukid', '1.	Fry the dalagang bukid. Make sure it’s well done. I prefer it a little roasted. Then, set aside.\r\n2.	In a pan, put 1/2 cup water, carrots, bell pepper, onion, ginger, chili and put into boil for 3 minutes or until the carrots were cooked.\r\n3.	Add sugar and vinegar. Put into a boil.\r\n4.	Add the water with cornstarch and continue to stir while boiling. Put into a very low fire when the sauce thickens.\r\n5.	Add ketchup and stir.\r\n6.	Add ground pepper, stir, and remove from fire.\r\n7.	In a plate put the fish and drizzle with the sauce\r\n\r\n\r\n1.	Clean and wash in running water the dalagang bukid fish. Drain and season with salt. Deep fry until brown and skin are crispy. Set aside.\r\n2.	In a cooking pan, heat oil and saute garlic and onion until fragrant. Add the tomatoes and saute until very soft.\r\n3.	Then add water and bring to a boil. Add the beaten eggs, salt and pepper. Stir until the eggs are slightly cooked and distributed evenly.\r\n4.	Add the fried fish and let it simmer for a few minutes until the fish absorbed some of the liquid. Serve hot.', 'RECIPE_IMG_124.JPG');

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
(3, 'Fish Tagging', 'Fish Tagging: Fish tagging is a method of marking individual fish with unique identifiers to track their movement, behavior, and population dynamics. This involves attaching small tags or electronic devices to fish, which can include physical tags, fin clips, or implanted transmitters. By monitoring tagged fish, researchers gain valuable insights into migration patterns, habitat preferences, and the overall health of fish populations.', 'NO_IMG_YET'),
(4, 'Fishway', 'A fishway, also known as a fish ladder or fish pass, is a structure built in or around dams, weirs, or other barriers in rivers or streams to facilitate the migration of fish. Fishways provide a series of ascending steps or bypass channels that allow fish to navigate around obstacles and reach their spawning grounds or essential habitats. These structures help maintain healthy fish populations by restoring access to critical habitats and promoting natural reproductive processes.', 'NO_IMG_YET'),
(21, 'Ancillary Industries', 'Firms or companies related to the supply, construction and\r\nmaintenance of fishing vessels, gears, nets and other fishing paraphernalia; fishery\r\nmachine shops; and other facilities such as hatcheries, nurseries, feed plants, cold\r\nstorage, and refrigeration, processing plants and other pre-harvest and post harvest\r\nfacilities.', 'NO_IMG_YET'),
(22, 'Appropriate Fishing Technology', 'Adaptable technology, both in fishing and\r\nancillary industries, that is ecologically sound, locally source-based and labor\r\nintensive.', 'NO_IMG_YET'),
(23, 'Aquaculture', 'Fishery operations involving all forms of raising and culturing fish\r\nand other fishery species in fresh, brackish and marine areas.', 'NO_IMG_YET'),
(24, 'Aquatic Pollution', 'The introduction by human or machine, directly or indirectly, of\r\nsubstances or energy to the aquatic environment which result or is likely to result in\r\nsuch deleterious effects as to harm living and non-living aquatic resources, pose\r\npotential and/or real hazard to human health, hindrance to aquatic activities such as\r\nfishing and navigation, including dumping/disposal of waste and other marine\r\nlitters, discharge of petroleum or residual products of petroleum or carbonaceous\r\nmaterials/substances and other radioactive, noxious or harmful liquid, gaseous or\r\nsolid substances, from any water, land or air transport or other human-made\r\nstructure. Deforestation, unsound agricultural practices such as the use of banned\r\nchemicals and excessive use of chemicals, intensive use of artificial fish feed, and\r\nwetland conversion, which cause similar hazards and deleterious effects shall also\r\nconstitute aquatic pollution.', 'NO_IMG_YET'),
(25, 'Aquatic resources', 'Includes fish, all other aquatic flora and fauna and other living\r\nresources of the aquatic environment, including but not limited to salt and corals.', 'NO_IMG_YET'),
(26, 'Artificial Reefs', 'Any structure of natural or man-made materials placed on a body of\r\nwater to serve as shelter and habitat, source of food, breeding areas for fishery\r\nspecies and shoreline protection.', 'NO_IMG_YET'),
(27, 'Closed Season', 'The period during which the taking of specified fishery species by a\r\nspecified fishing gear is prohibited in a specified area or areas in Philippine waters.', 'NO_IMG_YET'),
(28, 'Coastal Area/Zone', 'Is a band of dry land and adjacent ocean space (water and\r\nsubmerged land) in which terrestrial processes and uses directly affect oceanic\r\nprocesses and uses, and vice versa.', 'NO_IMG_YET'),
(29, 'Coral', 'The hard calcareous substance made up of the skeleton of marine\r\ncoelenterate polyps which includes reefs, shelves and atolls or any of the marine\r\ncoelenterate animals living in colonies where their skeletons form a stony mass.', 'NO_IMG_YET'),
(30, 'Coral Reef', 'A natural aggregation of coral skeleton, with or without living coral\r\npolyps, occurring in intertidal and subtidal marine waters.', 'NO_IMG_YET'),
(31, 'Electrofishing', 'The use of electricity generated by batteries, electric generators and\r\nother source of electric power to kill, stupefy, disable or render unconscious fishery\r\nspecies, whether or not the same are subsequently recovered.', 'NO_IMG_YET'),
(32, 'Endangered, Rare and/or Threatened Species', 'Aquatic plants, including some\r\nvarieties of corals and sea shells in danger of extinction as provided for existing\r\nfishery laws, rules and regulations or in the Protected Areas and Wildlife Bureau of\r\nthe Department of Environment and Natural Resources (DENR) and in the\r\nConvention of the International Trade of Endangered Species of Flora and Fauna\r\n(CITES).', 'NO_IMG_YET'),
(33, 'Fine Mesh Nets', 'Net with mesh size of less than three centimeters (3 cm.) measured\r\nbetween two (2) opposite knots of a full mesh when stretched or as otherwise\r\ndetermined by the appropriate government agency.', 'NO_IMG_YET'),
(34, 'Fish and Fishery/Aquatic Products', 'Include not only finfish but also mollusk,\r\ncrustaceans, echinoderms, marine mammals, and all other species of aquatic flora\r\nand fauna and all other products of aquatic living resources in any form.', 'NO_IMG_YET'),
(35, 'Fish cage', 'Refers to an enclosure which is either stationary or floating made up of\r\nnets or screens sewn or fastened together and installed in the water with opening at\r\nthe surface or covered and held in a place by wooden/bamboo posts or various types\r\nof anchors and floats.', 'NO_IMG_YET'),
(36, 'Fish Coral or &quot;Baklad&quot;', 'A stationary weir or trap devised to intercept and capture\r\nfish consisting of rows of bamboo stakes, plastic nets and other materials fenced\r\nwith split bamboo mattings or wire mattings with one or more enclosures, usually\r\nwith easy entrance but difficult exit, and with or without leaders to direct the fish to\r\nthe catching chambers, purse or bags.', 'NO_IMG_YET'),
(37, 'Fish Fingerlings', 'A stage in the life cycle of the fish measuring to about 6-13 cm.\r\ndepending on the species.', 'NO_IMG_YET'),
(38, 'Fish Fry', 'A stage at which a fish has just been hatched usually with sizes from 1-\r\n2.5 cm.', 'NO_IMG_YET'),
(39, 'Fish pen', 'An artificial enclosure constructed within a body of water for culturing\r\nfish and fishery/aquatic resources made up of poles closely arranged in an enclosure\r\nwith wooden materials, screen or nylon netting to prevent escape of fish.', 'NO_IMG_YET'),
(40, 'Fisherfolk', 'People directly or personally and physically engaged in taking and/or\r\naquatic resources.', 'NO_IMG_YET'),
(41, 'Fisherfolk Cooperative', 'A duly registered association of fisherfolk with a common\r\nbond of interest, who have voluntarily joined together to achieve a lawful common\r\nsocial or economic end, making equitable contribution to the capital requirement\r\nand accepting a fair share of the risks and benefits of the undertakings in accordance\r\nwith universally accepted cooperative principles.', 'NO_IMG_YET'),
(42, 'Fisheries', 'Refers to all activities relating to the act or business of fishing, culturing,\r\npreserving, processing, marketing, developing, conserving and managing aquatic\r\nresources and the fishery areas, including the privilege to fish or take aquatic\r\nresource thereof.', 'NO_IMG_YET'),
(43, 'Fish Pond', 'A hand-based facility enclosed with earthen or stone material to\r\nimpound water for growing fish.', 'NO_IMG_YET'),
(44, 'Fishing Boat/Gear License', 'A permit to operate specific types of fishing boat/gear\r\nfor specific duration in areas beyond municipal waters for demersal or pelagic\r\nfishery resources.', 'NO_IMG_YET'),
(45, 'Fishery Operator', 'One who owns and provides the means including land, labor,\r\ncapital, fishing gears, and vessels, but does not personally, engage in fishery.', 'NO_IMG_YET'),
(46, 'Fishing', 'The taking of fishery species from their wild state or habitat, with or\r\nwithout the use of fishing vessels.', 'NO_IMG_YET'),
(47, 'Fishing gear', 'Any instrument or device and its accessories utilized in taking fish\r\nand other fishery species.', 'NO_IMG_YET'),
(48, 'Fishing vessel', 'Any boat, ship or other watercarft equipped to be used for taking of\r\nfishery species or aiding or assisting one (1) or more vessels in the performance of\r\nany activity relating to fishing, including, but not limited to, preservation, supply,\r\nstorage, refrigeration, transportation and/or processing.', 'NO_IMG_YET'),
(49, 'Fishworker', 'A person regularly or not regularly employed in commercial fishing\r\nand related industries, whose income is either in wage, profit-sharing or stratified\r\nsharing basis, including those working in fish pens, fish cages, fish corrals/traps,\r\nfishponds, prawn farms, sea farms, salt beds, fish ports, fishing boat or trawlers, or\r\nfish processing and/or packing plants.', 'NO_IMG_YET'),
(50, 'Payao', 'A fish aggregating device consisting of a floating raft anchored by a\r\nweighted line with suspended materials such as palm fronds to attract pelagic and\r\nschooling species common in deep waters.', 'NO_IMG_YET'),
(51, 'Trawl', 'An active fishing gear consisting of a bag shaped net with or without otter\r\nboards to open its opening which is dragged or towed along the bottom or through\r\nthe water column to take fishery species by straining them from the water,\r\nincluding all variations and modifications of trawls (bottom, mid-water, and baby\r\ntrawls) and tow nets.', 'NO_IMG_YET'),
(52, 'BFAR', 'Bureau of Fisheries and Aquatic Resources', 'NO_IMG_YET'),
(53, 'Breeders /Spawners', 'Mature mangrove crabs that are physiologically highly developed and ready to spawn or produce eggs and sperm for reproduction.', 'NO_IMG_YET'),
(54, 'Carapace Width', 'The measurement of the width of the carapace or the &#039;shell&#039; on the back of the crab from side-to-side at the tip of the longest spine.', 'NO_IMG_YET'),
(55, 'Gravid', 'Female mangrove crabs which is considered pregnant carrying eggs in cluster at its belly.', 'NO_IMG_YET'),
(56, 'Hatchery-bred', 'Mangrove crablets or juveniles that are hatched and reared in nurseries which are used as aquaculture seed.', 'NO_IMG_YET'),
(57, 'Push Net or Scissor Net', 'Locally known as sudsud, sayap, sakag, tangab. A small triangular fishing  net with a rigid frame that is pushed along the bottom in shallow waters.', 'NO_IMG_YET'),
(58, 'Longline', 'Is a fishing technique that uses a longline called the mainline, with baited hooks attached at intervals by means of branch lines using a swivel, with the hook at the other end.', 'NO_IMG_YET'),
(59, 'Transshipment', 'The unloading of all or any fish on board a fishing vessel to another fishing vessel either at sea or port.', 'NO_IMG_YET'),
(60, 'Superlight', 'Also called magic light, is a type of light using halogen or metal halide bulb which may\r\nbe located above the sea surface or submerged in the water. It consists of a ballast, regulator,\r\nelectric cable and socket. The source of energy comes from a generator, battery or dynamo coupled\r\nwith the main engine.', 'NO_IMG_YET'),
(61, 'Trawl', 'An active fishing gear consisting of a bag shaped net with or without otter boards to open its\r\nopening which is dragged or towed along the bottom or through the water column to take fishery\r\nspecies by straining them from the water, including all variations and modifications of trawls\r\n(bottom, mid-water, and baby trawls) and tow nets.', 'NO_IMG_YET'),
(62, 'Endemic species', 'Species that are introduced or non-native; foreign.', 'NO_IMG_YET'),
(63, 'Effluent', 'A general term denoting any wastewater, partially or completely treated, or in\r\nits natural state flowing out of a manufacturing plant, industrial plant or treatment plant\r\nand from ponds and hatcheries.', 'NO_IMG_YET'),
(64, 'Fish cage', 'Refers to an enclosure which is either stationary or floating, made up of nets,\r\nor screen sewn or fastened together and installed in the water with opening at the surface\r\nor covered and held in a place by a wooden/bamboo posts or various types of anchors and\r\nfloats.', 'NO_IMG_YET'),
(65, 'Fishpen', 'An artificial enclosure constructed within a body of water for culturing fish,\r\nand fishery/aquatic resources made up of poles closely arranged in an enclosure with\r\nwooden materials, screen or nylon netting to prevent escape of fish.', 'NO_IMG_YET'),
(66, 'Hatchery', 'Refers to a lake-based or land-based structure growing or culturing fish for\r\nbreeding and fish seed production.', 'NO_IMG_YET'),
(67, 'Mariculture', 'Refers to seafarming of aquatic plants and fishes.', 'NO_IMG_YET'),
(68, 'Outfall', 'Refers to the outlet of a river, stream or lake', 'NO_IMG_YET'),
(69, 'Chilled fish', 'Fresh fish that has been subjected to zero degree Celsius (0 ° C).', 'NO_IMG_YET'),
(70, 'Fish and fishery/aquatic products', 'Include all crustaceans, mollusks and other\r\naquatic products, seawater and freshwater animals or other products of aquatic\r\nliving resources or parts thereof in whatever form whether fresh, chilled, frozen or\r\nprocessed, including but not limited to seaweeds, squalene and blubbers intended\r\nfor human consumption.', 'NO_IMG_YET'),
(71, 'Fish inspection', 'The assessment of the capability of fish processing plants to\r\nimplement and comply with the prescribed food safety and quality control\r\nmeasures.', 'NO_IMG_YET'),
(72, 'Food grade', 'A state of any ingredient which when added to food or of any\r\nmaterial which comes into direct contact with the food will maintain its fitness for\r\nhuman consumption.', 'NO_IMG_YET'),
(73, 'Finfish', 'A common term to define fish as separate from shellfish.', 'NO_IMG_YET'),
(74, 'Fishery', 'The people involved, species or type of fish, area of water, method of fishing, class of boats, purpose of the activities, or a combination of all of the above, engaged in raising or harvesting seafood.', 'NO_IMG_YET'),
(75, 'Gillnet', 'A curtain like net suspended in the water with mesh openings large enough to permit only the heads of the fish to pass through, ensnaring them around the gills when they attempt to escape.', 'NO_IMG_YET'),
(76, 'Groundfish', 'A species or group of fish that lives most of its life on or near the sea bottom.', 'NO_IMG_YET'),
(77, 'Habitat', 'The place and its associated environmental conditions where an organism naturally lives, grows, and reproduces; such conditions include characteristics of the substrate, water, and biological community.', 'NO_IMG_YET'),
(78, 'Harvest', 'The total number or poundage of fish caught and kept from an area over a period of time. Note that harvest, catch and landings have different definitions.', 'NO_IMG_YET'),
(79, 'Haulback', 'The period in fishing operations during which the gear is hauled from the water back onto the fishing vessel.', 'NO_IMG_YET');

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
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `fish`
--
ALTER TABLE `fish`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=171;

--
-- AUTO_INCREMENT for table `hatcheries`
--
ALTER TABLE `hatcheries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `jokes`
--
ALTER TABLE `jokes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `nutritions`
--
ALTER TABLE `nutritions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `quiz`
--
ALTER TABLE `quiz`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `recipes`
--
ALTER TABLE `recipes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `terms`
--
ALTER TABLE `terms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
