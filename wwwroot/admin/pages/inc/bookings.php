<?php 

$query = "SELECT * FROM snapbid_bookings JOIN snapbid_users ON snapbid_users.username = snapbid_bookings.book_user_name JOIN snapbid_rooms ON snapbid_bookings.book_room_id = snapbid_rooms.room_id JOIN snapbid_hotels ON snapbid_rooms.hotel_id = snapbid_hotels.id WHERE author_id = ".$_SESSION['aduser']." ";

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
                                            <th>Full Name</th>
                                            <th>Date From</th>
                                            <th>Date To</th>
                                            <th>Occupants</th>	
                                            <th>Price Paid</th>	
                                            <th>Date Booked</th>	
                                            <th>Details</th>	
                                            <th>Edit</th>	
										 
                                        </tr>
                                    </thead>
                                    <tbody>




									<?php foreach($rows as $row) : ?>
                                        <tr>
                                            <td><?php echo $row['hotelname']; ?></td>
                                            <td><?php echo $row['name']; ?></td>
                                            <td><?php echo $row['first_name']; ?> <?php echo $row['last_name']; ?></td>
                                            <td><?php echo $row['book_date_from']; ?></td>
                                            <td><?php echo $row['book_date_to']; ?></td>
                                            <td><?php echo $row['book_persons']; ?></td>
                                            <td><?php echo $row['price']; ?></td>
                                            <td><?php echo $row['date_book']; ?></td>
                                            <td style="text-align:center; vertical-align:middle;"><a href="details.php?id=<?php echo $row['booking_id']; ?>&type=booking"><i class="fa fa-arrow-circle-right"></i></a></td>
                                            <td style="text-align:center; vertical-align:middle;"><a href="edit.php?id=<?php echo $row['booking_id']; ?>"><i class="fa fa-pencil"></i></a></td>
                                        </tr>
									<?php endforeach ?>
                                        
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
</div>

