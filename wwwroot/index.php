<?php
session_start(); 
include_once 'dbconnect.php';
?>
<!DOCTYPE html>
<html lang="en">

    <?php include 'inc/head.php'; ?>
    
<body>
<?php 
if(!isset($_SESSION['username'])) {
	include 'inc/loginReminder.php';
}
?>
	<div class="off-canvas">
		<?php include 'inc/how.php'; ?>
	</div>
<div class="contain-off-canvas">
<!--Header Include-->
    <?php include 'inc/nav.php'; ?>
    <?php include 'inc/header.php'; ?>
    <div class="home-search" id="home-search">
		<h4 style="text-align:center;color:white;">Find your perfect hotel</h4>
        <?php include 'inc/search-bar.php'; ?>
    </div>
<!--Header Include End-->
    
<!--Index Includes-->
    <?php include 'inc/explain.php'; ?>
    <?php include 'inc/explore.php'; ?>
    <?php include 'inc/nearby.php'; ?>
    <?php include 'inc/extras.php'; ?>
    <?php include 'inc/whymail.php'; ?>
<!--Index Includes End-->
    
<!--Footer Include-->    
    <?php include 'inc/footer.php'; ?>
<!--Footer Include End-->   
</div>

<script type="text/javascript">
    jQuery(document).ready(function(){
        jQuery('#loginReminder').modal('show');
    });
</script>
</body>
</html>