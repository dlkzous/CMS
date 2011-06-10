<? // default system controller
$data = array();

function main_construct(){
	global $data;
	$data['categories'] = model_exec('global', 'get_all_categories');
	if(logged_in()){
		$data['name'] = get_session('username');
	}
}

function main_index($category = false){
	global $data;
	load_model('article');
	$data['articles'] = model_exec('global', 'get_articles');
	foreach($data['articles'] as $key=>$art){
		$data['articles'][$key]['info'] = model_exec('article', 'getDetails', array($art['revision_id']));
	}
	load_view('main', $data);
}

?>
