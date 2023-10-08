-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 23, 2023 at 01:59 PM
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
(1, 'Engraulidae', '0000-00-00 00:00:00'),
(2, 'Istiophoridae', '0000-00-00 00:00:00'),
(3, 'Gerreidae', '2023-09-20 00:00:00'),
(4, 'Carangidae', '2023-09-20 00:00:00'),
(7, 'Leiognathide', '2023-09-20 14:47:51');

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
(7, 'Eyestripe surgeonfish', 'Acanthurus dussumieri', 1, 'Lablabahita', 'FISH_IMG_17.jpg', 'Acanthurus dussumieri is a deep-bodied, laterally-compressed oval fish with a maximum length of 54 cm (21 in). The head is small, with slightly prominent eyes, a small beak-like mouth and inflated, pale lips. The body is smooth, being covered with small scales, but like other surgeon-fish, it has a pair of scalpel-like, modified scales on the caudal peduncle; these can either be folded flat or raised in defence. Both dorsal and anal fins are long, and the pectoral fins are used for locomotion and balance.\r\n                  '),
(8, 'Hound needlefish', 'Tylosurus crocodilus', 1, 'Layalay', 'FISH_IMG_360.jpg', '<p>This species with is distinguished by the following characters: body elongate, circular in cross-section; D 21-24 with anterior rays forming a relatively high lobe, 5.4-10.6 body length (excluding the head and caudal fin); dorsal fin origin about equal with or slightly in front to anal fin origin; A 19-22.</p>\r\n'),
(9, 'Redbelly yellowtail fusilier', 'Caesio cuning', 1, 'Dalagang bukid', 'FISH_IMG_804.jpg', '<p>Scales center lighter than margins; lower 1/3 white, sometimes suffused by pink; prominent black markings on caudal fin absent. 4-5 scales on cheek; predorsal scales 20-26; scaled dorsal and anal fins. Upper peduncular scale rows 9-11; lower peduncular scale rows usually 12-14. Distinguished from&nbsp;<em>C. teres</em>&nbsp;in having a continuous supra-temporal band of scales across the dorsal midline.</p>\r\n'),
(10, 'Indian threadfish', 'Alectis indicus', 1, 'Tutungol', 'FISH_IMG_52.jpg', '<p>The Indian threadfish (Alectis indica), also known as the Indian threadfin, diamond trevally, mirror fish or plumed trevally, is a large species of coastal marine fish of the jack family, Carangidae.</p>\r\n'),
(11, 'Shrimp scad', 'Alepes djedaba', 1, 'Salay-salay ginto', 'FISH_IMG_789.jpg', '<p>The shrimp scad (Alepes djedaba) (also known as the slender yellowtail kingfish), is a species of widespread tropical marine fish of the jack family, Carangidae.&nbsp;</p>\r\n'),
(12, 'Yellowtail scad', 'Atule mate', 1, 'Salay batang', 'FISH_IMG_21.jpg', '<p>This species is distinguished by the following characters: adipose eyelid well developed and completely covering eye except for a vertical slit centred on pupil; shoulder girdle (cleithrum) margin smooth, without papillae; terminal dorsal and anal rays finlet-like in adults, about twice length of adjacent rays and a little more separated but joined by interradial membrane.</p>\r\n'),
(13, 'Longfin trevally', 'Carangoides armatus', 1, 'Talakitok', 'FISH_IMG_581.jpg', '<p>The longfin trevally (Carangoides armatus), also known as the longfin kingfish, longfin cavalla or armed trevally, is a species of inshore marine fish in the jack family, Carangidae.&nbsp;</p>\r\n'),
(14, 'Blue trevally', 'Carangoides ferdau', 1, 'Talakitok', 'FISH_IMG_479.jpg', '<p>The blue trevally (Carangoides ferdau), also known as the banded trevally, barred trevally, Ferdau&#39;s trevally or Forskaal&#39;s jackfish, is a common, widespread species of pelagic marine fish classified in the jack family, Carangidae.&nbsp;</p>\r\n'),
(15, 'Malabar trevally', 'Carangoides malabaricus', 1, 'Talakitok', 'FISH_IMG_938.jpg', '<p>The Malabar trevally (Carangoides malabaricus), also known as the Malabar jack, Malabar kingfish or nakedshield kingfish, is a species of large inshore marine fish of the jack family, Carangidae.</p>\r\n'),
(16, 'Red tail scad', 'Decapterus kurroides', 1, 'Galonggong', 'FISH_IMG_885.jpg', '<p>Deep bodied compared to similar species. Body color bluish green above, silvery below; caudal fin bright red. Sometimes a yellow mid-lateral stripe. Opercle with a small black spot; margin of opercular membrane smooth.</p>\r\n'),
(17, 'Shortfin scad', 'Decapterus macrosoma', 1, 'Galonggong', 'FISH_IMG_253.jpg', '<p>Body slender, elongate, and somewhat circular in cross section; posterior end of upper jaw concave dorsally and with a rounded protrusion ventrally; edge of shoulder girdle (cleithrum) with two small papillae, the lower one larger; dorsal and anal fin each followed by a separate finlet.</p>\r\n'),
(18, 'Japanese scad', 'Decapterus muruadsi', 1, 'Galonggong', 'FISH_IMG_770.jpg', '<p>The Japanese jack mackerel (Trachurus japonicus), also known as the Japanese horse mackerel or Japanese scad, is a species named after its resemblance to mackerel but which is in the family Carangidae, the jacks, pompanos, trevallies and scads.Their maximum reported length is 50 cm (20 in) with a common length of 35 cm (14 in).&nbsp;</p>\r\n'),
(19, 'Golden trevally', 'Gnathanodon speciosus', 1, 'Talakitok', 'FISH_IMG_958.jpg', '<p>The golden trevally (Gnathanodon speciosus), also known as the golden kingfish, banded trevally or king trevally, is a species of large marine fish classified in the jack and horse mackerel family Carangidae, and the only member of the monospecific genus Gnathanodon.&nbsp;</p>\r\n'),
(20, 'Torpedo scad', 'Megalaspis cordyla', 1, 'Bonito', 'FISH_IMG_343.jpg', '<p>The torpedo scad (Megalaspis cordyla), also known as the hardtail scad, finny scad, finletted mackerel scad or cordyla scad, is a species of moderately large marine fish classified in the jack and horse mackerel family, Carangidae.</p>\r\n'),
(21, 'Black pomfret', 'Parastromateus niger', 1, 'Pampano', 'FISH_IMG_717.jpg', '<p>Deep-bodied and strongly compressed fishes. Lateral line ends in weakly-developed scutes on the caudal peduncle. Pelvic fins lost in individuals over 9 cm. Color is brown above, silvery-white below. The anterior parts of the dorsal and anal fins bluish-gray. The other fins yellowish.</p>\r\n'),
(22, 'Needlescaled queenfish', 'Scomberoides tol', 1, 'Tulong-tulong', 'FISH_IMG_169.jpg', '<p>&nbsp;Dorsally bluish, ventrally silver or white, with 5-8 vertically oblong or oval black spots5-8, the first 4-5 intersect the lateral line, dorsal fin lobe black outer half. Body strongly compressed, oblong and elliptical, dorsal and ventral profiles equally convex.&nbsp;</p>\r\n'),
(23, 'Oxeye scad', 'Selar boops', 1, 'Matangbaka', 'FISH_IMG_237.jpg', '<p>This fish is silvery blue with a horizontal yellow line going through the middle. It grows to a maximum tital length of 26 centimetres (10 in). It has a large eye which takes up around a third of the head and its specific name, boops refers to this feature being a compound of bo meaning &quot;ox&quot; and ops meaning &quot;eye&quot;.</p>\r\n'),
(24, 'Bigeye scad', 'Selar crumenophthalmus', 1, 'Mataan', 'FISH_IMG_697.jpg', '<p>The bigeye scad (Selar crumenophthalmus) is a species of oceanic fish found in tropical regions around the globe. Other common names include purse-eyed scad, goggle-eyed scad, akule, chicharro, charrito oj&oacute;n, jacks, matang baka, mushimas and coulirou.The bigeye scad is fished commercially, both for human consumption and for bait.</p>\r\n'),
(25, 'Yellowstripe scad', 'Selaroides leptolepis', 1, 'Balanghay ekol', 'FISH_IMG_936.jpg', '<p>The yellowstripe scad (Selaroides leptolepis), also known as the yellowstripe trevally, yellow-banded trevally, smooth-tailed trevally, slender-scaled trevally and slender trevally, is a species of small inshore fish in the jack and horse mackerel family Carangidae, and the only member of the genus Selaroides.&nbsp;</p>\r\n'),
(26, 'Spotted sardinella', 'Amblygaster sirm', 1, 'Tamban', 'FISH_IMG_751.jpg', '<p>&nbsp;Body slender, belly rather rounded, scutes not prominent. It is distinguished from&nbsp;<em>Amblygaster clupeoides</em>&nbsp;and&nbsp;<em>A. leiogaster</em>&nbsp;by the presence of a series of 10-20 gold, in life, or black, on preservation, spots down the flank, but sometimes missing; also, lower gillrakers 33-43, while 26-33 in the other two species.</p>\r\n'),
(27, 'Rainbow sardine', 'Dussumieria acuta', 1, 'Tulis', 'FISH_IMG_650.jpg', '<p>The rainbow sardine (Dussumieria acuta), also known as common sprat, dwarf round herring, rainbow herring, and sharpnosed sprat, is a bony fish important to aquaculture and commercial fisheries.</p>\r\n'),
(28, 'Indian oil sardine', 'Sardinella longiceps', 1, 'Tamban', 'FISH_IMG_586.jpg', '<p>Body sub-cylindrical; a faint golden spot behind gill opening, followed by a faint golden mid-lateral line; a distinct black spot at hind border of gill cover (absence of pigment).</p>\r\n'),
(29, 'Blacktip sardinella', 'Sardinella melanura', 1, 'Toyo', 'FISH_IMG_211.jpg', '<p>Body depth usually not much more than 30% of standard length; scutes 27 to 31. The jet black caudal tips distinguish&nbsp;<em>S. melanura</em>&nbsp;from all other species of&nbsp;<em>Sardinella</em>&nbsp;except&nbsp;<em>S. atricauda</em>&nbsp;(scutes 32 to 35),&nbsp;<em>S. hualiensis</em>&nbsp;(dark spot at dorsal fin origin, scales fimbriated and with small perforations) and&nbsp;<em>S. fijiense</em>&nbsp;(gill rakers 87 to 134).</p>\r\n'),
(30, 'Blue-spotted stingray', 'Dasyatis kuhlii', 1, 'Page', 'FISH_IMG_879.jpg', '<p>This medium-sized&nbsp;<em>Neotrygon</em>&nbsp;of the&nbsp;<em>kuhlii</em>-complex (reaching at least 30 cm DW) is distinguished by the following set of characters: disc is broader than long, its width ca. 1.2 times length; pectoral apices are narrowly rounded; snout rather fleshy, broadly angular, its angle ca. 107&deg;, its length 1.7-2.1 times interorbital width.</p>\r\n'),
(31, 'Hawaiian ladyfish', 'Elops hawaiensis', 1, 'Bidbid', 'FISH_IMG_73.jpg', '<p>A gular plate present between arms of lower jaw. Branchiostegal rays numerous, approximately 20-25. All fins without spines. Scales very small, approximately 100 in lateral line.</p>\r\n'),
(32, 'Batfish', 'Platax orbicularis', 1, 'Bayong', 'FISH_IMG_372.jpg', '<p>The ocular band of adult specimens with a series of dark vermiculations .&nbsp;Adults (above 20 cm) yellowish silvery or dusky, dark bar through eye and another bar just behind head. Occasionally with a few small, scattered black spots on body. Median fins yellowish, with black margins posteriorly. Pelvic fins black. Small juveniles reddish brown, with irregular black spots and blotches and small, white (black-edged) ocelli on body.&nbsp;</p>\r\n'),
(33, 'Commerson’s anchovy', 'Stolephorus commersonii', 1, 'Dilis', 'FISH_IMG_747.jpg', '<p>Body somewhat compressed, belly a little rounded, with 0-5 small needle-like pre-pelvic scutes; maxilla tip pointed, reaching to or a little beyond hind border of pre-operculum, the latter convex, rounded; lower gillrakers usually 23 to 28; small teeth present on upper edge of hyoid bones; isthmus muscle tapering evenly forward to hind border of branchial membrane; pelvic fin tips reaching to below anterior dorsal finrays; anal fin short, with usually 3 unbranched and 18-19 branched finrays, its origin below second half of dorsal fin base.</p>\r\n'),
(34, 'Indian anchovy', 'Stolephorus indicus', 1, 'Tuakang', 'FISH_IMG_338.jpg', '<p>Body slender, elongate, rather round in cross-section, belly rounded, with 2-6 small needle-like pre-pelvic scutes; maxilla tip pointed, reaching to or only just beyond front border of pre-operculum; hind border of pre-operculum convex, rounded; lower gillrakers 20-28; isthmus muscle tapering evenly forward to hind border of branchial membrane; pelvic fin tips not reaching to below dorsal fin origin; anal fin short, with usually 3 unbranched and 16-18 branched finrays, its origin below centre of dorsal fin base</p>\r\n'),
(35, 'Deep-bodied mojarra', 'Gerres abbreviatus', 1, 'Batuan', 'FISH_IMG_631.jpg', '<p>Body silvery with indistinct fine dark stripes along scale rows above and 4-6 rows immediately below lateral line (apparent in newly preserved specimens; larger fishes). Body deep, depth max 1.9-2.3 in SL. Dorsal fin 2nd spine longer than 3rd; anal fin 2nd spine long and robust; caudal fin short and deeply forked.</p>\r\n'),
(36, 'Whipfin silver-biddy', 'Gerres filamentosus', 1, 'Malakapas', 'FISH_IMG_701.jpg', '<p>The&nbsp;whipfin silver-biddy,&nbsp;flagfin mojarra&nbsp;or&nbsp;threadfin silver belly, is a fish native to the coastline of Africa and Madagascar east to Japan, Australia and New Caledonia.</p>\r\n'),
(37, 'Common silver-biddy', 'Gerres oyena', 1, 'Lumalanang', 'FISH_IMG_668.jpg', '<p>Body silvery with 6-8 irregular, faint dusky oblique and vertical bands dorsolaterally and ventrolaterally (usually more apparent in young stressed or preserved specimens. U-shaped premaxilla groove mostly without scales (tiny scales anteriorly in specimens over 13 cm SL).&nbsp;</p>\r\n'),
(38, 'Javelin grunter', 'Pomadasys kaakan', 1, 'Siget', 'FISH_IMG_853.jpg', '<p>This species is distinguished by the following characters: chin with 2 pores with a median pit; D XII,13-15 (usually 14 &frac12;); A III,7; scales ctenoid (rough to touch); lateral line scales 43-50; scales between lateral line and dorsal-fin origin 7; scales around caudal peduncle 20, 9 above lateral line and 9 below; body depth 2.5 to 3 times in standard length; head blunt, its upper profile convex; mouth small; maxilla reaching to eye; teeth in jaws arranged in villiform (brushlike) bands; swimbladder without anteriolateral horn-like extensions.</p>\r\n'),
(39, 'Saddle grunt', 'Pomadasys maculatus', 1, 'Sagsagir', 'FISH_IMG_664.jpg', '<p>Small-sized fish of moderately deep body. Isthmus narrow, forming a groove. Chin with 2 pairs or small pores. This species is characterized by several dark large elongate blotches on the upper back, one forming a saddle on the nape.</p>\r\n'),
(40, 'Sicklefin weasel shark', 'Hemigaleus microstoma', 1, 'Pating', 'FISH_IMG_591.jpg', '<p>The sicklefin weasel shark (Hemigaleus microstoma) is an uncommon species of ground shark in the family Hemigaleidae. It is native to southern India, southern China, and parts of Southeast Asia, living in shallow waters down to a depth of 170 m (560 ft).&nbsp;</p>\r\n'),
(41, 'Indo-Pacific sailfish', 'Istiophorus platypterus', 1, 'Susay', 'FISH_IMG_278.jpg', '<p>The Indo-Pacific sailfish (Istiophorus platypterus) is a sailfish native to the Indian and Pacific Oceans and is naturalized in the Atlantic where it has entered the Mediterranean Sea via the Suez Canal as a Lessepsian migrant.It is dark blue on top, brown-blue laterally, silvery white underbelly; upper jaw elongated in the form of a spear; first dorsal fin greatly enlarged in the form of a sail, with many black cones, its front squared off, highest at its midpoint; pelvic fins very narrow, reaching almost to the anus; body covered with embedded scales, blunt at end; lateral line curved above pectoral fin, then straight to base of tail.</p>\r\n'),
(42, 'Smalltoothed ponyfish', 'Gazza achlamys', 1, 'Sap-sap', 'FISH_IMG_49.jpg', '<p>The fish called&nbsp;sapsap&nbsp;in Tagalog belongs to the family Leiognathidae. Its scientific name is sometimes given as&nbsp;<em>Gazza achlamys</em>&nbsp;but it has been reported as having other scientifc names.</p>\r\n'),
(43, 'Toothpony', 'Gazza minuta', 1, 'Sap-sap', 'FISH_IMG_947.jpg', '<p>Also known as&nbsp;Common-toothed Ponyfish, Large-toothed Ponyfish, Silver Belly, Slimy Ponyfish, Soapy, Soapy Pony, Tooth Ponyfish, Toothed Ponyfish, Toothed Soapy.</p>\r\n'),
(44, 'Orangefin ponyfish', 'Leiognathus bindus', 1, 'Lawayan', 'FISH_IMG_85.jpg', '<p>Also known as&nbsp;Deep Pugnose Pony, Orange Ponyfish, Orangefin Slipmouth, Orangetip Ponyfish, Orange-tipped Ponyfish, Silverbelly, Soapy, Soapy Pony, Tooth Pony.</p>\r\n'),
(45, 'Goldstripe ponyfish', 'Leiognathus daura', 1, 'Sap-sap maelol', 'FISH_IMG_117.jpg', '<p>Goldstripe ponyfish, black slipmouth, black-finned slipmouth or pugnose pony, is a species of marine ray-finned fish, a ponyfish from the family Leiognathidae. It is native to the Indian Ocean and the western Pacific Ocean, from the Gulf of Aden to the Philippines. It is found in shallow water, mainly over muddy substrates where it normally occurs in schools. Its diet consists of polychaetes, bivalves, small crustaceans and sponges.</p>\r\n'),
(46, 'Slender ponyfish', 'Leiognathus elongatus', 7, 'Sap-sap mabeng', 'FISH_IMG_749.jpg', 'Is species of the Equulites elongatus group is distinguished by the following set of characters: eye diameter 82-137% postorbital head length; distance from pelvic-fin insertion to center of anus 35-50% of the distance from pelvic-fin insertion to anal-fin origin; scales above lateral line 8-13, below 12-19; dorsolateral body with large dark blotches rarely forming ring marks (0-2) and a few dark spots (0-5) that are smaller than a half of pupil diameter; the tips of neural and hemal spines of fourth preural centrum is less expanding, distal expansion ratios of neural and hemal spines of the fourth preural centrum.\r\n                  '),
(47, 'Common ponyfish', 'Leiognathus equulus', 1, 'Sap-sap betsang', 'FISH_IMG_752.jpg', '<p>This species is distinguished by the following characters: body very deep, compressed, with a strongly humped back; body depth 1.7-1.9 times in standard length; mouth pointing downward when protracted; gill rakers short and fleshy, less than 1/2 length of corresponding gill lamellae, total gill rakers on first gill arch 18-22; head and breast scaleless; tubed scales on lateral line 61-66.&nbsp;</p>\r\n'),
(49, 'Smithurst’s ponyfish', 'Sap-sap', 1, 'Sap-sap', 'FISH_IMG_851.jpg', '<p>Smithurst&#39;s ponyfish, is a fish of brackish and marine waters found in the Indian and western Pacific Oceans, from India through Malaysia and Indonesia south to northern Australia and east to the Philippines and Fiji It was described in 1835 by French ..</p>\r\n'),
(50, 'Pink ear emperor', 'Lethrinus lentjan', 1, 'Babarat', 'FISH_IMG_28.jpg', '<p>The Pink Ear Emperor is a common fish throughout our waters, typically favouring reef/rocky and sandy places, feeding on small crustaceans and small fishes. They are able to bury themselves under shallow sand for protection, especially for younger fish.</p>\r\n'),
(51, 'Slender emperor', 'Lethrinus variegatus', 1, 'Babarat', 'FISH_IMG_199.jpg', '<p>Also known as Bream, Coral Bream, Pigface Bream, Scavenger, Trumpet Emperor, Variegated Emperor. Found singly or in schools, close to cover for camouflage, over rubble, sand and in seagrass beds of lagoons and coral reefs. They feed on small benthic invertebrates.</p>\r\n'),
(52, 'Humpback snapper', 'Lutjanus gibbus', 1, 'Angrat', 'FISH_IMG_704.jpg', '<p>This species is distinguished by the following characters: body moderately deep; greatest depth 2.2-2.5 in SL; preopercular notch and knob well developed; vomerine tooth patch crescentic, without a medial posterior extension; gill rakers of first gill arch 9-10 + 115-20 = 25-30 (including rudiments); caudal fin distinctly forked with rounded lobes. Colour red to greyish, an orange hue on lower part of opercle and in pectoral fin axil; fins red (pectoral fins) or usually dark brown to blackish; soft part of dorsal fin, anal and caudal fins with a narrow white margin; juveniles with a large round black spot at base of caudal fin (Ref. 9821, 90102).</p>\r\n'),
(53, 'Moonfish', 'Mene maculata', 1, 'Bulan-bulan;', 'FISH_IMG_891.jpg', '<p>Opahs, also commonly known as moonfish, sunfish, kingfish, and redfin ocean pan are large, colorful, deep-bodied pelagic lampriform fishes comprising the small family Lampridae. The family comprises two genera: Lampris and the monotypic Megalampris.</p>\r\n'),
(54, 'Unicorn leatherjacket', 'Aluterus monoceros', 1, 'Ampapaquet;', 'FISH_IMG_366.jpg', '<p>The unicorn leatherjacket is a filefish of the family Monacanthidae, found around the world in subtropical oceans between latitudes 43&deg; N and 35&deg; S, at depths down to 50 m. Its length is up to 76 cm.</p>\r\n'),
(55, 'Flathead grey mullet', 'Mugil cephalus', 1, 'Perong', 'FISH_IMG_128.jpg', '<p>The flathead grey mullet is an important food fish species in the mullet family Mugilidae. It is found in coastal tropical and subtropical waters worldwide. Its length is typically 30 to 75 centimetres.</p>\r\n'),
(56, 'Yellowstripe goatfish', 'Mulloidichthys flavolineatus', 1, 'Balaki', 'FISH_IMG_410.jpg', '<p>The yellowstripe goatfish is a species of goatfish native to the Pacific Ocean and the Indian Ocean. The fish is known as Weke &#39;a&#39;a in Hawaiian.</p>\r\n'),
(57, 'Indian goatfish', 'Parupeneus indicus', 1, 'Balaki;', 'FISH_IMG_768.jpg', '<p>Indian Goatfish (Parupeneus indicus)<br />\r\nAlso known as Yellowspot Goatfish. Found singly or in schools foraging for food in shallow, silty waters over sand and seagrass beds of coastal and inner lagoon reefs. They feed on crustaceans, small fish, benthic invertebrates and small octopus.</p>\r\n'),
(58, 'Rosy goatfish', 'Parupeneus rubescens', 1, 'Balaki', 'FISH_IMG_446.jpg', '<p>Red Goatfish also known as the Rosy Goatfish are found in the Red Sea, Indonesia, South Africa and Reunion Island. The Red Goatfish is a hardy character introducing energetic activity to the aquarium bottom as they actively patrol the sand bed to satisfy their appetites, making them a unique addition to your aquarium.</p>\r\n'),
(59, 'Goldband goldfish', 'Upeneus moluccensis', 1, 'Saramulyete', 'FISH_IMG_264.jpg', '<p>Upeneus moluccensis (Goldband Goldfish) is a species of ray-finned fishes in the family goatfishes. Individuals can grow to 25 cm. They have sexual reproduction. Reproduction is oviparous and iteroparous.</p>\r\n'),
(60, 'Yellowstriped goatfish', 'Upeneus vittatus', 1, 'Balaki', 'FISH_IMG_722.jpg', '<p>The yellowstripe goatfish is a species of goatfish native to the Pacific Ocean and the Indian Ocean. The fish is known as Weke &#39;a&#39;a in Hawaiian.&nbsp;</p>\r\n'),
(61, 'Snowflake moray', 'Echidna nebulosa', 1, 'Bircaca', 'FISH_IMG_810.jpg', '<p>The snowflake moray, also known as the clouded moray among many vernacular names, is a species of marine eel of the family Muraenidae. It has blunt teeth ideal for its diet of crustaceans, a trait it shares with the zebra moray. Its Hawaiian name is puhi-kapa, which originates from King Kamehameha I&rsquo;s nickname.</p>\r\n'),
(64, 'fds', 'dsf', 2, 'sdaf', 'FISH_IMG_412.jpg', 'hey di waw              ');

