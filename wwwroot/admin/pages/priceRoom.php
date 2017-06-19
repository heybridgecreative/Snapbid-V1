<?php

session_start();
include_once 'dbconnect.php';


    	$hotelid = $_POST['hotelname'];		
	$roomname = $_POST['name'];
	$occupancy = $_POST['occupancy'];
	$introinfo = $_POST['introinfo'];
	$roominfo = $_POST['roominfo'];
	$price = $_POST['price'];
	$image = $_POST['image'];

	$features = implode(', ', $_POST['features']);


	if(isset($_POST['add'])) {
		$sql = 'INSERT INTO snapbid_rooms (`hotel_id`, `name`, `occupancy`, `features`, `intro_info`, `room_info`, `price`, `image`) VALUES ("'.$hotelid.'", "'.$roomname.'", "'.$occupancy.'", "'.$features.'", "'.$introinfo.'", "'.$roominfo.'", "'.$price.'", "'.$image.'")';
		$retval = mysql_query($sql);
	}


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
                        <h1 class="page-header">SnapBid Room Price Manager</h1>
						<p>Here you can manage the hotels that have been added to the website</p>

						<?php include 'inc/roomprices.php' ?>

						<p>&nbsp;</p>

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
