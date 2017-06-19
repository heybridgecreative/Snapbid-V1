<?php
session_start();
include_once 'dbconnect.php';

$user = $_SESSION['aduser'];
$username = $_SESSION['adusername'];
$firstname = $_SESSION['adfirstname'];
$surname = $_SESSION['adsurname'];
$email = $_SESSION['ademail'];

$query = "SELECT * FROM snapbid_bookings JOIN snapbid_rooms ON snapbid_bookings.book_room_id = snapbid_rooms.room_id JOIN snapbid_hotels ON snapbid_rooms.hotel_id = snapbid_hotels.id WHERE author_id = ".$_SESSION['aduser']." ORDER BY book_room_id DESC LIMIT 5";


$resultSelect = mysql_query($query);
if (!$resultSelect) {
	header( 'Location: ../index.php' ) ; 
}
$rows = array();
	while($row = mysql_fetch_array($resultSelect))
$rows[] = $row;

?>

<!DOCTYPE html>
<html lang="en">

<?php include 'inc/head.php' ?>

<body>

    <div id="wrapper">

	<?php include 'inc/nav.php' ?>

        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Welcome to SnapBid Administration</h1>
						<h3>Nice to see you <?php echo $_SESSION['adfirstname']; ?> <?php echo $_SESSION['adsurname']; ?>!</h3>
						<p>Here you can manage the hotels, rooms, bookings and more</p>
								<p>&nbsp;</p>

						<?php include 'inc/panels.php' ?>
								<p>&nbsp;</p>


						<div class="col-xs-12">
						<p>&nbsp;</p>
						<div class="row">
							<div class="col-xs-12 col-sm-12">
								<p><strong>Account Details</strong></p>
								<p>Name: <?php echo $_SESSION['adfirstname']; ?> <?php echo $_SESSION['adsurname']; ?></p>
								<p>Email: <?php echo $_SESSION['ademail'];?></p>
								<p>&nbsp;</p>
							</div>
							<div class="col-xs-12 col-sm-6">
								<p><strong>Recent Bookings</strong></p>
								<ul class="notifications recentBookings">
									<?php foreach($rows as $row) : ?>
										<li>Someone booked a <?php echo $row['name']; ?> at the <?php echo $row['hotelname']; ?> - <a href="bookings.php">View the booking</a></li>
									<?php endforeach; ?>
								</ul>
							</div>
							<div class="col-xs-12 col-sm-6">
								<p><strong>Notifications</strong></p>
								<ul class="notifications accountDetails">
									<li>You have had a total of <?php echo $bookings; ?> bookings for the hotels you have added. <a href="#">View them here</a></li>
									<li>You have added <?php echo $rooms; ?> rooms in total onto SnapBid. <a href="#">See them and add more here</a></li>
									<li>8 rooms have the bidding system enabled on them, with a reserve being set. <a href="#">See them and add more rooms here</a></li>
								</ul>
							</div>
						</div>
						</div>


                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->

	<?php include 'inc/jquery.php' ?>



</body>

</html>
