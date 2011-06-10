			<div id="center">
					<div id="body" style="width:100%">
						<div id="trace">Home :: Users</div>
						<div class="line"></div>
						<div id="maincontent">
							<div id="table">
								<table>
									<tr class="title">
										<td>ID#</td>
										<td>Name</td>
										<td>Email</td>
										<td>Username</td>
										<td>Password</td>
										<td>Location</td>
										<td>Type</td>
										<td>Actions</td>
									</tr>
									<? foreach($users as $user) { ?>
										<tr>
											<form action="<?=BASE_URL?>admin/users" method="POST">
												<input type="hidden" value="true" name="submit_check">
												<input type="hidden" value="<?=$user['id']?>" name="id">
												<td><?=$user['id']?></td>
												<td><input type="text" name="name" value="<?=$user['name']?>"></td>
												<td><input type="text" name="email" value="<?=$user['email']?>"></td>
												<td><input type="text" name="username" value="<?=$user['username']?>"></td>
												<td><input type="password" name="password" value="<?=$user['password']?>"></td>
												<td><input type="text" name="location" value="<?=$user['location']?>"></td>
												<td>
													<select name="type">
														<option value="0" <? if($user['type'] == USER) echo "selected" ?>>User</option>
														<option value="1" <? if($user['type'] == MOD) echo "selected" ?>>Moderator</option>
														<option value="2" <? if($user['type'] == ADMIN) echo "selected" ?>>Admin</option>
													</select>
												</td>
												<td><input type="submit" class="button blue" value="Save"/></td>
											</form>
										</tr>
									<? } ?>
								</table>
							</div>
							</form>
						</div> 
					</div>
			</div>
				<div class="clear"></div>