-- --------------------------------------------------------

--
-- Table structure for table `jokes`
--

CREATE TABLE `jokes` (
  `id` int(11) NOT NULL,
  `question` text NOT NULL,
  `answer` text NOT NULL,
  `joke_image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `jokes`
--

INSERT INTO `jokes` (`id`, `question`, `answer`, `joke_image`) VALUES
(4, 'Anong isda ang pinaka matanda?', 'Edi Century Tuna', 'JOKE_IMG_898.png'),
(5, 'Anong subject ang paborito ng mga fish?', 'edi FISHycal Education', 'JOKE_IMG_44.gif'),
(7, 'Ano ang pinaka ayaw na subject ng isda?', 'edi FISHysics', 'JOKE_IMG_830.png'),
(8, 'Anong isda ang mahilig pumotok', 'Edi FISHTol', 'JOKE_IMG_241.png');

-- --------------------------------------------------------

--
-- Table structure for table `quiz`
--

CREATE TABLE `quiz` (
  `id` int(11) NOT NULL,
  `fish_name` varchar(100) NOT NULL,
  `scientific_name` varchar(100) NOT NULL,
  `answer` varchar(100) NOT NULL,
  `option1` varchar(100) NOT NULL,
  `option2` varchar(100) NOT NULL,
  `option3` varchar(100) NOT NULL,
  `quiz_image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `quiz`
--

INSERT INTO `quiz` (`id`, `fish_name`, `scientific_name`, `answer`, `option1`, `option2`, `option3`, `quiz_image`) VALUES
(1, 'Milk Fish', 'Chanos', 'Chanidae', 'Pomacentrinae', 'Drum', 'Cichlidae', 'USER_IMG_359.jpg'),
(2, 'Banded Tilapia', 'sadfasdf', 'draad', 'fsadf', 'dsf', 'adsf', 'USER_IMG_993.jpg');

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
  `tech_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `terms`
--

INSERT INTO `terms` (`id`, `tech_term`, `tech_desc`) VALUES
(2, 'Stocking Program', 'A stocking program refers to a management strategy where fish or other aquatic species are introduced or &quot;stocked&quot; into natural water bodies to supplement existing populations or establish new populations. This is commonly done by releasing juvenile fish from hatcheries into lakes, rivers, or ponds to enhance recreational fishing opportunities or restore species in decline. Stocking programs help maintain or improve the overall health and diversity of aquatic resources.'),
(3, 'Fish Tagging', 'Fish Tagging: Fish tagging is a method of marking individual fish with unique identifiers to track their movement, behavior, and population dynamics. This involves attaching small tags or electronic devices to fish, which can include physical tags, fin clips, or implanted transmitters. By monitoring tagged fish, researchers gain valuable insights into migration patterns, habitat preferences, and the overall health of fish populations.'),
(4, 'Fishway', 'A fishway, also known as a fish ladder or fish pass, is a structure built in or around dams, weirs, or other barriers in rivers or streams to facilitate the migration of fish. Fishways provide a series of ascending steps or bypass channels that allow fish to navigate around obstacles and reach their spawning grounds or essential habitats. These structures help maintain healthy fish populations by restoring access to critical habitats and promoting natural reproductive processes.'),
(5, 'Water Aeration', 'Water aeration involves the process of adding oxygen to aquatic environments, typically in stagnant or oxygen-deficient bodies of water. This can be done through mechanical means, such as using aerators or pumps, or through natural methods like the introduction of plants or waterfalls. Aeration improves water quality, prevents fish kills, and supports the overall health of aquatic organisms by increasing oxygen levels and reducing harmful substances like ammonia and carbon dioxide.');

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
(22, 'Admin', 'admin', 'admin@gmail.com', '123', 'USER_IMG_817.PNG', '2023-06-26 03:49:14');

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
-- Indexes for table `jokes`
--
ALTER TABLE `jokes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quiz`
--
ALTER TABLE `quiz`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `fish`
--
ALTER TABLE `fish`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `jokes`
--
ALTER TABLE `jokes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `quiz`
--
ALTER TABLE `quiz`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `terms`
--
ALTER TABLE `terms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
