<?php
$dateRange = createDateRangeArray($_SESSION['date_from'], $_SESSION['date_to']);
$totalPrice = 0;
foreach ($dateRange as $key => $date) {
	$checkWhere = " WHERE room_price_room_id = ";
	$checkWhere .= $room['room_id'];
	$checkWhere .= " AND '";
	$checkWhere .= $date;
	$checkWhere .= "' >= price_date_start AND '";
	$checkWhere .= $date;
	$checkWhere .= "' < price_date_end";

	$getPrice = 'SELECT room_price from snapbid_room_prices' .$checkWhere. ' LIMIT 1';
		$priceSelect = mysql_query($getPrice);
  		$priceOut = mysql_fetch_row($priceSelect);
		$totalPrice += $priceOut[0];
		
}



?>