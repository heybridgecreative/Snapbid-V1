<?php
session_start(); 
include_once 'dbconnect.php';

$lottoqry = 'SELECT * FROM snapbid_lotto_entries WHERE username = "'.$_SESSION['username'].'"';
$result_select = mysql_query($lottoqry) or die(mysql_error());
$rows = array();
while($row = mysql_fetch_array($result_select))
$rows[] = $row;

?>

<!DOCTYPE html>
<html lang="en">
<?php include 'inc/head.php'; ?>
<body>
<!--Header Include-->
    <?php include 'inc/nav-alt.php'; ?>
<!--Header Include End-->
    
<!--Hotel Includes-->
    <?php include 'inc/lotto.php'; ?>
<!--Hotel Includes End-->
    
<!--Footer Include-->
    <?php include 'inc/whymail.php'; ?>
    <?php include 'inc/footer.php'; ?>
<!--Footer Include End-->   

</body>
</html>