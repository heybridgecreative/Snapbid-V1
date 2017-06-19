<?php
$xml = file_get_contents('http://terminal2.expedia.com/x/hotels?adultCount=2&location=51.5033630,-0.1276250&radius=1km&dates=2016-11-19,2016-11-22&apikey=7436C7B8-63A8-487E-96DF-90078411A590');
$hotel = json_decode($xml, true);
?> 

<h2>Matching Hotel Count: <?php echo $hotel['MatchingHotelCount']; ?> </h2>
<p>Displaying: <?php echo $hotel['HotelCount']; ?> </p>
<h4>Check in Date: <?php echo $hotel['StayDates']['CheckInDate']; ?></h4>
<h4>Check out Date: <?php echo $hotel['StayDates']['CheckOutDate']; ?></h4>

<?php 
foreach ($hotel['HotelInfoList']['HotelInfo'] as $hotelInfo) {

    echo '<img src="' . $hotelInfo['ThumbnailUrl'] . '" />';
	echo '<p><span style="font-size:20px">' . $hotelInfo['Name'] . '</span><br />' . $hotelInfo['Locations'] . '</p><p>' . $hotelInfo['Location']['StreetAddress'] . ', ' . $hotelInfo['Location']['City'] . '</p><p><strong>' . $hotelInfo['Price']['TotalRate']['Value'] . '</strong></p>';
	echo '<hr>';

}
?>
