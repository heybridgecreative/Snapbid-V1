<div class="row login">
	<div class="col-xs-12">
    		<div id="login-form">

			<form id="log-form" method="post" action="user.php">
				<table align="center" width="30%" border="0">
				<tr>
					<td colspan="2"><input id="username" type="text" name="username" placeholder="Your Username" required /></td>
				</tr>
				<tr>
					<td colspan="2"><input id="password" type="password" name="pass" placeholder="Your Password" required /></td>
				</tr>
				<tr>
					<td colspan="2"><input id="returnURL" type="hidden" name="returnURL" value="<?php echo $_SERVER[REQUEST_URI]; ?>" /><button type="submit" name="btn-login">Sign In</button></td>
				</tr>
				</table>
			</form>
		</div>
	</div>
</div>