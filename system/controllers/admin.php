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
	$data['name'] = get_session('user_name');
	load_view('settings', $data, false, true);
}

?>
