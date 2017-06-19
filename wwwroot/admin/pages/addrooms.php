<?php
session_start();
include_once 'dbconnect.php';

	$hotel_id = $_POST['name'];
	$name = $_POST['name'];
	$features = $_POST['features'];
	$room_info = $_POST['room_info'];
	$price = $_POST['price'];
	$image = $_POST['image'];

	if(isset($_POST['add'])) {
		$sql = 'INSERT INTO snapbid_rooms (`hotel_id`, `name`, `occupancy`, `features`, `room_info`, `price`, `image`) VALUES ("'.$hotel_id.'", "'.$name.'", "'.$occupancy.'", "'.$features.'", "'.$room_info.'", "'.$price.'", "'.$image.'")';
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
                        <h1 class="page-header">SnapBid Room Manager</h1>
						<p>Here you can add rooms to hotels on the website</p>

						<?php include 'inc/add-room.php' ?>
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
