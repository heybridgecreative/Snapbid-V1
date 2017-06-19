<?php
include('../dbconnect.php');

$hotel = $_POST['hotel'];
$user = $_POST['user'];

$check=mysql_query("select hotel_id, user_id from snapbid_trips where user_id='$user' and hotel_id='$hotel'");
$count=mysql_num_rows($check);

if($count==0) {
	mysql_query("INSERT INTO snapbid_trips (hotel_id, user_id) VALUES ('$hotel', '$user')");
} else {
	mysql_query("DELETE FROM snapbid_trips WHERE hotel_id='$hotel' AND user_id='$user'");
}
?>

	