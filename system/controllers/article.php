<?
function article_submit()
{
	// Check if user is logged in
	logged_check();
	
	$data['pageJs'] = true;
	$data['js'] = 'submitArticle.js';
	load_helper('form');
	if(!form_submitted())
	{
		$data['errors'] = false;
		load_view('submitArticle', $data);
	}else{
		$data['errors'] = false;
		load_model('article');
		
		$data['title'] = $_POST['title'];
		if($data['title'] == "")
		{
			$formError['title'] = "Title cannot be empty.";
			$data['errors'] = true;
		}
		
		$data['category'] = $_POST['category'];
		if($data['category'] == "")
		{
			$formError['category'] = "Category cannot be empty.";
			$data['errors'] = true;
		}
		
		$data['content'] = $_POST['elm1'];
		if($data['content'] == "")
		{
			$formError['elm1'] = "Category cannot be empty.";
			$data['errors'] = true;
		}
		
		// If errors refresh page.
		if($data['errors'])
		{
			$data['formError'] = $formError;
			load_view('submitArticle',$data);
		}else{
			$article['title'] = $data['title'];
			//$article['category'] = $data[
		}
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
