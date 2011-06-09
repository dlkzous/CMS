<?

// dump function (or if you have xdebug you can just use var_dump)
function dump($item, $die=true)
{
    $printString = '<pre>' . print_r($item, true) . '</pre>';
    if($die)
        die($printString);
    else
        echo $printString;
}

function debug(){
	echo "SESSION<br>";
	dump($_SESSION);

	echo "GET<br>";
	dump($_GET);
	
	echo "POST<br>";
	dump($_POST);
}

?>
