<?php
session_start(); 
include_once 'dbconnect.php';

$date_from = $_SESSION['date_from'];
$room = $_SESSION['room'];
$date_to = $_SESSION['date_to'];
$user = $_SESSION['username']; 

$date_from = date("Y-m-d", strtotime($date_from));
$date_to = date("Y-m-d", strtotime($date_to));

$qry = "SELECT * FROM snapbid_bookings JOIN snapbid_rooms ON snapbid_rooms.room_id = snapbid_bookings.book_room_id JOIN snapbid_hotels ON snapbid_rooms.hotel_id = snapbid_hotels.id WHERE (book_date_from = '".$date_from."' AND book_date_to = '".$date_to."' AND book_room_id = '".$room."' AND book_user_name = '".$user."') ORDER BY date_book DESC";

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
<!--Header Include End-->
<!--Booking Includes-->
    <?php include 'inc/book-booking-details.php'; ?>
<!--Booking Includes End-->
  
 
    <?php include 'inc/footer.php'; ?>

</body>
</html>