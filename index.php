<?php
// define root directory
define("BASE_URL", realpath(dirname(__FILE__) . '/') . '/');

//load system base files
require(BASE_URL . 'system/system.php');

// run constructor functions
system_construct();

// rerouting and bodywork
url_dispatch();

// run destructor functions
system_destruct();

?>
