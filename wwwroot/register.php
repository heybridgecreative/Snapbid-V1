<?php
session_start();
if(isset($_SESSION['user'])!="")
{
	header("Location: account.php");
}
include_once 'dbconnect.php';

if(isset($_POST['btn-signup']))
{
	$uname = mysql_real_escape_string($_POST['uname']);
	$upass = md5(mysql_real_escape_string($_POST['pass']));
	$email = mysql_real_escape_string($_POST['email']);
	$fname = mysql_real_escape_string($_POST['fname']);
	$sname = mysql_real_escape_string($_POST['sname']);
	
	if(mysql_query("INSERT INTO snapbid_users(username,password,first_name,surname,email) VALUES('$uname','$upass','$fname','$sname','$email')"))
	{
		?>
        <script>alert('successfully registered ');</script>
        <?php
	}
	else
	{
		?>
        <script>alert('error while registering you...');</script>
        <?php
	}
}
?>
<!DOCTYPE html>
<html lang="en">
    <?php include 'inc/head.php'; ?>
<body>
<!--Header Include-->
    <?php include 'inc/nav-alt.php'; ?>
<!--Header Include End-->
    
<!--register Includes-->

	<?php include 'inc/register.php'; ?>

<!--register Includes End-->
    
<!--Footer Include-->
    <?php include 'inc/whymail.php'; ?>
    <?php include 'inc/footer.php'; ?>
<!--Footer Include End-->   

</body>
</html>