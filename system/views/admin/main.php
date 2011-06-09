			<div id="center">
					<div id="body">
						<div id="trace">Home :: Settings</div>
						<div class="line"></div>
						<div id="maincontent">
							<? foreach($dash as $category => $data) { ?>
								<div id="table">
								<table>
									<tr class="title">
										<td colspan="2"><?=$category ?></td>
									</tr>
									<? foreach($data as $name => $value) { ?>
										<tr>
											<td><?= $name ?></td>
											<td><?= $value ?></td>
										</tr>
									<? } ?>
								</table>
							</div>
							<? } ?>
							
							</form>
						</div> 
					</div>
					<div id="menu">
						<ul>
							<li class="title"><a href="#">Quick Links</a></li>
							<li><a href="#">Unpublished Articles</a></li>
							<li><a href="#">Published Articles</a></li>
						</ul>
					</div>
			</div>
				<div class="clear"></div>
