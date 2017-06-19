 <?php
if(isset($_GET['hotel_id'])) {
	$whererooms = " WHERE hotel_id = ";
	$whererooms .= $_GET['hotel_id'];
} else {
	$whererooms = "";
}


$today = date('Y/m/d',strtotime("+1 days"));

$roomqry = 'SELECT * FROM snapbid_rooms LEFT JOIN snapbid_reserves ON snapbid_rooms.room_id = snapbid_reserves.reserve_room_id  AND ("'.$today.'" BETWEEN snapbid_reserves.reserve_date_from AND snapbid_reserves.reserve_date_to) LEFT JOIN snapbid_room_availability ON snapbid_rooms.room_id = snapbid_room_availability.availability_room_id  AND ("'.$today.'" BETWEEN snapbid_room_availability.availability_date_from AND snapbid_room_availability.availability_date_to) '.$whererooms.' GROUP BY snapbid_rooms.name';


$result_select = mysql_query($roomqry) or die(mysql_error());
$rrows = array();
while($rrow = mysql_fetch_array($result_select))
$rrows[] = $rrow;



?>