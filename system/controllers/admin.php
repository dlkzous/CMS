<?

function admin_index(){
	$data['name'] = get_session('user_name');
	load_view('main', $data, false, true);
}

function admin_articles(){
	load_view('articles', $data, false, true);
}

function admin_settings(){
	load_view('settings', $data, false, true);
}

?>
