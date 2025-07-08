-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 25, 2019 at 05:04 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7


SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: ecommerce
--

-- --------------------------------------------------------

--
-- Table structure for table products
--

CREATE TABLE products (
  id int(11) NOT NULL,
  name varchar(30) DEFAULT NULL,
  price int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table products
--

INSERT INTO products (id, name, price) VALUES
(1, 'Razer BlackShark V2 X USB Wired Esports Gaming Headset', 3499),
(2, 'Cosmic Byte Proteus Headset Dual Input USB and 3.5mm', 1999),
(3, 'boAt Rockerz 450 Pro Bluetooth On Ear Headphones', 1999),
(4, 'JBL Tune 510BT, On Ear Wireless Headphones', 1800),
(5, 'boAt Rockerz 450R On-Ear Headphones', 1499),
(6, 'Skullcandy Hesh ANC Bluetooth Wireless Over-Ear Headphones', 5999),
(7, 'Sony WH-CH520, Wireless On-Ear Bluetooth Headphones', 2999),
(8, 'Cosmic Byte GS430 Gaming wired over ear Headphonet', 699),
(9, 'Noise Newly Launched 4 Wireless Over-Ear Headphones', 2199),
(10, 'ZEBRONICS Duke Plus, Wireless Over Ear Headphone', 1999),
(11, 'soundcore Wireless Bluetooth Over-Ear Headphones', 3599),
(12, 'realme TechLife Studio H1 Over The Ear Headphone', 4499),
(13, 'Cosmic Byte Inferno 2.4Ghz Wireless Bluetooth Wired Headphone', 2999),
(14, 'Portronics Muffs M3 Over Ear Headphones with ANC Enabled, Upto 40 Hours Playtime', 999),
(15, 'ZEBRONICS Zeb-Blitz USB Gaming Wired On Ear Headphones', 1890),
(16, 'boAt Rockerz 425 Bluetooth Wireless Over Ear Headphones with Beast Mode for gaming', 1290),
(17, 'JBL Quantum 100 Wired Over Ear Gaming Headphones', 1499),
(18, 'SpinBot Ranger HX300 Wireless Bluetooth Over The Ear Headphones', 999),
(19, 'Sony WH-CH720N, Wireless Over-Ear Active Noise Cancellation Headphones', 5999),
(20,'Sony Active Noise Cancelling Wireless Headphones', 19999);

-- --------------------------------------------------------

--
-- Table structure for table users
--

CREATE TABLE users (
  id int(11) NOT NULL,
  email_id varchar(255) NOT NULL,
  first_name varchar(20) NOT NULL,
  last_name varchar(20) DEFAULT NULL,
  phone int(10) NOT NULL,
  registration_time timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  password varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table users
--

INSERT INTO users (id, email_id, first_name, last_name, phone, registration_time, password) VALUES
(65, 'nayeem18@gmail.com', 'reys', 'rudt', 0, '2019-03-18 13:46:33', 'e4f194cba29960e12d8b8f1bfedc972b'),
(66, 'revanthmarri71@gmail.com', 'werty', 'erty', 0, '2019-03-18 13:55:46', 'e10adc3949ba59abbe56e057f20f883e'),
(67, 'sivamani@gmail.com', 'Sham', 'das', 0, '2019-03-19 07:37:46', 'e10adc3949ba59abbe56e057f20f883e');

-- --------------------------------------------------------

--
-- Table structure for table users_products
--

CREATE TABLE users_products (
  id int(11) NOT NULL,
  user_id int(11) DEFAULT NULL,
  item_id int(11) DEFAULT NULL,
  status enum('Added To Cart','Confirmed') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table users_products
--

INSERT INTO users_products (id, user_id, item_id, status) VALUES
(11, 67, 6, 'Confirmed'),
(17, 67, 1, 'Confirmed'),
(18, 67, 5, 'Confirmed'),
(19, 67, 6, 'Confirmed'),
(20, 67, 1, 'Confirmed'),
(23, 67, 1, 'Confirmed'),
(24, 67, 2, 'Confirmed'),
(25, 67, 9, 'Confirmed');

--
-- Indexes for dumped tables
--

--
-- Indexes for table products
--
ALTER TABLE products
  ADD PRIMARY KEY (id);

--
-- Indexes for table users
--
ALTER TABLE users
  ADD PRIMARY KEY (id);

--
-- Indexes for table users_products
--
ALTER TABLE users_products
  ADD PRIMARY KEY (id),
  ADD KEY user_id (user_id),
  ADD KEY product_id (item_id);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table products
--
ALTER TABLE products
  MODIFY id int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table users
--
ALTER TABLE users
  MODIFY id int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT for table users_products
--
ALTER TABLE users_products
  MODIFY id int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- Constraints for dumped tables
--

--
-- Constraints for table users_products
--
ALTER TABLE users_products
  ADD CONSTRAINT users_products_ibfk_1 FOREIGN KEY (user_id) REFERENCES users (id),
  ADD CONSTRAINT users_products_ibfk_2 FOREIGN KEY (item_id) REFERENCES products (id);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;




-- Add a table for chatbot responses in the ecommerce database
SELECT * FROM `responses`
SHOW TABLES LIKE 'responses';
CREATE DATABASE ecommerce;
USE ecommerce;
CREATE TABLE responses (
    id INT AUTO_INCREMENT PRIMARY KEY,
    keyword VARCHAR(255) NOT NULL,
    response TEXT NOT NULL,
    timestamp TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);



-- Insert sample responses
INSERT INTO responses (keyword, response) VALUES
('hello', 'Hi! How can I help you with sound-related queries?'),
('help', 'Im here to assist with finding products, providing information, or answering sound-related questions.'),
('products', 'We offer a wide range of headphones, including wireless, gaming, and noise-canceling options.'),
('offers', 'Check out our latest offers on premium headphones in the Offers section.'),
('order', 'You can view your order history in the Orders section.'),
('cart', 'You can manage your cart by adding or removing items.'),
('support', 'Our support team is available 24/7 to assist you with any issues.');
