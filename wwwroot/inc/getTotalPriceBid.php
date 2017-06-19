<?php

$totalPrices = $_SESSION['totalPrices'];
$totalPricesEx = explode(',', $totalPrices);

foreach($totalPricesEx as $totalPrice) {
	$roomID = explode('-', $totalPrice);
	if($roomID[1] == $room) {
		$calculatedPrice = $roomID[0];
		$_SESSION['calculatedPrice'] = $calculatedPrice;
	}
}

?>