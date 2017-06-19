
<?php include 'inc/getroom.php'; ?>

<?php $totalPrices .= $totalPrice . "-" . $room['room_id'] . ", "; ?>

<?php 
	$totalPrices = substr($totalPrices, 0, -2); 
	$arr=explode(",",$totalPrices);
	$_SESSION['totalPrices'] = $totalPrices;
?>
	<?php 

	if($room['room_id'] == "1") {
		$roomid = $row['room_id'];
	} else {
		$roomid = $_SESSION['room'];
	}
	
	$multiplierDecimal = rand(4,9);
	$multiplier = "1.";
	$multiplier .= $multiplierDecimal;
	$max = $totalPrice * $multiplier;
	

 ?>
	<div class="modal fade" id="basicModal<?php echo $room['room_id'] ?>" tabindex="-1" role="dialog" aria-labelledby="basicModal<?php echo $room['room_id'] ?>" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                  &times;
            </button>
            <h4 class="modal-title" id="myModalLabel">Select the price you think it's worth!</h4>
                <p>Lowest Price from Comparison Websites: <strong>£<?php echo $totalPrice; ?></strong></p>
         </div>
         <div class="modal-body">
                
            <form id="bid-form" method="POST" action="bid.php">
				<p class="title">£<span id="bid-sliderVal<?php echo $room['room_id']; ?>">0</span></p>
                	<input type="hidden" name="user_name" value="<?php echo $_SESSION['username']; ?>">
					<input type="hidden" name="room" value="<?php echo $room['room_id']; ?>">
                	<input type="hidden" name="date_from" value="<?php echo $_SESSION['date_from']; ?>">
                	<input type="hidden" name="date_to" value="<?php echo $_SESSION['date_to']; ?>">
                	<input type="hidden" name="persons" value="<?php echo $_SESSION['persons']; ?>">
					<input id="bid-slider<?php echo $room['room_id']; ?>" class="no-mo" name="bid-price" type="text" value="" data-slider-min="0" data-slider-max="<?php  echo round($max); ?> " data-slider-step="1" data-slider-value="0"/>
					<input style='border:3px solid white;' placeholder='Enter your bid' type='tel' name='bid-price2' class='mobile dropdown'>
                <input name="bid" type="submit" class="bid-btn" value="BID NOW">   
             </form>
          </div>
    </div>
  </div>
</div>



