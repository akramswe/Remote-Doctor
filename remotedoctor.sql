-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 19, 2019 at 08:25 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `remotedoctor`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `job_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `job_title`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Washim Akram', 'a@gmail.com', 'Admin', NULL, '$2y$10$tBFlmtl4UwN0cUMUbeSHS.HzZxLkW8ZiUmaVB6tKKe1tcutmueEg.', NULL, '2019-06-25 14:49:08', '2019-06-25 14:49:08');

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `apnt_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `doctor_id` bigint(20) UNSIGNED NOT NULL,
  `patient_id` bigint(20) UNSIGNED NOT NULL,
  `department_id` bigint(20) UNSIGNED NOT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `time` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`id`, `apnt_id`, `doctor_id`, `patient_id`, `department_id`, `date`, `time`, `email`, `phone`, `message`, `status`, `created_at`, `updated_at`) VALUES
(1, 'APT-0001', 2, 1, 1, '01/06/2019', '2:25 PM', 'b@gmail.com', '12345678901', 'Janina', 'Active', '2019-07-16 07:28:42', '2019-07-16 07:28:42'),
(2, 'APT-0001', 2, 1, 1, '01/06/2019', '2:25 PM', 'b@gmail.com', '12345678901', 'Janina', 'Active', '2019-07-16 07:29:59', '2019-07-16 07:29:59'),
(3, 'APT-0001', 2, 1, 1, '01/06/2019', '2:25 PM', 'b@gmail.com', '12345678901', 'Janina', 'Active', '2019-07-16 07:31:23', '2019-07-16 07:31:23');

-- --------------------------------------------------------

--
-- Table structure for table `branches`
--

CREATE TABLE `branches` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `br_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `br_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `branches`
--

INSERT INTO `branches` (`id`, `br_id`, `br_name`, `description`, `status`, `created_at`, `updated_at`) VALUES
(1, '1', 'Dhanmondi', 'Janina', 'Active', '2019-07-01 20:59:32', '2019-07-01 20:59:32'),
(2, '2', 'Mohammadpur', 'Pore boli', 'Inactive', '2019-07-01 20:59:51', '2019-07-01 20:59:51');

-- --------------------------------------------------------

--
-- Table structure for table `branch_admins`
--

CREATE TABLE `branch_admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ba_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ba_fname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ba_lname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dof` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `biography` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` mediumtext COLLATE utf8mb4_unicode_ci,
  `branch` bigint(20) UNSIGNED NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `branch_admins`
--

INSERT INTO `branch_admins` (`id`, `ba_id`, `ba_fname`, `ba_lname`, `username`, `password`, `email`, `phone`, `dof`, `address`, `gender`, `biography`, `image`, `branch`, `status`, `created_at`, `updated_at`) VALUES
(1, '1', 'Washim', 'akram', 'akram', '$2y$10$tBFlmtl4UwN0cUMUbeSHS.HzZxLkW8ZiUmaVB6tKKe1tcutmueEg.', 'a@gmail.com', '12345678901', '03/07/2019', 'kio', 'Male', 'ji', 'doc-1.jpg', 1, 'Active', '2019-07-01 12:23:02', '2019-07-01 12:23:02'),
(2, '2', 'Subrata', 'Saha', 'subrata', 'dadasd', 'demo@gmail.com', '12345678', '10/06/2019', 'dadad', 'Male', 'dadadasdsasd', 'dept-5.jpg', 1, 'Inactive', '2019-07-01 21:34:25', '2019-07-01 21:34:25'),
(3, '2', 'Adity', 'Tama', 'adity', '123456', 'b@gmail.com', '34343', '1', 'asdf', 'Female', 'dadadadadada', 'doc-4.jpg', 1, 'Inactive', '2019-07-19 10:53:23', '2019-07-19 10:53:23');

-- --------------------------------------------------------

--
-- Table structure for table `coordinate2s`
--

CREATE TABLE `coordinate2s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `coordinate_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `coordinate_fname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `coordinate_lname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dof` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` bigint(20) UNSIGNED NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `biography` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` mediumtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `coordinate2s`
--

