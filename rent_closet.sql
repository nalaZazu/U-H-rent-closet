-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 29, 2021 at 09:42 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rent_closet`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(1000) NOT NULL,
  `email` varchar(1000) NOT NULL,
  `message` varchar(10000) NOT NULL,
  `status` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `message`, `status`) VALUES
(1, '$name', '$email', '$message', 1),
(2, 'rim', 'rimsha123@gmail.com', 'hi', 1),
(3, 'Rimsha', 'rimsha123@gmail.com', 'Hi, i am interested to rent my dress so ', 1),
(4, 'uswa ', 'nadeemuswa@gmail.com', 'tyuioo', 1),
(5, 'hi', 'hiii123@gmail.com', 'wertyuiopsdfghjkxcvb ', 1),
(6, 'uswanadeem', 'uswanadeem242@gmail.com', ' I order the dress, which is some fault', 0),
(7, 'sana', 'sananadeem@gmail.com', 'Hi! I visited your website. And I interested to rent my dress. I show pictures if you rent my dress...', 0),
(8, 'ammarajaved', 'ammarajaved@gmail.com', 'Hi! I visited your website. And I interested to rent my dress. I show pictures if you rent my dress. Thank you', 0);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(5) NOT NULL,
  `firstname` varchar(10) NOT NULL,
  `lastname` varchar(10) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(10) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `firstname`, `lastname`, `email`, `password`, `created_at`) VALUES
(11, 'suhair', 'Nadeem', 'suhair@gmail.com', 'rose', NULL),
(12, 'Uswa', 'Nadeem ', 'uswanadeem242@gmail.', 'uswanadeem', NULL),
(13, 'Hina', 'Amjad', 'hina269@gmail.com', 'hina269', NULL),
(14, 'Abdullah', 'Quyyam', 'abdullah@gmail.com', 'abdullah', NULL),
(15, 'tahreem', 'Naeem', 'tahreemnaeem@gmail.c', 'tahreem', NULL),
(16, 'zazu', 'nadeem', 'uswanadeem242@gmail.', '12345', NULL),
(17, 'raina', 'Azhar', 'Raina123@gmail.com', 'wesy', NULL),
(18, 'Asra', 'Amjad', 'Asra@gmail.com', 'asra', NULL),
(19, 'Mickey', 'Mouse', 'mickey@gmail.com', 'mickey', NULL),
(20, 'Ammara', 'javed', 'ammara@gmail.com', 'ammara', NULL),
(21, 'Ayesha', 'Nadeem', 'ayesha123@gmail.com', 'ayesha', NULL),
(23, 'jacki', 'Mouse', '123@gmail.com', 'jacki', NULL),
(24, 'Asra', 'Mouse', '2345@gmail.com', '1234', NULL),
(25, 'Suhair', 'Nadeem', 'tahreemnaeem@gmail.c', '1234', NULL),
(26, 'zazu', 'jacki', '234@gmail.com', '3456', NULL),
(27, 'army ', 'bts', 'armybts@gmail.com', 'army', NULL),
(28, 'Uswa', 'nadeem', 'uswanadeem242@gmail.', 'uswanadeem', NULL),
(29, 'sana', 'nadeem', 'zazu@gmail.com', '', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `customer-order`
--

CREATE TABLE `customer-order` (
  `id` int(255) NOT NULL,
  `fullname` varchar(256) NOT NULL,
  `address` varchar(256) NOT NULL,
  `zip-code` int(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `mobile` int(255) NOT NULL,
  `credit` varchar(255) NOT NULL,
  `expiry` varchar(255) NOT NULL,
  `Code` int(255) NOT NULL,
  `status` enum('confirm','cancel','pending','') NOT NULL DEFAULT 'pending',
  `selectdate` date DEFAULT NULL,
  `returndate` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer-order`
--

INSERT INTO `customer-order` (`id`, `fullname`, `address`, `zip-code`, `city`, `mobile`, `credit`, `expiry`, `Code`, `status`, `selectdate`, `returndate`) VALUES
(1, 'ammarajaved', 'ghjjkooeie', 89011, 'Fsd', 1234567890, '123456789', 'aug/2021', 234, 'pending', '2021-07-08', '2021-07-09'),
(2, 'Nida Mazoor', 'dijokt 123', 123, 'fsd', 2147483647, '123456789', 'june/2021', 123, 'confirm', '2021-07-07', '2021-07-10'),
(3, 'ammara javeed', 'ammarajaveed234@gmail.com', 234, 'lahore', 2147483647, '123456789', 'aug/2021', 234, 'pending', '2021-06-23', '2021-07-02');

-- --------------------------------------------------------

