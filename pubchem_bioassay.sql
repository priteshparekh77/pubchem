-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 19, 2014 at 09:39 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `pubchem_bioassay`
--

-- --------------------------------------------------------

--
-- Table structure for table `bioassay_concise`
--

CREATE TABLE IF NOT EXISTS `bioassay_concise` (
  `Pb_SID` int(10) NOT NULL,
  `Pb_CID` int(10) NOT NULL,
  `Pb_Actvt_Otcom` varchar(100) NOT NULL,
  `Pb_Actvt_Score` int(10) NOT NULL,
  `Pb_Actvt_Url` varchar(1000) NOT NULL,
  `Pb_AssayData_Cmt` varchar(1000) NOT NULL,
  `Pb_Active_Con` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bioassay_concise`
--

INSERT INTO `bioassay_concise` (`Pb_SID`, `Pb_CID`, `Pb_Actvt_Otcom`, `Pb_Actvt_Score`, `Pb_Actvt_Url`, `Pb_AssayData_Cmt`, `Pb_Active_Con`) VALUES
(501886, 0, 'Inactive', 40, 'http://dtp.nci.nih.gov/dtpstandard/servlet/doseresponse?searchtype=NSC&searchlist=644189&systemname=NCI+Cancer&idn1=1&idn2=1', '', ''),
(501887, 0, 'Inactive', 48, 'http://dtp.nci.nih.gov/dtpstandard/servlet/doseresponse?searchtype=NSC&searchlist=644191&systemname=NCI+Cancer&idn1=1&idn2=1', '', ''),
(501890, 370697, 'Inactive', 40, 'http://dtp.nci.nih.gov/dtpstandard/servlet/doseresponse?searchtype=NSC&searchlist=644194&systemname=NCI+Cancer&idn1=1&idn2=1', '', ''),
(501891, 370698, 'Inactive', 40, 'http://dtp.nci.nih.gov/dtpstandard/servlet/doseresponse?searchtype=NSC&searchlist=644195&systemname=NCI+Cancer&idn1=1&idn2=1', '', ''),
(501892, 370699, 'Inactive', 40, 'http://dtp.nci.nih.gov/dtpstandard/servlet/doseresponse?searchtype=NSC&searchlist=644196&systemname=NCI+Cancer&idn1=1&idn2=1', '', ''),
(501893, 5466840, 'Inactive', 40, 'http://dtp.nci.nih.gov/dtpstandard/servlet/doseresponse?searchtype=NSC&searchlist=644197&systemname=NCI+Cancer&idn1=1&idn2=1', '', ''),
(501894, 370701, 'Inactive', 43, 'http://dtp.nci.nih.gov/dtpstandard/servlet/doseresponse?searchtype=NSC&searchlist=644198&systemname=NCI+Cancer&idn1=1&idn2=1', '', ''),
(501895, 370702, 'Inactive', 40, 'http://dtp.nci.nih.gov/dtpstandard/servlet/doseresponse?searchtype=NSC&searchlist=644199&systemname=NCI+Cancer&idn1=1&idn2=1', '', ''),
(501896, 370703, 'Inactive', 40, 'http://dtp.nci.nih.gov/dtpstandard/servlet/doseresponse?searchtype=NSC&searchlist=644200&systemname=NCI+Cancer&idn1=1&idn2=1', '', ''),
(501897, 370704, 'Inactive', 40, 'http://dtp.nci.nih.gov/dtpstandard/servlet/doseresponse?searchtype=NSC&searchlist=644201&systemname=NCI+Cancer&idn1=1&idn2=1', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `compound`
--

CREATE TABLE IF NOT EXISTS `compound` (
  `Pb_SID` int(100) NOT NULL,
  `CID` int(100) NOT NULL,
  `Info` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE IF NOT EXISTS `data` (
  `Pb_SID` int(100) NOT NULL,
  `Sub_Name` varchar(1000) NOT NULL,
  `Sub_Syno` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`Pb_SID`, `Sub_Name`, `Sub_Syno`) VALUES
(67107, 'picolinic acid ', 'picolinic acid &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\n2-Pyridinecarboxylic acid &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\n2-Carboxypyridineo-Pyridinecarboxylic acid98-98-6.alpha.-Pyridinecarboxylic acidNSC171NSC-171 ... see more options \n\n\n'),
(67107, 'picolinic acid ', 'picolinic acid &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\n2-Pyridinecarboxylic acid &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\n2-Carboxypyridineo-Pyridinecarboxylic acid98-98-6.alpha.-Pyridinecarboxylic acidNSC171NSC-171 ... see more options \n\n\n'),
(67121, 'cycloheximide ', 'cycloheximide &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\nCicloheximide &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\nKakenHizarocinNaramycinActidionActidoneNeocycloheximideACTIDIONE &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\nActispray ... see all 29\n\n\n'),
(67107, 'picolinic acid ', 'picolinic acid &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\n2-Pyridinecarboxylic acid &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\n2-Carboxypyridineo-Pyridinecarboxylic acid98-98-6.alpha.-Pyridinecarboxylic acidNSC171NSC-171 ... see more options \n\n\n'),
(67107, 'picolinic acid ', 'picolinic acid &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\n2-Pyridinecarboxylic acid &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\n2-Carboxypyridineo-Pyridinecarboxylic acid98-98-6.alpha.-Pyridinecarboxylic acidNSC171NSC-171 ... see more options \n\n\n'),
(67107, 'picolinic acid ', 'picolinic acid &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\n2-Pyridinecarboxylic acid &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\n2-Carboxypyridineo-Pyridinecarboxylic acid98-98-6.alpha.-Pyridinecarboxylic acidNSC171NSC-171 ... see more options \n\n\n'),
(67122, 'citrinin ', 'citrinin &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\nAntimycin &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\nCitriainNSC186NSC-186518-75-2WLN: T66 CO HV AUT&J D1 E1 G1 IVQ JQ3H-2-Benzopyran-7-carboxylic acid,6-dihydro-8-hydroxy-3,4,5-trimethyl-6-oxo-, (3R-trans)- ... see more options \n\n\n'),
(101309, '', 'NSC48956NSC-489566639-91-4 ... see more options \n\n\n');

-- --------------------------------------------------------

--
-- Table structure for table `datacom`
--

CREATE TABLE IF NOT EXISTS `datacom` (
  `Info` varchar(1000) NOT NULL,
  `CID` int(100) NOT NULL,
  `Pb_SID` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `datacom`
--

INSERT INTO `datacom` (`Info`, `CID`, `Pb_SID`) VALUES
('Depositor-Supplied Synonyms\npicolinic acid &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\n2-Pyridinecarboxylic acid &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\nPyridine-2-carboxylic acid &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\n2-Picolinic acid98-98-62-Carboxypyridinepicolinate &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\nalpha-Picolinic acido-Pyridinecarboxylic acidPYRIDINECARBOXYLIC ACID ... see all 129\n\n\nCompound Information\nCID 1018Create Date: 2004-09-16DescriptorsIUPAC Name: pyridine-2-carboxylic acidInChI: InChI=1S/C6H5NO2/c8-6(9)5-3-1-2-4-7-5/h1-4H,(H,8,9)InChIKey: SIOXPEMLGUPBBT-UHFFFAOYSA-NCanonical SMILES : C1=CC=NC(=C1)C(=O)O\n\n\n', 1018, 67107),
('Depositor-Supplied Synonyms\npicolinic acid &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\n2-Pyridinecarboxylic acid &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\nPyridine-2-carboxylic acid &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\n2-Picolinic acid98-98-62-Carboxypyridinealpha-Picolinic acidpicolinate &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\no-Pyridinecarboxylic acidPYRIDINECARBOXYLIC ACID ... see all 131\n\n\nCompound Information\nCID 1018Create Date: 2004-09-16DescriptorsIUPAC Name: pyridine-2-carboxylic acidInChI: InChI=1S/C6H5NO2/c8-6(9)5-3-1-2-4-7-5/h1-4H,(H,8,9)InChIKey: SIOXPEMLGUPBBT-UHFFFAOYSA-NCanonical SMILES : C1=CC=NC(=C1)C(=O)O\n\n\n', 1018, 67107);

-- --------------------------------------------------------

--
-- Table structure for table `substance`
--

CREATE TABLE IF NOT EXISTS `substance` (
  `ID` int(100) NOT NULL AUTO_INCREMENT,
  `Sub_Name` varchar(100) NOT NULL,
  `Sub_Syno` varchar(10000) NOT NULL,
  `Compound_Info` varchar(10000) NOT NULL,
  `BioAssay_Info` varchar(1000) NOT NULL,
  `Pb_SID` int(100) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `UserID` int(5) NOT NULL AUTO_INCREMENT,
  `Username` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL,
  PRIMARY KEY (`UserID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`UserID`, `Username`, `Password`) VALUES
(1, 'pritesh', '0'),
(2, 'pritesh', '0'),
(3, 'a', 'a'),
(4, '', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
