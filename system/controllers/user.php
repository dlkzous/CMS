<?

function user_login(){
	
	if(!form_submitted()){
		load_view("login");
	}else{
		load_model('user');
		
		$data['username'] = $_POST['username'];
		$data['password'] = $_POST['password'];
		
		$status = model_exec('user', 'login', $data);
		
		if($status){
			
		}else{
			echo "Incorrect Credentials";
		}
	}
}

function user_register(){
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
}

?>
