<?php
session_start(); 

$_SESSION['date_from'] = $_POST['date_from'];
$_SESSION['date_to'] = $_POST['date_to'];
$_SESSION['persons'] = $_POST['persons'];
$_SESSION['location'] = $_POST['location'];
$location = $_GET['location'];



include_once 'dbconnect.php';

$where = "";
if ($_GET['rating']) {
	$where .= "WHERE ";
	$where .= "star_rating = '";
	$where .= $_GET['rating']."'";
}
if (($_GET['rating']) and ($_GET['price'])) {
	$where .= " AND ";
}
if ($_GET['price']) {
	list($pricefrom, $priceto) = explode(",", $_GET['price']);
	if ($pricefrom) {
		$where .= "WHERE ";
		$where .= "price > '";
		$where .= $pricefrom."'";
	}
	if ($pricefrom) {
		$where .= " AND price < '";
		$where .= $priceto."'";
	}
}
if ($_GET['location']) {
	$where .= "WHERE city LIKE '";
	$where .= $location."'";
	$where .= "OR country LIKE '";
	$where .= $location."'";
}
$locationssearch = explode(", ", $_POST['location']);
$locationsearch = $locationssearch[0];
if ($_POST['location']) {
	$where .= "WHERE city LIKE '";
	$where .= $locationsearch."'";
	$where .= "OR country LIKE '";
	$where .= $locationsearch."'";
}
$per_page=8;


$hotelqry = 'SELECT * FROM snapbid_hotels 
JOIN snapbid_rooms ON snapbid_hotels.id = snapbid_rooms.hotel_id 
JOIN snapbid_specials ON snapbid_rooms.room_id = snapbid_specials.specials_room_id
LEFT JOIN snapbid_reserves ON snapbid_reserves.reserve_room_id = snapbid_rooms.room_id '.$where.'
GROUP BY snapbid_hotels.hotelname
ORDER BY date_added DESC';
$result_select = mysql_query($hotelqry) or die(mysql_error());
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
    
<!--Results Includes-->
	<?php include 'inc/date-search.php'; ?>
    <?php include 'inc/specials/specials-results.php'; ?>
<!--Results Includes End-->
    
<!--Footer Include-->  
    <?php include 'inc/whymail.php'; ?>    
    <?php include 'inc/footer.php'; ?>
<!--Footer Include End-->   

</body>
</html>