--
-- Table structure for table `customer_login`
--

CREATE TABLE `customer_login` (
  `id` int(50) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `cpassword` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer_login`
--

INSERT INTO `customer_login` (`id`, `firstname`, `lastname`, `email`, `password`, `cpassword`) VALUES
(1, '', '', 'uswanadeem242@gmail.com', 'uswa', ''),
(2, 'uswa', 'nadeem', 'uswanadeem242@gmail.com', 'gondal123 `cpassword`=', ''),
(3, 'zazu', 'Nadeem', 'uswanadeem242@gmail.com', 'zazu', ''),
(4, 'Asra', 'Amjad', 'asraamjad@gmail.com', 'asraamjad', 'asraamjad'),
(5, 'sana', 'nadeem', 'sananadeem242@gmail.com', 'sana', 'sana'),
(6, 'uswa', 'nadeem', 'u&hrentcloset@gmail.com', 'uswa', 'uswa'),
(7, 'zazu', 'jacki', 'zazu@gmail.com', 'zazu', 'zazu'),
(8, 'zazu', 'Azhar', 'azhar@gmail.com', 'sana', 'sana'),
(9, 'uswa', 'nadeem', 'uswa123@gmail.com', 'uswa123', 'uswa123'),
(10, 'Mickey', 'Mouse', 'mickeymouse@gmail.com', 'mickey', 'mickey'),
(11, 'Abdullah', 'momi', 'abdullahmomi@gmail.com', 'abdullah', 'abdullah'),
(12, 'hamza', 'hamza', 'hamza@hamza.com', '123', '123'),
(13, 'hina', 'nadeem', 'hinanadeem123@gmail.com', 'hina', 'hina'),
(14, 'hina', 'Nadeem', 'hinanabeel123@gmail.com', 'hinanadeem', 'hinanadeem'),
(15, 'ayesha', 'Nadeem', 'ayeshanadeem123@gmail.com', 'ayesha', 'ayesha'),
(16, 'aisha', 'naeem', 'aisha123@gmail.com', 'aisha', 'aisha'),
(17, 'hina', 'hina', 'hinahina123@gmail.com', 'hina', 'hina'),
(18, 'Ammara', 'javed', 'ammarajaved@gmail.com', 'ammara', 'ammara'),
(19, '', '', '', '', ''),
(20, 'rimsha', 'nadeem', 'rimshanadeem123@gmail.com', 'rimsha', 'rimsha'),
(21, 'nida', 'manzoor', 'nidamanzoor123@gmail.com', 'nida12345678', 'nida12345678'),
(22, 'nida', 'manzoor', 'nida@gmail.com', 'nida12345678', 'nida12345678'),
(23, 'amara', 'javed', 'ammarajaveed234@gmail.com', 'ammara123456', 'ammara123456');

-- --------------------------------------------------------

--
-- Table structure for table `customer_order_item`
--

CREATE TABLE `customer_order_item` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer_order_item`
--

INSERT INTO `customer_order_item` (`id`, `order_id`, `item_id`) VALUES
(1, 1, 3),
(2, 2, 5),
(3, 3, 73);

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(255) NOT NULL,
  `title` varchar(100) NOT NULL,
  `price` mediumtext NOT NULL,
  `description` varchar(700) NOT NULL,
  `picsource` varchar(500) NOT NULL,
  `category` enum('Nikkah','Formals','Mehndi','Bridals','Earring','Wrist Wear','Necklace','Random') NOT NULL,
  `product_des` varchar(255) NOT NULL,
  `city` enum('Faisalabad','Lahore','Islamabad','Karachi','Quetta','Peshawar','Multan') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `title`, `price`, `description`, `picsource`, `category`, `product_des`, `city`) VALUES
