<?

// return true/false depending on whether user is logged in
function logged_in(){
	if(isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true){
		return true;
	}else return false;
}

//return user type
function user_type(){
	if(isset($_SESSION['type'])){
		return $_SESSION['type'];
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

function admin_check(){
	dump($_SESSION);
	logged_check();
	dump("ADMIN0");
	if(user_type() != ADMIN){
		redirect('');
		dump("ADMIN1");
	}
	dump("ADMIN2");
}

?>
