<?

//get all settings from database
function model_admin_get_all_settings(){
	$result = db_query("SELECT * FROM `settings`");
	return db_toarray($result);
}

?>
