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
	if ($_POST['rating'] == "0") {
		$rating = $row['star_rating'];
	} else {
		$rating = $_POST['rating'];
	}
	$images = implode(', ', $_POST['images']);



	if(isset($_POST['update'])) {

		$sql = 'UPDATE snapbid_hotels 
SET `hotelname` = "'.$name.'", `rooms` = "'.$rooms.'", `desc` = "'.$desc.'", `address` = "'.$address.'", `city` = "'.$city.'", `postcode` = "'.$postcode.'", `country` = "'.$country.'", `main_image` = "'.$image.'", `images` = "'.$images.'", `star_rating` = "'.$rating.'"
WHERE id = "'.$_GET['hotel_id'].'"';
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

						<?php include 'inc/edit-hotel.php' ?>
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
