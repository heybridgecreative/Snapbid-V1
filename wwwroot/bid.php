<?php
session_start(); 
include_once 'dbconnect.php';

$_SESSION['persons'] = $_POST['persons'];
$_SESSION['room'] = $_POST['room'];
$_SESSION['user'] = $_POST['user_name'];
$_SESSION['date_from'] = $_POST['date_from'];
$_SESSION['date_to'] = $_POST['date_to'];
$_SESSION['bid'] = $_POST['bid-price'] + $_POST['bid-price2'];	

$persons = $_POST['persons'];
$user = $_POST['user_name'];
$room = $_POST['room'];
$date_from = $_SESSION['date_from'];
$date_to = $_SESSION['date_to'];
$bid = $_POST['bid-price'] + $_POST['bid-price2'];
$bidtotal = $_POST['bid-price'] + $_POST['bid-price2'];	

$bidqry = 'SELECT * FROM snapbid_bids 
JOIN snapbid_rooms ON snapbid_bids.bid_room_id = snapbid_rooms.room_id 
JOIN snapbid_hotels ON snapbid_rooms.hotel_id = snapbid_hotels.id 
LEFT JOIN snapbid_reserves ON snapbid_reserves.reserve_room_id = snapbid_rooms.room_id
WHERE bid_user_name = "' .$_POST['user_name']. '"
ORDER BY snapbid_bids.bid_id DESC
LIMIT 1';

include ('inc/getTotalPriceBid.php');
include ('inc/bidstatus.php');
include ('inc/bid_insert.php');


$result_select = mysql_query($bidqry) or die(mysql_error());
$rows = array();
while($row = mysql_fetch_array($result_select))
$rows[] = $row;
?>

<!DOCTYPE html>
<html lang="en">
<?php include 'inc/head.php'; ?>
<body>
<!--Header Include-->
    <?php include 'inc/nav-alt.php'; ?>
<!--Header Include End-->
    
<!--Hotel Includes-->
	<?php include 'inc/biddingnew.php'; ?>
	
<!--Hotel Includes End-->
    
<!--Footer Include-->
    <?php include 'inc/whymail.php'; ?>
    <?php include 'inc/footer.php'; ?>
<!--Footer Include End-->   
</body>
</html>