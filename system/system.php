<?
// Helpers or files to be loaded on all system pages

function system_construct(){
	system_init();
	db_connect();
}

function system_destruct(){
	db_disconnect();
}

function system_init(){
	//load default configuration file
	require(BASE_URL . 'system/config.php');

	//load default system libraries
	//url redirector
	require(BASE_URL . 'system/libs/url.php');
	//file inluder
	require(BASE_URL . 'system/libs/load.php');
	//database viewer
	require(BASE_URL . 'system/libs/database.php');

	//load default system helper
	require(BASE_URL . 'system/helpers/default.php');
}

?>
