<div id="center">
					<div id="body">
						<div id="trace">Home :: Article :: <?= $article['title'] ?></div>
						<div class="line"></div>
						<div id="maincontent">
								<div id="table">
									<table class="border">
										<tr class="title">
											<td><?=$article['title']?> Published on <?=$article['date']?></td>
										</tr>
										<tr>
											<td>
												<div>
													<?= $article['content'] ?>
													
												</div>
											</td>
									</table>
								</div>
								<h2>Comments</h2>
								<div id="table">
									<table class="border">
										<? foreach($comments as $comment) { ?>
										<tr>
											<td><?= $comment['comment'] ?><br><small>on <?= $comment['date']?> by <?= $comment['user']['username'] ?> from <?= $comment['user']['location'] ?></small></td>
										</tr>
										<? } ?>
									</table>
								</div>
								<? if(!logged_in()) {?>
									Please Login to comment!
								<? } else { ?>
									<h2>Comment</h2>
									<table class="border">
										<tr>
											<form action="<?=BASE_URL?>main/view/<?=$articleid?>" method="post">
												<input type="hidden" value="true" name="submit_check">
												<textarea name="comment" cols="20" rows="5"></textarea><br/>
												<input type="submit" class="button blue" value="Submit">
											</form>
										</tr>
									</table>
								<? } ?>
						</div> 
					</div>
					<?= load_view('categories', $data, true); ?>
			</div>
