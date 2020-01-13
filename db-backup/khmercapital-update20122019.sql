-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 20, 2019 at 09:51 AM
-- Server version: 5.7.26
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `khmercapital`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_company_profile`
--

DROP TABLE IF EXISTS `tbl_company_profile`;
CREATE TABLE IF NOT EXISTS `tbl_company_profile` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `od` int(11) NOT NULL,
  `con_title_kh` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `con_title_en` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `con_des_kh` text COLLATE utf8_unicode_ci NOT NULL,
  `con_des_en` text COLLATE utf8_unicode_ci NOT NULL,
  `mis_title_kh` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `mis_title_en` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `mis_des_kh` text COLLATE utf8_unicode_ci NOT NULL,
  `mis_des_en` text COLLATE utf8_unicode_ci NOT NULL,
  `vi_title_kh` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `vi_title_en` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `vi_des_kh` text COLLATE utf8_unicode_ci NOT NULL,
  `vi_des_en` text COLLATE utf8_unicode_ci NOT NULL,
  `image` text COLLATE utf8_unicode_ci NOT NULL,
  `uid` int(11) NOT NULL,
  `created_at` date NOT NULL,
  `is_disable` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_company_profile`
--

INSERT INTO `tbl_company_profile` (`id`, `od`, `con_title_kh`, `con_title_en`, `con_des_kh`, `con_des_en`, `mis_title_kh`, `mis_title_en`, `mis_des_kh`, `mis_des_en`, `vi_title_kh`, `vi_title_en`, `vi_des_kh`, `vi_des_en`, `image`, `uid`, `created_at`, `is_disable`) VALUES
(4, 1, 'ប្រវត្តិគ្រឹះស្ថានមីក្រូហិរញ្ញវត្ថុរបស់យើង', 'OUR COMPANY PROFILE', '<p style=\"text-align: justify;\">គ្រឹះស្ថានមីក្រូហិរញ្ញវត្ថុ ខ្មែរ ឃែភីថល ម.ក បានចុះបញ្ជីនៅក្រសួងពាណិជ្ជកម្មលេខ ០០០១៩២៥០ ចុះថ្ងៃទី៤ ខែតុលា ឆ្នាំ២០១៦។ នាថ្ងៃទី២៨ ខែកក្កដា ឆ្នាំ២០១៧ គ្រឹះស្ថានមីក្រូហិរញ្ញវត្ថុ ខ្មែរ ឃែភីថល ម.ក បានទទួលអាជ្ញាប័ណ្ណពីធនាគារជាតិនៃកម្ពុជាដើម្បីប្រតិបត្តិការធនាគារ និងបានចាប់ផ្តើមប្រតិបត្តិការជាផ្លូវការនៅថ្ងៃទី២៧ ខែវិច្ឆិកា ឆ្នាំ២០១៧ នៅក្នុងប្រទេសកម្ពុជាជាមួយដើមទុនចំនួន ២លានដុល្លារអាមេរិក ដើម្បីពង្រឹងលើប្រតិបត្តិការរបស់គ្រឹះស្ថានមីក្រូហិរញ្ញវត្ថុ ខ្មែរ ឃែភីថល ម.ក ។ គ្រឹះស្ថានមីក្រូហិរញ្ញវត្ថុ ខ្មែរ ឃែភីថល ម.ក ផ្តល់ជូននូវផលិតផល និងសេវាកម្មជាច្រើនរួមមាន កម្ចីខ្នាតតូច និងមធ្យម ជាប្រាក់ដុល្លារអាមេរិក និងប្រាក់រៀល ដើម្បីឱ្យសមស្របទៅនឹងតម្រូវការរបស់អតិថិជន។ គ្រឹះស្ថានផ្តល់ជូននូវផលិតផល និងសេវាកម្មមានភាពប្រកួតប្រជែង ជាមួយនឹងការកំណត់តម្លៃប្រកបដោយភាពបត់បែនក្នុងចំណោមបណ្តាមីក្រូហិរញ្ញវត្ថុនានានៅក្នុងប្រទេសកម្ពុជា។</p>', '<p style=\"text-align: justify;\">Khmer Capital Microfinance Institution PLC., is registered in Cambodia with the Ministry of Commerce under the registration number 00019250, dated 4th October, 2016. On 28th July 2017, the Khmer Capital Microfinance Institution PLC obtained license from the National Bank of Cambodia to carry out banking operations and officially commenced its operations on 27th November 2017 in Cambodia with Capital base on two million to cover the Microfinance Institution Plc operation. Khmer Capital Microfinance Institution PLC., provides a wide range of services such as small and medium loan products in USD and KHR Riel to fit the customer&rsquo;s needs. We offer competitive products and services, and our pricing is flexible among the Microfinance in Cambodia.</p>', 'បេសកកម្ម', 'MISSION', '<p style=\"text-align: justify;\">បេសកកម្មរបស់គ្រឹះស្ថានមីក្រូហិរញ្ញវត្ថុ ខ្មែរ ឃែភីថល ម.ក គឺ ដើរតួជាដៃគូដែលជឿទុកចិត្តសម្រាប់អតិថិជនរបស់យើងខ្ញុំ តាមរយៈការផ្តល់ប្រឹក្សាផ្នែកហិរញ្ញវត្ថុប្រកបដោយជំនាញវិជ្ជាជីវៈដែលជួយជម្រុញភាពរីកចម្រើនរបស់លោកអ្នកប្រកបទៅដោយស្ថេរភាព។</p>', '<p>Khmer Capital Microfinance Institution PLC\'s mission is to serve as a trusted partner to our clients by providing professional financial advice that enable growth and secure stability.</p>', 'ទស្សនៈវិស័យ', 'VISION', '<p style=\"text-align: justify;\">យើងខ្ញុំ ជឿជាក់ក្នុងការសម្រេចបាននូវលទ្ធផលដ៏ល្អបំផុតជូនដល់អតិថិជនប្រកបដោយប្រតិបត្តិការកម្រិតខ្ពស់ផ្នែកហិរញ្ញវត្ថុ ដើម្បីឆ្ពោះទៅរកដំណោះស្រាយដែលប្រកបដោយសាមញ្ញភាព ការច្នៃប្រឌិត និងការទទួលខុសត្រូវខ្ពស់។</p>', '<p style=\"text-align: justify;\">We believe in achieving the best outcome to our clients and customers financial ingenuity that leads to solutions that are simple, creative, and responsible.</p>', '1574242655.png', 1, '2019-12-16', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contact`
--

DROP TABLE IF EXISTS `tbl_contact`;
CREATE TABLE IF NOT EXISTS `tbl_contact` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `od` int(11) NOT NULL,
  `location_kh` int(11) NOT NULL,
  `location_en` int(11) NOT NULL,
  `phone_kh` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `phone_en` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `other` text COLLATE utf8_unicode_ci NOT NULL,
  `is_disable` bit(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_content_banner`
--

DROP TABLE IF EXISTS `tbl_content_banner`;
CREATE TABLE IF NOT EXISTS `tbl_content_banner` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `od` int(11) NOT NULL,
  `type_id` bigint(20) NOT NULL,
  `title_kh` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `title_en` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `description_kh` text COLLATE utf8_unicode_ci NOT NULL,
  `description_en` text COLLATE utf8_unicode_ci NOT NULL,
  `image` text COLLATE utf8_unicode_ci NOT NULL,
  `uid` int(11) NOT NULL,
  `created_at` date NOT NULL,
  `is_disable` tinyint(1) NOT NULL,
  `type_link_kh` varchar(500) COLLATE utf8_unicode_ci NOT NULL COMMENT 'For Content Type Of',
  `type_link_en` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `mm_id` bigint(20) NOT NULL COMMENT 'For main menu',
  `mm_link_kh` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `mm_link_en` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_content_banner`
--

INSERT INTO `tbl_content_banner` (`id`, `od`, `type_id`, `title_kh`, `title_en`, `description_kh`, `description_en`, `image`, `uid`, `created_at`, `is_disable`, `type_link_kh`, `type_link_en`, `mm_id`, `mm_link_kh`, `mm_link_en`) VALUES
(1, 1, 15, 'អ្នកស្ម័គ្រចិត្ត', 'Volunteer', '<p>ខ្មែរ ឃែភីថល ជាគ្រឹះស្ថានមីក្រូហិរញ្ញវត្ថុដែលផ្តល់ឱកាសការងារស្ម័គ្រចិត្តដល់និស្សិតដែលមិនទាន់បញ្ចប់ការសិក្សា និងនិស្សិតដែលទើបបញ្ចប់ការសិក្សាថ្មីៗ ដើម្បីទទួលបានបទពិសោធន៍ការងារជាក់ស្តែងនៅក្នុងគ្រឹះស្ថាន។ ការងារស្ម័គ្រចិត្តនេះ ជាឱកាសល្អសម្រាប់និស្សិត ដែលកំពុងស្វែងរកការងារស្ម័គ្រចិត្ត ដើម្បីទទួលបានបទពិសោធន៍ការងារជាក់ស្តែងដែលមានពាក់ព័ន្ធនឹងជំនាញរបស់ពួកគេ អភិវឌ្ឍជំនាញនានា&nbsp;ក៏ដូចជាទទួលបានការងារប្រកបដោយវិជ្ជាជីវៈ និងទទួលបានឱកាសដែលមានភាពប្រកួតប្រជែងនៅក្នុងទីផ្សារការងារបច្ចុប្បន្ន និងពេលអនាគត។</p>', '<p>KHMER CAPITAL microfinance institution creates opportunities for Cambodian undergraduates and recent graduates to gain professional work experience and practical skills through our volunteer program. Volunteer program is an excellent way for you to begin developing professional skills, expand your branding and gain a competitive opportunity in the current and future job market.</p>\n<div id=\"gtx-trans\" style=\"position: absolute; left: -23px; top: -14px;\">&nbsp;</div>', '1574923710.jpg', 1, '2019-12-12', 0, 'អ្នកស្ម័គ្រចិត្ត', 'VOLUNTEER', 4, 'វិជ្ជាជីវៈ', 'CAREER'),
(2, 2, 14, 'កម្មសិក្សា', 'Internship', '<p>គ្រឹះស្ថានមីក្រូហិរញ្ញវត្ថុ ខ្មែរ ឃែភីថល ម.ក គឺជាគ្រឹះស្ថានមីក្រូហិរញ្ញវត្ថុដែលបានទទួលស្គាល់ទូលំទូលាយ និងកំពុងធ្វើប្រតិបត្តិការហិរញ្ញវត្ថុដើម្បីភាពរីកចម្រើនរបស់អតិថិជនដែលមានដូចជា ឥណទានផ្ទាល់ខ្លួន ឥណទានខ្នាតតូច និងមធ្យម ឥណទានគេហដ្ឋាន ឥណទានខុនដូ ឥណទានសម្រាប់ប្រើប្រាស់ ឥណទានអាជីវកម្ម និងសេវាហិរញ្ញវត្ថុផ្សេងៗទៀត ជាមួយអត្រាការប្រាក់ប្រកួតប្រជែងនៅក្នុងព្រះរាជាណាចក្រកម្ពុជា។ ខ្មែរ ឃែភីថល កំពុងជ្រើសរើសបេក្ខជនដែលមានសមត្ថភាព ដើម្បីបំពេញតួនាទីដូចខាងក្រោម៖</p>', '<p>KHMER CAPITAL Microfinance Institution Plc., the well-known microfinance institution in Cambodia, provides sustainable financial services for client&rsquo;s growth such as of personal loan, SME loan, business loan, condo and housing loan, consumer loan and other financial services with competitive rate throughout Cambodia. KHMER CAPITAL is currently seeking for the qualified Cambodian national candidates (males or females) to fill the position of:</p>', '1574923702.jpg', 1, '2019-12-12', 0, 'កម្មសិក្សា', 'INTERNSHIP', 4, 'វិជ្ជាជីវៈ', 'CAREER'),
(3, 3, 13, 'ដំណឹង​ជ្រើសរើស​បុគ្គលិក', 'Job Opportunity', '<p>គ្រឹះស្ថានមីក្រូហិរញ្ញវត្ថុ ខ្មែរ ឃែភីថល ម.ក បានទទួលអាជ្ញាបណ្ណ ជាគ្រឹះស្ថានមីក្រូហិរញ្ញវត្ថុពីធនាគារជាតិនៃកម្ពុជានៅថ្ងៃទី ២៨ ខែ​កក្កដា ឆ្នាំ ២០១៧។ បេសកកម្មរបស់យើង គឺដើម្បីរួមចំណែកដល់សេវាកម្មហិរញ្ញវត្ថុក្នុងការជួយកែលំអស្ថានភាពរស់នៅរបស់ប្រជាជនកម្ពុជាឲ្យកាន់តែប្រសើរឡើង។ យើងខ្ញុំ ជាអ្នកវិនិយោគផ្នែកហិរញ្ញវត្ថុថ្មីមួយដើម្បីស្វែងយល់ពីសក្តានុពលទីផ្សាររបស់ប្រទេសកម្ពុជាតាមរយៈការផ្តល់កម្ចីឥណទានរួមមាន&nbsp;ឥណទានផ្ទាល់ខ្លួន កម្ចីខ្នាតតូចនិងមធ្យម ឥណទានខុនដូ&nbsp;ឥណទានគេហដ្ឋាន និងឥណទានសម្រាប់ប្រើប្រាស់ជាមួយអត្រាការប្រាក់ប្រកួតប្រជែង។ បច្ចុប្បន្ននេះ ខ្មែរ ឃែភីថល មានគម្រោងដើម្បីពង្រីកអាជីវកម្មរបស់យើងខ្ញុំ និងពង្រឹងសមត្ថភាពផ្ទៃក្នុង ដូច្នេះ ខ្មែរ ឃែភីថល លើកទឹកចិត្ត និងអញ្ជើញបេក្ខជនដែលមានទេពកោសល្យ ពោរពេញដោយការប្រកួតប្រជែងដើម្បីចូលរួមក្នុងក្រុមរបស់យើង ដូចមានក្នុងដំណឹងជ្រើសរើសបុគ្គលិកខាងក្រោម ៖</p>', '<p>Khmer Capital Microfinance Institution Plc. received license of microfinance institution from National Bank of Cambodia (NBC) on date 28th July, 2017. Our mission is to contribute the financial services in order to improve Cambodian&rsquo;s living condition. We are a new financial investor to explore of Cambodia potential market by providing financial services in such of personal loan, SME loan, condo and housing loan, and consumer loan with competitive rate. Currently, we plan to boost our business and build internal competence, therefore we are encourage and invite talent and challenge candidates to join our team as following vacancies:</p>', '1574923697.jpg', 1, '2019-12-12', 0, 'ដំណឹង-ជ្រើសរើស-បុគ្គលិក', 'JOB-OPPORTUNITY', 4, 'វិជ្ជាជីវៈ', 'CAREER'),
(4, 4, 12, 'ដំណឹង និង ព្រឹត្តិការណ៍', 'NEWS AND EVENT', '<p>គ្រឹះស្ថានមីក្រូហិរញ្ញវត្ថុ ​ខ្មែរ ឃែភីថល ម.ក នឹងផ្តល់ជូននូវព័ត៌មានថ្មីៗទាក់ទងទៅលក្ខណៈពិសេសក្នុងការទទួលបានប្រាក់កម្ចី។</p>', '<p>Khmer Capital Microfinance Institution PLC, still keep update the current status for customer useful information withs special offer loan products.</p>', '1574923730.jpg', 1, '2019-12-13', 0, 'ដំណឹង-និង-ព្រឹត្តិការណ៍', 'NEWS-AND-EVENT', 3, 'ព័ត៌មាន', 'MEDIA'),
(5, 5, 11, 'ថ្ងៃឈប់សម្រាក', 'Public Holiday', '<p>គ្រឹះស្ថានមីក្រូហិរញ្ញវត្ថុ ​ខ្មែរឃែភីថល មក នឹងផ្តល់នៅព័ត៌មានថ្មីៗទាក់ទងទៅលក្ខណៈពិសេសក្នុងការទទួលបានការឈប់សម្រាក។</p>', '<p>Khmer Capital Microfinance Institution PLC, still keep update the current status for customer useful information withs&nbsp;public holiday.</p>\n<div id=\"gtx-trans\" style=\"position: absolute; left: 423px; top: 49px;\">&nbsp;</div>', '1574923691.jpg', 1, '2019-12-13', 0, 'ថ្ងៃឈប់សម្រាក', 'PUBLIC-HOLIDAY', 3, 'ព័ត៌មាន', 'MEDIA'),
(6, 6, 10, 'វិចិត្រសាល', 'Photo Gallery', '<p>គ្រឹះស្ថានមីក្រូហិរញ្ញវត្ថុ ​ខ្មែរឃែភីថល មក នឹងផ្តល់នៅព័ត៌មានថ្មីៗទាក់ទងទៅលក្ខណៈពិសេសក្នុងការទទួលបានរូបភាព។</p>', '<p>Khmer Capital Microfinance Institution PLC, still keep update the current status for customer useful information withs photo gallery.</p>', '1574923685.jpg', 1, '2019-11-29', 0, 'បណ្តុំរូបភាព', 'Photo-Gallery', 3, 'ព័ត៌មាន', 'media'),
(7, 7, 2, 'ក្រុមអ្នកគ្រប់គ្រង', 'Management Team', '<h2 class=\"title-bar\"><span class=\"tittttt\">ក្រុមអ្នកគ្រប់គ្រង</span></h2>', '<p>Management Team</p>', '1574923670.jpg', 1, '2019-12-11', 0, 'ក្រុមអ្នកគ្រប់គ្រង', 'MANAGEMENT-TEAM', 1, 'អំពីយើង', 'about-us'),
(8, 8, 1, 'ប្រវត្តិគ្រឺះស្ថានមីក្រូហិរញ្ញវត្ថុបស់យើង', 'Our Company History', '<p>គ្រឹះស្ថានមីក្រូហិរញ្ញវត្ថុ ខ្មែរ ឃែភីថល ម.ក បានចុះបញ្ជីនៅក្រសួងពាណិជ្ជកម្មលេខ ០០០១៩២៥០ ចុះថ្ងៃទី ៤ ខែតុលា ឆ្នាំ២០១៦។ នៅថ្ងៃទី២៨ ខែកក្កដា ឆ្នាំ២០១៧ គ្រឹះស្ថានមីក្រូហិរញ្ញវត្ថុ ខ្មែរ ឃែភីថល ម.ក បានទទួលអាជ្ញាប័ណ្ណពីធនាគារជាតិនៃកម្ពុជាដើម្បីប្រតិបត្តិការធនាគារ និងបានចាប់ផ្តើមប្រតិបត្តិការជាផ្លូវការនៅថ្ងៃទី២៧ ខែវិច្ឆិកា ឆ្នាំ២០១៧ នៅក្នុងប្រទេសកម្ពុជាជាមួយដើមទុនចំនួន២លានដុល្លារដើម្បីពង្រឹងលើប្រតិបត្តិការរបស់គ្រឹះស្ថានមីក្រូហិរញ្ញវត្ថុ ខ្មែរ ឃែភីថល ម.ក ។ គ្រឹះស្ថានមីក្រូហិរញ្ញវត្ថុ ខ្មែរ ឃែភីថល ម.ក ផ្តល់ជូននូវសេវាកម្ម និងផលិតផលជាច្រើនដូចជា កម្ចីខ្នាតតូច និងមធ្យម ជាប្រាក់ដុល្លារអាមេរិក និងប្រាក់រៀល ដើម្បីឱ្យសមស្របទៅនឹងតម្រូវការរបស់អតិថិជន។ គ្រឹះស្ថានផ្តល់ជូននូវផលិតផល និងសេវាកម្មមានភាពប្រកួតប្រជែង ហើយការកំណត់តម្លៃរបស់យើងមានភាពបត់បែនក្នុងចំណោមមីក្រូហិរញ្ញវត្ថុនានានៅក្នុងប្រទេសកម្ពុជា។</p>', '<p>Khmer Capital Microfinance Institution PLC, is registered in Cambodia with the Ministry of Commerce under the registration number 00019250, dated 4th October, 2016. On 28th July 2017, the Khmer Capital Microfinance Institution PLC obtained license from the National Bank of Cambodia to carry out banking operations and officially commenced its operations on 27th November 2017 in Cambodia with Capital base on two million to cover the Microfinance Institution Plc operation. Khmer Capital Microfinance Institution PLC provides a wide range of services such as small and medium loan products in USD and KHR Riel to fit the customer&rsquo;s needs. We offer competitive products and services, and our pricing is flexible among the Microfinance in Cambodia.</p>', '1575599093.jpg', 2, '2019-12-06', 0, 'ប្រវត្តិគ្រឺះស្ថាន', 'Company-Profile', 1, 'អំពីយើង', 'about-us'),
(9, 9, 3, 'ឥណទានអាជីវកម្ម', 'Business Loan', '<p>ឥណទានអាជីវកម្ម គឺ ជ្តល់សម្រាប់បុគ្គលដែលមានបំណង់បង្កើតអាជីវកម្មថ្មី ឬក៏ ពង្រីកអាជីវកម្មរបស់ពួកគាត់ដែលមានស្រាប់។ វាគឺ ជាវិធីដ៏ល្អសម្រាប់អោយ សហគ្រិនខ្នាតតូច និង មធ្យម ដើម្បីទទួលបានដើមទុនដែលពួកគាត់ត្រូវការ។</p>', '<p>SME Loan product is diversified to provide to existing small and medium enterprises funds (commercial, manufacturing, services, agriculture) to expand their existing business by financing working capital and/or investment, or to diversify their activities by creating a new business.</p>', '1576833167.jpg', 1, '2019-12-20', 0, 'ឥណទានអាជីវកម្ម', 'BUSINESS-LOAN', 2, 'ផលិតផល​-និងសេវា', 'PRODUCT-AND-SERVICE'),
(10, 10, 4, 'ឥណទាន​ខ្នាតតូច និងមធ្យម', 'SME Loan', '<p>កម្ចីសហគ្រាសខ្នាតតូច និង មធ្យមផ្តល់ជូនទៅសហគ្រាសខ្នាតធុនតូច និងមធ្យមដែលមានបំណងចងពង្រីកអាជីវកម្ម (ពាណិជ្ជកម្ម ផលិតកម្ម សេវាកម្ម កសិកម្ម) ដែលមានស្រាប់របស់ពួកគេតាមរយៈហិរញ្ញប្បទាន ក្នុងនេះផងដែរសំរាប់ការបើកអាជីវកម្មថ្មីក៏អាចរួមបញ្ចូលផងដែរ។</p>', '<p>SME Loan product is diversified to provide to existing small and medium enterprises funds (commercial, manufacturing, services, agriculture) to expand their existing business by financing working capital and/or investment, or to diversify their activities by creating a new business.</p>', '1576830335.jpg', 1, '2019-12-20', 0, 'ឥណទាន-ខ្នាតតូច-និងមធ្យម', 'SME-LOAN', 2, 'ផលិតផល​-និងសេវា', 'PRODUCT-AND-SERVICE'),
(11, 11, 5, 'ឥណទានសម្រាប់ប្រើប្រាស់', 'Consumer Loan', '<p>ឥណទានសម្រាប់ប្រើប្រាស់ គឺសម្រាប់បុគ្គលដែលមានបំណងទិញសម្ភារៈគ្រួសារឬរបស់របរផ្ទាល់ខ្លួនដូចជាយានយន្ត កុំព្យូទ័រ គ្រឿងសង្ហារឹម ទូទឹកកក ទូរទស្សន៍ ម៉ាស៊ីនភ្លើងជាដើម។ ពួកគេក៏អាចប្រើប្រាស់ប្រាក់កម្ចីនេះដើម្បីបង់ថ្លៃសាលាសាកលវិទ្យាល័យនិង ការសិក្សាក្រោយឧត្តមសិក្សាដើម្បីបង្កើន សមត្ថភាពសមាជិកគ្រួសារ។</p>', '<p>Consumption Loan is for individuals intending to purchase household equipment or personal items, such as a vehicle, a computer, some furniture, a refrigerator, a television, a generator, etc. They can also use this loan to pay for tuition fees, university and post-graduate studies to enhance family\'s member capacity.</p>', '1576832944.jpg', 1, '2019-12-20', 0, 'ឥណទានសម្រាប់ប្រើប្រាស់', 'CONSUMER-LOAN', 2, 'ផលិតផល​-និងសេវា', 'PRODUCT-AND-SERVICE'),
(12, 12, 6, 'ឥណទានគេហដ្ឋាន', 'Housing Loan', '<p>ឥណទានគេហដ្ឋានផ្តល់ជូនដល់បុគ្គលអ្នករកចំនូល សហគ្រិនខ្នាតតូច​ និងកសិករដែលទទួលបានប្រាក់ចំនូលទៀង​ទា​តចន្លោះ ពី ៥០០​ដុល្លារទៅ ២.០០០ដុល្លារអាមេរិចក្នុងមួយខែ ដែលមានទីតាំងនៅតំបន់ជនបទ តំបន់ពាក់កណ្តាលទីក្រុង និង តំបន់ជាយក្រុងដើម្បីទិញឬសាងសង់ផ្ទះថ្មីនៅលើដីដែល ជាកម្មសិទ្ធិរបស់ខ្លួន។</p>', '<p>Housing Loan provides individuals Salary Earner, micro and small entrepreneurs and farmer who have regular income between USD500 to USD2,000 per month at rural, semi-urban and suburb to buy or build new house on their ownership land.</p>', '1576657268.jpg', 1, '2019-12-18', 0, 'ឥណទានគេហដ្ឋាន', 'HOUSING-LOAN', 2, 'ផលិតផល​-និងសេវា', 'PRODUCT-AND-SERVICE'),
(13, 13, 7, 'ឥណទានប្រើប្រាស់ផ្ទាល់ខ្លួន', 'Personal Loan', '<p>ឥណទានប្រើប្រាស់ផ្ទាល់ខ្លួន ផ្តល់ជូនដល់បុគ្គល សហគ្រិនខ្នាតតូច និងកសិករដែលទទួលបានប្រាក់ចំណូលជាប្រចាំចន្លោះពី ៥០០ដុល្លារ ទៅ ១.០០០ដុល្លារក្នុងមួយខែ អតិថិជនអាចធ្វើការខ្ចីសម្រាប់តម្រូវការហិរញ្ញវត្ថុផ្ទាល់ខ្លួនបាន។ បុគ្គលដែលមានប្រាក់បៀវត្សអាចទទួលបានប្រាក់កម្ចីរហូតដល់ ៥ ដងនៃប្រាក់បៀវត្សរ៍ប្រចាំឆ្នាំ​(ប្រាក់បៀវត្សរ៍សុទ្ធបន្ទាប់ពីពន្ធ) ក្នុងរយៈពេល ២៤ខែ។</p>', '<p>Personal Loan provides individuals Salary Earner, micro and small entrepreneurs and farmer who have regular income between USD500 to USD1,000 per month borrow for personal financial need. Any salary earning individual can get loan amount up to 5 times of monthly salary (net salary after tax) for 24 months term.</p>', '1576657025.jpg', 1, '2019-12-18', 0, 'ឥណទានប្រើប្រាស់ផ្ទាល់ខ្លួន', 'PERSONAL-LOAN', 2, 'ផលិតផល​-និងសេវា', 'PRODUCT-AND-SERVICE'),
(14, 14, 8, 'ឥណទាននិសិ្សត', 'Student Loan', '<p>ឥណទានសិស្ស&nbsp; ផ្តល់ជូនដល់សិស្សនូវឱកាសដើម្បីទទួលបានការសិក្សាអប់រំខ្ពស់ ឬក៏ វគ្គជំនាញបណ្តុះបណ្តាលច្បាស់លាស់​ ដែលជាផលវិជ្ជមានទៅអនាគតរបស់ខ្លួននិងបង្កើនសមត្ថភាពរស់នៅរបស់សមាជិកក្រុមគ្រួសារ ។</p>', '<p>Student Loan provides to students the opportunity to access to higher education/ particular training skill which would positively impact his/her future and enhance family&rsquo;s member living capacity/condition.</p>', '1576832467.jpg', 1, '2019-12-20', 0, 'ឥណទាននិស្សិត', 'STUDENT-LOAN', 2, 'ផលិតផល​-និងសេវា', 'PRODUCT-AND-SERVICE'),
(15, 15, 9, 'ឥណទានខុនដូ', 'Condo Loan', '<p>ប្រាក់កម្ចីខុនដូគឺជាផលិតផលមួយដែលផ្តល់ជូនបុគ្គលិកសហគ្រិនខ្នាតតូចនិងខ្នាតតូចក៏ដូចជាវិនិយោគិនបរទេសដែលមានប្រាក់ចំណូលជាប្រចាំចាប់ពី ២.000 ដុល្លារទៅ ៥.000 ដុល្លារក្នុងមួយខែដើម្បីទិញខុនដូ។&nbsp;</p>', '<p>Condo Loan is another product to provide individuals Salary Earner, micro and small entrepreneurs as well as foreigner/investor who have regular income between USD2,000 to USD5,000 per month to purchase condo unit(s).</p>', '1576742994.jpg', 1, '2019-12-19', 0, 'ឥណទានខុនដូ', 'CONDO-LOAN', 2, 'ផលិតផល​-និងសេវា', 'PRODUCT-AND-SERVICE'),
(16, 16, 16, 'ទំនាក់ទំនងយើង', 'Contact Us', '<p>គ្រឹះស្ថានមីក្រូហិរញ្ញវត្ថុ ​ខ្មែរឃែភីថល មក នឹងផ្តល់នៅព័ត៌មានថ្មីៗទាក់ទងទៅលក្ខណៈពិសេសក្នុងការទទួលបានប្រាក់កម្ចី។</p>', '<p>Khmer Capital Microfinance Institution PLC, still keep update the current status for customer useful information withs special offer loan products.</p>', '1575525969.jpg', 1, '2019-12-05', 0, 'ទំនាក់ទំនងយើង', 'contact', 16, 'ទំនាក់ទំនងយើង', 'contact');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_job_opportunity`
--

DROP TABLE IF EXISTS `tbl_job_opportunity`;
CREATE TABLE IF NOT EXISTS `tbl_job_opportunity` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `od` int(11) NOT NULL,
  `position_kh` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `position_en` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `des_kh` text COLLATE utf8_unicode_ci NOT NULL,
  `des_en` text COLLATE utf8_unicode_ci NOT NULL,
  `location_kh` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `location_en` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `duties_and_respon_kh` text COLLATE utf8_unicode_ci NOT NULL,
  `duties_and_respon_en` text COLLATE utf8_unicode_ci NOT NULL,
  `skill_and_specification_kh` text COLLATE utf8_unicode_ci NOT NULL,
  `skill_and_specification_en` text COLLATE utf8_unicode_ci NOT NULL,
  `how_to_apply_kh` text COLLATE utf8_unicode_ci NOT NULL,
  `how_to_apply_en` text COLLATE utf8_unicode_ci NOT NULL,
  `post_date` date NOT NULL,
  `close_date` date NOT NULL,
  `type_id` int(11) NOT NULL,
  `num_of_view` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `created_at` date NOT NULL,
  `is_disable` tinyint(1) NOT NULL DEFAULT '0',
  `name_link_kh` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `name_link_en` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `type_link_kh` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `type_link_en` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_job_opportunity`
--

INSERT INTO `tbl_job_opportunity` (`id`, `od`, `position_kh`, `position_en`, `des_kh`, `des_en`, `location_kh`, `location_en`, `duties_and_respon_kh`, `duties_and_respon_en`, `skill_and_specification_kh`, `skill_and_specification_en`, `how_to_apply_kh`, `how_to_apply_en`, `post_date`, `close_date`, `type_id`, `num_of_view`, `uid`, `created_at`, `is_disable`, `name_link_kh`, `name_link_en`, `type_link_kh`, `type_link_en`) VALUES
(1, 1, 'Supervisor, Credit Marketing (Large & Micro Loan)', 'Supervisor, Credit Marketing (Large & Micro Loan)', '<p>Is respond to promote Khmer Capital&rsquo;s products or service and reputation into the public and especially target operation areas in order meet the target plan and appeal high company branding. He/she need to manage, control, monitor, and coaching subordinate to ensure of them achieve high performance. And lastly, he/she also have to gather and analyzes all customers information inquiry for propose to management or committee for approval.</p>', '<p>Is respond to promote Khmer Capital&rsquo;s products or service and reputation into the public and especially target operation areas in order meet the target plan and appeal high company branding. He/she need to manage, control, monitor, and coaching subordinate to ensure of them achieve high performance. And lastly, he/she also have to gather and analyzes all customers information inquiry for propose to management or committee for approval.</p>', 'Head Office', 'Head Office', '<h5>Duties And Responsibilities</h5>\n<ul>\n<li>Monitoring, training and coaching team members regarding to internal policies, procedure, and&nbsp;guideline or technical skills to improve and ensure everyone in team produce high performance.</li>\n<li>Create marketing channels and connection with business owner, related field personnel, and authorities to enlarge volume of loan portfolio.&nbsp;</li>\n<li>Monitor on risk management related to loan portfolio and&nbsp; overall performing and report to Credit Manager on periodic basis.</li>\n</ul>', '<h5>Duties And Responsibilities</h5>\n<ul>\n<li>Monitoring, training and coaching team members regarding to internal policies, procedure, and&nbsp;guideline or technical skills to improve and ensure everyone in team produce high performance.</li>\n<li>Create marketing channels and connection with business owner, related field personnel, and authorities to enlarge volume of loan portfolio.&nbsp;</li>\n<li>Monitor on risk management related to loan portfolio and&nbsp; overall performing and report to Credit Manager on periodic basis.</li>\n</ul>', '<h5>Skills And Requirement</h5>\n<ul>\n<li>Good understanding for credit analysis and result oriented</li>\n<li>Good understanding for credit analysis and result oriented</li>\n<li>Good understanding for credit analysis and result oriented</li>\n</ul>', '<h5>Skills And Requirement</h5>\n<ul>\n<li>Good understanding for credit analysis and result oriented</li>\n<li>Good understanding for credit analysis and result oriented</li>\n<li>Good understanding for credit analysis and result oriented</li>\n</ul>', '<div class=\"d1\">\n<h5>How To Apply</h5>\n</div>\n<p>Interested candidates are encouraged to apply by submitting you CV and Cover Letter to sovang@khmercapital.com.kh or info@khmercapital.com.kh by specify subject as position applied or submit to our HO #155 (TK Royal One-In front of IFL), Russian Confederation Blvd, Sangkat Tuek La\'k Ti I, Khan Toul Kork, Phnom Penh.&nbsp;</p>', '<div class=\"d1\">\n<h5>How To Apply</h5>\n</div>\n<p>Interested candidates are encouraged to apply by submitting you CV and Cover Letter to sovang@khmercapital.com.kh or info@khmercapital.com.kh by specify subject as position applied or submit to our HO #155 (TK Royal One-In front of IFL), Russian Confederation Blvd, Sangkat Tuek La\'k Ti I, Khan Toul Kork, Phnom Penh.&nbsp;</p>', '2019-10-01', '2019-10-31', 0, 0, 1, '2019-12-05', 0, 'Supervisor-Credit-Marketing-Large-Micro-Loan-', 'Supervisor-Credit-Marketing-Large-Micro-Loan-', 'វិជ្ជាជីវៈ', 'career'),
(3, 3, 'បានទទួលអាជ្ញាបណ្ណជាគ្រឹះស្ថានមីក្រូហិរញ្ញវត្ថុ', 'Senior Officer, Credit Marketing', '<p>រូហិរញ្ញវត្ថុ ខ្មែរ ឃែភីថល ម.ក។ បានទទួលអាជ្ញាបណ្ណជាគ្រឹះស្ថានមីក្រូហិរញ្ញវត្ថុពីធនាគារជាតិនៃកម្ពុជានៅថ្ងៃទី ២៨ ខែ​កក្កដា ឆ្នាំ ២០១៧ ។ បេសកកម្មរបស់យើងគឺដើម្បីរួមចំណែកដល់សេវាកម្មហិរញ្ញវត្ថុដើម្បីកែលំអស្ថានភាពរស់នៅរបស់ប្រជាជនកម្ពុជា។ យើងជាអ្នកវិនិយោគហិរញ្ញវត្ថុថ្មីមួយដើម្បីស្វែងយល់ពីសក្តានុពលទីផ្សាររបស់ប្រទេសកម្ពុជាតាមរយៈការផ្តល់សេវាកម្មហិរញ្ញវត្ថុដូចជា ប្រាក់កម្ចីផ្ទាល់ខ្លួន កម្ចីខ្នាតតូច</p>', '<p>Is respond to promote Khmer Capital&rsquo;s products or service and reputation into the public and especially target operation areas in order meet the target plan and appeal high company branding. He/she need to manage, control, monitor, and coaching subordinate to ensure of them achieve high performance. And lastly, he/she also have to gather and analyzes all customers information inquiry for propose to management or committee for approval.</p>', 'ទីស្នាក់កាកណ្តាល', 'Head Office', '<h5>Duties And Responsibilities</h5>\n<ul>\n<li>Monitoring, training and coaching team members regarding to internal policies, procedure, and&nbsp;guideline or technical skills to improve and ensure everyone in team produce high performance.</li>\n<li>Create marketing channels and connection with business owner, related field personnel, and authorities to enlarge volume of loan portfolio.&nbsp;</li>\n<li>Monitor on risk management related to loan portfolio and&nbsp; overall performing and report to Credit Manager on periodic basis.</li>\n</ul>', '<h5>Duties And Responsibilities</h5>\n<ul>\n<li>Monitoring, training and coaching team members regarding to internal policies, procedure, and&nbsp;guideline or technical skills to improve and ensure everyone in team produce high performance.</li>\n<li>Create marketing channels and connection with business owner, related field personnel, and authorities to enlarge volume of loan portfolio.&nbsp;</li>\n<li>Monitor on risk management related to loan portfolio and&nbsp; overall performing and report to Credit Manager on periodic basis.</li>\n</ul>', '<h5>Skills And Requirement</h5>\n<ul>\n<li>Good understanding for credit analysis and result oriented</li>\n<li>Good understanding for credit analysis and result oriented</li>\n<li>Good understanding for credit analysis and result oriented</li>\n</ul>', '<h5>Skills And Requirement</h5>\n<ul>\n<li>Good understanding for credit analysis and result oriented</li>\n<li>Good understanding for credit analysis and result oriented</li>\n<li>Good understanding for credit analysis and result oriented</li>\n</ul>', '<div class=\"d1\">\n<h5>How To Apply</h5>\n</div>\n<p>គ្រឹះស្ថានមីក្រូហិរញ្ញវត្ថុ ខ្មែរ ឃែភីថល ម.ក។ បានទទួលអាជ្ញាបណ្ណជាគ្រឹះស្ថានមីក្រូហិរញ្ញវត្ថុពីធនាគារជាតិនៃកម្ពុជានៅថ្ងៃទី ២៨ ខែ​កក្កដា ឆ្នាំ ២០១៧ ។ បេសកកម្មរបស់យើងគឺដើម្បីរួមចំណែកដល់សេវាកម្មហិរញ្ញវត្ថុដើម្បីកែលំអស្ថានភាពរស់នៅរបស់ប្រជាជនកម្ពុជា។ យើងជាអ្នកវិនិយោគហិរញ្ញវត្ថុថ្មីមួយដើម្បីស្វែងយល់ពីសក្តានុពលទីផ្សាររបស់ប្រទេសកម្ពុជាតាមរយៈការផ្តល់សេវាកម្មហិរញ្ញវត្ថុដូចជា ប្រាក់កម្ចីផ្ទាល់ខ្លួន កម្ចីខ្នាតតូចនិងមធ្យម កម្ចីខុនដូ កម្ចីទិញផ្ទះ និង ប្រាក់កម្ចីសំរាប់សំភារះប្រើប្រាស់ ដែលមានអត្រាប្រកួតប្រជែង។ បច្ចុប្បន្ននេះយើងមានគម្រោងដើម្បីបង្កើនអាជីវកម្មរបស់យើង និង កសាងសមត្ថភាពផ្ទៃក្នុង ដូច្នេះយើងត្រូវបានលើកទឹកចិត្ត និង អញ្ជើញ អ្នកមានទេពកោសល្យ និង បេក្ខជនប្រកួតប្រជែងដើម្បីចូលរួមក្នុងក្រុមរបស់យើងដូចមានក្នុងដំណឹងជ្រើសរើសបុគ្គលិកខាងក្រោម។&nbsp;</p>', '<div class=\"d1\">\n<h5>How To Apply</h5>\n</div>\n<p>Interested candidates are encouraged to apply by submitting you CV and Cover Letter to sovang@khmercapital.com.kh or info@khmercapital.com.kh by specify subject as position applied or submit to our HO #155 (TK Royal One-In front of IFL), Russian Confederation Blvd, Sangkat Tuek La\'k Ti I, Khan Toul Kork, Phnom Penh.&nbsp;</p>', '2019-11-14', '2019-12-31', 0, 0, 1, '2019-12-13', 1, 'បានទទួលអាជ្ញាបណ្ណជាគ្រឹះស្ថានមីក្រូហិរញ្ញវត្ថុ', 'Senior-Officer-Credit-Marketing', 'វិជ្ជាជីវៈ', 'CAREER'),
(4, 4, 'CO', 'CO', '<p>Is respond to promote Khmer Capital&rsquo;s products or service and reputation into the public and especially target operation areas in order meet the target plan and appeal high company branding. He/she need to manage, control, monitor, and coaching subordinate to ensure of them achieve high performance. And lastly, he/she also have to gather and analyzes all customers information inquiry for propose to management or committee for approval.</p>', '<p>Is respond to promote Khmer Capital&rsquo;s products or service and reputation into the public and especially target operation areas in order meet the target plan and appeal high company branding. He/she need to manage, control, monitor, and coaching subordinate to ensure of them achieve high performance. And lastly, he/she also have to gather and analyzes all customers information inquiry for propose to management or committee for approval.</p>', 'ទីស្នាក់ការកណ្តាល', 'Head Office', '<h4>Duties And Responsibilities</h4>\n<ul style=\"list-style-type: square;\">\n<li>Monitoring, training and coaching team members regarding to internal policies, procedure, and&nbsp;guideline or technical skills to improve and ensure everyone in team produce high performance.</li>\n<li>Create marketing channels and connection with business owner, related field personnel, and authorities to enlarge volume of loan portfolio.&nbsp;</li>\n<li>Monitor on risk management related to loan portfolio and&nbsp; overall performing and report to Credit Manager on periodic basis.</li>\n</ul>', '<h4>Duties And Responsibilities</h4>\n<ul>\n<li>Monitoring, training and coaching team members regarding to internal policies, procedure, and&nbsp;guideline or technical skills to improve and ensure everyone in team produce high performance.</li>\n<li>Create marketing channels and connection with business owner, related field personnel, and authorities to enlarge volume of loan portfolio.&nbsp;</li>\n<li>Monitor on risk management related to loan portfolio and&nbsp; overall performing and report to Credit Manager on periodic basis.</li>\n</ul>', '<h5>Skills And Requirement</h5>\n<ul>\n<li>Good understanding for credit analysis and result oriented</li>\n<li>Good understanding for credit analysis and result oriented</li>\n<li>Good understanding for credit analysis and result oriented</li>\n</ul>', '<h5>Skills And Requirement</h5>\n<ul>\n<li>Good understanding for credit analysis and result oriented</li>\n<li>Good understanding for credit analysis and result oriented</li>\n<li>Good understanding for credit analysis and result oriented</li>\n</ul>', '<div class=\"d1\">\n<h5>How To Apply</h5>\n</div>\n<p>Interested candidates are encouraged to apply by submitting you CV and Cover Letter to sovang@khmercapital.com.kh or info@khmercapital.com.kh by specify subject as position applied or submit to our HO #155 (TK Royal One-In front of IFL), Russian Confederation Blvd, Sangkat Tuek La\'k Ti I, Khan Toul Kork, Phnom Penh.&nbsp;</p>', '<div class=\"d1\">\n<h5>How To Apply</h5>\n</div>\n<p>Interested candidates are encouraged to apply by submitting you CV and Cover Letter to sovang@khmercapital.com.kh or info@khmercapital.com.kh by specify subject as position applied or submit to our HO #155 (TK Royal One-In front of IFL), Russian Confederation Blvd, Sangkat Tuek La\'k Ti I, Khan Toul Kork, Phnom Penh.&nbsp;</p>', '2019-12-06', '2020-01-06', 1, 0, 1, '2019-12-13', 1, 'CO', 'CO', 'វិជ្ជាជីវៈ', 'CAREER');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_management_team`
--

DROP TABLE IF EXISTS `tbl_management_team`;
CREATE TABLE IF NOT EXISTS `tbl_management_team` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `od` int(11) NOT NULL,
  `name_kh` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `name_en` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `position_kh` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `position_en` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone1` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone2` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `other_kh` text COLLATE utf8_unicode_ci NOT NULL,
  `other_en` text COLLATE utf8_unicode_ci,
  `image` text COLLATE utf8_unicode_ci,
  `uid` int(11) NOT NULL,
  `created_at` date NOT NULL,
  `is_disable` tinyint(1) NOT NULL DEFAULT '0',
  `name_link_kh` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `name_link_en` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_management_team`
--

INSERT INTO `tbl_management_team` (`id`, `od`, `name_kh`, `name_en`, `position_kh`, `position_en`, `email`, `phone1`, `phone2`, `other_kh`, `other_en`, `image`, `uid`, `created_at`, `is_disable`, `name_link_kh`, `name_link_en`) VALUES
(1, 1, 'ស៊ូ ហារី', 'SHEU YUN-FHU', 'ប្រធាននាយក​ប្រតិបត្តិ', 'Chief Executive Officer', 'harrysheu@khmercapital.com.kh', '012121212', '093434343', '<p>បេសកកម្មរបស់គ្រឹះស្ថានមីក្រូហិរញ្ញវត្ថុ ខ្មែរ ឃែភីថល ម ក. គឺការផ្តល់ជូនភាពជាដៃគូដែលជឿទុកចិត្តដល់អតិថិជនរបស់យើងតាមរយៈ<br />ការផ្តល់ប្រឹក្សាផ្នែកហិរញ្ញវត្ថុប្រកបដោយជំនាញវិជ្ជាជីវៈដែលអាចធ្វើឱ្យមានការរីកចម្រើន និងមានស្ថេរភាព។</p>', '<h5>The Cambodian Economy</h5>\n<p>The World Bank and the Asian Development Bank projected economic growth of 7.1% and 7% respectively for 2018. This expansive growth is propelled by export diversification, strong construction and tourism activities, better weather conditions, and a supportive fiscal policy.</p>\n<h5>Financial Sector</h5>\n<p>Because of peace, stability and sustained economic growth, there has been a significant expansion in the number of financial institutions in 2018, which now includes 43 commercial banks, 14 specialized banks and 78 microfinance institutions.</p>\n<p>We are grateful for the new regulations issued by the National Bank of Cambodia, which enable us to focus on and address the need to mitigate risks, protect the interests of stakeholders, and especially to strengthen customer protection amongst many other mechanisms, with the optimal goal to guarantee sustainable growth in the financial sector.</p>\n<h5>ACLEDA Bank Plc.</h5>\n<p>In 2018, the Bank continued to implement its foremost goal, outlined in its five-year strategy 2018-2022, to be a regional commercial bank, \"the Bank You Can Trust, the Bank for the People\", with a competitive edge in relevant banking markets. Transparency provides its stakeholders with confidence in the long-term returns available as we can sustainably benefit from the economic growth agenda and the Rectangular Development Strategy of the Royal Government of the Kingdom of Cambodia.</p>\n<p>The Bank continues to strengthen its business model and facilitate the delivery of enhanced banking services to its clients in the public and private sectors that enables sustainable revenue streams into the future and ultimately benefits its shareholders.</p>\n<p>This year and in the years to come, the Bank will continue to enhance its e-banking services to provide outstanding services and banking convenience to its customers and to be ready to serve its expanding customer base from 2018 onward with a digital bank strategy of which FinTech products are included.</p>\n<p>An enabling business environment in Cambodia lent strong support to the business community including ACLEDA Bank Plc. The Bank was able to achieve its business plan, while the rating agency Standard &amp; Poor\'s has elevated ACLEDA Bank Plc.\'s rating by one mark from \"B\" to \"B+\" with an outlook \"stable\". This rate is a testament to the success in strengthening the Bank\'s governance, capital, franchise operations, and the ability to deliver a consistent performance.</p>\n<h5>Board Composition</h5>\n<p>The Board consists of ten Directors, three of whom are independent, five are non-executive and two members are executive directors.</p>\n<h5>Corporate Governance</h5>\n<p>The Board and management have the responsibility to ensure that the Bank\'s operations are conducted in accordance with all applicable laws and regulations, and as a credible going concern for years to come.</p>\n<p>In accordance with its terms of reference, the Board of Directors meets regularly four times per year. The meetings reviewed the executive management\'s performance, while the Board retains effective control over the Bank. The Board is assisted by Board Committees, which are responsible for different aspects of governance. They are the Audit and Compliance Committee, the Assets and Liabilities Management Committee, the Credit Committee, the Remuneration and Nomination Committee, the Risk Management Committee, and the Information and Technology Committee.</p>\n<h5>The Outlook for 2019</h5>\n<p>According to the World Bank, Cambodia\'s economic growth is forecast to remain stable at just short of around 7% in 2019. It has been said that Cambodia has begun to \"climb up the manufacturing value chain\" from garments to electronics and auto parts. In order to sustain these objective trends, Cambodia must embark on deeper structural reforms in improving the business environment, further diversifying exports, and lowering the cost of logistics by bridging the skills gap.</p>\n<h5>Acknowledgement</h5>\n<p>On behalf of the Board of Directors, I would like to thank our customers, shareholders, directors, executive management, and all staff of the ACLEDA Group for their support and efforts in implementing the Bank\'s strategy and in achieving its goals and objectives.</p>\n<p>We also express our sincerest gratitude to the Royal Government of Cambodia, the National Bank of Cambodia, regulators, and all relevant authorities for their constant support and dedicated efforts to develop Cambodia\'s financial industry, especially the banking sector.</p>\n<p>We reaffirm our commitment to all our customers and shareholders that in 2019 we will continue to focus on areas that represent the best opportunities for ACLEDA Bank Plc., to dedicate all our efforts to achieving a strong and sustainable growth rate, and to deliver on our strategic goals to enhance future returns as well as strengthening the position of ACLEDA Bank Plc. in the Kingdom of Cambodia and within the region.</p>', '1574300350.jpg', 2, '2019-12-06', 0, 'ស៊ូ-ហារី', 'SHEU-YUN-FHU'),
(2, 2, 'វ៉ាង វៃកៃ', 'WANG WEIKAI', 'ប្រធានហិរញ្ញវត្ថុ', 'Chief Financial Officer', 'weikai@khmercapital.com.kh', '099909090', '077474747', '<p>គ្រឹះស្ថានមីក្រូហិរញ្ញវត្ថុ ខ្មែរ ឃែភីថល ម.ក បានចុះបញ្ជីនៅក្រសួងពាណិជ្ជកម្មលេខ ០០០១៩២៥០ ចុះថ្ងៃទី ៤ ខែតុលា ឆ្នាំ២០១៦។ នៅថ្ងៃទី២៨ ខែកក្កដា ឆ្នាំ២០១៧ គ្រឹះស្ថានមីក្រូហិរញ្ញវត្ថុ ខ្មែរ ឃែភីថល ម.ក បានទទួលអាជ្ញាប័ណ្ណពីធនាគារជាតិនៃកម្ពុជាដើម្បីប្រតិបត្តិការធនាគារ និងបានចាប់ផ្តើមប្រតិបត្តិការជាផ្លូវការនៅថ្ងៃទី២៧ ខែវិច្ឆិកា ឆ្នាំ២០១៧ នៅក្នុងប្រទេសកម្ពុជាជាមួយដើមទុនចំនួន២លានដុល្លារដើម្បីពង្រឹងលើប្រតិបត្តិការរបស់គ្រឹះស្ថានមីក្រូហិរញ្ញវត្ថុ ខ្មែរ ឃែភីថល ម.ក ។ គ្រឹះស្ថានមីក្រូហិរញ្ញវត្ថុ ខ្មែរ ឃែភីថល ម.ក ផ្តល់ជូននូវសេវាកម្ម និងផលិតផលជាច្រើនដូចជា កម្ចីខ្នាតតូច និងមធ្យម ជាប្រាក់ដុល្លារអាមេរិក និងប្រាក់រៀល ដើម្បីឱ្យសមស្របទៅនឹងតម្រូវការរបស់អតិថិជន។ គ្រឹះស្ថានផ្តល់ជូននូវផលិតផល និងសេវាកម្មមានភាពប្រកួតប្រជែង ហើយការកំណត់តម្លៃរបស់យើងមានភាពបត់បែនក្នុងចំណោមមីក្រូហិរញ្ញវត្ថុនានានៅក្នុងប្រទេសកម្ពុជា។</p>', '<p>Khmer Capital Microfinance Institution PLC, is registered in Cambodia with the Ministry of Commerce under the registration number 00019250, dated 4th October, 2016. On 28th July 2017, the Khmer Capital Microfinance Institution PLC obtained license from the National Bank of Cambodia to carry out banking operations and officially commenced its operations on 27th November 2017 in Cambodia with Capital base on two million to cover the Microfinance Institution Plc operation. Khmer Capital Microfinance Institution PLC provides a wide range of services such as small and medium loan products in USD and KHR Riel to fit the customer&rsquo;s needs. We offer competitive products and services, and our pricing is flexible among the Microfinance in Cambodia.</p>', '1574300628.jpg', 2, '2019-12-06', 0, 'វ៉ាង-វៃកៃ', 'WANG-WEIKAI');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_menu_item`
--

DROP TABLE IF EXISTS `tbl_menu_item`;
CREATE TABLE IF NOT EXISTS `tbl_menu_item` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `type` int(11) DEFAULT NULL,
  `od` int(11) NOT NULL,
  `title_kh` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `title_en` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `icon` text COLLATE utf8_unicode_ci NOT NULL,
  `image` text COLLATE utf8_unicode_ci NOT NULL,
  `uid` int(11) NOT NULL,
  `created_at` date NOT NULL,
  `is_disable` tinyint(1) NOT NULL,
  `name_link_kh` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `name_link_en` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `type_link_kh` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `type_link_en` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_menu_item`
--

INSERT INTO `tbl_menu_item` (`id`, `type`, `od`, `title_kh`, `title_en`, `icon`, `image`, `uid`, `created_at`, `is_disable`, `name_link_kh`, `name_link_en`, `type_link_kh`, `type_link_en`) VALUES
(1, 1, 1, 'ប្រវត្តិគ្រឹះស្ថាន', 'COMPANY PROFILE', '1574923884.png', '1574923890.jpg', 1, '2019-12-12', 0, 'ប្រវត្តិគ្រឹះស្ថាន', 'COMPANY-PROFILE', 'អំពីយើង', 'ABOUT-US'),
(2, 1, 2, 'ក្រុមអ្នកគ្រប់គ្រង', 'MANAGEMENT TEAM', '1574923905.png', '1574923900.jpg', 1, '2019-12-11', 0, 'ក្រុមអ្នកគ្រប់គ្រង', 'MANAGEMENT-TEAM', 'អំពីយើង', 'ABOUT-US'),
(10, 3, 3, 'បណ្តុំរូបភាព', 'PHOTO GALLERY', '1574923934.png', '1574923926.jpg', 1, '2019-12-11', 0, 'បណ្តុំរូបភាព', 'PHOTO-GALLERY', 'ព័ត៌មាន', 'MEDIA'),
(11, 3, 4, 'ថ្ងៃឈប់សម្រាក', 'PUBLIC HOLIDAY', '1574923945.png', '1574923941.jpg', 1, '2019-12-13', 0, 'ថ្ងៃឈប់សម្រាក', 'PUBLIC-HOLIDAY', 'ព័ត៌មាន', 'MEDIA'),
(12, 3, 5, 'ដំណឹង និង ព្រឹត្តិការណ៍', 'NEWS AND EVENT', '1574923962.png', '1574923951.jpg', 1, '2019-12-12', 0, 'ដំណឹង-និង-ព្រឹត្តិការណ៍', 'NEWS-AND-EVENT', 'ព័ត៌មាន', 'MEDIA'),
(13, 4, 6, 'ដំណឹង​ជ្រើសរើស​បុគ្គលិក', 'JOB OPPORTUNITY', '1574923981.png', '1574923975.jpg', 1, '2019-12-12', 0, 'ដំណឹង-ជ្រើសរើស-បុគ្គលិក', 'JOB-OPPORTUNITY', 'វិជ្ជាជីវៈ', 'CAREER'),
(14, 4, 7, 'កម្មសិក្សា', 'INTERNSHIP', '1574923992.png', '1574923987.jpg', 1, '2019-12-12', 0, 'កម្មសិក្សា', 'INTERNSHIP', 'វិជ្ជាជីវៈ', 'CAREER'),
(15, 4, 8, 'អ្នកស្ម័គ្រចិត្ត', 'VOLUNTEER', '1574924003.png', '1574923998.jpg', 1, '2019-12-12', 0, 'អ្នកស្ម័គ្រចិត្ត', 'VOLUNTEER', 'វិជ្ជាជីវៈ', 'CAREER');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_news`
--

DROP TABLE IF EXISTS `tbl_news`;
CREATE TABLE IF NOT EXISTS `tbl_news` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `od` int(11) NOT NULL,
  `title_kh` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `title_en` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `des_kh` text COLLATE utf8_unicode_ci NOT NULL,
  `des_en` text COLLATE utf8_unicode_ci NOT NULL,
  `image` text COLLATE utf8_unicode_ci NOT NULL,
  `num_of_view` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `created_at` date NOT NULL,
  `is_disable` tinyint(1) NOT NULL,
  `name_link_kh` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `name_link_en` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_news`
--

INSERT INTO `tbl_news` (`id`, `od`, `title_kh`, `title_en`, `des_kh`, `des_en`, `image`, `num_of_view`, `uid`, `created_at`, `is_disable`, `name_link_kh`, `name_link_en`) VALUES
(1, 1, 'dfgfd', 'dfgdfg', '<p>dfgdfg</p>', '<p>dfgfd</p>', '', 0, 1, '2019-12-13', 1, 'dfgfd', 'dfgdfg'),
(2, 2, 'ខ្មែរឃែភីថល', 'Khmercapital', '<p>ខ្មែរឃែភីថលខ្មែរឃែភីថលខ្មែរឃែភីថលខ្មែរឃែភីថលខ្មែរឃែភីថលខ្មែរឃែភីថលខ្មែរឃែភីថលខ្មែរឃែភីថលខ្មែរឃែភីថលខ្មែរឃែភីថលខ្មែរឃែភីថលខ្មែរឃែភីថល</p>', '<p>KhmercapitalKhmercapitalKhmercapitalKhmercapitalKhmercapitalKhmercapitalKhmercapital</p>', '', 0, 1, '2019-12-13', 1, 'ខ្មែរឃែភីថល', 'Khmercapital'),
(3, 3, 'កម្ចីប្រាក់', 'Loan', '<p>កម្ចីប្រាក់កម្ចីប្រាក់កម្ចីប្រាក់កម្ចីប្រាក់កម្ចីប្រាក់កម្ចីប្រាក់កម្ចីប្រាក់កម្ចីប្រាក់កម្ចីប្រាក់កម្ចីប្រាក់កម្ចីប្រាក់កម្ចីប្រាក់កម្ចីប្រាក់កម្ចីប្រាក់កម្ចីប្រាក់កម្ចីប្រាក់កម្ចីប្រាក់កម្ចីប្រាក់កម្ចីប្រាក់កម្ចីប្រាក់កម្ចីប្រាក់កម្ចីប្រាក់កម្ចីប្រាក់កម្ចីប្រាក់កម្ចីប្រាក់កម្ចីប្រាក់កម្ចីប្រាក់កម្ចីប្រាក់កម្ចីប្រាក់កម្ចីប្រាក់កម្ចីប្រាក់កម្ចីប្រាក់កម្ចីប្រាក់កម្ចីប្រាក់កម្ចីប្រាក់កម្ចីប្រាក់កម្ចីប្រាក់កម្ចីប្រាក់កម្ចីប្រាក់កម្ចីប្រាក់កម្ចីប្រាក់កម្ចីប្រាក់កម្ចីប្រាក់កម្ចីប្រាក់កម្ចីប្រាក់កម្ចីប្រាក់កម្ចីប្រាក់កម្ចីប្រាក់កម្ចីប្រាក់កម្ចីប្រាក់កម្ចីប្រាក់កម្ចីប្រាក់កម្ចីប្រាក់កម្ចីប្រាក់កម្ចីប្រាក់កម្ចីប្រាក់កម្ចីប្រាក់កម្ចីប្រាក់កម្ចីប្រាក់កម្ចីប្រាក់កម្ចីប្រាក់កម្ចីប្រាក់កម្ចីប្រាក់កម្ចីប្រាក់កម្ចីប្រាក់កម្ចីប្រាក់កម្ចីប្រាក់កម្ចីប្រាក់កម្ចីប្រាក់កម្ចីប្រាក់កម្ចីប្រាក់កម្ចីប្រាក់កម្ចីប្រាក់កម្ចីប្រាក់កម្ចីប្រាក់កម្ចីប្រាក់កម្ចីប្រាក់កម្ចីប្រាក់កម្ចីប្រាក់កម្ចីប្រាក់កម្ចីប្រាក់កម្ចីប្រាក់កម្ចីប្រាក់កម្ចីប្រាក់កម្ចីប្រាក់កម្ចីប្រាក់កម្ចីប្រាក់កម្ចីប្រាក់កម្ចីប្រាក់កម្ចីប្រាក់កម្ចីប្រាក់កម្ចីប្រាក់កម្ចីប្រាក់កម្ចីប្រាក់កម្ចីប្រាក់កម្ចីប្រាក់កម្ចីប្រាក់កម្ចីប្រាក់កម្ចីប្រាក់កម្ចីប្រាក់កម្ចីប្រាក់កម្ចីប្រាក់កម្ចីប្រាក់កម្ចីប្រាក់កម្ចីប្រាក់កម្ចីប្រាក់កម្ចីប្រាក់កម្ចីប្រាក់កម្ចីប្រាក់កម្ចីប្រាក់កម្ចីប្រាក់កម្ចីប្រាក់កម្ចីប្រាក់កម្ចីប្រាក់កម្ចីប្រាក់កម្ចីប្រាក់កម្ចីប្រាក់កម្ចីប្រាក់កម្ចីប្រាក់កម្ចីប្រាក់កម្ចីប្រាក់កម្ចីប្រាក់កម្ចីប្រាក់កម្ចីប្រាក់កម្ចីប្រាក់កម្ចីប្រាក់កម្ចីប្រាក់កម្ចីប្រាក់កម្ចីប្រាក់កម្ចីប្រាក់កម្ចីប្រាក់កម្ចីប្រាក់កម្ចីប្រាក់កម្ចីប្រាក់កម្ចីប្រាក់កម្ចីប្រាក់កម្ចីប្រាក់កម្ចីប្រាក់កម្ចីប្រាក់កម្ចីប្រាក់កម្ចីប្រាក់កម្ចីប្រាក់កម្ចីប្រាក់កម្ចីប្រាក់កម្ចីប្រាក់កម្ចីប្រាក់កម្ចីប្រាក់កម្ចីប្រាក់កម្ចីប្រាក់កម្ចីប្រាក់កម្ចីប្រាក់កម្ចីប្រាក់កម្ចីប្រាក់កម្ចីប្រាក់កម្ចីប្រាក់កម្ចីប្រាក់កម្ចីប្រាក់កម្ចីប្រាក់កម្ចីប្រាក់កម្ចីប្រាក់កម្ចីប្រាក់កម្ចីប្រាក់កម្ចីប្រាក់កម្ចីប្រាក់កម្ចីប្រាក់កម្ចីប្រាក់កម្ចីប្រាក់កម្ចីប្រាក់កម្ចីប្រាក់កម្ចីប្រាក់កម្ចីប្រាក់កម្ចីប្រាក់</p>', '<p>LoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoanLoan</p>', '', 0, 1, '2019-12-13', 1, 'កម្ចីប្រាក់', 'Loan'),
(4, 4, 'BBBBBBBBBBBBBBB', 'BBBBBBBBBBBBBBB', '<p>sdfsdf</p>', '<p>&nbsp;</p>\n<p>sdfsdf&nbsp;</p>\n<p>&nbsp;</p>\n<div id=\"gtx-trans\" style=\"position: absolute; left: -13px; top: -14px;\">&nbsp;</div>', '', 0, 1, '2019-12-17', 0, 'BBBBBBBBBBBBBBB', 'BBBBBBBBBBBBBBB'),
(5, 5, 'ដំណឹងជ្រើសរើសបុគ្គលិក', 'Job Announcement', '<p>ខ្មែរ ឃែភីថល​ ​ជា​គ្រឹះស្ថានមីក្រូ​ហិរញ្ញវត្ថុ​ដែលបានទទួលស្គាល់ទូលំទូលាយនៅ​ក្នុងព្រះរាជាណាចក្រកម្ពុជា​ ​កំពុង​ជ្រើសរើស​បុគ្គលិកដែលមាន​មុខដំណែង​ជាច្រើន ​សម្រាប់​ម្រើ​ការងារ​នៅ​ការិយាល័យកណ្តាល​។​</p>\n<p>​បេក្ខជន​ដែល​មានបំណង​ចង់​បម្រើការ​ងារ​នៅ​គ្រឹះស្ថាន​ដែល​កំពុងលូតលាស់ក្នុង​វិស័យ​ហិរញ្ញវត្ថុ អាច​ជ្រើសរើស​បម្រើការ​ងារ​នៅ​ ​ខ្មែរ ឃែភីថល​បាន​។ ខ្មែរ ឃែភីថល​ ​គី​ជា​ជម្រើសដ៏ល្អ​ ​ដើម្បីអភិវឌ្ឍ​អាជីព​ការងារ ​និង​បង្កើន​សមត្ថភាព​ ប្រកបដោយ​បទដ្ឋាន​ការងារ​ច្បាស់លាស់​ ​បរិយាកាស​ការងារ​ល្អ​ ​ទទួល​បានផល​ប្រយោជន៍​ច្រើន​ ​ព្រមទាំង​មាន​លក្ខខណ្ឌ​ការងារ​គោរព​តាមច្បាប់​ការងារ​នៃ​ព្រះរាជាណាចក្រ​កម្ពុជា​។​</p>\n<p>​បុគ្គលិករបស់គ្រឹះស្ថានមីក្រូហេរិញ្ញវត្ថុ ខ្មែរ ឃែភីថល ​ទទួល​បាន​អត្ថ​ប្រយោជន៍​ជាច្រើន ​ទាំង​ផ្នែក​ហិរញ្ញវត្ថុ​ ​និង​មិនមែន​ហិរញ្ញវត្ថុ​ដ៏​គួរ​ឱ្យ​ទាក់ទាញ​ ​រួមមាន​៖​</p>\n<ul style=\"list-style-type: square;\">\n<li>ប្រាក់ឧបត្ថម្ភ​តួនាទី</li>\n<li>​ប្រាក់​រង្វាន់​លើកទឹកចិត្ត​ប្រចាំឆ្នាំ ​ ​1​ ​ខែ​</li>\n<li>​ប្រាក់ឧបត្ថម្ភ​បុណ្យចូលឆ្នាំ​ខ្មែរ​ចំនួន​ ​1​ ​ខែ​ ​បុណ្យភ្ជុំបិណ្ឌ​ចំនួន​ ​1​ ​ខែ​</li>\n<li>​ថ្លៃ​ប្រេងឥន្ធនៈ &nbsp;​ ​</li>\n<li>ទទួល​បាន​ប្រាក់បំណាច់​អតីតភាព​ការងារ​ស្មើនឹង​ប្រាក់ឈ្នួល​និង​ប្រាក់​បន្ទាប់បន្សំ​ជាមធ្យម​ចំនួន​ ​15​ ​ថ្ងៃ​ក្នុង​ ​1​ ​ឆ្នាំ​</li>\n<li>ទទួល​បាន​ឯកសណ្ឋាន​ ​ទូរស័ព្ទ​ ​និង​កាត​ទូរស័ព្ទ​</li>\n<li>​ធានារ៉ាប់រង​សុខភាព​</li>\n<li>​ធានារ៉ាប់រង​លើ​ការសម្រាក​នៅ​មន្ទីរពេទ្យ​</li>\n<li>ធានា​រ៉ាប់​គ្រោះថ្នាក់​ផ្ទាល់ខ្លួន​</li>\n<li>ឈប់សម្រាក​ប្រចាំឆ្នាំ​រហូតដល់​ ​21​ ​ថ្ងៃ​</li>\n<li>ឈប់សម្រាក​រៀប​អាពាហ៍​ពិពាហ៍​ចំនួន​ ​5​ ​ថ្ងៃ​</li>\n<li>ឈប់សម្រាក​ពេល​ភរិយា​សម្រាលកូន​ចំនួន​ ​3​ ​ថ្ងៃ​</li>\n<li>​ឈប់សម្រាក​ពេល​មានធុរៈ​ក្នុង​គ្រួសារ​</li>\n<li>​ឈប់សម្រាក​ព្យាបាល​ជំងឺ​</li>\n<li>​មិន​ធ្វើការ​នៅ​ថ្ងៃឈប់​សម្រាក​ ​និង​ថ្ងៃសៅរ៍​-​អាទិត្យ​</li>\n</ul>\n<p>​ក្រៅពី​អត្ថ​ប្រយោជន៍​ជាច្រើន​ដែល​បាន​លើកឡើង​ខាងលើ​ ​ខ្មែរ ឃែភីថល ​ជា​និយោជក​នៃ​ជម្រើសរបស់រាល់បេក្ខជនគ្រប់រូប​ ​អាស្រ័យហេតុ​នេះ​ ​សូម​បេក្ខជន​ដែល​មាន​ចំណាប់​អារម្មណ៍​ផ្ញើ​ប្រវត្តិរូប​សង្ខេប​ ​(​CV​)​ ​តាមរយៈ​អ៊ី​ម៉ែ​ល​ sovang@khmercapital.com.kh​ ​ឬ​ដាក់ពាក្យ​នៅ​ការិយាល័យកណ្តាល​របស់ ខ្មែរ ឃែភីថល​ ​ដើម្បី​ទទួល​បាន​ឱកាស​ការងារ​ដ៏​ល្អ​នេះ​។​ ​</p>\n<p>&nbsp;</p>\n<p>សម្រាប់​ព័ត៌មាន​បន្ថែម​ ​ចូល​ទៅកាន់​៖​ ​www.khmercapital.com.kh​/​career​ ​ ​ឬ​ទាក់ទង​មក​ទូរស័ព្ទ​លេខ​ ​(+855)​ ​ 23 235 599 / ​(+855)​ 78 999 519 / ​(+855)​ 16 337 567​៕​</p>', '<p>Hong Sok Hour, CSX&rsquo;s CEO, said private equity funds can play a vital role in bringing much-needed liquidity to companies that are facing difficulties raising capital through</p>\n<p>more traditional means, like initial public offerings (IPOs).Speaking to about 100entrepreneurs and business owners during a seminar yesterday, Mr Sok Hour said: &ldquo;We realised that a lot of local companies need capital to expand their businesses, but they face difficulties raising funds.&ldquo;So we are providing them with the training they need with regards to private equity investment.&rdquo;</p>', '1576742947.PNG', 0, 1, '2019-12-19', 0, 'ដំណឹងជ្រើសរើសបុគ្គលិក', 'Job-Announcement');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_personal_info`
--

DROP TABLE IF EXISTS `tbl_personal_info`;
CREATE TABLE IF NOT EXISTS `tbl_personal_info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `od` int(11) NOT NULL,
  `name_kh` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `name_en` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `footer_kh` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `footer_en` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `logo_image` text COLLATE utf8_unicode_ci NOT NULL,
  `footer_image` text COLLATE utf8_unicode_ci NOT NULL,
  `uid` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `is_disable` bit(1) NOT NULL,
  `name_link` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_photo_gallery`
--

DROP TABLE IF EXISTS `tbl_photo_gallery`;
CREATE TABLE IF NOT EXISTS `tbl_photo_gallery` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `od` int(11) NOT NULL,
  `title_kh` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `title_en` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `des_kh` text COLLATE utf8_unicode_ci NOT NULL,
  `des_en` text COLLATE utf8_unicode_ci NOT NULL,
  `image` text COLLATE utf8_unicode_ci NOT NULL,
  `image1` text COLLATE utf8_unicode_ci,
  `image2` text COLLATE utf8_unicode_ci,
  `image3` text COLLATE utf8_unicode_ci,
  `image4` text COLLATE utf8_unicode_ci,
  `image5` text COLLATE utf8_unicode_ci,
  `image6` text COLLATE utf8_unicode_ci,
  `image7` text COLLATE utf8_unicode_ci,
  `image8` text COLLATE utf8_unicode_ci,
  `image9` text COLLATE utf8_unicode_ci,
  `image10` text COLLATE utf8_unicode_ci,
  `uid` int(11) NOT NULL,
  `created_at` date DEFAULT NULL,
  `is_disable` tinyint(1) NOT NULL,
  `name_link_kh` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `name_link_en` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_photo_gallery`
--

INSERT INTO `tbl_photo_gallery` (`id`, `od`, `title_kh`, `title_en`, `des_kh`, `des_en`, `image`, `image1`, `image2`, `image3`, `image4`, `image5`, `image6`, `image7`, `image8`, `image9`, `image10`, `uid`, `created_at`, `is_disable`, `name_link_kh`, `name_link_en`) VALUES
(1, 1, 'Test 1', 'Testsets ssfs fsdf 2', '<p>sdfsfdsf 3</p>', '<p>sdfsdfs 34</p>', '1574670786.jpg', '1574670790.png', '1574670795.png', '1574670798.png', '1574670801.png', '1574670803.png', '', '', '', '', '', 1, '2019-11-25', 1, 'Test-1', 'Testsets-ssfs-fsdf-2');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product_service`
--

DROP TABLE IF EXISTS `tbl_product_service`;
CREATE TABLE IF NOT EXISTS `tbl_product_service` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `type` int(11) DEFAULT NULL,
  `od` int(11) NOT NULL,
  `icon` text COLLATE utf8_unicode_ci,
  `name_kh` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `name_en` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `des_kh` text COLLATE utf8_unicode_ci NOT NULL,
  `des_en` text COLLATE utf8_unicode_ci NOT NULL,
  `content_kh` text COLLATE utf8_unicode_ci NOT NULL,
  `content_en` text COLLATE utf8_unicode_ci NOT NULL,
  `term_con_kh` text COLLATE utf8_unicode_ci NOT NULL,
  `term_con_en` text COLLATE utf8_unicode_ci NOT NULL,
  `doc_require_kh` text COLLATE utf8_unicode_ci NOT NULL,
  `doc_require_en` text COLLATE utf8_unicode_ci NOT NULL,
  `is_slide` tinyint(1) NOT NULL,
  `slide_text_kh` text COLLATE utf8_unicode_ci,
  `slide_text_en` text COLLATE utf8_unicode_ci,
  `slide_image` text COLLATE utf8_unicode_ci,
  `uid` int(11) NOT NULL,
  `created_at` date NOT NULL,
  `is_disable` tinyint(1) NOT NULL DEFAULT '0',
  `name_link_kh` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `name_link_en` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `type_link_kh` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `type_link_en` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `bg_color` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `min_khr` float NOT NULL,
  `max_khr` float NOT NULL,
  `min_usd` float NOT NULL,
  `max_usd` float NOT NULL,
  `min_month` float NOT NULL,
  `max_month` float NOT NULL,
  `min_rate` float NOT NULL,
  `max_rate` float NOT NULL,
  `rate_step` float NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_product_service`
--

INSERT INTO `tbl_product_service` (`id`, `type`, `od`, `icon`, `name_kh`, `name_en`, `des_kh`, `des_en`, `content_kh`, `content_en`, `term_con_kh`, `term_con_en`, `doc_require_kh`, `doc_require_en`, `is_slide`, `slide_text_kh`, `slide_text_en`, `slide_image`, `uid`, `created_at`, `is_disable`, `name_link_kh`, `name_link_en`, `type_link_kh`, `type_link_en`, `bg_color`, `min_khr`, `max_khr`, `min_usd`, `max_usd`, `min_month`, `max_month`, `min_rate`, `max_rate`, `rate_step`) VALUES
(3, 2, 2, '1574924036.png', 'ឥណទានអាជីវកម្ម', 'BUSINESS LOAN', '<p>ឥណទានអាជីវកម្ម គឺផ្តល់សម្រាប់បុគ្គលដែលមានបំណងបង្កើតអាជីវកម្មថ្មី ឬក៏ពង្រីកអាជីវកម្មរបស់ពួកគាត់ដែលមានស្រាប់<strong><em> វា គឺជាវិធីដ៏ល្អសម្រាប់អោយ សហគ្រិនខ្នាតតូច និងមធ្យមទទួលបានដើមទុនដែលពួកគាត់ត្រូវការ។</em></strong></p>', '<p>Business Loan is ..... or Corporate Loan?</p>', '<h4>អត្ថប្រយោជន៍</h4>\n<p>&nbsp;&nbsp;<span style=\"color: #003366;\">◾</span> សួរសំនួរងាយៗ និងការអនុម័តឆាប់រហ័ស</p>\n<p>&nbsp;&nbsp;◾ អត្រាការប្រាក់ប្រែប្រួល</p>\n<p>&nbsp;&nbsp;◾ ឥណទានមានភាពងាយស្រួល និងបត់បែន</p>\n<h4>លក្ខខណ្ឌដើម្បីទទួលបានប្រាក់កម្ចី</h4>\n<p>&nbsp;&nbsp;◾ អតិថិជនមានអាយុចាប់ពី ១៨ ទៅ ៦៥ឆ្នាំ</p>\n<p>&nbsp;&nbsp;◾ អាជីវកម្មរក្សាបាននូវបរិស្ថានល្អ និងស្របច្បាប់នៃព្រះរាជាណាចក្រកម្ពុជា</p>\n<p>&nbsp;&nbsp;◾ មានលទ្ធភាពសងប្រាក់ប្រចាំខែ ៥០% នៃចំណូលសុទ្ធ</p>', '<h4>Benefit</h4>\n<p>&nbsp;&nbsp;◾ Convenient enquirer and fast approval<br /> &nbsp;&nbsp;◾ Variable interest rate<br /> &nbsp;&nbsp;◾ Flexible loan tenor</p>\n<h4>Eligibility</h4>\n<p>&nbsp;&nbsp;◾ Borrow of 18 - 65 years old <br /> &nbsp;&nbsp;◾ Legal, harmless business (not an environmentally or social damaging business) <br /> &nbsp;&nbsp;◾ Monthly loan repayment capacity (Principal and Interest) 50% of net Income</p>', '<table class=\"table table-hover\">\n<thead>\n<tr>\n<th scope=\"col\">លរ</th>\n<th scope=\"col\">ការពិពណ៌នា</th>\n<th scope=\"col\">ទំហំកម្ចី</th>\n</tr>\n</thead>\n<tbody>\n<tr>\n<th scope=\"row\">១</th>\n<td>ចំនួនទឹកប្រាក់កម្ចី</td>\n<td>\n<p>ចាប់ពី ២០,០០០,០០០ រៀល ទៅ ៨០០,០០០,០០០ រៀល</p>\n<p>៥,០០០ ដុល្លារអាមេរិក ទៅ ៥០០,០០០ ដុល្លារអាមេរិក</p>\n</td>\n</tr>\n<tr>\n<th scope=\"row\">២</th>\n<td>អត្រាការប្រាក់</td>\n<td>១.00% - ១.៥0%</td>\n</tr>\n<tr>\n<th scope=\"row\">៣</th>\n<td>រយៈពេលកម្ចី</td>\n<td>៣ ខែ ទៅ ៤៨ ខែ</td>\n</tr>\n</tbody>\n</table>\n<p>&nbsp;</p>', '<table class=\"table table-hover\">\n<thead>\n<tr>\n<th scope=\"col\">No</th>\n<th scope=\"col\">Description</th>\n<th scope=\"col\">Variances</th>\n</tr>\n</thead>\n<tbody>\n<tr>\n<th scope=\"row\">1</th>\n<td>Loan Amount</td>\n<td>\n<p>KHR 20,000,000 - KHR 800,000,000</p>\n<p>USD 5,000 - USD 200,000</p>\n</td>\n</tr>\n<tr>\n<th scope=\"row\">2</th>\n<td>Loan Interest Rates</td>\n<td>1.00% - 1.50%</td>\n</tr>\n<tr>\n<th scope=\"row\">3</th>\n<td>Loan Durations</td>\n<td>3 months - 48 months</td>\n</tr>\n</tbody>\n</table>', '<table class=\"table table-hover\">\n<thead></thead>\n<tbody>\n<tr>\n<th style=\"width: 50px;\">១</th>\n<td>អត្តសញ្ញាណប័ណ្ណថតចម្លង សៀវភៅគ្រួសារថតចម្លង ប័ណ្ណកម្មសិទ្ធិទ្រព្យធានាថតចម្លង</td>\n</tr>\n<tr>\n<th>២</th>\n<td>ឯកសារបញ្ជាក់នៃអាជីវកម្ម៖ ប័ណ្ណប៉ាតង់ វិញ្ញាបនប័ត្រ លិខិតអនុញ្ញាត ឬក៏​ឯកសារពាក់ព័ន្ធដ៏ទៃទៀត</td>\n</tr>\n<tr>\n<th>៣</th>\n<td>របាយការណ៍ហិរញ្ញវត្ថុ (រយៈពេលមួយឆ្នាំចុងក្រោយ)</td>\n</tr>\n</tbody>\n</table>\n<p>***យើងខ្ញុំ សូមរក្សាសិទ្ធក្នុងការកែប្រែរាល់ប្រការខាងលើដោយមិនបាច់ជូនដំណឹងជាមុន។</p>', '<table class=\"table table-hover\">\n<thead></thead>\n<tbody>\n<tr>\n<th style=\"width: 50px;\">1</th>\n<td>Copy of ID card(s), family book, collateral; property tittle deed</td>\n</tr>\n<tr>\n<th>2</th>\n<td>Proof of business: patent, certificate, permission letter, other related documents</td>\n</tr>\n<tr>\n<th>3</th>\n<td>Financial report (One year)</td>\n</tr>\n</tbody>\n</table>\n<p>&nbsp;* Terms and conditions are subject to change at the KC MFI sole discretion without prior notice to customer</p>', 1, 'ការផ្តល់ជូនប្រាក់កម្ចីរហូតដល់​ ២០០,០០០ ដុល្លាអាមេរិកយៈពេលរហូតដល់ ៤៨​​ ខែជាមួយនឹងអត្រាការប្រាក់ដែលមានការប្រកួតប្រជែង', 'Loan amount up to USD 200,000, term up to 48 months with competitive interest.', '1574922605.png', 1, '2019-12-17', 0, 'ឥណទានអាជីវកម្ម', 'BUSINESS-LOAN', 'ផលិតផល​-និងសេវា', 'PRODUCT-AND-SERVICE', 'rgba(0,166,233,0.5)', 4000000, 200000000, 1000, 500000, 3, 180, 0, 18, 0.1),
(4, 2, 1, '1574924063.png', 'ឥណទាន​ខ្នាតតូច និងមធ្យម', 'SME LOAN', '<p>ឥណទាន​ខ្នាតតូច និងមធ្យម ផ្តល់ឥណទានជូនទៅសហគ្រាសខ្នាតតូច និងមធ្យមដែលមានបំណងចង់ពង្រីកអាជីវកម្ម (ពាណិជ្ជកម្ម ផលិតកម្ម សេវាកម្ម កសិកម្ម) បច្ចុប្បន្ន ឬក៏បង្កើតអាជីវកម្មថ្មីរបស់ពួកគាត់តាមរយៈហិរញ្ញប្បទានដើម្បីយកទៅធ្វើការវិនិយោគ។</p>', '<p>SME Loan product is diversified to provide to existing small and medium enterprises funds (commercial, manufacturing, services, agriculture) to expand their existing business by financing working capital and/or investment, or to diversify their activities by creating a new business.</p>', '<h4>អត្ថប្រយោជន៍</h4>\n<p>&nbsp;&nbsp;◾ សួរសំនួរងាយៗ និងការអនុម័តឆាប់រហ័ស</p>\n<p>&nbsp;&nbsp;◾ អត្រាការប្រាក់ប្រែប្រួល</p>\n<p>&nbsp;&nbsp;◾ ឥណទានមានភាពងាយស្រួល និងបត់បែនទៅតាមគម្រោងអាជីវកម្មរបស់អ្នក</p>\n<h4>លក្ខខណ្ឌដើម្បីទទួលបានប្រាក់កម្ចី</h4>\n<p>&nbsp;&nbsp;◾ ជានីតិជនមានអាយុចាប់ពី ១៨ ទៅ ៦៥ឆ្នាំ</p>\n<p>&nbsp;&nbsp;◾ អាជីវកម្មរក្សាបាននូវបរិស្ថានល្អ និងស្របច្បាប់នៃព្រះរាជាណាចក្រកម្ពុជា</p>\n<p>&nbsp;&nbsp;◾ មានលទ្ធភាពសងប្រាក់ប្រចាំខែ ៥០% នៃចំណូលសុទ្ធ</p>', '<h4>Benefit</h4>\n<p>&nbsp;&nbsp;◾ Convenient enquirer and fast approval<br /> &nbsp;&nbsp;◾ Variable interest rate<br /> &nbsp;&nbsp;◾ Flexible loan tenor</p>\n<h4>Eligibility</h4>\n<p>&nbsp;&nbsp;◾ Be a majority of aged 18 to 65 years old <br /> &nbsp;&nbsp;◾ Legal, harmless business (not an environmentally or social damaging business) <br /> &nbsp;&nbsp;◾ Monthly loan repayment capacity (Principal and Interest) 50% of net income</p>', '<table class=\"table table-hover\">\n<thead>\n<tr>\n<th scope=\"col\">លរ</th>\n<th scope=\"col\">ការពិពណ៌នា</th>\n<th scope=\"col\">ទំហំកម្ចី</th>\n</tr>\n</thead>\n<tbody>\n<tr>\n<th scope=\"row\">១</th>\n<td>ចំនួនទឹកប្រាក់កម្ចី</td>\n<td>\n<p>ចាប់ពី ១២០,០០០,០០០ រៀល ទៅ ៨០០,០០០,០០០ រៀល</p>\n<p>៣០,០០០ ដុល្លារអាមេរិក ទៅ ៥០០,០០០ ដុល្លារអាមេរិក</p>\n</td>\n</tr>\n<tr>\n<th scope=\"row\">២</th>\n<td>អត្រាការប្រាក់</td>\n<td>០.៧៥%</td>\n</tr>\n<tr>\n<th scope=\"row\">៣</th>\n<td>រយៈពេលកម្ចី</td>\n<td>២៤ ខែ ទៅ ៦០ ខែ</td>\n</tr>\n</tbody>\n</table>\n<p>&nbsp;</p>', '<table class=\"table table-hover\">\n<thead>\n<tr>\n<th scope=\"col\">No</th>\n<th scope=\"col\">Description</th>\n<th scope=\"col\">Variances</th>\n</tr>\n</thead>\n<tbody>\n<tr>\n<th scope=\"row\">1</th>\n<td>Loan Amount</td>\n<td>\n<p>KHR 120,000,000 - KHR 2,000,000,000</p>\n<p>USD 30,000 - USD 500,000</p>\n</td>\n</tr>\n<tr>\n<th scope=\"row\">2</th>\n<td>Loan Interest Rates</td>\n<td>0.75%</td>\n</tr>\n<tr>\n<th scope=\"row\">3</th>\n<td>Loan Durations</td>\n<td>24 months - 60 months</td>\n</tr>\n</tbody>\n</table>\n<p>&nbsp;</p>', '<table class=\"table table-hover\">\n<thead></thead>\n<tbody>\n<tr>\n<th style=\"width: 50px;\">១</th>\n<td>អត្តសញ្ញាណប័ណ្ណថតចម្លង សៀវភៅគ្រួសារថតចម្លង សៀវភៅស្នាក់នៅ</td>\n</tr>\n<tr>\n<th>២</th>\n<td>វិញ្ញាបនបត្រសម្គាល់​ម្ចាស់អចលនវត្ថុ ឬ លិខិតបញ្ជាក់ម្ចាស់អចលនវត្ថុ</td>\n</tr>\n<tr>\n<th>៣</th>\n<td>ឯកសារបញ្ជាក់នៃអាជីវកម្ម៖ ប័ណ្ណពន្ធប៉ាតង់ វិញ្ញាបនបត្របញ្ជាក់ការចុះឈ្មោះក្នុងបញ្ជីពាណិជ្ជកម្ម លិខិតអនុញ្ញាត ឬក៏​ឯកសារពាក់ព័ន្ធដ៏ទៃទៀត</td>\n</tr>\n<tr>\n<th>៤</th>\n<td>របាយការណ៍ហិរញ្ញវត្ថុបញ្ជាក់ពីប្រាក់ចំណូល និងចំណាយរបស់អាជីវកម្ម (រយៈពេលមួយឆ្នាំចុងក្រោយ) របាយការណ៍ពីធនាគារ</td>\n</tr>\n</tbody>\n</table>\n<p>***យើងខ្ញុំ សូមរក្សាសិទ្ធក្នុងការកែប្រែរាល់ប្រការខាងលើដោយមិនបាច់ជូនដំណឹងជាមុន។</p>', '<table class=\"table table-hover\">\n<thead></thead>\n<tbody>\n<tr>\n<th style=\"width: 50px;\">1</th>\n<td>Copy of ID card(s), family book, or residential book</td>\n</tr>\n<tr>\n<th>2</th>\n<td>Land title or land certificate</td>\n</tr>\n<tr>\n<th>3</th>\n<td>Proof of business: patent, certificate, permission letter, other related documents</td>\n</tr>\n<tr>\n<th>4</th>\n<td>Financial report (One year), Bank Statement</td>\n</tr>\n</tbody>\n</table>\n<p>&nbsp;* Terms and conditions are subject to change at the KC MFI sole discretion without prior notice to customer</p>', 0, 'ការផ្តល់ជូនប្រាក់កម្ចីរហូតដល់​ ៥០០,០០០ដុល្លាអាមេរិករយៈពេលរហូតដល់ ៤៨​​ខែ ជាមួយនឹងអត្រាការប្រាក់ដែលមានការប្រកួតប្រជែង', 'SME Loan amount up to USD 500,000, term up to 48 months with competitive interest.', '2.png', 1, '2019-12-17', 0, 'ឥណទាន-ខ្នាតតូច-និងមធ្យម', 'SME-LOAN', 'ផលិតផល​-និងសេវា', 'PRODUCT-AND-SERVICE', 'rgba(0,0,0,0.5)', 120000000, 2000000000, 30000, 500000, 24, 60, 0, 18, 0.1),
(5, 2, 6, '1574924085.png', 'ឥណទានសម្រាប់ប្រើប្រាស់', 'CONSUMER LOAN', '<p>ឥណទានសម្រាប់ប្រើប្រាស់ គឺសម្រាប់លោកអ្នកដែលមានបំណងចង់ទិញសម្ភារៈប្រើប្រាស់ក្នុងគេហដ្ឋាន&nbsp;ឬរបស់របរផ្ទាល់ខ្លួនដូចជាយានយន្ត កុំព្យូទ័រ គ្រឿងសង្ហារឹម ទូទឹកកក ទូរទស្សន៍ ម៉ាស៊ីនភ្លើងជាដើម។ <strong><em>ពួកគាត ក៏អាចប្រើប្រាស់ប្រាក់កម្ចីនេះ ដើម្បីបង់ថ្លៃសាលាសាកលវិទ្យាល័យនិង ការសិក្សាក្រោយឧត្តមសិក្សាដើម្បីបង្កើន សមត្ថភាពសមាជិកគ្រួសារ។</em></strong></p>', '<p>Consumer&nbsp;Loan is for individuals intending to purchase household equipment or personal items, such as a vehicle, a computer, some furniture, a refrigerator, a television, a generator, etc. <strong><em>They can also use this loan to pay for tuition fees, university and post-graduate studies to enhance family\'s member capacity.&nbsp;</em></strong></p>', '<h4>អត្ថប្រយោជន៍</h4>\n<p>&nbsp;&nbsp;<span style=\"color: #003366;\">◾</span> សួរសំនួរងាយៗ និងការអនុម័តឆាប់រហ័ស</p>\n<p>&nbsp;&nbsp;◾ អត្រាការប្រាក់ប្រែប្រួល</p>\n<p>&nbsp;&nbsp;◾ ឥណទានមានភាពងាយស្រួល និងបត់បែន</p>\n<h4>លក្ខខណ្ឌដើម្បីទទួលបានប្រាក់កម្ចី</h4>\n<p>&nbsp;&nbsp;◾ អតិថិជនមានអាយុចាប់ពី ១៨ ទៅ ៦៥ឆ្នាំ</p>\n<p>&nbsp;&nbsp;◾ អាជីវកម្មរក្សាបាននូវបរិស្ថានល្អ និងស្របច្បាប់នៃព្រះរាជាណាចក្រកម្ពុជា</p>\n<p>&nbsp;&nbsp;◾ មានលទ្ធភាពសងប្រាក់ប្រចាំខែ ៥០% នៃចំណូលសុទ្ធ</p>', '<h4>Benefit</h4>\n<p>&nbsp;&nbsp;◾ Convenient enquirer and fast approval<br /> &nbsp;&nbsp;◾ Variable interest rate<br /> &nbsp;&nbsp;◾ Flexible loan tenor</p>\n<h4>Eligibility</h4>\n<p>&nbsp;&nbsp;◾ Borrow of 18 - 65 years old <br /> &nbsp;&nbsp;◾ Legal, harmless business(not an environmentally or social damaging business) <br /> &nbsp;&nbsp;◾ Monthly loan repayment capacity(Principal and Interest) 50 % of net Income</p>', '<table class=\"table table-hover\">\n<thead>\n<tr>\n<th scope=\"col\">លរ</th>\n<th scope=\"col\">ការពិពណ៌នា</th>\n<th scope=\"col\">ទំហំកម្ចី</th>\n</tr>\n</thead>\n<tbody>\n<tr>\n<th scope=\"row\">១</th>\n<td>ចំនួនទឹកប្រាក់កម្ចី</td>\n<td>\n<p>ចាប់ពី ២០,០០០,០០០ រៀល</p>\n<p>៥,០០០ ដុល្លារអាមេរិក</p>\n</td>\n</tr>\n<tr>\n<th scope=\"row\">២</th>\n<td>អត្រាការប្រាក់</td>\n<td>១.៥0%</td>\n</tr>\n<tr>\n<th scope=\"row\">៣</th>\n<td>រយៈពេលកម្ចី</td>\n<td>៦ ខែ ទៅ ២៤ ខែ</td>\n</tr>\n</tbody>\n</table>\n<p>&nbsp;</p>', '<table class=\"table table-hover\">\n<thead>\n<tr>\n<th scope=\"col\">No</th>\n<th scope=\"col\">Description</th>\n<th scope=\"col\">Variances</th>\n</tr>\n</thead>\n<tbody>\n<tr>\n<th scope=\"row\">1</th>\n<td>Loan Amount</td>\n<td>\n<p>KHR 20,000,000</p>\n<p>USD 5,000</p>\n</td>\n</tr>\n<tr>\n<th scope=\"row\">2</th>\n<td>Loan Interest Rates</td>\n<td>1.50%</td>\n</tr>\n<tr>\n<th scope=\"row\">3</th>\n<td>Loan Durations</td>\n<td>6&nbsp;months - 24 months</td>\n</tr>\n</tbody>\n</table>', '<table class=\"table table-hover\">\n<thead></thead>\n<tbody>\n<tr>\n<th style=\"width: 50px;\">១</th>\n<td>អត្តសញ្ញាណប័ណ្ណថតចម្លង សៀវភៅគ្រួសារថតចម្លង&nbsp;សៀវភៅស្នាក់នៅថតចម្លង</td>\n</tr>\n<tr>\n<th>២</th>\n<td>លិខិតកិច្ចសន្យាការងារ និងអត្តសញ្ញាណប័ណ្ណ​មន្ត្រីរាជការ​ស៊ីវិល ឬ អត្តសញ្ញាណប័ណ្ណ​/​កាតការងារ</td>\n</tr>\n<tr>\n<th>៣</th>\n<td>របាយការណ៍ហិរញ្ញវត្ថុបញ្ជាក់ពីប្រាក់ចំណូល និងចំណាយរបស់អាជីវកម្ម (រយៈពេលមួយឆ្នាំចុងក្រោយ) ប័ណ្ណបញ្ជាក់ប្រាក់បៀវត្ស របាយការណ៍ប្រាក់បៀវត្សពីធនាគារ</td>\n</tr>\n<tr>\n<th>៤</th>\n<td>ឯកសារទិញ (កិច្ចព្រមព្រៀងទិញ-លក់ វិក្ក័យប័ត្រ បង្កាន់ដៃ កំណត់សំគាល់ការដឹកជញ្ជូន និងឯកសារពាក់ព័ន្ធផ្សេងៗ... )</td>\n</tr>\n<tr>\n<th>៥</th>\n<td>ឯកសារដែលបានចុះបញ្ជី ប្រសិនបើជា​​ ម៉ូតូ/រថយន្ត (ច្បាប់ដើមរក្សាទុកនៅ​ KC)</td>\n</tr>\n</tbody>\n</table>\n<p>***យើងខ្ញុំ សូមរក្សាសិទ្ធក្នុងការកែប្រែរាល់ប្រការខាងលើដោយមិនបាច់ជូនដំណឹងជាមុន។</p>', '<table class=\"table table-hover\">\n<thead></thead>\n<tbody>\n<tr>\n<th style=\"width: 50px;\">1</th>\n<td>Copy of ID card(s), family book,&nbsp;or residential book</td>\n</tr>\n<tr>\n<th>2</th>\n<td>Employment contract and civil servant ID or employment ID</td>\n</tr>\n<tr>\n<th>3</th>\n<td>Financial report on incomes and expenses (One year), pay slip, bank statement, etc</td>\n</tr>\n<tr>\n<th>4</th>\n<td>Purchase documents (SPA, Invoice, receipt, delivery note, etc...)</td>\n</tr>\n<tr>\n<th>5</th>\n<td>Registration documents, if motor/vehicle (KC keeps original)</td>\n</tr>\n</tbody>\n</table>\n<p>&nbsp;* Terms and conditions are subject to change at the KC MFI sole discretion without prior notice to customer</p>', 1, 'ការផ្តល់ជូនប្រាក់កម្ចីរហូតដល់​ ៥,០០០ ដុល្លារអាមេរិក​​​រយៈពេលរហូតដល់ ២៤​ខែ ជាមួយនឹងអត្រាការប្រាក់ដែលមានការប្រកួតប្រជែង', 'Loan amount up to USD 5,000, term up to 24 months with competitive interest', '1576123826.jpg', 1, '2019-12-17', 0, 'ឥណទានសម្រាប់ប្រើប្រាស់', 'CONSUMER-LOAN', 'ផលិតផល​-និងសេវា', 'PRODUCT-AND-SERVICE', 'rgba(0,0,0,0.5)', 4000000, 200000000, 1000, 500000, 1, 24, 0, 18, 0.1),
(6, 2, 4, '1574924093.png', 'ឥណទានគេហដ្ឋាន', 'HOUSING LOAN', '<p>ឥណទានគេហដ្ឋាន ផ្តល់ជូនដល់បុគ្គលិកបម្រើការងារ វិនិយោគិនអាជីវកម្មខ្នាតតូច​បំផុត និងតូច ក៏ដូចជាប្រជាកសិករ&nbsp;ដែលបម្រើការងារ និងប្រកបអាជីវកម្មនៅតំបន់ជនបទ តំបន់ពាក់កណ្តាលទីក្រុង និងតំបន់ជាយក្រុង ជាមួយប្រាក់ចំណូលទៀង​ទា​ត់ចន្លោះពី ៥០០ ​ដុល្លារអាមេរិក ទៅ ២,០០០ ដុល្លារអាមេរិកក្នុងមួយខែ សម្រាប់ទិញគេហដ្ឋាន ឬសាងសង់គេហដ្ឋានថ្មីនៅលើដីដែលជាកម្មសិទ្ធិរបស់ខ្លួន។</p>', '<p>Housing Loan provides individuals salary earner, micro and small entrepreneurs and farmer who have regular income between USD 500 to USD 2,000 per month at rural, semi-urban and suburb to buy or build new house on their ownership land.</p>', '<h4>អត្ថប្រយោជន៍</h4>\n<p>&nbsp; ◾ សួរសំនួរងាយៗ និងការអនុម័តឆាប់រហ័ស</p>\n<p>&nbsp;&nbsp;◾ អត្រាការប្រាក់ប្រែប្រួល</p>\n<p>&nbsp;&nbsp;◾ ឥណទានមានភាពងាយស្រួល និងបត់បែន</p>\n<h4>លក្ខខណ្ឌដើម្បីទទួលបានប្រាក់កម្ចី</h4>\n<p>&nbsp;&nbsp;◾ ជានីតិជនមានអាយុចាប់ពី ១៨ ទៅ ៦៥ឆ្នាំ</p>\n<p>&nbsp;&nbsp;◾ មានអាជីវកម្មផ្ទាល់ខ្លួន ត្រឹមត្រូវ រក្សាបាននូវបរិស្ថានល្អ និងស្របច្បាប់ ដែលមានប្រាក់ចំណូលទៀងទាត់&nbsp;&nbsp;</p>\n<p>&nbsp;&nbsp;◾ ជាបុគ្គលិកក្រុមហ៊ុន ស្ថាប័នឯកជន/រដ្ឋ</p>', '<h4>Benefit</h4>\n<p>&nbsp;&nbsp;◾ Convenient enquirer and fast approval<br /> &nbsp;&nbsp;◾ Variable interest rate<br /> &nbsp;&nbsp;◾ Flexible loan tenor</p>\n<h4>Eligibility</h4>\n<p>&nbsp;&nbsp;◾ Be a majority of aged 18 to 65 years old <br /> &nbsp;&nbsp;◾ Self-employed of legal, harmless business(not an environmentally or socially damaging business)and make stable income <br /> &nbsp;&nbsp;◾ Individual who&rsquo;s working for reputable companies/institutions</p>', '<table class=\"table table-hover\">\n<thead>\n<tr>\n<th style=\"width: 20px;\" scope=\"col\">លរ</th>\n<th style=\"width: 127px;\" scope=\"col\">ការពិពណ៌នា</th>\n<th style=\"width: 106.333px;\" scope=\"col\">ទំហំកម្ចី</th>\n</tr>\n</thead>\n<tbody>\n<tr>\n<th style=\"width: 20px;\" scope=\"row\">១</th>\n<td style=\"width: 127px;\">ចំនួនទឹកប្រាក់កម្ចី</td>\n<td style=\"width: 106.333px;\">\n<p>២,៨០០,០០០,០០០ រៀល</p>\n<p>៧០០,០០០ ដុល្លារអាមេរិក</p>\n</td>\n</tr>\n<tr>\n<th style=\"width: 20px;\" scope=\"row\">២</th>\n<td style=\"width: 127px;\">អត្រាការប្រាក់</td>\n<td style=\"width: 106.333px;\">០.៦៥%</td>\n</tr>\n<tr>\n<th style=\"width: 20px;\" scope=\"row\">៣</th>\n<td style=\"width: 127px;\">រយៈពេលកម្ចី</td>\n<td style=\"width: 106.333px;\">\n<p>៦០ ខែ ទៅ ១៨០ ខែ</p>\n</td>\n</tr>\n</tbody>\n</table>\n<p>&nbsp;</p>', '<table class=\"table table-hover\">\n<thead>\n<tr style=\"height: 17px;\">\n<th style=\"width: 20px; height: 17px;\" scope=\"col\">No</th>\n<th style=\"width: 134.867px; height: 17px;\" scope=\"col\">Description</th>\n<th style=\"width: 127.133px; height: 17px;\" scope=\"col\">Variances</th>\n</tr>\n</thead>\n<tbody>\n<tr style=\"height: 76px;\">\n<th style=\"width: 20px; height: 76px;\" scope=\"row\">1</th>\n<td style=\"width: 134.867px; height: 76px;\">Loan Amount</td>\n<td style=\"width: 127.133px; height: 76px;\">\n<p>KHR 2,800,000,000</p>\n<p>USD 700,000</p>\n</td>\n</tr>\n<tr style=\"height: 24px;\">\n<th style=\"width: 20px; height: 24px;\" scope=\"row\">2</th>\n<td style=\"width: 134.867px; height: 24px;\">Loan Interest Rates</td>\n<td style=\"width: 127.133px; height: 24px;\">0.65%</td>\n</tr>\n<tr style=\"height: 15px;\">\n<th style=\"width: 20px; height: 15px;\" scope=\"row\">3</th>\n<td style=\"width: 134.867px; height: 15px;\">Loan Duration</td>\n<td style=\"width: 127.133px; height: 15px;\">\n<p>60 months - 180 months</p>\n</td>\n</tr>\n</tbody>\n</table>\n<p>&nbsp;</p>', '<table class=\"table table-hover\">\n<thead></thead>\n<tbody>\n<tr>\n<th style=\"width: 50px;\">១</th>\n<td>អត្តសញ្ញាណប័ណ្ណថតចម្លង ឬ សៀវភៅគ្រួសារថតចម្លង ឬ សៀវភៅស្នាក់នៅថតចម្លង</td>\n</tr>\n<tr>\n<th>២</th>\n<td>លិខិតកិច្ចសន្យាការងារ និងអត្តសញ្ញាណប័ណ្ណ​មន្ត្រីរាជការ​ស៊ីវិល ឬ អត្តសញ្ញាណប័ណ្ណ​/​កាតការងារ</td>\n</tr>\n<tr>\n<th>៣</th>\n<td>របាយការណ៍ហិរញ្ញវត្ថុបញ្ជាក់ពីប្រាក់ចំណូល និងចំណាយរបស់អាជីវកម្ម (រយៈពេលមួយឆ្នាំចុងក្រោយ) ប័ណ្ណបញ្ជាក់ប្រាក់បៀវត្ស របាយការណ៍ប្រាក់បៀវត្សពីធនាគារ</td>\n</tr>\n<tr>\n<th>៤</th>\n<td>ឯកសារទិញ (កិច្ចព្រមព្រៀងទិញ-លក់ វិក្ក័យប័ត្រ បង្កាន់ដៃ កំណត់សំគាល់ការដឹកជញ្ជូន និងឯកសារពាក់ព័ន្ធផ្សេងៗ... )</td>\n</tr>\n</tbody>\n</table>\n<p>***យើងខ្ញុំ សូមរក្សាសិទ្ធក្នុងការកែប្រែរាល់ប្រការខាងលើដោយមិនបាច់ជូនដំណឹងជាមុន។</p>', '<table class=\"table table-hover\">\n<thead></thead>\n<tbody>\n<tr>\n<th style=\"width: 50px;\">1</th>\n<td>Copy of ID card(s), family book, or residential book</td>\n</tr>\n<tr>\n<th>2</th>\n<td>Employment contract and civil servant ID or employment ID</td>\n</tr>\n<tr>\n<th>3</th>\n<td>Financial report on incomes and expenses (One year), pay slip, bank statement, etc</td>\n</tr>\n<tr>\n<th>4</th>\n<td>Purchase documents (SPA, invoice, receipt, delivery note, etc...)</td>\n</tr>\n</tbody>\n</table>\n<p>&nbsp;* Terms and conditions are subject to change at the KC MFI sole discretion without prior notice to customer</p>', 1, 'ប្រាក់កម្ចីទិញផ្ទះ ផ្តល់ជូនរហូតដល់ ៧០០,០០០ ដុល្លារអាមេរិករយៈពេល​រហូតដល់ ១៨០ខែ ជាមួយនឹងអត្រាការប្រាក់ប្រកួតប្រជែង', 'Loan amount up to USD​ 700,000, term up​ to 180 months with competitive interest rate', '1576809388.jpg', 1, '2019-12-20', 0, 'ឥណទានគេហដ្ឋាន', 'HOUSING-LOAN', 'ផលិតផល​-និងសេវា', 'PRODUCT-AND-SERVICE', 'rgba(228,0,127,0.5)', 4000000, 2800000000, 1000, 700000, 60, 180, 0, 18, 0.1),
(7, 2, 5, '1574924109.png', 'ឥណទានប្រើប្រាស់ផ្ទាល់ខ្លួន', 'PERSONAL LOAN', '<p>ឥណទានប្រើប្រាស់ផ្ទាល់ខ្លួន ផ្តល់ជូនដល់បុគ្គលិកបម្រើការងារ វិនិយោគិនខ្នាតតូច​​បំផុត និងវិនិយោគិនខ្នាតតូច ក៏ដូចជាប្រជាកសិករដែលទទួលបានប្រាក់ចំណូលជាប្រចាំចន្លោះពី ៥០០ ដុល្លារអាមេរិក ទៅ ១,០០០ ដុល្លារអាមេរិកក្នុងមួយខែ ដើម្បីទទួលប្រាក់កម្ចីសម្រាប់តម្រូវការហិរញ្ញវត្ថុផ្ទាល់ខ្លួន។ បុគ្គលិកបម្រើការងារ អាចទទួលបានប្រាក់កម្ចីរហូតទៅដល់ ៥ ដងនៃប្រាក់បៀវត្សរ៍ប្រចាំខែ (ប្រាក់បៀវត្សសុទ្ធបន្ទាប់ពីកាត់ពន្ធ) សម្រាប់រយៈពេលខ្ចីចំនួន ២៤ ខែ។</p>', '<p>Personal Loan provides individuals salary earner, micro and small entrepreneurs and farmer, who have regular income between USD 500 to USD 1,000 per month, borrow for personal financial need. Any salary earning individual can get loan amount up to 5 times of monthly salary (net salary after tax) for 24 months term.</p>', '<h4>អត្ថប្រយោជន៍</h4>\n<p>&nbsp; ◾ សួរសំនួរងាយៗ និងការអនុម័តឆាប់រហ័ស</p>\n<p>&nbsp;&nbsp;◾ អត្រាការប្រាក់ប្រែប្រួល</p>\n<p>&nbsp;&nbsp;◾ ឥណទានមានភាពងាយស្រួល និងបត់បែន</p>\n<h4>លក្ខខណ្ឌដើម្បីទទួលបានប្រាក់កម្ចី</h4>\n<p>&nbsp;&nbsp;◾ ជានីតិជនមានអាយុចាប់ពី ១៨ ទៅ ៦៥ឆ្នាំ</p>\n<p>&nbsp;&nbsp;◾ មានអាជីវកម្មផ្ទាល់ខ្លួន ត្រឹមត្រូវ រក្សាបាននូវបរិស្ថានល្អ និងស្របច្បាប់ ដែលមានប្រាក់ចំណូលទៀងទាត់&nbsp;&nbsp;</p>\n<p>&nbsp;&nbsp;◾ ជាបុគ្គលិកក្រុមហ៊ុន ស្ថាប័នឯកជន/រដ្ឋ</p>', '<h4>Benefit</h4>\n<p>&nbsp;&nbsp;◾ Convenient enquirer and fast approval<br /> &nbsp;&nbsp;◾ Variable interest rate<br /> &nbsp;&nbsp;◾ Flexible loan tenor</p>\n<h4>Eligibility</h4>\n<p>&nbsp;&nbsp;◾ Be a majority of aged 18 to 65 years old <br /> &nbsp;&nbsp;◾ Self-employed of legal, harmless business(not an environmentally or socially damaging business)and make stable income <br /> &nbsp;&nbsp;◾ Individual who&rsquo;s working for reputable companies/institutions</p>', '<table class=\"table table-hover\">\n<thead>\n<tr>\n<th style=\"width: 20px;\" scope=\"col\">លរ</th>\n<th style=\"width: 127px;\" scope=\"col\">ការពិពណ៌នា</th>\n<th style=\"width: 106.333px;\" scope=\"col\">ទំហំកម្ចី</th>\n</tr>\n</thead>\n<tbody>\n<tr>\n<th style=\"width: 20px;\" scope=\"\">១</th>\n<td style=\"width: 127px;\">ចំនួនទឹកប្រាក់កម្ចី</td>\n<td style=\"width: 106.333px;\">\n<p>២០,០០០,០០០ រៀល</p>\n<p>៥,០០០ ដុល្លារអាមេរិក</p>\n</td>\n</tr>\n<tr>\n<th style=\"width: 20px;\" scope=\"row\">២</th>\n<td style=\"width: 127px;\">អត្រាការប្រាក់</td>\n<td style=\"width: 106.333px;\">១.៥%</td>\n</tr>\n<tr>\n<th style=\"width: 20px;\" scope=\"row\">៣</th>\n<td style=\"width: 127px;\">រយៈពេលកម្ចី</td>\n<td style=\"width: 106.333px;\">\n<p>៦ខែ ទៅ ២៤ខែ</p>\n</td>\n</tr>\n</tbody>\n</table>\n<p>&nbsp;</p>', '<table class=\"table table-hover\">\n<thead>\n<tr style=\"height: 17px;\">\n<th style=\"width: 20px; height: 17px;\" scope=\"col\">No</th>\n<th style=\"width: 134.867px; height: 17px;\" scope=\"col\">Description</th>\n<th style=\"width: 127.133px; height: 17px;\" scope=\"col\">Variances</th>\n</tr>\n</thead>\n<tbody>\n<tr style=\"height: 76px;\">\n<th style=\"width: 20px; height: 76px;\" scope=\"row\">1</th>\n<td style=\"width: 134.867px; height: 76px;\">Loan Amount</td>\n<td style=\"width: 127.133px; height: 76px;\">\n<p>KHR 20,000,000</p>\n<p>USD 5,000</p>\n</td>\n</tr>\n<tr style=\"height: 24px;\">\n<th style=\"width: 20px; height: 24px;\" scope=\"row\">2</th>\n<td style=\"width: 134.867px; height: 24px;\">Loan Interest Rates</td>\n<td style=\"width: 127.133px; height: 24px;\">1.5%</td>\n</tr>\n<tr style=\"height: 15px;\">\n<th style=\"width: 20px; height: 15px;\" scope=\"row\">3</th>\n<td style=\"width: 134.867px; height: 15px;\">Loan Duration</td>\n<td style=\"width: 127.133px; height: 15px;\">\n<p>6 months -&nbsp;24 months</p>\n</td>\n</tr>\n</tbody>\n</table>\n<p>&nbsp;</p>', '<table class=\"table table-hover\">\n<thead></thead>\n<tbody>\n<tr>\n<th style=\"width: 50px;\">១</th>\n<td>អត្តសញ្ញាណប័ណ្ណថតចម្លង ឬ សៀវភៅគ្រួសារថតចម្លង ឬ សៀវភៅស្នាក់នៅថតចម្លង</td>\n</tr>\n<tr>\n<th>២</th>\n<td>លិខិតកិច្ចសន្យាការងារ និងអត្តសញ្ញាណប័ណ្ណ​មន្ត្រីរាជការ​ស៊ីវិល ឬ អត្តសញ្ញាណប័ណ្ណ​/​កាតការងារ</td>\n</tr>\n<tr>\n<th>៣</th>\n<td>របាយការណ៍ហិរញ្ញវត្ថុបញ្ជាក់ពីប្រាក់ចំណូល និងចំណាយរបស់អាជីវកម្ម (រយៈពេលមួយឆ្នាំចុងក្រោយ) ប័ណ្ណបញ្ជាក់ប្រាក់បៀវត្ស របាយការណ៍ប្រាក់បៀវត្សពីធនាគារ</td>\n</tr>\n</tbody>\n</table>\n<p>***យើងខ្ញុំ សូមរក្សាសិទ្ធក្នុងការកែប្រែរាល់ប្រការខាងលើដោយមិនបាច់ជូនដំណឹងជាមុន។</p>', '<table class=\"table table-hover\">\n<thead></thead>\n<tbody>\n<tr>\n<th style=\"width: 50px;\">1</th>\n<td>Copy of ID card(s), family book, or residential book</td>\n</tr>\n<tr>\n<th>2</th>\n<td>Employment contract and civil servant ID or employment ID</td>\n</tr>\n<tr>\n<th>3</th>\n<td>Financial report on incomes and expenses (One year), pay slip, bank statement, etc</td>\n</tr>\n</tbody>\n</table>\n<p>&nbsp;* Terms and conditions are subject to change at the KC MFI sole discretion without prior notice to customer</p>', 1, 'ការផ្តល់ជូន​ឥណទានរហូតដល់ ៥,០០០ ដុល្លាអាមេរិក​​ រយៈពេលរហូតដល់ ២៤​ ខែជាមួយនឹង​អត្រាការប្រាក់ប្រកួតប្រជែង', 'Loan amount up​ to USD 5,000, term up​ to 24 months with competitive interest', '1576817587.jpg', 1, '2019-12-20', 0, 'ឥណទានប្រើប្រាស់ផ្ទាល់ខ្លួន', 'PERSONAL-LOAN', 'ផលិតផល​-និងសេវា', 'PRODUCT-AND-SERVICE', 'rgba(255,241,0,0.5)', 4000000, 200000000, 1000, 500000, 3, 180, 0, 18, 0.1),
(8, 2, 7, '1574924118.png', 'ឥណទាននិស្សិត', 'STUDENT LOAN', '<p>ឥណទាននិស្សិត ផ្តល់ជូនដល់សិស្ស-និស្សិតនូវឱកាសដើម្បីទទួលបានការសិក្សាអប់រំខ្ពស់ ឬក៏វគ្គជំនាញបណ្តុះបណ្តាលច្បាស់លាស់​ដែលជួយជម្រុញដល់អនាគតរបស់ពួកគាត់ ជាពិសេសជួយសម្រួលស្ថានភាពរស់នៅរបស់សមាជិកក្នុងក្រុមគ្រួសារផងដែរ។</p>', '<p>Student&nbsp;Loan provides to students the opportunity to access to higher education/ particular training skill which would positively impact his/her future and enhance family&rsquo;s member living capacity/condition.</p>\n<div id=\"gtx-trans\" style=\"position: absolute; left: -32px; top: -14px;\">&nbsp;</div>', '<h4>អត្ថប្រយោជន៍</h4>\n<p>&nbsp;&nbsp;<span style=\"color: #003366;\">◾</span> សួរសំនួរងាយៗ និងការអនុម័តឆាប់រហ័ស</p>\n<p>&nbsp;&nbsp;◾ ឥណទានមានភាពងាយស្រួល និងបត់បែន</p>\n<p>&nbsp;&nbsp;◾ បានសិក្សានៅសាកលវិទ្យាល័យ ឬវិទ្យាស្ថានដែលមានកេរ្តិ៍ឈ្មោះ និងទទួលស្គាល់ខ្ពស់</p>\n<h4>លក្ខខណ្ឌដើម្បីទទួលបានប្រាក់កម្ចី</h4>\n<p>&nbsp;&nbsp;◾ អតិថិជនមានអាយុចាប់ពី ១៨ ទៅ ៤០ឆ្នាំ</p>\n<p>&nbsp;&nbsp;◾ ត្រូវមានអ្នករួមកម្ចី អាចជាបុគ្គលិកក្រុមហ៊ុន ឬស្ថាប័ននានាដែលមានប្រាក់ចំណូលស្ថេរភាព</p>\n<p>&nbsp;&nbsp;◾ មានលទ្ធភាពសងប្រាក់ប្រចាំខែ ៥០% ធៀបទៅនឹងចំនូលសុទ្ធ</p>', '<h4>Benefit</h4>\n<p>&nbsp;&nbsp;◾ Convenient enquirer and fast approval<br /> &nbsp;&nbsp;◾ Variable interest rate<br /> &nbsp;&nbsp;◾ Flexible loan tenor</p>\n<h4>Eligibility</h4>\n<p>&nbsp;&nbsp;◾ Borrow of 18 - 65 years old <br /> &nbsp;&nbsp;◾ Legal, harmless business(not an environmentally or social damaging business) <br /> &nbsp;&nbsp;◾ Monthly loan repayment capacity(Principal and Interest) 50 % of net Income</p>', '<table class=\"table table-hover table-responsive\">\n<thead>\n<tr>\n<th scope=\"col\">លរ</th>\n<th scope=\"col\">ការពិពណ៌នា</th>\n<th scope=\"col\">ទំហំកម្ចី</th>\n</tr>\n</thead>\n<tbody>\n<tr>\n<th scope=\"row\">១</th>\n<td>ចំនួនទឹកប្រាក់កម្ចី</td>\n<td>\n<p>២០,០០០,០០០ រៀល</p>\n<p>៥,០០០ ដុល្លារអាមេរិក</p>\n</td>\n</tr>\n<tr>\n<th scope=\"row\">២</th>\n<td>អត្រាការប្រាក់</td>\n<td>១.៥0%</td>\n</tr>\n<tr>\n<th scope=\"row\">៣</th>\n<td>រយៈពេលកម្ចី</td>\n<td>៦ ខែ ទៅ ២៤ ខែ</td>\n</tr>\n</tbody>\n</table>\n<p>&nbsp;</p>', '<table class=\"table table-hover table-responsive\">\n<thead>\n<tr>\n<th scope=\"col\">No</th>\n<th scope=\"col\">Description</th>\n<th scope=\"col\">Variances</th>\n</tr>\n</thead>\n<tbody>\n<tr>\n<th scope=\"row\">1</th>\n<td>Loan Amount</td>\n<td>\n<p>KHR 20,000,000 - KHR 800,000,000</p>\n<p>USD 5,000 - USD 200,000</p>\n</td>\n</tr>\n<tr>\n<th scope=\"row\">2</th>\n<td>Loan Interest Rates</td>\n<td>1.00% - 1.50%</td>\n</tr>\n<tr>\n<th scope=\"row\">3</th>\n<td>Loan Durations</td>\n<td>3 months -&nbsp;24 months</td>\n</tr>\n</tbody>\n</table>', '<table class=\"table table-hover table-responsive\">\n<thead>\n<tr>\n<th scope=\"col\">លរ</th>\n<th scope=\"col\">ការពិពណ៌នា</th>\n<th scope=\"col\">&nbsp;</th>\n</tr>\n</thead>\n<tbody>\n<tr>\n<th scope=\"row\">១</th>\n<td>ឯកសារផ្លូវច្បាប់</td>\n<td>\n<p style=\"font-weight: 400;\">&rArr; &nbsp; អត្តសញ្ញាណប័ណ្ណថតចម្លង ប័ណ្ណសៀវភៅគ្រួសារថតចម្លង លិខិតបញ្ជាក់អាសយដ្ឋានបច្ចុប្បន្នពីអាជ្ញាធរមូលដ្ឋាន ប័ណ្ណសំគាល់ខ្លួនបុគ្គលិក (ប្រសិនបើធ្វើការ)</p>\n<p style=\"font-weight: 400;\">&rArr; &nbsp; អត្តសញ្ញាណប័ណ្ណនិស្សិត ប្រសិនបើបានចុះឈ្មោះរួចហើយ</p>\n</td>\n</tr>\n<tr>\n<th scope=\"row\">២</th>\n<td>ឯកសារបញ្ជាក់នៃការអប់រំ</td>\n<td>\n<p style=\"font-weight: 400;\">&rArr; &nbsp; សញ្ញាប័ត្រផ្នែកអប់រំទូទៅ (ជាធម្មតាបានបញ្ចប់ការសិក្សានៅវិទ្យាល័យ)</p>\n<p style=\"font-weight: 400;\">&rArr; &nbsp; លិខិតបញ្ជាក់ពីក្រសួង / គណៈរដ្ឋមន្ត្រីអប់រំ (ក្នុងករណីដែលមិនទាន់មានសញ្ញាបត្រ)</p>\n</td>\n</tr>\n<tr>\n<th scope=\"row\">៣</th>\n<td>ឯកសារបញ្ជាក់ពីចំណូល</td>\n<td>\n<p style=\"font-weight: 400;\">&rArr; &nbsp; សិស្សម្នាក់ៗ (បើមានការងារ) និងអ្នករួមខ្ចីប្រាក់ (បើសិនជានិយោជិក): កិច្ចសន្យាការងារ&nbsp;លិខិតបញ្ជាក់ការងារ អត្តសញ្ញាណប័ណ្ណ នាមប័ណ្ណប័ណ្ណ លិខិតបញ្ជាក់ប្រាក់បៀវត្ស របាយការណ៍ប្រាក់បៀវត្សពីធនាគារ។ល។</p>\n<p style=\"font-weight: 400;\">&rArr; &nbsp; ឯកសារពីអាជីវកម្មប្រសិនបើអ្នករួមខ្ចីប្រាក់ ប្រកបរអាជីវកម្ម: វិក័យប័ត្រ បង្កាន់ដៃរ បាយការណ៍ ចំណូល/ចំណាយ</p>\n</td>\n</tr>\n<tr>\n<th scope=\"row\">៤</th>\n<td>ឯកសារចុះឈ្មោះចូលរៀន</td>\n<td>\n<p style=\"font-weight: 400;\">&rArr; &nbsp; ពាក្យស្នើរសុំសិក្សាពីសាកលវិទ្យាល័យ</p>\n<p style=\"font-weight: 400;\">&rArr; &nbsp; សំនើរព្រៀង ឬ វិក័យប័ត្រ បង្កាន់ដៃបង់ប្រាក់ (ប្រសិនបើទើបតែបង់/ចុះឈ្មោះចូលរៀន)</p>\n</td>\n</tr>\n</tbody>\n</table>\n<p>&nbsp;*** យើងខ្ញុំរក្សាសិទ្ធិក្នុងការកែប្រែរាល់ប្រការខាងលើដោយមិនបាច់ជូនដំណឹងជាមុន។</p>', '<table class=\"table table-hover table-responsive\">\n<thead>\n<tr>\n<th scope=\"col\">No</th>\n<th scope=\"col\">Description</th>\n<th scope=\"col\">&nbsp;</th>\n</tr>\n</thead>\n<tbody>\n<tr>\n<th scope=\"row\">1</th>\n<td>Legal Documents</td>\n<td>\n<p style=\"font-weight: 400;\">&rArr; &nbsp;ID card copy(s),family book,current address confirmation from local authority,employee\'s​​ ID card (if working)</p>\n<p style=\"font-weight: 400;\">&rArr; &nbsp; Student ID card,if enrolled already</p>\n</td>\n</tr>\n<tr>\n<th scope=\"row\">២</th>\n<td>Proof Of Education</td>\n<td>\n<p style=\"font-weight: 400;\">&rArr; &nbsp; Diploma of general education (normally finished high school)</p>\n<p style=\"font-weight: 400;\">&rArr; &nbsp; Confirmation letter from Ministry/Cabinet of Education (in case diploma was not yet issue/granted)</p>\n</td>\n</tr>\n<tr>\n<th scope=\"row\">៣</th>\n<td>Proof Of Income</td>\n<td>\n<p style=\"font-weight: 400;\">&rArr; &nbsp; Individual student (if working) and co-borrower (if an employee): employment contract, employee ID card, name card, pay slips, bank statement,etc&hellip;</p>\n<p style=\"font-weight: 400;\">&rArr; &nbsp; From business if co-borrower doing business:(invoice,receipt,income/expense report)</p>\n</td>\n</tr>\n<tr>\n<th scope=\"row\">៤</th>\n<td>Enrollment Documents</td>\n<td>\n<p style=\"font-weight: 400;\">&rArr; &nbsp; Study proposal from university</p>\n<p style=\"font-weight: 400;\">&rArr; &nbsp; Quotation or invoice,receipt (if already recently paid/enrolled)</p>\n</td>\n</tr>\n</tbody>\n</table>\n<p>&nbsp;*** Terms and conditions are subject to change at the KC MFI sole discretion without prior notice to customer</p>', 0, 'ការផ្តល់ជូនប្រាក់កម្ចីរហូតដល់​ ២០០,០០០ ដុល្លាអាមេរិក​​​រយៈពេលរហូតដល់ ២៤​​ខែ ជាមួយនឹងអត្រាការប្រាក់ ដែលមានការប្រកួតប្រជែង', 'Amount up to USD 200,000, term up to 24 months with competitive interest.', '1576123476.jpg', 1, '2019-12-19', 0, 'ឥណទាននិស្សិត', 'STUDENT-LOAN', 'ផលិតផល​-និងសេវា', 'PRODUCT-AND-SERVICE', 'rgba(0,0,0,0.5)', 4000000, 200000000, 1000, 500000, 3, 180, 0, 18, 0.1),
(9, 2, 3, '1575603567.png', 'ឥណទានខុនដូ', 'CONDO LOAN', '<p>ឥណទានខុនដូ គឺជាផលិតផលមួយដែលផ្តល់ជូនបុគ្គលិកបម្រើការងារ វិនិយោគិនខ្នាតតូច​​បំផុត និងវិនិយោគិនខ្នាតតូច ក៏ដូចជាវិនិយោគិនបរទេសដែលមានប្រាក់ចំណូលជាប្រចាំចាប់ពី ២,000 ដុល្លារអាមេរិក ទៅ ៥,000 ដុល្លារអាមេរិកក្នុងមួយខែសម្រាប់ទិញខុនដូ។</p>', '<p>Condo Loan is another product to provide individuals Salary Earner, micro and small entrepreneurs as well as foreigner/investor who have regular income between USD 2,000 to USD 5,000 per month to purchase condo unit(s).</p>', '<h4>អត្ថប្រយោជន៍</h4>\n<p>&nbsp;&nbsp;◾ សួរសំនួរងាយៗ និងការអនុម័តឆាប់រហ័ស</p>\n<p>&nbsp;&nbsp;◾ អត្រាការប្រាក់ប្រែប្រួល</p>\n<p>&nbsp;&nbsp;◾ ឥណទានមានភាពងាយស្រួល និងបត់បែន</p>\n<h4>លក្ខខណ្ឌដើម្បីទទួលបានប្រាក់កម្ចី</h4>\n<p>&nbsp;&nbsp;◾ ជានីតិជនមានអាយុចាប់ពី ១៨ ទៅ ៦៥ឆ្នាំ</p>\n<p>&nbsp;&nbsp;◾ អាជីវកម្មរក្សាបាននូវបរិស្ថានល្អ និងស្របច្បាប់នៃព្រះរាជាណាចក្រកម្ពុជា</p>\n<p>&nbsp;&nbsp;◾ ជាបុគ្គលិកក្រុមហ៊ុន ស្ថាប័នឯកជន/រដ្ឋ</p>', '<h4>Benefit</h4>\n<p>&nbsp;&nbsp;◾ Convenient enquirer and fast approval<br /> &nbsp;&nbsp;◾ Variable interest rate<br /> &nbsp;&nbsp;◾ Flexible loan tenor</p>\n<h4>Eligibility</h4>\n<p>&nbsp;&nbsp;◾ Be a majority of aged 18 to 65 years old <br /> &nbsp;&nbsp;◾ Legal, harmless business (not an environmentally or social damaging business) <br /> &nbsp;&nbsp;◾ Individual who&rsquo;s working for reputable companies/institutions</p>', '<table class=\"table table-hover\">\n<thead>\n<tr>\n<th style=\"width: 20px;\" scope=\"col\">លរ</th>\n<th style=\"width: 127px;\" scope=\"col\">ការពិពណ៌នា</th>\n<th style=\"width: 106.333px;\" scope=\"col\">ទំហំកម្ចី</th>\n</tr>\n</thead>\n<tbody>\n<tr>\n<th style=\"width: 20px;\" scope=\"row\">១</th>\n<td style=\"width: 127px;\">ចំនួនទឹកប្រាក់កម្ចី</td>\n<td style=\"width: 106.333px;\">\n<p>៨០០,០០០,០០០ រៀល</p>\n<p>២០០,០០០ ដុល្លារអាមេរិក</p>\n</td>\n</tr>\n<tr>\n<th style=\"width: 20px;\" scope=\"row\">២</th>\n<td style=\"width: 127px;\">អត្រាការប្រាក់</td>\n<td style=\"width: 106.333px;\">០.៦៥%</td>\n</tr>\n<tr>\n<th style=\"width: 20px;\" scope=\"row\">៣</th>\n<td style=\"width: 127px;\">រយៈពេលកម្ចី</td>\n<td style=\"width: 106.333px;\">\n<p>៦០ ខែ ទៅ ១៨០ ខែ</p>\n</td>\n</tr>\n</tbody>\n</table>\n<p>&nbsp;</p>', '<table class=\"table table-hover\">\n<thead>\n<tr style=\"height: 17px;\">\n<th style=\"width: 20px; height: 17px;\" scope=\"col\">No</th>\n<th style=\"width: 134.867px; height: 17px;\" scope=\"col\">Description</th>\n<th style=\"width: 127.133px; height: 17px;\" scope=\"col\">Variances</th>\n</tr>\n</thead>\n<tbody>\n<tr style=\"height: 76px;\">\n<th style=\"width: 20px; height: 76px;\" scope=\"row\">1</th>\n<td style=\"width: 134.867px; height: 76px;\">Loan Amount</td>\n<td style=\"width: 127.133px; height: 76px;\">\n<p>KHR 800,000,000</p>\n<p>USD 200,000</p>\n</td>\n</tr>\n<tr style=\"height: 24px;\">\n<th style=\"width: 20px; height: 24px;\" scope=\"row\">2</th>\n<td style=\"width: 134.867px; height: 24px;\">Loan Interest Rates</td>\n<td style=\"width: 127.133px; height: 24px;\">0.65%</td>\n</tr>\n<tr style=\"height: 15px;\">\n<th style=\"width: 20px; height: 15px;\" scope=\"row\">3</th>\n<td style=\"width: 134.867px; height: 15px;\">Loan Duration</td>\n<td style=\"width: 127.133px; height: 15px;\">\n<p>60 months - 180 months</p>\n</td>\n</tr>\n</tbody>\n</table>\n<p>&nbsp;</p>', '<table class=\"table table-hover\">\n<thead></thead>\n<tbody>\n<tr>\n<th style=\"width: 50px;\">១</th>\n<td>អត្តសញ្ញាណប័ណ្ណថតចម្លង ឬ សៀវភៅគ្រួសារថតចម្លង ឬ សៀវភៅស្នាក់នៅថតចម្លង</td>\n</tr>\n<tr>\n<th>២</th>\n<td>លិខិតកិច្ចសន្យាការងារ និងអត្តសញ្ញាណប័ណ្ណ​មន្ត្រីរាជការ​ស៊ីវិល ឬ អត្តសញ្ញាណប័ណ្ណ​/​កាតការងារ</td>\n</tr>\n<tr>\n<th>៣</th>\n<td>របាយការណ៍ហិរញ្ញវត្ថុបញ្ជាក់ពីប្រាក់ចំណូល និងចំណាយរបស់អាជីវកម្ម (រយៈពេលមួយឆ្នាំចុងក្រោយ) ប័ណ្ណបញ្ជាក់ប្រាក់បៀវត្ស របាយការណ៍ប្រាក់បៀវត្សពីធនាគារ</td>\n</tr>\n<tr>\n<th>៤</th>\n<td>ឯកសារទិញ (កិច្ចព្រមព្រៀងទិញ-លក់ វិក្ក័យប័ត្រ បង្កាន់ដៃ កំណត់សំគាល់ការដឹកជញ្ជូន និងឯកសារពាក់ព័ន្ធផ្សេងៗ... )</td>\n</tr>\n<tr>\n<th>៥</th>\n<td>អាជ្ញាប័ណ្ណសាងសង់ និងអាជ្ញាប័ណ្ណអ្នកអភិវឌ្ឍន៍</td>\n</tr>\n</tbody>\n</table>\n<p>***យើងខ្ញុំ សូមរក្សាសិទ្ធក្នុងការកែប្រែរាល់ប្រការខាងលើដោយមិនបាច់ជូនដំណឹងជាមុន។</p>', '<table class=\"table table-hover\">\n<thead></thead>\n<tbody>\n<tr>\n<th style=\"width: 50px;\">1</th>\n<td>Copy of ID card(s), family book, or residential book</td>\n</tr>\n<tr>\n<th>2</th>\n<td>Employment contract and civil servant ID or employment ID</td>\n</tr>\n<tr>\n<th>3</th>\n<td>Financial report on incomes and expenses (One year), pay slip, bank statement, etc</td>\n</tr>\n<tr>\n<th>4</th>\n<td>Purchase documents (SPA, invoice, receipt, delivery note, etc...)</td>\n</tr>\n<tr>\n<th>5</th>\n<td>Construction permit and developer license</td>\n</tr>\n</tbody>\n</table>\n<p>&nbsp;* Terms and conditions are subject to change at the KC MFI sole discretion without prior notice to customer</p>', 1, 'ការផ្តល់ជូនឥណនាទាន​រហូតដល់ ២០០,០០​០ ដុល្លារអាមេរិក រយៈពេលរហូតដល់ទៅ ១៨០ខែ ជាមួយនឹងអត្រាការប្រាក់ប្រកួតប្រជែង', 'Loan provide up to USD​ 200,000, term up to 180 months with competitive interest rate​!!!!', '1576562956.png', 1, '2019-12-17', 0, 'ឥណទានខុនដូ', 'CONDO-LOAN', 'ផលិតផល​-និងសេវា', 'PRODUCT-AND-SERVICE', 'rgba(0,0,0,0.5)', 4000000, 200000000, 1000, 500000, 3, 180, 0, 18, 0.1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_public_holiday`
--

DROP TABLE IF EXISTS `tbl_public_holiday`;
CREATE TABLE IF NOT EXISTS `tbl_public_holiday` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `od` int(11) NOT NULL,
  `date_kh` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `date_en` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `title_kh` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `title_en` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `uid` int(11) NOT NULL,
  `created_at` date NOT NULL,
  `is_disable` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_public_holiday`
--

INSERT INTO `tbl_public_holiday` (`id`, `od`, `date_kh`, `date_en`, `title_kh`, `title_en`, `uid`, `created_at`, `is_disable`) VALUES
(1, 1, 'មករា ០១​', 'January 01', 'ទិវាចូលឆ្នាំសាកល', 'International New Year Day', 1, '2019-12-06', 0),
(2, 2, 'មករា ០៧', 'January 07', 'ទិវា​ជ័យជម្នះ​លើ​របប​ប្រល័យ​ពូជ​សាសន៍', 'Victory Over Genocide Day', 1, '2019-12-06', 0),
(3, 3, 'មីនា ០8', 'March 08', 'ទិវានារីអន្តរជាតិ', 'International Women\'s Day', 1, '2019-12-06', 0),
(4, 4, 'មេសា ១៣-១៦', 'April 13-16', 'ទិវាបុណ្យចូលឆ្នាំថ្មី ប្រពៃណីជាតិខ្មែរ', 'Khmer New Year Day', 1, '2019-12-06', 0),
(5, 5, 'ឧសភា ០១', 'May 01', 'ទិវាពលកម្មអន្តរជាតិ', 'International Labor Day', 1, '2019-12-06', 0),
(6, 6, 'ឧសភា ០៦', 'May 06', 'ពិធីបុណ្យវិសាខបូជា', 'Visak Bochea Day', 1, '2019-12-06', 0),
(7, 7, 'ឧសភា ១១', 'May 11', 'ព្រះរាជពិធីច្រត់ព្រះនង្គ័ល', 'Royal Plowing Ceremony Day', 1, '2019-12-06', 0),
(8, 8, 'ឧសភា ១៤', 'May 14', 'ព្រះរាជពិធីបុណ្យចម្រើនព្រះជន្ម ព្រះករុណា ព្រះបាទសម្តេចព្រះបរមនាថនរោត្តម សីហមុនី ព្រះមហាក្សត្រ នៃព្រះរាជាណាចក្រកម្ពុជា', 'King Norodom Sihamoni\'s Birthday', 1, '2019-12-06', 0),
(9, 9, 'មិថុនា ១៨', 'June 18', 'ព្រះរាជពិធីបុណ្យចម្រើនព្រះជន្ម សម្តេចព្រះមហាក្សត្រី នរោត្តម មុនីនាថសីហនុ ព្រះវររាជមាតា ជាតិខ្មែរ', 'Queen Norodom Monineath Sihanouk\'s Birthday', 1, '2019-12-06', 0),
(10, 10, 'កញ្ញា ១៦-១៨', 'September 16-18', 'ពិធីបុណ្យភ្ជុំបិណ្ឌ', 'Pchum Ben Day', 1, '2019-12-06', 0),
(11, 12, 'តុលា ១៥', 'October 15', 'ទិវាប្រារព្ធពិធីគោរពព្រះវិញ្ញាណក្ខន្ធ ព្រះករុណា ព្រះបាទសម្តេចនរោត្តម សីហមុនី ព្រះមហាវីរក្សត្រ ព្រះវរាជបីតា ឯករាជ្យបូរណភាពទឹកដី និងឯកភាពជាតិខ្មែរ ព្រះបរមរតនកោដ្ឋ', 'Commemoration Day of Fomer King Norodom', 1, '2019-12-06', 0),
(12, 13, 'តុលា ២៩', 'October 29', 'ព្រះរាជពិធីគ្រងព្រះបរមរាជសម្បត្តិរបស់ ព្រះករុណា ព្រះបាទសម្តេចព្រះបរមនាថនរោត្តម សីហមុនី ព្រះមហាក្សត្រ នៃព្រះរាជាណាចក្រកម្ពុជា', 'King Norodom Sihamoni\'s Coronation Day', 1, '2019-12-06', 0),
(13, 14, 'តុលា ៣០-៣១ - វិច្ឆិកា ០២', 'October 30-31 - November 02', 'ព្រះរាជពិធីបុណ្យអ៊ុំទូក បណ្តែតប្រទីប និងសំពះព្រះខែ អកអំបុក', 'Water Festival Day', 1, '2019-12-06', 0),
(14, 15, 'វិច្ឆិកា ០៩', 'November 09', 'ពិធីបុណ្យឯករាជ្យជាតិ', 'Independent Day', 1, '2019-12-06', 0),
(15, 11, 'កញ្ញា ២៤', 'September 24', 'ទិវាប្រកាសរដ្ឋធម្មនុញ្ញ', 'Constitutional Day', 1, '2019-12-06', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_type`
--

DROP TABLE IF EXISTS `tbl_type`;
CREATE TABLE IF NOT EXISTS `tbl_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name_kh` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `name_en` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `name_link_kh` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `name_link_en` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `is_disable` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_type`
--

INSERT INTO `tbl_type` (`id`, `name_kh`, `name_en`, `name_link_kh`, `name_link_en`, `is_disable`) VALUES
(0, 'ទំព័រដើម', 'HOME', 'home', 'home', 0),
(1, 'អំពីយើង', 'ABOUT US', 'អំពីយើង', 'ABOUT-US', 0),
(2, 'ផលិតផល​ និងសេវា', 'PRODUCT & SERVICE', 'ផលិតផល​-និងសេវា', 'PRODUCT-AND-SERVICE', 0),
(3, 'ព័ត៌មាន', 'MEDIA', 'ព័ត៌មាន', 'MEDIA', 0),
(4, 'វិជ្ជាជីវៈ', 'CAREER', 'វិជ្ជាជីវៈ', 'CAREER', 0),
(16, 'ទំនាក់ទំនង', 'CONTACT', 'ទំនាក់ទំនងយើង', 'contact', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

DROP TABLE IF EXISTS `tbl_user`;
CREATE TABLE IF NOT EXISTS `tbl_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `photo` text COLLATE utf8_unicode_ci NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_disable` tinyint(1) NOT NULL,
  `created_ate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `name`, `password`, `photo`, `role_id`, `is_disable`, `created_ate`) VALUES
(1, 'admin', '202cb962ac59075b964b07152d234b70', 'test.png', 1, 0, '2019-07-26 00:00:00'),
(2, 'user', '202cb962ac59075b964b07152d234b70', 'admin.png', 2, 0, '2019-07-26 00:00:00');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
