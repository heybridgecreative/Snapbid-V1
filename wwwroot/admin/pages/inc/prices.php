<?php 


$room_id = $_GET['room_id'];
$price = $_POST['price'];
$date_from = $_POST['date_from'];

$date_to = $_POST['date_to'];
$priceid = $_POST['id'];
$recur = implode(',', $_POST['recur']);

$date_to_two = str_replace("/", "-", $date_to);
$time_original = strtotime($date_to_two);
$time_add      = $time_original + (3600*24); 
$new_date_to   = date("d-m-Y", $time_add);
$new_date_to_two = str_replace("-", "/", $new_date_to);



if(($_POST['method'] == "UPDATE") && ($_POST['delete'] == "1"))  {
	$sql = 'DELETE FROM snapbid_room_prices WHERE room_price_id = "'.$priceid.'"';
	$retval = mysql_query($sql);
	$message = "Successfully Deleted Record - ";
	$message .= $date_from;
	$message .= " - ";
	$message .= $date_to;
	$message .= " at ";
	$message .= $price;
} else if($_POST['method'] == "INSERT") {
	$sql = 'INSERT INTO snapbid_room_prices (`room_price`, `price_date_start`, `price_date_end`, `room_price_room_id`, `room_price_recurring`) VALUES ("'.$price.'", STR_TO_DATE("'.$date_from.'", "%d/%m/%Y"), STR_TO_DATE("'.$new_date_to_two.'", "%d/%m/%Y"), "'.$room_id.'", "'.$recur.'")';
	$retval = mysql_query($sql);
	$message = "Successfully Inserted Record - ";
	$message .= $date_from;
	$message .= " - ";
	$message .= $date_to;
	$message .= " at ";
	$message .= $price;
} else if(($_POST['method'] == "UPDATE") && (!isset($_POST['delete']))) {
	$sql = 'UPDATE snapbid_room_prices SET `room_price` = "'.$price.'", `price_date_start` = STR_TO_DATE("'.$date_from.'", "%d/%m/%Y"), `price_date_end` = STR_TO_DATE("'.$new_date_to_two.'", "%d/%m/%Y"), `room_price_recurring` = "'.$recur.'" WHERE room_price_id = "'.$priceid.'"';
	$retval = mysql_query($sql);
	$message = "Successfully Updated Record - ";
	$message .= $date_from;
	$message .= " - ";
	$message .= $date_to;
	$message .= " at ";
	$message .= $price;
} else {
	$message = "";
}

	$formatted_date = date('Y/m/d');

if ($_GET['room_id']) {
	$where = " WHERE room_price_room_id = ";
	$where .= $_GET['room_id'];

	$checkWhere = " WHERE room_price_room_id = ";
	$checkWhere .= $_GET['room_id'];
	$checkWhere .= " AND '";
	$checkWhere .= $formatted_date;
	$checkWhere .= "' >= reserve_date_from AND '";
	$checkWhere .= $formatted_date;
	$checkWhere .= "' <= reserve_date_to";
}

$query = 'SELECT * FROM snapbid_room_prices LEFT JOIN snapbid_rooms ON snapbid_room_prices.room_price_room_id = snapbid_rooms.room_id JOIN snapbid_hotels ON snapbid_rooms.hotel_id = snapbid_hotels.id WHERE room_price_room_id = '.$room_id.'';


$resultSelect = mysql_query($query) or die(mysql_error());
$rows = array();
	while($row = mysql_fetch_array($resultSelect))
$rows[] = $row;

?>

<?php $i = 0; foreach($rows as $row) : ?>	
<p>&nbsp;</p>
<h4><?php echo $row['hotelname']; ?></h4>
<h2><?php echo $row['name']; ?></h2>
<?php $i++; ?>
<?php if($i == 1) { break; } ?>
<?php endforeach; ?>

<?php if($message !== "") : ?>
	<p class="success">
		<?php echo $message; ?>
	</p>
<?php endif; ?>




<div class="col-lg-9">
                                        <p>&nbsp;</p>
                                        	<?php include('inc/calendar/demos/booknowprice.php'); ?>
                                        <p>&nbsp;</p>
</div>
<div class="col-lg-3">
									<h3>Add Room Price</h3><p>Use the form below to add a room price</p>
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
                                            <label>Room Price</label>
                                            <input value="" id="price" required name="price" class="form-control">
                                        </div>

									  <div class="form-group">
                                            <label>Weekly Recurrance</label>
											<p class="help-block">Select the day you want the room price to recur on, if any</p>

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



