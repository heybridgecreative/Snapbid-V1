<?php
session_start(); 
include 'dbconnect.php';

$date_from = $_SESSION['date_from'];
$date_to = $_SESSION['date_to'];
$persons = $_SESSION['persons'];
$room = $_POST['room'];
$user = $_SESSION['username'];
$hash = $_GET['hash'];

$date_from = date('Y-m-d', strtotime($date_from));
$date_to = date('Y-m-d', strtotime($date_to));


$bookqry = 'SELECT * FROM snapbid_bookings WHERE book_date_from = "'.$date_from.'" AND book_room_id = "'.$room.'" AND book_date_to = "'.$date_to.'" AND book_user_name = "'.$user.'" ';
$result_select = mysql_query($bookqry) or die(mysql_error());
$rows = array();
while($row = mysql_fetch_array($result_select))
$rows[] = $row;

foreach($rows as $booking) {
	$bookingid = $booking['booking_id'];
}

header("Location: book-booking.php?hash=$hash")


?>