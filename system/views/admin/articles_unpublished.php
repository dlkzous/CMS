			<div id="center">
					<div id="body">
						<div id="trace">Home :: Articles :: UnPublished</div>
						<div class="line"></div>
						<div id="maincontent">
							<h2>Unpublished Articles</h2>
							<div id="table">
								<table class="center">
									<tr class="title">
										<td>ID</td>
										<td>User</td>
										<td>Category</td>
										<td>Title</td>
										<td></td>
									</tr>
									<? foreach($articles as $article) { ?>
										<tr>
											<td><?= $article['id'] ?></td>
											<td><?= $article['user']['username'] ?></td>
											<td><?= $article['category'] ?></td>
											<td><?= $article['revision']['title'] ?></td>
											<td><a href="<?=BASE_URL?>admin/revisions/<?= $article['id'] ?>" class="button blue">View Revisions</a></td>
										</tr>
									<? } ?>
								</table>
							</div>
						</div> 
					</div>
					<?load_view('quicklinks', $data, true, true);?>
			</div>
				<div class="clear"></div>
