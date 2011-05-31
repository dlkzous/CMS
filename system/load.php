<?
// Helpers or files to be loaded on all system pages

function construct(){
	load_init();
	db_connect();
}

function destruct(){
	db_disconnect();
}

function load_init(){
	//load default configuration file
	require(BASE_URL . 'system/config.php');

	//load default system libraries
	require(BASE_URL . 'system/libs/default.php');

	//load database functions
	require(BASE_URL . 'system/libs/database.php');

	//load default system helper
	require(BASE_URL . 'system/helpers/default.php');
}

?>


