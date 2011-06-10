<?

//user model

function model_user_register($name, $email, $username, $password, $location){
	$result = db_query("INSERT INTO `cmsdb`.`users` (`id`, `name`, `email`, `username`, `password`, `location`, `datejoined`) VALUES (NULL, '$name', '$email', '$username', '$password', '$location', CURRENT_TIMESTAMP);");
}

function model_user_login($username, $password){
	$result = db_query("SELECT `id`,`type`,`name` FROM `users` WHERE `username` = '$username' && `password` = '$password'");
	$num_rows = mysql_num_rows($result);
	if($num_rows){
		$user = mysql_fetch_array($result);
		return $user;
	}else
		return false;
}

function model_user_get_details($id){
	$query = "SELECT * FROM `users` WHERE `id`='$id'";
	$result = db_query($query);
	$first_row = mysql_fetch_assoc($result);
	return $first_row;
}

?>
