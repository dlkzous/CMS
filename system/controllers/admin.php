<?

function admin_index(){
	load_model('admin');
	$data['name'] = get_session('user_name');
	
	$data['dash']['Users']['Total'] = model_exec('admin', 'get_user_count');
	$data['dash']['Users']['Readers'] = model_exec('admin', 'get_user_count', array(USER));
	$data['dash']['Users']['Moderators'] = model_exec('admin', 'get_user_count', array(MOD));
	$data['dash']['Users']['Administrators'] = model_exec('admin', 'get_user_count', array(ADMIN));
	
	$data['dash']['Articles']['Total'] = model_exec('admin', 'get_article_count');
	$data['dash']['Articles']['Published'] = model_exec('admin', 'get_article_count', array(0));
	$data['dash']['Articles']['UnPublished'] = model_exec('admin', 'get_article_count', array(1));
	$data['dash']['Articles']['Revisions'] = model_exec('admin', 'get_rev_count');
	
	load_view('main', $data, false, true);
}

function admin_articles(){
	$data['name'] = get_session('user_name');
	load_view('articles', $data, false, true);
}

function admin_users(){
	load_model('admin');
	load_helper('form');
	
	$data['name'] = get_session('user_name');
	
	if(form_submitted()){
		$newuser['id'] = $_POST['id'];
		$newuser['user'] = array();
		foreach($_POST as $key => $input){
			//skip unused values
			if($key == "submit_check" || $key == "submit" || $key == "id") continue;
			$newuser['user'][$key] = $input;
		}
		model_exec('admin', 'update_user', $newuser);
		$data['save_id'] = $_POST['id'];
	}
	
	$data['users'] = model_exec('admin', 'get_all_users');
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
