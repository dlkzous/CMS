<?
// article model

function model_article_getCategories()
{
	$result = db_query("SELECT `id`, `name` FROM `article_categories`");
	$num_rows = mysql_num_rows($result);
	if($num_rows){
		$categories = array();
		while($row = mysql_fetch_array($result))
		{
			array_push($categories, $row);
		}
		return $categories;
	}else
		return false;
}

function model_article_submit($title, $userId, $categoryId, $content)
{
	$articleId = db_query("INSERT INTO `cmsdb`.`article` (`id`, `user_id`, `category_id`, `content`, `date`, `title`, `published`) VALUES (NULL, '$userId', '$categoryId', '".addslashes($content)."', CURRENT_TIMESTAMP, '".addslashes($title)."', 0);");
	if($articleId)
	{
		$result = db_query("INSERT INTO `cmsdb`.`article_revisions` (`article_id`, `revision_number`, `original_article_id`) VALUES ('$articleId', 1 , $articleId);");
		if($result)
		{
			return true;
		}else{
			return false;
		}
	}else{
		return false;
	}
}
?>
