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
                        <h1 class="page-header">SnapBid Locations Manager</h1>
						<p>Here you can manage the Locations situated on the home page.</p>

						<?php include 'inc/locations.php' ?>

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
