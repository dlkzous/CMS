<form action="<?=BASE_URL?>article/edit" method="post">
	<input type="hidden" value="true" name="submit_check"><br/>
	Article Title : <input type="text" name="title" value="<?= $title ?>"><br/>
	Article Category : <input type="text" name="category" id="category" value="<?= $category ?>"><br/>
	<input type="hidden" name="categoryId" id="catId" value="<?= $categoryId ?>"/>
	<input type="hidden" name="articleId" value="<?= $articleId ?>" />
	Tags : <input type="text" name="tags" id="tags" value="<?= $tags ?>" ><br/>
	Article Content : <br/>
	<div>
		<textarea id="elm1" name="elm1" rows="15" cols="80" style="width: 80%">
			<?
				echo $content;
			?>
		</textarea>
	</div>
	<input type="submit">
</form>
