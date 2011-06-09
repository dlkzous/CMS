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
	db_query("UPDATE `users` SET `value`='$value' WHERE `id`='$id'");
}

?>
