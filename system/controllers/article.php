<?
function article_submit()
{
	// Check if user is logged in
	logged_check();
	
	load_helper('form');
	if(!form_submitted())
	{
		load_view('submitArticle');
	}else{
	}	
}
?>
