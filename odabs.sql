-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 08, 2022 at 01:55 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `odabs`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `id` int(255) NOT NULL,
  `pid` varchar(255) NOT NULL,
  `pname` varchar(255) NOT NULL,
  `pemail` varchar(255) NOT NULL,
  `pmobile` varchar(255) NOT NULL,
  `paddress` varchar(255) NOT NULL,
  `docid` varchar(255) NOT NULL,
  `docname` varchar(255) NOT NULL,
  `apphospital` varchar(255) NOT NULL,
  `appstarttime` varchar(255) NOT NULL,
  `appendtime` varchar(255) NOT NULL,
  `appdate` varchar(255) NOT NULL,
  `appbdate` varchar(255) NOT NULL,
  `cserial` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`id`, `pid`, `pname`, `pemail`, `pmobile`, `paddress`, `docid`, `docname`, `apphospital`, `appstarttime`, `appendtime`, `appdate`, `appbdate`, `cserial`, `status`) VALUES
(32, '1', 'User', 'user@gmail.com', '01622319140', 'Kashimpur, Gazipur, Bangladesh', '47', 'Dr. Masum Mondol', 'Konabari Popular Hospital', ' 5 PM', '7 PM', '30-12-2021', '01-01-1970', '10', 'Empty'),
(33, '1', 'User', 'user@gmail.com', '01622319140', 'Kashimpur, Gazipur, Bangladesh', '57', 'DR. KAZI ATIKUZZAMA', 'Tanha Health Care Hospital', ' 9 AM', '3 PM', '30-12-2021', '01-01-1970', '0', 'Empty'),
(34, '1', 'User', 'user@gmail.com', '01622319140', 'Kashimpur, Gazipur, Bangladesh', '62', 'Dr. Humayun Kabir ', 'Konabari Central Hospital ', ' 4 PM', '8 PM', '31-12-2021', '01-01-1970', '0', 'Empty'),
(35, '68', 'user2', 'user2@gmail.com', '01326598741', 'Gazipur sadar, Gazipur dhaka', '47', 'Dr. Masum Mondol', 'Konabari Popular Hospital', ' 5 PM', '7 PM', '30-12-2021', '01-01-1970', '10', 'Empty'),
(36, '68', 'user2', 'user2@gmail.com', '01326598741', 'Gazipur sadar, Gazipur dhaka', '61', 'Dr. Jabunnesa Ruma', 'Konabari Central Hospital ', ' 2 PM', '4 PM', '31-12-2021', '01-01-1970', '0', 'Empty'),
(37, '69', 'user3', 'user3@gmail.com', '01896542157', 'Muradnagar, comilla, Bangladesh', '47', 'Dr. Masum Mondol', 'Konabari Popular Hospital', ' 5 PM', '7 PM', '30-12-2021', '01-01-1970', '10', 'Empty'),
(38, '69', 'user3', 'user3@gmail.com', '01896542157', 'Muradnagar, comilla, Bangladesh', '47', 'Dr. Masum Mondol', 'Konabari Popular Hospital', ' 5 PM', '7 PM', '31-12-2021', '01-01-1970', '0', 'Empty'),
(39, '31', 'Ashraful Alom', 'ashraful@gmail.com', '01321546234', 'JhaloKathi, Borishal,Bangladesh', '47', 'Dr. Masum Mondol', 'Konabari Popular Hospital', ' 5 PM', '7 PM', '30-12-2021', '01-01-1970', '10', 'Empty');

-- --------------------------------------------------------

--
-- Table structure for table `blood`
--

