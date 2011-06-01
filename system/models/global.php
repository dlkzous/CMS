<?

//global settings model

function model_global_get_setting($name){
	$result = db_query("SELECT `value` FROM `global_settings` WHERE `name`='$name'");
	$first_row = mysql_fetch_array($result) or die(mysql_error());
	return $first_row['value'];
}

?>
