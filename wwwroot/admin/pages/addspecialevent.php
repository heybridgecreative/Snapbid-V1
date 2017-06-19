<?php
session_start();
include_once 'dbconnect.php';

	$name = $_POST['name'];
	$location = $_POST['location'];
	$date = $_POST['date'];
	$desc = $_POST['description'];
	$image = $_POST['image'];

	if(isset($_POST['add'])) {

		$sql = 'INSERT INTO snapbid_special_events (`specialevent_name`, `specialevent_date`, `specialevent_desc`, `specialevent_location`, `specialevent_image`) VALUES ("'.$name.'", "'.$date.'", "'.$desc.'", "'.$location.'", "'.$image.'")';
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
                        <h1 class="page-header">SnapBid Special Event Manager</h1>

						<?php include 'inc/add-event.php' ?>
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
