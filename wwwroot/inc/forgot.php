<?php 
$getTime = date('m/d/Y h:i:s a', time());
$getHash = md5($getTime);

if(isset($_POST['btn-forgot']))
{
	$hash = $_POST['hash'];
	$email = $_POST['email'];
	
	mysql_query("UPDATE snapbid_users SET forgotHash = '$hash' WHERE email = '$email'");
	mysql_query("UPDATE snapbid_users SET forgotAttempts = forgotAttempts + 1 WHERE email = '$email'");

	$userdata = mysql_query("SELECT * FROM snapbid_users WHERE email = '$email'");
	$row = mysql_fetch_array($userdata);

	$to = $email;
  	$from = "hello@snapbid.com";
  	$subject = "Change of Password Request";
  	$comment = "Hello ".$row['first_name'].", \r\n You have requested a reset password. Here is your unique link that will take you to where you need to go:\r\n\r\nhttp://www.cmwebdesign.co.uk/heybridge/sb-test/html/user.php?reset&hash=".$hash."&email=".$email."\r\n\r\nThank you and have fun bidding!\r\n\r\nSnapBid";
  
 	//send email
  	mail($to, "$subject", $comment, "From:" . $from);

}
?>

<?php
if(isset($_POST['btn-forgot'])) : ?>
	<div class="success">
		<div class="row">
			<div class="col-xs-12">
				<p><span style="font-size:20px">Check your Inbox for a "Change of Password" email.</span> <small>Please check junk folder before retrying. </small></p>
			</div>
		</div>
	</div>
<?php endif;?>

<div class="row login">
	<div class="col-xs-12 text">
			<h2>Forgot Your Password</h2>
			<p>Enter your email address that the account is setup with.</p>
	</div>
	<div class="col-xs-12">
    		<div id="login-form">
			<form method="post">
				<table align="center" width="30%" border="0">
				<tr>
					<td style="font-size:30px; color:#9f1f63; text-align:center;"><i class="fa fa-envelope"></i></td>
				</tr>
				<tr>
					<td><input type="text" name="email" placeholder="Your Email Address" required /><input type="hidden" name="hash" value="<?php echo $getHash; ?>" /></td>
				</tr>
				<tr>
					<td><button type="submit" name="btn-forgot">Search</button></td>
				</tr>
				</table>
			</form>
		</div>
	</div>
</div>





