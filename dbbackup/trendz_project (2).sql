-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 11, 2021 at 06:12 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `trendz_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `trendz_admin`
--

CREATE TABLE `trendz_admin` (
  `aid` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `trendz_admin`
--

INSERT INTO `trendz_admin` (`aid`, `email`, `password`) VALUES
(1, 'trendz@gmail.com', 'a123');

-- --------------------------------------------------------

--
-- Table structure for table `trendz_cart`
--

CREATE TABLE `trendz_cart` (
  `cartid` int(11) NOT NULL,
  `custid` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `pname` varchar(255) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` float NOT NULL,
  `subtotal` float NOT NULL,
  `added_date` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'pending'
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `trendz_cart`
--

INSERT INTO `trendz_cart` (`cartid`, `custid`, `pid`, `pname`, `quantity`, `price`, `subtotal`, `added_date`, `status`) VALUES
(9, 1, 2, 'womens tshirt', 2, 400, 760, '11/02/2021', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `trendz_category`
--

CREATE TABLE `trendz_category` (
  `catid` int(11) NOT NULL,
  `mcatid` int(11) NOT NULL,
  `catname` varchar(255) NOT NULL,
  `added_date` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `trendz_category`
--

INSERT INTO `trendz_category` (`catid`, `mcatid`, `catname`, `added_date`) VALUES
(1, 1, 'Womens T-shirt', '2020-12-15'),
(2, 1, 'Womens Sports Shoes', '2020-12-15'),
(3, 1, 'Womens Formal Shoes', '2020-12-15'),
(4, 2, 'Mens T-shirt', '2020-12-15'),
(5, 2, 'Mens Casual Shoes', '2020-12-15'),
(6, 2, 'Mens Formal Shoes', '2020-12-15'),
(7, 3, 'Kids T-shirt', '2020-12-15'),
(8, 3, 'Kids Casual Shoes', '2020-12-15'),
(9, 3, 'Kids Formal Shoes', '2020-12-15');

-- --------------------------------------------------------

--
-- Table structure for table `trendz_city`
--

CREATE TABLE `trendz_city` (
  `ctid` int(11) NOT NULL,
  `sid` int(11) NOT NULL,
  `ctname` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `trendz_city`
--

INSERT INTO `trendz_city` (`ctid`, `sid`, `ctname`) VALUES
(1, 1, 'Rajkot'),
(2, 1, 'Ahemdabad'),
(3, 1, 'Surat'),
(4, 2, 'Varansi'),
(5, 2, 'Mathura'),
(6, 2, 'Agra'),
(7, 3, 'Jaipur'),
(8, 3, 'Udaipur'),
(11, 1, 'Porbandar'),
(12, 2, 'Gaziabad'),
(13, 2, 'Mirazapur'),
(14, 2, 'Gorakhpur');

-- --------------------------------------------------------

--
-- Table structure for table `trendz_customer`
--

CREATE TABLE `trendz_customer` (
  `custid` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `mobile` bigint(20) NOT NULL,
  `address` text NOT NULL,
  `sid` int(11) NOT NULL,
  `ctid` int(11) NOT NULL,
  `registered_date_time` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `trendz_customer`
--

INSERT INTO `trendz_customer` (`custid`, `firstname`, `lastname`, `email`, `password`, `photo`, `mobile`, `address`, `sid`, `ctid`, `registered_date_time`) VALUES
(1, 'brijesh', 'shrma', 'bkpandey.pandey@gmail.com', 'MTIzNDU=', 'uploads/customer_photo/swimming.jfif', 9998003879, '150 feet ring road ahemdabad', 1, 2, '11/02/21 05:27:02'),
(2, 'kishan', 'pandya', 'kishan@gmail.com', 'MTIz', 'uploads/customer_photo/404.png', 9998003879, '150 feet ring road near telephone exchange suarastra kala kendra society Rajkot - 360001', 1, 1, '02/01/21 09:24:32');

-- --------------------------------------------------------

--
-- Table structure for table `trendz_maincategory`
--

CREATE TABLE `trendz_maincategory` (
  `mcatid` int(11) NOT NULL,
  `mcatname` varchar(255) NOT NULL,
  `added_date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `trendz_maincategory`
--

INSERT INTO `trendz_maincategory` (`mcatid`, `mcatname`, `added_date`) VALUES
(1, 'Womes Wear', '2020-12-15'),
(2, 'Mens Wear', '2020-12-15'),
(3, 'Kids Wear', '2020-12-15');

-- --------------------------------------------------------

--
-- Table structure for table `trendz_product`
--

CREATE TABLE `trendz_product` (
  `pid` int(11) NOT NULL,
  `mcatid` int(11) NOT NULL,
  `catid` int(11) NOT NULL,
  `subcatid` int(11) NOT NULL,
  `pimage` varchar(255) NOT NULL,
  `pimage1` varchar(255) NOT NULL,
  `pimage2` varchar(255) NOT NULL,
  `pname` varchar(255) NOT NULL,
  `qty` int(11) NOT NULL,
  `oldprice` float NOT NULL,
  `offerprice` float NOT NULL,
  `discount` varchar(255) NOT NULL,
  `discountedprice` float NOT NULL,
  `description` text NOT NULL,
  `added_date` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `trendz_product`
--

INSERT INTO `trendz_product` (`pid`, `mcatid`, `catid`, `subcatid`, `pimage`, `pimage1`, `pimage2`, `pname`, `qty`, `oldprice`, `offerprice`, `discount`, `discountedprice`, `description`, `added_date`) VALUES
(1, 2, 4, 1, 'upload_products/adidas - Copy.jpg', 'upload_products/adidas - Copy.jpg', 'upload_products/adidas - Copy.jpg', 'polo fit shirt', 1, 9000, 8500, '10', 7650, '<p>h</p>', '2021-02-10'),
(2, 1, 1, 1, 'upload_products/trendz.png', 'upload_products/trendz.png', 'upload_products/trendz.png', 'womens tshirt', 1, 450, 400, '5', 380, '<p>hi</p>', '2021-02-11');

-- --------------------------------------------------------

--
-- Table structure for table `trendz_state`
--

CREATE TABLE `trendz_state` (
  `sid` int(11) NOT NULL,
  `sname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `trendz_state`
--

INSERT INTO `trendz_state` (`sid`, `sname`) VALUES
(1, 'Gujrat'),
(2, 'Uttrakhand'),
(3, 'mahrastra');

-- --------------------------------------------------------

--
-- Table structure for table `trendz_subcategory`
--

CREATE TABLE `trendz_subcategory` (
  `subcatid` int(11) NOT NULL,
  `mcatid` int(11) NOT NULL,
  `catid` int(11) NOT NULL,
  `subcatname` varchar(255) NOT NULL,
  `added_date` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `trendz_subcategory`
--

INSERT INTO `trendz_subcategory` (`subcatid`, `mcatid`, `catid`, `subcatname`, `added_date`) VALUES
(1, 1, 1, 'Polo', '2020-12-17'),
(2, 1, 2, 'Peter England', '2020-12-17'),
(3, 2, 4, 'Nike', '2020-12-17'),
(4, 2, 4, 'UCB', '2020-12-17'),
(5, 2, 5, 'Vimal ', '2020-12-17'),
(6, 3, 7, 'adidas', '2020-12-17');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `trendz_admin`
--
ALTER TABLE `trendz_admin`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `trendz_cart`
--
ALTER TABLE `trendz_cart`
  ADD PRIMARY KEY (`cartid`),
  ADD KEY `custid` (`custid`),
  ADD KEY `pid` (`pid`);

--
-- Indexes for table `trendz_category`
--
ALTER TABLE `trendz_category`
  ADD PRIMARY KEY (`catid`),
  ADD KEY `mcatid` (`mcatid`);

--
-- Indexes for table `trendz_city`
--
ALTER TABLE `trendz_city`
  ADD PRIMARY KEY (`ctid`),
  ADD KEY `sid` (`sid`);

--
-- Indexes for table `trendz_customer`
--
ALTER TABLE `trendz_customer`
  ADD PRIMARY KEY (`custid`),
  ADD KEY `sid` (`sid`),
  ADD KEY `ctid` (`ctid`);

--
-- Indexes for table `trendz_maincategory`
--
ALTER TABLE `trendz_maincategory`
  ADD PRIMARY KEY (`mcatid`);

--
-- Indexes for table `trendz_product`
--
ALTER TABLE `trendz_product`
  ADD PRIMARY KEY (`pid`),
  ADD KEY `mcatid` (`mcatid`),
  ADD KEY `catid` (`catid`),
  ADD KEY `subcatid` (`subcatid`);

--
-- Indexes for table `trendz_state`
--
ALTER TABLE `trendz_state`
  ADD PRIMARY KEY (`sid`);

--
-- Indexes for table `trendz_subcategory`
--
ALTER TABLE `trendz_subcategory`
  ADD PRIMARY KEY (`subcatid`),
  ADD KEY `mcatid` (`mcatid`),
  ADD KEY `catid` (`catid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `trendz_admin`
--
ALTER TABLE `trendz_admin`
  MODIFY `aid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `trendz_cart`
--
ALTER TABLE `trendz_cart`
  MODIFY `cartid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `trendz_category`
--
ALTER TABLE `trendz_category`
  MODIFY `catid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `trendz_city`
--
ALTER TABLE `trendz_city`
  MODIFY `ctid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `trendz_customer`
--
ALTER TABLE `trendz_customer`
  MODIFY `custid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `trendz_maincategory`
--
ALTER TABLE `trendz_maincategory`
  MODIFY `mcatid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `trendz_product`
--
ALTER TABLE `trendz_product`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `trendz_state`
--
ALTER TABLE `trendz_state`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `trendz_subcategory`
--
ALTER TABLE `trendz_subcategory`
  MODIFY `subcatid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