INSERT INTO `coordinate2s` (`id`, `coordinate_id`, `coordinate_fname`, `coordinate_lname`, `username`, `password`, `email`, `phone`, `dof`, `country`, `address`, `gender`, `biography`, `status`, `image`, `created_at`, `updated_at`) VALUES
(2, '2', 'Adity', 'Singha Tama', 'adity', '123', 'a@gmail.com', '12345678901', '28/06/2019', 1, 'dhaka', 'Male', 'as', 'Active', 'doc-2.jpg', '2019-06-28 04:59:01', '2019-06-30 12:04:21'),
(4, '4', 'Subrata', 'Saha', 'akram', '123', 'a@gmail.com', '12345678901', '28/06/2019', 1, 'dhaka', 'Male', 'as', 'Inactive', 'doc-1.jpg', '2019-06-28 05:01:01', '2019-06-28 06:10:00'),
(5, '5', 'Munna', 'Hossain', 'munna', '123', 'demo@gmail.com', '12345678901', '28/06/2019', 2, 'dhaka', 'Male', 'NOthing', 'Inactive', 'doc-8.jpg', '2019-06-29 11:04:07', '2019-06-29 11:11:44'),
(6, '6', 'Sohel', 'Rana', 'sohel', '123', 'demo@gmail.com', '12345678901', '28/06/2019', 2, 'dhaka', 'Male', 'NOthing', 'Active', 'doc-3.jpg', '2019-06-29 11:06:45', '2019-06-29 11:11:22'),
(7, '5', 'Subrata', 'Karmeker', 'subrata', '123', 'b@gmail.com', '12345678', '05/06/2019', 2, 'dhaka', 'Male', 'NO', 'Active', 'staff-1.jpg', '2019-06-29 11:10:47', '2019-06-29 11:10:47'),
(9, '1234', 'Sohel', 'Rana', 'sohel rana', '12345', 'a@gmail.com', '098909890', '30/06/2019', 2, 'abcd', 'Male', 'assdfg', 'Active', 'doc-1.jpg', '2019-06-30 07:58:37', '2019-06-30 07:58:37');

-- --------------------------------------------------------

--
-- Table structure for table `coordinates`
--

CREATE TABLE `coordinates` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `job_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `coordinates`
--

INSERT INTO `coordinates` (`id`, `name`, `email`, `job_title`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Sohel', 'b@gmail.com', 'Co-Ordinate', NULL, '$2y$10$tBFlmtl4UwN0cUMUbeSHS.HzZxLkW8ZiUmaVB6tKKe1tcutmueEg.', NULL, '2019-06-25 14:52:57', '2019-06-25 14:52:57');

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `country_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `country_id`, `country_name`, `description`, `status`, `created_at`, `updated_at`) VALUES
(1, '1', 'Bangladesh', 'nothing', 'Active', '2019-06-29 10:46:34', '2019-06-29 11:29:22'),
(2, '2', 'India', 'Nothing', 'Inactive', '2019-06-29 10:47:44', '2019-06-29 10:47:44');

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `dept_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dept_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `dept_id`, `dept_name`, `description`, `status`, `created_at`, `updated_at`) VALUES
(1, '1', 'Medecine', 'no', 'Active', '2019-06-28 07:18:23', '2019-07-12 05:39:00'),
(4, '2', 'Dental', 'Nothing', 'Active', '2019-06-28 08:24:40', '2019-06-28 08:24:40'),
(5, '3', 'Nerologist', 'nj', 'Active', '2019-06-28 08:33:25', '2019-06-28 08:33:25'),
(6, '4', 'Cardiologist', 'Nothing', 'Active', '2019-06-28 08:34:40', '2019-06-28 08:34:40'),
(12, '5', 'ENT', 'No', 'Inactive', '2019-06-28 11:17:25', '2019-06-28 11:17:25'),
(13, '6', 'Surgery', 'qw', 'Inactive', '2019-06-28 11:30:02', '2019-07-12 05:39:25');

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `doctor_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `doctor_fname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `doctor_lname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dof` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dept_id` int(11) NOT NULL,
  `specialist` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `postal_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` mediumtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`id`, `doctor_id`, `doctor_fname`, `doctor_lname`, `username`, `password`, `email`, `phone`, `dof`, `address`, `country`, `gender`, `dept_id`, `specialist`, `state`, `postal_code`, `status`, `image`, `created_at`, `updated_at`) VALUES
