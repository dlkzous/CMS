<?

//get all settings from database
function model_admin_get_all_settings(){
	$result = db_query("SELECT * FROM `settings` ORDER BY `category` desc");
	return db_toarray($result);
}

function model_admin_save_all_settings($data){
	$result = db_query("SELECT * FROM `settings` ORDER BY `category` desc");
	return db_toarray($result);
}

?>
