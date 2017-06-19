
<?php include 'inc/getroom.php'; ?>
	
	<div class="modal fade" id="modalSendBid<?php echo $room['room_id'] ?>" tabindex="-1" role="dialog" aria-labelledby="modalSendBid<?php echo $room['room_id'] ?>" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                  &times;
            </button>
            <h4 class="modal-title" id="myModalLabel">Send a Bid to the Hotel!</h4>
			<p>This process takes minimum of 24 hours and is not a confirmed booking</p>
         </div>
         <div class="modal-body">

			<form id="sendbid-form" method="POST" action="hotel.php?hotel_id=<?php echo $_GET['hotel_id']; ?>&bid=sent">
				<label for="room"><strong>Room Type: </strong></label><input id="room" value="<?php echo $room['name'] ?>" disabled name="room"><br />
				<label for="checkin"><strong>Date of Check In: </strong></label><input value="<?php echo $_SESSION['date_from']; ?>" disabled id="checkin" name="checkin"><br />
				<label for="checkout"><strong>Date of Check Out: </strong></label><input value="<?php echo $_SESSION['date_to']; ?>" disabled id="checkout" name="checkout"><br />
				<label for="person"><strong>Person(s): </strong></label><input value="<?php echo $_SESSION['persons']; ?>" disabled id="person" name="persons"><br /><br />
				<label for="price" style="font-size:14px;"><strong>Bid for Entire Stay</strong></label><br /><span style="font-size:18px;">&pound;</span><input style="padding:10px; border:1px solid #ccc; margin-left:8px; font-size:20px" id="price" value="" name="price"><br />
				<input name="sendbid" type="submit" class="bid-btn" value="Send Bid">   <br />
				<div class="book-btn terms"><input required type="checkbox" style="height:16px; width:30px;"><label>Please Accept the Terms and Conditions</label></div>
			</form>
          </div>
    </div>
  </div>
</div>



