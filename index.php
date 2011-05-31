<?php
// define root directory
define("BASE_URL", realpath(dirname(__FILE__) . '/') . '/');

global $DB, $config;
//load system base files
require(BASE_URL . 'system/load.php');

// run constructor functions
construct();

// rerouting and bodywork
dispatch();

// run destructor functions
destruct();

?>
