-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 24, 2022 at 04:00 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `registration`
--

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `bid` int(10) NOT NULL,
  `pid` int(10) NOT NULL,
  `price` float NOT NULL,
  `bimage` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`bid`, `pid`, `price`, `bimage`) VALUES
(13, 5, 17500, 'cimages/banner-2.png'),
(15, 141, 5400, 'cimages/banner-1.png'),
(16, 555, 13800, 'cimages/pexels.png');

-- --------------------------------------------------------

--
-- Table structure for table `billdetails`
--

CREATE TABLE `billdetails` (
  `billid` int(10) NOT NULL,
  `ordid` int(10) NOT NULL,
  `phoneno` bigint(10) NOT NULL,
  `bqty` int(10) NOT NULL,
  `bdate` date NOT NULL,
  `bstatus` varchar(10) NOT NULL,
  `btax` float NOT NULL,
  `bmethod` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cartid` int(10) NOT NULL,
  `pid` int(10) NOT NULL,
  `qty` int(10) NOT NULL,
  `total` int(10) NOT NULL,
  `grand` int(10) NOT NULL,
  `phoneno` bigint(10) NOT NULL,
  `status` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cartid`, `pid`, `qty`, `total`, `grand`, `phoneno`, `status`) VALUES
(45, 0, 0, 0, 0, 0, ''),
(130, 444, 1, 35000, 35000, 9496752231, 'AVAILABLE'),
(131, 141, 1, 5400, 5400, 9123456780, 'AVAILABLE');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `catid` int(10) NOT NULL,
  `catname` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`catid`, `catname`) VALUES
(54, ' Sofa & Chair'),
(55, ' Shelf'),
(58, 'Seats'),
(59, 'Cabinets'),
(60, ' Dining'),
(61, 'Bedroom'),
(62, 'Stands'),
(63, 'Chairs'),
(64, 'Sofa'),
(65, 'Table'),
(66, 'Others');

-- --------------------------------------------------------

--
-- Table structure for table `customer2`
--