(1, 'PEACH FANTASY', '10000', 'A jacquard kalidar with gotta insertions and intricate gotta and zardozi on the neckline.', '1624178151924.jpeg,1624178151827.jpeg,1624178151879.jpeg', 'Nikkah', 'Dry clean only. Keep the garment hanged in the suit.', 'Faisalabad'),
(2, 'KTD3255', '20000', 'A maisori long anarkali hand screen printed and heavily embroidery with resham, zardozi and mirror work.', '1624178276254.jpeg,1624178276908.jpeg,1624178276364.jpeg', 'Nikkah', 'Dry clean only. Keep the garment hanged in the suit.', 'Faisalabad'),
(3, 'KTD3214', '35000', 'A white jacquard kalidar with gotta insertions all over. It is embroidered with mirror work, gotta and zardozi on the neckline and sleeves', '1624178711826.jpeg,1624178711811.jpeg,1624178711629.jpeg', 'Nikkah', 'Dry clean only. Keep the garment hanged in the suit.', 'Faisalabad'),
(4, 'KTD3256', '55000', 'A beautiful classic kalidar in jacquard fabric intricately embroidered in zardozi and gotta.', '1624178924186.jpeg,162417892483.jpeg,1624178924234.jpeg', 'Nikkah', 'Dry clean only. Keep the garment hanged in the suit.', 'Lahore'),
(5, 'PEACH ROUGE', '35000', 'A salmon pink badla botti anarkali with gotta and zardozi embroidery on the sleeves and neckline.', '1624179022899.jpeg,1624179022347.jpeg,1624179022508.jpeg', 'Nikkah', 'Dry clean only. Keep the garment hanged in the suit.', 'Lahore'),
(6, 'MISTY BLUE', '55000', 'A jacquard anarkali with gotta detail on all the panels. Heavily embroidered body in gotta and zardozi with chatapati detail on the sleeves.', '1624179134373.jpeg,1624179134781.jpeg,1624179134175.jpeg', 'Nikkah', 'Dry clean only. Keep the garment hanged in the suit.', 'Lahore'),
(7, 'WHITE GLORY', '59000', 'An organza paneled shirt with detailed gotta, zardozi and mirror work on all the panels, neckline and sleeves', '1624179954224.jpeg,1624179954870.jpeg,1624179954182.jpeg', 'Nikkah', 'Dry clean only. Keep the garment hanged in the suit.', 'Islamabad'),
(8, 'REGAL WHITE', '52000', 'A timeless piece made on hand woven zari jacquard fabric with extensive kora dabka and gotta embroidery on the neck and sleeves.', '162418006786.jpeg,1624180067851.jpeg,1624180067747.jpeg', 'Nikkah', 'Dry clean only. Keep the garment hanged in the suit.', 'Islamabad'),
(9, 'KTD3205', '60000', 'A powder blue organza anarkali with gotta insertions on all the panels. The anarkali is heavily embroidered with intricate resham flowers, zardozi and crystals.', '162418041499.jpeg,1624180414950.jpeg,1624180414560.jpeg', 'Nikkah', 'Dry clean only. Keep the garment hanged in the suit.', 'Islamabad'),
(10, 'FX-830', '70000', 'It is paired with a maysuri dupatta with hand worked motifs in resham, tilla and sequin. It comes with a silk choridar', '1624180933821.jpg,1624180933515.jpg', 'Nikkah', 'Dry clean only. Keep the garment hanged in the suit.', 'Karachi'),
(11, 'FX-804B', '38000', 'embroidered in zardozi and gotta. Paired with a chorridar and an organza\r\npearl and sequin work all over', '1624181210576.jpg,1624181210670.jpg', 'Nikkah', 'Dry clean only. Keep the garment hanged in the suit.', 'Karachi'),
(12, 'FX-825', '30000', 'Heavily embroidery with resham, zardozi and mirror work. It comes with an organza dupatta with a heavy matha Patti and scallop all around embroidered in zardozi resham', '1624181473414.jpg,1624181473974.jpg', 'Nikkah', 'Dry clean only. Keep the garment hanged in the suit.', 'Karachi'),
(13, 'KTD3279', '45000', 'A timeless anarkali on maisuri tissue with extensive pink and gold gotta patti insertions. It features extensive hand screen print,resham, mirror work and zardozi', '162418172820.jpeg,1624181728402.jpeg', 'Formals', 'Dry clean only. Keep the garment hanged in the suit.', 'Faisalabad'),
(14, 'SRE126', '28000', 'A one of a kind pant sari in a deep red crepe finished with copper gold trimings. It is paired with a blouse featuring garra embroidery and hand work', '1624181848386.jpeg,1624181848377.jpeg', 'Formals', 'Dry clean only. Keep the garment hanged in the suit.', 'Faisalabad'),
(15, 'KTD3222-1', '35000', 'A maysuri kalidar featuring hand screen print, gotta, zardozi and mirror work. Paired with a two Tone gharara with extensive screen print and hand gotta, pearl and sequin work.', '1624181996788.jpeg,1624181996720.jpeg', 'Formals', 'Dry clean only. Keep the garment hanged in the suit.', 'Faisalabad'),
(16, 'KTD3286', '68000', 'A beautiful maroon kalidar in khaddi net with gotta insertions. The body and sleeves are heavily embroidered in mirror work. It comes with a Maysuri dupatta with hand worked floral motifs and mirror work grid. It is paired with a chorridar', '1624182175488.jpeg,1624182175526.jpeg', 'Formals', 'Dry clean only. Keep the garment hanged in the suit.', 'Lahore'),
(17, 'KTD3252', '39000', 'A beautiful classic kalidar in jacquard fabric intricately embroidered in zardozi and gotta. Paired with a chorridar.', '1624182364956.jpeg,1624182364977.jpeg', 'Formals', 'Dry clean only. Keep the garment hanged in the suit.', 'Lahore'),
(18, 'GREEN ANGHARKHA', '45000', 'An angharkha in khaddi net extensively hand screen printed with resham and zardozi embroidery on the body and sleeves.', '1624182644707.jpeg,1624182644563.jpeg', 'Formals', 'Dry clean only. Keep the garment hanged in the suit.', 'Lahore'),
(19, 'KTD3264', '45000', 'A crushed anarkali adorned with block print and intricate zardozi and resham work finished with copper borders', '162418280395.jpeg,1624182803119.jpeg', 'Formals', 'Dry clean only. Keep the garment hanged in the suit.', 'Islamabad'),
(20, 'KTD3253', '41800', 'Embroidered with delicate resham and zardozi net, the shirt comes with a jamavar trouser and organza dupatta with delicate sequin lines all over', '1624182985705.jpeg,162418298586.jpeg', 'Formals', 'Dry clean only. Keep the garment hanged in the suit.', 'Islamabad'),
(21, 'KTD3227', '41650', 'A timeless double ;ayered anarkali finished with handcrafted tassels. The inner layer is in organza and featured hand screen print.', '1624183142514.jpeg,162418314244.jpeg', 'Formals', 'Dry clean only. Keep the garment hanged in the suit.', 'Islamabad'),
(22, 'KTD3213', '45000', 'The shirt is beautifully embroidered with resham flowers, sequin, zardozi and gotta work on the panels, neckline and sleeves', '1624190829897.jpeg,1624190829237.jpeg,1624190829904.jpeg', 'Formals', 'Dry clean only. Keep the garment hanged in the suit.', 'Karachi'),
(23, 'KTD3201', '67000', 'A maisori net tunic embroidered with gotta and zardozi paired with zari trousers. It comes with a shawl hand screen printed finished with gotta trimming', '162419102827.jpeg,162419102895.jpeg,1624191028894.jpeg', 'Formals', 'Dry clean only. Keep the garment hanged in the suit.', 'Karachi'),
(24, 'LAUREL KTD3208', '56000', 'An organza angharkha with detailed gotta insertions on all the panels and heavily embroidered motifs in resham, mirror work, gotta and zardozi. It is paired with a pink and purple dupatta which is heavily screen printed and a self two tone jamavar gharara with heavy lace border.', '162419121756.jpeg,1624191217126.jpeg,1624191217773.jpeg', 'Formals', 'Dry clean only. Keep the garment hanged in the suit.', 'Karachi'),
(25, 'KTD3220', '76000', 'A classic angharkha in hand woven badla boti fabric with gotta insertions all over featuring hand embroidered gotta, resham and mirror work. Paired with a jamavar lehenga with hand worked zardozi border. The dupatta is of organza and is extensively hand screen printed and finished with laces and gotta', '1624191415701.jpeg,1624191415735.jpeg,1624191415509.jpeg', 'Formals', 'Dry clean only. Keep the garment hanged in the suit.', 'Karachi'),
(26, 'KTD3287', '28000', 'A jacquard kalidar with gotta insertions and intricate gotta and zardozi on the neckline. The long jamavar dupatta is extensively hand embroidered in sequin, gotta and zardozi. the outfit is paired with a lamè trouser', '1624191637955.jpeg,1624191637415.jpeg,1624191637991.jpeg', 'Mehndi', 'Dry clean only. Keep the garment hanged in the suit.', 'Faisalabad'),
(27, 'KTD3266', '30000', 'A crushed anarkali adorned with block print and intricate zardozi and resham work finished with copper borders. It is paired with a chorridar and an organza dupatta worked with sheesha and accent border finish', '1624191771188.jpeg,1624191771930.jpeg', 'Mehndi', 'Dry clean only. Keep the garment hanged in the suit.', 'Faisalabad'),
(28, 'FX-842', '60000', 'A crushed anarkali adorned with block print and intricate zardozi and resham work finished with copper borders. It is paired with a chorridar and an organza dupatta worked with sheesha and accent border finish', '1624191955689.jpg,1624191955573.jpg,1624191955101.jpg', 'Mehndi', 'Dry clean only. Keep the garment hanged in the suit.', 'Faisalabad'),
(29, 'KTD3267', '70,000', 'A crushed anarkali adorned with block print and intricate zardozi and resham work finished with copper borders. It is paired with a chorridar and an organza dupatta worked with sheesha and accent border finish', '162419232342.jpeg,1624192323714.jpeg,1624192323197.jpeg', 'Mehndi', 'Dry clean only. Keep the garment hanged in the suit.', 'Faisalabad'),
(30, 'BRD207', '45000', 'A green silk anarkali cut to perfection featuring hand block and screen print, intricate resham, sheesha, zardozi and gotta embroidery. It is paired with an organza dupatta fully block and screen printed with sheesha and gotta work', '1624192871981.jpeg,1624192871667.jpeg,1624192871229.jpeg', 'Mehndi', 'Dry clean only. Keep the garment hanged in the suit.', 'Lahore'),
(31, 'BRD184-2', '48000', 'A short angarkha in a hand woven organza jacquard fabric with extensive resham and zardozi hand work on the entire flair and sleeves finished with gota trimmings. The bottom is a pretty gharara in organza and is hand screen printed and hand worked with sequin and gota and finished with gota borders. The outfit is coordinated with an organza dupatta with hand embroidered borders on all four sides and gota sequin work on the ground.', '1624193056383.jpeg,1624193056515.jpeg', 'Mehndi', 'Dry clean only. Keep the garment hanged in the suit.', 'Lahore'),
(32, 'BRD183-2', '58000', 'An organza lehnga with floral bird motifs with extensive velvet and gota applique and intricate gota hand embroidery on top finished with a silk and gota chata Patti. It is paired with a silk and organza choli with heavy sequin and zardozi hand work. The dupatta is of off-white and ochre organza with hand worked resham and pearl cascading floral bunches on the ground, the borders consists of hand work hand work gota and sequin chevron pattern.', '1624193221570.jpeg', 'Mehndi', 'Dry clean only. Keep the garment hanged in the suit.', 'Lahore'),
(33, 'FX-824', '39000', 'A  silk cut to perfection featuring hand block and screen print, intricate resham, sheesha, zardozi and gotta embroidery. It is paired with an organza dupatta fully block and screen printed with sheesha and gotta work', '162419338192.jpg,1624193381356.jpg', 'Mehndi', 'Dry clean only. Keep the garment hanged in the suit.', 'Lahore'),
(34, 'KTD3157', '56000', 'A classic anarkali silhouette in a hand woven tile jacquard fabric. The piece is extensively hand crafted with gota and zardoze on the panels, sleeves and neck. It has hand crafted tassels at the back. ', '1624198942703.jpeg,1624198942136.jpeg', 'Mehndi', 'Dry clean only. Keep the garment hanged in the suit.', 'Islamabad'),
(35, 'BRD186', '34000', 'An organza fuchsia pink lehnga with heavy floral and peacock motifs fully hand worked with reshan and gota applique work, with sequin chevron pattern on top.', '1624199177472.jpeg,1624199177912.jpeg', 'Mehndi', 'Dry clean only. Keep the garment hanged in the suit.', 'Islamabad'),
(36, 'BRD153', '35700', 'A yellow net gharara with extensive hand embroidered resham and gota work on it finished with gota trimmings', '1624199339911.jpeg,1624199339998.jpeg', 'Mehndi', 'Dry clean only. Keep the garment hanged in the suit.', 'Karachi'),
(37, 'KTD2891', '45800', 'Deep plum screen printed and embroidered organza lehnga paired with a beautiful silver choli heavily worked with resham, diamante, sequins and pearls.', '1624199452174.jpeg', 'Mehndi', 'Dry clean only. Keep the garment hanged in the suit.', 'Karachi'),
(38, 'KTD3273', '67500', 'A stunning silk anarkali bridal featuring hand block and screen print and detailed hand crafted zardozi, gotta, resham and shesha embroidery. It is paired with a lamè lehnga featuring handcrafted mughal flowers hand worked with resham gotta and zardozi', '1624199585535.jpeg,1624199585815.jpeg,1624199585800.jpeg', 'Bridals', 'Dry clean only. Keep the garment hanged in the suit.', 'Faisalabad'),
(39, 'BRD203', '45700', 'A timeless delicate nude pink bridal. The kalidar in organza is composed with mughal sanghnars and miniature flowers extensively hand embroidered with resham, zardozi and gotta. ', '1624199721227.jpeg,1624199721767.jpeg', 'Bridals', 'Dry clean only. Keep the garment hanged in the suit.', 'Faisalabad'),
(40, 'KTD3224', '78000', 'A timeless anarkali on maisuri tissue with extensive pink and gold gotta patti insertions. It features extensive hand screen print,resham, mirror work and zardozi. It is paired with a coral organza lehnga with hand crafted resham, gotta and zardozi. The dupatta is of organza with hand screen print and gotta, sequin and pearl embroidery', '1624199927985.jpeg,1624199927212.jpeg', 'Bridals', 'Dry clean only. Keep the garment hanged in the suit.', 'Faisalabad'),
(41, 'KTD3232', '25800', 'A maisori timeless kalidar with extensive panels that feature hand screen print and elaborate hand work consisting of mirrors, gotta, resham and zardozi. It is paired with a lame lehenga. The dupatta is in organza and is extensively hand embroidered with sequin and pearl jal', '1624200047725.jpeg,1624200047537.jpeg', 'Bridals', 'Dry clean only. Keep the garment hanged in the suit.', 'Lahore'),
(42, 'KANDAHARI', '20000', 'A maysuri timeless kalidar with extensive panels that feature hand screen print and elaborate hand work consisting of mirrors, gotta, resham and zardozi. It is paired with a lame lehenga. The dupatta is in organza and is extensively hand embroidered with sequin and pearl jal', '1624200174577.jpeg,1624200174513.jpeg', 'Bridals', 'Dry clean only. Keep the garment hanged in the suit.', 'Lahore'),
(43, 'BRD203', '60000', 'A timeless delicate nude pink bridal. The kalidar in organza is composed with mughal sanghnars and miniature flowers extensively hand embroidered with resham, zardozi and gotta. It also features hand screen printed borders. ', '1624201590568.jpeg,1624201590665.jpeg', 'Bridals', 'Dry clean only. Keep the garment hanged in the suit.', 'Lahore'),
(45, 'BRD200', '50000', 'A modern paneled bridal long shirt in hand woven zari copper gold fabric with extensive detailed hand embroidery featuring resham, french knot, crystals , katdana and zardozi. It comes with a red pure raw silk lehenga with hand worked border in crystals and pearl s. It is paired with a gold zari net dupatta and a cotton net red dupatta.', '1624201889604.jpeg,162420188973.jpeg', 'Bridals', 'Dry clean only. Keep the garment hanged in the suit.', 'Islamabad'),
(46, 'BRD177-2', '45600', 'An extensively hand worked lame peplum and lehnga paired with a gold mesh dupatta. The lehnga has a beautiful scenic imagery comprised of peacocks and Cyprus paisley. The handwork is based on heritage zardoze embroidery and a cotton net red dupatta with extensive hand worked border and Chan in zardozi gotta crystals and pearls. Can be paired with: 1) Gold Dupatta 2) Red ', '1624202049527.jpeg,1624202049769.jpeg', 'Bridals', 'Dry clean only. Keep the garment hanged in the suit.', 'Islamabad'),
(47, 'BRD177-1', '47000', 'An extensively hand worked lame peplum and lehnga paired with a gold mesh dupatta. The lehnga has a beautiful scenic imagery comprised of peacocks and Cyprus paisley. The handwork is based on heritage zardoze embroidery.', '1624202277810.jpeg,1624202277936.jpeg', 'Bridals', 'Dry clean only. Keep the garment hanged in the suit.', 'Karachi'),
(48, ' BRD-142', '47900', 'Heavily embellished bridal, lehnga choli encrusted with Swarovski stones, pearls, resham embroidery and kora dhaka along with a heavily embellished shawl.', '1624202389671.jpeg', 'Bridals', 'Dry clean only. Keep the garment hanged in the suit.', 'Karachi'),
(49, 'BRD-143', '86000', 'Heavily embellished bridal, with a rich velvet gharara and short tunic encrusted with Swarovski stones, pearls, resham embroidery and kora dhaka along with a heavily embellished shawl. The grand Barat Velvet Shawl is encrusted with kora dhaka, embroidery and Swarovski stones and best combo for a bridal.', '1624202534300.jpeg', 'Bridals', 'Dry clean only. Keep the garment hanged in the suit.', 'Karachi'),
(50, ' BRD90', '50000', 'Fabric: Chiffon Pattern: Resham-Embroidery, Zari-Work, Stone-Work, Sequins-Work, Beads, Ari and Zardosi-Work, Hand-Embroidery Type: Bridal.', '1624202660802.jpeg,1624202660211.jpeg', 'Bridals', 'Dry clean only. Keep the garment hanged in the suit.', 'Karachi'),
(51, 'BRD206', '45000', 'A velvet lehnga featuring extensive hand crafted flower motifs and fligrie in resham, gotta and zardozi. It comes with a copper hand woven fabric choli with hand embroidered motifs and eddging. It is paired with a chiffon dupatta and a Charmeuse shawl.', '1624202882744.jpeg,1624202882126.jpeg', 'Bridals', 'Dry clean only. Keep the garment hanged in the suit.', 'Islamabad'),
(52, 'Oxidized Jhumka-03', '299', ' beautifull Oxidized Jhumka ', '1624203157919.jpg', 'Earring', 'Please use care fully', 'Faisalabad'),
(53, 'Meena Jhumka-19', '499', 'Different color mixture', '1624203302733.jpg', 'Earring', 'Please use care fully', 'Faisalabad'),
(54, 'Golden chumka', '500', 'Availability', '1624203541478.jpg', 'Earring', 'Please use care fully', 'Faisalabad'),
(55, 'Golden earrings', '200', 'Availability', '1624203762122.jpg', 'Earring', 'please use carefully', 'Lahore'),
(56, 'Kundan Enamelled Pair ', '300', 'Availability', '1624203860758.jpg', 'Earring', 'please use carefully', 'Lahore'),
(58, 'Lavender Bloom Drop Earring', '400', 'Availability', '1624204055744.jpg', 'Earring', 'please use carefully', 'Lahore'),
(59, 'silver stylish Jhumka', '399', 'Availability', '1624204133427.jpg', 'Earring', 'Please use carefully', 'Islamabad'),
(60, 'Afghani earrings', '399', 'Availability', '1624204223845.jpg', 'Earring', 'please use carefully', 'Islamabad'),
(62, 'Gold fancy earrings', '500', 'Available', '1624204912764.jpg', 'Earring', 'Please use carefully', 'Islamabad'),
(63, 'Untamedpetals Hoop Earring', '490', 'Available', '1624204988216.jpg', 'Earring', 'Please use carefully', 'Karachi'),
(64, 'Matt Finish Earrings', '400', 'Available ', '1624205123494.jpg', 'Earring', 'Please use carefully', 'Karachi'),
(65, 'Lavender Bloom Drop Earring', '390', 'Available ', '1624205230422.jpg', 'Earring', 'Please use carefully', 'Karachi'),
(68, 'Golden diamond bangles', '500', 'Available ', '1624205636265.jpg', 'Wrist Wear', 'please use carefully', 'Faisalabad'),
(69, 'South India Design  Bangles', '499', 'Available ', '16242057143.jpg', 'Wrist Wear', 'please use caefully', 'Faisalabad'),
(70, 'festive jewelry(bangles)', '200', 'Available', '16242120756.jpg', 'Wrist Wear', 'Please use carefully', 'Faisalabad'),
(71, 'Kundan Enamelled Pair of bangles', '300', 'Available ', '1624212147189.jpg', 'Wrist Wear', 'Please use carefully', 'Lahore'),
(72, 'Gold bangles', '400', 'Available ', '1624212234263.jpeg', 'Wrist Wear', 'Please use carefully', 'Lahore'),
(73, 'White and Rose Gold', '350', 'Available ', '1624212307591.jpg', 'Wrist Wear', 'Please use carefully', 'Lahore'),
(74, 'Diamond fancy ring', '470', 'Available ', '1624212376634.jpg', 'Wrist Wear', 'Please use carefully', 'Islamabad'),
(75, 'Unique-Design-Crystal', '280', 'Available ', '1624212452335.jpg', 'Wrist Wear', 'Please use carefully', 'Islamabad'),
(78, 'Watch', '400', 'Available ', '1624213045221.jpg', 'Wrist Wear', 'Please use carefully', 'Karachi'),
(79, 'bangels', '500', 'Available ', '1624213873672.jpg', 'Wrist Wear', 'Please use carefully', 'Islamabad'),
(80, 'bangels', '500', 'Available ', '1624214037238.jpg', 'Wrist Wear', 'Please use carefully', 'Islamabad'),
(81, 'W-insta-329', '600', 'Available ', '1624214203183.jpg', 'Wrist Wear', 'Please use carefully', 'Karachi'),
(82, 'W-insta-326', '700', 'Available', '1624214400312.jpg', 'Wrist Wear', 'Please use carefully', 'Karachi'),
(83, 'W-insta-184', '800', 'Available ', '1624214527168.jpg', 'Wrist Wear', 'Please use carefully', 'Faisalabad'),
(84, 'Nacklace-collection-01', '1000', 'Available', '1624215286112.jpg', 'Necklace', 'Please use carefully', 'Faisalabad'),
(85, '  Nacklace-collection-02', '1000', 'Available', '1624215445201.jpg', 'Necklace', 'Please use  carefully', 'Faisalabad'),
(86, '  Nacklace-collection-03', '2500', 'Available ', '1624215689891.jpg', 'Necklace', 'Please use carefully', 'Faisalabad'),
(87, '  Nacklace-028', '4500', 'Available', '1624215769743.jpg', 'Necklace', 'Please use carefully', 'Lahore'),
(88, '  Nacklace-021', '3500', 'Available ', '1624215876233.jpg', 'Necklace', 'Please use carefully', 'Lahore'),
(89, '  Nacklace-022', '1600', 'Available', '1624215941582.jpg', 'Necklace', 'Please use caefully', 'Lahore'),
(90, '  Nacklace-023', '1700', 'Available', '1624215998185.jpg', 'Necklace', 'Please use carefully', 'Lahore'),
(91, '  Nacklace-collection-011', '1900', 'Available', '1624216066285.jpg', 'Necklace', 'Please use carefully', 'Islamabad'),
(92, '  Nacklace-collection-012', '2000', 'Available', '1624216123443.jpg', 'Necklace', 'Please use carefully', 'Islamabad'),
(93, '  Nacklace-collection-013', '2200', 'Available', '1624216175511.jpg', 'Necklace', 'Please use carefully', 'Islamabad'),
(94, '  Nacklace-0141', '1600', 'Available', '1624216574263.jpg', 'Necklace', 'Please use carefully', 'Karachi'),
(95, '  Nacklace-0142', '1800', 'Available', '1624216645165.jpg', 'Necklace', 'Please use carefully', 'Karachi'),
(96, '  Nacklace-0143', '2600', 'Available ', '1624216743343.jpg', 'Necklace', 'Please use carefully', 'Karachi'),
(97, '  Nacklace-0144', '1900', 'Available', '1624216858257.jpg', 'Necklace', 'Please use carefully', 'Karachi'),
(98, 'Nacklace-collection-04', '3200', 'Available', '1624216951158.jpg', 'Necklace', 'Please use carefully', 'Faisalabad');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `verification` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `rent_customer`
--

