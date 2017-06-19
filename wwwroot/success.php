<?php
session_start(); 
include_once 'dbconnect.php';

$date_from = $_SESSION['date_from'];
$room = $_SESSION['room'];
$date_to = $_SESSION['date_to'];
$user = $_SESSION['username']; 
$bookingref = $_GET['hash'];

$date_from = date("Y-m-d", strtotime($date_from));
$date_to = date("Y-m-d", strtotime($date_to));

$qry = "SELECT * FROM snapbid_bookings JOIN snapbid_rooms ON snapbid_rooms.room_id = snapbid_bookings.book_room_id JOIN snapbid_hotels ON snapbid_rooms.hotel_id = snapbid_hotels.id WHERE (book_date_from = '".$date_from."' AND book_date_to = '".$date_to."' AND book_room_id = '".$room."' AND book_user_name = '".$user."') ORDER BY date_book DESC LIMIT 1";

$result_select = mysql_query($qry) or die(mysql_error());
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

<!--Content -->
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<h2 style="margin-top:60px;text-align:center;">You have successfully booked your stay with SnapBid</h2>
				<p style="text-align:center;">Your booking reference is: <strong><?php echo $bookingref; ?></strong></p>
			</div>
		</div>
	</div>
<div class="container explain success-booking">
	<div class="row">
	<?php foreach($rows as $row) : ?>
		<div class="col-xs-12">
			<div class="col-xs-12 col-sm-4">
				<h3><?php echo $row['hotelname'];?></h3> 
				<h4><?php echo $row['name']; ?></h4>
				<p>&nbsp;</p>
				<?php $checkin = date("l jS F Y", strtotime($row['book_date_from'])); $checkout = date("l jS F Y", strtotime($row['book_date_to'])); ?>
				<p>Check in: <strong><?php echo $checkin; ?></strong></p>
				<p>Check out: <strong><?php echo $checkout; ?></strong></p>
				<p></p>
				<p style="padding:5px 10px;" class="bid-btn"><a style="color:white;" href="account.php">Manage Booking</a></p>
							</div>
			<div class="col-xs-12 col-sm-8 fadein">
				<?php $images = explode(',', $row['images']);
					foreach($images as $image) : ?>
						<?php $image = str_replace(' ', '', $image); ?>
						<?php if(!empty($image)) : ?>
							<img src="<?php echo $image; ?>">
						<?php endif; ?>
				<?php endforeach; ?>

			</div>
		</div>
	<?php endforeach; ?>
	</div>
</div>
<!-- Content End -->
  
<!--Footer Include-->
    <?php include 'inc/whymail.php'; ?>
    <?php include 'inc/footer.php'; ?>
<!--Footer Include End-->   
</body>
</html>