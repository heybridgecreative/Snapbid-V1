<?php 

if ($_GET['hotel_id']) {
	$where = " WHERE hotel_id = ";
	$where .= $_GET['hotel_id'];
}



if (!$_GET['hotel_id']) {
	$where = " WHERE author_id = ";
	$where .= $_SESSION['aduser'];
}

$query = 'SELECT * from snapbid_rooms LEFT JOIN snapbid_reserves ON snapbid_rooms.room_id = snapbid_reserves.reserve_room_id JOIN snapbid_hotels ON snapbid_rooms.hotel_id = snapbid_hotels.id JOIN snapbid_specials ON snapbid_rooms.room_id = snapbid_specials.specials_room_id '. $where .' GROUP BY snapbid_rooms.room_id ORDER BY snapbid_hotels.hotelname ASC';
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
                                            <th>Room Name</th>
                                            <th>Special Offer Name</th>
                                            <th>Date from</th>
                                            <th>Date to</th>	
                                            <th>Discount</th>
                                            <th>Extra</th>	
                                            <th>On</th>
										  	<th>Manage</th>
                                        </tr>
                                    </thead>
                                    <tbody>




									<?php foreach($rows as $row) : ?>
<?php if($row['specials_on'] == 1) { 
	$spon = "Bid"; 
} elseif($row['specials_on'] == 2) { 
	$spon = "Book";
} else { 
	$spon = "Both";
};  ?>
                                        <tr>
                                            <td><?php echo $row['hotelname']; ?></td>
                                            <td><?php echo $row['name']; ?></td>
                                            <td><?php echo $row['special_name']; ?></td>
                                            <td><?php echo $row['specials_date_from']; ?></td>
                                            <td><?php echo $row['specials_date_to']; ?></td>
                                            <td><?php echo $row['specials_discount']; ?></td>
                                            <td><?php echo $row['specials_extra']; ?></td>
                                            <td><?php echo $spon; ?></td>
                                            <td style="text-align:center; vertical-align:middle;"><a href="prices.php?room_id=<?php echo $row['room_id']; ?>"><i class="fa fa-sign-out"></i></a></td>
                                        </tr>
									<?php endforeach ?>
                                        
                                    </tbody>
                                </table>
                            </div>
                          <!-- /.table-responsive -->
</div>

