<?php
session_start(); 
include_once 'dbconnect.php';

$_SESSION['bidStatus'] = 0;
$_SESSION['reservePrice'] = 0;
$_SESSION['bid'] = 0;
$_SESSION['bid_ref'] = 0;
$_SESSION['close'] = 0;
$_SESSION['calculatedPrice'] = 0;
$_SESSION['room_price'] = 0;


if(!isset($_SESSION['date_from'])) {
	 $_SESSION['date_from'] = $_POST['date_from'];
} else {
	$_SESSION['date_from'] = $_SESSION['date_from'];
}

if(!isset($_SESSION['date_to'])) {
	 $_SESSION['date_to'] = $_POST['date_to'];
} else {
	$_SESSION['date_to'] = $_SESSION['date_to'];
}

if(!isset($_SESSION['persons'])) {
	 $_SESSION['persons'] = $_POST['persons'];
} else {
	$_SESSION['persons'] = $_SESSION['persons'];
}

if(!isset($_SESSION['board'])) {
	 $_SESSION['board'] = $_POST['board'];
}



if ($_GET['hotel_id']) {
	$where = " WHERE id = ";
	$where .= $_GET['hotel_id'];
} 

if (empty($where)) {
	header("Location: results.php");
}
$hotelqry = 'SELECT * FROM snapbid_hotels '.$where.'';
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
<?php foreach($rows as $row) : ?>    
<!--Hotel Includes-->
    <?php include 'inc/back-to-results.php'; ?>
    <?php include 'inc/hotel-info.php'; ?>
    <?php include 'inc/hotel-images-map.php'; ?>
	<?php if(empty($_SESSION['date_from'])) : ?>
		<?php include 'inc/hotel-date.php'; ?>
	<?php endif; ?>

	<?php if(!empty($_SESSION['date_from'])) : ?>
		<?php include 'inc/hotel-date-set.php'; ?>
	<?php endif; ?>

    <div class="room-info">
		<?php include 'inc/hotel-room-info.php'; ?>
	</div>
	<div class="room-info-mobile">    
		<?php include 'inc/hotel-room-info-mobile.php'; ?>
	</div>

<?php include 'inc/forEachRoom.php'; ?>

	<?php include 'inc/hotel-more-info.php'; ?>
<!--Hotel Includes End-->
<?php endforeach ?>    
<!--Footer Include-->
    <?php include 'inc/whymail.php'; ?>



    <?php include 'inc/footer.php'; ?>
<!--Footer Include End-->   
</body>
</html>