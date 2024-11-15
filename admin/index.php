<?php
// Version
define('VERSION', '3.0.4.0');
error_reporting(E_ALL & ~E_NOTICE);
ini_set('display_errors', 'On');
// Configuration
if (is_file('config.php')) {
	require_once('config.php');
}

// Install
if (!defined('DIR_APPLICATION')) {
	header('Location: ../install/index.php');
	exit;
}

// Startup
require_once(DIR_SYSTEM . 'startup.php');

start('admin');