CREATE TABLE `rent_customer` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` varchar(10000) NOT NULL,
  `image` varchar(1026) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rent_customer`
--

INSERT INTO `rent_customer` (`id`, `name`, `email`, `message`, `image`) VALUES
(1, 'uswanadeem', 'uswanadeem24@gmail.com', 'Hi! I visited your website. And I interested to rent my dress. I show pictures if you rent my dress on your website.\r\nThank you', '1624217231456.png'),
(2, 'Hina', 'hina123@gmail.comm', 'Hi! I visited your website. And I interested to rent my dress. I show pictures if you rent my dress. please check out my dress', '1624217319112.jpg'),
(3, 'sana', 'sananadeem242@gmail.com', 'Hi! I visited your website. And I interested to rent my dress. I show pictures if you rent my dress...\r\nPlease check out my outfit \r\nThank you', '1624217559741.jpg'),
(4, 'Suhair Nadeem', 'suhair@gmail.com', 'Hi! I visited your website. And I interested to rent my dress. I show pictures if you rent my dress. I dropped  picture of  my dress .please must be checkout.\r\nThank you ', '1624217645297.jpg'),
(5, 'Ammara Javed', 'ammara@gmail.com', 'Hi! I visited your website. And I interested to rent my dress. I show pictures if you rent my dress...\r\nI am also rent my jewllery.Thank you', '1624217709333.jpg'),
(6, 'Nida', 'nida678@gmail.com', 'Hi! I visited your website. And I interested to rent my dress. I show pictures if you rent my dress....', '1624217738672.jpg'),
(7, 'kasloom', 'kasloom123@gmail.com', 'Hi! I visited your website. And I interested to rent my jewelry. I show pictures of necklace', '1624217852634.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` int(11) NOT NULL,
  `picture` varchar(1026) NOT NULL,
  `heading` varchar(1000) NOT NULL,
  `para` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `picture`, `heading`, `para`) VALUES
(1, '1624174945408.jpg', '<h1><strong>The beauty of of your dreams</strong></h1>\r\n', '<p>Explore</p>\r\n'),
(2, '1624173456382.jpg', '<h1>IT&#39;s Ok</h1>\r\n\r\n<h1><strong>To be Little Obsessed With Jewelry</strong></h1>\r\n', ''),
(3, '1624174173402.jpg', '<h1>Life is a.....</h1>\r\n\r\n<h1><strong>Party, dress like it</strong></h1>\r\n', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer-order`
--
ALTER TABLE `customer-order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer_login`
--
ALTER TABLE `customer_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer_order_item`
--
ALTER TABLE `customer_order_item`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rent_customer`
--
ALTER TABLE `rent_customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `customer-order`
--
ALTER TABLE `customer-order`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `customer_login`
--
ALTER TABLE `customer_login`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `customer_order_item`
--
ALTER TABLE `customer_order_item`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=99;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rent_customer`
--
ALTER TABLE `rent_customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
