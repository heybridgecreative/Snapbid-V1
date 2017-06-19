<?php include 'inc/getroom.php' ?>

<?php if(!isset($_SESSION['user'])) : ?>
<div class="container loginToBidReminder">
<div class="row">
<div class="col-sm-12">
<div class="bid-btn bounce animated">
	You don't seem to be logged in. Login now to enjoy the fun and exciting new way of booking a room with SnapBid!
</div>
</div>
</div>
</div>
<?php endif; ?>

<div class="container room-info <?php if(isset($_SESSION['date_from'])) : ?>drop<? endif; ?>">
	<div class="room-btn">
	
		
	
		Show Rooms <?php if(isset($_SESSION['date_from'])) : ?><i class="fa fa-chevron-down"></i><? endif; ?>
	</div>
<div class="row" style="padding-left:15px;">            
	<h3>Book a room at the <?php echo $row['hotelname']; ?></h3>
	<p>&nbsp;</p>
</div>



<?php foreach($rrows as $room) : ?> 
	
	<?php 
	$hashString = $_SESSION['user'];
	$hashString .= $_SESSION['date_from'];
	$hashString .= $_SESSION['date_to'];
	$hashString .= $room['room_id'];
	$hash = md5($hashString);
?>
<script>
	jQuery(function($) {
		$('#bid-slider<?php echo $room['room_id']; ?>').slider().on('slideStart', function(ev){
    		originalVal = $('#bid-slider<?php echo $room['room_id']; ?>').data('slider').getValue();
		});

		$('#bid-slider<?php echo $room['room_id']; ?>').slider().on('slideStop', function(ev){
    		var newVal = $('#bid-slider<?php echo $room['room_id']; ?>').data('slider').getValue();
    		if(originalVal != newVal) {
        		alert('Value Changed!');
    		}
		});

	});
</script>

    <div class="row room">
<div class="roomColour">
<div class="col-sm-3 col-xs-12 roomImage">
	<img src="<?php echo $room['image']; ?>" alt="" />
</div>

<div class="col-sm-9 col-xs-12 roomContent">
	<div class="col-xs-12 features">
		<?php $features = explode(', ', $room['features']); foreach($features as $feature) { echo $feature; echo " - "; } ?>
	</div>
	<div class="col-sm-7 col-xs-12 roomInfo">
		<p class="roomTitle"><strong><?php echo $room['name']; ?></strong></p>
		<p class="roomText"><?php echo substr($room['room_info'], 0, 250); ?>...<br /><a href="#">More Info</a></p>
		
		<p><?php $male = $room['occupancy']; for ($i = 0; $i < $male; $i++) { ?> <i class="fa fa-male"></i> <?php } ?></p>
	</div>
	<div class="col-sm-5 col-xs-12 roomPricing">
		<div class="col-xs-12 roomPrice">
			<?php include 'inc/getRoomPrice.php'; ?>
			<p>
				<?php if ((isset($_SESSION['date_from'])) && (isset($_SESSION['date_to']))) : ?>
					<?php if($totalPrice == 0) { echo "<span>Book now or Propose a Bid. <i data-toggle='tooltip' title='This process takes minimum of 24 hours and is not a confirmed booking' data-placement='top' class='fa fa-info'></i></span>"; } else { echo "&pound;"; echo $totalPrice; echo " <span>for "; echo dateDiff($_SESSION['date_from'], $_SESSION['date_to']); echo " night(s)</span>"; } ?>
				<?php else : ?>
					<span>Please select your trip dates</span>
				<?php endif; ?>
			</p>
		</div>
		<div class="col-xs-6 roomButtons">
			<?php if(isset($_SESSION['date_from'])) : ?>
								<form action="book.php?hash=<?php echo $hash;?>" method="POST">
									<input name="book" type="submit" class="book-btn" value="Book Now!">
									<input type="hidden" name="date_from" value="<?php echo $_SESSION['date_from']; ?>">
									<input type="hidden" name="date_to" value="<?php echo $_SESSION['date_to']; ?>">
									<input type="hidden" name="room" value="<?php echo $room['room_id']; ?>">
									<input type="hidden" name="persons" value="<?php echo $_SESSION['persons']; ?>">
									<input type="hidden" name="board" value="<?php echo $_SESSION['board']; ?>">
								</form>
						  <?php else : ?>
								<p class="book-btn" data-toggle="tooltip" title="Choose your dates" data-placement="top" href="#">Book Now</p>
						  <?php endif; ?>
		</div>
		<div class="col-xs-6 roomButtons">
			<?php if(isset($_SESSION['user'])) : ?>
				<?php if(empty($room['reserve_price'])) : ?>
						<p href="#" data-toggle="modal" data-target="#modalSendBid<?php echo $room['room_id']; ?>" class="bid-btn send">Send Bid</p>			
				<?php else :?>
					<?php if(isset($_SESSION['date_from'])) : ?>
        					<p class="bid-btn" data-toggle="modal" data-target="#basicModal<?php echo $room['room_id']; ?>">BID</p>
					<?php else : ?>
						<p class="bid-btn" data-toggle="tooltip" title="Choose your dates" data-placement="top" href="#">BID</p>
					<?php endif; ?>
				<?php endif; ?>
			<?php else : ?>
				<p data-toggle="tooltip" title="Login or Register to bid!" data-placement="top" href="#" data-toggle="modal" data-target="#basicModal<?php echo $room['room_id']; ?>" class="bid-btn">BID</p>
			<?php endif; ?>
		</div>
	</div>
	</div>
<div style="clear:both; height:0px;"></div>
</div>
</div>



<?php endforeach ?>

<?php 
	$totalPrices = substr($totalPrices, 0, -2); 
	$arr=explode(",",$totalPrices);
	$_SESSION['totalPrices'] = $totalPrices;
?>

<style>
	@media (max-width:768px) {
		.modal .slider.slider-horizontal {
			display:none;
		}
		.modal .title {
			display:none;
		}
	}
</style>



           
    </div>
</div>

<script>
$('.show-more').on('click', function(){
    $('.more').toggleClass('active').siblings().removeClass('active');
});
</script>


                