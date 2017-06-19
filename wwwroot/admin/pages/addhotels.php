<?php
session_start();
include_once 'dbconnect.php';

	$name = $_POST['name'];
	$address = $_POST['address'];
	$city = $_POST['city'];
	$postcode = $_POST['postcode'];
	$country = $_POST['country'];
	$desc = $_POST['desc'];
	$rooms = $_POST['rooms'];
	$image = $_POST['image'];
	$rating = $_POST['rating'];
	$images = implode(', ', $_POST['images']);
	$user_id = $_SESSION['aduser'];


	if(isset($_POST['add'])) {
		$sql = 'INSERT INTO snapbid_hotels (`hotelname`, `rooms`, `desc`, `address`, `city`, `postcode`, `country`, `main_image`, `images`, `star_rating`, `author_id`) VALUES ("'.$name.'", "'.$rooms.'", "'.$desc.'", "'.$address.'", "'.$city.'", "'.$postcode.'", "'.$country.'", "'.$image.'",  "'.$images.'", "'.$rating.'", "'.$user_id.'")';
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
                        <h1 class="page-header">SnapBid Hotel Manager</h1>
						<p>Here you can add hotels to the website</p>	

						<?php include 'inc/add-hotel.php' ?>
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
