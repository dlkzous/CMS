<div id="center">
					<div id="body">
						<div id="trace">Home :: Page</div>
						<div class="line"></div>
						<div id="maincontent">
							<? foreach($articles as $article){ ?>
								<div id="table">
									<table class="border">
										<tr class="title">
											<td><?=$article['info']['title']?> Published on <?=$article['date']?></td>
										</tr>
										<tr>
											<td>
												<div>
													<?= truncate($article['info']['content'], 100); ?>
													<br/>
													<a href="#" class="button blue">Read More...</a>
												</div>
											</td>
									</table>
								</div>
							<? }?>
						</div> 
					</div>
					<?= load_view('categories', $data, true); ?>
			</div>
