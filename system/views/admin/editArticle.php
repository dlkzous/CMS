			<div id="center">
					<div id="body">
						<div id="trace">Home :: Settings</div>
						<div class="line"></div>
						<div id="maincontent">
							<form action="<?=BASE_URL?>article/edit/<?= $articleId ?>" method="post">
								<input type="hidden" value="true" name="submit_check"><br/>
								Article Title : <input type="text" name="title" value="<?= $title ?>"><br/>
								Article Category : <input type="text" name="category" id="category" value="<?= $category ?>"><br/>
								<input type="hidden" name="categoryId" id="catId" value="<?= $categoryId ?>"/>
								<input type="hidden" name="articleId" value="<?= $articleId ?>" />
								Tags : <input type="text" name="tags" id="tags" value="<?= $tags ?>" ><br/>
								Article Content : <br/>
								<div>
									<textarea id="elm1" name="elm1" rows="20" cols="120" style="width: 80%">
										<?
											echo $content;
										?>
									</textarea>
								</div>
								<input type="submit" class="button blue">
							</form>
						</div> 
					</div>
					<?load_view('quicklinks', $data, true, true);?>
			</div>
				<div class="clear"></div>
