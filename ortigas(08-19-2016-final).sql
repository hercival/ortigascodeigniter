-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 19, 2016 at 12:26 PM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ortigas`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `date`) VALUES
(1, 'admin', 'admin', '2016-07-28 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `hda_career`
--

CREATE TABLE `hda_career` (
  `id` int(10) NOT NULL,
  `title` varchar(150) NOT NULL,
  `content` text NOT NULL,
  `alias` varchar(225) NOT NULL,
  `featured_image` varchar(225) NOT NULL,
  `publish` int(11) NOT NULL,
  `date_publish` datetime NOT NULL,
  `date_created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hda_career`
--

INSERT INTO `hda_career` (`id`, `title`, `content`, `alias`, `featured_image`, `publish`, `date_publish`, `date_created`) VALUES
(1, 'ASSET PLANNING & COMPLIANCE MANAGER', '<p>Job description starts here, lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>\n\n<p>&nbsp;</p>\n\n<h3>Job Requirements:</h3>\n\n<p>&nbsp;</p>\n\n<p>&nbsp;</p>\n\n<p>? Monitor compliance and other repertorial requirements imposed by the applicable laws including but not limited to laws on mining and environment (DENR, MGB, LGUs, etc.)</p>\n\n<p>&nbsp;</p>\n\n<p>- Coordinate with the Legal Department regarding compliances.</p>\n\n<p>- Monitor the amount of aggregates.</p>\n\n<p>- Monitor the completeness, accuracy, timeliness and validity of sales.</p>\n\n<p>- Overall in-charge of the maintenance and upkeep of Concrete Aggregates idle properties.</p>\n\n<p><br />\n<p>For further information on the employment opportunities, please contact Anne Macario at 631-12-31 local 173.</p>\n\n<p>&nbsp;</p>\n\n<p>&nbsp;</p>\n', 'asset-planning-and-compliance-manager', 'featured-img-31.jpg', 1, '2016-08-17 00:00:00', '2016-08-17 12:16:44'),
(2, 'BILLING & COLLECTION OFFICER', '<p>Job description starts here, lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>', 'billing-collection-officer', 'featured-img-33.jpg', 1, '2016-08-15 00:00:00', '2016-08-17 13:47:11');

-- --------------------------------------------------------

--
-- Table structure for table `hda_menu`
--

CREATE TABLE `hda_menu` (
  `id` int(10) NOT NULL,
  `type` varchar(50) NOT NULL,
  `title` varchar(150) NOT NULL,
  `alias` varchar(150) NOT NULL,
  `page_id` int(10) NOT NULL,
  `level` int(10) NOT NULL,
  `parent` int(10) NOT NULL,
  `menu_order` int(10) NOT NULL,
  `publish` int(10) NOT NULL,
  `date_created` datetime NOT NULL,
  `url_link` varchar(500) NOT NULL,
  `group_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hda_menu`
--

INSERT INTO `hda_menu` (`id`, `type`, `title`, `alias`, `page_id`, `level`, `parent`, `menu_order`, `publish`, `date_created`, `url_link`, `group_id`) VALUES
(1, 'page', 'ESTATE', 'estate', 11, 0, 0, 0, 1, '2016-08-01 00:00:00', '', 1),
(3, 'page', 'Majorca', 'majorca', 19, 2, 5, 0, 1, '2016-08-01 02:06:11', 'localhost', 1),
(5, 'page', 'Circulo Verde', 'circulo-verde', 10, 1, 1, 0, 1, '2016-08-01 00:00:00', '', 1),
(6, 'page', 'Capitol Commons', 'capitol-commons', 17, 1, 1, 1, 1, '2016-08-02 00:00:00', '', 1),
(8, 'page', 'Ibiza', 'ibiza', 21, 2, 5, 2, 1, '2016-08-03 14:28:53', '', 1),
(9, 'page', 'Estancia', 'estancia', 16, 2, 6, 3, 1, '2016-08-03 14:31:34', '', 1),
(11, 'page', 'RESIDENCES', 'residences', 12, 0, 0, 1, 1, '2016-08-03 15:08:55', '', 1),
(12, 'page', 'Seville', 'seville', 20, 2, 5, 1, 1, '2016-08-03 16:28:29', '', 1),
(13, 'page', 'MALLS', 'malls', 13, 0, 0, 2, 1, '2016-08-09 12:09:49', '', 1),
(14, 'page', 'OFFICES', 'offices', 14, 0, 0, 3, 1, '2016-08-09 12:10:18', '', 1),
(15, 'page', 'CAREERS', 'careers', 9, 0, 0, 4, 1, '2016-08-10 11:36:13', '', 1),
(18, 'page', 'CONTACT US', 'contact-us', 8, 0, 0, 5, 1, '2016-08-12 15:11:53', '', 1),
(19, 'page', 'ABOUT ORTIGAS ', 'about-ortigas', 18, 0, 0, 6, 1, '2016-08-12 16:58:18', '', 2),
(20, 'page', 'INVESTORS RELATIONS ', 'investors-relations', 5, 0, 0, 7, 1, '2016-08-12 16:59:26', '', 2),
(21, 'page', 'NEWS ', 'latest-news', 7, 0, 0, 8, 1, '2016-08-12 17:00:21', '', 2),
(22, 'hidden', 'Estancia', 'estancia-2', 16, 1, 14, 0, 1, '2016-08-18 16:55:18', '', 1),
(23, 'page', 'LLEIDA', 'lleida', 22, 2, 5, 3, 1, '2016-08-19 15:43:38', '', 1),
(24, 'page', 'AVILA', 'avila', 23, 2, 5, 4, 1, '2016-08-19 15:49:04', '', 1),
(25, 'page', 'CIRCULO VERDE GARDEN HOMES', 'garden-homes', 24, 2, 5, 5, 1, '2016-08-19 15:58:09', '', 1),
(26, 'page', 'INDUSTRIA', 'industria', 25, 2, 5, 6, 1, '2016-08-19 16:13:43', '', 1),
(27, 'page', 'HACHI PARK', 'hachi-park', 26, 2, 5, 7, 1, '2016-08-19 16:31:02', '', 1),
(28, 'page', 'THE IMPERIUM', 'the-imperium', 27, 2, 6, 0, 1, '2016-08-19 16:49:02', '', 1),
(29, 'page', 'THE ROYALTON', 'the-royalton', 28, 2, 6, 1, 1, '2016-08-19 17:14:30', '', 1),
(30, 'page', 'MAVEN', 'maven', 29, 2, 6, 2, 1, '2016-08-19 17:28:02', '', 1),
(31, 'page', 'PARAGON', 'paragon', 30, 2, 6, 4, 1, '2016-08-19 17:40:53', '', 1),
(32, 'page', 'UNIMART', 'unimart', 31, 2, 6, 5, 1, '2016-08-19 17:50:24', '', 1),
(33, 'page', 'VIRIDIAN', 'viridian-in-greenhills', 32, 1, 1, 2, 1, '2016-08-19 18:09:15', '', 1),
(34, 'page', 'Greenhills Shopping Center', 'greenhills-shopping-center', 33, 2, 33, 0, 1, '2016-08-19 18:17:58', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `hda_menu_group`
--

CREATE TABLE `hda_menu_group` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` varchar(500) NOT NULL,
  `date_created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hda_menu_group`
--

INSERT INTO `hda_menu_group` (`id`, `name`, `description`, `date_created`) VALUES
(1, 'Main Menu', 'Main Top Menu', '2016-08-03 01:02:03'),
(2, 'Footer Menu', 'footer menu bottom menu', '2016-08-03 04:05:06');

-- --------------------------------------------------------

--
-- Table structure for table `hda_modules`
--

