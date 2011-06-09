<?

//get all settings from database
function model_admin_get_all_settings(){
	$result = db_query("SELECT * FROM `settings` ORDER BY `category` desc");
	return db_toarray($result);
}

function model_admin_save_all_settings($data){
	foreach($data as $key => $value){
		db_query("UPDATE `settings` SET `value`='$value' WHERE `setting`='$key'");
	}
}

function model_admin_get_all_users(){
	$result = db_query("SELECT * FROM `users`");
	return db_toarray($result);
}

function model_admin_update_user($id, $data){
	extract($data);
	db_query("UPDATE  `users` SET  `email` = '$email',`username` =  '$username',`password` =  '$password', `location` =  '$location', `type` =  '$type' WHERE  `id`='$id'");
}

function model_admin_get_user_count($type = false){
	$query = "SELECT count(*) FROM `users`";
	if($type !== false){
		$query .= " WHERE `type`='$type'";
	}
	$result = db_query($query);
	$first_row = mysql_fetch_array($result);
	return $first_row['count(*)'];
}

function model_admin_get_article_count($pub = false){
	$query = "SELECT count(*) FROM `article`";
	if($pub !== false){
		$query .= " WHERE `published`='$pub'";
	}
	
	$result = db_query($query);
	$first_row = mysql_fetch_array($result);
	return $first_row['count(*)'];
}

function model_admin_get_rev_count(){
	$query = "SELECT count(*) FROM `article_revisions`";
	$result = db_query($query);
	$first_row = mysql_fetch_array($result);
	return $first_row['count(*)'];
}

function model_admin_get_category_count(){
	$query = "SELECT count(*) FROM `article_categories`";
	$result = db_query($query);
	$first_row = mysql_fetch_array($result);
	return $first_row['count(*)'];
}

function model_admin_get_tag_count(){
	$query = "SELECT count(*) FROM `tags`";
	$result = db_query($query);
	$first_row = mysql_fetch_array($result);
	return $first_row['count(*)'];
}

?>
