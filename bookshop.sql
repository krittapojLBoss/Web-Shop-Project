-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 08, 2021 at 06:58 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bookshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `ID_Customer` bigint(20) UNSIGNED NOT NULL,
  `FirstName` varchar(100) NOT NULL,
  `LastName` varchar(100) NOT NULL,
  `NumberPhone` varchar(10) NOT NULL,
  `Username` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `Id_book` bigint(20) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Type` int(11) NOT NULL,
  `Path` varchar(100) NOT NULL,
  `Comment` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`Id_book`, `Name`, `Type`, `Path`, `Comment`) VALUES
(1, 'Dear my flower', 2, 'img\\Book4-4.png', 'เป็นความรักของดิวที่ได้พบเจอกับสายน้ำที่ได้เข้ามาซื้อดอกไม้ในร้านที่ตัวเองเป็นเจ้าของอยู่และทั้งคู่ก็ได้ทำความรู้จักกันเพราะสายน้ำก็เป็นคนชอบเรื่องของดอกไม้และจากความที่ชอบแค่ดอกไม้กับเปลี่ยนแปลงไปชอบกับเจ้าของขายร้านดอกไม้ด้วยเลยเกิดเรื่องราวการจีบแบบคนชิคๆเกิดขึ้นมา'),
(2, 'Inspired me', 2, 'img\\Book5-5.png', 'เป็นเรื่องราวของเด็กมัธยมปลายที่ไม่เอาไหนอย่างสี่หรือใครๆก็เรียกกันว่าเฮียสี่ผู้เป็นพี่ชายคนที่สี่ของบ้าน โยธินตระกูล ที่วันเอาแต่เล่นเกมจนครอบครัวทนไม่ไหวเลยได้จ้างโลมาผู้เป็นเด็กเรียนดีที่สุดมาสอนและทั้งคู่ก็ได้ทำความรู้จักกันซึ่งตอนแรกๆเฮียสี่บอกได้เลยคำเดียวว่ารําคาญมากแต่พอได้อยู่ด้วยกันไปเรื่อยๆก็เกิดความรู้สึกดีขึ้นมาและได้ทำการขอโลมาเป็นแฟนแต่โลมากับปฏิเสธและบอกกับเฮียสี่ว่าถ้าอยากเป็นแฟนกันเทอมนี้ห้ามตกวิชาอะไรเลยสักวิชาและจะยอมเป็นแฟนด้วย'),
(3, 'Story', 2, 'img\\Book6-6.png', 'เป็นเรื่องราวที่เคนตะนั้นได้หลงรักรุ่นน้องในสาขาของตัวเองและได้ทำการตื้ดเป็นอย่างหนักแต่ไม่ว่าจะทำแบบไหนรุ่นน้องอย่างดงฮันก็ไม่สนใจเลยสักนิดเอาแต่หนีหน้าจนเคนตะรู้สึกผิดหวังมากๆเลยเกิดคิดจะเลิกชอบแต่สุดท้ายก็เกิดเหตุการณ์ที่ทำให้ทั้ง 2 คนต้องมาอยู่ห้องเดียวกันด้วยความที่ได้ไปทำกิจกรรมรับน้องด้วยกันและต้องมีบัดดี้เป็นพี่ปี 2 และดงฮันจับได้เคนตะ เลยทำให้คราวนี้จากจะเลิกชอบเลิกรักเป็นรักมากขึ้นชอบมากขึ้นไปอีกๆ '),
(4, ' summer ฤดูร้อนที่ไม่มีเธอ ณ เจแปน', 1, 'img\\Book1-1.png\r\n', 'เป็นเรื่องราวของนทีที่ได้เดินทางไปที่ประเทศญี่ปุ่นคนเดียวหลังจากเลิกกับแฟนที่คบกันมานานถึง 5 ปีเต็ม โดยเรื่องราวจะเล่าไปเรื่อยๆที่นทีได้อยู่ที่นั้นพร้อมกับตัดสลับกับเรื่องราวในอดีตของตัวเองและแฟนว่าได้พูดคุยกันไปว่าจะไปที่ไหนบางในญี่ปุ่นตอนช่วงของฤดูร้อนที่นั้น'),
(5, 'Never forget ไม่เคยลืม', 1, 'img\\Book2-2.png\r\n', 'คนที่อยู่ดีๆแฟนก็ลืมตัวเองไปนี้ต้องรู้สึกแบบไหนนะแบบเจ็บลึกๆหรือแบบเจ็บจนอยากจะตาย วาฬบุคคลที่โดนแฟนลืม ใช่ พวกคุณอ่านกันไม่ผิดหรอก ผมนาย วาฬ ผู้ที่โดนแฟนที่คบกันมานานลืมชื่อลืมหน้าลืมไปหมดซะทุกอย่างว่าเราเคยเป็นแฟนกัน ไหนบอกจะไม่ลืมกันไง ไหนบอกถ้าถึงวันนั้นอย่างไงก็จะจำกันได้ แล้วทำไมพอลืมตาขึ้นมาถึงลืมกันล่ะ ไหนบอกจะมานั่งดูพระอาทิตย์ตกด้วยกันที่นี้ไง ทำไมไม่เห็นทำตามที่บอกเลย ทำไมกันนะ ไหนบอกจะไม่ลืมกัน'),
(6, 'นาซ่าก็ก็พาเธอกลับมาไม่ได้', 1, 'img\\Book3-3.png\r\n', 'สำหรับหนังสือ นาซ่าก็พาเธอกลับมาไม่ได้ เล่มนี้ ก็จะรวบรวมเขียนมาจากชีวิตของตัวเองและผู้คนรอบข้าง เพราะเราเชื่อว่ายังมีอิทธิพลหลายคนที่เคยผ่าน เรื่องราวต่างๆ มาคล้ายกัน แค่จุดจบของแต่ละคนนั้นอาจจะต่างกันออกไป ทุกครั้งที่มีคนมาปรึกษาเรื่องความรัก เรามักจะบอกเขาไปเสมอว่า เราก็เป็นคนหนึ่งที่ล้มเหลวเรื่องความรัก เราให้คำปรึกษาแกไม่ได้หรอก เราทำได้แค่รับฟังแกระบายเท่านั้นนะ แล้วทีนี้คุณพร้อมจะรับฟังเรื่องราวของเขาบ้างหรือยัง');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`ID_Customer`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`Id_book`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `ID_Customer` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `Id_book` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
