<?php
$room = $_POST['room'];
	if(isset($_POST['bid'])) {
		$sql = 'INSERT INTO snapbid_bids (`bid_user_name`, `bid_status_id`, `bid_room_id`, `bid_date_from`, `bid_date_to`, `bid_bid_price`, `total_price`, `bid_persons`) VALUES ("'.$user.'", "'.$bid_status.'", "'.$room.'", STR_TO_DATE("'.$date_from.'", "%d-%m-%Y"), STR_TO_DATE("'.$date_to.'", "%d-%m-%Y"), "'.$bidtotal.'.00", "'.$calculatedPrice.'.00", "'.$persons.'")';
		$retval = mysql_query($sql);
	}
?>