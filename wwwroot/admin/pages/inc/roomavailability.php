<?php 

if ($_GET['hotel_id']) {
	$where = " WHERE hotel_id = ";
	$where .= $_GET['hotel_id'];
}



if (!$_GET['hotel_id']) {
	$where = " WHERE author_id = ";
	$where .= $_SESSION['aduser'];
}

$query = 'SELECT * from snapbid_rooms LEFT JOIN snapbid_reserves ON snapbid_rooms.room_id = snapbid_reserves.reserve_room_id JOIN snapbid_hotels ON snapbid_rooms.hotel_id = snapbid_hotels.id '. $where .' GROUP BY snapbid_rooms.room_id ORDER BY snapbid_hotels.hotelname ASC';
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
                                            <th>Hotel Name</th>
                                            <th>Name</th>
                                            <th>Room Info</th>
										  <th>Availability</th>
                                        </tr>
                                    </thead>
                                    <tbody>




									<?php foreach($rows as $row) : ?>
                                        <tr>
                                            <td><?php echo $row['hotelname']; ?></td>
                                            <td><?php echo $row['name']; ?></td>
                                            <td><?php echo substr($row['room_info'],0,100); ?>...</td>
                                            <td style="text-align:center; vertical-align:middle;"><a class="roomAvailability" href="addavailability.php?room_id=<?php echo $row['room_id']; ?>"><i class="fa fa-sign-out"></i></a></td>
                                        </tr>
									<?php endforeach ?>
                                        
                                    </tbody>
                                </table>
                            </div>
                          <!-- /.table-responsive -->
</div>

