<div class="row">
<div class="col-xs-12">
<h2>Your Trips</h2>
<p>Here are a list of your hotels that have been added to your trips</p>
</div>
</div>
<div class="bid-status">

<?php
	include_once 'dbconnect.php';

	$hotelqry = 'SELECT * FROM snapbid_trips JOIN snapbid_hotels ON snapbid_trips.hotel_id = snapbid_hotels.id JOIN snapbid_rooms ON snapbid_hotels.id = snapbid_rooms.hotel_id LEFT JOIN snapbid_reserves ON snapbid_reserves.reserve_room_id = snapbid_rooms.room_id WHERE snapbid_trips.user_id = "'.$_SESSION['user'].'" GROUP BY snapbid_trips.hotel_id';

	$result_select = mysql_query($hotelqry) or die(mysql_error());
	$rows = array();
	while($row = mysql_fetch_array($result_select))
    	$rows[] = $row;
?>

	<?php include('trips-hotel-item.php'); ?>

</div>