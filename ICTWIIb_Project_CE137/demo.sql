-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 23, 2021 at 11:54 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `demo`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `machinename` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `city` varchar(10) NOT NULL,
  `price` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `name`, `machinename`, `date`, `city`, `price`) VALUES
(1, 'Mr.Ajay Ganguly', 'filling machine', '2021-05-09', 'kolkata', '2500000'),
(2, 'Mr.ramesh savani', 'Pouch Machine', '2021-03-22', 'Surat', '500000'),
(3, 'Mr.bharat savani', 'Trunkey Project', '2019-11-20', 'Mumbai', '5000000'),
(4, 'Mr.Bali patel', 'Pouch Machine', '2021-04-20', 'Mumbai', '500000'),
(5, 'Mr.chaudhari', 'Trunkey Project', '2021-02-23', 'kolkata', '5000000'),
(6, 'Mr.Don', 'Shrink Wrapping Machine', '2021-02-23', 'Bengaluru', '500000'),
(7, 'Mr.Eizaj Nadeem', 'Milk Machine', '2021-01-20', 'Jharkhand', '300000'),
(8, 'Mr.Farah Khan', 'Soda Machine', '2021-03-17', 'Karnataka', '600000'),
(9, 'Mr.Amar Kali', 'Trunkey Project', '2021-03-16', 'Tamil Nadu', '5000000');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `post` varchar(20) NOT NULL,
  `date` date NOT NULL,
  `salary` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `name`, `post`, `date`, `salary`) VALUES
(1, 'Mr.prasant nakum', 'worker', '2018-03-07', 25000),
(2, 'Mr.ram', 'worker', '2018-04-18', 12500),
(3, 'Mr.Shyam Mathur', 'worker', '2021-01-18', 10000),
(4, 'Mr.Pradip', 'Manager', '2015-10-07', 35000),
(5, 'Mr.Naveen Goyenka', 'Manager', '2017-05-03', 35000),
(6, 'Mr.Vatsal Vasani', 'Director', '2012-05-03', 0);

-- --------------------------------------------------------

--
-- Table structure for table `equipmentstock`
--

