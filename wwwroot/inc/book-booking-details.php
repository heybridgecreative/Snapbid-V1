<?php foreach($rows as $row) : ?>

<?php
	function dateDiff ($d1, $d2) {
  		return round(abs(strtotime($d1)-strtotime($d2))/86400);
	} 
	$nights = dateDiff($_SESSION['date_from'], $_SESSION['date_to']); 
?>

<div class="row" style=" padding:16px;">
<div class="col-xs-12">
<h2>Your Booking Details</h2>
<p>Thank you for booking through SnapBid!</p>
</div>
</div>
<div class="row booking" style="background-color:#e6e6e6; padding:30px 16px;">

	<div class="col-xs-12 col-sm-6">
		<div class="col-xs-6">
			<img style="max-height:150px; width:100%; height:auto" src="<?php echo $row['image']; ?>" alt="<?php echo $row['hotelname']; ?>" />
		</div>
		<div class="col-xs-6">
			<img style="max-height:150px; width:100%; height:auto" src="<?php echo $row['main_image']; ?>" alt="<?php echo $row['hotelname']; ?>" />
		</div>
		<div style="clear:both;"></div>
		<p>&nbsp;</p>
	<div class=" col-xs-12 price">
		<div>
		<p style="font-size:20px;"><strong>Hotel: </strong><br /><?php echo $row['hotelname']; ?></p>
		<p><strong>Room Name: </strong><br /><?php echo $row['name']; ?></p>
		<p><strong>Persons: </strong><br /><?php echo $row['book_persons']; ?></p>
		</div>
	</div>
	<p>&nbsp;</p>
			<div class="col-xs-6 price">
				<div>
					<p><strong>Check in: </strong><br /><?php echo $_SESSION['date_from'] ?></p>
				</div>
			</div>
			<div class="col-xs-6 price">
				<div>
					<p><strong>Check out: </strong><br /><?php echo $_SESSION['date_to'] ?></p>
				</div>
			</div>
			<div style="clear:both;"></div>
			<p>&nbsp;</p>
			<div class="col-xs-12 price">
				<div>
					<p><strong>Room Price: <br /></strong>&pound;<?php echo $row['book_price']; ?><strong>/night</strong></p>
				</div>
			</div>
		
	</div>


<div class="col-sm-6 col-xs-12 payment">
	<div class="col-xs-12">
		<?php $total = number_format(($row['book_price'] - $deposit),2); ?>
		<h4>You are required to pay a 10% deposit for the room</h4><h3>You are required to pay: &pound;<?php $deposit = number_format(($total/10),2); echo $deposit; ?> now</h3>
		<p>A total payment of &pound;<?php echo number_format($total-$deposit,2); ?> is required upon check in/out.</p>

	</div>
	<div class="col-xs-12">
		<p>&nbsp;</p>
			<img src="img/barclays.png" style="max-width:300px; width:100%;">
		<p>&nbsp;</p>
		<img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/169963/Visa.png'>
		<img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/169963/MC.png'>
		<img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/169963/Amex.png">
		<img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/169963/Discover.png'>
	</div>
	<div class="col-xs-12">
		<form name="payment" action="pay.php?hash=<?php echo $hash; ?>" method="POST">
			<label for="name">Name on Card</label><br />
			<input name="name" id="name" type="text"><br /><br />
			<label for="cardno">Card Number</label><br />
			<input name="cardno" id="cardno" type="text"><br /><br />
			<label for="expirydate">Expiry Date</label><br />
			<input name="expirydate" id="expirydate" type="text"><br /><br />
			<label for="cvc">CVC</label><br />
			<input name="cvc" id="cvc" type="text"><br /><br />
			<input type="hidden" name="bid_id" value="<?php echo $bid_id; ?>">
		</form>

			<a style="padding-left:20px; padding-right:20px;" class="bid-btn" href="success.php?hash=<?php echo $_GET['hash'];?>">Complete Payment</a>
	</div>
</div>

</div>

    <?php include 'inc/whymail.php'; ?>

<?php endforeach; ?>