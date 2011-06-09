<?
// tag model

function model_tag_getTags()
{
	$result = db_query("SELECT `id`, `name` FROM `tags`");
	$num_rows = mysql_num_rows($result);
	if($num_rows){
		$tags = array();
		while($row = mysql_fetch_array($result))
		{
			array_push($tags, $row);
		}
		return $tags;
	}else
		return false;
}
?>
