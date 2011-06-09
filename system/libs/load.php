<?

//Load a view and display to screen
function load_view($view, $data = array(), $ajax = false, $admin = false){
	$template = $_SESSION['template'];
	if(isset($_SESSION['template'])){
		if($admin){
				admin_check();
				$template = 'admin';
				dump($template);
		}
		
		if(file_exists(LOCAL_DIR."system/views/$template/$view.php"))
		{
			extract($data);
			if(!$ajax){
				require(LOCAL_DIR."system/views/$template/header.php");
			}
			require(LOCAL_DIR."system/views/$template/$view.php");
			if(!$ajax){
				require(LOCAL_DIR."system/views/$template/footer.php");
			}
		}else{
			$error_message = "The view for this page cannot be found on the server.";
			require(LOCAL_DIR."system/views/$template/error.php");
		}
	}else{
		echo "<br>Unable to get template settings";
		echo "<br>Please check cookie settings";
		exit();
	}
}

//Load a model communicate with database
function load_model($model){
	require(LOCAL_DIR.'system/models/'.$model.".php");
}


//load a helper for extra functionality
function load_helper($helper){
	require(LOCAL_DIR.'system/helpers/'.$helper.".php");
}

//load a controller
function load_controller($controller){
	if(file_exists(LOCAL_DIR."system/controllers/$controller.php")){
		$_SESSION['controller_exists'] = "1";
		require(LOCAL_DIR."system/controllers/$controller.php");
	}else{
		$_SESSION['controller_exists'] = "0";
		$error_message = "This page cannot be found on the server.";
		$template = $_SESSION['template'];
		require(LOCAL_DIR."system/views/$template/error.php");
	}
}

//execute a model function, pass parameters and return output
function model_exec($name, $func, $params = array()){
	return call_user_func_array('model_'.$name.'_'.$func, $params);
}

?>
