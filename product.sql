-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 27, 2018 at 11:29 PM
-- Server version: 5.7.21-0ubuntu0.17.10.1
-- PHP Version: 7.1.15-0ubuntu0.17.10.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `theLine`
--

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `price`, `status`, `description`, `units_amount`, `units_remaining`, `image_link`, `created_at`, `updated_at`) VALUES
(1, 'KALA', 130, 'Available', '[\n    \"SPORTY COLD SHOULDER JUMPSUIT.\",\n    \"BACK ZIPPER.\",\n    \"NO LINING.\",\n    \"ELASTIC WAISTLINE.\"\n]', 10, 10, 'dist/images/uploads/1.jpg', '2017-09-23 00:45:07', '2017-09-22 23:45:07'),
(2, 'NINI', 120, 'Available', '[\n    \"LONG SLEEVE SHORT DRESS\",\n    \"BACK ZIPPER.\",\n    \"FULLY LINED.\"\n]', 10, 4, 'dist/images/uploads/2.jpg', '2017-09-23 00:47:29', '2017-09-22 23:47:29'),
(3, 'KIZA', 140, 'Available', '[\n    \"BUBU SLEEVE WRAP DRESS\",\n    \"WITH BELT\",\n    \"NO ZIPPER\",\n    \"NO LINING\"\n]', 10, 6, 'dist/images/uploads/3.jpg', '2017-09-23 00:49:30', '2017-09-22 23:49:30'),
(4, 'LADI', 140, 'Available', '[\n    \"KNEE LENGTH BOTTOM PLEATED FITTED SKIRT.\",\n    \"BACK ZIPPER.\",\n    \"FULLY LINED.\"\n]', 10, 10, 'dist/images/uploads/4.jpg', '2017-09-23 00:51:09', '2017-09-22 23:51:09'),
(5, 'PAPI', 150, 'Available', '[\n    \"WHITE HIGH COLLAR SHIFT DRESS.\",\n    \"NO LINING\",\n    \"NO ZIPPER\",\n    \"BUTTON AT THE BACK.\"\n]', 10, 10, 'dist/images/uploads/5.jpg', '2017-09-23 00:52:07', '2017-09-22 23:52:07'),
(6, 'KAMI', 160, 'Available', '[\n    \"SHORT SLEEVE JUMPSUIT WITH DETACHABLE BELT.\",\n    \"BACK ZIPPER.\",\n    \"NO LINING.\"\n]', 10, 10, 'dist/images/uploads/6.jpg', '2017-09-23 00:52:57', '2017-09-22 23:52:57'),
(7, 'RABI', 200, 'Available', '[\n    \"BLACK LAPEL TRENCH JACKET.\",\n    \"FULLY LINED.\",\n    \"NO POCKET.\",\n    \"NO ZIPPER.\"\n]', 10, 10, 'dist/images/uploads/7.jpg', '2017-09-23 00:56:43', '2017-09-22 23:56:43'),
(8, 'RIRI', 130, 'Available', '[\n    \"HIGH WAIST KNEE LENGTH SKIRT WITH ATTACHED BELT.\",\n    \"FULLY LINED.\",\n    \"BACK ZIPPER.\"\n]', 10, 10, 'dist/images/uploads/8.jpg', '2017-09-23 00:57:31', '2017-09-22 23:57:31'),
(9, 'FIFA', 150, 'Available', '[\n    \"BOMBER JACKET.\",\n    \"FRONT ZIPPER\",\n    \"FULLY LINED\"\n]', 10, 10, 'dist/images/uploads/9.jpg', '2017-09-23 00:58:21', '2017-09-22 23:58:21'),
(10, 'LILA', 130, 'Available', '[\n    \"BALLERINA MAXI SKIRT WITH ATTACHED BELT.\",\n    \"SIDE ZIPPER.\"\n]', 10, 10, 'dist/images/uploads/10.jpg', '2017-09-23 00:59:32', '2017-09-22 23:59:32'),
(11, 'BABA', 125, 'Available', '[\n    \"HORSE PATTERNED HIGH WAIST\",\n    \" KNEE LENGTH FLARE SKIRT\",\n    \"SIDE ZIPPER.\",\n    \"LAYER OF TULLE\",\n    \"LINED\"\n]', 10, 10, 'dist/images/uploads/11.jpg', '2017-09-23 01:00:30', '2017-09-23 00:00:30'),
(12, 'FARI', 125, 'Available', '[\n    \"HIGH WAIST KNEE LENGTH SKIRT.\",\n    \"SIDE ZIPPER.\",\n    \"LAYER OF TULLE.\",\n    \"LINED.\"\n]', 10, 10, 'dist/images/uploads/12.jpg', '2017-09-23 01:01:25', '2017-09-23 00:01:25'),
(13, 'DIDO', 140, 'Available', '[\n    \"KNEE LENGTH KIMONO.\",\n    \"NO ZIPPER\",\n    \"FULLY LINED\",\n    \"NO BUTTON\"\n]', 10, 10, 'dist/images/uploads/13.jpg', '2017-09-23 01:03:58', '2017-09-23 00:03:58'),
(14, 'ANYA', 150, 'Available', '[\n    \"LONG SLEEVE SHIRT DRESS.\",\n    \"FRONT BUTTON.\",\n    \"NO LINING.\"\n]', 10, 10, 'dist/images/uploads/14.jpg', '2017-09-23 01:10:37', '2017-09-23 00:10:37'),
(15, 'ZILA', 180, 'Available', '[\n    \"HIGH LOW\",\n    \" DOUBLE LAYER RUFFLED SKIRT WITH DETACHABLE WAIST ACCESSORY. \",\n    \"BACK ZIPPER.\",\n    \"FULLY LINED.\"\n]', 10, 10, 'dist/images/uploads/15.jpg', '2017-09-23 01:12:02', '2017-09-23 00:12:02'),
(16, 'SEFA', 130, 'Available', '[\n    \"WIDE LEG PANTS.\",\n    \"SIDE ZIPPER\",\n    \"NO LINING\"\n]', 10, 10, 'dist/images/uploads/16.jpg', '2017-09-23 01:13:07', '2017-09-23 00:13:07'),
(17, 'ZUZU', 125, 'Available', '[\n    \"FLARE SLEEVE CROP TOP.\",\n    \"NO ZIPPER.\",\n    \"NO BUTTON.\",\n    \"NO LINING.\"\n]', 10, 10, 'dist/images/uploads/17.jpg', '2017-09-23 01:13:49', '2017-09-23 00:13:49'),
(18, 'KIRA', 200, 'Available', '[\n    \"TRENCH DRESS\",\n    \"FRONT BUTTONS.\",\n    \"DETACHABLE BELT.\",\n    \"FULLY LINED.\"\n]', 10, 10, 'dist/images/uploads/18.jpg', '2017-09-23 01:16:12', '2017-09-23 00:16:12'),
(19, 'BIBA', 130, 'Available', '[\n    \"PLEATED SLEEVELESS BLOUSE\",\n    \"BACK ZIPPER.\",\n    \"NO LINING.\"\n]', 10, 10, 'dist/images/uploads/19.jpg', '2017-09-23 01:16:56', '2017-09-23 00:16:56'),
(20, 'MEME', 130, 'Available', '[\n    \"CASCADING KNEE LENGTH RUFFLE SKIRT.\",\n    \"BACK ZIPPER\",\n    \"NO LINING.\",\n    \"FULLY LINED.\"\n]', 10, 10, 'dist/images/uploads/20.jpg', '2017-09-23 01:17:50', '2017-09-23 00:17:50'),
(21, 'DEZA', 180, 'Available', '[\n    \"OFF SHOULDER CAPE JUMPSUIT.\",\n    \"BACK ZIPPER.\",\n    \"NO LINING.\",\n    \"ELASTIC WAISTLINE.\"\n]', 10, 10, 'dist/images/uploads/21.jpg', '2017-09-23 01:18:45', '2017-09-23 00:18:45'),
(22, 'MIRA', 140, 'Available', '[\n    \"CROSS OVER LONG SLEEVE SHIRT.\",\n    \"FRONT BUTTONS.\",\n    \"NO LINING.\"\n]', 10, 10, 'dist/images/uploads/22.jpg', '2017-09-23 01:19:26', '2017-09-23 00:19:26'),
(23, 'LIMA', 130, 'Available', '[\n    \"FLARE SLEEVE DRESS.\",\n    \"ELASTIC WAISTLINE.\",\n    \"NO LINING.\",\n    \"NO ZIPPER.\"\n]', 10, 10, 'dist/images/uploads/23.jpg', '2017-09-23 01:20:08', '2017-09-23 00:20:08'),
(24, 'HALI', 140, 'Available', '[\n    \"OFF SHOULDER SHIFT DRESS. ABOVE KNEE. FLARE SLEEVES.\",\n    \"ELASTIC SHOULDER.\",\n    \"NO LINING.\",\n    \"NO ZIPPER.\"\n]', 10, 10, 'dist/images/uploads/24.jpg', '2017-09-23 01:21:08', '2017-09-23 00:21:08'),
(25, 'SAMI', 140, 'Available', '[\n    \"HIGH LOW THREE QUARTER SLEEVE DRESS.\",\n    \"FULLY LINED.\",\n    \"BACK ZIPPER.\"\n]', 10, 10, 'dist/images/uploads/25.jpg', '2017-09-23 01:21:49', '2017-09-23 00:21:49'),
(26, 'KORA', 140, 'Available', '[\n    \"OFF SHOULDER WRAP DRESS.\",\n    \"NO ZIPPER.\",\n    \"NO LINING\",\n    \"NO BUTTONS.\"\n]', 10, 10, 'dist/images/uploads/26.jpg', '2017-09-23 01:22:41', '2017-09-23 00:22:41'),
(27, 'MIDA', 140, 'Available', '[\n    \"OFF SHOULDER SHORT FLAIR DRESS.\",\n    \"FULLY LINED.\",\n    \"BACK ZIPPER.\"\n]', 10, 10, 'dist/images/uploads/27.jpg', '2017-09-23 01:23:42', '2017-09-23 00:23:42'),
(28, 'FISA', 150, 'Available', '[\n    \"OFF SHOULDER CAPE LONG STRAIGHT DRESS.\",\n    \"ELASTIC SHOULDER.\",\n    \"BACK ZIPPER.\",\n    \"NO LINING.\"\n]', 10, 10, 'dist/images/uploads/28.jpg', '2017-09-23 01:24:31', '2017-09-23 00:24:31'),
(29, 'BALI', 130, 'Available', '[\n    \"PONCHO.\",\n    \"FULLY LINED.\",\n    \"FRONT BUTTON.\",\n    \"NO ZIPPER.\"\n]', 10, 10, 'dist/images/uploads/29.jpg', '2017-09-23 01:25:16', '2017-09-23 00:25:16'),
(30, 'YARI', 180, 'Available', '[\n    \"LONG KIMONO.\",\n    \"NO BUTTONS.\",\n    \"NO ZIPPER.\",\n    \"NO LINING.\"\n]', 10, 10, 'dist/images/uploads/30.jpg', '2017-09-23 01:26:13', '2017-09-23 00:26:13'),
(31, 'NONI', 140, 'Available', '[\n    \"KNEE LENGTH RUFFLED SKIRT.\",\n    \"BACK ZIPPER.\",\n    \"FULLY LINED.\"\n]', 10, 10, 'dist/images/uploads/31.jpg', '2017-09-23 01:27:07', '2017-09-23 00:27:07'),
(32, 'FIDO', 140, 'Available', '[\n    \"RUFFLED COLLAR WRAP DRESS.\",\n    \"NO BUTTON.\",\n    \"NO ZIPPER.\",\n    \"NO LINING.\"\n]', 10, 10, 'dist/images/uploads/32.jpg', '2017-09-23 01:27:53', '2017-09-23 00:27:53');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
