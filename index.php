<?php
// define root directory
define("LOCAL_DIR", realpath(dirname(__FILE__) . '/') . '/');
define("BASE_URL", "http://localhost/CMS/");
define("ADMIN", 2);
define("MOD", 1);
define("USER", 0);
//load system base files
require(LOCAL_DIR . 'system/system.php');

// run constructor functions
system_construct();

// rerouting and bodywork
url_dispatch();

// run destructor functions
system_destruct();

?>
