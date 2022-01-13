-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 13, 2022 at 06:41 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `category_ID` int(11) NOT NULL,
  `category_Name` varchar(50) DEFAULT NULL,
  `category_Type` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`category_ID`, `category_Name`, `category_Type`) VALUES
(1, 'Running', 'B'),
(2, 'Walking', 'F'),
(3, 'HIking', 'V'),
(4, 'Track and Trail', 'L'),
(5, 'Short Sleave', 'S'),
(6, 'Long Sleave', 'X'),
(7, 'asus', 'laptop');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `customer_ID` int(11) NOT NULL,
  `First_Name` varchar(30) NOT NULL,
  `Last_Name` varchar(30) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `address` varchar(20) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `city` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customer_ID`, `First_Name`, `Last_Name`, `phone`, `address`, `email`, `city`) VALUES
(101, 'Schmitt', 'Carine', '+49 69 66 90 2555', '54, rue Royale', 'scmitt@gmail.com', 'Las Vegas'),
(102, 'Ferguson', 'Peter', '+49 66 66 4353', '636 Kilda Road', 'ferguson@gmail.com', 'Melbourne'),
(103, 'Labrune', 'Labrune', '+42 12 55 5741', '67,Cinquante Otages', 'labrune@gmail.com', 'Nantes'),
(104, 'Nelson', 'Susan', '+49 41 55 1450', '677 Strong St', 'nelson@gmail.com', 'San Rafael'),
(105, 'Keitel', 'Roland', '+49 54 43 3256', 'Lyonerstr. 34', 'keitel@gmail.com', 'Frankfurt'),
(106, 'Murphy', 'Julie', '+65 05 55 5787', 'North Pendale Street', 'murphy@gmail.com', 'San Francisco'),
(107, 'Lee', 'Kwai', '+21 25 55 7818', '897 Airport Avenue', 'lee@gmail.com', 'Las Vegas'),
(108, 'Freyre', 'Diego', '+91 55 59 4544', 'C/ Moralzarzal, 86', 'freyre@gmail.com', 'Madrid'),
(109, 'Berglund', 'Christina', '09 21 12 3555', 'Berguvsvägen  8', 'berglund@gmail.com', 'Luleå'),
(110, 'Petersen', 'Jytte', '+65 22 17 7555', 'Bronz Sok', 'petersen@gmail.com', 'Kobenhavn'),
(114, 'A', 'B', '123', 'foo', 'a@gmail', 'Nand');

-- --------------------------------------------------------

--
-- Table structure for table `deliveries`
--

CREATE TABLE `deliveries` (
  `delivery_ID` int(11) NOT NULL,
  `order_ID` int(11) DEFAULT NULL,
  `Shipper_Name` varchar(250) DEFAULT NULL,
  `delivery_Date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `deliveries`
--

INSERT INTO `deliveries` (`delivery_ID`, `order_ID`, `Shipper_Name`, `delivery_Date`) VALUES
(1, 10248, 'Speedy Express', '1990-07-12'),
(2, 10252, 'United Package', '1990-08-22'),
(3, 10255, 'Federal Shipping', '1990-12-04');

-- --------------------------------------------------------

--
-- Table structure for table `orderdetails`
--

CREATE TABLE `orderdetails` (
  `Order_ID` int(11) NOT NULL,
  `customer_ID` int(11) DEFAULT NULL,
  `ProductID` int(11) DEFAULT NULL,
  `ProductName` varchar(100) DEFAULT NULL,
  `Order_Date` date DEFAULT NULL,
  `Price` float DEFAULT NULL,
  `Quantity` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orderdetails`
--

INSERT INTO `orderdetails` (`Order_ID`, `customer_ID`, `ProductID`, `ProductName`, `Order_Date`, `Price`, `Quantity`) VALUES
(10248, 106, 5, 'abc', '1996-07-04', 3847, 54),
(10249, 103, 5, 'Chang', '1996-05-04', 7484, 43),
(10250, 101, 6, 'Chais', '1996-06-05', 453, 4),
(10251, 109, 4, 'Aniseed Syrup', '1996-07-23', 4354, 45),
(10252, 104, 3, 'Chef Anton', '1996-08-12', 3235, 35),
(10253, 106, 4, 'Boysenberry', '1996-09-03', 453, 7),
(10254, 108, 4, 'Northwoods', '1996-10-15', 3675, 65),
(10255, 103, 5, 'Ikura', '1996-11-24', 2356, 78),
(10256, 102, 9, 'Konbu', '1996-12-14', 3683, 44);

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `payment_ID` int(11) NOT NULL,
  `customer_ID` int(11) DEFAULT NULL,
  `amount` decimal(50,0) DEFAULT NULL,
  `payment_Date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`payment_ID`, `customer_ID`, `amount`, `payment_Date`) VALUES
