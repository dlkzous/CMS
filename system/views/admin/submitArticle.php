			<div id="center">
					<div id="body">
						<div id="trace">Home :: Settings</div>
						<div class="line"></div>
						<div id="maincontent">
							<form action="<?=BASE_URL?>article/submit" method="post">
								<input type="hidden" value="true" name="submit_check"><br/>
								Article Title : <input type="text" name="title" <? if($errors){ ?>value="<?= $title ?>" <? }?>><br/>
								Article Category : <input type="text" name="category" id="category" <? if($errors){ ?>value="<?= $category ?>" <? }?>><br/>
								<input type="hidden" name="categoryId" id="catId" <? if($errors){ ?>value="<?= $categoryId ?>" <? }?>/>
								Tags : <input type="text" name="tags" id="tags" <? if($errors){ ?>value="<?= $tags ?>" <? }?>><br/><br/>
								Article Content : <br/>
								<div>
									<textarea id="elm1" name="elm1" rows="25" cols="120" style="width: 100%">
										<? if($errors){
											echo $content;
											}
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
