-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 29, 2024 at 06:20 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `logistics_new`
--

-- --------------------------------------------------------

--
-- Table structure for table `wpyl_tracking`
--

CREATE TABLE `wpyl_tracking` (
  `id` int(9) NOT NULL,
  `order_no` varchar(255) NOT NULL,
  `container_no` varchar(255) NOT NULL,
  `ship_date` varchar(255) NOT NULL,
  `ship_country_origin` varchar(255) NOT NULL,
  `ship_origin_address` varchar(255) NOT NULL,
  `ship_company` varchar(255) NOT NULL,
  `dest_full_name` varchar(255) NOT NULL,
  `dest_phone` varchar(255) NOT NULL,
  `dest_country` varchar(255) NOT NULL,
  `dest_address` varchar(255) NOT NULL,
  `dest_mail` varchar(255) NOT NULL,
  `transport_mode` varchar(255) NOT NULL,
  `p_received` int(1) NOT NULL DEFAULT 0,
  `p_processing` int(1) NOT NULL DEFAULT 0,
  `p_shipped` int(1) NOT NULL DEFAULT 0,
  `p_route` int(1) NOT NULL DEFAULT 0,
  `p_arrived` int(1) NOT NULL DEFAULT 0,
  `p_s_check` int(1) NOT NULL DEFAULT 0,
  `p_delivered` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `wp_tracking`
--

INSERT INTO `wpyl_tracking` (`id`, `order_no`, `container_no`, `ship_date`, `ship_country_origin`, `ship_origin_address`, `ship_company`, `dest_full_name`, `dest_phone`, `dest_country`, `dest_address`, `dest_mail`, `transport_mode`, `p_received`, `p_processing`, `p_shipped`, `p_route`, `p_arrived`, `p_s_check`, `p_delivered`) VALUES
(1, 'AWB02786786', '02786786', '09/02/2022', 'Great Britain', 'August Bisgaard , Albertslund  Elkjær Allé 133 ,Hornbæk Zip Code 8180 UK', 'DC International  ', 'August Bisgaard', '91949994994', 'Barbados', 'Alexandria Le Carre 96, rue Poirier Pottier-sur-Fernandez Zip Code	03 157 France', 'vinaysingh43@gmail.com', 'Air Freight <i class=\"fa-solid fa-plane-circle-check\"></i>', 0, 0, 0, 0, 0, 0, 0),
(2, 'AWB32010871', '32010871', '09/02/2022', 'United States of America', '47 Tibbs Avenue Melrose Montana\r\n59743 USA ', 'Larry C. Davidson', 'Steve Kennedy', '770-533-3288', 'United States of America', 'Steve Kennedy\r\nCloud 53 Smoke & Vape Shop\r\n3288 Thompson Bridge Rd\r\nGainesville Ga. 30506', ' cloud53smoke@yahoo.com', 'Air Freight <i class=\"fa-solid fa-plane-circle-check\"></i>', 0, 0, 0, 0, 0, 0, 0),
(3, 'AWB32010534', 'AWB32010534', '09/03/2022', 'United Kingdom', '61 Gloddaeth Street\r\nBINSTED\r\nZip Code/Postal code	GU34 4BE\r\nUnited Kingdom ', 'Douglas C. West', 'Danelle Langdon', '2148782644', 'United States of America', 'Danelle Langdon\r\n330 E Camp Wisdom 7102\r\nDallas TX 75241\r\nUS\r\nTelephone: 2148782644\r\nEmail:dannimack829@gmail.com', 'dannimack829@gmail.com', 'Air Freight <i class=\"fa-solid fa-plane-circle-check\"></i>', 1, 1, 0, 0, 0, 0, 0),
(4, 'AWB32010888', 'AWB32010888', '09/14/2022', 'United States of America', '1611 Masonic Drive  Montana ', 'freightexpresslogistics', 'Clay Landrigan', '8167140685', 'United States of America', '11737 North Illinois Ave\r\nKansas city, MO 64156', 'hostilehonky1992@gmail.com', 'Air Freight <i class=\"fa-solid fa-plane-circle-check\"></i>', 1, 1, 1, 1, 1, 1, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `wp_tracking`
--
ALTER TABLE `wpyl_tracking`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `Order_No` (`order_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `wp_tracking`
--
ALTER TABLE `wpyl_tracking`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
