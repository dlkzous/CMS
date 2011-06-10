			<div id="center">
					<div id="body">
						<div id="trace">Home :: Articles :: Categories</div>
						<div class="line"></div>
						<div id="maincontent">
							<h2>Published Articles</h2>
							<div id="table">
								<table class="center">
									<tr class="title">
										<td>ID</td>
										<td>Category</td>
										<td></td>
									</tr>
									<? foreach($categories as $category) { ?>
										<tr>
											<td><?= $category['id'] ?></td>
											<td><?= $category['name'] ?></td>
											<td><a href="<?=BASE_URL?>admin/categories/<?= $category['id'] ?>" class="button blue">Delete</a></td>
										</tr>
									<? } ?>
								</table>
								<form action="<?=BASE_URL?>admin/categories" method="post">
									<input type="hidden" value="true" name="submit_check"><br/>
									New Category : <input type="text" name="category"><br/>
									<input type="submit" class="button blue">
								</form>
							</div>
						</div> 
					</div>
					<?load_view('quicklinks', $data, true, true);?>
			</div>
				<div class="clear"></div>
