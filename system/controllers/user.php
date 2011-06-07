<?

function user_login(){
	unlogged_check();
	
	load_helper('form');
	
	if(!form_submitted()){
		load_view("login");
	}else{
		load_model('user');
		
		$data['username'] = $_POST['username'];
		$data['password'] = $_POST['password'];
		
		$user = model_exec('user', 'login', $data);
		
		if($user){
			//store user data in session
			store_session('logged_in', true);
			store_session('user_id', $user['id']);
			store_session('user_type', $user['type']);
			//redirect user to home page
			redirect('');
		}else{
			echo "Incorrect Credentials";
		}
	}
}

function user_register(){
	load_helper('form');
	
	if(!form_submitted()){
		load_view("register");
	}else{
		load_model('user');
		
		$data['name'] = $_POST['name'];
		$data['email'] = $_POST['email'];
		$data['username'] = $_POST['username'];
		$data['password'] = $_POST['password'];
		$data['location'] = $_POST['location'];
		model_exec('user', 'register', $data);
	}
}

function user_logout(){
	//destroy all session data to log user out
	session_destroy();
	//redirect user to home
	redirect('');
}

?>
