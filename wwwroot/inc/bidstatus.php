<?php 
session_start(); 
include_once 'dbconnect.php';

	$formatted_date = date('Y-m-d');
	$checkWhere = " WHERE reserve_room_id = ";
	$checkWhere .= $_SESSION['room'];
	$checkWhere .= " AND '";
	$checkWhere .= $formatted_date;
	$checkWhere .= "' >= reserve_date_from AND '";
	$checkWhere .= $formatted_date;
	$checkWhere .= "' <= reserve_date_to";

$checkqry = 'SELECT * FROM snapbid_bids 
JOIN snapbid_rooms ON snapbid_bids.bid_room_id = snapbid_rooms.room_id 
JOIN snapbid_hotels ON snapbid_rooms.hotel_id = snapbid_hotels.id 
LEFT JOIN snapbid_reserves ON snapbid_reserves.reserve_room_id = snapbid_rooms.room_id AND "'.$formatted_date.'" >= snapbid_reserves.reserve_date_from AND "'.$formatted_date.'" <= snapbid_reserves.reserve_date_to
WHERE bid_user_name = "' .$_POST['user_name']. '"
ORDER BY snapbid_bids.bid_id DESC
LIMIT 1';

$statuscheck_select = mysql_query($checkqry) or die(mysql_error());
$statuses = array();
while($status = mysql_fetch_array($statuscheck_select))
$statuses[] = $status;
?>

<?php 
  foreach($statuses as $status) {
	$reservediff = $_SESSION['calculatedPrice'] * ($status['reserve_price'] / 100);
	$reserveprice = $_SESSION['calculatedPrice'] - $reservediff;
	$close = $reserveprice - 5;

	if($bid > $reserveprice) {
		$bid_status = 1;
	} elseif(($bid > $close) and ($bid < $reserveprice)) {
		$bid_status = 3;
	} else {
		$bid_status = 2;
	}

	$_SESSION['bidStatus'] = $bid_status;
	$_SESSION['reservePrice'] = $reserveprice;
	$_SESSION['close'] = $close;

  }
?>