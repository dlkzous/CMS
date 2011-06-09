<?

// dump function (or if you have xdebug you can just use var_dump)
function dump($item)
{
    $printString = '<pre>' . print_r($item, true) . '</pre>';
    echo $printString;
}

//Print site input/output produced to debug
function debug($item){
	echo "SESSION<br>";
	dump($_SESSION);

	echo "GET<br>";
	dump($_GET);
	
	echo "POST<br>";
	dump($_POST);
	
	echo "ITEM<br>";
	dump($item);
	
	exit();
}

?>
