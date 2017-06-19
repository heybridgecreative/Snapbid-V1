<?php
session_start();
include_once 'dbconnect.php';

	$hotel_id = $_POST['name'];
	$name = $_POST['name'];
	$features = $_POST['features'];
	$room_info = $_POST['room_info'];
	$price = $_POST['price'];
	$image = $_POST['image'];



?>

<!DOCTYPE html>
<html lang="en">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<?php include 'inc/head.php' ?>

<body>

    <div id="wrapper">

	<?php include 'inc/nav.php' ?>

        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">SnapBid Availability Manager</h1>
						<p>Here you can add custom room prices to a room for specific dates</p>

						<?php include 'inc/availabilities.php' ?>
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
