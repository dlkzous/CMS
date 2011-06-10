<? // default system controller
$data = array();

function main_construct(){
	global $data;
	$data['categories'] = model_exec('global', 'get_all_categories');
	if(logged_in()){
		$data['name'] = get_session('username');
	}
}

function main_index(){
	global $data;
	load_view('main', $data);
}

?>
