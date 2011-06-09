<?

function admin_index(){
	$data['name'] = get_session('user_name');
	load_view('main', $data, false, true);
}

function admin_articles(){
	$data['name'] = get_session('user_name');
	load_view('articles', $data, false, true);
}

function admin_settings(){
	load_model('admin');
	load_helper('admin');
	load_helper('form');
	
	$data['name'] = get_session('user_name');
	$data['settings'] = model_exec('admin', 'get_all_settings');
		
	if(!form_submitted()){
		load_view('settings', $data, false, true);
	}else{
		$data['notice'] = "Settings Saved";
		load_view('settings', $data, false, true);
	}
}

?>
