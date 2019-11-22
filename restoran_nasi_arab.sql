-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 29, 2017 at 09:46 AM
-- Server version: 5.6.37
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `restoran_nasi_arab`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_customer`
--

CREATE TABLE `tb_customer` (
  `cust_id` int(11) NOT NULL,
  `cust_name` varchar(150) NOT NULL,
  `cust_phone` varchar(150) NOT NULL,
  `cust_email` varchar(150) NOT NULL,
  `cust_addr` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_customer`
--


-- --------------------------------------------------------

--
-- Table structure for table `tb_login`
--

CREATE TABLE `tb_login` (
  `login_id` int(11) NOT NULL,
  `login_user` varchar(150) NOT NULL,
  `login_pass` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_login`
--

INSERT INTO `tb_login` (`login_id`, `login_user`, `login_pass`) VALUES
(1, 'admin', '303964798118bb7edba161bdb036517a'),
(2, 'support', 'd1b50136dcd03d8d5392b575f9bc9ed2');

-- --------------------------------------------------------

--
-- Table structure for table `tb_menu_name`
--

CREATE TABLE `tb_menu_name` (
  `m_n_id` int(11) NOT NULL,
  `m_n_code` varchar(255) NOT NULL,
  `m_n_desc` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_menu_name`
--

INSERT INTO `tb_menu_name` (`m_n_id`, `m_n_code`, `m_n_desc`) VALUES
(1, 'hanith_chickenR_qty', 'Hanith Chicken Regular'),
(2, 'hanith_chickenL_qty', 'Hanith Chicken Large'),
(3, 'hanith_chickenF_qty', 'Hanith Chicken Family'),
(4, 'hanith_LambR_qty', 'Hanith Lamb Regular'),
(5, 'hanith_LambL_qty', 'Hanith Lamb Large'),
(6, 'hanith_LambF_qty', 'Hanith Lamb Family'),
(7, 'Kabsa_chickenR_qty', 'Kabsa Chicken Regular'),
(8, 'Kabsa_chickenL_qty', 'Kabsa Chicken Large'),
(9, 'Kabsa_chickenF_qty', 'Kabsa Chicken Family'),
(10, 'Kabsa_LambR_qty', 'Kabsa Lamb Regular'),
(11, 'Kabsa_LambL_qty', 'Kabsa Lamb Large'),
(12, 'Kabsa_LambF_qty', 'Kabsa Lamb Family'),
(13, 'Magloba_ChickenR_qty', 'Magloba Chicken Regular'),
(14, 'Magloba_ChickenL_qty', 'Magloba Chicken Large'),
(15, 'Magloba_ChickenF_qty', 'Magloba Chicken Family'),
(16, 'Magloba_LambR_qty', 'Magloba Lamb Regular'),
(17, 'Magloba_LambL_qty', 'Magloba Lamb Large'),
(18, 'Magloba_LambF_qty', 'Magloba Lamb Family'),
(19, 'Lamb_MozaR_qty', 'Lamb Moza Regular'),
(20, 'Lamb_MozaL_qty', 'Lamb Moza Large'),
(21, 'Lamb_MozaF_qty', 'Lamb Moza Family'),
(22, 'FishR_qty', 'Fish Regular'),
(23, 'FishL_qty', 'Fish Large'),
(24, 'FishF_qty', 'Fish Family'),
(25, 'Chicken_Kabab_qty', 'Chicken Kabab'),
(26, 'Family_Mix_Grill_qty', 'Family Mix-Grill'),
(27, 'Grill_ChickenH_qty', 'Grill Chicken Half'),
(28, 'Grill_ChickenF_qty', 'Grill Chicken Full'),
(29, 'Lamb_Kabab_qty', 'Lamb Kabab'),
(30, 'Mix_Kabab_qty', 'Mix Kabab'),
(31, 'Mix_Grill_qty', 'Mix Grill'),
(32, 'Mix_Tikka_qty', 'Mix Tikka'),
(33, 'Tikka_Chicken_qty', 'Tikka Chicken'),
(34, 'Tikka_Lamb_qty', 'Tikka Lamb'),
(36, 'Akda_Chicken_qty', 'AKDA CHICKEN '),
(37, 'Akda_Lamb_qty', 'AKDA LAMB '),
(38, 'Bamia_qty', 'BAMIA'),
(39, 'Bamia_with_Lamb_qty', 'BAMIA WITH (LAMB)'),
(40, 'Bamia_with_Chicken_qty', 'BAMIA WITH (CHICKEN)'),
(41, 'Butter_Chicken_Gravy_qty', 'BUTTER CHICKEN GRAVY'),
(42, 'Butter_Lamb_Gravy_qty', 'BUTTER LAMB GRAVY'),
(43, 'Chicken_Shawarma_Plate_qty', 'CHICKEN SHAWARMA PLATE'),
(44, 'Chicken_Soup_qty', 'CHICKEN SOUP'),
(45, 'Fahsa_qty', 'FAHSA'),
(46, 'Fasolia_qty', 'FASOLIA'),
(47, 'Fasolia_with_Lamb_qty', 'FASOLIA WITH (LAMB)'),
(48, 'Fasolia_with_Chicken_qty', 'FASOLIA WITH (CHICKEN)'),
(49, 'Kaju_Chicken_Gravy_qty', 'KAJU CHICKEN GRAVY'),
(50, 'Kaju_Lamb_Gravy_qty', 'KAJU LAMB GRAVY'),
(51, 'Lamb_Shawarma_Plate_qty', 'LAMB SHAWARMA PLATE'),
(52, 'Lamb_Soup_qty', 'LAMB SOUP'),
(53, 'Mix_Veg_qty', 'MIX-VEG'),
(54, 'Mix_Veg_with_Lamb_qty', 'MIX-VEG WITH (LAMB)'),
(55, 'Mix_Veg_with_Chicken_qty', 'MIX-VEG WITH (CHICKEN)'),
(56, 'Arabic_Crisbe_Bread_qty', 'ARABIC CRISBE BREAD'),
(57, 'Chicken_Shawarma_qty', 'CHICKEN SHAWARMA'),
(58, 'Lamb_Shawarma_qty', 'LAMB SHAWARMA'),
(59, 'Mulawah_qty', 'MULAWAH'),
(60, 'Rateb_qty', 'RATEB'),
(61, 'Tameez_BreadP_qty', 'TAMEEZ BREAD (PLAIN) '),
(62, 'Tameez_BreadCG_qty', 'TAMEEZ BREAD (CHEESER/GARLIC) '),
(63, 'Tameez_BreadS_qty', 'TAMEEZ BREAD (SPECIAL) '),
(64, 'Arabic_Salad_Fattoush_qty', 'ARABIC SALAD FATTOUSH'),
(65, 'Arabic_Salad_qty', 'ARABIC SALAD '),
(66, 'Arabic_SaladY_qty', 'ARABIC SALAD YOGURT'),
(67, 'Chili_BlenderS_qty', 'CHILI BLENDER SMALL'),
(68, 'Chili_BlenderL_qty', 'CHILI BLENDER LARGE'),
(69, 'Chili_BlenderF_qty', 'CHILI BLENDER FAMILY'),
(70, 'Arabic_Zitown_Salad_qty', 'ARABIC ZITOWN SALAD'),
(71, 'FOUL_qty', 'FOUL'),
(72, 'French_Fries_qty', 'FRENCH FRIES'),
(73, 'HumusR_qty', 'HUMUS REGULAR'),
(74, 'HumusL_qty', 'HUMUS LARGE'),
(75, 'Humus_With_Lamb_qty', 'HUMUS WITH LAMB'),
(76, 'Rice_Kabsa_HanithR_qty', 'RICE KABSA OR HANITH REGULAR'),
(77, 'Rice_Kabsa_HanithL_qty', 'RICE KABSA OR HANITH LARGE'),
(78, 'Rice_Kabsa_HanithF_qty', 'RICE KABSA OR HANITH FAMILY'),
(79, 'Rice_MaglobaR_qty', 'RICE MAGLOBA REGULAR'),
(80, 'Rice_MaglobaL_qty', 'RICE MAGLOBA LARGE'),
(81, 'Rice_MaglobaF_qty', 'RICE MAGLOBA FAMILY'),
(82, 'SoupS_qty', 'SOUP SMALL'),
(83, 'SoupL_qty', 'SOUP LARGE'),
(84, 'SoupF_qty', 'SOUP FAMILY'),
(85, 'Timun_SaladS_qty', 'TIMUN SALAD SMALL'),
(86, 'Timun_SaladL_qty', 'TIMUN SALAD LARGE'),
(87, 'Timun_SaladF_qty', 'TIMUN SALAD FAMILY'),
(88, 'Yogurt_qty', 'YOGURT'),
(89, 'BaklawaS_qty', 'BAKLAWA SMALL'),
(90, 'BaklawaL_qty', 'BAKLAWA LARGE'),
(91, 'BasbosaS_qty', 'BASBOSA SMALL'),
(92, 'BasbosaL_qty', 'BASBOSA LARGE'),
(93, 'Cheesecake_qty', 'CHEESECAKE'),
(94, 'CreamCaramel_qty', 'CREAM CARAMEL'),
(95, 'Labania_qty', 'LABANIA'),
(96, 'Mix_qty', 'MIX'),
(97, 'MANGO_qty', 'Mango Glass'),
(98, 'MANGO_LASSE_qty', 'Mango Lasse Glass'),
(99, 'MANGO_SHAKE_qty', 'Mango Shake Glass'),
(100, 'CARROT_qty', 'Carrot Glass'),
(101, 'HONEYDEW_qty', 'Honeydew Glass'),
(102, 'ORANGE_qty', 'Orange Glass'),
(103, 'LEMON_qty', 'Lemon Glass'),
(104, 'ORANGE_LEMON_qty', 'Orange & Lemon Glass'),
(105, 'LEMON_MINT_qty', 'Lemon With Mint Glass'),
(106, 'LEMON_GINGER_qty', 'Lemon With Ginger Glass'),
(107, 'APPLE_qty', 'Apple Glass'),
(108, 'PINEAPLE_qty', 'Pineaple Glass'),
(109, 'WATERMELON_qty', 'Watermelon Glass'),
(110, 'BANANA_MILKSHAKE_qty', 'Banana Milkshake Glass'),
(111, 'YOGURT_DRINK_qty', 'Yogurt Drink Glass'),
(112, 'COCKTAIL_qty', 'Cocktail Glass'),
(113, 'TehTarik_qty', 'Teh Tarik'),
(114, 'Teh_Panas_qty', 'Teh Panas'),
(115, 'TehO_qty', 'Teh (O)'),
(116, 'Sirap_qty', 'Sirap'),
(117, 'Sirap_Limau_qty', 'Sirap Limau'),
(118, 'NescafeO_qty', 'Nescafe (O)'),
(119, 'Nescafe_qty', 'Nescafe'),
(120, 'KopiO1_qty', 'Kopi (O)'),
(121, 'Kopi_qty', 'Kopi'),
(122, 'TeaArab_qty', 'Tea Arab (Purdina)'),
(123, 'TeaArabPS_qty', 'Tea Arab (Purdina) Pot Small'),
(124, 'TeaArabPL_qty', 'Tea Arab (Purdina) Pot Large'),
(125, 'TeaArabM_qty', 'Tea Arab (Milk)'),
(126, 'GreenTea_qty', 'Green Tea'),
(127, 'GreenTeaPS_qty', 'Green Tea Pot Small'),
(128, 'GreenTeaPL_qty', 'Green Tea Pot Large'),
(129, 'MiloO_qty', 'Milo (O)'),
(130, 'Milo_qty', 'Milo'),
(131, 'Limau_Panas_qty', 'Limau Panas'),
(132, 'Teh_Limau_Panas_qty', 'Teh (O) Limau Panas'),
(133, 'TehIce_qty', 'Teh Ice Glass'),
(134, 'TehOIce_qty', 'Teh (O) Ice Glass'),
(135, 'NescafeOIce_qty', 'Nescafe (O) Ice Glass'),
(136, 'NescafeIce_qty', 'Nescafe Ice Glass'),
(137, 'SirapIce_qty', 'Sirap Ice Glass'),
(138, 'SirapLimauIce_qty', 'Sirap Limau Ice Glass'),
(139, 'SirapBandung_qty', 'Sirap Bandung Glass'),
(140, 'KopiOIc_qty', 'Kopi (O) Ice Glass'),
(141, 'KopiIc3_qty', 'Kopi Ice Glass'),
(142, 'GreenTeaIc_qty', 'Green Tea Ice Glass'),
(143, 'MiloOIc_qty', 'Milo (O) Ice Glass'),
(144, 'MiloIc_qty', 'Milo Ice Glass'),
(145, 'LimauIc_qty', 'Limau Ice Glass'),
(146, 'TehOLimauIc_qty', 'Teh (O) Limau Ice Glass'),
(147, 'TeaArabMK_qty', 'Tea Arab (Milk) Ice Glass'),
(148, 'TeaArabPU_qty', 'Tea Arab (Purdina) Ice Glass'),
(149, 'MaltDrinks_qty', 'Malt Drinks'),
(150, 'LargeJuice_qty', 'One Large Juice'),
(151, 'Juices_qty', 'Bottled Juices (Small)'),
(152, 'CadeMountainDew_qty', 'Cade and Mountain Dew'),
(153, 'SoftDrinks_qty', 'Soft Drinks	'),
(154, 'MineralWater_qty', 'Mineral Water (Small)'),
(155, 'ArabicCoffeeShake_qty', 'Arabic Coffee Shake'),
(156, 'TeaAdani_qty', 'Tea Adani'),
(157, 'PreMixedCoffee_qty', 'Pre-Mixed Coffee'),
(158, 'Vimto_qty', 'Vimto'),
(159, 'TeaArabPUJug_qty', 'Tea Arab (Purdina) Ice Jug'),
(160, 'TeaArabMKJug_qty', 'Tea Arab (Milk) Ice Jug'),
(161, 'TehOLimauIcJug_qty', 'Teh (O) Limau Ice Jug'),
(162, 'LimauIcJug_qty', 'Limau Ice Jug'),
(163, 'MiloIcJug_qty', 'Milo Ice Jug'),
(164, 'MiloOIcJug_qty', 'Milo (O) Ice Jug'),
(165, 'GreenTeaIcJug_qty', 'Green Tea Ice Jug'),
(166, 'KopiIc3Jug_qty', 'Kopi Ice Jug'),
(167, 'KopiOIcJug_qty', 'Kopi (O) Ice Jug'),
(168, 'SirapBandungJug_qty', 'Sirap Bandung Jug'),
(169, 'SirapLimauIceJug_qty', 'Sirap Limau Ice Jug'),
(170, 'SirapIceJug_qty', 'Sirap Ice Jug'),
(171, 'NescafeIceJug_qty', 'Nescafe Ice Jug'),
(172, 'NescafeOIceJug_qty', 'Nescafe (O) Ice Jug'),
(173, 'TehOIceJug_qty', 'Teh (O) Ice Jug'),
(174, 'TehIceJug_qty', 'Teh Ice Jug'),
(175, 'COCKTAILJug_qty', 'Cocktail Jug'),
(176, 'YOGURT_DRINKJug_qty', 'Yogurt Drink Jug'),
(177, 'BANANA_MILKSHAKEJug_qty', 'Banana Milkshake Jug'),
(178, 'WATERMELONJug_qty', 'Watermelon Jug'),
(179, 'PINEAPLEJug_qty', 'Pineaple Jug'),
(180, 'APPLEJug_qty', 'Apple Jug'),
(181, 'LEMON_GINGERJug_qty', 'Lemon With Ginger Jug'),
(182, 'LEMON_MINTJug_qty', 'Lemon With Mint Jug'),
(183, 'ORANGE_LEMONJug_qty', 'Orange & Lemon Jug'),
(184, 'LEMONJug_qty', 'Lemon Jug'),
(185, 'ORANGEJug_qty', 'Orange Jug'),
(186, 'HONEYDEWJug_qty', 'Honeydew Jug'),
(187, 'CARROTJug_qty', 'Carrot Jug'),
(188, 'MANGO_SHAKEJug_qty', 'Mango Shake Jug'),
(189, 'MANGO_LASSEJug_qty', 'Mango Lasse Jug'),
(190, 'MANGOJug_qty', 'Mango Jug');

-- --------------------------------------------------------

--
-- Table structure for table `tb_order`
--

CREATE TABLE `tb_order` (
  `order_id` int(11) NOT NULL,
  `order_details` longtext NOT NULL,
  `order_remarks` text,
  `order_status` int(11) NOT NULL DEFAULT '1' COMMENT '1=pending 2=confirm 3=canceled 4=complete',
  `food_status` int(11) NOT NULL DEFAULT '1' COMMENT '1=pending 2=complete',
  `cust_id` int(11) NOT NULL,
  `delivery_status` int(11) NOT NULL DEFAULT '1' COMMENT '1=pending 2=complete',
  `payment_status` int(11) NOT NULL DEFAULT '1' COMMENT '1=pending 2=complete',
  `total_bill` double NOT NULL DEFAULT '0',
  `date_order` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_order`
--

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_customer`
--
ALTER TABLE `tb_customer`
  ADD PRIMARY KEY (`cust_id`);

--
-- Indexes for table `tb_login`
--
ALTER TABLE `tb_login`
  ADD PRIMARY KEY (`login_id`);

--
-- Indexes for table `tb_menu_name`
--
ALTER TABLE `tb_menu_name`
  ADD PRIMARY KEY (`m_n_id`);

--
-- Indexes for table `tb_order`
--
ALTER TABLE `tb_order`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `cust_id` (`cust_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_customer`
--
ALTER TABLE `tb_customer`
  MODIFY `cust_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;
--
-- AUTO_INCREMENT for table `tb_login`
--
ALTER TABLE `tb_login`
  MODIFY `login_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tb_menu_name`
--
ALTER TABLE `tb_menu_name`
  MODIFY `m_n_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=191;
--
-- AUTO_INCREMENT for table `tb_order`
--
ALTER TABLE `tb_order`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_order`
--
ALTER TABLE `tb_order`
  ADD CONSTRAINT `order_cust_constraint` FOREIGN KEY (`cust_id`) REFERENCES `tb_customer` (`cust_id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