CREATE TABLE `blood` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `bgroup` varchar(255) NOT NULL,
  `ddate` date NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blood`
--

INSERT INTO `blood` (`id`, `name`, `email`, `bgroup`, `ddate`, `mobile`, `address`) VALUES
(1, 'Ariful Haque', 'sajiba7654@gmail.com', 'O+', '0000-00-00', '01849737540', 'Kashimpur, Konabari, Gazipur'),
(2, 'Sojib Ali ', 'sojibali@gmail.com', 'B+', '2021-11-17', '01452136589', 'chapai Rajshahi bangladesh '),
(3, 'Joy', 'johirul7@gmail.com', 'A+', '0000-00-00', '01635214587', 'kashimpur, konabari, Gazipur'),
(4, 'Nazim Uddin', 'nazim@gmail.com', 'AB+', '0000-00-00', '01635214587', 'Ambug,Konabari, Kashimpur'),
(5, 'Sohug', 'sohug@gmail.com', 'A+', '0000-00-00', '01635214587', 'Norsingdi, Gazipur, DHaka'),
(6, 'rifat12', 'rifat@gamail.com', 'AB-', '0000-00-00', '01622319160', 'kasimpur, konabari, Gazipur, Dhaka'),
(7, 'Adnan', 'adnan@gmail.com', 'O+', '2021-05-08', '01635214587', 'kasimpur, konabari, Gazipur, Dhaka'),
(8, 'Shakib', 'Shakibrko7654@gmail.com', 'O+', '2021-11-16', '01423569874', 'Enayentpur,Kashimpur,Gazipur');

-- --------------------------------------------------------

--
-- Table structure for table `hospital`
--

CREATE TABLE `hospital` (
  `id` int(255) NOT NULL,
  `hname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `hotline` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `himage` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hospital`
--

INSERT INTO `hospital` (`id`, `hname`, `email`, `hotline`, `mobile`, `address`, `himage`) VALUES
(21, 'Konabari Popular Hospital', 'konabaripopularh@gmail.com', '', '01793575656', 'R.S Tower, Konabari, Gazipur', 'img/himage/konabari popular hospital.jfif'),
(22, 'Tanha Health Care Hospital', 'tanhahospital@gmail.com', '', '01722450094', 'Sofipur Bazar, Kaliakoir, Gazipur, Dhaka', 'img/himage/Tanha-Health-Care-Hospital.jpg'),
(23, ' SHEIKH FAZILATUNNESSA MUJIB MEMORIAL KPJ SPECIALIZED HOSPITAL\r\n', 'sheikhhospital@gmail.com', '0244077030, 0244077031', '01810008080', 'C/12, Tetuibari, Kasimpur Gazipur (Near DEPZ) , Bangladesh', 'img/himage/h1.jpg'),
(24, 'Konabari Central Hospital ', 'centralhospital@gmail.com', '', '01305274914', 'Sidddik Plazza, Near Uttara Bank, Konabari, Gazipur', 'img/himage/Screenshot 2021-12-23 105527.png'),
(25, 'Konabari Clinic and Diagnostic Center', 'konabariclinic@gmail.com', '', '01717234741', 'Near the old Ajmery counter, Konabari, Gazipur', 'img/himage/unnamed.png');

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

CREATE TABLE `image` (
  `id` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `myimage` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `image`
--

INSERT INTO `image` (`id`, `username`, `myimage`) VALUES
(1, 'ariful', 'image/Screenshot (4).png');

-- --------------------------------------------------------

--
-- Table structure for table `testusers`
--

CREATE TABLE `testusers` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `cpassword` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `hospital` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `speciality` varchar(255) NOT NULL,
  `Degrees` varchar(255) NOT NULL,
  `visit` varchar(255) NOT NULL,
  `startday` varchar(255) NOT NULL,
  `endday` varchar(255) NOT NULL,
  `starttime` varchar(255) NOT NULL,
  `endtime` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `testusers`
--

INSERT INTO `testusers` (`id`, `name`, `email`, `password`, `cpassword`, `mobile`, `address`, `role`, `hospital`, `image`, `speciality`, `Degrees`, `visit`, `startday`, `endday`, `starttime`, `endtime`) VALUES
(1, 'User', 'user@gmail.com', '$2y$10$ABl0jZ3fsEiw.7WB05IZ4egDo/7StxiQYDZjmh7N8.PmA4dQU9lAG', '$2y$10$qk9/x/8GQ/QzpUb2xl6fxumWuAlcx6MVZPx.uulEs20i//5QI18TO', '01622319140', 'Kashimpur, Gazipur, Bangladesh', 'user', '', '../img/00100sPORTRAIT_00100_BURST20210102151119833_COVER.jpg', '', '', '', '', '', '', ''),
(4, 'Ariful  (Super Admin)', 'superadmin@gmail.com', '$2y$10$i8yGe1TDz4QX9gvP5/SpSejWV5./6BZSDbRjfDmrSt.zfzENVycP2', '$2y$10$HpfxqpOMi9zBql2mA2/DMusG3m4OCXM8Ubb19lxh2nxGiVVsVKfDO', '01622319160', 'Gazipur,Bangladesh', 'superadmin', '', '../img/shojib3.jpg', '', '', '', '', '', '', ''),
(31, 'Ashraful Alom', 'ashraful@gmail.com', '$2y$10$yrYX0li4TpVtQCQOL0ijgu7FXLRL2D17s/GtPp2D6Fs5kscIWvv8O', '$2y$10$1drBEm1tpkS1ETe5IRHUaeLwBJjjNah8P9K8NoUNhGP8EILloIrti', '01321546234', 'JhaloKathi, Borishal,Bangladesh', 'user', '', '../img/00100sPORTRAIT_00100_BURST20200103161932018_COVER.jpg', '', '', '', '', '', '', ''),
(43, 'Johirul Islam', 'popularadminjoy@gmail.com', '$2y$10$i8hjWRitReLmPKRkCq74d.VQu2ubjrfytmt14Gel8oGXQfFHVpu2G', '$2y$10$KOzDlQoojyf2NhxgPWlaXeXT89olZle09lg9JjvL8Fz4bJKXq1vgi', '01365478954', 'Enayetpur,Kashimpur,Gazipur', 'admin', 'Konabari Popular Hospital', '../img/00100sPORTRAIT_00100_BURST20200307135616069_COVER.jpg', '', '', '', '', '', '', ''),
(44, 'Tanvir Mridha', 'sheikhfhadmin@gmail.com', '$2y$10$/YYVzLf.siB87m5jk8bao.ETn/lnHGEabdIpzvrJlRCL8XNI2mvpq', '$2y$10$MlrQ9sLjBmUxOYo9B5cUWO5xzS2BrtqsvFIMw.k7tvaCeO6W3H/DW', '01452147895', 'Carabag, Savar, Bangladesh', 'admin', ' SHEIKH FAZILATUNNESSA MUJIB MEMORIAL KPJ SPECIALIZED HOSPITAL', '../img/00100sPORTRAIT_00100_BURST20210102151119833_COVER.jpg', '', '', '', '', '', '', ''),
(45, 'Nazim Uddin', 'tanhaadminnazim@gmail.com', '$2y$10$YTRffJN9u3FNNrYaPIhQxeBDcV90nzWVpcIPN2p9as8T.k39J/GQa', '$2y$10$KugcR98rayxQnJGYMWoXFeB6O9LbemEET1qumlUdQ.wjoFDARFuW2', '01421569874', 'Konabari , kashimpur , Gazipur', 'admin', 'Tanha Health Care Hospital', '../img/00100sPORTRAIT_00100_BURST20190615102620899_COVER~2.jpg', '', '', '', '', '', '', ''),
(46, 'Sojib Ali', 'centraladmin@gmail.com', '$2y$10$Ji/2JaNBUSHGRSejeq62jutb8DzqLOqsYfodmBGd/Dm.R7RO98P9y', '$2y$10$Ec8rHhx.fUA4GxSpJ6zDOu1VWZl/SunJKIetKEiSwBjyskVTFLq2e', '01965231458', 'Chapai Nawabganj, Rajshahi', 'admin', 'Konabari Central Hospital ', '../img/00100sPORTRAIT_00100_BURST20190618120810200_COVER.jpg', '', '', '', '', '', '', ''),
(47, 'Dr. Masum Mondol', 'populardoctormasud@gmail.com', '$2y$10$RAZRt.Hj35FobWAbUpW3uOZAl4iTINnGDiKO2Sk7M.0.gamjgISCO', '$2y$10$7pSWG9Kdeh/kJGftI4.1zu/rf.mcXWFBj5Wl1x.KFVjOiJlAIAvwe', '01985621354', 'Muradnagar, comilla, Bangladesh', 'doctor', 'Konabari Popular Hospital', '../img/sasdasdasd.jpg', 'cardiologist', 'MBBS,MD(cardiology) National Institute of Cardiovascular Diseases, Bangladesh', '400', 'Friday', 'Monday', '5 PM', '7 PM'),
(48, 'Dr. Sopna Rani', 'populardoctorsopna@gmail.com', '$2y$10$v6e3Yd3AwO6XlbWZkJH6dOOWB/D3uMEE14S3soI9zcHpXnkrlMn0m', '$2y$10$EzsBCebL0d0Svsb8ynj.NeLY5jqgArIH1bWxsh.4eAHuegOk5soJO', '01321546987', 'Norsingdi, Gazipur, DHaka', 'doctor', 'Konabari Popular Hospital', '../img/fd.png', 'Gynae Specialist & Surgeon', 'M.B.B.S, B.C.S (Health) F.C.P.S (Gynae & Obs) Department of Gynae Oncology National Institute of Cancer Research & Hospital Mohakhali, Dhaka', '450', 'Friday', 'Sunday', '3 PM', '7 PM'),
(49, 'Moinuddin Ahmed', 'populardoctormoin@gmail.com', '$2y$10$v1da49I.U9JTVLo4emIIBeB7T6PPzohIl6vJvBNNAy4TS2Q919Zdu', '$2y$10$uFbxtxtweCz82lTLTmWZhOmupqGxReEJgO43nbpMXMa4YIjjsLroS', '01954632145', 'Kalihati, Tangail,Dhaka', 'doctor', 'Konabari Popular Hospital', '', 'Dental Specialist', 'BDS Rajshahi Medical College Hospital', '350', 'Saturday', 'Saturday', '9 AM', '7 PM'),
(50, 'Dr. Rafiqul Islam', 'populardoctorrafiqul@gmail.com', '$2y$10$IJzR20Gl1QUB.4I282x9UOvpG7x5/D46L0Mf6Evu1QS32NG/GIdSS', '$2y$10$aBtjleHbwa/VyNpxS8Un1.QgWtGD3f19.YKHfyEth7LVjqL0Hp7Z2', '01432564178', 'Mouchk,Gazipur,Dhaka', 'doctor', 'Konabari Popular Hospital', '../img/sasdasdasd.jpg', 'ENT Specialist', ' MBBS,FCPS (ENT) Higher Training in Ear Microsurgery & Endoscopic Sinus Surgery (India)', '400', 'Sunday', 'Tuesday', '3 PM', '8 PM'),
(51, 'Dr. Anowarul Islam', 'populardoctoranowar@gmail.com', '$2y$10$ngYJU9vtNp7lQFaiBR8gP.wv3nDCqnC6J8fsY7ZDuCG/tYTp4inSe', '$2y$10$Qefe8eVZ4HED3nCp8u3ybO77E81BmeJFMXXjWgiGe815JDv8KWYA.', '01452369874', 'Surabari, Kashimpur, Gazipur', 'doctor', 'Konabari Popular Hospital', '../img/sasdasdasd.jpg', 'Medicine Diabetics ', 'MBBS,FCPS(Medicine) International Medical college, Dhaka', '350', 'Saturday', 'Wednesday', '4 PM', '7 PM'),
(52, 'Dr. Ayesha Hasina', 'sheikhfdoctorayesha@gmail.com', '$2y$10$EjNV2W3XTapDQaA.QT6gcOL56VMmSEMWl.fKV3rrWeOAcEPFCtSua', '$2y$10$ZhHPeRmx1cprq91T20oD6.vEVrhykJSe.4aobHmhW5B.jXHJMaD4.', '01365248791', 'Surabari, Kashimpur, Gazipur', 'doctor', ' SHEIKH FAZILATUNNESSA MUJIB MEMORIAL KPJ SPECIALIZED HOSPITAL', '../img/Screenshot 2021-12-26 144015.png', 'Consultant - Neonatology & Paediatrics', 'MBBS  ( shaheed Ziaur Raman Medical College Bogra)', '500', '', '', '', ''),
(53, 'Dr. Chowdhury Mohammed Anwar', 'sheikhfdoctoranwar@gmail.com', '$2y$10$vtOqsCyQVR.Ce0VDFpd5oeRDWSb7MJx6oGDPDEDDkU87p1F8.L48G', '$2y$10$T9zJhhR4.eK62rwHRVETCOwBDs5i1bhkQ1JpKIjQ6R5yRD0mi2Gse', '01896521458', 'mohammadpur, Dhaka', 'doctor', ' SHEIKH FAZILATUNNESSA MUJIB MEMORIAL KPJ SPECIALIZED HOSPITAL', '../img/Screenshot 2021-12-26 144133.png', 'Dr. Chowdhury Mohammed Anwar', 'M.B.B.S.  MD (Gastroenterology)  MSc (UK)', '550', '', '', '', ''),
(54, 'Dr. Isat-E-Rabban', 'sheikhfdoctorisat@gmail.com', '$2y$10$xsR/SBKQrcq6JrPM.x.BTugCAcc1CwdSKAoPV.2suoMNsa8tCcEym', '$2y$10$5u0EbEcw02wY6jIivbHB2OUAftZIPNJmE0Xyk/.0G69Oa3uc5s/Xi', '01698532145', 'JhaloKathi, Borishal,Bangladesh', 'doctor', ' SHEIKH FAZILATUNNESSA MUJIB MEMORIAL KPJ SPECIALIZED HOSPITAL', '../img/Screenshot 2021-12-22 230611.png', 'Specialist - Dental Oral & Maxillofacial Surgery', 'BDS (Dhaka Dental College) FCPS (Dental Oral & Maxillofacial Surgery', '500', '', '', '', ''),
(55, 'Dr. Lt Col Md Zakir Hossain', 'sheikhfdoctorzakir@gmail.com', '$2y$10$paRLH3WhICDlvEISpz70FeCvxJPyMS7DuYsYfaL50yVSs5BZ6AG.2', '$2y$10$yj.MhjB75nbkgotPyvWVZeHTQFzmNq64H3/njRAkezSmLkHGdPZny', '01985632147', 'Baroipara, kaliakoir,Gazipur', 'doctor', ' SHEIKH FAZILATUNNESSA MUJIB MEMORIAL KPJ SPECIALIZED HOSPITAL', '../img/Screenshot 2021-12-26 144428.png', 'Consultant – ENT, Head & Neck Surgery', 'MBBS, MCPS, DLO, FCPS,(ENT), FRCS (Glasg) Fellow Facial Head & Neck Surgery (Turkey)', '600', '', '', '', ''),
(56, 'DR. FARHANA ISRAT JAHAN', 'tanhadoctorisrat@gmail.com', '$2y$10$/1xLe800Evm6tUEme1ueNOLsxLAz4Qj7EMp.3m49Bo7V3iEnNFNRa', '$2y$10$bxNDsUJ61GTJtvDjWTMADukukNdL0wHVGt03JCwfrKqpNmsHg5BV.', '01956231458', 'Rupur, Dhamrai,Savar', 'doctor', 'Tanha Health Care Hospital', '../img/fd.png', ' Gynae Specialist & Surgeon', 'M.B.B.S, B.C.S (Health) F.C.P.S (Gynae & Obs) Department of Gynae Oncology National Institute of Cancer Research & Hospital Mohakhali, Dhaka', '450', 'Saturday', 'Monday', '3 PM', '5 PM'),
(57, 'DR. KAZI ATIKUZZAMA', 'tanhadoctorkazi@gmail.com', '$2y$10$4JKwENAbRaZ3.fpIRum8Letqxs0AhR5d4/sPOfG2YsWaaJ21pr8dC', '$2y$10$PjYep5X2D/Yz40Mexd1I/uZcyWzbwPJmOGIn4AHV9twTUcPbHx3Ce', '01856321458', '14 gram, Comilla,Chittagong', 'doctor', 'Tanha Health Care Hospital', '../img/Screenshot 2021-12-26 143121.png', 'ENT & Head Neck Specialist Surgeon', ' MBBS,FCPS (ENT) Higher Training in Ear Microsurgery & Endoscopic Sinus Surgery (India)', '500', 'Tuesday', 'Wednesday', '9 AM', '3 PM'),
(58, 'DR. MD. SHAKIL AHMED', 'tanhadoctorshakil@gmail.com', '$2y$10$czjVLF.wClpG90B2h1g3YuoZHlBn3v74c41PGaDjsqdagvRCsRa8e', '$2y$10$ghGMNHu9SvLWlYomGht8SOvh5W3y2X/0NSF//CJDm3.6mpWST0yfC', '01856321547', 'Mouchk,Gazipur,Dhaka', 'doctor', 'Tanha Health Care Hospital', '../img/Screenshot 2021-12-26 143215.png', ' Genarel Physian and surgeon', 'MBBS,(Dhaka) ,PGT (Ortho RMO Tanha health care hospital', '400', 'Monday', 'Wednesday', '10 AM', '4 PM'),
(59, 'DR. MOHSHIN HOSSAIN', 'tanhadoctormohshin@gmail.com', '$2y$10$0Z97Q5V/z8ZbxPchbx2Rm.oMuI/G5mnWjbnxtsaB67KZ4/eMIvFrO', '$2y$10$oT0glM.eo5Wa.Fk39kwYyeUir0j/gZQ0oaZDr107Kwwdy0WSmkoGy', '01856231458', 'Sofipur Bazar, Kaliakoir, Gazipur, Dhaka', 'doctor', 'Tanha Health Care Hospital', '../img/Screenshot 2021-12-26 143344.png', 'Medicine & Cardiologist Specialist', 'MBBS , MD (Medicine) FCPS ( Cardiology)', '400', 'Tuesday', 'Wednesday', '6 PM', '11 PM'),
(60, 'Dr. Mahmudul Hasan', 'centraldoctormahmudul@gmail.com', '$2y$10$iMhuP8SA.rTLRQB4Vf7ysub8wTt4W7oxaW0PZVOmVgn/zU0rUZhMO', '$2y$10$3GaZKlWscu5wgn33emxDVeNkICI9FmIH.SitEL8BjS3tCAdLrRazy', '01356231458', 'Noser market, Konabari, Gazipur', 'doctor', 'Konabari Central Hospital ', '', 'ENT Specialist', 'MBBS(Dhaka), CCD,EDC(Bardem)', '400', 'Saturday', '-', '4 PM', '8 PM'),
(61, 'Dr. Jabunnesa Ruma', 'centraldoctorruma@gmail.com', '$2y$10$Oqxzj0fdD9.3JE7PxyY8r.mMhVS5eK8ml.V9CpSwBptIOvaClt6Y2', '$2y$10$a7bAJzkOrjVm5ukeVALQVu1CxhH6lJN629ok3v.EW2VeAtAYAld/e', '01325647894', 'policeline, Gazipur, Dhaka', 'doctor', 'Konabari Central Hospital ', '', 'Gynae Specialist & Surgeon', 'MBBS(DMC),BCS(Health),FCP(Gynae)', '450', 'Monday', '-', '2 PM', '4 PM'),
(62, 'Dr. Humayun Kabir ', 'centraldoctorhumayun@gmail.com', '$2y$10$nelwQ/LNybXFRp36mwgR1.arM.nxOHFurQ3EE2OkFWd5EGxHfYQBi', '$2y$10$Ox7UsOPO.wAyVcbtq5uIkuFloAscClB8peJGm3U4eIGjt3t1EcCu6', '01452365214', 'Tongi, Gazipur, Dhaka', 'doctor', 'Konabari Central Hospital ', '', 'Urologist', 'MBBS,BCS(Health),MA(Urology)', '450', 'Monday', '-', '4 PM', '8 PM'),
(63, 'Dr. Safiqul Islam', 'centraldoctorsafiqul@gmail.com', '$2y$10$0E3bvkgQ/ZFb6IokZ68ouO6JJf0CGQqBNUMZ5fY6PMrzVGzqYvUAm', '$2y$10$OYB/fAhmjdJ2GSIJcW5ABOpKp72SX1ieDlBwEDl07.3CET4i/K9N.', '01856321458', 'Pukurpar, Jirabo, Gazipur', 'doctor', 'Konabari Central Hospital ', '', 'cardiologist', 'MBBS,MD(cardiology) National Institute of Cardiovascular Diseases, Bangladesh', '500', 'Saturday', '-', '4 PM', '7 PM'),
(64, 'Masud Rana', 'clinicadminmasud@gmail.com', '$2y$10$iBqaou04AOz5cs.2Ee73sexHZnWekb8p13JJ8AvIRf3gAapT55kE6', '$2y$10$QXYHXeVLf4fP2W6ZhvGgV.bMIfaQAx4bHTFtXv94//XP9THOkPg7C', '01365478954', 'Rajshahi city, Rajshahi', 'admin', 'Konabari Clinic and Diagnostic Center', '../img/IMG_20190711_155042.jpg', '', '', '', '', '', '', ''),
(65, 'Dr. Hanif Sordar', 'clinicdoctorhanif@gmail.com', '$2y$10$t2BYkrRFJ.nCU.ON/mP0XOp/H6l.Lk5iAxZ.ChfO5uldKdrB.u2Q.', '$2y$10$/5CuOdBqOBAHWfpCd.vwNu0Rg669fP4IhgkbRGAlo2E63YkttMBJG', '01532654879', 'kasimpur, Gazipur, Dhaka', 'doctor', 'Konabari Clinic and Diagnostic Center', '', 'Radiology', 'MBBS,MD(DU)', '400', 'Sunday', '-', '4 PM', '6 PM'),
(66, 'Dr. Rakib Hossain', 'clinicdoctorrakib@gmail.com', '$2y$10$YhYT4PvNkyuw0a8tMo.Po.XsaCqLYoGOXV.UuKG9zqfLNc539ydue', '$2y$10$aMr1xAgdYc7eruocbwTIf.Ndj/TfZH8in0tx2s2Q46Ctd27nX3hMe', '01326547894', 'JhaloKathi, Borishal,Bangladesh', 'doctor', 'Konabari Clinic and Diagnostic Center', '', 'Eye Specialist', 'MBBS, PGT(eye),CCD(Birdem)', '500', 'Sunday', '-', '4 PM', '6 PM'),
(67, 'Dr. Suraiya Sultana', 'clinicdoctorsuraiya@gmail.com', '$2y$10$Vl9ZoKXk/i/oxa9KAusFk.lFkKiM9of24h/M7mrmYmeYp2f1dm/RC', '$2y$10$bDLA12J0zw5veEL8f7kf9emVMSzSV7eXexB2cU1.3arc6nQufmJCO', '01632569874', 'Muradnagar, comilla, Bangladesh', 'doctor', 'Konabari Clinic and Diagnostic Center', '', 'Gynae Specialist & Surgeon', 'MBBS(Dhaka),BCS(health)', '500', 'Saturday', '-', '10 PM', '3 PM'),
(68, 'user2', 'user2@gmail.com', '$2y$10$XR8EUntc96nmrFSVAZe4cej4v87mCXbCFKhXRLutl4IoG0qX99oFa', '$2y$10$58uJDgwio1b36Xz2pJuJAO2rjpTMqS7GhkIX8YwqnG80EscULJ5wG', '01326598741', 'Gazipur sadar, Gazipur dhaka', 'user', '', '', '', '', '', '', '', '', ''),
(69, 'user3', 'user3@gmail.com', '$2y$10$n2AFVmBUA2OyoAQsCBz/ZuDoTeJNrzXUoe2EyVybSym8bPbsF5P6O', '$2y$10$Zv92VkGwozxIEOHP8W0LievaL821nqX2lXLp5vtM/Jk3rj.poXQVa', '01896542157', 'Muradnagar, comilla, Bangladesh', 'user', '', '', '', '', '', '', '', '', ''),
(70, 'user4', 'user4@gmail.com', '$2y$10$p2qFdCdDMivZkP22Jq4areuyPPQC9yKtN3Lyri3JujOMT4e/DTJoS', '$2y$10$u5BRRfru0yi.bDF7d86B8.Z/dvDEt1CqbGQmymiqo/jZZQQAH2Rvq', '01956321458', 'Rajshahi city, Rajshahi', 'user', '', '', '', '', '', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blood`
--
ALTER TABLE `blood`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hospital`
--
ALTER TABLE `hospital`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testusers`
--
ALTER TABLE `testusers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointments`
--
ALTER TABLE `appointments`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `blood`
--
ALTER TABLE `blood`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `hospital`
--
ALTER TABLE `hospital`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `image`
--
ALTER TABLE `image`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `testusers`
--
ALTER TABLE `testusers`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
