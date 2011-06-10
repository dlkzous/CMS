<?

//global settings model

function model_global_get_setting($name){
	$result = db_query("SELECT `value` FROM `settings` WHERE `setting`='$name'");
	$first_row = mysql_fetch_assoc($result) or die(mysql_error());
	return $first_row['value'];
}

//return all categories stored in the database
function model_global_get_all_categories(){
	$query = "SELECT * FROM `article_categories`";
	$result = db_query($query);
	return db_toarray($result);
}

//return all articles stored in database
function model_global_get_articles(){
	$query = "SELECT * FROM `article` WHERE `published`='1' ORDER BY `id` DESC";
	$result = db_query($query);
	return db_toarray($result);
}

function model_global_get_articles_category($categoryId){
	$query = "SELECT * FROM `article` INNER JOIN `article_revisions` ON `article`.`revision_id` = `article_revisions`.`id` WHERE `article`.`published`='1' AND `article_revisions`.`category_id`='$categoryId'";
	$result = db_query($query);
	return db_toarray($result);
}

?>