CREATE TABLE `equipmentstock` (
  `id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `price` int(10) NOT NULL,
  `quantity` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `equipmentstock`
--

INSERT INTO `equipmentstock` (`id`, `name`, `date`, `price`, `quantity`) VALUES
(1, 'Blow Moulding Material', '2021-02-07', 100000, 2),
(2, 'Carbon Bags', '2021-05-02', 5000, 10),
(3, 'Membrane', '2021-03-08', 30000, 5),
(4, 'Pouch Machine Part', '2020-12-15', 100000, 2),
(5, 'Filling Machine Chain', '2021-01-20', 50000, 1),
(6, 'S.S. Trunkey', '2020-05-12', 100000, 3),
(7, 'Bloe Moulding Compressor', '2021-01-12', 60000, 2),
(8, 'Washing Chemical(5 ltr)', '2021-05-04', 1000, 5),
(9, 'Wrapping Machine Roll', '2021-01-05', 1000, 20),
(10, 'Pouch Row Material', '2020-12-08', 5000, 40),
(11, 'Plastic Bottle Row Material', '2020-08-11', 20000, 5),
(12, 'RO Plant Row Material', '2020-10-13', 50000, 2),
(13, 'Pouch Machine Row Material', '2021-03-22', 100000, 2),
(14, 'Nut Boults', '2020-12-15', 10, 50),
(15, 'Electric Material For filling Machine', '2021-03-24', 10000, 5),
(16, 'Electric Material Filling Material', '2021-04-13', 15000, 2);

-- --------------------------------------------------------

--
-- Table structure for table `itstudent`
--

CREATE TABLE `itstudent` (
  `id` int(10) NOT NULL,
  `name` text NOT NULL,
  `firstsessional` int(2) NOT NULL,
  `secondsessional` int(2) NOT NULL,
  `thirdsessional` int(2) NOT NULL,
  `external` int(2) NOT NULL,
  `attendance` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `itstudent`
--

INSERT INTO `itstudent` (`id`, `name`, `firstsessional`, `secondsessional`, `thirdsessional`, `external`, `attendance`) VALUES
(1, 'MARMIK LATHIYA', 30, 25, 35, 58, 90);

-- --------------------------------------------------------

--
-- Table structure for table `machinestock`
--

CREATE TABLE `machinestock` (
  `id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `quantity` int(100) NOT NULL,
  `price` int(10) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `machinestock`
--

INSERT INTO `machinestock` (`id`, `name`, `quantity`, `price`, `date`) VALUES
(1, 'Blow Moulding Machine', 2, 1000000, '2020-10-20'),
(2, 'R.O. Plant', 2, 500000, '2021-03-23'),
(3, 'Pouch Machine ', 5, 500000, '2021-05-03'),
(4, 'Filling Machine', 2, 2500000, '2021-04-27'),
(5, 'Shrink Wrapping Machine', 3, 500000, '2021-04-20'),
(6, 'Milk Machine', 2, 300000, '2021-01-05'),
(7, 'Soda Machine', 2, 600000, '2021-04-21'),
(8, 'Square Bottle Labeling Machine', 2, 100000, '2021-04-20'),
(9, 'Round Water Bottle Labeling Machine', 5, 100000, '2021-02-04');

-- --------------------------------------------------------

--
-- Table structure for table `myproducts`
--

CREATE TABLE `myproducts` (
  `id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `name` varchar(20) NOT NULL,
  `buydate` date NOT NULL,
  `firstservice` date NOT NULL,
  `secondservice` date NOT NULL,
  `customername` varchar(50) NOT NULL,
  `city` varchar(10) NOT NULL,
  `price` int(10) NOT NULL,
  `deliverydate` date NOT NULL,
  `productstatus` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `myproducts`
--

INSERT INTO `myproducts` (`id`, `user_id`, `name`, `buydate`, `firstservice`, `secondservice`, `customername`, `city`, `price`, `deliverydate`, `productstatus`) VALUES
(1, 1, 'Filling Machine', '2021-02-09', '2022-05-09', '2022-11-09', 'Mr.Ajay Ganguly', 'Kolkata', 2500000, '2021-06-25', 'Complete But Undelivered'),
(2, 2, 'Pouch Machine', '2021-03-22', '2022-05-09', '2022-11-09', 'Mr.Ramesh Savani', 'Suart', 500000, '2021-05-09', 'delivered'),
(3, 3, 'Trunkey Project', '2019-11-20', '2021-01-01', '2021-07-01', 'Mr.Bharat Vasani', 'Mumbai', 5000000, '2020-01-01', 'delivered'),
(4, 4, 'Pouch Machine', '2021-04-20', '2022-07-20', '2023-01-20', 'Mr.Bali Patel', 'Mumbai', 500000, '2021-07-20', 'undelivered'),
(5, 5, 'Trunkey Project', '2021-02-23', '2022-06-23', '2022-12-23', 'Mr.Chaudhari', 'kolkata', 5000000, '2021-08-23', 'undelivered'),
(6, 6, 'Shrink Wrapping Mach', '2021-02-23', '2022-08-23', '2023-02-23', 'Mr.Don', 'Bengaluru', 500000, '2021-08-23', 'undelivered'),
(7, 7, 'Milk Machine', '2021-01-20', '2022-04-20', '2022-10-20', 'Mr.Eijaz Nadeem', 'Jharkhand', 300000, '2021-04-20', 'delivered'),
(8, 8, 'Soda Machine', '2021-03-17', '2022-05-17', '2022-11-17', 'Mr.Farah Khan', 'Karnataka', 600000, '2021-05-22', 'delivered'),
(9, 9, 'Trunkey Project', '2021-03-16', '2022-09-25', '2023-03-25', 'Mr.Amar Kali', 'Tamil Nadu', 5000000, '2021-09-16', 'Complete But Undelivered');

-- --------------------------------------------------------

--
-- Table structure for table `peandingbill`
--

CREATE TABLE `peandingbill` (
  `id` int(10) NOT NULL,
  `companyname` varchar(50) NOT NULL,
  `equipment` varchar(50) NOT NULL,
  `amount` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `peandingbill`
--

INSERT INTO `peandingbill` (`id`, `companyname`, `equipment`, `amount`) VALUES
(1, 'shree hari machine tools', 'trunkey', 50000),
(2, 'Ashutosh Enterprise', 'S.S. Pipes', 10000),
(3, 'Hanuman Furniture', 'Boxes', 3000),
(4, 'Axar Machine Tool', 'Grill Machine', 2000),
(5, 'Bakim Enterprise', 'Pouch Machine Material', 100000),
(6, 'Chaudhary Techno Project', 'Filling Machine Material', 520000),
(7, 'Indian Ion Exchange', 'Soda Machine', 600000),
(8, 'Daman Enterprise', 'Machine Tools', 1000);

-- --------------------------------------------------------

--
-- Table structure for table `peandingorders`
--

CREATE TABLE `peandingorders` (
  `id` int(10) NOT NULL,
  `clientname` varchar(50) NOT NULL,
  `machinename` varchar(50) NOT NULL,
  `deliverydate` date NOT NULL,
  `city` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `peandingorders`
--

INSERT INTO `peandingorders` (`id`, `clientname`, `machinename`, `deliverydate`, `city`) VALUES
(1, 'Mr.Ajay ganguly', 'filling machine', '2021-06-17', 'kolkata'),
(2, 'Mr.Bali Patel', 'Pouch Machine', '2021-08-12', 'Mumbai'),
(3, 'Mr.Chaudhari', 'Trunkey Project', '2021-08-26', 'Kolkata'),
(4, 'Mr.Don', 'Shrink Wrapping Machine', '2021-08-13', 'Bengaluru'),
(5, 'Mr. Eizaz Nadeem', 'Milk Machine', '2021-08-17', 'Jharkhand'),
(6, 'Mrs.Farah khan', 'Soda Machine', '2021-06-23', 'Karnataka'),
(8, 'Mr,Amar Kali', 'Trunkey project', '2021-07-28', 'Tamil Nadu');

-- --------------------------------------------------------

--
-- Table structure for table `peandingpayment`
--

CREATE TABLE `peandingpayment` (
  `id` int(10) NOT NULL,
  `clientname` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `totalamount` int(10) NOT NULL,
  `peandingamount` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `peandingpayment`
--

INSERT INTO `peandingpayment` (`id`, `clientname`, `date`, `totalamount`, `peandingamount`) VALUES
(1, 'Mr.Ajay ganguly', '2021-05-09', 2500000, 1000000),
(2, 'Mr.Bali Patel', '2021-04-20', 500000, 200000),
(3, 'Mr.Chaudhari', '2021-02-23', 5000000, 2000000),
(4, 'Mr.Don', '2021-02-23', 500000, 200000),
(5, 'Mr. Eizaz Nadeem', '2021-01-20', 300000, 50000),
(6, 'Mrs.Farah khan', '2021-03-17', 600000, 100000),
(10, 'Mr.Amar Kali', '2021-03-16', 5000000, 1000000);

-- --------------------------------------------------------

--
-- Table structure for table `query`
--

CREATE TABLE `query` (
  `id` int(100) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `date` date NOT NULL,
  `machinename` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `query`
--

INSERT INTO `query` (`id`, `name`, `email`, `mobile`, `date`, `machinename`) VALUES
(2, 'vatsal', 'vatsalvasani22882@gmail.com', '9898593745', '2021-05-11', 'R.O.plant'),
(20, '', '', '', '0000-00-00', ''),
(21, '', '', '', '0000-00-00', ''),
(22, '', '', '', '0000-00-00', ''),
(23, '', '', '', '0000-00-00', '');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) NOT NULL,
  `role_name` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `role_name`) VALUES
(1, 'customer'),
(2, 'owner'),
(3, 'manager'),
(4, 'worker');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'ajay', 'cajay'),
(2, 'ramesh', 'cramesh'),
(3, 'bharat', 'cbharat'),
(4, 'bali', 'cbali'),
(5, 'chaudhari', 'cchaudhari'),
(6, 'don', 'cdon'),
(7, 'eizaj', 'ceizaj'),
(8, 'farah', 'cfarah'),
(9, 'amar', 'camar'),
(10, 'vatsal', 'ovatsal'),
(11, 'pradeep', 'mpradeep'),
(12, 'naveen', 'mnaveen'),
(13, 'prashant', 'wprashant'),
(14, 'ram', 'wram'),
(15, 'shyam', 'wshyam');

-- --------------------------------------------------------

--
-- Table structure for table `user_in_roles`
--

CREATE TABLE `user_in_roles` (
  `id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `role_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_in_roles`
--

INSERT INTO `user_in_roles` (`id`, `user_id`, `role_id`) VALUES
(1, 1, 1),
(2, 2, 1),
(3, 3, 1),
(4, 4, 1),
(5, 5, 1),
(6, 6, 1),
(7, 7, 1),
(8, 8, 1),
(9, 9, 1),
(10, 10, 2),
(11, 11, 3),
(12, 12, 3),
(13, 13, 4),
(14, 14, 4),
(15, 15, 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `equipmentstock`
--
ALTER TABLE `equipmentstock`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `itstudent`
--
ALTER TABLE `itstudent`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `machinestock`
--
ALTER TABLE `machinestock`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `myproducts`
--
ALTER TABLE `myproducts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `peandingbill`
--
ALTER TABLE `peandingbill`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `peandingorders`
--
ALTER TABLE `peandingorders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `peandingpayment`
--
ALTER TABLE `peandingpayment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `query`
--
ALTER TABLE `query`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_in_roles`
--
ALTER TABLE `user_in_roles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_in_roles_ibfk_1` (`role_id`),
  ADD KEY `user_id` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `equipmentstock`
--
ALTER TABLE `equipmentstock`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `itstudent`
--
ALTER TABLE `itstudent`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `machinestock`
--
ALTER TABLE `machinestock`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `myproducts`
--
ALTER TABLE `myproducts`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `peandingbill`
--
ALTER TABLE `peandingbill`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `peandingorders`
--
ALTER TABLE `peandingorders`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `peandingpayment`
--
ALTER TABLE `peandingpayment`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `query`
--
ALTER TABLE `query`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `user_in_roles`
--
ALTER TABLE `user_in_roles`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `myproducts`
--
ALTER TABLE `myproducts`
  ADD CONSTRAINT `myproducts_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `user_in_roles`
--
ALTER TABLE `user_in_roles`
  ADD CONSTRAINT `user_in_roles_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
