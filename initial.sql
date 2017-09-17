-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 12, 2017 at 12:19 PM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `initial`
--

-- --------------------------------------------------------

--
-- Table structure for table `backups`
--

CREATE TABLE IF NOT EXISTS `backups` (
  `id` int(10) unsigned NOT NULL,
  `name` varchar(250) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `file_name` varchar(250) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `backup_size` varchar(10) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE IF NOT EXISTS `departments` (
  `id` int(10) unsigned NOT NULL,
  `name` varchar(250) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `tags` varchar(1000) COLLATE utf8_unicode_ci NOT NULL DEFAULT '[]',
  `color` varchar(50) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `name`, `tags`, `color`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Administration', '[]', '#000', NULL, '2017-08-12 00:36:41', '2017-08-12 00:36:41');

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE IF NOT EXISTS `employees` (
  `id` int(10) unsigned NOT NULL,
  `name` varchar(250) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `designation` varchar(50) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `gender` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'Male',
  `mobile` varchar(20) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `mobile2` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(250) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `dept` int(10) unsigned NOT NULL DEFAULT '1',
  `city` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `about` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `date_birth` date NOT NULL DEFAULT '1990-01-01',
  `date_hire` date NOT NULL,
  `date_left` date NOT NULL DEFAULT '1990-01-01',
  `salary_cur` decimal(15,3) NOT NULL DEFAULT '0.000',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `name`, `designation`, `gender`, `mobile`, `mobile2`, `email`, `dept`, `city`, `address`, `about`, `date_birth`, `date_hire`, `date_left`, `salary_cur`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Zoe Shu', 'Super Admin', 'Female', '8888888888', '', 'zoe.shu.wm@gmail.com', 1, 'Pune', 'Karve nagar, Pune 411030', 'About user / biography', '2017-08-12', '2017-08-12', '2017-08-12', '0.000', NULL, '2017-08-12 00:37:34', '2017-08-12 02:15:23');

-- --------------------------------------------------------

--
-- Table structure for table `la_configs`
--

CREATE TABLE IF NOT EXISTS `la_configs` (
  `id` int(10) unsigned NOT NULL,
  `key` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `section` varchar(100) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `value` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `la_configs`
--

INSERT INTO `la_configs` (`id`, `key`, `section`, `value`, `created_at`, `updated_at`) VALUES
(1, 'sitename', '', 'Laravel CMS', '2017-08-12 00:36:46', '2017-08-12 02:19:27'),
(2, 'sitename_part1', '', 'Laravel', '2017-08-12 00:36:46', '2017-08-12 02:19:27'),
(3, 'sitename_part2', '', 'CMS 1.0', '2017-08-12 00:36:46', '2017-08-12 02:19:27'),
(4, 'sitename_short', '', 'LC', '2017-08-12 00:36:46', '2017-08-12 02:19:27'),
(5, 'site_description', '', 'LaraAdmin is a open-source Laravel Admin Panel for quick-start Admin based applications and boilerplate for CRM or CMS systems.', '2017-08-12 00:36:46', '2017-08-12 02:19:27'),
(6, 'sidebar_search', '', '0', '2017-08-12 00:36:46', '2017-08-12 02:19:28'),
(7, 'show_messages', '', '0', '2017-08-12 00:36:46', '2017-08-12 02:19:28'),
(8, 'show_notifications', '', '0', '2017-08-12 00:36:46', '2017-08-12 02:19:28'),
(9, 'show_tasks', '', '0', '2017-08-12 00:36:46', '2017-08-12 02:19:28'),
(10, 'show_rightsidebar', '', '0', '2017-08-12 00:36:46', '2017-08-12 02:19:28'),
(11, 'skin', '', 'skin-white', '2017-08-12 00:36:46', '2017-08-12 02:19:27'),
(12, 'layout', '', 'fixed', '2017-08-12 00:36:46', '2017-08-12 02:19:27'),
(13, 'default_email', '', 'test@example.com', '2017-08-12 00:36:46', '2017-08-12 02:19:28');

-- --------------------------------------------------------

--
-- Table structure for table `la_menus`
--

CREATE TABLE IF NOT EXISTS `la_menus` (
  `id` int(10) unsigned NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `url` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `icon` varchar(50) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'fa-cube',
  `type` varchar(20) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'module',
  `parent` int(10) unsigned NOT NULL DEFAULT '0',
  `hierarchy` int(10) unsigned NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `la_menus`
--

INSERT INTO `la_menus` (`id`, `name`, `url`, `icon`, `type`, `parent`, `hierarchy`, `created_at`, `updated_at`) VALUES
(1, 'Admin', '#', 'fa-group', 'custom', 0, 3, '2017-08-12 00:36:41', '2017-08-12 01:47:03'),
(2, 'Users', 'users', 'fa-group', 'module', 1, 5, '2017-08-12 00:36:41', '2017-08-12 01:46:55'),
(3, 'Uploads', 'uploads', 'fa-files-o', 'module', 0, 1, '2017-08-12 00:36:41', '2017-08-12 01:46:59'),
(4, 'Departments', 'departments', 'fa-tags', 'module', 1, 7, '2017-08-12 00:36:41', '2017-08-12 01:47:03'),
(5, 'Employees', 'employees', 'fa-group', 'module', 1, 8, '2017-08-12 00:36:41', '2017-08-12 01:47:03'),
(6, 'Roles', 'roles', 'fa-user-plus', 'module', 1, 9, '2017-08-12 00:36:41', '2017-08-12 01:47:03'),
(7, 'Organizations', 'organizations', 'fa-university', 'module', 1, 6, '2017-08-12 00:36:41', '2017-08-12 01:47:03'),
(8, 'Permissions', 'permissions', 'fa-magic', 'module', 1, 10, '2017-08-12 00:36:41', '2017-08-12 01:47:03'),
(9, 'Backups', 'backups', 'fa-hdd-o', 'module', 1, 3, '2017-08-12 00:58:52', '2017-08-12 01:46:55'),
(10, 'Modules', 'modules', 'fa-database', 'custom', 1, 2, '2017-08-12 00:59:41', '2017-08-12 01:46:55'),
(11, 'Configs', 'la_configs', 'fa-gears', 'custom', 1, 4, '2017-08-12 01:00:41', '2017-08-12 01:46:55'),
(12, 'Testings', 'testings', 'fa fa-file-text', 'module', 0, 2, '2017-08-12 01:08:55', '2017-08-12 01:46:59'),
(13, 'Backend Menu', 'la_menus', 'fa-align-right', 'custom', 1, 1, '2017-08-12 01:46:51', '2017-08-12 01:46:55');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_05_26_050000_create_modules_table', 1),
('2014_05_26_055000_create_module_field_types_table', 1),
('2014_05_26_060000_create_module_fields_table', 1),
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2014_12_01_000000_create_uploads_table', 1),
('2016_05_26_064006_create_departments_table', 1),
('2016_05_26_064007_create_employees_table', 1),
('2016_05_26_064446_create_roles_table', 1),
('2016_07_05_115343_create_role_user_table', 1),
('2016_07_06_140637_create_organizations_table', 1),
('2016_07_07_134058_create_backups_table', 1),
('2016_07_07_134058_create_menus_table', 1),
('2016_09_10_163337_create_permissions_table', 1),
('2016_09_10_163520_create_permission_role_table', 1),
('2016_09_22_105958_role_module_fields_table', 1),
('2016_09_22_110008_role_module_table', 1),
('2016_10_06_115413_create_la_configs_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `modules`
--

CREATE TABLE IF NOT EXISTS `modules` (
  `id` int(10) unsigned NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `label` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `name_db` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `view_col` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `model` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `controller` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `fa_icon` varchar(30) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'fa-cube',
  `is_gen` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `modules`
--

INSERT INTO `modules` (`id`, `name`, `label`, `name_db`, `view_col`, `model`, `controller`, `fa_icon`, `is_gen`, `created_at`, `updated_at`) VALUES
(1, 'Users', 'Users', 'users', 'name', 'User', 'UsersController', 'fa-group', 1, '2017-08-12 00:36:02', '2017-08-12 00:36:46'),
(2, 'Uploads', 'Uploads', 'uploads', 'name', 'Upload', 'UploadsController', 'fa-files-o', 1, '2017-08-12 00:36:05', '2017-08-12 00:36:46'),
(3, 'Departments', 'Departments', 'departments', 'name', 'Department', 'DepartmentsController', 'fa-tags', 1, '2017-08-12 00:36:08', '2017-08-12 00:36:46'),
(4, 'Employees', 'Employees', 'employees', 'name', 'Employee', 'EmployeesController', 'fa-group', 1, '2017-08-12 00:36:09', '2017-08-12 00:36:46'),
(5, 'Roles', 'Roles', 'roles', 'name', 'Role', 'RolesController', 'fa-user-plus', 1, '2017-08-12 00:36:12', '2017-08-12 00:36:47'),
(6, 'Organizations', 'Organizations', 'organizations', 'name', 'Organization', 'OrganizationsController', 'fa-university', 1, '2017-08-12 00:36:19', '2017-08-12 00:36:47'),
(7, 'Backups', 'Backups', 'backups', 'name', 'Backup', 'BackupsController', 'fa-hdd-o', 1, '2017-08-12 00:36:23', '2017-08-12 00:36:47'),
(8, 'Permissions', 'Permissions', 'permissions', 'name', 'Permission', 'PermissionsController', 'fa-magic', 1, '2017-08-12 00:36:26', '2017-08-12 00:36:47'),
(9, 'Testings', 'Testings', 'testings', 'slug', 'Testing', 'TestingsController', 'fa-file-text', 1, '2017-08-12 01:01:24', '2017-08-12 01:08:55');

-- --------------------------------------------------------

--
-- Table structure for table `module_fields`
--

CREATE TABLE IF NOT EXISTS `module_fields` (
  `id` int(10) unsigned NOT NULL,
  `colname` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `label` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `module` int(10) unsigned NOT NULL,
  `field_type` int(10) unsigned NOT NULL,
  `unique` tinyint(1) NOT NULL DEFAULT '0',
  `defaultvalue` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `minlength` int(10) unsigned NOT NULL DEFAULT '0',
  `maxlength` int(10) unsigned NOT NULL DEFAULT '0',
  `required` tinyint(1) NOT NULL DEFAULT '0',
  `popup_vals` text COLLATE utf8_unicode_ci NOT NULL,
  `sort` int(10) unsigned NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=77 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `module_fields`
--

INSERT INTO `module_fields` (`id`, `colname`, `label`, `module`, `field_type`, `unique`, `defaultvalue`, `minlength`, `maxlength`, `required`, `popup_vals`, `sort`, `created_at`, `updated_at`) VALUES
(1, 'name', 'Name', 1, 16, 0, '', 5, 250, 1, '', 0, '2017-08-12 00:36:02', '2017-08-12 00:36:02'),
(2, 'context_id', 'Context', 1, 13, 0, '0', 0, 0, 0, '', 0, '2017-08-12 00:36:02', '2017-08-12 00:36:02'),
(3, 'email', 'Email', 1, 8, 1, '', 0, 250, 0, '', 0, '2017-08-12 00:36:02', '2017-08-12 00:36:02'),
(4, 'password', 'Password', 1, 17, 0, '', 6, 250, 1, '', 0, '2017-08-12 00:36:02', '2017-08-12 00:36:02'),
(5, 'type', 'User Type', 1, 7, 0, 'Employee', 0, 0, 0, '["Employee","Client"]', 0, '2017-08-12 00:36:02', '2017-08-12 00:36:02'),
(6, 'name', 'Name', 2, 16, 0, '', 5, 250, 1, '', 0, '2017-08-12 00:36:05', '2017-08-12 00:36:05'),
(7, 'path', 'Path', 2, 19, 0, '', 0, 250, 0, '', 0, '2017-08-12 00:36:06', '2017-08-12 00:36:06'),
(8, 'extension', 'Extension', 2, 19, 0, '', 0, 20, 0, '', 0, '2017-08-12 00:36:06', '2017-08-12 00:36:06'),
(9, 'caption', 'Caption', 2, 19, 0, '', 0, 250, 0, '', 0, '2017-08-12 00:36:06', '2017-08-12 00:36:06'),
(10, 'user_id', 'Owner', 2, 7, 0, '1', 0, 0, 0, '@users', 0, '2017-08-12 00:36:06', '2017-08-12 00:36:06'),
(11, 'hash', 'Hash', 2, 19, 0, '', 0, 250, 0, '', 0, '2017-08-12 00:36:06', '2017-08-12 00:36:06'),
(12, 'public', 'Is Public', 2, 2, 0, '0', 0, 0, 0, '', 0, '2017-08-12 00:36:06', '2017-08-12 00:36:06'),
(13, 'name', 'Name', 3, 16, 1, '', 1, 250, 1, '', 0, '2017-08-12 00:36:08', '2017-08-12 00:36:08'),
(14, 'tags', 'Tags', 3, 20, 0, '[]', 0, 0, 0, '', 0, '2017-08-12 00:36:08', '2017-08-12 00:36:08'),
(15, 'color', 'Color', 3, 19, 0, '', 0, 50, 1, '', 0, '2017-08-12 00:36:08', '2017-08-12 00:36:08'),
(16, 'name', 'Name', 4, 16, 0, '', 5, 250, 1, '', 0, '2017-08-12 00:36:09', '2017-08-12 00:36:09'),
(17, 'designation', 'Designation', 4, 19, 0, '', 0, 50, 1, '', 0, '2017-08-12 00:36:09', '2017-08-12 00:36:09'),
(18, 'gender', 'Gender', 4, 18, 0, 'Male', 0, 0, 1, '["Male","Female"]', 0, '2017-08-12 00:36:09', '2017-08-12 00:36:09'),
(19, 'mobile', 'Mobile', 4, 14, 0, '', 10, 20, 1, '', 0, '2017-08-12 00:36:09', '2017-08-12 00:36:09'),
(20, 'mobile2', 'Alternative Mobile', 4, 14, 0, '', 10, 20, 0, '', 0, '2017-08-12 00:36:09', '2017-08-12 00:36:09'),
(21, 'email', 'Email', 4, 8, 1, '', 5, 250, 1, '', 0, '2017-08-12 00:36:09', '2017-08-12 00:36:09'),
(22, 'dept', 'Department', 4, 7, 0, '0', 0, 0, 1, '@departments', 0, '2017-08-12 00:36:09', '2017-08-12 00:36:09'),
(23, 'city', 'City', 4, 19, 0, '', 0, 50, 0, '', 0, '2017-08-12 00:36:10', '2017-08-12 00:36:10'),
(24, 'address', 'Address', 4, 1, 0, '', 0, 1000, 0, '', 0, '2017-08-12 00:36:10', '2017-08-12 00:36:10'),
(25, 'about', 'About', 4, 19, 0, '', 0, 0, 0, '', 0, '2017-08-12 00:36:10', '2017-08-12 00:36:10'),
(26, 'date_birth', 'Date of Birth', 4, 4, 0, '1990-01-01', 0, 0, 0, '', 0, '2017-08-12 00:36:10', '2017-08-12 00:36:10'),
(27, 'date_hire', 'Hiring Date', 4, 4, 0, 'date(''Y-m-d'')', 0, 0, 0, '', 0, '2017-08-12 00:36:10', '2017-08-12 00:36:10'),
(28, 'date_left', 'Resignation Date', 4, 4, 0, '1990-01-01', 0, 0, 0, '', 0, '2017-08-12 00:36:10', '2017-08-12 00:36:10'),
(29, 'salary_cur', 'Current Salary', 4, 6, 0, '0.0', 0, 2, 0, '', 0, '2017-08-12 00:36:10', '2017-08-12 00:36:10'),
(30, 'name', 'Name', 5, 16, 1, '', 1, 250, 1, '', 0, '2017-08-12 00:36:12', '2017-08-12 00:36:12'),
(31, 'display_name', 'Display Name', 5, 19, 0, '', 0, 250, 1, '', 0, '2017-08-12 00:36:12', '2017-08-12 00:36:12'),
(32, 'description', 'Description', 5, 21, 0, '', 0, 1000, 0, '', 0, '2017-08-12 00:36:12', '2017-08-12 00:36:12'),
(33, 'parent', 'Parent Role', 5, 7, 0, '1', 0, 0, 0, '@roles', 0, '2017-08-12 00:36:12', '2017-08-12 00:36:12'),
(34, 'dept', 'Department', 5, 7, 0, '1', 0, 0, 0, '@departments', 0, '2017-08-12 00:36:12', '2017-08-12 00:36:12'),
(35, 'name', 'Name', 6, 16, 1, '', 5, 250, 1, '', 0, '2017-08-12 00:36:19', '2017-08-12 00:36:19'),
(36, 'email', 'Email', 6, 8, 1, '', 0, 250, 0, '', 0, '2017-08-12 00:36:19', '2017-08-12 00:36:19'),
(37, 'phone', 'Phone', 6, 14, 0, '', 0, 20, 0, '', 0, '2017-08-12 00:36:19', '2017-08-12 00:36:19'),
(38, 'website', 'Website', 6, 23, 0, 'http://', 0, 250, 0, '', 0, '2017-08-12 00:36:19', '2017-08-12 00:36:19'),
(39, 'assigned_to', 'Assigned to', 6, 7, 0, '0', 0, 0, 0, '@employees', 0, '2017-08-12 00:36:19', '2017-08-12 00:36:19'),
(40, 'connect_since', 'Connected Since', 6, 4, 0, 'date(''Y-m-d'')', 0, 0, 0, '', 0, '2017-08-12 00:36:19', '2017-08-12 00:36:19'),
(41, 'address', 'Address', 6, 1, 0, '', 0, 1000, 1, '', 0, '2017-08-12 00:36:19', '2017-08-12 00:36:19'),
(42, 'city', 'City', 6, 19, 0, '', 0, 250, 1, '', 0, '2017-08-12 00:36:19', '2017-08-12 00:36:19'),
(43, 'description', 'Description', 6, 21, 0, '', 0, 1000, 0, '', 0, '2017-08-12 00:36:20', '2017-08-12 00:36:20'),
(44, 'profile_image', 'Profile Image', 6, 12, 0, '', 0, 250, 0, '', 0, '2017-08-12 00:36:20', '2017-08-12 00:36:20'),
(45, 'profile', 'Company Profile', 6, 9, 0, '', 0, 250, 0, '', 0, '2017-08-12 00:36:20', '2017-08-12 00:36:20'),
(46, 'name', 'Name', 7, 16, 1, '', 0, 250, 1, '', 0, '2017-08-12 00:36:23', '2017-08-12 00:36:23'),
(47, 'file_name', 'File Name', 7, 19, 1, '', 0, 250, 1, '', 0, '2017-08-12 00:36:23', '2017-08-12 00:36:23'),
(48, 'backup_size', 'File Size', 7, 19, 0, '0', 0, 10, 1, '', 0, '2017-08-12 00:36:23', '2017-08-12 00:36:23'),
(49, 'name', 'Name', 8, 16, 1, '', 1, 250, 1, '', 0, '2017-08-12 00:36:26', '2017-08-12 00:36:26'),
(50, 'display_name', 'Display Name', 8, 19, 0, '', 0, 250, 1, '', 0, '2017-08-12 00:36:26', '2017-08-12 00:36:26'),
(51, 'description', 'Description', 8, 21, 0, '', 0, 1000, 0, '', 0, '2017-08-12 00:36:26', '2017-08-12 00:36:26'),
(52, 'address', 'Address', 9, 1, 0, '', 0, 256, 0, '', 2, '2017-08-12 01:02:05', '2017-08-12 01:02:05'),
(53, 'checkbox', 'checkbox', 9, 2, 0, '', 0, 0, 0, '', 3, '2017-08-12 01:02:26', '2017-08-12 01:02:26'),
(54, 'currency', 'currency', 9, 3, 0, '', 0, 11, 0, '', 4, '2017-08-12 01:02:41', '2017-08-12 01:02:41'),
(55, 'date', 'date', 9, 4, 0, '', 0, 0, 0, '', 5, '2017-08-12 01:02:50', '2017-08-12 01:02:50'),
(56, 'datetime', 'datetime', 9, 5, 0, '', 0, 0, 0, '', 6, '2017-08-12 01:03:05', '2017-08-12 01:03:05'),
(57, 'decimal', 'decimal', 9, 6, 0, '', 0, 11, 0, '', 7, '2017-08-12 01:03:18', '2017-08-12 01:03:18'),
(58, 'dropdown', 'dropdown', 9, 7, 0, '', 0, 0, 0, '@users', 8, '2017-08-12 01:03:48', '2017-08-12 01:03:48'),
(59, 'email', 'email', 9, 8, 0, '', 0, 256, 0, '', 9, '2017-08-12 01:04:04', '2017-08-12 01:04:04'),
(60, 'file', 'file', 9, 9, 0, '', 0, 0, 0, '', 10, '2017-08-12 01:04:14', '2017-08-12 01:04:14'),
(61, 'float', 'float', 9, 10, 0, '', 0, 11, 0, '', 11, '2017-08-12 01:04:28', '2017-08-12 01:04:28'),
(62, 'html', 'html', 9, 11, 0, '', 0, 0, 0, '', 12, '2017-08-12 01:04:39', '2017-08-12 01:04:39'),
(63, 'image', 'image', 9, 12, 0, '', 0, 0, 0, '', 13, '2017-08-12 01:04:51', '2017-08-12 01:04:51'),
(64, 'integer', 'integer', 9, 13, 0, '', 0, 11, 0, '', 14, '2017-08-12 01:05:05', '2017-08-12 01:05:05'),
(65, 'mobile', 'mobile', 9, 14, 0, '', 0, 20, 0, '', 15, '2017-08-12 01:05:17', '2017-08-12 01:05:17'),
(66, 'multiselect', 'multiselect', 9, 15, 0, '', 0, 0, 0, '@users', 16, '2017-08-12 01:05:37', '2017-08-12 01:05:37'),
(67, 'name', 'name', 9, 16, 0, '', 0, 256, 0, '', 17, '2017-08-12 01:05:51', '2017-08-12 01:05:51'),
(68, 'password', 'password', 9, 17, 0, '', 0, 256, 0, '', 18, '2017-08-12 01:06:06', '2017-08-12 01:06:06'),
(69, 'radio', 'radio', 9, 18, 0, '', 0, 0, 0, '@departments', 19, '2017-08-12 01:06:19', '2017-08-12 01:06:19'),
(70, 'string', 'string', 9, 19, 0, '', 0, 256, 0, '', 20, '2017-08-12 01:06:32', '2017-08-12 01:06:32'),
(71, 'taginput', 'taginput', 9, 20, 0, '', 0, 256, 0, '@departments', 21, '2017-08-12 01:06:53', '2017-08-12 01:06:53'),
(72, 'textarea', 'textarea', 9, 21, 0, '', 0, 0, 0, '', 22, '2017-08-12 01:07:09', '2017-08-12 01:07:09'),
(73, 'textfield', 'textfield', 9, 22, 0, '', 0, 256, 0, '', 23, '2017-08-12 01:07:24', '2017-08-12 01:07:24'),
(74, 'url', 'url', 9, 23, 0, '', 0, 256, 0, '', 24, '2017-08-12 01:07:36', '2017-08-12 01:07:36'),
(75, 'multi_file', 'files', 9, 24, 0, '', 0, 0, 0, '', 25, '2017-08-12 01:08:25', '2017-08-12 01:08:25'),
(76, 'slug', 'slug', 9, 22, 0, '', 0, 256, 0, '', 1, '2017-08-12 01:08:46', '2017-08-12 01:08:46');

-- --------------------------------------------------------

--
-- Table structure for table `module_field_types`
--

CREATE TABLE IF NOT EXISTS `module_field_types` (
  `id` int(10) unsigned NOT NULL,
  `name` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `module_field_types`
--

INSERT INTO `module_field_types` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Address', '2017-08-12 00:35:56', '2017-08-12 00:35:56'),
(2, 'Checkbox', '2017-08-12 00:35:56', '2017-08-12 00:35:56'),
(3, 'Currency', '2017-08-12 00:35:56', '2017-08-12 00:35:56'),
(4, 'Date', '2017-08-12 00:35:56', '2017-08-12 00:35:56'),
(5, 'Datetime', '2017-08-12 00:35:56', '2017-08-12 00:35:56'),
(6, 'Decimal', '2017-08-12 00:35:57', '2017-08-12 00:35:57'),
(7, 'Dropdown', '2017-08-12 00:35:57', '2017-08-12 00:35:57'),
(8, 'Email', '2017-08-12 00:35:57', '2017-08-12 00:35:57'),
(9, 'File', '2017-08-12 00:35:57', '2017-08-12 00:35:57'),
(10, 'Float', '2017-08-12 00:35:57', '2017-08-12 00:35:57'),
(11, 'HTML', '2017-08-12 00:35:57', '2017-08-12 00:35:57'),
(12, 'Image', '2017-08-12 00:35:57', '2017-08-12 00:35:57'),
(13, 'Integer', '2017-08-12 00:35:57', '2017-08-12 00:35:57'),
(14, 'Mobile', '2017-08-12 00:35:57', '2017-08-12 00:35:57'),
(15, 'Multiselect', '2017-08-12 00:35:57', '2017-08-12 00:35:57'),
(16, 'Name', '2017-08-12 00:35:57', '2017-08-12 00:35:57'),
(17, 'Password', '2017-08-12 00:35:57', '2017-08-12 00:35:57'),
(18, 'Radio', '2017-08-12 00:35:57', '2017-08-12 00:35:57'),
(19, 'String', '2017-08-12 00:35:57', '2017-08-12 00:35:57'),
(20, 'Taginput', '2017-08-12 00:35:57', '2017-08-12 00:35:57'),
(21, 'Textarea', '2017-08-12 00:35:57', '2017-08-12 00:35:57'),
(22, 'TextField', '2017-08-12 00:35:58', '2017-08-12 00:35:58'),
(23, 'URL', '2017-08-12 00:35:58', '2017-08-12 00:35:58'),
(24, 'Files', '2017-08-12 00:35:58', '2017-08-12 00:35:58');

-- --------------------------------------------------------

--
-- Table structure for table `organizations`
--

CREATE TABLE IF NOT EXISTS `organizations` (
  `id` int(10) unsigned NOT NULL,
  `name` varchar(250) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `email` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `website` varchar(250) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'http://',
  `assigned_to` int(10) unsigned NOT NULL DEFAULT '1',
  `connect_since` date NOT NULL,
  `address` varchar(1000) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `city` varchar(250) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `description` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `profile_image` int(11) NOT NULL,
  `profile` int(11) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE IF NOT EXISTS `permissions` (
  `id` int(10) unsigned NOT NULL,
  `name` varchar(250) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `display_name` varchar(250) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `description` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `display_name`, `description`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'ADMIN_PANEL', 'Admin Panel', 'Admin Panel Permission', NULL, '2017-08-12 00:36:46', '2017-08-12 00:36:46');

-- --------------------------------------------------------

--
-- Table structure for table `permission_role`
--

CREATE TABLE IF NOT EXISTS `permission_role` (
  `permission_id` int(10) unsigned NOT NULL,
  `role_id` int(10) unsigned NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `permission_role`
--

INSERT INTO `permission_role` (`permission_id`, `role_id`) VALUES
(1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE IF NOT EXISTS `roles` (
  `id` int(10) unsigned NOT NULL,
  `name` varchar(250) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `display_name` varchar(250) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `description` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `parent` int(10) unsigned NOT NULL DEFAULT '1',
  `dept` int(10) unsigned NOT NULL DEFAULT '1',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `display_name`, `description`, `parent`, `dept`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'SUPER_ADMIN', 'Super Admin', 'Full Access Role', 1, 1, NULL, '2017-08-12 00:36:41', '2017-08-12 00:36:41');

-- --------------------------------------------------------

--
-- Table structure for table `role_module`
--

CREATE TABLE IF NOT EXISTS `role_module` (
  `id` int(10) unsigned NOT NULL,
  `role_id` int(10) unsigned NOT NULL,
  `module_id` int(10) unsigned NOT NULL,
  `acc_view` tinyint(1) NOT NULL,
  `acc_create` tinyint(1) NOT NULL,
  `acc_edit` tinyint(1) NOT NULL,
  `acc_delete` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `role_module`
--

INSERT INTO `role_module` (`id`, `role_id`, `module_id`, `acc_view`, `acc_create`, `acc_edit`, `acc_delete`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 1, 1, 1, 1, '2017-08-12 00:36:41', '2017-08-12 00:36:41'),
(2, 1, 2, 1, 1, 1, 1, '2017-08-12 00:36:42', '2017-08-12 00:36:42'),
(3, 1, 3, 1, 1, 1, 1, '2017-08-12 00:36:43', '2017-08-12 00:36:43'),
(4, 1, 4, 1, 1, 1, 1, '2017-08-12 00:36:44', '2017-08-12 00:36:44'),
(5, 1, 5, 1, 1, 1, 1, '2017-08-12 00:36:44', '2017-08-12 00:36:44'),
(6, 1, 6, 1, 1, 1, 1, '2017-08-12 00:36:45', '2017-08-12 00:36:45'),
(7, 1, 7, 1, 1, 1, 1, '2017-08-12 00:36:45', '2017-08-12 00:36:45'),
(8, 1, 8, 1, 1, 1, 1, '2017-08-12 00:36:45', '2017-08-12 00:36:45'),
(9, 1, 9, 1, 1, 1, 1, '2017-08-12 01:08:55', '2017-08-12 01:08:55');

-- --------------------------------------------------------

--
-- Table structure for table `role_module_fields`
--

CREATE TABLE IF NOT EXISTS `role_module_fields` (
  `id` int(10) unsigned NOT NULL,
  `role_id` int(10) unsigned NOT NULL,
  `field_id` int(10) unsigned NOT NULL,
  `access` enum('invisible','readonly','write') COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=77 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `role_module_fields`
--

INSERT INTO `role_module_fields` (`id`, `role_id`, `field_id`, `access`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'write', '2017-08-12 00:36:41', '2017-08-12 00:36:41'),
(2, 1, 2, 'write', '2017-08-12 00:36:41', '2017-08-12 00:36:41'),
(3, 1, 3, 'write', '2017-08-12 00:36:41', '2017-08-12 00:36:41'),
(4, 1, 4, 'write', '2017-08-12 00:36:41', '2017-08-12 00:36:41'),
(5, 1, 5, 'write', '2017-08-12 00:36:41', '2017-08-12 00:36:41'),
(6, 1, 6, 'write', '2017-08-12 00:36:42', '2017-08-12 00:36:42'),
(7, 1, 7, 'write', '2017-08-12 00:36:42', '2017-08-12 00:36:42'),
(8, 1, 8, 'write', '2017-08-12 00:36:42', '2017-08-12 00:36:42'),
(9, 1, 9, 'write', '2017-08-12 00:36:42', '2017-08-12 00:36:42'),
(10, 1, 10, 'write', '2017-08-12 00:36:42', '2017-08-12 00:36:42'),
(11, 1, 11, 'write', '2017-08-12 00:36:42', '2017-08-12 00:36:42'),
(12, 1, 12, 'write', '2017-08-12 00:36:42', '2017-08-12 00:36:42'),
(13, 1, 13, 'write', '2017-08-12 00:36:43', '2017-08-12 00:36:43'),
(14, 1, 14, 'write', '2017-08-12 00:36:43', '2017-08-12 00:36:43'),
(15, 1, 15, 'write', '2017-08-12 00:36:43', '2017-08-12 00:36:43'),
(16, 1, 16, 'write', '2017-08-12 00:36:44', '2017-08-12 00:36:44'),
(17, 1, 17, 'write', '2017-08-12 00:36:44', '2017-08-12 00:36:44'),
(18, 1, 18, 'write', '2017-08-12 00:36:44', '2017-08-12 00:36:44'),
(19, 1, 19, 'write', '2017-08-12 00:36:44', '2017-08-12 00:36:44'),
(20, 1, 20, 'write', '2017-08-12 00:36:44', '2017-08-12 00:36:44'),
(21, 1, 21, 'write', '2017-08-12 00:36:44', '2017-08-12 00:36:44'),
(22, 1, 22, 'write', '2017-08-12 00:36:44', '2017-08-12 00:36:44'),
(23, 1, 23, 'write', '2017-08-12 00:36:44', '2017-08-12 00:36:44'),
(24, 1, 24, 'write', '2017-08-12 00:36:44', '2017-08-12 00:36:44'),
(25, 1, 25, 'write', '2017-08-12 00:36:44', '2017-08-12 00:36:44'),
(26, 1, 26, 'write', '2017-08-12 00:36:44', '2017-08-12 00:36:44'),
(27, 1, 27, 'write', '2017-08-12 00:36:44', '2017-08-12 00:36:44'),
(28, 1, 28, 'write', '2017-08-12 00:36:44', '2017-08-12 00:36:44'),
(29, 1, 29, 'write', '2017-08-12 00:36:44', '2017-08-12 00:36:44'),
(30, 1, 30, 'write', '2017-08-12 00:36:44', '2017-08-12 00:36:44'),
(31, 1, 31, 'write', '2017-08-12 00:36:44', '2017-08-12 00:36:44'),
(32, 1, 32, 'write', '2017-08-12 00:36:44', '2017-08-12 00:36:44'),
(33, 1, 33, 'write', '2017-08-12 00:36:44', '2017-08-12 00:36:44'),
(34, 1, 34, 'write', '2017-08-12 00:36:44', '2017-08-12 00:36:44'),
(35, 1, 35, 'write', '2017-08-12 00:36:45', '2017-08-12 00:36:45'),
(36, 1, 36, 'write', '2017-08-12 00:36:45', '2017-08-12 00:36:45'),
(37, 1, 37, 'write', '2017-08-12 00:36:45', '2017-08-12 00:36:45'),
(38, 1, 38, 'write', '2017-08-12 00:36:45', '2017-08-12 00:36:45'),
(39, 1, 39, 'write', '2017-08-12 00:36:45', '2017-08-12 00:36:45'),
(40, 1, 40, 'write', '2017-08-12 00:36:45', '2017-08-12 00:36:45'),
(41, 1, 41, 'write', '2017-08-12 00:36:45', '2017-08-12 00:36:45'),
(42, 1, 42, 'write', '2017-08-12 00:36:45', '2017-08-12 00:36:45'),
(43, 1, 43, 'write', '2017-08-12 00:36:45', '2017-08-12 00:36:45'),
(44, 1, 44, 'write', '2017-08-12 00:36:45', '2017-08-12 00:36:45'),
(45, 1, 45, 'write', '2017-08-12 00:36:45', '2017-08-12 00:36:45'),
(46, 1, 46, 'write', '2017-08-12 00:36:45', '2017-08-12 00:36:45'),
(47, 1, 47, 'write', '2017-08-12 00:36:45', '2017-08-12 00:36:45'),
(48, 1, 48, 'write', '2017-08-12 00:36:45', '2017-08-12 00:36:45'),
(49, 1, 49, 'write', '2017-08-12 00:36:45', '2017-08-12 00:36:45'),
(50, 1, 50, 'write', '2017-08-12 00:36:45', '2017-08-12 00:36:45'),
(51, 1, 51, 'write', '2017-08-12 00:36:45', '2017-08-12 00:36:45'),
(52, 1, 52, 'write', '2017-08-12 01:02:07', '2017-08-12 01:02:07'),
(53, 1, 53, 'write', '2017-08-12 01:02:27', '2017-08-12 01:02:27'),
(54, 1, 54, 'write', '2017-08-12 01:02:42', '2017-08-12 01:02:42'),
(55, 1, 55, 'write', '2017-08-12 01:02:51', '2017-08-12 01:02:51'),
(56, 1, 56, 'write', '2017-08-12 01:03:06', '2017-08-12 01:03:06'),
(57, 1, 57, 'write', '2017-08-12 01:03:19', '2017-08-12 01:03:19'),
(58, 1, 58, 'write', '2017-08-12 01:03:50', '2017-08-12 01:03:50'),
(59, 1, 59, 'write', '2017-08-12 01:04:04', '2017-08-12 01:04:04'),
(60, 1, 60, 'write', '2017-08-12 01:04:14', '2017-08-12 01:04:14'),
(61, 1, 61, 'write', '2017-08-12 01:04:28', '2017-08-12 01:04:28'),
(62, 1, 62, 'write', '2017-08-12 01:04:40', '2017-08-12 01:04:40'),
(63, 1, 63, 'write', '2017-08-12 01:04:52', '2017-08-12 01:04:52'),
(64, 1, 64, 'write', '2017-08-12 01:05:06', '2017-08-12 01:05:06'),
(65, 1, 65, 'write', '2017-08-12 01:05:18', '2017-08-12 01:05:18'),
(66, 1, 66, 'write', '2017-08-12 01:05:38', '2017-08-12 01:05:38'),
(67, 1, 67, 'write', '2017-08-12 01:05:52', '2017-08-12 01:05:52'),
(68, 1, 68, 'write', '2017-08-12 01:06:07', '2017-08-12 01:06:07'),
(69, 1, 69, 'write', '2017-08-12 01:06:20', '2017-08-12 01:06:20'),
(70, 1, 70, 'write', '2017-08-12 01:06:33', '2017-08-12 01:06:33'),
(71, 1, 71, 'write', '2017-08-12 01:06:54', '2017-08-12 01:06:54'),
(72, 1, 72, 'write', '2017-08-12 01:07:10', '2017-08-12 01:07:10'),
(73, 1, 73, 'write', '2017-08-12 01:07:24', '2017-08-12 01:07:24'),
(74, 1, 74, 'write', '2017-08-12 01:07:37', '2017-08-12 01:07:37'),
(75, 1, 75, 'write', '2017-08-12 01:08:27', '2017-08-12 01:08:27'),
(76, 1, 76, 'write', '2017-08-12 01:08:46', '2017-08-12 01:08:46');

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE IF NOT EXISTS `role_user` (
  `id` int(10) unsigned NOT NULL,
  `role_id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `role_user`
--

INSERT INTO `role_user` (`id`, `role_id`, `user_id`, `created_at`, `updated_at`) VALUES
(2, 1, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `testings`
--

CREATE TABLE IF NOT EXISTS `testings` (
  `id` int(10) unsigned NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `address` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `checkbox` tinyint(1) NOT NULL DEFAULT '0',
  `currency` double(15,2) NOT NULL,
  `date` date NOT NULL,
  `datetime` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `decimal` decimal(15,3) NOT NULL,
  `dropdown` int(10) unsigned NOT NULL DEFAULT '1',
  `email` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `file` int(11) NOT NULL,
  `float` double(8,2) NOT NULL,
  `html` varchar(10000) COLLATE utf8_unicode_ci NOT NULL,
  `image` int(11) NOT NULL,
  `integer` int(10) unsigned NOT NULL,
  `mobile` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `multiselect` varchar(256) COLLATE utf8_unicode_ci NOT NULL DEFAULT '[]',
  `name` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `radio` int(10) unsigned NOT NULL,
  `string` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `taginput` varchar(1000) COLLATE utf8_unicode_ci NOT NULL DEFAULT '[""]',
  `textarea` text COLLATE utf8_unicode_ci NOT NULL,
  `textfield` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `url` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `multi_file` varchar(256) COLLATE utf8_unicode_ci NOT NULL DEFAULT '[]',
  `slug` varchar(256) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `testings`
--

INSERT INTO `testings` (`id`, `deleted_at`, `created_at`, `updated_at`, `address`, `checkbox`, `currency`, `date`, `datetime`, `decimal`, `dropdown`, `email`, `file`, `float`, `html`, `image`, `integer`, `mobile`, `multiselect`, `name`, `password`, `radio`, `string`, `taginput`, `textarea`, `textfield`, `url`, `multi_file`, `slug`) VALUES
(1, NULL, '2017-08-12 01:12:39', '2017-08-12 01:13:13', '', 0, 0.00, '1970-01-01', '0000-00-00 00:00:00', '0.000', 1, '', 0, 0.00, '', 0, 0, '', '[]', '1234', '$2y$10$5.A1zcgLWC3JmxjoL3Tsl.HhHueceNpVOlLLTZQdq9xwWuY1uj/vS', 0, '', '[""]', '', '', '', '[]', 'test123');

-- --------------------------------------------------------

--
-- Table structure for table `uploads`
--

CREATE TABLE IF NOT EXISTS `uploads` (
  `id` int(10) unsigned NOT NULL,
  `name` varchar(250) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `path` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `extension` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `caption` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(10) unsigned NOT NULL DEFAULT '1',
  `hash` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `public` tinyint(1) NOT NULL DEFAULT '0',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL,
  `name` varchar(250) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `context_id` int(10) unsigned NOT NULL DEFAULT '0',
  `email` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(250) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'Employee',
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `context_id`, `email`, `password`, `type`, `remember_token`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Zoe Shu', 1, 'zoe.shu.wm@gmail.com', '$2y$10$1R8wymq4pd/FHTsb.bxjWODpB6OiUhbu9vh2BgSVdNz5sa4Nwn2N.', 'Employee', 'PdLwqFnGFfeRGyKq0EVPT7UlmTUoDD6ocKaf0cdm7KUEhJdhic0OOLEyvTRp', NULL, '2017-08-12 00:37:34', '2017-08-12 02:15:32');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `backups`
--
ALTER TABLE `backups`
  ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `backups_name_unique` (`name`), ADD UNIQUE KEY `backups_file_name_unique` (`file_name`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `departments_name_unique` (`name`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `employees_email_unique` (`email`), ADD KEY `employees_dept_foreign` (`dept`);

--
-- Indexes for table `la_configs`
--
ALTER TABLE `la_configs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `la_menus`
--
ALTER TABLE `la_menus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `modules`
--
ALTER TABLE `modules`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `module_fields`
--
ALTER TABLE `module_fields`
  ADD PRIMARY KEY (`id`), ADD KEY `module_fields_module_foreign` (`module`), ADD KEY `module_fields_field_type_foreign` (`field_type`);

--
-- Indexes for table `module_field_types`
--
ALTER TABLE `module_field_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `organizations`
--
ALTER TABLE `organizations`
  ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `organizations_name_unique` (`name`), ADD UNIQUE KEY `organizations_email_unique` (`email`), ADD KEY `organizations_assigned_to_foreign` (`assigned_to`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`), ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `permissions_name_unique` (`name`);

--
-- Indexes for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD PRIMARY KEY (`permission_id`,`role_id`), ADD KEY `permission_role_role_id_foreign` (`role_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `roles_name_unique` (`name`), ADD KEY `roles_parent_foreign` (`parent`), ADD KEY `roles_dept_foreign` (`dept`);

--
-- Indexes for table `role_module`
--
ALTER TABLE `role_module`
  ADD PRIMARY KEY (`id`), ADD KEY `role_module_role_id_foreign` (`role_id`), ADD KEY `role_module_module_id_foreign` (`module_id`);

--
-- Indexes for table `role_module_fields`
--
ALTER TABLE `role_module_fields`
  ADD PRIMARY KEY (`id`), ADD KEY `role_module_fields_role_id_foreign` (`role_id`), ADD KEY `role_module_fields_field_id_foreign` (`field_id`);

--
-- Indexes for table `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`id`), ADD KEY `role_user_role_id_foreign` (`role_id`), ADD KEY `role_user_user_id_foreign` (`user_id`);

--
-- Indexes for table `testings`
--
ALTER TABLE `testings`
  ADD PRIMARY KEY (`id`), ADD KEY `testings_dropdown_foreign` (`dropdown`);

--
-- Indexes for table `uploads`
--
ALTER TABLE `uploads`
  ADD PRIMARY KEY (`id`), ADD KEY `uploads_user_id_foreign` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `backups`
--
ALTER TABLE `backups`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `la_configs`
--
ALTER TABLE `la_configs`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `la_menus`
--
ALTER TABLE `la_menus`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `modules`
--
ALTER TABLE `modules`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `module_fields`
--
ALTER TABLE `module_fields`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=77;
--
-- AUTO_INCREMENT for table `module_field_types`
--
ALTER TABLE `module_field_types`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `organizations`
--
ALTER TABLE `organizations`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `role_module`
--
ALTER TABLE `role_module`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `role_module_fields`
--
ALTER TABLE `role_module_fields`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=77;
--
-- AUTO_INCREMENT for table `role_user`
--
ALTER TABLE `role_user`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `testings`
--
ALTER TABLE `testings`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `uploads`
--
ALTER TABLE `uploads`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `employees`
--
ALTER TABLE `employees`
ADD CONSTRAINT `employees_dept_foreign` FOREIGN KEY (`dept`) REFERENCES `departments` (`id`);

--
-- Constraints for table `module_fields`
--
ALTER TABLE `module_fields`
ADD CONSTRAINT `module_fields_field_type_foreign` FOREIGN KEY (`field_type`) REFERENCES `module_field_types` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `module_fields_module_foreign` FOREIGN KEY (`module`) REFERENCES `modules` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `organizations`
--
ALTER TABLE `organizations`
ADD CONSTRAINT `organizations_assigned_to_foreign` FOREIGN KEY (`assigned_to`) REFERENCES `employees` (`id`);

--
-- Constraints for table `permission_role`
--
ALTER TABLE `permission_role`
ADD CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `roles`
--
ALTER TABLE `roles`
ADD CONSTRAINT `roles_dept_foreign` FOREIGN KEY (`dept`) REFERENCES `departments` (`id`),
ADD CONSTRAINT `roles_parent_foreign` FOREIGN KEY (`parent`) REFERENCES `roles` (`id`);

--
-- Constraints for table `role_module`
--
ALTER TABLE `role_module`
ADD CONSTRAINT `role_module_module_id_foreign` FOREIGN KEY (`module_id`) REFERENCES `modules` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `role_module_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `role_module_fields`
--
ALTER TABLE `role_module_fields`
ADD CONSTRAINT `role_module_fields_field_id_foreign` FOREIGN KEY (`field_id`) REFERENCES `module_fields` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `role_module_fields_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `role_user`
--
ALTER TABLE `role_user`
ADD CONSTRAINT `role_user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `role_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `testings`
--
ALTER TABLE `testings`
ADD CONSTRAINT `testings_dropdown_foreign` FOREIGN KEY (`dropdown`) REFERENCES `users` (`id`);

--
-- Constraints for table `uploads`
--
ALTER TABLE `uploads`
ADD CONSTRAINT `uploads_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
