<?php include_once('header.php'); ?>
		<?php 
		//$path="https://www.google.co.in/?gws_rd=ssl";
		//header('location:'.$path);
		
		
		?>
		<div id="login-wrapper" class="png_bg">
			<div id="login-top">
				<img src="treemoLabs-logo.png" alt="Treemo Labs Dashboard" title="Powered By Treemo Labs" />			
			</div>
			
			<div id="login-content">
				 <form method="post" action="after-login.php">				
					<p>
						<label>Username</label>
						<input value="" name="username" class="text-input" type="text" />
					</p>
					<br style="clear: both;" />
					<p>
						<label>Password</label>
						<input name="password" class="text-input" type="password" />
					</p>
					<br style="clear: both;" />
					<p>
						<input class="button" type="submit" name="submit" value="Sign In" />
					</p>
					
				</form>
			</div>
		</div>
		<div id="dummy"></div>
		<div id="dummy2"></div>
<?php include_once('footer.php'); ?>

