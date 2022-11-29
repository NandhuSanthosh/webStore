-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 28, 2022 at 09:42 AM
-- Server version: 5.6.14
-- PHP Version: 5.5.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `webstore`
--

-- --------------------------------------------------------

--
-- Table structure for table `addtocart`
--

CREATE TABLE IF NOT EXISTS `addtocart` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Pid` int(11) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Price` int(11) NOT NULL,
  `Status` varchar(100) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `addtocart`
--

INSERT INTO `addtocart` (`Id`, `Pid`, `Email`, `Price`, `Status`) VALUES
(2, 9, 'shijo@gmail.com', 470, 'Paid'),
(3, 11, 'shijo@gmail.com', 160, 'Paid'),
(4, 13, 'shijo@gmail.com', 220, 'Paid'),
(5, 4, 'shijo@gmail.com', 1000, 'Paid');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE IF NOT EXISTS `cart` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Itemid` varchar(500) NOT NULL,
  `User` varchar(500) NOT NULL,
  `Status` varchar(500) NOT NULL,
  `Quantity` varchar(500) NOT NULL,
  `Price` varchar(500) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`Id`, `Itemid`, `User`, `Status`, `Quantity`, `Price`) VALUES
(2, '14', 'sidhu@gmail.com', 'Pending', '1', '95');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Category` varchar(100) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`Id`, `Category`) VALUES
(6, 'Pen'),
(7, 'Toys'),
(8, 'Shoes'),
(9, 'Hat'),
(10, 'Bag'),
(11, 'Bottle'),
(12, 'Grocery'),
(14, 'Books');

-- --------------------------------------------------------

--
-- Table structure for table `complaint`
--

