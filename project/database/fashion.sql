-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 28, 2016 at 02:54 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fashion`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_404`
--

CREATE TABLE `tbl_404` (
  `pk_404_id` int(11) NOT NULL,
  `c_name` varchar(500) NOT NULL,
  `c_img` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_404`
--

INSERT INTO `tbl_404` (`pk_404_id`, `c_name`, `c_img`) VALUES
(1, 'a', 'upload/404/1472419695th_2.gif'),
(2, 'c', 'upload/404/1472917562th_115.gif'),
(3, 'b', 'upload/404/1472419705th_72.gif'),
(4, 'd', 'upload/404/1472917460th_84.gif'),
(5, 'e', 'upload/404/1472917575th_49.gif'),
(6, 'f', 'upload/404/1472917631th_24.gif');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_about`
--

CREATE TABLE `tbl_about` (
  `pk_about_id` int(11) NOT NULL,
  `c_name` varchar(500) NOT NULL,
  `c_description` varchar(500) NOT NULL,
  `c_content` varchar(500) NOT NULL,
  `c_img` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_about`
--

INSERT INTO `tbl_about` (`pk_about_id`, `c_name`, `c_description`, `c_content`, `c_img`) VALUES
(2, 'Giới thiệu shop thời trang F-fashion', 'tao thích thế', '<p>Shop thời trang F-fashion chuy&ecirc;n cung cấp thời trang c&ocirc;ng sở với những mẫu thiết kế hợp thời trang nhất, được nhiều người ưa chuộng. B&ecirc;n cạnh đ&oacute; shop cũng lu&ocirc;n cung cấp nhưng th&ocirc;ng tin mới về xu hướng thời trang tr&ecirc;n thế giới, những tin tức thời trang b&ecirc;n lề .... Đến với F-fashion ch&uacute;ng t&ocirc;i bạn c&oacute; thể ho&agrave;n to&agrave;n y&ecirc;n t&acirc;m về chất lượng sản phẩm, c&aacute;c sản phẩm được cung cấp bởi những c&ocirc;ng ty', 'upload/about/147243656411140384_799925080104630_3465240618808363455_n(1).jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_advertise`
--

CREATE TABLE `tbl_advertise` (
  `pk_advertise_id` int(11) NOT NULL,
  `c_name` varchar(500) NOT NULL,
  `c_url` varchar(500) NOT NULL,
  `c_img` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_advertise`
--

INSERT INTO `tbl_advertise` (`pk_advertise_id`, `c_name`, `c_url`, `c_img`) VALUES
(2, 'Nhà quảng cáo 1', 'https://www.facebook.com/thuyettiensinh', 'upload/advertise/1473591256banner.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category_product`
--

CREATE TABLE `tbl_category_product` (
  `pk_category_product_id` int(11) NOT NULL,
  `c_name` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_category_product`
--

INSERT INTO `tbl_category_product` (`pk_category_product_id`, `c_name`) VALUES
(1, 'Trang phục Nam'),
(2, 'Trang phục Nữ');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_news`
--

CREATE TABLE `tbl_news` (
  `pk_news_id` int(11) NOT NULL,
  `c_name` varchar(500) NOT NULL,
  `c_description` varchar(1000) NOT NULL,
  `c_content` text NOT NULL,
  `c_img` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_news`
--

INSERT INTO `tbl_news` (`pk_news_id`, `c_name`, `c_description`, `c_content`, `c_img`) VALUES
(1, 'test  test test test test test test test test test test test test test test test test test test test', 'tesssssssssssssssssssssssssssss', '<p>test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test</p>\r\n', 'upload/posts/1471677113ao-so-mi-nu-cong-so-dep-phong-cach-han-quoc-he-2015-cho-co-nang-nang-dong-them-net-noi-bat-7.jpg'),
(2, 'test 2 test test test test test test test test test test test test test test', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaa', '<p>test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test</p>\r\n', 'upload/posts/14716771002083_1445585191.72622.jpg'),
(3, 'bài viết 1 test test test test test test', 'mô tả', '<p>chi tiết 1chi tiết 1chi tiết 1chi tiết 1chi tiết 1chi tiết 1chi tiết 1chi tiết 1chi tiết 1chi tiết 1chi tiết 1chi tiết 1chi tiết 1chi tiết 1chi tiết 1chi tiết 1chi tiết 1chi tiết 1chi tiết 1chi tiết 1chi tiết 1chi tiết 1chi tiết 1chi tiết 1chi tiết 1chi tiết 1chi tiết 1chi tiết 1</p>\r\n', 'upload/news/1472416672147167707614045245_644635499017586_154162285_o.jpg'),
(5, 'bài viết mới  test test test test test test', 'bài viết mới a a a a a a a â a a a a a a a bài viết mới a a a a a a a â a a a a a a a bài viết mới a a a a a a a â a a a a a a a ', '<p>b&agrave;i viết mới a a a a a a a &acirc; a a a a a a a&nbsp;b&agrave;i viết mới a a a a a a a &acirc; a a a a a a a&nbsp;b&agrave;i viết mới a a a a a a a &acirc; a a a a a a a&nbsp;b&agrave;i viết mới a a a a a a a &acirc; a a a a a a a&nbsp;b&agrave;i viết mới a a a a a a a &acirc; a a a a a a a&nbsp;b&agrave;i viết mới a a a a a a a &acirc; a a a a a a a&nbsp;b&agrave;i viết mới a a a a a a a &acirc; a a a a a a a&nbsp;b&agrave;i viết mới a a a a a a a &acirc; a a a a a a a&nbsp;b&agrave;i viết mới a a a a a a a &acirc; a a a a a a a&nbsp;b&agrave;i viết mới a a a a a a a &acirc; a a a a a a a&nbsp;b&agrave;i viết mới a a a a a a a &acirc; a a a a a a a&nbsp;b&agrave;i viết mới a a a a a a a &acirc; a a a a a a a&nbsp;b&agrave;i viết mới a a a a a a a &acirc; a a a a a a a&nbsp;b&agrave;i viết mới a a a a a a a &acirc; a a a a a a a&nbsp;b&agrave;i viết mới a a a a a a a &acirc; a a a a a a a&nbsp;b&agrave;i viết mới a a a a a a a &acirc; a a a a a a a&nbsp;b&agrave;i viết mới a a a a a a a &acirc; a a a a a a a&nbsp;b&agrave;i viết mới a a a a a a a &acirc; a a a a a a a&nbsp;b&agrave;i viết mới a a a a a a a &acirc; a a a a a a a&nbsp;b&agrave;i viết mới a a a a a a a &acirc; a a a a a a a&nbsp;b&agrave;i viết mới a a a a a a a &acirc; a a a a a a a&nbsp;b&agrave;i viết mới a a a a a a a &acirc; a a a a a a a&nbsp;b&agrave;i viết mới a a a a a a a &acirc; a a a a a a a&nbsp;</p>\r\n', 'upload/news/14724166631471801238tkb.png'),
(7, 'test 111 test 111 test 111 test 111 test 111 test 111 test 111 test 111 test 111 ', 'test 111 test 111 test 111 test 111 test 111 test 111 test 111 test 111 test 111 test 111 test 111 test 111 test 111 ', '<p>test 111&nbsp;test 111&nbsp;test 111&nbsp;test 111&nbsp;test 111&nbsp;test 111&nbsp;test 111&nbsp;test 111&nbsp;test 111&nbsp;test 111&nbsp;test 111&nbsp;test 111&nbsp;test 111&nbsp;test 111&nbsp;test 111&nbsp;test 111&nbsp;test 111&nbsp;test 111&nbsp;test 111&nbsp;test 111&nbsp;test 111&nbsp;test 111&nbsp;test 111&nbsp;test 111&nbsp;test 111&nbsp;test 111&nbsp;test 111&nbsp;test 111&nbsp;test 111&nbsp;test 111&nbsp;test 111&nbsp;test 111&nbsp;test 111&nbsp;test 111&nbsp;test 111&nbsp;test 111&nbsp;test 111&nbsp;test 111&nbsp;test 111&nbsp;test 111&nbsp;test 111&nbsp;test 111&nbsp;test 111&nbsp;test 111&nbsp;test 111&nbsp;test 111&nbsp;test 111&nbsp;test 111&nbsp;test 111&nbsp;test 111&nbsp;test 111&nbsp;test 111&nbsp;test 111&nbsp;test 111&nbsp;test 111&nbsp;test 111&nbsp;test 111&nbsp;test 111&nbsp;test 111&nbsp;test 111&nbsp;test 111&nbsp;test 111&nbsp;test 111&nbsp;test 111&nbsp;test 111&nbsp;test 111&nbsp;test 111&nbsp;test 111&nbsp;test 111&nbsp;test 111&nbsp;test 111&nbsp;test 111&nbsp;test 111&nbsp;test 111&nbsp;test 111&nbsp;test 111&nbsp;test 111&nbsp;test 111&nbsp;test 111&nbsp;<img alt="" src="/AAAAAAAAAAAA/project/upload/images/1471677113ao-so-mi-nu-cong-so-dep-phong-cach-han-quoc-he-2015-cho-co-nang-nang-dong-them-net-noi-bat-7.jpg" style="height:842px; width:600px" /></p>\r\n', 'upload/news/147241779211140384_799925080104630_3465240618808363455_n(1).jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order`
--

CREATE TABLE `tbl_order` (
  `pk_order_id` int(11) NOT NULL,
  `c_fullname` varchar(500) NOT NULL,
  `c_address` varchar(500) NOT NULL,
  `c_phone` varchar(300) NOT NULL,
  `c_create` date NOT NULL,
  `c_recive` date NOT NULL,
  `c_sum` float NOT NULL,
  `c_status` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_order`
--

INSERT INTO `tbl_order` (`pk_order_id`, `c_fullname`, `c_address`, `c_phone`, `c_create`, `c_recive`, `c_sum`, `c_status`) VALUES
(25, 'aaaaaaaaa', 'hà nội', '123', '2016-09-07', '2016-09-30', 1500000, 1),
(26, 'eeeeeeeeeee', 'Việt Nam', '321', '2016-09-07', '2016-09-30', 2100000, 1),
(27, 'Đại ka thuyết', '65464', '7465464', '2016-09-07', '2016-09-13', 1500000, 1),
(28, 'qqqqqqqqqqqqqq', 'asa', '12345', '2016-09-11', '2016-09-29', 1800000, 1),
(30, 'aaaaaaaaaaaaaa', 'Minh khai,Bắc Từ Liêm, Hà Nội', '2', '2016-09-11', '2016-09-11', 0, 1),
(31, 'thuân óc', 'hà nội', '1234567', '2016-09-26', '2016-09-30', 300000, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order_detail`
--

CREATE TABLE `tbl_order_detail` (
  `pk_order_detail_id` int(11) NOT NULL,
  `fk_order_id` int(11) NOT NULL,
  `fk_product_id` int(11) NOT NULL,
  `c_number` int(11) NOT NULL,
  `c_price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_order_detail`
--

INSERT INTO `tbl_order_detail` (`pk_order_detail_id`, `fk_order_id`, `fk_product_id`, `c_number`, `c_price`) VALUES
(31, 25, 20, 1, 500000),
(32, 25, 10, 1, 500000),
(33, 25, 13, 1, 500000),
(34, 26, 15, 2, 800000),
(35, 26, 13, 1, 500000),
(36, 27, 7, 1, 1500000),
(37, 28, 15, 1, 800000),
(38, 28, 3, 1, 1000000),
(39, 31, 21, 1, 300000);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

CREATE TABLE `tbl_product` (
  `pk_product_id` int(11) NOT NULL,
  `fk_category_product_id` int(11) NOT NULL,
  `fk_season_id` int(11) NOT NULL,
  `c_name` varchar(500) NOT NULL,
  `c_description` varchar(4000) NOT NULL,
  `c_content` text NOT NULL,
  `c_img` varchar(1000) NOT NULL,
  `c_price` float NOT NULL,
  `c_hotproduct` int(11) NOT NULL DEFAULT '0',
  `c_selling_product` int(11) NOT NULL DEFAULT '0',
  `c_status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_product`
--

INSERT INTO `tbl_product` (`pk_product_id`, `fk_category_product_id`, `fk_season_id`, `c_name`, `c_description`, `c_content`, `c_img`, `c_price`, `c_hotproduct`, `c_selling_product`, `c_status`) VALUES
(1, 1, 1, 'Áo sơ mi nam', 'Áo sơ mi màu trắng phối ren vai - A8782	1																	', '<p>- Qu&yacute; kh&aacute;ch c&oacute; thể đặt h&agrave;ng ngay tr&ecirc;n website hoặc qua hotline: + Cần thơ: 0975.045.020 (từ 8h &ndash; 21h cả tuần trừ ng&agrave;y lễ). + Hồ Ch&iacute; Minh: 1900 636414 (từ 8h &ndash; 21h cả tuần trừ ng&agrave;y lễ). - Bạn cũng c&oacute; thể mua v&agrave; thử h&agrave;ng tại: + Cần thơ: số 96/5A Nguyễn Thần Hiến (Th&agrave;nh Đo&agrave;n), P.An Cư, Q.Ninh Kiều - TPCT. + Hồ Ch&iacute; Minh: 290/68 Nam Kỳ Khởi Nghĩa, P.8, Quận 3 &ndash; Hồ Ch&iacute; Minh. - Hầu hết c&aacute;c mặt h&agrave;ng c&oacute; sẵn, nhưng để phục vụ tốt hơn khi kh&aacute;ch h&agrave;ng muốn lại cửa h&agrave;ng thử đồ, qu&yacute; kh&aacute;ch vui l&ograve;ng li&ecirc;n hệ trước qua số hotline của c&aacute;c chi nh&aacute;nh để ch&uacute;ng t&ocirc;i chuẩn bị sẵn h&agrave;ng cho kh&aacute;ch h&agrave;ng trước khi tới cửa h&agrave;ng. 1</p>\r\n', 'upload/product/1471638769IMG_7300.jpg', 1000000, 0, 1, 0),
(2, 2, 3, 'Sản phẩm test', 'mô tả sản phẩm', '<p>chi tiết sản phẩm</p>\r\n', 'upload/product/1471687910thumb_1.jpg', 500000, 1, 0, 1),
(3, 2, 2, 'Áo sơ mi nữ ', 'Áo sơ mi màu trắng phối ren vai - A8782	1																							', '<p>- Qu&yacute; kh&aacute;ch c&oacute; thể đặt h&agrave;ng ngay tr&ecirc;n website hoặc qua hotline: + Cần thơ: 0975.045.020 (từ 8h &ndash; 21h cả tuần trừ ng&agrave;y lễ). + Hồ Ch&iacute; Minh: 1900 636414 (từ 8h &ndash; 21h cả tuần trừ ng&agrave;y lễ). - Bạn cũng c&oacute; thể mua v&agrave; thử h&agrave;ng tại: + Cần thơ: số 96/5A Nguyễn Thần Hiến (Th&agrave;nh Đo&agrave;n), P.An Cư, Q.Ninh Kiều - TPCT. + Hồ Ch&iacute; Minh: 290/68 Nam Kỳ Khởi Nghĩa, P.8, Quận 3 &ndash; Hồ Ch&iacute; Minh. - Hầu hết c&aacute;c mặt h&agrave;ng c&oacute; sẵn, nhưng để phục vụ tốt hơn khi kh&aacute;ch h&agrave;ng muốn lại cửa h&agrave;ng thử đồ, qu&yacute; kh&aacute;ch vui l&ograve;ng li&ecirc;n hệ trước qua số hotline của c&aacute;c chi nh&aacute;nh để ch&uacute;ng t&ocirc;i chuẩn bị sẵn h&agrave;ng cho kh&aacute;ch h&agrave;ng trước khi tới cửa h&agrave;ng. 1</p>\r\n', 'upload/product/1471639128ao-so-mi-nu-cong-so-dep-phong-cach-han-quoc-he-2015-cho-co-nang-nang-dong-them-net-noi-bat-7.jpg', 1000000, 0, 0, 1),
(4, 1, 1, 'Sản phẩm 1', ' mô tả  mô tả  mô tả  mô tả  mô tả  mô tả  mô tả  mô tả ', '<p>chi tiế&nbsp;chi tiế&nbsp;chi tiế&nbsp;chi tiế&nbsp;chi tiế&nbsp;chi tiế&nbsp;chi tiế&nbsp;chi tiế&nbsp;chi tiế&nbsp;chi tiế&nbsp;chi tiế&nbsp;chi tiế&nbsp;chi tiế&nbsp;chi tiế&nbsp;chi tiế&nbsp;chi tiế&nbsp;chi tiế&nbsp;chi tiế&nbsp;chi tiế&nbsp;</p>\r\n', 'upload/product/1471641588quan-tay-nam.jpg', 200000, 0, 0, 1),
(5, 1, 1, 'Quần âu nam', 'Quần âu nam dáng đứng A112 th ha hodshi ', '<p>Quần &acirc;u nam d&aacute;ng đứng A112 th ha hodshi&nbsp;Quần &acirc;u nam d&aacute;ng đứng A112 th ha hodshi&nbsp;Quần &acirc;u nam d&aacute;ng đứng A112 th ha hodshi&nbsp;Quần &acirc;u nam d&aacute;ng đứng A112 th ha hodshi&nbsp;Quần &acirc;u nam d&aacute;ng đứng A112 th ha hodshi&nbsp;Quần &acirc;u nam d&aacute;ng đứng A112 th ha hodshi&nbsp;Quần &acirc;u nam d&aacute;ng đứng A112 th ha hodshi&nbsp;Quần &acirc;u nam d&aacute;ng đứng A112 th ha hodshi&nbsp;Quần &acirc;u nam d&aacute;ng đứng A112 th ha hodshi&nbsp;Quần &acirc;u nam d&aacute;ng đứng A112 th ha hodshi&nbsp;Quần &acirc;u nam d&aacute;ng đứng A112 th ha hodshi&nbsp;Quần &acirc;u nam d&aacute;ng đứng A112 th ha hodshi&nbsp;Quần &acirc;u nam d&aacute;ng đứng A112 th ha hodshi&nbsp;Quần &acirc;u nam d&aacute;ng đứng A112 th ha hodshi&nbsp;Quần &acirc;u nam d&aacute;ng đứng A112 th ha hodshi&nbsp;Quần &acirc;u nam d&aacute;ng đứng A112 th ha hodshi&nbsp;Quần &acirc;u nam d&aacute;ng đứng A112 th ha hodshi&nbsp;Quần &acirc;u nam d&aacute;ng đứng A112 th ha hodshi&nbsp;Quần &acirc;u nam d&aacute;ng đứng A112 th ha hodshi&nbsp;Quần &acirc;u nam d&aacute;ng đứng A112 th ha hodshi&nbsp;Quần &acirc;u nam d&aacute;ng đứng A112 th ha hodshi&nbsp;Quần &acirc;u nam d&aacute;ng đứng A112 th ha hodshi&nbsp;Quần &acirc;u nam d&aacute;ng đứng A112 th ha hodshi&nbsp;Quần &acirc;u nam d&aacute;ng đứng A112 th ha hodshi&nbsp;</p>\r\n', 'upload/product/14716688052083_1445585191.72622.jpg', 200000, 1, 0, 1),
(6, 2, 3, 'Áo sơ mi nữ', 'Áo sơ mi nữ cổ đứng E102', '<p>&Aacute;o sơ mi nữ&Aacute;o sơ mi nữ&Aacute;o sơ mi nữ&Aacute;o sơ mi nữ&Aacute;o sơ mi nữ&Aacute;o sơ mi nữ&Aacute;o sơ mi nữ&Aacute;o sơ mi nữ&Aacute;o sơ mi nữ&Aacute;o sơ mi nữ&Aacute;o sơ mi nữ&Aacute;o sơ mi nữ&Aacute;o sơ mi nữ&Aacute;o sơ mi nữ&Aacute;o sơ mi nữ&Aacute;o sơ mi nữ&Aacute;o sơ mi nữ&Aacute;o sơ mi nữ&Aacute;o sơ mi nữ&Aacute;o sơ mi nữ&Aacute;o sơ mi nữ&Aacute;o sơ mi nữ&Aacute;o sơ mi nữ&Aacute;o sơ mi nữ&Aacute;o sơ mi nữ&Aacute;o sơ mi nữ&Aacute;o sơ mi nữ&Aacute;o sơ mi nữ&Aacute;o sơ mi nữ</p>\r\n', 'upload/product/1471669560s.jpg', 550000, 1, 0, 1),
(7, 1, 3, 'Test thêm sản phẩm hot', 'mô tả ', '<p>chi tiết sẳn phẩm</p>\r\n', 'upload/product/1471678983vest-nam-cong-so-MP106014-1.jpg', 1500000, 1, 1, 0),
(9, 1, 4, 'Sản phẩm 01', 'Mô tả sản phẩm 1', '<p>chi tiế sản phẩm 1</p>\r\n', 'upload/product/1471689096ao-somi-nam-MP103152-2.jpg', 1000000, 1, 0, 1),
(10, 1, 4, 'Sản phẩm 02', 'mô tả sản phẩm 2', '<p>chi tiết sản phẩm 2</p>\r\n', 'upload/product/1471689125ao-vest-nam-6-1.jpg', 500000, 1, 0, 1),
(11, 1, 4, 'Sản phẩm 03', 'Mô tả sản phẩm 3', '<p>chi tiết sản phẩm 3</p>\r\n', 'upload/product/1471689158Veneto_ao_vest_74_0410093658.jpg', 1500000, 1, 0, 1),
(12, 1, 4, 'Sản phẩm 04', 'Mô tả sản phẩm 4', '<p>chi tiết sản phẩm 4</p>\r\n', 'upload/product/1471689186huong-dan-cach-chon-ao-so-mi-nam-tre-trung-nang-dong-cho-quy-ong-thoi-trang-he-2014-2.jpg', 500000, 1, 0, 1),
(13, 2, 3, 'Sản phẩm 05', 'mô tả sản phẩm 05', '<p>chi tiế sản phẩm 05</p>\r\n', 'upload/product/14716892239(3).jpg', 500000, 1, 0, 1),
(14, 2, 3, 'Sản phẩm 06', 'Mô tả sản phẩm 06', '<p>chi tiết sản phẩm 06</p>\r\n', 'upload/product/14716892611460688023_ao-so-mi-nu-38.jpg', 500000, 1, 0, 1),
(15, 2, 4, 'Sản phẩm 07', 'Adm sản phẩm mới', '<p>chi tiế sản phẩm 07</p>\r\n', 'upload/product/14716893031460688127_ao-so-mi-nu-thoi-trang.jpg', 800000, 1, 0, 1),
(16, 1, 1, 'Sản phẩm mới 01', 'Mô tả', '<p>chi tiết sản phẩm</p>\r\n', 'upload/product/14718015921eca400f44ca209cabb39995b2df0c45.jpg', 50000, 1, 0, 1),
(17, 1, 1, 'Sản phẩm mới 02', 'mô tả', '<p>chi tiết</p>\r\n', 'upload/product/1471801614980597779_788.jpg', 250000, 1, 0, 1),
(18, 1, 2, 'Sản phẩm mới 03', 'mô tả', '<p>chi tiết</p>\r\n', 'upload/product/1471801636Wrangler-White-V-Neck-T-Shirt-2502-6914981-1-catalog_m.jpg', 350000, 0, 0, 1),
(19, 1, 1, 'Sản phẩm mới 04', 'mô tả', '<p>chi tiết</p>\r\n', 'upload/product/1471801657Tin-Tin-Mens-Style-white-shirt-inspiration-802x1024.jpg', 360000, 0, 0, 1),
(20, 1, 3, 'Sản phẩm mới 05', 'mô tả', '<p>chi tiết</p>\r\n', 'upload/product/1471801678images.jpg', 500000, 1, 0, 1),
(21, 1, 1, 'sản phẩm test', 'mô tả môt tả mô tả môt tả mô tả môt tả mô tả môt tả mô tả môt tả mô tả môt tả mô tả môt tả duhdhdhhđhdhdjdhhdb', '<p>chi tiết sản phẩm&nbsp;chi tiết sản phẩm&nbsp;chi tiết sản phẩm&nbsp;chi tiết sản phẩm&nbsp;chi tiết sản phẩm&nbsp;chi tiết sản phẩm&nbsp;chi tiết sản phẩm&nbsp;chi tiết sản phẩm&nbsp;chi tiết sản phẩm&nbsp;chi tiết sản phẩm&nbsp;chi tiết sản phẩm&nbsp;chi tiết sản phẩm&nbsp;chi tiết sản phẩm&nbsp;chi tiết sản phẩm&nbsp;chi tiết sản phẩm&nbsp;chi tiết sản phẩm&nbsp;chi tiết sản phẩm&nbsp;chi tiết sản phẩm&nbsp;chi tiết sản phẩm&nbsp;chi tiết sản phẩm&nbsp;chi tiết sản phẩm&nbsp;chi tiết sản</p>\r\n\r\n<p><img alt="" src="/AAAAAAAAAAAA/project/upload/images/11140384_799925080104630_3465240618808363455_n(2).jpg" style="height:600px; width:600px" /></p>\r\n\r\n<p>phẩm&nbsp;chi tiết sản phẩm&nbsp;chi tiết sản phẩm&nbsp;chi tiết sản phẩm&nbsp;chi tiết sản phẩm&nbsp;chi tiết sản phẩm&nbsp;chi tiết sản phẩm&nbsp;chi tiết sản phẩm&nbsp;chi tiết sản phẩm&nbsp;chi tiết sản phẩm&nbsp;</p>\r\n\r\n<p>iaoidjoa</p>\r\n\r\n<p>&aacute;djpajsd</p>\r\n\r\n<p><img alt="ádfghjkljhgfdsadfghj" src="/AAAAAAAAAAAA/project/upload/images/13244878_1002434916460086_2753444344361330924_n.jpg" style="height:480px; width:480px" /></p>\r\n\r\n<p>saaa</p>\r\n', 'upload/product/1471801698zara-white-flower-print-t-shirt-product-1-18546355-5-511433415-normal.jpeg', 300000, 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_season`
--

CREATE TABLE `tbl_season` (
  `pk_season_id` int(11) NOT NULL,
  `c_name` varchar(500) NOT NULL,
  `c_img` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_season`
--

INSERT INTO `tbl_season` (`pk_season_id`, `c_name`, `c_img`) VALUES
(1, 'spring', 'upload/season/1472178693spring1.jpg'),
(2, 'summer', 'upload/season/1472178711summer_time-1455175.jpg'),
(3, 'autumn', 'upload/season/1472178719autumn_evrg.jpg'),
(4, 'winter', 'upload/season/1472178732winter-643263_960_720.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_slide`
--

CREATE TABLE `tbl_slide` (
  `pk_slide_id` int(11) NOT NULL,
  `c_name` varchar(500) NOT NULL,
  `c_img` varchar(500) NOT NULL,
  `c_status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_slide`
--

INSERT INTO `tbl_slide` (`pk_slide_id`, `c_name`, `c_img`, `c_status`) VALUES
(2, 'aaa', 'upload/slide/14722234441471801238tkb.png', 0),
(3, 'bbbbbbbbbb', 'upload/slide/14722252721472220996banner.jpg', 0),
(4, '111111111111111111111111111111111111111111', 'upload/slide/147244012201.jpg', 0),
(5, '2222222222222222222222222222', 'upload/slide/147244013302.jpg', 0),
(7, '44444444444444444444444444444444', 'upload/slide/147244014804.jpg', 0),
(8, '1234341242143124242', 'upload/slide/1472516653girls-summer-is-coming-e28093-saloni-shares-summer-skin-care-tips.jpg', 1),
(9, 'ghtydfuyfuiguoghuiogyuifgu', 'upload/slide/1472516670day09-tulips-for-spring-0374.jpg', 1),
(10, 'sdvxvzxcvzxdfasdfasfdasdfasfasdfasf', 'upload/slide/1472516683unnamed.png', 1),
(12, 'ádasdddddđ', 'upload/slide/1472516921winter-health-tips.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `pk_user_id` int(11) NOT NULL,
  `c_username` varchar(200) NOT NULL,
  `c_password` varchar(200) NOT NULL,
  `c_fullname` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`pk_user_id`, `c_username`, `c_password`, `c_fullname`) VALUES
(1, 'admin', '202cb962ac59075b964b07152d234b70', 'Thuyết Tiên Sinh'),
(2, 'Test', '202cb962ac59075b964b07152d234b70', 'Test');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_404`
--
ALTER TABLE `tbl_404`
  ADD PRIMARY KEY (`pk_404_id`);

--
-- Indexes for table `tbl_about`
--
ALTER TABLE `tbl_about`
  ADD PRIMARY KEY (`pk_about_id`);

--
-- Indexes for table `tbl_advertise`
--
ALTER TABLE `tbl_advertise`
  ADD PRIMARY KEY (`pk_advertise_id`);

--
-- Indexes for table `tbl_category_product`
--
ALTER TABLE `tbl_category_product`
  ADD PRIMARY KEY (`pk_category_product_id`);

--
-- Indexes for table `tbl_news`
--
ALTER TABLE `tbl_news`
  ADD PRIMARY KEY (`pk_news_id`);

--
-- Indexes for table `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD PRIMARY KEY (`pk_order_id`);

--
-- Indexes for table `tbl_order_detail`
--
ALTER TABLE `tbl_order_detail`
  ADD PRIMARY KEY (`pk_order_detail_id`);

--
-- Indexes for table `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`pk_product_id`);

--
-- Indexes for table `tbl_season`
--
ALTER TABLE `tbl_season`
  ADD PRIMARY KEY (`pk_season_id`);

--
-- Indexes for table `tbl_slide`
--
ALTER TABLE `tbl_slide`
  ADD PRIMARY KEY (`pk_slide_id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`pk_user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_404`
--
ALTER TABLE `tbl_404`
  MODIFY `pk_404_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tbl_about`
--
ALTER TABLE `tbl_about`
  MODIFY `pk_about_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_advertise`
--
ALTER TABLE `tbl_advertise`
  MODIFY `pk_advertise_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_category_product`
--
ALTER TABLE `tbl_category_product`
  MODIFY `pk_category_product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_news`
--
ALTER TABLE `tbl_news`
  MODIFY `pk_news_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `tbl_order`
--
ALTER TABLE `tbl_order`
  MODIFY `pk_order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT for table `tbl_order_detail`
--
ALTER TABLE `tbl_order_detail`
  MODIFY `pk_order_detail_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
--
-- AUTO_INCREMENT for table `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `pk_product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `tbl_season`
--
ALTER TABLE `tbl_season`
  MODIFY `pk_season_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tbl_slide`
--
ALTER TABLE `tbl_slide`
  MODIFY `pk_slide_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `pk_user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
