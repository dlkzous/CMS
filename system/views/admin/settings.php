			<div id="center">
					<div id="body" style="width:100%">
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
							<?if(isset($notice)) echo $notice ?>
							</form>
						</div> 
					</div>
			</div>
				<div class="clear"></div>
