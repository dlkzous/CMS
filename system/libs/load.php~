<?

function load_view($view, $data = array()){
	$template = $_SESSION['template'];
	if($template){
		foreach($data as $key => $value){
			$$key = $value;
		}
		require(BASE_URL."system/views/$template/".$view.".php");
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
	require(BASE_URL.'system/controllers/'.$controller.".php");
}

function model_exec($name, $func, $params = array()){
	return call_user_func_array('model_'.$name.'_'.$func, $params);
}

?>
