

<h2>Previous Bids</h2>
<p>Here are a list of your previous bids and their status</p>

<div class="bid-status">
    <div class="col-xs-12 col-sm-6">
        <h3>Your Previous Winning Bids</h3>
        <table>
            <tr>
			   <th>Bid ID</th>
                <th>Hotel And Date</th>
                <th>Your Bid</th>
                <th>Date of Bid</th>
            </tr>
			<?php
				include_once 'dbconnect.php';

				$query = "SELECT * FROM snapbid_bids 
					JOIN snapbid_bidstatus ON snapbid_bidstatus.bidstatus_id = snapbid_bids.bid_status_id 
					JOIN snapbid_rooms ON snapbid_bids.bid_room_id = snapbid_rooms.room_id
					JOIN snapbid_hotels ON snapbid_rooms.hotel_id = snapbid_hotels.id
					WHERE bid_user_name='".$_SESSION['username']."' AND bid_status_id = 1 ORDER BY bid_id DESC";
				$prevcheck = mysql_query($query);
				$prevres = mysql_query($query);

				if(mysql_fetch_array($prevcheck) == 0) {
					echo "<tr><td colspan='3'>";
					echo "Start your SnapBid journey and search for your hotel";
					echo "</td></tr>";
				} else {
					echo "";
				}

				while($prev = mysql_fetch_array($prevres)) {	
			?>

            <tr>
                <td><?php echo $prev['bid_id']; ?></td>
                <td><span style="font-size:10px;"><?php echo $prev['hotelname']; ?></span><br /><?php echo $prev['name']; ?><br /><span style="font-size:12px;"><?php echo $prev['bid_date_from']; ?> - <?php echo $prev['bid_date_to']; ?></span></td>
                <td>£<?php echo $prev['bid_bid_price']; ?></td>
                <td><?php echo $prev['date_bidded']; ?></td>
            </tr>

			<?php } 
				
			 ?>
        </table>
    </div>
    
    <div class="col-xs-12 col-sm-6">

        <table>
            <h3>Current/Previous Bid Statuses</h3>
            <tr>
                <th>Hotel And Date</th>
                <th>Your Bid</th>
                <th>Action</th>
            </tr>
            <?php
				$query2 = "SELECT * FROM snapbid_bids 
					JOIN snapbid_bidstatus ON snapbid_bidstatus.bidstatus_id = snapbid_bids.bid_status_id 
					JOIN snapbid_rooms ON snapbid_bids.bid_room_id = snapbid_rooms.room_id
					JOIN snapbid_hotels ON snapbid_rooms.hotel_id = snapbid_hotels.id
					WHERE bid_user_name='".$_SESSION['username']."' AND bid_status_id != 1 ";
				$prevcheck2 = mysql_query($query2);
				$prevres2 = mysql_query($query2);

				if(mysql_fetch_array($prevcheck2) == 0) {
					echo "<tr><td colspan='3'>";
					echo "You haven't made any bids yet!";
					echo "</td></tr>";
				} else {
					echo "";
				}

				while($prev2 = mysql_fetch_array($prevres2)) {	
			?>        
			
			<tr>
                <td><span style="font-size:10px;"><?php echo $prev2['hotelname']; ?></span><br /><?php echo $prev2['name']; ?><br /><span style="font-size:12px;"><?php echo $prev2['bid_date_from']; ?> - <?php echo $prev2['bid_date_to']; ?></span></td>
                <td>£<?php echo $prev2['bid_bid_price']; ?></td>
                <td>
			 	<?php echo $prev2['bidstatus_name']; ?>
				</td>
            </tr>

			<?php } 
				
			 ?>
	
		</table>
    </div>
</div>