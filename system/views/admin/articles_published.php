			<div id="center">
					<div id="body">
						<div id="trace">Home :: Articles :: Published</div>
						<div class="line"></div>
						<div id="maincontent">
							<h2>Published Articles</h2>
							<div id="table">
								<table class="center">
									<tr class="title">
										<td>Article ID</td>
										<td>Published Rev#</td>
										<td>Title</td>
										<td>Latest Revision</td>
										<td>Published On</td>
										<td></td>
									</tr>
									<? foreach($articles as $article) { ?>
										<tr>
											<td><?= $article['id'] ?></td>
											<td><?= $article['revision_id'] ?></td>
											<td><?= $article['revision']['title'] ?></td>
											<td><?= $article['revision']['id'] ?></td>
											<td><?= $article['date'] ?></td>
											<td><a href="<?=BASE_URL?>admin/published/<?= $article['id'] ?>" class="button blue">Unpublish</a></td>
										</tr>
									<? } ?>
								</table>
							</div>
						</div> 
					</div>
					<?load_view('quicklinks', $data, true, true);?>
			</div>
				<div class="clear"></div>