CREATE TABLE `hda_modules` (
  `id` int(50) NOT NULL,
  `name` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL,
  `mod_type` varchar(255) NOT NULL,
  `page_visible` int(50) NOT NULL,
  `publish` int(10) NOT NULL,
  `date_created` datetime NOT NULL,
  `mod_type_id` int(50) NOT NULL,
  `layout` varchar(255) NOT NULL,
  `ordering` int(10) NOT NULL,
  `mod_data` longtext NOT NULL,
  `show_title` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hda_modules`
--

INSERT INTO `hda_modules` (`id`, `name`, `position`, `mod_type`, `page_visible`, `publish`, `date_created`, `mod_type_id`, `layout`, `ordering`, `mod_data`, `show_title`) VALUES
(2, 'Home Banner', 'position-1', 'banner', 5, 1, '2016-08-04 17:34:42', 0, 'home', 1, '{"content":"Ortigas is on its 85th year, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.","image":"splashImg.jpg","logo":"ocLogo-big1.png","id":"2"}', 0),
(4, 'Home Slider', 'position-3', 'banner', 5, 1, '2016-08-05 17:00:44', 0, 'sidecontent', 2, '{"caption":"sameple caption","btn_name":"button text","link":"insularlife.com","content":"","item":["cv-amenity.jpg","estate-img-1a.jpg"],"id":"4"}', 1),
(5, 'News Banner', 'position-4', 'banner', 5, 1, '2016-08-08 12:55:33', 0, 'default', 1, '{"image":"featured-img-2.jpg","item":["cv-amenity.jpg","featured-img-2.jpg"],"id":"5"}', 0),
(6, 'Sample Tile Module', 'position-3', 'tile', 5, 1, '2016-08-08 14:06:59', 0, 'default', 0, '{"image":"fverde.jpg","item":["mall1.jpg,ESTANCIA,test\\/test","mall21.jpg,INSUDTRIA,#","mall3.jpg,GREENHILLS SHOPPING CENTER,greenhills-shopping","fverde.jpg,FRONTERA VERDE,#"],"id":"6"}', 1),
(7, 'NEWS', 'position-4', 'news', 5, 1, '2016-08-09 16:48:51', 0, 'list', 0, '{"newscount":"4","column":"6","id":"7"}', 1),
(8, 'Contact Us', 'position-1', 'contactus', 8, 1, '2016-08-12 15:12:25', 0, 'default', 0, '{"subject":"Ortigas and Company - Contact Us","sentto":"hercivalaragon@gmail.com","sentcc":"val.aragon@virusworldside.com","id":"8"}', 1),
(9, 'Home Menu icons', 'position-2', 'html', 5, 1, '2016-08-17 11:45:11', 0, 'default', 0, '{"html":"<section class=\\"container-fluid icons-tab\\">\\n<div class=\\"defaultMarginTop defaultMarginBottom\\">\\n<div class=\\"col-xs-6 col-md-4 col-lg-2 icons-margin\\">\\n<center><a href=\\"estate\\"><img src=\\"data:image\\/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI\\/Pgo8c3ZnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHZlcnNpb249IjEuMSIgdmlld0JveD0iMCAwIDQ2MyA0NjMiIGVuYWJsZS1iYWNrZ3JvdW5kPSJuZXcgMCAwIDQ2MyA0NjMiIHdpZHRoPSI2NHB4IiBoZWlnaHQ9IjY0cHgiPgogIDxnPgogICAgPHBhdGggZD0ibTQ1NS41LDM2OGgtNjQuNXYtNDkuNDU4YzMxLjQ5LTMuNzI0IDU2LTMwLjU2NyA1Ni02My4wNDIgMC01Ni40NDYtNTQuNDY1LTE2Ni42NzMtNTYuNzg0LTE3MS4zMzgtMS4yNjctMi41NS0zLjg2OS00LjE2Mi02LjcxNi00LjE2MnMtNS40NDksMS42MTItNi43MTYsNC4xNjJjLTAuMTQxLDAuMjg1LTE0LjI5NywyOC44NDUtMjguMjUsNjMuODA5LTExLjA3NiwyNy43NTUtMTguOTUyLDUxLjY0Ny0yMy41ODcsNzEuNDg5bC04OS43NzEtNTAuNDk2Yy0yLjI4My0xLjI4NC01LjA3LTEuMjg0LTcuMzU0LDBsLTUyLjgyMiwyOS43MTJ2LTcuNjc2aDAuNWM0LjE0MiwwIDcuNS0zLjM1OCA3LjUtNy41cy0zLjM1OC03LjUtNy41LTcuNWgtNDhjLTQuMTQyLDAtNy41LDMuMzU4LTcuNSw3LjVzMy4zNTgsNy41IDcuNSw3LjVoMC41djM0LjExNGwtNy41MTIsNC4yMjZjLTEuNjAxLTYuNjE5LTMuNDYyLTEzLjQ1NS01LjU0NS0yMC4xMTktMTAuMzU1LTMzLjEyMS0yMS45NDktNDkuMjIxLTM1LjQ0My00OS4yMjFzLTI1LjA4OCwxNi4xLTM1LjQ0Miw0OS4yMmMtNy40NDgsMjMuODIyLTEyLjA1OCw0OS44MzctMTIuMDU4LDYwLjI4IDAsMjAuNjU0IDE3LjM2LDM3LjgyNiA0MCw0MC45Nzh2NTcuNTIyaC02NC41Yy00LjE0MiwwLTcuNSwzLjM1OC03LjUsNy41czMuMzU4LDcuNSA3LjUsNy41aDQ0OGM0LjE0MiwwIDcuNS0zLjM1OCA3LjUtNy41cy0zLjM1OC03LjUtNy41LTcuNXptLTIwNy41LTQ4aC0wLjVjLTQuMTQyLDAtNy41LDMuMzU4LTcuNSw3LjVzMy4zNTgsNy41IDcuNSw3LjVoMC41djMzaC0zM3YtODFoMzN2MzN6bTE1LTQwLjVjMC00LjE0Mi0zLjM1OC03LjUtNy41LTcuNWgtNDhjLTQuMTQyLDAtNy41LDMuMzU4LTcuNSw3LjV2ODguNWgtODF2LTc1LjQ4MWMzLjkxNC01LjExIDYuNTU2LTExLjAxOCA3LjU1LTE3LjM4bDEwNC45NS01OS4wMzQgODkuNDYsNTAuMzIxYzAuMzYzLDIuMDgyIDAuODI2LDQuMTI5IDEuMzg3LDYuMTM3LTAuODc4LTAuMzYxLTEuODM5LTAuNTYzLTIuODQ4LTAuNTYzaC0zMmMtNC4xNDIsMC03LjUsMy4zNTgtNy41LDcuNXY1NmMwLDQuMTQyIDMuMzU4LDcuNSA3LjUsNy41aDMyYzQuMTQyLDAgNy41LTMuMzU4IDcuNS03LjV2LTUxLjA3NGM0LjE0Niw4LjA2NiA5Ljk2NCwxNS4xMzEgMTcsMjAuNzM4djYyLjgzNmgtODF2LTg4LjV6bTQ5LjAwMSwxNi41aC0xN3YtOWgxN3Y5em0tMTcsMTVoMTd2MTdoLTE3di0xN3ptNjQsMy4wNzhjNS4zMzcsMi4yNCAxMS4wNDUsMy43NTkgMTcsNC40NjR2NDkuNDU4aC0xN3YtNTMuOTIyem0yNC41LTIwOS4xMzVjMTQuNzE4LDMxLjY4NCA0OC41LDEwOC45NDQgNDguNSwxNTAuNTU3IDAsMjQuMTkzLTE3LjgwNiw0NC4zMDItNDEsNDcuOTE4di0yMy45MTVjMC0wLjAwMiAwLTAuMDAzIDAtMC4wMDV2LTIwLjg5MWwyMS44MDMtMjEuODAzYzIuOTI5LTIuOTI5IDIuOTI5LTcuNjc4IDAtMTAuNjA2LTIuOTI5LTIuOTI5LTcuNjc4LTIuOTI5LTEwLjYwNiwwbC0xMS4xOTcsMTEuMTk2di0xMy44OTRjMC00LjE0Mi0zLjM1OC03LjUtNy41LTcuNXMtNy41LDMuMzU4LTcuNSw3LjV2MzEuOTk3YzAsMC4wMDIgMCwwLjAwMyAwLDAuMDA1djUuODkxbC0xMS4xOTctMTEuMTk3Yy0yLjkyOS0yLjkyOS03LjY3OC0yLjkyOS0xMC42MDYsMC0yLjkyOSwyLjkyOS0yLjkyOSw3LjY3OCAwLDEwLjYwNmwyMS44MDMsMjEuODA0djIwLjgxMmMtMjMuMTk0LTMuNjE2LTQxLTIzLjcyNS00MS00Ny45MTggMC00MS42MTMgMzMuNzgyLTExOC44NzMgNDguNS0xNTAuNTU3em0tMjQwLjUsODYuMDU3aDE3djE2LjExNGwtMTcsOS41NjN2LTI1LjY3N3ptODguNS02Ljg5NWw5MC4zNTYsNTAuODI1Yy0wLjgsNC45NTQtMS4zNDEsOS41ODEtMS42MjMsMTMuODc4bC04NS4wNTYtNDcuODQ0Yy0yLjI4My0xLjI4NC01LjA3MS0xLjI4NC03LjM1NCwwbC0xMDEuNzY5LDU3LjI0NWMtMC41MzQtNC4wMTItMS4yODUtOC41OTEtMi4yMzQtMTMuNTM0bDEwNy42OC02MC41N3ptLTE4NC41LDg1LjM5NWMwLTcuOTM4IDQuMDUtMzIuMzc5IDExLjM3NC01NS44MDQgOS45MjUtMzEuNzQ0IDE4LjYxNS0zOC42OTYgMjEuMTI2LTM4LjY5NnMxMS4yMDEsNi45NTIgMjEuMTI2LDM4LjY5NmM3LjMyNCwyMy40MjUgMTEuMzc0LDQ3Ljg2NiAxMS4zNzQsNTUuODA0IDAsMTIuNTA3LTEwLjY4NSwyMy4wMTEtMjUsMjUuNzh2LTIzLjc4YzAtNC4xNDItMy4zNTgtNy41LTcuNS03LjVzLTcuNSwzLjM1OC03LjUsNy41djIzLjc4Yy0xNC4zMTUtMi43NjktMjUtMTMuMjczLTI1LTI1Ljc4em00MCw0MC45NzhjNi4xMzQtMC44NTQgMTEuODgxLTIuNzM1IDE3LTUuNDM4djYyLjk2aC0xN3YtNTcuNTIyeiIgZmlsbD0iI0ZGRkZGRiIvPgogICAgPHBhdGggZD0ibTE3NS41LDI3MmgtMzJjLTQuMTQyLDAtNy41LDMuMzU4LTcuNSw3LjV2NTZjMCw0LjE0MiAzLjM1OCw3LjUgNy41LDcuNWgzMmM0LjE0MiwwIDcuNS0zLjM1OCA3LjUtNy41di01NmMwLTQuMTQyLTMuMzU4LTcuNS03LjUtNy41em0tNy41LDE1djloLTE3di05aDE3em0tMTcsNDF2LTE3aDE3djE3aC0xN3oiIGZpbGw9IiNGRkZGRkYiLz4KICA8L2c+Cjwvc3ZnPgo=\\" \\/><\\/a>\\n<p style=\\"margin-top: 8px;\\">ESTATES<\\/p>\\n<\\/center>\\n<\\/div>\\n\\n<div class=\\"col-xs-6 col-md-4 col-lg-2 icons-margin\\">\\n<center><a href=\\"residences\\"><img src=\\"data:image\\/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI\\/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTkuMS4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4PSIwcHgiIHk9IjBweCIgdmlld0JveD0iMCAwIDMwLjYwOCAzMC42MDgiIHN0eWxlPSJlbmFibGUtYmFja2dyb3VuZDpuZXcgMCAwIDMwLjYwOCAzMC42MDg7IiB4bWw6c3BhY2U9InByZXNlcnZlIiB3aWR0aD0iNjRweCIgaGVpZ2h0PSI2NHB4Ij4KPGc+Cgk8Zz4KCQk8Zz4KCQkJPGc+CgkJCQk8cGF0aCBkPSJNMjkuNzMzLDMwLjYwOEgwLjg3NUMwLjM5MiwzMC42MDgsMCwzMC4yMTYsMCwyOS43MzNWMTAuNjExYzAtMC4yOSwwLjE0NS0wLjU2MiwwLjM4Ni0wLjcyNSAgICAgIGwxNC40My05LjczNmMwLjI5Ny0wLjE5OSwwLjY4My0wLjE5OSwwLjk3OSwwbDE0LjQyOCw5LjczNmMwLjI0MSwwLjE2MiwwLjM4NiwwLjQzNCwwLjM4NiwwLjcyNXYxOS4xMjIgICAgICBDMzAuNjA4LDMwLjIxNiwzMC4yMTcsMzAuNjA4LDI5LjczMywzMC42MDh6IE0xLjc1LDI4Ljg1OGgyNy4xMDhWMTEuMDc2TDE1LjMwNSwxLjkyOUwxLjc1LDExLjA3NlYyOC44NTh6IiBmaWxsPSIjRkZGRkZGIi8+CgkJCTwvZz4KCQkJPGc+CgkJCQk8cGF0aCBkPSJNMjUuMjE2LDMwLjYwOGgtOS45MTFjLTAuNDgyLDAtMC44NzUtMC4zOTItMC44NzUtMC44NzVWMTUuMzA0YzAtMC40ODMsMC4zOTMtMC44NzUsMC44NzUtMC44NzUgICAgICBoOS45MTFjMC40ODMsMCwwLjg3NSwwLjM5MiwwLjg3NSwwLjg3NXYxNC40MjlDMjYuMDkxLDMwLjIxNiwyNS42OTksMzAuNjA4LDI1LjIxNiwzMC42MDh6IE0xNi4xOCwyOC44NThoOC4xNjF2LTEyLjY4SDE2LjE4ICAgICAgVjI4Ljg1OHoiIGZpbGw9IiNGRkZGRkYiLz4KCQkJPC9nPgoJCTwvZz4KCQk8Zz4KCQkJPHBhdGggZD0iTTEwLjMyMSwyMC44NzNoLTUuODljLTAuNDgzLDAtMC44NzUtMC4zOTItMC44NzUtMC44NzV2LTQuNjkzYzAtMC40ODMsMC4zOTItMC44NzUsMC44NzUtMC44NzUgICAgIGg1Ljg5YzAuNDgzLDAsMC44NzUsMC4zOTIsMC44NzUsMC44NzV2NC42OTNDMTEuMTk2LDIwLjQ4MSwxMC44MDQsMjAuODczLDEwLjMyMSwyMC44NzN6IE01LjMwNywxOS4xMjNoNC4xNHYtMi45NDRoLTQuMTQgICAgIFYxOS4xMjN6IiBmaWxsPSIjRkZGRkZGIi8+CgkJPC9nPgoJPC9nPgoJPGc+CgkJPHBhdGggZD0iTTI5LjczMywxMS45MzFIMC44NzVDMC4zOTIsMTEuOTMxLDAsMTEuNTQsMCwxMS4wNTZjMC0wLjQ4MiwwLjM5Mi0wLjg3NSwwLjg3NS0wLjg3NWgyOC44NTggICAgYzAuNDgzLDAsMC44NzUsMC4zOTMsMC44NzUsMC44NzVDMzAuNjA4LDExLjU0LDMwLjIxNywxMS45MzEsMjkuNzMzLDExLjkzMXoiIGZpbGw9IiNGRkZGRkYiLz4KCTwvZz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8L3N2Zz4K\\" \\/><\\/a>\\n\\n<p style=\\"margin-top: 8px;\\">RESIDENCES<\\/p>\\n<\\/center>\\n<\\/div>\\n\\n<div class=\\"col-xs-6 col-md-4 col-lg-2 icons-margin\\">\\n<center><a href=\\"malls\\"><img src=\\"data:image\\/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI\\/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTkuMS4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4PSIwcHgiIHk9IjBweCIgdmlld0JveD0iMCAwIDQ4OSA0ODkiIHN0eWxlPSJlbmFibGUtYmFja2dyb3VuZDpuZXcgMCAwIDQ4OSA0ODk7IiB4bWw6c3BhY2U9InByZXNlcnZlIiB3aWR0aD0iNjRweCIgaGVpZ2h0PSI2NHB4Ij4KPGc+Cgk8cGF0aCBkPSJNNDQwLjEsNDIyLjdsLTI4LTMxNS4zYy0wLjYtNy02LjUtMTIuMy0xMy40LTEyLjNoLTU3LjZDMzQwLjMsNDIuNSwyOTcuMywwLDI0NC41LDBzLTk1LjgsNDIuNS05Ni42LDk1LjFIOTAuMyAgIGMtNywwLTEyLjgsNS4zLTEzLjQsMTIuM2wtMjgsMzE1LjNjMCwwLjQtMC4xLDAuOC0wLjEsMS4yYzAsMzUuOSwzMi45LDY1LjEsNzMuNCw2NS4xaDI0NC42YzQwLjUsMCw3My40LTI5LjIsNzMuNC02NS4xICAgQzQ0MC4yLDQyMy41LDQ0MC4yLDQyMy4xLDQ0MC4xLDQyMi43eiBNMjQ0LjUsMjdjMzcuOSwwLDY4LjgsMzAuNCw2OS42LDY4LjFIMTc0LjlDMTc1LjcsNTcuNCwyMDYuNiwyNywyNDQuNSwyN3ogTTM2Ni44LDQ2MiAgIEgxMjIuMmMtMjUuNCwwLTQ2LTE2LjgtNDYuNC0zNy41bDI2LjgtMzAyLjNoNDUuMnY0MWMwLDcuNSw2LDEzLjUsMTMuNSwxMy41czEzLjUtNiwxMy41LTEzLjV2LTQxaDEzOS4zdjQxICAgYzAsNy41LDYsMTMuNSwxMy41LDEzLjVzMTMuNS02LDEzLjUtMTMuNXYtNDFoNDUuMmwyNi45LDMwMi4zQzQxMi44LDQ0NS4yLDM5Mi4xLDQ2MiwzNjYuOCw0NjJ6IiBmaWxsPSIjRkZGRkZGIi8+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPC9zdmc+Cg==\\" \\/><\\/a>\\n\\n<p style=\\"margin-top: 8px;\\">MALLS<\\/p>\\n<\\/center>\\n<\\/div>\\n\\n<div class=\\"col-xs-6 col-md-4 col-lg-2 icons-margin\\">\\n<center><a href=\\"offices\\"><img src=\\"data:image\\/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI\\/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTkuMS4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4PSIwcHgiIHk9IjBweCIgdmlld0JveD0iMCAwIDQ4OSA0ODkiIHN0eWxlPSJlbmFibGUtYmFja2dyb3VuZDpuZXcgMCAwIDQ4OSA0ODk7IiB4bWw6c3BhY2U9InByZXNlcnZlIiB3aWR0aD0iNjRweCIgaGVpZ2h0PSI2NHB4Ij4KPGc+Cgk8cGF0aCBkPSJNNDQwLjEsNDIyLjdsLTI4LTMxNS4zYy0wLjYtNy02LjUtMTIuMy0xMy40LTEyLjNoLTU3LjZDMzQwLjMsNDIuNSwyOTcuMywwLDI0NC41LDBzLTk1LjgsNDIuNS05Ni42LDk1LjFIOTAuMyAgIGMtNywwLTEyLjgsNS4zLTEzLjQsMTIuM2wtMjgsMzE1LjNjMCwwLjQtMC4xLDAuOC0wLjEsMS4yYzAsMzUuOSwzMi45LDY1LjEsNzMuNCw2NS4xaDI0NC42YzQwLjUsMCw3My40LTI5LjIsNzMuNC02NS4xICAgQzQ0MC4yLDQyMy41LDQ0MC4yLDQyMy4xLDQ0MC4xLDQyMi43eiBNMjQ0LjUsMjdjMzcuOSwwLDY4LjgsMzAuNCw2OS42LDY4LjFIMTc0LjlDMTc1LjcsNTcuNCwyMDYuNiwyNywyNDQuNSwyN3ogTTM2Ni44LDQ2MiAgIEgxMjIuMmMtMjUuNCwwLTQ2LTE2LjgtNDYuNC0zNy41bDI2LjgtMzAyLjNoNDUuMnY0MWMwLDcuNSw2LDEzLjUsMTMuNSwxMy41czEzLjUtNiwxMy41LTEzLjV2LTQxaDEzOS4zdjQxICAgYzAsNy41LDYsMTMuNSwxMy41LDEzLjVzMTMuNS02LDEzLjUtMTMuNXYtNDFoNDUuMmwyNi45LDMwMi4zQzQxMi44LDQ0NS4yLDM5Mi4xLDQ2MiwzNjYuOCw0NjJ6IiBmaWxsPSIjRkZGRkZGIi8+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPC9zdmc+Cg==\\" \\/><\\/a>\\n\\n<p style=\\"margin-top: 8px;\\">OFFICES<\\/p>\\n<\\/center>\\n<\\/div>\\n\\n<div class=\\"col-xs-6 col-md-4 col-lg-2 icons-margin\\">\\n<center><a href=\\"careers\\"><img src=\\"data:image\\/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI\\/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTguMC4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjwhRE9DVFlQRSBzdmcgUFVCTElDICItLy9XM0MvL0RURCBTVkcgMS4xLy9FTiIgImh0dHA6Ly93d3cudzMub3JnL0dyYXBoaWNzL1NWRy8xLjEvRFREL3N2ZzExLmR0ZCI+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4PSIwcHgiIHk9IjBweCIgdmlld0JveD0iMCAwIDI5Ny4zODQgMjk3LjM4NCIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgMjk3LjM4NCAyOTcuMzg0OyIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSIgd2lkdGg9IjY0cHgiIGhlaWdodD0iNjRweCI+CjxnPgoJPHBhdGggZD0iTTI2NS41Myw3OC4xMTJjLTAuMDE0LTAuMTM0LTAuMDM3LTAuMjY2LTAuMDYtMC4zOTdjLTAuMDA4LTAuMDQ1LTAuMDEzLTAuMDkxLTAuMDItMC4xMzUgICBjLTAuMDMxLTAuMTU2LTAuMDcyLTAuMzEtMC4xMTYtMC40NjJjLTAuMDA2LTAuMDE5LTAuMDA5LTAuMDM4LTAuMDE1LTAuMDU4Yy0wLjA0Ny0wLjE1Mi0wLjEwMi0wLjMwMy0wLjE2Mi0wLjQ1ICAgYy0wLjAwNy0wLjAxOC0wLjAxMi0wLjAzNy0wLjAyLTAuMDU1Yy0wLjA1OC0wLjEzOS0wLjEyNC0wLjI3NC0wLjE5My0wLjQwOGMtMC4wMTMtMC4wMjUtMC4wMjMtMC4wNTMtMC4wMzctMC4wNzcgICBjLTAuMDY0LTAuMTIyLTAuMTM5LTAuMjM5LTAuMjEyLTAuMzU1Yy0wLjAyMi0wLjAzNS0wLjA0Mi0wLjA3Mi0wLjA2NS0wLjEwNmMtMC4wNy0wLjEwNi0wLjE0OS0wLjIwNy0wLjIyOC0wLjMwOCAgIGMtMC4wMzItMC4wNDEtMC4wNi0wLjA4NS0wLjA5My0wLjEyNGMtMC4wOTYtMC4xMTctMC4xOTktMC4yMjgtMC4zMDUtMC4zMzdjLTAuMDItMC4wMi0wLjAzNS0wLjA0MS0wLjA1NS0wLjA2MUwxOTAuNzc2LDEuNjA4ICAgVjEuNjA3Yy0wLjEyNy0wLjEyNy0wLjI2MS0wLjI0Ny0wLjM5OC0wLjM2Yy0wLjAzLTAuMDI1LTAuMDYzLTAuMDQ3LTAuMDk0LTAuMDdjLTAuMTExLTAuMDg3LTAuMjIzLTAuMTczLTAuMzM4LTAuMjUgICBjLTAuMDI4LTAuMDItMC4wNTktMC4wMzUtMC4wODctMC4wNTNjLTAuMTIzLTAuMDc5LTAuMjQ3LTAuMTU2LTAuMzc2LTAuMjI1Yy0wLjAxOC0wLjAxLTAuMDM4LTAuMDE4LTAuMDU3LTAuMDI3ICAgYy0wLjE0MS0wLjA3My0wLjI4My0wLjE0My0wLjQzLTAuMjAzYy0wLjAwOC0wLjAwNC0wLjAxOC0wLjAwNi0wLjAyNS0wLjAxYy0wLjE1Ny0wLjA2NS0wLjMxNi0wLjEyMi0wLjQ3OS0wLjE3MiAgIGMtMC4wMDctMC4wMDItMC4wMTQtMC4wMDItMC4wMi0wLjAwNGMtMC4xNjQtMC4wNS0wLjMzMS0wLjA5Mi0wLjUtMC4xMjZjLTAuMDIxLTAuMDA1LTAuMDQ0LTAuMDA2LTAuMDY1LTAuMDExICAgYy0wLjE1NC0wLjAyOC0wLjMxLTAuMDU0LTAuNDY4LTAuMDY5Yy0wLjEtMC4wMS0wLjIwMS0wLjAxMS0wLjMwMy0wLjAxNUMxODcuMDU3LDAuMDA5LDE4Ni45NzcsMCwxODYuODk1LDAgICBjLTAuMDAyLDAtMC4wMDMsMC0wLjAwNSwwSDM3LjMxNWMtMy4wMzEsMC01LjQ4OCwyLjQ1Ny01LjQ4OCw1LjQ4OHYyODYuNDA4YzAsMy4wMywyLjQ1Nyw1LjQ4Nyw1LjQ4OCw1LjQ4N2gyMjIuNzU0ICAgYzMuMDMxLDAsNS40ODgtMi40NTcsNS40ODgtNS40ODdWNzguNjZsMCwwdi0wLjAwMWMwLTAuMDA3LTAuMDAyLTAuMDE1LTAuMDAyLTAuMDIxQzI2NS41NTUsNzguNDYsMjY1LjU0Niw3OC4yODUsMjY1LjUzLDc4LjExMnogICAgTTI0Ni44MjIsNzMuMTc0bC01NC40MzUsMC4wMDZsLTAuMDA0LTU0LjQ0MkwyNDYuODIyLDczLjE3NHogTTI1NC41ODEsMjg2LjQwOUg0Mi44MDJWMTAuOTc2aDEzOC42MDVsMC4wMDQsNjcuNjkzICAgYzAsMS40NTUsMC41NzgsMi44NTIsMS42MDcsMy44OGMxLjAyOSwxLjAyOSwyLjQyNiwxLjYwNywzLjg4MSwxLjYwN2w2Ny42ODItMC4wMDhWMjg2LjQwOXoiIGZpbGw9IiNGRkZGRkYiLz4KCTxwYXRoIGQ9Ik0xMTIuMDM4LDc2LjgxN2MxMi41ODIsMCwyMi44MTctMTAuMjM4LDIyLjgxNy0yMi44MjNjMC0xMi41ODUtMTAuMjM1LTIyLjgyMy0yMi44MTctMjIuODIzICAgYy0xMi41ODMsMC0yMi44MiwxMC4yMzgtMjIuODIsMjIuODIzQzg5LjIxNyw2Ni41NzksOTkuNDU1LDc2LjgxNywxMTIuMDM4LDc2LjgxN3ogTTExMi4wMzgsNDIuMTQ2ICAgYzYuNTI5LDAsMTEuODQyLDUuMzE1LDExLjg0MiwxMS44NDljMCw2LjUzMi01LjMxMywxMS44NDgtMTEuODQyLDExLjg0OGMtNi41MzEsMC0xMS44NDQtNS4zMTUtMTEuODQ0LTExLjg0OCAgIEMxMDAuMTk0LDQ3LjQ2MSwxMDUuNTA2LDQyLjE0NiwxMTIuMDM4LDQyLjE0NnoiIGZpbGw9IiNGRkZGRkYiLz4KCTxwYXRoIGQ9Ik04Ni41NDEsMTE4LjQ3YzMuMDMxLDAsNS40ODgtMi40NTcsNS40ODgtNS40ODd2LTkuNjI2YzAtNi4yMjIsNS4wNjQtMTEuMjgzLDExLjI4Ni0xMS4yODNoMTcuNTgyICAgYzYuMjI2LDAsMTEuMjkxLDUuMDYyLDExLjI5MSwxMS4yODN2OS42MjZjMCwzLjAzLDIuNDU2LDUuNDg3LDUuNDg3LDUuNDg3YzMuMDMxLDAsNS40ODgtMi40NTcsNS40ODgtNS40ODd2LTkuNjI2ICAgYzAtMTIuMjczLTkuOTg4LTIyLjI1OC0yMi4yNjctMjIuMjU4aC0xNy41ODJjLTEyLjI3NSwwLTIyLjI2Miw5Ljk4NC0yMi4yNjIsMjIuMjU4djkuNjI2ICAgQzgxLjA1NCwxMTYuMDEzLDgzLjUxMSwxMTguNDcsODYuNTQxLDExOC40N3oiIGZpbGw9IiNGRkZGRkYiLz4KCTxwYXRoIGQ9Ik04MS4wNTQsMTU3LjJjMCwzLjAzLDIuNDU3LDUuNDg3LDUuNDg3LDUuNDg3aDEyNC4zMDVjMy4wMzEsMCw1LjQ4OC0yLjQ1Nyw1LjQ4OC01LjQ4N2MwLTMuMDMxLTIuNDU3LTUuNDg4LTUuNDg4LTUuNDg4ICAgSDg2LjU0MUM4My41MTEsMTUxLjcxMiw4MS4wNTQsMTU0LjE2OSw4MS4wNTQsMTU3LjJ6IiBmaWxsPSIjRkZGRkZGIi8+Cgk8cGF0aCBkPSJNMjEwLjg0NiwyMzIuOTE1SDg2LjU0MWMtMy4wMywwLTUuNDg3LDIuNDU3LTUuNDg3LDUuNDg4YzAsMy4wMzEsMi40NTcsNS40ODgsNS40ODcsNS40ODhoMTI0LjMwNSAgIGMzLjAzMSwwLDUuNDg4LTIuNDU3LDUuNDg4LTUuNDg4QzIxNi4zMzUsMjM1LjM3MiwyMTMuODc3LDIzMi45MTUsMjEwLjg0NiwyMzIuOTE1eiIgZmlsbD0iI0ZGRkZGRiIvPgoJPHBhdGggZD0iTTIxMC44NDYsMTkyLjMxM0g4Ni41NDFjLTMuMDMsMC01LjQ4NywyLjQ1Ny01LjQ4Nyw1LjQ4OGMwLDMuMDMxLDIuNDU3LDUuNDg4LDUuNDg3LDUuNDg4aDEyNC4zMDUgICBjMy4wMzEsMCw1LjQ4OC0yLjQ1Nyw1LjQ4OC01LjQ4OEMyMTYuMzM1LDE5NC43NywyMTMuODc3LDE5Mi4zMTMsMjEwLjg0NiwxOTIuMzEzeiIgZmlsbD0iI0ZGRkZGRiIvPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+Cjwvc3ZnPgo=\\" \\/><\\/a>\\n\\n<p style=\\"margin-top: 8px;\\">CAREERS<\\/p>\\n<\\/center>\\n<\\/div>\\n\\n<div class=\\"col-xs-6 col-md-4 col-lg-2 icons-margin\\">\\n<center><a href=\\"contact-us\\"><img src=\\"data:image\\/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI\\/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTkuMS4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4PSIwcHgiIHk9IjBweCIgdmlld0JveD0iMCAwIDQ3MyA0NzMiIHN0eWxlPSJlbmFibGUtYmFja2dyb3VuZDpuZXcgMCAwIDQ3MyA0NzM7IiB4bWw6c3BhY2U9InByZXNlcnZlIiB3aWR0aD0iNjRweCIgaGVpZ2h0PSI2NHB4Ij4KPGc+Cgk8Zz4KCQk8cGF0aCBkPSJNNDAzLjU4MSw2OS4zYy00NC43LTQ0LjctMTA0LTY5LjMtMTY3LjItNjkuM3MtMTIyLjUsMjQuNi0xNjcuMiw2OS4zYy04Ni40LDg2LjQtOTIuNCwyMjQuNy0xNC45LDMxOCAgICBjLTcuNiwxNS4zLTE5LjgsMzMuMS0zNy45LDQyYy04LjcsNC4zLTEzLjYsMTMuNi0xMi4xLDIzLjJzOC45LDE3LjEsMTguNSwxOC42YzQuNSwwLjcsMTAuOSwxLjQsMTguNywxLjQgICAgYzIwLjksMCw1MS43LTQuOSw4My4yLTI3LjZjMzUuMSwxOC45LDczLjUsMjguMSwxMTEuNiwyOC4xYzYxLjIsMCwxMjEuOC0yMy43LDE2Ny40LTY5LjNjNDQuNy00NC43LDY5LjMtMTA0LDY5LjMtMTY3LjIgICAgUzQ0OC4yODEsMTE0LDQwMy41ODEsNjkuM3ogTTM4NC40ODEsMzg0LjZjLTY3LjUsNjcuNS0xNzIsODAuOS0yNTQuMiwzMi42Yy01LjQtMy4yLTEyLjEtMi4yLTE2LjQsMi4xYy0wLjQsMC4yLTAuOCwwLjUtMS4xLDAuOCAgICBjLTI3LjEsMjEtNTMuNywyNS40LTcxLjMsMjUuNGgtMC4xYzIwLjMtMTQuOCwzMy4xLTM2LjgsNDAuNi01My45YzEuMi0yLjksMS40LTUuOSwwLjctOC43Yy0wLjMtMi43LTEuNC01LjQtMy4zLTcuNiAgICBjLTczLjItODIuNy02OS40LTIwOC43LDguOC0yODYuOWM4MS43LTgxLjcsMjE0LjYtODEuNywyOTYuMiwwQzQ2Ni4xODEsMTcwLjEsNDY2LjE4MSwzMDIuOSwzODQuNDgxLDM4NC42eiIgZmlsbD0iI0ZGRkZGRiIvPgoJCTxjaXJjbGUgY3g9IjIzNi4zODEiIGN5PSIyMzYuNSIgcj0iMTYuNiIgZmlsbD0iI0ZGRkZGRiIvPgoJCTxjaXJjbGUgY3g9IjMyMS45ODEiIGN5PSIyMzYuNSIgcj0iMTYuNiIgZmlsbD0iI0ZGRkZGRiIvPgoJCTxjaXJjbGUgY3g9IjE1MC43ODEiIGN5PSIyMzYuNSIgcj0iMTYuNiIgZmlsbD0iI0ZGRkZGRiIvPgoJPC9nPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+Cjwvc3ZnPgo=\\" \\/><\\/a>\\n\\n<p style=\\"margin-top: 8px;\\">CONTACT US<\\/p>\\n<\\/center>\\n<\\/div>\\n<\\/div>\\n<\\/section>\\n","id":"9"}', 0),
(11, 'Careers banner', 'position-1', 'banner', 9, 1, '2016-08-17 13:28:39', 0, 'default', 0, '{"image":"featured-img-3.jpg","item":["featured-img-3.jpg"],"id":"11"}', 0),
(12, 'Circulo Verde Residences Head', 'position-2', 'banner', 10, 1, '2016-08-17 15:33:14', 0, 'residences', 0, '{"caption":"CIRCULO VERDE","link":"http:\\/\\/www.circuloverde.com.ph\\/","logo":"cv-logo.png","content":"<p>A 10-hectare master planned residential condominium community in Quezon City, Philippines where you can enjoy the tranquility of open spaces, convenience of restaurants and retails stores available inside Circulo Verde, accessible via Calle Industria and Ortigas Avenue via A. Rodriguez Avenue through the future Circulo Verde Bridge.<\\/p>\\n","id":"12"}', 0),
(13, 'Circulo Verde Residences Banner', 'position-1', 'banner', 10, 1, '2016-08-17 15:36:11', 0, 'default', 0, '{"image":"estate-img-1a.jpg","item":["estate-img-1.jpg","estate-img-1a.jpg"],"id":"13"}', 0),
(15, 'CIRCULO VERDE Slide Banner(residences)', 'position-1', 'banner', 11, 1, '2016-08-17 17:24:56', 0, 'sidecontent', 0, '{"caption":"CIRCULO VERDE","btn_name":"TAKE A LOOK","link":"estate\\/circulo-verde","content":"","image":"estate-img-1a.jpg","item":["cv-amenity3.jpg","estate-img-11.jpg","estate-img-1a.jpg"],"id":"15","images":"cv-amenity3.jpg,estate-img-11.jpg"}', 0),
(16, 'ESTATES', 'position-2', 'tile', 11, 1, '2016-08-17 17:33:03', 0, 'default', 0, '{"description":"<p>We have been building traditions, creating indelible experiences, and developing new inspirations for living.<\\/p>\\n","image":"e1.jpg","item":["img-1.jpg,CAPITOL COMMONS,estate\\/capitol-commons","e1.jpg,CIRCULO VERDE,estate\\/circulo-verde"],"id":"16"}', 1),
(17, 'Search Unit Residences', 'position-1', 'units', 12, 1, '2016-08-18 11:15:04', 0, 'default', 0, '', 0),
(18, 'RESIDENCES', 'position-2', 'banner', 12, 1, '2016-08-18 11:30:40', 0, 'sidecontent', 0, '{"caption":"THE VISIONARY","btn_name":"TAKE A LOOK","link":"#","content":"<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.<\\/p>\\n","item":["featured-img-21.jpg"],"id":"18","images":"featured-img-21.jpg"}', 1),
(19, 'Mall Banner', 'position-1', 'banner', 13, 1, '2016-08-18 15:08:42', 0, 'sidecontent', 0, '{"caption":"ESTANCIA","btn_name":"TAKE A LOOK","link":"#","content":"","item":["mall-img-12.jpg"],"id":"19"}', 0),
(20, 'MALLS', 'position-2', 'tile', 13, 1, '2016-08-18 15:12:18', 0, 'default', 0, '{"description":"<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.<\\/p>\\n","image":"mall4.jpg","item":["mall2.jpg,INDUSTRIA,#","img-3.jpg,GREENHILLS SHOPPING CENTER,#","mall4.jpg,TIENDESITAS,#"],"id":"20"}', 1),
(21, 'Offices Banner', 'position-1', 'banner', 14, 1, '2016-08-18 15:28:49', 0, 'sidecontent', 0, '{"caption":"ESTANCIA","btn_name":"TAKE A LOOK","link":"offices\\/estancia-2","content":"","item":["office-inner.jpg"],"id":"21"}', 0),
(22, 'OFFICES', 'position-2', 'tile', 14, 1, '2016-08-18 15:30:51', 0, 'default', 0, '{"description":"<p>Estancia offers 8 levels of premium executive office spaces designed for your modern needs. Centrally located, it is highly accessible to both private and public vehicles passing through the roads of Meralco Avenue, Shaw Boulevard, and Capt. H. Javier.<\\/p>\\n","item":["o1.jpg,SILVER CITY,#","ocenter.jpg,ORTIGAS CENTER,#","obuilding2.jpg,ORTIGAS BUILDING,#","o21.jpg,TRANSCOM,#"],"id":"22"}', 1),
(23, 'ESTANCIA', 'position-2', 'banner', 16, 1, '2016-08-18 16:58:09', 0, 'residences', 0, '{"caption":"ESTANCIA","link":"http:\\/\\/www.capitolcommons.com.ph\\/index.php\\/shoppingentertainment.html","logo":"estancia-logo.png","content":"Estancia houses a premier collection of fine international fashion brands and destination retailers, complemented by a delectable array of dining choices. It is your stylish jewel.\\n","id":"23"}', 0),
(24, 'ESTANCIA Office Plain Banner', 'position-1', 'banner', 16, 1, '2016-08-18 17:00:15', 0, 'default', 0, '{"image":"office-inner.jpg","item":["office-inner.jpg"],"id":"24"}', 0),
(25, 'Capitol Commons Banner', 'position-1', 'banner', 17, 1, '2016-08-18 17:14:27', 0, 'default', 0, '{"image":"capitol-common-banner.jpg","item":["capitol-common-banner.jpg"],"id":"25"}', 0),
(26, 'Capitol Commons Residence Header', 'position-2', 'banner', 17, 1, '2016-08-18 17:15:50', 0, 'residences', 0, '{"caption":"Capitol Commons","link":"http:\\/\\/www.capitolcommons.com.ph\\/","logo":"ab-CCLogo.jpg","content":"<p>Capitol Commons, or &quot;The Commons&quot; to the Maven set, is a 10-hectare development located on the former site of the Rizal Provincial Capitol at Pasig City, Metro Manila. With an open park, a gastro strip, a mall and an array of programmed entertainment options, everything is just outside of your doorstep.<\\/p>\\n","id":"26"}', 0),
(27, 'Capitol Commons Tiles', 'position-3', 'tile', 17, 1, '2016-08-18 17:18:37', 0, 'default', 0, '{"description":"","image":"mall11.jpg","item":["r1.jpg,THE IMPERIUM,capitol-commons\\/the-imperium","r2.jpg,THE ROYALTON,capitol-commons\\/the-royalton","mall11.jpg,ESTANCIA,capitol-commons\\/estancia-2"],"id":"27"}', 0),
(28, 'About Us HTML', 'position-1', 'html', 18, 1, '2016-08-18 17:53:27', 0, 'default', 0, '{"html":"<section class=\\"about-img\\">&nbsp;<\\/section>\\n\\n<section class=\\"about-section defaultMarginTop\\">\\n<div class=\\"container\\">\\n<center>\\n<h1>About Ortigas<\\/h1>\\n\\n<p class=\\"info-details\\"><span style=\\"font-weight: bold;\\">Lorem ipsum dolor sit amet<\\/span>, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.<\\/p>\\n<\\/center>\\n<\\/div>\\n\\n<div class=\\"container defaultMarginTop\\">\\n<div class=\\"row\\">\\n<div class=\\"col-md-5\\">\\n<h1 class=\\"who-tag\\">WHO WE ARE<\\/h1>\\n<\\/div>\\n\\n<div class=\\"col-md-7\\" style=\\"margin-top: 10px;\\">\\n<p class=\\"align-center-mobile\\">With pride, let&#39;s revisit the company&#39;s beginnings and its contribution to painting the urban landscape of what we now know as Metro Manila.<\\/p>\\n<\\/div>\\n<\\/div>\\n\\n<div class=\\"defaultMarginTop\\">\\n<center>\\n<p>Rising against its skyline are some of the country&#39;s tallest buildings housing some of the country&#39;s biggest industrial and commercial firms.<\\/p>\\n&nbsp;\\n\\n<p>The initial development strategy was two pronged : (1) develop industrial properties and allow subdivisions and community facilities to emerge around it; and (2) focus on &quot;elite&quot; motivation: first class homes made attractive by a modern and accessible amenities like private schools, hospitals, churches, post offices, police stations, ample water supply, plus private sports and social clubs.<\\/p>\\n<\\/center>\\n<\\/div>\\n<\\/div>\\n<br \\/>\\n<br \\/>\\n&nbsp;\\n<div class=\\"container defaultMarginTop\\">\\n<center>\\n<h1>Projects<\\/h1>\\n<\\/center>\\n\\n<div class=\\"row defaultMarginTop\\">\\n<center>\\n<div class=\\"col-md-2 logo-width project-icons\\"><img class=\\"img-responsive\\" src=\\"\\/includes\\/img\\/ab-CCLogo.jpg\\" \\/><\\/div>\\n\\n<div class=\\"col-md-2 logo-width project-icons\\"><img class=\\"img-responsive\\" src=\\"includes\\/img\\/ab-CVLogo.jpg\\" \\/><\\/div>\\n\\n<div class=\\"col-md-2 logo-width project-icons\\"><img class=\\"img-responsive\\" src=\\"includes\\/img\\/ab-maven.jpg\\" \\/><\\/div>\\n\\n<div class=\\"col-md-2 logo-width project-icons\\"><img class=\\"img-responsive\\" src=\\"includes\\/img\\/ab-royalton.jpg\\" \\/><\\/div>\\n\\n<div class=\\"col-md-2 logo-width project-icons\\"><img class=\\"img-responsive\\" src=\\"includes\\/img\\/ab-viridian.jpg\\" \\/><\\/div>\\n<\\/center>\\n<\\/div>\\n\\n<center>\\n<div class=\\"row defaultMarginTop\\">\\n<div class=\\"col-md-3 project-icons\\"><img class=\\"img-responsive\\" src=\\"includes\\/img\\/ab-ghLogo.jpg\\" \\/><\\/div>\\n\\n<div class=\\"col-md-3 project-icons\\"><img class=\\"img-responsive\\" src=\\"includes\\/img\\/ab-tiende.jpg\\" \\/><\\/div>\\n\\n<div class=\\"col-md-3 project-icons\\"><img class=\\"img-responsive\\" src=\\"includes\\/img\\/ab-frontera.jpg\\" \\/><\\/div>\\n\\n<div class=\\"col-md-3 project-icons\\"><img class=\\"img-responsive\\" src=\\"includes\\/img\\/ab-luntala.jpg\\" \\/><\\/div>\\n<\\/div>\\n<\\/center>\\n<\\/div>\\n<\\/section>\\n","id":"28"}', 0),
(29, 'Malls', 'position-4', 'banner', 10, 1, '2016-08-19 12:01:06', 0, 'featured', 0, '{"caption":"INDUSTRIA","content":"<p>Circulo Verde offers its residents the coziness and tranquility of country living- right in the metro.<\\/p>\\n","btn_link":"circulo-verde\\/industria","btn_seeother":"malls","image":"industria-inner.jpg","id":"29"}', 1),
(30, 'RESIDENCES', 'position-3', 'tile', 10, 1, '2016-08-19 12:26:05', 0, 'caption', 0, '{"description":"","image":"avila-tower.png","item":["r5.jpg::MAJORCA::circulo-verde\\/majorca::Majorca\\u2019s Sky Garden is perfect for those who like to sit back, relax, and reconnect with nature.","r7.jpg::IBIZA::circulo-verde\\/ibiza::With 22 residential levels at the Ibiza Tower, young couples and independent individuals can choose between one- and two-bedroom units in single and bi-level layouts.","r10.jpg::GARDEN HOMES::circulo-verde\\/garden-homes::Maybe you want a plot of land to call your own? Circulo Verde Garden Homes is a community of 61 townhouses of three- or four-level houses. ","r4.jpg::SEVILLE::circulo-verde\\/seville::Seville residents are privileged with the lush bi-level sky garden on the 6th and 7th floor - a green sanctuary perfect for easing the days'' worries away","lleida-bldg.png::LLEIDA::circulo-verde\\/lleida::The first tower in Circulo Verde to offer studio units, Lleida is ideal for young professionals, independent individuals and investors.","avila-tower.png::AVILA::circulo-verde\\/avila::The most economical tower that completes Phase 1 of Circulo Verde, Avila is perfect for start-up families."],"id":"30"}', 1),
(31, 'MaJorca', 'position-2', 'banner', 19, 1, '2016-08-19 14:16:51', 0, 'residences', 0, '{"caption":"MAJORCA","link":"#","logo":"majorca-bldg.jpg","content":"<p>With 13 residential levels, Majorca Residences was designed with new couples, starting families, and empty nesters in mind.<\\/p>\\n\\n<p>Majorca&rsquo;s Sky Garden is perfect for those who like to sit back, relax, and reconnect with nature.<\\/p>\\n\\n<p>&nbsp;<\\/p>\\n\\n<h4>Features &amp; Amenities<\\/h4>\\n\\n<ul>\\n\\t<li>\\n\\t<p>Sky Garden<\\/p>\\n\\t<\\/li>\\n\\t<li><p>Children&#39;s playground<\\/p><\\/li>\\n\\t<li><p>Swimming pool<\\/p><\\/li>\\n\\t<li><p>Function rooms<\\/p><\\/li>\\n\\t<li><p>Access to Circulo Verde&#39;s 70% open space<\\/p><\\/li>\\n<\\/ul>\\n","id":"31"}', 0),
(32, 'Circulo Verde Residences Banner', 'position-1', 'banner', 19, 1, '2016-08-17 15:36:11', 0, 'default', 0, '{"image":"estate-img-1a.jpg","item":["estate-img-1.jpg","estate-img-1a.jpg"],"id":"13"}', 0),
(33, 'RESIDENCES', 'position-3', 'tile', 19, 1, '2016-08-19 12:26:05', 0, 'caption', 0, '{"description":"","image":"avila-tower.png","item":["r7.jpg::IBIZA::circulo-verde\\/ibiza::With 22 residential levels at the Ibiza Tower, young couples and independent individuals can choose between one- and two-bedroom units in single and bi-level layouts.","r10.jpg::GARDEN HOMES::circulo-verde\\/garden-homes::Maybe you want a plot of land to call your own? Circulo Verde Garden Homes is a community of 61 townhouses of three- or four-level houses. ","r4.jpg::SEVILLE::circulo-verde\\/seville::Seville residents are privileged with the lush bi-level sky garden on the 6th and 7th floor - a green sanctuary perfect for easing the days'' worries away","lleida-bldg.png::LLEIDA::circulo-verde\\/lleida::The first tower in Circulo Verde to offer studio units, Lleida is ideal for young professionals, independent individuals and investors.","avila-tower.png::AVILA::circulo-verde\\/avila::The most economical tower that completes Phase 1 of Circulo Verde, Avila is perfect for start-up families."],"id":"30"}', 1),
(34, 'SEVILLE', 'position-2', 'banner', 20, 1, '2016-08-19 14:16:51', 0, 'residences', 0, '{"caption":"SEVILLE","link":"#","logo":"seville-bldg.jpg","content":"<p>With its vibrant mix of residential and green spaces, Seville Residences is an ideal place for leisure and living. Circulo Verde&#39;s 3rd tower features 17 residential floors and 2-level podium parking. Units are specifically designed with generous floor space, giving comfort and relaxation, with a great view of the Sierra Madre mountain range. Units have a wrap-around balcony that, aside from offering fantastic city views, provides cool ventilation and natural lighting.<\\/p>\\n\\n<p>Seville residents are privileged with the lush bi-level sky garden on the 6th and 7th floor - a green sanctuary perfect for easing the days&#39; worries away<\\/p>\\n\\n<p>&nbsp;<\\/p>\\n","id":"34"}', 0),
(35, 'SEVILLE Residences Banner', 'position-1', 'banner', 20, 1, '2016-08-17 15:36:11', 0, 'default', 0, '{"image":"estate-img-1a.jpg","item":["estate-img-1.jpg","estate-img-1a.jpg"],"id":"13"}', 0),
(36, 'RESIDENCES', 'position-4', 'tile', 20, 1, '2016-08-19 12:26:05', 0, 'caption', 0, '{"description":"","item":["r10.jpg::GARDEN HOMES::circulo-verde\\/garden-homes::Maybe you want a plot of land to call your own? Circulo Verde Garden Homes is a community of 61 townhouses of three- or four-level houses. ","r4.jpg::SEVILLE::circulo-verde\\/seville::Seville residents are privileged with the lush bi-level sky garden on the 6th and 7th floor - a green sanctuary perfect for easing the days'' worries away","lleida-bldg.png::LLEIDA::circulo-verde\\/lleida::The first tower in Circulo Verde to offer studio units, Lleida is ideal for young professionals, independent individuals and investors.","avila-tower.png::AVILA::circulo-verde\\/avila::The most economical tower that completes Phase 1 of Circulo Verde, Avila is perfect for start-up families."],"id":"36"}', 1),
(40, 'IBIZA', 'position-2', 'banner', 21, 1, '2016-08-19 14:16:51', 0, 'residences', 0, '{"caption":"IBIZA","link":"#","logo":"ibiza-bldg.jpg","content":"<p>With 22 residential levels at the Ibiza Tower, young couples and independent individuals can choose between one- and two-bedroom units in single and bi-level layouts.<\\/p>\\n\\n<p>Here, the river breeze and rays of the sun peacefully find their way in. Units feature a balcony with views of the Sierra Madre mountain range, while the tower itself has a Sky garden that provides a backyard experience for high-rise living.<\\/p>\\n","id":"40"}', 0),
(41, 'IBIZA Residences Banner', 'position-1', 'banner', 21, 1, '2016-08-17 15:36:11', 0, 'default', 0, '{"image":"estate-img-1a.jpg","item":["estate-img-1.jpg","estate-img-1a.jpg"],"id":"13"}', 0),
(42, 'RESIDENCES', 'position-4', 'tile', 21, 1, '2016-08-19 12:26:05', 0, 'caption', 0, '{"description":"","item":["r10.jpg::GARDEN HOMES::circulo-verde\\/garden-homes::Maybe you want a plot of land to call your own? Circulo Verde Garden Homes is a community of 61 townhouses of three- or four-level houses. ","r4.jpg::SEVILLE::circulo-verde\\/seville::Seville residents are privileged with the lush bi-level sky garden on the 6th and 7th floor - a green sanctuary perfect for easing the days'' worries away","lleida-bldg.png::LLEIDA::circulo-verde\\/lleida::The first tower in Circulo Verde to offer studio units, Lleida is ideal for young professionals, independent individuals and investors.","avila-tower.png::AVILA::circulo-verde\\/avila::The most economical tower that completes Phase 1 of Circulo Verde, Avila is perfect for start-up families."],"id":"36"}', 1),
(43, 'LLEIDA BANNER', 'position-2', 'banner', 22, 1, '2016-08-19 14:16:51', 0, 'residences', 0, '{"caption":"LLEIDA","link":"#","logo":"lleida-bldg.jpg","content":"<p>The 4th Circulo Verde tower, rising 25 storeys high with 22 levels devoted to residences. The first tower in Circulo Verde to offer studio units, Lleida is ideal for young professionals, independent individuals and investors. It features balconies on every floor and landscaped sky garden atriums on the 11th and 12th levels. Facing northeast, Lleida Tower spares residents from the harsh afternoon sunlight, while allowing an impressive view of the city around or the mountains in the distance.<\\/p>\\n","id":"43"}', 0),
(44, 'LLEIDA Residences Banner', 'position-1', 'banner', 22, 1, '2016-08-17 15:36:11', 0, 'default', 0, '{"image":"estate-img-1a.jpg","item":["estate-img-1.jpg","estate-img-1a.jpg"],"id":"13"}', 0),
(45, 'RESIDENCES', 'position-4', 'tile', 22, 1, '2016-08-19 12:26:05', 0, 'caption', 0, '{"description":"","item":["r10.jpg::GARDEN HOMES::circulo-verde\\/garden-homes::Maybe you want a plot of land to call your own? Circulo Verde Garden Homes is a community of 61 townhouses of three- or four-level houses. ","r4.jpg::SEVILLE::circulo-verde\\/seville::Seville residents are privileged with the lush bi-level sky garden on the 6th and 7th floor - a green sanctuary perfect for easing the days'' worries away","lleida-bldg.png::LLEIDA::circulo-verde\\/lleida::The first tower in Circulo Verde to offer studio units, Lleida is ideal for young professionals, independent individuals and investors.","avila-tower.png::AVILA::circulo-verde\\/avila::The most economical tower that completes Phase 1 of Circulo Verde, Avila is perfect for start-up families."],"id":"36"}', 1),
(46, 'AVILA BANNER', 'position-2', 'banner', 23, 1, '2016-08-19 14:16:51', 0, 'residences', 0, '{"caption":"LLEIDA","link":"#","logo":"avilla-bldg-large.jpg","content":"<p>The most economical tower that completes Phase 1 of Circulo Verde, Avila is perfect for start-up families. It is a special two-tower building that is seamlessly linked together by a bridge with glass windows that renders great views of the community. Like the other residential towers, Avila has its own Sky Garden and the Garden level units have direct access to the 1.4 hectare central park.<\\/p>\\n","id":"46"}', 0),
(47, 'AVILA Residences Banner', 'position-1', 'banner', 23, 1, '2016-08-17 15:36:11', 0, 'default', 0, '{"image":"estate-img-1a.jpg","item":["estate-img-1.jpg","estate-img-1a.jpg"],"id":"13"}', 0),
(48, 'RESIDENCES', 'position-4', 'tile', 23, 1, '2016-08-19 12:26:05', 0, 'caption', 0, '{"description":"","image":"r5.jpg","item":["r10.jpg::GARDEN HOMES::circulo-verde\\/garden-homes::Maybe you want a plot of land to call your own? Circulo Verde Garden Homes is a community of 61 townhouses of three- or four-level houses. ","r4.jpg::SEVILLE::circulo-verde\\/seville::Seville residents are privileged with the lush bi-level sky garden on the 6th and 7th floor - a green sanctuary perfect for easing the days'' worries away","lleida-bldg.png::LLEIDA::circulo-verde\\/lleida::The first tower in Circulo Verde to offer studio units, Lleida is ideal for young professionals, independent individuals and investors.","r5.jpg::MAJORCA::circulo-verde\\/avila::Majorca\\u2019s Sky Garden is perfect for those who like to sit back, relax, and reconnect with nature."],"id":"48"}', 1),
(49, 'GARDEN HOMES BANNER', 'position-2', 'banner', 24, 1, '2016-08-19 14:16:51', 0, 'residences', 0, '{"caption":"CIRCULO VERDE GARDEn HOMES","link":"#","logo":"cvgh-bldg.jpg","content":"<p>Maybe you want a plot of land to call your own? Circulo Verde Garden Homes is a community of 61 townhouses of three- or four-level houses. With its low-density plan that limits the total number of residences, the community offers serenity and privacy, safety and personal space for a growing family. Featuring innovative design, front and back entryways for ease of access and balconies on every level, so you can view Sierra Madre sunsets at dusk. Best of all, families have access to the lush, open spaces of Circulo Verde. Pedestrian-friendly pathways lead to the community pool, playgrounds, and a mix of shops and restaurants. It&#39;s quiet suburban living with the thrills of the city.<\\/p>\\n","id":"49"}', 0),
(50, 'GARDEN HOMES Residences Banner', 'position-1', 'banner', 24, 1, '2016-08-17 15:36:11', 0, 'default', 0, '{"image":"estate-img-1a.jpg","item":["estate-img-1.jpg","estate-img-1a.jpg"],"id":"13"}', 0),
(51, 'RESIDENCES', 'position-4', 'tile', 24, 1, '2016-08-19 12:26:05', 0, 'caption', 0, '{"description":"","image":"ibiza-bldg.png","item":["r4.jpg::SEVILLE::circulo-verde\\/seville::Seville residents are privileged with the lush bi-level sky garden on the 6th and 7th floor - a green sanctuary perfect for easing the days'' worries away","lleida-bldg.png::LLEIDA::circulo-verde\\/lleida::The first tower in Circulo Verde to offer studio units, Lleida is ideal for young professionals, independent individuals and investors.","r5.jpg::MAJORCA::circulo-verde\\/avila::Majorca\\u2019s Sky Garden is perfect for those who like to sit back, relax, and reconnect with nature.","ibiza-bldg.png::IBIZA::circulo-verde\\/ibiza::With 22 residential levels at the Ibiza Tower, young couples and independent individuals can choose between one- and two-bedroom units in single and bi-level layouts."],"id":"51"}', 1),
(52, 'Industria Banner', 'position-1', 'banner', 25, 1, '2016-08-19 16:16:28', 0, 'default', 0, '{"image":"industria-inner2.jpg","item":["industria-inner2.jpg"],"id":"52"}', 0),
(53, 'Industria Content', 'position-4', 'banner', 25, 1, '2016-08-19 12:01:06', 0, 'featured', 0, '{"caption":"INDUSTRIA","content":"<p>Circulo Verde offers its residents the coziness and tranquility of country living- right in the metro. Creating a blend of suburban and urban living, residents can also enjoy modern conveniences just a stone&#39;s throw away from home. The lifestyle and commercial area will have restaurants and retail stores so you can shop and dine without leaving your neighborhood.<\\/p>\\n","btn_link":"#","btn_seeother":"malls","image":"industria-inner.jpg","id":"53"}', 0),
(54, 'HACHI PARK Banner', 'position-1', 'banner', 26, 1, '2016-08-19 16:31:56', 0, 'default', 0, '{"image":"featured-img-14.jpg","item":["estate-img-1a.jpg","estate-img-1.jpg","featured-img-14.jpg"],"id":"54"}', 0),
(55, 'Hachi Park Content', 'position-2', 'banner', 26, 1, '2016-08-19 12:01:06', 0, 'featured', 0, '{"caption":"HACHI PARK","content":"<p>Discover Hachi Park, your dog&#39;s new favorite off-leash dog park that gives them all the space to play and display. The park&#39;s name takes inspiration from Hachiko, the loyal Akita who, despite his master&#39;s passing away, kept patiently waiting at the Shibuya Station in Japan for his master&#39;s return every day for 9 years.<\\/p>\\n\\n<p>We here at Circulo Verde believe that man&#39;s best friend is an integral part of a holistic lifestyle, and as part of our pet-friendly philosophy, we have created Hachi Park to celebrate the love and loyalty of our canine companions.<\\/p>\\n","btn_link":"#","btn_seeother":"#","image":"hitachi-park.jpg","id":"55"}', 0),
(56, 'The Imperium Banner', 'position-1', 'banner', 27, 1, '2016-08-19 16:50:19', 0, 'default', 0, '{"item":["the-imperium.png"],"id":"56"}', 0),
(57, 'Imperium Residence Content', 'position-1', 'banner', 27, 1, '2016-08-19 17:00:09', 0, 'residences', 1, '{"caption":"THE IMPERIUM","link":"#","logo":"imperium.png","content":"<p>A luxurious high rise residential development that exudes sophistication with its simple yet elegant architectural design.<\\/p>\\n","id":"57"}', 0),
(58, 'The Royalton Banner', 'position-1', 'banner', 28, 1, '2016-08-19 17:15:41', 0, 'default', 0, '{"image":"royalton-bg.jpg","item":["royalton-bg.jpg"],"id":"58"}', 0),
(59, 'The Royalton Residences Content', 'position-2', 'banner', 28, 1, '2016-08-19 17:19:09', 0, 'residences', 0, '{"caption":"THE ROYALTON","link":"http:\\/\\/theroyalton.ph\\/","logo":"r2.jpg","content":"<p>A new icon rising at Capitol Commons, The Royalton residential tower is the latest address for premier living in Metro Manila.<\\/p>\\n","id":"59"}', 0),
(60, 'Maven Banner', 'position-1', 'banner', 29, 1, '2016-08-19 17:28:47', 0, 'default', 0, '{"image":"maven.jpg","item":["featured-img-2.jpg","maven-bldg.jpg","maven.jpg"],"id":"60"}', 0),
(61, 'Maven Residences Content', 'position-2', 'banner', 29, 1, '2016-08-19 17:30:19', 0, 'residences', 0, '{"caption":"MAVEN","link":"http:\\/\\/liveatmaven.ph\\/","logo":"photo-maven.jpg","content":"<p>Chic, sleek, sophisticated: Maven has it all. Discover the best of high-rise living, designed for your modern, cosmopolitan lifestyle. Beautiful finishes, expansive windows and creative live\\/work spaces are as flexible as you are.<\\/p>\\n\\n<ul>\\n\\t<li>\\n\\t<p>62 Stories high<\\/p>\\n\\t<\\/li>\\n\\t<li>\\n\\t<p>61 Residential floors<\\/p>\\n\\t<\\/li>\\n\\t<li>\\n\\t<p>6 levels of underground parking<\\/p>\\n\\t<\\/li>\\n<\\/ul>\\n","id":"61"}', 0),
(62, 'PARAGON Banner', 'position-1', 'banner', 30, 1, '2016-08-19 17:41:56', 0, 'default', 0, '{"image":"paragon-banner.jpg","item":["paragon-banner.jpg"],"id":"62"}', 0),
(63, 'PARAGON Residences Content', 'position-2', 'banner', 30, 1, '2016-08-19 17:42:51', 0, 'residences', 0, '{"caption":"PARAGON","link":"http:\\/\\/www.capitolcommons.com.ph\\/index.php\\/shoppingentertainment.html","logo":"paragon.jpg","content":"<p>Unveiling at Capitol Commons in 2017, Paragon will be the Metro&#39;s go-to destination for cinematic adventures. An all-around entertainment complex, Paragon&#39;s attractions will go far beyond its six cutting-edge digital cinemas. Movie dates and family days will all have their place, as this mega-moviehouse will also boast a full complement of lifestyle stores and dining options, perfect for any day out.<\\/p>\\n","id":"63"}', 0),
(64, 'UNIMART Banner', 'position-1', 'banner', 31, 1, '2016-08-19 17:50:45', 0, 'default', 0, '{"item":["unimart-capitol.jpg"],"id":"64"}', 0),
(65, 'UNIMART Residences Content', 'position-2', 'banner', 31, 1, '2016-08-19 17:54:17', 0, 'residences', 0, '{"caption":"UNIMART","link":"http:\\/\\/www.capitolcommons.com.ph\\/index.php\\/shoppingentertainment.html","logo":"unimart-small.jpg","content":"<p>Perfectly suiting Capitol Commons philosophy of being a complete lifestyle playground, Unimart&#39;s 20,000 sqm home will be a literal one-stop supermarket for anyone and everyone, from the jetsetter mother shopping for her growing family to the yuppie on-the-go looking for life&#39;s little essentials. The supermarket will open in 2016, bright and ready to serve the varied needs of the Capitol Commons community.<\\/p>\\n","id":"65"}', 0),
(66, 'Viridian Banner', 'position-1', 'banner', 32, 1, '2016-08-19 18:13:41', 0, 'default', 0, '{"image":"viridian-banner.jpg","item":["viridian-bg.jpg","viridian-banner-2.jpg","viridian-banner.jpg"],"id":"66"}', 0),
(67, 'Viridian Estate Content', 'position-2', 'banner', 32, 1, '2016-08-19 18:15:30', 0, 'residences', 0, '{"caption":"VIRIDIAN","link":"http:\\/\\/viridian.ph\\/","logo":"ab-viridian.jpg","content":"<p>Viridian in Greenhills is a 53-storey luxury residential condominium tower located along Connecticut Street and Missouri Street in Greenhills Shopping Center, San Juan City. It includes<\\/p>\\n","id":"67"}', 0),
(68, 'Greenhills Shopping Center Banner', 'position-1', 'banner', 33, 1, '2016-08-19 18:21:51', 0, 'default', 0, '', 0),
(69, 'Greenhills Shopping Center Banner', 'position-1', 'banner', 33, 1, '2016-08-19 18:21:51', 0, 'default', 0, '{"image":"viridian-banner-2.jpg","item":["viridian-banner-2.jpg"],"id":"69"}', 0),
(70, 'Greenhills Shopping Center Content', 'position-2', 'banner', 33, 1, '2016-08-19 18:23:33', 0, 'residences', 0, '{"caption":"Greenhills Shopping Center","link":"http:\\/\\/viridian.ph\\/greenhills","logo":"photo-gsc.jpg","content":"<p>Greenhills is the first-ever shopping complex in Metro Manila, and without a doubt, most unique and much loved. World-renowned, it&#39;s a must-stop destination for tourists, foreign dignitaries, and celebrities. At the moment, Greenhills is going through a P20 billion redevelopment. Soon, the Greenhills Shopping Center that has shaped generations will be ready for the new ones.<\\/p>\\n","id":"70"}', 0);

-- --------------------------------------------------------

--
-- Table structure for table `hda_news`
--

CREATE TABLE `hda_news` (
  `id` int(10) NOT NULL,
  `title` varchar(150) NOT NULL,
  `content` text NOT NULL,
  `alias` varchar(225) NOT NULL,
  `featured_image` varchar(225) NOT NULL,
  `featured` int(11) NOT NULL,
  `publish` int(11) NOT NULL,
  `date_publish` datetime NOT NULL,
  `date_created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hda_news`
--

INSERT INTO `hda_news` (`id`, `title`, `content`, `alias`, `featured_image`, `featured`, `publish`, `date_publish`, `date_created`) VALUES
(3, 'ORTIGAS CELEBRATING 85 YEARS', '<p><span style="color: rgb(52, 52, 52); font-family: Montserrat, sans-serif; line-height: 19.5px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</span></p>\n', 'ortigas-celebrating-85-years', 'news-img1.jpg', 1, 1, '2016-08-09 00:00:00', '2016-08-09 16:07:49'),
(6, 'WE BUILD FOR LIFE', '<p><span style="color: rgb(52, 52, 52); font-family: Montserrat, sans-serif; line-height: 19.5px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</span></p>\n', 'we-build-for-life', 'news-img2.jpg', 1, 1, '2016-08-08 00:00:00', '2016-08-09 16:23:33');

-- --------------------------------------------------------

--
-- Table structure for table `hda_pages`
--

CREATE TABLE `hda_pages` (
  `id` int(10) NOT NULL,
  `title` varchar(50) NOT NULL,
  `template` varchar(50) NOT NULL,
  `metatags` text NOT NULL,
  `date` datetime NOT NULL,
  `publish` int(10) NOT NULL DEFAULT '0',
  `page_type` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hda_pages`
--

INSERT INTO `hda_pages` (`id`, `title`, `template`, `metatags`, `date`, `publish`, `page_type`) VALUES
(5, 'Home', 'default', '{"title":"ortigas and company","description":"                                                                                                                                                                                                                                                                                            ortigas and company                                                                                                                                                                                                                          ","keywords":"                                                                                                                                                                                                                                                                                            ortigas, company, circulo, verde, capitol, commons, royalton                                                                                                                                                                                                                            ","image":"splashImg.jpg"}', '2016-08-03 15:04:17', 1, ''),
(7, 'News', 'default', '{"title":"News","description":"<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.<\\/p>\\n","keywords":"<p>News, news<\\/p>\\n","image":"estate-img-1a.jpg"}', '2016-08-12 16:07:40', 1, 'news'),
(8, 'Contact Us', 'inner', '{"title":"Contact Us","description":"<p>Contact Us<\\/p>\\n","keywords":"<p>Contact Us<\\/p>\\n","image":"news-img2.jpg"}', '2016-08-12 17:27:39', 1, 'default'),
(9, 'CAREERS AT ORTIGAS', 'inner', '{"title":"CAREERS AT ORTIGAS","description":"CAREERS AT ORTIGAS\\n","keywords":"<p>careers<\\/p>\\n","image":"featured-img-31.jpg"}', '2016-08-17 12:36:33', 1, 'careers'),
(10, 'Circulo Verde', 'inner', '{"title":"Circulo Verde","description":"Circulo Verde","keywords":"Circulo Verde","image":"featured-img-1.jpg"}', '2016-08-17 15:30:03', 1, 'residences'),
(11, 'Estate', 'inner', '{"title":"Estate","description":"Estate","keywords":"Estate","image":"cv-amenity.jpg"}', '2016-08-17 17:22:53', 1, 'estates'),
(12, 'RESIDENCES', 'inner', '{"title":"","description":"RESIDENCES","keywords":"RESIDENCES","image":"featured-img-2.jpg"}', '2016-08-18 11:14:04', 1, 'residences'),
(13, 'MALLS', 'inner', '{"title":"","description":"MALLS","keywords":"MALLS","image":"mall-img-11.jpg"}', '2016-08-18 14:07:41', 1, 'malls'),
(14, 'OFFICES', 'inner', '{"title":"","description":"OFFICES","keywords":"OFFICES","image":"office-inner.jpg"}', '2016-08-18 15:27:53', 1, 'offices'),
(16, 'Estancia', 'inner', '{"title":"Estancia","description":"<p>Estancia<\\/p>\\n","keywords":"<p>Estancia<\\/p>\\n","image":"office-inner.jpg"}', '2016-08-18 16:52:39', 1, 'offices'),
(17, 'Capitol Commons', 'inner', '{"title":"","description":"Capitol Commons","keywords":"Capitol Commons","image":"splashImg3.jpg"}', '2016-08-18 17:12:50', 1, 'estates'),
(18, 'About Us', 'inner', '{"title":"About Us","description":"About Us","keywords":"About Us","image":"splashImg26.jpg"}', '2016-08-18 17:52:14', 1, 'default'),
(19, 'MAJORCA', 'inner', '{"title":"","description":" With 13 residential levels, Majorca Residences was designed with new couples, starting families, and empty nesters in mind. Majorca\\u2019s Sky Garden is perfect for those who like to sit back, relax, and reconnect with nature.\\n                                ","keywords":"majorca\\n                                ","image":"majorca-bldg.jpg"}', '2016-08-19 14:12:55', 1, 'residences'),
(20, 'SEVILLE', 'inner', '{"title":"Seville","description":"                                                     With its vibrant mix of residential and green spaces, Seville Residences is an ideal place for leisure and living. Circulo Verde''s 3rd tower features 17 residential floors and 2-level podium parking. Units are specifically designed with generous floor space, giving comfort and relaxation, with a great view of the Sierra Madre mountain range. Units have a wrap-around balcony that, aside from offering fantastic city views, provides cool ventilation and natural lighting.\\n\\nSeville residents are privileged with the lush bi-level sky garden on the 6th and 7th floor - a green sanctuary perfect for easing the days'' worries away                                               ","keywords":"                                             Seville                                                       ","image":"seville-bldg.jpg"}', '2016-08-19 14:41:50', 1, 'residences'),
(21, 'IBIZA', 'inner', '{"title":"ibiza","description":"                                                                    With 22 residential levels at the Ibiza Tower, young couples and independent individuals can choose between one- and two-bedroom units in single and bi-level layouts.\\nHere, the river breeze and rays of the sun peacefully find their way in.\\nUnits feature a balcony with views of the Sierra Madre mountain range, while the tower itself has a Sky garden that provides a backyard experience for high-rise living.                                ","keywords":"                                                                    ibiza                                ","image":"ibiza-bldg.jpg"}', '2016-08-19 14:45:08', 1, 'residences'),
(22, 'LLEIDA', 'inner', '{"title":"Lleida","description":"                                The 4th Circulo Verde tower, rising 25 storeys high with 22 levels devoted to residences. The first tower in Circulo Verde to offer studio units, Lleida is ideal for young professionals, independent individuals and investors. It features balconies on every floor and landscaped sky garden atriums on the 11th and 12th levels. Facing northeast, Lleida Tower spares residents from the harsh afternoon sunlight, while allowing an impressive view of the city around or the mountains in the distance.","keywords":"                                Lleida","image":"lleida-bldg.jpg"}', '2016-08-19 15:43:01', 1, 'residences'),
(23, 'AVILA', 'inner', '{"title":"Avila","description":"                                The most economical tower that completes Phase 1 of Circulo Verde, Avila is perfect for start-up families.\\nIt is a special two-tower building that is seamlessly linked together by a bridge with glass windows that renders great views of the community.\\nLike the other residential towers, Avila has its own Sky Garden and the Garden level units have direct access to the 1.4 hectare central park.","keywords":"                                Avila","image":"avila-tower.png"}', '2016-08-19 15:48:30', 1, 'residences'),
(24, 'CIRCULO VERDE GARDEN HOMES', 'inner', '{"title":"Circulo Verde Garden Homes","description":"                                Maybe you want a plot of land to call your own? Circulo Verde Garden Homes is a community of 61 townhouses of three- or four-level houses. With its low-density plan that limits the total number of residences, the community offers serenity and privacy, safety and personal space for a growing family. Featuring innovative design, front and back entryways for ease of access and balconies on every level, so you can view Sierra Madre sunsets at dusk. Best of all, families have access to the lush, open spaces of Circulo Verde. Pedestrian-friendly pathways lead to the community pool, playgrounds, and a mix of shops and restaurants. It''s quiet suburban living with the thrills of the city.","keywords":"                                Circulo, Verde, Garden, Homes","image":"cvgh-bldg.jpg"}', '2016-08-19 15:57:34', 1, 'residences'),
(25, 'INDUSTRIA', 'inner', '{"title":"Industria","description":"                                Circulo Verde offers its residents the coziness and tranquility of country living- right in the metro. Creating a blend of suburban and urban living, residents can also enjoy modern conveniences just a stone''s throw away from home.\\nThe lifestyle and commercial area will have restaurants and retail stores so you can shop and dine without leaving your neighborhood.","keywords":"                     Industria           ","image":"industria-inner.jpg"}', '2016-08-19 16:11:41', 1, 'malls'),
(26, 'Hachi Park', 'inner', '{"title":"Hachi Park","description":"                                                                    Discover Hachi Park, your dog''s new favorite off-leash dog park that gives them all the space to play and display. The park''s name takes inspiration from Hachiko, the loyal Akita who, despite his master''s passing away, kept patiently waiting at the Shibuya Station in Japan for his master''s return every day for 9 years.\\n\\nWe here at Circulo Verde believe that man''s best friend is an integral part of a holistic lifestyle, and as part of our pet-friendly philosophy, we have created Hachi Park to celebrate the love and loyalty of our canine companions.                                ","keywords":"                                                                    Hachi,Park                                ","image":"hitachi-park.jpg"}', '2016-08-19 16:30:22', 1, 'malls'),
(27, 'The Imperium', 'inner', '{"title":"The Imperium","description":"                                                                    A luxurious high rise residential development that exudes sophistication with its simple yet elegant architectural design.                                ","keywords":"                                                                    Imperium                                ","image":"the-imperium.png"}', '2016-08-19 16:46:42', 1, 'residences'),
(28, 'The Royalton', 'inner', '{"title":"The Royalton","description":"                                                                    A new icon rising at Capitol Commons, The Royalton residential tower is the latest address for premier living in Metro Manila.                                ","keywords":"                                           Royalton, capitol, commons, residential                                                         ","image":"r2.jpg"}', '2016-08-19 17:13:39', 1, 'residences'),
(29, 'Maven', 'inner', '{"title":"Maven","description":"Chic, sleek, sophisticated: Maven has it all. Discover the best of high-rise living, designed for your modern, cosmopolitan lifestyle. Beautiful finishes, expansive windows and creative live\\/work spaces are as flexible as you are.","keywords":"Chic, sleek, sophisticated","image":"splashImg3.jpg"}', '2016-08-19 17:25:45', 1, 'residences'),
(30, 'PARAGON', 'inner', '{"title":"paragon","description":"                                Unveiling at Capitol Commons in 2017, Paragon will be the Metro''s go-to destination for cinematic adventures. An all-around entertainment complex, Paragon''s attractions will go far beyond its six cutting-edge digital cinemas. Movie dates and family days will all have their place, as this mega-moviehouse will also boast a full complement of lifestyle stores and dining options, perfect for any day out.","keywords":"     paragon , Commons                          ","image":"paragon-banner.jpg"}', '2016-08-19 17:40:26', 1, 'malls'),
(31, 'UNIMART', 'inner', '{"title":"UNIMART","description":"                                    Perfectly suiting Capitol Commons philosophy of being a complete lifestyle playground, Unimart''s 20,000 sqm home will be a literal one-stop supermarket for anyone and everyone, from the jetsetter mother shopping for her growing family to the yuppie on-the-go looking for life''s little essentials. The supermarket will open in 2016, bright and ready to serve the varied needs of the Capitol Commons community.                                ","keywords":"                                    UNIMART,supermarket                                ","image":"unimart-capitol.jpg"}', '2016-08-19 17:49:53', 1, 'malls'),
(32, 'VIRIDIAN', 'inner', '{"title":"VIRIDIAN","description":"                                    Viridian in Greenhills is a 53-storey luxury residential condominium tower located along Connecticut Street and Missouri Street in Greenhills Shopping Center, San Juan City. It includes:                                ","keywords":"                                                                    Viridian,Greenhills                                ","image":"viridian-bg.jpg"}', '2016-08-19 18:08:15', 1, 'estates'),
(33, 'Greenhills Shopping Center', 'inner', '{"title":"Greenhills Shopping Center","description":"                                Greenhills Shopping Center","keywords":"     Greenhills,Shopping,Center                           ","image":"unimart-vidirian.jpg"}', '2016-08-19 18:20:51', 1, 'malls');

-- --------------------------------------------------------

--
-- Table structure for table `hda_units`
--

CREATE TABLE `hda_units` (
  `id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `unit_type` varchar(100) NOT NULL,
  `logo` varchar(100) NOT NULL,
  `location` varchar(250) NOT NULL,
  `size` varchar(100) NOT NULL,
  `development_type` varchar(100) NOT NULL,
  `space` varchar(500) NOT NULL,
  `schem_image` varchar(500) NOT NULL,
  `price` int(255) NOT NULL,
  `gallery` text NOT NULL,
  `publish` int(10) NOT NULL,
  `date_created` datetime NOT NULL,
  `alias` varchar(255) NOT NULL,
  `residences` varchar(100) NOT NULL,
  `estate` varchar(100) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hda_units`
--

INSERT INTO `hda_units` (`id`, `name`, `unit_type`, `logo`, `location`, `size`, `development_type`, `space`, `schem_image`, `price`, `gallery`, `publish`, `date_created`, `alias`, `residences`, `estate`, `description`) VALUES
(2, 'THE VISIONARY', '1-BR Living', 'mavenlogo.png', 'Pasig City ', '42-56 SQM | 452-603 SQFT ', 'Residential', '{"space":["one-bedroom"]}', 'visionary-room.png', 1000000, '{"gallery":["o12.jpg","mall1.jpg","e1.jpg"]}', 1, '2016-08-12 11:10:02', 'the-visionary', 'Ibiza', 'Capitol Commons', '<span class="txt-uppercase font-bold">You are the creative who works and plays.</span> Your life is on its way. Your work life blurs into social life, and you need a place that welcomes this flexibility. Maven''s one-bedroom units provide ample room to work on the fly or stay while you play.'),
(3, 'THE VISIONARY', '1-BR Living', 'ab-maven.jpg', 'Pasig City ', '42-56 SQM | 452-603 SQFT', 'Condominium', '{"space":["one-bedroom","one-bathroom"]}', 'visionary-room.png', 1000000, '{"gallery":["mall1.jpg","ocenter.jpg","e1.jpg"]}', 1, '2016-08-12 11:13:57', 'the-visionary-2', 'Majorca', 'Circulo Verde', '<span class="txt-uppercase font-bold">You are the creative who works and plays.</span> Your life is on its way. Your work life blurs into social life, and you need a place that welcomes this flexibility. Maven''s one-bedroom units provide ample room to work on the fly or stay while you play.'),
(4, 'fasdfas', '1-BR Living', 'about-img.jpg', 'Pasig City', '40-50 SQM | 455-606 SQFT ', 'Residential', '{"space":["one-bedroom","one-bathroom"]}', 'about-img1.jpg', 100000, '{"gallery":["o12.jpg","mall1.jpg","e1.jpg"]}', 1, '2016-08-12 11:15:48', 'fasdfasd', 'Avida', 'Circulo Verde', '<span class="txt-uppercase font-bold">You are the creative who works and plays.</span> Your life is on its way. Your work life blurs into social life, and you need a place that welcomes this flexibility. Maven''s one-bedroom units provide ample room to work on the fly or stay while you play.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hda_career`
--
ALTER TABLE `hda_career`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hda_menu`
--
ALTER TABLE `hda_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hda_menu_group`
--
ALTER TABLE `hda_menu_group`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hda_modules`
--
ALTER TABLE `hda_modules`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hda_news`
--
ALTER TABLE `hda_news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hda_pages`
--
ALTER TABLE `hda_pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hda_units`
--
ALTER TABLE `hda_units`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `hda_career`
--
ALTER TABLE `hda_career`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `hda_menu`
--
ALTER TABLE `hda_menu`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT for table `hda_menu_group`
--
ALTER TABLE `hda_menu_group`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `hda_modules`
--
ALTER TABLE `hda_modules`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;
--
-- AUTO_INCREMENT for table `hda_news`
--
ALTER TABLE `hda_news`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `hda_pages`
--
ALTER TABLE `hda_pages`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT for table `hda_units`
--
ALTER TABLE `hda_units`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
