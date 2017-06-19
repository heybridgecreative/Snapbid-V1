<?php
session_start(); 
include_once 'dbconnect.php';

$date_from = $_SESSION['date_from'];
$room = $_SESSION['room'];
$date_to = $_SESSION['date_to'];
$bid_id = $_SESSION['bid_ref'];
$user = $_SESSION['username']; 
$hash = $_GET['hash'];

$qry = "SELECT * FROM snapbid_bids JOIN snapbid_rooms ON snapbid_rooms.room_id = snapbid_bids.bid_room_id JOIN snapbid_hotels ON snapbid_rooms.hotel_id = snapbid_hotels.id WHERE (bid_id = '".$bid_id."' AND bid_room_id = '".$room."' AND bid_user_name = '".$_SESSION['user']."') ORDER BY date_bidded DESC";

$result_select = mysql_query($qry) or die(mysql_error());
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

	<?php include 'inc/countdown.php'; ?>

<!--Header Include End-->

<!--Booking Includes-->
    <?php include 'inc/booking-details.php'; ?>

<!--Booking Includes End-->
  
<!--Footer Include-->
    <?php include 'inc/whymail.php'; ?>
    <?php include 'inc/footer.php'; ?>
<!--Footer Include End-->   

</body>
</html>