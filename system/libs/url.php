<?php
// handle our url request
function url_dispatch()
{
	// take url path and trim the / of the
	// left and the right
	// split the url on the / 
	$url = explode('/', trim($_GET['url'], '/'));
	$size = sizeof($url);
	
	//load default controller settings
	$controller = $GLOBALS['config']['default_controller'];
	$c_function = 'index';
	$params = array();
	
	switch($size){
		// if the size of the array is 3, copy only parameters and fall into case 2
		default: 
				for($c = 2; $c < $size; $c++){
					$params[] = $url[$c];
				}
		case 2: 
		// if the array size is 2, copy only function to be called and fall into case 1
				if(!empty($url[1])){
					$c_function = $url[1];
				}
		case 1: 
		// if the array size if 1, copy controller to be called and end switch
				if(!empty($url[0])){
					$controller = $url[0];
				}
				break;
		// the size should never be 0, in case its 0 its a possible htaccess error.
		case 0: echo "possible htaccess error! Generateted by url.php";
		
	}
	
	//load the respective controller into memory
	load_controller($controller);
	
	if($_SESSION['controller_exists'] == "1")
	{
		//call the respective function in the controller and send parameters if any.
		call_user_func_array($controller.'_'.$c_function, $params);		
	}
}

//redirect to controller/page
function redirect($path){
	//send location header
	header( "Location: ".BASE_URL.$path ) ;
}

?>
