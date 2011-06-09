<?

function admin_index(){
	$data['name'] = get_session('user_name');
	load_view('main', $data, false, true);
}

function admin_articles(){
	$data['name'] = get_session('user_name');
	load_view('articles', $data, false, true);
}

function admin_users(){
	$data['name'] = get_session('user_name');
	load_view('users', $data, false, true);
}

function admin_settings(){
	load_model('admin');
	load_helper('admin');
	load_helper('form');
	
	$data['name'] = get_session('user_name');
		
	if(form_submitted()){
		$newsettings['settings'] = array();
		foreach($_POST as $key => $input){
			//skip unused values
			if($key == "submit_check" || $key == "submit") continue;
			$newsettings['settings'][$key] = $input;
		}
		model_exec('admin', 'save_all_settings', $newsettings);
		
		$data['notice'] = "Settings Saved";
	}
	
	$data['settings'] = model_exec('admin', 'get_all_settings');
	load_view('settings', $data, false, true);
}

?>