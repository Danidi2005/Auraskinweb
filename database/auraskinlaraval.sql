-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Feb 02, 2026 at 09:37 AM
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
-- Database: `auraskinlaraval`
--

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `group`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'cleanser', 'FaceCare', 'cleanser', '2026-02-01 13:49:47', '2026-02-01 13:49:47'),
(2, 'facewash', 'FaceCare', 'facewash', '2026-02-01 13:49:47', '2026-02-01 13:49:47'),
(3, 'Moisturizer', 'FaceCare', 'moisturizer', '2026-02-01 13:49:47', '2026-02-01 13:49:47'),
(4, 'serum', 'FaceCare', 'serum', '2026-02-01 13:49:47', '2026-02-01 13:49:47'),
(5, 'suncreen', 'FaceCare', 'suncreen', '2026-02-01 13:49:47', '2026-02-01 13:49:47'),
(6, 'bodylotion', 'BodyCare', 'bodylotion', '2026-02-01 13:49:48', '2026-02-01 13:49:48'),
(7, 'showergel', 'BodyCare', 'showergel', '2026-02-01 13:49:48', '2026-02-01 13:49:48'),
(8, 'bodyscrub', 'BodyCare', 'bodyscrub', '2026-02-01 13:49:48', '2026-02-01 13:49:48'),
(9, 'bodysunscreen', 'BodyCare', 'bodysunscreen', '2026-02-01 13:49:48', '2026-02-01 13:49:48'),
(10, 'deodorant', 'BodyCare', 'deodorant', '2026-02-01 13:49:48', '2026-02-01 13:49:48'),
(11, 'foundation', 'FaceCare', 'foundation', '2026-02-01 13:55:17', '2026-02-01 13:55:17');

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
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2026_01_27_082116_add_two_factor_columns_to_users_table', 1),
(5, '2026_01_27_082238_create_personal_access_tokens_table', 1),
(6, '2026_01_27_121154_add_admin_column_to_users_table', 1),
(7, '2026_01_28_032059_create_products_table', 1),
(8, '2026_01_29_115000_create_orders_table', 1),
(9, '2026_01_29_115238_create_order_items_table', 1),
(10, '2026_02_01_000000_create_categories_table', 1),
(11, '2026_02_01_000001_add_status_to_orders_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `postal_code` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `payment_method` varchar(255) NOT NULL,
  `total_amount` decimal(10,2) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'Pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `name`, `address`, `city`, `postal_code`, `phone`, `payment_method`, `total_amount`, `status`, `created_at`, `updated_at`) VALUES
(1, 2, 'joj frank', 'yok', 'malbe', '1234', '0123456789', 'Cash', 2600.00, 'Delivered', '2026-02-01 15:15:25', '2026-02-01 15:22:18'),
(2, 3, 'Mobile User', 'APIIT Mobile Test Lab', 'Not Provided', '00000', 'Not Provided', 'API-Mobile', 1500.00, 'pending', '2026-02-01 22:19:29', '2026-02-01 22:19:29');

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_items`
--

INSERT INTO `order_items` (`id`, `order_id`, `product_id`, `quantity`, `price`, `created_at`, `updated_at`) VALUES
(1, 1, 2, 2, 1300.00, '2026-02-01 15:15:25', '2026-02-01 15:15:25');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` text NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `personal_access_tokens`
--

INSERT INTO `personal_access_tokens` (`id`, `tokenable_type`, `tokenable_id`, `name`, `token`, `abilities`, `last_used_at`, `expires_at`, `created_at`, `updated_at`) VALUES
(1, 'App\\Models\\User', 1, 'AuraSkinToken', 'fbdeab338db08f41bc5651d3c48167e19b06bd97d30b4d79a496beab2f121e4c', '[\"*\"]', NULL, NULL, '2026-02-01 16:10:47', '2026-02-01 16:10:47'),
(2, 'App\\Models\\User', 1, 'AuraSkinToken', 'def9fedc382a562c223fdac870ab73b6dfb012022af9ed304c6e91cff503dd17', '[\"*\"]', NULL, NULL, '2026-02-01 21:06:55', '2026-02-01 21:06:55'),
(3, 'App\\Models\\User', 1, 'AuraSkinToken', 'ecafd4f68be56193033db61e54314f68a4cb8d50ba3e8117d2fe6bd546ea1de0', '[\"*\"]', '2026-02-01 21:28:46', NULL, '2026-02-01 21:23:57', '2026-02-01 21:28:46'),
(4, 'App\\Models\\User', 3, 'AuraSkinToken', '4ff641db84828faffee7bc6954dcabaf9d7caa7dbd1087e68a9ba5b7bdee43a7', '[\"*\"]', '2026-02-01 22:19:29', NULL, '2026-02-01 22:11:38', '2026-02-01 22:19:29');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `stock` int(11) NOT NULL DEFAULT 10,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `category`, `type`, `price`, `description`, `image`, `stock`, `created_at`, `updated_at`) VALUES
(1, 'Gentle Glow', 'FaceCare', 'cleanser', 1200.00, 'Experience the ultimate purity with Gentle Glow Cleanser. \nDesigned purely for sensitive skin, this formula removes impurities without stripping moisture. \nEnriched with Chamomile and Vitamin E, it soothes irritation while cleansing. \nMaintain your skin\'s natural pH balance with every wash. \nA daily essential for a radiant, soft, and glowing complexion.', 'cl1.jpeg', 15, '2026-02-01 13:49:47', '2026-02-01 13:49:47'),
(2, 'Herbal Fresh', 'FaceCare', 'cleanser', 1300.00, 'Revitalize your skin with the power of nature using Herbal Fresh Cleanser. \nInfused with Neem and Tea Tree Oil, it actively fights acne-causing bacteria. \nDeeply penetrates pores to remove excess oil and dirt build-up. \nLeaves your skin feeling cool, refreshed, and invigorated. \nPerfect for oily and combination skin types seeking a herbal touch.', 'cl2.webp', 15, '2026-02-01 13:49:47', '2026-02-01 13:49:47'),
(3, 'Deep Purify', 'FaceCare', 'cleanser', 1500.00, 'Achieve a deep, professional-grade clean with Deep Purify Cleanser. \nActivated Charcoal draws out toxins and pollutants from deep within the skin. \nSalicylic Acid helps unclog pores and prevent future breakouts. \nRefines skin texture for a smoother, clearer appearance. \nIdeal for urban environments and congestion-prone skin.', 'cl3.png', 15, '2026-02-01 13:49:47', '2026-02-01 13:49:47'),
(4, 'Aqua Balance', 'FaceCare', 'cleanser', 1400.00, 'Restore hydration while you cleanse with Aqua Balance. \nFormulated with Hyaluronic Acid to lock in moisture instantly. \nGently removes makeup and daily grime without tightness. \nSupports the skin\'s lipid barrier for long-lasting comfort. \nThe perfect choice for dry and dehydrated skin needing a hydration boost.', 'cl4.webp', 15, '2026-02-01 13:49:47', '2026-02-01 13:49:47'),
(5, 'Soothing Aloe', 'FaceCare', 'cleanser', 1600.00, 'Calm and comfort your skin with our Soothing Aloe Cleanser. \nPure Aloe Vera extract reduces redness and inflammation on contact. \ngentle foaming action lifts away debris softly and effectively. \nFree from harsh sulfates and artificial fragrances. \nA gentle embrace for stressed, sun-exposed, or reactive skin.', 'cl5.jpg', 15, '2026-02-01 13:49:47', '2026-02-01 13:49:47'),
(6, 'Bee Factor', 'FaceCare', 'cleanser', 1200.00, ' harness the healing power of Propolis and Honey with Bee Factor. \nNaturally antibacterial, it promotes skin healing and rejuvenation. \nRich in antioxidants to fight early signs of aging. \nLeaves skin feeling nourished, supple, and incredibly soft. \nSuitable for all skin types looking for a natural, nutrient-rich cleanse.', 'cl6.jpg', 15, '2026-02-01 13:49:47', '2026-02-01 13:49:47'),
(7, 'Carrot Face Wash', 'FaceCare', 'facewash', 950.00, 'Reveal brighter skin with nutrient-rich Carrot Face Wash. \nPacked with Beta-Carotene and Vitamin A to promote cell turnover. \nHelps fade dark spots and evens out skin tone over time. \nGentle enough for daily use, leaving a healthy, sun-kissed glow. \nAn affordable yet effective solution for dull and tired-looking skin.', 'fce1.jpeg', 15, '2026-02-01 13:49:47', '2026-02-01 13:49:47'),
(8, 'Papaya Face Wash', 'FaceCare', 'facewash', 1000.00, 'Exfoliate naturally with the enzymatic power of Papaya Face Wash. \nPapain enzymes gently dissolve dead skin cells for a brighter surface. \nVitamin C helps reduce pigmentation and boosts collagen production. \nLeaves skin feeling fresh, smooth, and visibly lighter. \nPerfect for achieving an even complexion and refined texture.', 'fce2.webp', 15, '2026-02-01 13:49:47', '2026-02-01 13:49:47'),
(9, 'O’Nelle Face Wash', 'FaceCare', 'facewash', 1200.00, 'Experience the luxury of O’Nelle Face Wash for ageless beauty. \nEnriched with botanical extracts that firm and tighten the skin. \nReduces the appearance of fine lines while cleaning deeply. \nProvides a spa-like experience with its calming aroma. \nIdeal for mature skin needing extra care and rejuvenation.', 'fce3.jpg', 15, '2026-02-01 13:49:47', '2026-02-01 13:49:47'),
(10, 'Coconut Face Wash', 'FaceCare', 'facewash', 1100.00, 'Hydrate and soften with the tropical goodness of Coconut Face Wash. \nCoconut water extracts provide deep hydration and electrolytes. \nRemoves impurities while keeping the skin\'s moisture barrier intact. \nRich in antioxidants to protect against environmental stressors. \nLeaves skin feeling dewy, plump, and smelling like a tropical paradise.', 'fce4.webp', 15, '2026-02-01 13:49:47', '2026-02-01 13:49:47'),
(11, 'Strawberry Face Wash', 'FaceCare', 'facewash', 1050.00, 'Sweeten your skincare routine with Strawberry Face Wash. \nNatural fruit acids (AHAs) gently exfoliate and control oil production. \nRich in Vitamin C to brighten and energize the complexion. \nFights off free radicals for younger, fresher-looking skin. \nGreat for oily skin types prone to blackheads and shine.', 'fce5.png', 15, '2026-02-01 13:49:47', '2026-02-01 13:49:47'),
(12, 'Spa Ceylon Face Wash', 'FaceCare', 'facewash', 1500.00, 'Indulge in holistic Ayurveda with Spa Ceylon Face Wash. \nBlended with exotic herbs and essential oils for balance. \nPurifies the skin while calming the mind and senses. \nDetoxifies pores and improves overall skin vitality. \nA premium choice for those seeking luxury and wellness in one bottle.', 'fce6.jpg', 15, '2026-02-01 13:49:47', '2026-02-01 13:49:47'),
(13, 'Vanicream', 'FaceCare', 'Moisturizer', 1400.00, 'Dermatologist-recommended Vanicream for sensitive skin care. \nFree from dyes, fragrance, lanolin, and parabens. \nProvides intense, long-lasting hydration without clogging pores. \nSoothes red, irritated, or eczema-prone skin effectively. \nThe safest choice for hyper-sensitive and reactive skin types.', 'mos1.jpg', 15, '2026-02-01 13:49:47', '2026-02-01 13:49:47'),
(14, 'Neutrogena', 'FaceCare', 'Moisturizer', 1600.00, 'Lightweight hydration meets power with Neutrogena Hydro Boost. \nGel-cream formula absorbs instantly for zero greasy residue. \nPacked with Hyaluronic Acid to keep skin hydrated for 48 hours. \nOil-free and non-comedogenic, perfect for wearing under makeup. \nIdeal for oily to normal skin seeking a refreshing moisture kick.', 'mos2.webp', 15, '2026-02-01 13:49:47', '2026-02-01 13:49:47'),
(15, 'Biotherm', 'FaceCare', 'Moisturizer', 1500.00, 'Regenerate your skin with the aquatic power of Biotherm. \nInfused with Life Plankton™ to heal and renew skin cells. \nRestores radiance and improves skin elasticity visibly. \nProtects against urban pollution and daily aggressors. \nA premium moisturizer for maintaining youthful, resilient skin.', 'mos3.webp', 15, '2026-02-01 13:49:47', '2026-02-01 13:49:47'),
(16, 'Face Reality', 'FaceCare', 'Moisturizer', 1700.00, 'Clarify and hydrate with Face Reality ClearaSkin Moisturizer. \nSpecially formulated for acne-prone skin to reduce breakouts. \nContains soothing botanicals to calm inflammation and redness. \nLightweight texture that won\'t clog pores or cause shine. \nThe ultimate balance of hydration and acne control.', 'mos4.png', 15, '2026-02-01 13:49:47', '2026-02-01 13:49:47'),
(17, 'Vitamin Boost', 'FaceCare', 'Moisturizer', 1800.00, 'Energize dull skin with our Vitamin Boost Moisturizer. \nLoaded with Vitamins C, E, and B5 for total skin health. \nBrightens complexion and fades signs of fatigue instantly. \nStrengthens the skin barrier against external damage. \nYour daily dose of nutrients for a vibrant, healthy look.', 'mos5.jpg', 15, '2026-02-01 13:49:47', '2026-02-01 13:49:47'),
(18, 'Nivea Soft', 'FaceCare', 'Moisturizer', 1300.00, 'Experience the classic softness of Nivea Soft Moisturizer. \nEnriched with Jojoba Oil and Eucerit for deep nourishment. \nFast-absorbing cream that leaves skin feeling smooth and supple. \nVersatile enough for face, hands, and body usage. \nA trusted family favorite for reliable, everyday hydration.', 'mos6.webp', 15, '2026-02-01 13:49:47', '2026-02-01 13:49:47'),
(19, 'Carrot Serum', 'FaceCare', 'serum', 2200.00, 'Concentrated brightness with our intensive Carrot Serum. \nHighly potent Beta-Carotene oil penetrates deep into the dermis. \nAccelerates regeneration for scars and sun-damaged skin. \nImproves skin elasticity and reduces fine lines significantly. \nA powerful treatment for aging and pigmented skin.', 'se1.jpeg', 15, '2026-02-01 13:49:47', '2026-02-01 13:49:47'),
(20, 'Papaya Serum', 'FaceCare', 'serum', 2500.00, 'Unveil glass-like skin with our Papaya Brightening Serum. \nContains concentrated Papain enzyme for continuous exfoliation. \nTargets dark spots, melasma, and uneven skin tone actively. \nLightweight formula that layers perfectly with other products. \nAchieve a luminous, translucent glow with regular use.', 'se2.jpeg', 15, '2026-02-01 13:49:47', '2026-02-01 13:49:47'),
(21, 'O\'Nelle Serum', 'FaceCare', 'serum', 2800.00, 'The gold standard of anti-aging: O\'Nelle Ageless Serum. \nFormulated with peptides and collagen boosters to firm skin. \nVisibly fills wrinkles and lifts sagging contours. \nRestores youthful bounce and density to thin, aging skin. \nLuxury care for those who demand the best for their skin.', 'se3.jpeg', 15, '2026-02-01 13:49:47', '2026-02-01 13:49:47'),
(22, 'Coconut Serum', 'FaceCare', 'serum', 2600.00, 'Deep nourishment in a bottle: Coconut Hydration Serum. \nRich in fatty acids to repair a damaged moisture barrier. \nSoothes dryness and flakiness instantly upon application. \nProvides a protective shield against harsh weather conditions. \nA savior for dry, cracked, or winter-worn skin.', 'se4.jpeg', 15, '2026-02-01 13:49:47', '2026-02-01 13:49:47'),
(23, 'Strawberry Serum', 'FaceCare', 'serum', 2300.00, 'Pore-refining perfection with Strawberry Clarifying Serum. \nSalicylic Acid from strawberries unclogs and shrinks pores. \nControls excess sebum production throughout the day. \nKeeps skin matte, smooth, and blemish-free. \nEssential for achieving a refined, airbrushed skin texture.', 'se5.jpeg', 15, '2026-02-01 13:49:47', '2026-02-01 13:49:47'),
(24, 'Spa Ceylon Serum', 'FaceCare', 'serum', 3000.00, 'Royal Ayurvedic care with Spa Ceylon Precious Serum. \nInfused with saffron, sandalwood, and turmeric extracts. \nPromotes golden radiance and heals skin imperfections. \nBalances the three Doshas for holistic skin health. \nA luxurious ritual for glowing, regal-looking skin.', 'se6.jpeg', 15, '2026-02-01 13:49:47', '2026-02-01 13:49:47'),
(25, 'SunShield SPF 50', 'BodyCare', 'bodysunscreen', 2000.00, 'Full body armor: SunShield SPF 50 Body Lotion. \nHigh-performance protection for long days outdoors. \nSweat-proof formula stays on during activity. \nPrevents sunburn on shoulders, back, and legs. \nEssential gear for beach trips and hiking.', 'sunb1.jpeg', 15, '2026-02-01 13:49:47', '2026-02-01 13:49:48'),
(26, 'Golden Glow SPF 30', 'BodyCare', 'bodysunscreen', 1800.00, 'Glow while you protect with Golden Glow SPF 30 Body. \nShimmering particles enhance your natural tan. \nProvides moderate protection for tanned or darker skin. \nHydrating formula keeps skin from peeling. \nLook like a bronzed goddess while staying safe.', 'sunb2.jpeg', 15, '2026-02-01 13:49:47', '2026-02-01 13:49:48'),
(27, 'AquaGuard SPF 45', 'BodyCare', 'bodysunscreen', 2200.00, 'Sport-ready protection: AquaGuard SPF 45 Body Spray. \nQuick-dry spray application for hard-to-reach areas. \nCooling mist refreshes hot skin immediately. \nSand-resistant and non-sticky finish. \nPerfect for active lifestyles and water sports.', 'sunb3.jpeg', 15, '2026-02-01 13:49:47', '2026-02-01 13:49:48'),
(28, 'Herbal Defense SPF 40', 'BodyCare', 'bodysunscreen', 2100.00, 'Nature\'s shield for your body: Herbal Defense SPF 40. \nBiodegradable formula safe for coral reefs and oceans. \nInfused with antioxidants to repair sun damage. \nThick, creamy barrier against harsh midday sun. \nEco-friendly protection for the conscious traveler.', 'sunb7.webp', 15, '2026-02-01 13:49:47', '2026-02-01 13:49:48'),
(29, 'Tropical Sun SPF 35', 'BodyCare', 'bodysunscreen', 1900.00, 'Scent of summer: Tropical Sun SPF 35 Body Lotion. \nRich Coconut and Shea Butter moisturize deeply. \nProtects skin from drying out in salt water. \nEnhances tan longevity and vibrancy. \nA pleasure to apply, a necessity to wear.', 'sunb5.jpg', 15, '2026-02-01 13:49:47', '2026-02-01 13:49:48'),
(30, 'Daily Protect SPF 25', 'BodyCare', 'bodysunscreen', 1600.00, 'Everyday body care: Daily Protect SPF 25 Lotion. \nLight enough for daily wear under clothes. \nPrevents \'driver\'s arm\' tan and sun spots. \nKeeps body skin youthful and elastic. \nMake sun protection a daily habit, head to toe.', 'sunb6.webp', 15, '2026-02-01 13:49:48', '2026-02-01 13:49:48'),
(31, 'Binara', 'BodyCare', 'bodylotion', 1200.00, 'Wrap your body in floral elegance with Binara Body Lotion. \nScented with the rare Binara flower for a unique aroma. \nDeeply hydrates dry patches, elbows, and knees. \nLeaves skin feeling velvety soft and delicately perfumed. \nA romantic, luxurious treat for your daily post-shower routine.', 'Binara.jpg', 15, '2026-02-01 13:49:48', '2026-02-01 13:49:48'),
(32, 'Kasthurikaha', 'BodyCare', 'bodylotion', 1500.00, 'Brighten your body with Kasthurikaha (Wild Turmeric) Lotion. \nTraditional Ayurvedic formula for glowing, golden skin. \nHelps reduce tan lines and dark spots on the body. \nAntibacterial properties keep skin healthy and clear. \nEmbrace the golden glow of ancient beauty rituals.', 'kasthurikaha.webp', 15, '2026-02-01 13:49:48', '2026-02-01 13:49:48'),
(33, 'Fern', 'BodyCare', 'bodylotion', 1300.00, 'Refresh your senses with the crisp scent of Fern Body Lotion. \nLightweight, fast-absorbing formula for on-the-go hydration. \nCools the skin and revitalizes tired muscles. \nPerfect for summer days or after a workout session. \nLeaves a clean, green, and invigorating trail.', 'fern3.jpg', 15, '2026-02-01 13:49:48', '2026-02-01 13:49:48'),
(34, 'Red Sandalwood', 'BodyCare', 'bodylotion', 1700.00, 'Luxurious calm with Red Sandalwood Body Lotion. \nSandalwood oil soothes inflammation and prickly heat. \nDeeply moisturizes while calming the mind with its scent. \nReduces body acne and improves skin texture. \nA soothing balm for irritated or sensitive body skin.', 'red3.webp', 15, '2026-02-01 13:49:48', '2026-02-01 13:49:48'),
(35, 'Dlas', 'BodyCare', 'bodylotion', 1400.00, 'Experience the purity of nature with Dlas Herbal Lotion. \nBlend of five essential herbs for total skin nourishment. \nRepairs dry, cracked skin and protects against roughness. \nNon-greasy formula suitable for the entire family. \nReliable, herbal care for soft and healthy skin.', 'dlas3.webp', 15, '2026-02-01 13:49:48', '2026-02-01 13:49:48'),
(36, 'Lotus', 'BodyCare', 'bodylotion', 1600.00, 'Hydrate divinely with the essence of Blue Lotus. \nRich in natural antioxidants and relaxing floral notes. \nPromotes tranquility and stress relief upon application. \nLeaves skin radiant, smooth, and heavenly scented. \nTurn your moisturizing routine into a mindful ritual.', 'OLU.jpg', 15, '2026-02-01 13:49:48', '2026-02-01 13:49:48'),
(37, 'Refreshing Mint Gel', 'BodyCare', 'showergel', 1200.00, 'Wake up your body with Refreshing Mint Shower Gel. \nCooling menthol sensation jumpstarts your morning. \nCleanses sweat and dirt effectively without drying. \nLeaves you feeling energized and icy fresh. \nThe perfect summer or post-gym shower companion.', 'shower1.webp', 15, '2026-02-01 13:49:48', '2026-02-01 13:49:48'),
(38, 'Citrus Blast Gel', 'BodyCare', 'showergel', 1300.00, 'Zest up your life with Citrus Blast Shower Gel. \nInfused with Orange, Lemon, and Lime extracts. \nVitamin C brightens body skin and invigorates senses. \nCuts through grease and oil for a squeaky clean feel. \nA burst of sunshine in your daily shower.', 'shower2.jpg', 15, '2026-02-01 13:49:48', '2026-02-01 13:49:48'),
(39, 'Aloe Vera Gel', 'BodyCare', 'showergel', 1400.00, 'Sooth and cleanse with gentle Aloe Vera Shower Gel. \nSoap-free formula respects the skin\'s natural pH. \nHydrates while cleansing, leaving skin soft, not tight. \nCalms sun-exposed or sensitive skin instantly. \nA gentle touch for delicate skin needs.', 'shower3.webp', 15, '2026-02-01 13:49:48', '2026-02-01 13:49:48'),
(40, 'Ocean Breeze Gel', 'BodyCare', 'showergel', 1500.00, 'Dive into freshness with Ocean Breeze Shower Gel. \nMarine minerals detoxify and remineralize the skin. \nCrisp, aquatic scent lingers for hours after washing. \nRevitalizes dull skin and washes away fatigue. \nBring the refreshing power of the sea home.', 'shower4.png', 15, '2026-02-01 13:49:48', '2026-02-01 13:49:48'),
(41, 'Lavender Calm Gel', 'BodyCare', 'showergel', 1600.00, 'Unwind deeply with Lavender Calm Shower Gel. \nNatural Lavender oil promotes relaxation and sleep. \nGently cleanses away the stress of the day. \nLeaves skin soft, moisturized, and peaceful. \nThe ideal choice for a relaxing night-time shower.', 'shower5.webp', 15, '2026-02-01 13:49:48', '2026-02-01 13:49:48'),
(42, 'Tropical Paradise Gel', 'BodyCare', 'showergel', 1700.00, 'Escape to an island with Tropical Paradise Shower Gel. \nExotic blend of Mango, Pineapple, and Papaya scents. \nEnzymes gently exfoliate for smoother skin. \nCreates a rich, fruity lather that feels luxurious. \nA mini-vacation for your senses every day.', 'shower6.jpg', 15, '2026-02-01 13:49:48', '2026-02-01 13:49:48'),
(43, 'Sugar Glow', 'BodyCare', 'bodyscrub', 1400.00, 'Polish your skin to perfection with Sugar Glow Scrub. \nNatural sugar crystals buff away dead skin cells. \nGlycolic acid promotes cell turnover for brightness. \nDissolves easily without leaving a gritty residue. \nReveals soft, glowing, and touchable skin.', 'scrub3.jpeg', 15, '2026-02-01 13:49:48', '2026-02-01 13:49:48'),
(44, 'Coffee Revive', 'BodyCare', 'bodyscrub', 1500.00, 'Banish cellulite and dullness with Coffee Revive Scrub. \nGround Robusta coffee beans stimulate blood flow. \nCaffeine helps tighten and firm the skin\'s appearance. \nRich antioxidants fight premature aging of body skin. \nAn energizing scrub for smooth, firm legs and body.', 'scrub4.jpeg', 15, '2026-02-01 13:49:48', '2026-02-01 13:49:48'),
(45, 'Coconut Smooth', 'BodyCare', 'bodyscrub', 1600.00, 'Creamy exfoliation with Coconut Smooth Body Scrub. \nShredded coconut and oil hydrate while scrubbing. \nGentle enough for sensitive or dry skin types. \nLeaves a protective moisture layer after rinsing. \nGet totally smooth, coconut-scented skin instantly.', 'scrub5.jpeg', 15, '2026-02-01 13:49:48', '2026-02-01 13:49:48'),
(46, 'Sea Salt Scrub', 'BodyCare', 'bodyscrub', 1700.00, 'Detoxify vigorously with mineral-rich Sea Salt Scrub. \nCoarse sea salt granules provide deep exfoliation. \nDraws out impurities and toxins from the pores. \nStimulates circulation for a healthy, rosy glow. \nBest for rough patches like heels, elbows, and knees.', 'scrub6.jpeg', 15, '2026-02-01 13:49:48', '2026-02-01 13:49:48'),
(47, 'Lavender Calm', 'BodyCare', 'bodyscrub', 1800.00, 'Relax and refine with Lavender Calm Body Scrub. \nFine exfoliating particles infused with Lavender oil. \nPolishes skin gently while soothing the mind. \nPrepares skin for better absorption of lotions. \nA spa-like treatment for a peaceful evening.', 'scrub7.jpeg', 15, '2026-02-01 13:49:48', '2026-02-01 13:49:48'),
(48, 'Rose Bliss', 'BodyCare', 'bodyscrub', 1900.00, 'Romance your skin with Rose Bliss Body Scrub. \nCrushed rose petals and oils soften and scent the skin. \nGentle exfoliation suitable for delicate areas. \nLeaves skin feeling silky, fragrant, and pampered. \nThe ultimate self-care indulgence.', 'scrub8.jpeg', 15, '2026-02-01 13:49:48', '2026-02-01 13:49:48'),
(49, 'Fresh Breeze', 'BodyCare', 'deodorant', 900.00, 'Stay confident all day with Fresh Breeze Deodorant. \n24-hour odor protection with a crisp, airy scent. \nAluminum-free formula lets skin breathe naturally. \nNon-staining, clear application for all fabric types. \nReliable freshness for your busiest days.', 'deo1.jpeg', 15, '2026-02-01 13:49:48', '2026-02-01 13:49:48'),
(50, 'Cool Mist', 'BodyCare', 'deodorant', 1000.00, 'Feel the chill with Cool Mist Anti-Perspirant. \nAdvanced sweat-control technology keeps you dry. \nCooling sensation upon application soothes underarms. \nFresh, aquatic fragrance suitable for everyone. \nMaximum dryness for high-intensity situations.', 'deo2.jpeg', 15, '2026-02-01 13:49:48', '2026-02-01 13:49:48'),
(51, 'Herbal Shield', 'BodyCare', 'deodorant', 1200.00, 'Natural odor defense: Herbal Shield Deodorant. \nUses Sage and Tea Tree to neutralize bacteria. \nFree from parabens, alcohol, and harsh chemicals. \nGentle on sensitive or freshly shaved skin. \nEffective, natural protection you can trust.', 'deo3.jpeg', 15, '2026-02-01 13:49:48', '2026-02-01 13:49:48'),
(52, 'Active Guard', 'BodyCare', 'deodorant', 1300.00, 'Built for performance: Active Guard Sport Deodorant. \nMotion-activated fragrance capsules release scent as you move. \nResists sweat breakdown during heavy workouts. \nStrong, energizing scent to keep you motivated. \nThe athlete\'s choice for odor control.', 'deo4.jpeg', 15, '2026-02-01 13:49:48', '2026-02-01 13:49:48'),
(53, 'Tropical Fresh', 'BodyCare', 'deodorant', 1100.00, 'Island freshness: Tropical Fresh Roll-On. \nScented with exotic fruits and florals. \nConditioning formula softens underarm skin. \nProvides all-day freshness with a sweet touch. \nFeel sweet and confident from morning to night.', 'deo5.jpeg', 15, '2026-02-01 13:49:48', '2026-02-01 13:49:48'),
(54, 'Daily Comfort', 'BodyCare', 'deodorant', 1000.00, 'Gentle and effective: Daily Comfort Stick. \nCreamy formula glides on smooth with no drag. \nBalanced pH prevents irritation and darkening. \nSubtle, clean scent triggers no allergies. \nComfortable protection for everyday wear.', 'deo6.jpeg', 15, '2026-02-01 13:49:48', '2026-02-01 13:49:48'),
(55, 'viyana', 'FaceCare', 'foundation', 12300.00, 'best product', '1769973970.jpg', 10, '2026-02-01 13:56:10', '2026-02-01 13:56:10'),
(56, 'SunShield SPF 50', 'FaceCare', 'suncreen', 1500.00, 'Maximum protection with SunShield SPF 50 Broad Spectrum. \r\nBlocks 98% of harmful UVA and UVB rays effectively. Water-resistant formula ideal for swimming and sports. Non-greasy finish that won\'t leave a white cast.\r\nYour ultimate defense against sunburn and photo-aging.', '1769974963.jpg', 10, '2026-02-01 14:12:43', '2026-02-01 14:18:53'),
(57, 'Golden Glow SPF 30', 'FaceCare', 'suncreen', 1300.00, 'Protect and bronze with Golden Glow SPF 30 Tinted Sunscreen. \r\nProvides sun protection while adding a sheer, healthy tint. Evens out skin tone and blurs imperfections instantly. Enriched with antioxidants to fight environmental damage. \r\nPerfect for a \'no-makeup\' makeup look with added safety.', '1769975194.jpg', 10, '2026-02-01 14:16:34', '2026-02-01 14:16:34'),
(63, 'AquaGuard SPF 45', 'FaceCare', 'suncreen', 1400.00, 'Hydrating sun care with AquaGuard SPF 45 Gel. Water-based formula feels weightless on the skin. \r\nCools and refreshes whilst providing strong UV protection.\r\nWon\'t clog pores or cause breakouts in humidity.\r\nIdeal for oily skin and hot, tropical climates.', '1769975470.jpg', 10, '2026-02-01 14:21:10', '2026-02-01 14:21:10'),
(65, 'Herbal Defense SPF 40', 'FaceCare', 'suncreen', 1350.00, 'Natural sun safety with Herbal Defense SPF 40. \r\nMineral-based blocker using Zinc Oxide and Titanium Dioxide. Infused with Aloe and Cucumber to soothe sun-heated skin. \r\nSafe for sensitive skin and children over 6 months. \r\nChemical-free protection for the whole family.', '1769975684.jpg', 10, '2026-02-01 14:24:44', '2026-02-01 14:24:44'),
(66, 'Tropical Sun SPF 35', 'FaceCare', 'suncreen', 1200.00, 'Enjoy the sun responsibly with Tropical Sun SPF 35. \r\nInfused with Coconut Oil for a tan-enhancing effect. \r\nProtects against burning while allowing a golden glow. Smells like a beach vacation, feels like silk. \r\nGreat for beach days and leisurely outdoor activities.', '1769975810.jpg', 10, '2026-02-01 14:26:50', '2026-02-01 14:26:50'),
(67, 'Daily Protect SPF 25', 'FaceCare', 'suncreen', 1100.00, 'Everyday urban defense with Daily Protect SPF 25. Lightweight lotion designed for indoor and office wear. Protects against blue light from screens and UV rays. Moisturizing formula acts as a great makeup primer. Essential for daily prevention of premature aging.', '1769975906.jpg', 10, '2026-02-01 14:28:26', '2026-02-01 14:28:26');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('CGWT45X2itEVbcVnC3SzLvyoIjus3SwMDJtEnrka', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/144.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiSjZOQjBKYk5BcnBiMDE5c2lYS25CaVh2UDdpSWdMNWFFbWh2cURTRiI7czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6Mjc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9sb2dpbiI7czo1OiJyb3V0ZSI7czo1OiJsb2dpbiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1770018769),
('Ie342WLvKykxIJrjXma32uJeoKbRnvU86pT6MdnH', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/144.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiTmZwaUhrVjFXd3hTcDRYdUNXUTJhZDZUbGFkU3MwWVFCZmxwZndUayI7czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7czo1OiJyb3V0ZSI7Tjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1770017050),
('jVSp5kTnTN3eMNrZ55QJZJDe11ENzcDqMiLzkOko', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/144.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoia2g4S2NleUNGTkh1U3U3YVJFTnZlaU16SmZnYXBNVjNPQUdEMUJWVSI7czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7czo1OiJyb3V0ZSI7Tjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1770017051);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `is_admin` tinyint(1) NOT NULL DEFAULT 0,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `two_factor_secret` text DEFAULT NULL,
  `two_factor_recovery_codes` text DEFAULT NULL,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `is_admin`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(1, 'AuraSkin Admin', 'admin@auraskin.com', 1, NULL, '$2y$12$l4COmOhD1iMyEB8XfSJSgO/Yf0FkrWT.8IsmzMFYaWy9GjnHnqILG', NULL, NULL, NULL, NULL, NULL, NULL, '2026-02-01 13:49:47', '2026-02-01 13:49:47'),
(2, 'joj', 'joj@gmail.com', 0, NULL, '$2y$12$P9/Ui0yZ4fYO/b40USUs/u.dWNhQVhpxeqCAF.MuuStC8fXxDiniC', NULL, NULL, NULL, NULL, NULL, NULL, '2026-02-01 15:13:05', '2026-02-01 15:13:05'),
(3, 'Mobile User', 'mobile@auraskin.com', 0, NULL, '$2y$12$x3fR50JxZlEHaXJgs0nlROH2uPAER5KYIW8rm927kvO6nwicMZaWq', NULL, NULL, NULL, NULL, NULL, NULL, '2026-02-01 22:11:38', '2026-02-01 22:11:38');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_slug_unique` (`slug`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orders_user_id_foreign` (`user_id`);

--
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_items_order_id_foreign` (`order_id`),
  ADD KEY `order_items_product_id_foreign` (`product_id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`),
  ADD KEY `personal_access_tokens_expires_at_index` (`expires_at`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

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
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE SET NULL;

--
-- Constraints for table `order_items`
--
ALTER TABLE `order_items`
  ADD CONSTRAINT `order_items_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `order_items_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
