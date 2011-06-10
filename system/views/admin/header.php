<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML Basic 1.0//EN" "http://www.w3.org/TR/xhtml-basic/xhtml-basic10.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<link rel="stylesheet" type="text/css" href="<?= BASE_URL ?>public/admin/style.css"/> 
		<link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
		<script src="<?= BASE_URL ?>public/admin/js/jquery.js"></script> 
		<script src="<?= BASE_URL ?>public/admin/js/init.js"></script> 
		<script type="text/javascript">
			var BASE_URL = "<?= BASE_URL ?>";
		</script>
		<script type="text/javascript" src="<?= BASE_URL ?>public/admin/js/tinymce/jscripts/tiny_mce/tiny_mce.js"></script>
		<? if(isset($pageJs)){ ?>
			<script type="text/javascript">
				tinyMCE.init({
						// General options
						mode : "textareas",
						theme : "advanced",
						plugins : "autolink,lists,spellchecker,pagebreak,style,layer,table,save,advhr,advimage,advlink,emotions,iespell,inlinepopups,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template",

						// Theme options
						theme_advanced_buttons1 : "save,newdocument,|,bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,|,styleselect,formatselect,fontselect,fontsizeselect",
						theme_advanced_buttons2 : "cut,copy,paste,pastetext,pasteword,|,search,replace,|,bullist,numlist,|,outdent,indent,blockquote,|,undo,redo,|,link,unlink,anchor,image,cleanup,help,code,|,insertdate,inserttime,preview,|,forecolor,backcolor",
						theme_advanced_buttons3 : "tablecontrols,|,hr,removeformat,visualaid,|,sub,sup,|,charmap,emotions,iespell,media,advhr,|,print,|,ltr,rtl,|,fullscreen",
						theme_advanced_buttons4 : "insertlayer,moveforward,movebackward,absolute,|,styleprops,spellchecker,|,cite,abbr,acronym,del,ins,attribs,|,visualchars,nonbreaking,template,blockquote,pagebreak,|,insertfile,insertimage",
						theme_advanced_toolbar_location : "top",
						theme_advanced_toolbar_align : "left",
						theme_advanced_statusbar_location : "bottom",
						theme_advanced_resizing : true,

						// Drop lists for link/image/media/template dialogs
						template_external_list_url : "<?= BASE_URL ?>public/admin/js/tinymce/examples/lists/template_list.js",
						external_link_list_url : "<?= BASE_URL ?>public/admin/js/tinymce/examples/lists/link_list.js",
						external_image_list_url : "<?= BASE_URL ?>public/admin/js/tinymce/examples/lists/image_list.js",
						media_external_list_url : "<?= BASE_URL ?>public/admin/js/tinymce/examples/lists/media_list.js",
				});
			</script>
			<script src="<?= BASE_URL."public/admin/js/$js" ?>"></script>
		<? } ?>
		<link rel="stylesheet" href="<?= BASE_URL ?>public/admin/js/autocomplete/jquery.autocomplete.css" type="text/css" />
		<script type="text/javascript" src="<?= BASE_URL ?>public/admin/js/autocomplete/lib/jquery.bgiframe.min.js"></script>
		<script type="text/javascript" src="<?= BASE_URL ?>public/admin/js/autocomplete/jquery.autocomplete.js"></script>
		<title>INF317 Admin Panel</title>
	</head>
	<body>
		<div id="content">
			<div id="header">
				<div id="logo">INF317 Admin Panel</div>
				<div id="status">Welcome <?=$name?> | <a href="<?= BASE_URL ?>/user/logout">Logout</a></div>
				<div id="topmenu">
					<ul>
						<li class="roundtop"><a href="<?= BASE_URL ?>admin">Dashboard</a></li>
						<li class="roundtop"><a href="<?= BASE_URL ?>admin/users">Users</a></li>
						<li class="roundtop"><a href="<?= BASE_URL ?>admin/published">Articles</a></li>
						<li class="roundtop"><a href="<?= BASE_URL ?>admin/settings">Settings</a></li>
					</ul>
				</div>
			</div>
			<div class="clear"></div>
