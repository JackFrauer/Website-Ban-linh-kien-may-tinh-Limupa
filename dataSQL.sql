-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` varchar(255) NOT NULL,
  `products` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
-- Table structure for table `manufacturer`
--

CREATE TABLE `manufacturer` (
  `id` int(11) NOT NULL,
  `manufacturer_code` varchar(100) NOT NULL,
  `manufacturer_name` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `manufacturer`
--

INSERT INTO `manufacturer` (`id`, `manufacturer_code`, `manufacturer_name`) VALUES
(1, 'RZ', 'Razer'),
(2, 'LE', 'Lenovo'),
(3, 'NVI', 'Nvidia'),
(4, 'AMD', 'AMD'),
(5, 'HP', 'HP'),
(6, 'ACC', 'Acer'),
(7, 'INTL', 'Intel'),
(8, 'MSI', 'MSI'),
(9, 'PNY', 'PNY'),
(10, 'ASUS', 'ASUS'),
(11, 'APPLE', 'Apple'),
(12, 'LOGITECH', 'Logitech'),
(13, 'AKKO', 'AKKO'),
(14, 'STEELSERIES', 'Steelseries'),
(15, 'a2', 'gkk2');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_05_28_212400_listing_table', 1),
(6, '2023_05_29_075331_create_products_table', 1),
(7, '2023_06_01_201541_add_timestamps_to_products_table', 2),
(8, '2014_10_12_100000_create_password_resets_table', 3),
(9, '2023_06_06_112004_cart', 4),
(10, '2023_06_07_150304_carts', 5),
(11, '2023_06_08_073151_create_orders_table', 6),
(12, '2023_06_08_075628_create_order_products_table', 7),
(13, '2023_06_08_081248_create_orders_table', 8),
(14, '2023_06_08_103915_create_order_codes_table', 9);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `quantity` int(11) NOT NULL,
  `total_price` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `order_id`, `user_id`, `product_name`, `quantity`, `total_price`, `created_at`, `updated_at`) VALUES
(21, 'ORD-6481B58CB4C40', 2, 'Asus ROG STRIX-RTX 4090 WHITE', 1, 65990000, '2023-06-08 04:03:40', '2023-06-08 04:03:40'),
(22, 'ORD-6481B58CB4C40', 2, 'INTEL Core i5-12400 (6C/12T, 2.50 GHz - 4.40 GHz)', 1, 4890000, '2023-06-08 04:03:40', '2023-06-08 04:03:40'),
(23, 'ORD-6481B58CB4C40', 2, 'Logitech Pro X Superlight Whitetttt', 1, 2999000, '2023-06-08 04:03:40', '2023-06-09 12:23:15'),
(24, 'ORD-6483FBF89E046', 2, 'INTEL Core i5-12400 (6C/12T, 2.50 GHz - 4.40 GHz)', 2, 9780000, '2023-06-09 21:28:40', '2023-06-09 21:28:40');

-- --------------------------------------------------------

--
-- Table structure for table `order_codes`
--

CREATE TABLE `order_codes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` varchar(255) NOT NULL,
  `total_price` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_codes`
--

