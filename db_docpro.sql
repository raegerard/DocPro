-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 15, 2016 at 06:44 AM
-- Server version: 10.1.8-MariaDB
-- PHP Version: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_docpro`
--
CREATE DATABASE IF NOT EXISTS `db_docpro` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `db_docpro`;

-- --------------------------------------------------------

--
-- Table structure for table `banks`
--

DROP TABLE IF EXISTS `banks`;
CREATE TABLE `banks` (
  `bank_id` int(11) NOT NULL,
  `bank_code` int(11) NOT NULL,
  `bank_name` varchar(255) NOT NULL,
  `bank_shortname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `business_partners_class`
--

DROP TABLE IF EXISTS `business_partners_class`;
CREATE TABLE `business_partners_class` (
  `bp_class_id` int(11) NOT NULL,
  `bp_class_code` int(11) NOT NULL,
  `bp_class` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `business_partner_type`
--

DROP TABLE IF EXISTS `business_partner_type`;
CREATE TABLE `business_partner_type` (
  `bp_type_id` int(11) NOT NULL,
  `bp_class_code` int(11) NOT NULL,
  `bp_type` varchar(255) NOT NULL,
  `bp_type_shortname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `chart_of_accounts`
--

DROP TABLE IF EXISTS `chart_of_accounts`;
CREATE TABLE `chart_of_accounts` (
  `acc_id` int(11) NOT NULL,
  `acc_code` int(11) NOT NULL,
  `acc_name` varchar(255) NOT NULL,
  `acc_cat_code_1` int(11) NOT NULL,
  `acc_cat_code_name_1` varchar(255) NOT NULL,
  `acc_cat_code_2` int(11) NOT NULL,
  `acc_cat_code_name_2` varchar(255) NOT NULL,
  `acc_cat_code_3` int(11) NOT NULL,
  `acc_cat_code_name_3` varchar(255) NOT NULL,
  `acc_cat_code_4` int(11) NOT NULL,
  `acc_cat_code_name_4` varchar(255) NOT NULL,
  `bir_code` int(11) NOT NULL,
  `bir_acc_name` varchar(255) NOT NULL,
  `cashflow_cat_code` int(11) NOT NULL,
  `cashflow_cat` varchar(255) NOT NULL,
  `cashflow_activity_code` int(11) NOT NULL,
  `cashflow_activity` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `companies_and_branches`
--

DROP TABLE IF EXISTS `companies_and_branches`;
CREATE TABLE `companies_and_branches` (
  `bp_id` int(11) NOT NULL,
  `bp_code` int(11) NOT NULL,
  `bp_class_id` int(11) NOT NULL COMMENT 'references business_partner_class(bp_class_code)',
  `bp_type_id` int(11) NOT NULL COMMENT 'references business_partner_type(bp_type_code)',
  `co_sequence` int(11) NOT NULL,
  `bp_co_name` varchar(255) NOT NULL,
  `bp_ind_name` varchar(255) NOT NULL,
  `co_name` varchar(255) NOT NULL,
  `co_address` varchar(255) NOT NULL,
  `co_tin` int(11) NOT NULL,
  `tax_type_id` int(11) NOT NULL COMMENT 'references tax_types(tax_type_code, tax_type_shortname)'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `company_banks`
--

DROP TABLE IF EXISTS `company_banks`;
CREATE TABLE `company_banks` (
  `bank_id` int(11) NOT NULL,
  `bank_acct_code` int(11) NOT NULL,
  `bank_code` int(11) NOT NULL COMMENT 'references banks(bank_code, bank_shortname)',
  `sequence` int(11) NOT NULL,
  `bank_acct_number` int(11) NOT NULL,
  `bank_acct_class` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `company_business_partner_table`
--

DROP TABLE IF EXISTS `company_business_partner_table`;
CREATE TABLE `company_business_partner_table` (
  `bp_id` int(11) NOT NULL,
  `bp_code` int(11) NOT NULL,
  `bp_class_id` int(11) NOT NULL COMMENT 'references business_partner_class(bp_class_code, bp_class) ',
  `bp_type_id` int(11) NOT NULL COMMENT 'references business_partner_type(bp_type_code, bp_type_shortname) ',
  `seq` int(11) NOT NULL,
  `bp_name` varchar(255) NOT NULL,
  `bp_name_co` varchar(255) NOT NULL,
  `bp_name_ind` varchar(255) NOT NULL,
  `bp_shortname` varchar(255) NOT NULL,
  `bp_bus_style` varchar(255) NOT NULL,
  `bp_address` varchar(255) NOT NULL,
  `bp_tin` int(11) NOT NULL,
  `bp_particulars` varchar(255) NOT NULL,
  `trans_id` int(11) NOT NULL COMMENT 'references transaction(trans_code)',
  `trans_journ` varchar(255) NOT NULL,
  `bp_tax_code_1` int(11) NOT NULL,
  `bp_tax_code_2` int(11) NOT NULL,
  `bp_tax_code_3` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `company_chart_of_accounts`
--

DROP TABLE IF EXISTS `company_chart_of_accounts`;
CREATE TABLE `company_chart_of_accounts` (
  `acc_id` int(11) NOT NULL,
  `acc_code` int(11) NOT NULL COMMENT 'references chart_of_accounts',
  `acc_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `company_departments`
--

DROP TABLE IF EXISTS `company_departments`;
CREATE TABLE `company_departments` (
  `dept_id` int(11) NOT NULL,
  `dept_code` int(11) NOT NULL,
  `sequence` int(11) NOT NULL,
  `dept_name` varchar(255) NOT NULL,
  `dept_shortname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `company_discounts`
--

DROP TABLE IF EXISTS `company_discounts`;
CREATE TABLE `company_discounts` (
  `disc_id` int(11) NOT NULL,
  `disc_code` int(11) NOT NULL COMMENT 'references discounts(disc_code)',
  `disc_name` varchar(255) NOT NULL,
  `disco_shortname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `company_documents`
--

DROP TABLE IF EXISTS `company_documents`;
CREATE TABLE `company_documents` (
  `doc_id` int(11) NOT NULL,
  `doc_code` int(11) NOT NULL COMMENT 'references documents(doc_code)',
  `doc_seq` int(11) NOT NULL,
  `doc_class` varchar(255) NOT NULL,
  `doc_name` varchar(255) NOT NULL,
  `doc_shortname` varchar(255) NOT NULL,
  `journ_id` int(11) NOT NULL COMMENT 'references journals(journ_code, journ_shortname)'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `company_journals`
--

DROP TABLE IF EXISTS `company_journals`;
CREATE TABLE `company_journals` (
  `journ_id` int(11) NOT NULL,
  `journ_code` int(11) NOT NULL COMMENT 'references journals(journ_code)',
  `journ_shortname` varchar(255) NOT NULL,
  `journ_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `company_modes_of_payment`
--

DROP TABLE IF EXISTS `company_modes_of_payment`;
CREATE TABLE `company_modes_of_payment` (
  `pay_mode_id` int(11) NOT NULL,
  `pay_mode_code` int(11) NOT NULL COMMENT 'references taxes(tax_code)',
  `pay_mode_seq` int(11) NOT NULL,
  `pay_mode_name` varchar(255) NOT NULL,
  `pay_mod_shortname` varchar(255) NOT NULL,
  `pay_type_id` int(11) NOT NULL COMMENT 'references types_of_payment(pay_type_code, pay_type)'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `company_others`
--

DROP TABLE IF EXISTS `company_others`;
CREATE TABLE `company_others` (
  `others_id` int(11) NOT NULL,
  `others` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `company_products`
--

DROP TABLE IF EXISTS `company_products`;
CREATE TABLE `company_products` (
  `prod_id` int(11) NOT NULL,
  `prod_code` int(11) NOT NULL,
  `sequence` int(11) NOT NULL,
  `prod_name` varchar(255) NOT NULL,
  `prod_shortname` varchar(11) NOT NULL,
  `profit_cost_center_code` int(11) NOT NULL COMMENT 'references company_profit_cost_center',
  `dept_code` int(11) NOT NULL COMMENT 'references company_departments'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `company_profit_cost_centers`
--

DROP TABLE IF EXISTS `company_profit_cost_centers`;
CREATE TABLE `company_profit_cost_centers` (
  `profit_cost_center_id` int(11) NOT NULL,
  `profit_cost_center_code` int(11) NOT NULL,
  `sequence` int(11) NOT NULL,
  `profit_cost_center_name` varchar(255) NOT NULL,
  `profit_cost_center_shortname` varchar(255) NOT NULL,
  `dept_code` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `company_services`
--

DROP TABLE IF EXISTS `company_services`;
CREATE TABLE `company_services` (
  `serv_id` int(11) NOT NULL,
  `serv_code` int(11) NOT NULL,
  `sequence` int(11) NOT NULL,
  `serv_name` varchar(255) NOT NULL,
  `serv_shortname` varchar(255) NOT NULL,
  `profit_cost_center_code` int(11) NOT NULL,
  `dept_code` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `company_taxes`
--

DROP TABLE IF EXISTS `company_taxes`;
CREATE TABLE `company_taxes` (
  `tax_id` int(11) NOT NULL,
  `tax_code` int(11) NOT NULL COMMENT 'references taxes(tax_code, tax_name, tax_shortname, tax_rate, tax_base)',
  `type_seq` int(11) NOT NULL,
  `tax_type_id` int(11) NOT NULL COMMENT 'references tax_types(tax_type_code, tax_type_shortname)'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `company_types_of_payment`
--

DROP TABLE IF EXISTS `company_types_of_payment`;
CREATE TABLE `company_types_of_payment` (
  `pay_type_id` int(11) NOT NULL,
  `pay_type_code` int(11) NOT NULL,
  `pay_type_name` varchar(255) NOT NULL,
  `account_code` int(11) NOT NULL,
  `account_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `discounts`
--

DROP TABLE IF EXISTS `discounts`;
CREATE TABLE `discounts` (
  `disc_id` int(11) NOT NULL,
  `disc_code` int(11) NOT NULL,
  `disc_name` varchar(255) NOT NULL,
  `disco_shortname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `documents`
--

DROP TABLE IF EXISTS `documents`;
CREATE TABLE `documents` (
  `doc_id` int(11) NOT NULL,
  `doc_code` int(11) NOT NULL,
  `doc_seq` int(11) NOT NULL,
  `doc_class` varchar(255) NOT NULL,
  `doc_name` varchar(255) NOT NULL,
  `doc_shortname` varchar(255) NOT NULL,
  `journ_id` int(11) NOT NULL COMMENT 'references journal(journ_name, journ_shortname)'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `journals`
--

DROP TABLE IF EXISTS `journals`;
CREATE TABLE `journals` (
  `journ_id` int(11) NOT NULL,
  `journ_code` int(11) NOT NULL,
  `journ_name` varchar(255) NOT NULL,
  `journ_shortname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `modes_of_payment`
--

DROP TABLE IF EXISTS `modes_of_payment`;
CREATE TABLE `modes_of_payment` (
  `pay_mode_id` int(11) NOT NULL,
  `pay_mode_code` int(11) NOT NULL,
  `pay_mode_seq` int(11) NOT NULL,
  `pay_mod_name` varchar(255) NOT NULL,
  `pay_mod_shortname` varchar(255) NOT NULL,
  `pay_type_id` int(11) NOT NULL COMMENT 'references types_of_payment(pay_type_code, pay_type)'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `taxes`
--

DROP TABLE IF EXISTS `taxes`;
CREATE TABLE `taxes` (
  `tax_id` int(11) NOT NULL,
  `tax_code` int(11) NOT NULL,
  `tax_type_id` int(11) NOT NULL COMMENT 'references tax_types(tax_type_code, tax_type_shortname)',
  `tax_seq` int(11) NOT NULL,
  `tax_name` varchar(255) NOT NULL,
  `tax_shortname` varchar(255) NOT NULL,
  `tax_rate` int(255) NOT NULL,
  `tax_base` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tax_types`
--

DROP TABLE IF EXISTS `tax_types`;
CREATE TABLE `tax_types` (
  `tax_type_id` int(11) NOT NULL,
  `tax_type_code` int(11) NOT NULL,
  `tax_type_name` varchar(255) NOT NULL,
  `tax_type_shortname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

DROP TABLE IF EXISTS `transaction`;
CREATE TABLE `transaction` (
  `trans_id` int(11) NOT NULL,
  `trans_code` int(11) NOT NULL,
  `journ_id` int(11) NOT NULL COMMENT 'references journals(journ_code, journ_shortname)',
  `trans_cat_code` int(11) NOT NULL,
  `trans_category` varchar(255) NOT NULL,
  `trans_nature_code` int(11) NOT NULL,
  `trans_nature` varchar(255) NOT NULL,
  `entry_seq` int(11) NOT NULL,
  `acc_code` int(11) NOT NULL,
  `acc_name` varchar(255) NOT NULL,
  `factor` varchar(255) NOT NULL,
  `basis` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `transaction_journal_entries`
--

DROP TABLE IF EXISTS `transaction_journal_entries`;
CREATE TABLE `transaction_journal_entries` (
  `trans_entry_id` int(11) NOT NULL,
  `trans_entry_code` int(11) NOT NULL,
  `journ_code` int(11) NOT NULL,
  `journ_shortname` varchar(255) NOT NULL,
  `trans_class_code` int(11) NOT NULL,
  `trans_class` varchar(255) NOT NULL,
  `nature_seq` int(11) NOT NULL,
  `trans_nature` varchar(255) NOT NULL,
  `entry_seq` int(11) NOT NULL,
  `acc_code` int(11) NOT NULL,
  `acc_name` varchar(255) NOT NULL,
  `factor` varchar(255) NOT NULL,
  `basis` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `types_of_payment`
--

DROP TABLE IF EXISTS `types_of_payment`;
CREATE TABLE `types_of_payment` (
  `pay_type_id` int(11) NOT NULL,
  `pay_type_code` int(11) NOT NULL,
  `pay_type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_code` int(11) NOT NULL,
  `user_sequence` int(11) NOT NULL,
  `bp_id` int(11) NOT NULL COMMENT 'reference companies_and_branches(bp_code, co_name)',
  `user_level` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_accounts`
--

DROP TABLE IF EXISTS `user_accounts`;
CREATE TABLE `user_accounts` (
  `ua_id` int(255) NOT NULL,
  `ua_username` varchar(255) NOT NULL,
  `ua_password` varchar(255) NOT NULL,
  `ua_password_text` varchar(255) NOT NULL,
  `ua_status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_accounts`
--

INSERT INTO `user_accounts` (`ua_id`, `ua_username`, `ua_password`, `ua_password_text`, `ua_status`) VALUES
(1, 'admin', '$2y$12$lsP3k28KqmdPxDpUvp3rweLmDlH.FHAtPbFz998xG8c7o.7zZP4Ae', 'admin', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banks`
--
ALTER TABLE `banks`
  ADD PRIMARY KEY (`bank_id`),
  ADD UNIQUE KEY `bank_code` (`bank_code`);

--
-- Indexes for table `business_partners_class`
--
ALTER TABLE `business_partners_class`
  ADD PRIMARY KEY (`bp_class_id`),
  ADD UNIQUE KEY `bp_class_code` (`bp_class_code`);

--
-- Indexes for table `business_partner_type`
--
ALTER TABLE `business_partner_type`
  ADD PRIMARY KEY (`bp_type_id`),
  ADD UNIQUE KEY `bp_class_code` (`bp_class_code`);

--
-- Indexes for table `chart_of_accounts`
--
ALTER TABLE `chart_of_accounts`
  ADD PRIMARY KEY (`acc_id`),
  ADD UNIQUE KEY `acc_code` (`acc_code`);

--
-- Indexes for table `companies_and_branches`
--
ALTER TABLE `companies_and_branches`
  ADD PRIMARY KEY (`bp_id`),
  ADD UNIQUE KEY `bp_code` (`bp_code`),
  ADD KEY `bp_class_id` (`bp_class_id`),
  ADD KEY `bp_type_id` (`bp_type_id`),
  ADD KEY `tax_type_id` (`tax_type_id`);

--
-- Indexes for table `company_banks`
--
ALTER TABLE `company_banks`
  ADD PRIMARY KEY (`bank_id`),
  ADD UNIQUE KEY `bank_acct_code` (`bank_acct_code`),
  ADD KEY `bank_code` (`bank_code`);

--
-- Indexes for table `company_business_partner_table`
--
ALTER TABLE `company_business_partner_table`
  ADD PRIMARY KEY (`bp_id`),
  ADD UNIQUE KEY `bp_code` (`bp_code`),
  ADD KEY `bp_class_id` (`bp_class_id`),
  ADD KEY `bp_type_id` (`bp_type_id`),
  ADD KEY `trans_id` (`trans_id`);

--
-- Indexes for table `company_chart_of_accounts`
--
ALTER TABLE `company_chart_of_accounts`
  ADD PRIMARY KEY (`acc_id`),
  ADD UNIQUE KEY `acc_code` (`acc_code`),
  ADD KEY `acc_code_2` (`acc_code`);

--
-- Indexes for table `company_departments`
--
ALTER TABLE `company_departments`
  ADD PRIMARY KEY (`dept_id`),
  ADD UNIQUE KEY `dept_code` (`dept_code`);

--
-- Indexes for table `company_discounts`
--
ALTER TABLE `company_discounts`
  ADD PRIMARY KEY (`disc_id`),
  ADD UNIQUE KEY `disc_code` (`disc_code`),
  ADD KEY `disc_code_2` (`disc_code`);

--
-- Indexes for table `company_documents`
--
ALTER TABLE `company_documents`
  ADD PRIMARY KEY (`doc_id`),
  ADD KEY `doc_code` (`doc_code`),
  ADD KEY `journ_id` (`journ_id`),
  ADD KEY `doc_code_2` (`doc_code`);

--
-- Indexes for table `company_journals`
--
ALTER TABLE `company_journals`
  ADD PRIMARY KEY (`journ_id`),
  ADD UNIQUE KEY `journ_code` (`journ_code`),
  ADD KEY `journ_code_2` (`journ_code`);

--
-- Indexes for table `company_modes_of_payment`
--
ALTER TABLE `company_modes_of_payment`
  ADD PRIMARY KEY (`pay_mode_id`),
  ADD UNIQUE KEY `pay_mode_code` (`pay_mode_code`),
  ADD KEY `pay_mode_code_2` (`pay_mode_code`),
  ADD KEY `pay_type_id` (`pay_type_id`);

--
-- Indexes for table `company_others`
--
ALTER TABLE `company_others`
  ADD PRIMARY KEY (`others_id`);

--
-- Indexes for table `company_products`
--
ALTER TABLE `company_products`
  ADD PRIMARY KEY (`prod_id`),
  ADD UNIQUE KEY `prod_code` (`prod_code`),
  ADD KEY `profit_cost_center_code` (`profit_cost_center_code`),
  ADD KEY `dept_code` (`dept_code`);

--
-- Indexes for table `company_profit_cost_centers`
--
ALTER TABLE `company_profit_cost_centers`
  ADD PRIMARY KEY (`profit_cost_center_id`),
  ADD UNIQUE KEY `profit_cost_center_code` (`profit_cost_center_code`),
  ADD KEY `dept_code` (`dept_code`);

--
-- Indexes for table `company_services`
--
ALTER TABLE `company_services`
  ADD PRIMARY KEY (`serv_id`),
  ADD UNIQUE KEY `serv_code` (`serv_code`),
  ADD KEY `profit_cost_center_code` (`profit_cost_center_code`),
  ADD KEY `dept_code` (`dept_code`);

--
-- Indexes for table `company_taxes`
--
ALTER TABLE `company_taxes`
  ADD PRIMARY KEY (`tax_id`),
  ADD KEY `tax_code` (`tax_code`),
  ADD KEY `tax_type_id` (`tax_type_id`);

--
-- Indexes for table `company_types_of_payment`
--
ALTER TABLE `company_types_of_payment`
  ADD PRIMARY KEY (`pay_type_id`),
  ADD UNIQUE KEY `pay_type_code` (`pay_type_code`);

--
-- Indexes for table `discounts`
--
ALTER TABLE `discounts`
  ADD PRIMARY KEY (`disc_id`),
  ADD UNIQUE KEY `disc_code` (`disc_code`);

--
-- Indexes for table `documents`
--
ALTER TABLE `documents`
  ADD PRIMARY KEY (`doc_id`),
  ADD UNIQUE KEY `doc_code` (`doc_code`),
  ADD KEY `journ_id` (`journ_id`);

--
-- Indexes for table `journals`
--
ALTER TABLE `journals`
  ADD PRIMARY KEY (`journ_id`),
  ADD UNIQUE KEY `journ_code` (`journ_code`);

--
-- Indexes for table `modes_of_payment`
--
ALTER TABLE `modes_of_payment`
  ADD PRIMARY KEY (`pay_mode_id`),
  ADD UNIQUE KEY `pay_mode_code` (`pay_mode_code`),
  ADD KEY `pay_type_id` (`pay_type_id`);

--
-- Indexes for table `taxes`
--
ALTER TABLE `taxes`
  ADD PRIMARY KEY (`tax_id`),
  ADD UNIQUE KEY `tax_code` (`tax_code`),
  ADD KEY `tax_type_id` (`tax_type_id`);

--
-- Indexes for table `tax_types`
--
ALTER TABLE `tax_types`
  ADD PRIMARY KEY (`tax_type_id`),
  ADD UNIQUE KEY `tax_type_code` (`tax_type_code`);

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`trans_id`),
  ADD UNIQUE KEY `trans_code` (`trans_code`),
  ADD KEY `journ_id` (`journ_id`);

--
-- Indexes for table `transaction_journal_entries`
--
ALTER TABLE `transaction_journal_entries`
  ADD PRIMARY KEY (`trans_entry_id`),
  ADD UNIQUE KEY `trans_entry_code` (`trans_entry_code`);

--
-- Indexes for table `types_of_payment`
--
ALTER TABLE `types_of_payment`
  ADD PRIMARY KEY (`pay_type_id`),
  ADD UNIQUE KEY `pay_type_code` (`pay_type_code`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `user_code` (`user_code`),
  ADD KEY `bp_id` (`bp_id`);

--
-- Indexes for table `user_accounts`
--
ALTER TABLE `user_accounts`
  ADD PRIMARY KEY (`ua_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banks`
--
ALTER TABLE `banks`
  MODIFY `bank_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `business_partners_class`
--
ALTER TABLE `business_partners_class`
  MODIFY `bp_class_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `business_partner_type`
--
ALTER TABLE `business_partner_type`
  MODIFY `bp_type_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `chart_of_accounts`
--
ALTER TABLE `chart_of_accounts`
  MODIFY `acc_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `companies_and_branches`
--
ALTER TABLE `companies_and_branches`
  MODIFY `bp_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `company_banks`
--
ALTER TABLE `company_banks`
  MODIFY `bank_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `company_business_partner_table`
--
ALTER TABLE `company_business_partner_table`
  MODIFY `bp_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `company_chart_of_accounts`
--
ALTER TABLE `company_chart_of_accounts`
  MODIFY `acc_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `company_departments`
--
ALTER TABLE `company_departments`
  MODIFY `dept_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `company_discounts`
--
ALTER TABLE `company_discounts`
  MODIFY `disc_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `company_documents`
--
ALTER TABLE `company_documents`
  MODIFY `doc_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `company_journals`
--
ALTER TABLE `company_journals`
  MODIFY `journ_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `company_modes_of_payment`
--
ALTER TABLE `company_modes_of_payment`
  MODIFY `pay_mode_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `company_others`
--
ALTER TABLE `company_others`
  MODIFY `others_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `company_products`
--
ALTER TABLE `company_products`
  MODIFY `prod_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `company_profit_cost_centers`
--
ALTER TABLE `company_profit_cost_centers`
  MODIFY `profit_cost_center_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `company_services`
--
ALTER TABLE `company_services`
  MODIFY `serv_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `company_taxes`
--
ALTER TABLE `company_taxes`
  MODIFY `tax_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `company_types_of_payment`
--
ALTER TABLE `company_types_of_payment`
  MODIFY `pay_type_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `discounts`
--
ALTER TABLE `discounts`
  MODIFY `disc_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `documents`
--
ALTER TABLE `documents`
  MODIFY `doc_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `journals`
--
ALTER TABLE `journals`
  MODIFY `journ_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `modes_of_payment`
--
ALTER TABLE `modes_of_payment`
  MODIFY `pay_mode_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `taxes`
--
ALTER TABLE `taxes`
  MODIFY `tax_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tax_types`
--
ALTER TABLE `tax_types`
  MODIFY `tax_type_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `trans_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `transaction_journal_entries`
--
ALTER TABLE `transaction_journal_entries`
  MODIFY `trans_entry_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `types_of_payment`
--
ALTER TABLE `types_of_payment`
  MODIFY `pay_type_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `companies_and_branches`
--
ALTER TABLE `companies_and_branches`
  ADD CONSTRAINT `companies_and_branches_ibfk_1` FOREIGN KEY (`bp_class_id`) REFERENCES `business_partners_class` (`bp_class_id`),
  ADD CONSTRAINT `companies_and_branches_ibfk_2` FOREIGN KEY (`bp_type_id`) REFERENCES `business_partner_type` (`bp_type_id`),
  ADD CONSTRAINT `companies_and_branches_ibfk_3` FOREIGN KEY (`tax_type_id`) REFERENCES `tax_types` (`tax_type_id`);

--
-- Constraints for table `company_banks`
--
ALTER TABLE `company_banks`
  ADD CONSTRAINT `company_banks_ibfk_1` FOREIGN KEY (`bank_code`) REFERENCES `banks` (`bank_id`);

--
-- Constraints for table `company_business_partner_table`
--
ALTER TABLE `company_business_partner_table`
  ADD CONSTRAINT `company_business_partner_table_ibfk_1` FOREIGN KEY (`bp_class_id`) REFERENCES `business_partners_class` (`bp_class_id`),
  ADD CONSTRAINT `company_business_partner_table_ibfk_2` FOREIGN KEY (`bp_type_id`) REFERENCES `business_partner_type` (`bp_type_id`),
  ADD CONSTRAINT `company_business_partner_table_ibfk_3` FOREIGN KEY (`trans_id`) REFERENCES `transaction` (`trans_id`);

--
-- Constraints for table `company_chart_of_accounts`
--
ALTER TABLE `company_chart_of_accounts`
  ADD CONSTRAINT `company_chart_of_accounts_ibfk_1` FOREIGN KEY (`acc_code`) REFERENCES `chart_of_accounts` (`acc_id`);

--
-- Constraints for table `company_discounts`
--
ALTER TABLE `company_discounts`
  ADD CONSTRAINT `company_discounts_ibfk_1` FOREIGN KEY (`disc_code`) REFERENCES `discounts` (`disc_id`);

--
-- Constraints for table `company_documents`
--
ALTER TABLE `company_documents`
  ADD CONSTRAINT `company_documents_ibfk_1` FOREIGN KEY (`doc_code`) REFERENCES `documents` (`doc_code`),
  ADD CONSTRAINT `company_documents_ibfk_2` FOREIGN KEY (`journ_id`) REFERENCES `journals` (`journ_id`);

--
-- Constraints for table `company_journals`
--
ALTER TABLE `company_journals`
  ADD CONSTRAINT `company_journals_ibfk_1` FOREIGN KEY (`journ_code`) REFERENCES `journals` (`journ_code`);

--
-- Constraints for table `company_modes_of_payment`
--
ALTER TABLE `company_modes_of_payment`
  ADD CONSTRAINT `company_modes_of_payment_ibfk_1` FOREIGN KEY (`pay_mode_code`) REFERENCES `taxes` (`tax_code`),
  ADD CONSTRAINT `company_modes_of_payment_ibfk_2` FOREIGN KEY (`pay_type_id`) REFERENCES `types_of_payment` (`pay_type_id`);

--
-- Constraints for table `company_products`
--
ALTER TABLE `company_products`
  ADD CONSTRAINT `company_products_ibfk_1` FOREIGN KEY (`profit_cost_center_code`) REFERENCES `company_profit_cost_centers` (`profit_cost_center_id`),
  ADD CONSTRAINT `company_products_ibfk_2` FOREIGN KEY (`dept_code`) REFERENCES `company_departments` (`dept_id`);

--
-- Constraints for table `company_profit_cost_centers`
--
ALTER TABLE `company_profit_cost_centers`
  ADD CONSTRAINT `company_profit_cost_centers_ibfk_1` FOREIGN KEY (`dept_code`) REFERENCES `company_departments` (`dept_id`);

--
-- Constraints for table `company_services`
--
ALTER TABLE `company_services`
  ADD CONSTRAINT `company_services_ibfk_1` FOREIGN KEY (`profit_cost_center_code`) REFERENCES `company_profit_cost_centers` (`profit_cost_center_id`),
  ADD CONSTRAINT `company_services_ibfk_2` FOREIGN KEY (`dept_code`) REFERENCES `company_departments` (`dept_id`);

--
-- Constraints for table `company_taxes`
--
ALTER TABLE `company_taxes`
  ADD CONSTRAINT `company_taxes_ibfk_1` FOREIGN KEY (`tax_code`) REFERENCES `taxes` (`tax_id`),
  ADD CONSTRAINT `company_taxes_ibfk_2` FOREIGN KEY (`tax_type_id`) REFERENCES `taxes` (`tax_type_id`);

--
-- Constraints for table `documents`
--
ALTER TABLE `documents`
  ADD CONSTRAINT `documents_ibfk_1` FOREIGN KEY (`journ_id`) REFERENCES `journals` (`journ_id`);

--
-- Constraints for table `modes_of_payment`
--
ALTER TABLE `modes_of_payment`
  ADD CONSTRAINT `modes_of_payment_ibfk_1` FOREIGN KEY (`pay_type_id`) REFERENCES `types_of_payment` (`pay_type_id`);

--
-- Constraints for table `taxes`
--
ALTER TABLE `taxes`
  ADD CONSTRAINT `taxes_ibfk_1` FOREIGN KEY (`tax_type_id`) REFERENCES `tax_types` (`tax_type_id`);

--
-- Constraints for table `transaction`
--
ALTER TABLE `transaction`
  ADD CONSTRAINT `transaction_ibfk_1` FOREIGN KEY (`journ_id`) REFERENCES `journals` (`journ_id`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`bp_id`) REFERENCES `companies_and_branches` (`bp_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
