<?php
// define apps root directory
define("BASE_URL", realpath(dirname(__FILE__) . '/') . '/');
 
// dump function (or if you have xdebug you can just use var_dump)
function dump($item, $die=true)
{
    $printString = '<pre>' . print_r($item, true) . '</pre>';
    if($die)
        die($printString);
    else
        echo $printString;
}

// dispatch file in here
require(BASE_URL . 'system/dispatch.php'); 
dispatch();

?>
