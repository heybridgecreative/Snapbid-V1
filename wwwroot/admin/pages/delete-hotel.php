<?php 
    include_once 'dbconnect.php';

    $query = 'DELETE FROM snapbid_hotels WHERE id = '.$_GET["id"].'';
    mysql_query($query);		
	header("Location: hotels.php")
?>