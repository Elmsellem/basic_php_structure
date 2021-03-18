<?php

// DEV OR PROD
define('ENV_MODE', 'DEV');

// database
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'admin_db');

// paths
if (!defined('DS')) {
	define('DS', DIRECTORY_SEPARATOR);
}

define('DIR_HOME', realpath(__DIR__ . DS . '..'));
define('DIR_CONTROLLERS', DIR_HOME . DS . 'controllers');
define('DIR_DATABASE', DIR_HOME . DS . 'database');
define('DIR_REQUESTS', DIR_CONTROLLERS . DS . 'requests');
define('DIR_HELPERS', DIR_HOME . DS . 'helpers');
define('DIR_UPLOADS',DIR_HOME . DS . 'admin' . DS . 'uploads');
define('DIR_TEMPLATE', DIR_HOME. DS . 'templates');
define('DIR_PUBLIC', DIR_HOME. DS . 'public');
define('DIR_ADMIN', DIR_PUBLIC . DS . 'admin');

// links
define("ADMIN_BASE_URL", "http://" . gethostname() . '/admin');