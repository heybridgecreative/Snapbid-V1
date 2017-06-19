<?php

session_start();
include_once 'dbconnect.php';

$query = 'SELECT * from snapbid_home_locations WHERE location_id = '.$_GET['location_id'].' ';
$result_select = mysql_query($query) or die(mysql_error());
$rows = array();
while($row = mysql_fetch_array($result_select))
    $rows[] = $row;

$locationid = $_POST['id'];
$name = $_POST['name'];
$featured = $_POST['featured'];
$ordering = $_POST['ordering'];
$image = $_POST['image'];


if(isset($_POST['update'])) {
	$sql = 'UPDATE snapbid_home_locations SET `location_name` = "'.$name.'", `location_featured` = "'.$featured.'", `location_picture` = "'.$image.'", `locations_ordering` = "'.$ordering.'" WHERE location_id = "'.$locationid.'"';
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
						<p>Here you can manage the location on the home page.</p>

						<?php include 'inc/edit-location.php' ?>

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
