-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 15, 2015 at 02:06 PM
-- Server version: 5.5.44-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `test_panorama`
--

-- --------------------------------------------------------

--
-- Table structure for table `BRDRequirements`
--

CREATE TABLE IF NOT EXISTS `BRDRequirements` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `BRD_ref_number` varchar(15) DEFAULT NULL,
  `BRD_date` date DEFAULT NULL,
  `approved` tinyint(1) DEFAULT NULL,
  `approved_by` varchar(40) DEFAULT NULL,
  `approval_date` date DEFAULT NULL,
  `stakeholders` varchar(122) DEFAULT NULL,
  `stakeholder_BU` varchar(100) DEFAULT NULL,
  `expected_impact_BU` varchar(100) DEFAULT NULL,
  `stakeholder_approved` tinyint(1) DEFAULT NULL,
  `stk_app_date` date DEFAULT NULL,
  `responsible` varchar(40) DEFAULT NULL,
  `accountable` varchar(40) DEFAULT NULL,
  `consulted` varchar(40) DEFAULT NULL,
  `informed` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `BRDRequirements`
--

INSERT INTO `BRDRequirements` (`id`, `BRD_ref_number`, `BRD_date`, `approved`, `approved_by`, `approval_date`, `stakeholders`, `stakeholder_BU`, `expected_impact_BU`, `stakeholder_approved`, `stk_app_date`, `responsible`, `accountable`, `consulted`, `informed`) VALUES
(-1, '_dummy1_', '2014-12-31', 1, '_dummy1_', '2014-12-31', '_dummy1_', '_dummy1_', '_dummy1_', 1, '2014-12-31', '_dummy1_', '_dummy1_', '_dummy1_', '_dummy1_'),
(0, '_dummy_', '2014-12-31', 1, '_dummy_', '2014-12-31', '_dummy_', '_dummy_', '_dummy_', 1, '2014-12-31', '_dummy_', '_dummy_', '_dummy_', '_dummy_');

-- --------------------------------------------------------

--
-- Table structure for table `CapabilitiesEnhancement`
--

CREATE TABLE IF NOT EXISTS `CapabilitiesEnhancement` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `capability_enhancement` tinyint(1) DEFAULT NULL,
  `capability_enhancement_impact_areas` varchar(150) DEFAULT NULL,
  `capability_enhancement_measurement` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `CapabilitiesEnhancement`
--

INSERT INTO `CapabilitiesEnhancement` (`id`, `capability_enhancement`, `capability_enhancement_impact_areas`, `capability_enhancement_measurement`) VALUES
(-1, 1, '_dummy1_', '_dummy1_'),
(0, 1, '_dummy_', '_dummy_');

-- --------------------------------------------------------

--
-- Table structure for table `Closure`
--

CREATE TABLE IF NOT EXISTS `Closure` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `program_closure_date` date DEFAULT NULL,
  `program_closure_comment` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `Closure`
--

INSERT INTO `Closure` (`id`, `program_closure_date`, `program_closure_comment`) VALUES
(-1, '2014-12-31', '_dummy1_'),
(0, '2014-12-31', '_dummy_');

-- --------------------------------------------------------

--
-- Table structure for table `ContentNeed`
--

CREATE TABLE IF NOT EXISTS `ContentNeed` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `content_creation_enquired` tinyint(1) DEFAULT NULL,
  `content_created_by` varchar(40) DEFAULT NULL,
  `content_approved` tinyint(1) DEFAULT NULL,
  `content_approval_by` varchar(40) DEFAULT NULL,
  `responsible` varchar(40) DEFAULT NULL,
  `accountable` varchar(40) DEFAULT NULL,
  `consulted` varchar(40) DEFAULT NULL,
  `informed` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `ContentNeed`
--

INSERT INTO `ContentNeed` (`id`, `content_creation_enquired`, `content_created_by`, `content_approved`, `content_approval_by`, `responsible`, `accountable`, `consulted`, `informed`) VALUES
(-1, 1, '_dummy1_', 1, '_dummy1_', '_dummy1_', '_dummy1_', '_dummy1_', '_dummy1_'),
(0, 1, '_dummy_', 1, '_dummy_', '_dummy_', '_dummy_', '_dummy_', '_dummy_');

-- --------------------------------------------------------

--
-- Table structure for table `CostBenefit`
--

