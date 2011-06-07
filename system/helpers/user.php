<?

// return true/false depending on whether user is logged in
function logged_in(){
	if(isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true){
		return true;
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

?>
