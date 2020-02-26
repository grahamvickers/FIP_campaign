<!-- this page will load all php functions to appropriate pages -->

<?php
define('ABSPATH', __DIR__);
define('ADMIN_PATH', ABSPATH.'/admin');
define('ADMIN_SCIPT_PATH', ADMIN_PATH.'/scripts');

ini_set('display_errors', 1);
session_start();
require_once ABSPATH.'/config/database.php';

require_once ADMIN_SCIPT_PATH.'/login.php';
require_once ADMIN_SCIPT_PATH.'/functions.php';
require_once ADMIN_SCIPT_PATH.'/user.php';
require_once ADMIN_SCIPT_PATH.'/signup.php';