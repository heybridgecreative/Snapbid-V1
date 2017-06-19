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
    
<!--Nearby Includes-->
    <?php include 'inc/nearby-map.php'; ?>
    <p>&nbsp;</p>
    <?php include 'inc/results.php'; ?>
<!--Nearby Includes End-->
    
<!--Footer Include-->
    <?php include 'inc/whymail.php'; ?>
    <?php include 'inc/footer.php'; ?>
<!--Footer Include End-->   

</body>
</html>