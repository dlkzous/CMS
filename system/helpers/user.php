<?

// return true/false depending on whether user is logged in
function logged_in(){
	if(isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true){
		return true;
	}else return false;
}

//return user type
function user_type(){
	if(isset($_SESSION['user_type'])){
		return $_SESSION['user_type'];
	}else return false;
}

function user_id(){
	if(isset($_SESSION['user_id'])){
		return $_SESSION['user_id'];
	}else return false;
}

// check if user is logged in and redirect to home
function unlogged_check(){
	if(logged_in()){
		redirect('');
	}
}

// check if user is NOT logged in and redict to home
function logged_check(){
	if(!logged_in()){
		redirect('');
	}
}

function mod_check(){
	logged_check();
	if(user_type() < MOD){
		redirect('');
	}
}

function admin(){
	if(user_type() == ADMIN) return true;
	else return false;
}

?>