CREATE TABLE `customer2` (
  `username` varchar(35) NOT NULL,
  `phoneno` bigint(10) NOT NULL,
  `emailid` varchar(35) NOT NULL,
  `pass` varchar(10) NOT NULL,
  `confpass` varchar(10) NOT NULL,
  `user` varchar(5) NOT NULL,
  `caddress` varchar(60) NOT NULL,
  `pin` varchar(10) NOT NULL,
  `contactno` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer2`
--

INSERT INTO `customer2` (`username`, `phoneno`, `emailid`, `pass`, `confpass`, `user`, `caddress`, `pin`, `contactno`) VALUES
(' rahul', 2147483647, ' rahul@gmail.com', '963', '963', '', '  xyz kochi', ' 685566', 0),
(' sujith', 6238221598, ' sujith@gmail.com', 'day', 'day1', '', ' kozhikode', ' 859672', 0),
(' akash', 8002003001, ' akash@gmail.com', 'pa', 'pa', '', ' abc kollam', ' 685566', 0),
(' don', 8078574146, ' don@gmail.com', 'don', 'don', 'emp', ' purangattil', ' 685619', 0),
(' arun', 9123456780, ' arun@gmail.com', 'arun', 'arun', '', ' palal rajakumari', ' 685619', 0),
(' day', 9400044146, ' day@gmail.com', 'day', 'day', '', ' kochi', ' 685566', 0),
(' Donish', 9496752231, ' donish@gmail.com', 'don', 'don', '', ' Rajakumari Palam', ' 685619', 2147483647),
('basil', 9496752238, 'basil@gmail.com', 'admin', 'admin', 'admin', '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `customize_order`
--

CREATE TABLE `customize_order` (
  `custorid` int(10) NOT NULL,
  `customid` int(10) NOT NULL,
  `amount` int(10) NOT NULL,
  `orderdate` timestamp NOT NULL DEFAULT current_timestamp(),
  `orderqty` int(10) NOT NULL,
  `total` int(10) NOT NULL,
  `tax` int(5) NOT NULL,
  `ddate` date DEFAULT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customize_order`
--

INSERT INTO `customize_order` (`custorid`, `customid`, `amount`, `orderdate`, `orderqty`, `total`, `tax`, `ddate`, `status`) VALUES
(15, 36, 10000, '2022-03-14 13:21:23', 5, 50000, 18, '2022-03-11', 'DELIVERED'),
(22, 45, 3000, '2022-03-15 09:19:06', 5, 15000, 0, '2022-03-18', 'PACKED'),
(23, 48, 0, '2022-03-21 06:38:51', 0, 0, 0, NULL, '');

-- --------------------------------------------------------

--
-- Table structure for table `custorder`
--

CREATE TABLE `custorder` (
  `id` int(10) NOT NULL,
  `orid` int(10) NOT NULL,
  `cartid` int(10) NOT NULL,
  `pid` int(10) NOT NULL,
  `phoneno` bigint(10) NOT NULL,
  `orqty` int(10) NOT NULL,
  `price` float NOT NULL,
  `tax` int(5) NOT NULL,
  `amount` int(10) NOT NULL,
  `ordate` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `custorder`
--

INSERT INTO `custorder` (`id`, `orid`, `cartid`, `pid`, `phoneno`, `orqty`, `price`, `tax`, `amount`, `ordate`) VALUES
(83, 5, 116, 555, 9123456780, 1, 13800, 18, 13800, '2022-03-15 06:31:35'),
(84, 5, 117, 141, 9123456780, 3, 5400, 18, 16200, '2022-03-15 06:31:35'),
(85, 5, 118, 104, 9123456780, 2, 15000, 18, 30000, '2022-03-15 06:31:35'),
(86, 5, 119, 5, 9123456780, 1, 17500, 18, 17500, '2022-03-15 06:31:35'),
(91, 14, 120, 5, 8002003001, 1, 17500, 18, 17500, '2022-03-15 07:15:21'),
(92, 15, 120, 5, 9400044146, 1, 17500, 18, 17500, '2022-03-15 10:30:11'),
(93, 15, 121, 141, 9400044146, 2, 5400, 18, 10800, '2022-03-15 10:30:11'),
(95, 16, 120, 5, 6238221598, 1, 17500, 18, 17500, '2022-03-15 10:37:27'),
(96, 16, 121, 141, 6238221598, 2, 5400, 18, 10800, '2022-03-15 10:37:27'),
(97, 16, 122, 107, 6238221598, 1, 2500, 18, 2500, '2022-03-15 10:37:27'),
(98, 17, 120, 5, 6238221598, 1, 17500, 18, 17500, '2022-03-15 10:39:22'),
(99, 17, 121, 141, 6238221598, 2, 5400, 18, 10800, '2022-03-15 10:39:22'),
(100, 17, 122, 107, 6238221598, 1, 2500, 18, 2500, '2022-03-15 10:39:22'),
(101, 18, 120, 5, 9400044146, 1, 17500, 18, 17500, '2022-03-16 14:15:30'),
(102, 18, 121, 141, 9400044146, 2, 5400, 18, 10800, '2022-03-16 14:15:30'),
(103, 18, 122, 107, 9400044146, 1, 2500, 18, 2500, '2022-03-16 14:15:30'),
(104, 19, 121, 141, 9400044146, 2, 5400, 18, 10800, '2022-03-16 14:16:53'),
(105, 19, 122, 107, 9400044146, 1, 2500, 18, 2500, '2022-03-16 14:16:53'),
(106, 20, 126, 5, 9123456780, 2, 17500, 18, 35000, '2022-03-19 06:16:20'),
(107, 22, 127, 5, 9123456780, 1, 17500, 18, 17500, '2022-03-19 06:49:13'),
(108, 23, 128, 104, 9123456780, 2, 15000, 18, 30000, '2022-03-19 08:50:14');

-- --------------------------------------------------------

--
-- Table structure for table `cutomize`
--

CREATE TABLE `cutomize` (
  `customid` int(10) NOT NULL,
  `category` varchar(20) NOT NULL,
  `phoneno` bigint(10) NOT NULL,
  `custdate` datetime NOT NULL DEFAULT current_timestamp(),
  `custqty` int(10) NOT NULL,
  `amt` float NOT NULL,
  `custstatus` varchar(30) NOT NULL,
  `requirements` varchar(50) NOT NULL,
  `custimage` varchar(100) NOT NULL,
  `ddate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cutomize`
--

INSERT INTO `cutomize` (`customid`, `category`, `phoneno`, `custdate`, `custqty`, `amt`, `custstatus`, `requirements`, `custimage`, `ddate`) VALUES
(36, 'Table', 9400044146, '2022-02-08 11:53:42', 5, 10000, 'APPROVED', 'length 5 ft  width 4ft height 3ft', '', '0000-00-00'),
(45, 'Chair', 9123456780, '2022-03-17 14:41:10', 5, 3000, 'PACKED', 'teak wooden chair', '', '2022-03-18'),
(47, 'Sofa', 9123456780, '2022-03-18 21:01:18', 5, 0, 'APPROVED', 'customization', 'cimages/2.jpg', '0000-00-00'),
(48, 'Sofa', 9123456780, '2022-03-21 12:06:09', 1, 0, 'REQUEST', 'length 5ft width 3ft height 4ft', 'cimages/Item-2.jpg', '0000-00-00'),
(49, 'Sofa', 9496752231, '2022-03-23 15:44:01', 1, 0, 'REJECTED', 'i want sofa set with color blue and one pillow', 'cimages/', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `img_name` varchar(50) NOT NULL,
  `img_path` varchar(100) NOT NULL,
  `img_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`img_name`, `img_path`, `img_id`) VALUES
('lmj', 'img/DINING-compressed.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `order_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `order_receiver_name` varchar(250) NOT NULL,
  `order_receiver_address` text NOT NULL,
  `order_total_before_tax` decimal(10,2) NOT NULL,
  `order_total_tax` decimal(10,2) NOT NULL,
  `order_tax_per` varchar(250) NOT NULL,
  `order_total_after_tax` double(10,2) NOT NULL,
  `order_amount_paid` decimal(10,2) NOT NULL,
  `order_total_amount_due` decimal(10,2) NOT NULL,
  `note` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `orid` int(11) NOT NULL,
  `phoneno` bigint(10) NOT NULL,
  `grand` int(10) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`orid`, `phoneno`, `grand`, `status`) VALUES
(5, 9123456780, 77500, 'DELIVERED'),
(14, 8002003001, 17500, 'OUT OF DELIVERY'),
(15, 9400044146, 28300, 'SHIPPED'),
(18, 9400044146, 30800, ''),
(19, 9400044146, 13300, ''),
(20, 9123456780, 35000, ''),
(22, 9123456780, 17500, ''),
(23, 9123456780, 30000, ''),
(24, 9123456780, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `pid` int(11) NOT NULL,
  `pname` varchar(25) NOT NULL,
  `brand` varchar(25) NOT NULL,
  `supplierid` int(10) NOT NULL,
  `pdescription` varchar(50) NOT NULL,
  `dimension` varchar(10) NOT NULL,
  `price` float NOT NULL,
  `stock` int(10) NOT NULL,
  `tax` int(10) NOT NULL,
  `material` varchar(25) NOT NULL,
  `categoryname` varchar(35) NOT NULL,
  `customstatus` varchar(5) NOT NULL,
  `pimage` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`pid`, `pname`, `brand`, `supplierid`, `pdescription`, `dimension`, `price`, `stock`, `tax`, `material`, `categoryname`, `customstatus`, `pimage`) VALUES
(5, 'sofa', '', 15, ' Red color sofa with luxury feel.', '  ', 17500, 5, 18, 'wood', 'Sofa', 'Yes', 'images/Item-1.jpg'),
(104, 'table', '', 105, ' ', '', 15000, 3, 18, 'Mdf', 'Table', 'Yes', 'images/Item-2.jpg'),
(107, 'chair', '', 21, ' ', '', 12500, 7, 18, 'Wood', 'Chairs', 'Yes', 'images/Item-16.jpg'),
(109, 'Shelf', '', 110, ' Mdf shelf black color', '7ft 4ft', 11000, 1, 18, 'Mdf', ' Shelf', 'No', 'images/Item-27.jpg'),
(140, 'shelf', '', 12, ' ', '', 9000, 5, 18, 'Wood', 'Shelf', 'Selec', 'images/Item-7.jpg'),
(141, 'Grey chair', '', 103, ' ', '  ', 5400, 7, 18, 'Select Material', 'Chairs', 'Selec', 'images/Item-8.jpg'),
(142, 'Mattress', 'kurlon', 107, ' ', '5x4 ft', 8000, 7, 18, 'Others', 'Bedroom', 'No', 'images/Item-14.jpg'),
(143, 'Chair', '', 5, ' ', '', 12000, 3, 0, 'Wood', 'Chairs', 'Yes', 'images/Item-15.jpg'),
(145, 'sofaset', '', 103, ' ', '7ft', 35000, 2, 18, 'Plywood', 'Sofa', 'Yes', 'images/Item-23.jpg'),
(147, 'cofee table', '', 104, ' Wooden cofee table', '', 7900, 3, 18, 'Wood', ' Dining', 'No', 'images/Item-17.jpg'),
(148, 'Sofa & Chair', '', 109, 'Beautiful Sofa', '5ft', 27000, 2, 18, 'Wood', ' Sofa & Chair', 'Yes', 'images/Item-18.jpg'),
(150, 'bed table', '', 103, ' Luxury bed table', '2x3', 5500, 4, 18, 'Mdf', 'Bedroom', 'No', 'images/Item-20.jpg'),
(152, 'Dining table', '', 102, ' Wooden dining table', '', 22000, 2, 0, 'Wood', ' Dining', 'No', 'images/Item-24.jpg'),
(444, 'Dining set', '', 7, ' ', '', 35000, 8, 0, 'Wood', 'Dining', 'No', 'images/Item-5.jpg\r\n'),
(555, 'bed', '', 0, ' ', '', 13800, 6, 18, 'Wood', 'Bedroom', 'No', 'images/Item-9.jpg'),
(556, 'Cane chair', '', 103, ' Cane chair', '', 9000, 7, 18, 'Cane', 'Seats', 'No', 'images/Item-26.jpg'),
(778, 'sofa', '', 12, ' ', '', 40000, 5, 0, 'Plywood', 'Sofa', 'Yes', 'images/Item-28.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `purchase`
--

CREATE TABLE `purchase` (
  `purchaseid` int(10) NOT NULL,
  `pid` int(10) NOT NULL,
  `supplierid` int(10) NOT NULL,
  `purchasedate` date NOT NULL,
  `purchaseqty` int(10) NOT NULL,
  `purchaseamt` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `purchase`
--

INSERT INTO `purchase` (`purchaseid`, `pid`, `supplierid`, `purchasedate`, `purchaseqty`, `purchaseamt`) VALUES
(1, 0, 0, '0000-00-00', 0, 0),
(3, 104, 5, '2022-03-01', 25, 75000);

-- --------------------------------------------------------

--
-- Table structure for table `purchase_return`
--

CREATE TABLE `purchase_return` (
  `prid` int(10) NOT NULL,
  `prdate` date NOT NULL,
  `purchaseid` int(10) NOT NULL,
  `prqty` int(10) NOT NULL,
  `prdamage` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `purchase_return`
--

INSERT INTO `purchase_return` (`prid`, `prdate`, `purchaseid`, `prqty`, `prdamage`) VALUES
(1, '2022-03-08', 5, 2, 'broken');

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `sid` int(10) NOT NULL,
  `billid` int(10) NOT NULL,
  `sdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `salesreturn`
--

CREATE TABLE `salesreturn` (
  `srid` int(10) NOT NULL,
  `pid` int(10) NOT NULL,
  `phoneno` bigint(10) NOT NULL,
  `billid` int(10) NOT NULL,
  `srdate` date NOT NULL,
  `srqty` int(10) NOT NULL,
  `damage` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `salesreturn`
--

INSERT INTO `salesreturn` (`srid`, `pid`, `phoneno`, `billid`, `srdate`, `srqty`, `damage`) VALUES
(1, 141, 9400044146, 15, '2022-03-10', 1, 'parts loose');

-- --------------------------------------------------------

--
-- Table structure for table `statusdetails`
--

CREATE TABLE `statusdetails` (
  `statusid` int(10) NOT NULL,
  `sdate` date NOT NULL,
  `rqstatus` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `stock`
--

CREATE TABLE `stock` (
  `pid` int(10) NOT NULL,
  `stockqty` int(10) NOT NULL,
  `stockdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stock`
--

INSERT INTO `stock` (`pid`, `stockqty`, `stockdate`) VALUES
(101, 25, '0000-00-00'),
(5, 10, '0000-00-00'),
(5, 10, '0000-00-00'),
(5, 10, '2021-10-10'),
(141, 5, '2021-10-10');

-- --------------------------------------------------------

--
-- Table structure for table `supplerdetails`
--

CREATE TABLE `supplerdetails` (
  `supplierid` int(10) NOT NULL,
  `sname` varchar(30) NOT NULL,
  `saddress` text NOT NULL,
  `sphone` bigint(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `supplerdetails`
--

INSERT INTO `supplerdetails` (`supplierid`, `sname`, `saddress`, `sphone`) VALUES
(11, ' duroflex', '  ekm', 123456),
(15, ' don', ' rajakumari', 123),
(44, ' rahul', ' ', 0),
(55, ' supreme', ' abc', 123456),
(555, ' repose', ' ernakulam', 9496752231);

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `supplierid` int(10) NOT NULL,
  `pid` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`bid`);

--
-- Indexes for table `billdetails`
--
ALTER TABLE `billdetails`
  ADD PRIMARY KEY (`billid`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cartid`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`catid`);

--
-- Indexes for table `customer2`
--
ALTER TABLE `customer2`
  ADD PRIMARY KEY (`phoneno`);

--
-- Indexes for table `customize_order`
--
ALTER TABLE `customize_order`
  ADD PRIMARY KEY (`custorid`),
  ADD UNIQUE KEY `customid` (`customid`);

--
-- Indexes for table `custorder`
--
ALTER TABLE `custorder`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cutomize`
--
ALTER TABLE `cutomize`
  ADD PRIMARY KEY (`customid`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`img_id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`orid`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `purchase`
--
ALTER TABLE `purchase`
  ADD PRIMARY KEY (`purchaseid`);

--
-- Indexes for table `purchase_return`
--
ALTER TABLE `purchase_return`
  ADD PRIMARY KEY (`prid`);

--
-- Indexes for table `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`sid`);

--
-- Indexes for table `salesreturn`
--
ALTER TABLE `salesreturn`
  ADD PRIMARY KEY (`srid`);

--
-- Indexes for table `statusdetails`
--
ALTER TABLE `statusdetails`
  ADD PRIMARY KEY (`statusid`);

--
-- Indexes for table `supplerdetails`
--
ALTER TABLE `supplerdetails`
  ADD PRIMARY KEY (`supplierid`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`supplierid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `bid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `billdetails`
--
ALTER TABLE `billdetails`
  MODIFY `billid` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cartid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=132;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `catid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT for table `customize_order`
--
ALTER TABLE `customize_order`
  MODIFY `custorid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `custorder`
--
ALTER TABLE `custorder`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=109;

--
-- AUTO_INCREMENT for table `cutomize`
--
ALTER TABLE `cutomize`
  MODIFY `customid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `img_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `orid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `purchase`
--
ALTER TABLE `purchase`
  MODIFY `purchaseid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `purchase_return`
--
ALTER TABLE `purchase_return`
  MODIFY `prid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sales`
--
ALTER TABLE `sales`
  MODIFY `sid` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `salesreturn`
--
ALTER TABLE `salesreturn`
  MODIFY `srid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `statusdetails`
--
ALTER TABLE `statusdetails`
  MODIFY `statusid` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `supplier`
--
ALTER TABLE `supplier`
  MODIFY `supplierid` int(10) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
