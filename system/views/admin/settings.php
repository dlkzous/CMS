			<div id="center">
					<div id="body">
						<div id="trace">Home :: Settings</div>
						<div class="line"></div>
						<div id="maincontent">
							<form action="<?=BASE_URL?>admin/settings" method="POST">
							<input type="hidden" value="true" name="submit_check">
							<? 
								$current_category = "";
								foreach($settings as $setting) {
									if($setting['category'] != $current_category){
										$current_category = $setting['category'];
										?>
										<div id="table">
											<table>
											<tr class="title">
												<td colspan="2"><?= $current_category?></td>
											</tr>
										<? } ?>
										<tr>
												<td><?=$setting['name']?></td>
												<td><?= build_input($setting['setting'], $setting['value'], $setting['type']) ?></td>
											</tr>
									<? } ?>
									
								</table>
							</div>
							<input type="submit" class="button blue" value="Save Settings"/>
							</form>
						</div> 
					</div>
					<div id="menu">
						<ul>
							<li class="title"><a href="#">Quick Links</a></li>
							<li><a href="#">Link1</a></li>
							<li><a href="#">Link2</a></li>
							<li><a href="#">Link3</a></li>
						</ul>
					</div>
			</div>
				<div class="clear"></div>