CREATE TABLE IF NOT EXISTS `CostBenefit` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `checked_by` varchar(122) DEFAULT NULL,
  `cost_assigned_to_BU` tinyint(1) DEFAULT NULL,
  `pass_on_by` varchar(122) DEFAULT NULL,
  `cost_approval` tinyint(1) DEFAULT NULL,
  `approved_by` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `CostBenefit`
--

INSERT INTO `CostBenefit` (`id`, `checked_by`, `cost_assigned_to_BU`, `pass_on_by`, `cost_approval`, `approved_by`) VALUES
(-1, '_dummy1_', 1, '_dummy1_', 1, '_dummy1_'),
(0, '_dummy_', 1, '_dummy_', 1, '_dummy_');

-- --------------------------------------------------------

--
-- Table structure for table `GoLivePlan`
--

CREATE TABLE IF NOT EXISTS `GoLivePlan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `launch_date` date DEFAULT NULL,
  `post_launch_support_needed` tinyint(1) DEFAULT NULL,
  `post_launch_support_provided_by` varchar(40) DEFAULT NULL,
  `program_status` varchar(40) DEFAULT NULL,
  `post_launch_risk_assessment_done` tinyint(1) DEFAULT NULL,
  `post_launch_risk_assessment_done_by` varchar(40) DEFAULT NULL,
  `remarks` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `GoLivePlan`
--

INSERT INTO `GoLivePlan` (`id`, `launch_date`, `post_launch_support_needed`, `post_launch_support_provided_by`, `program_status`, `post_launch_risk_assessment_done`, `post_launch_risk_assessment_done_by`, `remarks`) VALUES
(-1, '2014-12-31', 1, '_dummy1_', '_dummy1_', 1, '_dummy1_', '_dummy1_'),
(0, '2014-12-31', 1, '_dummy_', '_dummy_', 1, '_dummy_', '_dummy_');

-- --------------------------------------------------------

--
-- Table structure for table `lineitems`
--

CREATE TABLE IF NOT EXISTS `lineitems` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `brdrequirements_id` int(11) DEFAULT NULL,
  `techdevneed_id` int(11) DEFAULT NULL,
  `contentneed_id` int(11) DEFAULT NULL,
  `trainingncommunicationplan_id` int(11) DEFAULT NULL,
  `capabilitiesenhancement_id` int(11) DEFAULT NULL,
  `costbenefit_id` int(11) DEFAULT NULL,
  `riskmitigationplan_id` int(11) DEFAULT NULL,
  `goliveplan_id` int(11) DEFAULT NULL,
  `closure_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `lineitems`
--

INSERT INTO `lineitems` (`id`, `name`, `brdrequirements_id`, `techdevneed_id`, `contentneed_id`, `trainingncommunicationplan_id`, `capabilitiesenhancement_id`, `costbenefit_id`, `riskmitigationplan_id`, `goliveplan_id`, `closure_id`) VALUES
(-1, '_dummy1_', -1, -1, -1, -1, -1, -1, -1, -1, -1),
(0, '_dummy_', 0, 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE IF NOT EXISTS `projects` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `is_active` tinyint(1) DEFAULT NULL,
  `remarks` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `name`, `is_active`, `remarks`) VALUES
(-1, '_dummy1_', 0, '_dummy1_'),
(0, '_dummy_', 0, '_dummy_');

-- --------------------------------------------------------

--
-- Table structure for table `projects_lineitems_mapping`
--

CREATE TABLE IF NOT EXISTS `projects_lineitems_mapping` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `project_id` int(11) DEFAULT NULL,
  `lineitem_id` int(11) DEFAULT NULL,
  `is_active` tinyint(1) DEFAULT NULL,
  `remarks` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `projects_lineitems_mapping`
--

INSERT INTO `projects_lineitems_mapping` (`id`, `project_id`, `lineitem_id`, `is_active`, `remarks`) VALUES
(-1, -1, -1, 0, '_dummy1_'),
(0, 0, 0, 0, '_dummy_');

-- --------------------------------------------------------

--
-- Table structure for table `RiskMitigationPlan`
--

