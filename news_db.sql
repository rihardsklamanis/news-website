-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 19, 2023 at 07:18 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `news_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

CREATE TABLE `article` (
  `ID` int(11) NOT NULL,
  `Title` varchar(128) NOT NULL,
  `PostDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `Content` longtext NOT NULL,
  `imageURL` varchar(128) NOT NULL,
  `Author_ID` int(11) NOT NULL,
  `Category_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`ID`, `Title`, `PostDate`, `Content`, `imageURL`, `Author_ID`, `Category_ID`) VALUES
(2, 'Testing article 1 software changed', '2023-05-16 20:04:30', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut tristique et egestas quis ipsum. Ut tristique et egestas quis ipsum suspendisse ultrices gravida. Ut tristique et egestas quis ipsum suspendisse ultrices gravida. Elementum pulvinar etiam non quam lacus. Sit amet est placerat in egestas erat imperdiet sed. Aenean sed adipiscing diam donec adipiscing tristique risus nec. Tempor orci eu lobortis elementum nibh tellus molestie. Ante in nibh mauris cursus. Id diam vel quam elementum. Id volutpat lacus laoreet non curabitur.\r\n\r\nIn tellus integer feugiat scelerisque. Leo urna molestie at elementum eu facilisis sed odio. Sem integer vitae justo eget magna fermentum iaculis eu non. Hendrerit dolor magna eget est. Arcu felis bibendum ut tristique. Fermentum dui faucibus in ornare quam viverra orci sagittis eu. Faucibus et molestie ac feugiat sed lectus vestibulum mattis ullamcorper. Amet est placerat in egestas. Ut consequat semper viverra nam libero justo. Lorem dolor sed viverra ipsum nunc. Eu volutpat odio facilisis mauris sit amet. Consequat semper viverra nam libero justo laoreet sit. Dolor sit amet consectetur adipiscing elit ut aliquam purus sit. Mattis aliquam faucibus purus in massa tempor nec feugiat nisl. Congue quisque egestas diam in arcu. In hac habitasse platea dictumst. Et netus et malesuada fames ac. Amet mattis vulputate enim nulla aliquet porttitor. Senectus et netus et malesuada fames ac turpis. Laoreet sit amet cursus sit.\r\n\r\nMollis nunc sed id semper risus. Risus ultricies tristique nulla aliquet. Massa tempor nec feugiat nisl pretium fusce. Sollicitudin nibh sit amet commodo nulla facilisi nullam vehicula. Ac tortor vitae purus faucibus ornare suspendisse sed. Nibh tellus molestie nunc non blandit massa. Quis eleifend quam adipiscing vitae proin. Morbi blandit cursus risus at ultrices mi tempus imperdiet. Nisl nunc mi ipsum faucibus vitae. Sagittis purus sit amet volutpat consequat mauris nunc. Netus et malesuada fames ac turpis. Tristique senectus et netus et.\r\n\r\nDolor magna eget est lorem ipsum dolor sit amet consectetur. Est ullamcorper eget nulla facilisi etiam dignissim diam quis. Aenean pharetra magna ac placerat vestibulum lectus. Cursus in hac habitasse platea dictumst quisque. Ipsum dolor sit amet consectetur. Elementum pulvinar etiam non quam lacus suspendisse faucibus. Orci dapibus ultrices in iaculis nunc sed augue. Amet consectetur adipiscing elit duis. A erat nam at lectus. Eget nunc scelerisque viverra mauris in. Urna cursus eget nunc scelerisque viverra mauris in aliquam. Ullamcorper a lacus vestibulum sed arcu. Malesuada nunc vel risus commodo. Augue lacus viverra vitae congue eu consequat ac. In fermentum posuere urna nec tincidunt praesent semper. Ipsum dolor sit amet consectetur adipiscing elit ut. Velit egestas dui id ornare arcu odio ut sem. Faucibus pulvinar elementum integer enim. At varius vel pharetra vel turpis.\r\n\r\nAmet risus nullam eget felis eget nunc lobortis. At ultrices mi tempus imperdiet nulla. Semper feugiat nibh sed pulvinar. Enim lobortis scelerisque fermentum dui faucibus. Et ligula ullamcorper malesuada proin. Neque viverra justo nec ultrices dui sapien. Enim tortor at auctor urna nunc id. Pulvinar pellentesque habitant morbi tristique. Sed velit dignissim sodales ut eu sem integer. Sed euismod nisi porta lorem mollis aliquam ut. Amet nisl purus in mollis nunc sed id. Risus viverra adipiscing at in tellus integer feugiat. Augue neque gravida in fermentum et sollicitudin ac. Duis at tellus at urna condimentum mattis pellentesque. Neque laoreet suspendisse interdum consectetur libero id faucibus nisl.', 'heroImage.jpg', 1, 1),
(3, 'Testing article 2 software', '2023-05-16 20:04:31', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut tristique et egestas quis ipsum. Ut tristique et egestas quis ipsum suspendisse ultrices gravida. Ut tristique et egestas quis ipsum suspendisse ultrices gravida. Elementum pulvinar etiam non quam lacus. Sit amet est placerat in egestas erat imperdiet sed. Aenean sed adipiscing diam donec adipiscing tristique risus nec. Tempor orci eu lobortis elementum nibh tellus molestie. Ante in nibh mauris cursus. Id diam vel quam elementum. Id volutpat lacus laoreet non curabitur.\r\n\r\nIn tellus integer feugiat scelerisque. Leo urna molestie at elementum eu facilisis sed odio. Sem integer vitae justo eget magna fermentum iaculis eu non. Hendrerit dolor magna eget est. Arcu felis bibendum ut tristique. Fermentum dui faucibus in ornare quam viverra orci sagittis eu. Faucibus et molestie ac feugiat sed lectus vestibulum mattis ullamcorper. Amet est placerat in egestas. Ut consequat semper viverra nam libero justo. Lorem dolor sed viverra ipsum nunc. Eu volutpat odio facilisis mauris sit amet. Consequat semper viverra nam libero justo laoreet sit. Dolor sit amet consectetur adipiscing elit ut aliquam purus sit. Mattis aliquam faucibus purus in massa tempor nec feugiat nisl. Congue quisque egestas diam in arcu. In hac habitasse platea dictumst. Et netus et malesuada fames ac. Amet mattis vulputate enim nulla aliquet porttitor. Senectus et netus et malesuada fames ac turpis. Laoreet sit amet cursus sit.\r\n\r\nMollis nunc sed id semper risus. Risus ultricies tristique nulla aliquet. Massa tempor nec feugiat nisl pretium fusce. Sollicitudin nibh sit amet commodo nulla facilisi nullam vehicula. Ac tortor vitae purus faucibus ornare suspendisse sed. Nibh tellus molestie nunc non blandit massa. Quis eleifend quam adipiscing vitae proin. Morbi blandit cursus risus at ultrices mi tempus imperdiet. Nisl nunc mi ipsum faucibus vitae. Sagittis purus sit amet volutpat consequat mauris nunc. Netus et malesuada fames ac turpis. Tristique senectus et netus et.\r\n\r\nDolor magna eget est lorem ipsum dolor sit amet consectetur. Est ullamcorper eget nulla facilisi etiam dignissim diam quis. Aenean pharetra magna ac placerat vestibulum lectus. Cursus in hac habitasse platea dictumst quisque. Ipsum dolor sit amet consectetur. Elementum pulvinar etiam non quam lacus suspendisse faucibus. Orci dapibus ultrices in iaculis nunc sed augue. Amet consectetur adipiscing elit duis. A erat nam at lectus. Eget nunc scelerisque viverra mauris in. Urna cursus eget nunc scelerisque viverra mauris in aliquam. Ullamcorper a lacus vestibulum sed arcu. Malesuada nunc vel risus commodo. Augue lacus viverra vitae congue eu consequat ac. In fermentum posuere urna nec tincidunt praesent semper. Ipsum dolor sit amet consectetur adipiscing elit ut. Velit egestas dui id ornare arcu odio ut sem. Faucibus pulvinar elementum integer enim. At varius vel pharetra vel turpis.\r\n\r\nAmet risus nullam eget felis eget nunc lobortis. At ultrices mi tempus imperdiet nulla. Semper feugiat nibh sed pulvinar. Enim lobortis scelerisque fermentum dui faucibus. Et ligula ullamcorper malesuada proin. Neque viverra justo nec ultrices dui sapien. Enim tortor at auctor urna nunc id. Pulvinar pellentesque habitant morbi tristique. Sed velit dignissim sodales ut eu sem integer. Sed euismod nisi porta lorem mollis aliquam ut. Amet nisl purus in mollis nunc sed id. Risus viverra adipiscing at in tellus integer feugiat. Augue neque gravida in fermentum et sollicitudin ac. Duis at tellus at urna condimentum mattis pellentesque. Neque laoreet suspendisse interdum consectetur libero id faucibus nisl.', 'heroImage.jpg', 1, 1),
(4, 'Testing article 1 hardware', '2023-05-16 20:04:31', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut tristique et egestas quis ipsum. Ut tristique et egestas quis ipsum suspendisse ultrices gravida. Ut tristique et egestas quis ipsum suspendisse ultrices gravida. Elementum pulvinar etiam non quam lacus. Sit amet est placerat in egestas erat imperdiet sed. Aenean sed adipiscing diam donec adipiscing tristique risus nec. Tempor orci eu lobortis elementum nibh tellus molestie. Ante in nibh mauris cursus. Id diam vel quam elementum. Id volutpat lacus laoreet non curabitur.\r\n\r\nIn tellus integer feugiat scelerisque. Leo urna molestie at elementum eu facilisis sed odio. Sem integer vitae justo eget magna fermentum iaculis eu non. Hendrerit dolor magna eget est. Arcu felis bibendum ut tristique. Fermentum dui faucibus in ornare quam viverra orci sagittis eu. Faucibus et molestie ac feugiat sed lectus vestibulum mattis ullamcorper. Amet est placerat in egestas. Ut consequat semper viverra nam libero justo. Lorem dolor sed viverra ipsum nunc. Eu volutpat odio facilisis mauris sit amet. Consequat semper viverra nam libero justo laoreet sit. Dolor sit amet consectetur adipiscing elit ut aliquam purus sit. Mattis aliquam faucibus purus in massa tempor nec feugiat nisl. Congue quisque egestas diam in arcu. In hac habitasse platea dictumst. Et netus et malesuada fames ac. Amet mattis vulputate enim nulla aliquet porttitor. Senectus et netus et malesuada fames ac turpis. Laoreet sit amet cursus sit.\r\n\r\nMollis nunc sed id semper risus. Risus ultricies tristique nulla aliquet. Massa tempor nec feugiat nisl pretium fusce. Sollicitudin nibh sit amet commodo nulla facilisi nullam vehicula. Ac tortor vitae purus faucibus ornare suspendisse sed. Nibh tellus molestie nunc non blandit massa. Quis eleifend quam adipiscing vitae proin. Morbi blandit cursus risus at ultrices mi tempus imperdiet. Nisl nunc mi ipsum faucibus vitae. Sagittis purus sit amet volutpat consequat mauris nunc. Netus et malesuada fames ac turpis. Tristique senectus et netus et.\r\n\r\nDolor magna eget est lorem ipsum dolor sit amet consectetur. Est ullamcorper eget nulla facilisi etiam dignissim diam quis. Aenean pharetra magna ac placerat vestibulum lectus. Cursus in hac habitasse platea dictumst quisque. Ipsum dolor sit amet consectetur. Elementum pulvinar etiam non quam lacus suspendisse faucibus. Orci dapibus ultrices in iaculis nunc sed augue. Amet consectetur adipiscing elit duis. A erat nam at lectus. Eget nunc scelerisque viverra mauris in. Urna cursus eget nunc scelerisque viverra mauris in aliquam. Ullamcorper a lacus vestibulum sed arcu. Malesuada nunc vel risus commodo. Augue lacus viverra vitae congue eu consequat ac. In fermentum posuere urna nec tincidunt praesent semper. Ipsum dolor sit amet consectetur adipiscing elit ut. Velit egestas dui id ornare arcu odio ut sem. Faucibus pulvinar elementum integer enim. At varius vel pharetra vel turpis.\r\n\r\nAmet risus nullam eget felis eget nunc lobortis. At ultrices mi tempus imperdiet nulla. Semper feugiat nibh sed pulvinar. Enim lobortis scelerisque fermentum dui faucibus. Et ligula ullamcorper malesuada proin. Neque viverra justo nec ultrices dui sapien. Enim tortor at auctor urna nunc id. Pulvinar pellentesque habitant morbi tristique. Sed velit dignissim sodales ut eu sem integer. Sed euismod nisi porta lorem mollis aliquam ut. Amet nisl purus in mollis nunc sed id. Risus viverra adipiscing at in tellus integer feugiat. Augue neque gravida in fermentum et sollicitudin ac. Duis at tellus at urna condimentum mattis pellentesque. Neque laoreet suspendisse interdum consectetur libero id faucibus nisl.', 'heroImage.jpg', 1, 2),
(5, 'Testing article 2 hardware', '2023-05-16 20:04:31', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut tristique et egestas quis ipsum. Ut tristique et egestas quis ipsum suspendisse ultrices gravida. Ut tristique et egestas quis ipsum suspendisse ultrices gravida. Elementum pulvinar etiam non quam lacus. Sit amet est placerat in egestas erat imperdiet sed. Aenean sed adipiscing diam donec adipiscing tristique risus nec. Tempor orci eu lobortis elementum nibh tellus molestie. Ante in nibh mauris cursus. Id diam vel quam elementum. Id volutpat lacus laoreet non curabitur.\r\n\r\nIn tellus integer feugiat scelerisque. Leo urna molestie at elementum eu facilisis sed odio. Sem integer vitae justo eget magna fermentum iaculis eu non. Hendrerit dolor magna eget est. Arcu felis bibendum ut tristique. Fermentum dui faucibus in ornare quam viverra orci sagittis eu. Faucibus et molestie ac feugiat sed lectus vestibulum mattis ullamcorper. Amet est placerat in egestas. Ut consequat semper viverra nam libero justo. Lorem dolor sed viverra ipsum nunc. Eu volutpat odio facilisis mauris sit amet. Consequat semper viverra nam libero justo laoreet sit. Dolor sit amet consectetur adipiscing elit ut aliquam purus sit. Mattis aliquam faucibus purus in massa tempor nec feugiat nisl. Congue quisque egestas diam in arcu. In hac habitasse platea dictumst. Et netus et malesuada fames ac. Amet mattis vulputate enim nulla aliquet porttitor. Senectus et netus et malesuada fames ac turpis. Laoreet sit amet cursus sit.\r\n\r\nMollis nunc sed id semper risus. Risus ultricies tristique nulla aliquet. Massa tempor nec feugiat nisl pretium fusce. Sollicitudin nibh sit amet commodo nulla facilisi nullam vehicula. Ac tortor vitae purus faucibus ornare suspendisse sed. Nibh tellus molestie nunc non blandit massa. Quis eleifend quam adipiscing vitae proin. Morbi blandit cursus risus at ultrices mi tempus imperdiet. Nisl nunc mi ipsum faucibus vitae. Sagittis purus sit amet volutpat consequat mauris nunc. Netus et malesuada fames ac turpis. Tristique senectus et netus et.\r\n\r\nDolor magna eget est lorem ipsum dolor sit amet consectetur. Est ullamcorper eget nulla facilisi etiam dignissim diam quis. Aenean pharetra magna ac placerat vestibulum lectus. Cursus in hac habitasse platea dictumst quisque. Ipsum dolor sit amet consectetur. Elementum pulvinar etiam non quam lacus suspendisse faucibus. Orci dapibus ultrices in iaculis nunc sed augue. Amet consectetur adipiscing elit duis. A erat nam at lectus. Eget nunc scelerisque viverra mauris in. Urna cursus eget nunc scelerisque viverra mauris in aliquam. Ullamcorper a lacus vestibulum sed arcu. Malesuada nunc vel risus commodo. Augue lacus viverra vitae congue eu consequat ac. In fermentum posuere urna nec tincidunt praesent semper. Ipsum dolor sit amet consectetur adipiscing elit ut. Velit egestas dui id ornare arcu odio ut sem. Faucibus pulvinar elementum integer enim. At varius vel pharetra vel turpis.\r\n\r\nAmet risus nullam eget felis eget nunc lobortis. At ultrices mi tempus imperdiet nulla. Semper feugiat nibh sed pulvinar. Enim lobortis scelerisque fermentum dui faucibus. Et ligula ullamcorper malesuada proin. Neque viverra justo nec ultrices dui sapien. Enim tortor at auctor urna nunc id. Pulvinar pellentesque habitant morbi tristique. Sed velit dignissim sodales ut eu sem integer. Sed euismod nisi porta lorem mollis aliquam ut. Amet nisl purus in mollis nunc sed id. Risus viverra adipiscing at in tellus integer feugiat. Augue neque gravida in fermentum et sollicitudin ac. Duis at tellus at urna condimentum mattis pellentesque. Neque laoreet suspendisse interdum consectetur libero id faucibus nisl.', 'heroImage.jpg', 1, 2),
(7, 'Testing article 2 innovation', '2023-05-16 20:04:31', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut tristique et egestas quis ipsum. Ut tristique et egestas quis ipsum suspendisse ultrices gravida. Ut tristique et egestas quis ipsum suspendisse ultrices gravida. Elementum pulvinar etiam non quam lacus. Sit amet est placerat in egestas erat imperdiet sed. Aenean sed adipiscing diam donec adipiscing tristique risus nec. Tempor orci eu lobortis elementum nibh tellus molestie. Ante in nibh mauris cursus. Id diam vel quam elementum. Id volutpat lacus laoreet non curabitur.\r\n\r\nIn tellus integer feugiat scelerisque. Leo urna molestie at elementum eu facilisis sed odio. Sem integer vitae justo eget magna fermentum iaculis eu non. Hendrerit dolor magna eget est. Arcu felis bibendum ut tristique. Fermentum dui faucibus in ornare quam viverra orci sagittis eu. Faucibus et molestie ac feugiat sed lectus vestibulum mattis ullamcorper. Amet est placerat in egestas. Ut consequat semper viverra nam libero justo. Lorem dolor sed viverra ipsum nunc. Eu volutpat odio facilisis mauris sit amet. Consequat semper viverra nam libero justo laoreet sit. Dolor sit amet consectetur adipiscing elit ut aliquam purus sit. Mattis aliquam faucibus purus in massa tempor nec feugiat nisl. Congue quisque egestas diam in arcu. In hac habitasse platea dictumst. Et netus et malesuada fames ac. Amet mattis vulputate enim nulla aliquet porttitor. Senectus et netus et malesuada fames ac turpis. Laoreet sit amet cursus sit.\r\n\r\nMollis nunc sed id semper risus. Risus ultricies tristique nulla aliquet. Massa tempor nec feugiat nisl pretium fusce. Sollicitudin nibh sit amet commodo nulla facilisi nullam vehicula. Ac tortor vitae purus faucibus ornare suspendisse sed. Nibh tellus molestie nunc non blandit massa. Quis eleifend quam adipiscing vitae proin. Morbi blandit cursus risus at ultrices mi tempus imperdiet. Nisl nunc mi ipsum faucibus vitae. Sagittis purus sit amet volutpat consequat mauris nunc. Netus et malesuada fames ac turpis. Tristique senectus et netus et.\r\n\r\nDolor magna eget est lorem ipsum dolor sit amet consectetur. Est ullamcorper eget nulla facilisi etiam dignissim diam quis. Aenean pharetra magna ac placerat vestibulum lectus. Cursus in hac habitasse platea dictumst quisque. Ipsum dolor sit amet consectetur. Elementum pulvinar etiam non quam lacus suspendisse faucibus. Orci dapibus ultrices in iaculis nunc sed augue. Amet consectetur adipiscing elit duis. A erat nam at lectus. Eget nunc scelerisque viverra mauris in. Urna cursus eget nunc scelerisque viverra mauris in aliquam. Ullamcorper a lacus vestibulum sed arcu. Malesuada nunc vel risus commodo. Augue lacus viverra vitae congue eu consequat ac. In fermentum posuere urna nec tincidunt praesent semper. Ipsum dolor sit amet consectetur adipiscing elit ut. Velit egestas dui id ornare arcu odio ut sem. Faucibus pulvinar elementum integer enim. At varius vel pharetra vel turpis.\r\n\r\nAmet risus nullam eget felis eget nunc lobortis. At ultrices mi tempus imperdiet nulla. Semper feugiat nibh sed pulvinar. Enim lobortis scelerisque fermentum dui faucibus. Et ligula ullamcorper malesuada proin. Neque viverra justo nec ultrices dui sapien. Enim tortor at auctor urna nunc id. Pulvinar pellentesque habitant morbi tristique. Sed velit dignissim sodales ut eu sem integer. Sed euismod nisi porta lorem mollis aliquam ut. Amet nisl purus in mollis nunc sed id. Risus viverra adipiscing at in tellus integer feugiat. Augue neque gravida in fermentum et sollicitudin ac. Duis at tellus at urna condimentum mattis pellentesque. Neque laoreet suspendisse interdum consectetur libero id faucibus nisl.', 'heroImage.jpg', 1, 3),
(8, 'Testing article 1 gaming', '2023-05-16 20:04:31', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut tristique et egestas quis ipsum. Ut tristique et egestas quis ipsum suspendisse ultrices gravida. Ut tristique et egestas quis ipsum suspendisse ultrices gravida. Elementum pulvinar etiam non quam lacus. Sit amet est placerat in egestas erat imperdiet sed. Aenean sed adipiscing diam donec adipiscing tristique risus nec. Tempor orci eu lobortis elementum nibh tellus molestie. Ante in nibh mauris cursus. Id diam vel quam elementum. Id volutpat lacus laoreet non curabitur.\r\n\r\nIn tellus integer feugiat scelerisque. Leo urna molestie at elementum eu facilisis sed odio. Sem integer vitae justo eget magna fermentum iaculis eu non. Hendrerit dolor magna eget est. Arcu felis bibendum ut tristique. Fermentum dui faucibus in ornare quam viverra orci sagittis eu. Faucibus et molestie ac feugiat sed lectus vestibulum mattis ullamcorper. Amet est placerat in egestas. Ut consequat semper viverra nam libero justo. Lorem dolor sed viverra ipsum nunc. Eu volutpat odio facilisis mauris sit amet. Consequat semper viverra nam libero justo laoreet sit. Dolor sit amet consectetur adipiscing elit ut aliquam purus sit. Mattis aliquam faucibus purus in massa tempor nec feugiat nisl. Congue quisque egestas diam in arcu. In hac habitasse platea dictumst. Et netus et malesuada fames ac. Amet mattis vulputate enim nulla aliquet porttitor. Senectus et netus et malesuada fames ac turpis. Laoreet sit amet cursus sit.\r\n\r\nMollis nunc sed id semper risus. Risus ultricies tristique nulla aliquet. Massa tempor nec feugiat nisl pretium fusce. Sollicitudin nibh sit amet commodo nulla facilisi nullam vehicula. Ac tortor vitae purus faucibus ornare suspendisse sed. Nibh tellus molestie nunc non blandit massa. Quis eleifend quam adipiscing vitae proin. Morbi blandit cursus risus at ultrices mi tempus imperdiet. Nisl nunc mi ipsum faucibus vitae. Sagittis purus sit amet volutpat consequat mauris nunc. Netus et malesuada fames ac turpis. Tristique senectus et netus et.\r\n\r\nDolor magna eget est lorem ipsum dolor sit amet consectetur. Est ullamcorper eget nulla facilisi etiam dignissim diam quis. Aenean pharetra magna ac placerat vestibulum lectus. Cursus in hac habitasse platea dictumst quisque. Ipsum dolor sit amet consectetur. Elementum pulvinar etiam non quam lacus suspendisse faucibus. Orci dapibus ultrices in iaculis nunc sed augue. Amet consectetur adipiscing elit duis. A erat nam at lectus. Eget nunc scelerisque viverra mauris in. Urna cursus eget nunc scelerisque viverra mauris in aliquam. Ullamcorper a lacus vestibulum sed arcu. Malesuada nunc vel risus commodo. Augue lacus viverra vitae congue eu consequat ac. In fermentum posuere urna nec tincidunt praesent semper. Ipsum dolor sit amet consectetur adipiscing elit ut. Velit egestas dui id ornare arcu odio ut sem. Faucibus pulvinar elementum integer enim. At varius vel pharetra vel turpis.\r\n\r\nAmet risus nullam eget felis eget nunc lobortis. At ultrices mi tempus imperdiet nulla. Semper feugiat nibh sed pulvinar. Enim lobortis scelerisque fermentum dui faucibus. Et ligula ullamcorper malesuada proin. Neque viverra justo nec ultrices dui sapien. Enim tortor at auctor urna nunc id. Pulvinar pellentesque habitant morbi tristique. Sed velit dignissim sodales ut eu sem integer. Sed euismod nisi porta lorem mollis aliquam ut. Amet nisl purus in mollis nunc sed id. Risus viverra adipiscing at in tellus integer feugiat. Augue neque gravida in fermentum et sollicitudin ac. Duis at tellus at urna condimentum mattis pellentesque. Neque laoreet suspendisse interdum consectetur libero id faucibus nisl.', 'heroImage.jpg', 1, 4),
(9, 'Testing article 2 gaming', '2023-05-16 20:04:31', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut tristique et egestas quis ipsum. Ut tristique et egestas quis ipsum suspendisse ultrices gravida. Ut tristique et egestas quis ipsum suspendisse ultrices gravida. Elementum pulvinar etiam non quam lacus. Sit amet est placerat in egestas erat imperdiet sed. Aenean sed adipiscing diam donec adipiscing tristique risus nec. Tempor orci eu lobortis elementum nibh tellus molestie. Ante in nibh mauris cursus. Id diam vel quam elementum. Id volutpat lacus laoreet non curabitur.\r\n\r\nIn tellus integer feugiat scelerisque. Leo urna molestie at elementum eu facilisis sed odio. Sem integer vitae justo eget magna fermentum iaculis eu non. Hendrerit dolor magna eget est. Arcu felis bibendum ut tristique. Fermentum dui faucibus in ornare quam viverra orci sagittis eu. Faucibus et molestie ac feugiat sed lectus vestibulum mattis ullamcorper. Amet est placerat in egestas. Ut consequat semper viverra nam libero justo. Lorem dolor sed viverra ipsum nunc. Eu volutpat odio facilisis mauris sit amet. Consequat semper viverra nam libero justo laoreet sit. Dolor sit amet consectetur adipiscing elit ut aliquam purus sit. Mattis aliquam faucibus purus in massa tempor nec feugiat nisl. Congue quisque egestas diam in arcu. In hac habitasse platea dictumst. Et netus et malesuada fames ac. Amet mattis vulputate enim nulla aliquet porttitor. Senectus et netus et malesuada fames ac turpis. Laoreet sit amet cursus sit.\r\n\r\nMollis nunc sed id semper risus. Risus ultricies tristique nulla aliquet. Massa tempor nec feugiat nisl pretium fusce. Sollicitudin nibh sit amet commodo nulla facilisi nullam vehicula. Ac tortor vitae purus faucibus ornare suspendisse sed. Nibh tellus molestie nunc non blandit massa. Quis eleifend quam adipiscing vitae proin. Morbi blandit cursus risus at ultrices mi tempus imperdiet. Nisl nunc mi ipsum faucibus vitae. Sagittis purus sit amet volutpat consequat mauris nunc. Netus et malesuada fames ac turpis. Tristique senectus et netus et.\r\n\r\nDolor magna eget est lorem ipsum dolor sit amet consectetur. Est ullamcorper eget nulla facilisi etiam dignissim diam quis. Aenean pharetra magna ac placerat vestibulum lectus. Cursus in hac habitasse platea dictumst quisque. Ipsum dolor sit amet consectetur. Elementum pulvinar etiam non quam lacus suspendisse faucibus. Orci dapibus ultrices in iaculis nunc sed augue. Amet consectetur adipiscing elit duis. A erat nam at lectus. Eget nunc scelerisque viverra mauris in. Urna cursus eget nunc scelerisque viverra mauris in aliquam. Ullamcorper a lacus vestibulum sed arcu. Malesuada nunc vel risus commodo. Augue lacus viverra vitae congue eu consequat ac. In fermentum posuere urna nec tincidunt praesent semper. Ipsum dolor sit amet consectetur adipiscing elit ut. Velit egestas dui id ornare arcu odio ut sem. Faucibus pulvinar elementum integer enim. At varius vel pharetra vel turpis.\r\n\r\nAmet risus nullam eget felis eget nunc lobortis. At ultrices mi tempus imperdiet nulla. Semper feugiat nibh sed pulvinar. Enim lobortis scelerisque fermentum dui faucibus. Et ligula ullamcorper malesuada proin. Neque viverra justo nec ultrices dui sapien. Enim tortor at auctor urna nunc id. Pulvinar pellentesque habitant morbi tristique. Sed velit dignissim sodales ut eu sem integer. Sed euismod nisi porta lorem mollis aliquam ut. Amet nisl purus in mollis nunc sed id. Risus viverra adipiscing at in tellus integer feugiat. Augue neque gravida in fermentum et sollicitudin ac. Duis at tellus at urna condimentum mattis pellentesque. Neque laoreet suspendisse interdum consectetur libero id faucibus nisl.', 'heroImage.jpg', 1, 4);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `ID` int(11) NOT NULL,
  `Name` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`ID`, `Name`) VALUES
(1, 'Software'),
(2, 'Hardware'),
(3, 'Innovation'),
(4, 'Gaming');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `ID` int(11) NOT NULL,
  `Author_ID` int(11) NOT NULL,
  `PostDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `Content` text NOT NULL,
  `News_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `ID` int(11) NOT NULL,
  `Name` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`ID`, `Name`) VALUES
(1, 'User'),
(2, 'Moderator'),
(3, 'Redactor'),
(4, 'Administrator'),
(5, 'Banned');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `ID` int(11) NOT NULL,
  `Username` varchar(64) NOT NULL,
  `EMail` varchar(64) NOT NULL,
  `Password` varchar(128) NOT NULL,
  `Creation_Date` timestamp NOT NULL DEFAULT current_timestamp(),
  `Role_ID` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`ID`, `Username`, `EMail`, `Password`, `Creation_Date`, `Role_ID`) VALUES
(1, 'testname', 'testmail@mail.com', '$2y$10$GlKLwuIJInpZSav1G84no.TDfheIJNg2fmDgbRiKbr/RCof.o6r..', '2023-05-11 12:17:00', 1),
(2, 'admin', 'admin@admin.com', '$2y$10$zjs0x1isEbGODrGqQ4WxWOVu5JyPKK8Lxp.4RjPkntwCTA8cUbXfu', '2023-12-16 13:16:46', 4),
(3, 'banned', 'banned@banned.com', '$2y$10$pMJVxoM1utbFxJ.jxKjaLOYCq.6kOFkJNsRYGe6LQL5rZM2Qn8ZX6', '2023-12-18 19:03:23', 5),
(4, 'redactor', 'redactor@redactor.com', '$2y$10$LBbkIaeBkB4xG7dGEyDNp.qIlgWN6OT1fWr5jRxL7vwBOrObRsIaG', '2023-12-18 22:16:36', 1),
(5, 'gwrgg', 'gwegweg@mail.com', '$2y$10$kMIxNj64DBkF4cauYpg5Oenb0UiqltPHNJvtksNT.y9DuyYammXAm', '2023-12-18 23:40:57', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `Author_ID` (`Author_ID`),
  ADD KEY `Category_ID` (`Category_ID`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `News_ID` (`News_ID`),
  ADD KEY `Author_ID` (`Author_ID`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `Role_ID` (`Role_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `article`
--
ALTER TABLE `article`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `article`
--
ALTER TABLE `article`
  ADD CONSTRAINT `article_ibfk_3` FOREIGN KEY (`Author_ID`) REFERENCES `user` (`ID`),
  ADD CONSTRAINT `article_ibfk_4` FOREIGN KEY (`Category_ID`) REFERENCES `category` (`ID`);

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_2` FOREIGN KEY (`News_ID`) REFERENCES `article` (`ID`),
  ADD CONSTRAINT `comments_ibfk_3` FOREIGN KEY (`Author_ID`) REFERENCES `user` (`ID`);

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`Role_ID`) REFERENCES `roles` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
