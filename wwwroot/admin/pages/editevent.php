<?php

session_start();
include_once 'dbconnect.php';

$query = 'SELECT * from snapbid_special_events WHERE specialevent_id = '.$_GET['event_id'].' ORDER BY specialevent_date ASC ';
$result_select = mysql_query($query) or die(mysql_error());
$rows = array();
while($row = mysql_fetch_array($result_select))
    $rows[] = $row;

$eventid = $_POST['id'];
$name = $_POST['name'];
$location = $_POST['location'];
$date = $_POST['date'];
$desc = $_POST['description'];
$image = $_POST['image'];


if(isset($_POST['update'])) {
	$sql = 'UPDATE snapbid_special_events SET `specialevent_name` = "'.$name.'", `specialevent_date` = "'.$date.'", `specialevent_location` = "'.$location.'", `specialevent_desc` = "'.$desc.'", `specialevent_image` = "'.$image.'" WHERE specialevent_id = "'.$eventid.'"';
	$retval = mysql_query($sql);	
	header('Location: specialevents.php');
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
                        <h1 class="page-header">SnapBid Special Events Manager</h1>
						<p>Here you can manage the special events.</p>

						<?php include 'inc/edit-event.php' ?>

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
