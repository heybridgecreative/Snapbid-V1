<?php
session_start();
include_once 'dbconnect.php';

if(isset($_SESSION['user'])!="")
{
	header("Location: account.php?profile");
}

if(isset($_POST['btn-login']))
{
	$username = mysql_real_escape_string($_POST['username']);
	$upass = mysql_real_escape_string($_POST['pass']);
	$returnURL = mysql_real_escape_string($_POST['returnURL']);
	$res = mysql_query("SELECT * FROM snapbid_users WHERE username='$username'");
	$row = mysql_fetch_array($res);
	
	if($row['password']==md5($upass))
	{
		$_SESSION['user'] = $row['id'];
		$_SESSION['username'] = $row['username'];
		$_SESSION['firstname'] = $row['first_name'];
		$_SESSION['surname'] = $row['surname'];
		$_SESSION['email'] = $row['email'];
		if(isset($returnURL)) {
			header('Location: http://'.$_SERVER[HTTP_HOST].$returnURL);
		} else {
        	header('Location: http://snapbid.azurewebsites.net/account.php?profile');
		}
	}
	else
	{
		?>
        <script>alert('Please try again!');</script>
        <?php
	}	
}
?>

<?php 
if(isset($_POST['btn-reset'])) {
	$pass = md5($_POST['password']);
	$email = $_POST['email'];
	mysql_query("UPDATE snapbid_users SET password = '$pass' WHERE email = '$email'");
	header('Location: user.php?changesuccess'); 
} 
?>

<!DOCTYPE html>
<html lang="en">
    <?php include 'inc/head.php'; ?>
<body>
<!--Header Include-->
    <?php include 'inc/nav-alt.php'; ?>
<!--Header Include End-->
    
<!--Login Includes-->

	<?php if(isset($_GET['forgot'])) : ?>
    		<?php include 'inc/forgot.php'; ?>
	<?php endif; ?>

	<?php if(isset($_GET['reset'])) : ?>
    	<?php include 'inc/reset.php'; ?>
	<?php endif; ?>

	<?php if((!isset($_GET['forgot'])) && (!isset($_GET['reset']))) : ?>
		<?php if(isset($_GET['success'])) : ?>
			<div class="success">
				<div class="row">
					<div class="col-xs-12">
						<p><span style="font-size:20px">You've successfully changed your password.</span> <small>Please try logging in.</small></p>
					</div>
				</div>
			</div>
		<?php endif; ?>
    	<?php include 'inc/login.php'; ?>
	<?php endif; ?>

<!--Login Includes End-->
    
<!--Footer Include-->
    <?php include 'inc/whymail.php'; ?>
    <?php include 'inc/footer.php'; ?>
<!--Footer Include End-->   

</body>
</html>

