-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 08, 2023 at 03:05 PM
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
(2, 'jdept2@gmail.com', '      Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet quae veritatis itaque fugit libero officiis doloribus quo omnis, repellat eum quam, quod quibusdam? Incidunt fugiat, iste vel unde aut ut porro aperiam quod inventore sed tempora explicabo. Quas totam doloribus eligendi modi voluptas consequatur quam iure consequuntur ab, sed laborum.\r\n', 1, '2023-10-08 19:28:44'),
(3, 'kayna@gmail.com', '      Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet quae veritatis itaque fugit libero officiis doloribus quo omnis, repellat eum quam, quod quibusdam? Incidunt fugiat, iste vel unde aut ut porro aperiam quod inventore sed tempora explicabo. Quas totam doloribus eligendi modi voluptas consequatur quam iure consequuntur ab, sed laborum.', 1, '2023-10-08 19:29:12'),
(4, 'jdept2@gmail.com', '      Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet quae veritatis itaque fugit libero officiis doloribus quo omnis, repellat eum quam, quod quibusdam? Incidunt fugiat, iste vel unde aut ut porro aperiam quod inventore sed tempora explicabo. Quas totam doloribus eligendi modi voluptas consequatur quam iure consequuntur ab, sed laborum.', 0, '2023-10-08 19:29:12');

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
-- Indexes for table `messages`
--
ALTER TABLE `messages`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=170;

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
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

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
