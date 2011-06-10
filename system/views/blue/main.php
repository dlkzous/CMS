<div id="center">
					<div id="body">
						<div id="trace">Home</div>
						<div class="line"></div>
						<div id="maincontent">
							<h2><?= $header?></h2>
							<? foreach($articles as $article){ ?>
								<div id="table">
									<table class="border">
										<tr class="title">
											<td><?=$article['info']['title']?> <small>[Published on <?=$article['date']?>]</small></td>
										</tr>
										<tr>
											<td>
												<div>
													<?= truncate(strip_tags($article['info']['content']), 70); ?>
													<br/>
													<a href="<?=BASE_URL?>main/view/<?=$article['article_id']?>" class="button blue">Read More...</a>
												</div>
											</td>
									</table>
								</div>
							<? }?>
						</div> 
					</div>
					<?= load_view('categories', $data, true); ?>
			</div>
