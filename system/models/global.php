<?

//global settings model

function model_global_get_setting($name){
	$result = db_query("SELECT `value` FROM `settings` WHERE `setting`='$name'");
	$first_row = mysql_fetch_assoc($result) or die(mysql_error());
	return $first_row['value'];
}

?>
