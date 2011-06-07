<?

//user model

function model_user_register($name, $email, $username, $password, $location){
	$result = db_query("INSERT INTO `cmsdb`.`users` (`id`, `name`, `email`, `username`, `password`, `location`, `datejoined`) VALUES (NULL, '$name', '$email', '$username', '$password', '$location', CURRENT_TIMESTAMP);");
}

function model_user_login($username, $password){
	$result = db_query("SELECT `id` FROM `users` WHERE `username` = 'username' && `password` = 'password'");
	$num_rows = mysql_num_rows($result);
	if($num_rows){
		echo "correct";
	}else echo "wrong";
}

function model_user_logout(){
	
}

?>
