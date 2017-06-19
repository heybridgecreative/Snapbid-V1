<?php
session_start(); 
include_once 'dbconnect.php';

$date_from = $_SESSION['date_from'];
$date_to = $_SESSION['date_to'];
$persons = $_SESSION['persons'];
$room = $_POST['room'];
$_SESSION['room'] = $room;
$board = $_SESSION['board'];
$user = $_SESSION['username'];
$hash = $_GET['hash'];

include 'inc/getTotalPriceBid.php';

$qry = 'INSERT INTO snapbid_bookings (`book_date_from`, `book_date_to`, `book_persons`, `book_price`, `book_room_id`, `book_user_name`) VALUES (STR_TO_DATE("'.$date_from.'", "%d-%m-%Y"), STR_TO_DATE("'.$date_to.'", "%d-%m-%Y"), "'.$persons.'", "'.$calculatedPrice.'", "'.$room.'", "'.$user.'")';

$retval = mysql_query($qry);

if(!$retval) {
	header("Location: error.php");
} else {
	header("Location: book-booking.php?hash=$hash");
} 

?>