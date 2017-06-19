<h3></h3>
<div class="col-lg-12">

                            <div class="row">

<?php 

$query = 'SELECT * from snapbid_hotels WHERE author_id = '.$_SESSION['aduser'].'';
$result_select = mysql_query($query) or die(mysql_error());
$rows = array();
while($row = mysql_fetch_array($result_select))
    $rows[] = $row;
?>


									<?php foreach($rows as $row) : ?>
                                        <div class="col-xs-12 col-sm-4 ad-hotels">
											<div style="overflow:hidden;">
                                            <h3><a href="hoteledit.php?hotel_id=<?php echo $row['id']; ?>"><?php echo $row['hotelname']; ?></a></h3>
                                            <p style="white-space: nowrap;"><?php echo $row['address']; ?>, <?php echo $row['city']; ?>, <?php echo $row['postcode']; ?>, <?php echo $row['country']; ?></p>
                                            <p>

<?php
$star = $row['star_rating'];
for ($i = 0; $i < $star; $i++) {
?>
<i class="fa fa-star"></i>
<?php
}
?>

										 </p>
                                            <p><?php echo substr($row['desc'],0,100); ?>...</p>
                                            <p><strong>Total Rooms:</strong> <?php echo $row['rooms']; ?></p>
                                            <div style="height:100px; overflow:hidden;"><img src="<?php echo $row['main_image']; ?>" alt="preview" style="width:100%"></div>
                                            <p class="buttons">
												<a class="col-xs-4" style="text-align:center" onclick="return confirm('Are you sure you would like to remove this?');" href="delete-hotel.php?id=<?php echo $row['id']; ?>">Delete<br /><i class="fa fa-remove"></i></a>
												<a class="col-xs-4" style="text-align:center" href="hoteledit.php?hotel_id=<?php echo $row['id']; ?>">Edit<br /><i class="fa fa-pencil"></i></a>
												<a class="col-xs-4" style="text-align:center" href="rooms.php?hotel_id=<?php echo $row['id']; ?>">Rooms<br /><i class="fa fa-sign-out"></i></a>
											</p>
											<p style="margin-bottom:0px;height:0px;clear:both;">&nbsp;</p>
											</div>
                                        </div>
									<?php endforeach ?>
                                        
                                   </div>
                            </div>
                            <!-- /.table-responsive -->
</div>

