<?php

$lottoqry = 'SELECT * FROM snapbid_lotto_entries WHERE username = "'.$_SESSION['username'].'"';
$result_select = mysql_query($lottoqry) or die(mysql_error());
$rows = array();
while($row = mysql_fetch_array($result_select))
$rows[] = $row;

?>
<div class="lotto-container">
	<div class="lotto">
		<h2>SnapBid Lotto</h2>
		<p>Be in it, to win it!</p>
	
	
<?php if(isset($_SESSION['username'])) : ?>
	<?php if(!mysql_num_rows(mysql_query($lottoqry)) ) : ?>
		<div class="numbers">
			<p>You are yet to have purchased a ticket for this weeks SnapBid Lotto</p>
			<p class="bid-btn" style="padding:7px 17px;"><a href="getlotto.php">Get Ticket</a></p>
		</div>
	<?php else : ?>
		<div class="numbers">
			<p class="status">You have already entered the lotto for this week, here are your numbers:</p>
			<div class="container">
				<?php foreach($rows as $row) : ?>
					<div class="row">
						<div class="ticket col-xs-12"> 
							<?php $numbers = explode(',',$row['numbers']); ?>
							<h3>
								<?php foreach($numbers as $number) : ?>
									<div id="number" class="number"><?php echo $number; ?></div>
								<?php endforeach ?> 
								<div class="bonus fa fa-star"><?php echo $row['bonus']; ?></div>
							</h3>
						</div>
					</div>
				<?php endforeach; ?>
			</div>
		</div>
		<h2>Good Luck!</h2>
	<?php endif; ?>
<?php else : ?>
		<div class="numbers">
			<p class="status">Please <a href="user.php">login</a> or <a href="register.php">register</a> to view the SnapBid Lotto!</p>
		</div>
<?php endif; ?>

	</div>
</div>

