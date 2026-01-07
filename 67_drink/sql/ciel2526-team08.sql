-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Erstellungszeit: 11. Dez 2025 um 09:16
-- Server-Version: 11.4.9-MariaDB-deb12
-- PHP-Version: 8.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `ciel2526-team08`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` text DEFAULT NULL,
  `Wine_id` varchar(67) NOT NULL,
  `Beer_id` varchar(67) NOT NULL,
  `Vodka_id` varchar(67) NOT NULL,
  `liquor_id` varchar(67) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

--
-- Daten für Tabelle `categories`
--

INSERT INTO `categories` (`id`, `name`, `description`, `Wine_id`, `Beer_id`, `Vodka_id`, `liquor_id`) VALUES
(1, 'Wine', 'All types of wines – red, white, rosé.', '', '', '', ''),
(2, 'Beer', 'Local and international beer varieties.', '', '', '', ''),
(3, 'Vodka', 'Premium and standard vodka brands.', '', '', '', ''),
(4, 'Liquor', 'Spirits such as rum, gin, whisky.', '', '', '', '');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone` varchar(30) DEFAULT NULL,
  `date_of_birth` date DEFAULT NULL,
  `street` varchar(150) DEFAULT NULL,
  `zip_code` varchar(20) DEFAULT NULL,
  `city` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

--
-- Daten für Tabelle `customers`
--

INSERT INTO `customers` (`id`, `first_name`, `last_name`, `email`, `password`, `phone`, `date_of_birth`, `street`, `zip_code`, `city`, `created_at`) VALUES
(1, 'Alex', 'Müller', 'alex.mueller@example.com', 'hash123', '0176123456', '1995-04-12', 'Hauptstr. 5', '80331', 'München', '2025-12-08 09:30:43'),
(2, 'Sarah', 'Klein', 'sarah.klein@example.com', 'hash456', '0179988776', '1988-10-03', 'Marktweg 12', '50667', 'Köln', '2025-12-08 09:30:43');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `delivery_items`
--

