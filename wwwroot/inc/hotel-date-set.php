<?php
	$from = $_SESSION['date_from'];
	$fromDate = date('d-m-Y', strtotime($from));
	$fromDate = str_replace('-', '/', $fromDate);

	$to = $_SESSION['date_to'];
	$toDate = date('d-m-Y', strtotime($to));
	$toDate = str_replace('-', '/', $toDate);

function dateDiff ($d1, $d2) {
  return round(abs(strtotime($d1)-strtotime($d2))/86400);
} 



if($_SESSION['board'] = 1) {
	$board = "Bed & Breakfast";
} 
if($_SESSION['board'] = 2) {
	$board = "Half Board";
} 
if($_SESSION['board'] = 3) {
	$board = "Full Board";
} 
if($_SESSION['board'] = 4) {
	$board = "All Inclusive";
}
?>

<?php if($_GET['bid'] == "sent") : ?>
<div class="container search disable">
    <div class="row">
		<div class="col-xs-12">
			<div class="col-xs-12 notification" style="background-color:#33B935;">
				<i class="fa fa-check-circle-o">&nbsp;</i>  
			  <p>
				Your bid proposal has been sent, please be patient! This hotel aims to respond to proposed bids within 24 hours!
			  </p>
			</div>
		</div>
    </div>
</div>
<?php endif; ?>

<p>&nbsp;</p>

<div class="container search disable">
    <div class="row">
		<div class="col-xs-12">
			<div class="col-xs-12 notification">
				<i class="fa fa-check-circle-o">&nbsp;</i>  
			  <p>
				Thank you for checking availability - You have selected a room for <?php echo $_SESSION['persons']; ?> <?php if($_SESSION['persons'] > 1) { echo "people"; } else { echo "person"; } ?> to stay <?php echo $fromDate; ?> for <?php echo dateDiff($_SESSION['date_from'], $_SESSION['date_to']); ?> night(s).
			  </p>
			</div>
		</div>
    </div>
</div>
<p>&nbsp;</p>






