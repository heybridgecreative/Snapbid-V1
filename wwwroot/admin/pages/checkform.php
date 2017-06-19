<?php
include_once 'dbconnect.php';


    	$hotelid = $_POST['hotelname'];		
	$roomname = $_POST['name'];
	$occupancy = $_POST['occupancy'];
	$introinfo = $_POST['introinfo'];
	$roominfo = $_POST['roominfo'];
	$price = $_POST['price'];
	$image = $_POST['image'];

	$features = implode(', ', $_POST['features']);

	$sql = 'INSERT INTO snapbid_rooms (`hotel_id`, `name`, `occupancy`, `features`, `intro_info`, `room_info`, `price`, `image`) VALUES ("'.$hotelid.'", "'.$roomname.'", "'.$occupancy.'", "'.$features.'", "'.$introinfo.'", "'.$roominfo.'", "'.$price.'", "'.$image.'")';
	$retval = mysql_query($sql);

	header("Location: rooms.php")

?>