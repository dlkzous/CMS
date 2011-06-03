<?php
// define root directory
define("LOCAL_DIR", realpath(dirname(__FILE__) . '/') . '/');
define("BASE_URL", "http://localhost/CMS/");

//load system base files
require(LOCAL_DIR . 'system/system.php');

// run constructor functions
system_construct();

// rerouting and bodywork
url_dispatch();

// run destructor functions
system_destruct();

?>
