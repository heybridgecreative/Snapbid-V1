<?php if( (!isset($_GET['hash'])) OR (!isset($_GET['email'])) ) : ?>
    		
	<div class="warning">
		<div class="row">
			<div class="col-xs-12">
				<p><span style="font-size:20px">Invalid key combination, please try again!</span> <small>If error persists, please contact the <a href="#">SnapBid Administrator.</a></small></p>
			</div>
		</div>
	</div>
	<?php include('inc/forgot.php'); ?>
		
<?php endif; ?>



<?php if( (isset($_GET['hash'])) && (isset($_GET['email'])) ) : ?>

<?php 
	$getTime = date('m/d/Y h:i:s a', time());
	$getHash = md5($getTime);
?>

<div class="row login">
	<div class="col-xs-12 text">
			<h2>Set Your New Password</h2>
			<p>Enter a new password that you would like to use.</p>
	</div>
	<div class="col-xs-12">
    		<div id="login-form">
			<form method="post" action="user.php?success">
				<table align="center" width="30%" border="0">
				<tr>
					<td style="font-size:30px; color:#9f1f63; text-align:center;"><i class="fa fa-lock"></i></td>
				</tr>
				<tr>
					<td><input type="text" name="password" placeholder="Your New Password" required /></td>
				</tr>
				<tr>
					<td><input type="text" name="password2" placeholder="Confirm Password" required /></td>
				</tr>
				<tr>
					<td><input type="hidden" name="email" value="<?php echo $_GET['email']; ?>"><button type="submit" name="btn-reset">Search</button></td>
				</tr>
				</table>
			</form>
		</div>
	</div>
</div>

<?php endif; ?>