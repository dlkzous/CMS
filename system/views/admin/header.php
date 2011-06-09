<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML Basic 1.0//EN" "http://www.w3.org/TR/xhtml-basic/xhtml-basic10.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<link rel="stylesheet" type="text/css" href="<?= BASE_URL ?>public/admin/style.css"/> 
		<link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
		<script src="<?= BASE_URL ?>public/admin/js/jquery.js"></script> 
		<script src="<?= BASE_URL ?>public/admin/js/init.js"></script> 
		<title>INF317 Admin Panel</title>
	</head>
	<body>
		<div id="content">
			<div id="header">
				<div id="logo">INF317 Admin Panel</div>
				<div id="status">Welcome <?=$name?></div>
				<div id="topmenu">
					<ul>
						<li class="roundtop"><a href="<?= BASE_URL ?>admin">Dashboard</a></li>
						<li class="roundtop"><a href="<?= BASE_URL ?>admin/users">Users</a></li>
						<li class="roundtop"><a href="<?= BASE_URL ?>admin/articles">Articles</a></li>
						<li class="roundtop"><a href="<?= BASE_URL ?>admin/settings">Settings</a></li>
					</ul>
				</div>
			</div>
			<div class="clear"></div>
