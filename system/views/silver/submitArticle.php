<form action="<?=BASE_URL?>article/submit" method="post">
	<input type="hidden" value="true" name="submit_check"><br/>
	Article Title : <input type="text" name="title" <? if($errors){ ?>value="<?= $title ?>" <? }?>><br/>
	Article Category : <input type="text" name="category" id="category" <? if($errors){ ?>value="<?= $category ?>" <? }?>><br/>
	<input type="hidden" name="categoryId" id="catId" />
	Tags : <input type="text" name="tags" id="tags"><br/>
	Article Content : <br/>
	<div>
		<textarea id="elm1" name="elm1" rows="15" cols="80" style="width: 80%">
			<? if($errors){
				$content;
				}
			?>
		</textarea>
	</div>
	<input type="submit">
</form>
