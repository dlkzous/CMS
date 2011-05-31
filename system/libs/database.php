<?

function db_connect(){
	$config = $GLOBALS['config'];
	//Connect to mysql server
	$GLOBALS['DB'] = mysql_connect($config['db_server'], $config['db_username'], $config['db_password']);
	//Select appropraite database
	mysql_select_db($config['db_database'], $GLOBALS['DB']);
	
	//display error message if unable to connect
	if (!$GLOBALS['DB']){
	  die('Could not connect: ' . mysql_error());
	}
}

function db_query($sql){
	return mysql_query($sql,$GLOBALS['DB']);
}

function db_disconnect(){
	mysql_close($GLOBALS['DB']);
}

?>
