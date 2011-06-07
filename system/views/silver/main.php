HELLO
<br>
<?
if(logged_in()){ ?>
	<a href="<?=BASE_URL?>user/logout">LOGOUT<br>
<? }else { ?>
	<a href="<?=BASE_URL?>user/login">LOGIN<br>
	<a href="<?=BASE_URL?>user/register">Register<br>
<? } ?>
