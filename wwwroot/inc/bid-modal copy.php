<?php 

	if($room['room_id'] == "1") {
		$roomid = $row['room_id'];
	} else {
		$roomid = $_SESSION['room'];
	}
 ?>
<?php include 'inc/getroom.php'; ?>
<?php 
foreach($rrows as $roomw) : ?>
	<?php 	
		$room = $roomw['room_id'];
		$roomprice = $roomw['price'];
		$_SESSION['roomprice'] = $roomprice;
	?>
	
	<div class="modal fade" id="basicModal<?php echo $roomw['room_id'] ?>" tabindex="-1" role="dialog" aria-labelledby="basicModal<?php echo $roomw['room_id'] ?>" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                  &times;
            </button>
            <h4 class="modal-title" id="myModalLabel">Select the price you think it's worth!</h4>
                <p>Average Price from Price Comparison Websites: <strong>£
									
									£<?php echo $totalPrice; ?></strong></p>
         </div>
         <div class="modal-body">
                
            <form id="bid-form" method="POST" action="bid.php">
				<p class="title">£<span id="bid-sliderVal<?php echo $roomw['room_id']; ?>">0</span></p>
                	<input type="hidden" name="user_name" value="<?php echo $_SESSION['username']; ?>">
               	
					<input type="hidden" name="room" value="<?php echo $roomw['room_id']; ?>">
                	<input type="hidden" name="date_from" value="<?php echo $_SESSION['date_from']; ?>">
                	<input type="hidden" name="date_to" value="<?php echo $_SESSION['date_to']; ?>">
                	<input type="hidden" name="persons" value="<?php echo $_SESSION['persons']; ?>">
				<input id="bid-slider<?php echo $roomw['room_id']; ?>" class="no-mo" name="bid-price" type="text" value="" data-slider-min="0" data-slider-max="<?php $max = $roomprice * 2.7; echo round($max); ?> " data-slider-step="1" data-slider-value="0"/>
			<?php
				$max = $roomprice * 2.7;
				echo "<select name='bid-price2' class='mobile dropdown'>";
				echo "<option value=''>Please choose your bid amount</option>";
				$range = range(0,round($max));
				foreach ($range as $bid_amt) {
				  echo "<option value='$bid_amt'>£$bid_amt</option>";
				}
				echo "</select>";
			?>
                <input name="bid" type="submit" class="bid-btn" value="BID NOW">   
                <div class="book-btn terms"><input required type="checkbox" style="height:16px; width:30px;"><label>Please Accept the Terms and Conditions</label></div>
             </form>
          </div>
    </div>
  </div>
</div>

<?php endforeach; ?> 	



