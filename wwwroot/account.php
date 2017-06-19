<?php
session_start();
include_once 'dbconnect.php';

if(!isset($_SESSION['user']))
{
	header("Location: user.php");
}


$res=mysql_query("SELECT * FROM snapbid_users WHERE id=".$_SESSION['user']);
$userRow=mysql_fetch_array($res);
?>

<!DOCTYPE html>
<html lang="en">
    <?php include 'inc/head.php'; ?>
<body>
<!--Header Include-->
    <?php include 'inc/nav-logged.php'; ?>
<!--Header Include End-->

<div class="filler-mobile"> </div>

<!--Account Includes-->
	<?php if(isset($_GET['profile'])) : ?>
    		<?php include 'inc/profile.php'; ?>
	<?php endif; ?>

	<?php if(isset($_GET['bids'])) : ?>
    		<?php include 'inc/bids.php'; ?>
	<?php endif; ?>

	<?php if(isset($_GET['manage'])) : ?>
    		<?php include 'inc/manage.php'; ?>
	<?php endif; ?>

	<?php if(isset($_GET['trips'])) : ?>
    		<?php include 'inc/trips.php'; ?>
	<?php endif; ?>

	<?php if(isset($_GET['lotto'])) : ?>
    		<?php include 'inc/lotto.php'; ?>
	<?php endif; ?>

<!--Account Includes End-->
    
<!--Footer Include-->
    <?php include 'inc/whymail.php'; ?>
    <?php include 'inc/footer.php'; ?>
<!--Footer Include End-->   

</body>
</html>