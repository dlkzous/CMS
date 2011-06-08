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

function article_getCategories()
{
	load_model('article');
	$categories = model_exec('article', 'getCategories');
	
	if($categories)
	{
		$data['cats'] = $categories;
		load_view('articleCategories',$data,true);
	}
}
?>
