<?
function tag_getTags()
{
	load_model('tag');
	$tags = model_exec('tag', 'getTags');
	
	if($tags)
	{
		$data['tags'] = $tags;
		load_view('tags',$data,true);
	}
}
?>
