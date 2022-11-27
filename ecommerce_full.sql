-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 23, 2022 at 06:08 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommerce_full`
--

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `qty` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `carts`
--

INSERT INTO `carts` (`id`, `user_id`, `product_id`, `qty`, `created_at`, `updated_at`) VALUES
(1, 1, 15, '3', '2022-11-21 07:54:47', '2022-11-21 07:54:47'),
(2, 1, 16, '2', '2022-11-21 08:15:49', '2022-11-21 08:15:49'),
(3, 1, 20, '3', '2022-11-21 08:16:34', '2022-11-21 08:16:34'),
(4, 1, 20, '2', '2022-11-21 08:23:36', '2022-11-21 08:23:36'),
(5, 1, 15, '1', '2022-11-21 10:51:27', '2022-11-21 10:51:27'),
(6, 1, 16, '3', '2022-11-21 21:15:42', '2022-11-21 21:15:42'),
(7, 1, 15, '3', '2022-11-21 21:29:35', '2022-11-21 21:29:35');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('1','0') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_id`, `name`, `status`, `created_at`, `updated_at`) VALUES
(14, NULL, 'ELECTRONICS', '1', '2022-09-09 04:00:44', '2022-09-09 04:00:44'),
(15, NULL, 'CLOTHES', '1', '2022-09-09 04:00:52', '2022-09-09 04:00:52'),
(20, NULL, 'BOOKS & ENTERTAINMENTS', '1', '2022-09-09 04:09:13', '2022-09-09 04:09:13'),
(21, NULL, 'SPORTS & LEISURE', '1', '2022-09-09 04:09:20', '2022-09-09 04:09:20'),
(26, 14, 'Cameras', '1', '2022-09-09 04:12:29', '2022-09-09 04:12:29'),
(27, 14, 'Computers, Tablets & laptop', '1', '2022-09-09 04:12:33', '2022-09-09 04:12:33'),
(28, 14, 'Mobile Phone', '1', '2022-09-09 04:12:44', '2022-09-09 04:12:44'),
(29, 14, 'Sound & Vision', '1', '2022-09-09 04:12:54', '2022-09-09 04:12:54'),
(30, 14, 'Smart Home', '1', '2022-09-09 04:13:12', '2022-09-09 04:13:12'),
(31, 15, 'Women\'s Clothing', '1', '2022-09-09 04:15:53', '2022-09-09 04:15:53'),
(32, 15, 'Women\'s Shoes', '1', '2022-09-09 04:16:04', '2022-09-09 04:16:04'),
(33, 15, 'Women\'s Hand Bags', '1', '2022-09-09 04:16:12', '2022-09-09 04:16:12'),
(34, 15, 'Men\'s Clothings', '1', '2022-09-09 04:16:22', '2022-09-09 04:16:22'),
(35, 15, 'Men\'s Shoes', '1', '2022-09-09 04:17:14', '2022-09-09 04:17:14'),
(37, NULL, 'HOME APPLIANCES', '1', '2022-09-09 10:28:10', '2022-09-09 10:28:10'),
(38, 37, 'Refrigerator', '1', '2022-09-09 10:30:34', '2022-09-09 10:30:34');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
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
(5, '2022_09_07_135208_create_categories_table', 2),
(6, '2022_09_08_194630_create_products_table', 3),
(7, '2022_09_09_080830_create_product_details_table', 4),
(8, '2022_11_19_201646_create_carts_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('1','0') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `name`, `price`, `image`, `status`, `created_at`, `updated_at`) VALUES
(14, 32, 'Alba 04 Grey Goldstar Sneakers For Women', '1040', '2022-09-09-1662739587.jpg', '1', '2022-09-09 10:21:27', '2022-09-09 10:21:27'),
(15, 32, 'Alba 04 Black Goldstar Sneakers For Women', '1040', '2022-09-09-1662739841.jpg', '1', '2022-09-09 10:25:41', '2022-09-09 10:25:41'),
(16, 38, 'LG Refrigerator 258 Ltrs-GLK292SLTL.APZQ', '60000', '2022-09-09-1662740161.jpg', '1', '2022-09-09 10:31:01', '2022-09-09 10:31:01'),
(17, 38, 'WHIRLPOOL 245 Litres Frost Free Double Door Refrigerator (NEO 258 LH PRM-Wine Chromium)', '50000', '2022-09-09-1662740274.jpg', '1', '2022-09-09 10:32:54', '2022-09-09 10:32:54'),
(18, 38, 'Himstar Refrigerator (HS-HD215CMFE)', '40000', '2022-09-09-1662740376.jpg', '1', '2022-09-09 10:34:36', '2022-09-09 10:34:36'),
(19, 32, 'Amazing Newborn Breathable Popular Platform Sneakers For Women\'s ( B-3))', '2900', '2022-09-09-1662742947.jpg', '1', '2022-09-09 11:17:27', '2022-09-09 11:17:27'),
(20, 28, 'Samsung Galaxy S22 5G Dynamic AMOLED 120Hz Refresh Rate 1 Year Breakage Insurance', '120000', '2022-09-09-1662743280.jpg', '1', '2022-09-09 11:21:02', '2022-09-09 11:23:00'),
(21, 28, 'Samsung Galaxy S22 Ultra 5G (12GB/ 512GB)', '190000', '2022-09-09-1662743263.jpg', '1', '2022-09-09 11:22:43', '2022-09-09 11:22:43'),
(22, 28, 'Apple iPhone 11 | A13 Bionic chip | 64 GB & 128 GB - Apple Store', '80000', '2022-09-09-1662743432.jpg', '1', '2022-09-09 11:25:32', '2022-09-09 11:25:32'),
(23, 28, 'Apple iPhone 13 Apple A15 Bionic Chip', '180000', '2022-09-09-1662743502.jpg', '1', '2022-09-09 11:26:42', '2022-09-09 11:26:42'),
(24, 26, 'Canon PS G 7 X MARK III Camera', '110000', '2022-09-09-1662743728.jpg', '1', '2022-09-09 11:30:28', '2022-09-09 11:30:28'),
(25, 26, 'Canon 90D Digital SLR Camera [Body Only]', '180000', '2022-09-09-1662743755.jpg', '1', '2022-09-09 11:30:55', '2022-09-09 11:30:55'),
(26, 26, 'Canon Eos 90D Digital Slr Camera With Ef-S 18-135Mm F/3.5-5.6 Image Stabilisation Usm Lens Kit (16 Gb Sd Card) - Black', '220000', '2022-09-09-1662743780.jpg', '1', '2022-09-09 11:31:20', '2022-09-09 11:31:20'),
(27, 30, 'Tuya WiFi RF IR Universal Remote Controller RF Appliances Appliances Tuya Smart Life App Voice Control via Alexa Google Home', '5000', '2022-09-09-1662744133.jpg', '1', '2022-09-09 11:37:13', '2022-09-09 11:37:13'),
(28, 30, 'Easy Biometric Fingerprint Keyless Entry Alexa for Home App Finger Smart Digital Door Lock Remote Control', '50000', '2022-09-09-1662744234.jpg', '1', '2022-09-09 11:38:54', '2022-09-09 11:38:54'),
(29, 30, 'smart affordable home door lock with advanced security features', '20000', '2022-09-09-1662744305.png', '1', '2022-09-09 11:40:05', '2022-09-09 11:40:05'),
(30, 32, 'Smart Digital Shoes for Anyone', '99999', '2022-11-16-1668597435.jpg', '1', '2022-11-16 05:32:15', '2022-11-16 05:32:15');

-- --------------------------------------------------------

--
-- Table structure for table `product_details`
--

CREATE TABLE `product_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_items` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_details`
--

INSERT INTO `product_details` (`id`, `product_id`, `title`, `total_items`, `description`, `created_at`, `updated_at`) VALUES
(2, 14, 'Product details of Alba 04 Grey Goldstar Sneakers For Women', '50', 'Product Details <br>Material: Fly Knit Insole Material: Eva / FabricOutsole Material: PVCClosure: Lace-UpType: Running / CasualTip Shape: Round', '2022-09-09 10:24:37', '2022-11-15 10:57:19'),
(3, 15, 'Product details of Alba 04 Black Goldstar Sneakers For Women', '100', 'Product DetailsMaterial: Fly Knit Insole Material: Eva / FabricOutsole Material: PVCClosure: Lace-UpType: Running / CasualTip Shape: Round', '2022-09-09 10:26:07', '2022-09-09 10:26:07'),
(4, 16, 'LG Refrigerator 258 Ltrs-GLK292SLTL.APZQ', '150', 'Brand	LG\r\nCondensor	Concealed\r\nVegetable Tray	Transparent\r\nChiller	N/A\r\nShelves	Toughened Glass Shelves\r\nDoor Baskets	Transparent\r\nCooling Type	Frost Free\r\nDoor Finish	High Gloss Finish\r\nGross Capacity (Ltr.)	258 Ltrs\r\nLow Voltage Startup (Range)	100v~290v\r\nSmart Inverter Compressor', '2022-09-09 10:31:54', '2022-09-09 10:31:54'),
(5, 17, 'Product details of WHIRLPOOL 245 Litres Frost Free Double Door Refrigerator (NEO 258 LH PRM-Wine Chromium)', '50', 'Model - Neo Fresh 245 Litres\r\nCapacity: 245 L\r\nWine Chromium Steel Color\r\nUp to 12 Days of Garden Freshness\r\n6TH SENSE® DeepFreeze Technology\r\nMicroBlock™ Technology\r\nFresh Flow Air Tower with Flexi Vents\r\n2 Years Comprehensive Warranty\r\n10 Years Compressor Warranty', '2022-09-09 10:33:51', '2022-09-09 10:33:51'),
(6, 18, 'Product details of Himstar Refrigerator (HS-HD215CMFE)', '25', 'Door Type :- Vertical\r\nColor:- Blue Flower\r\nFeatures :- Vegetable box, Handle, Lock, Leather Resign Finished\r\nCapacity :- 195 Liters\r\nWarranty :- 10 Years on Compressor\r\nLock System :- Key\r\nShelves Type :- Toughen Glass Shelves\r\nBack Side :- Clean back', '2022-09-09 10:35:18', '2022-09-09 10:35:18'),
(7, 19, 'Product details of Amazing Newborn Breathable Popular Platform Sneakers For Women\'s ( B-3))', '75', 'Upper Material:Leather\r\nUpper Height:Low\r\nShoe Width:Medium(B,M)\r\nRelease Date:others\r\nFit:Fits true to size, take your normal size\r\nLevel Of Practice:Advanced\r\nInsole Material:EVA\r\nGender:Women\r\nSports Type:Lifestyle\r\nFeature:Massage,Breathable,Height Increasing\r\nFor Distance:Half Marathon(>20km)\r\nOutsole Material:Rubber\r\nClosure Type:Lace-Up\r\nApplicable Place:Hard Court\r\nModel Number:2021 Soft Running Shoes for Women', '2022-09-09 11:17:59', '2022-09-09 11:17:59'),
(8, 20, 'Product details of Samsung Galaxy S22 5G Dynamic AMOLED 120Hz Refresh Rate 1 Year Breakage Insurance', '20', 'MEMORY: 8GB 256GB\r\nTechnology: GSM / CDMA / HSPA / EVDO / LTE / 5G\r\nColor Variants: Black, Pink Gold, White\r\nDimension: 146 x 70.6 x 7.6 mm (5.75 x 2.78 x 0.30 in)\r\nWeight: 167 g / 168 g (mmWave) (5.89 oz)\r\nBuild: Glass front (Gorilla Glass Victus+), glass back (Gorilla Glass Victus+), aluminum frame\r\nSIM: Single SIM (Nano-SIM) or Dual SIM (2 Nano-SIMs + eSIM, dual stand-by)\r\nDisplayType: Dynamic AMOLED 2X, 120Hz, HDR10+, 1750 nits (peak)\r\nDisplay Size: 6.6 inches, 105.3 cm2 (~88.3% screen-to-body ratio)\r\nResolution: 1080 x 2340 pixels, 19.5:9 ratio (~393 ppi density)\r\nAndroid Version: Android 12, One UI 4.1\r\nProcessor: Qualcomm SM8450 Snapdragon 8 Gen 1 (4 nm)\r\nGPU: Adreno 730\r\nFront Camera: 50 MP, f/1.8, 23mm (wide), 1/1.56\", 1.0µm, Dual Pixel PDAF, OIS10 MP, f/2.4, 70mm (telephoto), 1/3.94\", 1.0µm, PDAF, OIS, 3x optical zoom\r\n12 MP, f/2.2, 13mm, 120˚ (ultrawide), 1/2.55\" 1.4µm, Super Steady video\r\nVideo: 8K@24fps, 4K@30/60fps, 1080p@30/60/240fps, 720p@960fps, HDR10+, stereo sound rec., gyro-EIS\r\nSelfie Camera: 10 MP, f/2.2, 26mm (wide), 1/3.24\", 1.22µm, Dual Pixel PDAF\r\nSelfie Video: 4K@30/60fps, 1080p@30fps\r\nBattery: Li-Ion 3700 mAh, non-removable, Fast charging 25W, USB Power Delivery 3.0, Fast Qi/PMA wireless charging 15W, Reverse wireless charging 4.5W\r\nSensor: Fingerprint (under display, ultrasonic), accelerometer, gyro, proximity, compass, barometer, Samsung DeX, Samsung Wireless DeX (desktop experience support), Bixby natural language commands and dictation, Samsung Pay (Visa, MasterCard certified)\r\nIP Rating: IP68 dust/water resistant (up to 1.5m for 30 mins),\r\nArmour aluminum frame with tougher drop and scratch resistance (advertised)\r\nWLAN: Wi-Fi 802.11 a/b/g/n/ac/6, dual-band, Wi-Fi Direct, hotspot\r\nBluetooth: 5.2, A2DP, LE\r\nGPS: Yes, with A-GPS, GLONASS, BDS, GALILEO\r\nNFA: Yes\r\nUSB: USB Type-C 3.2, USB On-The-Go', '2022-09-09 11:21:37', '2022-09-09 11:21:37'),
(9, 21, 'Product details of Samsung Galaxy S22 Ultra 5G (12GB/ 512GB)', '10', 'Body\r\nDimension - 163.3 x 77.9 x 8.9 mm\r\nWeight - 228 gm\r\nBuild\r\nBack: Corning Gorilla Glass Victus+\r\nFront: Corning Gorilla Glass Victus+\r\nFrames: Armored Aluminum\r\nIP68 dust/water resistant\r\nColors - Phantom Black, Green, Burgundy\r\nDisplay\r\nSize - 6.8 inches\r\nType - Dynamic AMOLED 2X\r\nResolution\r\n3088 x 1440 pixels\r\n19.5 : 9 aspect ratio\r\n500 PPI pixel density\r\nProtection - Corning Gorilla Glass Victus+\r\nRefresh Rate - 120Hz\r\nTouch Sampling Rate - 240Hz\r\nBrightness - 1750 nits (peak)\r\nOthers - HDR10+, Vision Booster, LTPO 2.0\r\nNetwork\r\nSIM - Dual SIM (2 Nano-SIMs + eSIM)\r\nTechnology - GSM / CDMA / HSPA / EVDO / LTE / 5G\r\n2G Bands - GSM 850 / 900 / 1800 / 1900\r\n3G Bands - HSDPA 850 / 900 / 1700 / 1900 / 2100\r\n4G BandsB1 / 2 / 3 / 4 / 5 / 7 / 8 / 12 / 13 / 17 / 18 / 19 / 20 / 25 / 26 / 28 / 32 / 38 / 39 / 40 / 41 / 66\r\n5G Bands - N1 / 2 / 3 / 5 / 7 / 8 / 12 / 20 / 25 / 28 / 38 / 40 / 41 / 66 / 75 / 77 / 78\r\nPerformance\r\nChipset - Qualcomm Snapdragon 8 Gen 1 5G (4nm)CPU\r\nOcta-core\r\n– 1x Cortex-X2 (2.80 GHz)\r\n– 3x Cortex-A710 (2.50 GHz)\r\n– 4x Cortex-A510 (1.80 GHz)\r\nGPU - Adreno 730\r\nOS - Android 12\r\nUI Version - One UI 4.1\r\nPromised Updates\r\n4 Years (Android Upgrades)\r\n5 Years (Security Updates)\r\nMemory\r\nRAM - 12GB LPDDR5\r\nStorage - 256/512GB UFS 3.1\r\nVariant - 12/256GB, 12/512GB\r\nSD Card - No\r\nBack Cameras\r\nQuad\r\nPrimary : 108MP f/1.8, OIS, 23 mm (1/1.33\")\r\nUltrawide : 12MP f/2.2, 120° FoV, 13 mm (1/2.55\")\r\nTelephoto : 10MP f/2.4, 3x Optical Zoom, OIS, 70 mm (1/3.52\")\r\nPeriscope : 10MP f/4.9, 10x Optical Zoom, OIS, 230 mm (1/3.52\")\r\nFeatures - Nightography, Auto Framing, AI Stereo Depth Map, Single Take, etc.Video8K @ 24 fps, 4K @ 30/60 fps, 1080p @ 30/60/240 fps\r\nFront Camera\r\nSingle - 40MP f/2.2, PDAF, 26 mm (1/2.82\")FeaturesAutofocus, NightographyVideo4K @ 30/60 fps, 1080p @ 30 fps\r\nSecurity\r\nFingerprint - In-display (Ultrasonic)\r\nFace Unlock - 2D Face Recognition\r\nAudio\r\nSpeaker - Yes (Stereo)\r\n3.5 mm Jack - No\r\nOthers - Dolby Atmos audio\r\nSensors\r\nType - Accelerometer, Barometer, Gyro, Geomagnetic, Hall, Light, Proximity\r\nConnectivity\r\nWLAN - WiFi 6E (802.11 a/b/g/n/ac/ax), Dual-Band, WiFi Direct, Hotspot\r\nBluetooth - 5.2GPSYes, with A-GPS, Glonass, Galileo, BDS\r\nNFC - Yes\r\nUSB - USB 3.2 Type-C, OTG\r\nBattery\r\nType - Li-Ion 5000 mAh, non-removable\r\nCharging - 45W Fast Charging\r\nWireless Charging - 15W Wireless Charging\r\n4.5W Reverse Wireless Charging\r\nExtras\r\nFeatures - Wireless DeX, Samsung Knox Security, Samsung Wallet', '2022-09-09 11:23:55', '2022-09-09 11:23:55'),
(10, 22, 'Product details of Apple iPhone 11 | A13 Bionic chip | 64 GB & 128 GB - Apple Store', '50', 'Liquid Retina HD display\r\n6.1 inch (diagonal) all-screen LCD Multi-Touch display with IPS technology\r\n1792 by 828 pixel resolution at 326 ppi\r\n1400:1 contrast ratio (typical)\r\nTrue Tone display\r\nA13 Bionic chip\r\n6-core CPU with 2 performance and 4 efficiency cores\r\n4-core GPU\r\n8-core Neural Engine\r\n4K video recording at 24 fps, 25 fps, 30 fps, or 60 fps\r\n1080p HD video recording at 25 fps, 30 fps, or 60 fps\r\n720p HD video recording at 30 fps', '2022-09-09 11:26:00', '2022-09-09 11:26:00'),
(11, 23, 'Product details of Apple iPhone 13 Apple A15 Bionic Chip', '25', 'Display:Super Retina XDR display / 6.1 inch (diagonal) all screen OLED display /2532 by 1170-pixel resolution at 460 ppi\r\nChip:A15 Bionic chip / New 6 core CPU with 2 performance and 4 efficiency cores \r\nCamera:Dual 12MP camera system: Wide and Ultra Wide cameras / Wide: ƒ/1.6 aperture  \r\nVideo Recording:   1080p at 30 fps HDR video recording with Dolby Vision up to 4K at 60 fps / 4K video recording at 24 fps, 25 fps, 30 fps, or 60 fps\r\nFace ID:Enabled by TrueDepth camera for facial recognition\r\nNetwork: GSM / CDMA / HSPA / EVDO / LTE / 5G\r\nCPU:Hexa-core (2x3.23 GHz Avalanche + 4x1.82 GHz Blizzard)\r\nGPU:Apple GPU (4-core graphics)', '2022-09-09 11:27:09', '2022-09-09 11:27:09'),
(12, 26, 'Product details of Canon Eos 90D Digital Slr Camera With Ef-S 18-135Mm F/3.5-5.6 Image Stabilisation Usm Lens Kit (16 Gb Sd CArd)', '10', '32.5MP APS-C CMOS Sensor\r\nDIGIC 8 Image Processor\r\nUHD 4K30p & Full HD 120p Video Recording\r\n3″ 1.04m-Dot Vari-Angle Touchscreen LCD\r\n45-Point All Cross-Type AF System\r\nDual Pixel CMOS AF with 5481 AF Points\r\nUp to 10-fps Shooting, ISO 100-25600\r\nBuilt-In Wi-Fi and Bluetooth\r\nEOS iTR AF, Electronic Shutter Function\r\n220,000-Pixel AE Metering Sensor\r\nGeneral\r\nModel Number:90D\r\nCamera Format:SLR\r\nTripod Mount:Yes\r\nWeight: 42.9 oz (1,216 g) includes batteries, kit lens\r\nSize: 5.5 x 4.1 x 3.0 in. (141 x 105 x 77 mm)\r\nWaterproof:No\r\n\r\nImage Sensor\r\nSensor Type:CMOS\r\nSensor Manufacturer:Canon\r\nEffective Megapixels:32.5\r\nSensor Format:APS-C\r\nSensor size:337.5mm2 (22.50mm x 15.00mm)\r\nPixel Pitch:3.23 microns\r\nFocal Length Multiplier:1.6x\r\nAspect Ratio: 3:2\r\nColor Filter Type:RGBG\r\nAnti Aliasing Filter:Fixed\r\nSelf-Cleaning:Yes\r\nSensor shift image stabilization:No\r\nOn-Sensor Phase Detect:Yes\r\nImage Capture\r\nImage Resolution:\r\n6960 x 4640 (32.3 MP, 3:2),\r\n4800 x 3200 (15.4 MP, 3:2),\r\n3472 x 2320 (8.1 MP, 3:2),\r\n2400 x 1600 (3.8 MP, 3:2),\r\n6160 x 4640 (28.6 MP, 4:3),\r\n4256 x 3200 (13.6 MP, 4:3),\r\n3072 x 2320 (7.1 MP, Other),\r\n2112 x 1600 (3.4 MP, Other),\r\n6960 x 3904 (27.2 MP, 16:9),\r\n4800 x 2688 (12.9 MP, Other),\r\n3472 x 1952 (6.8 MP, 16:9),\r\n2400 x 1344 (3.2 MP, Other),\r\n4640 x 4640 (21.5 MP, 1:1),\r\n3200 x 3200 (10.2 MP, 1:1),\r\n2320 x 2320 (5.4 MP, 1:1),\r\n1600 x 1600 (2.6 MP, 1:1)\r\nImage File Format: JPEG (EXIF 2.31), 14-bit .CR3 RAW, C-RAW, RAW+JPEG, C-RAW+JPEG\r\nContinuous-mode frames/second:10.0\r\nVideo Capture\r\nCan take movies:Yes\r\nMovie Resolution:\r\n3840x2160 (30p/​25p)\r\n1920x1080 (120p/​100p/​60p/​50p/​30p/​25p)\r\n1280x720 (60p/​50p/​30p/​25p)\r\nMovie File Format:MOV (Video: H.264 All-I, Audio: Stereo Linear PCM), MP4 (Video: H.264 IPB/IPB Light, Audio: AAC)\r\nComposite Video Out:No\r\nNTSC/PAL Switchable Video:n/a\r\nVideo Usable as Viewfinder:n/a\r\nHD Video Out:Yes\r\nHD Video Connection:HDMI\r\nLens & Optics\r\nLens Mount:Canon EF/EF-S\r\nLens:Canon EF-S 18-135mm f/3.5-5.6 IS USM\r\nFocal Length (35mm equivalent): 29 - 216mm\r\nFocal Length (actual): 18 - 135mm\r\nZoom Ratio:7.50x\r\nAperture Range:f/3.5 - f/22 (wide) / f/5.6 - f/36 (tele)\r\nIntegrated ND Filter:No\r\nNormal Focus Range: 39 cm to Infinity/15.4 in to Infinity\r\nFilter Thread:67.0mm\r\nThread Type:n/a\r\nOptical Image Stabilization:Yes\r\nDigital Zoom: Auto Focus\r\nAuto Focus:Yes\r\nAuto Focus Type:OVF\r\nRear Display:Yes\r\nRear Display Size (inches):3.0\r\nRear Display Resolution: 1,040,000 dots (346,600 px)\r\nTouchscreen:Yes\r\nArticulating Screen:Yes\r\nTilt Swivel Screen:Yes\r\nSelfie Screen:Yes\r\nTop Deck Display:Yes\r\n\r\nExposure\r\nMaximum ISO (native):25600\r\nMinimum ISO (native):100\r\nISO Settings:Auto, 100 - 25600 in 1/3 or 1EV steps, Expandable to 51200\r\nAuto ISO Mode:Yes\r\nWhite Balance Settings:Auto (with White or Ambience Priority), Daylight, Shade, Cloudy, Tungsten, White Fluorescent, Flash, Custom, Kelvin 2,500K - 10,000K\r\nShutter Speed Range:1/16000 - 30 secBulb Mode:Yes\r\nExposure Compensation: +/- 5.0EV in 0.3EV steps Metering Modes:220K-pixel RGB+IR metering sensor: 216-zone Evaluative (linked to all AF points), Center-weighted, Partial (6.5%), Spot (2.0%); 384 zones in Live View mode\r\nProgram Auto Exposure:Yes\r\nAperture Priority:Yes\r\nShutter Priority:Yes\r\nFull Manual Exposure:Yes\r\nCreative Exposure Modes:Creative Auto, Scene (Portrait, Landscape, Close-up, Sports, Group Photo, Panning, Food, Kids, Candlelight, Night Portrait, Handheld Night Scene, HDR Backlight Control), 2 Custom User Settings, Creative Filters (Fish-eye, Water-painting, Grainy Black and White, Soft Focus, Toy Camera, Miniature, HDR Art (Standard/Vivid/Bold/Embossed)\r\nSelf Timer:10 or 2 seconds\r\nTime Lapse (intervalometer):Yes\r\nHigh Resolution Composite:No\r\n\r\nFlash\r\nBuilt-in Flash:Yes\r\nFlash Modes:Auto, Manual flash, Integrated Speedlite Transmitter\r\nFlash Guide Number (ISO 100): 12.0 m / 39.4 ft.\r\nLens aperture dependent;\r\nGN= 12m (39.4 ft.) at ISO 100, works out to about 11.2 feet at f/3.5 and 7 feet at f/5.6Max Flash Sync:1/250\r\nFlash Exposure Compensation: +/- 3.0 EV in 0.3EV steps External Flash Connection:Hot Shoe\r\nBuilt-In Wireless Flash Control:Full TTL exposure\r\nImage Storage\r\nUsable Memory Types:SD / SDHC / SDXC\r\nUHS Support:UHS-II\r\nDual Card Slots:No\r\nRAW Capture Support:Yes\r\nUncompressed Format:14-bit .CR3 RAW, C-RAW, RAW+JPEG, C-RAW+JPEG\r\nMovie File Format:MOV (Video: H.264 All-I, Audio: Stereo Linear PCM), MP4 (Video: H.264 IPB/IPB Light, Audio: AAC)\r\nIncluded Memory:No memory included\r\n\r\nConnectivity\r\nBuilt-In Wi-Fi:Yes\r\nNFC:No\r\nBluetooth:Yes\r\nBuilt-In GPS:No\r\nMicrophone Jack:Yes\r\nHeadphone Jack:Yes\r\nExternal Connections:USB 2.0 High Speed, Bluetooth, WiFi\r\nPictBridge Compliant:Yes\r\nDPOF Compliant:Yes\r\nRemote Control:Yes\r\nRemote Control Type:Optional wired or wireless\r\nConnections (extended):Mini (Type-C) HDMI, Micro-B USB 2.0, 3.5mm Microphone Jack, 3.5mm Headphone Jack, Wired Remote\r\nCamera penalizes early shutter press? No\r\nJPEG shooting speed in burst mode (fps, max resolution):10.0\r\nBuffer size for JPEG shooting in burst mode (frames, max resolution):57\r\nRAW shooting speed in burst mode (fps):10.0\r\nBuffer size for RAW shooting in burst mode (frames):27\r\nRAW+JPEG shooting speed in burst mode (fps):10.0\r\nBuffer Size for RAW+JPEG shooting in burst mode (frames):26\r\nShutter lag (full AF, wide/mid):0.13 seconds\r\nShutter lag (prefocused, live view - DSLR):0.056 seconds\r\nShutter Lag (manual focus):0.080 seconds\r\nShutter lag (full AF, with flash):0.16 seconds\r\nShutter Lag (prefocused):0.057 seconds\r\nShutter Lag (notes):Default\r\nEFCS mode used.\r\nElectronic shutter mode: Full\r\nAF lag = 0.231s,\r\nManual focus lag = 0.079s,\r\nPrefocused lag = 0.056s\r\nStartup Time:0.4 secondsPlay -> Record Time:0.2 seconds\r\nFlash cycle time, full power:3.2 seconds\r\nPowerBattery Life, Stills (CIPA Rating Monitor/Live View): 450 shots Battery Life,\r\nStill (CIPA Rating OVF/EVF): 1300 shots Battery Life\r\n\r\nBattery Form Factor:Proprietary\r\nUsable Battery Types:LP-E6N or LP-E6 Lithium-ion rechargeable\r\nBatteries Included: 1 x Proprietary LP-E6N Lithium-ion rechargeable\r\nBattery Charger Included (dedicated charger or AC/USB adapter):Yes\r\nDedicated Battery\r\nCharger Included:Yes\r\nInternal Charging Supported:No', '2022-09-09 11:32:34', '2022-09-09 11:32:34'),
(13, 25, 'Product details of Canon 90D Digital SLR Camera [Body Only]', '25', '32.5 Megapixel APS-C CMOS sensor with Dual Pixel autofocus (live view/video)\r\n45-point all cross-type AF (through the viewfinder) and 220k-pixel metering sensor w/face detection\r\n7 fps burst shooting w/continuous AF and Fully articulating 3\" touchscreen display\r\nOptical viewfinder w/100% coverage and 4K/30p video capture with no crop\r\nUSB 2.0 port with Micro USB connector and Wi-Fi + Bluetooth\r\nCountry of Origin: Japan', '2022-09-09 11:33:15', '2022-09-09 11:33:15'),
(14, 24, 'Product details of Canon PS G 7 X MARK III Camera', '50', '20.2MP 1\" Stacked\r\nCMOS Sensor\r\nDIGIC 8 Image Processor\r\n4.2x Optical Zoom f/1.8-2.8\r\nLens.24-100mm (35mm Equivalent\r\nBuilt-in Flash: YES\r\nMovie Format: MP4', '2022-09-09 11:34:05', '2022-09-09 11:34:05'),
(15, 27, 'Product details of Tuya WiFi RF IR Universal Remote Controller RF Appliances Appliances Tuya Smart Life App Voice Control via Alexa Google Home', '100', 'Newest version with RF and IR highly compatible\r\nMultiple remote control RF protocol\r\nWiFi/4G App Remote Control from Anywhere\r\nHands-free Voice Control\r\nCustomized DIY Copy Function', '2022-09-09 11:37:51', '2022-09-09 11:37:51'),
(16, 28, 'Product details of Easy Biometric Fingerprint Keyless Entry Alexa for Home App Finger Smart Digital Door Lock Remote Control', '25', 'Door Type: Wood door, Steel door, Stainless Steel door, Aluminum door, Brass door rand Name: Eseye Model Number: EY-618 Certification: CE,ROHS Universal lock cylinder: standard lock body Working voltage: 4-6V (4 1.5V alkaline batteries) Applicable door type: stainless steel door / security door / copper door Sensor type: semiconductor fingerprint identification Material: zinc alloy in-mold injection Color: space black straight board The number of users: 500 fingerprints, 100 passwords, 100 cards each Dimention: 250 x 60 x 21 mm Ways to Open: fingerprint, password, proximity card, C-level key, temporary password Feature: Works with Alexa, Google Assistant, IFTTT and AliGenie etc. Data Storage Options: Hardware\r\nDoor Type:\r\nWood door, Steel door, Stainless Steel door, Aluminum door, Brass door\r\nBrand Name:\r\nEseye\r\nModel Number:\r\nEY-618\r\nCertification:\r\nCE,ROHS\r\nUniversal lock cylinder:\r\nstandard lock body\r\nWorking voltage:\r\n4-6V (4 1.5V alkaline batteries)\r\nApplicable door type:\r\nstainless steel door / security door / copper door\r\nSensor type:\r\nsemiconductor fingerprint identification\r\nMaterial:\r\nzinc alloy in-mold injection\r\nColor:\r\nspace black straight board\r\nThe number of users:\r\n500 fingerprints, 100 passwords, 100 cards each\r\nDimention:\r\n250 x 60 x 21 mm\r\nWays to Open:\r\nfingerprint, password, proximity card, C-level key, temporary password\r\nFeature:\r\nWorks with Alexa, Google Assistant, IFTTT and AliGenie etc.\r\nData Storage Options:\r\nHardware', '2022-09-09 11:39:32', '2022-09-09 11:39:32'),
(17, 29, 'Product details of smart affordable home door lock with advanced security features', '100', 'Material High quality aluminum alloy + PVC panel\r\nWorking Current4 AA Alkaline batteries\r\nUnlock Ways Password, Card ,Key, Bluetooth(BLE4.1 and above), APP\r\nLow Voltage Alarm Unlocking alarming when voltage lower than 4.8V\r\nEmergency Charge External charging with standard interface USB\r\nMechanical Keys2 pieces', '2022-09-09 11:40:27', '2022-09-09 11:40:27');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `role`) VALUES
(1, 'admin_zero', 'admin@admin.com', '2022-07-12 20:18:48', '$2y$10$FCzyB9Dqa41neOB.HDo6TulQMIVowC2uHzOyGOC.EkjP3Byqd4JG6', NULL, NULL, NULL, 'admin'),
(7, 'Nova Prime Frost', 'user0@mail.com', NULL, '$2y$10$nf7p2aJR5rE/mSKSNu7XkOQtxr/9jIq8lwgFV4EGgjB6siap6fNxq', NULL, '2022-11-16 05:19:26', '2022-11-16 05:19:26', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `carts_user_id_foreign` (`user_id`),
  ADD KEY `carts_product_id_foreign` (`product_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `categories_category_id_foreign` (`category_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_category_id_foreign` (`category_id`);

--
-- Indexes for table `product_details`
--
ALTER TABLE `product_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_details_product_id_foreign` (`product_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `product_details`
--
ALTER TABLE `product_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `carts`
--
ALTER TABLE `carts`
  ADD CONSTRAINT `carts_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `carts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `categories`
--
ALTER TABLE `categories`
  ADD CONSTRAINT `categories_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `product_details`
--
ALTER TABLE `product_details`
  ADD CONSTRAINT `product_details_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
