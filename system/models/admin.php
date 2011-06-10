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
	$first_row = mysql_fetch_assoc($result);
	return $first_row['count(*)'];
}

function model_admin_get_article_count($pub = false){
	$query = "SELECT count(*) FROM `article`";
	if($pub !== false){
		$query .= " WHERE `published`='$pub'";
	}
	
	$result = db_query($query);
	$first_row = mysql_fetch_assoc($result);
	return $first_row['count(*)'];
}

function model_admin_get_rev_count(){
	$query = "SELECT count(*) FROM `article_revisions`";
	$result = db_query($query);
	$first_row = mysql_fetch_assoc($result);
	return $first_row['count(*)'];
}

function model_admin_get_category_count(){
	$query = "SELECT count(*) FROM `article_categories`";
	$result = db_query($query);
	$first_row = mysql_fetch_assoc($result);
	return $first_row['count(*)'];
}

function model_admin_get_tag_count(){
	$query = "SELECT count(*) FROM `tags`";
	$result = db_query($query);
	$first_row = mysql_fetch_assoc($result);
	return $first_row['count(*)'];
}

function model_admin_get_all_categories(){
	$query = "SELECT * FROM `article_categories`";
	$result = db_query($query);
	return db_toarray($result);
}

function model_admin_get_published_articles(){
	$query = "SELECT * FROM `article` WHERE `published`='1'";
	$result = db_query($query);
	return db_toarray($result);
}

function model_admin_get_unpublished_articles(){
	$query = "SELECT * FROM `article` WHERE `published`='0'";
	$result = db_query($query);
	return db_toarray($result);
}

function model_admin_unpublish_article($id){
	$query = "UPDATE `article` SET `published`='0' WHERE `id`='$id'";
	return db_query($query);
}

function model_admin_get_last_revision($articleId){
	$last_rev = db_query("SELECT MAX(id) as id FROM `article_revisions` WHERE `article_id`='$articleId'");
	$last_id = mysql_fetch_assoc($last_rev);
	$last_id = $last_id['id'];
	
	$revision = db_query("SELECT * FROM `article_revisions` WHERE `id`='$last_id'");
	$first_row = mysql_fetch_assoc($revision);
	return $first_row;
}

function model_admin_get_category($id){
	$query = "SELECT `name` FROM `article_categories` WHERE `id`='$id'";
	$result = db_query($query);
	$ar = db_toarray($result);
	return $ar[0]['name'];
}

function model_admin_delete_category($id){
	
}

function model_admin_add_category($category){
	
}

?>
