<?php
// Version
define('VERSION', '3.0.4.0');

error_reporting(E_ALL);
ini_set('display_errors', 'On');

header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Headers: content-type,authorization');
header('Access-Control-Allow-Methods: PUT, GET, POST, DELETE, OPTIONS');

// Configuration
if (is_file('config.php')) {
	require_once('config.php');
}

// Install
if (!defined('DIR_APPLICATION')) {
	header('Location: install/index.php');
	exit;
}

// Startup
require_once(DIR_SYSTEM . 'startup.php');

start('catalog');
