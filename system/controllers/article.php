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
			$formError['elm1'] = "Content cannot be empty.";
			$data['errors'] = true;
		}
		
		$data['tags'] = $_POST['tags'];
		$data['categoryId'] = $_POST['categoryId'];
		
		// If errors refresh page.
		if($data['errors'])
		{
			$data['formError'] = $formError;
			load_view('submitArticle',$data);
		}else{
			$article['title'] = $data['title'];
			$article['category'] = $data['categoryId'];
			$article['userId'] = user_id();
			$article['content'] = $data['content'];
			$tagsList = $data['tags'];
			$result = model_exec('article','submit', $article);
			if($result != 0)
			{
				unset($data);
				$data['message'] = "Article successfully submitted.";
				if($tagsList != "")
				{
					$tags = split(",",$tagsList);
					foreach($tags as $tag)
					{
						$tName = trim($tag);
						if($tName != "")
						{
							$tagName['name'] = $tName;
							$tagName['articleId'] = $result;
							$result = model_exec('article','addTag', $tagName);
							if(!$result)
							{
								$data['message'] .= "Tag ".$tag." not added for article";
							}
						}
					}
				}else{
					$data['message'] = "Article successfully submitted without tags.";
				}
				
				var_dump($data);
			}else{
				unset($data);
				$data['message'] = "Error in submission process. Please try again later.";
				var_dump($data);
			}
			
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
