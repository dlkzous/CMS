<?
function article_submit()
{
	// Check if user is logged in
	logged_check();
	
	load_helper('form');
	if(!form_submitted())
	{
		$data['pageJs'] = true;
		$data['js'] = 'submitArticle.js';
		load_view('submitArticle', $data);
	}else{
	}	
}
?>
