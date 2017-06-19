<?php 

if ($_GET['hotel_id']) {
	$where = " WHERE hotel_id = ";
	$where .= $_GET['hotel_id'];
}



if (!$_GET['hotel_id']) {
	$where = " WHERE author_id = ";
	$where .= $_SESSION['aduser'];
}

$query = 'SELECT * from snapbid_special_events ORDER BY specialevent_date ASC';
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
                                            <th>Special Event</th>
                                            <th>Date</th>
                                            <th>Location</th>
                                            <th>Description</th>
                                            <th>Image</th>
                                            <th>Featured</th>
										  	<th>Edit</th>
                                        </tr>
                                    </thead>
                                    <tbody>




									<?php foreach($rows as $row) : ?>
                                        <tr>
                                            <td style="vertical-align:middle;"><?php echo $row['specialevent_name']; ?></td>
                                            <td style="vertical-align:middle;"><?php echo $row['specialevent_date']; ?></td>
                                            <td style="vertical-align:middle;"><?php echo $row['specialevent_location']; ?></td>
                                            <td style="vertical-align:middle;"><?php echo $row['specialevent_desc']; ?></td>
                                            <td style="vertical-align:middle;"><img style="height:120px;" src="<?php echo $row['specialevent_image']; ?>"></td>
                                            <td style="text-align:center;vertical-align:middle;">
												<?php if($row['featured'] == 1) { 
														echo "<i class='fa fa-check'></i>" ;
													} else { 
														echo "<i class='fa fa-times'></i>" ;
													} 
												?>
											</td>
                                            <td style="text-align:center; vertical-align:middle;"><a href="editevent.php?event_id=<?php echo $row['specialevent_id']; ?>"><i class="fa fa-pencil"></i></a></td>
                                        </tr>
									<?php endforeach ?>
                                        
                                    </tbody>
                                </table>
                            </div>
                          <!-- /.table-responsive -->
</div>

