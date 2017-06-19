<?php foreach($rows as $row) : ?>
<?php
	$_SESSION['bid_ref'] = $row['bid_id'];
	$_SESSION['room_price'] = $calculatedPrice;
	$bid = substr($row['bid_bid_price'], 0, -3);
	$saving1 = $calculatedPrice - $bid;
	$saving = number_format($saving1,2);
	
?>
	<div class="previousprice">
    		<p style="text-align:center">Lowest Price on Comparison Websites: <strong>&pound;<?php echo $calculatedPrice; ?></strong><br />Your Bid is: <strong>&pound;<?php echo $bidtotal; ?></strong></p>
	</div>



<!-- ACCEPTED Bid -->

<?php if($row['bid_status_id'] == "1"): ?>

	<canvas id='world'></canvas>
	<div id="card-drop" class="wrap">

		<div style="left:43% !important;" class="md-modal md-effect-5" id="modal-5">
			<div class="md-content " style="text-align:center; height:375px; width:232px; background-color:#ef4036; color:white; border:white 10px solid; -webkit-box-shadow: 0px 0px 0px 12px rgba(239,64,54,1); -moz-box-shadow: 0px 0px 0px 12px rgba(239,64,54,1); box-shadow: 0px 0px 0px 12px rgba(239,64,54,1);">
				<div style="padding:15px;">
					<h1 style="line-height:265px;color:white;
                    <?php if (($bidtotal > 99) && ($bidtotal < 999)) { echo "font-size:73px;"; } elseif ($bidtotal < 100) { echo "font-size:99px;"; } elseif (($bidtotal > 999) && ($bidtotal < 9999)) { echo "font-size:59px;"; } elseif ($bidtotal > 9999) { echo "font-size:50px;"; } else { echo "font-size:80px;"; } ?>
                    ">&pound;<?php echo $bidtotal; ?></h1>
				</div>
			</div>
		</div>
        
		<div style="left:58% !important;" class="md-modal md-effect-6" id="modal-6">
			<div class="md-content" style="text-align:center; height:375px; width:232px; background-color:#9f1f63 !important; color:white; border:white 10px solid; -webkit-box-shadow: 0px 0px 0px 12px #9f1f63; -moz-box-shadow: 0px 0px 0px 12px #9f1f63; box-shadow: 0px 0px 0px 12px #9f1f63;">
				<div style="padding:15px;">
					<h1 style="line-height:265px;color:white;
                    <?php if (($bidtotal > 99) && ($bidtotal < 999)) { echo "font-size:73px;"; } elseif ($bidtotal < 100) { echo "font-size:99px;"; } elseif (($bidtotal > 999) && ($bidtotal < 9999)) { echo "font-size:59px;"; } elseif ($bidtotal > 9999) { echo "font-size:50px;"; } else { echo "font-size:80px;"; } ?>
                    ">&pound;<?php echo $bidtotal; ?></h1>
				</div>
			</div>
		</div>
	</div>

	<div class="container bid-text">
		<div id="outcome">
			<h2 style='text-align:center;line-height:200%;font-size:80px;'>snap!</h2>
			<p style='text-align:center;font-size:28px;line-height:34px;'>Congratulations<br />You've won the bid!</p>
				<?php if($saving > 0) : ?>
					<p>You saved <strong>&pound; <?php echo $saving; ?></strong> on this booking! </p>
					<p style='width:100%;text-align:center;'><span class='hvr-pulse'>Why not spend your savings on a<br /><strong><u>room upgrade!</u></strong></span></p>
				<?php endif ?>
		</div> 

    <?php 
		$hashString = $bidtotal;
		$hashString .= $row['bid_id'];
		$hashString .= $_SESSION['user'];
		$hash = md5($hashString);
	?>
	
    	<div id="button">
			<a href="bid-booking.php?hash=<?php echo $hash; ?>"><p class="btn" style="padding:20px 40px; border-radius:5px; color:white; background-color:#ef4036; width:auto; text-align:center;display: inline;">Book Now</p></a>
			<p>&nbsp;</p>
		</div>
    </div>

<!-- END of ACCEPTED Bid -->


<!-- REJECTED Bid -->

