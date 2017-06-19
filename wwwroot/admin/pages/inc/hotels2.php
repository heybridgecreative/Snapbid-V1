<h3>Current Hotels in Database</h3>
<div class="col-lg-12">

                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Name</th>
                                            <th>Location</th>
                                            <th>Star Rating</th>
                                            <th>Description</th>
                                            <th># of Rooms</th>	
                                            <th>Main Image</th>	
                                            <th>Delete</th>	
                                            <th>Edit</th>	
                                            <th>Room Manage</th>	
										 
                                        </tr>
                                    </thead>
                                    <tbody>

<?php 

$query = 'SELECT * from snapbid_hotels WHERE author_id = '.$_SESSION['user'].'';
$result_select = mysql_query($query) or die(mysql_error());
$rows = array();
while($row = mysql_fetch_array($result_select))
    $rows[] = $row;
?>


									<?php foreach($rows as $row) : ?>
                                        <tr>
                                            <td><?php echo $row['id']; ?></td>
                                            <td><?php echo $row['hotelname']; ?></td>
                                            <td><?php echo $row['address']; ?>, <?php echo $row['city']; ?>, <?php echo $row['postcode']; ?>, <?php echo $row['country']; ?></td>
                                            <td>

<?php
$star = $row['star_rating'];
for ($i = 0; $i < $star; $i++) {
?>
<i class="fa fa-star"></i>
<?php
}
?>

										 </td>
                                            <td><?php echo substr($row['desc'],0,100); ?>...</td>
                                            <td><?php echo $row['rooms']; ?></td>
                                            <td><img src="<?php echo $row['main_image']; ?>" alt="preview" style="width:60px"></td>
                                            <td style="text-align:center; vertical-align:middle;"><a onclick="return confirm('Are you sure you would like to remove this?');" href="delete-hotel.php?id=<?php echo $row['id']; ?>"><i class="fa fa-remove"></i></a></td>
                                            <td style="text-align:center; vertical-align:middle;"><a href="hoteledit.php?hotel_id=<?php echo $row['id']; ?>"><i class="fa fa-pencil"></i></a></td>
                                            <td style="text-align:center; vertical-align:middle;"><a href="rooms.php?hotel_id=<?php echo $row['id']; ?>"><i class="fa fa-sign-out"></i></a></td>
                                        </tr>
									<?php endforeach ?>
                                        
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
</div>

