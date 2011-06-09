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
	
	$data['name'] = get_session('user_name');
	$data['settings'] = model_exec('admin', 'get_all_settings');
	
	dump($data);
	load_view('settings', $data, false, true);
}

?>
