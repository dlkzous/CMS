<? // user session helper

// return session variable value
function get_session($name){
	if(isset($_SESSION[$name]))
		return $_SESSION[$name];
	else 
		return false;
}

// store session variable value with name
function store_session($name, $value){
	$_SESSION[$name] = value;
}

?>
