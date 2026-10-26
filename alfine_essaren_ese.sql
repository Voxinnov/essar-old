-- phpMyAdmin SQL Dump
-- version 5.2.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 26, 2026 at 04:08 AM
-- Server version: 8.0.46
-- PHP Version: 8.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `alfine_essaren_ese`
--

-- --------------------------------------------------------

--
-- Table structure for table `ese_abt`
--

CREATE TABLE `ese_abt` (
  `abt_id` int NOT NULL,
  `abt_title` varchar(100) NOT NULL,
  `abt_captn` varchar(1000) NOT NULL,
  `abt_descri` varchar(30000) NOT NULL,
  `abt_img` varchar(300) NOT NULL,
  `abt_stastus` int NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ese_abt`
--

INSERT INTO `ese_abt` (`abt_id`, `abt_title`, `abt_captn`, `abt_descri`, `abt_img`, `abt_stastus`) VALUES
(1, 'Essar Engineers          ', '          ', '<div><div></div><div></div><div>	</div>We are the leading manufactures for Custom and Ready made pressure \r\nGarments. Depending on the purpose and treatment, different grades of \r\npressure garments are available. our pressure garments are light weight \r\nand made up of breathable fabric due to which the comfort level for the \r\npatients is increased after the surgery. \r\n</div><br>', 'essar-engineers--7342.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `ese_admin`
--

CREATE TABLE `ese_admin` (
  `admin_id` int NOT NULL,
  `admin_uname` varchar(100) NOT NULL,
  `admin_pass` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ese_admin`
--

INSERT INTO `ese_admin` (`admin_id`, `admin_uname`, `admin_pass`) VALUES
(1, 'info@essarengineers.co.in', 'ZXNlX2FkbV9haXM=');

-- --------------------------------------------------------

--
-- Table structure for table `ese_cart`
--

CREATE TABLE `ese_cart` (
  `cart_id` int NOT NULL,
  `cart_prod_id` int NOT NULL,
  `cart_prod_name` varchar(100) NOT NULL,
  `cart_extra_details` varchar(500) NOT NULL,
  `cart_status` int NOT NULL,
  `cart_prod_id_uid` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ese_cart`
--

INSERT INTO `ese_cart` (`cart_id`, `cart_prod_id`, `cart_prod_name`, `cart_extra_details`, `cart_status`, `cart_prod_id_uid`) VALUES
(1, 8, 'Males vest for gynecomastia', '<br>', 1, 'eseais1050'),
(7, 8, 'Males vest for gynecomastia', '<br>', 1, '12'),
(8, 0, '', '<br>', 1, 'eseais'),
(9, 0, '', '<br>', 1, '13'),
(10, 4, 'Sleeves for hand', '<br>', 1, '14'),
(13, 5, 'Liposuction Garments Product', '<br>', 1, '15'),
(19, 22, 'HYPERBARIC OXYGEN THERAPY CHAMBER', '<br>', 1, 'eseais'),
(23, 20, 'Dermal Fillers', '<br>', 1, 'eseais'),
(24, 19, 'Dermal Fillers', '<br>', 1, 'eseais'),
(25, 7, 'Liposuction Garments Product', '<br>', 1, 'eseais');$a=\"<br>1', 1, 'eseais14136'),
(137, 1, '', '${@print(md5(31337))}<br>1', 1, 'eseais14136'),
(138, 1, '', '${@print(md5(31337))}<br>1', 1, 'eseais14136'),
(139, 4, 'Sleeves for hand', '1<br>1', 1, '90'),
(140, 1, '', '1<br>1', 1, '90'),
(180, 8, 'Males vest for gynecomastia', '<br>', 1, 'eseais16143'),
(181, 8, 'Males vest for gynecomastia', '<br>', 1, 'eseais17019'),
(182, 8, 'Males vest for gynecomastia', '<br>', 1, 'eseais18645'),
(145, 4, 'Sleeves for hand', '1<br>../../../../../../../../../../../../../../windows/win.ini', 1, 'eseais14136'),
(146, 4, 'Sleeves for hand', '0\"XOR(if(now()=sysdate(),sleep(15),0))XOR\"Z<br>1', 1, '91'),
(147, 1, '', '-5) OR 292=(SELECT 292 FROM PG_SLEEP(15))--<br>1', 1, '92'),
(148, 4, 'Sleeves for hand', '1<br>1', 1, '95'),
(149, 4, 'Sleeves for hand', '1*DBMS_PIPE.RECEIVE_MESSAGE(CHR(99)||CHR(99)||CHR(99),15)<br>1', 1, 'eseais14136'),
(150, 4, 'Sleeves for hand', '1<br>1', 1, '97'),
(151, 4, '-1 OR 2+763-763-1=0+0+0+1 --', '1<br>1', 1, '98'),
(152, 4, '-1 OR 2+889-889-1=0+0+0+1', '1<br>1', 1, '99'),
(153, 4, '1', '1<br>1', 1, '102'),
(154, 4, '-1\" OR 2+208-208-1=0+0+0+1 --', '1<br>1', 1, '103'),
(155, 4, 'Sleeves for hand', '1\0À§À¢%2527%2522<br>1', 1, 'eseais14136'),
(156, 4, 'if(now()=sysdate(),sleep(15),0)', '1<br>1', 1, '105'),
(157, 4, 'Sleeves for hand', '1<br>1', 1, 'eseais14136'),
(158, 4, 'Sleeves for hand', '1<br>1', 1, 'eseais14136'),
(159, 4, 'Sleeves for hand', '1<br>-1 OR 2+283-283-1=0+0+0+1 --', 1, 'eseais14136'),
(160, 4, 'Sleeves for hand', '1<br>-1 OR 2+72-72-1=0+0+0+1', 1, 'eseais14136'),
(161, 4, 'Sleeves for hand', '1<br>-1\" OR 2+611-611-1=0+0+0+1 --', 1, 'eseais14136'),
(162, 4, 'Sleeves for hand', '1<br>if(now()=sysdate(),sleep(15),0)', 1, 'eseais14136'),
(163, 1, '0\"XOR(if(now()=sysdate(),sleep(15),0))XOR\"Z', '1<br>1', 1, '112'),
(164, 4, 'Sleeves for hand', '1<br>0\"XOR(if(now()=sysdate(),sleep(15),0))XOR\"Z', 1, 'eseais14136'),
(165, 4, 'Sleeves for hand', '1<br>1', 1, '122'),
(166, 4, 'Sleeves for hand', '1<br>1', 1, '124'),
(167, 1, '-5 OR 502=(SELECT 502 FROM PG_SLEEP(15))--', '1<br>1', 1, '125'),
(168, 1, '-5) OR 895=(SELECT 895 FROM PG_SLEEP(15))--', '1<br>1', 1, '126'),
(169, 1, '-1)) OR 732=(SELECT 732 FROM PG_SLEEP(15))--', '1<br>1', 1, '127'),
(170, 4, 'Sleeves for hand', '1<br>-5 OR 408=(SELECT 408 FROM PG_SLEEP(15))--', 1, 'eseais14136'),
(171, 1, '*DBMS_PIPE.RECEIVE_MESSAGE(CHR(99)||CHR(99)||CHR(99),15)', '1<br>1', 1, '129'),
(172, 1, '1\0À§À¢%2527%2522', '1<br>1', 1, '131'),
(173, 1, '', '1<br>1', 1, '132'),
(174, 4, 'Sleeves for hand', '1<br>1*DBMS_PIPE.RECEIVE_MESSAGE(CHR(99)||CHR(99)||CHR(99),15)', 1, 'eseais14136'),
(175, 1, '', '1<br>1', 1, '133'),
(176, 1, '', '1<br>1', 1, '134'),
(177, 1, '', '1<br>1', 1, '135'),
(178, 4, 'Sleeves for hand', '1<br>1', 1, 'eseais14136'),
(179, 1, '', '1<br>1', 1, 'eseais14136'),
(183, 10, 'Stockings Below knee and above knee', '<br>', 1, 'eseais23630'),
(184, 8, 'Males vest for gynecomastia', '<br>', 1, 'eseais24430'),
(185, 12, 'Silicon nostril retainer', '<br>', 1, 'eseais32620'),
(186, 8, 'Males vest for gynecomastia', '<br>', 1, 'eseais39069'),
(187, 9, 'Stockings Below knee and above knee', '<br>', 1, 'eseais41973'),
(188, 12, 'Silicon nostril retainer', '<br>', 1, 'eseais43784'),
(189, 8, 'Males vest for gynecomastia', '<br>', 1, 'eseais51110');

-- --------------------------------------------------------

--
-- Table structure for table `ese_feedback`
--

CREATE TABLE `ese_feedback` (
  `fb_id` int NOT NULL,
  `fb_pr_id` int NOT NULL,
  `fb_date` varchar(100) NOT NULL,
  `fb_message` varchar(300) NOT NULL,
  `fb_rating` int NOT NULL,
  `fb_sendby` varchar(100) NOT NULL,
  `fb_status` int NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ese_feedback`
--

INSERT INTO `ese_feedback` (`fb_id`, `fb_pr_id`, `fb_date`, `fb_message`, `fb_rating`, `fb_sendby`, `fb_status`) VALUES
(1, 1, '04-11-2017', 'Testing', 3, 'Jisha', 1),
(10, 21, '21-04-2020', 'BEST SERVICE AND SUPPORT', 5, 'HARI', 1),
(31, 1, '18-11-2021', '555', 1, '../../../../../../../../../../../../../../etc/passwd', 0),
(36, 1, '18-11-2021', '555', 1, '-1 OR 2+110-110-1=0+0+0+1 --', 0),
(37, 1, '18-11-2021', '555', 1, '-1 OR 2+255-255-1=0+0+0+1', 0),
(38, 1, '18-11-2021', '555', 1, '1', 0),
(39, 1, '18-11-2021', '555', 1, '-1\" OR 2+751-751-1=0+0+0+1 --', 0),
(40, 1, '18-11-2021', '555', 1, 'if(now()=sysdate(),sleep(15),0)', 0),
(41, 1, '18-11-2021', '555', 1, '0\"XOR(if(now()=sysdate(),sleep(15),0))XOR\"Z', 0),
(42, 1, '18-11-2021', '555', 1, '1\0À§À¢%2527%2522', 0),
(43, 1, '18-11-2021', '555', 1, '@@dXS4h', 0),
(46, 12, '27-08-2023', '', 5, 'bert', 0);

-- --------------------------------------------------------

--
-- Table structure for table `ese_machn`
--

CREATE TABLE `ese_machn` (
  `machn_id` int NOT NULL,
  `machn_m_cat_id` int NOT NULL,
  `machn_title` varchar(100) NOT NULL,
  `machn_b_descrip` varchar(10000) NOT NULL,
  `machn_role` varchar(10000) NOT NULL,
  `machn_descrip` varchar(20000) NOT NULL,
  `machn_benifits` varchar(10000) NOT NULL,
  `machn_condtns` varchar(10000) NOT NULL,
  `machn_status` int NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ese_machn`
--

INSERT INTO `ese_machn` (`machn_id`, `machn_m_cat_id`, `machn_title`, `machn_b_descrip`, `machn_role`, `machn_descrip`, `machn_benifits`, `machn_condtns`, `machn_status`) VALUES
(11, 0, '1', '1<br><br>', '', '', '', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `ese_machn_img`
--

CREATE TABLE `ese_machn_img` (
  `machn_img_id` int NOT NULL,
  `machn_img_m_id` int NOT NULL,
  `machn_img_title` varchar(100) NOT NULL,
  `machn_img_img` varchar(200) NOT NULL,
  `machn_img_status` int NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ese_machn_img`
--

INSERT INTO `ese_machn_img` (`machn_img_id`, `machn_img_m_id`, `machn_img_title`, `machn_img_img`, `machn_img_status`) VALUES
(1, 4, 'Banner Image', '69f357fc1096.jpg', 1),
(2, 5, 'Banner Image', 'def7924e1109.jpg', 1),
(3, 5, 'Flow Chart', '0c4b1eeb1020.png', 1),
(4, 5, 'Treatment Case Study', 'a554f89d1026.png', 1),
(5, 5, 'Treatment ', '17f5e6db1026.png', 1),
(6, 7, 'Testing..', '81b3833e1098.gif', 1),
(7, 7, 'Testing..1', 'a3048e471078.jpg', 1),
(8, 1, 'g', '', 1),
(10, 0, 'HBOC Treatment ', '', 1),
(11, 0, 'HBOC Treatment', '68bc94771035.jpg', 1),
(12, 3, 'HBOC Treatment for Diabetic foot Wounds', '5f1461561014.png', 1),
(13, 8, 'HYPERBARIC OXYGEN THERAPY CHAMBER', 'da21bae81015.jpg', 1),
(15, 10, 'HYPERBARIC OXYGEN THERAPY CHAMBER', 'dbc4d84b1043.jpg', 1),
(16, 11, '1', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `ese_med_cat`
--

CREATE TABLE `ese_med_cat` (
  `med_cat_id` int NOT NULL,
  `med_cat_title` varchar(100) NOT NULL,
  `med_cat_main_id` int NOT NULL,
  `med_cat_descr` varchar(10000) NOT NULL,
  `med_cat_img` varchar(200) NOT NULL,
  `me_cat_status` int NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ese_med_cat`
--

INSERT INTO `ese_med_cat` (`med_cat_id`, `med_cat_title`, `med_cat_main_id`, `med_cat_descr`, `med_cat_img`, `me_cat_status`) VALUES
(3, 'Sleeves ', 26, '', '', 1),
(4, 'Liposuction', 26, '', '', 1),
(5, 'Stockings ', 26, '', '', 1),
(6, 'Silicone Gel Sheets ', 26, '', '', 1),
(7, 'Silicon nostril retainer', 26, '', '', 1),
(8, 'Abdominal Binders', 26, '', '', 1),
(9, 'Dermal Fillers ', 26, '', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `ese_med_main_cat`
--

CREATE TABLE `ese_med_main_cat` (
  `med_main_cat_id` int NOT NULL,
  `med_main_cat_title` varchar(100) NOT NULL,
  `med_main_cat_type` int NOT NULL,
  `med_main_cat_img` varchar(100) NOT NULL,
  `med_main_cat_status` int NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ese_med_main_cat`
--

INSERT INTO `ese_med_main_cat` (`med_main_cat_id`, `med_main_cat_title`, `med_main_cat_type`, `med_main_cat_img`, `med_main_cat_status`) VALUES
(26, 'Medical', 2, '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `ese_med_prod`
--

CREATE TABLE `ese_med_prod` (
  `med_prod_id` int NOT NULL,
  `med_prod_cat_id` int NOT NULL,
  `med_prod_title` varchar(100) NOT NULL,
  `med_prod_name` varchar(100) NOT NULL,
  `med_prod_decrip` varchar(30000) NOT NULL,
  `med_prod_img` varchar(200) NOT NULL,
  `med_prod_mesrmnt_img` varchar(200) NOT NULL,
  `med_prod_depart` varchar(1000) NOT NULL,
  `med_prod_status` int NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ese_med_prod`
--

INSERT INTO `ese_med_prod` (`med_prod_id`, `med_prod_cat_id`, `med_prod_title`, `med_prod_name`, `med_prod_decrip`, `med_prod_img`, `med_prod_mesrmnt_img`, `med_prod_depart`, `med_prod_status`) VALUES
(4, 3, 'Sleeves for hand', 'Sleeves for hand', '<p>Compression\r\nsleeves and garments are designed to apply pressure to the arm, hand, or trunk\r\nto keep lymph moving and reduce edema skin Sagging.</p>', 'sleeves-for-hand-1661.png', 'sleeves-for-hand-2374.jpg', '<p>Plastic surgery,\r\nOncology, General Surgery, Diabetic department.</p>\r\n\r\n<br><br><br>', 1),
(3, 1, 'Head and Neck', 'Facial mask for head and neck surgery', 'Facial Mask is specifically targeted to the\r\nneck and <b>chin</b>&nbsp;for a lifted, firmer and tighter look after the\r\nsurgery and also provide a support and to reduce the edema too. It is \r\nused to lift and tighten the appearance of loose, sagging or drooping skin in\r\nproblem areas around the <b>chin</b>&nbsp;and jawline.<br>', 'facial-mask-for-head-and-neck-surgerytesting-9470.jpg', 'facial-mask-for-head-and-neck-surgery-8048.jpg', '<p>&nbsp;Head and\r\nneck surgery department, Oncology, Oral and Maxillofacial surgery.</p>\r\n\r\n<br><br><br>', 1),
(5, 4, 'Liposuction Garments Product', 'P-100', '<p>Â·  &nbsp; &nbsp; To reduce swelling or bruising. Compression garments help\r\nreduce swelling (edema) and aid in pushing fluids into the lymph system for removal\r\nfrom your body. The compression from the garment will help hold skin firmly\r\nagainst the body, aiding in proper skin retraction and general body contouring.\r\nsupport the abdomen, maintain abdominal pressure.</p>\r\n\r\n<p>After surgery, an abdominal garment is thought to:</p>\r\n\r\n<ul><li>support\r\n     your surgical incision</li><li>relieve\r\n     pain</li><li>get\r\n     you moving more</li><li>reduce\r\n     swelling</li></ul>Use After<br>\r\n\r\n<ul><li>Abdominoplasty\r\nsurgery </li><li>\r\n\r\n<br></li><li>Liposuction\r\nsurgery</li><li>\r\n\r\n<br></li><li>Hernia surgery </li><li>\r\n\r\n<br></li><li>Bariatric\r\nsurgery </li><li>\r\n\r\n<br></li><li>Caesarean\r\nSurgery</li></ul>\r\n\r\n<br>', 'p100-9058.png', 'p100-7542.jpg', '<p>Plastic surgery, General surgery, Gynaecology department, Bariatric\r\nsurgery ,Laparoscopic surgery, Gastro surgery \r\n</p>\r\n\r\n<br><br><br><br>', 1),
(6, 4, 'Liposuction Garments Product', 'P-122', '<p>Â·&nbsp; &nbsp; &nbsp; To reduce swelling or bruising. Compression garments help\r\nreduce swelling (edema) and aid in pushing fluids into the lymph system for removal\r\nfrom your body. The compression from the garment will help hold skin firmly\r\nagainst the body, aiding in proper skin retraction and general body contouring.\r\nsupport the abdomen, maintain abdominal pressure.</p>\r\n\r\n<p>After surgery, an abdominal garment is thought to:</p>\r\n\r\n<ul><li>support\r\n     your surgical incision</li><li>relieve\r\n     pain</li><li>get\r\n     you moving more</li><li>reduce\r\n     swelling</li></ul>', 'p122-7978.png', 'p122-6578.jpg', '<p>Plastic surgery, General surgery, Gynaecology department, Bariatric\r\nsurgery ,Laparoscopic surgery, Gastro surgery&nbsp;\r\n</p>\r\n\r\n<br><br><br>', 1),
(7, 4, 'Liposuction Garments Product', 'Body Suit', '<p>Â·&nbsp; &nbsp; &nbsp; To reduce swelling or bruising. Compression garments help\r\nreduce swelling (edema) and aid in pushing fluids into the lymph system for removal\r\nfrom your body. The compression from the garment will help hold skin firmly\r\nagainst the body, aiding in proper skin retraction and general body contouring.\r\nsupport the abdomen, maintain abdominal pressure.</p>\r\n\r\n<p>After surgery, an abdominal garment is thought to:</p>\r\n\r\n<ul><li>support\r\n     your surgical incision</li><li>relieve\r\n     pain</li><li>get\r\n     you moving more</li><li>reduce\r\n     swelling</li></ul>', 'body-suit-4560.png', 'body-suit-2005.jpg', '<p>Plastic surgery, General surgery, Gynaecology department, Bariatric\r\nsurgery , Laparoscopic surgery, Gastro surgery&nbsp;\r\n</p>\r\n\r\n<br><br><br>', 1),
(8, 4, 'Males vest for gynecomastia', 'P-114', '<p>Use- Compression garments are most important in the\r\nfirst 48 hours after surgery.  They help reduce the risks of bleeding and\r\nbruising. it decreases pain, prevents seromas (fluid collections),\r\nstimulates blood flow to the area, allows for skin contraction, and improves\r\nshape. Especially for those moderate to severe cases where there is an excess\r\nin skin, continuous wearing of the vest for longer than 3 weeks really is\r\nessential to obtaining the best contour in the long run.</p>', 'p114-6767.png', 'p114-2161.jpg', 'Plastic surgery, General surgery. <br><br><br>', 1),
(9, 5, 'Stockings Below knee and above knee', 'P-101', '<p>Compression stockings</p>\r\n\r\n<ul><li>Help improve blood flow.</li><li>Reduce lymphedem. </li><li>Help keep blood from pooling in the legs.</li><li>Help relieve symptoms caused by varicose veins, skin ulcers, and\r\n     deep vein thrombosis.</li><li>Help prevent problems caused by things like skin ulcers.</li><li>Will help the most if you wear them every day while you are awake,\r\n     especially while you are on your feet.</li></ul>', 'p101-3749.png', 'p101-6693.jpg', 'General surgery, Plastic Surgery, Oncology,\r\ncardiology <br><br><br>', 1),
(10, 5, 'Stockings Below knee and above knee', 'P-102', '<p>Compression stockings</p>\r\n\r\n<ul><li>Help improve blood flow.</li><li>Reduce lymphedem. </li><li>Help keep blood from pooling in the legs.</li><li>Help relieve symptoms caused by varicose veins, skin ulcers, and\r\n     deep vein thrombosis.</li><li>Help prevent problems caused by things like skin ulcers.</li><li>Will help the most if you wear them every day while you are awake,\r\n     especially while you are on your feet.</li></ul>', 'p102-6372.png', 'p102-5055.jpg', '<p>General surgery, Plastic Surgery, Oncology,\r\ncardiology </p>\r\n\r\n<br><br><br>', 1),
(11, 6, 'Silicone Gel Sheets ', 'Silicone Gel Sheets ', 'Silicone gel sheets helps to flatten and fade\r\nthick, red scars. <b></b>Silicone gel sheet<b></b>s<b></b>&nbsp;are soft wound covers composed of cross-linked polymers reinforced with or bonded to mesh or fabric. These dressings can be&nbsp;used<b></b>&nbsp;in the treatment of hypertrophic and keloid scars to improve appearance, as well as help prevent the formation of these kind of scars.<br><br><b>Sizes Available:&nbsp;</b><br><ol><li><b></b>5*5 cm</li><li>10*10cm</li><li>20*20cm<b></b></li></ol>', 'silicone-gel-sheets--4638.jpg', '', '<h4>Plastic and cosmetic surgery.</h4><h4>General surgery.</h4><b>Dermatology.</b><br><br><br><br><br><br><br>', 1),
(12, 7, 'Silicon nostril retainer', 'Silicon nostril retainer', '<p>Used in Rhinoplasty commonly known as a <b>nose job</b>, is\r\na <a target=\"_blank\" rel=\"nofollow\" href=\"https://en.wikipedia.org/wiki/Plastic_surgery\">plastic surgery</a>&nbsp;procedure for correcting and <a target=\"_blank\" rel=\"nofollow\" href=\"https://en.wikipedia.org/wiki/Reconstructive_surgery\">reconstructing</a>&nbsp;the form, restoring the functions,\r\nand <a target=\"_blank\" rel=\"nofollow\" href=\"https://en.wikipedia.org/wiki/Aesthetics\">aesthetically</a>&nbsp;enhancing the <a target=\"_blank\" rel=\"nofollow\" href=\"https://en.wikipedia.org/wiki/Human_nose\">nose</a>&nbsp;by\r\nresolving nasal <a target=\"_blank\" rel=\"nofollow\" href=\"https://en.wikipedia.org/wiki/Trauma_(medicine)\">trauma</a>&nbsp;(<a target=\"_blank\" rel=\"nofollow\" href=\"https://en.wikipedia.org/wiki/Blunt_trauma\">blunt</a>, <a target=\"_blank\" rel=\"nofollow\" href=\"https://en.wikipedia.org/wiki/Penetrating_trauma\">penetrating</a>, <a target=\"_blank\" rel=\"nofollow\" href=\"https://en.wikipedia.org/wiki/Blast_injury\">blast</a>), <a target=\"_blank\" rel=\"nofollow\" href=\"https://en.wikipedia.org/wiki/Congenital_defect\">congenital defect</a>, <a target=\"_blank\" rel=\"nofollow\" href=\"https://en.wikipedia.org/wiki/Respiratory_system\">respiratory</a>&nbsp;impediment, or a failed primary\r\nrhinoplasty.</p>\r\n\r\n<p>Purely custom made depending the age group of\r\nthe patient. For more info please contact.</p>\r\n\r\n<br>', 'silicon-nostril-retainer-2392.jpg', 'silicon-nostril-retainer-4719.gif', 'Plastic &amp; Reconstructive Surgery<br><br><br>', 1),
(13, 8, 'Abdominal Binders', 'Abdominal Binders', '<p>An abdominal binder may be used to speed-up the recovery process\r\nafter abdominal surgery. Your doctor may recommend that you wear an abdominal\r\nbinder after:</p>\r\n\r\n<p>Â·&nbsp; &nbsp; &nbsp; a caesarean section</p>\r\n\r\n<p>Â·&nbsp; &nbsp; &nbsp; bariatric surgery</p>\r\n\r\n<p>Â·&nbsp; &nbsp; &nbsp; an exploratory\r\nlaparotomy</p>\r\n\r\n<p>Â·&nbsp; &nbsp; &nbsp; a hysterectomy</p>\r\n\r\n<p>Â·&nbsp; &nbsp; &nbsp; a tummy tuck</p>\r\n\r\n<p>Â·&nbsp; &nbsp; &nbsp; spinal surgery.</p>\r\n\r\n<p>Use </p>\r\n\r\n<ul><li>support\r\n     the abdomen, maintain abdominal pressure.</li></ul>\r\n\r\n<p>After surgery, an abdominal garment is thought to:</p>\r\n\r\n<ul><li>support\r\n     your surgical incision</li><li>relieve\r\n     pain</li><li>get\r\n     you moving more</li><li>reduce\r\n     swelling<br></li></ul>', 'abdominal-binders-5980.jpg', 'abdominal-binders-8027.jpg', '<b>Plastic suregery ,Gynaecology\r\ndepartment , Bartiatric surgery, Laproscopic surgery, Gastero surgey, General\r\nsurgery</b><br><br><br>', 1),
(20, 9, 'Dermal Fillers ', 'Neuramis Deep Lidocane ', '<b>Concentration:</b> 20mg/mL<br><b>Needle:</b> 27G x 1/2â€(13mm) UTW*<div><b>Indications</b>: Deep wrinkles and facial contouring.</div><div><b>Cross linking leve</b>l:&nbsp; â—â—â—â—‹<br></div>', 'neuramis-deep-lidocane--4030.png', '', 'Plastic and cosmetic surgery.<br>Dermatology', 2),
(19, 9, 'Dermal Fillers', 'Neuramis  Lidocane ', '<div><b>Concentration:</b> 20mg/m<br><b>Needle:</b> 30G x 1/2â€(13mm) UTW*</div><div><b></b><b>Indications:&nbsp;</b>All facial wrinkles.</div><div><b>Cross linking level:</b>â—â—â—‹â—‹</div>', 'neuramis-lidocane--3251.jpg', '', 'Plastic and cosmetic surgery&nbsp;<br>Dermatology&nbsp;', 2);

-- --------------------------------------------------------

--
-- Table structure for table `ese_med_prod_fields`
--

CREATE TABLE `ese_med_prod_fields` (
  `prod_fields_id` int NOT NULL,
  `prod_fields_prod_id` int NOT NULL,
  `prod_fields_fname` varchar(100) NOT NULL,
  `prod_fields_descrip` varchar(10000) NOT NULL,
  `prod_fields_status` int NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ese_med_slider`
--

CREATE TABLE `ese_med_slider` (
  `med_slider_id` int NOT NULL,
  `med_slider_title` varchar(100) NOT NULL,
  `med_slider_captn` varchar(200) NOT NULL,
  `med_slider_img` varchar(200) NOT NULL,
  `med_slider_status` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ese_med_slider`
--

INSERT INTO `ese_med_slider` (`med_slider_id`, `med_slider_title`, `med_slider_captn`, `med_slider_img`, `med_slider_status`) VALUES
(1, 'Essar Engineers', 'Quality Products', '', 1),
(9, '1', '1', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `ese_size_chart`
--

CREATE TABLE `ese_size_chart` (
  `size_chart_id` int NOT NULL,
  `size_chart_prod_id` int NOT NULL,
  `size_chart_position` varchar(100) NOT NULL,
  `size_chart_2XS` varchar(100) NOT NULL,
  `size_chart_XS` varchar(100) NOT NULL,
  `size_chart_S` varchar(100) NOT NULL,
  `size_chart_M` varchar(100) NOT NULL,
  `size_chart_L` varchar(100) NOT NULL,
  `size_chart_XL` varchar(100) NOT NULL,
  `size_chart_2XL` varchar(100) NOT NULL,
  `size_chart_3XL` varchar(100) NOT NULL,
  `size_chart_4XL` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ese_size_chart`
--

INSERT INTO `ese_size_chart` (`size_chart_id`, `size_chart_prod_id`, `size_chart_position`, `size_chart_2XS`, `size_chart_XS`, `size_chart_S`, `size_chart_M`, `size_chart_L`, `size_chart_XL`, `size_chart_2XL`, `size_chart_3XL`, `size_chart_4XL`) VALUES
(1, 1, 'Head', '4in 10cm', '5in 10cm', '8 in 20cm', '10in 25cm', '12 in 30cm', '14in 35cm', '16in 40cm', '18in 45cm', '20in 50cm'),
(2, 1, 'Neck', '4in 10cm', '4in 10cm', '8 in 20cm', '10in 25cm', '12 in 30cm', '14in 35cm', '16in 40cm', '18in 45cm', '20in 50cm'),
(7, 27, '1', '1', '1', '1', '1', '1', '11', '1', '11', '1');

-- --------------------------------------------------------

--
-- Table structure for table `ese_tff_prod`
--

CREATE TABLE `ese_tff_prod` (
  `tff_prod_id` int NOT NULL,
  `tff_prod_cat_id` int NOT NULL,
  `tff_prod_title` varchar(100) NOT NULL,
  `tff_prod_name` varchar(100) NOT NULL,
  `tff_prod_img` varchar(100) NOT NULL,
  `tff_prod_descrip` varchar(20000) NOT NULL,
  `tff_prod_status` int NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ese_tff_prod`
--

INSERT INTO `ese_tff_prod` (`tff_prod_id`, `tff_prod_cat_id`, `tff_prod_title`, `tff_prod_name`, `tff_prod_img`, `tff_prod_descrip`, `tff_prod_status`) VALUES
(5, 2, 'AMBER LED', 'AMBER LED', 'amber-led-7950.png', '', 1),
(6, 1, 'Uni Poles', 'Uni Poles', 'uni-poles-1450.png', '', 1);
-- --------------------------------------------------------

--
-- Table structure for table `ese_traf_abt`
--

CREATE TABLE `ese_traf_abt` (
  `traf_abt_id` int NOT NULL,
  `traf_abt_title` varchar(100) NOT NULL,
  `traf_abt_caption` varchar(1000) NOT NULL,
  `traf_abt_decrip` varchar(30000) NOT NULL,
  `traf_abt_img` varchar(100) NOT NULL,
  `traf_abt_status` int NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ese_traf_abt`
--

INSERT INTO `ese_traf_abt` (`traf_abt_id`, `traf_abt_title`, `traf_abt_caption`, `traf_abt_decrip`, `traf_abt_img`, `traf_abt_status`) VALUES
(1, 'About', 'About Essar Engineers', 'We are the leading manufacturer of the traffic signal products from last 25 years. We are ISO certified manufacturers for all the traffic products. We can customize the products as per the requirement of the vendors and help in installing the full traffic system.', 'about--1145.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `ese_traf_main_cat`
--

CREATE TABLE `ese_traf_main_cat` (
  `traf_main_cat_id` int NOT NULL,
  `traf_main_cat_title` varchar(100) NOT NULL,
  `traf_main_cat_descrip` varchar(10000) NOT NULL,
  `traf_main_cat_img` varchar(100) NOT NULL,
  `traf_main_cat_status` int NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ese_traf_main_cat`
--

INSERT INTO `ese_traf_main_cat` (`traf_main_cat_id`, `traf_main_cat_title`, `traf_main_cat_descrip`, `traf_main_cat_img`, `traf_main_cat_status`) VALUES
(1, 'Traffic Poles', 'Traffic Poles', 'traffic-poles-5196.png', 1),
(2, 'Signal Housing', 'Signal Housing', 'signal-housing-9329.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `ese_user`
--

CREATE TABLE `ese_user` (
  `u_id` int NOT NULL,
  `u_name` varchar(100) NOT NULL,
  `u_email` varchar(100) NOT NULL,
  `u_contact` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ese_user`
--

INSERT INTO `ese_user` (`u_id`, `u_name`, `u_email`, `u_contact`) VALUES
(1, 'Jisha', 'jisha@gmail.com', '9961274656'),
(7, 'Jithu', 'jithu@gmail.com', '9961274656'),
(6, 'Jisha', 'jisha@gmail.com', '9961274656'),
(8, 'Vishnu', 'vishnu@gmail.com', '9961274656'),
(9, 'Vishnu', 'vishnu@gmail.com', '9961274656'),
(10, 'Vishnu', 'vishnu@gmail.com', '9961274656'),
(11, 'Jisha', 'jisha@gmail.com', '9961274656');

-- --------------------------------------------------------

--
-- Table structure for table `ese_user_session`
--

CREATE TABLE `ese_user_session` (
  `session_id` int NOT NULL,
  `session_value` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `ese_user_session`
--

INSERT INTO `ese_user_session` (`session_id`, `session_value`) VALUES
(52276, '52581');
INSERT INTO `ese_user_session` (`session_id`, `session_value`) VALUES
(52276, '52581');
INSERT INTO `ese_user_session` (`session_id`, `session_value`) VALUES
(52276, '52581');
INSERT INTO `ese_user_session` (`session_id`, `session_value`) VALUES
(52276, '52581');
INSERT INTO `ese_user_session` (`session_id`, `session_value`) VALUES
(52276, '52581');
INSERT INTO `ese_user_session` (`session_id`, `session_value`) VALUES
(52276, '52581');
INSERT INTO `ese_user_session` (`session_id`, `session_value`) VALUES
(52276, '52581');
INSERT INTO `ese_user_session` (`session_id`, `session_value`) VALUES
(52276, '52581');
INSERT INTO `ese_user_session` (`session_id`, `session_value`) VALUES
(52276, '52581');
INSERT INTO `ese_user_session` (`session_id`, `session_value`) VALUES
(52276, '52581');
INSERT INTO `ese_user_session` (`session_id`, `session_value`) VALUES
(52276, '52581');
INSERT INTO `ese_user_session` (`session_id`, `session_value`) VALUES
(52276, '52581');
INSERT INTO `ese_user_session` (`session_id`, `session_value`) VALUES
(52276, '52581');
INSERT INTO `ese_user_session` (`session_id`, `session_value`) VALUES
(52276, '52581');
INSERT INTO `ese_user_session` (`session_id`, `session_value`) VALUES
(52276, '52581');
INSERT INTO `ese_user_session` (`session_id`, `session_value`) VALUES
(52276, '52581');
INSERT INTO `ese_user_session` (`session_id`, `session_value`) VALUES
(52276, '52581');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ese_abt`
--
ALTER TABLE `ese_abt`
  ADD PRIMARY KEY (`abt_id`);

--
-- Indexes for table `ese_admin`
--
ALTER TABLE `ese_admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `ese_cart`
--
ALTER TABLE `ese_cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `ese_feedback`
--
ALTER TABLE `ese_feedback`
  ADD PRIMARY KEY (`fb_id`);

--
-- Indexes for table `ese_machn`
--
ALTER TABLE `ese_machn`
  ADD PRIMARY KEY (`machn_id`);

--
-- Indexes for table `ese_machn_img`
--
ALTER TABLE `ese_machn_img`
  ADD PRIMARY KEY (`machn_img_id`);

--
-- Indexes for table `ese_med_cat`
--
ALTER TABLE `ese_med_cat`
  ADD PRIMARY KEY (`med_cat_id`);

--
-- Indexes for table `ese_med_main_cat`
--
ALTER TABLE `ese_med_main_cat`
  ADD PRIMARY KEY (`med_main_cat_id`);

--
-- Indexes for table `ese_med_prod`
--
ALTER TABLE `ese_med_prod`
  ADD PRIMARY KEY (`med_prod_id`);

--
-- Indexes for table `ese_med_prod_fields`
--
ALTER TABLE `ese_med_prod_fields`
  ADD PRIMARY KEY (`prod_fields_id`);

--
-- Indexes for table `ese_med_slider`
--
ALTER TABLE `ese_med_slider`
  ADD PRIMARY KEY (`med_slider_id`);

--
-- Indexes for table `ese_size_chart`
--
ALTER TABLE `ese_size_chart`
  ADD PRIMARY KEY (`size_chart_id`);

--
-- Indexes for table `ese_tff_prod`
--
ALTER TABLE `ese_tff_prod`
  ADD PRIMARY KEY (`tff_prod_id`);

--
-- Indexes for table `ese_traf_abt`
--
ALTER TABLE `ese_traf_abt`
  ADD PRIMARY KEY (`traf_abt_id`);

--
-- Indexes for table `ese_traf_main_cat`
--
ALTER TABLE `ese_traf_main_cat`
  ADD PRIMARY KEY (`traf_main_cat_id`);

--
-- Indexes for table `ese_user`
--
ALTER TABLE `ese_user`
  ADD PRIMARY KEY (`u_id`);

--
-- Indexes for table `ese_user_session`
--
ALTER TABLE `ese_user_session`
  ADD PRIMARY KEY (`session_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ese_abt`
--
ALTER TABLE `ese_abt`
  MODIFY `abt_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ese_admin`
--
ALTER TABLE `ese_admin`
  MODIFY `admin_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ese_cart`
--
ALTER TABLE `ese_cart`
  MODIFY `cart_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=190;

--
-- AUTO_INCREMENT for table `ese_feedback`
--
ALTER TABLE `ese_feedback`
  MODIFY `fb_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `ese_machn`
--
ALTER TABLE `ese_machn`
  MODIFY `machn_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `ese_machn_img`
--
ALTER TABLE `ese_machn_img`
  MODIFY `machn_img_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `ese_med_cat`
--
ALTER TABLE `ese_med_cat`
  MODIFY `med_cat_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `ese_med_main_cat`
--
ALTER TABLE `ese_med_main_cat`
  MODIFY `med_main_cat_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `ese_med_prod`
--
ALTER TABLE `ese_med_prod`
  MODIFY `med_prod_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `ese_med_prod_fields`
--
ALTER TABLE `ese_med_prod_fields`
  MODIFY `prod_fields_id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ese_med_slider`
--
ALTER TABLE `ese_med_slider`
  MODIFY `med_slider_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `ese_size_chart`
--
ALTER TABLE `ese_size_chart`
  MODIFY `size_chart_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `ese_tff_prod`
--
ALTER TABLE `ese_tff_prod`
  MODIFY `tff_prod_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `ese_traf_abt`
--
ALTER TABLE `ese_traf_abt`
  MODIFY `traf_abt_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ese_traf_main_cat`
--
ALTER TABLE `ese_traf_main_cat`
  MODIFY `traf_main_cat_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `ese_user`
--
ALTER TABLE `ese_user`
  MODIFY `u_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=136;

--
-- AUTO_INCREMENT for table `ese_user_session`
--
ALTER TABLE `ese_user_session`
  MODIFY `session_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52277;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;