CREATE TABLE IF NOT EXISTS `complaint` (
  `Id` int(10) NOT NULL AUTO_INCREMENT,
  `Shop` varchar(500) NOT NULL,
  `User_id` varchar(100) NOT NULL,
  `Complaint` varchar(100) NOT NULL,
  `Image` varchar(100) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `complaint`
--

INSERT INTO `complaint` (`Id`, `Shop`, `User_id`, `Complaint`, `Image`) VALUES
(7, '2', 'evaan@gmail.com', 'test', 'uploads/Koala.jpg'),
(8, '3', 'evaan@gmail.com', 'Bad', 'uploads/Desert.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `district`
--

CREATE TABLE IF NOT EXISTS `district` (
  `Id` int(10) NOT NULL AUTO_INCREMENT,
  `District` varchar(100) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `district`
--

INSERT INTO `district` (`Id`, `District`) VALUES
(1, 'Trivandrum'),
(2, 'Kollam'),
(3, 'Pathanamthitta'),
(4, 'Alappuzha'),
(5, 'Kottayam'),
(6, 'Idukki'),
(7, 'Ernakulam'),
(8, 'Thrissur'),
(9, 'Palakkkad'),
(10, 'Wayanad'),
(11, 'Malappuram'),
(12, 'Kozhikode'),
(13, 'Kannur'),
(14, 'Kasargod');

-- --------------------------------------------------------

--
-- Table structure for table `fieldofficer`
--

CREATE TABLE IF NOT EXISTS `fieldofficer` (
  `Id` int(10) NOT NULL AUTO_INCREMENT,
  `District` int(10) NOT NULL,
  `Station` varchar(100) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `Phone` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  PRIMARY KEY (`Id`),
  KEY `District` (`District`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `fieldofficer`
--

INSERT INTO `fieldofficer` (`Id`, `District`, `Station`, `Address`, `Phone`, `Email`, `Password`) VALUES
(2, 3, 'Shijo', 'Shijo villa', '9878766789', 'shijo@gmail.com', 'shijo'),
(3, 1, 'Amal', 'Palackal', '8569854757', 'amal@gmail.com', '1234amal');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE IF NOT EXISTS `items` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Category` varchar(100) NOT NULL,
  `Shop` text NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Details` text NOT NULL,
  `Price` varchar(100) NOT NULL,
  `Quantity` varchar(500) NOT NULL,
  `Image` varchar(100) NOT NULL,
  `Type` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=27 ;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`Id`, `Category`, `Shop`, `Name`, `Details`, `Price`, `Quantity`, `Image`, `Type`, `Email`) VALUES
(1, 'Toys', '2', 'Barbie pink', '', '575.00', '100', 'uploads/a1.jpg', 'admin', 'NA'),
(2, 'Toys', '2', 'Key Toys', '', '600.00', '100', 'uploads/a3.jpg', 'admin', 'NA'),
(3, 'Toys', '2', 'Play Toys', '', '800.00', '100', 'uploads/a2.jpg', 'admin', 'NA'),
(4, 'Toys', '2', 'pink bear', '', '1000.00', '', 'uploads/a5.jpg', 'admin', 'NA'),
(5, 'Pen', '2', 'Pen Camera', '', '5000', '100', 'uploads/p1.jpg', 'admin', 'NA'),
(6, 'Pen', '2', 'Sheaffer Sentinel 321 Blue Ball', '', '55', '100', 'uploads/p2.jpg', 'admin', 'NA'),
(7, 'Bag', '2', 'Cosmus Atomic', '', '560', '100', 'uploads/b1.jpg', 'admin', 'NA'),
(8, 'Bag', '2', 'MEC Duffle Bag', '', '780', '100', 'uploads/b2.jpg', 'admin', 'NA'),
(9, 'Bag', '2', 'Mickey Mouse School Bag', '', '470', '100', 'uploads/b3.jpg', 'admin', 'NA'),
(10, 'Hat', '2', 'Straw Hat', '', '150', '100', 'uploads/h1.jpg', 'admin', 'NA'),
(11, 'Hat', '2', 'Navid Black Hat', '', '160', '100', 'uploads/h2.jpg', 'admin', 'NA'),
(12, 'Hat', '2', 'Baby Sun Hat', '', '120', '150', 'uploads/h3.jpg', 'admin', 'NA'),
(13, 'Hat', '2', 'Cowboy hat', '', '220', '100', 'uploads/h4.jpg', 'admin', 'NA'),
(14, 'Bottle', '2', 'Crown Bottle', '', '95', '100', 'uploads/Jellyfish.jpg', 'admin', 'NA'),
(15, 'Hat', '3', 'Cowboy hat', '', '200', '100', 'uploads/Hydrangeas.jpg', 'admin', 'NA'),
(16, 'Hat', '3', 'Baby Sun Hat', '', '120', '100', 'uploads/Jellyfish.jpg', 'admin', 'NA'),
(17, 'Bag', '4', 'Mickey Mouse School Bag', '', '450', '100', 'uploads/Desert.jpg', 'admin', 'NA'),
(18, 'Grocery', '4', 'Nirapara Rice', 'Nirapara Rice with 10 Kg', '400', '100', 'uploads/Lighthouse.jpg', 'admin', 'NA'),
(19, 'Grocery', '4', 'Pavizham Rice', 'Pavizham Rice with 10 Kg', '380', '100', 'uploads/Desert.jpg', 'admin', 'NA'),
(20, 'Grocery', '5', 'Nirapara Rice', 'Nirapara Rice 10 Kg', '390', '100', 'uploads/Jellyfish.jpg', 'admin', 'NA'),
(21, 'Grocery', '6', 'Nirapara Rice', 'Nirapara Rice 10 Kg', '385', '100', 'uploads/Chrysanthemum.jpg', 'admin', 'NA'),
(22, 'Grocery', '6', 'Pavizham Rice', 'Pavizham Rice 10 Kg', '395', '100', 'uploads/Lighthouse.jpg', 'admin', 'NA'),
(23, 'Grocery', '4', 'Kadala Paripp', 'Kadala Paripp 500g', '50', '100', 'uploads/Desert.jpg', 'admin', 'NA'),
(24, 'Grocery', '6', 'Kadala Paripp', 'Kadala Paripp 500g', '45', '100', 'uploads/Hydrangeas.jpg', 'admin', 'NA'),
(25, 'Grocery', '4', 'Mustard', 'Mustard 100 g', '15', '100', 'uploads/Penguins.jpg', 'admin', 'NA'),
(26, 'Books', '7', 'Arachar', 'Noval from KR Meera', '350', '10', 'uploads/Screenshot (58).png', 'admin', 'NA');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Username` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `Usertype` varchar(100) NOT NULL,
  `Status` varchar(500) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`Id`, `Username`, `Password`, `Usertype`, `Status`) VALUES
(1, 'admin', 'admin', 'admin', ''),
(3, 'shijo@gmail.com', 'shijo', 'field officer', ''),
(7, 'evaan@gmail.com', 'evaan', 'User', 'Active'),
(8, 'st@gmail.com', 'st', 'User', 'Active'),
(9, 'sidhu@gmail.com', '1234sidhu', 'User', 'Active'),
(10, 'amal@gmail.com', '1234amal', 'field officer', '');

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE IF NOT EXISTS `order_items` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Category` varchar(500) NOT NULL,
  `Items` longtext NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `order_items`
--

INSERT INTO `order_items` (`Id`, `Category`, `Items`) VALUES
(1, 'Hat', 'Baby Sun Hat,Cowboy hat'),
(2, 'Hat', 'Baby Sun Hat,Cowboy hat'),
(3, 'Hat', 'Baby Sun Hat,Cowboy hat'),
(4, 'Hat', 'Baby Sun Hat,Cowboy hat'),
(5, 'Hat', 'Baby Sun Hat,Cowboy hat'),
(6, 'Grocery', 'Nirapara Rice,Pavizham Rice'),
(7, 'Grocery', 'Nirapara Rice,Pavizham Rice'),
(8, 'Grocery', 'Nirapara Rice,Pavizham Rice'),
(9, 'Grocery', 'Nirapara Rice,Pavizham Rice,Kadala Paripp,Mustard'),
(10, 'Grocery', 'Nirapara Rice,Pavizham Rice,Kadala Paripp,Mustard'),
(11, 'Grocery', 'Nirapara Rice,Pavizham Rice,Kadala Paripp,Mustard'),
(12, 'Grocery', 'Nirapara Rice,Pavizham Rice,Kadala Paripp'),
(13, 'Grocery', 'Nirapara Rice,Pavizham Rice'),
(14, '', ''),
(15, 'Grocery', 'Nirapara Rice,Pavizham Rice'),
(16, 'Grocery', 'Nirapara Rice,Pavizham Rice'),
(17, 'Grocery', 'Nirapara Rice,Pavizham Rice'),
(18, 'Grocery', 'Nirapara Rice,Pavizham Rice'),
(19, 'Grocery', 'Nirapara Rice,Pavizham Rice'),
(20, 'Toys', 'pink bear'),
(21, 'Bag', 'Mickey Mouse School Bag'),
(22, 'Bottle', 'Crown Bottle');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE IF NOT EXISTS `payment` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Uid` varchar(100) NOT NULL,
  `Price` varchar(100) NOT NULL,
  `Quatity` varchar(100) NOT NULL,
  `Total` varchar(500) NOT NULL,
  `cardname` varchar(100) NOT NULL,
  `Cardno` varchar(100) NOT NULL,
  `Cvv` varchar(100) NOT NULL,
  `Expirydate` text NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`Id`, `Uid`, `Price`, `Quatity`, `Total`, `cardname`, `Cardno`, `Cvv`, `Expirydate`) VALUES
(11, 'evaan@gmail.com', '950', 'nil', 'nil', 'Evaan', '9789789787686786', '5667', '12/36'),
(12, 'sidhu@gmail.com', '2000', 'nil', 'nil', 'Sidharth', '895889558', '478', '5487');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE IF NOT EXISTS `registration` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(100) NOT NULL,
  `Address` text NOT NULL,
  `Pin` varchar(500) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Mobile` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `District` varchar(100) NOT NULL,
  `Status` varchar(500) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`Id`, `Name`, `Address`, `Pin`, `Email`, `Mobile`, `Password`, `District`, `Status`) VALUES
(1, 'shijo', 'shijo villa', '689691', 'shijo@gmail.com', '987678987', 'shijo', 'Pathanamthitta', 'Inactive'),
(2, 'Evaan', 'Evaan villa', '689691', 'evaan@gmail.com', '9876765433', 'evaan', '3', 'Active'),
(3, 'Steephan', 'Steephan villa', '689692', 'st@gmail.com', '9876765433', 'st', '3', 'Active'),
(4, 'Sidharth', '12th street', '689667', 'sidhu@gmail.com', '8989569856', '1234sidhu', '5', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `shop`
--

CREATE TABLE IF NOT EXISTS `shop` (
  `Id` int(10) NOT NULL AUTO_INCREMENT,
  `District` int(10) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `Pin` varchar(500) NOT NULL,
  `Phone` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Image` varchar(500) NOT NULL,
  PRIMARY KEY (`Id`),
  KEY `District` (`District`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `shop`
--

INSERT INTO `shop` (`Id`, `District`, `Name`, `Address`, `Pin`, `Phone`, `Email`, `Image`) VALUES
(2, 3, 'Fuel', 'Fuel Konni', '689691', '9878766789', 'fuel@gmail.com', 'shop/Chrysanthemum.jpg'),
(3, 3, 'Payyans', 'Payyans Konni', '689691', '7567886655', 'p@gmail.com', 'shop/Hydrangeas.jpg'),
(4, 3, 'Kerala Storces', 'Kerala Storces Konni', '689692', '8787876787', 'k@gmail.com', 'shop/Koala.jpg'),
(5, 3, 'AR', 'AR, Konni Town', '689692', '9878766789', 'ar@gmail.com', 'shop/Hydrangeas.jpg'),
(6, 3, 'Asi', 'Asi konni', '689692', '9878766789', 'asi@gmail.com', 'shop/Koala.jpg'),
(7, 1, 'Prakash Book store', '3rd street, Tvm', '895698', '8956985478', 'prakash@gmail.com', 'shop/Screenshot (1).png');

-- --------------------------------------------------------

--
-- Table structure for table `testimony`
--

CREATE TABLE IF NOT EXISTS `testimony` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Msg` text NOT NULL,
  `Image` varchar(100) NOT NULL,
  `Status` varchar(100) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `testimony`
--

INSERT INTO `testimony` (`Id`, `Name`, `Email`, `Msg`, `Image`, `Status`) VALUES
(5, 'shijo', 'shijo@gmail.com', 'At The Web Store, it is our goal to make your  shopping expeariance as enjoyable as possible. We are always super happy when we receive positive feedback, and we are constantly amazed by the demand for our shop with orders coming from all corners of the globe. Whether its a small designer in Slovakia, who needs merino jersey for their winter collection.', 'testimony/t1.jpg', 'Active'),
(6, 'shijo', 'shijo@gmail.com', 'Thank you for everything, it is always a pleasure to hear from you and I have to say, having been a truly captive audience browsing so many consignment shops online I can see unequivocally that your business is by far the most well organized, well curated, well stocked, descriptive and fairly priced that Iâ€™ve ever seen. The site is incredibly user friendly, incredibly straightforward.', 'testimony/t2.jpg', 'Active'),
(7, 'shijo', 'shijo@gmail.com', 'At The Web Store, it is our goal to make your  shopping expeariance as enjoyable as possible. We are always super happy when we receive positive feedback, and we are constantly amazed by the demand for our shop with orders coming from all corners of the globe. Whether its a small designer in Slovakia, who needs merino jersey for their winter collection.', 'testimony/t3.jpg', 'Active');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
