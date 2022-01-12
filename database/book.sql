-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 12, 2016 at 07:50 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `perpus`
--

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE IF NOT EXISTS `buku` (
  `id_buku` int(4) NOT NULL AUTO_INCREMENT,
  `judul` varchar(70) NOT NULL,
  `b_subcat` varchar(25) NOT NULL,
  `penulis` varchar(50) NOT NULL,
  `penerbit` varchar(50) NOT NULL,
  `deskripsi` longtext NOT NULL,
  `jumlah` int(10) NOT NULL,
  `b_pdf` longtext NOT NULL,
  `path_gambar` longtext NOT NULL,
  PRIMARY KEY (`id_buku`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=51 ;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`id_buku`, `judul`, `b_subcat`, `penulis`, `penerbit`, `deskripsi`, `jumlah`, `b_pdf`, `path_gambar`) VALUES
(1,'Membuat Web Dengan PHP 7 dan Database PDO MYSQLi', '3', 'Rahman CS', 'Gramedia', 'Pengetahuan pemprograman php7, pembuatan database dan table dengan heidiSQL dan studi kasus pembuatan blog serta toko online menggunakan PHP dan Bootstrap', 1, 'upload_pdf/1.txt','upload_image/1.jpg'),
(2,'Algoritma & Pemrograman dalam bahasa pascal dan C', '3', 'Rinaldi Munir', 'Informatika', 'Penjelasan pemprograman dan algoritma bahasa c dan pascal serta dilengkapi dengan study kasus', 2, 'upload_pdf/2.txt', 'upload_image/2.jpg'),
(3,'Kreasi photoshop CS3', '5', 'Ebhie Febrian', 'Cerdas Komputer', 'Tutorial editting menggunakan photoshop cs 3 untuk pemula dan terdapat beberapa contoh hasil editan', 3, 'upload_pdf/3.txt', 'upload_image/3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE IF NOT EXISTS `kategori` (
  `kat_id` int(4) NOT NULL AUTO_INCREMENT,
  `kat_nm` varchar(30) NOT NULL,
  PRIMARY KEY (`kat_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`kat_id`, `kat_nm`) VALUES
(1, 'aksi'),
(2, 'romantis'),
(3, 'programming'),
(4, 'drama'),
(5, 'umum');

-- Table structure for table `subcat`
--

CREATE TABLE IF NOT EXISTS `subkat` (
  `subkat_id` int(4) NOT NULL AUTO_INCREMENT,
  `parent_id` int(4) NOT NULL,
  `subkat_nm` varchar(35) NOT NULL,
  PRIMARY KEY (`subcat_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=36 ;

--
-- Dumping data for table `subcat`
--

INSERT INTO `subkat` (`subkat_id`, `parent_id`, `subkat_nm`) VALUES
(1, 1, 'aksi'),
(2, 2, 'romantis'),
(3, 3, 'programming'),
(4, 4, 'drama'),
(5, 5, 'umum');

-- --------------------------------------------------------