CREATE TABLE `delivery_items` (
  `id` int(11) NOT NULL,
  `delivery_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

--
-- Daten für Tabelle `delivery_items`
--

INSERT INTO `delivery_items` (`id`, `delivery_id`, `product_id`, `quantity`) VALUES
(1, 1, 1, 2),
(2, 2, 4, 5);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `employees`
--

CREATE TABLE `employees` (
  `id` int(11) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('Admin','Driver','Warehouse','Sales') DEFAULT 'Sales',
  `phone` varchar(30) DEFAULT NULL,
  `hired_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

--
-- Daten für Tabelle `employees`
--

INSERT INTO `employees` (`id`, `first_name`, `last_name`, `email`, `password`, `role`, `phone`, `hired_at`) VALUES
(1, 'Tom', 'Schneider', 'tom.schneider@example.com', 'emp123', 'Driver', '0176443322', '2023-01-15'),
(2, 'Lisa', 'Berger', 'lisa.berger@example.com', 'emp456', 'Admin', '0176332211', '2022-08-01'),
(7, 'Markus', 'Vogel', 'markus.vogel@example.com', 'pw123', 'Driver', '01761122334', '2023-02-15'),
(8, 'Nina', 'Hartmann', 'nina.hartmann@example.com', 'pw123', 'Warehouse', '01763331122', '2023-03-10'),
(9, 'Jonas', 'Weber', 'jonas.weber@example.com', 'pw123', 'Sales', '01769988776', '2024-01-20'),
(10, 'Daniel', 'Schäfer', 'daniel.schaefer@example.com', 'pw123', 'Driver', '01763335511', '2022-11-18'),
(11, 'Mara', 'Hoffmann', 'mara.hoffmann@example.com', 'pw123', 'Admin', '01765544221', '2021-06-05'),
(12, 'Leon', 'Krüger', 'leon.krueger@example.com', 'pw123', 'Warehouse', '01769992255', '2024-07-01'),
(13, 'Julia', 'Becker', 'julia.becker@example.com', 'pw123', 'Sales', '01762117889', '2023-09-01'),
(14, 'Peter', 'Fuchs', 'peter.fuchs@example.com', 'pw123', 'Driver', '01763445577', '2024-09-21'),
(15, 'Sabine', 'Brandt', 'sabine.brandt@example.com', 'pw123', 'Warehouse', '01766778899', '2022-12-12'),
(16, 'Kai', 'Werner', 'kai.werner@example.com', 'pw123', 'Sales', '01768889922', '2025-01-05');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `order_date` timestamp NULL DEFAULT current_timestamp(),
  `total_price` decimal(10,2) NOT NULL,
  `status` enum('pending','paid','shipped','delivered','cancelled') DEFAULT 'pending',
  `delivery_address` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

--
-- Daten für Tabelle `orders`
--

INSERT INTO `orders` (`id`, `customer_id`, `order_date`, `total_price`, `status`, `delivery_address`) VALUES
(1, 1, '2025-12-08 09:33:37', 29.98, 'paid', 'Hauptstr. 5, 80331 München'),
(2, 2, '2025-12-08 09:33:37', 24.50, 'pending', 'Marktweg 12, 50667 Köln');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `order_items`
--

CREATE TABLE `order_items` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `unit_price` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

--
-- Daten für Tabelle `order_items`
--

INSERT INTO `order_items` (`id`, `order_id`, `product_id`, `quantity`, `unit_price`) VALUES
(1, 1, 1, 2, 14.99),
(2, 2, 4, 1, 24.50);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `name` varchar(150) NOT NULL,
  `description` text DEFAULT NULL,
  `price` decimal(10,2) NOT NULL,
  `stock` int(11) DEFAULT 0,
  `alcohol_content` decimal(5,2) DEFAULT NULL,
  `origin` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

--
-- Daten für Tabelle `products`
--

INSERT INTO `products` (`id`, `category_id`, `name`, `description`, `price`, `stock`, `alcohol_content`, `origin`) VALUES
(1, 1, 'Merlot Reserve 2018', 'Dry red wine from France.', 14.99, 120, 13.50, 'France'),
(2, 2, 'Craft IPA', 'Bitter craft beer.', 2.99, 300, 5.80, 'Germany'),
(3, 3, 'Vodka Crystal', 'Triple distilled premium vodka.', 19.99, 90, 40.00, 'Poland'),
(4, 4, 'London Dry Gin', 'Classic botanical gin.', 24.50, 60, 38.00, 'UK');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `stores`
--

CREATE TABLE `stores` (
  `id` int(11) NOT NULL,
  `store_name` varchar(150) NOT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `unified_deliveries`
--

CREATE TABLE `unified_deliveries` (
  `id` int(11) NOT NULL,
  `driver_id` int(11) NOT NULL,
  `delivery_date` date NOT NULL,
  `status` enum('scheduled','in_transit','delivered','failed') NOT NULL,
  `destination_type` enum('customer','store') NOT NULL,
  `destination_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

--
-- Daten für Tabelle `unified_deliveries`
--

INSERT INTO `unified_deliveries` (`id`, `driver_id`, `delivery_date`, `status`, `destination_type`, `destination_id`, `created_at`) VALUES
(1, 1, '2025-12-10', 'scheduled', 'customer', 1, '2025-12-08 09:34:49'),
(2, 1, '2025-12-11', 'in_transit', 'store', 2, '2025-12-08 09:34:49');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indizes für die Tabelle `delivery_items`
--
ALTER TABLE `delivery_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `delivery_id` (`delivery_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indizes für die Tabelle `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indizes für die Tabelle `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `customer_id` (`customer_id`);

--
-- Indizes für die Tabelle `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_id` (`order_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indizes für die Tabelle `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indizes für die Tabelle `stores`
--
ALTER TABLE `stores`
  ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `unified_deliveries`
--
ALTER TABLE `unified_deliveries`
  ADD PRIMARY KEY (`id`),
  ADD KEY `driver_id` (`driver_id`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT für Tabelle `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT für Tabelle `delivery_items`
--
ALTER TABLE `delivery_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT für Tabelle `employees`
--
ALTER TABLE `employees`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT für Tabelle `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT für Tabelle `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT für Tabelle `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT für Tabelle `stores`
--
ALTER TABLE `stores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT für Tabelle `unified_deliveries`
--
ALTER TABLE `unified_deliveries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints der exportierten Tabellen
--

--
-- Constraints der Tabelle `delivery_items`
--
ALTER TABLE `delivery_items`
  ADD CONSTRAINT `delivery_items_ibfk_1` FOREIGN KEY (`delivery_id`) REFERENCES `unified_deliveries` (`id`),
  ADD CONSTRAINT `delivery_items_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);

--
-- Constraints der Tabelle `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`id`);

--
-- Constraints der Tabelle `order_items`
--
ALTER TABLE `order_items`
  ADD CONSTRAINT `order_items_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`),
  ADD CONSTRAINT `order_items_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);

--
-- Constraints der Tabelle `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);

--
-- Constraints der Tabelle `unified_deliveries`
--
ALTER TABLE `unified_deliveries`
  ADD CONSTRAINT `unified_deliveries_ibfk_1` FOREIGN KEY (`driver_id`) REFERENCES `employees` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
