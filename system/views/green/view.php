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
						</div> 
					</div>
					<?= load_view('categories', $data, true); ?>
			</div>
