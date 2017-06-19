<?php 

if ($_GET['hotel_id']) {
	$where = " WHERE hotel_id = ";
	$where .= $_GET['hotel_id'];
}



if (!$_GET['hotel_id']) {
	$where = " WHERE author_id = ";
	$where .= $_SESSION['aduser'];
}

$query = 'SELECT * from snapbid_home_locations ORDER BY locations_ordering ASC';
$result_select = mysql_query($query) or die(mysql_error());
$rows = array();
while($row = mysql_fetch_array($result_select))
    $rows[] = $row;
?>

<h3></h3>
<div class="col-lg-12">          

                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Order</th>
                                            <th>Location</th>
                                            <th>Image</th>
                                            <th>Featured</th>
										  	<th>Edit</th>
                                        </tr>
                                    </thead>
                                    <tbody>




									<?php foreach($rows as $row) : ?>
                                        <tr>
                                            <td style="vertical-align:middle;"><?php echo $row['locations_ordering']; ?></td>
                                            <td style="vertical-align:middle;"><?php echo $row['location_name']; ?></td>
                                            <td style="vertical-align:middle;"><img style="height:120px;" src="<?php echo $row['location_picture']; ?>"></td>
                                            <td style="text-align:center;vertical-align:middle;">
												<?php if($row['location_featured'] == 1) { 
														echo "<i class='fa fa-check'></i>" ;
													} else { 
														echo "<i class='fa fa-times'></i>" ;
													} 
												?>
											</td>
                                            <td style="text-align:center; vertical-align:middle;"><a href="editlocation.php?location_id=<?php echo $row['location_id']; ?>"><i class="fa fa-pencil"></i></a></td>
                                        </tr>
									<?php endforeach ?>
                                        
                                    </tbody>
                                </table>
                            </div>
                          <!-- /.table-responsive -->
</div>

