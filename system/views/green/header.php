<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML Basic 1.0//EN" "http://www.w3.org/TR/xhtml-basic/xhtml-basic10.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<link rel="stylesheet" type="text/css" href="<?= CSS_PATH ?>style.css"/> 
		
		<meta name="description" content="<?= model_exec('global', 'get_setting', array('description')) ?>" />
		<meta name="keywords" content="<?= model_exec('global', 'get_setting', array('keywords')) ?>" />
		<meta name="author" content="<?= model_exec('global', 'get_setting', array('author')) ?>" />
		<meta http-equiv="content-type" content="<?= model_exec('global', 'get_setting', array('content-type')) ?>" />
		
		<title><?= model_exec('global', 'get_setting', array('title')) ?></title>
	</head>
	<body>
		<div id="content">
			<div id="header">
				<div id="logo"><?= model_exec('global', 'get_setting', array('title')) ?></div>
				<div id="status">
					<? if(logged_in()) {?>
						Welcome <?= $name ?> | <a href="<?=BASE_URL?>user/logout">Logout</a> <? if(mod()) { ?> <a href="<?=BASE_URL?>admin"> | Control Panel</a> <? }?>
					<? } else { ?>
						Welcome guest | <a href="<?=BASE_URL?>user/login">Login/Register 
					<? }?>
				</div>
				<div id="topmenu">
					<ul>
						<li class="roundtop"><a href="<?= BASE_URL ?>">Home</a></li>
					</ul>
				</div>
			</div>
			<div class="clear"></div>
			<? if(isset($notice)) echo $notice; ?>
