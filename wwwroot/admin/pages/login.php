<?php
session_start();
include_once 'dbconnect.php';




if(isset($_POST['admin-login']))
{
	$username = mysql_real_escape_string($_POST['username']);
	$upass = mysql_real_escape_string($_POST['pass']);
	$res = mysql_query("SELECT * FROM snapbid_users WHERE username='$username'");
	$row = mysql_fetch_array($res);
	
	if($row['password']==md5($upass))
	{
		$_SESSION['user'] = $row['id'];
		$_SESSION['username'] = $row['username'];
		$_SESSION['firstname'] = $row['first_name'];
		$_SESSION['surname'] = $row['surname'];
		$_SESSION['email'] = $row['email'];
		$_SESSION['type'] = $row['type'];
        header('Location: index.php');
	}
	else
	{
		?>
        <script>alert('Please try again!');</script>
        <?php
	}
	
}

?>



<!DOCTYPE html>
<html lang="en">


<?php include 'inc/head.php' ?>

<body>

    <div class="container">
        <div class="row">
            	<div class="col-xs-12">
    		<div id="login-form">
			<form method="post">
				<table align="center" width="30%" border="0">
				<tr>
					<td colspan="2"><input id="username" type="text" name="username" placeholder="Your Username" required /></td>
				</tr>
				<tr>
					<td colspan="2"><input id="password" type="password" name="pass" placeholder="Your Password" required /></td>
				</tr>
				<tr>
					<td colspan="2"><button type="submit" name="admin-login">Sign In</button></td>
				</tr>
				</table>
			</form>
		</div>
	</div>
        </div>
    </div>

    <!-- jQuery -->


	<?php include 'inc/jquery.php' ?>>

</body>

</html>