(2, '2', 'Washim', 'Akram', 'akram', '1234', 'b@gmail.com', '12345678901', '25/06/2019', 'dhaka', 'USA', 'Male', 0, 'janina', 'California', '3456', 'Inactive', 'doc-1.jpg', '2019-06-28 11:46:30', '2019-06-28 11:46:30'),
(4, '3', 'Adity', 'Singha Tama', 'adity', '1234', 'a1@gmail.com', '12345678901', '02/06/2019', 'dhaka', 'USA', 'Female', 1, 'janina', 'California', '23', 'Active', 'doc-2.jpg', '2019-06-29 09:07:16', '2019-06-29 09:07:16'),
(5, '4', 'Lalon', 'Hossain', 'lalon', '1234', 'b@gmail.com', '12345678', '20/06/2019', 'dhaka', 'United Kingdom', 'Male', 13, 'Nothing', 'Alaska', '23', 'Inactive', 'doc-1.jpg', '2019-06-29 09:08:35', '2019-06-29 09:08:35');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2019_06_28_124808_create_schedules_table', 1),
(2, '2019_06_28_125642_create_departments_table', 2),
(3, '2019_06_28_164556_create_doctors_table', 3),
(4, '2019_06_29_161830_create_countries_table', 4),
(5, '2019_06_29_183410_create_schedules_table', 5),
(6, '2019_07_01_173405_create_branch_admins_table', 6),
(7, '2019_07_02_024729_create_branches_table', 7),
(8, '2019_07_15_094334_create_patients_table', 8),
(9, '2019_07_16_093138_create_appointments_table', 9);

-- --------------------------------------------------------

--
-- Table structure for table `patients`
--

CREATE TABLE `patients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `patient_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `patient_fname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `patient_lname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `age` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` mediumtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `patients`
--

INSERT INTO `patients` (`id`, `patient_id`, `patient_fname`, `patient_lname`, `username`, `password`, `email`, `phone`, `age`, `address`, `country`, `gender`, `status`, `image`, `created_at`, `updated_at`) VALUES
(1, '1', 'Lalon', 'Islam', 'lalon', '23456789', 'ami1@gmail.com', '12345678901', '23', 'dhanmondi', '1', 'Male', 'Active', 'doc-1.jpg', '2019-07-15 09:29:39', '2019-07-15 09:29:39'),
(2, '1', 'Lalon', 'Islam', 'lalon', '23456789', 'ami1@gmail.com', '12345678901', '45', 'dhanmondi', '1', 'Male', 'Inactive', 'doc-1.jpg', '2019-07-15 09:32:28', '2019-07-15 09:32:28'),
(3, '1', 'Lalon', 'Islam', 'lalon', '23456789', 'ami1@gmail.com', '12345678901', '234567', 'dhanmondi', '1', 'Male', 'Inactive', 'doc-1.jpg', '2019-07-15 09:44:08', '2019-07-15 09:44:08'),
(4, '2', 'Adity', 'Tama', 'adity', '23456', 'adity@gmail.com', '12345678', '20', 'dhanmondi', '2', 'Female', 'Active', 'doc-2.jpg', '2019-07-15 09:46:35', '2019-07-15 09:46:35'),
(5, '1', 'Lalon', 'Islam', 'munna', '$2y$10$JwU1q5hYv/ICtgPEEByOEeAF3f.DKFddMI5PEGwaaTOxs2uX5Ebo6', 'a@gmail.com', '12345678901', '17', 'dhanmondi', '1', 'Male', 'Active', NULL, '2019-07-16 02:35:55', '2019-07-16 02:35:55'),
(6, '1', 'ftgyhuji', 'fghuji', 'tyguhj', '$2y$10$CDrPYaZvIEXQ7Q49qZKR9u1X8KOBJh7Se6Bb7eVs48nA49Ljv8uOq', 'a@gmail.com', '12345678', '42', 'dhanmondi', '1', 'Male', 'Active', NULL, '2019-07-16 02:42:17', '2019-07-16 02:42:17'),
(7, '1', 'ftgyhuji', 'fghuji', 'tyguhj', '$2y$10$cs7YBj1ozPGzI58kDXqoY.thsYQwSsoZ2ydmQ1856RGR5.i91Jwri', 'a@gmail.com', '12345678', '42', 'dhanmondi', '1', 'Male', 'Active', NULL, '2019-07-16 02:44:17', '2019-07-16 02:44:17'),
(8, '1', 'sdfg', 'dfgh', 'dfg', '$2y$10$0wcsm1l8Wmw9c52qPvCOTuIwplln94shZlq0lWED7EwwX/oQsHiPC', 'a@gmail.com', '12345678901', '36', 'asdfghjgfdsa', '1', 'Male', 'Active', NULL, '2019-07-16 02:44:54', '2019-07-16 02:44:54'),
(9, '1', 'Lalon', 'd', 'subrata', '$2y$10$mEvSNRWMTOjXcJMTie8IVO5o/MKXxpkMLZkyDtC3XOG.XHDNydWH6', 'a@gmail.com', '12345678901', '41', 'dhaka', '1', 'Male', 'Active', NULL, '2019-07-16 02:49:35', '2019-07-16 02:49:35'),
(10, '1', '2', 's', 's', '$2y$10$/KviLJTWnHx9EDQogFAGU.uSuVJSpuYuTke0qqxNEU5pORbY.757y', 'a@gmail.com', '12345678901', '27', 'dhaka', '1', 'Male', 'Active', NULL, '2019-07-16 02:52:08', '2019-07-16 02:52:08'),
(11, '12', 'dfg', 'fgh', 'tfgy', '$2y$10$69Sr9Mzu8HanL7fHbRsUgO7GY5fAYxqgGEc3SgEQ5V0LbQLZqYT02', 'demo@gmail.com', '12345678901', '22', 'dhanmondi', '1', 'Male', 'Active', NULL, '2019-07-16 02:53:15', '2019-07-16 02:53:15');

-- --------------------------------------------------------

--
-- Table structure for table `schedules`
--

CREATE TABLE `schedules` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `doctor_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `availble_days` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `start_time` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `end_time` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `schedules`
--

