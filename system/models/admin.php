<?

//get all settings from database to display on setting panel
function model_admin_get_all_settings(){
	$result = db_query("SELECT * FROM `settings` ORDER BY `category` desc");
	return db_toarray($result);
}

//update settings in database when admin modifies and clicks save
function model_admin_save_all_settings($data){
	foreach($data as $key => $value){
		db_query("UPDATE `settings` SET `value`='$value' WHERE `setting`='$key'");
	}
}

//get list of all users in the database
function model_admin_get_all_users(){
	$result = db_query("SELECT * FROM `users`");
	return db_toarray($result);
}

//if admin modifies a user, save to database
function model_admin_update_user($id, $data){
	extract($data);
	db_query("UPDATE  `users` SET  `email` = '$email',`username` =  '$username',`password` =  '$password', `location` =  '$location', `type` =  '$type' WHERE  `id`='$id'");
}

//get the total number of users in the database
//if parameter is supplied then the total number of specific users is returned
//namely user, moderator, admin
function model_admin_get_user_count($type = false){
	$query = "SELECT count(*) FROM `users`";
	if($type !== false){
		$query .= " WHERE `type`='$type'";
	}
	$result = db_query($query);
	$first_row = mysql_fetch_assoc($result);
	return $first_row['count(*)'];
}

//get the total number of articles in the database
//if parameter is supplied then the total numbers of unpublished 
//and published articles can be returned
function model_admin_get_article_count($pub = false){
	$query = "SELECT count(*) FROM `article`";
	if($pub !== false){
		$query .= " WHERE `published`='$pub'";
	}
	
	$result = db_query($query);
	$first_row = mysql_fetch_assoc($result);
	return $first_row['count(*)'];
}

//get the total number to revisions stored in the database
function model_admin_get_rev_count(){
	$query = "SELECT count(*) FROM `article_revisions`";
	$result = db_query($query);
	$first_row = mysql_fetch_assoc($result);
	return $first_row['count(*)'];
}

//get the total number of categories stored in the database
function model_admin_get_category_count(){
	$query = "SELECT count(*) FROM `article_categories`";
	$result = db_query($query);
	$first_row = mysql_fetch_assoc($result);
	return $first_row['count(*)'];
}

//get total numbers of tags in the database
function model_admin_get_tag_count(){
	$query = "SELECT count(*) FROM `tags`";
	$result = db_query($query);
	$first_row = mysql_fetch_assoc($result);
	return $first_row['count(*)'];
}

//return all categories stored in the database
function model_admin_get_all_categories(){
	$query = "SELECT * FROM `article_categories`";
	$result = db_query($query);
	return db_toarray($result);
}

//return list of all unpublished articles
function model_admin_get_published_articles(){
	$query = "SELECT * FROM `article` WHERE `published`='1' ORDER BY `id` desc";
	$result = db_query($query);
	return db_toarray($result);
}

//return list of all unpublished articles
function model_admin_get_unpublished_articles(){
	$query = "SELECT * FROM `article` WHERE `published`='0'";
	$result = db_query($query);
	return db_toarray($result);
}

//unpublish a previously published article from the webiste
function model_admin_unpublish_article($id){
	$query = "UPDATE `article` SET `published`='0' WHERE `id`='$id'";
	return db_query($query);
}

//return all the revisions for a particular article
function model_admin_get_all_revisions($articleId){
	$revisions = db_query("SELECT * FROM `article_revisions` WHERE `article_id`='$articleId'");
	return db_toarray($revisions);
}

//return information about the latest revision about a particular article
function model_admin_get_last_revision($articleId){
	$last_rev = db_query("SELECT MAX(id) as id FROM `article_revisions` WHERE `article_id`='$articleId'");
	$last_id = mysql_fetch_assoc($last_rev);
	$last_id = $last_id['id'];
	
	$revision = db_query("SELECT * FROM `article_revisions` WHERE `id`='$last_id'");
	$first_row = mysql_fetch_assoc($revision);
	return $first_row;
}

//publish a revision, to allow it to be visible on the site
function model_admin_publish_revision($articleId, $revisionId){
	$query = "UPDATE `article` SET `revision_id`='$revisionId',`published`='1' WHERE `id`='$articleId'";
	return db_query($query);
}

//return name of category from using id
function model_admin_get_category($id){
	$query = "SELECT `name` FROM `article_categories` WHERE `id`='$id'";
	$result = db_query($query);
	$ar = db_toarray($result);
	return $ar[0]['name'];
}

//delete a category and convert all revisions/articles
//based on that category to uncategorised
function model_admin_delete_category($id){
	
}

// add a category to the system
function model_admin_add_category($category){
	
}

?>