<?php elseif($row['bid_status_id'] == "2"): ?>

	<canvas id='none'></canvas>
	<div id="card-drop" class="wrap">

		<div style="left:43% !important;" class="md-modal md-effect-5" id="modal-5">
			<div class="md-content " style="text-align:center; height:375px; width:232px; background-color:#ef4036; color:white; border:white 10px solid; -webkit-box-shadow: 0px 0px 0px 12px rgba(239,64,54,1); -moz-box-shadow: 0px 0px 0px 12px rgba(239,64,54,1); box-shadow: 0px 0px 0px 12px rgba(239,64,54,1);">
				<div style="padding:15px;">
					<h1 style="line-height:265px;color:white;
                    <?php if (($bidtotal > 99) && ($bidtotal < 999)) { echo "font-size:73px;"; } elseif ($bidtotal < 100) { echo "font-size:99px;"; } elseif (($bidtotal > 999) && ($bidtotal < 9999)) { echo "font-size:59px;"; } elseif ($bidtotal > 9999) { echo "font-size:50px;"; } else { echo "font-size:80px;"; } ?>
                    ">&pound;<?php echo $bidtotal; ?></h1>
				</div>
			</div>
		</div>
        
    
    
		<div style="left:58% !important;" class="md-modal md-effect-6" id="modal-6">
			<div class="md-content" style="text-align:center; height:375px; width:232px; background-color:#9f1f63 !important; color:white; border:white 10px solid; -webkit-box-shadow: 0px 0px 0px 12px #9f1f63; -moz-box-shadow: 0px 0px 0px 12px #9f1f63; box-shadow: 0px 0px 0px 12px #9f1f63;">
				<div style="padding:15px;">
                    <p style='line-height:96px;font-size:50px;'>sorry try again</p>
				</div>
			</div>
		</div>
	</div>


	<div class="container bid-text">
    		<div id="outcome">
			<h2 style='text-align:center;line-height:96px;'>bid again</h2><p>Sorry try again!</p>
		</div> 
    
    		<div id="button">
        		<a href="#" data-toggle='modal' data-target='#basicModal<?php echo $row['bid_room_id']; ?>'><p class="btn" style="padding:20px 40px; border-radius:5px; color:white; background-color:#ef4036; width:auto; text-align:center;display: inline;">Bid Again</p></a>
    		</div>
    </div>

    
<!-- END of REJECTED Bid -->

<?php elseif($row['bid_status_id'] == "3") : ?>
		
	<canvas id='none'></canvas>
	<div id="card-drop" class="wrap">
	<div style="left:43% !important;" class="md-modal md-effect-5 hvr-buzz" id="modal-5">
			<div class="md-content " style="text-align:center; height:375px; width:232px; background-color:#ef4036; color:white; border:white 10px solid; -webkit-box-shadow: 0px 0px 0px 12px rgba(239,64,54,1); -moz-box-shadow: 0px 0px 0px 12px rgba(239,64,54,1); box-shadow: 0px 0px 0px 12px rgba(239,64,54,1);">
				<div style="padding:15px;">
					<h1 style="line-height:265px;color:white;
                    <?php if (($bidtotal > 99) && ($bidtotal < 999)) { echo "font-size:73px;"; } elseif ($bidtotal < 100) { echo "font-size:99px;"; } elseif (($bidtotal > 999) && ($bidtotal < 9999)) { echo "font-size:59px;"; } elseif ($bidtotal > 9999) { echo "font-size:50px;"; } else { echo "font-size:80px;"; } ?>
                    ">&pound;<?php echo $bidtotal; ?></h1>
				</div>
			</div>
		</div>
        
    
    
		<div style="left:58% !important;" class="md-modal md-effect-6" id="modal-6">
			<div class="md-content" style="text-align:center; height:375px; width:232px; background-color:#9f1f63 !important; color:white; border:white 10px solid; -webkit-box-shadow: 0px 0px 0px 12px #9f1f63; -moz-box-shadow: 0px 0px 0px 12px #9f1f63; box-shadow: 0px 0px 0px 12px #9f1f63;">
				<div style="padding:15px;">
                    <p style='line-height:96px;font-size:50px;'>sorry try again</p>
				</div>
			</div>
		</div>
	</div>

	<div class="container bid-text">
    		<div id="outcome">
			<h2 style='text-align:center;line-height:96px;'>so close</h2><p>You're so close, try again!</p>
		</div> 
    
    		<div id="button">
        		<a href="#" data-toggle='modal' data-target='#basicModal<?php echo $row['bid_room_id']; ?>'><p class="btn" style="padding:20px 40px; border-radius:5px; color:white; background-color:#ef4036; width:auto; text-align:center;display: inline;">Bid Again</p></a>
    		</div>
    </div>




<?php endif; ?>



	</div>

<?php include 'inc/bid-again-modal.php' ?>
<script>
    $('#bid-slider<?php echo $row['bid_room_id']; ?>').on("slide", function(slideEvt) {
	   $("#bid-sliderVal<?php echo $row['bid_room_id']; ?>").text(slideEvt.value);
	   $("#bid-sliderVal<?php echo $row['bid_room_id']; ?>").slider('setValue', value)
    });
    $('#bid-slider<?php echo $row['bid_room_id']; ?>').slider();
</script>

<?php endforeach; ?>
<script src="js/bootstrap-slider.js"></script>

<div class="md-overlay"></div><!-- the overlay element -->

<script src="js/modalEffects.js"></script>
<script src="js/confetti.js"></script>
<!-- classie.js by @desandro: https://github.com/desandro/classie -->
<script src="js/classie.js"></script>


<!-- for the blur effect -->
<!-- by @derSchepp https://github.com/Schepp/CSS-Filters-Polyfill -->
<script>
	// this is important for IEs
	var polyfilter_scriptpath = '/js/';
</script>
<script src="js/cssParser.js"></script>
<script src="js/css-filters-polyfill.js"></script>
