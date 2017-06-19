<?php
session_start();
include_once 'dbconnect.php';

	$name = $_POST['name'];
	$ordering = $_POST['ordering'];
	$featured = $_POST['featured'];
	$image = $_POST['image'];

	if(isset($_POST['add'])) {

		$sql = 'INSERT INTO snapbid_home_locations (`location_name`, `location_featured`, `location_picture`, `locations_ordering`) VALUES ("'.$name.'", "'.$featured.'", "'.$image.'", "'.$ordering.'")';
		$retval = mysql_query($sql);	
			header('Location: locations.php');


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
                        <h1 class="page-header">SnapBid Location Manager</h1>

						<?php include 'inc/add-location.php' ?>
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