(1001, 103, '2000', '1998-05-18'),
(1002, 109, '2300', '1998-06-06'),
(1003, 106, '5600', '1998-07-02'),
(1004, 110, '2800', '1998-08-15'),
(1005, 105, '3800', '1998-09-18'),
(1006, 107, '4350', '1998-10-23'),
(1007, 103, '3560', '1998-11-14'),
(1008, 101, '6500', '1998-12-27'),
(1009, 108, '1340', '1999-01-12'),
(1010, 102, '1000', '1999-02-11'),
(1011, 101, '4000', '1999-03-17'),
(1012, 105, '3400', '1999-04-14'),
(1013, 109, '1200', '1999-05-28'),
(1014, 102, '2300', '1999-06-22'),
(1015, 105, '7000', '1999-07-18');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_ID` int(11) NOT NULL,
  `product_Name` varchar(30) NOT NULL,
  `product_Price` decimal(10,2) DEFAULT NULL,
  `product_Desc` varchar(250) DEFAULT NULL,
  `category_ID` int(11) DEFAULT NULL,
  `supplier_ID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_ID`, `product_Name`, `product_Price`, `product_Desc`, `category_ID`, `supplier_ID`) VALUES
(1, 'Cotton T-Shirt', '9.99', 'Light Cotton T-Shirt', 5, 10),
(2, 'Casual shoe', '179.99', 'A rugged track and trail athletic shoe', 4, 3),
(3, 'Chang', '18.00', 'Jeans pant', 1, 1),
(4, 'Chais', '19.00', 'Shirt', 1, 6),
(5, 'Chais', '10.00', 'Light Cotton T-Shirt', 2, 2),
(6, 'Aniseed', '22.00', 'sports shoe', 3, 7),
(7, 'Boysenberry', '21.35', 'baby dress', 5, 9),
(8, 'Cajun', '25.00', 'lorem ispum', 7, 4),
(9, 'Organic', '30.00', 'Light Cotton T-Shirt', 9, 1),
(10, 'Sauce', '21.00', 'bath soap', 5, 3);

-- --------------------------------------------------------

--
-- Table structure for table `suppliers`
--

CREATE TABLE `suppliers` (
  `supplier_ID` int(11) NOT NULL,
  `Supplier_Name` varchar(150) DEFAULT NULL,
  `Address` varchar(150) DEFAULT NULL,
  `Phone` varchar(50) DEFAULT NULL,
  `product_ID` int(11) DEFAULT NULL,
  `Email` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `suppliers`
--

INSERT INTO `suppliers` (`supplier_ID`, `Supplier_Name`, `Address`, `Phone`, `product_ID`, `Email`) VALUES
(1, 'Exotic Liquid', '49 Gilbert St.', '9873957 ', 3, 'example@gmail.com'),
(2, 'Cajun Delights ', 'P.O. Box 78934', '9873957', 4, 'example@gmail.com'),
(3, 'Tokyo Traders ', '707 Oxford Rd.', '9873957', 2, 'example@gmail.com'),
(4, 'Pavlova, Ltd.', 'Calle del Rosal 4', '9873957', 8, 'example@gmail.com'),
(5, 'Americanas LTDA', '92 Setsuko Chuo-ku', '9873957', 2, 'example@gmail.com'),
(6, 'Norske Meierier', '29 Kings Way', '9873957', 4, 'example@gmail.com'),
(7, 'Bigfoot Breweries', 'Kaloadagatan 13 ', '9873957', 6, 'example@gmail.com'),
(8, 'Leka Trading', 'Bogenallee 51', '9873957', 8, 'example@gmail.com'),
(9, 'Pasta Buttini s.r.l.', 'Frahmredder 112a', '9873957', 7, 'example@gmail.com'),
(10, 'Ma Maison', 'Viale Dante, 75', '9873957', 1, 'example@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_ID`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customer_ID`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `deliveries`
--
ALTER TABLE `deliveries`
  ADD PRIMARY KEY (`delivery_ID`),
  ADD KEY `order_ID` (`order_ID`);

--
-- Indexes for table `orderdetails`
--
ALTER TABLE `orderdetails`
  ADD PRIMARY KEY (`Order_ID`),
  ADD KEY `customer_ID` (`customer_ID`),
  ADD KEY `ProductID` (`ProductID`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`payment_ID`),
  ADD KEY `customer_ID` (`customer_ID`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_ID`),
  ADD KEY `category_ID` (`category_ID`),
  ADD KEY `supplier_ID` (`supplier_ID`);

--
-- Indexes for table `suppliers`
--
ALTER TABLE `suppliers`
  ADD PRIMARY KEY (`supplier_ID`),
  ADD KEY `product_ID` (`product_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `category_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `customer_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=115;

--
-- AUTO_INCREMENT for table `deliveries`
--
ALTER TABLE `deliveries`
  MODIFY `delivery_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `orderdetails`
--
ALTER TABLE `orderdetails`
  MODIFY `Order_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10259;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `payment_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1017;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `suppliers`
--
ALTER TABLE `suppliers`
  MODIFY `supplier_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `deliveries`
--
ALTER TABLE `deliveries`
  ADD CONSTRAINT `deliveries_ibfk_1` FOREIGN KEY (`order_ID`) REFERENCES `orderdetails` (`Order_ID`);

--
-- Constraints for table `payment`
--
ALTER TABLE `payment`
  ADD CONSTRAINT `payment_ibfk_1` FOREIGN KEY (`customer_ID`) REFERENCES `customers` (`customer_ID`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`category_ID`) REFERENCES `categories` (`category_ID`),
  ADD CONSTRAINT `products_ibfk_2` FOREIGN KEY (`supplier_ID`) REFERENCES `suppliers` (`supplier_ID`);

--
-- Constraints for table `suppliers`
--
ALTER TABLE `suppliers`
  ADD CONSTRAINT `suppliers_ibfk_1` FOREIGN KEY (`product_ID`) REFERENCES `products` (`product_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