INSERT INTO `order_codes` (`id`, `order_id`, `total_price`, `created_at`, `updated_at`) VALUES
(1, 'ORD-6481B58CB4C40', '73879000', '2023-06-08 04:03:40', '2023-06-08 04:03:40'),
(2, 'ORD-6483FBF89E046', '9780000', '2023-06-09 21:28:40', '2023-06-09 21:28:40');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
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
  `id` int(11) NOT NULL,
  `product_id` varchar(100) NOT NULL,
  `product_name` varchar(250) NOT NULL,
  `product_details` varchar(9999) NOT NULL,
  `product_type` text NOT NULL,
  `mansx` varchar(100) NOT NULL,
  `product_year` year(4) NOT NULL,
  `price` decimal(12,4) NOT NULL,
  `quantity` int(11) NOT NULL,
  `images` varchar(255) DEFAULT '/path/to/default/image.jpg',
  `image` varchar(255) DEFAULT '/path/to/default/image.jpg',
  `product_description` varchar(999) NOT NULL,
  `more_details` varchar(999) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_id`, `product_name`, `product_details`, `product_type`, `mansx`, `product_year`, `price`, `quantity`, `images`, `image`, `product_description`, `more_details`, `created_at`, `updated_at`) VALUES
(3, 'INTL-02', 'INTEL Core i5-12400 (6C/12T, 2.50 GHz - 4.40 GHz)', 'CPU Intel Core i5 12400 thế hệ thứ 12 mạnh mẽ và tương thích tốt với socket LGA 1700.', 'CPU', 'INTL', '2022', 4890000.0000, 15, 'images/i5_12400-1.jpg,images/i5_12400-2.jpg,images/i5_12400-3.jpg,images/i5_12400-4.jpg,images/i5_12400-5.jpg', 'images/i5_12400-1.jpg', '', '', NULL, NULL),
(4, 'AMD-02', 'AMD Ryzen 5 7600X (6C/12T,4,7 GHZ - 5.3 GHZ)', 'AMD Ryzen 5 7600X / 4.7GHz Boost 5.3GHz / 6 nhân 12 luồng / 38MB / AM5', 'CPU', 'AMD', '2023', 6790000.0000, 10, 'images/r5_7600x-1.jpg,images/r5_7600x-2.jpg,images/r5_7600x-3.jpg,images/r5_7600x-4.jpg', 'images/r5_7600x-1.jpg', 'CPU <b>AMD Ryzen 5 7600X (6 nhân 12 luồng, up to 5.3Ghz) </b>là sản phẩm thuộc phân khúc giá rẻ của dòng CPU Ryzen 7000 Series, sở hữu 6 nhân 12 luồng với mức xung nhịp cơ bản là 4.7GHz và xung nhịp tối đa lõi đơn lên đến 5.3GHz.<br>\r\nCPU <b>AMD Ryzen 5 7600X</b> sẽ được chạy ở mức TDP khoảng <b>105W</b>, cao hơn 65W so với Ryzen 5 5600X tiền nhiệm và có tổng cộng 38MB bộ nhớ đệm, trong đó bao gồm <b>32MB L3 và 6MB L2</b>. Với các thông số tuyệt vời như này, Ryzen 5 7600X sẽ mang đến cho người dùng mức hiệu suất cực khủng, cao hơn tới 11% so với Ryzen 9 5950X Zen 3 hiện tại.', '<h3><b>Cấu trúc Zen 4</b></h3><br>\r\nCPU <b>AMD Ryzen 5 7600X</b> dựa trên kiến ​​trúc mới của AMD, <b>Zen 4</b>. Giống như <b>Zen 3</b> trước đó, AMD tiếp tục sử dụng <b>thiết kế dựa trên chiplet trong kiến ​​trúc mới này</b>, mang lại cho nó một giao diện cao cấp tương tự như tất cả các thiết bị trước đó Kiến trúc bộ xử lý Zen. Tuy nhiên, một số thay đổi trong kiến ​​trúc cốt lõi và việc chuyển sang quy trình sản xuất <b>5nm</b> mới đã cho phép AMD tăng hiệu suất đáng kể. Nhìn chung, xu hướng của Zen 4 là giống như Zen 3, nhưng lớn hơn và mạnh mẽ hơn. <b>Zen 4 có giao diện người dùng mạnh mẽ hơn so với kiến ​​trúc Zen 3</b> trước đó bao gồm phần cứng dự đoán nhánh mạnh hơn có thể đưa ra hai dự đoán nhánh cho mỗi chu kỳ.<br>\r\n', NULL, NULL),
(5, 'ASUS-L01', 'Asus Gaming ROG Strix(R7 4800H/16GB RAM)', 'Laptop Asus Gaming ROG Strix G513IM-HN008W (R7 4800H/16GB RAM/512GB SSD/15.6 FHD 144hz/RTX 3060 6GB/Win11/Xám)', 'LAPTOP', 'ASUS', '2022', 27499000.0000, 20, 'images/asus_laptop_01-1.jpg,images/asus_laptop_01-2.jpg,images/asus_laptop_01-3.jpg,images/asus_laptop_01-4.jpg,images/asus_laptop_01-5.jpg', 'images/asus_laptop_01-1.jpg', '', '', NULL, NULL),
(6, 'ASUS-L02', 'Asus Gaming Zephyrus Duo(R9 6900HX/16GB RAM)', 'Laptop Asus Gaming Zephyrus Duo GX650RX-LO156W (R9 6900HX/16GB RAM/2TB SSD/16 WQXGA 165hz/RTX 3080Ti 16GB/Win11/Đen/Balo)', 'LAPTOP', 'ASUS', '2021', 99999999.9999, 5, 'images/asus_zep_01-1.jpg,images/asus_zep_01-2.jpg,images/asus_zep_01-3.jpg,images/asus_zep_01-4.jpg,images/asus_zep_01-5.jpg,images/asus_zep_01-6.jpg', 'images/asus_zep_01-1.jpg', '', '', NULL, NULL),
(7, 'APPLE-MAC-01', 'Apple Macbook Pro 14”(Apple M1 Pro)', 'Apple Macbook Pro 14” (MKGR3SA/A) (Apple M1 Pro/16GB RAM/512GB SSD/14.2 inch/Mac OS/Bạc) (2021)', 'LAPTOP', 'APPLE', '2021', 48999000.0000, 15, 'images/apple_mac_pro-1.jpg,images/apple_mac_pro-2.jpg,images/apple_mac_pro-3.jpg,images/apple_mac_pro-4.jpg', 'images/apple_mac_pro-1.jpg', '', '', NULL, NULL),
(8, 'LENOVO-01', 'Laptop Lenovo Legion 5 (R7 6800H/16GB RAM)\r\n', 'Laptop Lenovo Legion 5 15ARH7H (82RE0036VN) (R7 6800H/16GB RAM/512GB SSD/15.6 FHD 165hz/RTX 3050Ti 4G/Win11/Xám)\r\n', 'LAPTOP', 'LN', '2022', 33899900.0000, 10, 'images/lenovo-01.jpg,images/lenovo-02.jpg,images/lenovo-03.jpg,images/lenovo-04.jpg,', 'images/lenovo-01.jpg', '', '', NULL, NULL),
(9, 'LOGITECH-01', 'Logitech Pro X Superlight White', 'Chuột không dây Logitech Pro X Superlight White (USB/Trắng/910-005944)', 'MICE', 'LOGITECH', '2020', 2999000.0000, 10, 'images/logitech-mice-1.jpg,images/logitech-mice-2.jpg,images/logitech-mice-3.jpg,images/logitech-mice-4.jpg,images/logitech-mice-5.jpg', 'images/logitech-mice-1.jpg', '', '', NULL, NULL),
(10, 'RZ-MICE-01', 'Razer Basilisk Ultimate with Dock ', 'Chuột không dây Razer Basilisk Ultimate with Dock (RZ01-03170100-R3A1)', 'MICE', 'RZ', '2021', 2999000.0000, 15, 'images/razer-basilik-2.jpg,images/razer-basilik-2.jpg,images/razer-basilik-3.jpg,images/razer-basilik-4.jpg,images/razer-basilik-5.jpg', 'images/razer-basilik-1.jpg', '', '', NULL, NULL),
(11, 'AKKO-01', 'Bàn phím cơ Akko ACR59 White(Akko CS Jelly)', 'Bàn phím cơ Akko ACR59 White White (Akko CS Jelly/USB/RGB)', 'KB', 'AKKO', '2022', 2599000.0000, 10, 'images/akko-1.jpg,images/akko-2.jpg,images/akko-3.jpg,images/akko-4.jpg,images/akko-5.jpg', 'images/akko-1.jpg', '', '', NULL, NULL),
(12, 'LG-02', 'Logitech G913 TKL Lightspeed Wireless RGB', 'Bàn phím Logitech G913 TKL Lightspeed Wireless RGB Red Linear Switch', 'KB', 'LOGITECH', '2020', 3699000.0000, 20, 'images/logitech2-1.jpg,images/logitech2-2.jpg,images/logitech2-3.jpg,images/logitech2-4.jpg,images/logitech2-5.jpg', 'images/logitech2-1.jpg', '', '', NULL, NULL),
(13, 'STEELSERIES-01', 'Steelseries Rival 5<br>(USB/RGB) ', 'Chuột Steelseries Rival 5 (USB/RGB) (62551)', 'MICE', 'STEELSERIES', '2022', 1690000.0000, 10, 'images/steel-1.jpg,images/steel-2.jpg,images/steel-3.jpg,images/steel-4.jpg', 'images/steel-1.jpg', '', '', NULL, NULL),
(14, 'RZ-03', 'Razer Viper V2 Pro White Ultra Lightweight', 'Chuột game không dây Razer Viper V2 Pro White Ultra Lightweight (RZ01-04390200-R3A1)', 'MICE', 'RZ', '2022', 3190000.0000, 5, 'images/razer-2-1.jpg,images/razer-2-2.jpg,images/razer-2-3.jpg,images/razer-2-4.jpg,images/razer-2-5.jpg', 'images/razer-2-1.jpg', '', '', NULL, NULL),
(15, 'LG-02', 'Logitech MX Mechanical Graphite Tactile', 'Bàn phím không dây Logitech MX Mechanical Graphite Tactile Switch(USB/Bluetooth)', 'KB', 'LOGITECH', '2020', 3799000.0000, 5, 'images/logitechkb-1.jpg,images/logitechkb2-2.jpg,images/logitechkb2-3.jpg,images/logitechkb2-4.jpg', 'images/logitechkb2-1.jpg', '', '', NULL, NULL),
(17, 'ASUS-AMD-1', 'Asus TUF GAMING RX 7900 XTX OC Edition', 'Card màn hình Asus TUF GAMING RX 7900 XTX OC OC Edition 24GB GDDR6', 'GPU', 'ASUS', '2022', 35990000.0000, 10, 'images/7900xtx-1.jpg,images/7900xtx-2.jpg,images/7900xtx-3.jpg,images/7900xtx-4.jpg,images/7900xtx-5.jpg,', 'images/7900xtx-1.jpg', '', '', NULL, NULL),
(18, 'ASUS-NV-2', 'Asus ROG STRIX-RTX 4090 WHITE', 'Card màn hình Asus ROG STRIX-RTX 4090-O24G-GAMING WHITE', 'GPU', 'ASUS', '2022', 65990000.0000, 5, 'images/4090-1.jpg,images/4090-2.jpg,images/4090-3.jpg,images/4090-4.jpg,images/4090-5.jpg', 'images/4090-1.jpg', '', '', NULL, NULL),
(19, 'ARC-1', 'Asrock Intel Arc A380 Challenger ITX 6GB', '<p>Asrock Intel Arc A380 Challenger ITX 6GB</p>', 'GPU', 'INTL', '2022', 4199000.0000, 20, 'images/arc380-1.jpg,images/arc380-2.jpg,images/arc380-3.jpg,images/arc380-4.jpg', 'images/arc380-1.jpg', '<p>Card màn hình Asrock Intel Arc A380 Challenger ITX 6GB</p>', '', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `type`
--

CREATE TABLE `type` (
  `id` int(11) NOT NULL,
  `type_code` varchar(250) NOT NULL,
  `type_name` varchar(250) NOT NULL,
  `loai` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `type`
--

INSERT INTO `type` (`id`, `type_code`, `type_name`, `loai`) VALUES
(1, 'CPU', 'CPU', 'Linh kiện'),
(2, 'GPU', 'Graphic Cards', 'Linh kiện\r\n'),
(3, 'KB', 'Keyboards', 'Phụ kiện\r\n'),
(4, 'MICE', 'Mice', 'Phụ kiện\r\n'),
(5, 'HEADPHONE', 'Headphone', 'Phụ kiện'),
(6, 'LAPTOP', 'Laptop', 'Laptops');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `First_name` varchar(255) NOT NULL,
  `Last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `role` varchar(255) NOT NULL DEFAULT 'user',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `First_name`, `Last_name`, `email`, `email_verified_at`, `password`, `remember_token`, `role`, `created_at`, `updated_at`) VALUES
(2, 'qq33', 'JackF', 'Frayer', 'ttrung123@gmail.com', NULL, '$2y$10$l27nc/e0cX0fQWqrJivFE.isFU50xJQRVMWu4dzGBrtE.Ou1hkxOO', NULL, 'admin', '2023-06-06 00:58:21', '2023-06-06 00:58:21'),
(4, 'trung123', 'Jack123123', 'Fruaer', 'trung12423@gmail.com', NULL, '$2y$10$NiGBd8USoDI.pwVNBGnYlepYUmN8PwghAeZ38sim1iUr6faRcjzgq', NULL, 'user', '2023-06-09 11:45:39', '2023-06-09 22:49:04');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `manufacturer`
--
ALTER TABLE `manufacturer`
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
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_codes`
--
ALTER TABLE `order_codes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

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
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `type`
--
ALTER TABLE `type`
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
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `manufacturer`
--
ALTER TABLE `manufacturer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `order_codes`
--
ALTER TABLE `order_codes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `type`
--
ALTER TABLE `type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
