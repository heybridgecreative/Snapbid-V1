<?php 


$room_id = $_GET['room_id'];
$reserve = $_POST['reserve'];
$date_from = $_POST['date_from'];

$date_to = $_POST['date_to'];
$reserveid = $_POST['id'];
$recur = implode(',', $_POST['recur']);

$date_to_two = str_replace("/", "-", $date_to);
$time_original = strtotime($date_to_two);
$time_add      = $time_original + (3600*24); 
$new_date_to   = date("d-m-Y", $time_add);
$new_date_to_two = str_replace("-", "/", $new_date_to);




if(($_POST['method'] == "UPDATE") && ($_POST['delete'] == "1"))  {
	$sql = 'DELETE FROM snapbid_reserves WHERE reserve_id = "'.$reserveid.'"';
	$retval = mysql_query($sql);
	$message = "Successfully Deleted Record - ";
	$message .= $date_from;
	$message .= " - ";
	$message .= $date_to;
	$message .= " at ";
	$message .= $reserve;
	$message .= "%";
} else if($_POST['method'] == "INSERT") {
	$sql = 'INSERT INTO snapbid_reserves (`reserve_room_id`, `reserve_price`, `reserve_date_from`, `reserve_date_to`, `reserve_recurring`) VALUES ("'.$room_id.'", "'.$reserve.'", STR_TO_DATE("'.$date_from.'", "%d/%m/%Y"), STR_TO_DATE("'.$new_date_to_two.'", "%d/%m/%Y"), "'.$recur.'")';
	$retval = mysql_query($sql);
	$message = "Successfully Inserted Record - ";
	$message .= $date_from;
	$message .= " - ";
	$message .= $date_to;
	$message .= " at ";
	$message .= $reserve;
	$message .= "%";
} else if(($_POST['method'] == "UPDATE") && (!isset($_POST['delete']))) {
	$sql = 'UPDATE snapbid_reserves SET `reserve_room_id` = "'.$room_id.'", `reserve_price` = "'.$reserve.'", `reserve_date_from` = STR_TO_DATE("'.$date_from.'", "%d/%m/%Y"), `reserve_date_to` = STR_TO_DATE("'.$new_date_to_two.'", "%d/%m/%Y"), `reserve_recurring` = "'.$recur.'" WHERE reserve_id = "'.$reserveid.'"';
	$retval = mysql_query($sql);
	$message = "Successfully Updated Record - ";
	$message .= $date_from;
	$message .= " - ";
	$message .= $date_to;
	$message .= " at ";
	$message .= $reserve;
	$message .= "%";
} else {
	$message = "";
}

	$formatted_date = date('Y/m/d');

if ($_GET['room_id']) {
	$where = " WHERE reserve_room_id = ";
	$where .= $_GET['room_id'];

	$checkWhere = " WHERE reserve_room_id = ";
	$checkWhere .= $_GET['room_id'];
	$checkWhere .= " AND '";
	$checkWhere .= $formatted_date;
	$checkWhere .= "' >= reserve_date_from AND '";
	$checkWhere .= $formatted_date;
	$checkWhere .= "' <= reserve_date_to";
}

$query = 'SELECT * from snapbid_reserves LEFT JOIN snapbid_rooms ON snapbid_reserves.reserve_room_id = snapbid_rooms.room_id JOIN snapbid_hotels ON snapbid_rooms.hotel_id = snapbid_hotels.id ' .$where. ' GROUP BY snapbid_reserves.reserve_room_id';

$resultSelect = mysql_query($query) or die(mysql_error());
$rows = array();
	while($row = mysql_fetch_array($resultSelect))
$rows[] = $row;


$reserveCheck = 'SELECT * from snapbid_reserves LEFT JOIN snapbid_rooms ON snapbid_reserves.reserve_room_id = snapbid_rooms.room_id JOIN snapbid_hotels ON snapbid_rooms.hotel_id = snapbid_hotels.id ' .$checkWhere. ' ORDER BY reserve_id DESC LIMIT 1 ';

$checkSelect = mysql_query($reserveCheck) or die(mysql_error());
$checks = array();
	while($check = mysql_fetch_array($checkSelect))
$checks[] = $check;


?>



<?php if($message !== "") : ?>
	<p class="success">
		<?php echo $message; ?>
	</p>
<?php endif; ?>


<?php foreach($checks as $check) : ?>
<?php
$reserve = $check['reserve_price'] / 100;
$bid_minus = $check['price'] * $reserve;
$bid_price = $check['price'] - $bid_minus;
?>
<h3>View the reserves that have been set for</h3>
<h4><em>"<?php echo $check['hotelname']; ?>'s <?php echo $check['name']; ?>"</em></h4>
<p>Currently the book now price is set at: <?php echo $check['price']; ?></p>
<p>Currently the reserve is set at: <?php echo $bid_price; ?></p>
<p>Currently the reserve percentage is: <?php echo  $check['reserve_price']; ?>%</p>

<?php endforeach ?>


<div class="col-lg-9">
                                        <p>&nbsp;</p>
                                        	<?php include('inc/calendar/demos/default.php'); ?>
                                        <p>&nbsp;</p>
</div>
<div class="col-lg-3">
									<h3>Add reserve</h3><p>Use the form below to add a reserve</p>
								<form action="<?php echo htmlentities($_SERVER['PHP_SELF']);?>?room_id=<?php echo $room_id; ?>" method="post">
										<div class="form-group">
                                            <input type="hidden" value="" id="method" name="method" class="form-control">
											<input type="hidden" value="" id="id" name="id" class="form-control">
                                        </div>	
                                        <div class="form-group">
										<div style="width:48%; margin-right:2%; float:left;">
                                            <label>Date From</label>
                                            <input id="start_date" value="" required name="date_from" class="form-control">
                                        </div>
										<div style="width:48%; margin-left:2%; float:left;">
                                            <label>Date To</label>
                                            <input id="end_date" value="" required name="date_to" class="form-control">
										</div><div style="clear:both;"></div>
                                        </div>
                                        <div class="form-group">
                                            <label>Reserve (Percentage of original)</label>
                                            <input value="" id="reserve" required name="reserve" class="form-control">
                                            <p class="help-block">Example: 20 = 20% of base price</p>
                                        </div>

									  <div class="form-group">
                                            <label>Weekly Recurrance</label>
											<p class="help-block">Select the day you want the bidding reserve to recur on, if any</p>

                                            <div class="checkbox">
                                                <label>
                                                    <input name="recur[]" type="checkbox" value="1">Monday
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label>
                                                    <input name="recur[]" type="checkbox" value="2">Tuesday
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label>
                                                    <input name="recur[]" type="checkbox" value="3">Wednesday
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label>
                                                    <input name="recur[]" type="checkbox" value="4">Thursday
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label>
                                                    <input name="recur[]" type="checkbox" value="5">Friday
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label>
                                                    <input name="recur[]" type="checkbox" value="6">Saturday
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label>
                                                    <input name="recur[]" type="checkbox" value="0">Sunday
                                                </label>
                                            </div>
                                        </div>

										<div class="form-group">
											<p class="help-block">Check box below if you want to remove this record</p>
                                            <div class="checkbox">
                                                <label>
                                                    <input name="delete" type="checkbox" value="1">Delete Record?
                                                </label>
                                            </div>
                                        </div>
                                        
                                        <div class="form-group">
                                        	<button type="submit" id="add" name="add" class="btn btn-default">Submit</button>
                                        	<button type="reset" class="btn btn-default">Reset</button>
									  </div>
					</form>
</div>



