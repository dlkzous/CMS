<?

function load_view($view, $data = array()){
	$template = $_SESSION['template'];
	if($template){
		if(file_exists(BASE_URL."system/views/$template/".$view.".php"))
		{
			extract($data);
			//require(BASE_URL."system/views/$template/header.php");
			require(BASE_URL."system/views/$template/".$view.".php");
		}else{
			$error_message = "The view for this page cannot be found on the server.";
			require(BASE_URL."system/views/$template/error.php");
		}
	}else{
		echo "<br>Unable to get template settings";
		echo "<br>Please check cookie settings";
		exit();
	}
}

function load_model($model){
	require(BASE_URL.'system/models/'.$model.".php");
}

function load_helper($helper){
	require(BASE_URL.'system/helpers/'.$helper.".php");
}

function load_controller($controller){
	if(file_exists(BASE_URL.'system/controllers/'.$controller.".php")){
		$_SESSION['controller_exists'] = "1";
		require(BASE_URL.'system/controllers/'.$controller.".php");
	}else{
		$_SESSION['controller_exists'] = "0";
		$error_message = "This page cannot be found on the server.";
		$template = $_SESSION['template'];
		require(BASE_URL."system/views/$template/error.php");
	}
}

function model_exec($name, $func, $params = array()){
	return call_user_func_array('model_'.$name.'_'.$func, $params);
}

?>
