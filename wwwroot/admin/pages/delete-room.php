<?php 
    include_once 'dbconnect.php';

    $query = 'DELETE FROM snapbid_rooms WHERE room_id = '.$_GET["id"].'';
    mysql_query($query);		
	header("Location: rooms.php")
?>