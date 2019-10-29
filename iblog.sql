-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 25, 2019 at 10:04 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `iblog`
--

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_09_083659_create_posts_table', 1),
(5, '2019_08_14_115850_add_user_id_to_posts', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `body`, `created_at`, `updated_at`, `user_id`) VALUES
(1, 'Post one', 'This is post no. one', '2019-08-09 07:59:39', '2019-08-09 07:59:39', 0),
(2, 'Post two', 'This is second post', '2019-08-09 08:02:03', '2019-08-09 08:02:03', 0),
(3, 'ok', 'it is done', '2019-08-09 19:40:52', '2019-08-09 19:40:52', 0),
(4, 'another post', '<p><em><strong>Hi there</strong></em></p>', '2019-08-09 19:50:55', '2019-08-09 19:50:55', 0),
(5, 'Testík', 'A co háčky a čárky?', '2019-08-10 09:28:14', '2019-08-10 09:28:14', 0),
(6, 'Další', 'A co stránkování?', '2019-08-10 09:28:40', '2019-08-10 09:28:40', 0),
(7, 'Good', 'ok', '2019-08-10 09:28:59', '2019-08-10 09:28:59', 0),
(8, 'Boris Johnson připravuje Brity na brexit bez dohody, je to nejvyšší priorita', 'Britský premiér Boris Johnson dopisem informoval všechny vládní zaměstnance, že jejich nejdůležitějším úkolem je příprava země na brexit bez dohody. Uvedli to dnes reportéři televize Sky News a deníku Financial Times. Vládním poradcům a zaměstnancům premiérovy kanceláře bylo také podle médií oznámeno, že do konce října, tedy do data odchodu z Evropské unie, si nemohou brát dovolenou.\r\n\"Velmi bych preferoval odejít s dohodou, s takovou, která musí zrušit antidemokratickou irskou pojistku, která má pro naši zemi nepřijatelné důsledky. Ale jsem si vědom toho, že k tomu nemusí dojít. Proto bude mou nejvyšší prioritou, abychom se naléhavě a rychle připravovali na možnost vystoupení bez dohody, a bude to také nejvyšší priorita pro státní správu,\" citují novináři sdělení adresované vládním úředníkům.\r\n\r\nPremiér dodává, že vláda musí jasně vysvětlit, jaké kroky mají jednotlivci a firmy učinit, a jak je v tomto podpoří.\r\n\r\nJohnson před nástupem do premiérské funkce i po něm sliboval, že přípravy na brexit bez dohody výrazně vystupňuje. Také ale nedávno řekl, že pravděpodobnost této varianty odchodu z EU je \"milion ku jedné\" a že intenzivní příprava na tento scénář přiměje zbytek unie přistoupit na požadavky Londýna ohledně podoby brexitové dohody.\r\n\r\nPřed týdnem britská vláda oznámila, že zvyšuje o 2,1 miliardy liber (58,5 miliardy Kč) rozpočet na přípravy, čímž se celkový objem vyčleněných prostředků dostal na 6,3 miliardy liber.\r\n\r\nDohledem nad tímto plánováním pověřil Johnson svého de facto náměstka a bývalého ministra životního prostředí Michaela Govea. \"Vláda už učinila hodně, abychom byli připraveni, stále však hodně práce zbývá,\" řekl v pátek Gove novinářům při návštěvě hranice mezi Irskem a Severním Irskem, kde by odchod z EU bez dohody mohl přinést i ohrožení veřejného pořádku.\r\n\r\nPodle Govea vláda učiní vše, co bude potřeba, aby zemi na možnost brexitu neošetřeného dohodou připravila.\r\n\r\nObavy nemizí\r\nV Británii se však ozývají i hlasy, podle kterých ani sebelepší přípravy nemohou rizika spojená s tímto scénářem eliminovat. Například policejní velitel Neil Basu, který má na starosti protiteroristické operace, varoval před hrozící ztrátou přístupu do schengenské informační databáze. Mohlo by to podle něj ohrozit bezpečnost státu.', '2019-08-10 09:30:44', '2019-08-10 09:30:44', 0),
(10, 'Good', 'okok', '2019-08-10 11:06:05', '2019-08-10 11:06:05', 0),
(12, 'Upravený post', 'podruhé upravený', '2019-08-10 11:33:39', '2019-08-10 11:42:50', 0),
(13, 'ASAP', '<p>First line</p><p>and second line</p>', '2019-08-10 17:54:18', '2019-08-10 17:54:49', 0),
(15, 'asd', 'post edited september', '2019-08-14 10:22:14', '2019-09-27 17:08:02', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Jan', 'jan@jan.cz', NULL, '$2y$10$n84oEiKv26AadqeYD3GTqu5K6KHko0QlKlkaHNIojRqx2Vk/Egezi', NULL, '2019-08-14 06:32:23', '2019-08-14 06:32:23');

--
-- Indexes for dumped tables
--

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
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
