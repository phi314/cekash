-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 08, 2016 at 12:39 
-- Server version: 5.6.21
-- PHP Version: 5.5.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `unleashed_cekash2015`
--
CREATE DATABASE IF NOT EXISTS `unleashed_cekash2015` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `unleashed_cekash2015`;

-- --------------------------------------------------------

--
-- Table structure for table `cekash_attribute`
--

CREATE TABLE IF NOT EXISTS `cekash_attribute` (
`id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cekash_bank_account`
--

CREATE TABLE IF NOT EXISTS `cekash_bank_account` (
`id` int(11) NOT NULL,
  `bank` varchar(20) NOT NULL,
  `account_number` varchar(30) NOT NULL,
  `account_holder_name` varchar(30) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `id_user` int(11) NOT NULL,
  `last_update_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cekash_brand`
--

CREATE TABLE IF NOT EXISTS `cekash_brand` (
`id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cekash_detail_order`
--

CREATE TABLE IF NOT EXISTS `cekash_detail_order` (
`id` int(11) NOT NULL,
  `id_sales_transaction` int(11) NOT NULL,
  `id_item` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `subtotal` int(11) NOT NULL,
  `discount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cekash_detail_purchase`
--

CREATE TABLE IF NOT EXISTS `cekash_detail_purchase` (
`id` int(11) NOT NULL,
  `id_purchases` int(11) NOT NULL,
  `id_item` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `subtotal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cekash_login_history`
--

CREATE TABLE IF NOT EXISTS `cekash_login_history` (
`id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `ip` varchar(45) NOT NULL,
  `user_agent` varchar(120) NOT NULL,
  `note` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cekash_order`
--

CREATE TABLE IF NOT EXISTS `cekash_order` (
`id` int(11) NOT NULL,
  `invoice_code` varchar(17) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_customer` int(11) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `subtotal` int(11) NOT NULL,
  `discount` int(11) NOT NULL,
  `grand_total` int(11) NOT NULL,
  `money_paid` int(11) NOT NULL,
  `money_change` int(11) NOT NULL,
  `type_of_pay` enum('cash','debit') NOT NULL DEFAULT 'cash',
  `id_bank_account` int(11) NOT NULL,
  `notes` varchar(255) NOT NULL,
  `is_canceled` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cekash_product`
--

CREATE TABLE IF NOT EXISTS `cekash_product` (
`id` int(11) NOT NULL,
  `sku` varchar(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `handle` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `id_product_type` int(11) DEFAULT NULL,
  `id_product_brand` int(11) DEFAULT NULL,
  `supply_price` int(11) NOT NULL,
  `markup` int(11) NOT NULL,
  `retail_price` int(11) NOT NULL,
  `stock` int(11) NOT NULL,
  `attribute_1_value` varchar(20) NOT NULL,
  `attribute_2_value` varchar(20) NOT NULL,
  `attribute_3_value` varchar(20) NOT NULL,
  `parent_id` int(11) DEFAULT NULL COMMENT 'For variant product use',
  `id_supplier` int(11) DEFAULT NULL,
  `id_user` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `last_update_user` int(11) NOT NULL,
  `is_available` tinyint(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cekash_product`
--

INSERT INTO `cekash_product` (`id`, `sku`, `name`, `handle`, `description`, `id_product_type`, `id_product_brand`, `supply_price`, `markup`, `retail_price`, `stock`, `attribute_1_value`, `attribute_2_value`, `attribute_3_value`, `parent_id`, `id_supplier`, `id_user`, `created_at`, `updated_at`, `last_update_user`, `is_available`) VALUES
(1, '1234567890', 'Pupuk Mikroba Pertala Tipe I', '', '', 3, 0, 7500, 10000, 0, 10, '', '', '', 0, 1, 1, '2015-09-02 15:58:44', '2015-09-04 12:50:48', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `cekash_product_attribute`
--

CREATE TABLE IF NOT EXISTS `cekash_product_attribute` (
`id` int(11) NOT NULL,
  `id_product` int(11) NOT NULL,
  `id_attribute` int(11) NOT NULL,
  `default_value` varchar(20) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cekash_product_history`
--

CREATE TABLE IF NOT EXISTS `cekash_product_history` (
`id` int(11) NOT NULL,
  `id_product` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `quantity_change` int(11) NOT NULL,
  `action` varchar(20) NOT NULL,
  `action_field` varchar(20) NOT NULL,
  `action_id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cekash_product_tag`
--

CREATE TABLE IF NOT EXISTS `cekash_product_tag` (
`id` int(11) NOT NULL,
  `id_product` int(11) NOT NULL,
  `id_tag` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cekash_product_type`
--

CREATE TABLE IF NOT EXISTS `cekash_product_type` (
`id` int(11) NOT NULL,
  `code` varchar(10) NOT NULL,
  `name` varchar(20) NOT NULL,
  `id_user` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `last_update_user` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cekash_product_type`
--

INSERT INTO `cekash_product_type` (`id`, `code`, `name`, `id_user`, `created_at`, `updated_at`, `last_update_user`) VALUES
(1, 'COMP', 'Komputer', 1, '2015-09-02 02:56:32', '2015-09-02 00:56:32', 0),
(2, 'SHRT', 'Baju', 1, '2015-09-02 02:56:57', '2015-09-02 00:56:57', 0),
(3, 'B0013', 'Obat Tanaman', 1, '2015-09-04 14:24:09', '2015-09-04 12:24:09', 1);

-- --------------------------------------------------------

--
-- Table structure for table `cekash_purchase`
--

CREATE TABLE IF NOT EXISTS `cekash_purchase` (
`id` int(11) NOT NULL,
  `invoice_code` varchar(17) NOT NULL,
  `note_number` varchar(20) NOT NULL,
  `id_supplier` int(11) NOT NULL,
  `grand_total` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `is_canceled` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cekash_settings`
--

CREATE TABLE IF NOT EXISTS `cekash_settings` (
  `id` int(11) NOT NULL DEFAULT '1',
  `prefix_code` varchar(3) NOT NULL DEFAULT 'INV',
  `store_name` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `city` varchar(20) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `web` varchar(30) NOT NULL,
  `image` varchar(30) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `last_update_user` int(11) NOT NULL,
  `tax` float NOT NULL,
  `currency` varchar(10) NOT NULL DEFAULT 'Rp'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cekash_settings`
--

INSERT INTO `cekash_settings` (`id`, `prefix_code`, `store_name`, `address`, `city`, `phone`, `email`, `web`, `image`, `updated_at`, `last_update_user`, `tax`, `currency`) VALUES
(1, 'INV', '', '', '', '', '', '', '', '2015-07-31 10:00:00', 1, 0, 'Rp');

-- --------------------------------------------------------

--
-- Table structure for table `cekash_supplier`
--

CREATE TABLE IF NOT EXISTS `cekash_supplier` (
`id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `address` varchar(200) NOT NULL,
  `city` varchar(30) NOT NULL,
  `country` varchar(30) NOT NULL DEFAULT 'Indonesia',
  `phone` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `id_user` int(11) NOT NULL,
  `last_update_user` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cekash_supplier`
--

INSERT INTO `cekash_supplier` (`id`, `name`, `address`, `city`, `country`, `phone`, `email`, `created_at`, `updated_at`, `id_user`, `last_update_user`) VALUES
(1, 'PT. Pertala Mandiri', 'Jl. Kampus Unjani Gedung V no 26', 'Cimahi', 'Indonesia', '085722938188', 'pertala.mandiri@gmail.com', '2015-09-02 14:56:10', '2015-09-02 12:56:10', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `cekash_tag`
--

CREATE TABLE IF NOT EXISTS `cekash_tag` (
`id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cekash_user`
--

CREATE TABLE IF NOT EXISTS `cekash_user` (
`id` int(11) NOT NULL,
  `code` varchar(20) NOT NULL,
  `name` varchar(30) NOT NULL,
  `address` varchar(100) NOT NULL,
  `city` varchar(20) NOT NULL,
  `country` varchar(30) NOT NULL DEFAULT 'Indonesia',
  `phone` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `id_user` int(11) NOT NULL,
  `last_update_user` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `level` enum('1','50','100') NOT NULL COMMENT '1: superadmin, 50: admin, 100: cashier',
  `last_login` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cekash_user`
--

INSERT INTO `cekash_user` (`id`, `code`, `name`, `address`, `city`, `country`, `phone`, `email`, `created_at`, `updated_at`, `id_user`, `last_update_user`, `username`, `password`, `is_active`, `level`, `last_login`) VALUES
(1, ' 1123581321', 'Admin', '', 'Cimahi', 'Indonesia', '', '', '2015-08-01 00:00:00', '2015-08-29 02:27:23', 1, 1, 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 1, '1', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cekash_attribute`
--
ALTER TABLE `cekash_attribute`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cekash_bank_account`
--
ALTER TABLE `cekash_bank_account`
 ADD PRIMARY KEY (`id`), ADD KEY `id_user` (`id_user`,`last_update_user`);

--
-- Indexes for table `cekash_brand`
--
ALTER TABLE `cekash_brand`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cekash_detail_order`
--
ALTER TABLE `cekash_detail_order`
 ADD PRIMARY KEY (`id`), ADD KEY `id_sales_transaction` (`id_sales_transaction`,`id_item`);

--
-- Indexes for table `cekash_detail_purchase`
--
ALTER TABLE `cekash_detail_purchase`
 ADD PRIMARY KEY (`id`), ADD KEY `id_purchases` (`id_purchases`,`id_item`);

--
-- Indexes for table `cekash_login_history`
--
ALTER TABLE `cekash_login_history`
 ADD PRIMARY KEY (`id`), ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `cekash_order`
--
ALTER TABLE `cekash_order`
 ADD PRIMARY KEY (`id`), ADD KEY `id_user` (`id_user`,`id_customer`,`id_bank_account`);

--
-- Indexes for table `cekash_product`
--
ALTER TABLE `cekash_product`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `handle` (`handle`), ADD KEY `id_category` (`id_product_type`,`id_supplier`,`id_user`), ADD KEY `id_product_brand` (`id_product_brand`), ADD KEY `id_product_type` (`id_product_type`);

--
-- Indexes for table `cekash_product_attribute`
--
ALTER TABLE `cekash_product_attribute`
 ADD PRIMARY KEY (`id`), ADD KEY `id_product` (`id_product`,`id_attribute`);

--
-- Indexes for table `cekash_product_history`
--
ALTER TABLE `cekash_product_history`
 ADD PRIMARY KEY (`id`), ADD KEY `id_product` (`id_product`,`id_user`);

--
-- Indexes for table `cekash_product_tag`
--
ALTER TABLE `cekash_product_tag`
 ADD PRIMARY KEY (`id`), ADD KEY `id_product` (`id_product`,`id_tag`);

--
-- Indexes for table `cekash_product_type`
--
ALTER TABLE `cekash_product_type`
 ADD PRIMARY KEY (`id`), ADD KEY `id_user` (`id_user`,`last_update_user`);

--
-- Indexes for table `cekash_purchase`
--
ALTER TABLE `cekash_purchase`
 ADD PRIMARY KEY (`id`), ADD KEY `id_supplier` (`id_supplier`,`id_user`);

--
-- Indexes for table `cekash_settings`
--
ALTER TABLE `cekash_settings`
 ADD PRIMARY KEY (`id`), ADD KEY `last_update_user` (`last_update_user`);

--
-- Indexes for table `cekash_supplier`
--
ALTER TABLE `cekash_supplier`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `phone` (`phone`,`email`), ADD KEY `id_user` (`id_user`,`last_update_user`);

--
-- Indexes for table `cekash_tag`
--
ALTER TABLE `cekash_tag`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cekash_user`
--
ALTER TABLE `cekash_user`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `username` (`username`), ADD KEY `id_user` (`id_user`,`last_update_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cekash_attribute`
--
ALTER TABLE `cekash_attribute`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `cekash_bank_account`
--
ALTER TABLE `cekash_bank_account`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `cekash_brand`
--
ALTER TABLE `cekash_brand`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `cekash_detail_order`
--
ALTER TABLE `cekash_detail_order`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `cekash_detail_purchase`
--
ALTER TABLE `cekash_detail_purchase`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `cekash_login_history`
--
ALTER TABLE `cekash_login_history`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `cekash_order`
--
ALTER TABLE `cekash_order`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `cekash_product`
--
ALTER TABLE `cekash_product`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `cekash_product_attribute`
--
ALTER TABLE `cekash_product_attribute`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `cekash_product_history`
--
ALTER TABLE `cekash_product_history`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `cekash_product_tag`
--
ALTER TABLE `cekash_product_tag`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `cekash_product_type`
--
ALTER TABLE `cekash_product_type`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `cekash_purchase`
--
ALTER TABLE `cekash_purchase`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `cekash_supplier`
--
ALTER TABLE `cekash_supplier`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `cekash_tag`
--
ALTER TABLE `cekash_tag`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `cekash_user`
--
ALTER TABLE `cekash_user`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
