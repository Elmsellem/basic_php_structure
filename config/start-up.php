<?php

define('START_UP', true);
require_once __DIR__ . DIRECTORY_SEPARATOR . 'constants.php';

if (ENV_MODE === "DEV") {
	ini_set('display_errors', 1);
	error_reporting(E_ALL);
} else {
	ini_set('display_errors', 0);
	error_reporting(0);
}

require_once DIR_DATABASE . DS . 'database.php';
require_once DIR_HELPERS . DS . 'helpers.php';