-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 17, 2016 at 07:49 AM
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
(1, 'page', 'ESTATE', 'estate', 5, 0, 0, 0, 1, '2016-08-01 00:00:00', '', 1),
(3, 'link', 'Majorca', 'majorca', 5, 2, 5, 0, 1, '2016-08-01 02:06:11', 'localhost', 1),
(5, 'heading', 'Circulo Verde', 'circulo-verde', 5, 1, 1, 0, 1, '2016-08-01 00:00:00', '', 1),
(6, 'heading', 'Capitol Commons', 'capitol-commons', 6, 1, 1, 4, 1, '2016-08-02 00:00:00', '', 1),
(8, 'page', 'Ibiza', 'ibiza', 5, 2, 5, 2, 1, '2016-08-03 14:28:53', '', 1),
(9, 'page', 'Estancia', 'estancia', 5, 2, 6, 0, 1, '2016-08-03 14:31:34', '', 1),
(11, 'page', 'RESIDENCES', 'residences', 5, 0, 0, 1, 1, '2016-08-03 15:08:55', '', 1),
(12, 'page', 'Seville', 'seville', 5, 2, 5, 1, 1, '2016-08-03 16:28:29', '', 1),
(13, 'page', 'MALLS', 'malls', 5, 0, 0, 2, 1, '2016-08-09 12:09:49', '', 1),
(14, 'page', 'OFFICES', 'offices', 5, 0, 0, 3, 1, '2016-08-09 12:10:18', '', 1),
(15, 'page', 'CAREERS', 'careers', 9, 0, 0, 4, 1, '2016-08-10 11:36:13', '', 1),
(18, 'page', 'CONTACT US', 'contact-us', 8, 0, 0, 5, 1, '2016-08-12 15:11:53', '', 1),
(19, 'page', 'ABOUT ORTIGAS ', 'about-ortigas', 5, 0, 0, 6, 1, '2016-08-12 16:58:18', '', 2),
(20, 'page', 'INVESTORS RELATIONS ', 'investors-relations', 5, 0, 0, 7, 1, '2016-08-12 16:59:26', '', 2),
(21, 'page', 'NEWS ', 'latest-news', 7, 0, 0, 8, 1, '2016-08-12 17:00:21', '', 2);

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
(4, 'Home Slider', 'position-3', 'banner', 5, 1, '2016-08-05 17:00:44', 0, 'sidecontent', 2, '{"caption":"sameple caption","btn_name":"button text","link":"insularlife.com","id":"4","images":"cv-amenity.jpg,estate-img-1a.jpg"}', 1),
(5, 'News Banner', 'position-4', 'banner', 5, 1, '2016-08-08 12:55:33', 0, 'default', 1, '{"id":"5","images":"featured-img-3.jpg,featured-img-14.jpg"}', 0),
(6, 'Sample Tile Module', 'position-3', 'tile', 5, 1, '2016-08-08 14:06:59', 0, 'default', 0, '{"image":"fverde.jpg","item":["mall1.jpg,ESTANCIA,test\\/test","mall21.jpg,INSUDTRIA,#","mall3.jpg,GREENHILLS SHOPPING CENTER,greenhills-shopping","fverde.jpg,FRONTERA VERDE,#"],"id":"6"}', 1),
(7, 'NEWS', 'position-4', 'news', 5, 1, '2016-08-09 16:48:51', 0, 'list', 0, '{"newscount":"4","column":"6","id":"7"}', 1),
(8, 'Contact Us', 'position-1', 'contactus', 8, 1, '2016-08-12 15:12:25', 0, 'default', 0, '{"subject":"Ortigas and Company - Contact Us","sentto":"hercivalaragon@gmail.com","sentcc":"val.aragon@virusworldside.com","id":"8"}', 1),
(9, 'Home Menu icons', 'position-2', 'html', 5, 1, '2016-08-17 11:45:11', 0, 'default', 0, '{"html":"<section class=\\"container-fluid icons-tab\\">\\n      <div class=\\"defaultMarginTop defaultMarginBottom\\">\\n        <div class=\\"col-xs-6 col-md-4 col-lg-2 icons-margin\\"><center><a href=\\"#\\"><img src=\\"data:image\\/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI\\/Pgo8c3ZnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHZlcnNpb249IjEuMSIgdmlld0JveD0iMCAwIDQ2MyA0NjMiIGVuYWJsZS1iYWNrZ3JvdW5kPSJuZXcgMCAwIDQ2MyA0NjMiIHdpZHRoPSI2NHB4IiBoZWlnaHQ9IjY0cHgiPgogIDxnPgogICAgPHBhdGggZD0ibTQ1NS41LDM2OGgtNjQuNXYtNDkuNDU4YzMxLjQ5LTMuNzI0IDU2LTMwLjU2NyA1Ni02My4wNDIgMC01Ni40NDYtNTQuNDY1LTE2Ni42NzMtNTYuNzg0LTE3MS4zMzgtMS4yNjctMi41NS0zLjg2OS00LjE2Mi02LjcxNi00LjE2MnMtNS40NDksMS42MTItNi43MTYsNC4xNjJjLTAuMTQxLDAuMjg1LTE0LjI5NywyOC44NDUtMjguMjUsNjMuODA5LTExLjA3NiwyNy43NTUtMTguOTUyLDUxLjY0Ny0yMy41ODcsNzEuNDg5bC04OS43NzEtNTAuNDk2Yy0yLjI4My0xLjI4NC01LjA3LTEuMjg0LTcuMzU0LDBsLTUyLjgyMiwyOS43MTJ2LTcuNjc2aDAuNWM0LjE0MiwwIDcuNS0zLjM1OCA3LjUtNy41cy0zLjM1OC03LjUtNy41LTcuNWgtNDhjLTQuMTQyLDAtNy41LDMuMzU4LTcuNSw3LjVzMy4zNTgsNy41IDcuNSw3LjVoMC41djM0LjExNGwtNy41MTIsNC4yMjZjLTEuNjAxLTYuNjE5LTMuNDYyLTEzLjQ1NS01LjU0NS0yMC4xMTktMTAuMzU1LTMzLjEyMS0yMS45NDktNDkuMjIxLTM1LjQ0My00OS4yMjFzLTI1LjA4OCwxNi4xLTM1LjQ0Miw0OS4yMmMtNy40NDgsMjMuODIyLTEyLjA1OCw0OS44MzctMTIuMDU4LDYwLjI4IDAsMjAuNjU0IDE3LjM2LDM3LjgyNiA0MCw0MC45Nzh2NTcuNTIyaC02NC41Yy00LjE0MiwwLTcuNSwzLjM1OC03LjUsNy41czMuMzU4LDcuNSA3LjUsNy41aDQ0OGM0LjE0MiwwIDcuNS0zLjM1OCA3LjUtNy41cy0zLjM1OC03LjUtNy41LTcuNXptLTIwNy41LTQ4aC0wLjVjLTQuMTQyLDAtNy41LDMuMzU4LTcuNSw3LjVzMy4zNTgsNy41IDcuNSw3LjVoMC41djMzaC0zM3YtODFoMzN2MzN6bTE1LTQwLjVjMC00LjE0Mi0zLjM1OC03LjUtNy41LTcuNWgtNDhjLTQuMTQyLDAtNy41LDMuMzU4LTcuNSw3LjV2ODguNWgtODF2LTc1LjQ4MWMzLjkxNC01LjExIDYuNTU2LTExLjAxOCA3LjU1LTE3LjM4bDEwNC45NS01OS4wMzQgODkuNDYsNTAuMzIxYzAuMzYzLDIuMDgyIDAuODI2LDQuMTI5IDEuMzg3LDYuMTM3LTAuODc4LTAuMzYxLTEuODM5LTAuNTYzLTIuODQ4LTAuNTYzaC0zMmMtNC4xNDIsMC03LjUsMy4zNTgtNy41LDcuNXY1NmMwLDQuMTQyIDMuMzU4LDcuNSA3LjUsNy41aDMyYzQuMTQyLDAgNy41LTMuMzU4IDcuNS03LjV2LTUxLjA3NGM0LjE0Niw4LjA2NiA5Ljk2NCwxNS4xMzEgMTcsMjAuNzM4djYyLjgzNmgtODF2LTg4LjV6bTQ5LjAwMSwxNi41aC0xN3YtOWgxN3Y5em0tMTcsMTVoMTd2MTdoLTE3di0xN3ptNjQsMy4wNzhjNS4zMzcsMi4yNCAxMS4wNDUsMy43NTkgMTcsNC40NjR2NDkuNDU4aC0xN3YtNTMuOTIyem0yNC41LTIwOS4xMzVjMTQuNzE4LDMxLjY4NCA0OC41LDEwOC45NDQgNDguNSwxNTAuNTU3IDAsMjQuMTkzLTE3LjgwNiw0NC4zMDItNDEsNDcuOTE4di0yMy45MTVjMC0wLjAwMiAwLTAuMDAzIDAtMC4wMDV2LTIwLjg5MWwyMS44MDMtMjEuODAzYzIuOTI5LTIuOTI5IDIuOTI5LTcuNjc4IDAtMTAuNjA2LTIuOTI5LTIuOTI5LTcuNjc4LTIuOTI5LTEwLjYwNiwwbC0xMS4xOTcsMTEuMTk2di0xMy44OTRjMC00LjE0Mi0zLjM1OC03LjUtNy41LTcuNXMtNy41LDMuMzU4LTcuNSw3LjV2MzEuOTk3YzAsMC4wMDIgMCwwLjAwMyAwLDAuMDA1djUuODkxbC0xMS4xOTctMTEuMTk3Yy0yLjkyOS0yLjkyOS03LjY3OC0yLjkyOS0xMC42MDYsMC0yLjkyOSwyLjkyOS0yLjkyOSw3LjY3OCAwLDEwLjYwNmwyMS44MDMsMjEuODA0djIwLjgxMmMtMjMuMTk0LTMuNjE2LTQxLTIzLjcyNS00MS00Ny45MTggMC00MS42MTMgMzMuNzgyLTExOC44NzMgNDguNS0xNTAuNTU3em0tMjQwLjUsODYuMDU3aDE3djE2LjExNGwtMTcsOS41NjN2LTI1LjY3N3ptODguNS02Ljg5NWw5MC4zNTYsNTAuODI1Yy0wLjgsNC45NTQtMS4zNDEsOS41ODEtMS42MjMsMTMuODc4bC04NS4wNTYtNDcuODQ0Yy0yLjI4My0xLjI4NC01LjA3MS0xLjI4NC03LjM1NCwwbC0xMDEuNzY5LDU3LjI0NWMtMC41MzQtNC4wMTItMS4yODUtOC41OTEtMi4yMzQtMTMuNTM0bDEwNy42OC02MC41N3ptLTE4NC41LDg1LjM5NWMwLTcuOTM4IDQuMDUtMzIuMzc5IDExLjM3NC01NS44MDQgOS45MjUtMzEuNzQ0IDE4LjYxNS0zOC42OTYgMjEuMTI2LTM4LjY5NnMxMS4yMDEsNi45NTIgMjEuMTI2LDM4LjY5NmM3LjMyNCwyMy40MjUgMTEuMzc0LDQ3Ljg2NiAxMS4zNzQsNTUuODA0IDAsMTIuNTA3LTEwLjY4NSwyMy4wMTEtMjUsMjUuNzh2LTIzLjc4YzAtNC4xNDItMy4zNTgtNy41LTcuNS03LjVzLTcuNSwzLjM1OC03LjUsNy41djIzLjc4Yy0xNC4zMTUtMi43NjktMjUtMTMuMjczLTI1LTI1Ljc4em00MCw0MC45NzhjNi4xMzQtMC44NTQgMTEuODgxLTIuNzM1IDE3LTUuNDM4djYyLjk2aC0xN3YtNTcuNTIyeiIgZmlsbD0iI0ZGRkZGRiIvPgogICAgPHBhdGggZD0ibTE3NS41LDI3MmgtMzJjLTQuMTQyLDAtNy41LDMuMzU4LTcuNSw3LjV2NTZjMCw0LjE0MiAzLjM1OCw3LjUgNy41LDcuNWgzMmM0LjE0MiwwIDcuNS0zLjM1OCA3LjUtNy41di01NmMwLTQuMTQyLTMuMzU4LTcuNS03LjUtNy41em0tNy41LDE1djloLTE3di05aDE3em0tMTcsNDF2LTE3aDE3djE3aC0xN3oiIGZpbGw9IiNGRkZGRkYiLz4KICA8L2c+Cjwvc3ZnPgo=\\" \\/><\\/a>\\n        <p style=\\"margin-top: 8px;\\">ESTATES<\\/p><\\/center><\\/div>\\n\\n        <div class=\\"col-xs-6 col-md-4 col-lg-2 icons-margin\\"><center><a href=\\"#\\"><img src=\\"data:image\\/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI\\/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTkuMS4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4PSIwcHgiIHk9IjBweCIgdmlld0JveD0iMCAwIDMwLjYwOCAzMC42MDgiIHN0eWxlPSJlbmFibGUtYmFja2dyb3VuZDpuZXcgMCAwIDMwLjYwOCAzMC42MDg7IiB4bWw6c3BhY2U9InByZXNlcnZlIiB3aWR0aD0iNjRweCIgaGVpZ2h0PSI2NHB4Ij4KPGc+Cgk8Zz4KCQk8Zz4KCQkJPGc+CgkJCQk8cGF0aCBkPSJNMjkuNzMzLDMwLjYwOEgwLjg3NUMwLjM5MiwzMC42MDgsMCwzMC4yMTYsMCwyOS43MzNWMTAuNjExYzAtMC4yOSwwLjE0NS0wLjU2MiwwLjM4Ni0wLjcyNSAgICAgIGwxNC40My05LjczNmMwLjI5Ny0wLjE5OSwwLjY4My0wLjE5OSwwLjk3OSwwbDE0LjQyOCw5LjczNmMwLjI0MSwwLjE2MiwwLjM4NiwwLjQzNCwwLjM4NiwwLjcyNXYxOS4xMjIgICAgICBDMzAuNjA4LDMwLjIxNiwzMC4yMTcsMzAuNjA4LDI5LjczMywzMC42MDh6IE0xLjc1LDI4Ljg1OGgyNy4xMDhWMTEuMDc2TDE1LjMwNSwxLjkyOUwxLjc1LDExLjA3NlYyOC44NTh6IiBmaWxsPSIjRkZGRkZGIi8+CgkJCTwvZz4KCQkJPGc+CgkJCQk8cGF0aCBkPSJNMjUuMjE2LDMwLjYwOGgtOS45MTFjLTAuNDgyLDAtMC44NzUtMC4zOTItMC44NzUtMC44NzVWMTUuMzA0YzAtMC40ODMsMC4zOTMtMC44NzUsMC44NzUtMC44NzUgICAgICBoOS45MTFjMC40ODMsMCwwLjg3NSwwLjM5MiwwLjg3NSwwLjg3NXYxNC40MjlDMjYuMDkxLDMwLjIxNiwyNS42OTksMzAuNjA4LDI1LjIxNiwzMC42MDh6IE0xNi4xOCwyOC44NThoOC4xNjF2LTEyLjY4SDE2LjE4ICAgICAgVjI4Ljg1OHoiIGZpbGw9IiNGRkZGRkYiLz4KCQkJPC9nPgoJCTwvZz4KCQk8Zz4KCQkJPHBhdGggZD0iTTEwLjMyMSwyMC44NzNoLTUuODljLTAuNDgzLDAtMC44NzUtMC4zOTItMC44NzUtMC44NzV2LTQuNjkzYzAtMC40ODMsMC4zOTItMC44NzUsMC44NzUtMC44NzUgICAgIGg1Ljg5YzAuNDgzLDAsMC44NzUsMC4zOTIsMC44NzUsMC44NzV2NC42OTNDMTEuMTk2LDIwLjQ4MSwxMC44MDQsMjAuODczLDEwLjMyMSwyMC44NzN6IE01LjMwNywxOS4xMjNoNC4xNHYtMi45NDRoLTQuMTQgICAgIFYxOS4xMjN6IiBmaWxsPSIjRkZGRkZGIi8+CgkJPC9nPgoJPC9nPgoJPGc+CgkJPHBhdGggZD0iTTI5LjczMywxMS45MzFIMC44NzVDMC4zOTIsMTEuOTMxLDAsMTEuNTQsMCwxMS4wNTZjMC0wLjQ4MiwwLjM5Mi0wLjg3NSwwLjg3NS0wLjg3NWgyOC44NTggICAgYzAuNDgzLDAsMC44NzUsMC4zOTMsMC44NzUsMC44NzVDMzAuNjA4LDExLjU0LDMwLjIxNywxMS45MzEsMjkuNzMzLDExLjkzMXoiIGZpbGw9IiNGRkZGRkYiLz4KCTwvZz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8L3N2Zz4K\\" \\/><\\/a>\\n        <p style=\\"margin-top: 8px;\\">RESIDENCES<\\/p><\\/center><\\/div>\\n\\n        <div class=\\"col-xs-6 col-md-4 col-lg-2 icons-margin\\"><center><a href=\\"#\\"><img src=\\"data:image\\/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI\\/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTkuMS4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4PSIwcHgiIHk9IjBweCIgdmlld0JveD0iMCAwIDQ4OSA0ODkiIHN0eWxlPSJlbmFibGUtYmFja2dyb3VuZDpuZXcgMCAwIDQ4OSA0ODk7IiB4bWw6c3BhY2U9InByZXNlcnZlIiB3aWR0aD0iNjRweCIgaGVpZ2h0PSI2NHB4Ij4KPGc+Cgk8cGF0aCBkPSJNNDQwLjEsNDIyLjdsLTI4LTMxNS4zYy0wLjYtNy02LjUtMTIuMy0xMy40LTEyLjNoLTU3LjZDMzQwLjMsNDIuNSwyOTcuMywwLDI0NC41LDBzLTk1LjgsNDIuNS05Ni42LDk1LjFIOTAuMyAgIGMtNywwLTEyLjgsNS4zLTEzLjQsMTIuM2wtMjgsMzE1LjNjMCwwLjQtMC4xLDAuOC0wLjEsMS4yYzAsMzUuOSwzMi45LDY1LjEsNzMuNCw2NS4xaDI0NC42YzQwLjUsMCw3My40LTI5LjIsNzMuNC02NS4xICAgQzQ0MC4yLDQyMy41LDQ0MC4yLDQyMy4xLDQ0MC4xLDQyMi43eiBNMjQ0LjUsMjdjMzcuOSwwLDY4LjgsMzAuNCw2OS42LDY4LjFIMTc0LjlDMTc1LjcsNTcuNCwyMDYuNiwyNywyNDQuNSwyN3ogTTM2Ni44LDQ2MiAgIEgxMjIuMmMtMjUuNCwwLTQ2LTE2LjgtNDYuNC0zNy41bDI2LjgtMzAyLjNoNDUuMnY0MWMwLDcuNSw2LDEzLjUsMTMuNSwxMy41czEzLjUtNiwxMy41LTEzLjV2LTQxaDEzOS4zdjQxICAgYzAsNy41LDYsMTMuNSwxMy41LDEzLjVzMTMuNS02LDEzLjUtMTMuNXYtNDFoNDUuMmwyNi45LDMwMi4zQzQxMi44LDQ0NS4yLDM5Mi4xLDQ2MiwzNjYuOCw0NjJ6IiBmaWxsPSIjRkZGRkZGIi8+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPC9zdmc+Cg==\\" \\/><\\/a>\\n        <p style=\\"margin-top: 8px;\\">MALLS<\\/p><\\/center><\\/div>\\n\\n        <div class=\\"col-xs-6 col-md-4 col-lg-2 icons-margin\\"><center><a href=\\"#\\"><img src=\\"data:image\\/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI\\/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTkuMS4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4PSIwcHgiIHk9IjBweCIgdmlld0JveD0iMCAwIDQ4OSA0ODkiIHN0eWxlPSJlbmFibGUtYmFja2dyb3VuZDpuZXcgMCAwIDQ4OSA0ODk7IiB4bWw6c3BhY2U9InByZXNlcnZlIiB3aWR0aD0iNjRweCIgaGVpZ2h0PSI2NHB4Ij4KPGc+Cgk8cGF0aCBkPSJNNDQwLjEsNDIyLjdsLTI4LTMxNS4zYy0wLjYtNy02LjUtMTIuMy0xMy40LTEyLjNoLTU3LjZDMzQwLjMsNDIuNSwyOTcuMywwLDI0NC41LDBzLTk1LjgsNDIuNS05Ni42LDk1LjFIOTAuMyAgIGMtNywwLTEyLjgsNS4zLTEzLjQsMTIuM2wtMjgsMzE1LjNjMCwwLjQtMC4xLDAuOC0wLjEsMS4yYzAsMzUuOSwzMi45LDY1LjEsNzMuNCw2NS4xaDI0NC42YzQwLjUsMCw3My40LTI5LjIsNzMuNC02NS4xICAgQzQ0MC4yLDQyMy41LDQ0MC4yLDQyMy4xLDQ0MC4xLDQyMi43eiBNMjQ0LjUsMjdjMzcuOSwwLDY4LjgsMzAuNCw2OS42LDY4LjFIMTc0LjlDMTc1LjcsNTcuNCwyMDYuNiwyNywyNDQuNSwyN3ogTTM2Ni44LDQ2MiAgIEgxMjIuMmMtMjUuNCwwLTQ2LTE2LjgtNDYuNC0zNy41bDI2LjgtMzAyLjNoNDUuMnY0MWMwLDcuNSw2LDEzLjUsMTMuNSwxMy41czEzLjUtNiwxMy41LTEzLjV2LTQxaDEzOS4zdjQxICAgYzAsNy41LDYsMTMuNSwxMy41LDEzLjVzMTMuNS02LDEzLjUtMTMuNXYtNDFoNDUuMmwyNi45LDMwMi4zQzQxMi44LDQ0NS4yLDM5Mi4xLDQ2MiwzNjYuOCw0NjJ6IiBmaWxsPSIjRkZGRkZGIi8+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPC9zdmc+Cg==\\" \\/><\\/a>\\n        <p style=\\"margin-top: 8px;\\">OFFICES<\\/p><\\/center><\\/div>\\n\\n        <div class=\\"col-xs-6 col-md-4 col-lg-2 icons-margin\\"><center><a href=\\"#\\"><img src=\\"data:image\\/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI\\/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTguMC4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjwhRE9DVFlQRSBzdmcgUFVCTElDICItLy9XM0MvL0RURCBTVkcgMS4xLy9FTiIgImh0dHA6Ly93d3cudzMub3JnL0dyYXBoaWNzL1NWRy8xLjEvRFREL3N2ZzExLmR0ZCI+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4PSIwcHgiIHk9IjBweCIgdmlld0JveD0iMCAwIDI5Ny4zODQgMjk3LjM4NCIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgMjk3LjM4NCAyOTcuMzg0OyIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSIgd2lkdGg9IjY0cHgiIGhlaWdodD0iNjRweCI+CjxnPgoJPHBhdGggZD0iTTI2NS41Myw3OC4xMTJjLTAuMDE0LTAuMTM0LTAuMDM3LTAuMjY2LTAuMDYtMC4zOTdjLTAuMDA4LTAuMDQ1LTAuMDEzLTAuMDkxLTAuMDItMC4xMzUgICBjLTAuMDMxLTAuMTU2LTAuMDcyLTAuMzEtMC4xMTYtMC40NjJjLTAuMDA2LTAuMDE5LTAuMDA5LTAuMDM4LTAuMDE1LTAuMDU4Yy0wLjA0Ny0wLjE1Mi0wLjEwMi0wLjMwMy0wLjE2Mi0wLjQ1ICAgYy0wLjAwNy0wLjAxOC0wLjAxMi0wLjAzNy0wLjAyLTAuMDU1Yy0wLjA1OC0wLjEzOS0wLjEyNC0wLjI3NC0wLjE5My0wLjQwOGMtMC4wMTMtMC4wMjUtMC4wMjMtMC4wNTMtMC4wMzctMC4wNzcgICBjLTAuMDY0LTAuMTIyLTAuMTM5LTAuMjM5LTAuMjEyLTAuMzU1Yy0wLjAyMi0wLjAzNS0wLjA0Mi0wLjA3Mi0wLjA2NS0wLjEwNmMtMC4wNy0wLjEwNi0wLjE0OS0wLjIwNy0wLjIyOC0wLjMwOCAgIGMtMC4wMzItMC4wNDEtMC4wNi0wLjA4NS0wLjA5My0wLjEyNGMtMC4wOTYtMC4xMTctMC4xOTktMC4yMjgtMC4zMDUtMC4zMzdjLTAuMDItMC4wMi0wLjAzNS0wLjA0MS0wLjA1NS0wLjA2MUwxOTAuNzc2LDEuNjA4ICAgVjEuNjA3Yy0wLjEyNy0wLjEyNy0wLjI2MS0wLjI0Ny0wLjM5OC0wLjM2Yy0wLjAzLTAuMDI1LTAuMDYzLTAuMDQ3LTAuMDk0LTAuMDdjLTAuMTExLTAuMDg3LTAuMjIzLTAuMTczLTAuMzM4LTAuMjUgICBjLTAuMDI4LTAuMDItMC4wNTktMC4wMzUtMC4wODctMC4wNTNjLTAuMTIzLTAuMDc5LTAuMjQ3LTAuMTU2LTAuMzc2LTAuMjI1Yy0wLjAxOC0wLjAxLTAuMDM4LTAuMDE4LTAuMDU3LTAuMDI3ICAgYy0wLjE0MS0wLjA3My0wLjI4My0wLjE0My0wLjQzLTAuMjAzYy0wLjAwOC0wLjAwNC0wLjAxOC0wLjAwNi0wLjAyNS0wLjAxYy0wLjE1Ny0wLjA2NS0wLjMxNi0wLjEyMi0wLjQ3OS0wLjE3MiAgIGMtMC4wMDctMC4wMDItMC4wMTQtMC4wMDItMC4wMi0wLjAwNGMtMC4xNjQtMC4wNS0wLjMzMS0wLjA5Mi0wLjUtMC4xMjZjLTAuMDIxLTAuMDA1LTAuMDQ0LTAuMDA2LTAuMDY1LTAuMDExICAgYy0wLjE1NC0wLjAyOC0wLjMxLTAuMDU0LTAuNDY4LTAuMDY5Yy0wLjEtMC4wMS0wLjIwMS0wLjAxMS0wLjMwMy0wLjAxNUMxODcuMDU3LDAuMDA5LDE4Ni45NzcsMCwxODYuODk1LDAgICBjLTAuMDAyLDAtMC4wMDMsMC0wLjAwNSwwSDM3LjMxNWMtMy4wMzEsMC01LjQ4OCwyLjQ1Ny01LjQ4OCw1LjQ4OHYyODYuNDA4YzAsMy4wMywyLjQ1Nyw1LjQ4Nyw1LjQ4OCw1LjQ4N2gyMjIuNzU0ICAgYzMuMDMxLDAsNS40ODgtMi40NTcsNS40ODgtNS40ODdWNzguNjZsMCwwdi0wLjAwMWMwLTAuMDA3LTAuMDAyLTAuMDE1LTAuMDAyLTAuMDIxQzI2NS41NTUsNzguNDYsMjY1LjU0Niw3OC4yODUsMjY1LjUzLDc4LjExMnogICAgTTI0Ni44MjIsNzMuMTc0bC01NC40MzUsMC4wMDZsLTAuMDA0LTU0LjQ0MkwyNDYuODIyLDczLjE3NHogTTI1NC41ODEsMjg2LjQwOUg0Mi44MDJWMTAuOTc2aDEzOC42MDVsMC4wMDQsNjcuNjkzICAgYzAsMS40NTUsMC41NzgsMi44NTIsMS42MDcsMy44OGMxLjAyOSwxLjAyOSwyLjQyNiwxLjYwNywzLjg4MSwxLjYwN2w2Ny42ODItMC4wMDhWMjg2LjQwOXoiIGZpbGw9IiNGRkZGRkYiLz4KCTxwYXRoIGQ9Ik0xMTIuMDM4LDc2LjgxN2MxMi41ODIsMCwyMi44MTctMTAuMjM4LDIyLjgxNy0yMi44MjNjMC0xMi41ODUtMTAuMjM1LTIyLjgyMy0yMi44MTctMjIuODIzICAgYy0xMi41ODMsMC0yMi44MiwxMC4yMzgtMjIuODIsMjIuODIzQzg5LjIxNyw2Ni41NzksOTkuNDU1LDc2LjgxNywxMTIuMDM4LDc2LjgxN3ogTTExMi4wMzgsNDIuMTQ2ICAgYzYuNTI5LDAsMTEuODQyLDUuMzE1LDExLjg0MiwxMS44NDljMCw2LjUzMi01LjMxMywxMS44NDgtMTEuODQyLDExLjg0OGMtNi41MzEsMC0xMS44NDQtNS4zMTUtMTEuODQ0LTExLjg0OCAgIEMxMDAuMTk0LDQ3LjQ2MSwxMDUuNTA2LDQyLjE0NiwxMTIuMDM4LDQyLjE0NnoiIGZpbGw9IiNGRkZGRkYiLz4KCTxwYXRoIGQ9Ik04Ni41NDEsMTE4LjQ3YzMuMDMxLDAsNS40ODgtMi40NTcsNS40ODgtNS40ODd2LTkuNjI2YzAtNi4yMjIsNS4wNjQtMTEuMjgzLDExLjI4Ni0xMS4yODNoMTcuNTgyICAgYzYuMjI2LDAsMTEuMjkxLDUuMDYyLDExLjI5MSwxMS4yODN2OS42MjZjMCwzLjAzLDIuNDU2LDUuNDg3LDUuNDg3LDUuNDg3YzMuMDMxLDAsNS40ODgtMi40NTcsNS40ODgtNS40ODd2LTkuNjI2ICAgYzAtMTIuMjczLTkuOTg4LTIyLjI1OC0yMi4yNjctMjIuMjU4aC0xNy41ODJjLTEyLjI3NSwwLTIyLjI2Miw5Ljk4NC0yMi4yNjIsMjIuMjU4djkuNjI2ICAgQzgxLjA1NCwxMTYuMDEzLDgzLjUxMSwxMTguNDcsODYuNTQxLDExOC40N3oiIGZpbGw9IiNGRkZGRkYiLz4KCTxwYXRoIGQ9Ik04MS4wNTQsMTU3LjJjMCwzLjAzLDIuNDU3LDUuNDg3LDUuNDg3LDUuNDg3aDEyNC4zMDVjMy4wMzEsMCw1LjQ4OC0yLjQ1Nyw1LjQ4OC01LjQ4N2MwLTMuMDMxLTIuNDU3LTUuNDg4LTUuNDg4LTUuNDg4ICAgSDg2LjU0MUM4My41MTEsMTUxLjcxMiw4MS4wNTQsMTU0LjE2OSw4MS4wNTQsMTU3LjJ6IiBmaWxsPSIjRkZGRkZGIi8+Cgk8cGF0aCBkPSJNMjEwLjg0NiwyMzIuOTE1SDg2LjU0MWMtMy4wMywwLTUuNDg3LDIuNDU3LTUuNDg3LDUuNDg4YzAsMy4wMzEsMi40NTcsNS40ODgsNS40ODcsNS40ODhoMTI0LjMwNSAgIGMzLjAzMSwwLDUuNDg4LTIuNDU3LDUuNDg4LTUuNDg4QzIxNi4zMzUsMjM1LjM3MiwyMTMuODc3LDIzMi45MTUsMjEwLjg0NiwyMzIuOTE1eiIgZmlsbD0iI0ZGRkZGRiIvPgoJPHBhdGggZD0iTTIxMC44NDYsMTkyLjMxM0g4Ni41NDFjLTMuMDMsMC01LjQ4NywyLjQ1Ny01LjQ4Nyw1LjQ4OGMwLDMuMDMxLDIuNDU3LDUuNDg4LDUuNDg3LDUuNDg4aDEyNC4zMDUgICBjMy4wMzEsMCw1LjQ4OC0yLjQ1Nyw1LjQ4OC01LjQ4OEMyMTYuMzM1LDE5NC43NywyMTMuODc3LDE5Mi4zMTMsMjEwLjg0NiwxOTIuMzEzeiIgZmlsbD0iI0ZGRkZGRiIvPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+Cjwvc3ZnPgo=\\" \\/><\\/a>\\n        <p style=\\"margin-top: 8px;\\">CAREERS<\\/p><\\/center><\\/div>\\n\\n        <div class=\\"col-xs-6 col-md-4 col-lg-2 icons-margin\\"><center><a href=\\"#\\"><img src=\\"data:image\\/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI\\/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTkuMS4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4PSIwcHgiIHk9IjBweCIgdmlld0JveD0iMCAwIDQ3MyA0NzMiIHN0eWxlPSJlbmFibGUtYmFja2dyb3VuZDpuZXcgMCAwIDQ3MyA0NzM7IiB4bWw6c3BhY2U9InByZXNlcnZlIiB3aWR0aD0iNjRweCIgaGVpZ2h0PSI2NHB4Ij4KPGc+Cgk8Zz4KCQk8cGF0aCBkPSJNNDAzLjU4MSw2OS4zYy00NC43LTQ0LjctMTA0LTY5LjMtMTY3LjItNjkuM3MtMTIyLjUsMjQuNi0xNjcuMiw2OS4zYy04Ni40LDg2LjQtOTIuNCwyMjQuNy0xNC45LDMxOCAgICBjLTcuNiwxNS4zLTE5LjgsMzMuMS0zNy45LDQyYy04LjcsNC4zLTEzLjYsMTMuNi0xMi4xLDIzLjJzOC45LDE3LjEsMTguNSwxOC42YzQuNSwwLjcsMTAuOSwxLjQsMTguNywxLjQgICAgYzIwLjksMCw1MS43LTQuOSw4My4yLTI3LjZjMzUuMSwxOC45LDczLjUsMjguMSwxMTEuNiwyOC4xYzYxLjIsMCwxMjEuOC0yMy43LDE2Ny40LTY5LjNjNDQuNy00NC43LDY5LjMtMTA0LDY5LjMtMTY3LjIgICAgUzQ0OC4yODEsMTE0LDQwMy41ODEsNjkuM3ogTTM4NC40ODEsMzg0LjZjLTY3LjUsNjcuNS0xNzIsODAuOS0yNTQuMiwzMi42Yy01LjQtMy4yLTEyLjEtMi4yLTE2LjQsMi4xYy0wLjQsMC4yLTAuOCwwLjUtMS4xLDAuOCAgICBjLTI3LjEsMjEtNTMuNywyNS40LTcxLjMsMjUuNGgtMC4xYzIwLjMtMTQuOCwzMy4xLTM2LjgsNDAuNi01My45YzEuMi0yLjksMS40LTUuOSwwLjctOC43Yy0wLjMtMi43LTEuNC01LjQtMy4zLTcuNiAgICBjLTczLjItODIuNy02OS40LTIwOC43LDguOC0yODYuOWM4MS43LTgxLjcsMjE0LjYtODEuNywyOTYuMiwwQzQ2Ni4xODEsMTcwLjEsNDY2LjE4MSwzMDIuOSwzODQuNDgxLDM4NC42eiIgZmlsbD0iI0ZGRkZGRiIvPgoJCTxjaXJjbGUgY3g9IjIzNi4zODEiIGN5PSIyMzYuNSIgcj0iMTYuNiIgZmlsbD0iI0ZGRkZGRiIvPgoJCTxjaXJjbGUgY3g9IjMyMS45ODEiIGN5PSIyMzYuNSIgcj0iMTYuNiIgZmlsbD0iI0ZGRkZGRiIvPgoJCTxjaXJjbGUgY3g9IjE1MC43ODEiIGN5PSIyMzYuNSIgcj0iMTYuNiIgZmlsbD0iI0ZGRkZGRiIvPgoJPC9nPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+Cjwvc3ZnPgo=\\" \\/><\\/a>\\n        <p style=\\"margin-top: 8px;\\">CONTACT US<\\/p><\\/center><\\/div>\\n      <\\/div>\\n    <\\/section>","id":"9"}', 0),
(11, 'Careers banner', 'position-1', 'banner', 9, 1, '2016-08-17 13:28:39', 0, 'default', 0, '{"id":"11","images":"featured-img-32.jpg"}', 0);

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
(9, 'CAREERS AT ORTIGAS', 'inner', '{"title":"CAREERS AT ORTIGAS","description":"CAREERS AT ORTIGAS\\n","keywords":"<p>careers<\\/p>\\n","image":"featured-img-31.jpg"}', '2016-08-17 12:36:33', 1, 'careers');

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
  `estate` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hda_units`
--

INSERT INTO `hda_units` (`id`, `name`, `unit_type`, `logo`, `location`, `size`, `development_type`, `space`, `schem_image`, `price`, `gallery`, `publish`, `date_created`, `alias`, `residences`, `estate`) VALUES
(2, 'THE VISIONARY', '1-BR Living', 'ab-maven.jpg', 'Pasig City ', '42-56 SQM | 452-603 SQFT ', 'Residential', '{"space":["one-bedroom"]}', 'visionary-room.png', 1000000, '{"gallery":["o12.jpg","mall1.jpg"]}', 1, '2016-08-12 11:10:02', 'the-visionary', 'Ibiza', 'Capitol Commons'),
(3, 'THE VISIONARY', '1-BR Living', 'ab-maven.jpg', 'Pasig City ', '42-56 SQM | 452-603 SQFT', 'Condominium', '{"space":["one-bedroom","one-bathroom"]}', 'visionary-room.png', 1000000, '{"gallery":["mall1.jpg","ocenter.jpg","e1.jpg"]}', 1, '2016-08-12 11:13:57', 'the-visionary-2', 'Majorca', 'Circulo Verde'),
(4, 'fasdfas', '1-BR Living', 'about-img.jpg', 'asdfa', 'sdfas', 'Residential', '{"space":["one-bedroom","one-bathroom"]}', 'about-img1.jpg', 100000, '{"gallery":["about-img.jpg"]}', 1, '2016-08-12 11:15:48', 'fasdfasd', 'Avida', 'Circulo Verde');

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
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `hda_menu_group`
--
ALTER TABLE `hda_menu_group`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `hda_modules`
--
ALTER TABLE `hda_modules`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `hda_news`
--
ALTER TABLE `hda_news`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `hda_pages`
--
ALTER TABLE `hda_pages`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `hda_units`
--
ALTER TABLE `hda_units`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
