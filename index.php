<?php
// define root directory
define("BASE_URL", realpath(dirname(__FILE__) . '/') . '/');

//load system base files
require(BASE_URL . 'system/load.php');

// dispatch file in here
dispatch();

?>
