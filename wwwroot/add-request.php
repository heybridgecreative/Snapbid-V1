<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">

    <?php include 'inc/head.php'; ?>
    
<body>
<!--Header Include-->
    <?php include 'inc/nav.php'; ?>
    <?php include 'inc/header.php'; ?>
    <div class="home-search">
        <?php include 'inc/search-bar.php'; ?>
    </div>

<!--Header Include End-->
    
<!--Hotel Includes-->
    <h2>&nbsp;</h2>
	<div style="text-align:center;">
		<h2>Thank you for applying to Add Your Property</h2>
		<p style="margin-bottom:50px;">If you not sure what to do next then follow the instructions below</p>
	</div>
	<div class="addrequestinst">
	<div class="row">
		<div class="col-xs-4 left" style="text-align:center;">
			<img src="img/add-email.png" alt="Check Your Email">
		</div>
		<div class="col-xs-8">
			<h3>Check your E-Mail</h3>
			<p>We will be reviewing your application, and supplying successful candidates with a username and password to login to our sophisticated Property Manager</p>
		</div>
	</div>
	<div class="row">
		<div class="col-xs-8">
			<h3>Login to the Property Manager</h3>
			<p>After receiving the account details, you can log into the Property Manager and begin your journey with SnapBid's ability to increase occupancy rates.</p>
		</div>
		<div class="col-xs-4 right" style="text-align:center;">
			<img src="img/add-password.png" alt="Enter your password">
		</div>
	</div>
	<div class="row">
		<div class="col-xs-4 left" style="text-align:center;">
			<img src="img/add-hotels.png" alt="Manage your Properties">
		</div>
		<div class="col-xs-8">
			<h3>Manage your Properties</h3>
			<p>We give you complete control over how your property is displayed on the website, from the imagery and content to the pricing structure. Along with the additional extras that allow your property stand out from the rest. </p>
		</div>
	</div>
	</div>
	<p>    
<!--Hotel Includes End-->
    
<!--Footer Include-->
    <?php include 'inc/whymail.php'; ?>
    <?php include 'inc/footer.php'; ?>
<!--Footer Include End-->   

</body>
</html>