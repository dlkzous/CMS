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

?>
