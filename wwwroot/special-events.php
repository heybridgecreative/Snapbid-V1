<?php 
session_start();
include_once 'dbconnect.php';
?>

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
    
<!--Event Includes-->
    <h2>&nbsp;</h2>
    <?php include 'inc/special-events.php'; ?>
<!--Event Includes End-->
    
<!--Footer Include-->
    <?php include 'inc/whymail.php'; ?>
    <?php include 'inc/footer.php'; ?>
<!--Footer Include End-->   

</body>
</html>