<div id="center">
					<div id="body" style="width:100%">
						<div id="trace">Home :: Page</div>
						<div class="line"></div>
						<div id="maincontent">
							<h2>Table Example</h2>
							<div id="table">
								<table>
									<tr class="title">
										<td>Login</td>
										<td>Register</td>
									</tr>
									<tr>
										<td>
											<h2>Login Form</h2>
											<form action="<?=BASE_URL?>user/login" method="post">
												<input type="hidden" value="true" name="submit_check"><br/>
												username : <input type="text" name="username"><br/>
												password : <input type="text" name="password"><br/>
												<input type="submit" class="button blue" value="Login">
											</form>
										</td>
										<td>
											<h2>Registration Form</h2>
											<form action="<?=BASE_URL?>user/register" method="post">
												<input type="hidden" value="true" name="submit_check"><br/>
												name : <input type="text" name="name"><br/>
												email : <input type="text" name="email"><br/>
												username : <input type="text" name="username"><br/>
												password : <input type="text" name="password"><br/>
												from(location) : <input type="text" name="location"><br/>
												<input type="submit" class="button blue" value="Register">
											</form>
										</td>
									</tr>
								</table>
							</div>
							<a href="#" class="button blue">BUTTON1</a>						
						</div> 
					</div>
			</div>
