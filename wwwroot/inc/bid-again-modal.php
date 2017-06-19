

<?php 
	
	$multiplierDecimal = rand(4,9);
	$multiplier = "1.";
	$multiplier .= $multiplierDecimal;
	$max = $totalPrice * $multiplier;
	

 ?>

	
	<div class="modal fade" id="basicModal<?php echo $_SESSION['room']; ?>" tabindex="-1" role="dialog" aria-labelledby="basicModal<?php echo $_SESSION['room']; ?>" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                  &times;
            </button>
            <h4 class="modal-title" id="myModalLabel">Select the price you think it's worth!</h4>
                <p>Lowest Price from Comparison Websites: <strong>£<?php echo $calculatedPrice; ?></strong></p>
         </div>
         <div class="modal-body">
                
            <form id="bid-form" method="POST" action="bid.php">
				<p class="title">£<span id="bid-sliderVal<?php echo $_SESSION['room']; ?>">0</span></p>
                	<input type="hidden" name="user_name" value="<?php echo $_SESSION['username']; ?>">
					<input type="hidden" name="room" value="<?php echo $_SESSION['room']; ?>">
                	<input type="hidden" name="date_from" value="<?php echo $_SESSION['date_from']; ?>">
                	<input type="hidden" name="date_to" value="<?php echo $_SESSION['date_to']; ?>">
                	<input type="hidden" name="persons" value="<?php echo $_SESSION['persons']; ?>">
					<input id="bid-slider<?php echo $_SESSION['room']; ?>" class="no-mo" name="bid-price" type="text" value="" data-slider-min="0" data-slider-max="<?php  echo round($max); ?> " data-slider-step="1" data-slider-value="0"/>
					<input style='border:3px solid white;' placeholder='Enter your bid' type='tel' name='bid-price2' class='mobile dropdown'>
					<input name="bid" type="submit" class="bid-btn" value="BID AGAIN">
             </form>
          </div>
    </div>
  </div>
</div>



