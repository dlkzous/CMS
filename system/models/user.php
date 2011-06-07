<?

//user model

function model_user_register($name, $email, $username, $password, $location){
	$result = db_query("INSERT INTO `cmsdb`.`users` (`id`, `name`, `email`, `username`, `password`, `location`, `datejoined`) VALUES (NULL, '$name', '$email', '$username', '$password', '$location', CURRENT_TIMESTAMP);");
}

function model_user_login($username, $password){
	echo $username;
	$result = db_query("SELECT `id`,`type` FROM `users` WHERE `username` = '$username' && `password` = '$password'");
	$num_rows = mysql_num_rows($result);
	if($num_rows){
		$user = mysql_fetch_array($result);
		return $user;
	}else 
		return false;
}

function model_user_logout(){
	
}

?>
