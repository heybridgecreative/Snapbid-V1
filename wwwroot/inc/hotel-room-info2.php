<?php include 'inc/getroom.php' ?>



<div class="container room-info <?php if(isset($_SESSION['date_from'])) : ?>drop<? endif; ?>">
	<div class="room-btn">
	
		
	
		Show Rooms <?php if(isset($_SESSION['date_from'])) : ?><i class="fa fa-chevron-down"></i><? endif; ?>
	</div>
    <div class="row">
        <div class="col-xs-12 room">
            <table class="responsivetable">
                <tbody>
                    <tr class="hotel-bookroom-title">
                        <th colspan="6">Book your room at <?php echo $row['hotelname']; ?></th>
                    </tr>
                    <tr class="hotel-column-head">
                        <th>Room Type</th>
                        <th>MAX</th>
                        <th>Room Information</th>
						<?php if(isset($_SESSION['date_from'])) : ?>
						<th class="price">
								Price
						</th>
						  <?php endif; ?>
                        <th>Book Now</th>
                        <th>Bid Your Price</th>
                    </tr>


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
    $('#bid-slider<?php echo $room['room_id']; ?>').on("slide", function(slideEvt) {
	   $("#bid-sliderVal<?php echo $room['room_id']; ?>").text(slideEvt.value);
	   $("#bid-sliderVal<?php echo $room['room_id']; ?>").slider('setValue', value)
    });
    $('#bid-slider<?php echo $room['room_id']; ?>').slider();
	});
</script>

                    <tr class="hotel-book-row">
                        <td class="room-type">
                            <img src="<?php echo $room['image']; ?>" alt="" />
                            <p><strong><?php echo $room['name']; ?></strong></p>
                            <p><?php echo $room['features']; ?></p>
                        </td>
                        <td class="room-max">
		<?php
			$male = $room['occupancy'];
			for ($i = 0; $i < $male; $i++) {
		?>
			<i class="fa fa-male"></i>
		<?php
			}
		?></td>
                        <td class="room-information">
                            <p class="more">
                                <?php echo $room['room_info']; ?>
                            </p>
                            <p class="show-more">Show More Room Information</p>
                        </td>
                            <?php if(isset($_SESSION['date_from'])) : ?>
								<td class="price">
									<?php include 'inc/getRoomPrice.php'; ?>
									</p>£<?php echo $totalPrice; ?></p>
								</td>
						  <?php endif; ?>
                            		
                        
                        <td class="room-book">
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
                            		
                        </td>
                        <td class="room-bid">
                            
			<?php if(isset($_SESSION['user'])) : ?>
				<?php if(empty($room['reserve_price'])) : ?>
						<p data-toggle="tooltip" title="Bidding unavailable" data-placement="top" href="#" data-toggle="modal" data-target="#basicModal<?php echo $room['room_id']; ?>" class="bid-btn" style="opacity:0.5;">BID</p>			
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
                            
                        </td>
                    </tr>
	<?php include 'inc/bid-modal.php' ?>

<?php $totalPrices .= $totalPrice . "-" . $room['room_id'] . ", "; ?>

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

<script src="js/bootstrap-slider.js" type="text/javascript"></script>


                </tbody>
            </table>
        </div>
    </div>
</div>

<script>
$('.show-more').on('click', function(){
    $('.more').toggleClass('active').siblings().removeClass('active');
});
</script>


                