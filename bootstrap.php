<?php

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

if (! defined('PROJECT_DIR')) {
	define('PROJECT_DIR', __DIR__);
}

include_once __DIR__ . '/functions.php';