CREATE TABLE IF NOT EXISTS `RiskMitigationPlan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `prelaunch_checklist` varchar(200) DEFAULT NULL,
  `UAT_required` tinyint(1) DEFAULT NULL,
  `UAT_conducted_by` varchar(122) DEFAULT NULL,
  `UAT_date` date DEFAULT NULL,
  `vetted_by_stakeholders` tinyint(1) DEFAULT NULL,
  `feedback_taken_from` varchar(122) DEFAULT NULL,
  `feedback` varchar(200) DEFAULT NULL,
  `feedback_incorporated` tinyint(1) DEFAULT NULL,
  `feedback_incorporation_date` date DEFAULT NULL,
  `final_UAT` varchar(40) DEFAULT NULL,
  `final_UAT_conducted_by` varchar(40) DEFAULT NULL,
  `final_sign_off` tinyint(1) DEFAULT NULL,
  `GTM_sign_off` tinyint(1) DEFAULT NULL,
  `SVP_sign_off` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `RiskMitigationPlan`
--

INSERT INTO `RiskMitigationPlan` (`id`, `prelaunch_checklist`, `UAT_required`, `UAT_conducted_by`, `UAT_date`, `vetted_by_stakeholders`, `feedback_taken_from`, `feedback`, `feedback_incorporated`, `feedback_incorporation_date`, `final_UAT`, `final_UAT_conducted_by`, `final_sign_off`, `GTM_sign_off`, `SVP_sign_off`) VALUES
(-1, '_dummy1_', 1, '_dummy1_', '2014-12-31', 1, '_dummy1_', '_dummy1_', 1, '2014-12-31', '_dummy1_', '_dummy1_', 1, 1, 1),
(0, '_dummy_', 1, '_dummy_', '2014-12-31', 1, '_dummy_', '_dummy_', 1, '2014-12-31', '_dummy_', '_dummy_', 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `TechDevNeed`
--

CREATE TABLE IF NOT EXISTS `TechDevNeed` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tech_requirement` tinyint(1) DEFAULT NULL,
  `dev_time_estimate` varchar(40) DEFAULT NULL,
  `dev_start_date` date DEFAULT NULL,
  `dev_end_date` date DEFAULT NULL,
  `responsible` varchar(40) DEFAULT NULL,
  `accountable` varchar(40) DEFAULT NULL,
  `consulted` varchar(40) DEFAULT NULL,
  `informed` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `TechDevNeed`
--

INSERT INTO `TechDevNeed` (`id`, `tech_requirement`, `dev_time_estimate`, `dev_start_date`, `dev_end_date`, `responsible`, `accountable`, `consulted`, `informed`) VALUES
(-1, 1, '_dummy1_', '2014-12-31', '2014-12-31', '_dummy1_', '_dummy1_', '_dummy1_', '_dummy1_'),
(0, 1, '_dummy_', '2014-12-31', '2014-12-31', '_dummy_', '_dummy_', '_dummy_', '_dummy_');

-- --------------------------------------------------------

--
-- Table structure for table `TrainingNCommunicationPlan`
--

CREATE TABLE IF NOT EXISTS `TrainingNCommunicationPlan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `communicated_to_user` tinyint(1) DEFAULT NULL,
  `internal_BU_communicated` varchar(122) DEFAULT NULL,
  `communication_sent_date` date DEFAULT NULL,
  `training_required` tinyint(1) DEFAULT NULL,
  `training_provided` tinyint(1) DEFAULT NULL,
  `training_start_date` date DEFAULT NULL,
  `training_end_date` date DEFAULT NULL,
  `responsible` varchar(40) DEFAULT NULL,
  `accountable` varchar(40) DEFAULT NULL,
  `consulted` varchar(40) DEFAULT NULL,
  `informed` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `TrainingNCommunicationPlan`
--

INSERT INTO `TrainingNCommunicationPlan` (`id`, `communicated_to_user`, `internal_BU_communicated`, `communication_sent_date`, `training_required`, `training_provided`, `training_start_date`, `training_end_date`, `responsible`, `accountable`, `consulted`, `informed`) VALUES
(-1, 1, '_dummy1_', '2014-12-31', 1, 1, '2014-12-31', '2014-12-31', '_dummy1_', '_dummy1_', '_dummy1_', '_dummy1_'),
(0, 1, '_dummy_', '2014-12-31', 1, 1, '2014-12-31', '2014-12-31', '_dummy_', '_dummy_', '_dummy_', '_dummy_');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
