<?php
// handle our url request
function url_dispatch()
{
	// take url path and trim the / of the
	// left and the right
	$url = trim($_GET['url'], '/');

	// split the url on the / 
	$url = explode('/', $url);
	dump($url);
}

?>
