			<div id="center">
					<div id="body">
						<div id="trace">Home :: Articles :: UnPublished</div>
						<div class="line"></div>
						<div id="maincontent">
							<h2>Revisions for Article id#<?= $revisions[0]['article_id'] ?></h2>
							<div id="table">
								<table class="center">
									<tr class="title">
										<td>ID</td>
										<td>User</td>
										<td>Category</td>
										<td>Title</td>
										<td>Submitted</td>
										<td></td>
										<td></td>
									</tr>
									<? foreach($revisions as $revision) { ?>
										<tr>
											<td><?= $revision['id'] ?></td>
											<td><?= $revision['user']['username'] ?></td>
											<td><?= $revision['category'] ?></td>
											<td><?= $revision['title'] ?></td>
											<td><?= $revision['date'] ?></td>
											<td><a href="<?=BASE_URL?>article/edit/<?= $revision['id'] ?>" class="button blue">Edit</a></td>
											<? if(admin()) { ?><td><a href="<?=BASE_URL?>admin/revisions/<?= $revision['article_id'] ?>/<?= $revision['id'] ?>" class="button blue">Publish</a></td><? } ?>
										</tr>
									<? } ?>
								</table>
							</div>
						</div> 
					</div>
					<?load_view('quicklinks', $data, true, true);?>
			</div>
				<div class="clear"></div>