INSERT INTO `schedules` (`id`, `doctor_name`, `availble_days`, `start_time`, `end_time`, `message`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Washim Akram', 'Sunday', '12:48 AM', '12:48 AM', 'Nothing', 'Active', '2019-06-29 12:48:11', '2019-06-29 12:48:11'),
(2, 'Adity Singha Tama', 'Wednesday', '12:26 AM', '12:26 AM', 'Janina', 'Inactive', '2019-07-16 12:26:47', '2019-07-16 12:26:47');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Washim Akram', 'a@gmail.com', NULL, '$2y$10$BMfQ53J/wwRpc.ZSEHSOQeC1nUxstIjl3oKILvqbm/ahh8/PgF.Z2', 'Co_ordinate', NULL, '2019-07-19 09:45:41', '2019-07-19 09:45:41'),
(2, 'akram', 'b@gmail.com', NULL, '$2y$10$7eskOFm4I9a33rYSF.PM9eWEv5XCzj6p9toPyuDzzdtHzS54ey5Ha', 'Branch_Admin', NULL, '2019-07-19 09:48:18', '2019-07-19 09:48:18'),
(3, 'Adity', 'c@gmail.com', NULL, '$2y$10$FCdYhmpwgjGRhbza5raJUu7q9htCnQgDJoBn69geTB5fhTFC.uwc.', 'Doctor', NULL, '2019-07-19 09:49:02', '2019-07-19 09:49:02');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `department_id` (`department_id`),
  ADD KEY `doctor_id` (`doctor_id`),
  ADD KEY `patient_id` (`patient_id`);

--
-- Indexes for table `branches`
--
ALTER TABLE `branches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `branch_admins`
--
ALTER TABLE `branch_admins`
  ADD PRIMARY KEY (`id`),
  ADD KEY `branch` (`branch`);

--
-- Indexes for table `coordinate2s`
--
ALTER TABLE `coordinate2s`
  ADD PRIMARY KEY (`id`),
  ADD KEY `country` (`country`);

--
-- Indexes for table `coordinates`
--
ALTER TABLE `coordinates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patients`
--
ALTER TABLE `patients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `schedules`
--
ALTER TABLE `schedules`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `appointments`
--
ALTER TABLE `appointments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `branches`
--
ALTER TABLE `branches`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `branch_admins`
--
ALTER TABLE `branch_admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `coordinate2s`
--
ALTER TABLE `coordinate2s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `coordinates`
--
ALTER TABLE `coordinates`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `doctors`
--
ALTER TABLE `doctors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `patients`
--
ALTER TABLE `patients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `schedules`
--
ALTER TABLE `schedules`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `appointments`
--
ALTER TABLE `appointments`
  ADD CONSTRAINT `appointments_ibfk_1` FOREIGN KEY (`department_id`) REFERENCES `departments` (`id`),
  ADD CONSTRAINT `appointments_ibfk_2` FOREIGN KEY (`doctor_id`) REFERENCES `doctors` (`id`),
  ADD CONSTRAINT `appointments_ibfk_3` FOREIGN KEY (`patient_id`) REFERENCES `patients` (`id`);

--
-- Constraints for table `branch_admins`
--
ALTER TABLE `branch_admins`
  ADD CONSTRAINT `branch_admins_ibfk_1` FOREIGN KEY (`branch`) REFERENCES `branches` (`id`);

--
-- Constraints for table `coordinate2s`
--
ALTER TABLE `coordinate2s`
  ADD CONSTRAINT `coordinate2s_ibfk_1` FOREIGN KEY (`country`) REFERENCES `countries` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
